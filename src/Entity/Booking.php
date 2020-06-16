<?php

namespace App\Entity;

use HabanaTech\BusinessModel\ORM\Fields\Timestampable;
use HabanaTech\BusinessModel\ORM\Traits\UniqueIdPropertyTrait;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BookingRepository")
 */
class Booking
{
    use UniqueIdPropertyTrait;
    use Timestampable;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $price;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Client", inversedBy="bookings", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $client;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Place")
     * @ORM\JoinColumn(nullable=false)
     */
    private $origin;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Place")
     * @ORM\JoinColumn(nullable=false)
     */
    private $destination;

    /**
     * @ORM\Column(type="date")
     */
    private $travelDate;

    /**
     * @ORM\Column(type="time")
     */
    private $travelTime;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $comment;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $currency;

    /**
     * @ORM\Column(type="json", nullable=true)
     */
    private $campaign = [];

    /**
     * @ORM\Column(type="integer")
     */
    private $passenger;


    public function __construct()
    {
        $this->setUniqueId('txd-b');
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getClient(): ?Client
    {
        return $this->client;
    }

    public function setClient(?Client $client): self
    {
        $this->client = $client;

        return $this;
    }

    public function getOrigin(): ?Place
    {
        return $this->origin;
    }

    public function setOrigin(?Place $origin): self
    {
        $this->origin = $origin;

        return $this;
    }

    public function getDestination(): ?Place
    {
        return $this->destination;
    }

    public function setDestination(?Place $destination): self
    {
        $this->destination = $destination;

        return $this;
    }

    public function getTravelDate(): ?\DateTimeInterface
    {
        return $this->travelDate;
    }

    public function setTravelDate(\DateTimeInterface $travelDate): self
    {
        $this->travelDate = $travelDate;

        return $this;
    }

    public function getTravelTime(): ?\DateTimeInterface
    {
        return $this->travelTime;
    }

    public function setTravelTime(\DateTimeInterface $travelTime): self
    {
        $this->travelTime = $travelTime;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getCampaign(): ?array
    {
        return $this->campaign;
    }

    public function setCampaign(?array $campaign): self
    {
        $this->campaign = $campaign;

        return $this;
    }

    public function __toString()
    {
        $id = $this->id;
        $date = $this->travelDate->format('d/m/Y');
        $origin = $this->origin->getName();
        $destination = $this->destination->getName();
        return "($date) $origin -> $destination";
    }

    public function getPassenger(): ?int
    {
        return $this->passenger;
    }

    public function setPassenger(int $passenger): self
    {
        $this->passenger = $passenger;

        return $this;
    }

    public function setNewClient(Client $client)
    {
        if ($this->client === null){
            $this->client = $client;
        }
    }

    public function getNewClient()
    {
        return null;
    }

}
