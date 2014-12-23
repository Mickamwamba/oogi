<?php
namespace DB;
require_once "databse.php";

class Trainings{

	const TABLE_NAME="trainings";
	public static $COL_ID="id";
	public static $COL_TITLE="title";
	public static $COL_DESC="description";
	public static $COL_TIME="time";
	public static $COL_STATUS="status";
	public static $COL_COST="cost";
	public static $COL_REGION="region";
	public static $COL_TOWN="town";
	public static $COL_ARTICLE_ID="venue";
	public static $COL_ATTENDANCE="attendance";
	public static $COL_VENUE="venue";

	public static function insertNew($title,$desc,$date,$region,$town,$venue,$artilce_id=0){
		$values=array(self::COL_TITLE=>$title,
			self::COL_DESC=>$desc,
			self::COL_TIME=>$time,
			self::COL_STATUS=>$status,
			self::COL_COST=>$cost,
			self::COL_REGION=>$region,
			self::COL_TOWN=>$town,
			self::COL_VENUE=>$venue,
			self::COL_ARTICLE_ID=>$artilce_id);
		return Database::insert(self::TABLE_NAME,$values);
	}

	public static  function updateTrainingEntry($id,$values){
		if (isset($id && is_array($values))) {
			Database::update(self::TABLE_NAME,$values,self::COL_ID."=".$id);
		}
	}

	public static  function getTraining($id){
		if (isset($id)) {
			$r=Database::select(self:TABLE_NAME,null,"products.id=".$id);
			if(count($r)!=1) return $r;
			else return $r[0]; 
		}else{
			throw new \Exception("No parameter supplied to the function: Trainings::getTraining($id)", 1);
		}
	}

	public static  function getTrainings($where,$count=10000,$start=0,$orderstmt=null){
		$start=($page-1)*$count;
		return self::select($table,$columns,$where,$count=10000,$start=0,$orderstmt=null);
	}

	public static function deleteTrainingEntry($id){
		if (isset($id)) {
			Database::delete(self::TABLE_NAME,$id);
		}
	}
}