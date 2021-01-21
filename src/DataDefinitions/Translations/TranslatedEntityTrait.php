<?php


namespace App\DataDefinitions\Translations;

use Doctrine\ORM\Mapping as ORM;

trait TranslatedEntityTrait
{

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private string $currentLang;

    /**
     * @return string
     */
    public function getCurrentLang(): string
    {
        return $this->currentLang;
    }

    /**
     * @param string $currentLang
     */
    public function setCurrentLang(string $currentLang): void
    {
        $this->currentLang = $currentLang;
    }



    public function isMainLanguage():bool
    {
        return $this->translatedEntity === null;
    }
}
