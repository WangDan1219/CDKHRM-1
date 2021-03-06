<?php
/**
 * Location class file
 */

/**
 * Location
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    orangehrm
 * @subpackage model\admin
 */
class Location extends PluginLocation {
	
	const NO_OF_RECORDS_PER_PAGE = 50;

	public function getCountryName() {
		return $this->getCountry()->getCouName();
	}
	
	public function getNumberOfEmployees() {
		
		$locationService = new LocationService();  
		return (string)$locationService->getNumberOfEmplyeesForLocation($this->id);
	}

}
