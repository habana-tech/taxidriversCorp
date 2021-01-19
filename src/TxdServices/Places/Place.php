<?php


namespace App\TxdServices\Places;


class Place
{
    private string $name;

    private array $latlong;

    private array $images;

    private $translations;

    /**
     * Place constructor.
     * @param string $name
     * @param array $latlong
     * @param array $images
     */
    public function __construct(string $name, array $latlong = [], array $images = [])
    {
        $this->name = $name;
        $this->latlong = $latlong;
        $this->images = $images;
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
     * @return array
     */
    public function getLatlong(): array
    {
        return $this->latlong;
    }

    /**
     * @param array $latlong
     */
    public function setLatlong(array $latlong): void
    {
        $this->latlong = $latlong;
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

    /**
     * @return mixed
     */
    public function getTranslations()
    {
        return $this->translations;
    }

    /**
     * @param string $lang
     * @return Place
     */
    public function translate(string $lang): Place
    {
        return isset($this->translations[$lang]) ? $this->translations[$lang] : $this;
    }

    /**
     * @param PlaceTranslation[] $translations
     */
    public function setTranslations(array $translations): void
    {
        $this->translations = $translations;
    }

    public function addTranslation(PlaceTranslation $placeTranslation): bool
    {
        $this->translations[$placeTranslation->getLang()] = $placeTranslation;
    }


}
