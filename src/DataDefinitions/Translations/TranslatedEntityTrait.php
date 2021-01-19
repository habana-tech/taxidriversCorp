<?php


namespace App\DataDefinitions\Translations;

use Doctrine\ORM\Mapping as ORM;

trait TranslatedEntityTrait
{

    private string $currentLang;
}
