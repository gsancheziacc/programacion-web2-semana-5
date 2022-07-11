<?php
require_once("../entities/Car.php");
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $registration_number = $_POST['registration_number'];
    $serial_engine = $_POST['serial_engine'];
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $color = $_POST['color'];
    $price = $_POST['price'];
    //Is recommended use connection to database for save and just send in header the car identifier (registration number)
    //just for simplicity I send in header all the data
    try {
        $car = new Car($registration_number, $serial_engine, $brand, $model, $year, $color, $price);
        header('Location: ../views/SuccessForm.php?'
            .'registration_number='.urlencode($registration_number)
            .'&serial_engine='.urlencode($serial_engine)
            .'&brand='.urlencode($brand)
            .'&model='.urlencode($model)
            .'&year='.urlencode($year)
            .'&color='.urlencode($color)
            .'&price='.urlencode($price)
        );
    } catch (Exception $e) {
        echo $e->getMessage();
        header('Location: ../views/ErrorForm.php?error='.urlencode($e->getMessage()));
    }
}
