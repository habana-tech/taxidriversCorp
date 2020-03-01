(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["dash_placemap"],{

/***/ "./assets/dash/scripts/mapBox/MapBoxFactory.js":
/*!*****************************************************!*\
  !*** ./assets/dash/scripts/mapBox/MapBoxFactory.js ***!
  \*****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.symbol */ "./node_modules/core-js/modules/es.symbol.js");
/* harmony import */ var core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.symbol.description */ "./node_modules/core-js/modules/es.symbol.description.js");
/* harmony import */ var core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_description__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.symbol.iterator */ "./node_modules/core-js/modules/es.symbol.iterator.js");
/* harmony import */ var core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_symbol_iterator__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_array_for_each__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.array.for-each */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.array.iterator */ "./node_modules/core-js/modules/es.array.iterator.js");
/* harmony import */ var core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_iterator__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_function_bind__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.function.bind */ "./node_modules/core-js/modules/es.function.bind.js");
/* harmony import */ var core_js_modules_es_function_bind__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_function_bind__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! core-js/modules/es.object.define-property */ "./node_modules/core-js/modules/es.object.define-property.js");
/* harmony import */ var core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_6___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_define_property__WEBPACK_IMPORTED_MODULE_6__);
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! core-js/modules/es.object.to-string */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! core-js/modules/es.string.iterator */ "./node_modules/core-js/modules/es.string.iterator.js");
/* harmony import */ var core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_iterator__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each__WEBPACK_IMPORTED_MODULE_9__);
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! core-js/modules/web.dom-collections.iterator */ "./node_modules/core-js/modules/web.dom-collections.iterator.js");
/* harmony import */ var core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_iterator__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var mapbox_gl__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! mapbox-gl */ "./node_modules/mapbox-gl/dist/mapbox-gl.js");
/* harmony import */ var mapbox_gl__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(mapbox_gl__WEBPACK_IMPORTED_MODULE_11__);












function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }


mapbox_gl__WEBPACK_IMPORTED_MODULE_11___default.a.accessToken = 'pk.eyJ1IjoiY2FydG1hbnVzZXIiLCJhIjoiY2p5aHVyNHB2MDNudzNnbnJiaGVtcWJ2OCJ9.2UPDKnSZRNwNR1ITlZQEAA';

