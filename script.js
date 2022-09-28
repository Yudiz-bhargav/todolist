const sessionEmail = sessionStorage.getItem("email");

const mailformat = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
const mobileformat = /^([6-9]{1})([234789]{1})([0-9]{8})$/
const userIndex = sessionStorage.getItem("userIndex");
let gifIndex = 0;

let aUser = JSON.parse(localStorage.getItem('users'));
let oUser = {};
oUser = aUser[userIndex]
let editTodoIndex = 0;


//User Profile
function getUserDetails() {
	let name = document.getElementById("name").innerHTML = oUser.name;
	let email = document.getElementById("email").innerHTML = oUser.email;
	let mobile = document.getElementById("mobile").innerHTML = oUser.mobile;
	let dob = document.getElementById("dob").innerHTML = oUser.dob;
	let gender = document.getElementById("gender").innerHTML = oUser.gender;
}


//time 

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

  document.getElementById('clock').innerHTML = hrs + ':' + min + ':' + sec;
}
setInterval(clock, 500);

//log out

function logout() {
  sessionStorage.clear();
  window.location.replace('index.html')
  console.log('ssdfdsf')
}

//weathet
function getWeather() {
  let temperature = document.getElementById("temperature");
  let description = document.getElementById("description");
  let location = document.getElementById("location");

  let api = "https://api.openweathermap.org/data/2.5/weather";
  let apiKey = "f146799a557e8ab658304c1b30cc3cfd";

  location.innerHTML = "Locating...";

  navigator.geolocation.getCurrentPosition(success, error);

  function success(position) {
      latitude = position.coords.latitude;
      longitude = position.coords.longitude;

      let url =
          api +
          "?lat=" +
          latitude +
          "&lon=" +
          longitude +
          "&appid=" +
          apiKey +
          "&units=imperial";

      fetch(url)
          .then(response => response.json())
          .then(data => {
              console.log(data);
              let temp = data.main.temp;
              temperature.innerHTML = temp + "° F";
              location.innerHTML =
                  data.name + " (" + latitude + "°, " + longitude + "°)";
              description.innerHTML = data.weather[0].main;
          });
  }

  function error() {
      location.innerHTML = "Unable to retrieve your location";
  }
}

getWeather();
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

