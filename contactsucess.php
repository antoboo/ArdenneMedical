<?php    
        $title = 'Contact Success';
        require_once 'includes/header.php';  
        require_once 'contactsendemail.php';
        
        $FromEmail= '';
        $Subject = '';
        $msg = '';


        if(isset($_POST['submit'])) {
            //extract values from the $_POST array
            $UName = $_POST['UName'];          
            $FromEmail = $_POST['FromEmail'];
            $Subject = $_POST['Subject'];           
            $msg = $_POST['msg'];
          }


           $isSuccess = $FromEmail;

            if($isSuccess){
                SendEmail::Sendmail($FromEmail,$Subject, $msg);
                
                
                include '/includes/successmessage.php';

            }else {
                include '/includes/errormessage.php';


               

                  function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                  }
            
        }



    

?>
<?php echo '<br/> <br/> <hr/>'; ?>

<?php require_once 'includes/footer.php'  ?>