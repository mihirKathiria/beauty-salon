<html>

<head>

<body>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Page</title>
  <form style="display: none;" action="homepage.html" method="post"></form>
  <style>
    form i {
      margin-left: -30px;
      cursor: pointer;
    }

    html {
      background-image: url("assets/img/a3.jpg");
      background-repeat: no-repeat;
      background-size: cover;

    }


    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    form {
      border: 4px solid rgb(2, 4, 78);
      width: 400px;
      margin: 0 auto;
    }

    input[type=text],
    input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid rgb(13, 21, 24);
      box-sizing: border-box;
    }

    button {
      background-color: rgb(2, 4, 78);
      color: rgb(255, 255, 255);
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
      background-color: #f44336;
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
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <script language="JavaScript" type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script language="JavaScript" type="text/javascript" src="assets/js/register.js"></script>
  </head>


  <br><br>
  <center>
    <h1 style="color:rgb(13, 21, 17);">REGISTRATION PAGE</h1>
  </center>


  <form class="signin_form">
    <div class="container">
      <label for="Firstname"><b>Firstname</b></label>
      <input type="text" placeholder="Enter firstname" name="firstname" class="signin_firstname" required><br>

      <label for="lastname"><b>Lastname</b></label>
      <input type="text" placeholder="Enter lastname" name="lastname" class="signin_lastname" required><br>

      <label for="Email"><b>Email</b></label>
      <input type="text" placeholder="Enter email" name="email" class="signin_email" required><br>

      <div style="margin-bottom: 12px">
        <label for="Gender"><b>Gender</b></label><br>
        <input type="radio" name="gender" class="signin_gender" value="male">
        <label for="male"><b>Male</b></label><br>
        <input type="radio" name="gender" class="signin_gender" value="female">
        <label for="female"><b>Female</b></label><br>
      </div>

      <label for="Birthdate"><b>Birthdate</b></label>
      <input type="text" name="birthdate" class="form-control signin_birthdate" placeholder="DD/MM/YYYY">

      <label for="Address"><b>Address</b></label><br>
      <textarea name="address" class="form-control signin_address" style="size: 100px"></textarea>

      <p>
        <label for="Password"><b>Password</b></label>
        <input type="password" name="password" id="password" placeholder="Enter password" name="pass"
          class="signin_pass" required />
        <i class="bi bi-eye-slash" id="togglePassword"></i>
      </p>

      <p>
        <label for="confirm Password"><b>Confirm Password</b></label>
        <input type="password" name="password" id="rePassword" placeholder="Re-Enter password" name="repass"
          class="signin_repass" required />
        <i class="bi bi-eye-slash" id="toggleRePassword"></i>
      </p>

      <label for="Mobile no"><b>Mobile Number</b></label>
      <input type="text" placeholder="Enter number" name="mobile_no" class="signin_mobile_no" required><br>
      <h4><a href="login.php">Already have an account? Log In!</a></h4>
      <button class="signin_here">REGISTER NOW</button>
    </div>
  </form>

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

    const toggleRePassword = document.querySelector("#toggleRePassword");
    const rePassword = document.querySelector("#rePassword");

    toggleRePassword.addEventListener("click", function () {
      // toggle the type attribute
      const type = rePassword.getAttribute("type") === "password" ? "text" : "password";
      rePassword.setAttribute("type", type);

      // toggle the icon
      this.classList.toggle("bi-eye");
    });

  </script>
</body>

</html>