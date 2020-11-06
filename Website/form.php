<!DOCTYPE html>
<html lang="en">

    <header >
        <title>Contact Us</title>
        <link rel="stylesheet" href="./CSS/styles.css">
    </header>

<body bgcolor=#1E1E1E>

 <?php
        $firstname = $lastname = $email = $contact = $address = $pcode = $age = $aw = "";
        $Efirstname = $Elastname = $Eemail = $Econtact = $Eaddress = $Epcode = $Eage = $Eaw = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {

            if (empty($_POST["age"])) 
            {
            $Eage = "Error! Age is required";
            } else 
                {
                    $age = input_validation($_POST["age"]);
                    if (preg_match("/^[a-zA-Z-' ]*$/",$age)) 
                    {
                          $Eage = "Error! Only Numbers are allowed";
                    } else if ( $age < 13 || $age > 60) 
                    {
                        $Eage = "Error! Age not valid. Age needs to be between 13 and 60";
                    }
                }

            if (empty($_POST["aw"])) 
            {
             $Eaw = "Error! Number of Anime Watched is required";
            } else 
                {
                    $aw = input_validation($_POST["aw"]);
                    if (preg_match("/^[a-zA-Z-' ]*$/",$aw)) 
                    {
                        $Eaw = "Error! Only Numbers are allowed";
                    } else if ( $aw > 200 ) 
                    {
                        $Eaw = "Error! Number of Anime Watched must be less than 200";
                    }
                }

        }

        function input_validation($data) 
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
        
        ?>

  <div style="position: fixed;top: 0%;">
      <table  bgcolor=#1E1E1E style="border-bottom:1px solid white;">
          <tr>
              <td style="border-right:1px solid white;padding: 0px 10px 10px 5px;">
                  <a href="home.html"><img src="logo1.jfif" style="width: 150; height: 120px; text-align: center;" /> </a>
                  
              </td>
              <td width="100%">
                  <p align="center"><font color="white" size=7><b><i>The&nbsp; Anime&nbsp; Zone</i></b></font></p>
              </td>
             
          </tr>
      </table>
      <div class="navbar">
          <a href="home.html">Back</a>
          <a href="fan favourites.html">Fan Favourites</a>
          <a href="Genres.html">Genres</a>
          <a href="Movies.html">Anime Movies</a>
          <a style="color:red"href="Form.html">Contact Us</a>
      </div>
  </div>

  <div style="padding:170px 30px 0px 30px;">
  <p align="center"><font color="cyan" size="40"><b>Contact Us</b></font></p>
  <div class="bg-form">
    <div class="contact-us">
        <form name="contact-us-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="firstname">First Name</label>
            <input type="text"  name="firstname" placeholder="Your Name"><br><br>
        
            <label for="lastname">Last Name</label>
            <input type="text"  name="lastname" placeholder="Surname"><br><br>

            <label for="age">Age</label>
            <input type="text"  name="age" id="age" placeholder="Your Age in Years"><br><br>
            <span class="error"><?php echo $Eage?><br></span>
            
            <label for="aw">Anime Watched(No.)</label>
            <input type="text"  name="aw" id="aw" placeholder="Number of Anime Watched"><br><br>
            <span class="error"><?php echo $Eaw?><br></span>

            <label for="emailid">Email-id</label>
            <input type="email"  name="email" placeholder="abc123@def.com"><br><br>

            <label for="contact">Contact No. (+91-)</label>
            <input type="text"  name="contact" id="contact" placeholder="10-Digit Mobile No."><br><br>

            <label for="address">Address</label>
            <input type="text"  name="address" placeholder="Your address"><br><br>
            <label for="pincode">Pin Code</label>
            <input type="text"  name="pcode" id="pcode" placeholder="Six Digit Pincode"><br><br>

            <label for="review">Comments/Queries</label>
            <textarea name="review" placeholder="Type Something"></textarea><br><br>
        
	
                
            <button class="btn-submit-form" onclick="FormValidation()">Submit</button>
        </form>
    </div>
    </div>
  </div>
    <script src="./CSS/js.js"></script>
</body>
</html>