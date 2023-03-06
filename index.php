<html>
<head>
  <title>CLUB-G</title> 
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="hero">
<div class="form-box">
  <div class="button-box">
    <div id="btn"></div>
    <button type="button" class="toggle-btn" onclick="login()"><font color= "white">Log In</button> 
    <button type="button" class="toggle-btn" onclick="register()"><font color= "white">Register</button>
  </div>
  <form id="login"  class="input-group" action="log.php" method="post">
    <input type="text" name="usn" class="input-field" placeholder="Enter USN" required> 
    <input type="password" name="pass" class="input-field" placeholder="Enter Password" 
    required>
    <input type="checkbox" class="check-box">  <span>&nbsp;Remember Me</span>
    <button type="submit" class="submit-btn">Log in</button>
  </form>
  <form id="register" class="input-group" action="register.php" method="post" enctype="multipart/form-data">
    <input type="text" name= "usn" class="input-field" placeholder="Enter USN" required>
    <input type="text" name= "name" class="input-field" placeholder="Enter Name" required>
    <input type="text" name= "semsec" class="input-field" placeholder="Semester/Section" required>
	  <input type="text" name= "branch" class="input-field" placeholder="Enter Department" required>  
	  <input type="text" name= "mob" class="input-field" placeholder="Enter Phone Number" required>
    <input type="email" name= "email" class="input-field" placeholder="Email Id" required>


    <select name="ic" class="input-field"><font color= "black">
      <option value="Adventure_Club">Adventure Club</option>
      <option value="Cultural_Club">Cultural Club</option>
      <option value="Literature_Club">Literature Club</option>
      <option value="Nature_Club">Nature Club</option>
      <option value="Science_Club">Science Club</option>
    </select>

  <!-- <input type="checkbox" class="input-field" name="ic[]" id="adclub"> 
    <label for="adclub">Adventure Club</label>
    <br>
    <input type="checkbox"class="input-field" name="ic[]" id="culclub"> 
    <label for="culclub">Cultural Club</label>
    <br>
    <input type="checkbox" class="input-field" name="ic[]" id="natclub"> 
    <label for="natclub">Nature Club</label>
    <br>
    <input type="checkbox" class="input-field" name="ic[]" id="sciclub"> 
    <label for="sciclub">Science CLub</label>
    <br>
    <input type="checkbox" class="input-field" name="ic[]" id="litclub"> 
    <label for="litclub">Literature CLub</label>
    <br>-->

    <input type="password" name= "pass" class="input-field" placeholder="Enter Password"required>
    <input type="password" name= "pwd" class="input-field" placeholder="Confirm Password"required>
    
    <button type="submit" class="submit-btn">Register</button>
  </form>
</div>
  </div>
  <script>
  var x = document.getElementById("login");
  var y = document.getElementById("register");
  var z = document.getElementById("btn");
  
  function register() {
    x.style.left = "-400px";
    y.style.left = "50px";
    z.style.left = "90px";
  }
  function login() {
    x.style.left = "50px";
    y.style.left = "450px";
    z.style.left = "";
  }
</script>

</body>
</html>

