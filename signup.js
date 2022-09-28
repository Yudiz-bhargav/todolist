function gologin() {
    window.location = "Login.html";
}

function create_account() {
    const aUser = [];
 
    const oUser = {};
    const userArray = JSON.parse(localStorage.getItem('users'));
  var name = document.getElementById("n1").value.trim();
  var email = document.getElementById("e1").value.trim().toLowerCase();
  var mobile = document.getElementById("mo1").value.trim();
  var dob = document.getElementById("d1").value;
  var password = document.getElementById("p1").value;
  var cpassword = document.getElementById("p2").value;
  let male = document.getElementById('male');
  let female = document.getElementById('female');

  let gender;
  if (male.checked || female.checked) {
    gender = (() => (male.checked ? 'Male' : 'Female'))();
  }

  
  //Code for password validation
  var letters = /^[A-Za-z]+$/;
  var email_val =
    /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  //other validations required code
  if (name == "" || email == "" || password == "" || password == "" || gender == undefined) {
    alert("Enter each details correctly");
  } else if (!letters.test(name)) {
    alert("Name is incorrect must contain alphabets only");
  } else if (!email_val.test(email)) {
    alert("Invalid email format please enter valid email id");
  } else if (password != cpassword) {
    alert("Passwords not matching");
  } else if (document.getElementById("p1").value.length > 12) {
    alert("Password maximum length is 12");
  } else if (document.getElementById("p1").value.length < 6) {
    alert("Password minimum length is 6");
  }
  else{
    if (userArray != null) {
        for (let i = 0; i < userArray.length; i++) {
          if (email === userArray[i].email) {
            alert('User already exists');
            return false;
          }
        }
      }
      oUser.name = name;
      oUser.email = email;
      oUser.password = password;
      oUser.mobile = mobile;
      oUser.dob = dob;
      oUser.gender = gender;
      if (userArray == null) {
        aUser.push(oUser);
        // console.log(aUser)
        localStorage.setItem('users', JSON.stringify(aUser));
      } else {
        userArray.push(oUser);
        // console.log(userArray)
        localStorage.setItem('users', JSON.stringify(userArray));
      }
    alert(
        "Your account has been created successfully... Redirecting to Login.html"
      );
      window.location = "Login.html";
  }

}

function submit_form(){

    const users = JSON.parse(localStorage.getItem('users'));
  if (users == null) {
    alert('Invalid Credentials');
    return false;
  }

  const email = document.getElementById('uname').value.trim().toLowerCase();
  const password = document.getElementById('password').value;
  let isUser = false;
  for (let i = 0; i < users.length; i++) {
    if (email == users[i].email && password == users[i].password) {
      sessionStorage.setItem('userIndex', i);
      sessionStorage.setItem('email', email);
      isUser = true;
      break;
    }
  }
  if (isUser) {
    alert("Login successfully"); 
    window.location = 'homepage.html';
  } else {
    alert('Invalid details!, please fill right details');
  }
    
}  
function create(){  
    window.location="signup.html";  
}
