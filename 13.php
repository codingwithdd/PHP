<!DOCTYPE HTML>
<html>
    <head>
        <title>Dipesh</title>
    </head>
    <body>

    <?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";
$name_err = $email_err = $gender_err = $comment_err = $website_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $name_err = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
      }
    
      if (empty($_POST["email"])) {
        $email_err = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
      }
    
      if (empty($_POST["website"])) {
        $website = "";
      } else {
        $website = test_input($_POST["website"]);
      }
    
      if (empty($_POST["comment"])) {
        $comment = "";
      } else {
        $comment = test_input($_POST["comment"]);
      }
    
      if (empty($_POST["gender"])) {
        $gender_err = "Gender is required";
      } else {
        $gender = test_input($_POST["gender"]);
      }
    }


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
        <center>
            <h2>Form Validation</h2>
        <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Name:<input type ="text" name="name">
            <span class="error">*<?php echo $name_err ?><br><br>
            Email:<input type="text" name="email">
            <span class="error">*<?php echo $email_err ?><br><br>
            Website: <input type="text" name="website">
            <span class="error">*<?php echo $website_err ?><br><br>
            Comment:<textarea name="comment" rows="5" cols="40"></textarea><br><br>
            Gender: <input type="radio" name="gender" value="female">female
            <input type="radio" name="gender" value="male">male
            <input type="radio" name="gender" value="other">Other
            <span class="error">*<?php echo $gender_err ?><br><br>
            <input type="submit">
        </form>
    </center>
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
    </body>
</html>