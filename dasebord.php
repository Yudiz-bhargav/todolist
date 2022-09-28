<!-- <!-- <body onload="clock()">
    <!-- Navbar start -->
    <div class="topnav">
        <a class="navbar-brand" href="#">TO DO</a>
        <a href="#home">Home</a>
        <a href="profile.php">Profile</a>
        <a href="change-psw.php">Change Password</a>
        <a href="#" class="logout" onclick="logout()"><span class="glyphicon glyphicon-log-in"></span> Logout</a>
    </div>
    <!-- Navbar end -->

    <!-- sidabar -->
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
</body> -->

 -->


 function clock() {
    var time = new Date();
    var hrs = time.getHours();
    var min = time.getMinutes();
    var sec = time.getSeconds();

    if (hrs > 12) {
        hrs = hrs - 12;
    }
    if (hrs == 0) {
        hrs = 12;
    }

    document.getElementById('clock').innerphp = hrs + ':' + min + ':' + sec;
}
setInterval(clock, 500);

function logout() {
    sessionStorage.clear();
    window.location.replace('index.php')
    console.log('ssdfdsf')
}

// weather
function weather() {
    function getWeather() {
        let temperature = document.getElementById("temperature");
        let description = document.getElementById("description");
        let location = document.getElementById("location");

        let api = "https://api.openweathermap.org/data/2.5/weather";
        let apiKey = "a4f34114df09ff8466f17741eea80936";

        location.innerphp = "Locating...";

        navigator.geolocation.getCurrentPosition(success, error);

        function success(position) {
            latitude = position.coords.latitude;
            longitude = position.coords.longitude;

            let url =
                api + "?lat=" + latitude + "&lon=" + longitude + "&appid=" + apiKey + "&units=imperial";

            fetch(url)
                .then(response => response.json())
                .then(data => {
                    let temp = data.main.temp;
                    // 32°F − 32 × 5/9
                    temp = (temp - 32) * (5 / 9)

                    temperature.innerphp = Math.round(temp) + "° C";
                    location.innerphp =
                        data.name + " (" + latitude + "°, " + longitude + "°)";
                    description.innerphp = data.weather[0].main;
                });
        }

        function error() {
            location.innerphp = "Unable to retrieve your location";
        }
    }

    getWeather();
}

// gif
var i = 0;
function getgif() {
    fetch("https://api.giphy.com/v1/gifs/search?q=iron+man&api_key=59GCHI7JsLlcF7PdGTUnEUL75ghSpiIX")
        .then(function (response) {
            return response.json();
        })
        .then(function (data) {
            function image(image_url) {
                document.getElementById("image").src = data.data[i].images.original.url;
            }
            image(data.message);
        })
    i++;
}
getgif()
setInterval(getgif, 120000)

