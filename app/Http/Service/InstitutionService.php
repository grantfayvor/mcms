<?php
namespace App\Http\Service;

use App\Http\Repository\InstitutionRepository;

class InstitutionService {

	private $repository;

	public function __construct(InstitutionRepository $institutionRepository) {
		$this->repository = $institutionRepository; 
	}

	public function getInstitutionLogoAndSkin($institution){
		$details = array();
		$result = $this->repository->findLogoLocationAndSkin($institution);
		$i = 0;
		while($i < $result->num_rows){
			$row = $result->fetch_row();
			$row_array['logo'] = $row[0];
            $row_array['skin'] = $row[1];
			array_push($details, $row_array);
			break;
		}
		return $details;
	}

}