<?php

namespace App\Entity;

use App\DataDefinitions\Translations\TranslatedEntityInterface;
use App\DataDefinitions\Translations\TranslatedEntityTrait;
use App\ORM\Fields\ActiveFieldTrait;
use App\ORM\Fields\MachineNameTrait;
use App\ORM\Fields\MetadataTrait;
use App\ORM\Fields\PriorityTrait;
use App\ORM\Interfaces\MachineNameInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ServiceRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Service implements MachineNameInterface, TranslatedEntityInterface
{
    use ActiveFieldTrait;
    use MetadataTrait;
    use PriorityTrait;
    use MachineNameTrait;
    use TranslatedEntityTrait;


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

    /**
     * @ORM\ManyToOne(targetEntity=Service::class, inversedBy="translations")
     */
    private $translatedEntity;

    /**
     * @ORM\OneToMany(targetEntity=Service::class, mappedBy="translatedEntity")
     */
    private $translations;

    /**
     * @ORM\ManyToMany(targetEntity=Image::class)
     */
    private $images;

    /**
     * @ORM\Column(type="text", nullable=true)
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


    /**
     * TaxiService constructor.
     */
    public function __construct()
    {
        $this->gallery            = new ArrayCollection();
        $this->intermediatePlaces = new ArrayCollection();
        $this->translations = new ArrayCollection();
        $this->images = new ArrayCollection();

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

    public function getTranslatedObj(): TranslatedEntityInterface
    {
        return $this->translatedEntity;
    }

    public function getTranslationList(): Collection
    {
        return $this->translations;
    }

    public function getCurrentLang(): string
    {
        return $this->currentLang;
    }

    public function getTranslatedProperties(): array
    {
        return ['name', 'description'];
    }

    public function getTranslatedEntity(): ?self
    {
        return $this->translatedEntity;
    }

    public function setTranslatedEntity(?self $translatedEntity): self
    {
        $this->translatedEntity = $translatedEntity;

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getTranslations(): Collection
    {
        return $this->translations;
    }

    public function addTranslation(self $translation): self
    {
        if (!$this->translations->contains($translation)) {
            $this->translations[] = $translation;
            $translation->setTranslatedEntity($this);
        }

        return $this;
    }

    public function removeTranslation(self $translation): self
    {
        if ($this->translations->removeElement($translation)) {
            // set the owning side to null (unless already changed)
            if ($translation->getTranslatedEntity() === $this) {
                $translation->setTranslatedEntity(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Image[]
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(Image $image): self
    {
        if (!$this->images->contains($image)) {
            $this->images[] = $image;
        }

        return $this;
    }

    public function removeImage(Image $image): self
    {
        $this->images->removeElement($image);

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
