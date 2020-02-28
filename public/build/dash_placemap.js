(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["dash_placemap"],{

/***/ "./assets/dash/scripts/mapBox/index.js":
/*!*********************************************!*\
  !*** ./assets/dash/scripts/mapBox/index.js ***!
  \*********************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_array_find__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.find */ "./node_modules/core-js/modules/es.array.find.js");
/* harmony import */ var core_js_modules_es_array_find__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_find__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_date_now__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.date.now */ "./node_modules/core-js/modules/es.date.now.js");
/* harmony import */ var core_js_modules_es_date_now__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_now__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.date.to-string */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_web_timers__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/web.timers */ "./node_modules/core-js/modules/web.timers.js");
/* harmony import */ var core_js_modules_web_timers__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_timers__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var mapbox_gl__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! mapbox-gl */ "./node_modules/mapbox-gl/dist/mapbox-gl.js");
/* harmony import */ var mapbox_gl__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(mapbox_gl__WEBPACK_IMPORTED_MODULE_4__);





mapbox_gl__WEBPACK_IMPORTED_MODULE_4___default.a.accessToken = 'pk.eyJ1IjoiY2FydG1hbnVzZXIiLCJhIjoiY2p5aHVyNHB2MDNudzNnbnJiaGVtcWJ2OCJ9.2UPDKnSZRNwNR1ITlZQEAA';
window.markerArray = [];
var config = {
  maxCoords: 1
};
$(function () {
  /*
  * init Map
  *
  * map needs to be stored as JS object in global space (no reference on the DOM element for the map)
  */
  var center = [-82.38813384427587, 23.136086407639212];

  if ("geolocation" in navigator) {
    navigator.geolocation.getCurrentPosition(function (pos) {
      console.log('geoloacted center of map');
      center = [pos.coords.longitude, pos.coords.latitude];
    });
  }

  window.storyMap = new mapbox_gl__WEBPACK_IMPORTED_MODULE_4___default.a.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v9',
    center: center,
    zoom: 14
  });
  window.storyMap.on('click', function (e) {
    addMarkerToMap(e.target, e.lngLat);
  });
});

function addMarkerToMap(map, lngLat) {
  try {
    var $tmpLat, $tmpLng; // create a HTML element for each feature

    var el = document.createElement('i');
    el.className = 'marker fa fa-2x fa-map-marker';
    el.setAttribute('data-lat', lngLat.lat);
    el.setAttribute('data-lng', lngLat.lng);
    var point = new mapbox_gl__WEBPACK_IMPORTED_MODULE_4___default.a.Marker({
      element: el,
      anchor: 'center'
    });
    var index = 0;
    var addMarker = true; // todo: add check for number of markers

    if (config.maxCoords === 1 && window.markerArray.length > 0) {
      window.markerArray[0].remove();
      window.markerArray = [point];
    } else {
      if (window.markerArray.length < config.maxCoords) {
        index = window.markerArray.length;
        window.markerArray.push(point);
      } else {
        alert('max coords entered');
        addMarker = false;
      }
    }

    if (addMarker) {
      point.setLngLat(lngLat).addTo(map);
      $tmpLat = findInput('lat', index);
      $tmpLng = findInput('lng', index);

      if ($tmpLat && $tmpLng) {
        $tmpLng.val(lngLat.lng);
        $tmpLat.val(lngLat.lat);
        reverseGeoCode(lngLat, mapbox_gl__WEBPACK_IMPORTED_MODULE_4___default.a.accessToken);
      } else {
        throw "Form fields not found.";
      }
    }
  } catch (error) {
    logErrors(error);
  }
}

function logErrors(error) {
  console.error('Error: ' + error.message + ' - from ' + error.fileName + '[' + error.lineNumber + ']');
}

function findInput(coord, index) {
  var $fieldset = $('fieldset[name="coords"]');
  var $coord = $fieldset.find('input[name="' + coord + '[' + index + ']"]');

  if ($coord.length > 0) {
    console.log('found inputs for ' + index);
    return $coord;
  } else {
    console.log('not found inputs for ' + index);
    return addCoordsInput(coord, index);
  }
}

