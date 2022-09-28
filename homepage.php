
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
{
  <body onload="clock()">

<div class="topnav">
  <a class="active" href="#home">TO DO</a>
  <a href="profile.php">Profile </a>
  <a href="edit_profile.php">edit Profile</a>
  <a href="change_password.php">Change Password</a>
  <button type="submit" class="logout" ><a href="index.php">Log Out</a></button>
</div>

<div style="padding-left:16px">
  <h2>TO DO</h2>
  <div class="sidebar">
    <div class="row">
        <div class="col-clock">
            <div id="clock"></div>
        </div>
        <hr>
    </div>
    <div class="row-weather">
        <div class="notification"> </div>
        <div class="main_weather">
            <h1 class="w_hadding">Live Weather</h1>
            <img src="https://ssl.gstatic.com/onebox/weather/64/partly_cloudy.png" onload="weather()">
            <h2 id="temperature"></h2>
            <h2 id="description"></h2>
            <p id="location"></p>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-gif">
            <img src="" id="image" height="250px" width="250px">
        </div>
    </div>

</div>

<!-- sidebar-end -->
<div class="todo">
    <div class="container">
        <h1>TO DO</h1>
        <div class="wrapper">
            <div class="task-input">
                <input type="text" placeholder="Add a new task">
            </div>
            <div class="controls">
                <div class="filters">
                    <span class="active" id="all">All</span>
                    <span id="pending">Pending</span>
                    <span id="completed">Completed</span>
                </div>
                <button class="clear-btn">Clear All</button>
            </div>
            <ul class="task-box"></ul>
        </div>
    </div>
</div>
<script type="text/javascript" src="script.js" ></script>
</body>
</html>
