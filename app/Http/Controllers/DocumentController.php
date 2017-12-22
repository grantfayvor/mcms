<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\UploadedFile;
use App\Http\Service\DocumentService;
use App\Http\Model\Document;
use App\Http\Model\Activity;

class DocumentController extends Controller
{
    private $documentService;

    public function __construct(DocumentService $documentService){
        $this->middleware('auth');
        $this->documentService = $documentService;
    }

    public function createDocument(Request $request){
        $topic = $request->input('topic');
        $body = $request->input('body');
        $tags = $request->input('tags');
        $editors = $request->input('editors');
        $user = $request->user();
        $author = $user->first_name ." " .$user->last_name;
        $name = $topic .".htm";
        $path = $user->username ."/" .$name;
        $document = new Document($name, $path, $topic, $body, $author, $tags);
        $document->setEditors($editors);
        return response()->json(array("result" => $this->documentService->createDocument($document, $user->username)));
        // return response()->json(array("result" => print_r($document)));
    }

    public function updateDocument(Request $request){
        $id = $request->input('id');
        $topic = $request->input('topic');
        $body = $request->input('body');
        $tags = $request->input('tags');
        $author = $request->input('author');
        $name = $request->input('name');
        $path = $request->input('path');
        // $editors = $request->input('editors');
        $username = $request->user()->username;
        $user = $request->user()->first_name ." " .$request->user()->last_name;
        $document = new Document($name, $path, $topic, $body, $author, $tags);
        $document->setId($id);
        $document->setVersions($request->input('versions'));
        // $document->setEditors($editors);
        return response()->json(array("result" => $this->documentService->updateDocument($document, $username, $user)));
    }

    public function uploadDocument(Request $request){
        $user = $request->user();
        $username = $user->username;
        $author = $user->first_name ." " .$user->last_name;
        $file = $request->file('file');
        $name = $file->getClientOriginalName();
        $path = $username ."/" .$name;
        $document = new Document($name, $path, $name, $file, $author, array());
        $document->setVersions(1);
        // if($file->getExtension() == ".jpg" || $file->getExtension() == ".png" || $file->getExtension() == ".gif")
        return response()->json(array("result" => $this->documentService->uploadDocument($document, $author)));
    }

    public function getDocuments(Request $request){
        $user = $request->user();
        $author = $user->first_name ." " .$user->last_name;
        $accountType = $user->account_type;
        return response()->json($this->documentService->getDocumentDetails($author, $accountType));
    }

    public function getMyDocuments(Request $request){
        $user = $request->user();
        $author = $user->first_name ." " .$user->last_name;
        return response()->json($this->documentService->getMyDocuments($author));
    }

    public function openDocument(Request $request){
        $path = $request->input('path');
        return response()->json(array("body" => $this->documentService->openDocument($path)));
    }

    public function downloadDocument(Request $request){
        $path = $request->input('path');
        return response()->download($this->documentService->getFileURL($path));
    }

    public function deleteDocument(Request $request){
        $path = $request->input('path');
        $doc = $this->documentService->findDocumentByPath($path);
        $id = $request->input('id') !== null ? $request->input('id') : $doc[0]['id'];
        $topic = $request->input('topic') !== null ? $request->input('topic') : $doc[0]['topic'];
        $body = $request->input('body');
        $tags = $request->input('tags') !== null ? $request->input('tags') : $doc[0]['tags'];
        $author = $request->input('author') !== null ? $request->input('author') : $doc[0]['author'];
        $name = $request->input('name') !== null ? $request->input('name') : $doc[0]['name'];
        $username = $request->user()->username;
        $user = $request->user()->first_name ." " .$request->user()->last_name;
        $document = new Document($name, $path, $topic, $body, $author, $tags);
        $document->setId($id);
        return response()->json(array("result" => $this->documentService->deleteDocument($document, $user)));
    }

    public function getAllTags(){
        return response()->json($this->documentService->getAllTags());
    }

    public function setViewers(Request $request){
        $id = $request->input('id');
        $author = $request->input('author');
        $name = $request->input('name');
        $path = $request->input('path');
        $viewers = $request->input('updatedViewers');
        $user = $request->user()->first_name ." " .$request->user()->last_name;
        $details = "updated viewership for - " .$name;
        $activity = new Activity($user, $name, $path, $details);
        $activity->setDocumentAuthor($author);
        return response()->json(array("result" => $this->documentService->setViewers($path, $viewers, $id, $activity)));
        // return response()->json(array($path, $viewers));
    }
}
