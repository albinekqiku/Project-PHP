<?php
class DBController {
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "umdas";
	private $lidhu;
	
	function __construct() {
		$this->lidhu = $this->connectDB();
	}
	
	function connectDB() {
		$lidhu = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $lidhu;
	}
	
	function runQuery($query) {
		$rezultati = mysqli_query($this->lidhu,$query);
		while($rresht=mysqli_fetch_array($rezultati)) {
			$resultset[] = $rresht;
		}
		if(!empty($resultset))
			return $resultset;
	}
	
	function insertQuery($query) {
	    mysqli_query($this->lidhu, $query);
	    $insert_id = mysqli_insert_id($this->lidhu);
	    return $insert_id;
	}
	
	function getIds($query) {
	    $rezultati = mysqli_query($this->lidhu,$query);
	    while($rresht=mysqli_fetch_array($rezultati)) {
	        $resultset[] = $rresht[0];
	    }
	    if(!empty($resultset))
	        return $resultset;
	}
}
?>