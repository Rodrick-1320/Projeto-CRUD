<?php 

class ConnectDB  {
    public string $servername;
    public string $database;
    public string $password;
    public string $username;
    public string $sql;
    public $instance;
    
    public function __construct($servername, $username, $password, $database){
        $this->servername = $servername;
        $this->database = $database;
        $this->password = $password;
        $this->username = $username;
        $this->sql = '';

        $this->set_connect();
    }

    public function set_connect()
    {
        $this->instance = new mysqli($this->servername, $this->username, $this->password, $this->database);
    }

    public function get_connect()
    {
        return $this->instance;
    }

    public function check_connection()
    {
        return $this->instance ? true : false;
    }

    public function set_sql($sql)
    {   
        $this->sql = $sql;
    }

    function exec_sql() {
        if ($this->instance->query($this->sql)) {
            echo "New record created successfully";
        } else {
    
        }
    
        $this->instance->close();
    }

    public function prepare_sql($sql, $data)
    {
        $body = $sql;
        foreach($data as $key => $value) { 
            $body = str_replace('['.$key.']', "'$value'", $body);        
        }
        $this->set_sql($body);
    }

}
