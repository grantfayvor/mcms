<?php
namespace App\Http\Repository;

use App\Http\Config\Database;
use App\Http\Model\Document;

class DocumentRepository {

	private $database;

	public function __construct(Database $database) {
		$this->database = $database;
	}

    public function saveDocumentDetails(Document $document){
        $name = $this->database->escapeString($document->getName());
        $path = $this->database->escapeString($document->getPath());
        $topic = $this->database->escapeString($document->getTopic());
        $author = $this->database->escapeString($document->getAuthor());
        $versions = $this->database->escapeString($document->getVersions());
        if(!empty($document->getEditors())){
            $editors = implode(", ", $document->getEditors());
            $viewers = "Authors";
        } else {
            $editors = "None";
            $viewers = "Creator";
        }
        $tags = base64_encode(serialize($document->getTags()));
        $sql = "INSERT INTO documents(name, path, topic, author, editors, versions, tags, viewers, created_at, updated_at) VALUES('{$name}', '{$path}', '{$topic}', '{$author}', '{$editors}', '{$versions}', '{$tags}', '{$viewers}', NOW(), NOW())";
        return $this->database->query($sql);
    }

    public function updateDocumentDetails(Document $document){
        $id = $this->database->escapeString($document->getId());
        $name = $this->database->escapeString($document->getName());
        $path = $this->database->escapeString($document->getPath());
        $topic = $this->database->escapeString($document->getTopic());
        $versions = $this->database->escapeString($document->getVersions());
        $tags = base64_encode(serialize($document->getTags()));
        $sql = "UPDATE documents SET topic = '{$topic}', path = '{$path}', versions = '{$versions}', tags = '{$tags}', updated_at = NOW() WHERE name = '{$name}' AND id = '{$id}'";
        return $this->database->query($sql);
    }

    public function deleteDocumentDetails($name, $id){
        $name = $this->database->escapeString($name);
        $id = $this->database->escapeString($id);
        $sql = "DELETE FROM documents WHERE name = '{$name}' AND id = '{$id}'";
        return $this->database->query($sql);
    }

    public function getDocumentDetails($author, $accountType){
        $accountType = $accountType ."s";
        $sql = "SELECT * FROM documents WHERE author = '{$author}' OR viewers = 'All' OR viewers = '{$accountType}' OR editors LIKE '%$author%' ORDER BY updated_at DESC";
        return $this->database->query($sql);
    }

    public function getMyDocuments($author){
        $sql = "SELECT * FROM documents WHERE author = '{$author}' ORDER BY updated_at DESC";
        return $this->database->query($sql);
    }

    public function getAllDocumentPathsAndTags(){
        $sql = "SELECT path, tags FROM documents";
        return $this->database->query($sql);
    }

    public function findDocumentByPath($path){
        $path = $this->database->escapeString($path);
        $sql = "SELECT * FROM documents WHERE path = '{$path}'";
        return $this->database->query($sql);
    }

    public function setViewers($path, $viewers, $id){
        $path = $this->database->escapeString($path);
        $viewers = $this->database->escapeString($viewers);
        $id = $this->database->escapeString($id);
        $sql = "UPDATE documents SET viewers = '{$viewers}' WHERE path = '{$path}' AND id = '{$id}'";
        return $this->database->query($sql);
        // return $viewers;
    }

    public function getAllTags(){
        $sql = "SELECT * FROM tags";
        return $this->database->query($sql);
    }

    public function countTags(){
        $sql = "SELECT COUNT(*) FROM tags";
        return $this->database->query($sql);
    }

}