function addCoordsInput(coord, index) {
  //TODO: set the coords to the input
  var $fieldset = $('fieldset[name="coords"]');
  var $lat = $('<input/>', {
    name: 'lat[' + index + ']',
    type: 'hidden'
  });
  var $lng = $('<input/>', {
    name: 'lng[' + index + ']',
    type: 'hidden'
  });

  if (coord === 'lat') {
    console.log('added lat ' + index);
    $lat.appendTo($fieldset);
    return $lat;
  } else {
    console.log('added lng ' + index);
    $lng.appendTo($fieldset);
    return $lng;
  }
}

function reverseGeoCode(lngLat, token) {
  console.log('reverseGeoCode', lngLat);

  if (!token) {
    token = mapbox_gl__WEBPACK_IMPORTED_MODULE_4___default.a.accessToken;
  }

  var url = 'https://api.mapbox.com/geocoding/v5/mapbox.places/' + lngLat.lng + '%2C' + lngLat.lat + '.json?access_token=' + token + '&types=address';
  $.get(url, logLocation);
}

function logLocation(data) {
  console.log('logLocation', data);
  var response = data;
  var places = data.features;

  if (places.length > 0) {
    statusMessage(places[0].place_name);
  }

  console.log(data);
}

function statusMessage(message, type) {
  console.log('statusMessage', message);
  var msgContainer = $('#statusmessages');

  if (!type) {
    type = 'success';
  }

  var messageBox = $('<div></div>', {
    "class": 'alert alert-' + type + ' fade show'
  }).attr('id', Date.now());
  var title = $('<strong></strong>').text('Location: ').appendTo(messageBox);
  messageBox.text(message);
  messageBox.appendTo(msgContainer);
  window.setTimeout(function () {
    messageBox.alert('close');
  }, 8400);
}
/**
 * Created by jo on 11/19/2019.
 */