var MapBoxFactory =
/*#__PURE__*/
function () {
  function MapBoxFactory() {
    var mapContainer = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 'div#map';
    var targetElementLngLat = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : [];
    var targetElementReferencePlace = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : [];
    var markersCount = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : 1;
    var autoCenter = arguments.length > 4 && arguments[4] !== undefined ? arguments[4] : false;
    var zoom = arguments.length > 5 && arguments[5] !== undefined ? arguments[5] : 14;
    var mapboxStyle = arguments.length > 6 && arguments[6] !== undefined ? arguments[6] : 'mapbox://styles/mapbox/streets-v9';
    var markerClassName = arguments.length > 7 && arguments[7] !== undefined ? arguments[7] : 'fa fa-2x fa-map-marker';

    _classCallCheck(this, MapBoxFactory);

    this._mapContainerStr = mapContainer.id;
    this._autoCenter = autoCenter;
    this._targetElementLngLat = targetElementLngLat;
    this._targetElementReferencePlace = targetElementReferencePlace;
    this.markerReferencesArray = [];
    this.markerArray = [];
    this.config = {
      maxCoords: markersCount,
      zoom: zoom,
      mapboxStyle: mapboxStyle,
      // Center map at Vedado, habana.
      center: [-82.38813384427587, 23.136086407639212],
      // Class for the HTML marker element icon and styles.
      markerClassName: 'marker ' + markerClassName
    };
    this.init();
    this.events();
  }

  _createClass(MapBoxFactory, [{
    key: "events",
    value: function events() {
      this.storyMap.on('click', function (e) {
        this.addMarkerToMap(e.target, e.lngLat);
      }.bind(this));
    }
  }, {
    key: "init",
    value: function init() {
      if (this._autoCenter && "geolocation" in navigator) {
        var center = this.config.center;
        navigator.geolocation.getCurrentPosition(function (pos) {
          center = [pos.coords.longitude, pos.coords.latitude];
        });
        this.config.center = center;
      }

      this.storyMap = new mapbox_gl__WEBPACK_IMPORTED_MODULE_11___default.a.Map({
        "container": this._mapContainerStr,
        "style": this.config.mapboxStyle,
        "center": this.config.center,
        "zoom": this.config.zoom
      });
    }
  }, {
    key: "addMarkerToMap",
    value: function addMarkerToMap(e, lngLat) {
      try {
        var $tmpLat, $tmpLng; // Create a HTML element for each feature.

        var el = document.createElement('i');
        el.className = this.config.markerClassName;
        el.setAttribute('data-lat', lngLat.lat);
        el.setAttribute('data-lng', lngLat.lng);
        var point = new mapbox_gl__WEBPACK_IMPORTED_MODULE_11___default.a.Marker({
          element: el,
          anchor: 'center'
        });
        var index = 0;
        var addMarker = true; // Todo: add check for number of markers.

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
      } //end try

    }
  }, {
    key: "reverseGeoCode",
    value: function reverseGeoCode(lngLat) {
      var token = mapbox_gl__WEBPACK_IMPORTED_MODULE_11___default.a.accessToken;
      var url = 'https://api.mapbox.com/geocoding/v5/mapbox.places/' + lngLat.lng + '%2C' + lngLat.lat + '.json?access_token=' + token + '&cachebuster=1583009795781&autocomplete=false&country=cu&types=address%2Cpoi%2Cplace%2Clocality&limit=1&language=es%2Cen';
      var oReq = new XMLHttpRequest();
      oReq.addEventListener("load", this.reqListener.bind(this));
      oReq.open("GET", url);
      oReq.send();
    }
    /**
     * Load the reference place details from mapBox
     * @param XMLHttpRequestEvent
     */

  }, {
    key: "reqListener",
    value: function reqListener(e) {
      var data = JSON.parse(e.target.responseText);

      if (_typeof(data) == 'object') {
        var places = data.features;

        if (places.length > 0) {
          var indexMarker = this.markerArray.length - 1;
          this.markerReferencesArray[indexMarker] = places[0].place_name;
          this._targetElementReferencePlace[indexMarker].value = this.markerReferencesArray[indexMarker];
        }
      }
    }
  }, {
    key: "updateInputs",
    value: function updateInputs() {
      this._targetElementLngLat.forEach(function (item, index) {
        item.value = JSON.stringify(this.markerArray[index]._lngLat.toArray());
      }.bind(this));
    }
  }]);

  return MapBoxFactory;
}();

/* harmony default export */ __webpack_exports__["default"] = (MapBoxFactory);

/***/ }),

/***/ "./assets/dash/scripts/mapBox/adminLocationSelector.js":
/*!*************************************************************!*\
  !*** ./assets/dash/scripts/mapBox/adminLocationSelector.js ***!
  \*************************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var mapbox_gl__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! mapbox-gl */ "./node_modules/mapbox-gl/dist/mapbox-gl.js");
/* harmony import */ var mapbox_gl__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(mapbox_gl__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _MapBoxFactory__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./MapBoxFactory */ "./assets/dash/scripts/mapBox/MapBoxFactory.js");

mapbox_gl__WEBPACK_IMPORTED_MODULE_0___default.a.accessToken = 'pk.eyJ1IjoiY2FydG1hbnVzZXIiLCJhIjoiY2p5aHVyNHB2MDNudzNnbnJiaGVtcWJ2OCJ9.2UPDKnSZRNwNR1ITlZQEAA';

var mapElement = document.querySelector('div#map');
var latLongInputs = document.querySelectorAll('div.longLat .lngLat_input');
var lngLatReferencePlaceInputs = document.querySelectorAll('.lngLat_referencePlace_input');
new _MapBoxFactory__WEBPACK_IMPORTED_MODULE_1__["default"](mapElement, latLongInputs, lngLatReferencePlaceInputs);

