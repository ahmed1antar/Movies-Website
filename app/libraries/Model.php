<?php 

namespace MVC\libraries; 

use PDO;

Class Model
{
	public function db_connect()
	{

		try{

			$string = DATABASE_TYPE .":host=".SERVER.";dbname=".DATABASE.";";
			return $db = new PDO($string,USERNAME,PASSWORD);
			
		}catch(PDOExecption $e){

			die($e->getMessage());
		}
	}

    public function read($query,$data=[])
    {
        $DB = $this->db_connect();
        $stmt = $DB->prepare($query);
        $stmt->execute($data);
        $d = $stmt->fetchAll();
        return $d;
    }

    public function write($query,$data=[])
    {
        $DB = $this->db_connect();
        $stmt = $DB->prepare($query);
        $stmt->execute($data);
    }

    // public function run($query,$data=[])
    // {
    //     $DB = $this->db_connect();
    //     $stmt = $DB->prepare($query);
    //     $stmt->execute();
    //     $row = $stmt->fetch();
    //     return $row;
    // }


}