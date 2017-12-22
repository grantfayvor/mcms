<?php
namespace App\Http\Model;

	class User {

		private $id;
		private $firstName;
		private $lastName;
		private $username;
		private $department;
		private $password;
		private $accountType;
		private $institution;
		private $imageLocation;
		private $photo;

		/*public function __construct(){

		}*/

		public function __construct($firstName, $lastName, $username, $department, $password){
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->username = $username;
			$this->department = $department;
			$this->password = $password;
		}

		public function setId($id){
			$this->id = $id;
		}

		public function getId(){
			return $this->id;
		}
		
		public function setFirstName($firstName){
			$this->firstName = $firstName;
		}

		public function getFirstName(){
			return $this->firstName;
		}

		public function setLastName($lastName){
			$this->lastName = $lastName;
		}

		public function getLastName(){
			return $this->lastName;
		}

		public function setUsername($username){
			$this->username = $username;
		}

		public function getUsername(){
			return $this->username;
		}

		public function setDepartment($department){
			$this->department = $department;
		}

		public function getDepartment(){
			return $this->department;
		}

		public function setPassword($password){
			$this->password = $password;
		}

		public function getPassword(){
			return $this->password;
		}

		public function setAccountType($accountType){
			$this->accountType = $accountType;
		}

		public function getAccountType(){
			return $this->accountType;
		}

		public function setInstitution($institution){
			$this->institution = $institution;
		}

		public function getInstitution(){
			return $this->institution;
		}

		public function setImageLocation($imageLocation){
			$this->imageLocation = $imageLocation;
		}

		public function getImageLocation(){
			return $this->imageLocation;
		}

		public function setPhoto($photo){
			$this->photo = $photo;
		}

		public function getPhoto(){
			return $this->photo;
		}

		public function jsonSerialize(){
			return [
				'firstName' => $this->firstName,
				'lastName' => $this->lastName,
				'username' => $this->username,
				'department' => $this->department,
				'password' => $this->password
			];
		}

	}