<?php session_start(); 
include "file_constants.php";
$target_path = '/var/www/';
	
?>

<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <title>sign up</title>
<script LANGUAGE="JavaScript">
var h=0;
function req(x,y,z){
if(x.value==0||x.value=='select'){
y.innerHTML="*"+z+" required";
h++;
}
else
{
y.innerHTML="";
h--;
}
}
function tex(x,y){
c=x.indexOf('1');
if(c==-1){
c=x.indexOf('2');
}
if(c==-1){
c=x.indexOf('3');
}
if(c==-1){
c=x.indexOf('4');
}
if(c==-1){
c=x.indexOf('5');
}
if(c==-1){
c=x.indexOf('6');
}
if(c==-1){
c=x.indexOf('7');
}
if(c==-1){
c=x.indexOf('8');
}
if(c==-1){
c=x.indexOf('9');
}
if(c==-1){
c=x.indexOf('0');
}
if(c!=-1)
{y.innerHTML="text only";
}
else
y.innerHTML="";
}
function check(x,y){
if(x==0)
y.innerHTML="*Roll number required";
else if(x<100000000 || x>999999999)
y.innerHTML="Invalid rollnumber";
else
y.innerHTML="";
}

function passwordeval(x,y){
if(x.length==0)
y.innerHTML="password required";
else if(x.length<6)
{
y.innerHTML="password too short";
}
else
y.innerHTML="";
}
function passwordcheck()
{
if(retypepassword.value!=password.value)
retypepassword1.innerHTML="passwords does not match";
else
retypepassword1.innerHTML="";
}
</script>
</head>
<body bgcolor="beige">
<table align="center" >
<?php
	if(!isset($_SESSION['user_id']))
	{
?>

<tr><center>Please enter your Roll number and password to log in</center>
<form method="post"  action="login.php">
</tr>
<tr><td>Roll number:</td><td><input type="int" id="rollno" name="rollno" /></td>
</tr>
<tr><td>Password:</td><td><input type="password" id="passwordentered" name="passwordentered" /></td>
<tr><td><input type="submit" onfocus="req(gender,g,'gender')" value="Log in" name="submit" /> </td></tr>
</form>
<?php }
else {
?>
<tr><td><center><h3>Welcome <?php echo $_SESSION['name'];?> </h3></center></td></tr>
<tr><td><center>Click here to logout :)<br><a href="logout.php"><button>Logout</button></a></center></td></tr>
<?php }?>
</table>

<table align="left">
<tr><td>
<?php
	if(isset($_SESSION['user_id']))
	{
	echo '<form action="upload.php" method="post" enctype="multipart/form-data">';
}
	?>
	
	
	
	<h3>Upload your photo here :)</h3>
	
	<input onclick="<?php if (empty($_SESSION['user_id']))echo"alert('Reminder:You must be logged in to upload your photo ;)');"?>"  type="file" name="file" id="file"><br>
	<input  onclick="<?php if (empty($_SESSION['user_id']))echo"alert('You must be logged in to upload your photo ;)');"?>" type="submit" name="upload" value="Upload">
	</form>
	</td>
	</tr>
<?php
	if(isset($_SESSION['user_id']))
	{
?>
	
</table>
<?php } ?>
<form method="post"  action="<?php echo $_SERVER['PHP_SELF'] ?>">
  <table align="right" >
  <tr><td><p align="center">fill the form to sign up</p>
