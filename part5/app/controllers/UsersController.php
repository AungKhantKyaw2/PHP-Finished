<?php
//  require_once "../libraries/SystemController.php";
    class UsersController extends SystemController{
        private $usermodel;
        public function __construct()
        {   
            echo "i am ArticlesController";
            $this->usermodel=$this->model('User');
        }

        public function register(){
   
            if(  $_SERVER['REQUEST_METHOD'] =='POST')
            {

                $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_SPECIAL_CHARS);
                $datas=[
                    "fullname"=>textfilter($_POST['fullname'] ?? ''),
                    "email"=>textfilter($_POST['email'] ?? ''),
                    "password"=>textfilter($_POST['password'] ?? ''),
                    "cfmpassword"=>textfilter($_POST['cfmpassword'] ?? ''),
                    "fullnameerr"=>"",
                    "emailerr"=>"",
                    "passworderr"=>"",
                    "cfmpassworderr"=>""

                ];

                //validate fullname 
                if(empty($datas['fullname'])){
                    $datas["fullnameerr"]= "Please enter full name";
                }

                   //validate email
                   if(empty($datas['email'])){
                    $datas["emailerr"]= "Please enter email address";
                }elseif(!filter_var($datas['email'],FILTER_VALIDATE_EMAIL)){
                    $datas["emailerr"]= "Please enter email address";
                }else{

                    // check email already exist or not 
                    if($this->usermodel->checkuniqueemail($datas['email'])){
                        $datas["emailerr"]= "This email is already registered";
                    }
                }

                   //validate password
                   if(empty($datas['password'])){
                    $datas["passworderr"]= "Please enter a password";
                }elseif(strlen($datas['password'])<5){
                    $datas["passworderr"]= "Please enter a password at least 5 characters";
                }
                   //validate confirm password
                   if(empty($datas['cfmpassword'])){
                    $datas["cfmpassworderr"]= "Please confirm your password";
                }else if($datas['cfmpassword'] !== $datas['password'] ){
                    $datas["cfmpassworderr"]= "Password do not match";
                }

                //no errors
                if(
                    empty($datas["fullnameerr"]) &&
                    empty($datas["emailerr"]) &&
                    empty($datas["passworderr"]) &&
                    empty($datas["cfmpassworderr"])
                ){
                    //hash the password


                    $datas["password"]=password_hash($datas["password"],PASSWORD_DEFAULT);
                    //register the user
                    if($this->usermodel->register($datas)){
                         flash("register_success","You have successfully registered!");
                         redirect("users/login");
                    }else{
                        die("Something went wrong while registering.");
                    }
                }else{

                  //Error Sending  
                  return  $this->view('users/register',$datas);
                }

            }
             
            
            else{
                        $datas=[
                            "fullname"=>"",
                            "email"=>"",
                            "password"=>"",
                            "cfmpassword"=>"",
                            "fullnameerr"=>"",
                            "emailerr"=>"",
                            "passworderr"=>"",
                            "cfmpassworderr"=>""

                        ];
            }
            return      $this->view('users/register',$datas);
        }
        public function login(){
            if(  $_SERVER['REQUEST_METHOD'] =='POST')
            {

                $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_SPECIAL_CHARS);
                $datas=[
                    
                    "email"=>textfilter($_POST['email'] ?? ''),
                    "password"=>textfilter($_POST['password'] ?? ''),
                    "emailerr"=>"",
                    "passworderr"=>"",
                 

                ];

            

                   //validate email
                   if(empty($datas['email'])){
                    $datas["emailerr"]= "Please enter email address";
                }elseif(!filter_var($datas['email'],FILTER_VALIDATE_EMAIL)){
                    $datas["emailerr"]= "Please enter valid email address";
                }elseif(!$this->usermodel->checkuniqueemail($datas['email'])){

                    // check email already exist or not 
                    $datas["emailerr"]= "No user Found with this email";
                }

                   //validate password
                   if(empty($datas['password'])){
                    $datas["passworderr"]= "Please enter a password";
                }
          

                //check for validation
                if( empty($datas["emailerr"]) &&  empty($datas["passworderr"])    ){
                   
                   
                  $loginuser = $this->usermodel->login($datas['email'],$datas['password']) ;

                  if($loginuser){


                      //set online
                    // $this->usermodel->setonlinestatus($loginuser['id']);

                    //successfull login
                    $this->createusesession($loginuser);

                           //set online
                           $this->usermodel->setonlinestatus( $_SESSION['user_id']); // give you user.id
           
                        
                  }else{
                        $datas["passworderr"] ="Password Incorrect.";
                  }
                  
         
                }else{

                  //Error Sending  
                  return  $this->view('users/login',$datas);
                }

            }
             
            
            else{
                        $datas=[
                            "email"=>"",
                            "password"=>"",
                            "emailerr"=>"",
                            "passworderr"=>"",
                       

                        ];

               
            }
            return  $this->view('users/login',$datas);   
            }
        public function logout(){

            //set offline
            $this->usermodel->setofflinestatus($_SESSION['user_id']);
               unset($_SESSION['user_id']);
               unset($_SESSION['user_name']);
               unset($_SESSION['user_email']);

               session_destroy();

               //Set Offline
               redirect('users/login');
        }

        public function createusesession($user){
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] =$user['name'];
            $_SESSION['user_email'] =$user['email'];


            redirect("welcomes/index");
        }
        
        public function whoisonline(){
            $onlineusers = $this->usermodel->getonlineusers();
            $offlineusers =$this->usermodel->getofflineusers();

            $datas=[
                "onlineusers"=>$onlineusers,
                "offlineusers"=>$offlineusers
            ];

            return $this->view("users/whoisonline",$datas);
        }
    }

//  new ArticlesController();  
?>