<?php


namespace App\DataDefinitions\Translations;

use Doctrine\Common\Collections\Collection;

interface TranslatedEntityInterface
{
    public function getTranslatedObj(): TranslatedEntityInterface;

    public function getTranslationList(): Collection;

    public function getCurrentLang(): string;

    public function getTranslatedProperties(): array;
}
