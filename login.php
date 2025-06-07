<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="/images/favicon-enhanced.png" />
  <link rel="stylesheet" href="css/login.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />

  <style>
    /* Custom CSS for alert messages */
    .alert {
      display: none;
      position: fixed;
      top: 10%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 20px;
      background-color: #4caf50;
      color: white;
      text-align: center;
      border-radius: 6px;
      box-shadow: 0px 0px 10px 0px #262626;
      opacity: 0.8;
      transition: all 0.3s ease-in-out;
      z-index: 1;
    }

    #emptyFieldsAlert {
      background-color: red;
    }
    
    input[type="password"]::-webkit-credentials-auto-fill-button,
    input[type="password"]::-webkit-contacts-auto-fill-button,
    input[type="password"]::-ms-reveal {
        display: none;
      }
  </style>
  <title>Sukoon - Login</title>
</head>
<body>
    <div id="load">
      <div
        style="
          background-color: white;
          height: 25vh;
          width: 100%;
          position: relative;
          top: -70px;
        "></div>
  </div>

  <div class="alert" id="emptyFieldsAlert" style="display: none">
    Please fill in all fields!
  </div>
  <img src="../images/signupill.png" alt="" />
  <div class="login">
    <div class="welcome">
      <h1 class="titletext">Welcome Back &#x1F917</h1>
      <span>Please enter your details.</span>
    </div>
    <div class="inputs">
      <span>Email<br /></span>
      <form method="post" action="login.php">
        <input class="inputbox" placeholder="Enter your email" id="loginEmail" name="loginEmail" /><br />
        <span>Password<br /></span>
        <input type="password" class="inputbox" placeholder="••••••••" id="loginPassword" name="loginPassword" />
        <i class="fas fa-eye-slash" id="toggleLoginPassword" style="margin-left: -30px; cursor: pointer;"></i>
        <input type="submit" class="signin" value="Sign in" name="loginButton" />
      </form>
    </div>
    <div class="forgotpass">
      <span>Forgot Password</span>
    </div>
    <p class="back"><a class="tag" href="../index.html">&#8592; Back</a></p>
    <div class="button">
      <!-- Removed onclick attribute -->
    </div>
    <div class="signupline">
      <span>Don't have an account?</span>
      <span class="signupbutton"> Sign up</span>
    </div>
  </div>
  <div class="register">
    <div class="welcome">
      <h1 class="titletext">Create an account</h1>
      <span>Let's get started.</span>
    </div>
    <div class="inputs">
      <span>Username<br /></span>
      <input class="inputbox" placeholder="Enter your username" id="signupUsername" name="signupUsername" /><br />
      <span>Email<br /></span>
      <input class="inputbox" placeholder="Enter your email" id="signupEmail" name="signupEmail" /><br />
      <span>Password<br /></span>
      <input type="password" class="inputbox" placeholder="••••••••" id="signupPassword" name="signupPassword" />
      <i class="fas fa-eye-slash" id="toggleSignupPassword" style="margin-left: -30px; cursor: pointer;"></i>
    </div>
    <p class="back-1"><a class="tag1" href="../index.html">&#8592; Back</a></p>
    <div class="button">
      <input type="submit" class="signin" value="Sign up" name="signupButton" />
    </div>
    <div class="signupline">
      <span>Already have an account?</span>
      <span class="signinbutton"> Sign in</span>
    </div>
  </div>

  <!-- Alert messages -->
  <div class="alert" id="loginAlert">Sign in successful!</div>
  <div class="alert" id="signupAlert">Sign up successful!</div>

  <!-- PHP Script -->
  <?php
  // Database connection parameters
  $servername = "localhost"; // Change this to your database server
  $username = "username"; // Change this to your database username
  $password = "password"; // Change this to your database password
  $dbname = "your_database"; // Change this to your database name

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  // Handle login form submission
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["loginButton"])) {
      $email = $_POST["loginEmail"];
      $password = $_POST["loginPassword"];
      
      // Perform SQL query to validate user credentials
      $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
          // User authenticated successfully
          // Redirect or perform any necessary action
          echo "<script>alert('Login successful!');</script>";
      } else {
          // Invalid credentials
          echo "<script>alert('Invalid email or password!');</script>";
      }
  }

  // Handle signup form submission
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signupButton"])) {
      $username = $_POST["signupUsername"];
      $email = $_POST["signupEmail"];
      $password = $_POST["signupPassword"];
      
      // Perform SQL query to insert new user into database
      $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
      
      if ($conn->query($sql) === TRUE) {
          // New record created successfully
          echo "<script>alert('Sign up successful!');</script>";
      } else {
          // Error inserting record
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
  }

  // Close database connection
  $conn->close();
  ?>
  
  <!-- JavaScript Code -->
  <script>
    const signin_btn = document.querySelector(".signinbutton");
    const signup_btn = document.querySelector(".signupbutton");
    const register = document.querySelector(".register");
    const login = document.querySelector(".login");
    signup_btn.addEventListener("click", () => {
      register.style.display = "block";
      login.style.display = "none";
    });
    signin_btn.addEventListener("click", () => {
      register.style.display = "none";
      login.style.display = "block";
    });
    
    // Rest of your JavaScript code...
  </script>
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="/images/favicon-enhanced.png" />
  <link rel="stylesheet" href="css/login.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />

  <style>
    /* Custom CSS for alert messages */
    .alert {
      display: none;
      position: fixed;
      top: 10%;
      left: 50%;
      transform: translate(-50%, -50%);
      padding: 20px;
      background-color: #4caf50;
      color: white;
      text-align: center;
      border-radius: 6px;
      box-shadow: 0px 0px 10px 0px #262626;
      opacity: 0.8;
      transition: all 0.3s ease-in-out;
      z-index: 1;
    }

    #emptyFieldsAlert {
      background-color: red;
    }
    
    input[type="password"]::-webkit-credentials-auto-fill-button,
    input[type="password"]::-webkit-contacts-auto-fill-button,
    input[type="password"]::-ms-reveal {
        display: none;
      }
  </style>
  <title>JustLive - Login </title>
