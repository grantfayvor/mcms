<?php
namespace App\Http\Repository;

use App\Http\Config\Database;
use App\Http\Model\Activity;

class ActivityRepository {

    private $database;

	public function __construct() {
		$this->database = new Database();
	}

    public function saveActivity(Activity $activity){
        $user = $this->database->escapeString($activity->getUser());
        $documentName = $this->database->escapeString($activity->getDocumentName());
        $documentPath = $this->database->escapeString($activity->getDocumentPath());
        $documentAuthor = $this->database->escapeString($activity->getDocumentAuthor());
        $details = $this->database->escapeString($activity->getDetails());
        $timeStamp = $this->database->escapeString($activity->getTimeStamp());
        $sql = "INSERT INTO activities(user, document_name, document_path, document_author, details, time_stamp) VALUES('{$user}', '{$documentName}', '{$documentPath}', '{$documentAuthor}', '{$details}', NOW())";
        return $this->database->query($sql);
    }

    public function getActivityLog($user){
        $sql = "SELECT * FROM activities WHERE user = '{$user}' OR document_author = '{$user}' ORDER BY time_stamp DESC";
        return $this->database->query($sql);
    }
}