<?php
	namespace DB; 
	require_once('database.php');

	class Articles{

		const TABLE_NAME="articles";
		public static $COL_ID = "id";
		public static $COL_TITLE = "title";
		public static $COL_CONTENT = "content";
		public static $COL_POSTED = "posted";
		public static $COL_VIEWS = "views";

		public static function getArticleById($id){
			if(isset($id &&is_int($id))){
				$where = self::COL_ID."=$id";
			$article = Database::select(self::TABLE_NAME,NULL,$where);
			return $allArticles;
			}
			else{
				return false;
			}
			
		}

		public static function getAllArticles(){
			$allArticles = Database::select(self::TABLE_NAME,NULL,NULL);
			return $allArticles;
		}

		public static function getArticlesByCount($count=10,$start=0,$order='DESC'){
			if(isset($count)&&is_int($count)){
				$allArticles = Database::select(self::TABLE_NAME,NULL,NULL,$count,$order);
				return $allArticles;
			}
			else{
				return false;
			}
		}

		public static function getArticlesByViews($count=10,$start=0,$order='DESC'){
			if (isset($count)&&is_int($count)) 
				 $where = self::COL_VIEWS."=views";
				$articles = Database::select(self::TABLE_NAME, NULL,where,$count,$order);
				return $articles;
			}
		

		public static function addArticle($title,$content,$posted,$views=0){
			$values = array(self::COL_TITLE =>$title ,
				self::COL_CONTENT =>$content,
				self::COL_POSTED =>$posted,
				self::COL_VIEWS =>$views,
			 );

			return(Database::insert(self::TABLE_NAME,$values));

		}

		public static function deleteArticle($id){

			if(isset($id)){
				$where = self::COL_ID."=$id";
				$deleted_article = Database::delete(self::TABLE_NAME,$where);
				return $deleted_article;
			}
			else return false;
		}

		public static function updateArticle($id,$values){
			if(isseet($id) && is_array($values)){
			$where = self::COL_ID."=$id";
				return (Database::update(self::TABLE_NAME,$values));
			}
			else{
				return false;
			}
		}

	}

	class Images{

		const TABLE_NAME="article_images";
		public static $COL_ID="id";
		public static $COL_IMAGE="image";
		public static $COL_ARTICLE_ID="article_id";

		public static function CountArticleImages($article_id){
			if(isset($article_id)){
			$where = self::COL_ID."=$article_id";
			$allImages = Database::select(self::TABLE_NAME,self::COL_IMAGE,$where);
			if (isset($allImages)) {
				return count($allImages);
			}
			else{
				return 0;
			}
			else{
				return false;
			}
		}


		public static function getArticleImages($article_id){
			if(isset($article_id)){
				$where = self::COL_ID."=$article_id";
			return Database::select(self::TABLE_NAME,self::COL_IMAGE,$where);
		}
	}

	public static function deleteArticleImage($image_id){
		if(isset($image_id)){
			$where = self::COL_ID."=$image_id";
			return Database::delete(self::TABLE_NAME,$where);
		}
		else {
			return false;
		}
	}

	public static function addArticleImage($article_id,$image){
		if(isset($article_id)&&isset($image)){
				$values = array(self::COL_ARTICLE_ID =>$article_id,
				self::COL_IMAGE =>$image,
			 );

			return (Database::insert(self::TABLE_NAME,$values));
		}
		else{
			return false;
		}
	}

	public static function UpdateArticleImage($article_id,$image_id,$values){

			if(isset($article_id) && isset($image_id)&&is_array($values)){
			$where = self::COL_ID."=$image_id";
				return (Database::update(self::TABLE_NAME,$values));
			}
			else{
				return false;
			}
	}
}

?>