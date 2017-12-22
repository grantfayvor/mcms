<?php
namespace App\Http\Service;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Phpml\Classification\KFirefly;
use Phpml\Dataset\ArrayDataset;
use Phpml\FeatureExtraction\TokenCountVectorizer;
use Phpml\Tokenization\WordTokenizer;
use Phpml\CrossValidation\StratifiedRandomSplit;
use Phpml\FeatureExtraction\TfIdfTransformer;
use App\Http\Repository\DocumentRepository;
use App\Http\Model\Document;
use App\Http\Model\Activity;

require_once('simple_html_dom.php');

class DocumentService {

    private $repository;
	private $activityService;

	public function __construct(DocumentRepository $documentRepository, ActivityService $activityService) {
		$this->repository = $documentRepository; 
		$this->activityService = $activityService;
	}

    public function createDocument(Document $document, $username){
		if(!Storage::disk('public')->exists($document->getPath())){
        	Storage::disk('public')->put($document->getPath(), $document->getBody());
			$tags = $document->getTags();
			$tag = $this->classify($document->getBody());
			if(!in_array($tag, $tags)){
				array_push($tags, $tag);
				$document->setTags($tags);
			}
        	$document->setVersions(1);
			$details = "created new document - " .$document->getTopic();
			$activity = new Activity($document->getAuthor(), $document->getTopic(), $document->getPath(), $details);
			$activity->setDocumentAuthor($document->getAuthor());
			$this->activityService->saveUserActivity($activity);
        	return $this->repository->saveDocumentDetails($document);
		} else {
			return $this->updateDocument($document, $username, $document->getAuthor());
		}
    }

	public function updateDocument(Document $document, $username, $user){
		$tags = $document->getTags();
		$tag = $this->classify($document->getBody());
		if(!in_array($tag, $tags)){
			array_push($tags, $tag);
			$document->setTags($tags);
		}
		$document->setVersions((int) $document->getVersions() + 1);
		$path = $username ."/" ."V" .$document->getVersions() ."_" .$document->getName();
		$document->setPath($path);
		Storage::disk('public')->put($path, $document->getBody());
		$details = "updated document - " .$document->getTopic();
		$activity = new Activity($user, $document->getTopic(), $path, $details);
		$activity->setDocumentAuthor($document->getAuthor());
		$this->activityService->saveUserActivity($activity);
		return $this->repository->updateDocumentDetails($document);
	}

	public function deleteDocument(Document $document, $user){
		Storage::disk('public')->delete($document->getPath());
		$details = "deleted document - " .$document->getTopic();
		$activity = new Activity($user, $document->getTopic(), $document->getPath(), $details);
		$activity->setDocumentAuthor($document->getAuthor());
		$this->activityService->saveUserActivity($activity);
		return $this->repository->deleteDocumentDetails($document->getName(), $document->getId());
	}

	public function uploadDocument(Document $document, $author){
		Storage::disk('public')->putFileAs('', $document->getBody(), $document->getPath());
		$doc = Storage::disk('public')->get($document->getPath());
		$tags = $document->getTags();
		array_push($tags, $this->classify($document->getBody()));
		$document->setTags($tags);
		$details = "uploaded document - " .$document->getTopic();
		$activity = new Activity($author, $document->getTopic(), $document->getPath(), $details);
		$activity->setDocumentAuthor($author);
		$this->activityService->saveUserActivity($activity);
		return $this->repository->saveDocumentDetails($document);
	}

	public function downloadDocument($path){
		return Storage::disk('public')->get($path);
	}

	public function openDocument($path){
		return Storage::disk('public')->get($path);
	}

	public function getFileURL($path){
		return Storage::disk('public')->getDriver()->getAdapter()->applyPathPrefix($path);
	}

    public function getDocumentDetails($author, $accountType){
        $documents = array();
		$result = $this->repository->getDocumentDetails($author, $accountType);
		$i = 0;
		while($i < $result->num_rows){
			$row = $result->fetch_row();
			$row_array['id'] = $row[0];
			$row_array['name'] = $row[1];
			$row_array['path'] = $row[2];
			$row_array['topic'] = $row[3];
			$row_array['author'] = $row[4];
			$editors = explode(", ", $row[5]);
			if(in_array($author, $editors)){
				$row_array['editor'] = true;
			}
			$row_array['editors'] = $editors;
			$row_array['versions'] = $row[6];
			$row_array['tags'] = unserialize(base64_decode($row[7]));
			$row_array['viewers'] = $row[8];
			$row_array['createdAt'] = $row[9];
            $row_array['updatedAt'] = $row[10];
			$row_array['size'] = Storage::disk('public')->size($row[2]);
			if("Creator" == $row_array['viewers'] && $author == $row_array['author']){
				array_push($documents, $row_array);
			} elseif("Creator" != $row_array['viewers']){
				array_push($documents, $row_array);
			} else{
				continue;
			}
			$i++;
		}
        return $documents;
    }

