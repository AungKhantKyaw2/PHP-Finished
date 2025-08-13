<?php
//  require_once "../libraries/SystemController.php";
    class CategoriesController extends SystemController{
        private $categorymodel;
        private $statusmodel;
        private $usermodel;
        public function __construct()
        {       
            if(!authcheck()){
                redirect('users/login');
            }else{
                $this->statusmodel=$this->model('Status');
                $this->usermodel=$this->model('User');
                $this->categorymodel =$this->model('Category');
            }
            
            
               

        
        }

        public function index(){
  

            $categories =$this->categorymodel->allcategories();
                $datas=[
                
                 
                    'categories'=>$categories
                  ];
                  $this->view('categories/index',$datas);
        }

        public function create(){
            if($_SERVER["REQUEST_METHOD"] =="POST"){
                   
                // die("Form Submitted");

                //to prevent Cross-Site Scripting (XSS) attacks by HTML and javascript code

                    $POST= filter_input_array(INPUT_POST,FILTER_SANITIZE_SPECIAL_CHARS); //FILTER_SANITIZE_SPECIAL_CHARS
            
                $statuses= $this->statusmodel->allstatuses();

                
                $datas=[

               
                    "name"=>textfilter($_POST['name'] ?? ''),
                    "status_id"=>textfilter($_POST['status_id'] ?? ''),
                    "user_id"=> $_SESSION['user_id'],
                    "nameerr"=>"",
                    "statu_iderr"=>"",
                    "statuses"=>$statuses

                ];

                
                //validate fullname 
                if(empty($datas['name'])){
                    $datas["nameerr"]= "Please enter category name";
                }
                if(empty($datas['status_id'])){
                    $datas["status_iderr"]= "Please choose status";
                }
                // no errors
                if(empty($datas["nameerr"]) && empty($datas["status_iderr"])){
                  
                    if($this->categorymodel->createcategory($datas)){
                         flash("category_success","New Category Created!");
                         redirect("categories");
                    }else{
                        die("Something went wrong !!!!.");
                    }
                }else{

                  //load the view with validation errors
                  return  $this->view('categories/create',$datas);
                }

                
                  
            }else{
                $statuses= $this->statusmodel->allstatuses();

                $datas=[
                    "name"=>"",
                    "statuses"=>$statuses
                ];
                return $this->view('categories/create',$datas);
            }

        
        }
        public function show($id){
                echo "I am Article Show Page = ID is $id <br/>";
        }
        public function edit($id){
            if($_SERVER["REQUEST_METHOD"] =="POST"){
                   
                // die("Form Submitted");

                //to prevent Cross-Site Scripting (XSS) attacks by HTML and javascript code

                    $_POST= filter_input_array(INPUT_POST,FILTER_SANITIZE_SPECIAL_CHARS); //FILTER_SANITIZE_SPECIAL_CHARS
            
                $statuses= $this->statusmodel->allstatuses();

                
                $datas=[

                    "id" => $id, // Add this line to include the category ID
                    "name"=>textfilter($_POST['name'] ?? ''),
                    "status_id"=>textfilter($_POST['status_id'] ?? ''),
                    "user_id"=> $_SESSION['user_id'],
                    "nameerr"=>"",
                    "status_iderr"=>"",
                    "statuses"=>$statuses

                ];

                
                //validate fullname 
                if(empty($datas['name'])){
                    $datas["nameerr"]= "Please enter category name";
                }
                if(empty($datas['status_id'])){
                    $datas["status_iderr"]= "Please choose status";
                }
                // no errors
                if(empty($datas["nameerr"]) && empty($datas["status_iderr"])){
                  
                    if($this->categorymodel->updatecategory($datas)){
                         flash("category_success"," Category Updated!");
                         redirect("categories");
                    }else{
                        die("Something went wrong !!!!.");
                    }
                }else{

                  //load the view with validation errors
                  return  $this->view('categories/edit',$datas);
                }

                
                  
            }else{

                $category = $this->categorymodel->getcategorysbyid($id);
                $statuses= $this->statusmodel->allstatuses();

                 //check category owner

                 if($category['user_id']!= $_SESSION['user_id']){
                    redirect("categories");
                } 

                 

                $datas=[

                    "id"=>$id,
                    "name"=>$category["name"],
                    "status_id"=>$category["status_id"],
                    "statuses"=>$statuses
                ];
                return $this->view('categories/edit',$datas);
            }

        }

        public function update($id){
            echo "I am Article Update Page = ID is $id <br/>";
        }
        public function destroy($id){
            
            if($_SERVER['REQUEST_METHOD']=="POST"){

                $category =$this->categorymodel->getcategorysbyid($id);
                $statuses= $this->statusmodel->allstatuses();
                //check status owner

                if($category['user_id']!= $_SESSION['user_id']){
                    redirect("statuses");
                } 

                 
                if($this->categorymodel-> deletecategory($id)){
                    flash("status_success","Deleted Successfully!");
                    redirect("categories");
               }else{
                   die("Something went wrong !!!!.");
               }


            }else{
                redirect("statuses");
            }
        
        }
    }

//  new ArticlesController();  
?>