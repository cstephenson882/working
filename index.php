<?php  

/*
use project\person;
use project\School;
use project\ContactInfo;
use project\Address;
use project\EmergencyContact;
use project\Application;
use project\Applicant;
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Information Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
</head>
<body>

    <div class="container" >
       <center> <h2>Application Form</h2>
        <form action="index.php" method="POST" style="width:50%">
        <h5>Personal information</h5>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="first_name" style="float:left">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="elen" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="last_name"  style="float:left">Last Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="jorden" required>
                </div>
            </div>
            <div class="form-group">
                <label for="date_of_birth"  style="float:left">Date of Birth</label>
                <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required>
            </div>
        
            <div class="form-group">
                <label for="gender"  style="float:left">Gender</label>
                <select class="form-control" id="gender" name="gender" required>
<option value="">Select Option</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>

</select>
            </div>
            <div class="form-group">
                <label for="email"  style="float:left">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="some@gmail.com" required>
            </div>
            <div class="form-group">
                <label for="phone"  style="float:left">Phone </label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="0000000"  required>
            </div>
            <h5>Address</h5>
             
             <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="street"  style="float:left">Street</label>
                    <input type="text" class="form-control" id="street" name="street" placeholder="abc" required>
                </div>
                <div class="form-group col-md-2">
                    <label for="zip"  style="float:left">Zip</label>
                    <input type="text" class="form-control" id="zip" name="zip"  placeholder="0000" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="country"  style="float:left">Country</label>
                    <input type="text" class="form-control" id="country" name="country" placeholder="abc" required>
                </div>
             </div>
             <h5>School information</h5>
             <div class="form-group">
                <label for="school_name"  style="float:left">School Name</label>
                <input type="text" class="form-control" id="school_name" name="school_name" placeholder="Steven Schools" required>
             </div>
             <h5>School address</h5>
             <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="school_street"  style="float:left">Street</label>
                    <input type="text" class="form-control" id="school_street" name="school_street" placeholder="0 street etc " required>
                </div>
                <div class="form-group col-md-2">
                    <label for="school_zip"  style="float:left">Zip</label>
                    <input type="text" class="form-control" id="school_zip" name="school_zip" placeholder="0000" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="school_country"  style="float:left">Country</label>
                    <input type="text" class="form-control" id="school_country" name="school_country" placeholder="abc" required>
                </div>
            </div>
            <h5>Emergency Contact</h5>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="e_first_name"  style="float:left">First Name</label>
                    <input type="text" class="form-control" id="e_first_name" name="e_first_name" placeholder="alen" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="e_last_name">Last Name</label>
                    <input type="text" class="form-control" id="e_last_name" name="e_last_name" placeholder="jordon" required>
                </div>
            </div>
            <div class="form-group">
                <label for="e_email"  style="float:left">Email</label>
                <input type="email" class="form-control" id="e_email" name="e_email" placeholder="some@gmail.com" required>
            </div>
            <div class="form-group">
                <label for="e_phone"  style="float:left">Phone </label>
                <input type="tel" class="form-control" id="e_phone" name="e_phone" placeholder="0000-0000-00" required>
            </div>
            <div class="form-group">
                <label for="room_type_preference"  style="float:left">Room type Preference</label>
                <select class="form-control" id="room_type_preference" name="room_type_preference" required>
<option value="">Select option</option>
                    <option value="single">Single</option>
                    <option value="Double">Double</option>

</select>
            </div>
            <div class="form-group">
                <label for="password"  style="float:left">Make a Password </label>
                <input type="password" class="form-control" id="password" name="password" placeholder="xxxxxx" required>
            </div>

            <input type="submit" class="btn btn-success" style="width:50%" value="Apply" name="submit" >

</form> 
<br>
<a href="process_application.php" class="btn btn-info">Go to Process Application page</a>
</center>
<?php

if(isset($_POST['submit'])){
    include_once 'project/person.php';
    include_once 'connection.php';

include_once 'project/School.php';
include_once 'project/Address.php';
include_once 'project/Contactinfo.php';
include_once 'project/EmergencyContact.php';
include_once 'project/UI.php';
include_once 'project/Application.php';

    $fname=$_POST['first_name'];
    $lname=$_POST['last_name'];

    $dob=$_POST['date_of_birth'];
    $gender=$_POST['gender'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $zip=$_POST['zip'];
    $street=$_POST['street'];
    $country=$_POST['country'];
    $school_name=$_POST['school_name'];
    $szip=$_POST['school_zip'];
    $sstreet=$_POST['school_street'];
    $scountry=$_POST['school_country'];
    $efname=$_POST['e_first_name'];
    $elname=$_POST['e_last_name'];

    $ephone=$_POST['e_phone'];
    $eemail=$_POST['e_email'];
    $room=$_POST['room_type_preference'];
    $password=$_POST['password'];
    $person=new person($fname,$lname,$dob,$gender); 
    $saddress=new Address($sstreet,$szip,$scountry);
    $school=new School($school_name,$saddress);
    $econtact=new ContactInfo($ephone,$eemail);
    $Emergency=new EmergencyContact($efname,$elname,$econtact);
    $contact=new ContactInfo($phone,$email);
    $address=new Address($street,$zip,$country);
  
$application =new Application($contact,$address,$school,$Emergency,$room,"pending",$person,$password);


$ui=new UI($conn,$application);
$ui->submitApplication();

}

?> 
</div>

</body>
</html>