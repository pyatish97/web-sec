<!DOCTYPE html>
<html>
<body>




<?php
   // connect to mongodb
   $m = new MongoClient();
   echo "Connection to database successfully";
	
   // select a database
   $db = $m->mydb;
   echo "Database mydb selected";
   $collection = $db->mycol;
   echo "Collection selected succsessfully";



$collection->update(array(‘title’ => ‘My fourth post’), array(‘$set’ => array(‘title’ => ‘My last post’)));



   // now update the document
   $collection->update(array("_vid"=>$_POST["vid"]), 
      array('$set'=>array("description"=>$_POST["info"])));
   echo "Document updated successfully";
	
   // now display the updated document
   $cursor = $collection->find();
	
   // iterate cursor to display title of documents
   echo "Updated document";
	
   foreach ($cursor as $document) {
      echo $document["title"] . "\n";
   }
?>


</body>
</html>
