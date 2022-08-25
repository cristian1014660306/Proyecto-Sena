<?php

require_once("connection.php");

class LoginModel extends Connection {

    private $user_id;
    private $user_email;
    private $user_pass;
    private $user_role;

    public function __contruct(){
        parent::_construct();
    }


    public function validate_user($email, $pass, $role){

        $stm = $this->pdo->prepare("SELECT * FROM 'user' WHERE 'user_email' = :EmailParam AND 'user_pass' = :PassParam AND 'user_role' = :RoleParam ");

        $stm->binparam('EmailParam', $email);
        $stm->binparam('PassParam', $pass);
        $stm->binparam('RoleParam', $role);

        $stm->execute();

        $data = $stm->Fetch();

        

    }



}

?>















}


