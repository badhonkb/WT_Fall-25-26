<?php
$hasError = false;
$name = $email = $gender = $blood = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    if (empty($_POST["name"])) {
        echo "Name cannot be empty<br>";
        $hasError = true;
    } else {
        $name = $_POST["name"];
        if (!preg_match("/^[A-Za-z][A-Za-z .-]* [A-Za-z .-]+$/", $name)) {
            echo "Name must contain at least two words. Must start with letter that can contains a-z, A-Z, period, dash<br>";
            $hasError = true;
        }
    }

    if (empty($_POST["email"])) {
        echo "Email cannot be empty<br>";
        $hasError = true;
    } elseif (!preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $_POST["email"])) {
        echo "Invalid email address<br>";
        $hasError = true;
    } else {
        $email = $_POST["email"];
    }

    
    if (empty($_POST["gender"])) {
        echo "Gender must be selected<br>";
        $hasError = true;
    } else {
        $gender = $_POST["gender"];
    }

 
    if (empty($_POST["blood"])) {
        echo "Blood group must be selected<br>";
        $hasError = true;
    } else {
        $blood = $_POST["blood"];
    }

    
    if (!$hasError) {
        echo "<h3>Submitted Information</h3>";
        echo "Name: $name <br>";
        echo "Email: $email <br>";
        echo "Gender: $gender <br>";
        echo "Blood Group: $blood <br>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Validation</title>
</head>
<body>

<form action="" method="post">

    Name: <br>
    <input type="text" name="name">
    <br><br>

    
    Email: <br>
    <input type="text" name="email"">
    <br><br>

    
    Gender: <br>
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female" > Female
    <input type="radio" name="gender" value="Other"> Other
    <br><br>

 
    Blood Group: <br>
    <select name="blood">
        <option value="">Select</option>
        <option value="A+" >A+</option>
        <option value="A-" >A-</option>
        <option value="B+" >B+</option>
        <option value="B-" >B-</option>
        <option value="O+" >O+</option>
        <option value="O-" >O-</option>
        <option value="AB+" >AB+</option>
        <option value="AB-" >AB-</option>
    </select>
    <br><br>

    <input type="submit" value="Submit">

</form>

</body>
</html>
