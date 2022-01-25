<?php
   $dbhost = 'ec2-52-208-221-89.eu-west-1.compute.amazonaws.com';
   $dbuser = 'colbpsouojhqbl';
   $dbpass = '0246d8a225c675bd471cdde69e9f28f4992a190626d58dbcaa549a30e09197aa';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   echo 'Connected successfully';
   
   $sql = 'CREATE Database test_db';
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not create database: ' . mysql_error());
   }
   
   echo "Database test_db created successfully\n";
   mysql_close($conn);
?>