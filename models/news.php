<?php
 namespace DB;
require_once "database.php";

class News{

		const TABLE_NAME="news";
		const COL_ID = "id";
		const COL_HEADING = "heading";
		const COL_CONTENT = "content";
		const COL_IMAGE = "image";
		const COL_VIEWS = "views";
		const COL_POSTED = "posted";

		public static function addNews($heading,$content,$posted="",$image="",$views=0){
			if (isset($heading)&&isset($content)) {
				$image=mysql_real_escape_string($image);
				$values = array('heading' =>$heading, 'content'=>$content,'posted'=>$posted,'views'=>$views,'image'=>$image);
				return (Database::insert(self::TABLE_NAME,$values));
			}
			else return false;
		}

		public static function deleteNews($news_id){

			if (isset($news_id)) {
				$where = self::COL_ID."=$news_id";
				return (Database::delete(self::TABLE_NAME,$where));
			}
			else return false;
		}

		public static function updateNews($news_id,$values){
			if (isset($news_id)&&is_array($values)) {
				$where = self::COL_ID."=$news_id";
				return (Database::update(self::TABLE_NAME,$values,$where));
			}
			else return false;
		}

		public static function getNews($count=10000,$start=0,$orderstmt=null){
			return (Database::select(self::TABLE_NAME,NULL,NULL,$count,$start,$orderstmt=null));
		}

		public static function getNewsById($news_id){
			if (isset($news_id)) {
				$where=self::COL_ID."=$news_id";
				return (Database::select(self::TABLE_NAME,NULL,$where));
			}
		}
		public static function updateNewsViews($news_id){
			if (isset($news_id)) {
				$values = array('views' =>self::COL_VIEWS+1);
				$where = self::COL_ID."=$news_id";
				return(Database::update(self::TABLE_NAME,$values,$where));
			}
			else return false;
		}


}
?>