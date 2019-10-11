<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PlaceRepository")
 */
class Place
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="boolean")
     */
    private $official;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @ORM\Column(type="json", nullable=true)
     */
    private $mapPoint = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function __toString()
    {
        return $this->getName();
    }

    public function isOfficial(): ?bool
    {
        return $this->official;
    }

    public function setOfficial(bool $official): self
    {
        $this->official = $official;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getMapPoint(): ?array
    {
        return $this->mapPoint;
    }

    public function setMapPoint(?array $mapPoint): self
    {
        $this->mapPoint = $mapPoint;

        return $this;
    }


    public function getMapPointString(): ?string
    {
        return json_encode($this->mapPoint);
    }

    public function setMapPointString(?string $mapPoint): self
    {
        $this->mapPoint = json_decode($mapPoint);

        return $this;
    }

}
