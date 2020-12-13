<?php 
    
        $title = 'Edit Record';
        require_once 'includes/header.php';
        require_once 'includes/auth_check.php';
        require_once 'db/conn.php';

        $results = $crud -> getDoctors();

        if(!isset ($_GET['id']))
        {
            //echo 'error'
            include 'includes/errormessage.php';
            header("Location: viewrecords.php");
        }
        else {

            $id = $_GET['id'];
            $clients = $crud -> getClientsDetails($id);
           
          

    ?>




    <h1 class ="text-center"> Edit Patients Records </h1>
        <div class="container">
            
        <img src="<?php echo $clients['avatar_path'];?> " class ="rounded-circle" style ="width: 20%; height:20%"/>

    <form method="post" action ="editpost.php">

            <input type ="hidden" name = "id" value="<?php echo $clients['clients_id'] ?>" />
        
        <div class="form-group">

            <label for="firstname">First Name</label>
            <input type="text" class="form-control" value="<?php echo $clients['firstname'] ?>" id="firstname" name = "firstname">
            
        </div>

        <div class="form-group">

            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" value="<?php echo $clients['lastname'] ?>" id="lastname" name ="lastname">
            
        </div>

        <div class="form-group">

            <label for="dob">Date of Birth</label>
            <input type="text" class="form-control" value="<?php echo $clients['dateofbirth'] ?>" id="dob"  name ="dob">
            
        </div>

        <div class="form-group">
                            <label for="gender">Gender -  <?php echo $clients['gender']; ?> </label><br/>
                                  
                            <input type="radio" id="Male" name="gender" value="Male">
                                    <label for="male">Male</label>
                                    <input type="radio" id="Female" name="gender" value="Female">
                                    <label for="Female">Female</label><br>
                                    
                                </div> 
   

                        <div class="form-group">
                            <label for="address">Address</label>
                                <input class="form-control" value="<?php echo $clients['laddress'] ?>" id="laddress" name="laddress" aria-describedby="laddressHelp">
                            <small id="laddressHelp" class="form-text text-danger">We'll never share your address with anyone else.</small>
                        </div>
            
                        <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input  class="form-control" value="<?php echo $clients['emailaddress'] ?>" id="email"  name="email" aria-describedby="emailHelp" >
                                    <small id="emailHelp" class="form-text text-white">We'll never share your email with anyone else.</small>
                        </div>


                                <div class="form-group">
                                    <label for="phone">Contact Number</label>
                                    <input type="text" class="form-control" value="<?php echo $clients['contactnumber'] ?>" id="phone" name ="phone" aria-describedby="phoneHelp">
                                    <small id="phoneHelp" class="form-text text-white">We'll never share your phone number with anyone else.</small>
                                </div>

                                <div class="form-group">

                                    <label for="doctors">Attending Doctors</label>
                                        <select class="form-control" id="doctors" name="doctors" >
                                            <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                                                <option value = "<?php echo $r['doctors_id']?>"
                                                    <?php if($r['doctors_id'] == $clients['doctors_id']) echo 'selected'?> >
                                                    <?php echo $r['name']; ?> 
                                                </option>
                                            <?php } ?>
                                        </select>

                                </div>

        <button type="submit"  name = "submit" class="btn btn-success">Save Changes</button>
        <a href = viewrecords.php  class="btn btn-primary float-right"> Back to List </a>   

    </form>
    </div>

<?php } ?>


    <?php echo '<br/> <br/> <hr/>'; ?>
    <?php require_once 'includes/footer.php'  ?>


