<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model as ORMBehaviors;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TaxiServiceRepository")
 * @Vich\Uploadable
 */
class TaxiService
{
    use ORMBehaviors\Translatable\Translatable,
        ImageFieldTrait;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $category;

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
    private $intermedialPlaces;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $internalName;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $active;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\GalleryImage", mappedBy="taxiService")
     */
    private $gallery;


    public function __construct()
    {
        $this->intermedialPlaces = new ArrayCollection();
//        $this->gallery = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

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

    /**
     * @return Collection|Place[]
     */
    public function getIntermedialPlaces(): Collection
    {
        return $this->intermedialPlaces;
    }

    public function addIntermedialPlace(Place $intermedialPlace): self
    {
        if (!$this->intermedialPlaces->contains($intermedialPlace)) {
            $this->intermedialPlaces[] = $intermedialPlace;
        }

        return $this;
    }

    public function removeIntermedialPlace(Place $intermedialPlace): self
    {
        if ($this->intermedialPlaces->contains($intermedialPlace)) {
            $this->intermedialPlaces->removeElement($intermedialPlace);
        }

        return $this;
    }

    public function __toString()
    {
        return $this->internalName;
    }

    public function getInternalName(): ?string
    {
        return $this->internalName;
    }

    public function setInternalName(string $internalName): self
    {
        $this->internalName = $internalName;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(?bool $active): self
    {
        $this->active = $active;

        return $this;
    }
//
//    /**
//     * @return Collection|GalleryImage[]
//     */
//    public function getGallery(): Collection
//    {
//        return $this->gallery;
//    }
//
//    public function addGallery(GalleryImage $gallery): self
//    {
//        if (!$this->gallery->contains($gallery)) {
//            $this->gallery[] = $gallery;
//            $gallery->setTaxiService($this);
//        }
//
//        return $this;
//    }
//
//    public function removeGallery(GalleryImage $gallery): self
//    {
//        if ($this->gallery->contains($gallery)) {
//            $this->gallery->removeElement($gallery);
//            // set the owning side to null (unless already changed)
//            if ($gallery->getTaxiService() === $this) {
//                $gallery->setTaxiService(null);
//            }
//        }
//
//        return $this;
//    }

}
