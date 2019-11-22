(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["dash-eadmin-place"],{

/***/ "./assets/dash/scripts/mapBox/index.js":
/*!*********************************************!*\
  !*** ./assets/dash/scripts/mapBox/index.js ***!
  \*********************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_array_join__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.join */ "./node_modules/core-js/modules/es.array.join.js");
/* harmony import */ var core_js_modules_es_array_join__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_join__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.date.to-string */ "./node_modules/core-js/modules/es.date.to-string.js");
/* harmony import */ var core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_date_to_string__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/es.object.to-string */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_es_regexp_exec__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/es.regexp.exec */ "./node_modules/core-js/modules/es.regexp.exec.js");
/* harmony import */ var core_js_modules_es_regexp_exec__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_exec__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/es.regexp.to-string */ "./node_modules/core-js/modules/es.regexp.to-string.js");
/* harmony import */ var core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_regexp_to_string__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var core_js_modules_es_string_split__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! core-js/modules/es.string.split */ "./node_modules/core-js/modules/es.string.split.js");
/* harmony import */ var core_js_modules_es_string_split__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_string_split__WEBPACK_IMPORTED_MODULE_5__);
!(function webpackMissingModule() { var e = new Error("Cannot find module 'selectPointMap'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());








setup = function setup(element) {
  console.log(element);
  var container = document.querySelector('.locationString.MapBox.location');
  var prevValue = element.value.split(',');
  if (prevValue.center.isArray) this.setValue(prevValue.center.join(', ') + ";" + prevValue.zoom);else this.setValue(prevValue.center + ";" + prevValue.zoom);

  if (container.querySelectorAll('#selectMap').length === 0) {
    var newMap = document.createElement('div');
    newMap.setAttribute('id', 'selectMap');
    newMap.setAttribute('style', 'height: 50vh; width:100%');
    newMap.setAttribute('id', 'selectMap');
    container.insertBefore(newMap, container.firstChild);
    map = new SelectPointMap('selectMap');
  }

  map.setFiredOnLoad(function () {
    map.setGeoJson(prevValue.center);
    map.setCenterAndZoomMap(prevValue.center, prevValue.zoom);
  });
};

onOk = function onOk() {
  // Create a new <span> element.
  var dialog = this;
  var elm = editor.document.createElement('span');
  var name = "\"name\":";
  if (dialog.getValueOf('tab-basic', 'name') === '') name += "\"\"";else name += "\"" + dialog.getValueOf('tab-basic', 'name') + "\"";
  var centerZoom = dialog.getValueOf('tab-basic', 'center_zoom').split(';');
  var center = "\"center\":[" + centerZoom[0] + ']';
  var zoom = "\"zoom\":" + centerZoom[1];
  var data_map = [center, zoom, name];
  data_map = '{' + data_map.toString() + '}';
  elm.setAttribute('data-map', data_map);
  elm.setAttribute('class', 'MapMarker');
  elm.setText("[MM]");
  editor.insertElement(elm);
}, // Invoked when the dialog is loaded.
onShow = function onShow() {
  this.move(this.getPosition().x, 0); // Top center
  // Get the selection from the editor.

  var selection = editor.getSelection(); // Get the element at the start of the selection.

  var element = selection.getStartElement();
  element = editor.restoreRealElement(element); // Create a new <span> element if it does not exist.

  if (!element || element.getName() != 'span') {
    element = editor.document.createElement('span');
    var center = "\"center\":[-79.756514, 22.028145]";
    var zoom = "\"zoom\":5";
    var data_map = [center, zoom];
    data_map = '{' + data_map.toString() + '}';
    element.setAttribute('data-map', data_map); // Flag the insertion mode for later use.

    this.insertMode = true;
  } else this.insertMode = false; // Store the reference to the <abbr> element in an internal property, for later use.


  this.element = element; // Invoke the setup methods of all dialog window elements, so they can load the element attributes.

  this.setupContent(this.element['$']);
};
/**
 * Created by jo on 11/19/2019.
 */

/***/ })

},[["./assets/dash/scripts/mapBox/index.js","runtime","vendors~dash~dash-eadmin-place","vendors~dash-eadmin-place"]]]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvZGFzaC9zY3JpcHRzL21hcEJveC9pbmRleC5qcyJdLCJuYW1lcyI6WyJzZXR1cCIsImVsZW1lbnQiLCJjb25zb2xlIiwibG9nIiwiY29udGFpbmVyIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwicHJldlZhbHVlIiwidmFsdWUiLCJzcGxpdCIsImNlbnRlciIsImlzQXJyYXkiLCJzZXRWYWx1ZSIsImpvaW4iLCJ6b29tIiwicXVlcnlTZWxlY3RvckFsbCIsImxlbmd0aCIsIm5ld01hcCIsImNyZWF0ZUVsZW1lbnQiLCJzZXRBdHRyaWJ1dGUiLCJpbnNlcnRCZWZvcmUiLCJmaXJzdENoaWxkIiwibWFwIiwiU2VsZWN0UG9pbnRNYXAiLCJzZXRGaXJlZE9uTG9hZCIsInNldEdlb0pzb24iLCJzZXRDZW50ZXJBbmRab29tTWFwIiwib25PayIsImRpYWxvZyIsImVsbSIsImVkaXRvciIsIm5hbWUiLCJnZXRWYWx1ZU9mIiwiY2VudGVyWm9vbSIsImRhdGFfbWFwIiwidG9TdHJpbmciLCJzZXRUZXh0IiwiaW5zZXJ0RWxlbWVudCIsIm9uU2hvdyIsIm1vdmUiLCJnZXRQb3NpdGlvbiIsIngiLCJzZWxlY3Rpb24iLCJnZXRTZWxlY3Rpb24iLCJnZXRTdGFydEVsZW1lbnQiLCJyZXN0b3JlUmVhbEVsZW1lbnQiLCJnZXROYW1lIiwiaW5zZXJ0TW9kZSIsInNldHVwQ29udGVudCJdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7O0FBQUE7O0FBR0lBLEtBQUssR0FBRyxlQUFVQyxPQUFWLEVBQW9CO0FBQ3hCQyxTQUFPLENBQUNDLEdBQVIsQ0FBWUYsT0FBWjtBQUNBLE1BQUlHLFNBQVMsR0FBR0MsUUFBUSxDQUFDQyxhQUFULENBQXVCLGlDQUF2QixDQUFoQjtBQUVBLE1BQUlDLFNBQVMsR0FBR04sT0FBTyxDQUFDTyxLQUFSLENBQWNDLEtBQWQsQ0FBb0IsR0FBcEIsQ0FBaEI7QUFDQSxNQUFJ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TSxDQUFDZSxrQkFBUCxDQUEwQjVDLE9BQTFCLENBQVYsQ0FQZ0IsQ0FTaEI7O0FBQ0EsTUFBSyxDQUFDQSxPQUFELElBQVlBLE9BQU8sQ0FBQzZDLE9BQVIsTUFBcUIsTUFBdEMsRUFBK0M7QUFFM0M3QyxXQUFPLEdBQUc2QixNQUFNLENBQUN6QixRQUFQLENBQWdCYSxhQUFoQixDQUErQixNQUEvQixDQUFWO0FBQ0EsUUFBSVIsTUFBTSxHQUFHLG9DQUFiO0FBQ0EsUUFBSUksSUFBSSxHQUFHLFlBQVg7QUFFQSxRQUFJb0IsUUFBUSxHQUFHLENBQUN4QixNQUFELEVBQVNJLElBQVQsQ0FBZjtBQUNBb0IsWUFBUSxHQUFHLE1BQUlBLFFBQVEsQ0FBQ0MsUUFBVCxFQUFKLEdBQXdCLEdBQW5DO0FBRUFsQyxXQUFPLENBQUNrQixZQUFSLENBQXFCLFVBQXJCLEVBQWlDZSxRQUFqQyxFQVQyQyxDQVUzQzs7QUFDQSxTQUFLYSxVQUFMLEdBQWtCLElBQWxCO0FBQ0gsR0FaRCxNQWNJLEtBQUtBLFVBQUwsR0FBa0IsS0FBbEIsQ0F4QlksQ0EwQmhCOzs7QUFDQSxPQUFLOUMsT0FBTCxHQUFlQSxPQUFmLENBM0JnQixDQTZCaEI7O0FBQ0EsT0FBSytDLFlBQUwsQ0FBa0IsS0FBSy9DLE9BQUwsQ0FBYSxHQUFiLENBQWxCO0FBQ0gsQ0F4REQ7QUF5REEiLCJmaWxlIjoiZGFzaC1lYWRtaW4tcGxhY2UuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQgJ3NlbGVjdFBvaW50TWFwJztcclxuXHJcblxyXG4gICAgc2V0dXAgPSBmdW5jdGlvbiggZWxlbWVudCApIHtcclxuICAgICAgICBjb25zb2xlLmxvZyhlbGVtZW50KTtcclxuICAgICAgICBsZXQgY29udGFpbmVyID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcignLmxvY2F0aW9uU3RyaW5nLk1hcEJveC5sb2NhdGlvbicpO1xyXG5cclxuICAgICAgICBsZXQgcHJldlZhbHVlID0gZWxlbWVudC52YWx1ZS5zcGxpdCgnLCcpO1xyXG4gICAgICAgIGlmIChwcmV2VmFsdWUuY2VudGVyLmlzQXJyYXkpXHJcbiAgICAgICAgICAgIHRoaXMuc2V0VmFsdWUocHJldlZhbHVlLmNlbnRlci5qb2luKCcsICcpK1wiO1wiK3ByZXZWYWx1ZS56b29tKTtcclxuICAgICAgICBlbHNlXHJcbiAgICAgICAgICAgIHRoaXMuc2V0VmFsdWUocHJldlZhbHVlLmNlbnRlcitcIjtcIitwcmV2VmFsdWUuem9vbSk7XHJcblxyXG4gICAgICAgIGlmIChjb250YWluZXIucXVlcnlTZWxlY3RvckFsbCgnI3NlbGVjdE1hcCcpLmxlbmd0aD09PTApIHtcclxuICAgICAgICAgICAgbGV0IG5ld01hcCA9IGRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ2RpdicpO1xyXG4gICAgICAgICAgICBuZXdNYXAuc2V0QXR0cmlidXRlKCdpZCcsICdzZWxlY3RNYXAnKTtcclxuICAgICAgICAgICAgbmV3TWFwLnNldEF0dHJpYnV0ZSgnc3R5bGUnLCAnaGVpZ2h0OiA1MHZoOyB3aWR0aDoxMDAlJyk7XHJcbiAgICAgICAgICAgIG5ld01hcC5zZXRBdHRyaWJ1dGUoJ2lkJywgJ3NlbGVjdE1hcCcpO1xyXG4gICAgICAgICAgICBjb250YWluZXIuaW5zZXJ0QmVmb3JlKG5ld01hcCwgY29udGFpbmVyLmZpcnN0Q2hpbGQpO1xyXG4gICAgICAgICAgICBtYXAgPSBuZXcgU2VsZWN0UG9pbnRNYXAoJ3NlbGVjdE1hcCcpO1xyXG4gICAgICAgIH1cclxuXHJcbiAgICAgICAgbWFwLnNldEZpcmVkT25Mb2FkKCgpPT57XHJcbiAgICAgICAgICAgIG1hcC5zZXRHZW9Kc29uKHByZXZWYWx1ZS5jZW50ZXIpO1xyXG4gICAgICAgIG1hcC5zZXRDZW50ZXJBbmRab29tTWFwKHByZXZWYWx1ZS5jZW50ZXIsIHByZXZWYWx1ZS56b29tKTtcclxuICAgIH0pO1xyXG59XHJcblxyXG5vbk9rID0gZnVuY3Rpb24oKSB7XHJcbiAgICAvLyBDcmVhdGUgYSBuZXcgPHNwYW4+IGVsZW1lbnQuXHJcblxyXG4gICAgbGV0IGRpYWxvZyA9IHRoaXM7XHJcbiAgICBsZXQgZWxtID0gZWRpdG9yLmRvY3VtZW50LmNyZWF0ZUVsZW1lbnQoJ3NwYW4nKTtcclxuXHJcbiAgICBsZXQgbmFtZSA9IFwiXFxcIm5hbWVcXFwiOlwiO1xyXG4gICAgaWYgKGRpYWxvZy5nZXRWYWx1ZU9mKCd0YWItYmFzaWMnLCAnbmFtZScpPT09JycpXHJcbiAgICAgICAgbmFtZSs9XCJcXFwiXFxcIlwiO1xyXG4gICAgZWxzZVxyXG4gICAgICAgIG5hbWUrPVwiXFxcIlwiK2RpYWxvZy5nZXRWYWx1ZU9mKCd0YWItYmFzaWMnLCAnbmFtZScpK1wiXFxcIlwiO1xyXG5cclxuICAgIGxldCBjZW50ZXJab29tID0gZGlhbG9nLmdldFZhbHVlT2YoJ3RhYi1iYXNpYycsICdjZW50ZXJfem9vbScpLnNwbGl0KCc7Jyk7XHJcbiAgICBsZXQgY2VudGVyID0gXCJcXFwiY2VudGVyXFxcIjpbXCIrY2VudGVyWm9vbVswXSsnXSc7XHJcbiAgICBsZXQgem9vbSA9IFwiXFxcInpvb21cXFwiOlwiK2NlbnRlclpvb21bMV07XHJcblxyXG4gICAgbGV0IGRhdGFfbWFwID0gW2NlbnRlciwgem9vbSwgbmFtZV07XHJcbiAgICBkYXRhX21hcCA9ICd7JytkYXRhX21hcC50b1N0cmluZygpKyd9JztcclxuXHJcbiAgICBlbG0uc2V0QXR0cmlidXRlKCdkYXRhLW1hcCcsIGRhdGFfbWFwKTtcclxuICAgIGVsbS5zZXRBdHRyaWJ1dGUoICdjbGFzcycsJ01hcE1hcmtlcicpO1xyXG4gICAgZWxtLnNldFRleHQoIFwiW01NXVwiKTtcclxuICAgIGVkaXRvci5pbnNlcnRFbGVtZW50KCBlbG0gKTtcclxufSxcclxuLy8gSW52b2tlZCB3aGVuIHRoZSBkaWFsb2cgaXMgbG9hZGVkLlxyXG5vblNob3cgPSBmdW5jdGlvbigpIHtcclxuICAgIHRoaXMubW92ZSh0aGlzLmdldFBvc2l0aW9uKCkueCwgMCk7IC8vIFRvcCBjZW50ZXJcclxuICAgIC8vIEdldCB0aGUgc2VsZWN0aW9uIGZyb20gdGhlIGVkaXRvci5cclxuICAgIGxldCBzZWxlY3Rpb24gPSBlZGl0b3IuZ2V0U2VsZWN0aW9uKCk7XHJcblxyXG4gICAgLy8gR2V0IHRoZSBlbGVtZW50IGF0IHRoZSBzdGFydCBvZiB0aGUgc2VsZWN0aW9uLlxyXG4gICAgbGV0IGVsZW1lbnQgPSBzZWxlY3Rpb24uZ2V0U3RhcnRFbGVtZW50KCk7XHJcbiAgICBlbGVtZW50ID0gZWRpdG9yLnJlc3RvcmVSZWFsRWxlbWVudChlbGVtZW50KTtcclxuXHJcbiAgICAvLyBDcmVhdGUgYSBuZXcgPHNwYW4+IGVsZW1lbnQgaWYgaXQgZG9lcyBub3QgZXhpc3QuXHJcbiAgICBpZiAoICFlbGVtZW50IHx8IGVsZW1lbnQuZ2V0TmFtZSgpICE9ICdzcGFuJyApIHtcclxuXHJcbiAgICAgICAgZWxlbWVudCA9IGVkaXRvci5kb2N1bWVudC5jcmVhdGVFbGVtZW50KCAnc3BhbicgKTtcclxuICAgICAgICBsZXQgY2VudGVyID0gXCJcXFwiY2VudGVyXFxcIjpbLTc5Ljc1NjUxNCwgMjIuMDI4MTQ1XVwiO1xyXG4gICAgICAgIGxldCB6b29tID0gXCJcXFwiem9vbVxcXCI6NVwiO1xyXG5cclxuICAgICAgICBsZXQgZGF0YV9tYXAgPSBbY2VudGVyLCB6b29tXTtcclxuICAgICAgICBkYXRhX21hcCA9ICd7JytkYXRhX21hcC50b1N0cmluZygpKyd9JztcclxuXHJcbiAgICAgICAgZWxlbWVudC5zZXRBdHRyaWJ1dGUoJ2RhdGEtbWFwJywgZGF0YV9tYXApO1xyXG4gICAgICAgIC8vIEZsYWcgdGhlIGluc2VydGlvbiBtb2RlIGZvciBsYXRlciB1c2UuXHJcbiAgICAgICAgdGhpcy5pbnNlcnRNb2RlID0gdHJ1ZTtcclxuICAgIH1cclxuICAgIGVsc2VcclxuICAgICAgICB0aGlzLmluc2VydE1vZGUgPSBmYWxzZTtcclxuXHJcbiAgICAvLyBTdG9yZSB0aGUgcmVmZXJlbmNlIHRvIHRoZSA8YWJicj4gZWxlbWVudCBpbiBhbiBpbnRlcm5hbCBwcm9wZXJ0eSwgZm9yIGxhdGVyIHVzZS5cclxuICAgIHRoaXMuZWxlbWVudCA9IGVsZW1lbnQ7XHJcblxyXG4gICAgLy8gSW52b2tlIHRoZSBzZXR1cCBtZXRob2RzIG9mIGFsbCBkaWFsb2cgd2luZG93IGVsZW1lbnRzLCBzbyB0aGV5IGNhbiBsb2FkIHRoZSBlbGVtZW50IGF0dHJpYnV0ZXMuXHJcbiAgICB0aGlzLnNldHVwQ29udGVudCh0aGlzLmVsZW1lbnRbJyQnXSk7XHJcbn07XHJcbi8qKlxyXG4gKiBDcmVhdGVkIGJ5IGpvIG9uIDExLzE5LzIwMTkuXHJcbiAqL1xyXG4iXSwic291cmNlUm9vdCI6IiJ9