<html>  
<head>  
<title> SignUp Page</title>  
</head>  
<body align="center" >  
<h1> CREATE YOUR ACCOUNT</h1>  
<table cellspacing="2" align="center" cellpadding="8" border="0">  
<tr><td> Name</td>   
<td><input type="text" placeholder="Enter your name" id="n1"></td></tr>  
<tr><td>Email </td>  
<td><input type="text" placeholder="Enter your email id" id="e1"></td></tr>
<tr><td> Mobile no</td>   
<td><input type="text" placeholder="Enter your Mobile no" id="mo1"></td></tr>  
<tr><td> Gender</td>   
<td>
    <input type="radio" name="gender" value="male" id="male"> Male<br>
    <input type="radio" name="gender" value="female" id="female"> Female<br>
    <input type="radio" name="gender" value="other" id="othet"> Other
</td></tr>
<tr><td> DOB</td>   
<td><input type="date" placeholder="Enter your DOB" id="d1"></td></tr>      
<tr><td> Set Password</td>  
<td><input type="password" placeholder="Set a password" id="p1"></td></tr>  
<tr><td>Confirm Password</td>  
<td><input type="password" placeholder="Confirm your password" id="p2"></td></tr>  
<tr><td>  
    
<input type="submit" value="Create" onclick="create_account()"/>
<input type="button" value="Login form" onclick="gologin()"/>  


</table>  
<script type="text/javascript" src="signup.js">    
</script>  
</body>  
</html> 