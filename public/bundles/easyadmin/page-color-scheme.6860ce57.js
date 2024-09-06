(()=>{function e(t){return e="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},e(t)}function t(e,t){for(var r=0;r<t.length;r++){var a=t[r];a.enumerable=a.enumerable||!1,a.configurable=!0,"value"in a&&(a.writable=!0),Object.defineProperty(e,o(a.key),a)}}function o(t){var o=function(t,o){if("object"!=e(t)||!t)return t;var r=t[Symbol.toPrimitive];if(void 0!==r){var a=r.call(t,o||"default");if("object"!=e(a))return a;throw new TypeError("@@toPrimitive must return a primitive value.")}return("string"===o?String:Number)(t)}(t,"string");return"symbol"==e(o)?o:String(o)}function r(e,t){if(t.has(e))throw new TypeError("Cannot initialize the same private elements twice on an object")}function a(e,t,o){if(!t.has(e))throw new TypeError("attempted to get private field on non-instance");return o}function n(e,t){return function(e,t){if(t.get)return t.get.call(e);return t.value}(e,i(e,t,"get"))}function c(e,t,o){return function(e,t,o){if(t.set)t.set.call(e,o);else{if(!t.writable)throw new TypeError("attempted to set read only private field");t.value=o}}(e,i(e,t,"set"),o),o}function i(e,t,o){if(!t.has(e))throw new TypeError("attempted to "+o+" private field on non-instance");return t.get(e)}var l=new WeakMap,u=new WeakSet;function s(e){var t=arguments.length>1&&void 0!==arguments[1]&&arguments[1];if("false"!==document.body.getAttribute("data-ea-dark-scheme-is-enabled")){var o="auto"===e?matchMedia("(prefers-color-scheme: dark)").matches?"dark":"light":e;document.body.classList.remove("ea-light-scheme","ea-dark-scheme"),document.body.classList.add("light"===o?"ea-light-scheme":"ea-dark-scheme"),!0===t&&localStorage.setItem(n(this,l),e),document.body.style.colorScheme=o,document.body.setAttribute("data-bs-theme","light"===o?"light":"dark")}}var d=new(function(){"use strict";function e(){var t,o;!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),r(t=this,o=u),o.add(t),function(e,t,o){r(e,t),t.set(e,o)}(this,l,{writable:!0,value:void 0}),c(this,l,"ea/colorScheme")}var o,i,d;return o=e,(i=[{key:"updateColorScheme",value:function(){var e=document.body.getAttribute("data-ea-default-color-scheme"),t=localStorage.getItem(n(this,l))||e||"auto";a(this,u,s).call(this,t)}},{key:"createColorSchemeSelector",value:function(){var e=this;if(null!==document.querySelector(".dropdown-settings a[data-ea-color-scheme]")){var t=document.querySelectorAll(".dropdown-settings"),o=localStorage.getItem(n(this,l))||"auto";t.forEach((function(t){var r=t.querySelectorAll("a.dropdown-appearance-item[data-ea-color-scheme]"),n=t.querySelector('a.dropdown-appearance-item[data-ea-color-scheme="'.concat(o,'"]'));r.forEach((function(e){e.classList.remove("active")})),n.classList.add("active"),r.forEach((function(t){t.addEventListener("click",(function(){var o=t.getAttribute("data-ea-color-scheme");a(e,u,s).call(e,o,!0);var r=document.querySelectorAll("a.dropdown-appearance-item[data-ea-color-scheme]"),n=document.querySelectorAll('a.dropdown-appearance-item[data-ea-color-scheme="'.concat(o,'"]'));r.forEach((function(e){e.classList.remove("active")})),n.forEach((function(e){e.classList.add("active")}))}))}))}))}}}])&&t(o.prototype,i),d&&t(o,d),Object.defineProperty(o,"prototype",{writable:!1}),e}());d.updateColorScheme(),window.matchMedia("(prefers-color-scheme: dark)").addEventListener("change",(function(e){d.updateColorScheme()})),document.addEventListener("DOMContentLoaded",(function(){d.createColorSchemeSelector()}))})();