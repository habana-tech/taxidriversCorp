<?php


namespace App\TxdServices;

use App\TxdServices\Places\Place;

class TxdService
{
    private string $name;

    private ?Place $origin;

    private ?Place $destination;

    private array $images;

    private ?float $price;

    private ?float $passengerIncrementPrice = 10;  //10 usd per passenger after 3

    /**
     * TxdService constructor.
     * @param string $name
     * @param Place|null $origin
     * @param Place|null $destination
     * @param float|null $price
     * @param float|null $passengerIncrementPrice
     * @param array $images
     */
    public function __construct(
        string $name,
        Place $origin = null,
        Place $destination = null,
        float $price = null,
        $passengerIncrementPrice = null,
        array $images = []
    ) {
        $this->name = $name;
        $this->origin = $origin;
        $this->destination = $destination;
        $this->images = $images;
        $this->price = $price;
        $this->passengerIncrementPrice = $passengerIncrementPrice;
    }


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return Place
     */
    public function getOrigin(): Place
    {
        return $this->origin;
    }

    /**
     * @param Place $origin
     */
    public function setOrigin(Place $origin): void
    {
        $this->origin = $origin;
    }

    /**
     * @return Place
     */
    public function getDestination(): Place
    {
        return $this->destination;
    }

    /**
     * @param Place $destination
     */
    public function setDestination(Place $destination): void
    {
        $this->destination = $destination;
    }

    /**
     * @return array
     */
    public function getImages(): array
    {
        return $this->images;
    }

    /**
     * @param array $images
     */
    public function setImages(array $images): void
    {
        $this->images = $images;
    }

    public function resolveImages(): array
    {
        return array_merge($this->images, $this->destination->getImages());
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @return float|int
     */
    public function getPassengerIncrementPrice()
    {
        return $this->passengerIncrementPrice;
    }

    /**
     * @param float|int $passengerIncrementPrice
     */
    public function setPassengerIncrementPrice($passengerIncrementPrice): void
    {
        $this->passengerIncrementPrice = $passengerIncrementPrice;
    }
}
