<?php

require_once 'db/conn.php';

//Get values from post operation
        if(isset($_POST['submit'])) {
            //extract values from the $_POST array
            $id = $_POST['id'];
            $fname = $_POST['firstname'];
            $lname = $_POST['lastname'];
            $dob = $_POST['dob'];
            $gender = $_POST['gender'];
            $laddress = $_POST['laddress'];
            $email = $_POST['email'];
            $contact = $_POST['phone'];
            $doctors = $_POST['doctors'];


//Call CRUD Function 
        $result = $crud->editClients($id, $fname, $lname, $dob, $gender, $laddress, $email,  $contact,$doctors);
        
//Redirect to index.php
        if ($result){
            header("Location: viewrecords.php");
        }
        else{
            include 'includes/errormessage.php';

        }
    }
        else{
            include 'includes/errormessage.php';

        }

?>