<?php
namespace DB;
class Database{
	public static $db="OOGI";
	public static $username="root";
	public static $password="";
	public static $hostname="localhost";



	public static function connect() {
		$db_server = mysql_connect(self::$hostname, self::$username, self::$password);
		if (!$db_server) die("Unable to connect to MySQL " );
		if(!mysql_select_db(self::$db, $db_server)) die("Unable to select database ");
	}

	public static function disconnect(){
		mysql_close();
	}

	public static function insert($table,$values){
		if (!self::tableExists($table)) throw new \Exception("Error: table $table does not exist", 1);
		if(!is_array($values) || count($values)<1) throw new \Exception("Error: table invalid parameter supplied", 1);
		$cols="";
		$vals="";
		foreach ($values as $key => $value) {
			$cols.=", ".$key;
			$vals.=is_numeric($value)?", ".$value:", '".$value."'";
		}
		$cols=substr($cols, 1);
		$vals=substr($vals, 1);
		$query="INSERT INTO $table($cols) VALUES($vals)";
		if (!mysql_query($query)) die("Could not insert values ".self::error($query));
		return mysql_insert_id();	
		
	}

	public static function update($table, $values, $where){
		if (!self::tableExists($table)) throw new \Exception("Error: table $table does not exist", 1);
		if(!is_array($values) || count($values)<1) throw new \Exception("Error: table invalid parameter supplied", 1);
		$queryValues="";
		foreach ($values as $key => $value){
			$cols=$key;
			$vals=is_numeric($value)?$value:"'".$value."'";
			$queryValues.=",".$cols."=".$vals;
		}
		if (strlen($queryValues)>0){
			$queryValues=substr($queryValues,1);
			$query="UPDATE $table SET $queryValues WHERE $where";
			if (!mysql_query($query)){
				echo "failed to update: ".self::error($query);
				return false;
			}
			return true;
		}else{
			echo "no values to update or invalid field names";
			return false;
		}

	}

	public static function delete($table, $where){
		if (!self::tableExists($table)) throw new \Exception("Error: table $table does not exist", 1);
		$query="DELETE FROM $table WHERE $where";
		if (!mysql_query($query)) die("Could not delete row(s)");
		return true;
	}

	/**
	* return an array of associative array of rows
	*/
	public static function select($table,$columns,$where,$count=10000,$start=0,$orderstmt=null){
		if (!self::tableExists($table)) throw new \Exception("Error: table $table does not exist", 1);
		if($columns!=null){
			$cols="";
			foreach ($columns as $value) {
				$cols.=",".$value;
			}
			$cols=substr($cols, 1);
		}else{
			$cols="*";
		}
		$where=$where==null?"1=1":$where;
		$orderstmt=$orderstmt==null?"":"ORDER BY ".$orderstmt;
		$query="SELECT $cols FROM $table WHERE $where LIMIT $count OFFSET $start $orderstmt";
		if(!($result=mysql_query($query))) return false; 
		$output=array();
		while ($row=mysql_fetch_assoc($result)){
			$output[]=$row;
		}
		return $output;
	}

	public static function selectInnerJoin($table1,$table2,$columns1,$columns2,$condition,$where=null,$count=1000,$start=0,$orderstmt=null){
		$cols1="";
		foreach ($columns1 as $value){
			$cols1.=",".$table1.".".$value;
		}
		$cols1=substr($cols1, 1);
		$cols2="";
		foreach ($columns2 as $value){
			$cols2.=",".$table2.".".$value;
		}
		$cols2=substr($cols2, 1);
		$where=$where==null?"1=1":$where;
		$orderstmt=$orderstmt==null?"":"ORDER BY ".$orderstmt;
		$query="SELECT $cols1,$cols2 FROM $table1 INNER JOIN $table2 ON $condition WHERE $where LIMIT $count OFFSET $start $orderstmt";
		if(!($result=mysql_query($query))) return false; 
		$output=array();
		while ($row=mysql_fetch_assoc($result)){
			$output[]=$row;
		}
		return $output;
	}

	public static function tableExists($table_in){
		$result=mysql_query("show tables");
		while ($table=mysql_fetch_row($result)) {
			if($table[0]==$table_in){
				return true;
			}
		}
		return false;
	}

	public static function startTransaction(){
		mysql_query("START TRANSACTION");
	}

	public static function rollBackTransaction(){
		mysql_query("ROLLBACK");
	}

	public static function commitTransaction(){
		mysql_query("COMMIT");
	}

	public static function error($query){
		return "<br> $query <br>".mysql_error();
	}
}

Database::connect();