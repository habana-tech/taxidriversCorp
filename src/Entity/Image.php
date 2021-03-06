<?php

namespace App\Entity;

use HabanaTech\BusinessModel\Services\ImageBase64ThumbCreator;
use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;
use HabanaTech\BusinessModel\ORM\Fields\Timestampable;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ImageRepository")
 * @Vich\Uploadable()
 */
class Image
{
    use Timestampable;
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
    * @Vich\UploadableField(mapping="images", fileNameProperty="imageName", size="imageSize")
    */
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=180, nullable=true)
     */
    private $imageName;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $imageSize;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $base64;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImagePath(): string
    {
        return 'uploads/images/'.$this->getImageName();
    }

    /**
     * @return string
     */
    public function getStaticImagePath(): string
    {
        return $this->getImagePath();
    }

    public function getImageName(): ?string
    {
        return $this->imageName ?? 'no-image';
    }

    public function setImageName(string $imageName = null): self
    {
        $this->imageName = $imageName;

        return $this;
    }

    public function getImageSize(): ?int
    {
        return $this->imageSize;
    }

    public function setImageSize(int $imageSize = null): self
    {
        $this->imageSize = $imageSize;

        return $this;
    }

    /**
     * @return File
     */
    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }


    /**
     * @param File|null $file
     * @return $this
     * @throws \Exception
     */
    public function setImageFile(?File $file = null): self
    {
        $this->imageFile = $file;
        if ($file !== null) {
            $base64Converter = new ImageBase64ThumbCreator($file->getRealPath());
            $this->setBase64($base64Converter->getBase64data());
            $this->updatedAt = new DateTimeImmutable();
            if (!$this->description && $file->getFilename()) {
                $this->description = substr(basename($file->getClientOriginalName()), 0, -4);
            }
        }
        return $this;
    }

    public function __toString()
    {
        return $this->description ?? $this->getImageName();
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

    public function getBase64(): ?string
    {
        return $this->base64;
    }

    public function setBase64(?string $base64): self
    {
        $this->base64 = $base64;

        return $this;
    }


    /**
     * @Assert\Callback
     * @param ExecutionContextInterface $context
     */
    public function validate(ExecutionContextInterface $context)
    {
        if (! in_array($this->imageFile->getMimeType(), array(
            'image/jpeg',
            'image/gif',
            'image/png',
            'image/svg+xml',
            'image/svg',

        ))) {
            $context
                ->buildViolation('Wrong file type (jpg,gif,png,svg)')
                ->atPath('fileName')
                ->addViolation()
            ;
        }
    }
}
