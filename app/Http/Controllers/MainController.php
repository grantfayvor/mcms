<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Service\InstitutionService;

use Auth;

class MainController extends Controller
{
    private $institutionService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(InstitutionService $institutionService)
    {
        $this->middleware('auth');
        $this->institutionService = $institutionService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $institution = Auth::user()->institution;
        $details = $this->institutionService->getInstitutionLogoAndSkin($institution)[0];
        return view('dashboard', ['username' => Auth::user()->username, 'department' => Auth::user()->department, 'accountType' => Auth::user()->account_type, 'institution' => $institution, 'logo' => $details['logo'], 'skin' => $details['skin'], 'photo' => Auth::user()->image_location]);
    }

    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function createDocument(){
        $institution = Auth::user()->institution;
        $details = $this->institutionService->getInstitutionLogoAndSkin($institution)[0];
        return view('create', ['username' => Auth::user()->username, 'department' => Auth::user()->department, 'accountType' => Auth::user()->account_type, 'institution' => $institution, 'logo' => $details['logo'], 'skin' => $details['skin'], 'photo' => Auth::user()->image_location]);
    }

    public function editDocument(){
        return view('edit');
    }

    public function uploadDocument(){
        $institution = Auth::user()->institution;
        $details = $this->institutionService->getInstitutionLogoAndSkin($institution)[0];
        return view('upload', ['username' => Auth::user()->username, 'department' => Auth::user()->department, 'accountType' => Auth::user()->account_type, 'institution' => $institution, 'logo' => $details['logo'], 'skin' => $details['skin'], 'photo' => Auth::user()->image_location]);
    }

    public function documentsList(){
        return view('documents');
    }

    public function openDocument(){
        return view('view');
    }

    public function userActivities(){
        $institution = Auth::user()->institution;
        $details = $this->institutionService->getInstitutionLogoAndSkin($institution)[0];
        return view('activity', ['username' => Auth::user()->username, 'department' => Auth::user()->department, 'accountType' => Auth::user()->account_type, 'institution' => $institution, 'logo' => $details['logo'], 'skin' => $details['skin'], 'photo' => Auth::user()->image_location]);
    }

    public function userDocuments(){
        $institution = Auth::user()->institution;
        $details = $this->institutionService->getInstitutionLogoAndSkin($institution)[0];
        return view('documents', ['username' => Auth::user()->username, 'department' => Auth::user()->department, 'accountType' => Auth::user()->account_type, 'institution' => $institution, 'logo' => $details['logo'], 'skin' => $details['skin'], 'photo' => Auth::user()->image_location]);
    }
}
