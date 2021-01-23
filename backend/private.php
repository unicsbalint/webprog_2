<div class="privateBox">
<h1>CRUD for car db:</h1>

<form action="backend/add_car.php" method="POST">
  <label for="car_brand">Brand:</label><br>
  <input class="crudInput" type="text" id="car_brand" name="car_brand"><br>
  <label for="car_type">Type:</label><br>
  <input class="crudInput" type="text" id="car_type" name="car_type"><br>
  <label for="car_hp">Horsepower:</label><br>
  <input class="crudInput" type="text" id="car_hp" name="car_hp"><br>
  <input class="crudButton" type="submit" value="ADD CAR">
</form>
<form action="backend/delete_car.php" method="POST">
  <label for="car_id">CAR ID:</label><br>
  <input class="crudInput" type="text" id="car_id" name="car_id"><br>
  <input class="crudButton" type="submit" value="DELETE CAR">
</form>

<form action="backend/modify_car.php" method="POST">
  <label for="fname">CAR ID:</label><br>
  <input class="crudInput" type="text" id="car_id" name="car_id"><br>
  <label for="car_brand">Brand:</label><br>
  <input class="crudInput" type="text" id="car_brand" name="car_brand"><br>
  <label for="car_type">Type:</label><br>
  <input class="crudInput" type="text" id="car_type" name="car_type"><br>
  <label for="car_hp">Horsepower:</label><br>
  <input class="crudInput" type="text" id="car_hp" name="car_hp"><br>
  <input class="crudButton" type="submit" value="MODIFY CAR">
</form>

<h1>Cars in the database:</h1>
<table>
<thead>
<th>Car id</th>
<th>Brand</th>
<th>Type</th>
<th>Horsepower</th>

</thead>
<?php 
$query = "SELECT * FROM CAR";    
$params = [
];
require_once 'dbFunctions.php';
$cars = getList($query, $params);
?>
<?php foreach ($cars as $c) : ?>
<tr>
<td><?=$c['car_id']?></td>
<td><?=$c['brand']?></td>
<td><?=$c['type']?></td>
<td><?=$c['horsepower']?></td>
</tr>
<?php endforeach; ?>

</table>

</div>

<div class="privateBox">
<h1>CRUD for parts db:</h1>
<form action="backend/add_part.php" method="POST">
  <label for="part">Part:</label><br>
  <input class="crudInput" type="text" id="part" name="part"><br>
  <label for="type">For type:</label><br>
  <input class="crudInput" type="text" id="type" name="type"><br>
  <input class="crudButton" type="submit" value="ADD PART">
</form>
<form action="backend/delete_part.php" method="POST">
  <label for="car_id">PART ID:</label><br>
  <input class="crudInput" type="text" id="part_id" name="part_id"><br>
  <input class="crudButton" type="submit" value="DELETE PART">
</form>

<form action="backend/modify_part.php" method="POST">
  <label for="fname">PART ID:</label><br>
  <input class="crudInput" type="text" id="part_id" name="part_id"><br>
  <label for="part">Part:</label><br>
  <input class="crudInput" type="text" id="part" name="part"><br>
  <label for="type">For type::</label><br>
  <input class="crudInput" type="text" id="type" name="type"><br>
  <input class="crudButton" type="submit" value="MODIFY PART">
</form>

<h1>Parts in the database:</h1>
<table>
<thead>
<th>Part id</th>
<th>Part name</th>
<th>For type</th>


</thead>
<?php 
$query = "SELECT * FROM carparts";    
$params = [
];
require_once 'dbFunctions.php';
$parts = getList($query, $params);
?>
<?php foreach ($parts as $c) : ?>
<tr>
<td><?=$c['id']?></td>
<td><?=$c['part']?></td>
<td><?=$c['for_type']?></td>
</tr>
<?php endforeach; ?>
</table>
</div>


