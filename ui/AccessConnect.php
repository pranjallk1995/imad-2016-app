<?php
 $conn = new PDO("odbc:Driver={*,mdb, *.accdb)};Dbq=C:\\path\\;Uid=Admin");

 $data = $conn->query("Select * From ");
 $row = $data->fetch();
 $p = $row["med_id"];
 echo $p;
 ?>