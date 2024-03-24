<?php
$servername="localhost";
$username="root";
$password="";
$dbname="form_one";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}
$Admission_number=$_POST['admission_number'];
$Fisrtname=$_POST['first_name'];
$Middlename=$_POST['middle_name'];
$Lastname=$_POST['last_name'];
$date_of_birth=$_POST['dob'];
$date_of_admission=$_POST['doa'];
$form=$_POST['form'];
$Gender=$_POST['gender'];
$Parent=$_POST['Parent'];
$Adress=$_POST['address'];
$Contact_number=$_POST['contact_number'];

$sql="INSERT INTO students(Admission_number,Firstname,Middlename,Lastname,Date_of_birth,Date_of_admission,Form_stream,
Gender,Parent,Adress,Contact_number) VALUE('$Admission_number','$Fisrtname','$Middlename','$Lastname','$date_of_birth',
'$date_of_admission','$form','$Gender','$Parent','$Adress','$Contact_number')";

if($conn->query($sql)===TRUE){
    echo "Student registered succssefuly";
}
else{
    echo "Error!Input Correct details";
}

$conn->close();
?>