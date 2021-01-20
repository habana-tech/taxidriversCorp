<?php

namespace App\Entity;

use App\Services\ImageBase64ThumbCreator;
use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;
use App\ORM\Fields\TimestampableTrait;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ImageRepository")
 */
class Image
{
    use TimestampableTrait;

    public const UPLOAD_DIR = 'public/uploads/img/';
    public const BASE_PATH = 'uploads/img/';
    public const UPLOADED_FILE_NAME_PATTERN = '[slug]-[contenthash].[extension]';
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=180, nullable=true)
     */
    private ?string $filename;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private ?int $imageSize;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private ?string $description;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private ?string $base64;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getFilename(): ?string
    {
        return $this->filename;
    }

    /**
     * @param string|null $filename
     */
    public function setFilename(?string $filename): void
    {
        $this->filename = $filename;
    }


    public function getImagePath(): string
    {
        return 'uploads/images/'.$this->getFilename();
    }


//
//    /**
//     * @param File|null $file
//     * @return $this
//     * @throws \Exception
//     */
//    public function setImageFile(?File $file = null): self
//    {
//        $this->imageFile = $file;
//        if ($file !== null) {
//            $base64Converter = new ImageBase64ThumbCreator($file->getRealPath());
//            $this->setBase64($base64Converter->getBase64data());
//            $this->updatedAt = new DateTimeImmutable();
//            if (!$this->description && $file->getFilename() && $file instanceof UploadedFile) {
//                $this->description = substr(basename($file->getClientOriginalName()), 0, -4);
//            }
//        }
//        return $this;
//    }

    public function __toString()
    {
        return $this->description ?? $this->getImagePath();
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
        //TODO: setup the base64 initialization
        $this->base64 = $base64;

        return $this;
    }


//    /**
//     * @Assert\Callback
//     * @param ExecutionContextInterface $context
//     */
//    public function validate(ExecutionContextInterface $context)
//    {
//        if (! in_array($this->imageFile->getMimeType(), array(
//            'image/jpeg',
//            'image/gif',
//            'image/png',
//            'image/svg+xml',
//            'image/svg',
//
//        ))) {
//            $context
//                ->buildViolation('Wrong file type (jpg,gif,png,svg)')
//                ->atPath('fileName')
//                ->addViolation()
//            ;
//        }
//    }


}
