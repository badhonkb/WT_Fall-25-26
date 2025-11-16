<!DOCTYPE html>
<html>
<head>
  <title>Form Handler</title>

</head>
<body>
  <center>
  <h2>Participant Registration</h2>
</center>
   
  <form onsubmit="return handleSubmit()">
    <label>Full Name:</label> <br>
    <input type="text" id="name" /><br>
 
    <label>Email:</label> <br>
    <input type="email" id="emailaddress" /> <br>
    <label>Phone Number:</label> <br>
    <input type="text" id="phno" /> <br>
 
    <label>Password:</label> <br>
    <input type="password" id="pass" /> <br>
    <label>Confirm Password:</label> <br>
    <input type="password" id="confpass" />  <br>
 
    
 
    <button type="submit">Register</button>
  </form>
   
  <div id="error"></div>
  <div id="output"></div>
 
  <script>
function handleSubmit() {
  var name = document.getElementById("name").value.trim();
  var email = document.getElementById("emailaddress").value.trim();
  var phoneno = document.getElementById("phno").value.trim();
  var password = document.getElementById("pass").value;
  var confirmpassword = document.getElementById("confpass").value;

  var errorDiv = document.getElementById("error");
  var outputDiv = document.getElementById("output");

  errorDiv.innerHTML = "";
  outputDiv.innerHTML = "";

  
  if (name === "" || email === "" || phoneno === "" || password === "" || confirmpassword === "") {
    errorDiv.innerHTML = " please fill all fild";
    return false;
  }

  
  if  (isNaN(phoneno)) {
    errorDiv.innerHTML = "Phone number must contain only digits.";
    return false;
  }

 
  if (password !== confirmpassword) {
    errorDiv.innerHTML = "Passwords do not match.";
    return false;
  }

  
  outputDiv.innerHTML = `
    <strong>Registration Complete!</strong><br><br>
    Name: ${name}<br>
    Email: ${email}<br>
    Phone No: ${phoneno}<br>
  `;

  return false;
}
</script>

 
</body>
</html>