<?php 

abstract class Model {

	//private static $db_host = 'brjgxecvcihvenutbxxk-mysql.services.clever-cloud.com';
	//private static $db_user = 'uyigepkhpjqyyuhg';
	//private static $db_pass = 'AheQHutea0gJAailQNqB';
    //private static $db_name = 'brjgxecvcihvenutbxxk';
    private static $db_host = 'localhost';
	private static $db_name = 'biblioteca_sis';
    private static $db_user = 'root';
    private static $db_pass = '';
	//protected $db_name;
	private static $db_charset = 'utf8';
	private $conn;
	protected $query;
	protected $rows = array();

	abstract protected function get();
	abstract protected function set($code_alum ,$code_usu);
	abstract protected function del();


	private function db_open() {
		$this->conn = new mysqli(
			self::$db_host,
			self::$db_user,
			self::$db_pass,
			self::$db_name
		);
		$this->conn->set_charset(self::$db_charset);
	}

	private function db_close() {
		$this->conn->close();
	}

	protected function set_query() {
		$this->db_open();
		$this->conn->query($this->query);
		$this->db_close();
	}

	protected function get_query() {
		$this->db_open();

		$result = $this->conn->query($this->query);
		while( $this->rows[] = $result->fetch_assoc() );
		$result->close();
		$this->db_close();
		return array_pop($this->rows);
	}
    protected function get_query_ajax() {
        $this->db_open();
        $json = array();
        $result = $this->conn->query($this->query);
        while($row = mysqli_fetch_array($result)) {
            $json[] = array(
                'code_alumno' => $row['code_alumno'],
                'nombre_alumno' => $row['nombre_alumno'],
                'numero_expediente' => $row['numero_expediente'],
                'turno' => $row['turno'],
                'estado' => $row['estado']
            );
        }
        $result->close();
        $this->db_close();
        $jsonstring = json_encode($json);
        echo $jsonstring;
        return ($jsonstring);
    }
}