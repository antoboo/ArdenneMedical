<?php 
    
    $title = 'Appointment';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    $results = $crud -> getDoctors();

?>

<!-- 
    -First Name
    -Last Name
    - Date of Birth (Use DatePicker)
    -Specialty (Database Admin, Software Developer, Web Administration, Other)
    -Email Address
    -Contact Number 
-->




<h2 class ="text-center "> <span>Make Your Appointments</span> </h2>

<form action ="success.php" method="post"  enctype="multipart/form-data">
<div class="container">
    
        <div class="form-group">

            <label for="firstname">First Name</label>
            <input required type="text" class="form-control" id="firstname" name = "firstname">
            
        </div>

            <div class="form-group">

                <label for="lastname">Last Name</label>
                <input required type="text" class="form-control" id="lastname" name ="lastname">
                
            </div>

                <div class="form-group">

                    <label for="dob">Date of Birth</label>
                    <input required type="text" class="form-control" id="dob"  name ="dob">
                    
                </div>

                <div class="form-group">
                            <label for="gender">Gender</label><br/>
                                <!-- <input required type="radio" class="form-control" id="mgender" name="mgender" aria-describedby="genderHelp">
                                <input required type="radio" class="form-control" id="lgender" name="fgender" aria-describedby="genderHelp"> -->
                                    <input type="radio" id="Male" name="gender" value="Male">
                                    <label for="Male">Male</label>
                                    <input type="radio" id="Female" name="gender" value="Female">
                                    <label for="Female">Female</label><br>
                                    
                                </div>                             


                        <div class="form-group">
                            <label for="address">Address</label>
                                <input required type="laddress" class="form-control" id="laddress" name="laddress" aria-describedby="laddressHelp">
                            <medium id="laddressHelp" class="form-text text-danger">We'll never share your address with anyone else.</medium>
                        </div>

                        <div class="form-group">
                            <label for="email">Email address</label>
                                <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-danger">We'll never share your email with anyone else.</small>
                        </div>

                            <div class="form-group">
                                <label for="phone">Contact Number</label>
                                    <input required type="text" class="form-control" id="phone" name ="phone" aria-describedby="phoneHelp">
                                <small id="phoneHelp" class="form-text text-danger">We'll never share your phone number with anyone else.</small>
                            </div>

                                <div class="form-group">

                                <label for="doctors">Attending Doctors</label>
                                <select class="form-control" id="doctors" name="doctors" >
                                    <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                                        <option value = "<?php echo $r['doctors_id']?>"> <?php echo $r['name']; ?> </option>
                                    <?php } ?>
                                </select>

                                </div>      

                <div class="custom-file">
                    <input type="file" accept="image/*" class="custom-file-input form-group" id="avatar" name="avatar" >
                    <label class="custom-file-label" for="avatar">Choose File</label>
                    <small id="avatarHelp" class="form-text text-success"> Upload is Optional</small>
                </div>

   

    <button type="submit"  name = "submit" class="btn btn-success btn-block" disable> Register</button>
    
    <input type="submit" id="submit" name = "submit" value="Register Now"> 
</form>
    </div>
        


<?php echo '<br/> <br/> <hr/>'; ?>
<?php require_once 'includes/footer.php'  ?>



















