<?php
	namespace App\Http\Repository;

	use App\Http\Config\Database;
	use App\Http\Model\User;

	class UserRepository {

		private $database;

		public function __construct(Database $database) {
			$this->database = $database;
		}

		public function findUserIdByUsername($username){
			$username = $this->database->escapeString($username);
			$sql = "SELECT id FROM users WHERE username =  '{$username}'";
			return $this->database->query($sql);
		}

		public function findUsernameByUserId($id){
			$username = $this->database->escapeString($id);
			$sql = "SELECT username FROM users WHERE id =  '{$id}'";
			return $this->database->query($sql);
		}

		public function findByUsername($username){
			$username = $this->database->escapeString($username);
			$sql = "SELECT * FROM users WHERE username =  '{$username}'";
			return $this->database->query($sql);
		}

		public function findByUsernameAndPassword($username, $password){
			$username = $this->database->escapeString($username);
			$password = $this->database->escapeString($password);
			$sql = "SELECT * FROM users WHERE username =  '{$username}' AND password = '{$password}'";
			return $this->database->query($sql);
		}

		public function save(User $user){
			$firstname = $this->database->escapeString($user->getFirstName());
			$lastname = $this->database->escapeString($user->getLastName());
			$username = $this->database->escapeString($user->getUsername());
			$accountType = $this->database->escapeString($user->getAccountType());
			$password = $user->getPassword();
			$department = $this->database->escapeString($user->getDepartment());
			$institution = $this->database->escapeString($user->getInstitution());
			$imageLocation = $user->getImageLocation();
			$sql =  "INSERT INTO users(first_name, last_name, username, password, department, account_type, institution, image_location) VALUES('{$firstname}', '{$lastname}', '{$username}', '{$password}', '{$department}', '{$accountType}', '{$institution}', '{$imageLocation}')"; 
			return $this->database->query($sql);
		}

		public function findLogoLocation($institution){
			$sql = "SELECT logo_location FROM institutions WHERE name = '{$institution}'";
			return $this->database->query($sql);
		}

		public function getFirstNamesAndLastNames($username){
			$sql = "SELECT first_name, last_name from users where username != '{$username}'";
			return $this->database->query($sql);
		}

	}