
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
  <a  href="edit_profile.php">TO DO</a>
  <a href="profile.php">Profile </a>
  <a class="active" href="edit_profile.php">edit Profile</a>
  <a href="change_password.php">Change Password</a>
  <button type="submit" class="logout" ><a href="index.php">Log Out</a></button>
</div>

<div style="padding-left:16px">
  <h2>Upadate Profile</h2>
 
  <div class="dashboard-container">
    <div class="card">
      <div class="card-heading">
        <h3>Edit Profile</h3>
      </div>
      <label for="name" class="form-label">Old Password</label>
      <input id="name" type="text" value='' class="form-control mb-1" placeholder="Name">
      <label for="email" class="form-label">New Password</label>
      <input id="email" value='' type="email" size="30" class="form-control mb-1" placeholder="Email">
      <label for="mobile" class="form-label">New Password</label>
      <input id="mobile" type="text" value='' class="form-control mb-1" placeholder="Mobile">
      <div class="d-flex">
      <input type="button" onclick="editProfile()" value="Submit" class="btn btn-blue"><br>
      </div>
    </div>
  </div>

</div>
<script type="text/javascript" src="scrip.js" ></script>
</body>
</html>
