
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: rgb(231, 172, 172);
  color: black;
}

.topnav a.active {
  background-color: darkblue;
  color: white;
}
.topnav button {
  float: left;
  color: #f2f2f2;
  background-color: #333;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav .logout {
  float: right;
}
.topnav button:hover {
  background-color: rgb(231, 172, 172);
  color: black;
}
.topnav button.active {
  background-color: darkblue;
  color: white;
}
</style>
</head>
<body >

<div class="topnav">
  <a href="homepage.php">TO DO</a>
  <a class="active" href="profile.php">Profile </a>
  <a href="edit_profile.php">edit Profile</a>
  <a href="change_password.php">Change Password</a>
  <button type="submit" class="logout" ><a href="index.php">Log Out</a></button>
</div>

<div style="padding-left:16px">
  <h2>User Profile Page</h2>
  
</div>
<div class="container">
  <h1>User Profile</h1><hr>
      <ul>
          <li>Name : <span id="name1"></span></li>
          <li>Email : <span id="email"></span></li>
          <li>Number : <span id="mobile"></span></li>
          <li>Birthdate : <span id="dob"></span></li>
      </ul>
</div>
<script>

  if (window.localStorage.getItem('users')) {
      var userName = document.getElementById('name1')
      var userEmail = document.getElementById('email')
      var userNumber = document.getElementById('mobile')
      var userBirthdate = document.getElementById('dob')

      let objuser = JSON.parse(localStorage.getItem('users'))

      userName.innerphp = objuser[0].name
      userEmail.innerphp = objuser[0].email
      userNumber.innerphp = objuser[0].mobile
      userBirthdate.innerphp = objuser[0].dob
  }
</script>
</body>
</html>
