<?php 
 require "env.php";
  abstract class database {
    protected $db;
 public function __construct() {
    try {
      
        $this->db = new PDO("mysql:host=localhost;dbname=livre","root","");
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "connexion à la base de donnees reussie! ";
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
 }
        
 
    
     protected function sendData($sql ,$data){
        try {
           
            $req=$this->db->prepare($sql);
            
            $req->execute($data);  
           // echo "données envoyé !"; 
        } catch (PDOException $th) {
            echo $th->getMessage(); 
        }
    }
    
    
   
     protected function getAllData($sql, $data=null) {
        try {
        $req = $this->db->prepare($sql);
        $req->execute($data);
        $response = $req->fetchAll(PDO::FETCH_ASSOC);
        // echo "Requête valide!";
        return $response;
        } catch (PDOException $th) {
        echo $th->getMessage();
        }
        }


        
        protected function deleteData($sql,$data){
            try {
               
                $req=$this->db->prepare($sql);
                
                $req->execute($data);  
                echo "élement suprimer !"; 
            } catch (PDOException $th) {
                echo $th->getMessage(); 
            }
        }

        protected function updateData($data,$sql){
            try {
                // $objBdd = $this->connectDB();
                $req=$this->db->prepare($sql);
                // $req = $objBdd->prepare($sql);
                $req->execute($data);  
                echo "updateOK !"; 
            } catch (PDOException $th) {
                echo $th->getMessage(); 
            }
        } 
        
        



    }



?>