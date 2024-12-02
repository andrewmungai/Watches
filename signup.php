<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury watches website</title>

    <!--font awesome cdn link to allow me tp add icons-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    

</head>
<body>

<?php
require_once("process-form.php");

if(isset($POST["submit"])){
    $Firstname=$_POST["First name"];
    $Secondname=$_POST["Second name"];
    $Username=$_POST["Username"];
    $Password=$_POST["Password"];
    $Email=$_POST["Email"];
    $Phone=$_POST["Phone"];
    $Bday=$_POST["Bday"];
    $Quantity=$_POST["Quantity"];
    $Title=$_POST["Title"];
    $Payment=$_POST["Payment"];
    $Subscribe=$_POST["Subscribe"];
    $Comment=$_POST["Comment"];

    

        $insert = "INSERT INTO users(First name ,Second name,Username,Password,Email,Phone,Bday,Quantity,Title,Payment,Subscribe,Comment)
        VALUES(?,?,?,?,?,?,?,?,?,?,?,?);";

if($conn->query($insert)=== TRUE){
 echo"New record created successfully";
 }
else{
    echo"Error" . $inert. "<br>" . $conn->error;
}
}

$conn->close();
    
?>
    <h1><WELCOME!>
    <form action="process-form.php"method="POST"><!--we use POST method to submit user data.When we want to grab data from data base we use GET method-->
    <label for="First name ">First name:</label>
    <input type="Name" id="First name" >
    <br><br>

    <label for="Second name">Second name:</label>
    <input type="Name" id="Second name" >
    <br><br>


    <label for="Username">Username:</label>
    <input type="Text" id="Username" placeholder="Lee Andrew Mungai Kairu"> 
    <br><br>
   
    <!--id should march the label attribute, if it doesn't march then you can't type anything in the box-->
    <!--create another label but for password-->

    <label for="Password">Password:</label>
    <input type="Password" id="Password"  minlength="6" maxlenghth="15" required> 
    <br><br>

    <!--create another label for email-->
    <label for="Email"> Email :</label>
    <input type="email" id="email" placeholder="andrewkairu12@gmail.com">
    <br><br>

    <!--create another label for phone-->
    <label for="Phone"> Phone:</label>
    <input type="tel" id="phone" placeholder="+254">
    <br><br>

    <!--create another label for date of birth-->
    <label for="Bday"> Birthdate:</label>
    <input type="date" id="bday" >
    <br><br>

    <!--create another label for quantity-->
    <label for="Quantity"> Quantity:</label>
    <input type="number" id="Quantity" min="0" max="99">
    <br><br>

    <!--create another label for radio buttons(whats your title)-->

    <label for="title">Title:</label>
    <!--create mini labels for individual buttons-->

    <label for="Mr"> Mr:</label>
    <input type="radio" id="Mr" value="Mr" name="title">
    <label for="Mrs"> Mrs:</label>
    <input type="radio" id="Mrs" value="Mrs" name="title">
    <label for="PhD"> PhD:</label>
    <input type="radio" id="PhD" value="PhD" name="title">
    <br><br>

    <!--creating a drop down menu for payment-->
    <label for="Payment">Payment:</label>
    <select id="Payment">
        <option value="Visa">Visa</option>
        <option value="Paypal">Paypal</option>
        <option value="M-pesa">M-pesa</M-pesa></option>
    </select>
    <br><br>

    <!--creating a checkbox-->
    <label for="Subscribe">Subscribe:</label>
    <input type="Checkbox" id="Subscribe">
    <br><br>

    <label for="Comment"> Leave a comment:</label>
    <input type="Comment" id="Comment" >
    <br><br>

    <label for="File"> File:</label>
    <input type="File" id="File" >
    <br><br>

    <!--create a submit and resert button-->
    <input type="reset"> 
    <br><br>
    <input type="submit">

</body>
</html>