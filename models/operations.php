<?php
namespace DB;
require_once('database.php');

class Operations{

	const TABLE_NAME="operations";
	const COL_ID = "id";
	const COL_LOCATION ="location";
	const COL_DESCRIPTION = "description";
	const COL_ARTICLE_ID = "article_id";


	public static function addOperation($location="",$description,$article_id){
		if (isset($description) && isset($article_id)) {
			$values = array(self::COL_LOCATION=>$location,self::COL_DESCRIPTION=>$description,self::COL_ARTICLE_ID=>$article_id);
			return (Database::insert(self::TABLE_NAME,$values));
		}
		else return false;
	}
	public static function deleteOperation($operation_id){
		 if (isset($operation_id)) {
		 	$where = self::COL_ID."=$operation_id";
		 	return (Database::delete(self::TABLE_NAME,$where));
		 }
		 else return false;
	}

	public static function updateOperation($operation_id,$values){
		if (isset($operation_id)&&is_array($values)) {
			$where = self::COL_ID."=$operation_id";
			return (Database::update(self::TABLE_NAME,$values,$where));
		}
		else return false;
	}

	public static function getAllOperations(){
		return (Database::select(self::TABLE_NAME,NULL,NULL));
	}

	public static function getOperationByLocation($location){
		if (isset($location)) {
			$where = self::COL_LOCATION."=$location";
			echo $where;
			return (Database::select(self::TABLE_NAME,NULL,$where));
		}
		else return false;
	}

}

class OperationImages{

	const TABLE_NAME = "operation_images";
	const COL_ID = "id";
	const COL_OPERATION_ID ="operation_id";
	const COL_IMAGE ="image";

	public static function countOperationImages($operation_id){
		 if (isset($operation_id)) {

			$colums = array(self::COL_IMAGE);
			$where = self::COL_ID."=$operation_id";
		 	$allImages = Database::select(self::TABLE_NAME,$colums,$where);
		 	var_dump($allImages);

		 	if (isset($allImages)) {
		 		return count($allImages);
		 	}
		 	else return 0;
		 }
		 else return false;
	}

	public static function getOperationImages($operation_id){
		if (isset($operation_id)) {
			$colums = array(self::COL_IMAGE);
			$where = self::COL_ID."=$operation_id";
			return (Database::select(self::TABLE_NAME,$colums,$where));
		}
		else return false;
	}

	public static function deleteOperationImage($image_id){
		if (isset($image_id)) {
			$where = self::COL_ID."=$image_id";
			return (Database::delete(self::TABLE_NAME,$where));
		}
		else return false;
	}	

	public static function addOperationImage($operation_id,$image){
		if (isset($operation_id) && isset($image)) {
			$values = array(self::COL_ID=>$operation_id,
				self::COL_IMAGE=>$image);
			return (Database::insert(self::TABLE_NAME,$values));
		}
		else return false;
	}

	public static function updateOperationImage($image_id,$values){
		if (isset($image_id)&&is_array($values)) {
			$where = self::COL_ID."=$image_id";
			return (Database::update(self::TABLE_NAME,$values,$where));
		}
		else return false;
	}
}

var_dump(OperationImages::countOperationImages(5));
?>