<?php
require_once(PATH_MODELS .'Login/LoginModel.php');

class LoginController extends Controller {
    
    private $loginModel;
    
    public function __construct()
    {
        $this->loginModel = new LoginModel();        
    }

    public function login($params){
        $validate = $this->loginModel->validate_user($params["Email"],$params["Pass"]);
        
        if($validate){
            header("Location:".FOLDER_PATH."/index");
        }else{
            echo "revise sus credenciales";
        }
    }

    public function exec(){
        $this->render(__CLASS__);
    }

}