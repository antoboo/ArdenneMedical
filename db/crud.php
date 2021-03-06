<?php 
        class crud{
       
            
            private $db;

            //constructor to initialize private variable to the database connection
            function __construct($conn){
                $this ->db = $conn;
            }
        
        
            
            public function insertClients($fname, $lname, $dob, $gender,  $email, $laddress, $contact, $doctors, $avatar_path)
            {
                
                try {
                    //define sql statement to be excuted
                    $sql = "INSERT INTO clients (firstname,lastname,dateofbirth, gender, emailaddress,laddress,contactnumber,doctors_id,avatar_path)VALUES (:fname, :lname, :dob, :gender,  :email, :laddress, :contact, :doctors, :avatar_path)";
                    //define sql statement to be excuted
                    $stmt = $this -> db -> prepare($sql);       
                    //bind all placeholder to the actual values
                    $stmt->bindparam(':fname', $fname);
                    $stmt->bindparam(':lname', $lname);
                    $stmt->bindparam(':dob', $dob);
                    $stmt->bindparam(':gender', $gender);
                    $stmt->bindparam(':email', $email);
                    $stmt->bindparam(':laddress', $laddress);
                    $stmt->bindparam(':contact', $contact);
                    $stmt->bindparam(':doctors', $doctors);
                    $stmt->bindparam(':avatar_path', $avatar_path);
                    $stmt->execute();
                    return true;


                }
                catch ( PDOException $e)
                
                    {
                        echo $e->getMessage();
                        return false;
                    }

             


            }    

            public function editClients($id, $fname, $lname, $dob, $gender,$laddress, $email, $contact,$doctors){
                try {
                $sql = "UPDATE `clients` SET `firstname`=:fname,`lastname`=:lname,`dateofbirth`=:dob, `gender`=:gender, `laddress`=:laddress,`emailaddress`=:email, 
                `contactnumber`=:contact,`doctors_id`=:doctors WHERE clients_id = :id ";

                    $stmt = $this -> db -> prepare($sql);       
                    //bind all placeholder to the actual values
                    $stmt->bindparam(':id', $id);
                    $stmt->bindparam(':fname', $fname);
                    $stmt->bindparam(':lname', $lname);
                    $stmt->bindparam(':dob', $dob);
                    $stmt->bindparam(':gender', $gender);
                    $stmt->bindparam(':laddress', $laddress);
                    $stmt->bindparam(':email', $email);
                    $stmt->bindparam(':contact', $contact);
                    $stmt->bindparam(':doctors', $doctors);

                    $stmt->execute();
                    return true;
                }
                    catch ( PDOException $e)
                    {
                        echo $e->getMessage();
                        return false;
                    }
                }

            

            public function getClients(){

                $sql = "SELECT * FROM `clients` a inner join doctors s on a.doctors_id = s.doctors_id";
                $result = $this->db->query($sql);
                return $result;
            }


            public function getClientsDetails($id){

            try{
                $sql = "SELECT * from clients a inner join doctors s on a.doctors_id = s.doctors_id where clients_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt -> bindparam(':id',$id);
                $stmt ->execute();
                $result = $stmt->fetch();
                return $result;
            }catch( PDOException $e)
            {
                echo $e->getMessage();
                return false;

            }



            }
            public function getDoctors(){
            try{
                $sql = "SELECT * FROM `doctors`";
                $result = $this->db->query($sql);
                return $result;
            }catch( PDOException $e)
            {
                echo $e->getMessage();
                return false;

            }
            }

            public function getDoctorsById($id){
            try {
                $sql = "SELECT * FROM `doctors` where doctors_id = :id";
                $stmt = $this->db->prepare($sql);
                $stmt -> bindparam(':id', $id);
                $stmt ->execute();
                $result = $stmt->fetch();
                return $result;
            }catch( PDOException $e)
            {
                echo $e->getMessage();
                return false;

            }
            }


            public function deleteClients($id){
                try{
                     $sql = "delete from clients where clients_id = :id";
                     $stmt = $this->db->prepare($sql);
                     $stmt->bindparam(':id', $id);
                     $stmt->execute();
                     return true;
                 }catch (PDOException $e) {
                     echo $e->getMessage();
                     return false;
                 }
             }



            public function deleteAllClients(){
                
                try {

                    $sql = "TRUNCATE clients";
                    $stmt = $this->db->prepare($sql);
                    //$stmt -> bindparam(':id',$id);
                    $stmt ->execute();
                    return true;

                } 
                
                catch ( PDOException $e)
                {
                    echo $e->getMessage();
                    return false;
                }

            }


     //checking to see if email address exist

            public function checkemail($emailaddress){
         
                     try{
                    $sql = "SELECT emailaddress FROM clients where emailaddress = :emailaddress";
                    $stmt = $this->db->prepare($sql); 
                    $stmt -> bindparam(':emailaddress',$emailaddress,PDO::PARAM_STR);
                    $stmt ->execute();
                    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
                    $cnt=1;
                    if ($stmt->rowCount()>0) 
                    {
                        ?>
                        <div class="alert alert-danger" role="alert">
                        Your emailaddress was detected in our database, you will be contacted shorthly to confirm your multiple appointment requests
                        </div> <?php
                    }
                    else{?>

                        <!-- <div class="alert alert-success" role="alert">
                        Your appointment request was added, you will be contacted shorthly to confirm appointment date
                        </div>--><?php 
                    }
                     return $result;
                }
                catch ( PDOException $e)
                {
                    echo $e->getMessage();
                    return false;
                }

            }

        }
        
?>