</head>
<body>
    <div id="load">
      <div
        style="
          background-color: white;
          height: 25vh;
          width: 100%;
          position: relative;
          top: -70px;
        "></div>
  </div>

  <div class="alert" id="emptyFieldsAlert" style="display: none">
    Please fill in all fields!
  </div>
  <img src="../images/signupill.png" alt="" />
  <div class="login">
    <div class="welcome">
      <h1 class="titletext">Welcome Back &#x1F917</h1>
      <span>Please enter your details.</span>
    </div>
    <div class="inputs">
      <span>Email<br /></span>
      <form method="post" action="login.php">
        <input class="inputbox" placeholder="Enter your email" id="loginEmail" name="loginEmail" /><br />
        <span>Password<br /></span>
        <input type="password" class="inputbox" placeholder="••••••••" id="loginPassword" name="loginPassword" />
        <i class="fas fa-eye-slash" id="toggleLoginPassword" style="margin-left: -30px; cursor: pointer;"></i>
        <input type="submit" class="signin" value="Sign in" name="loginButton" />
      </form>
    </div>
    <div class="forgotpass">
      <span>Forgot Password</span>
    </div>
    <p class="back"><a class="tag" href="../index.html">&#8592; Back</a></p>
    <div class="button">
      <!-- Removed onclick attribute -->
    </div>
    <div class="signupline">
      <span>Don't have an account?</span>
      <span class="signupbutton"> Sign up</span>
    </div>
  </div>
  <div class="register">
    <div class="welcome">
      <h1 class="titletext">Create an account</h1>
      <span>Let's get started.</span>
    </div>
    <div class="inputs">
      <span>Username<br /></span>
      <input class="inputbox" placeholder="Enter your username" id="signupUsername" name="signupUsername" /><br />
      <span>Email<br /></span>
      <input class="inputbox" placeholder="Enter your email" id="signupEmail" name="signupEmail" /><br />
      <span>Password<br /></span>
      <input type="password" class="inputbox" placeholder="••••••••" id="signupPassword" name="signupPassword" />
      <i class="fas fa-eye-slash" id="toggleSignupPassword" style="margin-left: -30px; cursor: pointer;"></i>
    </div>
    <p class="back-1"><a class="tag1" href="../index.html">&#8592; Back</a></p>
    <div class="button">
      <input type="submit" class="signin" value="Sign up" name="signupButton" />
    </div>
    <div class="signupline">
      <span>Already have an account?</span>
      <span class="signinbutton"> Sign in</span>
    </div>
  </div>

  <!-- Alert messages -->
  <div class="alert" id="loginAlert">Sign in successful!</div>
  <div class="alert" id="signupAlert">Sign up successful!</div>

  <!-- PHP Script -->
  <?php
  // Database connection parameters
  $servername = "localhost"; // Change this to your database server
  $username = "root"; // Change this to your database username
  $password = ""; // Change this to your database password
  $dbname = "justlive"; // Change this to your database name

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  // Handle login form submission
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["loginButton"])) {
      $email = $_POST["loginEmail"];
      $password = $_POST["loginPassword"];
      
      // Perform SQL query to validate user credentials
      $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
          // User authenticated successfully
          // Redirect or perform any necessary action
          echo "<script>alert('Login successful!');</script>";
      } else {
          // Invalid credentials
          echo "<script>alert('Invalid email or password!');</script>";
      }
  }

  // Handle signup form submission
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signupButton"])) {
      $username = $_POST["signupUsername"];
      $email = $_POST["signupEmail"];
      $password = $_POST["signupPassword"];
      
      // Perform SQL query to insert new user into database
      $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
      
      if ($conn->query($sql) === TRUE) {
          // New record created successfully
          echo "<script>alert('Sign up successful!');</script>";
      } else {
          // Error inserting record
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
  }

  // Close database connection
  $conn->close();
  ?>
  
  <!-- JavaScript Code -->
  <script>
    const signin_btn = document.querySelector(".signinbutton");
    const signup_btn = document.querySelector(".signupbutton");
    const register = document.querySelector(".register");
    const login = document.querySelector(".login");
    signup_btn.addEventListener("click", () => {
      register.style.display = "block";
      login.style.display = "none";
    });
    signin_btn.addEventListener("click", () => {
      register.style.display = "none";
      login.style.display = "block";
    });
    
    // Rest of your JavaScript code...
  </script>

</body>
</html>
