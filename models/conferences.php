<?php
namespace DB;
require_once('database.php');

 class Conferences{


	const TABLE_NAME="conferences";
	const COL_ID = "id";
	const COL_TITLE = "title";
	const COL_TIME = "time";
	const COL_REGION = "region";
	const COL_TOWN = "town";
	const COL_VENUE = "venue";
	const COL_ORGANIZER = "organizer";
	const COL_DESCRIPTION = "description";

	public static function addConference($title,$description,$time,$region, $town="",$venue,$organizer="" ){

		if (isset($title)&&isset($description)&&isset($time)&&isset($region)) {
			
			$values = array(self::COL_TITLE=>$title,self::COL_DESCRIPTION=>$description,
			self::COL_REGION=>$time,self::COL_REGION=>$region,self::COL_TOWN=>$town,self::COL_VENUE=>$venue,self::COL_ORGANIZER=>$organizer );

			return (Database::insert(self::TABLE_NAME,$values));
		}
		else return false;
	}

	public static function deleteConference($conference_id){
		if (isset($conference_id)) {
			$where = self::COL_ID."=$conference_id";
			return (Database::delete(self::TABLE_NAME,$where));
		}
		else return false;
		
	}

	public static function updateConference($conference_id,$values){

		if (isset($conference_id)&&is_array($values)) {
			$where = self::COL_ID."=$conference_id";
			return (Database::update(self::TABLE_NAME,$values,$where));
		}
		else return false;
	}

	public static  function getConferences($count=10000,$start=0,$orderstmt=null){
		return Database::select(self::TABLE_NAME,NULL,NULL,$count,$start,$orderstmt=null);
	}

	public static function getConferencesByRegion($region){
		if (isset($region)) {
			$where = self::COL_REGION."=$region";
			return(Database::select(self::TABLE_NAME,NULL,$where));
		}
		else return false;

	}
	public static function getConferenceById($conference_id){
		if (isset($conference_id)) {
			$where = self::COL_ID."=$conference_id";
			return (Database::select(self::TABLE_NAME,NULL,$where));
		}
		else return false;
	}


 }
 $values = array('title' =>"mtwara moja" ,'description'=>"viwanda vya gesi vya mtwara");
 //var_dump(Conferences::addConference("title","description","time","region","venue","organizer"));
 var_dump(Conferences::getConferencesByRegion("region"));

?>