<?php
namespace App\Http\Service;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Repository\UserRepository;
use App\Http\Model\User;

use Auth;

class UserService {

	private $repository;

	public function __construct(UserRepository $userRepository) {
		$this->repository = $userRepository; 
	}

	public function authenticate($username, $password){
		return Auth::attempt(['username' => $username, 'password' => $password]);
	}

	public function register(User $user){
		$user->setPassword(Hash::make($user->getPassword()));
		$foundUser = $this->repository->findByUsername($user->getUsername());
		if($foundUser->num_rows <= 0){
			Storage::disk('profile')->putFileAs('', $user->getPhoto(), $user->getImageLocation());
			return $this->repository->save($user);
		} else{
			return false;
		}
	}

	public function getAuthors($username){
		$authors = array();
		$result = $this->repository->getFirstNamesAndLastNames($username);
		$i = 0;
		while($i < $result->num_rows){
			$row = $result->fetch_row();
			$row_array['name'] = $row[0] ." ". $row[1];
			array_push($authors, $row_array);
			$i++;
		}
        return $authors;
	}

	public function logout(){
        Auth::logout();
	}

	public function getInstitutionLogo($institution){
		$result = $this->repository->findLogoLocation($institution);
		$i = 0;
		while($i < $result->num_rows){
			$row = $result->fetch_row();
			$logo = $row[0];
			break;
		}
		return $logo;
	}

}