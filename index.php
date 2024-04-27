<?php
session_start();
?>
<html>

<head>
  <link rel="stylesheet" href="CSS/login.css">
  <link rel="icon" type="image/x-icon" href="icon/favicon.ico" />
</head>

<body class="login-page">
  <div class="container">
    <div class="form-wrapper">
      <div class="logo">
        <img src="images/logos/logo.png" alt="Website Logo">
      </div>
      <h1 class="form-title">Welcome to Mostapha's Website</h1>
      <p class="form-info">Please login to enter</p>
      <form action="BE/login.php" method="POST" id="login-form">
        <div class="form-group">
          <label for="uname" class="form-label">Username</label>
          <div class="input-wrapper">
            <i class="fas fa-user"></i>
            <input type="text" name="username" class="form-input" id="uname">
          </div>
        </div>
        <div class="form-group">
          <label for="password" class="form-label">Password</label>
          <div class="input-wrapper">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" class="form-input" id="password">
          </div>
        </div>
        <div class="button-group">
          <button type="button" class="primary-button" onclick="log_in()">Login</button>
          <button type="button" class="secondary-button" onclick="Reset()">Cancel</button>
        </div>
        <p class="form-link">Don't have an account yet? <a href="Pages/signup.html">Create One!</a></p>
      </form>
    </div>
  </div>
  <script>
    function log_in() {
      let username = document.getElementById("uname").value;
      let password = document.getElementById("password").value;
      if (username == "" || password == "") {
        alert("Username or Password missing!");
      } else {
        document.getElementById("login-form").submit();
      }
    }

    function Reset() {
      document.getElementById("uname").value = "";
      document.getElementById("password").value = "";
    }
  </script>
</body>

</html>
