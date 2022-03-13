function ValidateReg()                                    
{ 
    var name = document.forms["RegForm"]["name"];               
    var email = document.forms["RegForm"]["email"];    
    var password = document.forms["RegForm"]["psw"];  
    var passwordconfirm = document.forms["RegForm"]["pswr"];
	var fname = document.forms["RegForm"]["first"];
	var fgname = document.forms["RegForm"]["gFirst"];
	var passwordError = document.getElementById('passwordError');
   
    if (name.value == "")                                  
    { 
        window.alert("Please enter a username."); 
        name.focus(); 
        return false; 
    } 
   
    
       
    if (email.value == "")                                   
    { 
        window.alert("Please enter a valid e-mail address."); 
        email.focus(); 
        return false; 
    } 
   
 
   
    if (password.value == "")                        
    { 
        window.alert("Please enter a password"); 
        password.focus(); 
        return false; 
    } 
   
   if (passwordconfirm.value == "")                        
    { 
        window.alert("Please re-enter your password"); 
        passwordconfirm.focus(); 
        return false; 
    } 
	
	if (fname.value == "")                                  
    { 
        window.alert("User's first name cannot be empty"); 
        fname.focus(); 
        return false; 
    } 
	
	if (fgname.value == "")                                  
    { 
        window.alert("Guardian's first name cannot be empty"); 
        fgname.focus(); 
        return false; 
    } 
	
	if (password.value != passwordconfirm.value) 
	{
      passwordError.innerHTML = "The two passwords do not match";
	  alert("The passwords do not match. Please re-check");
      return false;
    }
		
    return true; 
}
//Referref from geeksforgeeks.com
