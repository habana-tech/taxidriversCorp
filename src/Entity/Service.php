<?php

namespace App\Entity;

use App\Entity\Fields\ActiveFieldTrait;
use App\Entity\Fields\GalleryFieldInterface;
use App\Entity\Fields\GalleryFieldTrait;
use App\Entity\Fields\ImageFieldInterface;
use App\Entity\Fields\ImageFieldTrait;
use App\Entity\Fields\MachineNameInterface;
use App\Entity\Fields\MachineNameTrait;
use App\Entity\Fields\MetadataField;
use App\Entity\Fields\PriorityFieldTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Knp\DoctrineBehaviors\Contract\Entity\TranslatableInterface;
use Knp\DoctrineBehaviors\Model\Translatable\TranslatableTrait;


/**
 * @ORM\Entity(repositoryClass="App\Repository\ServiceRepository")
 * @Vich\Uploadable
 * @ORM\HasLifecycleCallbacks
 */
class Service implements ImageFieldInterface, GalleryFieldInterface, MachineNameInterface, TranslatableInterface
{
    use Fields\ImageFieldTrait;
    use ActiveFieldTrait;
    use MetadataField;
    use ImageFieldTrait;
    use GalleryFieldTrait;
    use PriorityFieldTrait;
    use MachineNameTrait;
    use TranslatableTrait;


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
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

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
        if (!$this->intermediatePlaces->contains($intermediatePlaces)) {
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
        if ($this->intermediatePlaces->contains($intermediatePlaces)) {
            $this->intermediatePlaces->removeElement($intermediatePlaces);
        }

        return $this;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return $this->machineName ?? 'empty';
    }


    /**
     * @return string|null
     */
    public function getNameFieldValue(): ?string
    {
        return $this->name;
    }

}