<?php


namespace App\TxdServices;


use App\TxdServices\Places\Place;

class ServicesCollection
{

    public array $airports = [];
    public array $experiences = [];
    public array $taxis = [];
    public array $places = [];

    /**
     * ServicesCollection constructor.
     */
    public function __construct()
    {
        $this->places['varadero'] = new Place('Varadero');
        $this->places['havana'] = new Place('Havana');

        $this->airports = [
            new TxdService(
                'From Juan Gualberto Gómez airport, Varadero',
                $this->places['varadero'],
                null,
                110,
                50
            ),
            new TxdService(
                'From the José Martí airport, Havana',
                $this->places['havana'],
                null,
                43,
                12
            ),
        ];
    }
}
