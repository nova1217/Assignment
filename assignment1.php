<html>
	   <head>
            <title> 
			</title>
       </head>
	   
	          <body>
	                <?php
			$Name="";
			$err_Name="";
			$Username="";
			$err_Username="";
			$Password="";
			$err_Password="";
			$Confirm_Password="";
			$err_Confirm_Password="";
			$Email="";
			$err_Email="";
			$hasError=false;
			
			
			
			$Gender="";
			$err_Gender="";
			
			
			$Bio="";
			$err_Bio="";
			if ($_SERVER["REQUEST_METHOD"] == "POST")
   {

      if (empty($_POST["Name"]))
      {
  		$err_Name = "Name required*";
		$hasError=true;
  	}
     else if(strlen($_POST["Name"])<5)
  	 {
  	  $err_Name="Enter valid name";
	  $hasError=true;
	  
  	 }
  	 else
     {
  		 $Name=htmlspecialchars ($_POST["Name"]);
  	 }
	  if (empty($_POST["Username"]))
      {
  		$err_Username = "Username required*";
		$hasError=true;
  	}
     else if(strlen($_POST["Username"])<5)
  	 {
  	  $err_Username="Enter valid Username";
	  $hasError=true;
	  
  	 }
  	 else
     {
  		 $Name=htmlspecialchars ($_POST["Name"]);
  	 }
  	     if (empty($_POST["Password"]))
      {
  		$err_Password = "Password required*";
		$hasError=true;
  	   }
     else if(strlen($_POST["Password"])<8)
  	 {
  	  $err_Password="Password must contain at least 8 character,,1 number and combination of uppercase and lowercase alphabet 1 special character(only check # or ?).";
	  $hasError=true;
  	 }
  	 else
     {
  		 $Password=$_POST["Password"];
  	 }
	  if (empty($_POST["Confirm Password"]))
      {
  		$err_Confirm_Password = "Confirm Password required*";
		$hasError=true;
  	   }
     else if(strlen($_POST["Confirm Password"])<8)
  	 {
  	  $err_Confirm_Password="Confirm Password must be Atleast 8 charecter";
	  $hasError=true;
  	 }
  	 else
     {
  		 $Confirm_Password=$_POST["Confirm Password"];
  	 }
	 
	 
	  if (empty($_POST["Enter Your Email Address"]))
      {
  		$err_Email = "Email Address required*";
		$hasError=true;
  	   }
     else if(strlen($_POST["Enter Your Email Address"])<8)
  	 {
  	  $err_Email="4. Conditions must contain @ and at least one .(dot) after @";
	  $hasError=true;
  	 }
  	 else
     {
  		 $Email=$_POST["Enter Your Email Address"];
  	 }
  	  if (empty($_POST["Gender"]))
      {
      $err_Gender = "Gender required*";
	  $hasError=true;
      } else
       {
       $Gender =$_POST["Gender"];
      }

  	
       if(empty($_POST["Bio"])){
					$err_Bio="Enter a text ";
					$hasError=true;
				}
				
				else{
					$Bio=$_POST["Bio"];
				}
				
				if(!$hasError)
				{
					echo "Username: $Name";
				}
				
    


   }		?>



<fieldset>

         <legend><h1>Club Member Registration</h1></legend>
		 
		 
		 <form action="" method="post">
			<table>
				<tr>
					<td><span>Name </span></td>
					
					<td>:<input type="text"  name="Name" value="<?php echo $Name?>"<span><?php echo $err_Name?>
					
					</span></td>

				</tr>
				<tr>
					<td><span>Username </span></td>
					
					<td>:<input type="text"  name="Username"value="<?php echo $Username?>" <span><?php echo $err_Username?>
					
					</span></td>

				</tr>
				<tr>
				<td><span>Password</span></td>
					<td>:<input type="Password"name="Password" value="<?php echo $Password?>"<span><?php echo $err_Password
					?></span></td>
				</tr>
				<tr>
				<td><span>Confirm Password</span></td>
					<td>:<input type="Password" name="Confirm Password"value="<?php echo $Confirm_Password?>" <span><?php echo $err_Confirm_Password?>
					</span></td>
				</tr>
				<tr>
				<td><span>Email</span></td>
					<td>:<input type="Email" name="Email" value="<?php echo $Email?>"<span><?php echo $err_Email?>
					
					</span></td>
				</tr>
				
				
				<tr>
				<td><span>Phone</span></td>
				<td align="left" colspan="">:<input type placeholder ="Code"  name="Code"
				
				 align="center" colspan=""> - <input type placeholder ="Number" name="Number"></td>
				
					
				</tr>
				<tr>
				<td><span>Address</span></td>
					<td colspan="3">:<input type placeholder="Street Address"="Address" name="Address" <span>
					</span><br>
					<span>:<input type placeholder="City"="Address" name="Address"</span> <span>- <input type placeholder="State"="Address" name="Address"
					</span><br>
					:<input type placeholder="Postal/Zip Code"="Address" name="Address" <span>
					</span></td>
				</tr>
				<tr>
				     <td>
					     Birth Date
					 </td>
					 <td>:
					 <select><option>Day </option>
					 <?php 
					 for($i=1;$i<=31;$i++)
					 {
						 echo "<option>$i</option>";
					 }
					 ?>
					 
					 
					 </select>
					 <select><option>Month </option>
					 
					 <?php
					      $month = array ("January","February","March","April","May","June","July","August","September","October","November","December");
						  foreach($month as $v)
						  {
							  echo "<option>$v</option>";
						  }
					 ?>
					 </select>
					 <select><option>Year</option>
					 <?php 
					 for($i=2021;$i>0;$i--)
					 {
						 echo "<option>$i</option>";
					 }
					 ?>
					 </select>
					 </td>
					
				</tr>
				
				
				<tr>
					<td><span>Gender</span></td>
					<td>:<input type="radio" value="Male" name="Gender" >Male<input type="radio" value="Female" name="Gender" >Female  <br><span><?php echo $err_Gender
					?></span></td>
				</tr>
				<tr>
					<td><span>Where did you hear about us?</span> </td>
					<td> <input type="checkbox" value="A Friend or Colleague" name="Hobbies[]">A Friend or Colleague<br>
					     <input type="checkbox" value="Google" name="Hobbies[]">Google<br>
					     <input type="checkbox" value="Blog Post" name="Hobbies[]">Blog Post<br>
						 <input type="checkbox" value="News Article" name="Hobbies[]">News Article<br>
						 

						
				    </td>
				</tr>
				
				<tr>
				
					<td><span>Bio </span></td>
					<td>:<textarea name="Bio"></textarea></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" value="Register"></td>
				</tr>

			</table>


		</form>


</fieldset>
</body>
</html>

