<html>
<head>
<center><h1 style="color:green:text-align:center:">STUDENT MARK LIST </h1></center>

   <title>CSV insert</title>
</head>

<body>
<center>
<p><h2><marquee>"EDUCATION IS THE MOST POWERFULL WEAPON WHICH YOU CAN USE TO CHANGE THE WORLD!!!"</marquee></h2></p>
<br>STAFF NAME:<input type="textbox" size="12"></br>
<br>STAFF ID:<input type="textbox" size="12"></br>
<br>Male<input type="radio" name="gender"></br>
<br>Female<input type="radio" name="gender"></br>
<br>SUBJECT:<select>
          <option value="TAMIL">TAMIL</option>
		  <option value="ENGLISH">ENGLISH</option>
		  <option value="MATHS">MATHS</option>
		  <option value="SCIENCE">SCIENCE</option>
		  <option value="SOCIAL">SOCIAL</option></br>

<br><p>upload your mark records</p></br>
<br><form action="insert.php" method="post" enctype="multipart\form-data">
<input type="file" name="csvfile" required="required"/></br>
<br><input type="submit" value="upload"/></br>
</center>
</form>
</body>
</html>