/***/ })

},[["./assets/dash/scripts/mapBox/index.js","runtime","vendors~dash~dash_placemap","vendors~dash_placemap"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvZGFzaC9zY3JpcHRzL21hcEJveC9pbmRleC5qcyJdLCJuYW1lcyI6WyJtYXBib3hnbCIsImFjY2Vzc1Rva2VuIiwid2luZG93IiwibWFya2VyQXJyYXkiLCJjb25maWciLCJtYXhDb29yZHMiLCIkIiwiY2VudGVyIiwibmF2aWdhdG9yIiwiZ2VvbG9jYXRpb24iLCJnZXRDdXJyZW50UG9zaXRpb24iLCJwb3MiLCJjb25zb2xlIiwibG9nIiwiY29vcmRzIiwibG9uZ2l0dWRlIiwibGF0aXR1ZGUiLCJzdG9yeU1hcCIsIk1hcCIsImNvbnRhaW5lciIsInN0eWxlIiwiem9vbSIsIm9uIiwiZSIsImFkZE1hcmtlclRvTWFwIiwidGFyZ2V0IiwibG5nTGF0IiwibWFwIiwiJHRtcExhdCIsIiR0bXBMbmciLCJlbCIsImRvY3VtZW50IiwiY3JlYXRlRWxlbWVudCIsImNsYXNzTmFtZSIsInNldEF0dHJpYnV0ZSIsImxhdCIsImxuZyIsInBvaW50IiwiTWFya2VyIiwiZWxlbWVudCIsImFuY2hvciIsImluZGV4IiwiYWRkTWFya2VyIiwibGVuZ3RoIiwicmVtb3ZlIiwicHVzaCIsImFsZXJ0Iiwic2V0TG5nTGF0IiwiYWRkVG8iLCJmaW5kSW5wdXQiLCJ2YWwiLCJyZXZlcnNlR2VvQ29kZSIsImVycm9yIiwibG9nRXJyb3JzIiwibWVzc2FnZSIsImZpbGVOYW1lIiwibGluZU51bWJlciIsImNvb3JkIiwiJGZpZWxkc2V0IiwiJGNvb3JkIiwiZmluZCIsImFkZENvb3Jkc0lucHV0IiwiJGxhdCIsIm5hbWUiLCJ0eXBlIiwiJGxuZyIsImFwcGVuZFRvIiwidG9rZW4iLCJ1cmwiLCJnZXQiLCJsb2dMb2NhdGlvbiIsImRhdGEiLCJyZXNwb25zZSIsInBsYWNlcyIsImZlYXR1cmVzIiwic3RhdHVzTWVzc2FnZSIsInBsYWNlX25hbWUiLCJtc2dDb250YWluZXIiLCJtZXNzYWdlQm94IiwiYXR0ciIsIkRhdGUiLCJub3ciLCJ0aXRsZSIs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QSxZQUFVLENBQUNLLElBQVgsQ0FBZ0I3QixPQUFoQjtBQUVBd0IsWUFBVSxDQUFDWixRQUFYLENBQW9CVyxZQUFwQjtBQUVBM0UsUUFBTSxDQUFDa0YsVUFBUCxDQUFrQixZQUFVO0FBQzFCTixjQUFVLENBQUNoQyxLQUFYLENBQWlCLE9BQWpCO0FBQ0QsR0FGRCxFQUVFLElBRkY7QUFHRDtBQUVEIiwiZmlsZSI6ImRhc2hfcGxhY2VtYXAuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgbWFwYm94Z2wgZnJvbSAnbWFwYm94LWdsJztcclxubWFwYm94Z2wuYWNjZXNzVG9rZW4gPSAncGsuZXlKMUlqb2lZMkZ5ZEcxaGJuVnpaWElpTENKaElqb2lZMnA1YUhWeU5IQjJNRE51ZHpObmJuSmlhR1Z0Y1dKMk9DSjkuMlVQREtuU1pSTndOUjFJVGxaUUVBQSc7XHJcblxyXG53aW5kb3cubWFya2VyQXJyYXkgPSBbXTtcclxuXHJcbmxldCBjb25maWcgPSB7XHJcbiAgbWF4Q29vcmRzOiAxXHJcbn07XHJcblxyXG4kKGZ1bmN0aW9uKCl7XHJcbiAgICAvKlxyXG4gICAqIGluaXQgTWFwXHJcbiAgICpcclxuICAgKiBtYXAgbmVlZHMgdG8gYmUgc3RvcmVkIGFzIEpTIG9iamVjdCBpbiBnbG9iYWwgc3BhY2UgKG5vIHJlZmVyZW5jZSBvbiB0aGUgRE9NIGVsZW1lbnQgZm9yIHRoZSBtYXApXHJcbiAgICovXHJcbiAgdmFyIGNlbnRlciA9IFstODIuMzg4MTMzODQ0Mjc1ODcsIDIzLjEzNjA4NjQwNzYzOTIxMl07XHJcbiAgaWYgKFwiZ2VvbG9jYXRpb25cIiBpbiBuYXZpZ2F0b3IpIHtcclxuICAgIG5hdmlnYXRvci5nZW9sb2NhdGlvbi5nZXRDdXJyZW50UG9zaXRpb24oZnVuY3Rpb24ocG9zKXtcclxuICAgICAgY29uc29sZS5sb2coJ2dlb2xvYWN0ZWQgY2VudGVyIG9mIG1hcCcpO1xyXG4gICAgICBjZW50ZXIgPSBbcG9zLmNvb3Jkcy5sb25naXR1ZGUscG9zLmNvb3Jkcy5sYXRpdHVkZV07XHJcbiAgICB9KTtcclxuICB9XHJcblxyXG4gIHdpbmRvdy5zdG9yeU1hcCA9IG5ldyBtYXBib3hnbC5NYXAoe1xyXG4gICAgY29udGFpbmVyOiAnbWFwJyxcclxuICAgIHN0eWxlOiAnbWFwYm94Oi8vc3R5bGVzL21hcGJveC9zdHJlZXRzLXY5JyxcclxuICAgIGNlbnRlcjogY2VudGVyLFxyXG4gICAgem9vbTogMTRcclxuICB9KTtcclxuXHJcbiAgd2luZG93LnN0b3J5TWFwLm9uKCdjbGljaycsZnVuY3Rpb24oZSl7IGFkZE1hcmtlclRvTWFwKGUudGFyZ2V0LGUubG5nTGF0KSB9KTtcclxufSk7XHJcblxyXG5mdW5jdGlvbiBhZGRNYXJrZXJUb01hcChtYXAsbG5nTGF0KXtcclxuICB0cnl7XHJcbiAgICB2YXIgJHRtcExhdCwgJHRtcExuZztcclxuICAgIC8vIGNyZWF0ZSBhIEhUTUwgZWxlbWVudCBmb3IgZWFjaCBmZWF0dXJlXHJcbiAgICB2YXIgZWwgPSBkb2N1bWVudC5jcmVhdGVFbGVtZW50KCdpJyk7XHJcbiAgICBlbC5jbGFzc05hbWUgPSAnbWFya2VyIGZhIGZhLTJ4IGZhLW1hcC1tYXJrZXInO1xyXG4gICAgZWwuc2V0QXR0cmlidXRlKCdkYXRhLWxhdCcsbG5nTGF0LmxhdCk7XHJcbiAgICBlbC5zZXRBdHRyaWJ1dGUoJ2RhdGEtbG5nJyxsbmdMYXQubG5nKTtcclxuICAgIHZhciBwb2ludCA9IG5ldyBtYXBib3hnbC5NYXJrZXIoe2VsZW1lbnQ6IGVsLCBhbmNob3I6ICdjZW50ZXInfSk7XHJcblxyXG4gICAgdmFyIGluZGV4ID0gMDtcclxuICAgIHZhciBhZGRNYXJrZXIgPSB0cnVlO1xyXG4gICAgLy8gdG9kbzogYWRkIGNoZWNrIGZvciBudW1iZXIgb2YgbWFya2Vyc1xyXG4gICAgaWYoY29uZmlnLm1heENvb3JkcyA9PT0gMSAmJiB3aW5kb3cubWFya2VyQXJyYXkubGVuZ3RoID4gMCl7XHJcbiAgICAgIHdpbmRvdy5tYXJrZXJBcnJheVswXS5yZW1vdmUoKTtcclxuICAgICAgd2luZG93Lm1hcmtlckFycmF5ID0gW3BvaW50XTtcclxuICAgIH1cclxuICAgIGVsc2Uge1xyXG4gICAgICBpZih3aW5kb3cubWFya2VyQXJyYXkubGVuZ3RoIDwgY29uZmlnLm1heENvb3Jkcyl7XHJcbiAgICAgICAgaW5kZXggPSB3aW5kb3cubWFya2VyQXJyYXkubGVuZ3RoO1xyXG4gICAgICAgIHdpbmRvdy5tYXJrZXJBcnJheS5wdXNoKHBvaW50KTtcclxuICAgICAgfVxyXG4gICAgICBlbHNlIHtcclxuICAgICAgICBhbGVydCgnbWF4IGNvb3JkcyBlbnRlcmVkJyk7XHJcbiAgICAgICAgYWRkTWFya2VyID0gZmFsc2U7XHJcbiAgICAgIH1cclxuICAgIH1cclxuXHJcbiAgICBpZihhZGRNYXJrZXIpe1xyXG4gICAgICBwb2ludC5zZXRMbmdMYXQobG5nTGF0KS5hZGRUbyhtYXApO1xyXG5cclxuICAgICAgJHRtcExhdCA9IGZpbmRJbnB1dCgnbGF0JyxpbmRleCk7XHJcbiAgICAgICR0bXBMbmcgPSBmaW5kSW5wdXQoJ2xuZycsaW5kZXgpO1xyXG5cclxuICAgICAgaWYoJHRtcExhdCAmJiAkdG1wTG5nKXtcclxuICAgICAgICAkdG1wTG5nLnZhbChsbmdMYXQubG5nKTtcclxuICAgICAgICAkdG1wTGF0LnZhbChsbmdMYXQubGF0KTtcclxuICAgICAgICByZXZlcnNlR2VvQ29kZShsbmdMYXQsbWFwYm94Z2wuYWNjZXNzVG9rZW4pO1xyXG4gICAgICB9XHJcbiAgICAgIGVsc2Uge1xyXG4gICAgICAgIHRocm93IFwiRm9ybSBmaWVsZHMgbm90IGZvdW5kLlwiO1xyXG4gICAgICB9XHJcbiAgICB9XHJcbiAgfVxyXG4gIGNhdGNoKGVycm9yKXtcclxuICAgIGxvZ0Vycm9ycyhlcnJvcik7XHJcbiAgfVxyXG59XHJcblxyXG5mdW5jdGlvbiBsb2dFcnJvcnMoZXJyb3Ipe1xyXG4gIGNvbnNvbGUuZXJyb3IoJ0Vycm9yOiAnK2Vycm9yLm1lc3NhZ2UrJyAtIGZyb20gJytlcnJvci5maWxlTmFtZSsnWycrZXJyb3IubGluZU51bWJlcisnXScpO1xyXG59XHJcblxyXG5mdW5jdGlvbiBmaW5kSW5wdXQoY29vcmQsaW5kZXgpe1xyXG4gIHZhciAkZmllbGRzZXQgPSAkKCdmaWVsZHNldFtuYW1lPVwiY29vcmRzXCJdJyk7XHJcbiAgdmFyICRjb29yZCA9ICRmaWVsZHNldC5maW5kKCdpbnB1dFtuYW1lPVwiJytjb29yZCsnWycraW5kZXgrJ11cIl0nKTtcclxuICBpZigkY29vcmQubGVuZ3RoID4gMCl7XHJcbiAgICBjb25zb2xlLmxvZygnZm91bmQgaW5wdXRzIGZvciAnK2luZGV4KTtcclxuICAgIHJldHVybiAkY29vcmQ7XHJcbiAgfVxyXG4gIGVsc2Uge1xyXG4gICAgY29uc29sZS5sb2coJ25vdCBmb3VuZCBpbnB1dHMgZm9yICcraW5kZXgpO1xyXG4gICAgcmV0dXJuIGFkZENvb3Jkc0lucHV0KGNvb3JkLGluZGV4KTtcclxuICB9XHJcbn1cclxuXHJcblxyXG5mdW5jdGlvbiBhZGRDb29yZHNJbnB1dChjb29yZCxpbmRleCl7XHJcbiAgLy9UT0RPOiBzZXQgdGhlIGNvb3JkcyB0byB0aGUgaW5wdXRcclxuICB2YXIgJGZpZWxkc2V0ID0gJCgnZmllbGRzZXRbbmFtZT1cImNvb3Jkc1wiXScpO1xyXG4gIHZhciAkbGF0ID0gJCgnPGlucHV0Lz4nLHtuYW1lOiAnbGF0WycraW5kZXgrJ10nLCB0eXBlOiAnaGlkZGVuJ30pO1xyXG4gIHZhciAkbG5nID0gJCgnPGlucHV0Lz4nLHtuYW1lOiAnbG5nWycraW5kZXgrJ10nLCB0eXBlOiAnaGlkZGVuJ30pO1xyXG4gIGlmKGNvb3JkID09PSAnbGF0Jyl7XHJcbiAgICBjb25zb2xlLmxvZygnYWRkZWQgbGF0ICcraW5kZXgpO1xyXG4gICAgJGxhdC5hcHBlbmRUbygkZmllbGRzZXQpO1xyXG4gICAgcmV0dXJuICRsYXQ7XHJcbiAgfVxyXG4gIGVsc2Uge1xyXG4gICAgY29uc29sZS5sb2coJ2FkZGVkIGxuZyAnK2luZGV4KTtcclxuICAgICRsbmcuYXBwZW5kVG8oJGZpZWxkc2V0KTtcclxuICAgIHJldHVybiAkbG5nO1xyXG4gIH1cclxufVxyXG5cclxuXHJcblxyXG5mdW5jdGlvbiByZXZlcnNlR2VvQ29kZShsbmdMYXQsdG9rZW4pe1xyXG4gIGNvbnNvbGUubG9nKCdyZXZlcnNlR2VvQ29kZScsbG5nTGF0KTtcclxuICBpZighdG9rZW4pe1xyXG4gICAgdG9rZW4gPSBtYXBib3hnbC5hY2Nlc3NUb2tlbjtcclxuICB9XHJcbiAgdmFyIHVybCA9ICdodHRwczovL2FwaS5tYXBib3guY29tL2dlb2NvZGluZy92NS9tYXBib3gucGxhY2VzLycrbG5nTGF0LmxuZysnJTJDJytsbmdMYXQubGF0KycuanNvbj9hY2Nlc3NfdG9rZW49Jyt0b2tlbisnJnR5cGVzPWFkZHJlc3MnO1xyXG5cclxuICAkLmdldCh1cmwsbG9nTG9jYXRpb24pO1xyXG59XHJcblxyXG5mdW5jdGlvbiBsb2dMb2NhdGlvbihkYXRhKXtcclxuICBjb25zb2xlLmxvZygnbG9nTG9jYXRpb24nLGRhdGEpO1xyXG4gIHZhciByZXNwb25zZSA9IGRhdGE7XHJcbiAgdmFyIHBsYWNlcyA9IGRhdGEuZmVhdHVyZXM7XHJcblxyXG4gIGlmKHBsYWNlcy5sZW5ndGggPiAwKXtcclxuICAgIHN0YXR1c01lc3NhZ2UocGxhY2VzWzBdLnBsYWNlX25hbWUpO1xyXG4gIH1cclxuICBjb25zb2xlLmxvZyhkYXRhKTtcclxufVxyXG5cclxuZnVuY3Rpb24gc3RhdHVzTWVzc2FnZShtZXNzYWdlLHR5cGUpe1xyXG4gIGNvbnNvbGUubG9nKCdzdGF0dXNNZXNzYWdlJyxtZXNzYWdlKTtcclxuICB2YXIgbXNnQ29udGFpbmVyID0gJCgnI3N0YXR1c21lc3NhZ2VzJyk7XHJcbiAgaWYoIXR5cGUpe1xyXG4gICAgdHlwZSA9ICdzdWNjZXNzJztcclxuICB9XHJcblxyXG4gIHZhciBtZXNzYWdlQm94ID0gJCgnPGRpdj48L2Rpdj4nLHtjbGFzczogJ2FsZXJ0IGFsZXJ0LScrdHlwZSsnIGZhZGUgc2hvdyd9KS5hdHRyKCdpZCcsRGF0ZS5ub3coKSk7XHJcbiAgdmFyIHRpdGxlID0gJCgnPHN0cm9uZz48L3N0cm9uZz4nKS50ZXh0KCdMb2NhdGlvbjogJykuYXBwZW5kVG8obWVzc2FnZUJveCk7XHJcbiAgbWVzc2FnZUJveC50ZXh0KG1lc3NhZ2UpO1xyXG5cclxuICBtZXNzYWdlQm94LmFwcGVuZFRvKG1zZ0NvbnRhaW5lcik7XHJcblxyXG4gIHdpbmRvdy5zZXRUaW1lb3V0KGZ1bmN0aW9uKCl7XHJcbiAgICBtZXNzYWdlQm94LmFsZXJ0KCdjbG9zZScpO1xyXG4gIH0sODQwMCk7XHJcbn1cclxuXHJcbi8qKlxyXG4gKiBDcmVhdGVkIGJ5IGpvIG9uIDExLzE5LzIwMTkuXHJcbiAqL1xyXG4iXSwic291cmNlUm9vdCI6IiJ9