<?php

class SystemController{

    public function view($blade,$datas=[]){
        //  echo "I am view from libraries > Controller";

        //  $this->view('articles/index');
         if(file_exists('../app/views/'.$blade.'.php')){
                // echo "View file exists";
            require_once '../app/views/'.$blade.'.php';
         }else{
             die("View files does not exists");
         }
    }

    public function model($model){
        // echo "I am Model from libraries > Controller<br/>";

        //$this->model('Article');
        if(file_exists('../app/models/'.$model.'.php')){
            // echo "Modal file exists";
            require_once '../app/models/'.$model.'.php';
            
            return new $model();
     }else{
         die("Modal files does not exists");
     }
    }

}


?>