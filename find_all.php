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

   $cursor = $collection->find();
   // iterate cursor to display title of documents
	
   foreach ($cursor as $document) {
      echo $document["_id"] . "\n";
   }
?>

</body>
</html>
