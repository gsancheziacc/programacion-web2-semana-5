validateForm = (form) => {
	if(!form.checkValidity()) { return false; }
}

validateInput = (input) => {
	if(input.name === "registration_number") {
		const helper = document.getElementById('helper_registration_number');
		if(input.value.length === 0) {
			helper.innerHTML = "Debe ingresar número de matrícula";
			return;
		}
		if(input.value.length < 6) {
			input.setCustomValidity("el valor debe tener al menos 6 caracteres");
			helper.innerHTML = "el valor debe tener al menos 6 caracteres";
			return;
		}
		input.setCustomValidity("");
		return;
	}

	if(input.name === "year") {
		console.log(input.value);
		const helper = document.getElementById('helper_year');
		if(input.value.length === 0) {
			helper.innerHTML = "Debe ingresar año";
			return;
		}
		if(input.value.length !== 4) {
			input.setCustomValidity("el valor debe tener 4 números");
			helper.innerHTML = "el valor debe tener 4 números";
			return;
		}

		input.setCustomValidity("");
		return;
	}
}