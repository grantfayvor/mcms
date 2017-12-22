<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Service\UserService;
use App\Http\Model\User;

class UserController extends Controller
{
    private $userService;
    private $user;

    public function __construct(UserService $userService){
        $this->userService = $userService;
    }

    public function login(Request $request){
        $username = $request->input('username');
        $password = $request->input('password');
        if($this->userService->authenticate($username, $password)){
            return redirect()->intended('/');
        } else {
            return back()->withInput();
        }
    }

    public function register(Request $request){
        $username = $request->input('username');
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $department = $request->input('department');
        $password = $request->input('password');
        $institution = $request->input('institution');
        $photo = $request->file('photo');
        $account = preg_split('[-]', $department);
        $department = trim($account[0]);
        $accountType = trim($account[1]);
        $imageLocation = "profile/" .$username .".jpg";
        $user = new User($firstName, $lastName, $username, $department, $password);
        $user->setAccountType($accountType);
        $user->setInstitution($institution);
        $user->setPhoto($photo);
        $user->setImageLocation($imageLocation);
        if($this->userService->register($user) && $this->userService->authenticate($username, $password)){
            return redirect()->intended('/');
        } else {
            // return back()->withInput();
            return response()->json(array("result" => false));
        }
        // return response()->json(array("result" => $photo));
    }

    public function getActiveUser(Request $request){
        $user = $request->user();
        return response($user->first_name ." " .$user->last_name);
    }

    public function getAuthors(Request $request){
        return response()->json($this->userService->getAuthors($request->user()->username));
    }

    public function logout(){
        $this->userService->logout();
        return redirect('/login');
    }
}
