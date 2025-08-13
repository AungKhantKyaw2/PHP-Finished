<?php
//  require_once "../libraries/SystemController.php";
    class WelcomesController extends SystemController{
        private $mainmodel;
        private $articlemodel;
     
        public function __construct()
        {   
            // echo "i am Welcome Controller";
            $this->mainmodel=$this->model('Welcome');
            $this->articlemodel=$this->model('Article');
        }

        public function index(){


            $limit = 4; //number of article per page
            
            $page= isset($_GET['page']) ? $_GET['page'] :1 ;

            $offset = ($page - 1) * $limit ; //page1= article 123, pag2 = article 456,//(1-1)*3 =0 //(2-1)*3 =3 //
            $totalcount = $this->articlemodel->gettotalarticles();
            $totalpages = ceil($totalcount/$limit);
            // var_dump($totalcount);///array(1) { ["total"]=> int(3) }
           
            $articles =$this->articlemodel->getpagination($limit,$offset);

       
                $datas=[
                    'articles'=>$articles,
                    'page'=>$page,
                    'totalpages'=>$totalpages
                  ];
              
                  $this->view('welcomes/index',$datas);
        }
        public function about(){
            $datas=[
                
                "title"=>"ABout",
              ];
              $this->view('welcomes/about',$datas);  
        }
        public function property($id){
                echo "I am Article Show Page = ID is $id <br/>";
        }
        public function service($id){
            echo "I am Article Edit Page = ID is $id <br/>";
        }

        public function customer($id){
            echo "I am Article Update Page = ID is $id <br/>";
        }
        public function furniture($id){
            echo "I am Article Destroy Page = ID is $id <br/>";
        }
        public function contact($id){
            echo "I am Article Destroy Page = ID is $id <br/>";
        }
    }

//  new ArticlesController();  
?>



<!-- modifier        same class   subclass   outside     
public          yes             yes     yes
protected        yes            yes     no
private           yes           no      no  -->