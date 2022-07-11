<?php
require_once("../entities/Car.php");
$registration_number = $_GET['registration_number'];
$serial_engine = $_GET['serial_engine'];
$brand = $_GET['brand'];
$model = $_GET['model'];
$year = $_GET['year'];
$color = $_GET['color'];
$price = $_GET['price'];
$car = new Car($registration_number, $serial_engine, $brand, $model, $year, $color, $price);
?>
<html lang="ES">
    <head>
	    <!-- Latest versión Bootstrap files (js and css) -->
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"  crossorigin="anonymous">
	    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
	    <!-- icons -->
	    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
        <title>Auto ingresado correctamente</title>
    </head>
    <body>
        <div class="container">
	        <h1>Datos del Vehículo</h1>
	        <i data-feather="circle"></i>
	        <a href="../index.php" class="btn btn-link">Volver</a>
	        <table class="table table-striped" style="width: 100%; border: 1px solid; padding-left: 50px; padding-right: 50px">
		        <tbody>
		        <tr>
			        <th scope="row">Número de Matrícula</th>
			        <td><?php echo $car->getRegistrationNumber()?></td>
		        </tr>
		        <tr>
			        <th scope="row">Serial Motor</th>
			        <td><?php echo $car->getSerialEngine()?></td>
		        </tr>
		        <tr>
			        <th scope="row">Marca</th>
			        <td><?php echo $car->getBrand()?></td>
		        </tr>
		        <tr>
			        <th scope="row">Modelo</th>
			        <td><?php echo $car->getModel()?></td>
		        </tr>
		        <tr>
			        <th scope="row">Año</th>
			        <td><?php echo $car->getYear()?></td>
		        </tr>
		        <tr>
			        <th scope="row">Color</th>
			        <td><?php echo $car->getColor()?></td>
		        </tr>
		        <tr>
			        <th scope="row">Precio</th>
			        <td><?php echo $car->getPrice()?></td>
		        </tr>
		        </tbody>
	        </table>
        </div>
    </body>
</html>
