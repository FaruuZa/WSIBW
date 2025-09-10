<?php include("create-object.php"); ?>
<?php
$stefan = new person();
$nick = new person();

$stefan->set_name("Stefan Mischook");
$nick->set_name("Nick Waddles");

echo "Stefan's full name: ".$stefan->get_name();
echo "Nick's full name: ".$nick->get_name();

?>


<!-- // directly accessing properties in a class is a no-no -->
<!-- // echo "Stefan's full name: ".$stefan->name; -->