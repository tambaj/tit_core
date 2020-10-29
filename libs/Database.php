<?php 

class Database  extends PDO {

	public function __construct($DB_TYPE, $DB_HOST, $DB_NAME, $DB_USER, $DB_PASS){

		parent::__construct($DB_TYPE.':host='.$DB_HOST.';dbname='.$DB_NAME,$DB_USER, $DB_PASS);

		// parent::setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTIONS);
	}

	public function select($sql, $array =array(), $fetchMode =PDO::FETCH_ASSOC){

		$sth = $this->prepare($sql);
		foreach ($array as $key => $value) {
			$sth->bindValue("$key", $value);
		}
		$sth->execute();
		return $sth->fetchAll($fetchMode);
	}

	public function insert($table, $data){
        ksort($data);
        print_r($data);
        $fieldNames = implode(', ', array_keys($data));
        $fieldValues = ':' . implode(', :', array_keys($data));

		$sth = $this->prepare("INSERT INTO $table ($fieldNames) VALUES ($fieldValues)");
		
		foreach ($data as $key => $value) {
			$sth->bindValue(":$key", $value);
		}
		$sth->execute();
		// die();
	}
	public function InsertData($table, $data) {
        try {
            ksort($data);
            $fieldlog = null;
            $fieldNames = implode(', ', array_keys($data));
            $fieldInputs = ':' . implode(', :', array_keys($data));
            $sql_statement = "INSERT INTO $table 
                    ($fieldNames)
            VALUES  ($fieldInputs)";
            $sth = $this->prepare($sql_statement);
            foreach ($data as $key => $value) {
                $sth->bindValue(":$key", $value);
                $fieldlog .= "$key = :$value,";
            }

            $flag = $sth->execute();
            if ($flag) {
                return $this->lastInsertId();
            } else {
                //$log = "Error Inserting Into " . $table ." " . var_dump($data, true) . " " . var_dump($sth->errorInfo(), true) . "<br/>";
            }
        } catch (Exception $e) {
            //$log = 'Exception -> ' . var_dump($e->getMessage());
        }
    }







	public function update($table, $data, $where){
		ksort($data);

		$fieldDetails = NULL;
		foreach ($data as $key => $value) {
			$fieldDetails .="$key = '$value', ";
		}
		$fieldDetails = rtrim($fieldDetails, ', ');
		$sth = $this->prepare("UPDATE $table SET $fieldDetails WHERE $where");
		print_r($sth);
		foreach ($data as $key => $value) {
			$sth->bindValue(":$key", $value);
		}
		$sth->execute();
		print_r($sth->errorInfo());
	}

	public function delete($table, $where, $limit = 1){

		return $this->exec("DELETE FROM $table WHERE $where LIMIT $limit");
	}

}