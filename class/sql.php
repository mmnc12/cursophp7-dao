<?php 

	class Sql extends PDO {

		private $conn;

		public function __construct() {

			$this->conn = new PDO("mysql:host=localhost; dbname=dbphp7", "root", "");
		}

		private function setParams($statement, $parameters = array()){

			foreach ($parameters as $key => $value) {
				
				$this->setParam($key, $value);
			}

		}

		private function setParam($statement, $key, $params){

			$statement->bindParam($key, $value);
		}

		public function query($rawpQuery, $params = array()) {

			$stmt = $this->conn->prepare($rawpQuery);

			$this->setParams($stmt, $params);

			$stmt->execute();

			return $stmt;
		}

		public function select($rawpQuery, $params = array()):array
		{

			$stmt = $this->query($rawpQuery, $params);

			return $stmt->fetchAll(PDO::FETCH_ASSOC);

		}

	}
 ?>