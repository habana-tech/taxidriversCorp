(window.webpackJsonp=window.webpackJsonp||[]).push([["dashAppPlaceMap"],{XM1Q:function(e,t,n){"use strict";n.r(t);var r=n("4ZJM"),a=n.n(r);n("pNMO"),n("4Brf"),n("0oug"),n("QWBl"),n("4mDm"),n("wLYn"),n("eoL8"),n("07d7"),n("PKPk"),n("FZtP"),n("3bBZ");function o(e){return(o="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}function i(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function s(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}a.a.accessToken="pk.eyJ1IjoiY2FydG1hbnVzZXIiLCJhIjoiY2p5aHVyNHB2MDNudzNnbnJiaGVtcWJ2OCJ9.2UPDKnSZRNwNR1ITlZQEAA";var c=function(){function e(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"div#map",n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:[],r=arguments.length>2&&void 0!==arguments[2]?arguments[2]:[],a=arguments.length>3&&void 0!==arguments[3]?arguments[3]:1,o=arguments.length>4&&void 0!==arguments[4]&&arguments[4],s=arguments.length>5&&void 0!==arguments[5]?arguments[5]:14,c=arguments.length>6&&void 0!==arguments[6]?arguments[6]:"mapbox://styles/mapbox/streets-v9",l=arguments.length>7&&void 0!==arguments[7]?arguments[7]:"fa fa-2x fa-map-marker";i(this,e),this._mapContainerStr=t.id,this._autoCenter=o,this._targetElementLngLat=n,this._targetElementReferencePlace=r,this.markerReferencesArray=[],this.markerArray=[],this.config={maxCoords:a,zoom:s,mapboxStyle:c,center:[-82.38813384427587,23.136086407639212],markerClassName:"marker "+l},this.init(),this.events()}var t,n,r;return t=e,(n=[{key:"events",value:function(){this.storyMap.on("click",function(e){this.addMarkerToMap(e.target,e.lngLat)}.bind(this))}},{key:"init",value:function(){if(this._autoCenter&&"geolocation"in navigator){var e=this.config.center;navigator.geolocation.getCurrentPosition((function(t){e=[t.coords.longitude,t.coords.latitude]})),this.config.center=e}this.storyMap=new a.a.Map({container:this._mapContainerStr,style:this.config.mapboxStyle,center:this.config.center,zoom:this.config.zoom})}},{key:"addMarkerToMap",value:function(e,t){try{var n=document.createElement("i");n.className=this.config.markerClassName,n.setAttribute("data-lat",t.lat),n.setAttribute("data-lng",t.lng);var r=new a.a.Marker({element:n,anchor:"center"}),o=!0;1===this.config.maxCoords&&this.markerArray.length>0?(this.markerArray[0].remove(),this.markerArray=[r]):this.markerArray.length<this.config.maxCoords?(this.markerArray.length,this.markerArray.push(r)):(alert("max coords entered"),o=!1),o&&(r.setLngLat(t).addTo(this.storyMap),this.reverseGeoCode(t)),this.updateInputs()}catch(e){console.log(e)}}},{key:"reverseGeoCode",value:function(e){var t=a.a.accessToken,n="https://api.mapbox.com/geocoding/v5/mapbox.places/"+e.lng+"%2C"+e.lat+".json?access_token="+t+"&cachebuster=1583009795781&autocomplete=false&country=cu&types=address%2Cpoi%2Cplace%2Clocality&limit=1&language=es%2Cen",r=new XMLHttpRequest;r.addEventListener("load",this.reqListener.bind(this)),r.open("GET",n),r.send()}},{key:"reqListener",value:function(e){var t=JSON.parse(e.target.responseText);if("object"==o(t)){var n=t.features;if(n.length>0){var r=this.markerArray.length-1;this.markerReferencesArray[r]=n[0].place_name,this._targetElementReferencePlace[r].value=this.markerReferencesArray[r]}}}},{key:"updateInputs",value:function(){this._targetElementLngLat.forEach(function(e,t){e.value=JSON.stringify(this.markerArray[t]._lngLat.toArray())}.bind(this))}}])&&s(t.prototype,n),r&&s(t,r),e}();a.a.accessToken="pk.eyJ1IjoiY2FydG1hbnVzZXIiLCJhIjoiY2p5aHVyNHB2MDNudzNnbnJiaGVtcWJ2OCJ9.2UPDKnSZRNwNR1ITlZQEAA",new c(document.querySelector("div#map"),document.querySelectorAll("div.longLat .lngLat_input"),document.querySelectorAll(".lngLat_referencePlace_input"))}},[["XM1Q","runtime",0,3]]]);