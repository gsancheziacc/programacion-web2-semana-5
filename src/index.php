<html lang="ES">
<head>
    <title>IACC - Programación WEB II</title>
	<!-- Latest versión Bootstrap files (js and css) -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"  crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
	<!-- Validations -->
	<script src="script.js"></script>
	<script>

	</script>
</head>
<body>
	<div class="container">
		<h1>Formulario de registro</h1>
		<form name="car_form" class="needs-validation was-validated"
		      novalidate onsubmit="return validateForm(this)"
		      action="actions/save.php" method="post">
			<div class="row mb-3">
				<label for="registration_number" class="col-sm-2 col-form-label">Número Matrícula</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="registration_number" name="registration_number"
					       placeholder="Número Matrícula" required onkeyup="validateInput(this)">
					<div id="helper_registration_number" class="invalid-feedback">Debe ingresar número de matrícula</div>
				</div>
			</div>
			<div class="row mb-3">
				<label for="serial_engine" class="col-sm-2 col-form-label">Serial motor</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="serial_engine" name="serial_engine"
					       placeholder="Serial motor" required>
					<div class="invalid-feedback">Debe ingresar serial motor</div>
				</div>
			</div>
			<div class="row mb-3">
				<label for="brand" class="col-sm-2 col-form-label">Marca</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="brand" name="brand"
					       placeholder="Marca" required>
					<div class="invalid-feedback">Debe ingresar marca</div>
				</div>
			</div>
			<div class="row mb-3">
				<label for="model" class="col-sm-2 col-form-label">Modelo</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="model" name="model"
					       placeholder="Modelo" required>
					<div class="invalid-feedback">Debe ingresar modelo</div>
				</div>
			</div>
			<div class="row mb-3">
				<label for="year" class="col-sm-2 col-form-label">Año</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" id="year" name="year"
					       placeholder="Año" required onkeyup="validateInput(this)">
					<div id="helper_year" class="invalid-feedback">Debe ingresar año</div>
				</div>
			</div>
			<div class="row mb-3">
				<label for="color" class="col-sm-2 col-form-label">Color</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="color" name="color"
					       placeholder="Color" required>
					<div class="invalid-feedback">Debe ingresar color</div>
				</div>
			</div>
			<div class="row mb-3">
				<label for="price" class="col-sm-2 col-form-label">Precio</label>
				<div class="col-sm-10">
					<input type="number" class="form-control" id="price" name="price"
					       placeholder="Precio" required>
					<div class="invalid-feedback">Debe ingresar precio</div>
				</div>
			</div>
			<div class="d-grid gap-2 d-md-flex justify-content-md-end">
				<button type="submit" class="btn btn-primary" id="submit">Enviar</button>
			</div>
		</form>
	</div>
</body>
</html>