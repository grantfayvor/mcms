<?php
namespace App\Http\Service;

use App\Http\Repository\ActivityRepository;
use App\Http\Model\Activity;

class ActivityService {

    private $repository;

	public function __construct(ActivityRepository $activityRepository) {
		$this->repository = $activityRepository; 
	}

    public function saveUserActivity(Activity $activity){
        return $this->repository->saveActivity($activity);
    }

    public function getUserActivities($user){
        $activities = array();
		$result = $this->repository->getActivityLog($user);
		$i = 0;
		while($i < $result->num_rows){
			$row = $result->fetch_row();
			$row_array['user'] = $row[1];
			$row_array['documentName'] = $row[2];
			$row_array['documentPath'] = $row[3];
			$row_array['documentAuthor'] = $row[4];
            $row_array['details'] = $row[5];
            $row_array['timeStamp'] = $row[6];
			array_push($activities, $row_array);
			$i++;
		}
		return $activities;
    }
}