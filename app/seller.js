function validate()
{
	var x = document.seller.pname.value;
    if (x == "") 
    {
      alert("Product name should be filled");
      return false;    
    }
    var y = document.seller.des.value;
    if (y == "") 
    {
      alert("Product description should be filled");
      return false;    
    }
    var bd = document.seller.bd.value;
    if(bd == "select")
    {
      alert("Select Product type");
      return false;
    }
    var bamount = document.seller.bamount.value;
    if(bamount == "")
    {
      alert("Enter the Base amount");
      return false;
    }
	var etime = document.seller.etime.value;
    if (etime == "") 
    {
      alert("Enter the Bid Closing Date and Time");
      return false;    
    }
    var date = new Date();

    if(etime.slice(0,4) < date.getFullYear())
    {
    	alert("Invalid Date");
    	return false;
    }
    else if(etime.slice(0,4) == date.getFullYear())
    {
    	if(etime.slice(5,7) < date.getMonth()+1)
    	{
    		alert("Invalid Date");
    		return false;	
    	}
    	else if(etime.slice(5,7) == date.getMonth()+1)
    	{
    		if(etime.slice(8,10) < date.getUTCDate())
    		{
    			alert("Invalid Date");
    			return false;
    		}
    		else if(etime.slice(8,10) == date.getUTCDate())
    		{
    			if(etime.slice(11,13) < date.getHours())
    			{
    				
    					alert("Invalid Time");
    					return false;
    			}
    			else if(etime.slice(11,13) == date.getHours())
    			{
    				if(etime.slice(14,16) <= date.getMinutes())
    				{
    					alert("Invalid Time");
    					return false;
    				}

    			}

    		}
    	}
    }
    else
    {
    var img = document.seller.img.value;
    if(img == "")
    {
    	alert("Upload the Product Image");
    	return false;
    }
    var extension = img.split('.').pop(); 
   	if(extension != "jpg"||"JPG"  && extension != "jpeg"||"JPEG" && extension != "png"||"PNG")
    {
    	alert("Upload .jpg, .jpeg, .png file");
    	return false;
    }
	
	return true;
    }
}





