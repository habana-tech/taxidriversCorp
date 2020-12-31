<?php

namespace App\Entity;

use HabanaTech\BusinessModel\ORM\Fields\Timestampable;
use HabanaTech\BusinessModel\ORM\Traits\UniqueIdPropertyTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use HabanaTech\BusinessModel\Services\CountryTelephoneNumber;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClientRepository")
 */
class Client
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
     * @ORM\Column(type="string", length=200, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $country;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Booking", mappedBy="client", orphanRemoval=true)
     */
    private $bookings;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $locale;

    public function __construct($email = null, $name = null, $locale = null)
    {
        $this->bookings = new ArrayCollection();
        $this->setUniqueId('txd-c');

        if ($locale !== null) {
            $this->locale = $locale;
        } elseif (isset($_SESSION['_locale']) === true) {
            $this->locale = $_SESSION['_locale'];
        } else {
            $this->locale = 'en';
        }
        $this->name  = $name;
        $this->email = $email;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
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

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;
        $this->setCountryByTelephone();
        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country): void
    {
        if ($country) {
            $this->country = $country;
        } else {
            $this->setCountryByTelephone();
        }
    }


    /**
     * @return Collection|booking[]
     */
    public function getBookings(): Collection
    {
        return $this->bookings;
    }

    public function addBooking(booking $booking): self
    {
        if (!$this->bookings->contains($booking)) {
            $this->bookings[] = $booking;
            $booking->setClient($this);
        }

        return $this;
    }

    public function removeBooking(booking $booking): self
    {
        if ($this->bookings->contains($booking)) {
            $this->bookings->removeElement($booking);
            // Set the owning side to null (unless already changed)
            if ($booking->getClient() === $this) {
                $booking->setClient(null);
            }
        }

        return $this;
    }

    protected function setCountryByTelephone()
    {
        $country = new CountryTelephoneNumber($this->telephone);
        $this->country = $country->getCountryName();
    }
    public function __toString()
    {
        // TODO: Implement __toString() method.
        $tmp = $this->getName() . " (". $this->getEmail() .")";
        if ($this->getCountry()) {
            $tmp.= " [".$this->getCountry()."]";
        }
        return $tmp;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setLocale(?string $locale): self
    {
        $this->locale = $locale;

        return $this;
    }

    public function getSessionLang()
    {
        return $this->getLocale();
    }

    public static function createFromArray(array $data)
    {
        if (isset($data['name']) === false) {
            return false;
        }

        if (isset($data['email']) === false) {
            return false;
        }

        return (new Client($data['name'], $data['email']));
    }
}
