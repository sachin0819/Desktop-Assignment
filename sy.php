<!DOCTYPE html>
<html>
<head>
  <title>Register </title>
  <style> .error {color: #FF0000;}</style>
</head>
<body>

</body>
             
<?php

$FirstnameErr = $LastnameErr= $emailErr =$passwordErr =$cpasswordErr= $genderErr = $birthdayErr =$YourpetErr= $MobilenoErr= "";
$Firstname = $Lastname= $email =$password =$cpassword= $gender = $birthday = $Yourpet = $Mobileno = " " ;


if ($_SERVER["REQUEST_METHOD"] == "POST") 
  if (empty($_POST["Firstname"])) {
   $FirstnameErr ="Firstname required";
 }else
{
  $Firstname = test_input($_POST["Firstname"]);}
  if(!preg_match("/^[a-zA-Z ]*$/",$Firstname)) {
  $FirstnameErr ="Only letters and white space allowed";
}


  if (empty($_POST["Lastname"])) {
   $LastnameErr ="Lastname required";
 }else
{
  $Lastname = test_input($_POST["Lastname"]);}
  if(!preg_match("/^[a-zA-Z ]*$/",$Lastname)) {
  $LastnameErr ="Only letters and white space allowed";
}

  if (empty($_POST["email"])) {
        $emailErr = "Email required!";
    } else {
        $email = test_input($_POST["email"]);
        
       
    }
  
  
   if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["cpassword"])) {
        $password = test_input($_POST["password"]);
        $cpassword = test_input($_POST["cpassword"]);
      }
        if (strlen($_POST["password"]) <= '8') {
            $passwordErr = "Your Password Must Contain At Least 8 Characters!";
        }
        elseif(!preg_match("#[0-9]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Number!";
        }
        elseif(!preg_match("#[A-Z]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
        }
        elseif(!preg_match("#[a-z]+#",$password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
        } else {
            $cpasswordErr = "Please Check You've Entered Or Confirmed Your Password!";
        }
    

if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }

  if (empty($_POST["birthday"])) {
     $birthdayErr ="birthday is required";
   }else {

$birthday= test_input($_POST["birthday"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>

<h2>Email Registration Form</h2>
<p><span  class ="error">* required field</span></p>
<form method="post" action= "welcome.php">

 FirstName: <input type="text" name="Firstname" value="<?php echo $Firstname;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  
  <label {width:240px; 
  display: inline-block;}> </label>
  <br><br>
  
  LastName: <input type="text" name="Lastname" value="<?php echo $Lastname;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br>
  <label {width:245px; 
  display: inline-block;}> </label>
  <br>
  Email Id: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">*<?php echo $emailErr;?></span>
  <br><br>

  Password: <input type="password" name="pwd" value="<?php echo $Password;?>">
  <span class="error">* <?php echo $PasswordErr;?></span>
  <br><br>


  Cpassword: <input type="password" name="Cpwd" value="<?php echo $Cpassword;?>">
  <span class="error">* <?php echo $PasswordErr;?></span>
  <br><br>

  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
   <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  
  Birthday:
  <input type="Date" name="birthday" > <br>
  <label {width:240px; 
  display: inline-block;}> </label>
  <br>
 Your pet :
 <select id="Your pet" name="Your pet">
  <option value="Dog ">Dog</option>
  <option value="Cat">Cat</option>
  <option value="Monkey">Monkey</option>
  <option value="Bird">Bird</option>
  <label {width:240px; 
  display: inline-block;}> </label>
  <br><br>
</select>
<br><br>
 
 Mobile :
 <select id="Country code" name="Country code">
  <option >+91</option>
  <option >+11</option>
  <option >+81</option>
  </select>
  <input type="number" placeholder ="Mobile.">
 <br><br>
 
<input type="submit"  >
 <input type="reset" value="Reset">


 


</form>

<?php

echo $Firstname;
echo $Lastname;
echo "<br>";
echo $email;
echo "<br>";

echo $password;
echo "<br>";
echo $cpassword;
echo "<br>";
echo $gender;
echo "<br>";
echo $birthday;
echo "<br>";
echo $Yourpet;
echo "<br>";
echo $Mobile;
echo "<br>";

?>
</body>
</html>
