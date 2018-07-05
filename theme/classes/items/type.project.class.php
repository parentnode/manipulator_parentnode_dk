<?php
/**
* @package janitor.items
* This file contains item type functionality
*/

class TypeProject extends Itemtype {

	/**
	* Init, set varnames, validation rules
	*/
	function __construct() {

		parent::__construct(get_class());


		// itemtype database
		$this->db = SITE_DB.".item_project";
		$this->db_groups = SITE_DB.".item_project_groups";
		$this->db_group_modules = SITE_DB.".item_project_group_modules";
		$this->db_group_segments = SITE_DB.".item_project_group_segments";

		// Name
		$this->addToModel("name", array(
			"type" => "string",
			"label" => "Name",
			"required" => true,
			"hint_message" => "Project name", 
			"error_message" => "Project needs a name."
		));

		// Description
		$this->addToModel("description", array(
			"type" => "text",
			"label" => "Short description",
			"hint_message" => "Write a short description of the project.",
			"error_message" => "No description?."
		));

		// Group
		$this->addToModel("group", array(
			"type" => "string",
			"label" => "Segment group",
			"hint_message" => "Segment group.",
			"error_message" => "Group is required"
		));

		// Segment
		$this->addToModel("segment", array(
			"type" => "string",
			"label" => "Detector segment",
			"hint_message" => "Detector segment.",
			"error_message" => "Segment is required"
		));

		// Module
		$this->addToModel("module", array(
			"type" => "string",
			"label" => "Manipulator module",
			"hint_message" => "Select module", 
			"error_message" => "Module is required."
		));

	}


	function addGroup() {}
	function removeGroup() {}


	function addSegment() {}
	function removeSegment() {}

	function addModule() {}
	function removeModule() {}

}

?>