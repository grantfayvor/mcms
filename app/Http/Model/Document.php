<?php
namespace App\Http\Model;

class Document {

    private $id;
    private $name;
    private $path;
    private $topic;
    private $body;
    private $author;
    private $createdAt;
    private $updatedAt;
    private $versions;
    private $tags;
    private $editors;
    private $viewers;

    public function __construct($name, $path, $topic, $body, $author, $tags){
        $this->name = $name;
        $this->path = $path;
        $this->topic = $topic;
        $this->body = $body;
        $this->author = $author;
        $this->tags = $tags;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    public function setPath($path){
        $this->path = $path;
    }

    public function getPath(){
        return $this->path;
    }

    public function setTopic($topic){
        $this->topic = $topic;
    }

    public function getTopic(){
        return $this->topic;
    }

    public function setBody($body){
        $this->body = $body;
    }

    public function getBody(){
        return $this->body;
    }

    public function setAuthor($author){
        $this->author = $author;
    }

    public function getAuthor(){
        return $this->author;
    }

    public function setCreatedAt($createdAt){
        $this->createdAt = $createdAt;
    }

    public function getCreatedAt(){
        return $this->createdAt;
    }

    public function setUpdatedAt($updatedAt){
        $this->updatedAt = $updatedAt;
    }

    public function getUpdatedAt(){
        return $this->updatedAt;
    }

    public function setVersions($versions){
        $this->versions = $versions;
    }

    public function getVersions(){
        return $this->versions;
    }

    public function setTags($tags){
        $this->tags = $tags;
    }

    public function getTags(){
        return $this->tags;
    }

    public function setEditors($editors){
        $this->editors = $editors;
    }

    public function getEditors(){
        return $this->editors;
    }

    public function setViewers($viewers){
        $this->viewers = $viewers;
    }

    public function getViewers(){
        return $this->viewers;
    }
}