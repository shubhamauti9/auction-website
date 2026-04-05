var flag111 = false;
function validateForm() 
{
  var x = document.myForm.fname.value;
  if (x == "") 
  {
    alert("First Name must be filled out");
    return false;    
  }

  var z = document.myForm.lname.value
  if (z == "") 
  {
    alert("Last Name must be filled out");
    return false;    
  }

  var d = document.myForm.dob.value
  if (d == "") 
  {
    alert("Enter the Date Of Birth");
    return false;    
  }

  var age = document.getElementById("AGE").value;
  if(age < 18)
  {
    alert("Your are not eligible for Bidding \n Please don't try to proceed");
    return false;
  }

  var e = document.myForm.email.value
  if (e == "") 
  {
    alert("Enter the Email");
    return false;    
  }

  var em = /^(?=.*[a-zA-Z0-9])(?=.*[@])(?=.*[a-zA-Z0-9])(?=.*[.])(?=.*[a-zA-Z0-9]).+$/;
  if (!e.match(em))
  {
    alert("Check Email id");
    return false;
  }
    
  var m = document.myForm.mno.value
  if (m == "") 
  {
    alert("Fill the 10 digit Mobile no.");
    return false;
  }
  if(m.length > 10 || m.length < 10)
  {
    alert("Mobile no. should be 10 digits");
    return false;
  }
        
  var l1 = document.myForm.address.value;
  if(l1 == "")
  {
    alert("Enter the Address");
    return false;
  }

  var gen = document.myForm.gender.value;
  if(gen == "")
  {
    alert("Select the Gender");
    return false;
  }

  var bd = document.myForm.bidlist.value;
  if(bd == "Select")
  {
    alert("Select the bid type in which you are interested");
    return false;
  }
    
  var p = document.myForm.password.value;
  if (p == "") 
  {
    alert("Please create the Password");
    return false;    
  }
  var p = document.myForm.password.value;
  if(p.length < 5)
  {
    alert("Password is weak increase the length");
    return false;  
  }
  else if(p.length > 15)
  {
    alert("Maximum limit is 15");
    return false;
  }
  var letterNumber = /^(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[!@#$%^&*_()]).+$/;
  if (!p.match(letterNumber)) 
  {
    alert("Password should be alphanumeric"); 
    return false; 
  }

  var ap = document.myForm.repassword.value;
  if(ap != p)
  {
    alert("Please check password authentication");
    return false;
  }
            
  var s = document.myForm.sq.value;
  if(s == "")
  {
    document.myForm.sq.value = prompt("Security Question \n Your First School.");
    return false;
  }

  var cp = document.myForm.captchaa.value;
  if(cp == "")
  {
    alert("Please enter captcha")
    return false;
  }
  var input = document.getElementById("it").value;
  var captcha = document.getElementById("captcha").value;
  if(input != captcha)
  {
    alert("Check captcha");
    return false;
  }
  if(document.myForm.fd.checked == false)
  {
    alert("Accept the terms and conditions");
    return false;
  }


  if(flag111 == false)
  {
    confirm("Please check your details before proceeding!");
    flag111 = true;
    return false;
  }
  return true;
  
}

var a = '';
function generateCaptcha() 
{
   var possible = "ABCDEFGHIKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    for (var i = 0; i < 7; i++) 
    {
        a += possible.charAt(Math.floor(Math.random() * possible.length));       
    }
    document.getElementById("captcha").value = a;   
}

function calculate_age() 
{   
    var m = document.getElementById("DOB").value;
    var x = new Date(m);
    var n = new Date();
    document.getElementById("AGE").value =  Math.abs(n.getUTCFullYear() - x.getUTCFullYear());
}
