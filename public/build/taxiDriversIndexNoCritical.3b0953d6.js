(window.webpackJsonp=window.webpackJsonp||[]).push([["taxiDriversIndexNoCritical"],{"+EmL":function(t,e,n){},BTho:function(t,e,n){"use strict";var i=n("HAuM"),o=n("hh1v"),r=[].slice,a={},s=function(t,e,n){if(!(e in a)){for(var i=[],o=0;o<e;o++)i[o]="a["+o+"]";a[e]=Function("C,a","return new C("+i.join(",")+")")}return a[e](t,n)};t.exports=Function.bind||function(t){var e=i(this),n=r.call(arguments,1),a=function(){var i=n.concat(r.call(arguments));return this instanceof a?s(e,i.length,i):e.apply(t,i)};return o(e.prototype)&&(a.prototype=e.prototype),a}},Yz6W:function(t,e,n){"use strict";n.r(e);n("+EmL"),n("QWBl"),n("wLYn"),n("eoL8"),n("FZtP");var i=n("Zlus"),o=n.n(i);function r(t,e){for(var n=0;n<e.length;n++){var i=e[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(t,i.key,i)}}var a=function(){function t(e){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),this.container=document.querySelector(e),this.listener=o()(this.container),this.items=document.querySelectorAll(e+" .gallery__item"),this.activePos=0,this.init(),this.arrows=this.addArrows(),this.arrowPrev=this.arrows[0],this.arrowNext=this.arrows[1],this.events()}var e,n,i;return e=t,(n=[{key:"events",value:function(){var t=this;this.arrowPrev.addEventListener("click",this.prev.bind(this)),this.arrowNext.addEventListener("click",this.next.bind(this)),this.container.addEventListener("swipe",(function(e){var n=e.detail.directions;n.left&&t.next(),n.right&&t.prev()}))}},{key:"init",value:function(){this.items.forEach((function(t,e){var n=100*e;t.setAttribute("style","transform: translateX("+n+"%);")}))}},{key:"addArrows",value:function(){var t=document.createElement("div");t.classList.add("gallery__arrow"),t.classList.add("gallery__arrow--prev");var e=document.createElement("div");return e.classList.add("gallery__arrow"),e.classList.add("gallery__arrow--next"),this.container.appendChild(t),this.container.appendChild(e),[t,e]}},{key:"next",value:function(){var t=this;this.activePos===this.items.length-1&&(this.activePos=-1),this.items.forEach((function(e,n){var i=100*(n-t.activePos-1);e.setAttribute("style","transform: translateX("+i+"%);")})),this.activePos+=1}},{key:"prev",value:function(){var t=this;0===this.activePos&&(this.activePos=this.items.length),this.items.forEach((function(e,n){var i=100*(n-t.activePos+1);e.setAttribute("style","transform: translateX("+i+"%);")})),this.activePos-=1}}])&&r(e.prototype,n),i&&r(e,i),t}();function s(t,e){for(var n=0;n<e.length;n++){var i=e[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(t,i.key,i)}}var l=function(){function t(){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t),this.questions_titles=document.querySelectorAll(".question__title"),this.events()}var e,n,i;return e=t,(n=[{key:"events",value:function(){var t=this;this.questions_titles.forEach((function(e){e.addEventListener("click",t.expand)}))}},{key:"expand",value:function(t){var e=t.target.parentNode.parentNode.children[1];e.classList.toggle("question__answer--active"),e.style.maxHeight?e.style.maxHeight=null:e.style.maxHeight=e.scrollHeight+"px"}}])&&s(e.prototype,n),i&&s(e,i),t}();new a(".reviews__content__gallery"),new l},Zlus:function(t,e,n){"use strict";var i,o=Object.assign||function(t){for(var e,n=1;n<arguments.length;n++)for(var i in e=arguments[n])Object.prototype.hasOwnProperty.call(e,i)&&(t[i]=e[i]);return t},r=function(t,e){if(t){"undefined"!=typeof window&&function(){function t(t,e){e=e||{bubbles:!1,cancelable:!1,detail:void 0};var n=document.createEvent("CustomEvent");return n.initCustomEvent(t,e.bubbles,e.cancelable,e.detail),n}"function"!=typeof window.CustomEvent&&(t.prototype=window.Event.prototype,window.CustomEvent=t)}(),e||(e={}),e=o({},{minHorizontal:10,minVertical:10,deltaHorizontal:3,deltaVertical:5,preventScroll:!1,lockAxis:!0,touch:!0,mouse:!0},e);var n=[],i=!1,r=function(){i=!0},a=function(t){i=!1,l(t)},s=function(t){i&&(t.changedTouches=[{clientX:t.clientX,clientY:t.clientY}],c(t))};e.mouse&&(t.addEventListener("mousedown",r),t.addEventListener("mouseup",a),t.addEventListener("mousemove",s));var l=function(i){var r=Math.abs,a=Math.max,s=Math.min;if(n.length){for(var l="function"==typeof TouchEvent&&i instanceof TouchEvent,c=[],u=[],v={top:!1,right:!1,bottom:!1,left:!1},h=0;h<n.length;h++)c.push(n[h].x),u.push(n[h].y);var d=c[0],f=c[c.length-1],p=u[0],m=u[u.length-1],w={x:[d,f],y:[p,m]};if(1<n.length){var y={detail:o({touch:l},w)},g=new CustomEvent("swiperelease",y);t.dispatchEvent(g)}var E=c[0]-c[c.length-1],b="none";b=0<E?"left":"right";var x=s.apply(Math,c),L=a.apply(Math,c);if(r(E)>=e.minHorizontal&&("left"==b?r(x-c[c.length-1])<=e.deltaHorizontal&&(v.left=!0):"right"==b&&(r(L-c[c.length-1])<=e.deltaHorizontal&&(v.right=!0))),b="none",b=0<(E=u[0]-u[u.length-1])?"top":"bottom",x=s.apply(Math,u),L=a.apply(Math,u),r(E)>=e.minVertical&&("top"==b?r(x-u[u.length-1])<=e.deltaVertical&&(v.top=!0):"bottom"==b&&(r(L-u[u.length-1])<=e.deltaVertical&&(v.bottom=!0))),n=[],v.top||v.right||v.bottom||v.left){e.lockAxis&&((v.left||v.right)&&r(d-f)>r(p-m)?v.top=v.bottom=!1:(v.top||v.bottom)&&r(d-f)<r(p-m)&&(v.left=v.right=!1));var _={detail:o({directions:v,touch:l},w)},P=new CustomEvent("swipe",_);t.dispatchEvent(P)}else{var k=new CustomEvent("swipecancel",{detail:o({touch:l},w)});t.dispatchEvent(k)}}},c=function(i){e.preventScroll&&i.preventDefault();var o=i.changedTouches[0];if(n.push({x:o.clientX,y:o.clientY}),1<n.length){var r={detail:{x:[n[0].x,n[n.length-1].x],y:[n[0].y,n[n.length-1].y],touch:"function"==typeof TouchEvent&&i instanceof TouchEvent}},a=new CustomEvent("swiping",r);t.dispatchEvent(a)}},u=!1;try{var v=Object.defineProperty({},"passive",{get:function(){u={passive:!e.preventScroll}}});window.addEventListener("testPassive",null,v),window.removeEventListener("testPassive",null,v)}catch(t){}return e.touch&&(t.addEventListener("touchmove",c,u),t.addEventListener("touchend",l)),{off:function(){t.removeEventListener("touchmove",c,u),t.removeEventListener("touchend",l),t.removeEventListener("mousedown",r),t.removeEventListener("mouseup",a),t.removeEventListener("mousemove",s)}}}};void 0!==t.exports?(t.exports=r,t.exports.default=r):void 0===(i=function(){return r}.apply(e,[]))||(t.exports=i)},wLYn:function(t,e,n){n("I+eb")({target:"Function",proto:!0},{bind:n("BTho")})}},[["Yz6W","runtime",0]]]);