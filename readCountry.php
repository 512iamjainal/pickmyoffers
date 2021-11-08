<?php
echo 'sanjay';
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_REQUEST["keyword"])) {
$query ="SELECT * FROM category WHERE category_name like '" . $_REQUEST["keyword"] . "%' ORDER BY category_name LIMIT 0,6";
echo $query;
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