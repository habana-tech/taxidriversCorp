import mapboxgl from 'mapbox-gl';
mapboxgl.accessToken = 'pk.eyJ1IjoiY2FydG1hbnVzZXIiLCJhIjoiY2p5aHVyNHB2MDNudzNnbnJiaGVtcWJ2OCJ9.2UPDKnSZRNwNR1ITlZQEAA';


class MapBoxFactory
{
    constructor(
        mapContainer = 'div#map',
        targetElementLngLat = [],
        targetElementReferencePlace = [],
        markersCount = 1,
        autoCenter = false,
        zoom = 14,
        mapboxStyle = 'mapbox://styles/mapbox/streets-v9',
        markerClassName    = 'fa fa-2x fa-map-marker'
    ) {
        this._mapContainerStr = mapContainer.id;
        this._autoCenter      = autoCenter;
        this._targetElementLngLat = targetElementLngLat;
        this._targetElementReferencePlace = targetElementReferencePlace;
        this.markerReferencesArray   = [];
        this.markerArray = [];
        this.config      = {
            maxCoords: markersCount,
            zoom: zoom,
            mapboxStyle: mapboxStyle,
            // Center map at Vedado, habana.
            center: [-82.38813384427587, 23.136086407639212],
            // Class for the HTML marker element icon and styles.
            markerClassName: 'marker ' + markerClassName,
        };

        this.init();
        this.events();

    }

    events()
    {
        this.storyMap.on(
            'click',
            function (e) {
                this.addMarkerToMap(e.target,e.lngLat)
            }.bind(this)
        );
    }

    init()
    {
        if (this._autoCenter && "geolocation" in navigator) {
            let center = this.config.center;
            navigator.geolocation.getCurrentPosition(
                function (pos) {
                    center = [pos.coords.longitude,pos.coords.latitude];
                }
            );
            this.config.center = center;
        }

        this.storyMap = new mapboxgl.Map(
            {
                "container": this._mapContainerStr,
                "style": this.config.mapboxStyle,
                "center": this.config.center,
                "zoom": this.config.zoom,
            }
        );

    }

    addMarkerToMap(e, lngLat){
        try {
            let $tmpLat, $tmpLng;
            // Create a HTML element for each feature.
            let el       = document.createElement('i');
            el.className = this.config.markerClassName;

            el.setAttribute('data-lat',lngLat.lat);
            el.setAttribute('data-lng',lngLat.lng);

            let point     = new mapboxgl.Marker({element: el, anchor: 'center'});
            let index     = 0;
            let addMarker = true;

            // Todo: add check for number of markers.
            if (this.config.maxCoords === 1 && this.markerArray.length > 0) {
                this.markerArray[0].remove();
                this.markerArray = [point];
            } else {
                if (this.markerArray.length < this.config.maxCoords) {
                    index = this.markerArray.length;
                    this.markerArray.push(point);
                } else {
                    alert('max coords entered');
                    addMarker = false;
                }
            }

            if (addMarker) {
                point.setLngLat(lngLat).addTo(this.storyMap);
                this.reverseGeoCode(lngLat);
            }

            this.updateInputs();

        } catch (error) {
            console.log(error);
        }//end try
    }


    reverseGeoCode(lngLat)
    {
        let token = mapboxgl.accessToken;
        let url   = 'https://api.mapbox.com/geocoding/v5/mapbox.places/' + lngLat.lng + '%2C' + lngLat.lat + '.json?access_token=' + token + '&cachebuster=1583009795781&autocomplete=false&country=cu&types=address%2Cpoi%2Cplace%2Clocality&limit=1&language=es%2Cen';

        let oReq = new XMLHttpRequest();
        oReq.addEventListener("load", this.reqListener.bind(this));
        oReq.open("GET", url);
        oReq.send();

    }

    /**
     * Load the reference place details from mapBox
     * @param XMLHttpRequestEvent
     */
    reqListener (e) {

        let data = JSON.parse(e.target.responseText);

        if (typeof data == 'object')
        {
            let places = data.features;

            if (places.length > 0) {
                let indexMarker = (this.markerArray.length - 1);
                this.markerReferencesArray[indexMarker] = places[0].place_name;
                this._targetElementReferencePlace[indexMarker].value = this.markerReferencesArray[indexMarker];
            }
        }

    }

    updateInputs()
    {
        this._targetElementLngLat.forEach(
            function (item, index) {
                item.value = JSON.stringify(this.markerArray[index]._lngLat.toArray());
            }.bind(this)
        );

    }


}
export default MapBoxFactory;



