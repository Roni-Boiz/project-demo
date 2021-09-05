<?php

require '../app/core/model.php';

class loginModel extends model {
    function __construct(){
         parent::__construct();
    }

    public function readTable(){
        $sql = "SELECT username And Password FROM user_account";
        $result = $this->conn->query($sql);   
        return $result;
    }
    public function readLogin($username, $password){
        $sql = "SELECT username,Password FROM user_account WHERE userName='{$username}' AND Password='{$password}'";
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            $resultSet=mysqli_fetch_array($result);
            print_r("Username: '{$resultSet[0]}' Password: '{$resultSet[1]}'");
            return true;
          } else {
            return false;
          }
    }
}
?>

