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
	
   $document = array( 
      			"_vid" => $_POST["vid"], 
      			"description" => $_POST["info"],
      			"date"=> $_POST["date"] 
     
   		    );
	
   $collection->insert($document);
   echo "Document inserted successfully";
?>


</body>
</html>
