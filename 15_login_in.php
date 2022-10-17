
<html>
    <head>
        <title>Login</title>
        <?php
// define variables and set to empty values
$password = $email = $contact = "";
$password_err = $email_err = $contact_err= "";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(empty($_POST["email"])){
        $email_err= "Email is required";
    }else{
        $email=test_input($_POST["email"]);
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $email_err="Invalid email format";
        }
        
    }
    if(empty($_POST["contact"])){
        $contact_err= "Contact number is required";
    }else{
        $contact=test_input($_POST["contact"]);
        if(!preg_match('/^[0-9]{10}+$/', $contact)){
            $contact_err="Must contain 10 digit";
        } 
        
    }
    if(empty($_POST["password"])){
        $password_err= "Password is required";
    }else{
        $password=test_input($_POST["password"]);
        if(!preg_match('/^(?=.*\d)(?=.*[a-zA-Z]).{6,10}$/', $password)){
            $password_err="Must contain 8 char,1 num,letters & special char";
        }
        
    }
}


function test_input($data){
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars_decode($data);
    return $data;
}

?>
    </head>

<body style="font-family:Arial;background-color:lightgreen; color:white; font-size=100px;padding-top:100px;">
    <center>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <table style="font-family:Arial;background-color:gray; color:white; font-size=100px;border:2px solid black;">
            <h2 style="color:black;">Welcome to Login Form</h2>
            <tabble> 
                <tr>
                    <th>Email</th>
                    <th><input type="text" name="email" value="<?php echo $email;?>"></th>
                    <th><spam class="error">* <?php echo $email_err;?></th>
                </tr>
                <tr>
                    <th>Contact</th>
                    <th><input type="number" name="contact" value="<?php echo $contact;?>"></th>
                    <th><spam class="error">*<?php echo $contact_err;?></th>
                </tr>
                <tr>
                    <th>Password</th>
                    <th><input type="password" name="password" value="<?php echo $password;?>"></th>
                    <th><spam class="error">*<?php echo $password_err;?></th>
                </tr>
                <tr> 
                </tr>
                <tr>
                    <th colspan="2"><input type="submit"></th>
                </tr>
        </table>
        <br>
        <br>
        <br>
        <h3 style="color:black">*  mandatory <br><br> Designed by Dipesh Pandit<br></h3>
        


    <center>            
</body>
</html>