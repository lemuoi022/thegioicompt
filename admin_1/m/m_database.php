<?php
class database{

protected $conn = null;
protected $host = 'localhost:3306';
protected $user = 'root';
protected $pass = '';
protected $name = 'worldpc';

	public function __construct(){
		$this->connect();
	}

	public function connect(){

		$this->conn = new mysqli($this->host, $this->user, $this->pass, $this->name);
		if(!$this->conn){
			echo "Ket noi that bai";
			exit();
		}
	}


	//Hàm lấy dữ liệu
	public function get($table, $condition = array()){
		//B1:
		$sql = "SELECT * FROM $table";
		//B2:
		if(!empty($condition)){
			$sql.=" WHERE";
			foreach ($condition as $key => $value) {
				$sql.= " $key = '$value' AND";
			}
			$sql = trim($sql, "AND"); }

		//B3:
		$query = mysqli_query($this->conn,$sql);
		//B4 
		$result = array();
		if($query){
			while($row = mysqli_fetch_assoc($query)){
				$result[] = $row;
			}
		}
		//B5 
		return $result;
	}

	public function search($table,$column,$values){

		$sql = "SELECT * FROM $table ";

		$sql .= "WHERE $column LIKE '%$values%'";

		$query = mysqli_query($this->conn, $sql);

		$result = array();
			if($query){
				while ($row = mysqli_fetch_assoc($query)){
					$result[] = $row;
				}
			}
			return $result;
	}

	public function insert($table,$data = array()){
		$this->$table;

		$keys = array_keys($data);
		$fields = implode("," , $keys);
		$value_str = '';
		foreach($data as $key => $value){
			$value_str .=" '$value',";
		}

		$value_str = trim($value_str, ",");
		$sql = "INSERT INTO $table($fields) values($value_str)";
		$query = mysqli_query($this->conn, $sql);
		return $query;
	}

	public function update($table,$data=array(),$condition = array()){
		$str = '';
		foreach($data as $key => $value){
			$str .="$key = '$value',";
		}

		$str = trim($str,",");
		$sql = "UPDATE $table SET $str WHERE ";
		foreach($condition as $key => $value){
			$sql .="$key = '$value' AND";
		}
		$sql = trim($sql,'AND');
		$query = mysqli_query($this->conn,$sql);
		return $query;
	}

	public function delete($table,$condition=array()){
		$sql = " DELETE FROM $table WHERE ";
		foreach($condition as $key => $value){
			$sql .="$key = '$value' AND";
		}
		$sql = trim($sql,'AND');
		$query = mysqli_query($this->conn,$sql);
		return $query;
	}

	
}
?>