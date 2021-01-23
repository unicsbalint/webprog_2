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
</div>