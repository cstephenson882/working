
<?php  include_once 'connection.php';

include_once 'project/person.php';
include_once 'project/FacadeClass.php';

include_once 'project/School.php';
include_once 'project/Address.php';
include_once 'project/Contactinfo.php';
include_once 'project/EmergencyContact.php';
include_once 'project/UI.php';
include_once 'project/Application.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Information Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
</head>
<body>
    <div class="container" style="padding-top:100px">
       <center> 
        <form action="process_application.php" method="POST" style="width:300px">
        <h5>Process Application</h5>
        <div class="form-group">
                <label for="state">Select Application State</label>
                <select class="form-control" id="state" name="state" required>
                <option value="All">View All</option>
                    <option value="Pending">View Pending</option>
                    <option value="Accepted">View Accepted</option>
                    <option value="Rejected">View Rejected</option>

</select>
            </div>
            

            <input type="submit" class="btn btn-success" style="width:300px" name="submit" >

</form> 
<?php 
if(isset($_GET['del'])){
  $id=$_GET['del'];
$facade=new FacadeClass();
$result=$facade->removeApplication($id);
if($result){
  echo "<center class='alert alert-success'>Application Deleted successfully</center>";
}
}
if(isset($_GET['accept'])){
  $id=$_GET['accept'];
$facade=new FacadeClass();
$result=$facade->setApplicationAccepted($id);
if($result){
  echo "<center class='alert alert-success'>Application Accepted successfully</center>";
}
}
if(isset($_GET['reject'])){
  $id=$_GET['reject'];
$facade=new FacadeClass();
$result=$facade->setApplicationRejected($id);
if($result){
  echo "<center class='alert alert-success'>Application is  Rejected </center>";
}
}
if(isset($_GET['pending'])){
  $id=$_GET['pending'];
$facade=new FacadeClass();
$result=$facade->setApplicationPending($id);
if($result){
  echo "<center class='alert alert-success'>Application status changed to  pending successfully</center>";
}
}
?>
</center>

<table class="table table-hover">
<thead>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>State</th>
    <th>Action</th>
  </tr>
</thead>
<tbody>
<?php

if(isset($_POST['submit'])){




    $state=$_POST['state'];
    $result='';
switch($state){
    case 'Pending':
        $result= UI::showPendingApplications($conn);
        break;
        case 'Accepted':
            $result= UI::showAcceptedApplications($conn);
            break;
            case 'Rejected':
                $result= UI::showRejectedApplications($conn);
                break;  case 'All':
                  $result= UI::showAllApplications($conn);
                  break;
}
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
   $id=$row['AID'];
   $firstname=$row['FirstName'];

   $lastname=$row['LastName'];
   $State=$row['State'];
    ?>
  <tr>
    <td><?=$firstname?></td>
    <td><?=$lastname?></td>
    <td><?=$State?></td>
    <td><a href="process_application.php?del=<?=$id?>" class="btn btn-warrning">Delete</a>
    <a href="process_application.php?accept=<?=$id?>" class="btn btn-success">Accept</a>
    <a href="process_application.php?reject=<?=$id?>" class="btn btn-warrning">Reject</a>
    <a href="process_application.php?pending=<?=$id?>" class="btn btn-warrning">Pending</a></td>
  </tr>
 




 
<?php
} 

}else{
  echo"<tr>No Record Found</tr>";
}
?> </tbody>
</table>
<?php

}else{
   
$result=UI::showAllApplications($conn);

 



  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
   $id=$row['AID'];
   $firstname=$row['FirstName'];

   $lastname=$row['LastName'];
   $State=$row['State'];
    ?>
  <tr>
    <td><?=$firstname?></td>
    <td><?=$lastname?></td>
    <td><?=$State?></td>
    <td><a href="process_application.php?del=<?=$id?>" class="btn btn-warrning">Delete</a>
    <a href="process_application.php?accept=<?=$id?>" class="btn btn-success">Accept</a>
    <a href="process_application.php?reject=<?=$id?>" class="btn btn-warrning">Reject</a>
    <a href="process_application.php?pending=<?=$id?>" class="btn btn-warrning">Pending</a></td>
  </tr>
 




 
<?php
} 
?> </tbody>
</table>
<?php
}
}

?> 
</div>

</body>
</html>