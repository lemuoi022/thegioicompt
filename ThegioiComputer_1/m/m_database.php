<?php
class database
{

	protected $conn = null;
	protected $host = 'localhost';
	protected $user = 'root';
	protected $pass = '';
	protected $name = 'worldpc';

	public function __construct()
	{
		$this->connect();
	}

	public function connect()
	{

		$this->conn = new mysqli($this->host, $this->user, $this->pass, $this->name);
		if (!$this->conn) {
			echo "Ket noi that bai";
			exit();
		}
	}



	public function get($table, $condition = array())
	{
		$sql = "SELECT * FROM $table";
		if (!empty($condition)) {
			$sql .= " WHERE";
			foreach ($condition as $key => $value) {
				$sql .= " $key = '$value' AND";
			}
			$sql = trim($sql, "AND");
		}
		$query = mysqli_query($this->conn, $sql);
		$result = array();
		if ($query) {
			while ($row = mysqli_fetch_assoc($query)) {
				$result[] = $row;
			}
		}
		return $result;
	}


	public function search($table, $column, $values)
	{

		$sql = "SELECT * FROM $table ";

		$sql .= "WHERE $column LIKE '%$values%'";

		$query = mysqli_query($this->conn, $sql);

		$result = array();
		if ($query) {
			while ($row = mysqli_fetch_assoc($query)) {
				$result[] = $row;
			}
		}
		return $result;
	}

	public function insert($table, $data = array())
	{
		$keys = array_keys($data);
		$fields = implode(",", $keys);
		$value_str = '';
		foreach ($data as $key => $value) {
			$value_str .= " '$value',";
		}

		$value_str = trim($value_str, ",");
		$sql = "INSERT INTO $table($fields) values($value_str)";
		$query = mysqli_query($this->conn, $sql);
		return $query;
	}

	public function get_limit($table, $condition = array(), $limit)
	{
		$sql = "SELECT * FROM $table";
		if (!empty($condition)) {
			$sql .= " WHERE";
			foreach ($condition as $key => $value) {
				$sql .= " $key = '$value' AND";
			}
			$sql = trim($sql, "AND");
		}
		$sql .= " LIMIT $limit";
		$query = mysqli_query($this->conn, $sql);
		$result = array();
		if ($query) {
			while ($row = mysqli_fetch_assoc($query)) {
				$result[] = $row;
			}
		}
		return $result;
	}

	public function filter($table, $condition = array(), $conditionin = array(), $filter = array())
	{
		// $sql = "SELECT * FROM $table WHERE";
		// foreach($condition as $key => $value){
		// 	$sql.=" $key = '$value' AND";
		// }
		// $sql = rtrim($sql, 'AND');
		if (!empty($condition)) {
			$sql = "SELECT * FROM $table WHERE";
			foreach ($condition as $key => $value) {
				$sql .= " $key = '$value' AND";
			}
			$sql = rtrim($sql, 'AND');
			return $sql;
		}

		if (isset($conditionin)) {
			foreach ($conditionin as $key => $a) {
				$sql .= " AND $key IN (";
				foreach ($a as $key => $value) {
					$sql .= "$value" . ',';
				}
				$sql = rtrim($sql, ',');
				$sql .= ")";
			}
		}
		$between = '';
		if (isset($filter)) {
			foreach ($filter as $key => $f) {
				$between .= "AND $key BETWEEN " . $f[0] . " AND " . $f[1];
			}
			$sql .= $between;
		}
		$query = mysqli_query($this->conn, $sql);
		return $query;
	}

	public function sendMail($title, $content, $nTo, $mTo, $diachicc = '')
	{
		$nFrom = 'WORLDCOMPUTER';
		$mFrom = 'tgcomputer2021@gmail.com'; //dia chi email cua ban
		$mPass = 'Computer2021'; //mat khau email cua ban
		$mail				= new PHPMailer();
		$body				= $content;
		$mail->IsSMTP();
		$mail->Charset  	= "utf-8";
		$mail->SMTPDebug    = 0;
		$mail->SMTPAuth  	= true;
		$mail->SMTPSecure  	= "ssl";
		$mail->Host  		= "smtp.gmail.com";
		$mail->Port			= 465;
		$mail->Username		= $mFrom;
		$mail->Password		= $mPass;
		$mail->SetFrom($mFrom, $nFrom);
		//chuyen chuoi thanh mang
		$ccmail = explode(',', $diachicc);
		$ccmail = array_filter($ccmail);
		if (!empty($ccmail)) {
			foreach ($ccmail as $k => $v) {
				$mail->AddCC($v);
			}
		}
		$mail->Subject		= $title;
		$mail->MsgHTML($body);
		$address = $mTo;
		$mail->AddAddress($address, $nTo);
		$mail->AddReplyTo('tgcomputer2021@gmail.com', 'WORLDCOMPUTER');
		if (!$mail->Send()) {
			return 0;
		} else {
			return 1;
		}
	}

	public function update($table, $data = array(), $condition = array())
	{
		$str = '';
		foreach ($data as $key => $value) {
			$str .= "$key = '$value',";
		}

		$str = trim($str, ",");
		$sql = "UPDATE $table SET $str WHERE ";
		foreach ($condition as $key => $value) {
			$sql .= "$key = '$value' AND";
		}
		$sql = trim($sql, 'AND');
		$query = mysqli_query($this->conn, $sql);
		return $query;
	}
}
