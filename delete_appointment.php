<?php 
 include('db.php');
 include('auth.php');
 extract($_POST);

$del=$_GET['rno'];
//fetch all data where id =$del

//insert  into delete table
$sql="select  appointment_id,appointment_doctor,appointment_patient,appointment_time,appointment_date,appointment_available from appointment where appointment_id='$del'";
$ss=mysqli_query($con,$sql);
$f=mysqli_fetch_array($ss);

$que="insert into delete_appointment(appointment_id,appointment_doctor,appointment_patient,appointment_time,appointment_date,appointment_available) values('$f[0]','$f[1]','$f[2]','$f[3]','$f[4]','$f[5]')";
$ss=mysqli_query($con,$que);
$del=mysqli_query($con,"delete from appointment where appointment_id='$del'");

echo "<script>window.location='index.php?page=appointment-list'</script>";

?>


