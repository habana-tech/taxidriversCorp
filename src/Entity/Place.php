<?php

namespace App\Entity;

use App\DataDefinitions\Translations\TranslatedEntityInterface;
use App\DataDefinitions\Translations\TranslatedEntityTrait;
use App\ORM\Fields\MetadataTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PlaceRepository")
 */
class Place implements TranslatedEntityInterface
{
    use MetadataTrait;
    use TranslatedEntityTrait;
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private ?int $id;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private ?string $name;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private ?string $address;

    /**
     * @ORM\ManyToOne(targetEntity=Place::class, inversedBy="translations")
     */
    private ?Place $translatedEntity;

    /**
     * @ORM\OneToMany(targetEntity=Place::class, mappedBy="translatedEntity")
     */
    private ArrayCollection $translations;

    /**
     * @ORM\ManyToMany(targetEntity=Image::class)
     */
    private ArrayCollection $images;


    public function __construct()
    {
        $this->translations = new ArrayCollection();
        $this->images = new ArrayCollection();
    }

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
        return $this->getName()?? '';
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

    public function getTranslatedObj(): TranslatedEntityInterface
    {
        return $this->getTranslatedEntity();
    }

    public function getTranslationList(): Collection
    {
        return $this->getTranslations();
    }

    public function getCurrentLang(): string
    {
        return $this->currentLang;
    }

    public function getTranslatedProperties(): array
    {
        return ['name', 'address'];
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

}