/***/ })

},[["./assets/dash/scripts/mapBox/adminLocationSelector.js","runtime","vendors~dash~dash_placemap","vendors~dash_placemap"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvZGFzaC9zY3JpcHRzL21hcEJveC9NYXBCb3hGYWN0b3J5LmpzIiwid2VicGFjazovLy8uL2Fzc2V0cy9kYXNoL3NjcmlwdHMvbWFwQm94L2FkbWluTG9jYXRpb25TZWxlY3Rvci5qcyJdLCJuYW1lcyI6WyJtYXBib3hnbCIsImFjY2Vzc1Rva2VuIiwiTWFwQm94RmFjdG9yeSIsIm1hcENvbnRhaW5lciIsInRhcmdldEVsZW1lbnRMbmdMYXQiLCJ0YXJnZXRFbGVtZW50UmVmZXJlbmNlUGxhY2UiLCJtYXJrZXJzQ291bnQiLCJhdXRvQ2VudGVyIiwiem9vbSIsIm1hcGJveFN0eWxlIiwibWFya2VyQ2xhc3NOYW1lIiwiX21hcENvbnRhaW5lclN0ciIsImlkIiwiX2F1dG9DZW50ZXIiLCJfdGFyZ2V0RWxlbWVudExuZ0xhdCIsIl90YXJnZXRFbGVtZW50UmVmZXJlbmNlUGxhY2UiLCJtYXJrZXJSZWZlcmVuY2VzQXJyYXkiLCJtYXJrZXJBcnJheSIsImNvbmZpZyIsIm1heENvb3JkcyIsImNlbnRlciIsImluaXQiLCJldmVudHMiLCJzdG9yeU1hcCIsIm9uIiwiZSIsImFkZE1hcmtlclRvTWFwIiwidGFyZ2V0IiwibG5nTGF0IiwiYmluZCIsIm5hdmlnYXRvciIsImdlb2xvY2F0aW9uIiwiZ2V0Q3VycmVudFBvc2l0aW9uIiwicG9zIiwiY29vcmRzIiwibG9uZ2l0dWRlIiwibGF0aXR1ZGUiLCJNYXAiLCIkdG1wTGF0IiwiJHRtcExuZyIsImVsIiwiZG9jdW1lbnQiLCJjcmVhdGVFbGVtZW50IiwiY2xhc3NOYW1lIiwic2V0QXR0cmlidXRlIiwibGF0IiwibG5nIiwicG9pbnQiLCJNYXJrZXIiLCJlbGVtZW50IiwiYW5jaG9yIiwiaW5kZXgiLCJhZGRNYXJrZXIiLCJsZW5ndGgiLCJyZW1vdmUiLCJwdXNoIiwiYWxlcnQiLCJzZXRMbmdMYXQiLCJhZGRUbyIsInJldmVyc2VHZW9Db2RlIiwidXBkYXRlSW5wdXRzIiwiZXJyb3IiLCJjb25zb2xlIiwibG9nIiwidG9rZW4iLCJ1cmwiLCJvUmVxIiwiWE1MSHR0cFJlcXVlc3QiLCJhZGRFdmVudExpc3RlbmVyIiwicmVxTGlzdGVuZXIiLCJvcGVuIiwic2VuZCIsImRhdGEiLCJKU09OIiwicGFyc2UiLCJyZXNwb25zZVRleHQiLCJwbGFjZXMiLCJmZWF0dXJlcyIsImluZGV4TWFya2VyIiwicGxhY2VfbmFtZSIsInZhbHVlIiwiZm9yRWFjaCIsIml0ZW0iLCJzdHJpbmdpZnkiLCJfbG5nTGF0IiwidG9BcnJheSIsIm1hcEVsZW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwibGF0TG9uZ0lucHV0cyIsInF1ZXJ5U2VsZWN0b3JBbGwiLCJsbmdMYXRSZWZlcmVuY2VQbGFjZUlucHV0cyJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7OztBQUFBO0FBQ0FBLGlEQUFRLENBQUNDLFdBQVQsR0FBdUIsZ0dBQXZCOztJQUdNQyxhOzs7QUFFRiwyQkFTRTtBQUFBLFFBUkVDLFlBUUYsdUVBUmlCLFNBUWpCO0FBQUEsUUFQRUMsbUJBT0YsdUVBUHdCLEVBT3hCO0FBQUEsUUFORUMsMkJBTUYsdUVBTmdDLEVBTWhDO0FBQUEsUUFMRUMsWUFLRix1RUFMaUIsQ0FLakI7QUFBQSxRQUpFQyxVQUlGLHVFQUplLEtBSWY7QUFBQSxRQUhFQyxJQUdGLHVFQUhTLEVBR1Q7QUFBQSxRQUZFQyxXQUVGLHVFQUZnQixtQ0FFaEI7QUFBQSxRQURFQyxlQUNGLHVFQUR1Qix3QkFDdkI7O0FBQUE7O0FBQ0UsU0FBS0MsZ0JBQUwsR0FBd0JSLFlBQVksQ0FBQ1MsRUFBckM7QUFDQSxTQUFLQyxXQUFMLEdBQXdCTixVQUF4QjtBQUNBLFNBQUtPLG9CQUFMLEdBQTRCVixtQkFBNUI7QUFDQSxTQUFLVyw0QkFBTCxHQUFvQ1YsMkJBQXBDO0FBQ0EsU0FBS1cscUJBQUwsR0FBK0IsRUFBL0I7QUFDQSxTQUFLQyxXQUFMLEdBQW1CLEVBQW5CO0FB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Q0FBN0M7QUFDQSxlQUFLckMscUJBQUwsQ0FBMkI4RCxXQUEzQixJQUEwQ0YsTUFBTSxDQUFDLENBQUQsQ0FBTixDQUFVRyxVQUFwRDtBQUNBLGVBQUtoRSw0QkFBTCxDQUFrQytELFdBQWxDLEVBQStDRSxLQUEvQyxHQUF1RCxLQUFLaEUscUJBQUwsQ0FBMkI4RCxXQUEzQixDQUF2RDtBQUNIO0FBQ0o7QUFFSjs7O21DQUdEO0FBQ0ksV0FBS2hFLG9CQUFMLENBQTBCbUUsT0FBMUIsQ0FDSSxVQUFVQyxJQUFWLEVBQWdCL0IsS0FBaEIsRUFBdUI7QUFDbkIrQixZQUFJLENBQUNGLEtBQUwsR0FBYVAsSUFBSSxDQUFDVSxTQUFMLENBQWUsS0FBS2xFLFdBQUwsQ0FBaUJrQyxLQUFqQixFQUF3QmlDLE9BQXhCLENBQWdDQyxPQUFoQyxFQUFmLENBQWI7QUFDSCxPQUZELENBRUV4RCxJQUZGLENBRU8sSUFGUCxDQURKO0FBTUg7Ozs7OztBQUlVM0IsNEVBQWYsRTs7Ozs7Ozs7Ozs7O0FDNUpBO0FBQUE7QUFBQTtBQUFBO0FBQUE7QUFDQUYsZ0RBQVEsQ0FBQ0MsV0FBVCxHQUF1QixnR0FBdkI7QUFFQTtBQUNBLElBQUlxRixVQUFVLEdBQUc3QyxRQUFRLENBQUM4QyxhQUFULENBQXVCLFNBQXZCLENBQWpCO0FBQ0EsSUFBSUMsYUFBYSxHQUFHL0MsUUFBUSxDQUFDZ0QsZ0JBQVQsQ0FBMEIsMkJBQTFCLENBQXBCO0FBQ0EsSUFBSUMsMEJBQTBCLEdBQUdqRCxRQUFRLENBQUNnRCxnQkFBVCxDQUEwQiw4QkFBMUIsQ0FBakM7QUFFQSxJQUFJdkYsc0RBQUosQ0FBa0JvRixVQUFsQixFQUE4QkUsYUFBOUIsRUFBNkNFLDBCQUE3QyxFIiwiZmlsZSI6ImRhc2hfcGxhY2VtYXAuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgbWFwYm94Z2wgZnJvbSAnbWFwYm94LWdsJztcclxubWFwYm94Z2wuYWNjZXNzVG9rZW4gPSAncGsuZXlKMUlqb2lZMkZ5ZEcxaGJuVnpaWElpTENKaElqb2lZMnA1YUhWeU5IQjJNRE51ZHpObmJuSmlhR1Z0Y1dKMk9DSjkuMlVQREtuU1pSTndOUjFJVGxaUUVBQSc7XHJcblxyXG5cclxuY2xhc3MgTWFwQm94RmFjdG9yeVxyXG57XHJcbiAgICBjb25zdHJ1Y3RvcihcclxuICAgICAgICBtYXBDb250YWluZXIgPSAnZGl2I21hcCcsXHJcbiAgICAgICAgdGFyZ2V0RWxlbWVudExuZ0xhdCA9IFtdLFxyXG4gICAgICAgIHRhcmdldEVsZW1lbnRSZWZlcmVuY2VQbGFjZSA9IFtdLFxyXG4gICAgICAgIG1hcmtlcnNDb3VudCA9IDEsXHJcbiAgICAgICAgYXV0b0NlbnRlciA9IGZhbHNlLFxyXG4gICAgICAgIHpvb20gPSAxNCxcclxuICAgICAgICBtYXBib3hTdHlsZSA9ICdtYXBib3g6Ly9zdHlsZXMvbWFwYm94L3N0cmVldHMtdjknLFxyXG4gICAgICAgIG1hcmtlckNsYXNzTmFtZSAgICA9ICdmYSBmYS0yeCBmYS1tYXAtbWFya2VyJ1xyXG4gICAgKSB7XHJcbiAgICAgICAgdGhpcy5fbWFwQ29udGFpbmVyU3RyID0gbWFwQ29udGFpbmVyLmlkO1xyXG4gICAgICAgIHRoaXMuX2F1dG9DZW50ZXIgICAgICA9IGF1dG9DZW50ZXI7XHJcbiAgICAgICAgdGhpcy5fdGFyZ2V0RWxlbWVudExuZ0xhdCA9IHRhcmdldEVsZW1lbnRMbmdMYXQ7XHJcbiAgICAgICAgdGhpcy5fdGFyZ2V0RWxlbWVudFJlZmVyZW5jZVBsYWNlID0gdGFyZ2V0RWxlbWVudFJlZmVyZW5jZVBsYWNlO1xyXG4gICAgICAgIHRoaXMubWFya2VyUmVmZXJlbmNlc0FycmF5ICAgPSBbXTtcclxuICAgICAgICB0aGlzLm1hcmtlckFycmF5ID0gW107XHJcbiAgICAgICAgdGhpcy5jb25maWcgICAgICA9IHtcclxuICAgICAgICAgICAgbWF4Q29vcmRzOiBtYXJrZXJzQ291bnQsXHJcbiAgICAgICAgICAgIHpvb206IHpvb20sXHJcbiAgICAgICAgICAgIG1hcGJveFN0eWxlOiBtYXBib3hTdHlsZSxcclxuICAgICAgICAgICAgLy8gQ2VudGVyIG1hcCBhdCBWZWRhZG8sIGhhYmFuYS5cclxuICAgICAgICAgICAgY2VudGVyOiBbLTgyLjM4ODEzMzg0NDI3NTg3LCAyMy4xMzYwODY0MDc2MzkyMTJdLFxyXG4gICAgICAgICAgICAvLyBDbGFzcyBmb3IgdGhlIEhUTUwgbWFya2VyIGVsZW1lbnQgaWNvbiBhbmQgc3R5bGVzLlxyXG4gICAgICAgICAgICBtYXJrZXJDbGFzc05hbWU6ICdtYXJrZXIgJyArIG1hcmtlckNsYXNzTmFtZSxcclxuICAgICAgICB9O1xyXG5cclxuICAgICAgICB0aGlzLmluaXQoKTtcclxuICAgICAgICB0aGlzLmV2ZW50cygpO1xyXG5cclxuICAgIH1cclxuXHJcbiAgICBldmVudHMoKVxyXG4gICAge1xyXG4gICAgICAgIHRoaXMuc3RvcnlNYXAub24oXHJcbiAgICAgICAgICAgICdjbGljaycsXHJcbiAgICAgICAgICAgIGZ1bmN0aW9uIChlKSB7XHJcbiAgICAgICAgICAgICAgICB0aGlzLmFkZE1hcmtlclRvTWFwKGUudGFyZ2V0LGUubG5nTGF0KVxyXG4gICAgICAgICAgICB9LmJpbmQodGhpcylcclxuICAgICAgICApO1xyXG4gICAgfVxyXG5cclxuICAgIGluaXQoKVxyXG4gICAge1xyXG4gICAgICAgIGlmICh0aGlzLl9hdXRvQ2VudGVyICYmIFwiZ2VvbG9jYXRpb25cIiBpbiBuYXZpZ2F0b3IpIHtcclxuICAgICAgICAgICAgbGV0IGNlbnRlciA9IHRoaXMuY29uZmlnLmNlbnRlcjtcclxuICAgICAgICAgICAgbmF2aWdhdG9yLmdlb2xvY2F0aW9uLmdldEN1cnJlbnRQb3NpdGlvbihcclxuICAgICAgICAgICAgICAgIGZ1bmN0aW9uIChwb3MpIHtcclxuICAgICAgICAgICAgICAgICAgICBjZW50ZXIgPSBbcG9zLmNvb3Jkcy5sb25naXR1ZGUscG9zLmNvb3Jkcy5sYXRpdHVkZV07XHJcbiAgICAgICAgICAgICAgICB9XHJcbiAgICAgICAgICAgICk7XHJcbiAgICAgICAgICAgIHRoaXMuY29uZmlnLmNlbnRlciA9IGNlbnRlcjtcclxuICAgICAgICB9XHJcblxyXG4gICAgICAgIHRoaXMuc3RvcnlNYXAgPSBuZXcgbWFwYm94Z2wuTWFwKFxyXG4gICAgICAgICAgICB7XHJcbiAgICAgICAgICAgICAgICBcImNvbnRhaW5lclwiOiB0aGlzLl9tYXBDb250YWluZXJTdHIsXHJcbiAgICAgICAgICAgICAgICBcInN0eWxlXCI6IHRoaXMuY29uZmlnLm1hcGJveFN0eWxlLFxyXG4gICAgICAgICAgICAgICAgXCJjZW50ZXJcIjogdGhpcy5jb25maWcuY2VudGVyLFxyXG4gICAgICAgICAgICAgICAgXCJ6b29tXCI6IHRoaXMuY29uZmlnLnpvb20sXHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICApO1xyXG5cclxuICAgIH1cclxuXHJcbiAgICBhZGRNYXJrZXJUb01hcChlLCBsbmdMYXQpe1xyXG4gICAgICAgIHRyeSB7XHJcbiAgICAgICAgICAgIGxldCAkdG1wTGF0LCAkdG1wTG5nO1xyXG4gICAgICAgICAgICAvLyBDcmVhdGUgYSBIVE1MIGVsZW1lbnQgZm9yIGVhY2ggZmVhdHVyZS5cclxuICAgICAgICAgICAgbGV0IGVsICAgICAgID0gZG9jdW1lbnQuY3JlYXRlRWxlbWVudCgnaScpO1xyXG4gICAgICAgICAgICBlbC5jbGFzc05hbWUgPSB0aGlzLmNvbmZpZy5tYXJrZXJDbGFzc05hbWU7XHJcblxyXG4gICAgICAgICAgICBlbC5zZXRBdHRyaWJ1dGUoJ2RhdGEtbGF0JyxsbmdMYXQubGF0KTtcclxuICAgICAgICAgICAgZWwuc2V0QXR0cmlidXRlKCdkYXRhLWxuZycsbG5nTGF0LmxuZyk7XHJcblxyXG4gICAgICAgICAgICBsZXQgcG9pbnQgICAgID0gbmV3IG1hcGJveGdsLk1hcmtlcih7ZWxlbWVudDogZWwsIGFuY2hvcjogJ2NlbnRlcid9KTtcclxuICAgICAgICAgICAgbGV0IGluZGV4ICAgICA9IDA7XHJcbiAgICAgICAgICAgIGxldCBhZGRNYXJrZXIgPSB0cnVlO1xyXG5cclxuICAgICAgICAgICAgLy8gVG9kbzogYWRkIGNoZWNrIGZvciBudW1iZXIgb2YgbWFya2Vycy5cclxuICAgICAgICAgICAgaWYgKHRoaXMuY29uZmlnLm1heENvb3JkcyA9PT0gMSAmJiB0aGlzLm1hcmtlckFycmF5Lmxlbmd0aCA+IDApIHtcclxuICAgICAgICAgICAgICAgIHRoaXMubWFya2VyQXJyYXlbMF0ucmVtb3ZlKCk7XHJcbiAgICAgICAgICAgICAgICB0aGlzLm1hcmtlckFycmF5ID0gW3BvaW50XTtcclxuICAgICAgICAgICAgfSBlbHNlIHtcclxuICAgICAgICAgICAgICAgIGlmICh0aGlzLm1hcmtlckFycmF5Lmxlbmd0aCA8IHRoaXMuY29uZmlnLm1heENvb3Jkcykge1xyXG4gICAgICAgICAgICAgICAgICAgIGluZGV4ID0gdGhpcy5tYXJrZXJBcnJheS5sZW5ndGg7XHJcbiAgICAgICAgICAgICAgICAgICAgdGhpcy5tYXJrZXJBcnJheS5wdXNoKHBvaW50KTtcclxuICAgICAgICAgICAgICAgIH0gZWxzZSB7XHJcbiAgICAgICAgICAgICAgICAgICAgYWxlcnQoJ21heCBjb29yZHMgZW50ZXJlZCcpO1xyXG4gICAgICAgICAgICAgICAgICAgIGFkZE1hcmtlciA9IGZhbHNlO1xyXG4gICAgICAgICAgICAgICAgfVxyXG4gICAgICAgICAgICB9XHJcblxyXG4gICAgICAgICAgICBpZiAoYWRkTWFya2VyKSB7XHJcbiAgICAgICAgICAgICAgICBwb2ludC5zZXRMbmdMYXQobG5nTGF0KS5hZGRUbyh0aGlzLnN0b3J5TWFwKTtcclxuICAgICAgICAgICAgICAgIHRoaXMucmV2ZXJzZUdlb0NvZGUobG5nTGF0KTtcclxuICAgICAgICAgICAgfVxyXG5cclxuICAgICAgICAgICAgdGhpcy51cGRhdGVJbnB1dHMoKTtcclxuXHJcbiAgICAgICAgfSBjYXRjaCAoZXJyb3IpIHtcclxuICAgICAgICAgICAgY29uc29sZS5sb2coZXJyb3IpO1xyXG4gICAgICAgIH0vL2VuZCB0cnlcclxuICAgIH1cclxuXHJcblxyXG4gICAgcmV2ZXJzZUdlb0NvZGUobG5nTGF0KVxyXG4gICAge1xyXG4gICAgICAgIGxldCB0b2tlbiA9IG1hcGJveGdsLmFjY2Vzc1Rva2VuO1xyXG4gICAgICAgIGxldCB1cmwgICA9ICdodHRwczovL2FwaS5tYXBib3guY29tL2dlb2NvZGluZy92NS9tYXBib3gucGxhY2VzLycgKyBsbmdMYXQubG5nICsgJyUyQycgKyBsbmdMYXQubGF0ICsgJy5qc29uP2FjY2Vzc190b2tlbj0nICsgdG9rZW4gKyAnJmNhY2hlYnVzdGVyPTE1ODMwMDk3OTU3ODEmYXV0b2NvbXBsZXRlPWZhbHNlJmNvdW50cnk9Y3UmdHlwZXM9YWRkcmVzcyUyQ3BvaSUyQ3BsYWNlJTJDbG9jYWxpdHkmbGltaXQ9MSZsYW5ndWFnZT1lcyUyQ2VuJztcclxuXHJcbiAgICAgICAgbGV0IG9SZXEgPSBuZXcgWE1MSHR0cFJlcXVlc3QoKTtcclxuICAgICAgICBvUmVxLmFkZEV2ZW50TGlzdGVuZXIoXCJsb2FkXCIsIHRoaXMucmVxTGlzdGVuZXIuYmluZCh0aGlzKSk7XHJcbiAgICAgICAgb1JlcS5vcGVuKFwiR0VUXCIsIHVybCk7XHJcbiAgICAgICAgb1JlcS5zZW5kKCk7XHJcblxyXG4gICAgfVxyXG5cclxuICAgIC8qKlxyXG4gICAgICogTG9hZCB0aGUgcmVmZXJlbmNlIHBsYWNlIGRldGFpbHMgZnJvbSBtYXBCb3hcclxuICAgICAqIEBwYXJhbSBYTUxIdHRwUmVxdWVzdEV2ZW50XHJcbiAgICAgKi9cclxuICAgIHJlcUxpc3RlbmVyIChlKSB7XHJcblxyXG4gICAgICAgIGxldCBkYXRhID0gSlNPTi5wYXJzZShlLnRhcmdldC5yZXNwb25zZVRleHQpO1xyXG5cclxuICAgICAgICBpZiAodHlwZW9mIGRhdGEgPT0gJ29iamVjdCcpXHJcbiAgICAgICAge1xyXG4gICAgICAgICAgICBsZXQgcGxhY2VzID0gZGF0YS5mZWF0dXJlcztcclxuXHJcbiAgICAgICAgICAgIGlmIChwbGFjZXMubGVuZ3RoID4gMCkge1xyXG4gICAgICAgICAgICAgICAgbGV0IGluZGV4TWFya2VyID0gKHRoaXMubWFya2VyQXJyYXkubGVuZ3RoIC0gMSk7XHJcbiAgICAgICAgICAgICAgICB0aGlzLm1hcmtlclJlZmVyZW5jZXNBcnJheVtpbmRleE1hcmtlcl0gPSBwbGFjZXNbMF0ucGxhY2VfbmFtZTtcclxuICAgICAgICAgICAgICAgIHRoaXMuX3RhcmdldEVsZW1lbnRSZWZlcmVuY2VQbGFjZVtpbmRleE1hcmtlcl0udmFsdWUgPSB0aGlzLm1hcmtlclJlZmVyZW5jZXNBcnJheVtpbmRleE1hcmtlcl07XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9XHJcblxyXG4gICAgfVxyXG5cclxuICAgIHVwZGF0ZUlucHV0cygpXHJcbiAgICB7XHJcbiAgICAgICAgdGhpcy5fdGFyZ2V0RWxlbWVudExuZ0xhdC5mb3JFYWNoKFxyXG4gICAgICAgICAgICBmdW5jdGlvbiAoaXRlbSwgaW5kZXgpIHtcclxuICAgICAgICAgICAgICAgIGl0ZW0udmFsdWUgPSBKU09OLnN0cmluZ2lmeSh0aGlzLm1hcmtlckFycmF5W2luZGV4XS5fbG5nTGF0LnRvQXJyYXkoKSk7XHJcbiAgICAgICAgICAgIH0uYmluZCh0aGlzKVxyXG4gICAgICAgICk7XHJcblxyXG4gICAgfVxyXG5cclxuXHJcbn1cclxuZXhwb3J0IGRlZmF1bHQgTWFwQm94RmFjdG9yeTtcclxuXHJcblxyXG5cclxuIiwiaW1wb3J0IG1hcGJveGdsIGZyb20gJ21hcGJveC1nbCc7XHJcbm1hcGJveGdsLmFjY2Vzc1Rva2VuID0gJ3BrLmV5SjFJam9pWTJGeWRHMWhiblZ6WlhJaUxDSmhJam9pWTJwNWFIVnlOSEIyTUROdWR6Tm5ibkppYUdWdGNXSjJPQ0o5LjJVUERLblNaUk53TlIxSVRsWlFFQUEnO1xyXG5cclxuaW1wb3J0IE1hcEJveEZhY3RvcnkgZnJvbSBcIi4vTWFwQm94RmFjdG9yeVwiO1xyXG5sZXQgbWFwRWxlbWVudCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoJ2RpdiNtYXAnKTtcclxubGV0IGxhdExvbmdJbnB1dHMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCdkaXYubG9uZ0xhdCAubG5nTGF0X2lucHV0Jyk7XHJcbmxldCBsbmdMYXRSZWZlcmVuY2VQbGFjZUlucHV0cyA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoJy5sbmdMYXRfcmVmZXJlbmNlUGxhY2VfaW5wdXQnKTtcclxuXHJcbm5ldyBNYXBCb3hGYWN0b3J5KG1hcEVsZW1lbnQsIGxhdExvbmdJbnB1dHMsIGxuZ0xhdFJlZmVyZW5jZVBsYWNlSW5wdXRzICk7Il0sInNvdXJjZVJvb3QiOiIifQ==