<div class="privateBox">
<h1>CRUD for oil db:</h1>
<form action="backend/add_oil.php" method="POST">
  <label for="car_brand">Car brand:</label><br>
  <input class="crudInput" type="text" id="car_brand" name="car_brand"><br>
  <label for="type">Oil brand:</label><br>
  <input class="crudInput" type="text" id="oil_brand" name="oil_brand"><br>
  <input class="crudButton" type="submit" value="ADD OIL">
</form>
<form action="backend/delete_oil.php" method="POST">
  <label for="oil_id">OIL ID:</label><br>
  <input class="crudInput" type="text" id="oil_id" name="oil_id"><br>
  <input class="crudButton" type="submit" value="DELETE OIL">
</form>

<form action="backend/modify_oil.php" method="POST">
  <label for="fname">Oil ID:</label><br>
  <input class="crudInput" type="text" id="oil_id" name="oil_id"><br>
  <label for="part">Car brand:</label><br>
  <input class="crudInput" type="text" id="car_brand" name="car_brand"><br>
  <label for="type">Oil brand:</label><br>
  <input class="crudInput" type="text" id="oil_brand" name="oil_brand"><br>
  <input class="crudButton" type="submit" value="MODIFY OIL">
</form>

<h1>Oils in the database:</h1>
<table>
<thead>
<th>Oil id</th>
<th>Car brand</th>
<th>Recommended oil for brand</th>


</thead>
<?php 
$query = "SELECT * FROM oil";    
$params = [
];
require_once 'dbFunctions.php';
$oil = getList($query, $params);
?>
<?php foreach ($oil as $c) : ?>
<tr>
<td><?=$c['oil_id']?></td>
<td><?=$c['car_brand']?></td>
<td><?=$c['recommended_oil_brand']?></td>
</tr>
<?php endforeach; ?>
</table>
</div>

<div class="privateBox">
<h1>CRUD for car_color db:</h1>
<form action="backend/add_color.php" method="POST">
  <label for="brand">Brand:</label><br>
  <input class="crudInput" type="text" id="brand" name="brand"><br>
  <label for="type">Basic color name:</label><br>
  <input class="crudInput" type="text" id="color_name" name="color_name"><br>
  <label for="type">Color code:</label><br>
  <input class="crudInput" type="text" id="color_code" name="color_code"><br>
  <input class="crudButton" type="submit" value="ADD BRAND SPECIFIC COLOR">
</form>
<form action="backend/delete_color.php" method="POST">
  <label for="oil_id">COLOR ID:</label><br>
  <input class="crudInput" type="text" id="color_id" name="color_id"><br>
  <input class="crudButton" type="submit" value="DELETE COLOR">
</form>

<form action="backend/modify_color.php" method="POST">
  <label for="fname">Color ID:</label><br>
  <input class="crudInput" type="text" id="color_id" name="color_id"><br>
  <label for="part">Brand:</label><br>
  <input class="crudInput" type="text" id="brand" name="brand"><br>
  <label for="type">Color name:</label><br>
  <input class="crudInput" type="text" id="color_name" name="color_name"><br>
  <label for="type">Color code:</label><br>
  <input class="crudInput" type="text" id="color_code" name="color_code"><br>
  <input class="crudButton" type="submit" value="MODIFY COLOR">
</form>

<h1>Car colors in the database:</h1>
<table>
<thead>
<th>Color id</th>
<th>Brand</th>
<th>Basic color name</th>
<th>Color code</th>


</thead>
<?php 
$query = "SELECT * FROM brand_specific_color";    
$params = [
];
require_once 'dbFunctions.php';
$color = getList($query, $params);
?>
<?php foreach ($color as $c) : ?>
<tr>
<td><?=$c['color_id']?></td>
<td><?=$c['brand']?></td>
<td><?=$c['basic_color_name']?></td>
<td><?=$c['color_code']?></td>
</tr>
<?php endforeach; ?>
</table>
</div>