<?php


namespace App\DataHelpers;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ImageBase64ThumbCreator extends AbstractController
{
    private $base64data;


    /**
     * ImageBase64ThumbCreator constructor.
     *
     * @param string $path         The relative path to image
     * @param bool   $absolutePath In case the path provided is absolute
     */
    public function __construct(string $path='folder', $absolutePath=false)
    {
        if ($absolutePath === true) {
            $path = __DIR__.'/../../public/'.$path;
        }

        if (file_exists($path) === true) {
            if (($image = @imagecreatefromjpeg($path)) || ($image = @imagecreatefrompng($path))) {
                $width  = imagesx($image) ?? 1;
                $height = imagesy($image) ?? 1;

                $originalAspect = $height / $width;

                $thumbWidth  = 15; //px
                $thumbHeight = $originalAspect * $thumbWidth;

                $thumb = imagecreatetruecolor($thumbWidth, $thumbHeight);

                imagecopyresampled(
                    $thumb,
                    $image,
                    0,
                    0,
                    0,
                    0,
                    $thumbWidth,
                    $thumbHeight,
                    $width,
                    $height
                );

                imageinterlace($thumb, true);
                ob_start();

                imagejpeg($thumb);
                $imageData = ob_get_clean();

                $this->base64data = 'data:image/jpeg;base64,'.base64_encode($imageData);
            }//end if
        }//end if

    }//end __construct()


    /**
     * @return string
     */
    public function getBase64data(): ?string
    {
        return $this->base64data;
    }
}
