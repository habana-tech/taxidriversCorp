<?php

namespace App\Entity;

use HabanaTech\BusinessModel\ORM\Traits\ActiveFieldTrait;
use HabanaTech\BusinessModel\ORM\Interfaces\GalleryFieldInterface;
use HabanaTech\BusinessModel\ORM\Traits\GalleryFieldTrait;
use HabanaTech\BusinessModel\ORM\Interfaces\ImageFieldInterface;
use HabanaTech\BusinessModel\ORM\Traits\ImageFieldTrait;
use HabanaTech\BusinessModel\ORM\Interfaces\MachineNameInterface;
use HabanaTech\BusinessModel\ORM\Traits\MachineNameTrait;
use HabanaTech\BusinessModel\ORM\Traits\PriorityFieldTrait;
use HabanaTech\BusinessModel\ORM\Interfaces\TranslatableInterface;
use HabanaTech\BusinessModel\ORM\Traits\TranslationTrait;
use HabanaTech\BusinessModel\ORM\Traits\MetadataFieldTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


/**
 * @ORM\Entity(repositoryClass="App\Repository\ServiceRepository")
 * @Vich\Uploadable
 * @ORM\HasLifecycleCallbacks
 */
class Service implements ImageFieldInterface, GalleryFieldInterface, MachineNameInterface, TranslatableInterface
{
    use ImageFieldTrait;
    use ActiveFieldTrait;
    use MetadataFieldTrait;
    use GalleryFieldTrait;
    use PriorityFieldTrait;
    use MachineNameTrait;
    use TranslationTrait;


    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

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
     * @ORM\ManyToMany(targetEntity="App\Entity\Place")
     */
    private $intermediatePlaces;


    /**
     * @ORM\Column(type="string", length=200)
     */
    private $name;


    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }


    /**
     * TaxiService constructor.
     */
    public function __construct()
    {
        $this->gallery            = new ArrayCollection();
        $this->intermediatePlaces = new ArrayCollection();

    }//end __construct()


    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Place|null
     */
    public function getOrigin(): ?Place
    {
        return $this->origin;
    }


    /**
     * @param Place|null $origin
     * @return $this
     */
    public function setOrigin(?Place $origin): self
    {
        $this->origin = $origin;

        return $this;
    }


    /**
     * @return Place|null
     */
    public function getDestination(): ?Place
    {
        return $this->destination;
    }

    /**
     * @param Place|null $destination
     * @return $this
     */
    public function setDestination(?Place $destination): self
    {
        $this->destination = $destination;

        return $this;
    }


    /**
     * @return Collection|Place[]
     */
    public function getIntermediatePlaces(): Collection
    {
        return $this->intermediatePlaces;
    }


    /**
     * @param Place $intermediatePlaces
     * @return $this
     */
    public function addIntermediatePlace(Place $intermediatePlaces): self
    {
        if ($this->intermediatePlaces->contains($intermediatePlaces) === false) {
            $this->intermediatePlaces[] = $intermediatePlaces;
        }

        return $this;
    }


    /**
     * @param  Place $intermediatePlaces
     * @return $this
     */
    public function removeIntermediatePlace(Place $intermediatePlaces): self
    {
        if ($this->intermediatePlaces->contains($intermediatePlaces) === true) {
            $this->intermediatePlaces->removeElement($intermediatePlaces);
        }

        return $this;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return ($this->machineName ?? 'empty');
    }


    /**
     * @return string|null
     */
    public function getNameFieldValue(): ?string
    {
        return $this->name;
    }

}
