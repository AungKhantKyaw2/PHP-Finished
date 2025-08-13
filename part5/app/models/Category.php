<?php


Class Category{
    private $db;
  
    public function __construct(){   
          //   echo "i am Article Model <br/>";
             $this->db =new SystemDatabase();
    }



       public function allcategories(){
         $this->db->dbquery("SELECT *,
         categories.id AS categoryid,
          categories.name AS originalname,
          categories.created_at AS publicdate 
         FROM categories INNER JOIN users 
         ON categories.user_id = users.id 
         ORDER BY categories.created_at DESC
          ");
      $row= $this->db->getmultidataobj();
       return $row;
    } 

    public function createcategory($data){
         $this->db->dbquery("INSERT INTO categories(name,status_id,user_id) VALUE(:name,:status_id,:user_id)");

         $this->db->dbbind(':name',$data['name']);
         $this->db->dbbind(':status_id',$data['status_id']);
         $this->db->dbbind(':user_id',$data['user_id']);

         if($this->db->dbexecute()){
            return true;
          }else{
            return false;
          }
    }

    public function getcategorysbyid($id){
      $this->db->dbquery("SELECT * FROM categories WHERE id=:id");

      $this->db->dbbind(':id',$id);
      $row= $this->db->getsingledataassoc();
      
      return $row;
  
 }

 public function updatecategory($data){
   $this->db->dbquery("UPDATE categories SET name=:name,status_id =:status_id WHERE id=:id");
   
   
   $this->db->dbbind(':id',$data['id']);
   $this->db->dbbind(':name',$data['name']);
   $this->db->dbbind(':status_id',$data['status_id']);

   if($this->db->dbexecute()){
      return true;
    }else{
      return false;
    }

}


public function deletecategory($id){

      $this->db->dbquery("DELETE FROM categories WHERE id=:id");

      $this->db->dbbind(':id',$id);
      $row= $this->db->getsingledataassoc();


      if($this->db->dbexecute()){
        return true;
      }else{
        return false;
      }
}


}


?>

<!-- 
CREATE TABLE IF NOT EXISTS  categories(
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50),
        user_id INT,
        status_id INT
        created_at TIMESTAMP DEFAULT now(),
        updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        FOREIGN KEY(status_id) REFERENCES statuses(id) ON UPDATE CASCADE ON DELETE CASCADE
        FOREIGN KEY(user_id) REFERENCES users(id) ON UPDATE CASCADE ON DELETE CASCADE

        );


DESC categories; -->