</td></tr><tr>
  <td><label for="firstname"><span style="color:red">*</span>Name:</label></td>
  <td><input type="text" onblur="req(firstname,username,'Name')" onkeyup="tex(this.value,username)"  id="firstname" name="firstname" /></td>
  </tr>
  <tr><td></td><td id="username" style="color:red" ></td></tr>
  <td><label for="rollno"><span style="color:red">*</span>Rollnumber:</label></td>
  <td><input type="int" id="rollno"  onblur="check(this.value,rollnumber)"  name="rollno" /></td>
  </tr><tr><td></td><td id="rollnumber" style="color:red" ></td></tr><tr>
  <td><label for="gender"><span style="color:red">*</span>gender:</label></td>
  <td><input id="gender" name="gender" type="radio" value="male" />male
  <input id="gender" name="gender" type="radio" value="female" />female</td>
  </tr><tr><td></td><td id="g" style="color:red" ></td></tr><tr>
  <td><label for="department"><span style="color:red">*</span>Department:</label></td>
  <td><select id="department" onblur="req(department,depa,'Department')" name="department">
  <option>select</option>
  <option >Civil</option>
  <option >Computer science</option>
  <option >Electrical and Electronics</option>
  <option >metallurgy</option>
  <option >Production</option>
  <option >Mechanical</option>
  <option >Electronics and Communication</option>
  <option >Instrumentation and communication</option>
  <option >Chemical</option>
  <option >Architecture</option>
  </select></td>
  </tr><tr><td></td><td id="depa" style="color:red" ></td></tr><tr>
  <td><label for="password"><span style="color:red">*</span>Password:</label></td>
  <td><input type="password" onkeyup="passwordeval(this.value,password1)" onblur="req(password,password1,'password') " id="password" name="password" /></td>
  </tr><tr><td></td><td id="password1" style="color:red" ></td></tr><tr>
  <td><label for="retypepassword"><span style="color:red">*</span>Re enter password:</label></td>
  <td><input type="password" onblur="req(retypepassword,retypepassword1,'re-enter password')" onkeyup="passwordcheck()" id="retypepassword" name="retypepassword" /></td>
  </tr><tr><td></td><td id="retypepassword1" style="color:red" ></td></tr>
  <tr><td><input type="submit" onfocus="req(gender,g,'gender')" value="Signup" name="submit" /> </td></tr>
 <tr><td>
<?php  
 
  @$name = $_POST['firstname'];
  @$rollnumber = $_POST['rollno'];
  @$gender = $_POST['gender'];
  @$password1 = $_POST['password'];
  @$password2 = $_POST['retypepassword'];
  @$department = $_POST['department'];
$evaluator=0;
 
  
if(isset($_POST['submit'])){


if(!$name){
echo "<br><span style='color:red'>*Name required</span>";
$evaluator++;
}
 
if(!$rollnumber){
echo "<br><span style='color:red'>*Rollnumber required";
$evaluator++;
}
else if($rollnumber<100000000||$rollnumber>999999999){
echo "<br><span style='color:red'>*invalid rollnumber";
$evaluator++;
}
else{
$dbc = mysqli_connect($host,$user,$pass,$db)
or die('error connecting to mysql server');
$query4="SELECT*FROM sign";
$result4=mysqli_query($dbc,$query4)
or die('error querying 4');
while($row=mysqli_fetch_array($result4)){
if($rollnumber==$row['rollnumber']){
echo 'Roll number already registered '.'<br/>';
$evaluator++;
}
}
mysqli_close($dbc);
}

if(!$gender){
echo "<br><span style='color:red'>*Gender required</span>";
$evaluator++;
}

if($department=='select'){
echo "<br><span style='color:red'>*Department required";
$evaluator++;
}
if(strlen($password1)!=0)
{ if(strlen($password2)!=0)
{ 
if($password1==$password2){
	$password=$password1;
	if(strlen($password)<6)
	{echo "<br><span style='color:red'>*password too short";
	$evaluator++;
	}
}
else 
{
$evaluator++;
echo"<br><span style='color:red'>*passwords does not match";
}
}
else {echo"<br><span style='color:red'>*Re-enter password required";$evaluator++;}
}
else {echo"<br><span style='color:red'>*Password required";$evaluator++;}




//aftr all validation
if($evaluator==0)
{
 $dbc = mysqli_connect($host,$user,$pass,$db)
or die('error connecting to mysql server');
$query1="INSERT INTO sign(name,rollnumber,gender,password,department) values('$name','$rollnumber','$gender',SHA('$password'),'$department')";
$result=mysqli_query($dbc,$query1)
or die('error querying 2');
mysqli_close($dbc);
echo 'you have successfully <br>signed up :)';
    }
	
} 
?>

 </td>
 </tr>
  </table>
  
  </body>
</html>