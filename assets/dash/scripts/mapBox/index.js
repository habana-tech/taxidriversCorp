import mapboxgl from 'mapbox-gl';
mapboxgl.accessToken = 'pk.eyJ1IjoiY2FydG1hbnVzZXIiLCJhIjoiY2p5aHVyNHB2MDNudzNnbnJiaGVtcWJ2OCJ9.2UPDKnSZRNwNR1ITlZQEAA';

window.markerArray = [];

let config = {
  maxCoords: 1
};

$(function(){
    /*
   * init Map
   *
   * map needs to be stored as JS object in global space (no reference on the DOM element for the map)
   */
  var center = [-82.38813384427587, 23.136086407639212];
  if ("geolocation" in navigator) {
    navigator.geolocation.getCurrentPosition(function(pos){
      console.log('geoloacted center of map');
      center = [pos.coords.longitude,pos.coords.latitude];
    });
  }

  window.storyMap = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v9',
    center: center,
    zoom: 14
  });

  window.storyMap.on('click',function(e){ addMarkerToMap(e.target,e.lngLat) });
});

function addMarkerToMap(map,lngLat){
  try{
    var $tmpLat, $tmpLng;
    // create a HTML element for each feature
    var el = document.createElement('i');
    el.className = 'marker fa fa-2x fa-map-marker';
    el.setAttribute('data-lat',lngLat.lat);
    el.setAttribute('data-lng',lngLat.lng);
    var point = new mapboxgl.Marker({element: el, anchor: 'center'});

    var index = 0;
    var addMarker = true;
    // todo: add check for number of markers
    if(config.maxCoords === 1 && window.markerArray.length > 0){
      window.markerArray[0].remove();
      window.markerArray = [point];
    }
    else {
      if(window.markerArray.length < config.maxCoords){
        index = window.markerArray.length;
        window.markerArray.push(point);
      }
      else {
        alert('max coords entered');
        addMarker = false;
      }
    }

    if(addMarker){
      point.setLngLat(lngLat).addTo(map);

      $tmpLat = findInput('lat',index);
      $tmpLng = findInput('lng',index);

      if($tmpLat && $tmpLng){
        $tmpLng.val(lngLat.lng);
        $tmpLat.val(lngLat.lat);
        reverseGeoCode(lngLat,mapboxgl.accessToken);
      }
      else {
        throw "Form fields not found.";
      }
    }
  }
  catch(error){
    logErrors(error);
  }
}

function logErrors(error){
  console.error('Error: '+error.message+' - from '+error.fileName+'['+error.lineNumber+']');
}

function findInput(coord,index){
  var $fieldset = $('fieldset[name="coords"]');
  var $coord = $fieldset.find('input[name="'+coord+'['+index+']"]');
  if($coord.length > 0){
    console.log('found inputs for '+index);
    return $coord;
  }
  else {
    console.log('not found inputs for '+index);
    return addCoordsInput(coord,index);
  }
}


function addCoordsInput(coord,index){
  //TODO: set the coords to the input
  var $fieldset = $('fieldset[name="coords"]');
  var $lat = $('<input/>',{name: 'lat['+index+']', type: 'hidden'});
  var $lng = $('<input/>',{name: 'lng['+index+']', type: 'hidden'});
  if(coord === 'lat'){
    console.log('added lat '+index);
    $lat.appendTo($fieldset);
    return $lat;
  }
  else {
    console.log('added lng '+index);
    $lng.appendTo($fieldset);
    return $lng;
  }
}



function reverseGeoCode(lngLat,token){
  console.log('reverseGeoCode',lngLat);
  if(!token){
    token = mapboxgl.accessToken;
  }
  var url = 'https://api.mapbox.com/geocoding/v5/mapbox.places/'+lngLat.lng+'%2C'+lngLat.lat+'.json?access_token='+token+'&types=address';

  $.get(url,logLocation);
}

function logLocation(data){
  console.log('logLocation',data);
  var response = data;
  var places = data.features;

  if(places.length > 0){
    statusMessage(places[0].place_name);
  }
  console.log(data);
}

function statusMessage(message,type){
  console.log('statusMessage',message);
  var msgContainer = $('#statusmessages');
  if(!type){
    type = 'success';
  }

  var messageBox = $('<div></div>',{class: 'alert alert-'+type+' fade show'}).attr('id',Date.now());
  var title = $('<strong></strong>').text('Location: ').appendTo(messageBox);
  messageBox.text(message);

  messageBox.appendTo(msgContainer);

  window.setTimeout(function(){
    messageBox.alert('close');
  },8400);
}

/**
 * Created by jo on 11/19/2019.
 */
