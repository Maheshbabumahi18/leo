<?php
if( $_POST["name"]||$_POST["age"]){
 echo"welcome  ".$_POST["name"]."<br/>";
 echo"you are".$_POST["age"]."years old.";
 
 exit();
}
?>
<html>
<body>
<form action ="<?php $_PHP_SELF ?> "method ="POST">
name:<input type="text" name ="name"/>
age:<input type="text" name="age"/>
<input type="submit"/>
</form>
</body>
</html>
