<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["keyword"])) {
$query ="SELECT * FROM category WHERE category_name like '" . $_POST["keyword"] . "%' ORDER BY category_name LIMIT 0,6";
$result = $db_handle->runQuery($query);
if(!empty($result)) {
?>
<ul id="country-list">
<?php
foreach($result as $country) {
?>
<li onClick="selectCountry('<?php echo $country["category_name"]; ?>');"><?php echo $country["category_name"]; ?></li>
<?php } ?>
</ul>
<?php } } ?>