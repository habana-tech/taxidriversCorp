import mapboxgl from 'mapbox-gl';
mapboxgl.accessToken = 'pk.eyJ1IjoiY2FydG1hbnVzZXIiLCJhIjoiY2p5aHVyNHB2MDNudzNnbnJiaGVtcWJ2OCJ9.2UPDKnSZRNwNR1ITlZQEAA';

import MapBoxFactory from "./MapBoxFactory";
let mapElement = document.querySelector('div#map');
let latLongInputs = document.querySelectorAll('div.longLat .lngLat_input');
let lngLatReferencePlaceInputs = document.querySelectorAll('.lngLat_referencePlace_input');

new MapBoxFactory(mapElement, latLongInputs, lngLatReferencePlaceInputs );