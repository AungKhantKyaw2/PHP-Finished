<?php
//  require_once "../libraries/SystemController.php";
    class ArticlesController extends SystemController{
        public $articlemodel;
        private $categorymodel;
        private $statusmodel;
        private $usermodel;
        public function __construct()
        {       
            if(!authcheck()){
                redirect('users/login');
            }else{
                $this->articlemodel=$this->model('Article');
                $this->statusmodel=$this->model('Status');
                $this->usermodel=$this->model('User');
                $this->categorymodel =$this->model('Category');
            }
            
            
               

        
        }

        public function index(){
  
            // Without Pagination 

            // $articles =$this->articlemodel->allarticles();
            //     $datas=[
                
                 
            //         'articles'=>$articles
            //       ];
            //     return  $this->view('articles/index',$datas);

            //with Pagination 

           //With pagination  (http://127.0.0.1/PHP/part5/articles?page=2)
            $limit = 3; //number of article per page
            
            $page= isset($_GET['page']) ? $_GET['page'] :1 ;

            $offset = ($page - 1) * $limit ; //page1= article 123, pag2 = article 456,//(1-1)*3 =0 //(2-1)*3 =3 //
            $totalcount = $this->articlemodel->gettotalarticles();
            $totalpages = ceil($totalcount/$limit);
            // var_dump($totalcount);///array(1) { ["total"]=> int(3) }
           
            $articles =$this->articlemodel->getpagination($limit,$offset);
      
        
                $datas=[
                    'articles'=>$articles,
                    'page'=>$page,
                    'totalpages'=>$totalpages,
                   
                  ];
                  return  $this->view('articles/index',$datas);
        }

        public function create(){
            if($_SERVER["REQUEST_METHOD"] =="POST"){
                   
                // die("Form Submitted");

                //to prevent Cross-Site Scripting (XSS) attacks by HTML and javascript code

                    $POST= filter_input_array(INPUT_POST,FILTER_SANITIZE_SPECIAL_CHARS); //FILTER_SANITIZE_SPECIAL_CHARS
            
                $categories = $this->categorymodel->allcategories();
                $statuses= $this->statusmodel->allstatuses();

                
                $datas=[


                    "image"=>$_FILES['image']['name'],
                    "title"=>textfilter($_POST['title'] ?? ''),
                    "content"=>textfilter($_POST['content'] ?? ''),
                    "category_id"=>textfilter($_POST['category_id'] ?? ''),
                    "status_id"=>textfilter($_POST['status_id'] ?? ''),
                    "user_id"=> $_SESSION['user_id'],
                    "imageerr"=>"",
                    "titleerr"=>"",
                    "contenterr"=>"",
                    "categories"=>$categories,
                    "category_iderr"=>"",
                    "statuses"=>$statuses,
                    "status_iderr"=>"",

                ];

                
                //validate data
                if(empty($datas['image'])){
                    $datas["imageerr"]= "Please insert image";
                }
                if(empty($datas['title'])){
                    $datas["titleerr"]= "Please enter title";
                }
                if(empty($datas['content'])){
                    $datas["contenterr"]= "Please enter content";
                }
                if(empty($datas['category_id'])){
                    $datas["category_iderr"]= "Please enter title";
                }

                if(empty($datas['status_id'])){
                    $datas["status_iderr"]= "Please enter title";
                }


                // no errors
                if(empty($datas["imageerr"]) && empty($datas["titleerr"]) && empty($datas["contenterr"]) && empty($datas["category_iderr"]) && empty($datas["status_iderr"])){
                  

                // upload single image 

                    $getroot = dirname(dirname(dirname(__FILE__)));//C:/xampp/htdocs/PHP/part5/
                    $uploaddir =$getroot."/public/assets/images/";//C:/xampp/htdocs/PHP/part5/public/assets/images
                    $newfilename = $datas['user_id'].time().basename($_FILES['image']['name']);
                    $uploadfile= $uploaddir.$newfilename;

                    if(move_uploaded_file($_FILES['image']['tmp_name'],$uploadfile)){
                            $datas["image"]=$newfilename;
                    }else{
                        die("Uplading Failed !!!!.");

                    }
                if($this->articlemodel->createarticle($datas)){
                        flash("article_successs","New Article Created");
                        redirect("articles");
                }else{
                    die("Something went wrong !!!!.");
                }

                }else{

                  //load the view with validation errors
                  return  $this->view('articles/create',$datas);
                }

                
                  
            }else{

                $statuses= $this->statusmodel->allstatuses();
                $categories = $this->categorymodel->allcategories();

                $datas=[

                    "image"=>"",
                    "title"=>"",
                    "content"=>"",
                    "categories"=>$categories,
                    "statuses"=>$statuses
                ];
                return $this->view('articles/create',$datas);
            }

            
        }
        public function show($id){
      
            $article=$this->articlemodel->getarticlebyid($id);
            $user = $this->usermodel->getuserbyid($article['user_id']);
            $category = $this->categorymodel->getcategorysbyid($article['category_id']);
            $status = $this->statusmodel->getstatusbyid($article['status_id']);

            $datas=[

     
                "article"=>$article,
                "category"=>$category,
                "status"=>$status,
                "user"=>$user
            ];

            return  $this->view('articles/show',$datas);
        }
        public function edit($id){


            if($_SERVER["REQUEST_METHOD"] =="POST"){
                   
                // die("Form Submitted");

                //to prevent Cross-Site Scripting (XSS) attacks by HTML and javascript code

                $_POST= filter_input_array(INPUT_POST,FILTER_SANITIZE_SPECIAL_CHARS); //FILTER_SANITIZE_SPECIAL_CHARS
            
                $categories = $this->categorymodel->allcategories();
                $statuses= $this->statusmodel->allstatuses();

                
                $datas=[

                    "id"=>$id,
                    "image"=>$_POST['old_image'],
                    "title"=>textfilter($_POST['title'] ?? ''),
                    "content"=>textfilter($_POST['content'] ?? ''),
                    "category_id"=>textfilter($_POST['category_id'] ?? ''),
                    "status_id"=>textfilter($_POST['status_id'] ?? ''),
                    "user_id"=> $_SESSION['user_id'],
                    "imageerr"=>"",
                    "titleerr"=>"",
                    "contenterr"=>"",
                    "categories"=>$categories,
                    "category_iderr"=>"",
                    "statuses"=>$statuses,
                    "status_iderr"=>"",

                ];

                
                //validate data
         
                if(empty($datas['title'])){
                    $datas["titleerr"]= "Please enter title";
                }
                if(empty($datas['content'])){
                    $datas["contenterr"]= "Please enter content";
                }
                if(empty($datas['category_id'])){
                    $datas["category_iderr"]= "Please enter title";
                }

                if(empty($datas['status_id'])){
                    $datas["status_iderr"]= "Please enter title";
                }


                // no errors
                if(empty($datas["titleerr"]) && empty($datas["contenterr"]) && empty($datas["category_iderr"]) && empty($datas["status_iderr"])){
                  

                // upload single image 

                if(!empty($_FILES["image"]["name"])){

                    $getroot = dirname(dirname(dirname(__FILE__)));//C:/xampp/htdocs/PHP/part5/
                    $uploaddir =$getroot."/public/assets/images/";//C:/xampp/htdocs/PHP/part5/public/assets/images
                    $newfilename = $datas['user_id'].time().basename($_FILES['image']['name']);
                    $uploadfile= $uploaddir.$newfilename;
                        //remove old image
                        $getoldimage =$uploaddir.$datas["image"];

                        if(file_exists($getoldimage)){
                            unlink($getoldimage);
                        }   

                        //upload new image
                        if(move_uploaded_file($_FILES['image']['tmp_name'],$uploadfile)){
                                $datas["image"]=$newfilename;
                        }else{
                            die("Uplading Failed !!!!.");
    
                        }
                }else{

                        //get old image
                        $datas["image"] =$_POST['old_image'];

                }

         
                if($this->articlemodel->updatearticle($datas)){
                        flash("article_successs","New Article Created");
                        redirect("articles");
                }else{
                    die("Something went wrong !!!!.");
                }

                }else{

                  //load the view with validation errors
                  return  $this->view('articles/edit',$datas);
                }

                
                  
            }else{

                $article=$this->articlemodel->getarticlebyid($id);
                $statuses= $this->statusmodel->allstatuses();
                $categories = $this->categorymodel->allcategories();

                        //check status owner
                if($article['user_id']!= $_SESSION['user_id']){
                    redirect("statuses");
                } 

                $datas=[
                    "id"=>$id,
                    "image"=>$article["image"],
                    "title"=>$article["title"],
                    "content"=>$article["content"],
                    "category_id"=>$article["category_id"],
                    "status_id"=>$article["status_id"],
                    "categories"=>$categories,
                    "statuses"=>$statuses,
                ];
                return $this->view('articles/edit',$datas);
            }


        }

        public function update($id){
            echo "I am Article Update Page = ID is $id <br/>";
        }
        public function destroy($id){
            
            if($_SERVER['REQUEST_METHOD']=="POST"){

                $article = $this->articlemodel->getarticlebyid($id);
                $category =$this->categorymodel->getcategorysbyid($id);
                $statuses= $this->statusmodel->allstatuses();
             
                //check status owner

                if($article['user_id']!= $_SESSION['user_id']){
                    redirect("article");
                } 


                $getroot = dirname(dirname(dirname(__FILE__)));//C:/xampp/htdocs/PHP/part5/
                $uploaddir =$getroot."/public/assets/images/";//C:/xampp/htdocs/PHP/part5/public/assets/images
                $getoldimage =$uploaddir.$article["image"];

                    if(file_exists($getoldimage)){
                        unlink($getoldimage);
                    }   

                 
                if($this->articlemodel->deletearticle($id)){
                    flash("article_successs","Deleted Successfully!");
                    redirect("articles");
               }else{
                   die("Something went wrong !!!!.");
               }


            }else{
                redirect("articles");
            }
        
        }
    }

//  new ArticlesController();  
?>