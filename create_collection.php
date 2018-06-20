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
   $collection = $db->createCollection("mycol");
   echo "Collection created succsessfully";
?>


</body>
</html>
