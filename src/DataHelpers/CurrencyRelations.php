<?php
/**
 * Created by PhpStorm.
 * User: rd01
 * Date: 10/10/2019
 * Time: 17:40
 */

namespace App\DataHelpers;


class CurrencyRelations
{
    public $currencies = [
        'USD' => 1.0, //referencia....
        'CUC' => 0.9, //valor USD/CUC
        'EUR' => 0.89 //valor USD/EUR
    ];

    public $currency;

    public function __construct($currency = null)
    {
        $allowedCurrencies = array_keys($this->currencies);

        if($currency and in_array($currency, $allowedCurrencies))
        {
            $this->currency = $currency;
            return true;
        }
        return false;
    }

    public function getRelativeValue($value):float
    {
        return $value * $this->currencies[$this->currency];
    }
}