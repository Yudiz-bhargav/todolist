
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
<body>

<div class="topnav">
  <a  href="homepage.php">TO DO</a>
  <a href="profile.php">Profile </a>
  <a href="edit_profile.php">edit Profile</a>
  <a class="active" href="change_password.php">Change Password</a>
  <button type="submit" class="logout" ><a href="index.php">Log Out</a></button>
</div>

<div style="padding-left:16px">
  <h2>Top Navigation Example</h2>
  <p>Some <content class=""></content></p>
</div>

</body>
</html>