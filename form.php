 <html>
<head>
    <link rel="stylesheet" type="text/css" href="formstyle.css"></head>
<body>
<div id="xx"><div id="xxx"><h1>User SignUp Form</h1></div>
<hr> <div id="xxx">
<form action="" method="post">
FirstName:<input type="text" name="fname"><font>*</font><br>
LastName:<input type="text" name="lname"><font>*</font><br>
Sex:<select name="sex"><option value="" selected>Choose Gender</option><option
value="M">Male</option><option value="F">Female</option></select><font>*</font></br>
Age:<input type="text" name="age"><font>*</font><br>
Email:<input type="text" name="email"><font>*</font><br>
Username:<input type="text" name="username"><font>*</font><br>
Password:<input type="Password" name="password"><font>*</font><br>
Website(if any):<input type="text" name="website"><br>
<input type="submit" name="signup" value="SignUp"><input type="reset" value="Reset">
</form></div></div>
<?php
echo "<div id=xr><div id=xxx>";
if(isset($_POST['signup']))
{
if(!empty($_POST['fname'])&&!empty($_POST['lname'])&&!empty($_POST['sex'])&&!e
mpty($_POST['age'])&&!empty($_POST['email'])&&!empty($_POST['username'])&&!empty($_PO
ST['password']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$sex=$_POST['sex'];
$age=$_POST['age'];
$email=$_POST['email'];
$usernames=array("abc","123","xyz");
$gender=array("M","F");
$username=$_POST['username'];
$password=$_POST['password'];
$website=$_POST['website'];
$c=0; $minchar=6;
if(!preg_match("/^[a-zA-Z ]*$/",$fname)) {
echo ("First Name can contain only characters<br>");
$c++;
}
if(!preg_match("/^[a-zA-Z ]*$/",$lname)) {
echo ("Last Name can contain only characters<br>");
$c++;
}
if(!in_array($sex,$gender)){
echo ("Please select your gender!<br>");
$c++;
}
if(!preg_match("/^[0-9]*$/",$age)) {
Server-Side Web System Design and Programming BahirDar, 2012E.C
Page 7 of 21 Departments of Software Engineering By Alehegn E.
echo ("Age can only be numbers<br>");
$c++;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo ("Invalid email format<br>");
$c++;
}
if(in_array($username,$usernames))
{
echo ("$username already exist!<br>");
$c++;
}
if(strlen($password)<$minchar) {
echo ("Password must be above 6 characters!<br>");
$c++;
}
if($c==0) {
echo "<center><i>You have successfully signed up!</i></center>";
echo "<hr><b><center>Your Details</center></b><hr>";
echo "Full Name:$fname $lname<br>";
echo "Sex:$sex Age:$age<br>";
echo "Email:$email<br>Username:$username<br>";
}
}else{
echo "Please fill all the required fields!<br>";
}
if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-
9+&@#\/%=~_|]/i",$website)&&$c==0)
echo "";
else if($c>0)
echo "Invalid url";
else
echo "Website:$website<br><hr><br>";
}else{
echo "Welcome! Please fill the following fields if you wanna sign up!</div></div>";
}
?></body></html>