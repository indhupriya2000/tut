<?php
  $con=mysqli_connect("localhost","root","","tut");
  
 if($con)
 {
   $file=$_FILES['csvfile']['tmp_sid'];
   $handle=fopen($file,"r");
   $i=0;
   while(($cont=fgetcsv($handle,100000,","))!==false)
	
   {   
       $table=rtrim($_FILES['csvfile']['sid'],".csv");
       if($i==0)
	   {
	   $sid=$cont[0];
	   $tot=$cont[1];
	   $query="CREATE TABLE $table($sid INT(10),$tot INT(5));";
	   echo $query,"<br>";
	   mysqli_query($con,$query);
	   }
	   else
	   {
		$query="INSERT INTO $table ($sid,$tot) VALUES('$cont[0]','$cont[1]');";
		echo $query,"<br>";
		mysqli_query($con,$query);
       }
        $i++;
   }
}
 else
  {
	  echo"connection failed";
  }
?>