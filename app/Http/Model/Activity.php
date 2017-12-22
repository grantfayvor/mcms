<?php
namespace App\Http\Model;

class Activity {

    private $id;
    private $user;
    private $documentName;
    private $documentPath;
    private $documentAuthor;
    private $details;
    private $timeStamp;

    public function __construct($user, $documentName, $documentPath, $details){
        $this->user = $user;
        $this->documentName = $documentName;
        $this->documentPath = $documentPath;
        $this->details = $details;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setUser($user){
		$this->user = $user;
	}

	public function getUser(){
		return $this->user;
	}

    public function setDocumentName($documentName){
        $this->documentName = $documentName;
    }

    public function getDocumentName(){
        return $this->documentName;
    }

    public function setDocumentPath($documentPath){
        $this->documentPath = $documentPath;
    }

    public function getDocumentPath(){
        return $this->documentPath;
    }

    public function setDocumentAuthor($documentAuthor){
        $this->documentAuthor = $documentAuthor;
    }

    public function getDocumentAuthor(){
        return $this->documentAuthor;
    }

    public function setDetails($details){
        $this->details = $details;
    }

    public function getDetails(){
        return $this->details;
    }

    public function setTimeStamp($timeStamp){
        $this->timeStamp = $timeStamp;
    }

    public function getTimeStamp(){
        return $this->timeStamp;
    }
}