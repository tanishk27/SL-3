function FormValidation() 
{
    
  var flag=0;
  var alphabets = /^[A-Za-z]+$/;
  var firstname = document.forms["contact-us-form"]["firstname"].value;
  if (firstname == "") 
  {
    alert("First Name cannot be empty !");
    event.preventDefault()
    return false;     
  }   //first name validation
  else if (!(firstname.match(alphabets)))
    {
      alert("First Name can consist only Alphabets! Please remove non-alphabetic elements. ");
      event.preventDefault()
      return false;
    }   //first name validation

  var lastname = document.forms["contact-us-form"]["lastname"].value;
  if (lastname == "") 
  {
    alert("Last Name cannot be empty !");
    event.preventDefault()
    return false;
  }   //last name validation
  else if (!(lastname.match(alphabets)))
  {
    alert("Last Name can consist only Alphabets! Please remove non-alphabetic elements. ");
    event.preventDefault()
    return false;
  }   //last name validation

  var emailid = document.forms["contact-us-form"]["email"].value;
  if (emailid == "") 
  {
    alert("Please Enter email!");
    event.preventDefault()
    return false;
  }
  else if(emailid.includes(".com.com"))
  {
    alert("Invalid email ! email cannot contain '.com.com'");
    event.preventDefault()
    return false;
  }
  else if(emailid.includes("@."))
  {
    alert("'.' is used at the wrong place in '.com' ");
    event.preventDefault()
    return false;
  }   
  else if(!(emailid.includes("@" && ".com")))
  {
    alert("Email id should contain @ and .com");
    event.preventDefault()
    return false;
  }  //email validation


  var address = document.forms["contact-us-form"]["address"].value;
  if (address == "") {
    alert("Address cannot be empty !");
    event.preventDefault()
    return false;
  }   //Address validation

  /*var review = document.forms["contact-us-form"]["review"].value;
  if (review == "") {
    alert("Please give some Comments or type Queries if any!");
    event.preventDefault()
    return false;
  }   //review validation */


  var pcode = document.getElementById("pcode").value;
  if (pcode == "") 
  {
    alert("Please Enter Pincode !");
    event.preventDefault()
    return false;
  }
  else if( pcode<400000 || pcode>499999 )
   {
    console.log("");
    alert("Invalid Pincode !");
    event.preventDefault()
    return false;
  }   //pincode validation   

  var phone = document.getElementById("contact").value;
  if (phone == "")
  {
    alert("Please Enter Contact Number !");
    event.preventDefault()
    return false;
  }
  else if(phone < 1000000000 || phone > 99999999999 )
  {
    alert("Invalid contact number! The Contact Number should of 10 or 11 digits.");
    event.preventDefault()
    return false;
  }
  else if(phone < 7000000000 || (phone > 9999999999 && phone < 70000000000)){
    alert("Invalid Contact number! The Contact Number must start from 7,8 or 9.")
    event.preventDefault()
    return false;
  }   //contact validation   


  //console.log(firstname,lastname,emailid,phone,address,pcode);
  //alert("You have successfully submitted your Details! We will revert back to you shortly!");
  //return true;          //if everything is correct
  
}


//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 100px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() 
{
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() 
{
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

