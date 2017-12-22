<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Service\ActivityService;

class ActivityController extends Controller
{
    private $activityService;

    public function __construct(ActivityService $activityService){
        $this->middleware('auth');
        $this->activityService = $activityService;
    }

    public function getUserActivityLog(Request $request){
        $currentUser = $request->user();
        $user = $currentUser->first_name ." " .$currentUser->last_name;
        return response()->json($this->activityService->getUserActivities($user));
    }
}
