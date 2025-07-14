<?php

/**
 * @author adam brewer <abrewer@txwes.edu>
 */

class TxWesAlerts
{

  public $host, $db, $username, $password, $alert_connection, $conn;

  function __construct(){
	$this->host='db.bit.io';
	$this->db = 'abrewer/TxWesAlerts';
	$this->username = 'abrewer';
	$this->password = 'v2_3vYkg_54EgtNkj9ak4LacuAGbvLi5';
	$this->alert_connection = "pgsql:host=$this->host;port=5432;dbname=$this->db;password=$this->password;sslmode=require";

	try{
	 $this->conn = new PDO($this->alert_connection);
	  } catch ( PDOException $e ) {
	  // report error message
	 print $e->getMessage();
	}
  }//end construct

  // gets all alerts
  public function get_all_alerts(){
	$stmt = $this->conn->query( 'SELECT *  FROM alerts ORDER BY active DESC');
		while ( $row = $stmt->fetch(\PDO::FETCH_ASSOC) ) {

		  $currentAlerts[] = [
			'id' => $row["id"],
			'alert_name' => $row["alert_name"],
			'active' => $row['active'],
			'description' => $row["description"],
			'instructions' => $row["instructions"],
		  ];
	  }

	return $currentAlerts;
  }

  public function get_all_active_alerts(){
	  $stmt = $this->conn->query( 'SELECT *  FROM alerts WHERE active = TRUE');
			  while ( $row = $stmt->fetch(\PDO::FETCH_ASSOC) ) {

				$activeAlerts[] = [
				  'id' => $row["id"],
				  'alert_name' => $row["alert_name"],
				  'active' => $row['active'],
				  'description' => $row["description"],
				  'instructions' => $row["instructions"],
				];
			}
			if (!empty($activeAlerts)) {

				return $activeAlerts;

			}else{
				return FALSE;
			}

	}


	//toggle alert to active
  public function alert_on($id){
	$stmt = $this->conn->prepare('UPDATE alerts SET active = :active WHERE id=:id');
	$stmt->bindValue(':id', $id, PDO::PARAM_INT);
	$stmt->bindValue(':active' , TRUE , PDO::PARAM_BOOL);
	$result = $stmt->execute();
	if($result){

		return ["message"=>"The Alert Is Now Active"];
	} else {

		return FALSE;
	}

  }

  public function alert_off($id){
      $stmt = $this->conn->prepare('UPDATE alerts SET active = :active WHERE id=:id');
	  $stmt->bindValue(':id', $id, PDO::PARAM_INT);
	  $stmt->bindValue(':active' , FALSE , PDO::PARAM_BOOL);
	  $result = $stmt->execute();
	  if($result){

		   return ["message"=>"The Alert Is Now Inactive"];
;
	  } else {

		  return FALSE;
	  }

  }

  public function create_new_alert($alert_name, $description, $instructions){
	$stmt = $this->conn->prepare('INSERT INTO alerts (alert_name, description, instructions) VALUES (:alert_name, :description, :instructions )');
	$stmt->bindValue(':alert_name', $alert_name, PDO::PARAM_STR );
	$stmt->bindValue(':description', $description, PDO::PARAM_STR);
	$stmt->bindValue(':instructions', $instructions, PDO::PARAM_STR);
	$get_result = $stmt->execute();

   if($get_result){
	   $lastId = $this->conn->lastInsertId();

	return $lastId;
	} else {

	return ["message"=>"Something went wrong ... "];
	}

  }

 public function get_alert_by_id($id){
	// $start_time= microtime(true);
	$stmt = $this->conn->prepare('SELECT * FROM alerts WHERE id = :id');
	$stmt->bindValue(':id', $id, PDO::PARAM_INT);
	$get_result = 	$stmt->execute();
if($get_result){
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
		if(!empty($row)){
			//$end_time = microtime(true);
			//$execution_time = ($end_time - $start_time);
				return $row;
		}else{
			$message =  ["message"=>'That Alert is No Longer in the Database '];
			return $message;
		}
}else{
	$message =  ["message"=>'Something went wrong '];
	return $message;
}
  }

  public function update_alert($alert_name, $description, $instructions, $id){
    $stmt = $this->conn->prepare('UPDATE alerts SET alert_name = :alert_name, description = :description, instructions = :instructions WHERE id=:id');
	$stmt->bindValue(':alert_name', $alert_name, PDO::PARAM_STR );
	$stmt->bindValue(':description', $description, PDO::PARAM_STR);
	$stmt->bindValue(':instructions', $instructions, PDO::PARAM_STR);
	$stmt->bindValue(':id', $id, PDO::PARAM_INT);
	$update_result = $stmt->execute();
	 if($update_result){

	 	 return ["message"=>"The Alert Is Updated"];
	 }else{

	 return  ["message"=>"Something went wrong ... "];
	 }
  }

  public function delete_alert($id){
  	$stmt = $this->conn->prepare('DELETE FROM alerts WHERE id = :id');
	$delete_result = $stmt->execute([$id]);
	if($delete_result){

	return ["message"=>"The Alert is Deleted"];
	}else{

	 return  ["message"=>"Something went wrong ... "];
	}
  }
}
