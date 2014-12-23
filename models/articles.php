<?php
	namespace DB; 
	require_once('database.php');

	class Articles{

		const TABLE_NAME="articles";
		const COL_ID = "id";
		const COL_TITLE = "title";
		const COL_CONTENT = "content";
		const COL_POSTED = "posted";
		const COL_VIEWS = "views";

		public static function getArticleById($id){
			if(isset($id) &&is_int($id)){
				$where = self::COL_ID."=$id";
			$article = Database::select(self::TABLE_NAME,NULL,$where);
			return $article;
			}
			else{
				return false;
			}
			
		}

		public static function getAllArticles(){
			$allArticles = Database::select(self::TABLE_NAME,NULL,NULL);
			return $allArticles;
		}

		public static function getArticlesByCount($count=10,$start=0,$order='title'){
				$allArticles = Database::select(self::TABLE_NAME,NULL,NULL,$count,$start,$order);
				return $allArticles;
			
		}

		public static function getArticlesByViews($count=10,$start=0,$order='views'){
			if (isset($count)&&is_int($count)){
				$articles = Database::select(self::TABLE_NAME, NULL,NULL,$count,$start,$order);
				return $articles;
			}
			else echo "sdfsfgsdgfs";
		}
		

		public static function addArticle($title,$content,$posted,$views=0){
			$values = array(self::COL_TITLE=>$title ,
				self::COL_CONTENT =>$content,
				self::COL_POSTED =>$posted,
				self::COL_VIEWS =>$views,
			 );

			return(Database::insert(self::TABLE_NAME,$values));

		}

		public static function deleteArticle($id){

			if(isset($id)){
				$where = self::COL_ID."=$id";
			      
				return  (Database::delete(self::TABLE_NAME,$where)); 
			}
			else return false;
		}

		public static function updateArticle($id,$values){
			if(isset($id) && is_array($values)){
			$where = self::COL_ID."=$id";
				return (Database::update(self::TABLE_NAME,$values,$where));
			}
			else{
				return false;
			}
		}

	}

	class Images{

		const TABLE_NAME="article_images";
		const COL_ID="id";
		const COL_IMAGE="image";
		const COL_ARTICLE_ID="article_id";

		public static function countArticleImages($article_id){
			if(isset($article_id)){
			$where = self::COL_ID."=$article_id";
			$columns = array(self::COL_IMAGE);

			$allImages = Database::select(self::TABLE_NAME,$columns,$where);
			if (isset($allImages)) {
				return count($allImages);
			}
			else{
				return 0;
			}
			
		}
		else{
				return false;
			}
		}



		public static function getArticleImages($article_id){
			if(isset($article_id)){
				$columns = array(self::COL_IMAGE);
				$where = self::COL_ID."=$article_id";
			return Database::select(self::TABLE_NAME,$columns,$where);
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


var_dump(Articles::getArticlesByViews());
?>