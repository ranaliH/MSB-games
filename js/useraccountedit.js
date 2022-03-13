function ValidateUser()                                    
{ 
    var uName = document.forms["userForm"]["User1"]; 
	var eMail = document.forms["userForm"]["email1"];
	var fName = document.forms["userForm"]["First1"]; 
	var fgName = document.forms["userForm"]["gFirst1"];
	
	 if (uName.value == "")                                  
    { 
        window.alert("Username cannot be empty."); 
        uName.focus(); 
        return false; 
    } 
	
	if (eMail.value == "")                                   
    { 
        window.alert("E-mail address cannot be empty."); 
        eMail.focus(); 
        return false; 
    } 
	
	if (fName.value == "")                                  
    { 
        window.alert("User's first name cannot be empty"); 
        fName.focus(); 
        return false; 
    } 
	
	if (fgName.value == "")                                  
    { 
        window.alert("Guardian's first name cannot be empty"); 
        fgName.focus(); 
        return false; 
    } 
	else
	{
		alert("Saved!");
	}
		
    return true; 
}
