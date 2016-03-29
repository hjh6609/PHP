<?php 

   $serverName = "."; 
   $connectionInfo = array ("Database"=>"test","UID"=>"sa","PWD"=>"1234"); 
   $conn = sqlsrv_connect($serverName, $connectionInfo); 

         if ($conn) 
        { 
          echo "연결 성공!\n"; 
        } 

         else 
        {
         echo "연결 실패!\n"; 
        die ( print_r (sqlsrv_errors(), true)); 
         } 

         sqlsrv_close($conn); 
?> 
