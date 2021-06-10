<?php

class ManejadorBD {

	private $db;
	private $host;
	private $user;
	private $pass;
	private $result;

	function __construct() {
		$this->db = 'pes';
		$this->host = 'localhost';
		$this->user = 'root';
		$this->pass = '';

		$this->result = new \stdClass();
		$this->result->code = 200;
		$this->result->msg = 'Success';
		$this->result->output = array();
	}

	private function open() {
		$link = mysqli_connect($this->host, $this->user, $this->pass, $this->db) or die('Error connecting to DB');
		return $link;
	}

	private function close($link) {
		return mysqli_close($link);
	}

    public function modificar($name,$id) {
        try {
            $link = $this->open();

            $qry = "UPDATE profesores SET nombres = '$name' WHERE id_profesor ='$id'";

            $r = mysqli_query($link, $qry);

            while( $result[] = mysqli_fetch_array( $r, MYSQLI_ASSOC ) );

            foreach ($result as $value) {
                if($value) {
                    array_push($this->result->output, $value);
                }
            }

            $this->close($link);
        } catch (Exception $e) {
            $this->result->code = 500;
            $this->result->msg = 'Failed: '.$e;
        }

        return $this->result;
    }

?>