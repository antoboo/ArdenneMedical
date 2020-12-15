<?php    
        $title = 'Success';
        require_once 'includes/header.php';  
        require_once 'db/conn.php';
        require_once 'db/crud.php';
        require_once 'sendemail.php';
        
       
        if(isset($_POST['submit'])) {
            //extract values from the $_POST array
            $fname = $_POST['firstname'];
            $lname = $_POST['lastname'];
            $dob = $_POST['dob'];
            $gender = $_POST['gender'];
            $email = $_POST['email'];
            $laddress = $_POST['laddress'];           
            $contact = $_POST['phone'];
            $doctors = $_POST['doctors'];          
            $orig_file = $_FILES["avatar"]["tmp_name"];
            $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
            $target_dir = 'uploads/ ';
            $destination = "$target_dir$contact.$ext";
            move_uploaded_file($orig_file, $destination);
            
        }
        $results = $crud -> checkemail($email);

       echo $results['emailaddress'];
           
          
            

            $isSuccess = $crud->insertClients($fname, $lname, $dob, $gender, $email, $laddress, $contact,$doctors, $destination); 
            $doctorsName=$crud->getDoctorsById($doctors);     
            $printname = $doctorsName["name"];
              
            if($isSuccess){
                SendEmail::Sendmail($email,"Welcome to Ardenne Medical Centre", " Hi " .$fname. " ".$lname.",". "<br/> <br/> You have successfully completed the appointment form and you have selected " .$printname." to be your attending doctor. <br/> <br/>You will be contacted shortly to confirm appointment on the contact number $contact provided. ,<br/> <br/> Thank you once again and see you soon $fname. ");
                
                
                include 'includes/successmessage.php';

            }
            else {
                include 'includes/errormessage.php';


                  function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                  }
                } 
        
              



    

?>





<img src = "<?php echo $destination;?> " class ="rounded-circle" style = "width: 10%; height:10%"/>

<div class="card" style="width: 20rem;">
        <div class="card-body">
            <h5 class="card-title"><?php echo $_POST['firstname'].' '. $_POST['lastname']; ?></h5>
            <h6 class="card-subtitle mb-2">Your Doctor is:
            <?php echo $doctorsName['name']; ?>
            </h6>
            <p class="card-text"> Date of Birth:  <?php echo $_POST['dob'];  ?> </p>
            <p class="card-text"> Email Add: <?php echo $_POST['email'];  ?> </p>
            <p class="card-text"> Telephone Number: <?php echo $_POST['phone'];  ?> </p>
            
        </div>
    </div>





   












<?php echo '<br/> <br/> <hr/>'; ?>
<?php require_once 'includes/footer.php'  ?>