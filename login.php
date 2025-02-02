<html>

<head>

<body>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
    form i {
      margin-left: -30px;
      cursor: pointer;
    }

    html {
      background-image: url("https://images.unsplash.com/photo-1596462502278-27bfdc403348?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80");
      background-repeat: no-repeat;
      background-size: cover;
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    form {
      border: 8px solid rgb(3, 13, 17);
      width: 300px;
      margin: 0 auto;
    }

    input[type=text],
    input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid black;
      box-sizing: border-box;
    }

    button {
      background-color: rgb(167, 140, 114);
      color: black;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      opacity: 0.8;
    }

    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44330;
    }

    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
    }

    img.avatar {
      width: 40%;
      border-radius: 50%;
    }

    .container {
      padding: 16px;
    }

    span.psw {
      float: right;
      padding-top: 16px;
    }

    .fa {
      margin-right: 10px;
    }

    .eye {
      position: absolute;
    }

    #hidel {
      display: none;
    }

    .login-btn {
      margin: 40px auto 20px;
      width: 80px;
      display: block;
      outline: none;
      padding: 10px 0;
      border: 1px solid black;
      cursor: pointer;
    }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="assets/js/login.js"></script>
  </head>

  <center>
    <h1 style="color:black;">LOGIN HERE</h1>
    <form class="login_here" id="login_form"><br>
      <img src="assets/img/login logo.jpg" height="100px" width="100px" alt="Avatar" class="avatar">
      <div class="container">
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email ID" name="username" class="login_email" required><br>

        <p>
          <label for="psw"><b>Password</b></label>
          <input type="password" name="password" id="password" placeholder="Enter password" name="pass"
            class="login_password" required />
          <i class="bi bi-eye-slash" id="togglePassword"></i>
        </p>
        <div class="container">
          <button type="button" class="login-btn login_here" name="submit">LOGIN</botton>
        </div>
    </form>
    <div class="container">
      <h4><a href="registration.php" id="to_register"> Create A new Account</a></h4> 
    </div>
  </center>

  <script>
    const togglePassword = document.querySelector("#togglePassword");
    const password = document.querySelector("#password");

    togglePassword.addEventListener("click", function () {
      // toggle the type attribute
      const type = password.getAttribute("type") === "password" ? "text" : "password";
      password.setAttribute("type", type);

      // toggle the icon
      this.classList.toggle("bi-eye");
    });


    // prevent form submit
    const form = document.querySelector("login_form");
    form.addEventListener('submit', function (e) {
      e.preventDefault();
    });

  </script>

</body>

</html>