	public function getMyDocuments($author){
        $documents = array();
		$result = $this->repository->getMyDocuments($author);
		$i = 0;
		while($i < $result->num_rows){
			$row = $result->fetch_row();
			$row_array['id'] = $row[0];
			$row_array['name'] = $row[1];
			$row_array['path'] = $row[2];
			$row_array['topic'] = $row[3];
			$row_array['author'] = $row[4];
			$row_array['editors'] = explode(", ", $row[5]);
			/*if(in_array($author, $editors)){
				$row_array['editor'] = true;
			}*/
			$row_array['versions'] = $row[6];
			$row_array['tags'] = unserialize(base64_decode($row[7]));
			$row_array['viewers'] = $row[8];
			$row_array['createdAt'] = $row[9];
            $row_array['updatedAt'] = $row[10];
			$row_array['size'] = Storage::disk('public')->size($row[2]);
			array_push($documents, $row_array);
			$i++;
		}
        return $documents;
    }

	public function getDocumentPathsAndTags(){
		$paths = array();
		$result = $this->repository->getAllDocumentPathsAndTags();
		$i = 0;
		while($i < $result->num_rows){
			$row = $result->fetch_row();
			$row_array['path'] = $row[0];
			$row_array['tags'] = unserialize(base64_decode($row[1]));
			array_push($paths, $row_array);
			$i++;
		}
		return $paths;
	}

	public function findDocumentByPath($path){
		$document = array();
		$result = $this->repository->findDocumentByPath($path);
		$i = 0;
		while($i < $result->num_rows){
			$row = $result->fetch_row();
			$row_array['id'] = $row[0];
			$row_array['name'] = $row[1];
			$row_array['path'] = $row[2];
			$row_array['topic'] = $row[3];
			$row_array['author'] = $row[4];
			$row_array['versions'] = $row[6];
			$row_array['tags'] = unserialize(base64_decode($row[7]));
			$row_array['viewers'] = $row[8];
			$row_array['createdAt'] = $row[9];
            $row_array['updatedAt'] = $row[10];
			array_push($document, $row_array);
			$i++;
		}
        return $document;
	}

	public function setViewers($path, $viewers, $id, $activity){
		$this->activityService->saveUserActivity($activity);
		return $this->repository->setViewers($path, $viewers, $id);
	}

	public function getAllTags(){
		$tags = array();
		$result = $this->repository->getAllTags();
		$i = 0;
		while($i < $result->num_rows){
			$row = $result->fetch_row();
			$row_array['name'] = $row[1];
			array_push($tags, $row_array);
			// array_push($tags, $row[1]);
			$i++;
		}
		return $tags;
	}

	public function countTags(){
		$result = $this->repository->getAllTags();
		return (int) $result->num_rows;
	}

	public function classify($document){
		$text = str_get_html($document)->plaintext;
		$classifier = new KFirefly();
		$vectorizer = new TokenCountVectorizer(new WordTokenizer());
		$tfIdfTransformer = new TfIdfTransformer();
		$trainingDoc = $this->getDocumentPathsAndTags();
		$trainingDocuments = array();
		$labels = array();
		for($i=0; $i < count($trainingDoc); $i++){
			if(Storage::disk('public')->exists($trainingDoc[$i]['path'])){
				$doc = Storage::disk('public')->get($trainingDoc[$i]['path']);
            	$htmlText = str_get_html($doc)->plaintext;
				for($j = 0; $j < count($trainingDoc[$i]['tags']); $j++){ 
					array_push($trainingDocuments, $htmlText);
					array_push($labels, $trainingDoc[$i]['tags'][$j]);
            	}
			}
		}
		array_push($trainingDocuments, $text);
		$vectorizer->fit($trainingDocuments);
		$vectorizer->transform($trainingDocuments);
		$tfIdfTransformer->fit($trainingDocuments);
		$tfIdfTransformer->transform($trainingDocuments);
		$predictDocument = array_pop($trainingDocuments);
		$dataSet = new ArrayDataset($trainingDocuments, $labels);
		$randomSplit = new StratifiedRandomSplit($dataSet, 0.1);
		$classifier->train($randomSplit->getTrainSamples(), $randomSplit->getTrainLabels());
		return $classifier->predict($predictDocument);
	}
}