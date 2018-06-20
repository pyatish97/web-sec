<!DOCTYPE html>
<html>
<body>


<?php
   // connect to mongodb
   $m = new MongoClient();
   echo "Connection to database successfully";
	
   // select a database
   $db = $m->projectdb;
   echo "Database mydb selected";
   $collection = $db->vd;
   echo "Collection selected succsessfully";

$collection->remove(array("_vid" => $_POST["vid"]));

   echo "deleted successfully";
 ?>
</body>
</html>
