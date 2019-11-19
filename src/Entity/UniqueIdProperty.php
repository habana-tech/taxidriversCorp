<?php
/**
 * Created by PhpStorm.
 * User: jo
 * Date: 11/19/2019
 * Time: 10:33 AM
 */

namespace App\Entity;


trait UniqueIdProperty {

    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    protected $uniqueId;

    /**
     * @return mixed
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }

    /**
     * @param mixed $uniqueId
     */
    public function setUniqueId(string $prefix = 'txd')
    {
        $this->uniqueId = uniqid($prefix);
    }


}