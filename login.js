function submit_form(){

    let userArray = JSON.parse(localStorage.getItem("users"));
    const email = document.getElementById('uname').value.trim().toLowerCase();
    const password = document.getElementById('password').value.trim();
    let isUser = false

    for(let i = 0 ; i < userArray.length; i++){
      if (email == userArray[i].email && password == userArray[i].password) {
        isUser = true;
        break;
      }
    }

    if(isUser){
      sessionStorage.setItem('uname', email);
      window.location = "homepage.html";
    }
    else {
      alert("Invalid User")
    }
}  
function create(){  
    window.location="signup.html";  
}