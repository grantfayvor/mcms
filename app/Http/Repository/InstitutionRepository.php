<?php
	namespace App\Http\Repository;

	use App\Http\Config\Database;

	class InstitutionRepository {

		private $database;

		public function __construct(Database $database) {
			$this->database = $database;
		}

		public function findLogoLocationAndSkin($institution){
			$sql = "SELECT logo_location, skin FROM institutions WHERE name = '{$institution}'";
			return $this->database->query($sql);
		}
	}