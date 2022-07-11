<?php
class Car
{
    private string $registrationNumber;
    private string $serialEngine;
    private string $brand;
    private string $model;
    private int $year;
    private string $color;
    private float $price;


    /**
     * @param string $registrationNumber set the registration number
     * @param string $serialEngine set the serial engine
     * @param string $brand set the brand
     * @param string $model set the model
     * @param int $year set the year
     * @param string $color set the color
     * @param float $price set the price
     */
    public function __construct(string $registrationNumber, string $serialEngine, string $brand, string $model, int $year, string $color, float $price)
    {
        $this->registrationNumber = $registrationNumber;
        $this->serialEngine = $serialEngine;
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
        $this->price = $price;
    }

    /**
     * @return string get the registration number
     */
    public function getRegistrationNumber(): string
    {
        return $this->registrationNumber;
    }

    /**
     * @return string get the serial engine
     */
    public function getSerialEngine(): string
    {
        return $this->serialEngine;
    }

    /**
     * @return string get the brand
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @return string get the model
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @return int get the year
     */
    public function getYear(): int
    {
        return $this->year;
    }

    /**
     * @return string get the color
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return float get the price
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param string $registrationNumber set the registration number
     */
    public function setRegistrationNumber(string $registrationNumber): void
    {
        $this->registrationNumber = $registrationNumber;
    }

    /**
     * @param string $serialEngine set the serial engine
     */
    public function setSerialEngine(string $serialEngine): void
    {
        $this->serialEngine = $serialEngine;
    }

    /**
     * @param string $brand set the brand
     */
    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    /**
     * @param string $model set the model
     */
    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    /**
     * @param int $year set the year
     */
    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    /**
     * @param string $color set the color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @param float $price set the price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }
}