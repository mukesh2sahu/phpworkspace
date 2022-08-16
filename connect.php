 
 
 <?php

include 'connectphp.php';
echo'<pre>';print_r($_REQUEST);
$firstname = $_POST['firstName'];
$lastname = $_POST['lastName'];
$dateOfBirth = date("Y-m-d", strtotime($_POST['dateOfBirth'])) ;
$gender = $_POST['gender'];
$email = $_POST['email'];
$number = $_POST['phoneNumber'];
$country = $_POST['country'];
$state = $_POST['state'];
$address = $_POST['address'];
$pincode = $_POST['pincode'];
$int = $_POST['interest'];


// echo $city;
//  echo "insert into registration(firstname,lastname,dateofBirth,email,number,interest,gender)
//  values('$firstname','$lastname','$dateOfBirth','$email','$number','$interest','$gender')";
// exit(); 

//database connection

// $conn = new mysqli('localhost','root','','test');

// if($conn->connect_error){
//     die('Connection Failed : '.$conn->connect_error);
// }else{
    
echo $sql = "insert into registration(firstname,lastname,dateofBirth,email,number,gender,country,address,pincode,state)
values('$firstname','$lastname','$dateOfBirth','$email','$number','$gender','$country','$address','$pincode','$state')";
mysqli_query($conn,$sql);
$customer_id=mysqli_insert_id($conn);
echo'<pre>';
print_r($int);
foreach ($int as $interest){
    $sql_text="INSERT INTO interest_customer_mapping (customer_id,interest_id) values ('$customer_id','$interest')";
    $sqlfa=mysqli_query($conn,$sql_text);
}
echo "registration successfully...";



?>