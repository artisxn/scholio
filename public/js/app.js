!function(t){function e(i){if(n[i])return n[i].exports;var r=n[i]={i:i,l:!1,exports:{}};return t[i].call(r.exports,r,r.exports,e),r.l=!0,r.exports}var n={};return e.m=t,e.c=n,e.i=function(t){return t},e.d=function(t,n,i){e.o(t,n)||Object.defineProperty(t,n,{configurable:!1,enumerable:!0,get:i})},e.n=function(t){var n=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(n,"a",n),n},e.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},e.p="./",e(e.s=87)}([function(t,e){t.exports=function(t,e,n,i){var r,o=t=t||{},a=typeof t.default;"object"!==a&&"function"!==a||(r=t,o=t.default);var s="function"==typeof o?o.options:o;if(e&&(s.render=e.render,s.staticRenderFns=e.staticRenderFns),n&&(s._scopeId=n),i){var l=s.computed||(s.computed={});Object.keys(i).forEach(function(t){var e=i[t];l[t]=function(){return e}})}return{esModule:r,exports:o,options:s}}},function(t,e,n){"use strict";function i(t){return"[object Array]"===C.call(t)}function r(t){return"[object ArrayBuffer]"===C.call(t)}function o(t){return"undefined"!=typeof FormData&&t instanceof FormData}function a(t){var e;return e="undefined"!=typeof ArrayBuffer&&ArrayBuffer.isView?ArrayBuffer.isView(t):t&&t.buffer&&t.buffer instanceof ArrayBuffer}function s(t){return"string"==typeof t}function l(t){return"number"==typeof t}function c(t){return"undefined"==typeof t}function u(t){return null!==t&&"object"==typeof t}function d(t){return"[object Date]"===C.call(t)}function f(t){return"[object File]"===C.call(t)}function p(t){return"[object Blob]"===C.call(t)}function h(t){return"[object Function]"===C.call(t)}function v(t){return u(t)&&h(t.pipe)}function m(t){return"undefined"!=typeof URLSearchParams&&t instanceof URLSearchParams}function g(t){return t.replace(/^\s*/,"").replace(/\s*$/,"")}function y(){return"undefined"!=typeof window&&"undefined"!=typeof document&&"function"==typeof document.createElement}function _(t,e){if(null!==t&&"undefined"!=typeof t)if("object"==typeof t||i(t)||(t=[t]),i(t))for(var n=0,r=t.length;n<r;n++)e.call(null,t[n],n,t);else for(var o in t)Object.prototype.hasOwnProperty.call(t,o)&&e.call(null,t[o],o,t)}function b(){function t(t,n){"object"==typeof e[n]&&"object"==typeof t?e[n]=b(e[n],t):e[n]=t}for(var e={},n=0,i=arguments.length;n<i;n++)_(arguments[n],t);return e}function x(t,e,n){return _(e,function(e,i){n&&"function"==typeof e?t[i]=w(e,n):t[i]=e}),t}var w=n(10),C=Object.prototype.toString;t.exports={isArray:i,isArrayBuffer:r,isFormData:o,isArrayBufferView:a,isString:s,isNumber:l,isObject:u,isUndefined:c,isDate:d,isFile:f,isBlob:p,isFunction:h,isStream:v,isURLSearchParams:m,isStandardBrowserEnv:y,forEach:_,merge:b,extend:x,trim:g}},function(t,e){t.exports=function(){var t=[];return t.toString=function(){for(var t=[],e=0;e<this.length;e++){var n=this[e];n[2]?t.push("@media "+n[2]+"{"+n[1]+"}"):t.push(n[1])}return t.join("")},t.i=function(e,n){"string"==typeof e&&(e=[[null,e,""]]);for(var i={},r=0;r<this.length;r++){var o=this[r][0];"number"==typeof o&&(i[o]=!0)}for(r=0;r<e.length;r++){var a=e[r];"number"==typeof a[0]&&i[a[0]]||(n&&!a[2]?a[2]=n:n&&(a[2]="("+a[2]+") and ("+n+")"),t.push(a))}},t}},function(t,e){function n(t,e){for(var n=0;n<t.length;n++){var i=t[n],r=u[i.id];if(r){r.refs++;for(var o=0;o<r.parts.length;o++)r.parts[o](i.parts[o]);for(;o<i.parts.length;o++)r.parts.push(s(i.parts[o],e))}else{for(var a=[],o=0;o<i.parts.length;o++)a.push(s(i.parts[o],e));u[i.id]={id:i.id,refs:1,parts:a}}}}function i(t){for(var e=[],n={},i=0;i<t.length;i++){var r=t[i],o=r[0],a=r[1],s=r[2],l=r[3],c={css:a,media:s,sourceMap:l};n[o]?n[o].parts.push(c):e.push(n[o]={id:o,parts:[c]})}return e}function r(t,e){var n=p(),i=m[m.length-1];if("top"===t.insertAt)i?i.nextSibling?n.insertBefore(e,i.nextSibling):n.appendChild(e):n.insertBefore(e,n.firstChild),m.push(e);else{if("bottom"!==t.insertAt)throw new Error("Invalid value for parameter 'insertAt'. Must be 'top' or 'bottom'.");n.appendChild(e)}}function o(t){t.parentNode.removeChild(t);var e=m.indexOf(t);e>=0&&m.splice(e,1)}function a(t){var e=document.createElement("style");return e.type="text/css",r(t,e),e}function s(t,e){var n,i,r;if(e.singleton){var s=v++;n=h||(h=a(e)),i=l.bind(null,n,s,!1),r=l.bind(null,n,s,!0)}else n=a(e),i=c.bind(null,n),r=function(){o(n)};return i(t),function(e){if(e){if(e.css===t.css&&e.media===t.media&&e.sourceMap===t.sourceMap)return;i(t=e)}else r()}}function l(t,e,n,i){var r=n?"":i.css;if(t.styleSheet)t.styleSheet.cssText=g(e,r);else{var o=document.createTextNode(r),a=t.childNodes;a[e]&&t.removeChild(a[e]),a.length?t.insertBefore(o,a[e]):t.appendChild(o)}}function c(t,e){var n=e.css,i=e.media,r=e.sourceMap;if(i&&t.setAttribute("media",i),r&&(n+="\n/*# sourceURL="+r.sources[0]+" */",n+="\n/*# sourceMappingURL=data:application/json;base64,"+btoa(unescape(encodeURIComponent(JSON.stringify(r))))+" */"),t.styleSheet)t.styleSheet.cssText=n;else{for(;t.firstChild;)t.removeChild(t.firstChild);t.appendChild(document.createTextNode(n))}}var u={},d=function(t){var e;return function(){return"undefined"==typeof e&&(e=t.apply(this,arguments)),e}},f=d(function(){return/msie [6-9]\b/.test(window.navigator.userAgent.toLowerCase())}),p=d(function(){return document.head||document.getElementsByTagName("head")[0]}),h=null,v=0,m=[];t.exports=function(t,e){if("undefined"!=typeof DEBUG&&DEBUG&&"object"!=typeof document)throw new Error("The style-loader cannot be used in a non-browser environment");e=e||{},"undefined"==typeof e.singleton&&(e.singleton=f()),"undefined"==typeof e.insertAt&&(e.insertAt="bottom");var r=i(t);return n(r,e),function(t){for(var o=[],a=0;a<r.length;a++){var s=r[a],l=u[s.id];l.refs--,o.push(l)}if(t){var c=i(t);n(c,e)}for(var a=0;a<o.length;a++){var l=o[a];if(0===l.refs){for(var d=0;d<l.parts.length;d++)l.parts[d]();delete u[l.id]}}}};var g=function(){var t=[];return function(e,n){return t[e]=n,t.filter(Boolean).join("\n")}}()},function(t,e,n){var i,r;/*!
 * jQuery JavaScript Library v3.1.1
 * https://jquery.com/
 *
 * Includes Sizzle.js
 * https://sizzlejs.com/
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license
 * https://jquery.org/license
 *
 * Date: 2016-09-22T22:30Z
 */
!function(e,n){"use strict";"object"==typeof t&&"object"==typeof t.exports?t.exports=e.document?n(e,!0):function(t){if(!t.document)throw new Error("jQuery requires a window with a document");return n(t)}:n(e)}("undefined"!=typeof window?window:this,function(n,o){"use strict";function a(t,e){e=e||ot;var n=e.createElement("script");n.text=t,e.head.appendChild(n).parentNode.removeChild(n)}function s(t){var e=!!t&&"length"in t&&t.length,n=yt.type(t);return"function"!==n&&!yt.isWindow(t)&&("array"===n||0===e||"number"==typeof e&&e>0&&e-1 in t)}function l(t,e,n){return yt.isFunction(e)?yt.grep(t,function(t,i){return!!e.call(t,i,t)!==n}):e.nodeType?yt.grep(t,function(t){return t===e!==n}):"string"!=typeof e?yt.grep(t,function(t){return ut.call(e,t)>-1!==n}):At.test(e)?yt.filter(e,t,n):(e=yt.filter(e,t),yt.grep(t,function(t){return ut.call(e,t)>-1!==n&&1===t.nodeType}))}function c(t,e){for(;(t=t[e])&&1!==t.nodeType;);return t}function u(t){var e={};return yt.each(t.match(It)||[],function(t,n){e[n]=!0}),e}function d(t){return t}function f(t){throw t}function p(t,e,n){var i;try{t&&yt.isFunction(i=t.promise)?i.call(t).done(e).fail(n):t&&yt.isFunction(i=t.then)?i.call(t,e,n):e.call(void 0,t)}catch(t){n.call(void 0,t)}}function h(){ot.removeEventListener("DOMContentLoaded",h),n.removeEventListener("load",h),yt.ready()}function v(){this.expando=yt.expando+v.uid++}function m(t){return"true"===t||"false"!==t&&("null"===t?null:t===+t+""?+t:qt.test(t)?JSON.parse(t):t)}function g(t,e,n){var i;if(void 0===n&&1===t.nodeType)if(i="data-"+e.replace(Ut,"-$&").toLowerCase(),n=t.getAttribute(i),"string"==typeof n){try{n=m(n)}catch(t){}Ht.set(t,e,n)}else n=void 0;return n}function y(t,e,n,i){var r,o=1,a=20,s=i?function(){return i.cur()}:function(){return yt.css(t,e,"")},l=s(),c=n&&n[3]||(yt.cssNumber[e]?"":"px"),u=(yt.cssNumber[e]||"px"!==c&&+l)&&Vt.exec(yt.css(t,e));if(u&&u[3]!==c){c=c||u[3],n=n||[],u=+l||1;do o=o||".5",u/=o,yt.style(t,e,u+c);while(o!==(o=s()/l)&&1!==o&&--a)}return n&&(u=+u||+l||0,r=n[1]?u+(n[1]+1)*n[2]:+n[2],i&&(i.unit=c,i.start=u,i.end=r)),r}function _(t){var e,n=t.ownerDocument,i=t.nodeName,r=Kt[i];return r?r:(e=n.body.appendChild(n.createElement(i)),r=yt.css(e,"display"),e.parentNode.removeChild(e),"none"===r&&(r="block"),Kt[i]=r,r)}function b(t,e){for(var n,i,r=[],o=0,a=t.length;o<a;o++)i=t[o],i.style&&(n=i.style.display,e?("none"===n&&(r[o]=Mt.get(i,"display")||null,r[o]||(i.style.display="")),""===i.style.display&&Wt(i)&&(r[o]=_(i))):"none"!==n&&(r[o]="none",Mt.set(i,"display",n)));for(o=0;o<a;o++)null!=r[o]&&(t[o].style.display=r[o]);return t}function x(t,e){var n;return n="undefined"!=typeof t.getElementsByTagName?t.getElementsByTagName(e||"*"):"undefined"!=typeof t.querySelectorAll?t.querySelectorAll(e||"*"):[],void 0===e||e&&yt.nodeName(t,e)?yt.merge([t],n):n}function w(t,e){for(var n=0,i=t.length;n<i;n++)Mt.set(t[n],"globalEval",!e||Mt.get(e[n],"globalEval"))}function C(t,e,n,i,r){for(var o,a,s,l,c,u,d=e.createDocumentFragment(),f=[],p=0,h=t.length;p<h;p++)if(o=t[p],o||0===o)if("object"===yt.type(o))yt.merge(f,o.nodeType?[o]:o);else if(Qt.test(o)){for(a=a||d.appendChild(e.createElement("div")),s=(Yt.exec(o)||["",""])[1].toLowerCase(),l=Zt[s]||Zt._default,a.innerHTML=l[1]+yt.htmlPrefilter(o)+l[2],u=l[0];u--;)a=a.lastChild;yt.merge(f,a.childNodes),a=d.firstChild,a.textContent=""}else f.push(e.createTextNode(o));for(d.textContent="",p=0;o=f[p++];)if(i&&yt.inArray(o,i)>-1)r&&r.push(o);else if(c=yt.contains(o.ownerDocument,o),a=x(d.appendChild(o),"script"),c&&w(a),n)for(u=0;o=a[u++];)Gt.test(o.type||"")&&n.push(o);return d}function k(){return!0}function S(){return!1}function T(){try{return ot.activeElement}catch(t){}}function $(t,e,n,i,r,o){var a,s;if("object"==typeof e){"string"!=typeof n&&(i=i||n,n=void 0);for(s in e)$(t,s,n,i,e[s],o);return t}if(null==i&&null==r?(r=n,i=n=void 0):null==r&&("string"==typeof n?(r=i,i=void 0):(r=i,i=n,n=void 0)),r===!1)r=S;else if(!r)return t;return 1===o&&(a=r,r=function(t){return yt().off(t),a.apply(this,arguments)},r.guid=a.guid||(a.guid=yt.guid++)),t.each(function(){yt.event.add(this,e,r,i,n)})}function A(t,e){return yt.nodeName(t,"table")&&yt.nodeName(11!==e.nodeType?e:e.firstChild,"tr")?t.getElementsByTagName("tbody")[0]||t:t}function E(t){return t.type=(null!==t.getAttribute("type"))+"/"+t.type,t}function N(t){var e=se.exec(t.type);return e?t.type=e[1]:t.removeAttribute("type"),t}function O(t,e){var n,i,r,o,a,s,l,c;if(1===e.nodeType){if(Mt.hasData(t)&&(o=Mt.access(t),a=Mt.set(e,o),c=o.events)){delete a.handle,a.events={};for(r in c)for(n=0,i=c[r].length;n<i;n++)yt.event.add(e,r,c[r][n])}Ht.hasData(t)&&(s=Ht.access(t),l=yt.extend({},s),Ht.set(e,l))}}function j(t,e){var n=e.nodeName.toLowerCase();"input"===n&&Xt.test(t.type)?e.checked=t.checked:"input"!==n&&"textarea"!==n||(e.defaultValue=t.defaultValue)}function D(t,e,n,i){e=lt.apply([],e);var r,o,s,l,c,u,d=0,f=t.length,p=f-1,h=e[0],v=yt.isFunction(h);if(v||f>1&&"string"==typeof h&&!mt.checkClone&&ae.test(h))return t.each(function(r){var o=t.eq(r);v&&(e[0]=h.call(this,r,o.html())),D(o,e,n,i)});if(f&&(r=C(e,t[0].ownerDocument,!1,t,i),o=r.firstChild,1===r.childNodes.length&&(r=o),o||i)){for(s=yt.map(x(r,"script"),E),l=s.length;d<f;d++)c=r,d!==p&&(c=yt.clone(c,!0,!0),l&&yt.merge(s,x(c,"script"))),n.call(t[d],c,d);if(l)for(u=s[s.length-1].ownerDocument,yt.map(s,N),d=0;d<l;d++)c=s[d],Gt.test(c.type||"")&&!Mt.access(c,"globalEval")&&yt.contains(u,c)&&(c.src?yt._evalUrl&&yt._evalUrl(c.src):a(c.textContent.replace(le,""),u))}return t}function I(t,e,n){for(var i,r=e?yt.filter(e,t):t,o=0;null!=(i=r[o]);o++)n||1!==i.nodeType||yt.cleanData(x(i)),i.parentNode&&(n&&yt.contains(i.ownerDocument,i)&&w(x(i,"script")),i.parentNode.removeChild(i));return t}function L(t,e,n){var i,r,o,a,s=t.style;return n=n||de(t),n&&(a=n.getPropertyValue(e)||n[e],""!==a||yt.contains(t.ownerDocument,t)||(a=yt.style(t,e)),!mt.pixelMarginRight()&&ue.test(a)&&ce.test(e)&&(i=s.width,r=s.minWidth,o=s.maxWidth,s.minWidth=s.maxWidth=s.width=a,a=n.width,s.width=i,s.minWidth=r,s.maxWidth=o)),void 0!==a?a+"":a}function P(t,e){return{get:function(){return t()?void delete this.get:(this.get=e).apply(this,arguments)}}}function R(t){if(t in me)return t;for(var e=t[0].toUpperCase()+t.slice(1),n=ve.length;n--;)if(t=ve[n]+e,t in me)return t}function F(t,e,n){var i=Vt.exec(e);return i?Math.max(0,i[2]-(n||0))+(i[3]||"px"):e}function M(t,e,n,i,r){var o,a=0;for(o=n===(i?"border":"content")?4:"width"===e?1:0;o<4;o+=2)"margin"===n&&(a+=yt.css(t,n+zt[o],!0,r)),i?("content"===n&&(a-=yt.css(t,"padding"+zt[o],!0,r)),"margin"!==n&&(a-=yt.css(t,"border"+zt[o]+"Width",!0,r))):(a+=yt.css(t,"padding"+zt[o],!0,r),"padding"!==n&&(a+=yt.css(t,"border"+zt[o]+"Width",!0,r)));return a}function H(t,e,n){var i,r=!0,o=de(t),a="border-box"===yt.css(t,"boxSizing",!1,o);if(t.getClientRects().length&&(i=t.getBoundingClientRect()[e]),i<=0||null==i){if(i=L(t,e,o),(i<0||null==i)&&(i=t.style[e]),ue.test(i))return i;r=a&&(mt.boxSizingReliable()||i===t.style[e]),i=parseFloat(i)||0}return i+M(t,e,n||(a?"border":"content"),r,o)+"px"}function q(t,e,n,i,r){return new q.prototype.init(t,e,n,i,r)}function U(){ye&&(n.requestAnimationFrame(U),yt.fx.tick())}function B(){return n.setTimeout(function(){ge=void 0}),ge=yt.now()}function V(t,e){var n,i=0,r={height:t};for(e=e?1:0;i<4;i+=2-e)n=zt[i],r["margin"+n]=r["padding"+n]=t;return e&&(r.opacity=r.width=t),r}function z(t,e,n){for(var i,r=(K.tweeners[e]||[]).concat(K.tweeners["*"]),o=0,a=r.length;o<a;o++)if(i=r[o].call(n,e,t))return i}function W(t,e,n){var i,r,o,a,s,l,c,u,d="width"in e||"height"in e,f=this,p={},h=t.style,v=t.nodeType&&Wt(t),m=Mt.get(t,"fxshow");n.queue||(a=yt._queueHooks(t,"fx"),null==a.unqueued&&(a.unqueued=0,s=a.empty.fire,a.empty.fire=function(){a.unqueued||s()}),a.unqueued++,f.always(function(){f.always(function(){a.unqueued--,yt.queue(t,"fx").length||a.empty.fire()})}));for(i in e)if(r=e[i],_e.test(r)){if(delete e[i],o=o||"toggle"===r,r===(v?"hide":"show")){if("show"!==r||!m||void 0===m[i])continue;v=!0}p[i]=m&&m[i]||yt.style(t,i)}if(l=!yt.isEmptyObject(e),l||!yt.isEmptyObject(p)){d&&1===t.nodeType&&(n.overflow=[h.overflow,h.overflowX,h.overflowY],c=m&&m.display,null==c&&(c=Mt.get(t,"display")),u=yt.css(t,"display"),"none"===u&&(c?u=c:(b([t],!0),c=t.style.display||c,u=yt.css(t,"display"),b([t]))),("inline"===u||"inline-block"===u&&null!=c)&&"none"===yt.css(t,"float")&&(l||(f.done(function(){h.display=c}),null==c&&(u=h.display,c="none"===u?"":u)),h.display="inline-block")),n.overflow&&(h.overflow="hidden",f.always(function(){h.overflow=n.overflow[0],h.overflowX=n.overflow[1],h.overflowY=n.overflow[2]})),l=!1;for(i in p)l||(m?"hidden"in m&&(v=m.hidden):m=Mt.access(t,"fxshow",{display:c}),o&&(m.hidden=!v),v&&b([t],!0),f.done(function(){v||b([t]),Mt.remove(t,"fxshow");for(i in p)yt.style(t,i,p[i])})),l=z(v?m[i]:0,i,f),i in m||(m[i]=l.start,v&&(l.end=l.start,l.start=0))}}function J(t,e){var n,i,r,o,a;for(n in t)if(i=yt.camelCase(n),r=e[i],o=t[n],yt.isArray(o)&&(r=o[1],o=t[n]=o[0]),n!==i&&(t[i]=o,delete t[n]),a=yt.cssHooks[i],a&&"expand"in a){o=a.expand(o),delete t[i];for(n in o)n in t||(t[n]=o[n],e[n]=r)}else e[i]=r}function K(t,e,n){var i,r,o=0,a=K.prefilters.length,s=yt.Deferred().always(function(){delete l.elem}),l=function(){if(r)return!1;for(var e=ge||B(),n=Math.max(0,c.startTime+c.duration-e),i=n/c.duration||0,o=1-i,a=0,l=c.tweens.length;a<l;a++)c.tweens[a].run(o);return s.notifyWith(t,[c,o,n]),o<1&&l?n:(s.resolveWith(t,[c]),!1)},c=s.promise({elem:t,props:yt.extend({},e),opts:yt.extend(!0,{specialEasing:{},easing:yt.easing._default},n),originalProperties:e,originalOptions:n,startTime:ge||B(),duration:n.duration,tweens:[],createTween:function(e,n){var i=yt.Tween(t,c.opts,e,n,c.opts.specialEasing[e]||c.opts.easing);return c.tweens.push(i),i},stop:function(e){var n=0,i=e?c.tweens.length:0;if(r)return this;for(r=!0;n<i;n++)c.tweens[n].run(1);return e?(s.notifyWith(t,[c,1,0]),s.resolveWith(t,[c,e])):s.rejectWith(t,[c,e]),this}}),u=c.props;for(J(u,c.opts.specialEasing);o<a;o++)if(i=K.prefilters[o].call(c,t,u,c.opts))return yt.isFunction(i.stop)&&(yt._queueHooks(c.elem,c.opts.queue).stop=yt.proxy(i.stop,i)),i;return yt.map(u,z,c),yt.isFunction(c.opts.start)&&c.opts.start.call(t,c),yt.fx.timer(yt.extend(l,{elem:t,anim:c,queue:c.opts.queue})),c.progress(c.opts.progress).done(c.opts.done,c.opts.complete).fail(c.opts.fail).always(c.opts.always)}function X(t){var e=t.match(It)||[];return e.join(" ")}function Y(t){return t.getAttribute&&t.getAttribute("class")||""}function G(t,e,n,i){var r;if(yt.isArray(e))yt.each(e,function(e,r){n||Ne.test(t)?i(t,r):G(t+"["+("object"==typeof r&&null!=r?e:"")+"]",r,n,i)});else if(n||"object"!==yt.type(e))i(t,e);else for(r in e)G(t+"["+r+"]",e[r],n,i)}function Z(t){return function(e,n){"string"!=typeof e&&(n=e,e="*");var i,r=0,o=e.toLowerCase().match(It)||[];if(yt.isFunction(n))for(;i=o[r++];)"+"===i[0]?(i=i.slice(1)||"*",(t[i]=t[i]||[]).unshift(n)):(t[i]=t[i]||[]).push(n)}}function Q(t,e,n,i){function r(s){var l;return o[s]=!0,yt.each(t[s]||[],function(t,s){var c=s(e,n,i);return"string"!=typeof c||a||o[c]?a?!(l=c):void 0:(e.dataTypes.unshift(c),r(c),!1)}),l}var o={},a=t===Ue;return r(e.dataTypes[0])||!o["*"]&&r("*")}function tt(t,e){var n,i,r=yt.ajaxSettings.flatOptions||{};for(n in e)void 0!==e[n]&&((r[n]?t:i||(i={}))[n]=e[n]);return i&&yt.extend(!0,t,i),t}function et(t,e,n){for(var i,r,o,a,s=t.contents,l=t.dataTypes;"*"===l[0];)l.shift(),void 0===i&&(i=t.mimeType||e.getResponseHeader("Content-Type"));if(i)for(r in s)if(s[r]&&s[r].test(i)){l.unshift(r);break}if(l[0]in n)o=l[0];else{for(r in n){if(!l[0]||t.converters[r+" "+l[0]]){o=r;break}a||(a=r)}o=o||a}if(o)return o!==l[0]&&l.unshift(o),n[o]}function nt(t,e,n,i){var r,o,a,s,l,c={},u=t.dataTypes.slice();if(u[1])for(a in t.converters)c[a.toLowerCase()]=t.converters[a];for(o=u.shift();o;)if(t.responseFields[o]&&(n[t.responseFields[o]]=e),!l&&i&&t.dataFilter&&(e=t.dataFilter(e,t.dataType)),l=o,o=u.shift())if("*"===o)o=l;else if("*"!==l&&l!==o){if(a=c[l+" "+o]||c["* "+o],!a)for(r in c)if(s=r.split(" "),s[1]===o&&(a=c[l+" "+s[0]]||c["* "+s[0]])){a===!0?a=c[r]:c[r]!==!0&&(o=s[0],u.unshift(s[1]));break}if(a!==!0)if(a&&t.throws)e=a(e);else try{e=a(e)}catch(t){return{state:"parsererror",error:a?t:"No conversion from "+l+" to "+o}}}return{state:"success",data:e}}function it(t){return yt.isWindow(t)?t:9===t.nodeType&&t.defaultView}var rt=[],ot=n.document,at=Object.getPrototypeOf,st=rt.slice,lt=rt.concat,ct=rt.push,ut=rt.indexOf,dt={},ft=dt.toString,pt=dt.hasOwnProperty,ht=pt.toString,vt=ht.call(Object),mt={},gt="3.1.1",yt=function(t,e){return new yt.fn.init(t,e)},_t=/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,bt=/^-ms-/,xt=/-([a-z])/g,wt=function(t,e){return e.toUpperCase()};yt.fn=yt.prototype={jquery:gt,constructor:yt,length:0,toArray:function(){return st.call(this)},get:function(t){return null==t?st.call(this):t<0?this[t+this.length]:this[t]},pushStack:function(t){var e=yt.merge(this.constructor(),t);return e.prevObject=this,e},each:function(t){return yt.each(this,t)},map:function(t){return this.pushStack(yt.map(this,function(e,n){return t.call(e,n,e)}))},slice:function(){return this.pushStack(st.apply(this,arguments))},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},eq:function(t){var e=this.length,n=+t+(t<0?e:0);return this.pushStack(n>=0&&n<e?[this[n]]:[])},end:function(){return this.prevObject||this.constructor()},push:ct,sort:rt.sort,splice:rt.splice},yt.extend=yt.fn.extend=function(){var t,e,n,i,r,o,a=arguments[0]||{},s=1,l=arguments.length,c=!1;for("boolean"==typeof a&&(c=a,a=arguments[s]||{},s++),"object"==typeof a||yt.isFunction(a)||(a={}),s===l&&(a=this,s--);s<l;s++)if(null!=(t=arguments[s]))for(e in t)n=a[e],i=t[e],a!==i&&(c&&i&&(yt.isPlainObject(i)||(r=yt.isArray(i)))?(r?(r=!1,o=n&&yt.isArray(n)?n:[]):o=n&&yt.isPlainObject(n)?n:{},a[e]=yt.extend(c,o,i)):void 0!==i&&(a[e]=i));return a},yt.extend({expando:"jQuery"+(gt+Math.random()).replace(/\D/g,""),isReady:!0,error:function(t){throw new Error(t)},noop:function(){},isFunction:function(t){return"function"===yt.type(t)},isArray:Array.isArray,isWindow:function(t){return null!=t&&t===t.window},isNumeric:function(t){var e=yt.type(t);return("number"===e||"string"===e)&&!isNaN(t-parseFloat(t))},isPlainObject:function(t){var e,n;return!(!t||"[object Object]"!==ft.call(t))&&(!(e=at(t))||(n=pt.call(e,"constructor")&&e.constructor,"function"==typeof n&&ht.call(n)===vt))},isEmptyObject:function(t){var e;for(e in t)return!1;return!0},type:function(t){return null==t?t+"":"object"==typeof t||"function"==typeof t?dt[ft.call(t)]||"object":typeof t},globalEval:function(t){a(t)},camelCase:function(t){return t.replace(bt,"ms-").replace(xt,wt)},nodeName:function(t,e){return t.nodeName&&t.nodeName.toLowerCase()===e.toLowerCase()},each:function(t,e){var n,i=0;if(s(t))for(n=t.length;i<n&&e.call(t[i],i,t[i])!==!1;i++);else for(i in t)if(e.call(t[i],i,t[i])===!1)break;return t},trim:function(t){return null==t?"":(t+"").replace(_t,"")},makeArray:function(t,e){var n=e||[];return null!=t&&(s(Object(t))?yt.merge(n,"string"==typeof t?[t]:t):ct.call(n,t)),n},inArray:function(t,e,n){return null==e?-1:ut.call(e,t,n)},merge:function(t,e){for(var n=+e.length,i=0,r=t.length;i<n;i++)t[r++]=e[i];return t.length=r,t},grep:function(t,e,n){for(var i,r=[],o=0,a=t.length,s=!n;o<a;o++)i=!e(t[o],o),i!==s&&r.push(t[o]);return r},map:function(t,e,n){var i,r,o=0,a=[];if(s(t))for(i=t.length;o<i;o++)r=e(t[o],o,n),null!=r&&a.push(r);else for(o in t)r=e(t[o],o,n),null!=r&&a.push(r);return lt.apply([],a)},guid:1,proxy:function(t,e){var n,i,r;if("string"==typeof e&&(n=t[e],e=t,t=n),yt.isFunction(t))return i=st.call(arguments,2),r=function(){return t.apply(e||this,i.concat(st.call(arguments)))},r.guid=t.guid=t.guid||yt.guid++,r},now:Date.now,support:mt}),"function"==typeof Symbol&&(yt.fn[Symbol.iterator]=rt[Symbol.iterator]),yt.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "),function(t,e){dt["[object "+e+"]"]=e.toLowerCase()});var Ct=/*!
 * Sizzle CSS Selector Engine v2.3.3
 * https://sizzlejs.com/
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license
 * http://jquery.org/license
 *
 * Date: 2016-08-08
 */
<<<<<<< HEAD
(function( window ) {

var i,
	support,
	Expr,
	getText,
	isXML,
	tokenize,
	compile,
	select,
	outermostContext,
	sortInput,
	hasDuplicate,

	// Local document vars
	setDocument,
	document,
	docElem,
	documentIsHTML,
	rbuggyQSA,
	rbuggyMatches,
	matches,
	contains,

	// Instance-specific data
	expando = "sizzle" + 1 * new Date(),
	preferredDoc = window.document,
	dirruns = 0,
	done = 0,
	classCache = createCache(),
	tokenCache = createCache(),
	compilerCache = createCache(),
	sortOrder = function( a, b ) {
		if ( a === b ) {
			hasDuplicate = true;
		}
		return 0;
	},

	// Instance methods
	hasOwn = ({}).hasOwnProperty,
	arr = [],
	pop = arr.pop,
	push_native = arr.push,
	push = arr.push,
	slice = arr.slice,
	// Use a stripped-down indexOf as it's faster than native
	// https://jsperf.com/thor-indexof-vs-for/5
	indexOf = function( list, elem ) {
		var i = 0,
			len = list.length;
		for ( ; i < len; i++ ) {
			if ( list[i] === elem ) {
				return i;
			}
		}
		return -1;
	},

	booleans = "checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",

	// Regular expressions

	// http://www.w3.org/TR/css3-selectors/#whitespace
	whitespace = "[\\x20\\t\\r\\n\\f]",

	// http://www.w3.org/TR/CSS21/syndata.html#value-def-identifier
	identifier = "(?:\\\\.|[\\w-]|[^\0-\\xa0])+",

	// Attribute selectors: http://www.w3.org/TR/selectors/#attribute-selectors
	attributes = "\\[" + whitespace + "*(" + identifier + ")(?:" + whitespace +
		// Operator (capture 2)
		"*([*^$|!~]?=)" + whitespace +
		// "Attribute values must be CSS identifiers [capture 5] or strings [capture 3 or capture 4]"
		"*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + identifier + "))|)" + whitespace +
		"*\\]",

	pseudos = ":(" + identifier + ")(?:\\((" +
		// To reduce the number of selectors needing tokenize in the preFilter, prefer arguments:
		// 1. quoted (capture 3; capture 4 or capture 5)
		"('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|" +
		// 2. simple (capture 6)
		"((?:\\\\.|[^\\\\()[\\]]|" + attributes + ")*)|" +
		// 3. anything else (capture 2)
		".*" +
		")\\)|)",

	// Leading and non-escaped trailing whitespace, capturing some non-whitespace characters preceding the latter
	rwhitespace = new RegExp( whitespace + "+", "g" ),
	rtrim = new RegExp( "^" + whitespace + "+|((?:^|[^\\\\])(?:\\\\.)*)" + whitespace + "+$", "g" ),

	rcomma = new RegExp( "^" + whitespace + "*," + whitespace + "*" ),
	rcombinators = new RegExp( "^" + whitespace + "*([>+~]|" + whitespace + ")" + whitespace + "*" ),

	rattributeQuotes = new RegExp( "=" + whitespace + "*([^\\]'\"]*?)" + whitespace + "*\\]", "g" ),

	rpseudo = new RegExp( pseudos ),
	ridentifier = new RegExp( "^" + identifier + "$" ),

	matchExpr = {
		"ID": new RegExp( "^#(" + identifier + ")" ),
		"CLASS": new RegExp( "^\\.(" + identifier + ")" ),
		"TAG": new RegExp( "^(" + identifier + "|[*])" ),
		"ATTR": new RegExp( "^" + attributes ),
		"PSEUDO": new RegExp( "^" + pseudos ),
		"CHILD": new RegExp( "^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\(" + whitespace +
			"*(even|odd|(([+-]|)(\\d*)n|)" + whitespace + "*(?:([+-]|)" + whitespace +
			"*(\\d+)|))" + whitespace + "*\\)|)", "i" ),
		"bool": new RegExp( "^(?:" + booleans + ")$", "i" ),
		// For use in libraries implementing .is()
		// We use this for POS matching in `select`
		"needsContext": new RegExp( "^" + whitespace + "*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\(" +
			whitespace + "*((?:-\\d)?\\d*)" + whitespace + "*\\)|)(?=[^-]|$)", "i" )
	},

	rinputs = /^(?:input|select|textarea|button)$/i,
	rheader = /^h\d$/i,

	rnative = /^[^{]+\{\s*\[native \w/,

	// Easily-parseable/retrievable ID or TAG or CLASS selectors
	rquickExpr = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,

	rsibling = /[+~]/,

	// CSS escapes
	// http://www.w3.org/TR/CSS21/syndata.html#escaped-characters
	runescape = new RegExp( "\\\\([\\da-f]{1,6}" + whitespace + "?|(" + whitespace + ")|.)", "ig" ),
	funescape = function( _, escaped, escapedWhitespace ) {
		var high = "0x" + escaped - 0x10000;
		// NaN means non-codepoint
		// Support: Firefox<24
		// Workaround erroneous numeric interpretation of +"0x"
		return high !== high || escapedWhitespace ?
			escaped :
			high < 0 ?
				// BMP codepoint
				String.fromCharCode( high + 0x10000 ) :
				// Supplemental Plane codepoint (surrogate pair)
				String.fromCharCode( high >> 10 | 0xD800, high & 0x3FF | 0xDC00 );
	},

	// CSS string/identifier serialization
	// https://drafts.csswg.org/cssom/#common-serializing-idioms
	rcssescape = /([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,
	fcssescape = function( ch, asCodePoint ) {
		if ( asCodePoint ) {

			// U+0000 NULL becomes U+FFFD REPLACEMENT CHARACTER
			if ( ch === "\0" ) {
				return "\uFFFD";
			}

			// Control characters and (dependent upon position) numbers get escaped as code points
			return ch.slice( 0, -1 ) + "\\" + ch.charCodeAt( ch.length - 1 ).toString( 16 ) + " ";
		}

		// Other potentially-special ASCII characters get backslash-escaped
		return "\\" + ch;
	},

	// Used for iframes
	// See setDocument()
	// Removing the function wrapper causes a "Permission Denied"
	// error in IE
	unloadHandler = function() {
		setDocument();
	},

	disabledAncestor = addCombinator(
		function( elem ) {
			return elem.disabled === true && ("form" in elem || "label" in elem);
		},
		{ dir: "parentNode", next: "legend" }
	);

// Optimize for push.apply( _, NodeList )
try {
	push.apply(
		(arr = slice.call( preferredDoc.childNodes )),
		preferredDoc.childNodes
	);
	// Support: Android<4.0
	// Detect silently failing push.apply
	arr[ preferredDoc.childNodes.length ].nodeType;
} catch ( e ) {
	push = { apply: arr.length ?

		// Leverage slice if possible
		function( target, els ) {
			push_native.apply( target, slice.call(els) );
		} :

		// Support: IE<9
		// Otherwise append directly
		function( target, els ) {
			var j = target.length,
				i = 0;
			// Can't trust NodeList.length
			while ( (target[j++] = els[i++]) ) {}
			target.length = j - 1;
		}
	};
}

function Sizzle( selector, context, results, seed ) {
	var m, i, elem, nid, match, groups, newSelector,
		newContext = context && context.ownerDocument,

		// nodeType defaults to 9, since context defaults to document
		nodeType = context ? context.nodeType : 9;

	results = results || [];

	// Return early from calls with invalid selector or context
	if ( typeof selector !== "string" || !selector ||
		nodeType !== 1 && nodeType !== 9 && nodeType !== 11 ) {

		return results;
	}

	// Try to shortcut find operations (as opposed to filters) in HTML documents
	if ( !seed ) {

		if ( ( context ? context.ownerDocument || context : preferredDoc ) !== document ) {
			setDocument( context );
		}
		context = context || document;

		if ( documentIsHTML ) {

			// If the selector is sufficiently simple, try using a "get*By*" DOM method
			// (excepting DocumentFragment context, where the methods don't exist)
			if ( nodeType !== 11 && (match = rquickExpr.exec( selector )) ) {

				// ID selector
				if ( (m = match[1]) ) {

					// Document context
					if ( nodeType === 9 ) {
						if ( (elem = context.getElementById( m )) ) {

							// Support: IE, Opera, Webkit
							// TODO: identify versions
							// getElementById can match elements by name instead of ID
							if ( elem.id === m ) {
								results.push( elem );
								return results;
							}
						} else {
							return results;
						}

					// Element context
					} else {

						// Support: IE, Opera, Webkit
						// TODO: identify versions
						// getElementById can match elements by name instead of ID
						if ( newContext && (elem = newContext.getElementById( m )) &&
							contains( context, elem ) &&
							elem.id === m ) {

							results.push( elem );
							return results;
						}
					}

				// Type selector
				} else if ( match[2] ) {
					push.apply( results, context.getElementsByTagName( selector ) );
					return results;

				// Class selector
				} else if ( (m = match[3]) && support.getElementsByClassName &&
					context.getElementsByClassName ) {

					push.apply( results, context.getElementsByClassName( m ) );
					return results;
				}
			}

			// Take advantage of querySelectorAll
			if ( support.qsa &&
				!compilerCache[ selector + " " ] &&
				(!rbuggyQSA || !rbuggyQSA.test( selector )) ) {

				if ( nodeType !== 1 ) {
					newContext = context;
					newSelector = selector;

				// qSA looks outside Element context, which is not what we want
				// Thanks to Andrew Dupont for this workaround technique
				// Support: IE <=8
				// Exclude object elements
				} else if ( context.nodeName.toLowerCase() !== "object" ) {

					// Capture the context ID, setting it first if necessary
					if ( (nid = context.getAttribute( "id" )) ) {
						nid = nid.replace( rcssescape, fcssescape );
					} else {
						context.setAttribute( "id", (nid = expando) );
					}

					// Prefix every selector in the list
					groups = tokenize( selector );
					i = groups.length;
					while ( i-- ) {
						groups[i] = "#" + nid + " " + toSelector( groups[i] );
					}
					newSelector = groups.join( "," );

					// Expand context for sibling selectors
					newContext = rsibling.test( selector ) && testContext( context.parentNode ) ||
						context;
				}

				if ( newSelector ) {
					try {
						push.apply( results,
							newContext.querySelectorAll( newSelector )
						);
						return results;
					} catch ( qsaError ) {
					} finally {
						if ( nid === expando ) {
							context.removeAttribute( "id" );
						}
					}
				}
			}
		}
	}

	// All others
	return select( selector.replace( rtrim, "$1" ), context, results, seed );
}

/**
 * Create key-value caches of limited size
 * @returns {function(string, object)} Returns the Object data after storing it on itself with
 *	property name the (space-suffixed) string and (if the cache is larger than Expr.cacheLength)
 *	deleting the oldest entry
 */
function createCache() {
	var keys = [];

	function cache( key, value ) {
		// Use (key + " ") to avoid collision with native prototype properties (see Issue #157)
		if ( keys.push( key + " " ) > Expr.cacheLength ) {
			// Only keep the most recent entries
			delete cache[ keys.shift() ];
		}
		return (cache[ key + " " ] = value);
	}
	return cache;
}

/**
 * Mark a function for special use by Sizzle
 * @param {Function} fn The function to mark
 */
function markFunction( fn ) {
	fn[ expando ] = true;
	return fn;
}

/**
 * Support testing using an element
 * @param {Function} fn Passed the created element and returns a boolean result
 */
function assert( fn ) {
	var el = document.createElement("fieldset");

	try {
		return !!fn( el );
	} catch (e) {
		return false;
	} finally {
		// Remove from its parent by default
		if ( el.parentNode ) {
			el.parentNode.removeChild( el );
		}
		// release memory in IE
		el = null;
	}
}

/**
 * Adds the same handler for all of the specified attrs
 * @param {String} attrs Pipe-separated list of attributes
 * @param {Function} handler The method that will be applied
 */
function addHandle( attrs, handler ) {
	var arr = attrs.split("|"),
		i = arr.length;

	while ( i-- ) {
		Expr.attrHandle[ arr[i] ] = handler;
	}
}

/**
 * Checks document order of two siblings
 * @param {Element} a
 * @param {Element} b
 * @returns {Number} Returns less than 0 if a precedes b, greater than 0 if a follows b
 */
function siblingCheck( a, b ) {
	var cur = b && a,
		diff = cur && a.nodeType === 1 && b.nodeType === 1 &&
			a.sourceIndex - b.sourceIndex;

	// Use IE sourceIndex if available on both nodes
	if ( diff ) {
		return diff;
	}

	// Check if b follows a
	if ( cur ) {
		while ( (cur = cur.nextSibling) ) {
			if ( cur === b ) {
				return -1;
			}
		}
	}

	return a ? 1 : -1;
}

/**
 * Returns a function to use in pseudos for input types
 * @param {String} type
 */
function createInputPseudo( type ) {
	return function( elem ) {
		var name = elem.nodeName.toLowerCase();
		return name === "input" && elem.type === type;
	};
}

/**
 * Returns a function to use in pseudos for buttons
 * @param {String} type
 */
function createButtonPseudo( type ) {
	return function( elem ) {
		var name = elem.nodeName.toLowerCase();
		return (name === "input" || name === "button") && elem.type === type;
	};
}

/**
 * Returns a function to use in pseudos for :enabled/:disabled
 * @param {Boolean} disabled true for :disabled; false for :enabled
 */
function createDisabledPseudo( disabled ) {

	// Known :disabled false positives: fieldset[disabled] > legend:nth-of-type(n+2) :can-disable
	return function( elem ) {

		// Only certain elements can match :enabled or :disabled
		// https://html.spec.whatwg.org/multipage/scripting.html#selector-enabled
		// https://html.spec.whatwg.org/multipage/scripting.html#selector-disabled
		if ( "form" in elem ) {

			// Check for inherited disabledness on relevant non-disabled elements:
			// * listed form-associated elements in a disabled fieldset
			//   https://html.spec.whatwg.org/multipage/forms.html#category-listed
			//   https://html.spec.whatwg.org/multipage/forms.html#concept-fe-disabled
			// * option elements in a disabled optgroup
			//   https://html.spec.whatwg.org/multipage/forms.html#concept-option-disabled
			// All such elements have a "form" property.
			if ( elem.parentNode && elem.disabled === false ) {

				// Option elements defer to a parent optgroup if present
				if ( "label" in elem ) {
					if ( "label" in elem.parentNode ) {
						return elem.parentNode.disabled === disabled;
					} else {
						return elem.disabled === disabled;
					}
				}

				// Support: IE 6 - 11
				// Use the isDisabled shortcut property to check for disabled fieldset ancestors
				return elem.isDisabled === disabled ||

					// Where there is no isDisabled, check manually
					/* jshint -W018 */
					elem.isDisabled !== !disabled &&
						disabledAncestor( elem ) === disabled;
			}

			return elem.disabled === disabled;

		// Try to winnow out elements that can't be disabled before trusting the disabled property.
		// Some victims get caught in our net (label, legend, menu, track), but it shouldn't
		// even exist on them, let alone have a boolean value.
		} else if ( "label" in elem ) {
			return elem.disabled === disabled;
		}

		// Remaining elements are neither :enabled nor :disabled
		return false;
	};
}

/**
 * Returns a function to use in pseudos for positionals
 * @param {Function} fn
 */
function createPositionalPseudo( fn ) {
	return markFunction(function( argument ) {
		argument = +argument;
		return markFunction(function( seed, matches ) {
			var j,
				matchIndexes = fn( [], seed.length, argument ),
				i = matchIndexes.length;

			// Match elements found at the specified indexes
			while ( i-- ) {
				if ( seed[ (j = matchIndexes[i]) ] ) {
					seed[j] = !(matches[j] = seed[j]);
				}
			}
		});
	});
}

/**
 * Checks a node for validity as a Sizzle context
 * @param {Element|Object=} context
 * @returns {Element|Object|Boolean} The input node if acceptable, otherwise a falsy value
 */
function testContext( context ) {
	return context && typeof context.getElementsByTagName !== "undefined" && context;
}

// Expose support vars for convenience
support = Sizzle.support = {};

/**
 * Detects XML nodes
 * @param {Element|Object} elem An element or a document
 * @returns {Boolean} True iff elem is a non-HTML XML node
 */
isXML = Sizzle.isXML = function( elem ) {
	// documentElement is verified for cases where it doesn't yet exist
	// (such as loading iframes in IE - #4833)
	var documentElement = elem && (elem.ownerDocument || elem).documentElement;
	return documentElement ? documentElement.nodeName !== "HTML" : false;
};

/**
 * Sets document-related variables once based on the current document
 * @param {Element|Object} [doc] An element or document object to use to set the document
 * @returns {Object} Returns the current document
 */
setDocument = Sizzle.setDocument = function( node ) {
	var hasCompare, subWindow,
		doc = node ? node.ownerDocument || node : preferredDoc;

	// Return early if doc is invalid or already selected
	if ( doc === document || doc.nodeType !== 9 || !doc.documentElement ) {
		return document;
	}

	// Update global variables
	document = doc;
	docElem = document.documentElement;
	documentIsHTML = !isXML( document );

	// Support: IE 9-11, Edge
	// Accessing iframe documents after unload throws "permission denied" errors (jQuery #13936)
	if ( preferredDoc !== document &&
		(subWindow = document.defaultView) && subWindow.top !== subWindow ) {

		// Support: IE 11, Edge
		if ( subWindow.addEventListener ) {
			subWindow.addEventListener( "unload", unloadHandler, false );

		// Support: IE 9 - 10 only
		} else if ( subWindow.attachEvent ) {
			subWindow.attachEvent( "onunload", unloadHandler );
		}
	}

	/* Attributes
	---------------------------------------------------------------------- */

	// Support: IE<8
	// Verify that getAttribute really returns attributes and not properties
	// (excepting IE8 booleans)
	support.attributes = assert(function( el ) {
		el.className = "i";
		return !el.getAttribute("className");
	});

	/* getElement(s)By*
	---------------------------------------------------------------------- */

	// Check if getElementsByTagName("*") returns only elements
	support.getElementsByTagName = assert(function( el ) {
		el.appendChild( document.createComment("") );
		return !el.getElementsByTagName("*").length;
	});

	// Support: IE<9
	support.getElementsByClassName = rnative.test( document.getElementsByClassName );

	// Support: IE<10
	// Check if getElementById returns elements by name
	// The broken getElementById methods don't pick up programmatically-set names,
	// so use a roundabout getElementsByName test
	support.getById = assert(function( el ) {
		docElem.appendChild( el ).id = expando;
		return !document.getElementsByName || !document.getElementsByName( expando ).length;
	});

	// ID filter and find
	if ( support.getById ) {
		Expr.filter["ID"] = function( id ) {
			var attrId = id.replace( runescape, funescape );
			return function( elem ) {
				return elem.getAttribute("id") === attrId;
			};
		};
		Expr.find["ID"] = function( id, context ) {
			if ( typeof context.getElementById !== "undefined" && documentIsHTML ) {
				var elem = context.getElementById( id );
				return elem ? [ elem ] : [];
			}
		};
	} else {
		Expr.filter["ID"] =  function( id ) {
			var attrId = id.replace( runescape, funescape );
			return function( elem ) {
				var node = typeof elem.getAttributeNode !== "undefined" &&
					elem.getAttributeNode("id");
				return node && node.value === attrId;
			};
		};

		// Support: IE 6 - 7 only
		// getElementById is not reliable as a find shortcut
		Expr.find["ID"] = function( id, context ) {
			if ( typeof context.getElementById !== "undefined" && documentIsHTML ) {
				var node, i, elems,
					elem = context.getElementById( id );

				if ( elem ) {

					// Verify the id attribute
					node = elem.getAttributeNode("id");
					if ( node && node.value === id ) {
						return [ elem ];
					}

					// Fall back on getElementsByName
					elems = context.getElementsByName( id );
					i = 0;
					while ( (elem = elems[i++]) ) {
						node = elem.getAttributeNode("id");
						if ( node && node.value === id ) {
							return [ elem ];
						}
					}
				}

				return [];
			}
		};
	}

	// Tag
	Expr.find["TAG"] = support.getElementsByTagName ?
		function( tag, context ) {
			if ( typeof context.getElementsByTagName !== "undefined" ) {
				return context.getElementsByTagName( tag );

			// DocumentFragment nodes don't have gEBTN
			} else if ( support.qsa ) {
				return context.querySelectorAll( tag );
			}
		} :

		function( tag, context ) {
			var elem,
				tmp = [],
				i = 0,
				// By happy coincidence, a (broken) gEBTN appears on DocumentFragment nodes too
				results = context.getElementsByTagName( tag );

			// Filter out possible comments
			if ( tag === "*" ) {
				while ( (elem = results[i++]) ) {
					if ( elem.nodeType === 1 ) {
						tmp.push( elem );
					}
				}

				return tmp;
			}
			return results;
		};

	// Class
	Expr.find["CLASS"] = support.getElementsByClassName && function( className, context ) {
		if ( typeof context.getElementsByClassName !== "undefined" && documentIsHTML ) {
			return context.getElementsByClassName( className );
		}
	};

	/* QSA/matchesSelector
	---------------------------------------------------------------------- */

	// QSA and matchesSelector support

	// matchesSelector(:active) reports false when true (IE9/Opera 11.5)
	rbuggyMatches = [];

	// qSa(:focus) reports false when true (Chrome 21)
	// We allow this because of a bug in IE8/9 that throws an error
	// whenever `document.activeElement` is accessed on an iframe
	// So, we allow :focus to pass through QSA all the time to avoid the IE error
	// See https://bugs.jquery.com/ticket/13378
	rbuggyQSA = [];

	if ( (support.qsa = rnative.test( document.querySelectorAll )) ) {
		// Build QSA regex
		// Regex strategy adopted from Diego Perini
		assert(function( el ) {
			// Select is set to empty string on purpose
			// This is to test IE's treatment of not explicitly
			// setting a boolean content attribute,
			// since its presence should be enough
			// https://bugs.jquery.com/ticket/12359
			docElem.appendChild( el ).innerHTML = "<a id='" + expando + "'></a>" +
				"<select id='" + expando + "-\r\\' msallowcapture=''>" +
				"<option selected=''></option></select>";

			// Support: IE8, Opera 11-12.16
			// Nothing should be selected when empty strings follow ^= or $= or *=
			// The test attribute must be unknown in Opera but "safe" for WinRT
			// https://msdn.microsoft.com/en-us/library/ie/hh465388.aspx#attribute_section
			if ( el.querySelectorAll("[msallowcapture^='']").length ) {
				rbuggyQSA.push( "[*^$]=" + whitespace + "*(?:''|\"\")" );
			}

			// Support: IE8
			// Boolean attributes and "value" are not treated correctly
			if ( !el.querySelectorAll("[selected]").length ) {
				rbuggyQSA.push( "\\[" + whitespace + "*(?:value|" + booleans + ")" );
			}

			// Support: Chrome<29, Android<4.4, Safari<7.0+, iOS<7.0+, PhantomJS<1.9.8+
			if ( !el.querySelectorAll( "[id~=" + expando + "-]" ).length ) {
				rbuggyQSA.push("~=");
			}

			// Webkit/Opera - :checked should return selected option elements
			// http://www.w3.org/TR/2011/REC-css3-selectors-20110929/#checked
			// IE8 throws error here and will not see later tests
			if ( !el.querySelectorAll(":checked").length ) {
				rbuggyQSA.push(":checked");
			}

			// Support: Safari 8+, iOS 8+
			// https://bugs.webkit.org/show_bug.cgi?id=136851
			// In-page `selector#id sibling-combinator selector` fails
			if ( !el.querySelectorAll( "a#" + expando + "+*" ).length ) {
				rbuggyQSA.push(".#.+[+~]");
			}
		});

		assert(function( el ) {
			el.innerHTML = "<a href='' disabled='disabled'></a>" +
				"<select disabled='disabled'><option/></select>";

			// Support: Windows 8 Native Apps
			// The type and name attributes are restricted during .innerHTML assignment
			var input = document.createElement("input");
			input.setAttribute( "type", "hidden" );
			el.appendChild( input ).setAttribute( "name", "D" );

			// Support: IE8
			// Enforce case-sensitivity of name attribute
			if ( el.querySelectorAll("[name=d]").length ) {
				rbuggyQSA.push( "name" + whitespace + "*[*^$|!~]?=" );
			}

			// FF 3.5 - :enabled/:disabled and hidden elements (hidden elements are still enabled)
			// IE8 throws error here and will not see later tests
			if ( el.querySelectorAll(":enabled").length !== 2 ) {
				rbuggyQSA.push( ":enabled", ":disabled" );
			}

			// Support: IE9-11+
			// IE's :disabled selector does not pick up the children of disabled fieldsets
			docElem.appendChild( el ).disabled = true;
			if ( el.querySelectorAll(":disabled").length !== 2 ) {
				rbuggyQSA.push( ":enabled", ":disabled" );
			}

			// Opera 10-11 does not throw on post-comma invalid pseudos
			el.querySelectorAll("*,:x");
			rbuggyQSA.push(",.*:");
		});
	}

	if ( (support.matchesSelector = rnative.test( (matches = docElem.matches ||
		docElem.webkitMatchesSelector ||
		docElem.mozMatchesSelector ||
		docElem.oMatchesSelector ||
		docElem.msMatchesSelector) )) ) {

		assert(function( el ) {
			// Check to see if it's possible to do matchesSelector
			// on a disconnected node (IE 9)
			support.disconnectedMatch = matches.call( el, "*" );

			// This should fail with an exception
			// Gecko does not error, returns false instead
			matches.call( el, "[s!='']:x" );
			rbuggyMatches.push( "!=", pseudos );
		});
	}

	rbuggyQSA = rbuggyQSA.length && new RegExp( rbuggyQSA.join("|") );
	rbuggyMatches = rbuggyMatches.length && new RegExp( rbuggyMatches.join("|") );

	/* Contains
	---------------------------------------------------------------------- */
	hasCompare = rnative.test( docElem.compareDocumentPosition );

	// Element contains another
	// Purposefully self-exclusive
	// As in, an element does not contain itself
	contains = hasCompare || rnative.test( docElem.contains ) ?
		function( a, b ) {
			var adown = a.nodeType === 9 ? a.documentElement : a,
				bup = b && b.parentNode;
			return a === bup || !!( bup && bup.nodeType === 1 && (
				adown.contains ?
					adown.contains( bup ) :
					a.compareDocumentPosition && a.compareDocumentPosition( bup ) & 16
			));
		} :
		function( a, b ) {
			if ( b ) {
				while ( (b = b.parentNode) ) {
					if ( b === a ) {
						return true;
					}
				}
			}
			return false;
		};

	/* Sorting
	---------------------------------------------------------------------- */

	// Document order sorting
	sortOrder = hasCompare ?
	function( a, b ) {

		// Flag for duplicate removal
		if ( a === b ) {
			hasDuplicate = true;
			return 0;
		}

		// Sort on method existence if only one input has compareDocumentPosition
		var compare = !a.compareDocumentPosition - !b.compareDocumentPosition;
		if ( compare ) {
			return compare;
		}

		// Calculate position if both inputs belong to the same document
		compare = ( a.ownerDocument || a ) === ( b.ownerDocument || b ) ?
			a.compareDocumentPosition( b ) :

			// Otherwise we know they are disconnected
			1;

		// Disconnected nodes
		if ( compare & 1 ||
			(!support.sortDetached && b.compareDocumentPosition( a ) === compare) ) {

			// Choose the first element that is related to our preferred document
			if ( a === document || a.ownerDocument === preferredDoc && contains(preferredDoc, a) ) {
				return -1;
			}
			if ( b === document || b.ownerDocument === preferredDoc && contains(preferredDoc, b) ) {
				return 1;
			}

			// Maintain original order
			return sortInput ?
				( indexOf( sortInput, a ) - indexOf( sortInput, b ) ) :
				0;
		}

		return compare & 4 ? -1 : 1;
	} :
	function( a, b ) {
		// Exit early if the nodes are identical
		if ( a === b ) {
			hasDuplicate = true;
			return 0;
		}

		var cur,
			i = 0,
			aup = a.parentNode,
			bup = b.parentNode,
			ap = [ a ],
			bp = [ b ];

		// Parentless nodes are either documents or disconnected
		if ( !aup || !bup ) {
			return a === document ? -1 :
				b === document ? 1 :
				aup ? -1 :
				bup ? 1 :
				sortInput ?
				( indexOf( sortInput, a ) - indexOf( sortInput, b ) ) :
				0;

		// If the nodes are siblings, we can do a quick check
		} else if ( aup === bup ) {
			return siblingCheck( a, b );
		}

		// Otherwise we need full lists of their ancestors for comparison
		cur = a;
		while ( (cur = cur.parentNode) ) {
			ap.unshift( cur );
		}
		cur = b;
		while ( (cur = cur.parentNode) ) {
			bp.unshift( cur );
		}

		// Walk down the tree looking for a discrepancy
		while ( ap[i] === bp[i] ) {
			i++;
		}

		return i ?
			// Do a sibling check if the nodes have a common ancestor
			siblingCheck( ap[i], bp[i] ) :

			// Otherwise nodes in our document sort first
			ap[i] === preferredDoc ? -1 :
			bp[i] === preferredDoc ? 1 :
			0;
	};

	return document;
};

Sizzle.matches = function( expr, elements ) {
	return Sizzle( expr, null, null, elements );
};

Sizzle.matchesSelector = function( elem, expr ) {
	// Set document vars if needed
	if ( ( elem.ownerDocument || elem ) !== document ) {
		setDocument( elem );
	}

	// Make sure that attribute selectors are quoted
	expr = expr.replace( rattributeQuotes, "='$1']" );

	if ( support.matchesSelector && documentIsHTML &&
		!compilerCache[ expr + " " ] &&
		( !rbuggyMatches || !rbuggyMatches.test( expr ) ) &&
		( !rbuggyQSA     || !rbuggyQSA.test( expr ) ) ) {

		try {
			var ret = matches.call( elem, expr );

			// IE 9's matchesSelector returns false on disconnected nodes
			if ( ret || support.disconnectedMatch ||
					// As well, disconnected nodes are said to be in a document
					// fragment in IE 9
					elem.document && elem.document.nodeType !== 11 ) {
				return ret;
			}
		} catch (e) {}
	}

	return Sizzle( expr, document, null, [ elem ] ).length > 0;
};

Sizzle.contains = function( context, elem ) {
	// Set document vars if needed
	if ( ( context.ownerDocument || context ) !== document ) {
		setDocument( context );
	}
	return contains( context, elem );
};

Sizzle.attr = function( elem, name ) {
	// Set document vars if needed
	if ( ( elem.ownerDocument || elem ) !== document ) {
		setDocument( elem );
	}

	var fn = Expr.attrHandle[ name.toLowerCase() ],
		// Don't get fooled by Object.prototype properties (jQuery #13807)
		val = fn && hasOwn.call( Expr.attrHandle, name.toLowerCase() ) ?
			fn( elem, name, !documentIsHTML ) :
			undefined;

	return val !== undefined ?
		val :
		support.attributes || !documentIsHTML ?
			elem.getAttribute( name ) :
			(val = elem.getAttributeNode(name)) && val.specified ?
				val.value :
				null;
};

Sizzle.escape = function( sel ) {
	return (sel + "").replace( rcssescape, fcssescape );
};

Sizzle.error = function( msg ) {
	throw new Error( "Syntax error, unrecognized expression: " + msg );
};

/**
 * Document sorting and removing duplicates
 * @param {ArrayLike} results
 */
Sizzle.uniqueSort = function( results ) {
	var elem,
		duplicates = [],
		j = 0,
		i = 0;

	// Unless we *know* we can detect duplicates, assume their presence
	hasDuplicate = !support.detectDuplicates;
	sortInput = !support.sortStable && results.slice( 0 );
	results.sort( sortOrder );

	if ( hasDuplicate ) {
		while ( (elem = results[i++]) ) {
			if ( elem === results[ i ] ) {
				j = duplicates.push( i );
			}
		}
		while ( j-- ) {
			results.splice( duplicates[ j ], 1 );
		}
	}

	// Clear input after sorting to release objects
	// See https://github.com/jquery/sizzle/pull/225
	sortInput = null;

	return results;
};

/**
 * Utility function for retrieving the text value of an array of DOM nodes
 * @param {Array|Element} elem
 */
getText = Sizzle.getText = function( elem ) {
	var node,
		ret = "",
		i = 0,
		nodeType = elem.nodeType;

	if ( !nodeType ) {
		// If no nodeType, this is expected to be an array
		while ( (node = elem[i++]) ) {
			// Do not traverse comment nodes
			ret += getText( node );
		}
	} else if ( nodeType === 1 || nodeType === 9 || nodeType === 11 ) {
		// Use textContent for elements
		// innerText usage removed for consistency of new lines (jQuery #11153)
		if ( typeof elem.textContent === "string" ) {
			return elem.textContent;
		} else {
			// Traverse its children
			for ( elem = elem.firstChild; elem; elem = elem.nextSibling ) {
				ret += getText( elem );
			}
		}
	} else if ( nodeType === 3 || nodeType === 4 ) {
		return elem.nodeValue;
	}
	// Do not include comment or processing instruction nodes

	return ret;
};

Expr = Sizzle.selectors = {

	// Can be adjusted by the user
	cacheLength: 50,

	createPseudo: markFunction,

	match: matchExpr,

	attrHandle: {},

	find: {},

	relative: {
		">": { dir: "parentNode", first: true },
		" ": { dir: "parentNode" },
		"+": { dir: "previousSibling", first: true },
		"~": { dir: "previousSibling" }
	},

	preFilter: {
		"ATTR": function( match ) {
			match[1] = match[1].replace( runescape, funescape );

			// Move the given value to match[3] whether quoted or unquoted
			match[3] = ( match[3] || match[4] || match[5] || "" ).replace( runescape, funescape );

			if ( match[2] === "~=" ) {
				match[3] = " " + match[3] + " ";
			}

			return match.slice( 0, 4 );
		},

		"CHILD": function( match ) {
			/* matches from matchExpr["CHILD"]
				1 type (only|nth|...)
				2 what (child|of-type)
				3 argument (even|odd|\d*|\d*n([+-]\d+)?|...)
				4 xn-component of xn+y argument ([+-]?\d*n|)
				5 sign of xn-component
				6 x of xn-component
				7 sign of y-component
				8 y of y-component
			*/
			match[1] = match[1].toLowerCase();

			if ( match[1].slice( 0, 3 ) === "nth" ) {
				// nth-* requires argument
				if ( !match[3] ) {
					Sizzle.error( match[0] );
				}

				// numeric x and y parameters for Expr.filter.CHILD
				// remember that false/true cast respectively to 0/1
				match[4] = +( match[4] ? match[5] + (match[6] || 1) : 2 * ( match[3] === "even" || match[3] === "odd" ) );
				match[5] = +( ( match[7] + match[8] ) || match[3] === "odd" );

			// other types prohibit arguments
			} else if ( match[3] ) {
				Sizzle.error( match[0] );
			}

			return match;
		},

		"PSEUDO": function( match ) {
			var excess,
				unquoted = !match[6] && match[2];

			if ( matchExpr["CHILD"].test( match[0] ) ) {
				return null;
			}

			// Accept quoted arguments as-is
			if ( match[3] ) {
				match[2] = match[4] || match[5] || "";

			// Strip excess characters from unquoted arguments
			} else if ( unquoted && rpseudo.test( unquoted ) &&
				// Get excess from tokenize (recursively)
				(excess = tokenize( unquoted, true )) &&
				// advance to the next closing parenthesis
				(excess = unquoted.indexOf( ")", unquoted.length - excess ) - unquoted.length) ) {

				// excess is a negative index
				match[0] = match[0].slice( 0, excess );
				match[2] = unquoted.slice( 0, excess );
			}

			// Return only captures needed by the pseudo filter method (type and argument)
			return match.slice( 0, 3 );
		}
	},

	filter: {

		"TAG": function( nodeNameSelector ) {
			var nodeName = nodeNameSelector.replace( runescape, funescape ).toLowerCase();
			return nodeNameSelector === "*" ?
				function() { return true; } :
				function( elem ) {
					return elem.nodeName && elem.nodeName.toLowerCase() === nodeName;
				};
		},

		"CLASS": function( className ) {
			var pattern = classCache[ className + " " ];

			return pattern ||
				(pattern = new RegExp( "(^|" + whitespace + ")" + className + "(" + whitespace + "|$)" )) &&
				classCache( className, function( elem ) {
					return pattern.test( typeof elem.className === "string" && elem.className || typeof elem.getAttribute !== "undefined" && elem.getAttribute("class") || "" );
				});
		},

		"ATTR": function( name, operator, check ) {
			return function( elem ) {
				var result = Sizzle.attr( elem, name );

				if ( result == null ) {
					return operator === "!=";
				}
				if ( !operator ) {
					return true;
				}

				result += "";

				return operator === "=" ? result === check :
					operator === "!=" ? result !== check :
					operator === "^=" ? check && result.indexOf( check ) === 0 :
					operator === "*=" ? check && result.indexOf( check ) > -1 :
					operator === "$=" ? check && result.slice( -check.length ) === check :
					operator === "~=" ? ( " " + result.replace( rwhitespace, " " ) + " " ).indexOf( check ) > -1 :
					operator === "|=" ? result === check || result.slice( 0, check.length + 1 ) === check + "-" :
					false;
			};
		},

		"CHILD": function( type, what, argument, first, last ) {
			var simple = type.slice( 0, 3 ) !== "nth",
				forward = type.slice( -4 ) !== "last",
				ofType = what === "of-type";

			return first === 1 && last === 0 ?

				// Shortcut for :nth-*(n)
				function( elem ) {
					return !!elem.parentNode;
				} :

				function( elem, context, xml ) {
					var cache, uniqueCache, outerCache, node, nodeIndex, start,
						dir = simple !== forward ? "nextSibling" : "previousSibling",
						parent = elem.parentNode,
						name = ofType && elem.nodeName.toLowerCase(),
						useCache = !xml && !ofType,
						diff = false;

					if ( parent ) {

						// :(first|last|only)-(child|of-type)
						if ( simple ) {
							while ( dir ) {
								node = elem;
								while ( (node = node[ dir ]) ) {
									if ( ofType ?
										node.nodeName.toLowerCase() === name :
										node.nodeType === 1 ) {

										return false;
									}
								}
								// Reverse direction for :only-* (if we haven't yet done so)
								start = dir = type === "only" && !start && "nextSibling";
							}
							return true;
						}

						start = [ forward ? parent.firstChild : parent.lastChild ];

						// non-xml :nth-child(...) stores cache data on `parent`
						if ( forward && useCache ) {

							// Seek `elem` from a previously-cached index

							// ...in a gzip-friendly way
							node = parent;
							outerCache = node[ expando ] || (node[ expando ] = {});

							// Support: IE <9 only
							// Defend against cloned attroperties (jQuery gh-1709)
							uniqueCache = outerCache[ node.uniqueID ] ||
								(outerCache[ node.uniqueID ] = {});

							cache = uniqueCache[ type ] || [];
							nodeIndex = cache[ 0 ] === dirruns && cache[ 1 ];
							diff = nodeIndex && cache[ 2 ];
							node = nodeIndex && parent.childNodes[ nodeIndex ];

							while ( (node = ++nodeIndex && node && node[ dir ] ||

								// Fallback to seeking `elem` from the start
								(diff = nodeIndex = 0) || start.pop()) ) {

								// When found, cache indexes on `parent` and break
								if ( node.nodeType === 1 && ++diff && node === elem ) {
									uniqueCache[ type ] = [ dirruns, nodeIndex, diff ];
									break;
								}
							}

						} else {
							// Use previously-cached element index if available
							if ( useCache ) {
								// ...in a gzip-friendly way
								node = elem;
								outerCache = node[ expando ] || (node[ expando ] = {});

								// Support: IE <9 only
								// Defend against cloned attroperties (jQuery gh-1709)
								uniqueCache = outerCache[ node.uniqueID ] ||
									(outerCache[ node.uniqueID ] = {});

								cache = uniqueCache[ type ] || [];
								nodeIndex = cache[ 0 ] === dirruns && cache[ 1 ];
								diff = nodeIndex;
							}

							// xml :nth-child(...)
							// or :nth-last-child(...) or :nth(-last)?-of-type(...)
							if ( diff === false ) {
								// Use the same loop as above to seek `elem` from the start
								while ( (node = ++nodeIndex && node && node[ dir ] ||
									(diff = nodeIndex = 0) || start.pop()) ) {

									if ( ( ofType ?
										node.nodeName.toLowerCase() === name :
										node.nodeType === 1 ) &&
										++diff ) {

										// Cache the index of each encountered element
										if ( useCache ) {
											outerCache = node[ expando ] || (node[ expando ] = {});

											// Support: IE <9 only
											// Defend against cloned attroperties (jQuery gh-1709)
											uniqueCache = outerCache[ node.uniqueID ] ||
												(outerCache[ node.uniqueID ] = {});

											uniqueCache[ type ] = [ dirruns, diff ];
										}

										if ( node === elem ) {
											break;
										}
									}
								}
							}
						}

						// Incorporate the offset, then check against cycle size
						diff -= last;
						return diff === first || ( diff % first === 0 && diff / first >= 0 );
					}
				};
		},

		"PSEUDO": function( pseudo, argument ) {
			// pseudo-class names are case-insensitive
			// http://www.w3.org/TR/selectors/#pseudo-classes
			// Prioritize by case sensitivity in case custom pseudos are added with uppercase letters
			// Remember that setFilters inherits from pseudos
			var args,
				fn = Expr.pseudos[ pseudo ] || Expr.setFilters[ pseudo.toLowerCase() ] ||
					Sizzle.error( "unsupported pseudo: " + pseudo );

			// The user may use createPseudo to indicate that
			// arguments are needed to create the filter function
			// just as Sizzle does
			if ( fn[ expando ] ) {
				return fn( argument );
			}

			// But maintain support for old signatures
			if ( fn.length > 1 ) {
				args = [ pseudo, pseudo, "", argument ];
				return Expr.setFilters.hasOwnProperty( pseudo.toLowerCase() ) ?
					markFunction(function( seed, matches ) {
						var idx,
							matched = fn( seed, argument ),
							i = matched.length;
						while ( i-- ) {
							idx = indexOf( seed, matched[i] );
							seed[ idx ] = !( matches[ idx ] = matched[i] );
						}
					}) :
					function( elem ) {
						return fn( elem, 0, args );
					};
			}

			return fn;
		}
	},

	pseudos: {
		// Potentially complex pseudos
		"not": markFunction(function( selector ) {
			// Trim the selector passed to compile
			// to avoid treating leading and trailing
			// spaces as combinators
			var input = [],
				results = [],
				matcher = compile( selector.replace( rtrim, "$1" ) );

			return matcher[ expando ] ?
				markFunction(function( seed, matches, context, xml ) {
					var elem,
						unmatched = matcher( seed, null, xml, [] ),
						i = seed.length;

					// Match elements unmatched by `matcher`
					while ( i-- ) {
						if ( (elem = unmatched[i]) ) {
							seed[i] = !(matches[i] = elem);
						}
					}
				}) :
				function( elem, context, xml ) {
					input[0] = elem;
					matcher( input, null, xml, results );
					// Don't keep the element (issue #299)
					input[0] = null;
					return !results.pop();
				};
		}),

		"has": markFunction(function( selector ) {
			return function( elem ) {
				return Sizzle( selector, elem ).length > 0;
			};
		}),

		"contains": markFunction(function( text ) {
			text = text.replace( runescape, funescape );
			return function( elem ) {
				return ( elem.textContent || elem.innerText || getText( elem ) ).indexOf( text ) > -1;
			};
		}),

		// "Whether an element is represented by a :lang() selector
		// is based solely on the element's language value
		// being equal to the identifier C,
		// or beginning with the identifier C immediately followed by "-".
		// The matching of C against the element's language value is performed case-insensitively.
		// The identifier C does not have to be a valid language name."
		// http://www.w3.org/TR/selectors/#lang-pseudo
		"lang": markFunction( function( lang ) {
			// lang value must be a valid identifier
			if ( !ridentifier.test(lang || "") ) {
				Sizzle.error( "unsupported lang: " + lang );
			}
			lang = lang.replace( runescape, funescape ).toLowerCase();
			return function( elem ) {
				var elemLang;
				do {
					if ( (elemLang = documentIsHTML ?
						elem.lang :
						elem.getAttribute("xml:lang") || elem.getAttribute("lang")) ) {

						elemLang = elemLang.toLowerCase();
						return elemLang === lang || elemLang.indexOf( lang + "-" ) === 0;
					}
				} while ( (elem = elem.parentNode) && elem.nodeType === 1 );
				return false;
			};
		}),

		// Miscellaneous
		"target": function( elem ) {
			var hash = window.location && window.location.hash;
			return hash && hash.slice( 1 ) === elem.id;
		},

		"root": function( elem ) {
			return elem === docElem;
		},

		"focus": function( elem ) {
			return elem === document.activeElement && (!document.hasFocus || document.hasFocus()) && !!(elem.type || elem.href || ~elem.tabIndex);
		},

		// Boolean properties
		"enabled": createDisabledPseudo( false ),
		"disabled": createDisabledPseudo( true ),

		"checked": function( elem ) {
			// In CSS3, :checked should return both checked and selected elements
			// http://www.w3.org/TR/2011/REC-css3-selectors-20110929/#checked
			var nodeName = elem.nodeName.toLowerCase();
			return (nodeName === "input" && !!elem.checked) || (nodeName === "option" && !!elem.selected);
		},

		"selected": function( elem ) {
			// Accessing this property makes selected-by-default
			// options in Safari work properly
			if ( elem.parentNode ) {
				elem.parentNode.selectedIndex;
			}

			return elem.selected === true;
		},

		// Contents
		"empty": function( elem ) {
			// http://www.w3.org/TR/selectors/#empty-pseudo
			// :empty is negated by element (1) or content nodes (text: 3; cdata: 4; entity ref: 5),
			//   but not by others (comment: 8; processing instruction: 7; etc.)
			// nodeType < 6 works because attributes (2) do not appear as children
			for ( elem = elem.firstChild; elem; elem = elem.nextSibling ) {
				if ( elem.nodeType < 6 ) {
					return false;
				}
			}
			return true;
		},

		"parent": function( elem ) {
			return !Expr.pseudos["empty"]( elem );
		},

		// Element/input types
		"header": function( elem ) {
			return rheader.test( elem.nodeName );
		},

		"input": function( elem ) {
			return rinputs.test( elem.nodeName );
		},

		"button": function( elem ) {
			var name = elem.nodeName.toLowerCase();
			return name === "input" && elem.type === "button" || name === "button";
		},

		"text": function( elem ) {
			var attr;
			return elem.nodeName.toLowerCase() === "input" &&
				elem.type === "text" &&

				// Support: IE<8
				// New HTML5 attribute values (e.g., "search") appear with elem.type === "text"
				( (attr = elem.getAttribute("type")) == null || attr.toLowerCase() === "text" );
		},

		// Position-in-collection
		"first": createPositionalPseudo(function() {
			return [ 0 ];
		}),

		"last": createPositionalPseudo(function( matchIndexes, length ) {
			return [ length - 1 ];
		}),

		"eq": createPositionalPseudo(function( matchIndexes, length, argument ) {
			return [ argument < 0 ? argument + length : argument ];
		}),

		"even": createPositionalPseudo(function( matchIndexes, length ) {
			var i = 0;
			for ( ; i < length; i += 2 ) {
				matchIndexes.push( i );
			}
			return matchIndexes;
		}),

		"odd": createPositionalPseudo(function( matchIndexes, length ) {
			var i = 1;
			for ( ; i < length; i += 2 ) {
				matchIndexes.push( i );
			}
			return matchIndexes;
		}),

		"lt": createPositionalPseudo(function( matchIndexes, length, argument ) {
			var i = argument < 0 ? argument + length : argument;
			for ( ; --i >= 0; ) {
				matchIndexes.push( i );
			}
			return matchIndexes;
		}),

		"gt": createPositionalPseudo(function( matchIndexes, length, argument ) {
			var i = argument < 0 ? argument + length : argument;
			for ( ; ++i < length; ) {
				matchIndexes.push( i );
			}
			return matchIndexes;
		})
	}
};

Expr.pseudos["nth"] = Expr.pseudos["eq"];

// Add button/input type pseudos
for ( i in { radio: true, checkbox: true, file: true, password: true, image: true } ) {
	Expr.pseudos[ i ] = createInputPseudo( i );
}
for ( i in { submit: true, reset: true } ) {
	Expr.pseudos[ i ] = createButtonPseudo( i );
}

// Easy API for creating new setFilters
function setFilters() {}
setFilters.prototype = Expr.filters = Expr.pseudos;
Expr.setFilters = new setFilters();

tokenize = Sizzle.tokenize = function( selector, parseOnly ) {
	var matched, match, tokens, type,
		soFar, groups, preFilters,
		cached = tokenCache[ selector + " " ];

	if ( cached ) {
		return parseOnly ? 0 : cached.slice( 0 );
	}

	soFar = selector;
	groups = [];
	preFilters = Expr.preFilter;

	while ( soFar ) {

		// Comma and first run
		if ( !matched || (match = rcomma.exec( soFar )) ) {
			if ( match ) {
				// Don't consume trailing commas as valid
				soFar = soFar.slice( match[0].length ) || soFar;
			}
			groups.push( (tokens = []) );
		}

		matched = false;

		// Combinators
		if ( (match = rcombinators.exec( soFar )) ) {
			matched = match.shift();
			tokens.push({
				value: matched,
				// Cast descendant combinators to space
				type: match[0].replace( rtrim, " " )
			});
			soFar = soFar.slice( matched.length );
		}

		// Filters
		for ( type in Expr.filter ) {
			if ( (match = matchExpr[ type ].exec( soFar )) && (!preFilters[ type ] ||
				(match = preFilters[ type ]( match ))) ) {
				matched = match.shift();
				tokens.push({
					value: matched,
					type: type,
					matches: match
				});
				soFar = soFar.slice( matched.length );
			}
		}

		if ( !matched ) {
			break;
		}
	}

	// Return the length of the invalid excess
	// if we're just parsing
	// Otherwise, throw an error or return tokens
	return parseOnly ?
		soFar.length :
		soFar ?
			Sizzle.error( selector ) :
			// Cache the tokens
			tokenCache( selector, groups ).slice( 0 );
};

function toSelector( tokens ) {
	var i = 0,
		len = tokens.length,
		selector = "";
	for ( ; i < len; i++ ) {
		selector += tokens[i].value;
	}
	return selector;
}

function addCombinator( matcher, combinator, base ) {
	var dir = combinator.dir,
		skip = combinator.next,
		key = skip || dir,
		checkNonElements = base && key === "parentNode",
		doneName = done++;

	return combinator.first ?
		// Check against closest ancestor/preceding element
		function( elem, context, xml ) {
			while ( (elem = elem[ dir ]) ) {
				if ( elem.nodeType === 1 || checkNonElements ) {
					return matcher( elem, context, xml );
				}
			}
			return false;
		} :

		// Check against all ancestor/preceding elements
		function( elem, context, xml ) {
			var oldCache, uniqueCache, outerCache,
				newCache = [ dirruns, doneName ];

			// We can't set arbitrary data on XML nodes, so they don't benefit from combinator caching
			if ( xml ) {
				while ( (elem = elem[ dir ]) ) {
					if ( elem.nodeType === 1 || checkNonElements ) {
						if ( matcher( elem, context, xml ) ) {
							return true;
						}
					}
				}
			} else {
				while ( (elem = elem[ dir ]) ) {
					if ( elem.nodeType === 1 || checkNonElements ) {
						outerCache = elem[ expando ] || (elem[ expando ] = {});

						// Support: IE <9 only
						// Defend against cloned attroperties (jQuery gh-1709)
						uniqueCache = outerCache[ elem.uniqueID ] || (outerCache[ elem.uniqueID ] = {});

						if ( skip && skip === elem.nodeName.toLowerCase() ) {
							elem = elem[ dir ] || elem;
						} else if ( (oldCache = uniqueCache[ key ]) &&
							oldCache[ 0 ] === dirruns && oldCache[ 1 ] === doneName ) {

							// Assign to newCache so results back-propagate to previous elements
							return (newCache[ 2 ] = oldCache[ 2 ]);
						} else {
							// Reuse newcache so results back-propagate to previous elements
							uniqueCache[ key ] = newCache;

							// A match means we're done; a fail means we have to keep checking
							if ( (newCache[ 2 ] = matcher( elem, context, xml )) ) {
								return true;
							}
						}
					}
				}
			}
			return false;
		};
}

function elementMatcher( matchers ) {
	return matchers.length > 1 ?
		function( elem, context, xml ) {
			var i = matchers.length;
			while ( i-- ) {
				if ( !matchers[i]( elem, context, xml ) ) {
					return false;
				}
			}
			return true;
		} :
		matchers[0];
}

function multipleContexts( selector, contexts, results ) {
	var i = 0,
		len = contexts.length;
	for ( ; i < len; i++ ) {
		Sizzle( selector, contexts[i], results );
	}
	return results;
}

function condense( unmatched, map, filter, context, xml ) {
	var elem,
		newUnmatched = [],
		i = 0,
		len = unmatched.length,
		mapped = map != null;

	for ( ; i < len; i++ ) {
		if ( (elem = unmatched[i]) ) {
			if ( !filter || filter( elem, context, xml ) ) {
				newUnmatched.push( elem );
				if ( mapped ) {
					map.push( i );
				}
			}
		}
	}

	return newUnmatched;
}

function setMatcher( preFilter, selector, matcher, postFilter, postFinder, postSelector ) {
	if ( postFilter && !postFilter[ expando ] ) {
		postFilter = setMatcher( postFilter );
	}
	if ( postFinder && !postFinder[ expando ] ) {
		postFinder = setMatcher( postFinder, postSelector );
	}
	return markFunction(function( seed, results, context, xml ) {
		var temp, i, elem,
			preMap = [],
			postMap = [],
			preexisting = results.length,

			// Get initial elements from seed or context
			elems = seed || multipleContexts( selector || "*", context.nodeType ? [ context ] : context, [] ),

			// Prefilter to get matcher input, preserving a map for seed-results synchronization
			matcherIn = preFilter && ( seed || !selector ) ?
				condense( elems, preMap, preFilter, context, xml ) :
				elems,

			matcherOut = matcher ?
				// If we have a postFinder, or filtered seed, or non-seed postFilter or preexisting results,
				postFinder || ( seed ? preFilter : preexisting || postFilter ) ?

					// ...intermediate processing is necessary
					[] :

					// ...otherwise use results directly
					results :
				matcherIn;

		// Find primary matches
		if ( matcher ) {
			matcher( matcherIn, matcherOut, context, xml );
		}

		// Apply postFilter
		if ( postFilter ) {
			temp = condense( matcherOut, postMap );
			postFilter( temp, [], context, xml );

			// Un-match failing elements by moving them back to matcherIn
			i = temp.length;
			while ( i-- ) {
				if ( (elem = temp[i]) ) {
					matcherOut[ postMap[i] ] = !(matcherIn[ postMap[i] ] = elem);
				}
			}
		}

		if ( seed ) {
			if ( postFinder || preFilter ) {
				if ( postFinder ) {
					// Get the final matcherOut by condensing this intermediate into postFinder contexts
					temp = [];
					i = matcherOut.length;
					while ( i-- ) {
						if ( (elem = matcherOut[i]) ) {
							// Restore matcherIn since elem is not yet a final match
							temp.push( (matcherIn[i] = elem) );
						}
					}
					postFinder( null, (matcherOut = []), temp, xml );
				}

				// Move matched elements from seed to results to keep them synchronized
				i = matcherOut.length;
				while ( i-- ) {
					if ( (elem = matcherOut[i]) &&
						(temp = postFinder ? indexOf( seed, elem ) : preMap[i]) > -1 ) {

						seed[temp] = !(results[temp] = elem);
					}
				}
			}

		// Add elements to results, through postFinder if defined
		} else {
			matcherOut = condense(
				matcherOut === results ?
					matcherOut.splice( preexisting, matcherOut.length ) :
					matcherOut
			);
			if ( postFinder ) {
				postFinder( null, results, matcherOut, xml );
			} else {
				push.apply( results, matcherOut );
			}
		}
	});
}

function matcherFromTokens( tokens ) {
	var checkContext, matcher, j,
		len = tokens.length,
		leadingRelative = Expr.relative[ tokens[0].type ],
		implicitRelative = leadingRelative || Expr.relative[" "],
		i = leadingRelative ? 1 : 0,

		// The foundational matcher ensures that elements are reachable from top-level context(s)
		matchContext = addCombinator( function( elem ) {
			return elem === checkContext;
		}, implicitRelative, true ),
		matchAnyContext = addCombinator( function( elem ) {
			return indexOf( checkContext, elem ) > -1;
		}, implicitRelative, true ),
		matchers = [ function( elem, context, xml ) {
			var ret = ( !leadingRelative && ( xml || context !== outermostContext ) ) || (
				(checkContext = context).nodeType ?
					matchContext( elem, context, xml ) :
					matchAnyContext( elem, context, xml ) );
			// Avoid hanging onto element (issue #299)
			checkContext = null;
			return ret;
		} ];

	for ( ; i < len; i++ ) {
		if ( (matcher = Expr.relative[ tokens[i].type ]) ) {
			matchers = [ addCombinator(elementMatcher( matchers ), matcher) ];
		} else {
			matcher = Expr.filter[ tokens[i].type ].apply( null, tokens[i].matches );

			// Return special upon seeing a positional matcher
			if ( matcher[ expando ] ) {
				// Find the next relative operator (if any) for proper handling
				j = ++i;
				for ( ; j < len; j++ ) {
					if ( Expr.relative[ tokens[j].type ] ) {
						break;
					}
				}
				return setMatcher(
					i > 1 && elementMatcher( matchers ),
					i > 1 && toSelector(
						// If the preceding token was a descendant combinator, insert an implicit any-element `*`
						tokens.slice( 0, i - 1 ).concat({ value: tokens[ i - 2 ].type === " " ? "*" : "" })
					).replace( rtrim, "$1" ),
					matcher,
					i < j && matcherFromTokens( tokens.slice( i, j ) ),
					j < len && matcherFromTokens( (tokens = tokens.slice( j )) ),
					j < len && toSelector( tokens )
				);
			}
			matchers.push( matcher );
		}
	}

	return elementMatcher( matchers );
}

function matcherFromGroupMatchers( elementMatchers, setMatchers ) {
	var bySet = setMatchers.length > 0,
		byElement = elementMatchers.length > 0,
		superMatcher = function( seed, context, xml, results, outermost ) {
			var elem, j, matcher,
				matchedCount = 0,
				i = "0",
				unmatched = seed && [],
				setMatched = [],
				contextBackup = outermostContext,
				// We must always have either seed elements or outermost context
				elems = seed || byElement && Expr.find["TAG"]( "*", outermost ),
				// Use integer dirruns iff this is the outermost matcher
				dirrunsUnique = (dirruns += contextBackup == null ? 1 : Math.random() || 0.1),
				len = elems.length;

			if ( outermost ) {
				outermostContext = context === document || context || outermost;
			}

			// Add elements passing elementMatchers directly to results
			// Support: IE<9, Safari
			// Tolerate NodeList properties (IE: "length"; Safari: <number>) matching elements by id
			for ( ; i !== len && (elem = elems[i]) != null; i++ ) {
				if ( byElement && elem ) {
					j = 0;
					if ( !context && elem.ownerDocument !== document ) {
						setDocument( elem );
						xml = !documentIsHTML;
					}
					while ( (matcher = elementMatchers[j++]) ) {
						if ( matcher( elem, context || document, xml) ) {
							results.push( elem );
							break;
						}
					}
					if ( outermost ) {
						dirruns = dirrunsUnique;
					}
				}

				// Track unmatched elements for set filters
				if ( bySet ) {
					// They will have gone through all possible matchers
					if ( (elem = !matcher && elem) ) {
						matchedCount--;
					}

					// Lengthen the array for every element, matched or not
					if ( seed ) {
						unmatched.push( elem );
					}
				}
			}

			// `i` is now the count of elements visited above, and adding it to `matchedCount`
			// makes the latter nonnegative.
			matchedCount += i;

			// Apply set filters to unmatched elements
			// NOTE: This can be skipped if there are no unmatched elements (i.e., `matchedCount`
			// equals `i`), unless we didn't visit _any_ elements in the above loop because we have
			// no element matchers and no seed.
			// Incrementing an initially-string "0" `i` allows `i` to remain a string only in that
			// case, which will result in a "00" `matchedCount` that differs from `i` but is also
			// numerically zero.
			if ( bySet && i !== matchedCount ) {
				j = 0;
				while ( (matcher = setMatchers[j++]) ) {
					matcher( unmatched, setMatched, context, xml );
				}

				if ( seed ) {
					// Reintegrate element matches to eliminate the need for sorting
					if ( matchedCount > 0 ) {
						while ( i-- ) {
							if ( !(unmatched[i] || setMatched[i]) ) {
								setMatched[i] = pop.call( results );
							}
						}
					}

					// Discard index placeholder values to get only actual matches
					setMatched = condense( setMatched );
				}

				// Add matches to results
				push.apply( results, setMatched );

				// Seedless set matches succeeding multiple successful matchers stipulate sorting
				if ( outermost && !seed && setMatched.length > 0 &&
					( matchedCount + setMatchers.length ) > 1 ) {

					Sizzle.uniqueSort( results );
				}
			}

			// Override manipulation of globals by nested matchers
			if ( outermost ) {
				dirruns = dirrunsUnique;
				outermostContext = contextBackup;
			}

			return unmatched;
		};

	return bySet ?
		markFunction( superMatcher ) :
		superMatcher;
}

compile = Sizzle.compile = function( selector, match /* Internal Use Only */ ) {
	var i,
		setMatchers = [],
		elementMatchers = [],
		cached = compilerCache[ selector + " " ];

	if ( !cached ) {
		// Generate a function of recursive functions that can be used to check each element
		if ( !match ) {
			match = tokenize( selector );
		}
		i = match.length;
		while ( i-- ) {
			cached = matcherFromTokens( match[i] );
			if ( cached[ expando ] ) {
				setMatchers.push( cached );
			} else {
				elementMatchers.push( cached );
			}
		}

		// Cache the compiled function
		cached = compilerCache( selector, matcherFromGroupMatchers( elementMatchers, setMatchers ) );

		// Save selector and tokenization
		cached.selector = selector;
	}
	return cached;
};

/**
 * A low-level selection function that works with Sizzle's compiled
 *  selector functions
 * @param {String|Function} selector A selector or a pre-compiled
 *  selector function built with Sizzle.compile
 * @param {Element} context
 * @param {Array} [results]
 * @param {Array} [seed] A set of elements to match against
 */
select = Sizzle.select = function( selector, context, results, seed ) {
	var i, tokens, token, type, find,
		compiled = typeof selector === "function" && selector,
		match = !seed && tokenize( (selector = compiled.selector || selector) );

	results = results || [];

	// Try to minimize operations if there is only one selector in the list and no seed
	// (the latter of which guarantees us context)
	if ( match.length === 1 ) {

		// Reduce context if the leading compound selector is an ID
		tokens = match[0] = match[0].slice( 0 );
		if ( tokens.length > 2 && (token = tokens[0]).type === "ID" &&
				context.nodeType === 9 && documentIsHTML && Expr.relative[ tokens[1].type ] ) {

			context = ( Expr.find["ID"]( token.matches[0].replace(runescape, funescape), context ) || [] )[0];
			if ( !context ) {
				return results;

			// Precompiled matchers will still verify ancestry, so step up a level
			} else if ( compiled ) {
				context = context.parentNode;
			}

			selector = selector.slice( tokens.shift().value.length );
		}

		// Fetch a seed set for right-to-left matching
		i = matchExpr["needsContext"].test( selector ) ? 0 : tokens.length;
		while ( i-- ) {
			token = tokens[i];

			// Abort if we hit a combinator
			if ( Expr.relative[ (type = token.type) ] ) {
				break;
			}
			if ( (find = Expr.find[ type ]) ) {
				// Search, expanding context for leading sibling combinators
				if ( (seed = find(
					token.matches[0].replace( runescape, funescape ),
					rsibling.test( tokens[0].type ) && testContext( context.parentNode ) || context
				)) ) {

					// If seed is empty or no tokens remain, we can return early
					tokens.splice( i, 1 );
					selector = seed.length && toSelector( tokens );
					if ( !selector ) {
						push.apply( results, seed );
						return results;
					}

					break;
				}
			}
		}
	}

	// Compile and execute a filtering function if one is not provided
	// Provide `match` to avoid retokenization if we modified the selector above
	( compiled || compile( selector, match ) )(
		seed,
		context,
		!documentIsHTML,
		results,
		!context || rsibling.test( selector ) && testContext( context.parentNode ) || context
	);
	return results;
};

// One-time assignments

// Sort stability
support.sortStable = expando.split("").sort( sortOrder ).join("") === expando;

// Support: Chrome 14-35+
// Always assume duplicates if they aren't passed to the comparison function
support.detectDuplicates = !!hasDuplicate;

// Initialize against the default document
setDocument();

// Support: Webkit<537.32 - Safari 6.0.3/Chrome 25 (fixed in Chrome 27)
// Detached nodes confoundingly follow *each other*
support.sortDetached = assert(function( el ) {
	// Should return 1, but returns 4 (following)
	return el.compareDocumentPosition( document.createElement("fieldset") ) & 1;
});

// Support: IE<8
// Prevent attribute/property "interpolation"
// https://msdn.microsoft.com/en-us/library/ms536429%28VS.85%29.aspx
if ( !assert(function( el ) {
	el.innerHTML = "<a href='#'></a>";
	return el.firstChild.getAttribute("href") === "#" ;
}) ) {
	addHandle( "type|href|height|width", function( elem, name, isXML ) {
		if ( !isXML ) {
			return elem.getAttribute( name, name.toLowerCase() === "type" ? 1 : 2 );
		}
	});
}

// Support: IE<9
// Use defaultValue in place of getAttribute("value")
if ( !support.attributes || !assert(function( el ) {
	el.innerHTML = "<input/>";
	el.firstChild.setAttribute( "value", "" );
	return el.firstChild.getAttribute( "value" ) === "";
}) ) {
	addHandle( "value", function( elem, name, isXML ) {
		if ( !isXML && elem.nodeName.toLowerCase() === "input" ) {
			return elem.defaultValue;
		}
	});
}

// Support: IE<9
// Use getAttributeNode to fetch booleans when getAttribute lies
if ( !assert(function( el ) {
	return el.getAttribute("disabled") == null;
}) ) {
	addHandle( booleans, function( elem, name, isXML ) {
		var val;
		if ( !isXML ) {
			return elem[ name ] === true ? name.toLowerCase() :
					(val = elem.getAttributeNode( name )) && val.specified ?
					val.value :
				null;
		}
	});
}

return Sizzle;

})( window );



jQuery.find = Sizzle;
jQuery.expr = Sizzle.selectors;

// Deprecated
jQuery.expr[ ":" ] = jQuery.expr.pseudos;
jQuery.uniqueSort = jQuery.unique = Sizzle.uniqueSort;
jQuery.text = Sizzle.getText;
jQuery.isXMLDoc = Sizzle.isXML;
jQuery.contains = Sizzle.contains;
jQuery.escapeSelector = Sizzle.escape;




var dir = function( elem, dir, until ) {
	var matched = [],
		truncate = until !== undefined;

	while ( ( elem = elem[ dir ] ) && elem.nodeType !== 9 ) {
		if ( elem.nodeType === 1 ) {
			if ( truncate && jQuery( elem ).is( until ) ) {
				break;
			}
			matched.push( elem );
		}
	}
	return matched;
};


var siblings = function( n, elem ) {
	var matched = [];

	for ( ; n; n = n.nextSibling ) {
		if ( n.nodeType === 1 && n !== elem ) {
			matched.push( n );
		}
	}

	return matched;
};


var rneedsContext = jQuery.expr.match.needsContext;

var rsingleTag = ( /^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i );



var risSimple = /^.[^:#\[\.,]*$/;

// Implement the identical functionality for filter and not
function winnow( elements, qualifier, not ) {
	if ( jQuery.isFunction( qualifier ) ) {
		return jQuery.grep( elements, function( elem, i ) {
			return !!qualifier.call( elem, i, elem ) !== not;
		} );
	}

	// Single element
	if ( qualifier.nodeType ) {
		return jQuery.grep( elements, function( elem ) {
			return ( elem === qualifier ) !== not;
		} );
	}

	// Arraylike of elements (jQuery, arguments, Array)
	if ( typeof qualifier !== "string" ) {
		return jQuery.grep( elements, function( elem ) {
			return ( indexOf.call( qualifier, elem ) > -1 ) !== not;
		} );
	}

	// Simple selector that can be filtered directly, removing non-Elements
	if ( risSimple.test( qualifier ) ) {
		return jQuery.filter( qualifier, elements, not );
	}

	// Complex selector, compare the two sets, removing non-Elements
	qualifier = jQuery.filter( qualifier, elements );
	return jQuery.grep( elements, function( elem ) {
		return ( indexOf.call( qualifier, elem ) > -1 ) !== not && elem.nodeType === 1;
	} );
}

jQuery.filter = function( expr, elems, not ) {
	var elem = elems[ 0 ];

	if ( not ) {
		expr = ":not(" + expr + ")";
	}

	if ( elems.length === 1 && elem.nodeType === 1 ) {
		return jQuery.find.matchesSelector( elem, expr ) ? [ elem ] : [];
	}

	return jQuery.find.matches( expr, jQuery.grep( elems, function( elem ) {
		return elem.nodeType === 1;
	} ) );
};

jQuery.fn.extend( {
	find: function( selector ) {
		var i, ret,
			len = this.length,
			self = this;

		if ( typeof selector !== "string" ) {
			return this.pushStack( jQuery( selector ).filter( function() {
				for ( i = 0; i < len; i++ ) {
					if ( jQuery.contains( self[ i ], this ) ) {
						return true;
					}
				}
			} ) );
		}

		ret = this.pushStack( [] );

		for ( i = 0; i < len; i++ ) {
			jQuery.find( selector, self[ i ], ret );
		}

		return len > 1 ? jQuery.uniqueSort( ret ) : ret;
	},
	filter: function( selector ) {
		return this.pushStack( winnow( this, selector || [], false ) );
	},
	not: function( selector ) {
		return this.pushStack( winnow( this, selector || [], true ) );
	},
	is: function( selector ) {
		return !!winnow(
			this,

			// If this is a positional/relative selector, check membership in the returned set
			// so $("p:first").is("p:last") won't return true for a doc with two "p".
			typeof selector === "string" && rneedsContext.test( selector ) ?
				jQuery( selector ) :
				selector || [],
			false
		).length;
	}
} );


// Initialize a jQuery object


// A central reference to the root jQuery(document)
var rootjQuery,

	// A simple way to check for HTML strings
	// Prioritize #id over <tag> to avoid XSS via location.hash (#9521)
	// Strict HTML recognition (#11290: must start with <)
	// Shortcut simple #id case for speed
	rquickExpr = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/,

	init = jQuery.fn.init = function( selector, context, root ) {
		var match, elem;

		// HANDLE: $(""), $(null), $(undefined), $(false)
		if ( !selector ) {
			return this;
		}

		// Method init() accepts an alternate rootjQuery
		// so migrate can support jQuery.sub (gh-2101)
		root = root || rootjQuery;

		// Handle HTML strings
		if ( typeof selector === "string" ) {
			if ( selector[ 0 ] === "<" &&
				selector[ selector.length - 1 ] === ">" &&
				selector.length >= 3 ) {

				// Assume that strings that start and end with <> are HTML and skip the regex check
				match = [ null, selector, null ];

			} else {
				match = rquickExpr.exec( selector );
			}

			// Match html or make sure no context is specified for #id
			if ( match && ( match[ 1 ] || !context ) ) {

				// HANDLE: $(html) -> $(array)
				if ( match[ 1 ] ) {
					context = context instanceof jQuery ? context[ 0 ] : context;

					// Option to run scripts is true for back-compat
					// Intentionally let the error be thrown if parseHTML is not present
					jQuery.merge( this, jQuery.parseHTML(
						match[ 1 ],
						context && context.nodeType ? context.ownerDocument || context : document,
						true
					) );

					// HANDLE: $(html, props)
					if ( rsingleTag.test( match[ 1 ] ) && jQuery.isPlainObject( context ) ) {
						for ( match in context ) {

							// Properties of context are called as methods if possible
							if ( jQuery.isFunction( this[ match ] ) ) {
								this[ match ]( context[ match ] );

							// ...and otherwise set as attributes
							} else {
								this.attr( match, context[ match ] );
							}
						}
					}

					return this;

				// HANDLE: $(#id)
				} else {
					elem = document.getElementById( match[ 2 ] );

					if ( elem ) {

						// Inject the element directly into the jQuery object
						this[ 0 ] = elem;
						this.length = 1;
					}
					return this;
				}

			// HANDLE: $(expr, $(...))
			} else if ( !context || context.jquery ) {
				return ( context || root ).find( selector );

			// HANDLE: $(expr, context)
			// (which is just equivalent to: $(context).find(expr)
			} else {
				return this.constructor( context ).find( selector );
			}

		// HANDLE: $(DOMElement)
		} else if ( selector.nodeType ) {
			this[ 0 ] = selector;
			this.length = 1;
			return this;

		// HANDLE: $(function)
		// Shortcut for document ready
		} else if ( jQuery.isFunction( selector ) ) {
			return root.ready !== undefined ?
				root.ready( selector ) :

				// Execute immediately if ready is not present
				selector( jQuery );
		}

		return jQuery.makeArray( selector, this );
	};

// Give the init function the jQuery prototype for later instantiation
init.prototype = jQuery.fn;

// Initialize central reference
rootjQuery = jQuery( document );


var rparentsprev = /^(?:parents|prev(?:Until|All))/,

	// Methods guaranteed to produce a unique set when starting from a unique set
	guaranteedUnique = {
		children: true,
		contents: true,
		next: true,
		prev: true
	};

jQuery.fn.extend( {
	has: function( target ) {
		var targets = jQuery( target, this ),
			l = targets.length;

		return this.filter( function() {
			var i = 0;
			for ( ; i < l; i++ ) {
				if ( jQuery.contains( this, targets[ i ] ) ) {
					return true;
				}
			}
		} );
	},

	closest: function( selectors, context ) {
		var cur,
			i = 0,
			l = this.length,
			matched = [],
			targets = typeof selectors !== "string" && jQuery( selectors );

		// Positional selectors never match, since there's no _selection_ context
		if ( !rneedsContext.test( selectors ) ) {
			for ( ; i < l; i++ ) {
				for ( cur = this[ i ]; cur && cur !== context; cur = cur.parentNode ) {

					// Always skip document fragments
					if ( cur.nodeType < 11 && ( targets ?
						targets.index( cur ) > -1 :

						// Don't pass non-elements to Sizzle
						cur.nodeType === 1 &&
							jQuery.find.matchesSelector( cur, selectors ) ) ) {

						matched.push( cur );
						break;
					}
				}
			}
		}

		return this.pushStack( matched.length > 1 ? jQuery.uniqueSort( matched ) : matched );
	},

	// Determine the position of an element within the set
	index: function( elem ) {

		// No argument, return index in parent
		if ( !elem ) {
			return ( this[ 0 ] && this[ 0 ].parentNode ) ? this.first().prevAll().length : -1;
		}

		// Index in selector
		if ( typeof elem === "string" ) {
			return indexOf.call( jQuery( elem ), this[ 0 ] );
		}

		// Locate the position of the desired element
		return indexOf.call( this,

			// If it receives a jQuery object, the first element is used
			elem.jquery ? elem[ 0 ] : elem
		);
	},

	add: function( selector, context ) {
		return this.pushStack(
			jQuery.uniqueSort(
				jQuery.merge( this.get(), jQuery( selector, context ) )
			)
		);
	},

	addBack: function( selector ) {
		return this.add( selector == null ?
			this.prevObject : this.prevObject.filter( selector )
		);
	}
} );

function sibling( cur, dir ) {
	while ( ( cur = cur[ dir ] ) && cur.nodeType !== 1 ) {}
	return cur;
}

jQuery.each( {
	parent: function( elem ) {
		var parent = elem.parentNode;
		return parent && parent.nodeType !== 11 ? parent : null;
	},
	parents: function( elem ) {
		return dir( elem, "parentNode" );
	},
	parentsUntil: function( elem, i, until ) {
		return dir( elem, "parentNode", until );
	},
	next: function( elem ) {
		return sibling( elem, "nextSibling" );
	},
	prev: function( elem ) {
		return sibling( elem, "previousSibling" );
	},
	nextAll: function( elem ) {
		return dir( elem, "nextSibling" );
	},
	prevAll: function( elem ) {
		return dir( elem, "previousSibling" );
	},
	nextUntil: function( elem, i, until ) {
		return dir( elem, "nextSibling", until );
	},
	prevUntil: function( elem, i, until ) {
		return dir( elem, "previousSibling", until );
	},
	siblings: function( elem ) {
		return siblings( ( elem.parentNode || {} ).firstChild, elem );
	},
	children: function( elem ) {
		return siblings( elem.firstChild );
	},
	contents: function( elem ) {
		return elem.contentDocument || jQuery.merge( [], elem.childNodes );
	}
}, function( name, fn ) {
	jQuery.fn[ name ] = function( until, selector ) {
		var matched = jQuery.map( this, fn, until );

		if ( name.slice( -5 ) !== "Until" ) {
			selector = until;
		}

		if ( selector && typeof selector === "string" ) {
			matched = jQuery.filter( selector, matched );
		}

		if ( this.length > 1 ) {

			// Remove duplicates
			if ( !guaranteedUnique[ name ] ) {
				jQuery.uniqueSort( matched );
			}

			// Reverse order for parents* and prev-derivatives
			if ( rparentsprev.test( name ) ) {
				matched.reverse();
			}
		}

		return this.pushStack( matched );
	};
} );
var rnothtmlwhite = ( /[^\x20\t\r\n\f]+/g );



// Convert String-formatted options into Object-formatted ones
function createOptions( options ) {
	var object = {};
	jQuery.each( options.match( rnothtmlwhite ) || [], function( _, flag ) {
		object[ flag ] = true;
	} );
	return object;
}

/*
 * Create a callback list using the following parameters:
 *
 *	options: an optional list of space-separated options that will change how
 *			the callback list behaves or a more traditional option object
 *
 * By default a callback list will act like an event callback list and can be
 * "fired" multiple times.
 *
 * Possible options:
 *
 *	once:			will ensure the callback list can only be fired once (like a Deferred)
 *
 *	memory:			will keep track of previous values and will call any callback added
 *					after the list has been fired right away with the latest "memorized"
 *					values (like a Deferred)
 *
 *	unique:			will ensure a callback can only be added once (no duplicate in the list)
 *
 *	stopOnFalse:	interrupt callings when a callback returns false
 *
 */
jQuery.Callbacks = function( options ) {

	// Convert options from String-formatted to Object-formatted if needed
	// (we check in cache first)
	options = typeof options === "string" ?
		createOptions( options ) :
		jQuery.extend( {}, options );

	var // Flag to know if list is currently firing
		firing,

		// Last fire value for non-forgettable lists
		memory,

		// Flag to know if list was already fired
		fired,

		// Flag to prevent firing
		locked,

		// Actual callback list
		list = [],

		// Queue of execution data for repeatable lists
		queue = [],

		// Index of currently firing callback (modified by add/remove as needed)
		firingIndex = -1,

		// Fire callbacks
		fire = function() {

			// Enforce single-firing
			locked = options.once;

			// Execute callbacks for all pending executions,
			// respecting firingIndex overrides and runtime changes
			fired = firing = true;
			for ( ; queue.length; firingIndex = -1 ) {
				memory = queue.shift();
				while ( ++firingIndex < list.length ) {

					// Run callback and check for early termination
					if ( list[ firingIndex ].apply( memory[ 0 ], memory[ 1 ] ) === false &&
						options.stopOnFalse ) {

						// Jump to end and forget the data so .add doesn't re-fire
						firingIndex = list.length;
						memory = false;
					}
				}
			}

			// Forget the data if we're done with it
			if ( !options.memory ) {
				memory = false;
			}

			firing = false;

			// Clean up if we're done firing for good
			if ( locked ) {

				// Keep an empty list if we have data for future add calls
				if ( memory ) {
					list = [];

				// Otherwise, this object is spent
				} else {
					list = "";
				}
			}
		},

		// Actual Callbacks object
		self = {

			// Add a callback or a collection of callbacks to the list
			add: function() {
				if ( list ) {

					// If we have memory from a past run, we should fire after adding
					if ( memory && !firing ) {
						firingIndex = list.length - 1;
						queue.push( memory );
					}

					( function add( args ) {
						jQuery.each( args, function( _, arg ) {
							if ( jQuery.isFunction( arg ) ) {
								if ( !options.unique || !self.has( arg ) ) {
									list.push( arg );
								}
							} else if ( arg && arg.length && jQuery.type( arg ) !== "string" ) {

								// Inspect recursively
								add( arg );
							}
						} );
					} )( arguments );

					if ( memory && !firing ) {
						fire();
					}
				}
				return this;
			},

			// Remove a callback from the list
			remove: function() {
				jQuery.each( arguments, function( _, arg ) {
					var index;
					while ( ( index = jQuery.inArray( arg, list, index ) ) > -1 ) {
						list.splice( index, 1 );

						// Handle firing indexes
						if ( index <= firingIndex ) {
							firingIndex--;
						}
					}
				} );
				return this;
			},

			// Check if a given callback is in the list.
			// If no argument is given, return whether or not list has callbacks attached.
			has: function( fn ) {
				return fn ?
					jQuery.inArray( fn, list ) > -1 :
					list.length > 0;
			},

			// Remove all callbacks from the list
			empty: function() {
				if ( list ) {
					list = [];
				}
				return this;
			},

			// Disable .fire and .add
			// Abort any current/pending executions
			// Clear all callbacks and values
			disable: function() {
				locked = queue = [];
				list = memory = "";
				return this;
			},
			disabled: function() {
				return !list;
			},

			// Disable .fire
			// Also disable .add unless we have memory (since it would have no effect)
			// Abort any pending executions
			lock: function() {
				locked = queue = [];
				if ( !memory && !firing ) {
					list = memory = "";
				}
				return this;
			},
			locked: function() {
				return !!locked;
			},

			// Call all callbacks with the given context and arguments
			fireWith: function( context, args ) {
				if ( !locked ) {
					args = args || [];
					args = [ context, args.slice ? args.slice() : args ];
					queue.push( args );
					if ( !firing ) {
						fire();
					}
				}
				return this;
			},

			// Call all the callbacks with the given arguments
			fire: function() {
				self.fireWith( this, arguments );
				return this;
			},

			// To know if the callbacks have already been called at least once
			fired: function() {
				return !!fired;
			}
		};

	return self;
};


function Identity( v ) {
	return v;
}
function Thrower( ex ) {
	throw ex;
}

function adoptValue( value, resolve, reject ) {
	var method;

	try {

		// Check for promise aspect first to privilege synchronous behavior
		if ( value && jQuery.isFunction( ( method = value.promise ) ) ) {
			method.call( value ).done( resolve ).fail( reject );

		// Other thenables
		} else if ( value && jQuery.isFunction( ( method = value.then ) ) ) {
			method.call( value, resolve, reject );

		// Other non-thenables
		} else {

			// Support: Android 4.0 only
			// Strict mode functions invoked without .call/.apply get global-object context
			resolve.call( undefined, value );
		}

	// For Promises/A+, convert exceptions into rejections
	// Since jQuery.when doesn't unwrap thenables, we can skip the extra checks appearing in
	// Deferred#then to conditionally suppress rejection.
	} catch ( value ) {

		// Support: Android 4.0 only
		// Strict mode functions invoked without .call/.apply get global-object context
		reject.call( undefined, value );
	}
}

jQuery.extend( {

	Deferred: function( func ) {
		var tuples = [

				// action, add listener, callbacks,
				// ... .then handlers, argument index, [final state]
				[ "notify", "progress", jQuery.Callbacks( "memory" ),
					jQuery.Callbacks( "memory" ), 2 ],
				[ "resolve", "done", jQuery.Callbacks( "once memory" ),
					jQuery.Callbacks( "once memory" ), 0, "resolved" ],
				[ "reject", "fail", jQuery.Callbacks( "once memory" ),
					jQuery.Callbacks( "once memory" ), 1, "rejected" ]
			],
			state = "pending",
			promise = {
				state: function() {
					return state;
				},
				always: function() {
					deferred.done( arguments ).fail( arguments );
					return this;
				},
				"catch": function( fn ) {
					return promise.then( null, fn );
				},

				// Keep pipe for back-compat
				pipe: function( /* fnDone, fnFail, fnProgress */ ) {
					var fns = arguments;

					return jQuery.Deferred( function( newDefer ) {
						jQuery.each( tuples, function( i, tuple ) {

							// Map tuples (progress, done, fail) to arguments (done, fail, progress)
							var fn = jQuery.isFunction( fns[ tuple[ 4 ] ] ) && fns[ tuple[ 4 ] ];

							// deferred.progress(function() { bind to newDefer or newDefer.notify })
							// deferred.done(function() { bind to newDefer or newDefer.resolve })
							// deferred.fail(function() { bind to newDefer or newDefer.reject })
							deferred[ tuple[ 1 ] ]( function() {
								var returned = fn && fn.apply( this, arguments );
								if ( returned && jQuery.isFunction( returned.promise ) ) {
									returned.promise()
										.progress( newDefer.notify )
										.done( newDefer.resolve )
										.fail( newDefer.reject );
								} else {
									newDefer[ tuple[ 0 ] + "With" ](
										this,
										fn ? [ returned ] : arguments
									);
								}
							} );
						} );
						fns = null;
					} ).promise();
				},
				then: function( onFulfilled, onRejected, onProgress ) {
					var maxDepth = 0;
					function resolve( depth, deferred, handler, special ) {
						return function() {
							var that = this,
								args = arguments,
								mightThrow = function() {
									var returned, then;

									// Support: Promises/A+ section 2.3.3.3.3
									// https://promisesaplus.com/#point-59
									// Ignore double-resolution attempts
									if ( depth < maxDepth ) {
										return;
									}

									returned = handler.apply( that, args );

									// Support: Promises/A+ section 2.3.1
									// https://promisesaplus.com/#point-48
									if ( returned === deferred.promise() ) {
										throw new TypeError( "Thenable self-resolution" );
									}

									// Support: Promises/A+ sections 2.3.3.1, 3.5
									// https://promisesaplus.com/#point-54
									// https://promisesaplus.com/#point-75
									// Retrieve `then` only once
									then = returned &&

										// Support: Promises/A+ section 2.3.4
										// https://promisesaplus.com/#point-64
										// Only check objects and functions for thenability
										( typeof returned === "object" ||
											typeof returned === "function" ) &&
										returned.then;

									// Handle a returned thenable
									if ( jQuery.isFunction( then ) ) {

										// Special processors (notify) just wait for resolution
										if ( special ) {
											then.call(
												returned,
												resolve( maxDepth, deferred, Identity, special ),
												resolve( maxDepth, deferred, Thrower, special )
											);

										// Normal processors (resolve) also hook into progress
										} else {

											// ...and disregard older resolution values
											maxDepth++;

											then.call(
												returned,
												resolve( maxDepth, deferred, Identity, special ),
												resolve( maxDepth, deferred, Thrower, special ),
												resolve( maxDepth, deferred, Identity,
													deferred.notifyWith )
											);
										}

									// Handle all other returned values
									} else {

										// Only substitute handlers pass on context
										// and multiple values (non-spec behavior)
										if ( handler !== Identity ) {
											that = undefined;
											args = [ returned ];
										}

										// Process the value(s)
										// Default process is resolve
										( special || deferred.resolveWith )( that, args );
									}
								},

								// Only normal processors (resolve) catch and reject exceptions
								process = special ?
									mightThrow :
									function() {
										try {
											mightThrow();
										} catch ( e ) {

											if ( jQuery.Deferred.exceptionHook ) {
												jQuery.Deferred.exceptionHook( e,
													process.stackTrace );
											}

											// Support: Promises/A+ section 2.3.3.3.4.1
											// https://promisesaplus.com/#point-61
											// Ignore post-resolution exceptions
											if ( depth + 1 >= maxDepth ) {

												// Only substitute handlers pass on context
												// and multiple values (non-spec behavior)
												if ( handler !== Thrower ) {
													that = undefined;
													args = [ e ];
												}

												deferred.rejectWith( that, args );
											}
										}
									};

							// Support: Promises/A+ section 2.3.3.3.1
							// https://promisesaplus.com/#point-57
							// Re-resolve promises immediately to dodge false rejection from
							// subsequent errors
							if ( depth ) {
								process();
							} else {

								// Call an optional hook to record the stack, in case of exception
								// since it's otherwise lost when execution goes async
								if ( jQuery.Deferred.getStackHook ) {
									process.stackTrace = jQuery.Deferred.getStackHook();
								}
								window.setTimeout( process );
							}
						};
					}

					return jQuery.Deferred( function( newDefer ) {

						// progress_handlers.add( ... )
						tuples[ 0 ][ 3 ].add(
							resolve(
								0,
								newDefer,
								jQuery.isFunction( onProgress ) ?
									onProgress :
									Identity,
								newDefer.notifyWith
							)
						);

						// fulfilled_handlers.add( ... )
						tuples[ 1 ][ 3 ].add(
							resolve(
								0,
								newDefer,
								jQuery.isFunction( onFulfilled ) ?
									onFulfilled :
									Identity
							)
						);

						// rejected_handlers.add( ... )
						tuples[ 2 ][ 3 ].add(
							resolve(
								0,
								newDefer,
								jQuery.isFunction( onRejected ) ?
									onRejected :
									Thrower
							)
						);
					} ).promise();
				},

				// Get a promise for this deferred
				// If obj is provided, the promise aspect is added to the object
				promise: function( obj ) {
					return obj != null ? jQuery.extend( obj, promise ) : promise;
				}
			},
			deferred = {};

		// Add list-specific methods
		jQuery.each( tuples, function( i, tuple ) {
			var list = tuple[ 2 ],
				stateString = tuple[ 5 ];

			// promise.progress = list.add
			// promise.done = list.add
			// promise.fail = list.add
			promise[ tuple[ 1 ] ] = list.add;

			// Handle state
			if ( stateString ) {
				list.add(
					function() {

						// state = "resolved" (i.e., fulfilled)
						// state = "rejected"
						state = stateString;
					},

					// rejected_callbacks.disable
					// fulfilled_callbacks.disable
					tuples[ 3 - i ][ 2 ].disable,

					// progress_callbacks.lock
					tuples[ 0 ][ 2 ].lock
				);
			}

			// progress_handlers.fire
			// fulfilled_handlers.fire
			// rejected_handlers.fire
			list.add( tuple[ 3 ].fire );

			// deferred.notify = function() { deferred.notifyWith(...) }
			// deferred.resolve = function() { deferred.resolveWith(...) }
			// deferred.reject = function() { deferred.rejectWith(...) }
			deferred[ tuple[ 0 ] ] = function() {
				deferred[ tuple[ 0 ] + "With" ]( this === deferred ? undefined : this, arguments );
				return this;
			};

			// deferred.notifyWith = list.fireWith
			// deferred.resolveWith = list.fireWith
			// deferred.rejectWith = list.fireWith
			deferred[ tuple[ 0 ] + "With" ] = list.fireWith;
		} );

		// Make the deferred a promise
		promise.promise( deferred );

		// Call given func if any
		if ( func ) {
			func.call( deferred, deferred );
		}

		// All done!
		return deferred;
	},

	// Deferred helper
	when: function( singleValue ) {
		var

			// count of uncompleted subordinates
			remaining = arguments.length,

			// count of unprocessed arguments
			i = remaining,

			// subordinate fulfillment data
			resolveContexts = Array( i ),
			resolveValues = slice.call( arguments ),

			// the master Deferred
			master = jQuery.Deferred(),

			// subordinate callback factory
			updateFunc = function( i ) {
				return function( value ) {
					resolveContexts[ i ] = this;
					resolveValues[ i ] = arguments.length > 1 ? slice.call( arguments ) : value;
					if ( !( --remaining ) ) {
						master.resolveWith( resolveContexts, resolveValues );
					}
				};
			};

		// Single- and empty arguments are adopted like Promise.resolve
		if ( remaining <= 1 ) {
			adoptValue( singleValue, master.done( updateFunc( i ) ).resolve, master.reject );

			// Use .then() to unwrap secondary thenables (cf. gh-3000)
			if ( master.state() === "pending" ||
				jQuery.isFunction( resolveValues[ i ] && resolveValues[ i ].then ) ) {

				return master.then();
			}
		}

		// Multiple arguments are aggregated like Promise.all array elements
		while ( i-- ) {
			adoptValue( resolveValues[ i ], updateFunc( i ), master.reject );
		}

		return master.promise();
	}
} );


// These usually indicate a programmer mistake during development,
// warn about them ASAP rather than swallowing them by default.
var rerrorNames = /^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;

jQuery.Deferred.exceptionHook = function( error, stack ) {

	// Support: IE 8 - 9 only
	// Console exists when dev tools are open, which can happen at any time
	if ( window.console && window.console.warn && error && rerrorNames.test( error.name ) ) {
		window.console.warn( "jQuery.Deferred exception: " + error.message, error.stack, stack );
	}
};




jQuery.readyException = function( error ) {
	window.setTimeout( function() {
		throw error;
	} );
};




// The deferred used on DOM ready
var readyList = jQuery.Deferred();

jQuery.fn.ready = function( fn ) {

	readyList
		.then( fn )

		// Wrap jQuery.readyException in a function so that the lookup
		// happens at the time of error handling instead of callback
		// registration.
		.catch( function( error ) {
			jQuery.readyException( error );
		} );

	return this;
};

jQuery.extend( {

	// Is the DOM ready to be used? Set to true once it occurs.
	isReady: false,

	// A counter to track how many items to wait for before
	// the ready event fires. See #6781
	readyWait: 1,

	// Hold (or release) the ready event
	holdReady: function( hold ) {
		if ( hold ) {
			jQuery.readyWait++;
		} else {
			jQuery.ready( true );
		}
	},

	// Handle when the DOM is ready
	ready: function( wait ) {

		// Abort if there are pending holds or we're already ready
		if ( wait === true ? --jQuery.readyWait : jQuery.isReady ) {
			return;
		}

		// Remember that the DOM is ready
		jQuery.isReady = true;

		// If a normal DOM Ready event fired, decrement, and wait if need be
		if ( wait !== true && --jQuery.readyWait > 0 ) {
			return;
		}

		// If there are functions bound, to execute
		readyList.resolveWith( document, [ jQuery ] );
	}
} );

jQuery.ready.then = readyList.then;

// The ready event handler and self cleanup method
function completed() {
	document.removeEventListener( "DOMContentLoaded", completed );
	window.removeEventListener( "load", completed );
	jQuery.ready();
}

// Catch cases where $(document).ready() is called
// after the browser event has already occurred.
// Support: IE <=9 - 10 only
// Older IE sometimes signals "interactive" too soon
if ( document.readyState === "complete" ||
	( document.readyState !== "loading" && !document.documentElement.doScroll ) ) {

	// Handle it asynchronously to allow scripts the opportunity to delay ready
	window.setTimeout( jQuery.ready );

} else {

	// Use the handy event callback
	document.addEventListener( "DOMContentLoaded", completed );

	// A fallback to window.onload, that will always work
	window.addEventListener( "load", completed );
}




// Multifunctional method to get and set values of a collection
// The value/s can optionally be executed if it's a function
var access = function( elems, fn, key, value, chainable, emptyGet, raw ) {
	var i = 0,
		len = elems.length,
		bulk = key == null;

	// Sets many values
	if ( jQuery.type( key ) === "object" ) {
		chainable = true;
		for ( i in key ) {
			access( elems, fn, i, key[ i ], true, emptyGet, raw );
		}

	// Sets one value
	} else if ( value !== undefined ) {
		chainable = true;

		if ( !jQuery.isFunction( value ) ) {
			raw = true;
		}

		if ( bulk ) {

			// Bulk operations run against the entire set
			if ( raw ) {
				fn.call( elems, value );
				fn = null;

			// ...except when executing function values
			} else {
				bulk = fn;
				fn = function( elem, key, value ) {
					return bulk.call( jQuery( elem ), value );
				};
			}
		}

		if ( fn ) {
			for ( ; i < len; i++ ) {
				fn(
					elems[ i ], key, raw ?
					value :
					value.call( elems[ i ], i, fn( elems[ i ], key ) )
				);
			}
		}
	}

	if ( chainable ) {
		return elems;
	}

	// Gets
	if ( bulk ) {
		return fn.call( elems );
	}

	return len ? fn( elems[ 0 ], key ) : emptyGet;
};
var acceptData = function( owner ) {

	// Accepts only:
	//  - Node
	//    - Node.ELEMENT_NODE
	//    - Node.DOCUMENT_NODE
	//  - Object
	//    - Any
	return owner.nodeType === 1 || owner.nodeType === 9 || !( +owner.nodeType );
};




function Data() {
	this.expando = jQuery.expando + Data.uid++;
}

Data.uid = 1;

Data.prototype = {

	cache: function( owner ) {

		// Check if the owner object already has a cache
		var value = owner[ this.expando ];

		// If not, create one
		if ( !value ) {
			value = {};

			// We can accept data for non-element nodes in modern browsers,
			// but we should not, see #8335.
			// Always return an empty object.
			if ( acceptData( owner ) ) {

				// If it is a node unlikely to be stringify-ed or looped over
				// use plain assignment
				if ( owner.nodeType ) {
					owner[ this.expando ] = value;

				// Otherwise secure it in a non-enumerable property
				// configurable must be true to allow the property to be
				// deleted when data is removed
				} else {
					Object.defineProperty( owner, this.expando, {
						value: value,
						configurable: true
					} );
				}
			}
		}

		return value;
	},
	set: function( owner, data, value ) {
		var prop,
			cache = this.cache( owner );

		// Handle: [ owner, key, value ] args
		// Always use camelCase key (gh-2257)
		if ( typeof data === "string" ) {
			cache[ jQuery.camelCase( data ) ] = value;

		// Handle: [ owner, { properties } ] args
		} else {

			// Copy the properties one-by-one to the cache object
			for ( prop in data ) {
				cache[ jQuery.camelCase( prop ) ] = data[ prop ];
			}
		}
		return cache;
	},
	get: function( owner, key ) {
		return key === undefined ?
			this.cache( owner ) :

			// Always use camelCase key (gh-2257)
			owner[ this.expando ] && owner[ this.expando ][ jQuery.camelCase( key ) ];
	},
	access: function( owner, key, value ) {

		// In cases where either:
		//
		//   1. No key was specified
		//   2. A string key was specified, but no value provided
		//
		// Take the "read" path and allow the get method to determine
		// which value to return, respectively either:
		//
		//   1. The entire cache object
		//   2. The data stored at the key
		//
		if ( key === undefined ||
				( ( key && typeof key === "string" ) && value === undefined ) ) {

			return this.get( owner, key );
		}

		// When the key is not a string, or both a key and value
		// are specified, set or extend (existing objects) with either:
		//
		//   1. An object of properties
		//   2. A key and value
		//
		this.set( owner, key, value );

		// Since the "set" path can have two possible entry points
		// return the expected data based on which path was taken[*]
		return value !== undefined ? value : key;
	},
	remove: function( owner, key ) {
		var i,
			cache = owner[ this.expando ];

		if ( cache === undefined ) {
			return;
		}

		if ( key !== undefined ) {

			// Support array or space separated string of keys
			if ( jQuery.isArray( key ) ) {

				// If key is an array of keys...
				// We always set camelCase keys, so remove that.
				key = key.map( jQuery.camelCase );
			} else {
				key = jQuery.camelCase( key );

				// If a key with the spaces exists, use it.
				// Otherwise, create an array by matching non-whitespace
				key = key in cache ?
					[ key ] :
					( key.match( rnothtmlwhite ) || [] );
			}

			i = key.length;

			while ( i-- ) {
				delete cache[ key[ i ] ];
			}
		}

		// Remove the expando if there's no more data
		if ( key === undefined || jQuery.isEmptyObject( cache ) ) {

			// Support: Chrome <=35 - 45
			// Webkit & Blink performance suffers when deleting properties
			// from DOM nodes, so set to undefined instead
			// https://bugs.chromium.org/p/chromium/issues/detail?id=378607 (bug restricted)
			if ( owner.nodeType ) {
				owner[ this.expando ] = undefined;
			} else {
				delete owner[ this.expando ];
			}
		}
	},
	hasData: function( owner ) {
		var cache = owner[ this.expando ];
		return cache !== undefined && !jQuery.isEmptyObject( cache );
	}
};
var dataPriv = new Data();

var dataUser = new Data();



//	Implementation Summary
//
//	1. Enforce API surface and semantic compatibility with 1.9.x branch
//	2. Improve the module's maintainability by reducing the storage
//		paths to a single mechanism.
//	3. Use the same single mechanism to support "private" and "user" data.
//	4. _Never_ expose "private" data to user code (TODO: Drop _data, _removeData)
//	5. Avoid exposing implementation details on user objects (eg. expando properties)
//	6. Provide a clear path for implementation upgrade to WeakMap in 2014

var rbrace = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
	rmultiDash = /[A-Z]/g;

function getData( data ) {
	if ( data === "true" ) {
		return true;
	}

	if ( data === "false" ) {
		return false;
	}

	if ( data === "null" ) {
		return null;
	}

	// Only convert to a number if it doesn't change the string
	if ( data === +data + "" ) {
		return +data;
	}

	if ( rbrace.test( data ) ) {
		return JSON.parse( data );
	}

	return data;
}

function dataAttr( elem, key, data ) {
	var name;

	// If nothing was found internally, try to fetch any
	// data from the HTML5 data-* attribute
	if ( data === undefined && elem.nodeType === 1 ) {
		name = "data-" + key.replace( rmultiDash, "-$&" ).toLowerCase();
		data = elem.getAttribute( name );

		if ( typeof data === "string" ) {
			try {
				data = getData( data );
			} catch ( e ) {}

			// Make sure we set the data so it isn't changed later
			dataUser.set( elem, key, data );
		} else {
			data = undefined;
		}
	}
	return data;
}

jQuery.extend( {
	hasData: function( elem ) {
		return dataUser.hasData( elem ) || dataPriv.hasData( elem );
	},

	data: function( elem, name, data ) {
		return dataUser.access( elem, name, data );
	},

	removeData: function( elem, name ) {
		dataUser.remove( elem, name );
	},

	// TODO: Now that all calls to _data and _removeData have been replaced
	// with direct calls to dataPriv methods, these can be deprecated.
	_data: function( elem, name, data ) {
		return dataPriv.access( elem, name, data );
	},

	_removeData: function( elem, name ) {
		dataPriv.remove( elem, name );
	}
} );

jQuery.fn.extend( {
	data: function( key, value ) {
		var i, name, data,
			elem = this[ 0 ],
			attrs = elem && elem.attributes;

		// Gets all values
		if ( key === undefined ) {
			if ( this.length ) {
				data = dataUser.get( elem );

				if ( elem.nodeType === 1 && !dataPriv.get( elem, "hasDataAttrs" ) ) {
					i = attrs.length;
					while ( i-- ) {

						// Support: IE 11 only
						// The attrs elements can be null (#14894)
						if ( attrs[ i ] ) {
							name = attrs[ i ].name;
							if ( name.indexOf( "data-" ) === 0 ) {
								name = jQuery.camelCase( name.slice( 5 ) );
								dataAttr( elem, name, data[ name ] );
							}
						}
					}
					dataPriv.set( elem, "hasDataAttrs", true );
				}
			}

			return data;
		}

		// Sets multiple values
		if ( typeof key === "object" ) {
			return this.each( function() {
				dataUser.set( this, key );
			} );
		}

		return access( this, function( value ) {
			var data;

			// The calling jQuery object (element matches) is not empty
			// (and therefore has an element appears at this[ 0 ]) and the
			// `value` parameter was not undefined. An empty jQuery object
			// will result in `undefined` for elem = this[ 0 ] which will
			// throw an exception if an attempt to read a data cache is made.
			if ( elem && value === undefined ) {

				// Attempt to get data from the cache
				// The key will always be camelCased in Data
				data = dataUser.get( elem, key );
				if ( data !== undefined ) {
					return data;
				}

				// Attempt to "discover" the data in
				// HTML5 custom data-* attrs
				data = dataAttr( elem, key );
				if ( data !== undefined ) {
					return data;
				}

				// We tried really hard, but the data doesn't exist.
				return;
			}

			// Set the data...
			this.each( function() {

				// We always store the camelCased key
				dataUser.set( this, key, value );
			} );
		}, null, value, arguments.length > 1, null, true );
	},

	removeData: function( key ) {
		return this.each( function() {
			dataUser.remove( this, key );
		} );
	}
} );


jQuery.extend( {
	queue: function( elem, type, data ) {
		var queue;

		if ( elem ) {
			type = ( type || "fx" ) + "queue";
			queue = dataPriv.get( elem, type );

			// Speed up dequeue by getting out quickly if this is just a lookup
			if ( data ) {
				if ( !queue || jQuery.isArray( data ) ) {
					queue = dataPriv.access( elem, type, jQuery.makeArray( data ) );
				} else {
					queue.push( data );
				}
			}
			return queue || [];
		}
	},

	dequeue: function( elem, type ) {
		type = type || "fx";

		var queue = jQuery.queue( elem, type ),
			startLength = queue.length,
			fn = queue.shift(),
			hooks = jQuery._queueHooks( elem, type ),
			next = function() {
				jQuery.dequeue( elem, type );
			};

		// If the fx queue is dequeued, always remove the progress sentinel
		if ( fn === "inprogress" ) {
			fn = queue.shift();
			startLength--;
		}

		if ( fn ) {

			// Add a progress sentinel to prevent the fx queue from being
			// automatically dequeued
			if ( type === "fx" ) {
				queue.unshift( "inprogress" );
			}

			// Clear up the last queue stop function
			delete hooks.stop;
			fn.call( elem, next, hooks );
		}

		if ( !startLength && hooks ) {
			hooks.empty.fire();
		}
	},

	// Not public - generate a queueHooks object, or return the current one
	_queueHooks: function( elem, type ) {
		var key = type + "queueHooks";
		return dataPriv.get( elem, key ) || dataPriv.access( elem, key, {
			empty: jQuery.Callbacks( "once memory" ).add( function() {
				dataPriv.remove( elem, [ type + "queue", key ] );
			} )
		} );
	}
} );

jQuery.fn.extend( {
	queue: function( type, data ) {
		var setter = 2;

		if ( typeof type !== "string" ) {
			data = type;
			type = "fx";
			setter--;
		}

		if ( arguments.length < setter ) {
			return jQuery.queue( this[ 0 ], type );
		}

		return data === undefined ?
			this :
			this.each( function() {
				var queue = jQuery.queue( this, type, data );

				// Ensure a hooks for this queue
				jQuery._queueHooks( this, type );

				if ( type === "fx" && queue[ 0 ] !== "inprogress" ) {
					jQuery.dequeue( this, type );
				}
			} );
	},
	dequeue: function( type ) {
		return this.each( function() {
			jQuery.dequeue( this, type );
		} );
	},
	clearQueue: function( type ) {
		return this.queue( type || "fx", [] );
	},

	// Get a promise resolved when queues of a certain type
	// are emptied (fx is the type by default)
	promise: function( type, obj ) {
		var tmp,
			count = 1,
			defer = jQuery.Deferred(),
			elements = this,
			i = this.length,
			resolve = function() {
				if ( !( --count ) ) {
					defer.resolveWith( elements, [ elements ] );
				}
			};

		if ( typeof type !== "string" ) {
			obj = type;
			type = undefined;
		}
		type = type || "fx";

		while ( i-- ) {
			tmp = dataPriv.get( elements[ i ], type + "queueHooks" );
			if ( tmp && tmp.empty ) {
				count++;
				tmp.empty.add( resolve );
			}
		}
		resolve();
		return defer.promise( obj );
	}
} );
var pnum = ( /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/ ).source;

var rcssNum = new RegExp( "^(?:([+-])=|)(" + pnum + ")([a-z%]*)$", "i" );


var cssExpand = [ "Top", "Right", "Bottom", "Left" ];

var isHiddenWithinTree = function( elem, el ) {

		// isHiddenWithinTree might be called from jQuery#filter function;
		// in that case, element will be second argument
		elem = el || elem;

		// Inline style trumps all
		return elem.style.display === "none" ||
			elem.style.display === "" &&

			// Otherwise, check computed style
			// Support: Firefox <=43 - 45
			// Disconnected elements can have computed display: none, so first confirm that elem is
			// in the document.
			jQuery.contains( elem.ownerDocument, elem ) &&

			jQuery.css( elem, "display" ) === "none";
	};

var swap = function( elem, options, callback, args ) {
	var ret, name,
		old = {};

	// Remember the old values, and insert the new ones
	for ( name in options ) {
		old[ name ] = elem.style[ name ];
		elem.style[ name ] = options[ name ];
	}

	ret = callback.apply( elem, args || [] );

	// Revert the old values
	for ( name in options ) {
		elem.style[ name ] = old[ name ];
	}

	return ret;
};




function adjustCSS( elem, prop, valueParts, tween ) {
	var adjusted,
		scale = 1,
		maxIterations = 20,
		currentValue = tween ?
			function() {
				return tween.cur();
			} :
			function() {
				return jQuery.css( elem, prop, "" );
			},
		initial = currentValue(),
		unit = valueParts && valueParts[ 3 ] || ( jQuery.cssNumber[ prop ] ? "" : "px" ),

		// Starting value computation is required for potential unit mismatches
		initialInUnit = ( jQuery.cssNumber[ prop ] || unit !== "px" && +initial ) &&
			rcssNum.exec( jQuery.css( elem, prop ) );

	if ( initialInUnit && initialInUnit[ 3 ] !== unit ) {

		// Trust units reported by jQuery.css
		unit = unit || initialInUnit[ 3 ];

		// Make sure we update the tween properties later on
		valueParts = valueParts || [];

		// Iteratively approximate from a nonzero starting point
		initialInUnit = +initial || 1;

		do {

			// If previous iteration zeroed out, double until we get *something*.
			// Use string for doubling so we don't accidentally see scale as unchanged below
			scale = scale || ".5";

			// Adjust and apply
			initialInUnit = initialInUnit / scale;
			jQuery.style( elem, prop, initialInUnit + unit );

		// Update scale, tolerating zero or NaN from tween.cur()
		// Break the loop if scale is unchanged or perfect, or if we've just had enough.
		} while (
			scale !== ( scale = currentValue() / initial ) && scale !== 1 && --maxIterations
		);
	}

	if ( valueParts ) {
		initialInUnit = +initialInUnit || +initial || 0;

		// Apply relative offset (+=/-=) if specified
		adjusted = valueParts[ 1 ] ?
			initialInUnit + ( valueParts[ 1 ] + 1 ) * valueParts[ 2 ] :
			+valueParts[ 2 ];
		if ( tween ) {
			tween.unit = unit;
			tween.start = initialInUnit;
			tween.end = adjusted;
		}
	}
	return adjusted;
}


var defaultDisplayMap = {};

function getDefaultDisplay( elem ) {
	var temp,
		doc = elem.ownerDocument,
		nodeName = elem.nodeName,
		display = defaultDisplayMap[ nodeName ];

	if ( display ) {
		return display;
	}

	temp = doc.body.appendChild( doc.createElement( nodeName ) );
	display = jQuery.css( temp, "display" );

	temp.parentNode.removeChild( temp );

	if ( display === "none" ) {
		display = "block";
	}
	defaultDisplayMap[ nodeName ] = display;

	return display;
}

function showHide( elements, show ) {
	var display, elem,
		values = [],
		index = 0,
		length = elements.length;

	// Determine new display value for elements that need to change
	for ( ; index < length; index++ ) {
		elem = elements[ index ];
		if ( !elem.style ) {
			continue;
		}

		display = elem.style.display;
		if ( show ) {

			// Since we force visibility upon cascade-hidden elements, an immediate (and slow)
			// check is required in this first loop unless we have a nonempty display value (either
			// inline or about-to-be-restored)
			if ( display === "none" ) {
				values[ index ] = dataPriv.get( elem, "display" ) || null;
				if ( !values[ index ] ) {
					elem.style.display = "";
				}
			}
			if ( elem.style.display === "" && isHiddenWithinTree( elem ) ) {
				values[ index ] = getDefaultDisplay( elem );
			}
		} else {
			if ( display !== "none" ) {
				values[ index ] = "none";

				// Remember what we're overwriting
				dataPriv.set( elem, "display", display );
			}
		}
	}

	// Set the display of the elements in a second loop to avoid constant reflow
	for ( index = 0; index < length; index++ ) {
		if ( values[ index ] != null ) {
			elements[ index ].style.display = values[ index ];
		}
	}

	return elements;
}

jQuery.fn.extend( {
	show: function() {
		return showHide( this, true );
	},
	hide: function() {
		return showHide( this );
	},
	toggle: function( state ) {
		if ( typeof state === "boolean" ) {
			return state ? this.show() : this.hide();
		}

		return this.each( function() {
			if ( isHiddenWithinTree( this ) ) {
				jQuery( this ).show();
			} else {
				jQuery( this ).hide();
			}
		} );
	}
} );
var rcheckableType = ( /^(?:checkbox|radio)$/i );

var rtagName = ( /<([a-z][^\/\0>\x20\t\r\n\f]+)/i );

var rscriptType = ( /^$|\/(?:java|ecma)script/i );



// We have to close these tags to support XHTML (#13200)
var wrapMap = {

	// Support: IE <=9 only
	option: [ 1, "<select multiple='multiple'>", "</select>" ],

	// XHTML parsers do not magically insert elements in the
	// same way that tag soup parsers do. So we cannot shorten
	// this by omitting <tbody> or other required elements.
	thead: [ 1, "<table>", "</table>" ],
	col: [ 2, "<table><colgroup>", "</colgroup></table>" ],
	tr: [ 2, "<table><tbody>", "</tbody></table>" ],
	td: [ 3, "<table><tbody><tr>", "</tr></tbody></table>" ],

	_default: [ 0, "", "" ]
};

// Support: IE <=9 only
wrapMap.optgroup = wrapMap.option;

wrapMap.tbody = wrapMap.tfoot = wrapMap.colgroup = wrapMap.caption = wrapMap.thead;
wrapMap.th = wrapMap.td;


function getAll( context, tag ) {

	// Support: IE <=9 - 11 only
	// Use typeof to avoid zero-argument method invocation on host objects (#15151)
	var ret;

	if ( typeof context.getElementsByTagName !== "undefined" ) {
		ret = context.getElementsByTagName( tag || "*" );

	} else if ( typeof context.querySelectorAll !== "undefined" ) {
		ret = context.querySelectorAll( tag || "*" );

	} else {
		ret = [];
	}

	if ( tag === undefined || tag && jQuery.nodeName( context, tag ) ) {
		return jQuery.merge( [ context ], ret );
	}

	return ret;
}


// Mark scripts as having already been evaluated
function setGlobalEval( elems, refElements ) {
	var i = 0,
		l = elems.length;

	for ( ; i < l; i++ ) {
		dataPriv.set(
			elems[ i ],
			"globalEval",
			!refElements || dataPriv.get( refElements[ i ], "globalEval" )
		);
	}
}


var rhtml = /<|&#?\w+;/;

function buildFragment( elems, context, scripts, selection, ignored ) {
	var elem, tmp, tag, wrap, contains, j,
		fragment = context.createDocumentFragment(),
		nodes = [],
		i = 0,
		l = elems.length;

	for ( ; i < l; i++ ) {
		elem = elems[ i ];

		if ( elem || elem === 0 ) {

			// Add nodes directly
			if ( jQuery.type( elem ) === "object" ) {

				// Support: Android <=4.0 only, PhantomJS 1 only
				// push.apply(_, arraylike) throws on ancient WebKit
				jQuery.merge( nodes, elem.nodeType ? [ elem ] : elem );

			// Convert non-html into a text node
			} else if ( !rhtml.test( elem ) ) {
				nodes.push( context.createTextNode( elem ) );

			// Convert html into DOM nodes
			} else {
				tmp = tmp || fragment.appendChild( context.createElement( "div" ) );

				// Deserialize a standard representation
				tag = ( rtagName.exec( elem ) || [ "", "" ] )[ 1 ].toLowerCase();
				wrap = wrapMap[ tag ] || wrapMap._default;
				tmp.innerHTML = wrap[ 1 ] + jQuery.htmlPrefilter( elem ) + wrap[ 2 ];

				// Descend through wrappers to the right content
				j = wrap[ 0 ];
				while ( j-- ) {
					tmp = tmp.lastChild;
				}

				// Support: Android <=4.0 only, PhantomJS 1 only
				// push.apply(_, arraylike) throws on ancient WebKit
				jQuery.merge( nodes, tmp.childNodes );

				// Remember the top-level container
				tmp = fragment.firstChild;

				// Ensure the created nodes are orphaned (#12392)
				tmp.textContent = "";
			}
		}
	}

	// Remove wrapper from fragment
	fragment.textContent = "";

	i = 0;
	while ( ( elem = nodes[ i++ ] ) ) {

		// Skip elements already in the context collection (trac-4087)
		if ( selection && jQuery.inArray( elem, selection ) > -1 ) {
			if ( ignored ) {
				ignored.push( elem );
			}
			continue;
		}

		contains = jQuery.contains( elem.ownerDocument, elem );

		// Append to fragment
		tmp = getAll( fragment.appendChild( elem ), "script" );

		// Preserve script evaluation history
		if ( contains ) {
			setGlobalEval( tmp );
		}

		// Capture executables
		if ( scripts ) {
			j = 0;
			while ( ( elem = tmp[ j++ ] ) ) {
				if ( rscriptType.test( elem.type || "" ) ) {
					scripts.push( elem );
				}
			}
		}
	}

	return fragment;
}


( function() {
	var fragment = document.createDocumentFragment(),
		div = fragment.appendChild( document.createElement( "div" ) ),
		input = document.createElement( "input" );

	// Support: Android 4.0 - 4.3 only
	// Check state lost if the name is set (#11217)
	// Support: Windows Web Apps (WWA)
	// `name` and `type` must use .setAttribute for WWA (#14901)
	input.setAttribute( "type", "radio" );
	input.setAttribute( "checked", "checked" );
	input.setAttribute( "name", "t" );

	div.appendChild( input );

	// Support: Android <=4.1 only
	// Older WebKit doesn't clone checked state correctly in fragments
	support.checkClone = div.cloneNode( true ).cloneNode( true ).lastChild.checked;

	// Support: IE <=11 only
	// Make sure textarea (and checkbox) defaultValue is properly cloned
	div.innerHTML = "<textarea>x</textarea>";
	support.noCloneChecked = !!div.cloneNode( true ).lastChild.defaultValue;
} )();
var documentElement = document.documentElement;



var
	rkeyEvent = /^key/,
	rmouseEvent = /^(?:mouse|pointer|contextmenu|drag|drop)|click/,
	rtypenamespace = /^([^.]*)(?:\.(.+)|)/;

function returnTrue() {
	return true;
}

function returnFalse() {
	return false;
}

// Support: IE <=9 only
// See #13393 for more info
function safeActiveElement() {
	try {
		return document.activeElement;
	} catch ( err ) { }
}

function on( elem, types, selector, data, fn, one ) {
	var origFn, type;

	// Types can be a map of types/handlers
	if ( typeof types === "object" ) {

		// ( types-Object, selector, data )
		if ( typeof selector !== "string" ) {

			// ( types-Object, data )
			data = data || selector;
			selector = undefined;
		}
		for ( type in types ) {
			on( elem, type, selector, data, types[ type ], one );
		}
		return elem;
	}

	if ( data == null && fn == null ) {

		// ( types, fn )
		fn = selector;
		data = selector = undefined;
	} else if ( fn == null ) {
		if ( typeof selector === "string" ) {

			// ( types, selector, fn )
			fn = data;
			data = undefined;
		} else {

			// ( types, data, fn )
			fn = data;
			data = selector;
			selector = undefined;
		}
	}
	if ( fn === false ) {
		fn = returnFalse;
	} else if ( !fn ) {
		return elem;
	}

	if ( one === 1 ) {
		origFn = fn;
		fn = function( event ) {

			// Can use an empty set, since event contains the info
			jQuery().off( event );
			return origFn.apply( this, arguments );
		};

		// Use same guid so caller can remove using origFn
		fn.guid = origFn.guid || ( origFn.guid = jQuery.guid++ );
	}
	return elem.each( function() {
		jQuery.event.add( this, types, fn, data, selector );
	} );
}

/*
 * Helper functions for managing events -- not part of the public interface.
 * Props to Dean Edwards' addEvent library for many of the ideas.
 */
jQuery.event = {

	global: {},

	add: function( elem, types, handler, data, selector ) {

		var handleObjIn, eventHandle, tmp,
			events, t, handleObj,
			special, handlers, type, namespaces, origType,
			elemData = dataPriv.get( elem );

		// Don't attach events to noData or text/comment nodes (but allow plain objects)
		if ( !elemData ) {
			return;
		}

		// Caller can pass in an object of custom data in lieu of the handler
		if ( handler.handler ) {
			handleObjIn = handler;
			handler = handleObjIn.handler;
			selector = handleObjIn.selector;
		}

		// Ensure that invalid selectors throw exceptions at attach time
		// Evaluate against documentElement in case elem is a non-element node (e.g., document)
		if ( selector ) {
			jQuery.find.matchesSelector( documentElement, selector );
		}

		// Make sure that the handler has a unique ID, used to find/remove it later
		if ( !handler.guid ) {
			handler.guid = jQuery.guid++;
		}

		// Init the element's event structure and main handler, if this is the first
		if ( !( events = elemData.events ) ) {
			events = elemData.events = {};
		}
		if ( !( eventHandle = elemData.handle ) ) {
			eventHandle = elemData.handle = function( e ) {

				// Discard the second event of a jQuery.event.trigger() and
				// when an event is called after a page has unloaded
				return typeof jQuery !== "undefined" && jQuery.event.triggered !== e.type ?
					jQuery.event.dispatch.apply( elem, arguments ) : undefined;
			};
		}

		// Handle multiple events separated by a space
		types = ( types || "" ).match( rnothtmlwhite ) || [ "" ];
		t = types.length;
		while ( t-- ) {
			tmp = rtypenamespace.exec( types[ t ] ) || [];
			type = origType = tmp[ 1 ];
			namespaces = ( tmp[ 2 ] || "" ).split( "." ).sort();

			// There *must* be a type, no attaching namespace-only handlers
			if ( !type ) {
				continue;
			}

			// If event changes its type, use the special event handlers for the changed type
			special = jQuery.event.special[ type ] || {};

			// If selector defined, determine special event api type, otherwise given type
			type = ( selector ? special.delegateType : special.bindType ) || type;

			// Update special based on newly reset type
			special = jQuery.event.special[ type ] || {};

			// handleObj is passed to all event handlers
			handleObj = jQuery.extend( {
				type: type,
				origType: origType,
				data: data,
				handler: handler,
				guid: handler.guid,
				selector: selector,
				needsContext: selector && jQuery.expr.match.needsContext.test( selector ),
				namespace: namespaces.join( "." )
			}, handleObjIn );

			// Init the event handler queue if we're the first
			if ( !( handlers = events[ type ] ) ) {
				handlers = events[ type ] = [];
				handlers.delegateCount = 0;

				// Only use addEventListener if the special events handler returns false
				if ( !special.setup ||
					special.setup.call( elem, data, namespaces, eventHandle ) === false ) {

					if ( elem.addEventListener ) {
						elem.addEventListener( type, eventHandle );
					}
				}
			}

			if ( special.add ) {
				special.add.call( elem, handleObj );

				if ( !handleObj.handler.guid ) {
					handleObj.handler.guid = handler.guid;
				}
			}

			// Add to the element's handler list, delegates in front
			if ( selector ) {
				handlers.splice( handlers.delegateCount++, 0, handleObj );
			} else {
				handlers.push( handleObj );
			}

			// Keep track of which events have ever been used, for event optimization
			jQuery.event.global[ type ] = true;
		}

	},

	// Detach an event or set of events from an element
	remove: function( elem, types, handler, selector, mappedTypes ) {

		var j, origCount, tmp,
			events, t, handleObj,
			special, handlers, type, namespaces, origType,
			elemData = dataPriv.hasData( elem ) && dataPriv.get( elem );

		if ( !elemData || !( events = elemData.events ) ) {
			return;
		}

		// Once for each type.namespace in types; type may be omitted
		types = ( types || "" ).match( rnothtmlwhite ) || [ "" ];
		t = types.length;
		while ( t-- ) {
			tmp = rtypenamespace.exec( types[ t ] ) || [];
			type = origType = tmp[ 1 ];
			namespaces = ( tmp[ 2 ] || "" ).split( "." ).sort();

			// Unbind all events (on this namespace, if provided) for the element
			if ( !type ) {
				for ( type in events ) {
					jQuery.event.remove( elem, type + types[ t ], handler, selector, true );
				}
				continue;
			}

			special = jQuery.event.special[ type ] || {};
			type = ( selector ? special.delegateType : special.bindType ) || type;
			handlers = events[ type ] || [];
			tmp = tmp[ 2 ] &&
				new RegExp( "(^|\\.)" + namespaces.join( "\\.(?:.*\\.|)" ) + "(\\.|$)" );

			// Remove matching events
			origCount = j = handlers.length;
			while ( j-- ) {
				handleObj = handlers[ j ];

				if ( ( mappedTypes || origType === handleObj.origType ) &&
					( !handler || handler.guid === handleObj.guid ) &&
					( !tmp || tmp.test( handleObj.namespace ) ) &&
					( !selector || selector === handleObj.selector ||
						selector === "**" && handleObj.selector ) ) {
					handlers.splice( j, 1 );

					if ( handleObj.selector ) {
						handlers.delegateCount--;
					}
					if ( special.remove ) {
						special.remove.call( elem, handleObj );
					}
				}
			}

			// Remove generic event handler if we removed something and no more handlers exist
			// (avoids potential for endless recursion during removal of special event handlers)
			if ( origCount && !handlers.length ) {
				if ( !special.teardown ||
					special.teardown.call( elem, namespaces, elemData.handle ) === false ) {

					jQuery.removeEvent( elem, type, elemData.handle );
				}

				delete events[ type ];
			}
		}

		// Remove data and the expando if it's no longer used
		if ( jQuery.isEmptyObject( events ) ) {
			dataPriv.remove( elem, "handle events" );
		}
	},

	dispatch: function( nativeEvent ) {

		// Make a writable jQuery.Event from the native event object
		var event = jQuery.event.fix( nativeEvent );

		var i, j, ret, matched, handleObj, handlerQueue,
			args = new Array( arguments.length ),
			handlers = ( dataPriv.get( this, "events" ) || {} )[ event.type ] || [],
			special = jQuery.event.special[ event.type ] || {};

		// Use the fix-ed jQuery.Event rather than the (read-only) native event
		args[ 0 ] = event;

		for ( i = 1; i < arguments.length; i++ ) {
			args[ i ] = arguments[ i ];
		}

		event.delegateTarget = this;

		// Call the preDispatch hook for the mapped type, and let it bail if desired
		if ( special.preDispatch && special.preDispatch.call( this, event ) === false ) {
			return;
		}

		// Determine handlers
		handlerQueue = jQuery.event.handlers.call( this, event, handlers );

		// Run delegates first; they may want to stop propagation beneath us
		i = 0;
		while ( ( matched = handlerQueue[ i++ ] ) && !event.isPropagationStopped() ) {
			event.currentTarget = matched.elem;

			j = 0;
			while ( ( handleObj = matched.handlers[ j++ ] ) &&
				!event.isImmediatePropagationStopped() ) {

				// Triggered event must either 1) have no namespace, or 2) have namespace(s)
				// a subset or equal to those in the bound event (both can have no namespace).
				if ( !event.rnamespace || event.rnamespace.test( handleObj.namespace ) ) {

					event.handleObj = handleObj;
					event.data = handleObj.data;

					ret = ( ( jQuery.event.special[ handleObj.origType ] || {} ).handle ||
						handleObj.handler ).apply( matched.elem, args );

					if ( ret !== undefined ) {
						if ( ( event.result = ret ) === false ) {
							event.preventDefault();
							event.stopPropagation();
						}
					}
				}
			}
		}

		// Call the postDispatch hook for the mapped type
		if ( special.postDispatch ) {
			special.postDispatch.call( this, event );
		}

		return event.result;
	},

	handlers: function( event, handlers ) {
		var i, handleObj, sel, matchedHandlers, matchedSelectors,
			handlerQueue = [],
			delegateCount = handlers.delegateCount,
			cur = event.target;

		// Find delegate handlers
		if ( delegateCount &&

			// Support: IE <=9
			// Black-hole SVG <use> instance trees (trac-13180)
			cur.nodeType &&

			// Support: Firefox <=42
			// Suppress spec-violating clicks indicating a non-primary pointer button (trac-3861)
			// https://www.w3.org/TR/DOM-Level-3-Events/#event-type-click
			// Support: IE 11 only
			// ...but not arrow key "clicks" of radio inputs, which can have `button` -1 (gh-2343)
			!( event.type === "click" && event.button >= 1 ) ) {

			for ( ; cur !== this; cur = cur.parentNode || this ) {

				// Don't check non-elements (#13208)
				// Don't process clicks on disabled elements (#6911, #8165, #11382, #11764)
				if ( cur.nodeType === 1 && !( event.type === "click" && cur.disabled === true ) ) {
					matchedHandlers = [];
					matchedSelectors = {};
					for ( i = 0; i < delegateCount; i++ ) {
						handleObj = handlers[ i ];

						// Don't conflict with Object.prototype properties (#13203)
						sel = handleObj.selector + " ";

						if ( matchedSelectors[ sel ] === undefined ) {
							matchedSelectors[ sel ] = handleObj.needsContext ?
								jQuery( sel, this ).index( cur ) > -1 :
								jQuery.find( sel, this, null, [ cur ] ).length;
						}
						if ( matchedSelectors[ sel ] ) {
							matchedHandlers.push( handleObj );
						}
					}
					if ( matchedHandlers.length ) {
						handlerQueue.push( { elem: cur, handlers: matchedHandlers } );
					}
				}
			}
		}

		// Add the remaining (directly-bound) handlers
		cur = this;
		if ( delegateCount < handlers.length ) {
			handlerQueue.push( { elem: cur, handlers: handlers.slice( delegateCount ) } );
		}

		return handlerQueue;
	},

	addProp: function( name, hook ) {
		Object.defineProperty( jQuery.Event.prototype, name, {
			enumerable: true,
			configurable: true,

			get: jQuery.isFunction( hook ) ?
				function() {
					if ( this.originalEvent ) {
							return hook( this.originalEvent );
					}
				} :
				function() {
					if ( this.originalEvent ) {
							return this.originalEvent[ name ];
					}
				},

			set: function( value ) {
				Object.defineProperty( this, name, {
					enumerable: true,
					configurable: true,
					writable: true,
					value: value
				} );
			}
		} );
	},

	fix: function( originalEvent ) {
		return originalEvent[ jQuery.expando ] ?
			originalEvent :
			new jQuery.Event( originalEvent );
	},

	special: {
		load: {

			// Prevent triggered image.load events from bubbling to window.load
			noBubble: true
		},
		focus: {

			// Fire native event if possible so blur/focus sequence is correct
			trigger: function() {
				if ( this !== safeActiveElement() && this.focus ) {
					this.focus();
					return false;
				}
			},
			delegateType: "focusin"
		},
		blur: {
			trigger: function() {
				if ( this === safeActiveElement() && this.blur ) {
					this.blur();
					return false;
				}
			},
			delegateType: "focusout"
		},
		click: {

			// For checkbox, fire native event so checked state will be right
			trigger: function() {
				if ( this.type === "checkbox" && this.click && jQuery.nodeName( this, "input" ) ) {
					this.click();
					return false;
				}
			},

			// For cross-browser consistency, don't fire native .click() on links
			_default: function( event ) {
				return jQuery.nodeName( event.target, "a" );
			}
		},

		beforeunload: {
			postDispatch: function( event ) {

				// Support: Firefox 20+
				// Firefox doesn't alert if the returnValue field is not set.
				if ( event.result !== undefined && event.originalEvent ) {
					event.originalEvent.returnValue = event.result;
				}
			}
		}
	}
};

jQuery.removeEvent = function( elem, type, handle ) {

	// This "if" is needed for plain objects
	if ( elem.removeEventListener ) {
		elem.removeEventListener( type, handle );
	}
};

jQuery.Event = function( src, props ) {

	// Allow instantiation without the 'new' keyword
	if ( !( this instanceof jQuery.Event ) ) {
		return new jQuery.Event( src, props );
	}

	// Event object
	if ( src && src.type ) {
		this.originalEvent = src;
		this.type = src.type;

		// Events bubbling up the document may have been marked as prevented
		// by a handler lower down the tree; reflect the correct value.
		this.isDefaultPrevented = src.defaultPrevented ||
				src.defaultPrevented === undefined &&

				// Support: Android <=2.3 only
				src.returnValue === false ?
			returnTrue :
			returnFalse;

		// Create target properties
		// Support: Safari <=6 - 7 only
		// Target should not be a text node (#504, #13143)
		this.target = ( src.target && src.target.nodeType === 3 ) ?
			src.target.parentNode :
			src.target;

		this.currentTarget = src.currentTarget;
		this.relatedTarget = src.relatedTarget;

	// Event type
	} else {
		this.type = src;
	}

	// Put explicitly provided properties onto the event object
	if ( props ) {
		jQuery.extend( this, props );
	}

	// Create a timestamp if incoming event doesn't have one
	this.timeStamp = src && src.timeStamp || jQuery.now();

	// Mark it as fixed
	this[ jQuery.expando ] = true;
};

// jQuery.Event is based on DOM3 Events as specified by the ECMAScript Language Binding
// https://www.w3.org/TR/2003/WD-DOM-Level-3-Events-20030331/ecma-script-binding.html
jQuery.Event.prototype = {
	constructor: jQuery.Event,
	isDefaultPrevented: returnFalse,
	isPropagationStopped: returnFalse,
	isImmediatePropagationStopped: returnFalse,
	isSimulated: false,

	preventDefault: function() {
		var e = this.originalEvent;

		this.isDefaultPrevented = returnTrue;

		if ( e && !this.isSimulated ) {
			e.preventDefault();
		}
	},
	stopPropagation: function() {
		var e = this.originalEvent;

		this.isPropagationStopped = returnTrue;

		if ( e && !this.isSimulated ) {
			e.stopPropagation();
		}
	},
	stopImmediatePropagation: function() {
		var e = this.originalEvent;

		this.isImmediatePropagationStopped = returnTrue;

		if ( e && !this.isSimulated ) {
			e.stopImmediatePropagation();
		}

		this.stopPropagation();
	}
};

// Includes all common event props including KeyEvent and MouseEvent specific props
jQuery.each( {
	altKey: true,
	bubbles: true,
	cancelable: true,
	changedTouches: true,
	ctrlKey: true,
	detail: true,
	eventPhase: true,
	metaKey: true,
	pageX: true,
	pageY: true,
	shiftKey: true,
	view: true,
	"char": true,
	charCode: true,
	key: true,
	keyCode: true,
	button: true,
	buttons: true,
	clientX: true,
	clientY: true,
	offsetX: true,
	offsetY: true,
	pointerId: true,
	pointerType: true,
	screenX: true,
	screenY: true,
	targetTouches: true,
	toElement: true,
	touches: true,

	which: function( event ) {
		var button = event.button;

		// Add which for key events
		if ( event.which == null && rkeyEvent.test( event.type ) ) {
			return event.charCode != null ? event.charCode : event.keyCode;
		}

		// Add which for click: 1 === left; 2 === middle; 3 === right
		if ( !event.which && button !== undefined && rmouseEvent.test( event.type ) ) {
			if ( button & 1 ) {
				return 1;
			}

			if ( button & 2 ) {
				return 3;
			}

			if ( button & 4 ) {
				return 2;
			}

			return 0;
		}

		return event.which;
	}
}, jQuery.event.addProp );

// Create mouseenter/leave events using mouseover/out and event-time checks
// so that event delegation works in jQuery.
// Do the same for pointerenter/pointerleave and pointerover/pointerout
//
// Support: Safari 7 only
// Safari sends mouseenter too often; see:
// https://bugs.chromium.org/p/chromium/issues/detail?id=470258
// for the description of the bug (it existed in older Chrome versions as well).
jQuery.each( {
	mouseenter: "mouseover",
	mouseleave: "mouseout",
	pointerenter: "pointerover",
	pointerleave: "pointerout"
}, function( orig, fix ) {
	jQuery.event.special[ orig ] = {
		delegateType: fix,
		bindType: fix,

		handle: function( event ) {
			var ret,
				target = this,
				related = event.relatedTarget,
				handleObj = event.handleObj;

			// For mouseenter/leave call the handler if related is outside the target.
			// NB: No relatedTarget if the mouse left/entered the browser window
			if ( !related || ( related !== target && !jQuery.contains( target, related ) ) ) {
				event.type = handleObj.origType;
				ret = handleObj.handler.apply( this, arguments );
				event.type = fix;
			}
			return ret;
		}
	};
} );

jQuery.fn.extend( {

	on: function( types, selector, data, fn ) {
		return on( this, types, selector, data, fn );
	},
	one: function( types, selector, data, fn ) {
		return on( this, types, selector, data, fn, 1 );
	},
	off: function( types, selector, fn ) {
		var handleObj, type;
		if ( types && types.preventDefault && types.handleObj ) {

			// ( event )  dispatched jQuery.Event
			handleObj = types.handleObj;
			jQuery( types.delegateTarget ).off(
				handleObj.namespace ?
					handleObj.origType + "." + handleObj.namespace :
					handleObj.origType,
				handleObj.selector,
				handleObj.handler
			);
			return this;
		}
		if ( typeof types === "object" ) {

			// ( types-object [, selector] )
			for ( type in types ) {
				this.off( type, selector, types[ type ] );
			}
			return this;
		}
		if ( selector === false || typeof selector === "function" ) {

			// ( types [, fn] )
			fn = selector;
			selector = undefined;
		}
		if ( fn === false ) {
			fn = returnFalse;
		}
		return this.each( function() {
			jQuery.event.remove( this, types, fn, selector );
		} );
	}
} );


var

	/* eslint-disable max-len */

	// See https://github.com/eslint/eslint/issues/3229
	rxhtmlTag = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi,

	/* eslint-enable */

	// Support: IE <=10 - 11, Edge 12 - 13
	// In IE/Edge using regex groups here causes severe slowdowns.
	// See https://connect.microsoft.com/IE/feedback/details/1736512/
	rnoInnerhtml = /<script|<style|<link/i,

	// checked="checked" or checked
	rchecked = /checked\s*(?:[^=]|=\s*.checked.)/i,
	rscriptTypeMasked = /^true\/(.*)/,
	rcleanScript = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;

function manipulationTarget( elem, content ) {
	if ( jQuery.nodeName( elem, "table" ) &&
		jQuery.nodeName( content.nodeType !== 11 ? content : content.firstChild, "tr" ) ) {

		return elem.getElementsByTagName( "tbody" )[ 0 ] || elem;
	}

	return elem;
}

// Replace/restore the type attribute of script elements for safe DOM manipulation
function disableScript( elem ) {
	elem.type = ( elem.getAttribute( "type" ) !== null ) + "/" + elem.type;
	return elem;
}
function restoreScript( elem ) {
	var match = rscriptTypeMasked.exec( elem.type );

	if ( match ) {
		elem.type = match[ 1 ];
	} else {
		elem.removeAttribute( "type" );
	}

	return elem;
}

function cloneCopyEvent( src, dest ) {
	var i, l, type, pdataOld, pdataCur, udataOld, udataCur, events;

	if ( dest.nodeType !== 1 ) {
		return;
	}

	// 1. Copy private data: events, handlers, etc.
	if ( dataPriv.hasData( src ) ) {
		pdataOld = dataPriv.access( src );
		pdataCur = dataPriv.set( dest, pdataOld );
		events = pdataOld.events;

		if ( events ) {
			delete pdataCur.handle;
			pdataCur.events = {};

			for ( type in events ) {
				for ( i = 0, l = events[ type ].length; i < l; i++ ) {
					jQuery.event.add( dest, type, events[ type ][ i ] );
				}
			}
		}
	}

	// 2. Copy user data
	if ( dataUser.hasData( src ) ) {
		udataOld = dataUser.access( src );
		udataCur = jQuery.extend( {}, udataOld );

		dataUser.set( dest, udataCur );
	}
}

// Fix IE bugs, see support tests
function fixInput( src, dest ) {
	var nodeName = dest.nodeName.toLowerCase();

	// Fails to persist the checked state of a cloned checkbox or radio button.
	if ( nodeName === "input" && rcheckableType.test( src.type ) ) {
		dest.checked = src.checked;

	// Fails to return the selected option to the default selected state when cloning options
	} else if ( nodeName === "input" || nodeName === "textarea" ) {
		dest.defaultValue = src.defaultValue;
	}
}

function domManip( collection, args, callback, ignored ) {

	// Flatten any nested arrays
	args = concat.apply( [], args );

	var fragment, first, scripts, hasScripts, node, doc,
		i = 0,
		l = collection.length,
		iNoClone = l - 1,
		value = args[ 0 ],
		isFunction = jQuery.isFunction( value );

	// We can't cloneNode fragments that contain checked, in WebKit
	if ( isFunction ||
			( l > 1 && typeof value === "string" &&
				!support.checkClone && rchecked.test( value ) ) ) {
		return collection.each( function( index ) {
			var self = collection.eq( index );
			if ( isFunction ) {
				args[ 0 ] = value.call( this, index, self.html() );
			}
			domManip( self, args, callback, ignored );
		} );
	}

	if ( l ) {
		fragment = buildFragment( args, collection[ 0 ].ownerDocument, false, collection, ignored );
		first = fragment.firstChild;

		if ( fragment.childNodes.length === 1 ) {
			fragment = first;
		}

		// Require either new content or an interest in ignored elements to invoke the callback
		if ( first || ignored ) {
			scripts = jQuery.map( getAll( fragment, "script" ), disableScript );
			hasScripts = scripts.length;

			// Use the original fragment for the last item
			// instead of the first because it can end up
			// being emptied incorrectly in certain situations (#8070).
			for ( ; i < l; i++ ) {
				node = fragment;

				if ( i !== iNoClone ) {
					node = jQuery.clone( node, true, true );

					// Keep references to cloned scripts for later restoration
					if ( hasScripts ) {

						// Support: Android <=4.0 only, PhantomJS 1 only
						// push.apply(_, arraylike) throws on ancient WebKit
						jQuery.merge( scripts, getAll( node, "script" ) );
					}
				}

				callback.call( collection[ i ], node, i );
			}

			if ( hasScripts ) {
				doc = scripts[ scripts.length - 1 ].ownerDocument;

				// Reenable scripts
				jQuery.map( scripts, restoreScript );

				// Evaluate executable scripts on first document insertion
				for ( i = 0; i < hasScripts; i++ ) {
					node = scripts[ i ];
					if ( rscriptType.test( node.type || "" ) &&
						!dataPriv.access( node, "globalEval" ) &&
						jQuery.contains( doc, node ) ) {

						if ( node.src ) {

							// Optional AJAX dependency, but won't run scripts if not present
							if ( jQuery._evalUrl ) {
								jQuery._evalUrl( node.src );
							}
						} else {
							DOMEval( node.textContent.replace( rcleanScript, "" ), doc );
						}
					}
				}
			}
		}
	}

	return collection;
}

function remove( elem, selector, keepData ) {
	var node,
		nodes = selector ? jQuery.filter( selector, elem ) : elem,
		i = 0;

	for ( ; ( node = nodes[ i ] ) != null; i++ ) {
		if ( !keepData && node.nodeType === 1 ) {
			jQuery.cleanData( getAll( node ) );
		}

		if ( node.parentNode ) {
			if ( keepData && jQuery.contains( node.ownerDocument, node ) ) {
				setGlobalEval( getAll( node, "script" ) );
			}
			node.parentNode.removeChild( node );
		}
	}

	return elem;
}

jQuery.extend( {
	htmlPrefilter: function( html ) {
		return html.replace( rxhtmlTag, "<$1></$2>" );
	},

	clone: function( elem, dataAndEvents, deepDataAndEvents ) {
		var i, l, srcElements, destElements,
			clone = elem.cloneNode( true ),
			inPage = jQuery.contains( elem.ownerDocument, elem );

		// Fix IE cloning issues
		if ( !support.noCloneChecked && ( elem.nodeType === 1 || elem.nodeType === 11 ) &&
				!jQuery.isXMLDoc( elem ) ) {

			// We eschew Sizzle here for performance reasons: https://jsperf.com/getall-vs-sizzle/2
			destElements = getAll( clone );
			srcElements = getAll( elem );

			for ( i = 0, l = srcElements.length; i < l; i++ ) {
				fixInput( srcElements[ i ], destElements[ i ] );
			}
		}

		// Copy the events from the original to the clone
		if ( dataAndEvents ) {
			if ( deepDataAndEvents ) {
				srcElements = srcElements || getAll( elem );
				destElements = destElements || getAll( clone );

				for ( i = 0, l = srcElements.length; i < l; i++ ) {
					cloneCopyEvent( srcElements[ i ], destElements[ i ] );
				}
			} else {
				cloneCopyEvent( elem, clone );
			}
		}

		// Preserve script evaluation history
		destElements = getAll( clone, "script" );
		if ( destElements.length > 0 ) {
			setGlobalEval( destElements, !inPage && getAll( elem, "script" ) );
		}

		// Return the cloned set
		return clone;
	},

	cleanData: function( elems ) {
		var data, elem, type,
			special = jQuery.event.special,
			i = 0;

		for ( ; ( elem = elems[ i ] ) !== undefined; i++ ) {
			if ( acceptData( elem ) ) {
				if ( ( data = elem[ dataPriv.expando ] ) ) {
					if ( data.events ) {
						for ( type in data.events ) {
							if ( special[ type ] ) {
								jQuery.event.remove( elem, type );

							// This is a shortcut to avoid jQuery.event.remove's overhead
							} else {
								jQuery.removeEvent( elem, type, data.handle );
							}
						}
					}

					// Support: Chrome <=35 - 45+
					// Assign undefined instead of using delete, see Data#remove
					elem[ dataPriv.expando ] = undefined;
				}
				if ( elem[ dataUser.expando ] ) {

					// Support: Chrome <=35 - 45+
					// Assign undefined instead of using delete, see Data#remove
					elem[ dataUser.expando ] = undefined;
				}
			}
		}
	}
} );

jQuery.fn.extend( {
	detach: function( selector ) {
		return remove( this, selector, true );
	},

	remove: function( selector ) {
		return remove( this, selector );
	},

	text: function( value ) {
		return access( this, function( value ) {
			return value === undefined ?
				jQuery.text( this ) :
				this.empty().each( function() {
					if ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
						this.textContent = value;
					}
				} );
		}, null, value, arguments.length );
	},

	append: function() {
		return domManip( this, arguments, function( elem ) {
			if ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
				var target = manipulationTarget( this, elem );
				target.appendChild( elem );
			}
		} );
	},

	prepend: function() {
		return domManip( this, arguments, function( elem ) {
			if ( this.nodeType === 1 || this.nodeType === 11 || this.nodeType === 9 ) {
				var target = manipulationTarget( this, elem );
				target.insertBefore( elem, target.firstChild );
			}
		} );
	},

	before: function() {
		return domManip( this, arguments, function( elem ) {
			if ( this.parentNode ) {
				this.parentNode.insertBefore( elem, this );
			}
		} );
	},

	after: function() {
		return domManip( this, arguments, function( elem ) {
			if ( this.parentNode ) {
				this.parentNode.insertBefore( elem, this.nextSibling );
			}
		} );
	},

	empty: function() {
		var elem,
			i = 0;

		for ( ; ( elem = this[ i ] ) != null; i++ ) {
			if ( elem.nodeType === 1 ) {

				// Prevent memory leaks
				jQuery.cleanData( getAll( elem, false ) );

				// Remove any remaining nodes
				elem.textContent = "";
			}
		}

		return this;
	},

	clone: function( dataAndEvents, deepDataAndEvents ) {
		dataAndEvents = dataAndEvents == null ? false : dataAndEvents;
		deepDataAndEvents = deepDataAndEvents == null ? dataAndEvents : deepDataAndEvents;

		return this.map( function() {
			return jQuery.clone( this, dataAndEvents, deepDataAndEvents );
		} );
	},

	html: function( value ) {
		return access( this, function( value ) {
			var elem = this[ 0 ] || {},
				i = 0,
				l = this.length;

			if ( value === undefined && elem.nodeType === 1 ) {
				return elem.innerHTML;
			}

			// See if we can take a shortcut and just use innerHTML
			if ( typeof value === "string" && !rnoInnerhtml.test( value ) &&
				!wrapMap[ ( rtagName.exec( value ) || [ "", "" ] )[ 1 ].toLowerCase() ] ) {

				value = jQuery.htmlPrefilter( value );

				try {
					for ( ; i < l; i++ ) {
						elem = this[ i ] || {};

						// Remove element nodes and prevent memory leaks
						if ( elem.nodeType === 1 ) {
							jQuery.cleanData( getAll( elem, false ) );
							elem.innerHTML = value;
						}
					}

					elem = 0;

				// If using innerHTML throws an exception, use the fallback method
				} catch ( e ) {}
			}

			if ( elem ) {
				this.empty().append( value );
			}
		}, null, value, arguments.length );
	},

	replaceWith: function() {
		var ignored = [];

		// Make the changes, replacing each non-ignored context element with the new content
		return domManip( this, arguments, function( elem ) {
			var parent = this.parentNode;

			if ( jQuery.inArray( this, ignored ) < 0 ) {
				jQuery.cleanData( getAll( this ) );
				if ( parent ) {
					parent.replaceChild( elem, this );
				}
			}

		// Force callback invocation
		}, ignored );
	}
} );

jQuery.each( {
	appendTo: "append",
	prependTo: "prepend",
	insertBefore: "before",
	insertAfter: "after",
	replaceAll: "replaceWith"
}, function( name, original ) {
	jQuery.fn[ name ] = function( selector ) {
		var elems,
			ret = [],
			insert = jQuery( selector ),
			last = insert.length - 1,
			i = 0;

		for ( ; i <= last; i++ ) {
			elems = i === last ? this : this.clone( true );
			jQuery( insert[ i ] )[ original ]( elems );

			// Support: Android <=4.0 only, PhantomJS 1 only
			// .get() because push.apply(_, arraylike) throws on ancient WebKit
			push.apply( ret, elems.get() );
		}

		return this.pushStack( ret );
	};
} );
var rmargin = ( /^margin/ );

var rnumnonpx = new RegExp( "^(" + pnum + ")(?!px)[a-z%]+$", "i" );

var getStyles = function( elem ) {

		// Support: IE <=11 only, Firefox <=30 (#15098, #14150)
		// IE throws on elements created in popups
		// FF meanwhile throws on frame elements through "defaultView.getComputedStyle"
		var view = elem.ownerDocument.defaultView;

		if ( !view || !view.opener ) {
			view = window;
		}

		return view.getComputedStyle( elem );
	};



( function() {

	// Executing both pixelPosition & boxSizingReliable tests require only one layout
	// so they're executed at the same time to save the second computation.
	function computeStyleTests() {

		// This is a singleton, we need to execute it only once
		if ( !div ) {
			return;
		}

		div.style.cssText =
			"box-sizing:border-box;" +
			"position:relative;display:block;" +
			"margin:auto;border:1px;padding:1px;" +
			"top:1%;width:50%";
		div.innerHTML = "";
		documentElement.appendChild( container );

		var divStyle = window.getComputedStyle( div );
		pixelPositionVal = divStyle.top !== "1%";

		// Support: Android 4.0 - 4.3 only, Firefox <=3 - 44
		reliableMarginLeftVal = divStyle.marginLeft === "2px";
		boxSizingReliableVal = divStyle.width === "4px";

		// Support: Android 4.0 - 4.3 only
		// Some styles come back with percentage values, even though they shouldn't
		div.style.marginRight = "50%";
		pixelMarginRightVal = divStyle.marginRight === "4px";

		documentElement.removeChild( container );

		// Nullify the div so it wouldn't be stored in the memory and
		// it will also be a sign that checks already performed
		div = null;
	}

	var pixelPositionVal, boxSizingReliableVal, pixelMarginRightVal, reliableMarginLeftVal,
		container = document.createElement( "div" ),
		div = document.createElement( "div" );

	// Finish early in limited (non-browser) environments
	if ( !div.style ) {
		return;
	}

	// Support: IE <=9 - 11 only
	// Style of cloned element affects source element cloned (#8908)
	div.style.backgroundClip = "content-box";
	div.cloneNode( true ).style.backgroundClip = "";
	support.clearCloneStyle = div.style.backgroundClip === "content-box";

	container.style.cssText = "border:0;width:8px;height:0;top:0;left:-9999px;" +
		"padding:0;margin-top:1px;position:absolute";
	container.appendChild( div );

	jQuery.extend( support, {
		pixelPosition: function() {
			computeStyleTests();
			return pixelPositionVal;
		},
		boxSizingReliable: function() {
			computeStyleTests();
			return boxSizingReliableVal;
		},
		pixelMarginRight: function() {
			computeStyleTests();
			return pixelMarginRightVal;
		},
		reliableMarginLeft: function() {
			computeStyleTests();
			return reliableMarginLeftVal;
		}
	} );
} )();


function curCSS( elem, name, computed ) {
	var width, minWidth, maxWidth, ret,
		style = elem.style;

	computed = computed || getStyles( elem );

	// Support: IE <=9 only
	// getPropertyValue is only needed for .css('filter') (#12537)
	if ( computed ) {
		ret = computed.getPropertyValue( name ) || computed[ name ];

		if ( ret === "" && !jQuery.contains( elem.ownerDocument, elem ) ) {
			ret = jQuery.style( elem, name );
		}

		// A tribute to the "awesome hack by Dean Edwards"
		// Android Browser returns percentage for some values,
		// but width seems to be reliably pixels.
		// This is against the CSSOM draft spec:
		// https://drafts.csswg.org/cssom/#resolved-values
		if ( !support.pixelMarginRight() && rnumnonpx.test( ret ) && rmargin.test( name ) ) {

			// Remember the original values
			width = style.width;
			minWidth = style.minWidth;
			maxWidth = style.maxWidth;

			// Put in the new values to get a computed value out
			style.minWidth = style.maxWidth = style.width = ret;
			ret = computed.width;

			// Revert the changed values
			style.width = width;
			style.minWidth = minWidth;
			style.maxWidth = maxWidth;
		}
	}

	return ret !== undefined ?

		// Support: IE <=9 - 11 only
		// IE returns zIndex value as an integer.
		ret + "" :
		ret;
}


function addGetHookIf( conditionFn, hookFn ) {

	// Define the hook, we'll check on the first run if it's really needed.
	return {
		get: function() {
			if ( conditionFn() ) {

				// Hook not needed (or it's not possible to use it due
				// to missing dependency), remove it.
				delete this.get;
				return;
			}

			// Hook needed; redefine it so that the support test is not executed again.
			return ( this.get = hookFn ).apply( this, arguments );
		}
	};
}


var

	// Swappable if display is none or starts with table
	// except "table", "table-cell", or "table-caption"
	// See here for display values: https://developer.mozilla.org/en-US/docs/CSS/display
	rdisplayswap = /^(none|table(?!-c[ea]).+)/,
	cssShow = { position: "absolute", visibility: "hidden", display: "block" },
	cssNormalTransform = {
		letterSpacing: "0",
		fontWeight: "400"
	},

	cssPrefixes = [ "Webkit", "Moz", "ms" ],
	emptyStyle = document.createElement( "div" ).style;

// Return a css property mapped to a potentially vendor prefixed property
function vendorPropName( name ) {

	// Shortcut for names that are not vendor prefixed
	if ( name in emptyStyle ) {
		return name;
	}

	// Check for vendor prefixed names
	var capName = name[ 0 ].toUpperCase() + name.slice( 1 ),
		i = cssPrefixes.length;

	while ( i-- ) {
		name = cssPrefixes[ i ] + capName;
		if ( name in emptyStyle ) {
			return name;
		}
	}
}

function setPositiveNumber( elem, value, subtract ) {

	// Any relative (+/-) values have already been
	// normalized at this point
	var matches = rcssNum.exec( value );
	return matches ?

		// Guard against undefined "subtract", e.g., when used as in cssHooks
		Math.max( 0, matches[ 2 ] - ( subtract || 0 ) ) + ( matches[ 3 ] || "px" ) :
		value;
}

function augmentWidthOrHeight( elem, name, extra, isBorderBox, styles ) {
	var i,
		val = 0;

	// If we already have the right measurement, avoid augmentation
	if ( extra === ( isBorderBox ? "border" : "content" ) ) {
		i = 4;

	// Otherwise initialize for horizontal or vertical properties
	} else {
		i = name === "width" ? 1 : 0;
	}

	for ( ; i < 4; i += 2 ) {

		// Both box models exclude margin, so add it if we want it
		if ( extra === "margin" ) {
			val += jQuery.css( elem, extra + cssExpand[ i ], true, styles );
		}

		if ( isBorderBox ) {

			// border-box includes padding, so remove it if we want content
			if ( extra === "content" ) {
				val -= jQuery.css( elem, "padding" + cssExpand[ i ], true, styles );
			}

			// At this point, extra isn't border nor margin, so remove border
			if ( extra !== "margin" ) {
				val -= jQuery.css( elem, "border" + cssExpand[ i ] + "Width", true, styles );
			}
		} else {

			// At this point, extra isn't content, so add padding
			val += jQuery.css( elem, "padding" + cssExpand[ i ], true, styles );

			// At this point, extra isn't content nor padding, so add border
			if ( extra !== "padding" ) {
				val += jQuery.css( elem, "border" + cssExpand[ i ] + "Width", true, styles );
			}
		}
	}

	return val;
}

function getWidthOrHeight( elem, name, extra ) {

	// Start with offset property, which is equivalent to the border-box value
	var val,
		valueIsBorderBox = true,
		styles = getStyles( elem ),
		isBorderBox = jQuery.css( elem, "boxSizing", false, styles ) === "border-box";

	// Support: IE <=11 only
	// Running getBoundingClientRect on a disconnected node
	// in IE throws an error.
	if ( elem.getClientRects().length ) {
		val = elem.getBoundingClientRect()[ name ];
	}

	// Some non-html elements return undefined for offsetWidth, so check for null/undefined
	// svg - https://bugzilla.mozilla.org/show_bug.cgi?id=649285
	// MathML - https://bugzilla.mozilla.org/show_bug.cgi?id=491668
	if ( val <= 0 || val == null ) {

		// Fall back to computed then uncomputed css if necessary
		val = curCSS( elem, name, styles );
		if ( val < 0 || val == null ) {
			val = elem.style[ name ];
		}

		// Computed unit is not pixels. Stop here and return.
		if ( rnumnonpx.test( val ) ) {
			return val;
		}

		// Check for style in case a browser which returns unreliable values
		// for getComputedStyle silently falls back to the reliable elem.style
		valueIsBorderBox = isBorderBox &&
			( support.boxSizingReliable() || val === elem.style[ name ] );

		// Normalize "", auto, and prepare for extra
		val = parseFloat( val ) || 0;
	}

	// Use the active box-sizing model to add/subtract irrelevant styles
	return ( val +
		augmentWidthOrHeight(
			elem,
			name,
			extra || ( isBorderBox ? "border" : "content" ),
			valueIsBorderBox,
			styles
		)
	) + "px";
}

jQuery.extend( {

	// Add in style property hooks for overriding the default
	// behavior of getting and setting a style property
	cssHooks: {
		opacity: {
			get: function( elem, computed ) {
				if ( computed ) {

					// We should always get a number back from opacity
					var ret = curCSS( elem, "opacity" );
					return ret === "" ? "1" : ret;
				}
			}
		}
	},

	// Don't automatically add "px" to these possibly-unitless properties
	cssNumber: {
		"animationIterationCount": true,
		"columnCount": true,
		"fillOpacity": true,
		"flexGrow": true,
		"flexShrink": true,
		"fontWeight": true,
		"lineHeight": true,
		"opacity": true,
		"order": true,
		"orphans": true,
		"widows": true,
		"zIndex": true,
		"zoom": true
	},

	// Add in properties whose names you wish to fix before
	// setting or getting the value
	cssProps: {
		"float": "cssFloat"
	},

	// Get and set the style property on a DOM Node
	style: function( elem, name, value, extra ) {

		// Don't set styles on text and comment nodes
		if ( !elem || elem.nodeType === 3 || elem.nodeType === 8 || !elem.style ) {
			return;
		}

		// Make sure that we're working with the right name
		var ret, type, hooks,
			origName = jQuery.camelCase( name ),
			style = elem.style;

		name = jQuery.cssProps[ origName ] ||
			( jQuery.cssProps[ origName ] = vendorPropName( origName ) || origName );

		// Gets hook for the prefixed version, then unprefixed version
		hooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];

		// Check if we're setting a value
		if ( value !== undefined ) {
			type = typeof value;

			// Convert "+=" or "-=" to relative numbers (#7345)
			if ( type === "string" && ( ret = rcssNum.exec( value ) ) && ret[ 1 ] ) {
				value = adjustCSS( elem, name, ret );

				// Fixes bug #9237
				type = "number";
			}

			// Make sure that null and NaN values aren't set (#7116)
			if ( value == null || value !== value ) {
				return;
			}

			// If a number was passed in, add the unit (except for certain CSS properties)
			if ( type === "number" ) {
				value += ret && ret[ 3 ] || ( jQuery.cssNumber[ origName ] ? "" : "px" );
			}

			// background-* props affect original clone's values
			if ( !support.clearCloneStyle && value === "" && name.indexOf( "background" ) === 0 ) {
				style[ name ] = "inherit";
			}

			// If a hook was provided, use that value, otherwise just set the specified value
			if ( !hooks || !( "set" in hooks ) ||
				( value = hooks.set( elem, value, extra ) ) !== undefined ) {

				style[ name ] = value;
			}

		} else {

			// If a hook was provided get the non-computed value from there
			if ( hooks && "get" in hooks &&
				( ret = hooks.get( elem, false, extra ) ) !== undefined ) {

				return ret;
			}

			// Otherwise just get the value from the style object
			return style[ name ];
		}
	},

	css: function( elem, name, extra, styles ) {
		var val, num, hooks,
			origName = jQuery.camelCase( name );

		// Make sure that we're working with the right name
		name = jQuery.cssProps[ origName ] ||
			( jQuery.cssProps[ origName ] = vendorPropName( origName ) || origName );

		// Try prefixed name followed by the unprefixed name
		hooks = jQuery.cssHooks[ name ] || jQuery.cssHooks[ origName ];

		// If a hook was provided get the computed value from there
		if ( hooks && "get" in hooks ) {
			val = hooks.get( elem, true, extra );
		}

		// Otherwise, if a way to get the computed value exists, use that
		if ( val === undefined ) {
			val = curCSS( elem, name, styles );
		}

		// Convert "normal" to computed value
		if ( val === "normal" && name in cssNormalTransform ) {
			val = cssNormalTransform[ name ];
		}

		// Make numeric if forced or a qualifier was provided and val looks numeric
		if ( extra === "" || extra ) {
			num = parseFloat( val );
			return extra === true || isFinite( num ) ? num || 0 : val;
		}
		return val;
	}
} );

jQuery.each( [ "height", "width" ], function( i, name ) {
	jQuery.cssHooks[ name ] = {
		get: function( elem, computed, extra ) {
			if ( computed ) {

				// Certain elements can have dimension info if we invisibly show them
				// but it must have a current display style that would benefit
				return rdisplayswap.test( jQuery.css( elem, "display" ) ) &&

					// Support: Safari 8+
					// Table columns in Safari have non-zero offsetWidth & zero
					// getBoundingClientRect().width unless display is changed.
					// Support: IE <=11 only
					// Running getBoundingClientRect on a disconnected node
					// in IE throws an error.
					( !elem.getClientRects().length || !elem.getBoundingClientRect().width ) ?
						swap( elem, cssShow, function() {
							return getWidthOrHeight( elem, name, extra );
						} ) :
						getWidthOrHeight( elem, name, extra );
			}
		},

		set: function( elem, value, extra ) {
			var matches,
				styles = extra && getStyles( elem ),
				subtract = extra && augmentWidthOrHeight(
					elem,
					name,
					extra,
					jQuery.css( elem, "boxSizing", false, styles ) === "border-box",
					styles
				);

			// Convert to pixels if value adjustment is needed
			if ( subtract && ( matches = rcssNum.exec( value ) ) &&
				( matches[ 3 ] || "px" ) !== "px" ) {

				elem.style[ name ] = value;
				value = jQuery.css( elem, name );
			}

			return setPositiveNumber( elem, value, subtract );
		}
	};
} );

jQuery.cssHooks.marginLeft = addGetHookIf( support.reliableMarginLeft,
	function( elem, computed ) {
		if ( computed ) {
			return ( parseFloat( curCSS( elem, "marginLeft" ) ) ||
				elem.getBoundingClientRect().left -
					swap( elem, { marginLeft: 0 }, function() {
						return elem.getBoundingClientRect().left;
					} )
				) + "px";
		}
	}
);

// These hooks are used by animate to expand properties
jQuery.each( {
	margin: "",
	padding: "",
	border: "Width"
}, function( prefix, suffix ) {
	jQuery.cssHooks[ prefix + suffix ] = {
		expand: function( value ) {
			var i = 0,
				expanded = {},

				// Assumes a single number if not a string
				parts = typeof value === "string" ? value.split( " " ) : [ value ];

			for ( ; i < 4; i++ ) {
				expanded[ prefix + cssExpand[ i ] + suffix ] =
					parts[ i ] || parts[ i - 2 ] || parts[ 0 ];
			}

			return expanded;
		}
	};

	if ( !rmargin.test( prefix ) ) {
		jQuery.cssHooks[ prefix + suffix ].set = setPositiveNumber;
	}
} );

jQuery.fn.extend( {
	css: function( name, value ) {
		return access( this, function( elem, name, value ) {
			var styles, len,
				map = {},
				i = 0;

			if ( jQuery.isArray( name ) ) {
				styles = getStyles( elem );
				len = name.length;

				for ( ; i < len; i++ ) {
					map[ name[ i ] ] = jQuery.css( elem, name[ i ], false, styles );
				}

				return map;
			}

			return value !== undefined ?
				jQuery.style( elem, name, value ) :
				jQuery.css( elem, name );
		}, name, value, arguments.length > 1 );
	}
} );


function Tween( elem, options, prop, end, easing ) {
	return new Tween.prototype.init( elem, options, prop, end, easing );
}
jQuery.Tween = Tween;

Tween.prototype = {
	constructor: Tween,
	init: function( elem, options, prop, end, easing, unit ) {
		this.elem = elem;
		this.prop = prop;
		this.easing = easing || jQuery.easing._default;
		this.options = options;
		this.start = this.now = this.cur();
		this.end = end;
		this.unit = unit || ( jQuery.cssNumber[ prop ] ? "" : "px" );
	},
	cur: function() {
		var hooks = Tween.propHooks[ this.prop ];

		return hooks && hooks.get ?
			hooks.get( this ) :
			Tween.propHooks._default.get( this );
	},
	run: function( percent ) {
		var eased,
			hooks = Tween.propHooks[ this.prop ];

		if ( this.options.duration ) {
			this.pos = eased = jQuery.easing[ this.easing ](
				percent, this.options.duration * percent, 0, 1, this.options.duration
			);
		} else {
			this.pos = eased = percent;
		}
		this.now = ( this.end - this.start ) * eased + this.start;

		if ( this.options.step ) {
			this.options.step.call( this.elem, this.now, this );
		}

		if ( hooks && hooks.set ) {
			hooks.set( this );
		} else {
			Tween.propHooks._default.set( this );
		}
		return this;
	}
};

Tween.prototype.init.prototype = Tween.prototype;

Tween.propHooks = {
	_default: {
		get: function( tween ) {
			var result;

			// Use a property on the element directly when it is not a DOM element,
			// or when there is no matching style property that exists.
			if ( tween.elem.nodeType !== 1 ||
				tween.elem[ tween.prop ] != null && tween.elem.style[ tween.prop ] == null ) {
				return tween.elem[ tween.prop ];
			}

			// Passing an empty string as a 3rd parameter to .css will automatically
			// attempt a parseFloat and fallback to a string if the parse fails.
			// Simple values such as "10px" are parsed to Float;
			// complex values such as "rotate(1rad)" are returned as-is.
			result = jQuery.css( tween.elem, tween.prop, "" );

			// Empty strings, null, undefined and "auto" are converted to 0.
			return !result || result === "auto" ? 0 : result;
		},
		set: function( tween ) {

			// Use step hook for back compat.
			// Use cssHook if its there.
			// Use .style if available and use plain properties where available.
			if ( jQuery.fx.step[ tween.prop ] ) {
				jQuery.fx.step[ tween.prop ]( tween );
			} else if ( tween.elem.nodeType === 1 &&
				( tween.elem.style[ jQuery.cssProps[ tween.prop ] ] != null ||
					jQuery.cssHooks[ tween.prop ] ) ) {
				jQuery.style( tween.elem, tween.prop, tween.now + tween.unit );
			} else {
				tween.elem[ tween.prop ] = tween.now;
			}
		}
	}
};

// Support: IE <=9 only
// Panic based approach to setting things on disconnected nodes
Tween.propHooks.scrollTop = Tween.propHooks.scrollLeft = {
	set: function( tween ) {
		if ( tween.elem.nodeType && tween.elem.parentNode ) {
			tween.elem[ tween.prop ] = tween.now;
		}
	}
};

jQuery.easing = {
	linear: function( p ) {
		return p;
	},
	swing: function( p ) {
		return 0.5 - Math.cos( p * Math.PI ) / 2;
	},
	_default: "swing"
};

jQuery.fx = Tween.prototype.init;

// Back compat <1.8 extension point
jQuery.fx.step = {};




var
	fxNow, timerId,
	rfxtypes = /^(?:toggle|show|hide)$/,
	rrun = /queueHooks$/;

function raf() {
	if ( timerId ) {
		window.requestAnimationFrame( raf );
		jQuery.fx.tick();
	}
}

// Animations created synchronously will run synchronously
function createFxNow() {
	window.setTimeout( function() {
		fxNow = undefined;
	} );
	return ( fxNow = jQuery.now() );
}

// Generate parameters to create a standard animation
function genFx( type, includeWidth ) {
	var which,
		i = 0,
		attrs = { height: type };

	// If we include width, step value is 1 to do all cssExpand values,
	// otherwise step value is 2 to skip over Left and Right
	includeWidth = includeWidth ? 1 : 0;
	for ( ; i < 4; i += 2 - includeWidth ) {
		which = cssExpand[ i ];
		attrs[ "margin" + which ] = attrs[ "padding" + which ] = type;
	}

	if ( includeWidth ) {
		attrs.opacity = attrs.width = type;
	}

	return attrs;
}

function createTween( value, prop, animation ) {
	var tween,
		collection = ( Animation.tweeners[ prop ] || [] ).concat( Animation.tweeners[ "*" ] ),
		index = 0,
		length = collection.length;
	for ( ; index < length; index++ ) {
		if ( ( tween = collection[ index ].call( animation, prop, value ) ) ) {

			// We're done with this property
			return tween;
		}
	}
}

function defaultPrefilter( elem, props, opts ) {
	var prop, value, toggle, hooks, oldfire, propTween, restoreDisplay, display,
		isBox = "width" in props || "height" in props,
		anim = this,
		orig = {},
		style = elem.style,
		hidden = elem.nodeType && isHiddenWithinTree( elem ),
		dataShow = dataPriv.get( elem, "fxshow" );

	// Queue-skipping animations hijack the fx hooks
	if ( !opts.queue ) {
		hooks = jQuery._queueHooks( elem, "fx" );
		if ( hooks.unqueued == null ) {
			hooks.unqueued = 0;
			oldfire = hooks.empty.fire;
			hooks.empty.fire = function() {
				if ( !hooks.unqueued ) {
					oldfire();
				}
			};
		}
		hooks.unqueued++;

		anim.always( function() {

			// Ensure the complete handler is called before this completes
			anim.always( function() {
				hooks.unqueued--;
				if ( !jQuery.queue( elem, "fx" ).length ) {
					hooks.empty.fire();
				}
			} );
		} );
	}

	// Detect show/hide animations
	for ( prop in props ) {
		value = props[ prop ];
		if ( rfxtypes.test( value ) ) {
			delete props[ prop ];
			toggle = toggle || value === "toggle";
			if ( value === ( hidden ? "hide" : "show" ) ) {

				// Pretend to be hidden if this is a "show" and
				// there is still data from a stopped show/hide
				if ( value === "show" && dataShow && dataShow[ prop ] !== undefined ) {
					hidden = true;

				// Ignore all other no-op show/hide data
				} else {
					continue;
				}
			}
			orig[ prop ] = dataShow && dataShow[ prop ] || jQuery.style( elem, prop );
		}
	}

	// Bail out if this is a no-op like .hide().hide()
	propTween = !jQuery.isEmptyObject( props );
	if ( !propTween && jQuery.isEmptyObject( orig ) ) {
		return;
	}

	// Restrict "overflow" and "display" styles during box animations
	if ( isBox && elem.nodeType === 1 ) {

		// Support: IE <=9 - 11, Edge 12 - 13
		// Record all 3 overflow attributes because IE does not infer the shorthand
		// from identically-valued overflowX and overflowY
		opts.overflow = [ style.overflow, style.overflowX, style.overflowY ];

		// Identify a display type, preferring old show/hide data over the CSS cascade
		restoreDisplay = dataShow && dataShow.display;
		if ( restoreDisplay == null ) {
			restoreDisplay = dataPriv.get( elem, "display" );
		}
		display = jQuery.css( elem, "display" );
		if ( display === "none" ) {
			if ( restoreDisplay ) {
				display = restoreDisplay;
			} else {

				// Get nonempty value(s) by temporarily forcing visibility
				showHide( [ elem ], true );
				restoreDisplay = elem.style.display || restoreDisplay;
				display = jQuery.css( elem, "display" );
				showHide( [ elem ] );
			}
		}

		// Animate inline elements as inline-block
		if ( display === "inline" || display === "inline-block" && restoreDisplay != null ) {
			if ( jQuery.css( elem, "float" ) === "none" ) {

				// Restore the original display value at the end of pure show/hide animations
				if ( !propTween ) {
					anim.done( function() {
						style.display = restoreDisplay;
					} );
					if ( restoreDisplay == null ) {
						display = style.display;
						restoreDisplay = display === "none" ? "" : display;
					}
				}
				style.display = "inline-block";
			}
		}
	}

	if ( opts.overflow ) {
		style.overflow = "hidden";
		anim.always( function() {
			style.overflow = opts.overflow[ 0 ];
			style.overflowX = opts.overflow[ 1 ];
			style.overflowY = opts.overflow[ 2 ];
		} );
	}

	// Implement show/hide animations
	propTween = false;
	for ( prop in orig ) {

		// General show/hide setup for this element animation
		if ( !propTween ) {
			if ( dataShow ) {
				if ( "hidden" in dataShow ) {
					hidden = dataShow.hidden;
				}
			} else {
				dataShow = dataPriv.access( elem, "fxshow", { display: restoreDisplay } );
			}

			// Store hidden/visible for toggle so `.stop().toggle()` "reverses"
			if ( toggle ) {
				dataShow.hidden = !hidden;
			}

			// Show elements before animating them
			if ( hidden ) {
				showHide( [ elem ], true );
			}

			/* eslint-disable no-loop-func */

			anim.done( function() {

			/* eslint-enable no-loop-func */

				// The final step of a "hide" animation is actually hiding the element
				if ( !hidden ) {
					showHide( [ elem ] );
				}
				dataPriv.remove( elem, "fxshow" );
				for ( prop in orig ) {
					jQuery.style( elem, prop, orig[ prop ] );
				}
			} );
		}

		// Per-property setup
		propTween = createTween( hidden ? dataShow[ prop ] : 0, prop, anim );
		if ( !( prop in dataShow ) ) {
			dataShow[ prop ] = propTween.start;
			if ( hidden ) {
				propTween.end = propTween.start;
				propTween.start = 0;
			}
		}
	}
}

function propFilter( props, specialEasing ) {
	var index, name, easing, value, hooks;

	// camelCase, specialEasing and expand cssHook pass
	for ( index in props ) {
		name = jQuery.camelCase( index );
		easing = specialEasing[ name ];
		value = props[ index ];
		if ( jQuery.isArray( value ) ) {
			easing = value[ 1 ];
			value = props[ index ] = value[ 0 ];
		}

		if ( index !== name ) {
			props[ name ] = value;
			delete props[ index ];
		}

		hooks = jQuery.cssHooks[ name ];
		if ( hooks && "expand" in hooks ) {
			value = hooks.expand( value );
			delete props[ name ];

			// Not quite $.extend, this won't overwrite existing keys.
			// Reusing 'index' because we have the correct "name"
			for ( index in value ) {
				if ( !( index in props ) ) {
					props[ index ] = value[ index ];
					specialEasing[ index ] = easing;
				}
			}
		} else {
			specialEasing[ name ] = easing;
		}
	}
}

function Animation( elem, properties, options ) {
	var result,
		stopped,
		index = 0,
		length = Animation.prefilters.length,
		deferred = jQuery.Deferred().always( function() {

			// Don't match elem in the :animated selector
			delete tick.elem;
		} ),
		tick = function() {
			if ( stopped ) {
				return false;
			}
			var currentTime = fxNow || createFxNow(),
				remaining = Math.max( 0, animation.startTime + animation.duration - currentTime ),

				// Support: Android 2.3 only
				// Archaic crash bug won't allow us to use `1 - ( 0.5 || 0 )` (#12497)
				temp = remaining / animation.duration || 0,
				percent = 1 - temp,
				index = 0,
				length = animation.tweens.length;

			for ( ; index < length; index++ ) {
				animation.tweens[ index ].run( percent );
			}

			deferred.notifyWith( elem, [ animation, percent, remaining ] );

			if ( percent < 1 && length ) {
				return remaining;
			} else {
				deferred.resolveWith( elem, [ animation ] );
				return false;
			}
		},
		animation = deferred.promise( {
			elem: elem,
			props: jQuery.extend( {}, properties ),
			opts: jQuery.extend( true, {
				specialEasing: {},
				easing: jQuery.easing._default
			}, options ),
			originalProperties: properties,
			originalOptions: options,
			startTime: fxNow || createFxNow(),
			duration: options.duration,
			tweens: [],
			createTween: function( prop, end ) {
				var tween = jQuery.Tween( elem, animation.opts, prop, end,
						animation.opts.specialEasing[ prop ] || animation.opts.easing );
				animation.tweens.push( tween );
				return tween;
			},
			stop: function( gotoEnd ) {
				var index = 0,

					// If we are going to the end, we want to run all the tweens
					// otherwise we skip this part
					length = gotoEnd ? animation.tweens.length : 0;
				if ( stopped ) {
					return this;
				}
				stopped = true;
				for ( ; index < length; index++ ) {
					animation.tweens[ index ].run( 1 );
				}

				// Resolve when we played the last frame; otherwise, reject
				if ( gotoEnd ) {
					deferred.notifyWith( elem, [ animation, 1, 0 ] );
					deferred.resolveWith( elem, [ animation, gotoEnd ] );
				} else {
					deferred.rejectWith( elem, [ animation, gotoEnd ] );
				}
				return this;
			}
		} ),
		props = animation.props;

	propFilter( props, animation.opts.specialEasing );

	for ( ; index < length; index++ ) {
		result = Animation.prefilters[ index ].call( animation, elem, props, animation.opts );
		if ( result ) {
			if ( jQuery.isFunction( result.stop ) ) {
				jQuery._queueHooks( animation.elem, animation.opts.queue ).stop =
					jQuery.proxy( result.stop, result );
			}
			return result;
		}
	}

	jQuery.map( props, createTween, animation );

	if ( jQuery.isFunction( animation.opts.start ) ) {
		animation.opts.start.call( elem, animation );
	}

	jQuery.fx.timer(
		jQuery.extend( tick, {
			elem: elem,
			anim: animation,
			queue: animation.opts.queue
		} )
	);

	// attach callbacks from options
	return animation.progress( animation.opts.progress )
		.done( animation.opts.done, animation.opts.complete )
		.fail( animation.opts.fail )
		.always( animation.opts.always );
}

jQuery.Animation = jQuery.extend( Animation, {

	tweeners: {
		"*": [ function( prop, value ) {
			var tween = this.createTween( prop, value );
			adjustCSS( tween.elem, prop, rcssNum.exec( value ), tween );
			return tween;
		} ]
	},

	tweener: function( props, callback ) {
		if ( jQuery.isFunction( props ) ) {
			callback = props;
			props = [ "*" ];
		} else {
			props = props.match( rnothtmlwhite );
		}

		var prop,
			index = 0,
			length = props.length;

		for ( ; index < length; index++ ) {
			prop = props[ index ];
			Animation.tweeners[ prop ] = Animation.tweeners[ prop ] || [];
			Animation.tweeners[ prop ].unshift( callback );
		}
	},

	prefilters: [ defaultPrefilter ],

	prefilter: function( callback, prepend ) {
		if ( prepend ) {
			Animation.prefilters.unshift( callback );
		} else {
			Animation.prefilters.push( callback );
		}
	}
} );

jQuery.speed = function( speed, easing, fn ) {
	var opt = speed && typeof speed === "object" ? jQuery.extend( {}, speed ) : {
		complete: fn || !fn && easing ||
			jQuery.isFunction( speed ) && speed,
		duration: speed,
		easing: fn && easing || easing && !jQuery.isFunction( easing ) && easing
	};

	// Go to the end state if fx are off or if document is hidden
	if ( jQuery.fx.off || document.hidden ) {
		opt.duration = 0;

	} else {
		if ( typeof opt.duration !== "number" ) {
			if ( opt.duration in jQuery.fx.speeds ) {
				opt.duration = jQuery.fx.speeds[ opt.duration ];

			} else {
				opt.duration = jQuery.fx.speeds._default;
			}
		}
	}

	// Normalize opt.queue - true/undefined/null -> "fx"
	if ( opt.queue == null || opt.queue === true ) {
		opt.queue = "fx";
	}

	// Queueing
	opt.old = opt.complete;

	opt.complete = function() {
		if ( jQuery.isFunction( opt.old ) ) {
			opt.old.call( this );
		}

		if ( opt.queue ) {
			jQuery.dequeue( this, opt.queue );
		}
	};

	return opt;
};

jQuery.fn.extend( {
	fadeTo: function( speed, to, easing, callback ) {

		// Show any hidden elements after setting opacity to 0
		return this.filter( isHiddenWithinTree ).css( "opacity", 0 ).show()

			// Animate to the value specified
			.end().animate( { opacity: to }, speed, easing, callback );
	},
	animate: function( prop, speed, easing, callback ) {
		var empty = jQuery.isEmptyObject( prop ),
			optall = jQuery.speed( speed, easing, callback ),
			doAnimation = function() {

				// Operate on a copy of prop so per-property easing won't be lost
				var anim = Animation( this, jQuery.extend( {}, prop ), optall );

				// Empty animations, or finishing resolves immediately
				if ( empty || dataPriv.get( this, "finish" ) ) {
					anim.stop( true );
				}
			};
			doAnimation.finish = doAnimation;

		return empty || optall.queue === false ?
			this.each( doAnimation ) :
			this.queue( optall.queue, doAnimation );
	},
	stop: function( type, clearQueue, gotoEnd ) {
		var stopQueue = function( hooks ) {
			var stop = hooks.stop;
			delete hooks.stop;
			stop( gotoEnd );
		};

		if ( typeof type !== "string" ) {
			gotoEnd = clearQueue;
			clearQueue = type;
			type = undefined;
		}
		if ( clearQueue && type !== false ) {
			this.queue( type || "fx", [] );
		}

		return this.each( function() {
			var dequeue = true,
				index = type != null && type + "queueHooks",
				timers = jQuery.timers,
				data = dataPriv.get( this );

			if ( index ) {
				if ( data[ index ] && data[ index ].stop ) {
					stopQueue( data[ index ] );
				}
			} else {
				for ( index in data ) {
					if ( data[ index ] && data[ index ].stop && rrun.test( index ) ) {
						stopQueue( data[ index ] );
					}
				}
			}

			for ( index = timers.length; index--; ) {
				if ( timers[ index ].elem === this &&
					( type == null || timers[ index ].queue === type ) ) {

					timers[ index ].anim.stop( gotoEnd );
					dequeue = false;
					timers.splice( index, 1 );
				}
			}

			// Start the next in the queue if the last step wasn't forced.
			// Timers currently will call their complete callbacks, which
			// will dequeue but only if they were gotoEnd.
			if ( dequeue || !gotoEnd ) {
				jQuery.dequeue( this, type );
			}
		} );
	},
	finish: function( type ) {
		if ( type !== false ) {
			type = type || "fx";
		}
		return this.each( function() {
			var index,
				data = dataPriv.get( this ),
				queue = data[ type + "queue" ],
				hooks = data[ type + "queueHooks" ],
				timers = jQuery.timers,
				length = queue ? queue.length : 0;

			// Enable finishing flag on private data
			data.finish = true;

			// Empty the queue first
			jQuery.queue( this, type, [] );

			if ( hooks && hooks.stop ) {
				hooks.stop.call( this, true );
			}

			// Look for any active animations, and finish them
			for ( index = timers.length; index--; ) {
				if ( timers[ index ].elem === this && timers[ index ].queue === type ) {
					timers[ index ].anim.stop( true );
					timers.splice( index, 1 );
				}
			}

			// Look for any animations in the old queue and finish them
			for ( index = 0; index < length; index++ ) {
				if ( queue[ index ] && queue[ index ].finish ) {
					queue[ index ].finish.call( this );
				}
			}

			// Turn off finishing flag
			delete data.finish;
		} );
	}
} );

jQuery.each( [ "toggle", "show", "hide" ], function( i, name ) {
	var cssFn = jQuery.fn[ name ];
	jQuery.fn[ name ] = function( speed, easing, callback ) {
		return speed == null || typeof speed === "boolean" ?
			cssFn.apply( this, arguments ) :
			this.animate( genFx( name, true ), speed, easing, callback );
	};
} );

// Generate shortcuts for custom animations
jQuery.each( {
	slideDown: genFx( "show" ),
	slideUp: genFx( "hide" ),
	slideToggle: genFx( "toggle" ),
	fadeIn: { opacity: "show" },
	fadeOut: { opacity: "hide" },
	fadeToggle: { opacity: "toggle" }
}, function( name, props ) {
	jQuery.fn[ name ] = function( speed, easing, callback ) {
		return this.animate( props, speed, easing, callback );
	};
} );

jQuery.timers = [];
jQuery.fx.tick = function() {
	var timer,
		i = 0,
		timers = jQuery.timers;

	fxNow = jQuery.now();

	for ( ; i < timers.length; i++ ) {
		timer = timers[ i ];

		// Checks the timer has not already been removed
		if ( !timer() && timers[ i ] === timer ) {
			timers.splice( i--, 1 );
		}
	}

	if ( !timers.length ) {
		jQuery.fx.stop();
	}
	fxNow = undefined;
};

jQuery.fx.timer = function( timer ) {
	jQuery.timers.push( timer );
	if ( timer() ) {
		jQuery.fx.start();
	} else {
		jQuery.timers.pop();
	}
};

jQuery.fx.interval = 13;
jQuery.fx.start = function() {
	if ( !timerId ) {
		timerId = window.requestAnimationFrame ?
			window.requestAnimationFrame( raf ) :
			window.setInterval( jQuery.fx.tick, jQuery.fx.interval );
	}
};

jQuery.fx.stop = function() {
	if ( window.cancelAnimationFrame ) {
		window.cancelAnimationFrame( timerId );
	} else {
		window.clearInterval( timerId );
	}

	timerId = null;
};

jQuery.fx.speeds = {
	slow: 600,
	fast: 200,

	// Default speed
	_default: 400
};


// Based off of the plugin by Clint Helfers, with permission.
// https://web.archive.org/web/20100324014747/http://blindsignals.com/index.php/2009/07/jquery-delay/
jQuery.fn.delay = function( time, type ) {
	time = jQuery.fx ? jQuery.fx.speeds[ time ] || time : time;
	type = type || "fx";

	return this.queue( type, function( next, hooks ) {
		var timeout = window.setTimeout( next, time );
		hooks.stop = function() {
			window.clearTimeout( timeout );
		};
	} );
};


( function() {
	var input = document.createElement( "input" ),
		select = document.createElement( "select" ),
		opt = select.appendChild( document.createElement( "option" ) );

	input.type = "checkbox";

	// Support: Android <=4.3 only
	// Default value for a checkbox should be "on"
	support.checkOn = input.value !== "";

	// Support: IE <=11 only
	// Must access selectedIndex to make default options select
	support.optSelected = opt.selected;

	// Support: IE <=11 only
	// An input loses its value after becoming a radio
	input = document.createElement( "input" );
	input.value = "t";
	input.type = "radio";
	support.radioValue = input.value === "t";
} )();


var boolHook,
	attrHandle = jQuery.expr.attrHandle;

jQuery.fn.extend( {
	attr: function( name, value ) {
		return access( this, jQuery.attr, name, value, arguments.length > 1 );
	},

	removeAttr: function( name ) {
		return this.each( function() {
			jQuery.removeAttr( this, name );
		} );
	}
} );

jQuery.extend( {
	attr: function( elem, name, value ) {
		var ret, hooks,
			nType = elem.nodeType;

		// Don't get/set attributes on text, comment and attribute nodes
		if ( nType === 3 || nType === 8 || nType === 2 ) {
			return;
		}

		// Fallback to prop when attributes are not supported
		if ( typeof elem.getAttribute === "undefined" ) {
			return jQuery.prop( elem, name, value );
		}

		// Attribute hooks are determined by the lowercase version
		// Grab necessary hook if one is defined
		if ( nType !== 1 || !jQuery.isXMLDoc( elem ) ) {
			hooks = jQuery.attrHooks[ name.toLowerCase() ] ||
				( jQuery.expr.match.bool.test( name ) ? boolHook : undefined );
		}

		if ( value !== undefined ) {
			if ( value === null ) {
				jQuery.removeAttr( elem, name );
				return;
			}

			if ( hooks && "set" in hooks &&
				( ret = hooks.set( elem, value, name ) ) !== undefined ) {
				return ret;
			}

			elem.setAttribute( name, value + "" );
			return value;
		}

		if ( hooks && "get" in hooks && ( ret = hooks.get( elem, name ) ) !== null ) {
			return ret;
		}

		ret = jQuery.find.attr( elem, name );

		// Non-existent attributes return null, we normalize to undefined
		return ret == null ? undefined : ret;
	},

	attrHooks: {
		type: {
			set: function( elem, value ) {
				if ( !support.radioValue && value === "radio" &&
					jQuery.nodeName( elem, "input" ) ) {
					var val = elem.value;
					elem.setAttribute( "type", value );
					if ( val ) {
						elem.value = val;
					}
					return value;
				}
			}
		}
	},

	removeAttr: function( elem, value ) {
		var name,
			i = 0,

			// Attribute names can contain non-HTML whitespace characters
			// https://html.spec.whatwg.org/multipage/syntax.html#attributes-2
			attrNames = value && value.match( rnothtmlwhite );

		if ( attrNames && elem.nodeType === 1 ) {
			while ( ( name = attrNames[ i++ ] ) ) {
				elem.removeAttribute( name );
			}
		}
	}
} );

// Hooks for boolean attributes
boolHook = {
	set: function( elem, value, name ) {
		if ( value === false ) {

			// Remove boolean attributes when set to false
			jQuery.removeAttr( elem, name );
		} else {
			elem.setAttribute( name, name );
		}
		return name;
	}
};

jQuery.each( jQuery.expr.match.bool.source.match( /\w+/g ), function( i, name ) {
	var getter = attrHandle[ name ] || jQuery.find.attr;

	attrHandle[ name ] = function( elem, name, isXML ) {
		var ret, handle,
			lowercaseName = name.toLowerCase();

		if ( !isXML ) {

			// Avoid an infinite loop by temporarily removing this function from the getter
			handle = attrHandle[ lowercaseName ];
			attrHandle[ lowercaseName ] = ret;
			ret = getter( elem, name, isXML ) != null ?
				lowercaseName :
				null;
			attrHandle[ lowercaseName ] = handle;
		}
		return ret;
	};
} );




var rfocusable = /^(?:input|select|textarea|button)$/i,
	rclickable = /^(?:a|area)$/i;

jQuery.fn.extend( {
	prop: function( name, value ) {
		return access( this, jQuery.prop, name, value, arguments.length > 1 );
	},

	removeProp: function( name ) {
		return this.each( function() {
			delete this[ jQuery.propFix[ name ] || name ];
		} );
	}
} );

jQuery.extend( {
	prop: function( elem, name, value ) {
		var ret, hooks,
			nType = elem.nodeType;

		// Don't get/set properties on text, comment and attribute nodes
		if ( nType === 3 || nType === 8 || nType === 2 ) {
			return;
		}

		if ( nType !== 1 || !jQuery.isXMLDoc( elem ) ) {

			// Fix name and attach hooks
			name = jQuery.propFix[ name ] || name;
			hooks = jQuery.propHooks[ name ];
		}

		if ( value !== undefined ) {
			if ( hooks && "set" in hooks &&
				( ret = hooks.set( elem, value, name ) ) !== undefined ) {
				return ret;
			}

			return ( elem[ name ] = value );
		}

		if ( hooks && "get" in hooks && ( ret = hooks.get( elem, name ) ) !== null ) {
			return ret;
		}

		return elem[ name ];
	},

	propHooks: {
		tabIndex: {
			get: function( elem ) {

				// Support: IE <=9 - 11 only
				// elem.tabIndex doesn't always return the
				// correct value when it hasn't been explicitly set
				// https://web.archive.org/web/20141116233347/http://fluidproject.org/blog/2008/01/09/getting-setting-and-removing-tabindex-values-with-javascript/
				// Use proper attribute retrieval(#12072)
				var tabindex = jQuery.find.attr( elem, "tabindex" );

				if ( tabindex ) {
					return parseInt( tabindex, 10 );
				}

				if (
					rfocusable.test( elem.nodeName ) ||
					rclickable.test( elem.nodeName ) &&
					elem.href
				) {
					return 0;
				}

				return -1;
			}
		}
	},

	propFix: {
		"for": "htmlFor",
		"class": "className"
	}
} );

// Support: IE <=11 only
// Accessing the selectedIndex property
// forces the browser to respect setting selected
// on the option
// The getter ensures a default option is selected
// when in an optgroup
// eslint rule "no-unused-expressions" is disabled for this code
// since it considers such accessions noop
if ( !support.optSelected ) {
	jQuery.propHooks.selected = {
		get: function( elem ) {

			/* eslint no-unused-expressions: "off" */

			var parent = elem.parentNode;
			if ( parent && parent.parentNode ) {
				parent.parentNode.selectedIndex;
			}
			return null;
		},
		set: function( elem ) {

			/* eslint no-unused-expressions: "off" */

			var parent = elem.parentNode;
			if ( parent ) {
				parent.selectedIndex;

				if ( parent.parentNode ) {
					parent.parentNode.selectedIndex;
				}
			}
		}
	};
}

jQuery.each( [
	"tabIndex",
	"readOnly",
	"maxLength",
	"cellSpacing",
	"cellPadding",
	"rowSpan",
	"colSpan",
	"useMap",
	"frameBorder",
	"contentEditable"
], function() {
	jQuery.propFix[ this.toLowerCase() ] = this;
} );




	// Strip and collapse whitespace according to HTML spec
	// https://html.spec.whatwg.org/multipage/infrastructure.html#strip-and-collapse-whitespace
	function stripAndCollapse( value ) {
		var tokens = value.match( rnothtmlwhite ) || [];
		return tokens.join( " " );
	}


function getClass( elem ) {
	return elem.getAttribute && elem.getAttribute( "class" ) || "";
}

jQuery.fn.extend( {
	addClass: function( value ) {
		var classes, elem, cur, curValue, clazz, j, finalValue,
			i = 0;

		if ( jQuery.isFunction( value ) ) {
			return this.each( function( j ) {
				jQuery( this ).addClass( value.call( this, j, getClass( this ) ) );
			} );
		}

		if ( typeof value === "string" && value ) {
			classes = value.match( rnothtmlwhite ) || [];

			while ( ( elem = this[ i++ ] ) ) {
				curValue = getClass( elem );
				cur = elem.nodeType === 1 && ( " " + stripAndCollapse( curValue ) + " " );

				if ( cur ) {
					j = 0;
					while ( ( clazz = classes[ j++ ] ) ) {
						if ( cur.indexOf( " " + clazz + " " ) < 0 ) {
							cur += clazz + " ";
						}
					}

					// Only assign if different to avoid unneeded rendering.
					finalValue = stripAndCollapse( cur );
					if ( curValue !== finalValue ) {
						elem.setAttribute( "class", finalValue );
					}
				}
			}
		}

		return this;
	},

	removeClass: function( value ) {
		var classes, elem, cur, curValue, clazz, j, finalValue,
			i = 0;

		if ( jQuery.isFunction( value ) ) {
			return this.each( function( j ) {
				jQuery( this ).removeClass( value.call( this, j, getClass( this ) ) );
			} );
		}

		if ( !arguments.length ) {
			return this.attr( "class", "" );
		}

		if ( typeof value === "string" && value ) {
			classes = value.match( rnothtmlwhite ) || [];

			while ( ( elem = this[ i++ ] ) ) {
				curValue = getClass( elem );

				// This expression is here for better compressibility (see addClass)
				cur = elem.nodeType === 1 && ( " " + stripAndCollapse( curValue ) + " " );

				if ( cur ) {
					j = 0;
					while ( ( clazz = classes[ j++ ] ) ) {

						// Remove *all* instances
						while ( cur.indexOf( " " + clazz + " " ) > -1 ) {
							cur = cur.replace( " " + clazz + " ", " " );
						}
					}

					// Only assign if different to avoid unneeded rendering.
					finalValue = stripAndCollapse( cur );
					if ( curValue !== finalValue ) {
						elem.setAttribute( "class", finalValue );
					}
				}
			}
		}

		return this;
	},

	toggleClass: function( value, stateVal ) {
		var type = typeof value;

		if ( typeof stateVal === "boolean" && type === "string" ) {
			return stateVal ? this.addClass( value ) : this.removeClass( value );
		}

		if ( jQuery.isFunction( value ) ) {
			return this.each( function( i ) {
				jQuery( this ).toggleClass(
					value.call( this, i, getClass( this ), stateVal ),
					stateVal
				);
			} );
		}

		return this.each( function() {
			var className, i, self, classNames;

			if ( type === "string" ) {

				// Toggle individual class names
				i = 0;
				self = jQuery( this );
				classNames = value.match( rnothtmlwhite ) || [];

				while ( ( className = classNames[ i++ ] ) ) {

					// Check each className given, space separated list
					if ( self.hasClass( className ) ) {
						self.removeClass( className );
					} else {
						self.addClass( className );
					}
				}

			// Toggle whole class name
			} else if ( value === undefined || type === "boolean" ) {
				className = getClass( this );
				if ( className ) {

					// Store className if set
					dataPriv.set( this, "__className__", className );
				}

				// If the element has a class name or if we're passed `false`,
				// then remove the whole classname (if there was one, the above saved it).
				// Otherwise bring back whatever was previously saved (if anything),
				// falling back to the empty string if nothing was stored.
				if ( this.setAttribute ) {
					this.setAttribute( "class",
						className || value === false ?
						"" :
						dataPriv.get( this, "__className__" ) || ""
					);
				}
			}
		} );
	},

	hasClass: function( selector ) {
		var className, elem,
			i = 0;

		className = " " + selector + " ";
		while ( ( elem = this[ i++ ] ) ) {
			if ( elem.nodeType === 1 &&
				( " " + stripAndCollapse( getClass( elem ) ) + " " ).indexOf( className ) > -1 ) {
					return true;
			}
		}

		return false;
	}
} );




var rreturn = /\r/g;

jQuery.fn.extend( {
	val: function( value ) {
		var hooks, ret, isFunction,
			elem = this[ 0 ];

		if ( !arguments.length ) {
			if ( elem ) {
				hooks = jQuery.valHooks[ elem.type ] ||
					jQuery.valHooks[ elem.nodeName.toLowerCase() ];

				if ( hooks &&
					"get" in hooks &&
					( ret = hooks.get( elem, "value" ) ) !== undefined
				) {
					return ret;
				}

				ret = elem.value;

				// Handle most common string cases
				if ( typeof ret === "string" ) {
					return ret.replace( rreturn, "" );
				}

				// Handle cases where value is null/undef or number
				return ret == null ? "" : ret;
			}

			return;
		}

		isFunction = jQuery.isFunction( value );

		return this.each( function( i ) {
			var val;

			if ( this.nodeType !== 1 ) {
				return;
			}

			if ( isFunction ) {
				val = value.call( this, i, jQuery( this ).val() );
			} else {
				val = value;
			}

			// Treat null/undefined as ""; convert numbers to string
			if ( val == null ) {
				val = "";

			} else if ( typeof val === "number" ) {
				val += "";

			} else if ( jQuery.isArray( val ) ) {
				val = jQuery.map( val, function( value ) {
					return value == null ? "" : value + "";
				} );
			}

			hooks = jQuery.valHooks[ this.type ] || jQuery.valHooks[ this.nodeName.toLowerCase() ];

			// If set returns undefined, fall back to normal setting
			if ( !hooks || !( "set" in hooks ) || hooks.set( this, val, "value" ) === undefined ) {
				this.value = val;
			}
		} );
	}
} );

jQuery.extend( {
	valHooks: {
		option: {
			get: function( elem ) {

				var val = jQuery.find.attr( elem, "value" );
				return val != null ?
					val :

					// Support: IE <=10 - 11 only
					// option.text throws exceptions (#14686, #14858)
					// Strip and collapse whitespace
					// https://html.spec.whatwg.org/#strip-and-collapse-whitespace
					stripAndCollapse( jQuery.text( elem ) );
			}
		},
		select: {
			get: function( elem ) {
				var value, option, i,
					options = elem.options,
					index = elem.selectedIndex,
					one = elem.type === "select-one",
					values = one ? null : [],
					max = one ? index + 1 : options.length;

				if ( index < 0 ) {
					i = max;

				} else {
					i = one ? index : 0;
				}

				// Loop through all the selected options
				for ( ; i < max; i++ ) {
					option = options[ i ];

					// Support: IE <=9 only
					// IE8-9 doesn't update selected after form reset (#2551)
					if ( ( option.selected || i === index ) &&

							// Don't return options that are disabled or in a disabled optgroup
							!option.disabled &&
							( !option.parentNode.disabled ||
								!jQuery.nodeName( option.parentNode, "optgroup" ) ) ) {

						// Get the specific value for the option
						value = jQuery( option ).val();

						// We don't need an array for one selects
						if ( one ) {
							return value;
						}

						// Multi-Selects return an array
						values.push( value );
					}
				}

				return values;
			},

			set: function( elem, value ) {
				var optionSet, option,
					options = elem.options,
					values = jQuery.makeArray( value ),
					i = options.length;

				while ( i-- ) {
					option = options[ i ];

					/* eslint-disable no-cond-assign */

					if ( option.selected =
						jQuery.inArray( jQuery.valHooks.option.get( option ), values ) > -1
					) {
						optionSet = true;
					}

					/* eslint-enable no-cond-assign */
				}

				// Force browsers to behave consistently when non-matching value is set
				if ( !optionSet ) {
					elem.selectedIndex = -1;
				}
				return values;
			}
		}
	}
} );

// Radios and checkboxes getter/setter
jQuery.each( [ "radio", "checkbox" ], function() {
	jQuery.valHooks[ this ] = {
		set: function( elem, value ) {
			if ( jQuery.isArray( value ) ) {
				return ( elem.checked = jQuery.inArray( jQuery( elem ).val(), value ) > -1 );
			}
		}
	};
	if ( !support.checkOn ) {
		jQuery.valHooks[ this ].get = function( elem ) {
			return elem.getAttribute( "value" ) === null ? "on" : elem.value;
		};
	}
} );




// Return jQuery for attributes-only inclusion


var rfocusMorph = /^(?:focusinfocus|focusoutblur)$/;

jQuery.extend( jQuery.event, {

	trigger: function( event, data, elem, onlyHandlers ) {

		var i, cur, tmp, bubbleType, ontype, handle, special,
			eventPath = [ elem || document ],
			type = hasOwn.call( event, "type" ) ? event.type : event,
			namespaces = hasOwn.call( event, "namespace" ) ? event.namespace.split( "." ) : [];

		cur = tmp = elem = elem || document;

		// Don't do events on text and comment nodes
		if ( elem.nodeType === 3 || elem.nodeType === 8 ) {
			return;
		}

		// focus/blur morphs to focusin/out; ensure we're not firing them right now
		if ( rfocusMorph.test( type + jQuery.event.triggered ) ) {
			return;
		}

		if ( type.indexOf( "." ) > -1 ) {

			// Namespaced trigger; create a regexp to match event type in handle()
			namespaces = type.split( "." );
			type = namespaces.shift();
			namespaces.sort();
		}
		ontype = type.indexOf( ":" ) < 0 && "on" + type;

		// Caller can pass in a jQuery.Event object, Object, or just an event type string
		event = event[ jQuery.expando ] ?
			event :
			new jQuery.Event( type, typeof event === "object" && event );

		// Trigger bitmask: & 1 for native handlers; & 2 for jQuery (always true)
		event.isTrigger = onlyHandlers ? 2 : 3;
		event.namespace = namespaces.join( "." );
		event.rnamespace = event.namespace ?
			new RegExp( "(^|\\.)" + namespaces.join( "\\.(?:.*\\.|)" ) + "(\\.|$)" ) :
			null;

		// Clean up the event in case it is being reused
		event.result = undefined;
		if ( !event.target ) {
			event.target = elem;
		}

		// Clone any incoming data and prepend the event, creating the handler arg list
		data = data == null ?
			[ event ] :
			jQuery.makeArray( data, [ event ] );

		// Allow special events to draw outside the lines
		special = jQuery.event.special[ type ] || {};
		if ( !onlyHandlers && special.trigger && special.trigger.apply( elem, data ) === false ) {
			return;
		}

		// Determine event propagation path in advance, per W3C events spec (#9951)
		// Bubble up to document, then to window; watch for a global ownerDocument var (#9724)
		if ( !onlyHandlers && !special.noBubble && !jQuery.isWindow( elem ) ) {

			bubbleType = special.delegateType || type;
			if ( !rfocusMorph.test( bubbleType + type ) ) {
				cur = cur.parentNode;
			}
			for ( ; cur; cur = cur.parentNode ) {
				eventPath.push( cur );
				tmp = cur;
			}

			// Only add window if we got to document (e.g., not plain obj or detached DOM)
			if ( tmp === ( elem.ownerDocument || document ) ) {
				eventPath.push( tmp.defaultView || tmp.parentWindow || window );
			}
		}

		// Fire handlers on the event path
		i = 0;
		while ( ( cur = eventPath[ i++ ] ) && !event.isPropagationStopped() ) {

			event.type = i > 1 ?
				bubbleType :
				special.bindType || type;

			// jQuery handler
			handle = ( dataPriv.get( cur, "events" ) || {} )[ event.type ] &&
				dataPriv.get( cur, "handle" );
			if ( handle ) {
				handle.apply( cur, data );
			}

			// Native handler
			handle = ontype && cur[ ontype ];
			if ( handle && handle.apply && acceptData( cur ) ) {
				event.result = handle.apply( cur, data );
				if ( event.result === false ) {
					event.preventDefault();
				}
			}
		}
		event.type = type;

		// If nobody prevented the default action, do it now
		if ( !onlyHandlers && !event.isDefaultPrevented() ) {

			if ( ( !special._default ||
				special._default.apply( eventPath.pop(), data ) === false ) &&
				acceptData( elem ) ) {

				// Call a native DOM method on the target with the same name as the event.
				// Don't do default actions on window, that's where global variables be (#6170)
				if ( ontype && jQuery.isFunction( elem[ type ] ) && !jQuery.isWindow( elem ) ) {

					// Don't re-trigger an onFOO event when we call its FOO() method
					tmp = elem[ ontype ];

					if ( tmp ) {
						elem[ ontype ] = null;
					}

					// Prevent re-triggering of the same event, since we already bubbled it above
					jQuery.event.triggered = type;
					elem[ type ]();
					jQuery.event.triggered = undefined;

					if ( tmp ) {
						elem[ ontype ] = tmp;
					}
				}
			}
		}

		return event.result;
	},

	// Piggyback on a donor event to simulate a different one
	// Used only for `focus(in | out)` events
	simulate: function( type, elem, event ) {
		var e = jQuery.extend(
			new jQuery.Event(),
			event,
			{
				type: type,
				isSimulated: true
			}
		);

		jQuery.event.trigger( e, null, elem );
	}

} );

jQuery.fn.extend( {

	trigger: function( type, data ) {
		return this.each( function() {
			jQuery.event.trigger( type, data, this );
		} );
	},
	triggerHandler: function( type, data ) {
		var elem = this[ 0 ];
		if ( elem ) {
			return jQuery.event.trigger( type, data, elem, true );
		}
	}
} );


jQuery.each( ( "blur focus focusin focusout resize scroll click dblclick " +
	"mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave " +
	"change select submit keydown keypress keyup contextmenu" ).split( " " ),
	function( i, name ) {

	// Handle event binding
	jQuery.fn[ name ] = function( data, fn ) {
		return arguments.length > 0 ?
			this.on( name, null, data, fn ) :
			this.trigger( name );
	};
} );

jQuery.fn.extend( {
	hover: function( fnOver, fnOut ) {
		return this.mouseenter( fnOver ).mouseleave( fnOut || fnOver );
	}
} );




support.focusin = "onfocusin" in window;


// Support: Firefox <=44
// Firefox doesn't have focus(in | out) events
// Related ticket - https://bugzilla.mozilla.org/show_bug.cgi?id=687787
//
// Support: Chrome <=48 - 49, Safari <=9.0 - 9.1
// focus(in | out) events fire after focus & blur events,
// which is spec violation - http://www.w3.org/TR/DOM-Level-3-Events/#events-focusevent-event-order
// Related ticket - https://bugs.chromium.org/p/chromium/issues/detail?id=449857
if ( !support.focusin ) {
	jQuery.each( { focus: "focusin", blur: "focusout" }, function( orig, fix ) {

		// Attach a single capturing handler on the document while someone wants focusin/focusout
		var handler = function( event ) {
			jQuery.event.simulate( fix, event.target, jQuery.event.fix( event ) );
		};

		jQuery.event.special[ fix ] = {
			setup: function() {
				var doc = this.ownerDocument || this,
					attaches = dataPriv.access( doc, fix );

				if ( !attaches ) {
					doc.addEventListener( orig, handler, true );
				}
				dataPriv.access( doc, fix, ( attaches || 0 ) + 1 );
			},
			teardown: function() {
				var doc = this.ownerDocument || this,
					attaches = dataPriv.access( doc, fix ) - 1;

				if ( !attaches ) {
					doc.removeEventListener( orig, handler, true );
					dataPriv.remove( doc, fix );

				} else {
					dataPriv.access( doc, fix, attaches );
				}
			}
		};
	} );
}
var location = window.location;

var nonce = jQuery.now();

var rquery = ( /\?/ );



// Cross-browser xml parsing
jQuery.parseXML = function( data ) {
	var xml;
	if ( !data || typeof data !== "string" ) {
		return null;
	}

	// Support: IE 9 - 11 only
	// IE throws on parseFromString with invalid input.
	try {
		xml = ( new window.DOMParser() ).parseFromString( data, "text/xml" );
	} catch ( e ) {
		xml = undefined;
	}

	if ( !xml || xml.getElementsByTagName( "parsererror" ).length ) {
		jQuery.error( "Invalid XML: " + data );
	}
	return xml;
};


var
	rbracket = /\[\]$/,
	rCRLF = /\r?\n/g,
	rsubmitterTypes = /^(?:submit|button|image|reset|file)$/i,
	rsubmittable = /^(?:input|select|textarea|keygen)/i;

function buildParams( prefix, obj, traditional, add ) {
	var name;

	if ( jQuery.isArray( obj ) ) {

		// Serialize array item.
		jQuery.each( obj, function( i, v ) {
			if ( traditional || rbracket.test( prefix ) ) {

				// Treat each array item as a scalar.
				add( prefix, v );

			} else {

				// Item is non-scalar (array or object), encode its numeric index.
				buildParams(
					prefix + "[" + ( typeof v === "object" && v != null ? i : "" ) + "]",
					v,
					traditional,
					add
				);
			}
		} );

	} else if ( !traditional && jQuery.type( obj ) === "object" ) {

		// Serialize object item.
		for ( name in obj ) {
			buildParams( prefix + "[" + name + "]", obj[ name ], traditional, add );
		}

	} else {

		// Serialize scalar item.
		add( prefix, obj );
	}
}

// Serialize an array of form elements or a set of
// key/values into a query string
jQuery.param = function( a, traditional ) {
	var prefix,
		s = [],
		add = function( key, valueOrFunction ) {

			// If value is a function, invoke it and use its return value
			var value = jQuery.isFunction( valueOrFunction ) ?
				valueOrFunction() :
				valueOrFunction;

			s[ s.length ] = encodeURIComponent( key ) + "=" +
				encodeURIComponent( value == null ? "" : value );
		};

	// If an array was passed in, assume that it is an array of form elements.
	if ( jQuery.isArray( a ) || ( a.jquery && !jQuery.isPlainObject( a ) ) ) {

		// Serialize the form elements
		jQuery.each( a, function() {
			add( this.name, this.value );
		} );

	} else {

		// If traditional, encode the "old" way (the way 1.3.2 or older
		// did it), otherwise encode params recursively.
		for ( prefix in a ) {
			buildParams( prefix, a[ prefix ], traditional, add );
		}
	}

	// Return the resulting serialization
	return s.join( "&" );
};

jQuery.fn.extend( {
	serialize: function() {
		return jQuery.param( this.serializeArray() );
	},
	serializeArray: function() {
		return this.map( function() {

			// Can add propHook for "elements" to filter or add form elements
			var elements = jQuery.prop( this, "elements" );
			return elements ? jQuery.makeArray( elements ) : this;
		} )
		.filter( function() {
			var type = this.type;

			// Use .is( ":disabled" ) so that fieldset[disabled] works
			return this.name && !jQuery( this ).is( ":disabled" ) &&
				rsubmittable.test( this.nodeName ) && !rsubmitterTypes.test( type ) &&
				( this.checked || !rcheckableType.test( type ) );
		} )
		.map( function( i, elem ) {
			var val = jQuery( this ).val();

			if ( val == null ) {
				return null;
			}

			if ( jQuery.isArray( val ) ) {
				return jQuery.map( val, function( val ) {
					return { name: elem.name, value: val.replace( rCRLF, "\r\n" ) };
				} );
			}

			return { name: elem.name, value: val.replace( rCRLF, "\r\n" ) };
		} ).get();
	}
} );


var
	r20 = /%20/g,
	rhash = /#.*$/,
	rantiCache = /([?&])_=[^&]*/,
	rheaders = /^(.*?):[ \t]*([^\r\n]*)$/mg,

	// #7653, #8125, #8152: local protocol detection
	rlocalProtocol = /^(?:about|app|app-storage|.+-extension|file|res|widget):$/,
	rnoContent = /^(?:GET|HEAD)$/,
	rprotocol = /^\/\//,

	/* Prefilters
	 * 1) They are useful to introduce custom dataTypes (see ajax/jsonp.js for an example)
	 * 2) These are called:
	 *    - BEFORE asking for a transport
	 *    - AFTER param serialization (s.data is a string if s.processData is true)
	 * 3) key is the dataType
	 * 4) the catchall symbol "*" can be used
	 * 5) execution will start with transport dataType and THEN continue down to "*" if needed
	 */
	prefilters = {},

	/* Transports bindings
	 * 1) key is the dataType
	 * 2) the catchall symbol "*" can be used
	 * 3) selection will start with transport dataType and THEN go to "*" if needed
	 */
	transports = {},

	// Avoid comment-prolog char sequence (#10098); must appease lint and evade compression
	allTypes = "*/".concat( "*" ),

	// Anchor tag for parsing the document origin
	originAnchor = document.createElement( "a" );
	originAnchor.href = location.href;

// Base "constructor" for jQuery.ajaxPrefilter and jQuery.ajaxTransport
function addToPrefiltersOrTransports( structure ) {

	// dataTypeExpression is optional and defaults to "*"
	return function( dataTypeExpression, func ) {

		if ( typeof dataTypeExpression !== "string" ) {
			func = dataTypeExpression;
			dataTypeExpression = "*";
		}

		var dataType,
			i = 0,
			dataTypes = dataTypeExpression.toLowerCase().match( rnothtmlwhite ) || [];

		if ( jQuery.isFunction( func ) ) {

			// For each dataType in the dataTypeExpression
			while ( ( dataType = dataTypes[ i++ ] ) ) {

				// Prepend if requested
				if ( dataType[ 0 ] === "+" ) {
					dataType = dataType.slice( 1 ) || "*";
					( structure[ dataType ] = structure[ dataType ] || [] ).unshift( func );

				// Otherwise append
				} else {
					( structure[ dataType ] = structure[ dataType ] || [] ).push( func );
				}
			}
		}
	};
}

// Base inspection function for prefilters and transports
function inspectPrefiltersOrTransports( structure, options, originalOptions, jqXHR ) {

	var inspected = {},
		seekingTransport = ( structure === transports );

	function inspect( dataType ) {
		var selected;
		inspected[ dataType ] = true;
		jQuery.each( structure[ dataType ] || [], function( _, prefilterOrFactory ) {
			var dataTypeOrTransport = prefilterOrFactory( options, originalOptions, jqXHR );
			if ( typeof dataTypeOrTransport === "string" &&
				!seekingTransport && !inspected[ dataTypeOrTransport ] ) {

				options.dataTypes.unshift( dataTypeOrTransport );
				inspect( dataTypeOrTransport );
				return false;
			} else if ( seekingTransport ) {
				return !( selected = dataTypeOrTransport );
			}
		} );
		return selected;
	}

	return inspect( options.dataTypes[ 0 ] ) || !inspected[ "*" ] && inspect( "*" );
}

// A special extend for ajax options
// that takes "flat" options (not to be deep extended)
// Fixes #9887
function ajaxExtend( target, src ) {
	var key, deep,
		flatOptions = jQuery.ajaxSettings.flatOptions || {};

	for ( key in src ) {
		if ( src[ key ] !== undefined ) {
			( flatOptions[ key ] ? target : ( deep || ( deep = {} ) ) )[ key ] = src[ key ];
		}
	}
	if ( deep ) {
		jQuery.extend( true, target, deep );
	}

	return target;
}

/* Handles responses to an ajax request:
 * - finds the right dataType (mediates between content-type and expected dataType)
 * - returns the corresponding response
 */
function ajaxHandleResponses( s, jqXHR, responses ) {

	var ct, type, finalDataType, firstDataType,
		contents = s.contents,
		dataTypes = s.dataTypes;

	// Remove auto dataType and get content-type in the process
	while ( dataTypes[ 0 ] === "*" ) {
		dataTypes.shift();
		if ( ct === undefined ) {
			ct = s.mimeType || jqXHR.getResponseHeader( "Content-Type" );
		}
	}

	// Check if we're dealing with a known content-type
	if ( ct ) {
		for ( type in contents ) {
			if ( contents[ type ] && contents[ type ].test( ct ) ) {
				dataTypes.unshift( type );
				break;
			}
		}
	}

	// Check to see if we have a response for the expected dataType
	if ( dataTypes[ 0 ] in responses ) {
		finalDataType = dataTypes[ 0 ];
	} else {

		// Try convertible dataTypes
		for ( type in responses ) {
			if ( !dataTypes[ 0 ] || s.converters[ type + " " + dataTypes[ 0 ] ] ) {
				finalDataType = type;
				break;
			}
			if ( !firstDataType ) {
				firstDataType = type;
			}
		}

		// Or just use first one
		finalDataType = finalDataType || firstDataType;
	}

	// If we found a dataType
	// We add the dataType to the list if needed
	// and return the corresponding response
	if ( finalDataType ) {
		if ( finalDataType !== dataTypes[ 0 ] ) {
			dataTypes.unshift( finalDataType );
		}
		return responses[ finalDataType ];
	}
}

/* Chain conversions given the request and the original response
 * Also sets the responseXXX fields on the jqXHR instance
 */
function ajaxConvert( s, response, jqXHR, isSuccess ) {
	var conv2, current, conv, tmp, prev,
		converters = {},

		// Work with a copy of dataTypes in case we need to modify it for conversion
		dataTypes = s.dataTypes.slice();

	// Create converters map with lowercased keys
	if ( dataTypes[ 1 ] ) {
		for ( conv in s.converters ) {
			converters[ conv.toLowerCase() ] = s.converters[ conv ];
		}
	}

	current = dataTypes.shift();

	// Convert to each sequential dataType
	while ( current ) {

		if ( s.responseFields[ current ] ) {
			jqXHR[ s.responseFields[ current ] ] = response;
		}

		// Apply the dataFilter if provided
		if ( !prev && isSuccess && s.dataFilter ) {
			response = s.dataFilter( response, s.dataType );
		}

		prev = current;
		current = dataTypes.shift();

		if ( current ) {

			// There's only work to do if current dataType is non-auto
			if ( current === "*" ) {

				current = prev;

			// Convert response if prev dataType is non-auto and differs from current
			} else if ( prev !== "*" && prev !== current ) {

				// Seek a direct converter
				conv = converters[ prev + " " + current ] || converters[ "* " + current ];

				// If none found, seek a pair
				if ( !conv ) {
					for ( conv2 in converters ) {

						// If conv2 outputs current
						tmp = conv2.split( " " );
						if ( tmp[ 1 ] === current ) {

							// If prev can be converted to accepted input
							conv = converters[ prev + " " + tmp[ 0 ] ] ||
								converters[ "* " + tmp[ 0 ] ];
							if ( conv ) {

								// Condense equivalence converters
								if ( conv === true ) {
									conv = converters[ conv2 ];

								// Otherwise, insert the intermediate dataType
								} else if ( converters[ conv2 ] !== true ) {
									current = tmp[ 0 ];
									dataTypes.unshift( tmp[ 1 ] );
								}
								break;
							}
						}
					}
				}

				// Apply converter (if not an equivalence)
				if ( conv !== true ) {

					// Unless errors are allowed to bubble, catch and return them
					if ( conv && s.throws ) {
						response = conv( response );
					} else {
						try {
							response = conv( response );
						} catch ( e ) {
							return {
								state: "parsererror",
								error: conv ? e : "No conversion from " + prev + " to " + current
							};
						}
					}
				}
			}
		}
	}

	return { state: "success", data: response };
}

jQuery.extend( {

	// Counter for holding the number of active queries
	active: 0,

	// Last-Modified header cache for next request
	lastModified: {},
	etag: {},

	ajaxSettings: {
		url: location.href,
		type: "GET",
		isLocal: rlocalProtocol.test( location.protocol ),
		global: true,
		processData: true,
		async: true,
		contentType: "application/x-www-form-urlencoded; charset=UTF-8",

		/*
		timeout: 0,
		data: null,
		dataType: null,
		username: null,
		password: null,
		cache: null,
		throws: false,
		traditional: false,
		headers: {},
		*/

		accepts: {
			"*": allTypes,
			text: "text/plain",
			html: "text/html",
			xml: "application/xml, text/xml",
			json: "application/json, text/javascript"
		},

		contents: {
			xml: /\bxml\b/,
			html: /\bhtml/,
			json: /\bjson\b/
		},

		responseFields: {
			xml: "responseXML",
			text: "responseText",
			json: "responseJSON"
		},

		// Data converters
		// Keys separate source (or catchall "*") and destination types with a single space
		converters: {

			// Convert anything to text
			"* text": String,

			// Text to html (true = no transformation)
			"text html": true,

			// Evaluate text as a json expression
			"text json": JSON.parse,

			// Parse text as xml
			"text xml": jQuery.parseXML
		},

		// For options that shouldn't be deep extended:
		// you can add your own custom options here if
		// and when you create one that shouldn't be
		// deep extended (see ajaxExtend)
		flatOptions: {
			url: true,
			context: true
		}
	},

	// Creates a full fledged settings object into target
	// with both ajaxSettings and settings fields.
	// If target is omitted, writes into ajaxSettings.
	ajaxSetup: function( target, settings ) {
		return settings ?

			// Building a settings object
			ajaxExtend( ajaxExtend( target, jQuery.ajaxSettings ), settings ) :

			// Extending ajaxSettings
			ajaxExtend( jQuery.ajaxSettings, target );
	},

	ajaxPrefilter: addToPrefiltersOrTransports( prefilters ),
	ajaxTransport: addToPrefiltersOrTransports( transports ),

	// Main method
	ajax: function( url, options ) {

		// If url is an object, simulate pre-1.5 signature
		if ( typeof url === "object" ) {
			options = url;
			url = undefined;
		}

		// Force options to be an object
		options = options || {};

		var transport,

			// URL without anti-cache param
			cacheURL,

			// Response headers
			responseHeadersString,
			responseHeaders,

			// timeout handle
			timeoutTimer,

			// Url cleanup var
			urlAnchor,

			// Request state (becomes false upon send and true upon completion)
			completed,

			// To know if global events are to be dispatched
			fireGlobals,

			// Loop variable
			i,

			// uncached part of the url
			uncached,

			// Create the final options object
			s = jQuery.ajaxSetup( {}, options ),

			// Callbacks context
			callbackContext = s.context || s,

			// Context for global events is callbackContext if it is a DOM node or jQuery collection
			globalEventContext = s.context &&
				( callbackContext.nodeType || callbackContext.jquery ) ?
					jQuery( callbackContext ) :
					jQuery.event,

			// Deferreds
			deferred = jQuery.Deferred(),
			completeDeferred = jQuery.Callbacks( "once memory" ),

			// Status-dependent callbacks
			statusCode = s.statusCode || {},

			// Headers (they are sent all at once)
			requestHeaders = {},
			requestHeadersNames = {},

			// Default abort message
			strAbort = "canceled",

			// Fake xhr
			jqXHR = {
				readyState: 0,

				// Builds headers hashtable if needed
				getResponseHeader: function( key ) {
					var match;
					if ( completed ) {
						if ( !responseHeaders ) {
							responseHeaders = {};
							while ( ( match = rheaders.exec( responseHeadersString ) ) ) {
								responseHeaders[ match[ 1 ].toLowerCase() ] = match[ 2 ];
							}
						}
						match = responseHeaders[ key.toLowerCase() ];
					}
					return match == null ? null : match;
				},

				// Raw string
				getAllResponseHeaders: function() {
					return completed ? responseHeadersString : null;
				},

				// Caches the header
				setRequestHeader: function( name, value ) {
					if ( completed == null ) {
						name = requestHeadersNames[ name.toLowerCase() ] =
							requestHeadersNames[ name.toLowerCase() ] || name;
						requestHeaders[ name ] = value;
					}
					return this;
				},

				// Overrides response content-type header
				overrideMimeType: function( type ) {
					if ( completed == null ) {
						s.mimeType = type;
					}
					return this;
				},

				// Status-dependent callbacks
				statusCode: function( map ) {
					var code;
					if ( map ) {
						if ( completed ) {

							// Execute the appropriate callbacks
							jqXHR.always( map[ jqXHR.status ] );
						} else {

							// Lazy-add the new callbacks in a way that preserves old ones
							for ( code in map ) {
								statusCode[ code ] = [ statusCode[ code ], map[ code ] ];
							}
						}
					}
					return this;
				},

				// Cancel the request
				abort: function( statusText ) {
					var finalText = statusText || strAbort;
					if ( transport ) {
						transport.abort( finalText );
					}
					done( 0, finalText );
					return this;
				}
			};

		// Attach deferreds
		deferred.promise( jqXHR );

		// Add protocol if not provided (prefilters might expect it)
		// Handle falsy url in the settings object (#10093: consistency with old signature)
		// We also use the url parameter if available
		s.url = ( ( url || s.url || location.href ) + "" )
			.replace( rprotocol, location.protocol + "//" );

		// Alias method option to type as per ticket #12004
		s.type = options.method || options.type || s.method || s.type;

		// Extract dataTypes list
		s.dataTypes = ( s.dataType || "*" ).toLowerCase().match( rnothtmlwhite ) || [ "" ];

		// A cross-domain request is in order when the origin doesn't match the current origin.
		if ( s.crossDomain == null ) {
			urlAnchor = document.createElement( "a" );

			// Support: IE <=8 - 11, Edge 12 - 13
			// IE throws exception on accessing the href property if url is malformed,
			// e.g. http://example.com:80x/
			try {
				urlAnchor.href = s.url;

				// Support: IE <=8 - 11 only
				// Anchor's host property isn't correctly set when s.url is relative
				urlAnchor.href = urlAnchor.href;
				s.crossDomain = originAnchor.protocol + "//" + originAnchor.host !==
					urlAnchor.protocol + "//" + urlAnchor.host;
			} catch ( e ) {

				// If there is an error parsing the URL, assume it is crossDomain,
				// it can be rejected by the transport if it is invalid
				s.crossDomain = true;
			}
		}

		// Convert data if not already a string
		if ( s.data && s.processData && typeof s.data !== "string" ) {
			s.data = jQuery.param( s.data, s.traditional );
		}

		// Apply prefilters
		inspectPrefiltersOrTransports( prefilters, s, options, jqXHR );

		// If request was aborted inside a prefilter, stop there
		if ( completed ) {
			return jqXHR;
		}

		// We can fire global events as of now if asked to
		// Don't fire events if jQuery.event is undefined in an AMD-usage scenario (#15118)
		fireGlobals = jQuery.event && s.global;

		// Watch for a new set of requests
		if ( fireGlobals && jQuery.active++ === 0 ) {
			jQuery.event.trigger( "ajaxStart" );
		}

		// Uppercase the type
		s.type = s.type.toUpperCase();

		// Determine if request has content
		s.hasContent = !rnoContent.test( s.type );

		// Save the URL in case we're toying with the If-Modified-Since
		// and/or If-None-Match header later on
		// Remove hash to simplify url manipulation
		cacheURL = s.url.replace( rhash, "" );

		// More options handling for requests with no content
		if ( !s.hasContent ) {

			// Remember the hash so we can put it back
			uncached = s.url.slice( cacheURL.length );

			// If data is available, append data to url
			if ( s.data ) {
				cacheURL += ( rquery.test( cacheURL ) ? "&" : "?" ) + s.data;

				// #9682: remove data so that it's not used in an eventual retry
				delete s.data;
			}

			// Add or update anti-cache param if needed
			if ( s.cache === false ) {
				cacheURL = cacheURL.replace( rantiCache, "$1" );
				uncached = ( rquery.test( cacheURL ) ? "&" : "?" ) + "_=" + ( nonce++ ) + uncached;
			}

			// Put hash and anti-cache on the URL that will be requested (gh-1732)
			s.url = cacheURL + uncached;

		// Change '%20' to '+' if this is encoded form body content (gh-2658)
		} else if ( s.data && s.processData &&
			( s.contentType || "" ).indexOf( "application/x-www-form-urlencoded" ) === 0 ) {
			s.data = s.data.replace( r20, "+" );
		}

		// Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.
		if ( s.ifModified ) {
			if ( jQuery.lastModified[ cacheURL ] ) {
				jqXHR.setRequestHeader( "If-Modified-Since", jQuery.lastModified[ cacheURL ] );
			}
			if ( jQuery.etag[ cacheURL ] ) {
				jqXHR.setRequestHeader( "If-None-Match", jQuery.etag[ cacheURL ] );
			}
		}

		// Set the correct header, if data is being sent
		if ( s.data && s.hasContent && s.contentType !== false || options.contentType ) {
			jqXHR.setRequestHeader( "Content-Type", s.contentType );
		}

		// Set the Accepts header for the server, depending on the dataType
		jqXHR.setRequestHeader(
			"Accept",
			s.dataTypes[ 0 ] && s.accepts[ s.dataTypes[ 0 ] ] ?
				s.accepts[ s.dataTypes[ 0 ] ] +
					( s.dataTypes[ 0 ] !== "*" ? ", " + allTypes + "; q=0.01" : "" ) :
				s.accepts[ "*" ]
		);

		// Check for headers option
		for ( i in s.headers ) {
			jqXHR.setRequestHeader( i, s.headers[ i ] );
		}

		// Allow custom headers/mimetypes and early abort
		if ( s.beforeSend &&
			( s.beforeSend.call( callbackContext, jqXHR, s ) === false || completed ) ) {

			// Abort if not done already and return
			return jqXHR.abort();
		}

		// Aborting is no longer a cancellation
		strAbort = "abort";

		// Install callbacks on deferreds
		completeDeferred.add( s.complete );
		jqXHR.done( s.success );
		jqXHR.fail( s.error );

		// Get transport
		transport = inspectPrefiltersOrTransports( transports, s, options, jqXHR );

		// If no transport, we auto-abort
		if ( !transport ) {
			done( -1, "No Transport" );
		} else {
			jqXHR.readyState = 1;

			// Send global event
			if ( fireGlobals ) {
				globalEventContext.trigger( "ajaxSend", [ jqXHR, s ] );
			}

			// If request was aborted inside ajaxSend, stop there
			if ( completed ) {
				return jqXHR;
			}

			// Timeout
			if ( s.async && s.timeout > 0 ) {
				timeoutTimer = window.setTimeout( function() {
					jqXHR.abort( "timeout" );
				}, s.timeout );
			}

			try {
				completed = false;
				transport.send( requestHeaders, done );
			} catch ( e ) {

				// Rethrow post-completion exceptions
				if ( completed ) {
					throw e;
				}

				// Propagate others as results
				done( -1, e );
			}
		}

		// Callback for when everything is done
		function done( status, nativeStatusText, responses, headers ) {
			var isSuccess, success, error, response, modified,
				statusText = nativeStatusText;

			// Ignore repeat invocations
			if ( completed ) {
				return;
			}

			completed = true;

			// Clear timeout if it exists
			if ( timeoutTimer ) {
				window.clearTimeout( timeoutTimer );
			}

			// Dereference transport for early garbage collection
			// (no matter how long the jqXHR object will be used)
			transport = undefined;

			// Cache response headers
			responseHeadersString = headers || "";

			// Set readyState
			jqXHR.readyState = status > 0 ? 4 : 0;

			// Determine if successful
			isSuccess = status >= 200 && status < 300 || status === 304;

			// Get response data
			if ( responses ) {
				response = ajaxHandleResponses( s, jqXHR, responses );
			}

			// Convert no matter what (that way responseXXX fields are always set)
			response = ajaxConvert( s, response, jqXHR, isSuccess );

			// If successful, handle type chaining
			if ( isSuccess ) {

				// Set the If-Modified-Since and/or If-None-Match header, if in ifModified mode.
				if ( s.ifModified ) {
					modified = jqXHR.getResponseHeader( "Last-Modified" );
					if ( modified ) {
						jQuery.lastModified[ cacheURL ] = modified;
					}
					modified = jqXHR.getResponseHeader( "etag" );
					if ( modified ) {
						jQuery.etag[ cacheURL ] = modified;
					}
				}

				// if no content
				if ( status === 204 || s.type === "HEAD" ) {
					statusText = "nocontent";

				// if not modified
				} else if ( status === 304 ) {
					statusText = "notmodified";

				// If we have data, let's convert it
				} else {
					statusText = response.state;
					success = response.data;
					error = response.error;
					isSuccess = !error;
				}
			} else {

				// Extract error from statusText and normalize for non-aborts
				error = statusText;
				if ( status || !statusText ) {
					statusText = "error";
					if ( status < 0 ) {
						status = 0;
					}
				}
			}

			// Set data for the fake xhr object
			jqXHR.status = status;
			jqXHR.statusText = ( nativeStatusText || statusText ) + "";

			// Success/Error
			if ( isSuccess ) {
				deferred.resolveWith( callbackContext, [ success, statusText, jqXHR ] );
			} else {
				deferred.rejectWith( callbackContext, [ jqXHR, statusText, error ] );
			}

			// Status-dependent callbacks
			jqXHR.statusCode( statusCode );
			statusCode = undefined;

			if ( fireGlobals ) {
				globalEventContext.trigger( isSuccess ? "ajaxSuccess" : "ajaxError",
					[ jqXHR, s, isSuccess ? success : error ] );
			}

			// Complete
			completeDeferred.fireWith( callbackContext, [ jqXHR, statusText ] );

			if ( fireGlobals ) {
				globalEventContext.trigger( "ajaxComplete", [ jqXHR, s ] );

				// Handle the global AJAX counter
				if ( !( --jQuery.active ) ) {
					jQuery.event.trigger( "ajaxStop" );
				}
			}
		}

		return jqXHR;
	},

	getJSON: function( url, data, callback ) {
		return jQuery.get( url, data, callback, "json" );
	},

	getScript: function( url, callback ) {
		return jQuery.get( url, undefined, callback, "script" );
	}
} );

jQuery.each( [ "get", "post" ], function( i, method ) {
	jQuery[ method ] = function( url, data, callback, type ) {

		// Shift arguments if data argument was omitted
		if ( jQuery.isFunction( data ) ) {
			type = type || callback;
			callback = data;
			data = undefined;
		}

		// The url can be an options object (which then must have .url)
		return jQuery.ajax( jQuery.extend( {
			url: url,
			type: method,
			dataType: type,
			data: data,
			success: callback
		}, jQuery.isPlainObject( url ) && url ) );
	};
} );


jQuery._evalUrl = function( url ) {
	return jQuery.ajax( {
		url: url,

		// Make this explicit, since user can override this through ajaxSetup (#11264)
		type: "GET",
		dataType: "script",
		cache: true,
		async: false,
		global: false,
		"throws": true
	} );
};


jQuery.fn.extend( {
	wrapAll: function( html ) {
		var wrap;

		if ( this[ 0 ] ) {
			if ( jQuery.isFunction( html ) ) {
				html = html.call( this[ 0 ] );
			}

			// The elements to wrap the target around
			wrap = jQuery( html, this[ 0 ].ownerDocument ).eq( 0 ).clone( true );

			if ( this[ 0 ].parentNode ) {
				wrap.insertBefore( this[ 0 ] );
			}

			wrap.map( function() {
				var elem = this;

				while ( elem.firstElementChild ) {
					elem = elem.firstElementChild;
				}

				return elem;
			} ).append( this );
		}

		return this;
	},

	wrapInner: function( html ) {
		if ( jQuery.isFunction( html ) ) {
			return this.each( function( i ) {
				jQuery( this ).wrapInner( html.call( this, i ) );
			} );
		}

		return this.each( function() {
			var self = jQuery( this ),
				contents = self.contents();

			if ( contents.length ) {
				contents.wrapAll( html );

			} else {
				self.append( html );
			}
		} );
	},

	wrap: function( html ) {
		var isFunction = jQuery.isFunction( html );

		return this.each( function( i ) {
			jQuery( this ).wrapAll( isFunction ? html.call( this, i ) : html );
		} );
	},

	unwrap: function( selector ) {
		this.parent( selector ).not( "body" ).each( function() {
			jQuery( this ).replaceWith( this.childNodes );
		} );
		return this;
	}
} );


jQuery.expr.pseudos.hidden = function( elem ) {
	return !jQuery.expr.pseudos.visible( elem );
};
jQuery.expr.pseudos.visible = function( elem ) {
	return !!( elem.offsetWidth || elem.offsetHeight || elem.getClientRects().length );
};




jQuery.ajaxSettings.xhr = function() {
	try {
		return new window.XMLHttpRequest();
	} catch ( e ) {}
};

var xhrSuccessStatus = {

		// File protocol always yields status code 0, assume 200
		0: 200,

		// Support: IE <=9 only
		// #1450: sometimes IE returns 1223 when it should be 204
		1223: 204
	},
	xhrSupported = jQuery.ajaxSettings.xhr();

support.cors = !!xhrSupported && ( "withCredentials" in xhrSupported );
support.ajax = xhrSupported = !!xhrSupported;

jQuery.ajaxTransport( function( options ) {
	var callback, errorCallback;

	// Cross domain only allowed if supported through XMLHttpRequest
	if ( support.cors || xhrSupported && !options.crossDomain ) {
		return {
			send: function( headers, complete ) {
				var i,
					xhr = options.xhr();

				xhr.open(
					options.type,
					options.url,
					options.async,
					options.username,
					options.password
				);

				// Apply custom fields if provided
				if ( options.xhrFields ) {
					for ( i in options.xhrFields ) {
						xhr[ i ] = options.xhrFields[ i ];
					}
				}

				// Override mime type if needed
				if ( options.mimeType && xhr.overrideMimeType ) {
					xhr.overrideMimeType( options.mimeType );
				}

				// X-Requested-With header
				// For cross-domain requests, seeing as conditions for a preflight are
				// akin to a jigsaw puzzle, we simply never set it to be sure.
				// (it can always be set on a per-request basis or even using ajaxSetup)
				// For same-domain requests, won't change header if already provided.
				if ( !options.crossDomain && !headers[ "X-Requested-With" ] ) {
					headers[ "X-Requested-With" ] = "XMLHttpRequest";
				}

				// Set headers
				for ( i in headers ) {
					xhr.setRequestHeader( i, headers[ i ] );
				}

				// Callback
				callback = function( type ) {
					return function() {
						if ( callback ) {
							callback = errorCallback = xhr.onload =
								xhr.onerror = xhr.onabort = xhr.onreadystatechange = null;

							if ( type === "abort" ) {
								xhr.abort();
							} else if ( type === "error" ) {

								// Support: IE <=9 only
								// On a manual native abort, IE9 throws
								// errors on any property access that is not readyState
								if ( typeof xhr.status !== "number" ) {
									complete( 0, "error" );
								} else {
									complete(

										// File: protocol always yields status 0; see #8605, #14207
										xhr.status,
										xhr.statusText
									);
								}
							} else {
								complete(
									xhrSuccessStatus[ xhr.status ] || xhr.status,
									xhr.statusText,

									// Support: IE <=9 only
									// IE9 has no XHR2 but throws on binary (trac-11426)
									// For XHR2 non-text, let the caller handle it (gh-2498)
									( xhr.responseType || "text" ) !== "text"  ||
									typeof xhr.responseText !== "string" ?
										{ binary: xhr.response } :
										{ text: xhr.responseText },
									xhr.getAllResponseHeaders()
								);
							}
						}
					};
				};

				// Listen to events
				xhr.onload = callback();
				errorCallback = xhr.onerror = callback( "error" );

				// Support: IE 9 only
				// Use onreadystatechange to replace onabort
				// to handle uncaught aborts
				if ( xhr.onabort !== undefined ) {
					xhr.onabort = errorCallback;
				} else {
					xhr.onreadystatechange = function() {

						// Check readyState before timeout as it changes
						if ( xhr.readyState === 4 ) {

							// Allow onerror to be called first,
							// but that will not handle a native abort
							// Also, save errorCallback to a variable
							// as xhr.onerror cannot be accessed
							window.setTimeout( function() {
								if ( callback ) {
									errorCallback();
								}
							} );
						}
					};
				}

				// Create the abort callback
				callback = callback( "abort" );

				try {

					// Do send the request (this may raise an exception)
					xhr.send( options.hasContent && options.data || null );
				} catch ( e ) {

					// #14683: Only rethrow if this hasn't been notified as an error yet
					if ( callback ) {
						throw e;
					}
				}
			},

			abort: function() {
				if ( callback ) {
					callback();
				}
			}
		};
	}
} );




// Prevent auto-execution of scripts when no explicit dataType was provided (See gh-2432)
jQuery.ajaxPrefilter( function( s ) {
	if ( s.crossDomain ) {
		s.contents.script = false;
	}
} );

// Install script dataType
jQuery.ajaxSetup( {
	accepts: {
		script: "text/javascript, application/javascript, " +
			"application/ecmascript, application/x-ecmascript"
	},
	contents: {
		script: /\b(?:java|ecma)script\b/
	},
	converters: {
		"text script": function( text ) {
			jQuery.globalEval( text );
			return text;
		}
	}
} );

// Handle cache's special case and crossDomain
jQuery.ajaxPrefilter( "script", function( s ) {
	if ( s.cache === undefined ) {
		s.cache = false;
	}
	if ( s.crossDomain ) {
		s.type = "GET";
	}
} );

// Bind script tag hack transport
jQuery.ajaxTransport( "script", function( s ) {

	// This transport only deals with cross domain requests
	if ( s.crossDomain ) {
		var script, callback;
		return {
			send: function( _, complete ) {
				script = jQuery( "<script>" ).prop( {
					charset: s.scriptCharset,
					src: s.url
				} ).on(
					"load error",
					callback = function( evt ) {
						script.remove();
						callback = null;
						if ( evt ) {
							complete( evt.type === "error" ? 404 : 200, evt.type );
						}
					}
				);

				// Use native DOM manipulation to avoid our domManip AJAX trickery
				document.head.appendChild( script[ 0 ] );
			},
			abort: function() {
				if ( callback ) {
					callback();
				}
			}
		};
	}
} );




var oldCallbacks = [],
	rjsonp = /(=)\?(?=&|$)|\?\?/;

// Default jsonp settings
jQuery.ajaxSetup( {
	jsonp: "callback",
	jsonpCallback: function() {
		var callback = oldCallbacks.pop() || ( jQuery.expando + "_" + ( nonce++ ) );
		this[ callback ] = true;
		return callback;
	}
} );

// Detect, normalize options and install callbacks for jsonp requests
jQuery.ajaxPrefilter( "json jsonp", function( s, originalSettings, jqXHR ) {

	var callbackName, overwritten, responseContainer,
		jsonProp = s.jsonp !== false && ( rjsonp.test( s.url ) ?
			"url" :
			typeof s.data === "string" &&
				( s.contentType || "" )
					.indexOf( "application/x-www-form-urlencoded" ) === 0 &&
				rjsonp.test( s.data ) && "data"
		);

	// Handle iff the expected data type is "jsonp" or we have a parameter to set
	if ( jsonProp || s.dataTypes[ 0 ] === "jsonp" ) {

		// Get callback name, remembering preexisting value associated with it
		callbackName = s.jsonpCallback = jQuery.isFunction( s.jsonpCallback ) ?
			s.jsonpCallback() :
			s.jsonpCallback;

		// Insert callback into url or form data
		if ( jsonProp ) {
			s[ jsonProp ] = s[ jsonProp ].replace( rjsonp, "$1" + callbackName );
		} else if ( s.jsonp !== false ) {
			s.url += ( rquery.test( s.url ) ? "&" : "?" ) + s.jsonp + "=" + callbackName;
		}

		// Use data converter to retrieve json after script execution
		s.converters[ "script json" ] = function() {
			if ( !responseContainer ) {
				jQuery.error( callbackName + " was not called" );
			}
			return responseContainer[ 0 ];
		};

		// Force json dataType
		s.dataTypes[ 0 ] = "json";

		// Install callback
		overwritten = window[ callbackName ];
		window[ callbackName ] = function() {
			responseContainer = arguments;
		};

		// Clean-up function (fires after converters)
		jqXHR.always( function() {

			// If previous value didn't exist - remove it
			if ( overwritten === undefined ) {
				jQuery( window ).removeProp( callbackName );

			// Otherwise restore preexisting value
			} else {
				window[ callbackName ] = overwritten;
			}

			// Save back as free
			if ( s[ callbackName ] ) {

				// Make sure that re-using the options doesn't screw things around
				s.jsonpCallback = originalSettings.jsonpCallback;

				// Save the callback name for future use
				oldCallbacks.push( callbackName );
			}

			// Call if it was a function and we have a response
			if ( responseContainer && jQuery.isFunction( overwritten ) ) {
				overwritten( responseContainer[ 0 ] );
			}

			responseContainer = overwritten = undefined;
		} );

		// Delegate to script
		return "script";
	}
} );




// Support: Safari 8 only
// In Safari 8 documents created via document.implementation.createHTMLDocument
// collapse sibling forms: the second one becomes a child of the first one.
// Because of that, this security measure has to be disabled in Safari 8.
// https://bugs.webkit.org/show_bug.cgi?id=137337
support.createHTMLDocument = ( function() {
	var body = document.implementation.createHTMLDocument( "" ).body;
	body.innerHTML = "<form></form><form></form>";
	return body.childNodes.length === 2;
} )();


// Argument "data" should be string of html
// context (optional): If specified, the fragment will be created in this context,
// defaults to document
// keepScripts (optional): If true, will include scripts passed in the html string
jQuery.parseHTML = function( data, context, keepScripts ) {
	if ( typeof data !== "string" ) {
		return [];
	}
	if ( typeof context === "boolean" ) {
		keepScripts = context;
		context = false;
	}

	var base, parsed, scripts;

	if ( !context ) {

		// Stop scripts or inline event handlers from being executed immediately
		// by using document.implementation
		if ( support.createHTMLDocument ) {
			context = document.implementation.createHTMLDocument( "" );

			// Set the base href for the created document
			// so any parsed elements with URLs
			// are based on the document's URL (gh-2965)
			base = context.createElement( "base" );
			base.href = document.location.href;
			context.head.appendChild( base );
		} else {
			context = document;
		}
	}

	parsed = rsingleTag.exec( data );
	scripts = !keepScripts && [];

	// Single tag
	if ( parsed ) {
		return [ context.createElement( parsed[ 1 ] ) ];
	}

	parsed = buildFragment( [ data ], context, scripts );

	if ( scripts && scripts.length ) {
		jQuery( scripts ).remove();
	}

	return jQuery.merge( [], parsed.childNodes );
};


/**
 * Load a url into a page
 */
jQuery.fn.load = function( url, params, callback ) {
	var selector, type, response,
		self = this,
		off = url.indexOf( " " );

	if ( off > -1 ) {
		selector = stripAndCollapse( url.slice( off ) );
		url = url.slice( 0, off );
	}

	// If it's a function
	if ( jQuery.isFunction( params ) ) {

		// We assume that it's the callback
		callback = params;
		params = undefined;

	// Otherwise, build a param string
	} else if ( params && typeof params === "object" ) {
		type = "POST";
	}

	// If we have elements to modify, make the request
	if ( self.length > 0 ) {
		jQuery.ajax( {
			url: url,

			// If "type" variable is undefined, then "GET" method will be used.
			// Make value of this field explicit since
			// user can override it through ajaxSetup method
			type: type || "GET",
			dataType: "html",
			data: params
		} ).done( function( responseText ) {

			// Save response for use in complete callback
			response = arguments;

			self.html( selector ?

				// If a selector was specified, locate the right elements in a dummy div
				// Exclude scripts to avoid IE 'Permission Denied' errors
				jQuery( "<div>" ).append( jQuery.parseHTML( responseText ) ).find( selector ) :

				// Otherwise use the full result
				responseText );

		// If the request succeeds, this function gets "data", "status", "jqXHR"
		// but they are ignored because response was set above.
		// If it fails, this function gets "jqXHR", "status", "error"
		} ).always( callback && function( jqXHR, status ) {
			self.each( function() {
				callback.apply( this, response || [ jqXHR.responseText, status, jqXHR ] );
			} );
		} );
	}

	return this;
};




// Attach a bunch of functions for handling common AJAX events
jQuery.each( [
	"ajaxStart",
	"ajaxStop",
	"ajaxComplete",
	"ajaxError",
	"ajaxSuccess",
	"ajaxSend"
], function( i, type ) {
	jQuery.fn[ type ] = function( fn ) {
		return this.on( type, fn );
	};
} );




jQuery.expr.pseudos.animated = function( elem ) {
	return jQuery.grep( jQuery.timers, function( fn ) {
		return elem === fn.elem;
	} ).length;
};




/**
 * Gets a window from an element
 */
function getWindow( elem ) {
	return jQuery.isWindow( elem ) ? elem : elem.nodeType === 9 && elem.defaultView;
}

jQuery.offset = {
	setOffset: function( elem, options, i ) {
		var curPosition, curLeft, curCSSTop, curTop, curOffset, curCSSLeft, calculatePosition,
			position = jQuery.css( elem, "position" ),
			curElem = jQuery( elem ),
			props = {};

		// Set position first, in-case top/left are set even on static elem
		if ( position === "static" ) {
			elem.style.position = "relative";
		}

		curOffset = curElem.offset();
		curCSSTop = jQuery.css( elem, "top" );
		curCSSLeft = jQuery.css( elem, "left" );
		calculatePosition = ( position === "absolute" || position === "fixed" ) &&
			( curCSSTop + curCSSLeft ).indexOf( "auto" ) > -1;

		// Need to be able to calculate position if either
		// top or left is auto and position is either absolute or fixed
		if ( calculatePosition ) {
			curPosition = curElem.position();
			curTop = curPosition.top;
			curLeft = curPosition.left;

		} else {
			curTop = parseFloat( curCSSTop ) || 0;
			curLeft = parseFloat( curCSSLeft ) || 0;
		}

		if ( jQuery.isFunction( options ) ) {

			// Use jQuery.extend here to allow modification of coordinates argument (gh-1848)
			options = options.call( elem, i, jQuery.extend( {}, curOffset ) );
		}

		if ( options.top != null ) {
			props.top = ( options.top - curOffset.top ) + curTop;
		}
		if ( options.left != null ) {
			props.left = ( options.left - curOffset.left ) + curLeft;
		}

		if ( "using" in options ) {
			options.using.call( elem, props );

		} else {
			curElem.css( props );
		}
	}
};

jQuery.fn.extend( {
	offset: function( options ) {

		// Preserve chaining for setter
		if ( arguments.length ) {
			return options === undefined ?
				this :
				this.each( function( i ) {
					jQuery.offset.setOffset( this, options, i );
				} );
		}

		var docElem, win, rect, doc,
			elem = this[ 0 ];

		if ( !elem ) {
			return;
		}

		// Support: IE <=11 only
		// Running getBoundingClientRect on a
		// disconnected node in IE throws an error
		if ( !elem.getClientRects().length ) {
			return { top: 0, left: 0 };
		}

		rect = elem.getBoundingClientRect();

		// Make sure element is not hidden (display: none)
		if ( rect.width || rect.height ) {
			doc = elem.ownerDocument;
			win = getWindow( doc );
			docElem = doc.documentElement;

			return {
				top: rect.top + win.pageYOffset - docElem.clientTop,
				left: rect.left + win.pageXOffset - docElem.clientLeft
			};
		}

		// Return zeros for disconnected and hidden elements (gh-2310)
		return rect;
	},

	position: function() {
		if ( !this[ 0 ] ) {
			return;
		}

		var offsetParent, offset,
			elem = this[ 0 ],
			parentOffset = { top: 0, left: 0 };

		// Fixed elements are offset from window (parentOffset = {top:0, left: 0},
		// because it is its only offset parent
		if ( jQuery.css( elem, "position" ) === "fixed" ) {

			// Assume getBoundingClientRect is there when computed position is fixed
			offset = elem.getBoundingClientRect();

		} else {

			// Get *real* offsetParent
			offsetParent = this.offsetParent();

			// Get correct offsets
			offset = this.offset();
			if ( !jQuery.nodeName( offsetParent[ 0 ], "html" ) ) {
				parentOffset = offsetParent.offset();
			}

			// Add offsetParent borders
			parentOffset = {
				top: parentOffset.top + jQuery.css( offsetParent[ 0 ], "borderTopWidth", true ),
				left: parentOffset.left + jQuery.css( offsetParent[ 0 ], "borderLeftWidth", true )
			};
		}

		// Subtract parent offsets and element margins
		return {
			top: offset.top - parentOffset.top - jQuery.css( elem, "marginTop", true ),
			left: offset.left - parentOffset.left - jQuery.css( elem, "marginLeft", true )
		};
	},

	// This method will return documentElement in the following cases:
	// 1) For the element inside the iframe without offsetParent, this method will return
	//    documentElement of the parent window
	// 2) For the hidden or detached element
	// 3) For body or html element, i.e. in case of the html node - it will return itself
	//
	// but those exceptions were never presented as a real life use-cases
	// and might be considered as more preferable results.
	//
	// This logic, however, is not guaranteed and can change at any point in the future
	offsetParent: function() {
		return this.map( function() {
			var offsetParent = this.offsetParent;

			while ( offsetParent && jQuery.css( offsetParent, "position" ) === "static" ) {
				offsetParent = offsetParent.offsetParent;
			}

			return offsetParent || documentElement;
		} );
	}
} );

// Create scrollLeft and scrollTop methods
jQuery.each( { scrollLeft: "pageXOffset", scrollTop: "pageYOffset" }, function( method, prop ) {
	var top = "pageYOffset" === prop;

	jQuery.fn[ method ] = function( val ) {
		return access( this, function( elem, method, val ) {
			var win = getWindow( elem );

			if ( val === undefined ) {
				return win ? win[ prop ] : elem[ method ];
			}

			if ( win ) {
				win.scrollTo(
					!top ? val : win.pageXOffset,
					top ? val : win.pageYOffset
				);

			} else {
				elem[ method ] = val;
			}
		}, method, val, arguments.length );
	};
} );

// Support: Safari <=7 - 9.1, Chrome <=37 - 49
// Add the top/left cssHooks using jQuery.fn.position
// Webkit bug: https://bugs.webkit.org/show_bug.cgi?id=29084
// Blink bug: https://bugs.chromium.org/p/chromium/issues/detail?id=589347
// getComputedStyle returns percent when specified for top/left/bottom/right;
// rather than make the css module depend on the offset module, just check for it here
jQuery.each( [ "top", "left" ], function( i, prop ) {
	jQuery.cssHooks[ prop ] = addGetHookIf( support.pixelPosition,
		function( elem, computed ) {
			if ( computed ) {
				computed = curCSS( elem, prop );

				// If curCSS returns percentage, fallback to offset
				return rnumnonpx.test( computed ) ?
					jQuery( elem ).position()[ prop ] + "px" :
					computed;
			}
		}
	);
} );


// Create innerHeight, innerWidth, height, width, outerHeight and outerWidth methods
jQuery.each( { Height: "height", Width: "width" }, function( name, type ) {
	jQuery.each( { padding: "inner" + name, content: type, "": "outer" + name },
		function( defaultExtra, funcName ) {

		// Margin is only for outerHeight, outerWidth
		jQuery.fn[ funcName ] = function( margin, value ) {
			var chainable = arguments.length && ( defaultExtra || typeof margin !== "boolean" ),
				extra = defaultExtra || ( margin === true || value === true ? "margin" : "border" );

			return access( this, function( elem, type, value ) {
				var doc;

				if ( jQuery.isWindow( elem ) ) {

					// $( window ).outerWidth/Height return w/h including scrollbars (gh-1729)
					return funcName.indexOf( "outer" ) === 0 ?
						elem[ "inner" + name ] :
						elem.document.documentElement[ "client" + name ];
				}

				// Get document width or height
				if ( elem.nodeType === 9 ) {
					doc = elem.documentElement;

					// Either scroll[Width/Height] or offset[Width/Height] or client[Width/Height],
					// whichever is greatest
					return Math.max(
						elem.body[ "scroll" + name ], doc[ "scroll" + name ],
						elem.body[ "offset" + name ], doc[ "offset" + name ],
						doc[ "client" + name ]
					);
				}

				return value === undefined ?

					// Get width or height on the element, requesting but not forcing parseFloat
					jQuery.css( elem, type, extra ) :

					// Set width or height on the element
					jQuery.style( elem, type, value, extra );
			}, type, chainable ? margin : undefined, chainable );
		};
	} );
} );


jQuery.fn.extend( {

	bind: function( types, data, fn ) {
		return this.on( types, null, data, fn );
	},
	unbind: function( types, fn ) {
		return this.off( types, null, fn );
	},

	delegate: function( selector, types, data, fn ) {
		return this.on( types, selector, data, fn );
	},
	undelegate: function( selector, types, fn ) {

		// ( namespace ) or ( selector, types [, fn] )
		return arguments.length === 1 ?
			this.off( selector, "**" ) :
			this.off( types, selector || "**", fn );
	}
} );

jQuery.parseJSON = JSON.parse;




// Register as a named AMD module, since jQuery can be concatenated with other
// files that may use define, but not via a proper concatenation script that
// understands anonymous AMD modules. A named AMD is safest and most robust
// way to register. Lowercase jquery is used because AMD module names are
// derived from file names, and jQuery is normally delivered in a lowercase
// file name. Do this after creating the global so that if an AMD module wants
// to call noConflict to hide this version of jQuery, it will work.

// Note that for maximum portability, libraries that are not jQuery should
// declare themselves as anonymous modules, and avoid setting a global if an
// AMD loader is present. jQuery is a special case. For more information, see
// https://github.com/jrburke/requirejs/wiki/Updating-existing-libraries#wiki-anon

if ( true ) {
	!(__WEBPACK_AMD_DEFINE_ARRAY__ = [], __WEBPACK_AMD_DEFINE_RESULT__ = function() {
		return jQuery;
	}.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
}




var

	// Map over jQuery in case of overwrite
	_jQuery = window.jQuery,

	// Map over the $ in case of overwrite
	_$ = window.$;

jQuery.noConflict = function( deep ) {
	if ( window.$ === jQuery ) {
		window.$ = _$;
	}

	if ( deep && window.jQuery === jQuery ) {
		window.jQuery = _jQuery;
	}

	return jQuery;
};

// Expose jQuery and $ identifiers, even in AMD
// (#7102#comment:10, https://github.com/jquery/jquery/pull/557)
// and CommonJS for browser emulators (#13566)
if ( !noGlobal ) {
	window.jQuery = window.$ = jQuery;
}





return jQuery;
} );


/***/ }),
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function(process) {

var utils = __webpack_require__(1);
var normalizeHeaderName = __webpack_require__(28);

var PROTECTION_PREFIX = /^\)\]\}',?\n/;
var DEFAULT_CONTENT_TYPE = {
  'Content-Type': 'application/x-www-form-urlencoded'
};

function setContentTypeIfUnset(headers, value) {
  if (!utils.isUndefined(headers) && utils.isUndefined(headers['Content-Type'])) {
    headers['Content-Type'] = value;
  }
}

function getDefaultAdapter() {
  var adapter;
  if (typeof XMLHttpRequest !== 'undefined') {
    // For browsers use XHR adapter
    adapter = __webpack_require__(7);
  } else if (typeof process !== 'undefined') {
    // For node use HTTP adapter
    adapter = __webpack_require__(7);
  }
  return adapter;
}

var defaults = {
  adapter: getDefaultAdapter(),

  transformRequest: [function transformRequest(data, headers) {
    normalizeHeaderName(headers, 'Content-Type');
    if (utils.isFormData(data) ||
      utils.isArrayBuffer(data) ||
      utils.isStream(data) ||
      utils.isFile(data) ||
      utils.isBlob(data)
    ) {
      return data;
    }
    if (utils.isArrayBufferView(data)) {
      return data.buffer;
    }
    if (utils.isURLSearchParams(data)) {
      setContentTypeIfUnset(headers, 'application/x-www-form-urlencoded;charset=utf-8');
      return data.toString();
    }
    if (utils.isObject(data)) {
      setContentTypeIfUnset(headers, 'application/json;charset=utf-8');
      return JSON.stringify(data);
    }
    return data;
  }],

  transformResponse: [function transformResponse(data) {
    /*eslint no-param-reassign:0*/
    if (typeof data === 'string') {
      data = data.replace(PROTECTION_PREFIX, '');
      try {
        data = JSON.parse(data);
      } catch (e) { /* Ignore */ }
    }
    return data;
  }],

  timeout: 0,

  xsrfCookieName: 'XSRF-TOKEN',
  xsrfHeaderName: 'X-XSRF-TOKEN',

  maxContentLength: -1,

  validateStatus: function validateStatus(status) {
    return status >= 200 && status < 300;
  }
};

defaults.headers = {
  common: {
    'Accept': 'application/json, text/plain, */*'
  }
};

utils.forEach(['delete', 'get', 'head'], function forEachMehtodNoData(method) {
  defaults.headers[method] = {};
});

utils.forEach(['post', 'put', 'patch'], function forEachMethodWithData(method) {
  defaults.headers[method] = utils.merge(DEFAULT_CONTENT_TYPE);
});

module.exports = defaults;

/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(6)))

/***/ }),
/* 6 */
/***/ (function(module, exports) {

// shim for using process in browser
var process = module.exports = {};

// cached from whatever global is present so that test runners that stub it
// don't break things.  But we need to wrap it in a try catch in case it is
// wrapped in strict mode code which doesn't define any globals.  It's inside a
// function because try/catches deoptimize in certain engines.

var cachedSetTimeout;
var cachedClearTimeout;

function defaultSetTimout() {
    throw new Error('setTimeout has not been defined');
}
function defaultClearTimeout () {
    throw new Error('clearTimeout has not been defined');
}
(function () {
    try {
        if (typeof setTimeout === 'function') {
            cachedSetTimeout = setTimeout;
        } else {
            cachedSetTimeout = defaultSetTimout;
        }
    } catch (e) {
        cachedSetTimeout = defaultSetTimout;
    }
    try {
        if (typeof clearTimeout === 'function') {
            cachedClearTimeout = clearTimeout;
        } else {
            cachedClearTimeout = defaultClearTimeout;
        }
    } catch (e) {
        cachedClearTimeout = defaultClearTimeout;
    }
} ())
function runTimeout(fun) {
    if (cachedSetTimeout === setTimeout) {
        //normal enviroments in sane situations
        return setTimeout(fun, 0);
    }
    // if setTimeout wasn't available but was latter defined
    if ((cachedSetTimeout === defaultSetTimout || !cachedSetTimeout) && setTimeout) {
        cachedSetTimeout = setTimeout;
        return setTimeout(fun, 0);
    }
    try {
        // when when somebody has screwed with setTimeout but no I.E. maddness
        return cachedSetTimeout(fun, 0);
    } catch(e){
        try {
            // When we are in I.E. but the script has been evaled so I.E. doesn't trust the global object when called normally
            return cachedSetTimeout.call(null, fun, 0);
        } catch(e){
            // same as above but when it's a version of I.E. that must have the global object for 'this', hopfully our context correct otherwise it will throw a global error
            return cachedSetTimeout.call(this, fun, 0);
        }
    }


}
function runClearTimeout(marker) {
    if (cachedClearTimeout === clearTimeout) {
        //normal enviroments in sane situations
        return clearTimeout(marker);
    }
    // if clearTimeout wasn't available but was latter defined
    if ((cachedClearTimeout === defaultClearTimeout || !cachedClearTimeout) && clearTimeout) {
        cachedClearTimeout = clearTimeout;
        return clearTimeout(marker);
    }
    try {
        // when when somebody has screwed with setTimeout but no I.E. maddness
        return cachedClearTimeout(marker);
    } catch (e){
        try {
            // When we are in I.E. but the script has been evaled so I.E. doesn't  trust the global object when called normally
            return cachedClearTimeout.call(null, marker);
        } catch (e){
            // same as above but when it's a version of I.E. that must have the global object for 'this', hopfully our context correct otherwise it will throw a global error.
            // Some versions of I.E. have different rules for clearTimeout vs setTimeout
            return cachedClearTimeout.call(this, marker);
        }
    }



}
var queue = [];
var draining = false;
var currentQueue;
var queueIndex = -1;

function cleanUpNextTick() {
    if (!draining || !currentQueue) {
        return;
    }
    draining = false;
    if (currentQueue.length) {
        queue = currentQueue.concat(queue);
    } else {
        queueIndex = -1;
    }
    if (queue.length) {
        drainQueue();
    }
}

function drainQueue() {
    if (draining) {
        return;
    }
    var timeout = runTimeout(cleanUpNextTick);
    draining = true;

    var len = queue.length;
    while(len) {
        currentQueue = queue;
        queue = [];
        while (++queueIndex < len) {
            if (currentQueue) {
                currentQueue[queueIndex].run();
            }
        }
        queueIndex = -1;
        len = queue.length;
    }
    currentQueue = null;
    draining = false;
    runClearTimeout(timeout);
}

process.nextTick = function (fun) {
    var args = new Array(arguments.length - 1);
    if (arguments.length > 1) {
        for (var i = 1; i < arguments.length; i++) {
            args[i - 1] = arguments[i];
        }
    }
    queue.push(new Item(fun, args));
    if (queue.length === 1 && !draining) {
        runTimeout(drainQueue);
    }
};

// v8 likes predictible objects
function Item(fun, array) {
    this.fun = fun;
    this.array = array;
}
Item.prototype.run = function () {
    this.fun.apply(null, this.array);
};
process.title = 'browser';
process.browser = true;
process.env = {};
process.argv = [];
process.version = ''; // empty string to avoid regexp issues
process.versions = {};

function noop() {}

process.on = noop;
process.addListener = noop;
process.once = noop;
process.off = noop;
process.removeListener = noop;
process.removeAllListeners = noop;
process.emit = noop;

process.binding = function (name) {
    throw new Error('process.binding is not supported');
};

process.cwd = function () { return '/' };
process.chdir = function (dir) {
    throw new Error('process.chdir is not supported');
};
process.umask = function() { return 0; };


/***/ }),
/* 7 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function(process) {

var utils = __webpack_require__(1);
var settle = __webpack_require__(20);
var buildURL = __webpack_require__(23);
var parseHeaders = __webpack_require__(29);
var isURLSameOrigin = __webpack_require__(27);
var createError = __webpack_require__(10);
var btoa = (typeof window !== 'undefined' && window.btoa && window.btoa.bind(window)) || __webpack_require__(22);

module.exports = function xhrAdapter(config) {
  return new Promise(function dispatchXhrRequest(resolve, reject) {
    var requestData = config.data;
    var requestHeaders = config.headers;

    if (utils.isFormData(requestData)) {
      delete requestHeaders['Content-Type']; // Let the browser set it
    }

    var request = new XMLHttpRequest();
    var loadEvent = 'onreadystatechange';
    var xDomain = false;

    // For IE 8/9 CORS support
    // Only supports POST and GET calls and doesn't returns the response headers.
    // DON'T do this for testing b/c XMLHttpRequest is mocked, not XDomainRequest.
    if (process.env.NODE_ENV !== 'test' &&
        typeof window !== 'undefined' &&
        window.XDomainRequest && !('withCredentials' in request) &&
        !isURLSameOrigin(config.url)) {
      request = new window.XDomainRequest();
      loadEvent = 'onload';
      xDomain = true;
      request.onprogress = function handleProgress() {};
      request.ontimeout = function handleTimeout() {};
    }

    // HTTP basic authentication
    if (config.auth) {
      var username = config.auth.username || '';
      var password = config.auth.password || '';
      requestHeaders.Authorization = 'Basic ' + btoa(username + ':' + password);
    }

    request.open(config.method.toUpperCase(), buildURL(config.url, config.params, config.paramsSerializer), true);

    // Set the request timeout in MS
    request.timeout = config.timeout;

    // Listen for ready state
    request[loadEvent] = function handleLoad() {
      if (!request || (request.readyState !== 4 && !xDomain)) {
        return;
      }

      // The request errored out and we didn't get a response, this will be
      // handled by onerror instead
      // With one exception: request that using file: protocol, most browsers
      // will return status as 0 even though it's a successful request
      if (request.status === 0 && !(request.responseURL && request.responseURL.indexOf('file:') === 0)) {
        return;
      }

      // Prepare the response
      var responseHeaders = 'getAllResponseHeaders' in request ? parseHeaders(request.getAllResponseHeaders()) : null;
      var responseData = !config.responseType || config.responseType === 'text' ? request.responseText : request.response;
      var response = {
        data: responseData,
        // IE sends 1223 instead of 204 (https://github.com/mzabriskie/axios/issues/201)
        status: request.status === 1223 ? 204 : request.status,
        statusText: request.status === 1223 ? 'No Content' : request.statusText,
        headers: responseHeaders,
        config: config,
        request: request
      };

      settle(resolve, reject, response);

      // Clean up request
      request = null;
    };

    // Handle low level network errors
    request.onerror = function handleError() {
      // Real errors are hidden from us by the browser
      // onerror should only fire if it's a network error
      reject(createError('Network Error', config));

      // Clean up request
      request = null;
    };

    // Handle timeout
    request.ontimeout = function handleTimeout() {
      reject(createError('timeout of ' + config.timeout + 'ms exceeded', config, 'ECONNABORTED'));

      // Clean up request
      request = null;
    };

    // Add xsrf header
    // This is only done if running in a standard browser environment.
    // Specifically not if we're in a web worker, or react-native.
    if (utils.isStandardBrowserEnv()) {
      var cookies = __webpack_require__(25);

      // Add xsrf header
      var xsrfValue = (config.withCredentials || isURLSameOrigin(config.url)) && config.xsrfCookieName ?
          cookies.read(config.xsrfCookieName) :
          undefined;

      if (xsrfValue) {
        requestHeaders[config.xsrfHeaderName] = xsrfValue;
      }
    }

    // Add headers to the request
    if ('setRequestHeader' in request) {
      utils.forEach(requestHeaders, function setRequestHeader(val, key) {
        if (typeof requestData === 'undefined' && key.toLowerCase() === 'content-type') {
          // Remove Content-Type if data is undefined
          delete requestHeaders[key];
        } else {
          // Otherwise add header to the request
          request.setRequestHeader(key, val);
        }
      });
    }

    // Add withCredentials to request if needed
    if (config.withCredentials) {
      request.withCredentials = true;
    }

    // Add responseType to request if needed
    if (config.responseType) {
      try {
        request.responseType = config.responseType;
      } catch (e) {
        if (request.responseType !== 'json') {
          throw e;
        }
      }
    }

    // Handle progress if needed
    if (typeof config.onDownloadProgress === 'function') {
      request.addEventListener('progress', config.onDownloadProgress);
    }

    // Not all browsers support upload events
    if (typeof config.onUploadProgress === 'function' && request.upload) {
      request.upload.addEventListener('progress', config.onUploadProgress);
    }

    if (config.cancelToken) {
      // Handle cancellation
      config.cancelToken.promise.then(function onCanceled(cancel) {
        if (!request) {
          return;
        }

        request.abort();
        reject(cancel);
        // Clean up request
        request = null;
      });
    }

    if (requestData === undefined) {
      requestData = null;
    }

    // Send the request
    request.send(requestData);
  });
};

/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(6)))

/***/ }),
/* 8 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


/**
 * A `Cancel` is an object that is thrown when an operation is canceled.
 *
 * @class
 * @param {string=} message The message.
 */
function Cancel(message) {
  this.message = message;
}

Cancel.prototype.toString = function toString() {
  return 'Cancel' + (this.message ? ': ' + this.message : '');
};

Cancel.prototype.__CANCEL__ = true;

module.exports = Cancel;


/***/ }),
/* 9 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = function isCancel(value) {
  return !!(value && value.__CANCEL__);
};


/***/ }),
/* 10 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var enhanceError = __webpack_require__(19);

/**
 * Create an Error with the specified message, config, error code, and response.
 *
 * @param {string} message The error message.
 * @param {Object} config The config.
 * @param {string} [code] The error code (for example, 'ECONNABORTED').
 @ @param {Object} [response] The response.
 * @returns {Error} The created error.
 */
module.exports = function createError(message, config, code, response) {
  var error = new Error(message);
  return enhanceError(error, config, code, response);
};


/***/ }),
/* 11 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


module.exports = function bind(fn, thisArg) {
  return function wrap() {
    var args = new Array(arguments.length);
    for (var i = 0; i < args.length; i++) {
      args[i] = arguments[i];
    }
    return fn.apply(thisArg, args);
  };
};


/***/ }),
/* 12 */
/***/ (function(module, exports, __webpack_require__) {

/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

__webpack_require__(44);

window.Event = new Vue();

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('notifications', __webpack_require__(53));
Vue.component('notifications-table', __webpack_require__(52));
Vue.component('scholarships-create', __webpack_require__(59));
Vue.component('users-table', __webpack_require__(54));
Vue.component('schools-table', __webpack_require__(61));
Vue.component('scholarships-view', __webpack_require__(60));
Vue.component('students-view', __webpack_require__(62));
Vue.component('teachers-view', __webpack_require__(64));
Vue.component('resource-requests', __webpack_require__(58));
Vue.component('studies-select', __webpack_require__(63));

/*
 *  Laravel Passport Components
 */
Vue.component('passport-clients', __webpack_require__(56));

Vue.component('passport-authorized-clients', __webpack_require__(55));

Vue.component('passport-personal-access-tokens', __webpack_require__(57));

var app = new Vue({
  el: '#app'
});

/***/ }),
/* 13 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(14);

/***/ }),
/* 14 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var utils = __webpack_require__(1);
var bind = __webpack_require__(11);
var Axios = __webpack_require__(16);
var defaults = __webpack_require__(5);

/**
 * Create an instance of Axios
 *
 * @param {Object} defaultConfig The default config for the instance
 * @return {Axios} A new instance of Axios
 */
function createInstance(defaultConfig) {
  var context = new Axios(defaultConfig);
  var instance = bind(Axios.prototype.request, context);

  // Copy axios.prototype to instance
  utils.extend(instance, Axios.prototype, context);

  // Copy context to instance
  utils.extend(instance, context);

  return instance;
}

// Create the default instance to be exported
var axios = createInstance(defaults);

// Expose Axios class to allow class inheritance
axios.Axios = Axios;

// Factory for creating new instances
axios.create = function create(instanceConfig) {
  return createInstance(utils.merge(defaults, instanceConfig));
};

// Expose Cancel & CancelToken
axios.Cancel = __webpack_require__(8);
axios.CancelToken = __webpack_require__(15);
axios.isCancel = __webpack_require__(9);

// Expose all/spread
axios.all = function all(promises) {
  return Promise.all(promises);
};
axios.spread = __webpack_require__(30);

module.exports = axios;

// Allow use of default import syntax in TypeScript
module.exports.default = axios;


/***/ }),
/* 15 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var Cancel = __webpack_require__(8);

/**
 * A `CancelToken` is an object that can be used to request cancellation of an operation.
 *
 * @class
 * @param {Function} executor The executor function.
 */
function CancelToken(executor) {
  if (typeof executor !== 'function') {
    throw new TypeError('executor must be a function.');
  }

  var resolvePromise;
  this.promise = new Promise(function promiseExecutor(resolve) {
    resolvePromise = resolve;
  });

  var token = this;
  executor(function cancel(message) {
    if (token.reason) {
      // Cancellation has already been requested
      return;
    }

    token.reason = new Cancel(message);
    resolvePromise(token.reason);
  });
}

/**
 * Throws a `Cancel` if cancellation has been requested.
 */
CancelToken.prototype.throwIfRequested = function throwIfRequested() {
  if (this.reason) {
    throw this.reason;
  }
};

/**
 * Returns an object that contains a new `CancelToken` and a function that, when called,
 * cancels the `CancelToken`.
 */
CancelToken.source = function source() {
  var cancel;
  var token = new CancelToken(function executor(c) {
    cancel = c;
  });
  return {
    token: token,
    cancel: cancel
  };
};

module.exports = CancelToken;


/***/ }),
/* 16 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var defaults = __webpack_require__(5);
var utils = __webpack_require__(1);
var InterceptorManager = __webpack_require__(17);
var dispatchRequest = __webpack_require__(18);
var isAbsoluteURL = __webpack_require__(26);
var combineURLs = __webpack_require__(24);

/**
 * Create a new instance of Axios
 *
 * @param {Object} instanceConfig The default config for the instance
 */
function Axios(instanceConfig) {
  this.defaults = instanceConfig;
  this.interceptors = {
    request: new InterceptorManager(),
    response: new InterceptorManager()
  };
}

/**
 * Dispatch a request
 *
 * @param {Object} config The config specific for this request (merged with this.defaults)
 */
Axios.prototype.request = function request(config) {
  /*eslint no-param-reassign:0*/
  // Allow for axios('example/url'[, config]) a la fetch API
  if (typeof config === 'string') {
    config = utils.merge({
      url: arguments[0]
    }, arguments[1]);
  }

  config = utils.merge(defaults, this.defaults, { method: 'get' }, config);

  // Support baseURL config
  if (config.baseURL && !isAbsoluteURL(config.url)) {
    config.url = combineURLs(config.baseURL, config.url);
  }

  // Hook up interceptors middleware
  var chain = [dispatchRequest, undefined];
  var promise = Promise.resolve(config);

  this.interceptors.request.forEach(function unshiftRequestInterceptors(interceptor) {
    chain.unshift(interceptor.fulfilled, interceptor.rejected);
  });

  this.interceptors.response.forEach(function pushResponseInterceptors(interceptor) {
    chain.push(interceptor.fulfilled, interceptor.rejected);
  });

  while (chain.length) {
    promise = promise.then(chain.shift(), chain.shift());
  }

  return promise;
};

// Provide aliases for supported request methods
utils.forEach(['delete', 'get', 'head'], function forEachMethodNoData(method) {
  /*eslint func-names:0*/
  Axios.prototype[method] = function(url, config) {
    return this.request(utils.merge(config || {}, {
      method: method,
      url: url
    }));
  };
});

utils.forEach(['post', 'put', 'patch'], function forEachMethodWithData(method) {
  /*eslint func-names:0*/
  Axios.prototype[method] = function(url, data, config) {
    return this.request(utils.merge(config || {}, {
      method: method,
      url: url,
      data: data
    }));
  };
});

module.exports = Axios;


/***/ }),
/* 17 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var utils = __webpack_require__(1);

function InterceptorManager() {
  this.handlers = [];
}

/**
 * Add a new interceptor to the stack
 *
 * @param {Function} fulfilled The function to handle `then` for a `Promise`
 * @param {Function} rejected The function to handle `reject` for a `Promise`
 *
 * @return {Number} An ID used to remove interceptor later
 */
InterceptorManager.prototype.use = function use(fulfilled, rejected) {
  this.handlers.push({
    fulfilled: fulfilled,
    rejected: rejected
  });
  return this.handlers.length - 1;
};

/**
 * Remove an interceptor from the stack
 *
 * @param {Number} id The ID that was returned by `use`
 */
InterceptorManager.prototype.eject = function eject(id) {
  if (this.handlers[id]) {
    this.handlers[id] = null;
  }
};

/**
 * Iterate over all the registered interceptors
 *
 * This method is particularly useful for skipping over any
 * interceptors that may have become `null` calling `eject`.
 *
 * @param {Function} fn The function to call for each interceptor
 */
InterceptorManager.prototype.forEach = function forEach(fn) {
  utils.forEach(this.handlers, function forEachHandler(h) {
    if (h !== null) {
      fn(h);
    }
  });
};

module.exports = InterceptorManager;


/***/ }),
/* 18 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var utils = __webpack_require__(1);
var transformData = __webpack_require__(21);
var isCancel = __webpack_require__(9);
var defaults = __webpack_require__(5);

/**
 * Throws a `Cancel` if cancellation has been requested.
 */
function throwIfCancellationRequested(config) {
  if (config.cancelToken) {
    config.cancelToken.throwIfRequested();
  }
}

/**
 * Dispatch a request to the server using the configured adapter.
 *
 * @param {object} config The config that is to be used for the request
 * @returns {Promise} The Promise to be fulfilled
 */
module.exports = function dispatchRequest(config) {
  throwIfCancellationRequested(config);

  // Ensure headers exist
  config.headers = config.headers || {};

  // Transform request data
  config.data = transformData(
    config.data,
    config.headers,
    config.transformRequest
  );

  // Flatten headers
  config.headers = utils.merge(
    config.headers.common || {},
    config.headers[config.method] || {},
    config.headers || {}
  );

  utils.forEach(
    ['delete', 'get', 'head', 'post', 'put', 'patch', 'common'],
    function cleanHeaderConfig(method) {
      delete config.headers[method];
    }
  );

  var adapter = config.adapter || defaults.adapter;

  return adapter(config).then(function onAdapterResolution(response) {
    throwIfCancellationRequested(config);

    // Transform response data
    response.data = transformData(
      response.data,
      response.headers,
      config.transformResponse
    );

    return response;
  }, function onAdapterRejection(reason) {
    if (!isCancel(reason)) {
      throwIfCancellationRequested(config);

      // Transform response data
      if (reason && reason.response) {
        reason.response.data = transformData(
          reason.response.data,
          reason.response.headers,
          config.transformResponse
        );
      }
    }

    return Promise.reject(reason);
  });
};


/***/ }),
/* 19 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


/**
 * Update an Error with the specified config, error code, and response.
 *
 * @param {Error} error The error to update.
 * @param {Object} config The config.
 * @param {string} [code] The error code (for example, 'ECONNABORTED').
 @ @param {Object} [response] The response.
 * @returns {Error} The error.
 */
module.exports = function enhanceError(error, config, code, response) {
  error.config = config;
  if (code) {
    error.code = code;
  }
  error.response = response;
  return error;
};


/***/ }),
/* 20 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var createError = __webpack_require__(10);

/**
 * Resolve or reject a Promise based on response status.
 *
 * @param {Function} resolve A function that resolves the promise.
 * @param {Function} reject A function that rejects the promise.
 * @param {object} response The response.
 */
module.exports = function settle(resolve, reject, response) {
  var validateStatus = response.config.validateStatus;
  // Note: status is not exposed by XDomainRequest
  if (!response.status || !validateStatus || validateStatus(response.status)) {
    resolve(response);
  } else {
    reject(createError(
      'Request failed with status code ' + response.status,
      response.config,
      null,
      response
    ));
  }
};


/***/ }),
/* 21 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var utils = __webpack_require__(1);

/**
 * Transform the data for a request or a response
 *
 * @param {Object|String} data The data to be transformed
 * @param {Array} headers The headers for the request or response
 * @param {Array|Function} fns A single function or Array of functions
 * @returns {*} The resulting transformed data
 */
module.exports = function transformData(data, headers, fns) {
  /*eslint no-param-reassign:0*/
  utils.forEach(fns, function transform(fn) {
    data = fn(data, headers);
  });

  return data;
};


/***/ }),
/* 22 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


// btoa polyfill for IE<10 courtesy https://github.com/davidchambers/Base64.js

var chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';

function E() {
  this.message = 'String contains an invalid character';
}
E.prototype = new Error;
E.prototype.code = 5;
E.prototype.name = 'InvalidCharacterError';

function btoa(input) {
  var str = String(input);
  var output = '';
  for (
    // initialize result and counter
    var block, charCode, idx = 0, map = chars;
    // if the next str index does not exist:
    //   change the mapping table to "="
    //   check if d has no fractional digits
    str.charAt(idx | 0) || (map = '=', idx % 1);
    // "8 - idx % 1 * 8" generates the sequence 2, 4, 6, 8
    output += map.charAt(63 & block >> 8 - idx % 1 * 8)
  ) {
    charCode = str.charCodeAt(idx += 3 / 4);
    if (charCode > 0xFF) {
      throw new E();
    }
    block = block << 8 | charCode;
  }
  return output;
}

module.exports = btoa;


/***/ }),
/* 23 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var utils = __webpack_require__(1);

function encode(val) {
  return encodeURIComponent(val).
    replace(/%40/gi, '@').
    replace(/%3A/gi, ':').
    replace(/%24/g, '$').
    replace(/%2C/gi, ',').
    replace(/%20/g, '+').
    replace(/%5B/gi, '[').
    replace(/%5D/gi, ']');
}

/**
 * Build a URL by appending params to the end
 *
 * @param {string} url The base of the url (e.g., http://www.google.com)
 * @param {object} [params] The params to be appended
 * @returns {string} The formatted url
 */
module.exports = function buildURL(url, params, paramsSerializer) {
  /*eslint no-param-reassign:0*/
  if (!params) {
    return url;
  }

  var serializedParams;
  if (paramsSerializer) {
    serializedParams = paramsSerializer(params);
  } else if (utils.isURLSearchParams(params)) {
    serializedParams = params.toString();
  } else {
    var parts = [];

    utils.forEach(params, function serialize(val, key) {
      if (val === null || typeof val === 'undefined') {
        return;
      }

      if (utils.isArray(val)) {
        key = key + '[]';
      }

      if (!utils.isArray(val)) {
        val = [val];
      }

      utils.forEach(val, function parseValue(v) {
        if (utils.isDate(v)) {
          v = v.toISOString();
        } else if (utils.isObject(v)) {
          v = JSON.stringify(v);
        }
        parts.push(encode(key) + '=' + encode(v));
      });
    });

    serializedParams = parts.join('&');
  }

  if (serializedParams) {
    url += (url.indexOf('?') === -1 ? '?' : '&') + serializedParams;
  }

  return url;
};


/***/ }),
/* 24 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


/**
 * Creates a new URL by combining the specified URLs
 *
 * @param {string} baseURL The base URL
 * @param {string} relativeURL The relative URL
 * @returns {string} The combined URL
 */
module.exports = function combineURLs(baseURL, relativeURL) {
  return baseURL.replace(/\/+$/, '') + '/' + relativeURL.replace(/^\/+/, '');
};


/***/ }),
/* 25 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var utils = __webpack_require__(1);

module.exports = (
  utils.isStandardBrowserEnv() ?

  // Standard browser envs support document.cookie
  (function standardBrowserEnv() {
    return {
      write: function write(name, value, expires, path, domain, secure) {
        var cookie = [];
        cookie.push(name + '=' + encodeURIComponent(value));

        if (utils.isNumber(expires)) {
          cookie.push('expires=' + new Date(expires).toGMTString());
        }

        if (utils.isString(path)) {
          cookie.push('path=' + path);
        }

        if (utils.isString(domain)) {
          cookie.push('domain=' + domain);
        }

        if (secure === true) {
          cookie.push('secure');
        }

        document.cookie = cookie.join('; ');
      },

      read: function read(name) {
        var match = document.cookie.match(new RegExp('(^|;\\s*)(' + name + ')=([^;]*)'));
        return (match ? decodeURIComponent(match[3]) : null);
      },

      remove: function remove(name) {
        this.write(name, '', Date.now() - 86400000);
      }
    };
  })() :

  // Non standard browser env (web workers, react-native) lack needed support.
  (function nonStandardBrowserEnv() {
    return {
      write: function write() {},
      read: function read() { return null; },
      remove: function remove() {}
    };
  })()
);


/***/ }),
/* 26 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


/**
 * Determines whether the specified URL is absolute
 *
 * @param {string} url The URL to test
 * @returns {boolean} True if the specified URL is absolute, otherwise false
 */
module.exports = function isAbsoluteURL(url) {
  // A URL is considered absolute if it begins with "<scheme>://" or "//" (protocol-relative URL).
  // RFC 3986 defines scheme name as a sequence of characters beginning with a letter and followed
  // by any combination of letters, digits, plus, period, or hyphen.
  return /^([a-z][a-z\d\+\-\.]*:)?\/\//i.test(url);
};


/***/ }),
/* 27 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var utils = __webpack_require__(1);

module.exports = (
  utils.isStandardBrowserEnv() ?

  // Standard browser envs have full support of the APIs needed to test
  // whether the request URL is of the same origin as current location.
  (function standardBrowserEnv() {
    var msie = /(msie|trident)/i.test(navigator.userAgent);
    var urlParsingNode = document.createElement('a');
    var originURL;

    /**
    * Parse a URL to discover it's components
    *
    * @param {String} url The URL to be parsed
    * @returns {Object}
    */
    function resolveURL(url) {
      var href = url;

      if (msie) {
        // IE needs attribute set twice to normalize properties
        urlParsingNode.setAttribute('href', href);
        href = urlParsingNode.href;
      }

      urlParsingNode.setAttribute('href', href);

      // urlParsingNode provides the UrlUtils interface - http://url.spec.whatwg.org/#urlutils
      return {
        href: urlParsingNode.href,
        protocol: urlParsingNode.protocol ? urlParsingNode.protocol.replace(/:$/, '') : '',
        host: urlParsingNode.host,
        search: urlParsingNode.search ? urlParsingNode.search.replace(/^\?/, '') : '',
        hash: urlParsingNode.hash ? urlParsingNode.hash.replace(/^#/, '') : '',
        hostname: urlParsingNode.hostname,
        port: urlParsingNode.port,
        pathname: (urlParsingNode.pathname.charAt(0) === '/') ?
                  urlParsingNode.pathname :
                  '/' + urlParsingNode.pathname
      };
    }

    originURL = resolveURL(window.location.href);

    /**
    * Determine if a URL shares the same origin as the current location
    *
    * @param {String} requestURL The URL to test
    * @returns {boolean} True if URL shares the same origin, otherwise false
    */
    return function isURLSameOrigin(requestURL) {
      var parsed = (utils.isString(requestURL)) ? resolveURL(requestURL) : requestURL;
      return (parsed.protocol === originURL.protocol &&
            parsed.host === originURL.host);
    };
  })() :

  // Non standard browser envs (web workers, react-native) lack needed support.
  (function nonStandardBrowserEnv() {
    return function isURLSameOrigin() {
      return true;
    };
  })()
);


/***/ }),
/* 28 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var utils = __webpack_require__(1);

module.exports = function normalizeHeaderName(headers, normalizedName) {
  utils.forEach(headers, function processHeader(value, name) {
    if (name !== normalizedName && name.toUpperCase() === normalizedName.toUpperCase()) {
      headers[normalizedName] = value;
      delete headers[name];
    }
  });
};


/***/ }),
/* 29 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var utils = __webpack_require__(1);

/**
 * Parse headers into an object
 *
 * ```
 * Date: Wed, 27 Aug 2014 08:58:49 GMT
 * Content-Type: application/json
 * Connection: keep-alive
 * Transfer-Encoding: chunked
 * ```
 *
 * @param {String} headers Headers needing to be parsed
 * @returns {Object} Headers parsed into an object
 */
module.exports = function parseHeaders(headers) {
  var parsed = {};
  var key;
  var val;
  var i;

  if (!headers) { return parsed; }

  utils.forEach(headers.split('\n'), function parser(line) {
    i = line.indexOf(':');
    key = utils.trim(line.substr(0, i)).toLowerCase();
    val = utils.trim(line.substr(i + 1));

    if (key) {
      parsed[key] = parsed[key] ? parsed[key] + ', ' + val : val;
    }
  });

  return parsed;
};


/***/ }),
/* 30 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


/**
 * Syntactic sugar for invoking a function and expanding an array for arguments.
 *
 * Common use case would be to use `Function.prototype.apply`.
 *
 *  ```js
 *  function f(x, y, z) {}
 *  var args = [1, 2, 3];
 *  f.apply(null, args);
 *  ```
 *
 * With `spread` this example can be re-written.
 *
 *  ```js
 *  spread(function(x, y, z) {})([1, 2, 3]);
 *  ```
 *
 * @param {Function} callback
 * @returns {Function}
 */
module.exports = function spread(callback) {
  return function wrap(arr) {
    return callback.apply(null, arr);
  };
};


/***/ }),
/* 31 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = {

    data: function data() {
        return {
            notifications: {}
        };
    },

    methods: {
        getNotifications: function getNotifications() {
            var _this = this;

            axios.get('/api/notifications/requests').then(function (response) {
                _this.notifications = response.data['notifications'];
                console.log(response.data['notifications']);
            });
        },
        markAsRead: function markAsRead() {
            axios.post('/api/notifications/read').then(function (response) {
                console.log('Notifications are read');
            });
        }
    },

    mounted: function mounted() {
        console.log('Notifications-Table component mounted!');

        this.getNotifications();
        this.markAsRead();

        Event.$emit('readNotifications');
    }
};

/***/ }),
/* 32 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = {

    data: function data() {
        return {
            unreadNotifications: {}
        };
    },

    methods: {
        getNotifications: function getNotifications() {
            var _this = this;

            axios.get('/api/notifications').then(function (response) {
                _this.unreadNotifications = response.data['unread'];
            });

            this.listenOnStudentToSchoolConnection();
        },

        listenOnStudentToSchoolConnection: function listenOnStudentToSchoolConnection() {
            var pusher = new Pusher('943717bf5769e7b902b4', {
                cluster: 'eu',
                encrypted: true
            });

            var channel = pusher.subscribe('school.' + window.Connection);
            channel.bind('App\\Events\\StudentAppliedToSchool', function (data) {
                this.getNotifications();
            }.bind(this));

            channel.bind('App\\Events\\TeacherAppliedToSchool', function (data) {
                this.getNotifications();
            }.bind(this));
        }
    },

    mounted: function mounted() {
        var _this2 = this;

        console.log('Notifications Component ready.');

        this.getNotifications();
        Event.$on('readNotifications', function () {
            return _this2.getNotifications();
        });
    }
};

/***/ }),
/* 33 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = {

    data: function data() {
        return {
            users: {}
        };
    },

    methods: {
        getUsers: function getUsers() {
            var _this = this;

            axios.get('/api/users/all').then(function (response) {
                _this.users = response.data['users'];
                console.log(_this.users);
            });
        }
    },

    mounted: function mounted() {
        console.log('Users-Table component mounted!');
        this.getUsers();
    }
};

/***/ }),
/* 34 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = {
    /*
     * The component's data.
     */
    data: function data() {
        return {
            tokens: []
        };
    },


    /**
     * Prepare the component (Vue 1.x).
     */
    ready: function ready() {
        this.prepareComponent();
    },


    /**
     * Prepare the component (Vue 2.x).
     */
    mounted: function mounted() {
        this.prepareComponent();
    },


    methods: {
        /**
         * Prepare the component (Vue 2.x).
         */
        prepareComponent: function prepareComponent() {
            this.getTokens();
        },


        /**
         * Get all of the authorized tokens for the user.
         */
        getTokens: function getTokens() {
            var _this = this;

            this.$http.get('/oauth/tokens').then(function (response) {
                _this.tokens = response.data;
            });
        },


        /**
         * Revoke the given token.
         */
        revoke: function revoke(token) {
            var _this2 = this;

            this.$http.delete('/oauth/tokens/' + token.id).then(function (response) {
                _this2.getTokens();
            });
        }
    }
};

/***/ }),
/* 35 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function($) {Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = {
    /*
     * The component's data.
     */
    data: function data() {
        return {
            clients: [],

            createForm: {
                errors: [],
                name: '',
                redirect: ''
            },

            editForm: {
                errors: [],
                name: '',
                redirect: ''
            }
        };
    },


    /**
     * Prepare the component (Vue 1.x).
     */
    ready: function ready() {
        this.prepareComponent();
    },


    /**
     * Prepare the component (Vue 2.x).
     */
    mounted: function mounted() {
        this.prepareComponent();
    },


    methods: {
        /**
         * Prepare the component.
         */
        prepareComponent: function prepareComponent() {
            this.getClients();

            $('#modal-create-client').on('shown.bs.modal', function () {
                $('#create-client-name').focus();
            });

            $('#modal-edit-client').on('shown.bs.modal', function () {
                $('#edit-client-name').focus();
            });
        },


        /**
         * Get all of the OAuth clients for the user.
         */
        getClients: function getClients() {
            var _this = this;

            this.$http.get('/oauth/clients').then(function (response) {
                _this.clients = response.data;
            });
        },


        /**
         * Show the form for creating new clients.
         */
        showCreateClientForm: function showCreateClientForm() {
            $('#modal-create-client').modal('show');
        },


        /**
         * Create a new OAuth client for the user.
         */
        store: function store() {
            this.persistClient('post', '/oauth/clients', this.createForm, '#modal-create-client');
        },


        /**
         * Edit the given client.
         */
        edit: function edit(client) {
            this.editForm.id = client.id;
            this.editForm.name = client.name;
            this.editForm.redirect = client.redirect;

            $('#modal-edit-client').modal('show');
        },


        /**
         * Update the client being edited.
         */
        update: function update() {
            this.persistClient('put', '/oauth/clients/' + this.editForm.id, this.editForm, '#modal-edit-client');
        },


        /**
         * Persist the client to storage using the given form.
         */
        persistClient: function persistClient(method, uri, form, modal) {
            var _this2 = this;

            form.errors = [];

            this.$http[method](uri, form).then(function (response) {
                _this2.getClients();

                form.name = '';
                form.redirect = '';
                form.errors = [];

                $(modal).modal('hide');
            }).catch(function (response) {
                if (_typeof(response.data) === 'object') {
                    form.errors = _.flatten(_.toArray(response.data));
                } else {
                    form.errors = ['Something went wrong. Please try again.'];
                }
            });
        },


        /**
         * Destroy the given client.
         */
        destroy: function destroy(client) {
            var _this3 = this;

            this.$http.delete('/oauth/clients/' + client.id).then(function (response) {
                _this3.getClients();
            });
        }
    }
};
/* WEBPACK VAR INJECTION */}.call(__webpack_exports__, __webpack_require__(4)))

/***/ }),
/* 36 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function($) {Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = {
    /*
     * The component's data.
     */
    data: function data() {
        return {
            accessToken: null,

            tokens: [],
            scopes: [],

            form: {
                name: '',
                scopes: [],
                errors: []
            }
        };
    },


    /**
     * Prepare the component (Vue 1.x).
     */
    ready: function ready() {
        this.prepareComponent();
    },


    /**
     * Prepare the component (Vue 2.x).
     */
    mounted: function mounted() {
        this.prepareComponent();
    },


    methods: {
        /**
         * Prepare the component.
         */
        prepareComponent: function prepareComponent() {
            this.getTokens();
            this.getScopes();

            $('#modal-create-token').on('shown.bs.modal', function () {
                $('#create-token-name').focus();
            });
        },


        /**
         * Get all of the personal access tokens for the user.
         */
        getTokens: function getTokens() {
            var _this = this;

            this.$http.get('/oauth/personal-access-tokens').then(function (response) {
                _this.tokens = response.data;
            });
        },


        /**
         * Get all of the available scopes.
         */
        getScopes: function getScopes() {
            var _this2 = this;

            this.$http.get('/oauth/scopes').then(function (response) {
                _this2.scopes = response.data;
            });
        },


        /**
         * Show the form for creating new tokens.
         */
        showCreateTokenForm: function showCreateTokenForm() {
            $('#modal-create-token').modal('show');
        },


        /**
         * Create a new personal access token.
         */
        store: function store() {
            var _this3 = this;

            this.accessToken = null;

            this.form.errors = [];

            this.$http.post('/oauth/personal-access-tokens', this.form).then(function (response) {
                _this3.form.name = '';
                _this3.form.scopes = [];
                _this3.form.errors = [];

                _this3.tokens.push(response.data.token);

                _this3.showAccessToken(response.data.accessToken);
            }).catch(function (response) {
                if (_typeof(response.data) === 'object') {
                    _this3.form.errors = _.flatten(_.toArray(response.data));
                } else {
                    _this3.form.errors = ['Something went wrong. Please try again.'];
                }
            });
        },


        /**
         * Toggle the given scope in the list of assigned scopes.
         */
        toggleScope: function toggleScope(scope) {
            if (this.scopeIsAssigned(scope)) {
                this.form.scopes = _.reject(this.form.scopes, function (s) {
                    return s == scope;
                });
            } else {
                this.form.scopes.push(scope);
            }
        },


        /**
         * Determine if the given scope has been assigned to the token.
         */
        scopeIsAssigned: function scopeIsAssigned(scope) {
            return _.indexOf(this.form.scopes, scope) >= 0;
        },


        /**
         * Show the given access token to the user.
         */
        showAccessToken: function showAccessToken(accessToken) {
            $('#modal-create-token').modal('hide');

            this.accessToken = accessToken;

            $('#modal-access-token').modal('show');
        },


        /**
         * Revoke the given token.
         */
        revoke: function revoke(token) {
            var _this4 = this;

            this.$http.delete('/oauth/personal-access-tokens/' + token.id).then(function (response) {
                _this4.getTokens();
            });
        }
    }
};
/* WEBPACK VAR INJECTION */}.call(__webpack_exports__, __webpack_require__(4)))

/***/ }),
/* 37 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = {

    data: function data() {
        return {
            notifications: {}
        };
    },

    methods: {
        getNotifications: function getNotifications() {
            var _this = this;

            axios.get('/api/notifications/all').then(function (response) {
                _this.notifications = response.data['notifications'];
                console.log(_this.notifications);
            });
        }
    },

    mounted: function mounted() {
        console.log('Notifications-Table component mounted!');
        this.getNotifications();
    }
};

/***/ }),
/* 38 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function($) {Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vue_tinymce__ = __webpack_require__(84);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_vue_tinymce___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0_vue_tinymce__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//


Vue.use(__WEBPACK_IMPORTED_MODULE_0_vue_tinymce___default.a);

var max_chars = 100; //max characters
var chars_without_html = 0;

/* harmony default export */ __webpack_exports__["default"] = {
    computed: {
        studies: function studies() {
            return this.all_studies;
        }
    },
    mounted: function mounted() {
        var _this = this;

        var vm = this;

        this.getCheckedStudies();

        Event.$on('saveScholarship', function () {
            return _this.saveScholarship();
        });

        Event.$on('datePick', function (val) {
            vm.end_at = val;
            vm.errorDate();
        });
    },
    data: function data() {
        return {
            financial_id: 1,
            financial_amount: 20,
            criteria_id: 1,
            step1Select: 'reduce', // set the default value
            step3Select: 'talent',
            all_studies: [''],
            selectedLevel: 0,
            selectedSection: 0,
            selectedStudy: 0,
            studiesArray: [],
            checkedStudies: [],
            studyTable: [],
            levelsName: [],
            sectionsName: [],
            studiesName: [],
            sectionsCounter: 0,
            exams: false,
            studiesId: [],
            end_at: null,
            today: null,
            col_iek_eng_dan_mus: false,
            error: false,
            content: '<p> Αναφέρετε εδώ τους <strong> Όρους και Προϋποθεσεις </strong> της Υποτροφίας</p>',
            terms: null,
            withTerms: false,
            tinyOptions: {
                language_url: '/el.js',
                entity_encoding: "raw",
                height: 300,
                menubar: false,
                plugins: ['textcolor table autolink lists link image charmap print preview anchor', 'searchreplace visualblocks code', 'insertdatetime media table contextmenu paste code'],
                setup: function setup(ed) {
                    ed.on("KeyDown", function (ed, evt) {
                        chars_without_html = $.trim(tinyMCE.activeEditor.getContent().replace(/(<([^>]+)>)/ig, "")).length;
                        var key = ed.keyCode;
                        console.log(ed.keyCode);

                        var remaining = max_chars - chars_without_html;

                        $('#chars_left').html(remaining);

                        if (remaining <= 0 && key != 8 && key != 46) {
                            ed.stopPropagation();
                            ed.preventDefault();
                            $('#chars_left').html('ΟΧΙ ΑΛΛΟ!');
                        }
                    });
                },
                toolbar: 'undo redo | insert copy paste | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | forecolor backcolor | table '
            }
        };
    },

    methods: {
        eww: function eww() {
            console.log('as');
        },
        tinyMCE: function tinyMCE() {},

        todayDate: function todayDate() {
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1; //January is 0!
            var yyyy = today.getFullYear();

            if (dd < 10) {
                dd = '0' + dd;
            }

            if (mm < 10) {
                mm = '0' + mm;
            }

            today = dd + '-' + mm + '-' + yyyy;
            // today = mm + '-' + dd + '-' + yyyy
            //                console.log(today)
            this.end_at = today;
            this.today = today;
        },

        getStudies: function getStudies() {
            var _this2 = this;

            axios.get('/api/school/studies/').then(function (response) {
                console.log('API 1 Full Studies OK ');
                _this2.all_studies = response.data['levels'];
                _this2.changeLevel();
                _this2.init();
            });
        },
        changeLevel: function changeLevel() {
            this.selectedSection = 0;
            this.selectedStudy = 0;
            this.pullStudies();
            this.countSections();
        },
        countSections: function countSections() {
            this.sectionsCounter = 0;
            for (var section in this.sectionsName[this.selectedLevel]) {
                this.sectionsCounter++;
            }
        },
        getCheckedStudies: function getCheckedStudies() {
            var _this3 = this;

            axios.get('/api/school/getSchoolStudies').then(function (response) {
                _this3.studyTable = response.data;
                //                console.log(this.studyTable )
                var parent = _this3;
                console.log('API 2 checkedStudies initial push OK');
                _this3.studyTable.forEach(function (studies) {
                    parent.checkedStudies.push(studies[0].id);
                });
                _this3.getStudies();
            });
        },

        init: function init() {
            this.todayDate();

            /* This condition MUST CHANGE .. needed School_Type_ID from an API */
            if (this.studyTable[0][0].section[0].level.id < 7 || this.studyTable[0][0].section[0].level.id > 21) {
                this.col_iek_eng_dan_mus = true;
            }

            //                console.log(this.studyTable);

            console.log('init DONE ! checkedStudies.length=' + this.checkedStudies.length);
            for (var level in this.studyTable) {
                var i = this.studyTable[level][0].section[0].level;
                this.levelsName[i.id] = i.name;
                //                    console.log(i.id)
            }
            //                console.log(this.levelsName);

            this.levelsName = this.levelsName.filter(function (e) {
                return e;
            }); //** Delete Empty Values **//

            for (level in this.levelsName) {
                this.sectionsName[level] = [];
                this.studiesName[level] = [];
                var section = 0;
                for (var study in this.studyTable) {
                    var lv = this.studyTable[study][0].section[0].level.name;
                    var sec = this.studyTable[study][0].section[0].name;
                    if (this.levelsName[level] == lv) {
                        var finded = false;
                        for (var i in this.sectionsName[level]) {
                            if (this.sectionsName[level][i] == sec) {
                                finded = true;
                            }
                        }
                        if (!finded) {
                            this.studiesName[level][section] = [];
                            this.sectionsName[level][section] = sec;
                            section++;
                        }
                    }
                }
            }
            //                console.log(this.levelsName);
            this.pullStudies();
            this.countSections();
            this.todayDate();
        },
        pullStudies: function pullStudies() {

            this.studiesArray = [];
            this.studiesId = [];
            for (var study in this.studyTable) {
                var levNm = this.studyTable[study][0].section[0].level.name;
                var secNm = this.studyTable[study][0].section[0].name;
                var stdNm = this.studyTable[study][0];
                //                        console.log(stdNm.id)
                /* This condition may have to  CHANGE  for some schools types.. */
                if (levNm == this.levelsName[this.selectedLevel] && secNm == this.sectionsName[this.selectedLevel][this.selectedSection] || !this.col_iek_eng_dan_mus) {
                    this.studiesArray.push(stdNm.name);
                    this.studiesId.push(stdNm.id);
                    //                                console.log(stdNm.id)
                }
                this.selectedStudy = 0;
            }
        },
        errorDate: function errorDate() {},

        saveScholarship: function saveScholarship() {
            var _this4 = this;

            var temp = 0;
            if (this.exams) temp = 1;
            if (!this.col_iek_eng_dan_mus) {
                this.selectedLevel = this.selectedStudy;
            }
            axios.post('/api/scholarship/save', {
                'school_id': window.Connection,
                'financial_id': this.financial_id,
                'financial_amount': this.financial_amount,
                'study_id': this.studiesId[this.selectedStudy],
                'criteria_id': this.criteria_id,
                'end_at': this.end_at,
                'winner_id': 0,
                'exams': temp,
                'terms': this.terms
            }).then(function (response) {
                console.log('END AT >> ' + _this4.end_at);
                console.log('SAVE study= ' + _this4.studiesArray[_this4.selectedStudy]);
                console.log('SAVE study_id= ' + _this4.studiesId[_this4.selectedStudy]);
                console.log(response.data);
                window.location = response.data.redirect;
            });
        }
    }
};
/* WEBPACK VAR INJECTION */}.call(__webpack_exports__, __webpack_require__(4)))

/***/ }),
/* 39 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = {

    data: function data() {
        return {
            scholarships: {},
            showLevel: false
        };
    },

    methods: {
        getScholarships: function getScholarships() {
            var _this = this;

            axios.get('/api/scholarship/' + window.Connection).then(function (response) {
                //                        console.logo(response.data)
                _this.scholarships = response.data;
                if (_this.scholarships[0].level.id < 4 || _this.scholarships[0].level.id > 21) {
                    _this.showLevel = true;
                }
            });
        }
    },

    mounted: function mounted() {
        console.log('Scholarship-Table component mounted!');
        this.getScholarships();
    }
};

/***/ }),
/* 40 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = {

    data: function data() {
        return {
            schools: {}
        };
    },

    methods: {
        getSchools: function getSchools() {
            var _this = this;

            axios.get('/api/schools/all').then(function (response) {
                _this.schools = response.data['schools'];
                console.log(_this.schools);
            });
        }
    },

    mounted: function mounted() {
        console.log('Schools-Table component mounted!');

        this.getSchools();
    }
};

/***/ }),
/* 41 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = {
    data: function data() {
        return {
            students: [],
            searchStr: "",
            selection: true,
            sortReverse: false,
            sortType: 'name'
        };
    },
    computed: {
        filteredStudies: function filteredStudies() {
            var filtered_array1 = this.students,
                searchString = this.searchStr;

            if (!searchString) {
                return filtered_array1;
            }

            searchString = searchString.trim().toLowerCase();
            filtered_array1 = filtered_array1.filter(function (item) {
                if (item.name.toLowerCase().indexOf(searchString) !== -1 || item.nameL.toLowerCase().indexOf(searchString) !== -1 || item.nameENG.toLowerCase().indexOf(searchString) !== -1) {
                    return item;
                }
            });
            return filtered_array1;
        }
    },

    methods: {
        nameChangeSort: function nameChangeSort() {
            this.sortType = 'name';
            this.changeSortType(this.sortType);
        },
        emailChangeSort: function emailChangeSort() {
            this.sortType = 'email';
            this.changeSortType(this.sortType);
        },

        changeSortType: function changeSortType() {
            this.sortReverse = !this.sortReverse;
            var st1 = this.students;
            st1.sort(this.dynamicSort(this.sortType, this.sortReverse));
            this.students = st1;
            return this.students;
        },
        dynamicSort: function dynamicSort(property, order) {
            var sortOrder = 1;
            if (order) {
                sortOrder = -1;
            }

            if (property[0] === "-") {
                sortOrder = -1;
                property = property.substr(1);
            }
            return function (a, b) {
                var result = a[property] < b[property] ? -1 : a[property] > b[property] ? 1 : 0;
                return result * sortOrder;
            };
        },

        getAllStudents: function getAllStudents() {
            var _this = this;

            //                axios.get('/api/users/all')
            axios.get('/connected/students').then(function (response) {
                _this.students = response.data['students'];
                var st1 = _this.students;
                st1.sort(_this.dynamicSort(_this.sortType, _this.sortReverse));
                for (var i in st1) {
                    st1[i].name = st1[i].name.toLowerCase();
                }
                var temp = JSON.stringify(st1).replace(/ά/g, "α").replace(/έ/g, "ε").replace(/ή/g, "η").replace(/ί/g, "ι").replace(/ό/g, "ο").replace(/ύ/g, "υ");
                var st2 = JSON.parse(temp);

                var temp2 = JSON.stringify(st1).replace(/ά/g, "a").replace(/α/g, "a").replace(/έ/g, "e").replace(/ε/g, "e").replace(/ή/g, "h").replace(/η/g, "h").replace(/ί/g, "i").replace(/ι/g, "i").replace(/ό/g, "o").replace(/ο/g, "o").replace(/υ/g, "y").replace(/ύ/g, "y").replace(/ω/g, "v").replace(/ώ/g, "v").replace(/β/g, "b").replace(/γ/g, "g").replace(/δ/g, "d").replace(/ζ/g, "z").replace(/θ/g, "u").replace(/κ/g, "k").replace(/λ/g, "l").replace(/μ/g, "m").replace(/ν/g, "n").replace(/ξ/g, "j").replace(/π/g, "p").replace(/ρ/g, "r").replace(/σ/g, "s").replace(/ς/g, "s").replace(/τ/g, "t").replace(/φ/g, "f").replace(/χ/g, "x").replace(/ψ/g, "c");
                var st3 = JSON.parse(temp2);

                for (var i in st1) {
                    st1[i].nameL = st2[i].name;
                    st1[i].nameENG = st3[i].name;
                }
                _this.students = st1;
            });
        },
        changeView: function changeView() {
            this.selection = !this.selection;
        }
    },

    mounted: function mounted() {
        console.log('Students-Table component mounted!');
        this.getAllStudents();
    }
};

/***/ }),
/* 42 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function($) {Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = {
    computed: {
        studies: function studies() {
            return this.all_studies;
        }
    },

    data: function data() {
        return {
            all_studies: [''],
            checkedStudies: [],
            selectedLevel: 0,
            selectedSection: 0,
            selectedStudy: 0,
            status: [],
            sectionsStatus: [],
            studiesStatus: [],
            levels: [],
            sections: [],
            testClass: true,
            col_iek_eng_dan_mus: false,
            checkedStudiesTemp: {}
        };
    },
    mounted: function mounted() {
        this.getCheckedStudies();
    },

    methods: {
        getCheckedStudies: function getCheckedStudies() {
            var _this = this;

            axios.get('/api/school/getSchoolStudies').then(function (response) {
                _this.testTable = response.data;
                var parent = _this;
                _this.testTable.forEach(function (studies) {
                    parent.checkedStudies.push(studies[0].id);
                    console.log(' API 2 checkedStudies initial push OK');
                });
                _this.getStudies();
            }, function (success) {
                console.log('ads');
            });
        },
        getStudies: function getStudies() {
            var _this2 = this;

            axios.get('/api/school/studies/').then(function (response) {
                console.log('API 1 Full Studies OK ');
                _this2.all_studies = response.data['levels'];
                _this2.createTableStatus();
            });
        },
        setSchoolStudies: function setSchoolStudies(schoolCheckedStudies) {
            axios.post('/api/school/studies', { checkedStudies: this.checkedStudies }).then(function (response) {
                console.log(response.data);
            });
        },
        createTableStatus: function createTableStatus() {
            console.log('createTable DONE !' + this.all_studies.length);
            for (var level = 0; level < this.all_studies.length; level++) {
                var i = this.all_studies[level].id;
                this.levels[i] = 0;
                this.sections[i] = [];
                this.sectionsStatus[level] = [];
                this.studiesStatus[level] = [];

                for (var section = 0; section < this.all_studies[level].section.length; section++) {
                    var j = this.all_studies[level].section[section].id;
                    this.all_studies[level].section[section].status = false;
                    this.sectionsStatus[level][section] = false;
                    this.studiesStatus[level][section] = [];
                    this.sections[i][j] = 0;

                    for (var study = 0; study < this.all_studies[level].section[section].study.length; study++) {

                        if ($.inArray(this.all_studies[level].section[section].study[study].id, this.checkedStudies) == -1) {
                            this.all_studies[level].section[section].study[study].status = false;
                            this.studiesStatus[level][section][study] = false;
                        } else {
                            this.all_studies[level].section[section].study[study].status = true;
                            this.studiesStatus[level][section][study] = true;
                        }
                    }
                }
            }
            this.init();
        },

        IfCheck: function IfCheck(indexStudy, check, studyID, levelID, sectionID, indLev, indSec) {

            if (!this.col_iek_eng_dan_mus) {
                this.selectedLevel = indLev;
                this.selectedSection = indSec;
                console.log(indLev, indLev, indexStudy, studyID);
            }

            var i = this.selectedLevel;
            var j = this.selectedSection;
            var k = indexStudy;
            this.all_studies[i].section[j].study[k].status = !this.all_studies[i].section[j].study[k].status;
            this.studiesStatus[i][j][k] = !this.studiesStatus[i][j][k];
            if (!check) {
                this.levels[levelID]++; // level[0]=3 έχουμε επιλεξει 3 sections apo to level[0]
                this.sections[levelID][sectionID]++; // sections[0][0]=3 έχουμε επιλεξει 3 studies apo to sections[0][0]

                //                    NO PUSH with v-model >>> push item, pushes the item for 2nd time after v-model sync
                //              this.checkedStudies.push(studyID);

                console.log(this.checkedStudies);
                //                    console.log(this.checkedStudies.length)
            } else {
                this.levels[levelID]--;
                //                    this.sections[levelID][sectionID]--;
                var index = this.checkedStudies.indexOf(studyID);

                console.log(this.checkedStudies);
                //                    console.log(this.checkedStudies.length)

                //                    NO SPLICE  with vue model >>> splice item, delete the item for 2nd time
                //                    this.checkedStudies.splice(index, 1);
                console.log('studyId=' + studyID, ' index=' + index);
            }
            this.setSchoolStudies();
        },

        deleteStudy: function deleteStudy(i, j, k, studyID, levelID, sectionID) {
            this.all_studies[i].section[j].study[k].status = false;
            this.studiesStatus[i][j][k] = false;
            this.levels[levelID]--;
            this.sections[levelID][sectionID]--;
            var index = this.checkedStudies.indexOf(studyID);
            this.checkedStudies.splice(index, 1);
            this.setSchoolStudies();
        },

        clearAllStudies: function clearAllStudies() {
            for (var level in this.all_studies) {
                var i = this.all_studies[level].id;
                this.sections[i] = [];
                for (var section in this.all_studies[level].section) {
                    var j = this.all_studies[level].section[section].id;
                    this.sections[i][j] = 0;
                    for (var study in this.all_studies[level].section[section].study) {
                        this.all_studies[level].section[section].study[study].status = false;
                        this.studiesStatus[level][section][study] = false;
                    }
                }
            }
            this.levels.length = 0;

            this.checkedStudies = [];
            this.setSchoolStudies();
        },

        selectLevel: function selectLevel(le) {

            this.selectedLevel = le;
            this.selectedSection = 0;
        },

        selectSection: function selectSection(se) {
            this.selectedSection = se;
        },

        init: function init() {

            /* This condition MUST CHANGE .. needed School_Type_ID from an API */
            if (this.all_studies[0].section[0].study[0].name != this.all_studies[0].name) {
                this.col_iek_eng_dan_mus = true;
            }
            console.log(this.col_iek_eng_dan_mus);

            console.log('init DONE ! checkedStudies.length=' + this.checkedStudies.length);
            for (var level = 0; level < this.checkedStudies.length; level++) {
                var i = this.testTable[level][0].section[0].level.id;
                var j = this.testTable[level][0].section[0].id;
                this.levels[i]++;
                this.sections[i][j]++;
            }
            console.log(this.checkedStudies);
            console.log(this.checkedStudies.length);
        }
    }
};

$(document).ready(function () {
    $("#content").hide().fadeIn(2300);
});
/* WEBPACK VAR INJECTION */}.call(__webpack_exports__, __webpack_require__(4)))

/***/ }),
/* 43 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = {
    data: function data() {
        return {
            teachers: {}
        };
    },

    methods: {
        getAllTeachers: function getAllTeachers() {
            var _this = this;

            axios.get('/connected/teachers').then(function (response) {
                _this.teachers = response.data['teachers'];
            });
        }
    },

    mounted: function mounted() {
        console.log('Teachers-Table component mounted!');
        this.getAllTeachers();
    }
};

/***/ }),
/* 44 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
// window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

// window.$ = window.jQuery = require('jquery');
__webpack_require__(45);

/**
 * Vue is a modern JavaScript library for building interactive web interfaces
 * using reactive data binding and reusable components. Vue's API is clean
 * and simple, leaving you to focus on building your next great project.
 */

window.Vue = __webpack_require__(85);

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = __webpack_require__(13);

window.axios.defaults.headers.common = {
  'X-CSRF-TOKEN': Scholio.csrfToken,
  'X-Requested-With': 'XMLHttpRequest'
};

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from "laravel-echo"

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });

/***/ }),
/* 45 */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(jQuery) {/*!
=======
function(t){function e(t,e,n,i){var r,o,a,s,l,c,u,f=e&&e.ownerDocument,h=e?e.nodeType:9;if(n=n||[],"string"!=typeof t||!t||1!==h&&9!==h&&11!==h)return n;if(!i&&((e?e.ownerDocument||e:q)!==D&&j(e),e=e||D,L)){if(11!==h&&(l=gt.exec(t)))if(r=l[1]){if(9===h){if(!(a=e.getElementById(r)))return n;if(a.id===r)return n.push(a),n}else if(f&&(a=f.getElementById(r))&&M(e,a)&&a.id===r)return n.push(a),n}else{if(l[2])return Z.apply(n,e.getElementsByTagName(t)),n;if((r=l[3])&&w.getElementsByClassName&&e.getElementsByClassName)return Z.apply(n,e.getElementsByClassName(r)),n}if(w.qsa&&!W[t+" "]&&(!P||!P.test(t))){if(1!==h)f=e,u=t;else if("object"!==e.nodeName.toLowerCase()){for((s=e.getAttribute("id"))?s=s.replace(xt,wt):e.setAttribute("id",s=H),c=T(t),o=c.length;o--;)c[o]="#"+s+" "+p(c[o]);u=c.join(","),f=yt.test(t)&&d(e.parentNode)||e}if(u)try{return Z.apply(n,f.querySelectorAll(u)),n}catch(t){}finally{s===H&&e.removeAttribute("id")}}}return A(t.replace(st,"$1"),e,n,i)}function n(){function t(n,i){return e.push(n+" ")>C.cacheLength&&delete t[e.shift()],t[n+" "]=i}var e=[];return t}function i(t){return t[H]=!0,t}function r(t){var e=D.createElement("fieldset");try{return!!t(e)}catch(t){return!1}finally{e.parentNode&&e.parentNode.removeChild(e),e=null}}function o(t,e){for(var n=t.split("|"),i=n.length;i--;)C.attrHandle[n[i]]=e}function a(t,e){var n=e&&t,i=n&&1===t.nodeType&&1===e.nodeType&&t.sourceIndex-e.sourceIndex;if(i)return i;if(n)for(;n=n.nextSibling;)if(n===e)return-1;return t?1:-1}function s(t){return function(e){var n=e.nodeName.toLowerCase();return"input"===n&&e.type===t}}function l(t){return function(e){var n=e.nodeName.toLowerCase();return("input"===n||"button"===n)&&e.type===t}}function c(t){return function(e){return"form"in e?e.parentNode&&e.disabled===!1?"label"in e?"label"in e.parentNode?e.parentNode.disabled===t:e.disabled===t:e.isDisabled===t||e.isDisabled!==!t&&kt(e)===t:e.disabled===t:"label"in e&&e.disabled===t}}function u(t){return i(function(e){return e=+e,i(function(n,i){for(var r,o=t([],n.length,e),a=o.length;a--;)n[r=o[a]]&&(n[r]=!(i[r]=n[r]))})})}function d(t){return t&&"undefined"!=typeof t.getElementsByTagName&&t}function f(){}function p(t){for(var e=0,n=t.length,i="";e<n;e++)i+=t[e].value;return i}function h(t,e,n){var i=e.dir,r=e.next,o=r||i,a=n&&"parentNode"===o,s=B++;return e.first?function(e,n,r){for(;e=e[i];)if(1===e.nodeType||a)return t(e,n,r);return!1}:function(e,n,l){var c,u,d,f=[U,s];if(l){for(;e=e[i];)if((1===e.nodeType||a)&&t(e,n,l))return!0}else for(;e=e[i];)if(1===e.nodeType||a)if(d=e[H]||(e[H]={}),u=d[e.uniqueID]||(d[e.uniqueID]={}),r&&r===e.nodeName.toLowerCase())e=e[i]||e;else{if((c=u[o])&&c[0]===U&&c[1]===s)return f[2]=c[2];if(u[o]=f,f[2]=t(e,n,l))return!0}return!1}}function v(t){return t.length>1?function(e,n,i){for(var r=t.length;r--;)if(!t[r](e,n,i))return!1;return!0}:t[0]}function m(t,n,i){for(var r=0,o=n.length;r<o;r++)e(t,n[r],i);return i}function g(t,e,n,i,r){for(var o,a=[],s=0,l=t.length,c=null!=e;s<l;s++)(o=t[s])&&(n&&!n(o,i,r)||(a.push(o),c&&e.push(s)));return a}function y(t,e,n,r,o,a){return r&&!r[H]&&(r=y(r)),o&&!o[H]&&(o=y(o,a)),i(function(i,a,s,l){var c,u,d,f=[],p=[],h=a.length,v=i||m(e||"*",s.nodeType?[s]:s,[]),y=!t||!i&&e?v:g(v,f,t,s,l),_=n?o||(i?t:h||r)?[]:a:y;if(n&&n(y,_,s,l),r)for(c=g(_,p),r(c,[],s,l),u=c.length;u--;)(d=c[u])&&(_[p[u]]=!(y[p[u]]=d));if(i){if(o||t){if(o){for(c=[],u=_.length;u--;)(d=_[u])&&c.push(y[u]=d);o(null,_=[],c,l)}for(u=_.length;u--;)(d=_[u])&&(c=o?tt(i,d):f[u])>-1&&(i[c]=!(a[c]=d))}}else _=g(_===a?_.splice(h,_.length):_),o?o(null,a,_,l):Z.apply(a,_)})}function _(t){for(var e,n,i,r=t.length,o=C.relative[t[0].type],a=o||C.relative[" "],s=o?1:0,l=h(function(t){return t===e},a,!0),c=h(function(t){return tt(e,t)>-1},a,!0),u=[function(t,n,i){var r=!o&&(i||n!==E)||((e=n).nodeType?l(t,n,i):c(t,n,i));return e=null,r}];s<r;s++)if(n=C.relative[t[s].type])u=[h(v(u),n)];else{if(n=C.filter[t[s].type].apply(null,t[s].matches),n[H]){for(i=++s;i<r&&!C.relative[t[i].type];i++);return y(s>1&&v(u),s>1&&p(t.slice(0,s-1).concat({value:" "===t[s-2].type?"*":""})).replace(st,"$1"),n,s<i&&_(t.slice(s,i)),i<r&&_(t=t.slice(i)),i<r&&p(t))}u.push(n)}return v(u)}function b(t,n){var r=n.length>0,o=t.length>0,a=function(i,a,s,l,c){var u,d,f,p=0,h="0",v=i&&[],m=[],y=E,_=i||o&&C.find.TAG("*",c),b=U+=null==y?1:Math.random()||.1,x=_.length;for(c&&(E=a===D||a||c);h!==x&&null!=(u=_[h]);h++){if(o&&u){for(d=0,a||u.ownerDocument===D||(j(u),s=!L);f=t[d++];)if(f(u,a||D,s)){l.push(u);break}c&&(U=b)}r&&((u=!f&&u)&&p--,i&&v.push(u))}if(p+=h,r&&h!==p){for(d=0;f=n[d++];)f(v,m,a,s);if(i){if(p>0)for(;h--;)v[h]||m[h]||(m[h]=Y.call(l));m=g(m)}Z.apply(l,m),c&&!i&&m.length>0&&p+n.length>1&&e.uniqueSort(l)}return c&&(U=b,E=y),v};return r?i(a):a}var x,w,C,k,S,T,$,A,E,N,O,j,D,I,L,P,R,F,M,H="sizzle"+1*new Date,q=t.document,U=0,B=0,V=n(),z=n(),W=n(),J=function(t,e){return t===e&&(O=!0),0},K={}.hasOwnProperty,X=[],Y=X.pop,G=X.push,Z=X.push,Q=X.slice,tt=function(t,e){for(var n=0,i=t.length;n<i;n++)if(t[n]===e)return n;return-1},et="checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",nt="[\\x20\\t\\r\\n\\f]",it="(?:\\\\.|[\\w-]|[^\0-\\xa0])+",rt="\\["+nt+"*("+it+")(?:"+nt+"*([*^$|!~]?=)"+nt+"*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|("+it+"))|)"+nt+"*\\]",ot=":("+it+")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|"+rt+")*)|.*)\\)|)",at=new RegExp(nt+"+","g"),st=new RegExp("^"+nt+"+|((?:^|[^\\\\])(?:\\\\.)*)"+nt+"+$","g"),lt=new RegExp("^"+nt+"*,"+nt+"*"),ct=new RegExp("^"+nt+"*([>+~]|"+nt+")"+nt+"*"),ut=new RegExp("="+nt+"*([^\\]'\"]*?)"+nt+"*\\]","g"),dt=new RegExp(ot),ft=new RegExp("^"+it+"$"),pt={ID:new RegExp("^#("+it+")"),CLASS:new RegExp("^\\.("+it+")"),TAG:new RegExp("^("+it+"|[*])"),ATTR:new RegExp("^"+rt),PSEUDO:new RegExp("^"+ot),CHILD:new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+nt+"*(even|odd|(([+-]|)(\\d*)n|)"+nt+"*(?:([+-]|)"+nt+"*(\\d+)|))"+nt+"*\\)|)","i"),bool:new RegExp("^(?:"+et+")$","i"),needsContext:new RegExp("^"+nt+"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+nt+"*((?:-\\d)?\\d*)"+nt+"*\\)|)(?=[^-]|$)","i")},ht=/^(?:input|select|textarea|button)$/i,vt=/^h\d$/i,mt=/^[^{]+\{\s*\[native \w/,gt=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,yt=/[+~]/,_t=new RegExp("\\\\([\\da-f]{1,6}"+nt+"?|("+nt+")|.)","ig"),bt=function(t,e,n){var i="0x"+e-65536;return i!==i||n?e:i<0?String.fromCharCode(i+65536):String.fromCharCode(i>>10|55296,1023&i|56320)},xt=/([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,wt=function(t,e){return e?"\0"===t?"�":t.slice(0,-1)+"\\"+t.charCodeAt(t.length-1).toString(16)+" ":"\\"+t},Ct=function(){j()},kt=h(function(t){return t.disabled===!0&&("form"in t||"label"in t)},{dir:"parentNode",next:"legend"});try{Z.apply(X=Q.call(q.childNodes),q.childNodes),X[q.childNodes.length].nodeType}catch(t){Z={apply:X.length?function(t,e){G.apply(t,Q.call(e))}:function(t,e){for(var n=t.length,i=0;t[n++]=e[i++];);t.length=n-1}}}w=e.support={},S=e.isXML=function(t){var e=t&&(t.ownerDocument||t).documentElement;return!!e&&"HTML"!==e.nodeName},j=e.setDocument=function(t){var e,n,i=t?t.ownerDocument||t:q;return i!==D&&9===i.nodeType&&i.documentElement?(D=i,I=D.documentElement,L=!S(D),q!==D&&(n=D.defaultView)&&n.top!==n&&(n.addEventListener?n.addEventListener("unload",Ct,!1):n.attachEvent&&n.attachEvent("onunload",Ct)),w.attributes=r(function(t){return t.className="i",!t.getAttribute("className")}),w.getElementsByTagName=r(function(t){return t.appendChild(D.createComment("")),!t.getElementsByTagName("*").length}),w.getElementsByClassName=mt.test(D.getElementsByClassName),w.getById=r(function(t){return I.appendChild(t).id=H,!D.getElementsByName||!D.getElementsByName(H).length}),w.getById?(C.filter.ID=function(t){var e=t.replace(_t,bt);return function(t){return t.getAttribute("id")===e}},C.find.ID=function(t,e){if("undefined"!=typeof e.getElementById&&L){var n=e.getElementById(t);return n?[n]:[]}}):(C.filter.ID=function(t){var e=t.replace(_t,bt);return function(t){var n="undefined"!=typeof t.getAttributeNode&&t.getAttributeNode("id");return n&&n.value===e}},C.find.ID=function(t,e){if("undefined"!=typeof e.getElementById&&L){var n,i,r,o=e.getElementById(t);if(o){if(n=o.getAttributeNode("id"),n&&n.value===t)return[o];for(r=e.getElementsByName(t),i=0;o=r[i++];)if(n=o.getAttributeNode("id"),n&&n.value===t)return[o]}return[]}}),C.find.TAG=w.getElementsByTagName?function(t,e){return"undefined"!=typeof e.getElementsByTagName?e.getElementsByTagName(t):w.qsa?e.querySelectorAll(t):void 0}:function(t,e){var n,i=[],r=0,o=e.getElementsByTagName(t);if("*"===t){for(;n=o[r++];)1===n.nodeType&&i.push(n);return i}return o},C.find.CLASS=w.getElementsByClassName&&function(t,e){if("undefined"!=typeof e.getElementsByClassName&&L)return e.getElementsByClassName(t)},R=[],P=[],(w.qsa=mt.test(D.querySelectorAll))&&(r(function(t){I.appendChild(t).innerHTML="<a id='"+H+"'></a><select id='"+H+"-\r\\' msallowcapture=''><option selected=''></option></select>",t.querySelectorAll("[msallowcapture^='']").length&&P.push("[*^$]="+nt+"*(?:''|\"\")"),t.querySelectorAll("[selected]").length||P.push("\\["+nt+"*(?:value|"+et+")"),t.querySelectorAll("[id~="+H+"-]").length||P.push("~="),t.querySelectorAll(":checked").length||P.push(":checked"),t.querySelectorAll("a#"+H+"+*").length||P.push(".#.+[+~]")}),r(function(t){t.innerHTML="<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";var e=D.createElement("input");e.setAttribute("type","hidden"),t.appendChild(e).setAttribute("name","D"),t.querySelectorAll("[name=d]").length&&P.push("name"+nt+"*[*^$|!~]?="),2!==t.querySelectorAll(":enabled").length&&P.push(":enabled",":disabled"),I.appendChild(t).disabled=!0,2!==t.querySelectorAll(":disabled").length&&P.push(":enabled",":disabled"),t.querySelectorAll("*,:x"),P.push(",.*:")})),(w.matchesSelector=mt.test(F=I.matches||I.webkitMatchesSelector||I.mozMatchesSelector||I.oMatchesSelector||I.msMatchesSelector))&&r(function(t){w.disconnectedMatch=F.call(t,"*"),F.call(t,"[s!='']:x"),R.push("!=",ot)}),P=P.length&&new RegExp(P.join("|")),R=R.length&&new RegExp(R.join("|")),e=mt.test(I.compareDocumentPosition),M=e||mt.test(I.contains)?function(t,e){var n=9===t.nodeType?t.documentElement:t,i=e&&e.parentNode;return t===i||!(!i||1!==i.nodeType||!(n.contains?n.contains(i):t.compareDocumentPosition&&16&t.compareDocumentPosition(i)))}:function(t,e){if(e)for(;e=e.parentNode;)if(e===t)return!0;return!1},J=e?function(t,e){if(t===e)return O=!0,0;var n=!t.compareDocumentPosition-!e.compareDocumentPosition;return n?n:(n=(t.ownerDocument||t)===(e.ownerDocument||e)?t.compareDocumentPosition(e):1,1&n||!w.sortDetached&&e.compareDocumentPosition(t)===n?t===D||t.ownerDocument===q&&M(q,t)?-1:e===D||e.ownerDocument===q&&M(q,e)?1:N?tt(N,t)-tt(N,e):0:4&n?-1:1)}:function(t,e){if(t===e)return O=!0,0;var n,i=0,r=t.parentNode,o=e.parentNode,s=[t],l=[e];if(!r||!o)return t===D?-1:e===D?1:r?-1:o?1:N?tt(N,t)-tt(N,e):0;if(r===o)return a(t,e);for(n=t;n=n.parentNode;)s.unshift(n);for(n=e;n=n.parentNode;)l.unshift(n);for(;s[i]===l[i];)i++;return i?a(s[i],l[i]):s[i]===q?-1:l[i]===q?1:0},D):D},e.matches=function(t,n){return e(t,null,null,n)},e.matchesSelector=function(t,n){if((t.ownerDocument||t)!==D&&j(t),n=n.replace(ut,"='$1']"),w.matchesSelector&&L&&!W[n+" "]&&(!R||!R.test(n))&&(!P||!P.test(n)))try{var i=F.call(t,n);if(i||w.disconnectedMatch||t.document&&11!==t.document.nodeType)return i}catch(t){}return e(n,D,null,[t]).length>0},e.contains=function(t,e){return(t.ownerDocument||t)!==D&&j(t),M(t,e)},e.attr=function(t,e){(t.ownerDocument||t)!==D&&j(t);var n=C.attrHandle[e.toLowerCase()],i=n&&K.call(C.attrHandle,e.toLowerCase())?n(t,e,!L):void 0;return void 0!==i?i:w.attributes||!L?t.getAttribute(e):(i=t.getAttributeNode(e))&&i.specified?i.value:null},e.escape=function(t){return(t+"").replace(xt,wt)},e.error=function(t){throw new Error("Syntax error, unrecognized expression: "+t)},e.uniqueSort=function(t){var e,n=[],i=0,r=0;if(O=!w.detectDuplicates,N=!w.sortStable&&t.slice(0),t.sort(J),O){for(;e=t[r++];)e===t[r]&&(i=n.push(r));for(;i--;)t.splice(n[i],1)}return N=null,t},k=e.getText=function(t){var e,n="",i=0,r=t.nodeType;if(r){if(1===r||9===r||11===r){if("string"==typeof t.textContent)return t.textContent;for(t=t.firstChild;t;t=t.nextSibling)n+=k(t)}else if(3===r||4===r)return t.nodeValue}else for(;e=t[i++];)n+=k(e);return n},C=e.selectors={cacheLength:50,createPseudo:i,match:pt,attrHandle:{},find:{},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(t){return t[1]=t[1].replace(_t,bt),t[3]=(t[3]||t[4]||t[5]||"").replace(_t,bt),"~="===t[2]&&(t[3]=" "+t[3]+" "),t.slice(0,4)},CHILD:function(t){return t[1]=t[1].toLowerCase(),"nth"===t[1].slice(0,3)?(t[3]||e.error(t[0]),t[4]=+(t[4]?t[5]+(t[6]||1):2*("even"===t[3]||"odd"===t[3])),t[5]=+(t[7]+t[8]||"odd"===t[3])):t[3]&&e.error(t[0]),t},PSEUDO:function(t){var e,n=!t[6]&&t[2];return pt.CHILD.test(t[0])?null:(t[3]?t[2]=t[4]||t[5]||"":n&&dt.test(n)&&(e=T(n,!0))&&(e=n.indexOf(")",n.length-e)-n.length)&&(t[0]=t[0].slice(0,e),t[2]=n.slice(0,e)),t.slice(0,3))}},filter:{TAG:function(t){var e=t.replace(_t,bt).toLowerCase();return"*"===t?function(){return!0}:function(t){return t.nodeName&&t.nodeName.toLowerCase()===e}},CLASS:function(t){var e=V[t+" "];return e||(e=new RegExp("(^|"+nt+")"+t+"("+nt+"|$)"))&&V(t,function(t){return e.test("string"==typeof t.className&&t.className||"undefined"!=typeof t.getAttribute&&t.getAttribute("class")||"")})},ATTR:function(t,n,i){return function(r){var o=e.attr(r,t);return null==o?"!="===n:!n||(o+="","="===n?o===i:"!="===n?o!==i:"^="===n?i&&0===o.indexOf(i):"*="===n?i&&o.indexOf(i)>-1:"$="===n?i&&o.slice(-i.length)===i:"~="===n?(" "+o.replace(at," ")+" ").indexOf(i)>-1:"|="===n&&(o===i||o.slice(0,i.length+1)===i+"-"))}},CHILD:function(t,e,n,i,r){var o="nth"!==t.slice(0,3),a="last"!==t.slice(-4),s="of-type"===e;return 1===i&&0===r?function(t){return!!t.parentNode}:function(e,n,l){var c,u,d,f,p,h,v=o!==a?"nextSibling":"previousSibling",m=e.parentNode,g=s&&e.nodeName.toLowerCase(),y=!l&&!s,_=!1;if(m){if(o){for(;v;){for(f=e;f=f[v];)if(s?f.nodeName.toLowerCase()===g:1===f.nodeType)return!1;h=v="only"===t&&!h&&"nextSibling"}return!0}if(h=[a?m.firstChild:m.lastChild],a&&y){for(f=m,d=f[H]||(f[H]={}),u=d[f.uniqueID]||(d[f.uniqueID]={}),c=u[t]||[],p=c[0]===U&&c[1],_=p&&c[2],f=p&&m.childNodes[p];f=++p&&f&&f[v]||(_=p=0)||h.pop();)if(1===f.nodeType&&++_&&f===e){u[t]=[U,p,_];break}}else if(y&&(f=e,d=f[H]||(f[H]={}),u=d[f.uniqueID]||(d[f.uniqueID]={}),c=u[t]||[],p=c[0]===U&&c[1],_=p),_===!1)for(;(f=++p&&f&&f[v]||(_=p=0)||h.pop())&&((s?f.nodeName.toLowerCase()!==g:1!==f.nodeType)||!++_||(y&&(d=f[H]||(f[H]={}),u=d[f.uniqueID]||(d[f.uniqueID]={}),u[t]=[U,_]),f!==e)););return _-=r,_===i||_%i===0&&_/i>=0}}},PSEUDO:function(t,n){var r,o=C.pseudos[t]||C.setFilters[t.toLowerCase()]||e.error("unsupported pseudo: "+t);return o[H]?o(n):o.length>1?(r=[t,t,"",n],C.setFilters.hasOwnProperty(t.toLowerCase())?i(function(t,e){for(var i,r=o(t,n),a=r.length;a--;)i=tt(t,r[a]),t[i]=!(e[i]=r[a])}):function(t){return o(t,0,r)}):o}},pseudos:{not:i(function(t){var e=[],n=[],r=$(t.replace(st,"$1"));return r[H]?i(function(t,e,n,i){for(var o,a=r(t,null,i,[]),s=t.length;s--;)(o=a[s])&&(t[s]=!(e[s]=o))}):function(t,i,o){return e[0]=t,r(e,null,o,n),e[0]=null,!n.pop()}}),has:i(function(t){return function(n){return e(t,n).length>0}}),contains:i(function(t){return t=t.replace(_t,bt),function(e){return(e.textContent||e.innerText||k(e)).indexOf(t)>-1}}),lang:i(function(t){return ft.test(t||"")||e.error("unsupported lang: "+t),t=t.replace(_t,bt).toLowerCase(),function(e){var n;do if(n=L?e.lang:e.getAttribute("xml:lang")||e.getAttribute("lang"))return n=n.toLowerCase(),n===t||0===n.indexOf(t+"-");while((e=e.parentNode)&&1===e.nodeType);return!1}}),target:function(e){var n=t.location&&t.location.hash;return n&&n.slice(1)===e.id},root:function(t){return t===I},focus:function(t){return t===D.activeElement&&(!D.hasFocus||D.hasFocus())&&!!(t.type||t.href||~t.tabIndex)},enabled:c(!1),disabled:c(!0),checked:function(t){var e=t.nodeName.toLowerCase();return"input"===e&&!!t.checked||"option"===e&&!!t.selected},selected:function(t){return t.parentNode&&t.parentNode.selectedIndex,t.selected===!0},empty:function(t){for(t=t.firstChild;t;t=t.nextSibling)if(t.nodeType<6)return!1;return!0},parent:function(t){return!C.pseudos.empty(t)},header:function(t){return vt.test(t.nodeName)},input:function(t){return ht.test(t.nodeName)},button:function(t){var e=t.nodeName.toLowerCase();return"input"===e&&"button"===t.type||"button"===e},text:function(t){var e;return"input"===t.nodeName.toLowerCase()&&"text"===t.type&&(null==(e=t.getAttribute("type"))||"text"===e.toLowerCase())},first:u(function(){return[0]}),last:u(function(t,e){return[e-1]}),eq:u(function(t,e,n){return[n<0?n+e:n]}),even:u(function(t,e){for(var n=0;n<e;n+=2)t.push(n);return t}),odd:u(function(t,e){for(var n=1;n<e;n+=2)t.push(n);return t}),lt:u(function(t,e,n){for(var i=n<0?n+e:n;--i>=0;)t.push(i);return t}),gt:u(function(t,e,n){for(var i=n<0?n+e:n;++i<e;)t.push(i);return t})}},C.pseudos.nth=C.pseudos.eq;for(x in{radio:!0,checkbox:!0,file:!0,password:!0,image:!0})C.pseudos[x]=s(x);for(x in{submit:!0,reset:!0})C.pseudos[x]=l(x);return f.prototype=C.filters=C.pseudos,C.setFilters=new f,T=e.tokenize=function(t,n){var i,r,o,a,s,l,c,u=z[t+" "];if(u)return n?0:u.slice(0);for(s=t,l=[],c=C.preFilter;s;){i&&!(r=lt.exec(s))||(r&&(s=s.slice(r[0].length)||s),l.push(o=[])),i=!1,(r=ct.exec(s))&&(i=r.shift(),o.push({value:i,type:r[0].replace(st," ")}),s=s.slice(i.length));for(a in C.filter)!(r=pt[a].exec(s))||c[a]&&!(r=c[a](r))||(i=r.shift(),o.push({value:i,type:a,matches:r}),s=s.slice(i.length));if(!i)break}return n?s.length:s?e.error(t):z(t,l).slice(0)},$=e.compile=function(t,e){var n,i=[],r=[],o=W[t+" "];if(!o){for(e||(e=T(t)),n=e.length;n--;)o=_(e[n]),o[H]?i.push(o):r.push(o);o=W(t,b(r,i)),o.selector=t}return o},A=e.select=function(t,e,n,i){var r,o,a,s,l,c="function"==typeof t&&t,u=!i&&T(t=c.selector||t);if(n=n||[],1===u.length){if(o=u[0]=u[0].slice(0),o.length>2&&"ID"===(a=o[0]).type&&9===e.nodeType&&L&&C.relative[o[1].type]){if(e=(C.find.ID(a.matches[0].replace(_t,bt),e)||[])[0],!e)return n;c&&(e=e.parentNode),t=t.slice(o.shift().value.length)}for(r=pt.needsContext.test(t)?0:o.length;r--&&(a=o[r],!C.relative[s=a.type]);)if((l=C.find[s])&&(i=l(a.matches[0].replace(_t,bt),yt.test(o[0].type)&&d(e.parentNode)||e))){if(o.splice(r,1),t=i.length&&p(o),!t)return Z.apply(n,i),n;break}}return(c||$(t,u))(i,e,!L,n,!e||yt.test(t)&&d(e.parentNode)||e),n},w.sortStable=H.split("").sort(J).join("")===H,w.detectDuplicates=!!O,j(),w.sortDetached=r(function(t){return 1&t.compareDocumentPosition(D.createElement("fieldset"))}),r(function(t){return t.innerHTML="<a href='#'></a>","#"===t.firstChild.getAttribute("href")})||o("type|href|height|width",function(t,e,n){if(!n)return t.getAttribute(e,"type"===e.toLowerCase()?1:2)}),w.attributes&&r(function(t){return t.innerHTML="<input/>",t.firstChild.setAttribute("value",""),""===t.firstChild.getAttribute("value")})||o("value",function(t,e,n){if(!n&&"input"===t.nodeName.toLowerCase())return t.defaultValue}),r(function(t){return null==t.getAttribute("disabled")})||o(et,function(t,e,n){var i;if(!n)return t[e]===!0?e.toLowerCase():(i=t.getAttributeNode(e))&&i.specified?i.value:null}),e}(n);yt.find=Ct,yt.expr=Ct.selectors,yt.expr[":"]=yt.expr.pseudos,yt.uniqueSort=yt.unique=Ct.uniqueSort,yt.text=Ct.getText,yt.isXMLDoc=Ct.isXML,yt.contains=Ct.contains,yt.escapeSelector=Ct.escape;var kt=function(t,e,n){for(var i=[],r=void 0!==n;(t=t[e])&&9!==t.nodeType;)if(1===t.nodeType){if(r&&yt(t).is(n))break;i.push(t)}return i},St=function(t,e){for(var n=[];t;t=t.nextSibling)1===t.nodeType&&t!==e&&n.push(t);return n},Tt=yt.expr.match.needsContext,$t=/^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i,At=/^.[^:#\[\.,]*$/;yt.filter=function(t,e,n){var i=e[0];return n&&(t=":not("+t+")"),1===e.length&&1===i.nodeType?yt.find.matchesSelector(i,t)?[i]:[]:yt.find.matches(t,yt.grep(e,function(t){return 1===t.nodeType}))},yt.fn.extend({find:function(t){var e,n,i=this.length,r=this;if("string"!=typeof t)return this.pushStack(yt(t).filter(function(){for(e=0;e<i;e++)if(yt.contains(r[e],this))return!0}));for(n=this.pushStack([]),e=0;e<i;e++)yt.find(t,r[e],n);return i>1?yt.uniqueSort(n):n},filter:function(t){return this.pushStack(l(this,t||[],!1))},not:function(t){return this.pushStack(l(this,t||[],!0))},is:function(t){return!!l(this,"string"==typeof t&&Tt.test(t)?yt(t):t||[],!1).length}});var Et,Nt=/^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/,Ot=yt.fn.init=function(t,e,n){var i,r;if(!t)return this;if(n=n||Et,"string"==typeof t){if(i="<"===t[0]&&">"===t[t.length-1]&&t.length>=3?[null,t,null]:Nt.exec(t),!i||!i[1]&&e)return!e||e.jquery?(e||n).find(t):this.constructor(e).find(t);if(i[1]){if(e=e instanceof yt?e[0]:e,yt.merge(this,yt.parseHTML(i[1],e&&e.nodeType?e.ownerDocument||e:ot,!0)),$t.test(i[1])&&yt.isPlainObject(e))for(i in e)yt.isFunction(this[i])?this[i](e[i]):this.attr(i,e[i]);return this}return r=ot.getElementById(i[2]),r&&(this[0]=r,this.length=1),this}return t.nodeType?(this[0]=t,this.length=1,this):yt.isFunction(t)?void 0!==n.ready?n.ready(t):t(yt):yt.makeArray(t,this)};Ot.prototype=yt.fn,Et=yt(ot);var jt=/^(?:parents|prev(?:Until|All))/,Dt={children:!0,contents:!0,next:!0,prev:!0};yt.fn.extend({has:function(t){var e=yt(t,this),n=e.length;return this.filter(function(){for(var t=0;t<n;t++)if(yt.contains(this,e[t]))return!0})},closest:function(t,e){var n,i=0,r=this.length,o=[],a="string"!=typeof t&&yt(t);if(!Tt.test(t))for(;i<r;i++)for(n=this[i];n&&n!==e;n=n.parentNode)if(n.nodeType<11&&(a?a.index(n)>-1:1===n.nodeType&&yt.find.matchesSelector(n,t))){o.push(n);break}return this.pushStack(o.length>1?yt.uniqueSort(o):o)},index:function(t){return t?"string"==typeof t?ut.call(yt(t),this[0]):ut.call(this,t.jquery?t[0]:t):this[0]&&this[0].parentNode?this.first().prevAll().length:-1},add:function(t,e){return this.pushStack(yt.uniqueSort(yt.merge(this.get(),yt(t,e))))},addBack:function(t){return this.add(null==t?this.prevObject:this.prevObject.filter(t))}}),yt.each({parent:function(t){var e=t.parentNode;return e&&11!==e.nodeType?e:null},parents:function(t){return kt(t,"parentNode")},parentsUntil:function(t,e,n){return kt(t,"parentNode",n)},next:function(t){return c(t,"nextSibling")},prev:function(t){return c(t,"previousSibling")},nextAll:function(t){return kt(t,"nextSibling")},prevAll:function(t){return kt(t,"previousSibling")},nextUntil:function(t,e,n){return kt(t,"nextSibling",n)},prevUntil:function(t,e,n){return kt(t,"previousSibling",n)},siblings:function(t){return St((t.parentNode||{}).firstChild,t)},children:function(t){return St(t.firstChild)},contents:function(t){return t.contentDocument||yt.merge([],t.childNodes)}},function(t,e){yt.fn[t]=function(n,i){var r=yt.map(this,e,n);return"Until"!==t.slice(-5)&&(i=n),i&&"string"==typeof i&&(r=yt.filter(i,r)),this.length>1&&(Dt[t]||yt.uniqueSort(r),jt.test(t)&&r.reverse()),this.pushStack(r)}});var It=/[^\x20\t\r\n\f]+/g;yt.Callbacks=function(t){t="string"==typeof t?u(t):yt.extend({},t);var e,n,i,r,o=[],a=[],s=-1,l=function(){for(r=t.once,i=e=!0;a.length;s=-1)for(n=a.shift();++s<o.length;)o[s].apply(n[0],n[1])===!1&&t.stopOnFalse&&(s=o.length,n=!1);t.memory||(n=!1),e=!1,r&&(o=n?[]:"")},c={add:function(){return o&&(n&&!e&&(s=o.length-1,a.push(n)),function e(n){yt.each(n,function(n,i){yt.isFunction(i)?t.unique&&c.has(i)||o.push(i):i&&i.length&&"string"!==yt.type(i)&&e(i)})}(arguments),n&&!e&&l()),this},remove:function(){return yt.each(arguments,function(t,e){for(var n;(n=yt.inArray(e,o,n))>-1;)o.splice(n,1),n<=s&&s--}),this},has:function(t){return t?yt.inArray(t,o)>-1:o.length>0},empty:function(){return o&&(o=[]),this},disable:function(){return r=a=[],o=n="",this},disabled:function(){return!o},lock:function(){return r=a=[],n||e||(o=n=""),this},locked:function(){return!!r},fireWith:function(t,n){return r||(n=n||[],n=[t,n.slice?n.slice():n],a.push(n),e||l()),this},fire:function(){return c.fireWith(this,arguments),this},fired:function(){return!!i}};return c},yt.extend({Deferred:function(t){var e=[["notify","progress",yt.Callbacks("memory"),yt.Callbacks("memory"),2],["resolve","done",yt.Callbacks("once memory"),yt.Callbacks("once memory"),0,"resolved"],["reject","fail",yt.Callbacks("once memory"),yt.Callbacks("once memory"),1,"rejected"]],i="pending",r={state:function(){return i},always:function(){return o.done(arguments).fail(arguments),this},catch:function(t){return r.then(null,t)},pipe:function(){var t=arguments;return yt.Deferred(function(n){yt.each(e,function(e,i){var r=yt.isFunction(t[i[4]])&&t[i[4]];o[i[1]](function(){var t=r&&r.apply(this,arguments);t&&yt.isFunction(t.promise)?t.promise().progress(n.notify).done(n.resolve).fail(n.reject):n[i[0]+"With"](this,r?[t]:arguments)})}),t=null}).promise()},then:function(t,i,r){function o(t,e,i,r){return function(){var s=this,l=arguments,c=function(){var n,c;if(!(t<a)){if(n=i.apply(s,l),n===e.promise())throw new TypeError("Thenable self-resolution");c=n&&("object"==typeof n||"function"==typeof n)&&n.then,yt.isFunction(c)?r?c.call(n,o(a,e,d,r),o(a,e,f,r)):(a++,c.call(n,o(a,e,d,r),o(a,e,f,r),o(a,e,d,e.notifyWith))):(i!==d&&(s=void 0,l=[n]),(r||e.resolveWith)(s,l))}},u=r?c:function(){try{c()}catch(n){yt.Deferred.exceptionHook&&yt.Deferred.exceptionHook(n,u.stackTrace),t+1>=a&&(i!==f&&(s=void 0,l=[n]),e.rejectWith(s,l))}};t?u():(yt.Deferred.getStackHook&&(u.stackTrace=yt.Deferred.getStackHook()),n.setTimeout(u))}}var a=0;return yt.Deferred(function(n){e[0][3].add(o(0,n,yt.isFunction(r)?r:d,n.notifyWith)),e[1][3].add(o(0,n,yt.isFunction(t)?t:d)),e[2][3].add(o(0,n,yt.isFunction(i)?i:f))}).promise()},promise:function(t){return null!=t?yt.extend(t,r):r}},o={};return yt.each(e,function(t,n){var a=n[2],s=n[5];r[n[1]]=a.add,s&&a.add(function(){i=s},e[3-t][2].disable,e[0][2].lock),a.add(n[3].fire),o[n[0]]=function(){return o[n[0]+"With"](this===o?void 0:this,arguments),this},o[n[0]+"With"]=a.fireWith}),r.promise(o),t&&t.call(o,o),o},when:function(t){var e=arguments.length,n=e,i=Array(n),r=st.call(arguments),o=yt.Deferred(),a=function(t){return function(n){i[t]=this,r[t]=arguments.length>1?st.call(arguments):n,--e||o.resolveWith(i,r)}};if(e<=1&&(p(t,o.done(a(n)).resolve,o.reject),"pending"===o.state()||yt.isFunction(r[n]&&r[n].then)))return o.then();for(;n--;)p(r[n],a(n),o.reject);return o.promise()}});var Lt=/^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;yt.Deferred.exceptionHook=function(t,e){n.console&&n.console.warn&&t&&Lt.test(t.name)&&n.console.warn("jQuery.Deferred exception: "+t.message,t.stack,e)},yt.readyException=function(t){n.setTimeout(function(){throw t})};var Pt=yt.Deferred();yt.fn.ready=function(t){return Pt.then(t).catch(function(t){yt.readyException(t)}),this},yt.extend({isReady:!1,readyWait:1,holdReady:function(t){t?yt.readyWait++:yt.ready(!0)},ready:function(t){(t===!0?--yt.readyWait:yt.isReady)||(yt.isReady=!0,t!==!0&&--yt.readyWait>0||Pt.resolveWith(ot,[yt]))}}),yt.ready.then=Pt.then,"complete"===ot.readyState||"loading"!==ot.readyState&&!ot.documentElement.doScroll?n.setTimeout(yt.ready):(ot.addEventListener("DOMContentLoaded",h),n.addEventListener("load",h));var Rt=function(t,e,n,i,r,o,a){var s=0,l=t.length,c=null==n;if("object"===yt.type(n)){r=!0;for(s in n)Rt(t,e,s,n[s],!0,o,a)}else if(void 0!==i&&(r=!0,yt.isFunction(i)||(a=!0),c&&(a?(e.call(t,i),e=null):(c=e,e=function(t,e,n){return c.call(yt(t),n)})),e))for(;s<l;s++)e(t[s],n,a?i:i.call(t[s],s,e(t[s],n)));return r?t:c?e.call(t):l?e(t[0],n):o},Ft=function(t){return 1===t.nodeType||9===t.nodeType||!+t.nodeType};v.uid=1,v.prototype={cache:function(t){var e=t[this.expando];return e||(e={},Ft(t)&&(t.nodeType?t[this.expando]=e:Object.defineProperty(t,this.expando,{value:e,configurable:!0}))),e},set:function(t,e,n){var i,r=this.cache(t);if("string"==typeof e)r[yt.camelCase(e)]=n;else for(i in e)r[yt.camelCase(i)]=e[i];return r},get:function(t,e){return void 0===e?this.cache(t):t[this.expando]&&t[this.expando][yt.camelCase(e)]},access:function(t,e,n){return void 0===e||e&&"string"==typeof e&&void 0===n?this.get(t,e):(this.set(t,e,n),void 0!==n?n:e)},remove:function(t,e){var n,i=t[this.expando];if(void 0!==i){if(void 0!==e){yt.isArray(e)?e=e.map(yt.camelCase):(e=yt.camelCase(e),e=e in i?[e]:e.match(It)||[]),n=e.length;for(;n--;)delete i[e[n]]}(void 0===e||yt.isEmptyObject(i))&&(t.nodeType?t[this.expando]=void 0:delete t[this.expando])}},hasData:function(t){var e=t[this.expando];return void 0!==e&&!yt.isEmptyObject(e)}};var Mt=new v,Ht=new v,qt=/^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,Ut=/[A-Z]/g;yt.extend({hasData:function(t){return Ht.hasData(t)||Mt.hasData(t)},data:function(t,e,n){return Ht.access(t,e,n)},removeData:function(t,e){Ht.remove(t,e)},_data:function(t,e,n){return Mt.access(t,e,n)},_removeData:function(t,e){Mt.remove(t,e)}}),yt.fn.extend({data:function(t,e){var n,i,r,o=this[0],a=o&&o.attributes;if(void 0===t){if(this.length&&(r=Ht.get(o),1===o.nodeType&&!Mt.get(o,"hasDataAttrs"))){for(n=a.length;n--;)a[n]&&(i=a[n].name,0===i.indexOf("data-")&&(i=yt.camelCase(i.slice(5)),g(o,i,r[i])));Mt.set(o,"hasDataAttrs",!0)}return r}return"object"==typeof t?this.each(function(){Ht.set(this,t)}):Rt(this,function(e){var n;if(o&&void 0===e){if(n=Ht.get(o,t),void 0!==n)return n;if(n=g(o,t),void 0!==n)return n}else this.each(function(){Ht.set(this,t,e)})},null,e,arguments.length>1,null,!0)},removeData:function(t){return this.each(function(){Ht.remove(this,t)})}}),yt.extend({queue:function(t,e,n){var i;if(t)return e=(e||"fx")+"queue",i=Mt.get(t,e),n&&(!i||yt.isArray(n)?i=Mt.access(t,e,yt.makeArray(n)):i.push(n)),i||[]},dequeue:function(t,e){e=e||"fx";var n=yt.queue(t,e),i=n.length,r=n.shift(),o=yt._queueHooks(t,e),a=function(){yt.dequeue(t,e)};"inprogress"===r&&(r=n.shift(),i--),r&&("fx"===e&&n.unshift("inprogress"),delete o.stop,r.call(t,a,o)),!i&&o&&o.empty.fire()},_queueHooks:function(t,e){var n=e+"queueHooks";return Mt.get(t,n)||Mt.access(t,n,{empty:yt.Callbacks("once memory").add(function(){Mt.remove(t,[e+"queue",n])})})}}),yt.fn.extend({queue:function(t,e){var n=2;return"string"!=typeof t&&(e=t,t="fx",n--),arguments.length<n?yt.queue(this[0],t):void 0===e?this:this.each(function(){var n=yt.queue(this,t,e);yt._queueHooks(this,t),"fx"===t&&"inprogress"!==n[0]&&yt.dequeue(this,t)})},dequeue:function(t){return this.each(function(){yt.dequeue(this,t)})},clearQueue:function(t){return this.queue(t||"fx",[])},promise:function(t,e){var n,i=1,r=yt.Deferred(),o=this,a=this.length,s=function(){--i||r.resolveWith(o,[o])};for("string"!=typeof t&&(e=t,t=void 0),t=t||"fx";a--;)n=Mt.get(o[a],t+"queueHooks"),n&&n.empty&&(i++,n.empty.add(s));return s(),r.promise(e)}});var Bt=/[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,Vt=new RegExp("^(?:([+-])=|)("+Bt+")([a-z%]*)$","i"),zt=["Top","Right","Bottom","Left"],Wt=function(t,e){return t=e||t,"none"===t.style.display||""===t.style.display&&yt.contains(t.ownerDocument,t)&&"none"===yt.css(t,"display")},Jt=function(t,e,n,i){var r,o,a={};for(o in e)a[o]=t.style[o],t.style[o]=e[o];r=n.apply(t,i||[]);for(o in e)t.style[o]=a[o];return r},Kt={};yt.fn.extend({show:function(){return b(this,!0)},hide:function(){return b(this)},toggle:function(t){return"boolean"==typeof t?t?this.show():this.hide():this.each(function(){Wt(this)?yt(this).show():yt(this).hide()})}});var Xt=/^(?:checkbox|radio)$/i,Yt=/<([a-z][^\/\0>\x20\t\r\n\f]+)/i,Gt=/^$|\/(?:java|ecma)script/i,Zt={option:[1,"<select multiple='multiple'>","</select>"],thead:[1,"<table>","</table>"],col:[2,"<table><colgroup>","</colgroup></table>"],tr:[2,"<table><tbody>","</tbody></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],_default:[0,"",""]};Zt.optgroup=Zt.option,Zt.tbody=Zt.tfoot=Zt.colgroup=Zt.caption=Zt.thead,Zt.th=Zt.td;
var Qt=/<|&#?\w+;/;!function(){var t=ot.createDocumentFragment(),e=t.appendChild(ot.createElement("div")),n=ot.createElement("input");n.setAttribute("type","radio"),n.setAttribute("checked","checked"),n.setAttribute("name","t"),e.appendChild(n),mt.checkClone=e.cloneNode(!0).cloneNode(!0).lastChild.checked,e.innerHTML="<textarea>x</textarea>",mt.noCloneChecked=!!e.cloneNode(!0).lastChild.defaultValue}();var te=ot.documentElement,ee=/^key/,ne=/^(?:mouse|pointer|contextmenu|drag|drop)|click/,ie=/^([^.]*)(?:\.(.+)|)/;yt.event={global:{},add:function(t,e,n,i,r){var o,a,s,l,c,u,d,f,p,h,v,m=Mt.get(t);if(m)for(n.handler&&(o=n,n=o.handler,r=o.selector),r&&yt.find.matchesSelector(te,r),n.guid||(n.guid=yt.guid++),(l=m.events)||(l=m.events={}),(a=m.handle)||(a=m.handle=function(e){return"undefined"!=typeof yt&&yt.event.triggered!==e.type?yt.event.dispatch.apply(t,arguments):void 0}),e=(e||"").match(It)||[""],c=e.length;c--;)s=ie.exec(e[c])||[],p=v=s[1],h=(s[2]||"").split(".").sort(),p&&(d=yt.event.special[p]||{},p=(r?d.delegateType:d.bindType)||p,d=yt.event.special[p]||{},u=yt.extend({type:p,origType:v,data:i,handler:n,guid:n.guid,selector:r,needsContext:r&&yt.expr.match.needsContext.test(r),namespace:h.join(".")},o),(f=l[p])||(f=l[p]=[],f.delegateCount=0,d.setup&&d.setup.call(t,i,h,a)!==!1||t.addEventListener&&t.addEventListener(p,a)),d.add&&(d.add.call(t,u),u.handler.guid||(u.handler.guid=n.guid)),r?f.splice(f.delegateCount++,0,u):f.push(u),yt.event.global[p]=!0)},remove:function(t,e,n,i,r){var o,a,s,l,c,u,d,f,p,h,v,m=Mt.hasData(t)&&Mt.get(t);if(m&&(l=m.events)){for(e=(e||"").match(It)||[""],c=e.length;c--;)if(s=ie.exec(e[c])||[],p=v=s[1],h=(s[2]||"").split(".").sort(),p){for(d=yt.event.special[p]||{},p=(i?d.delegateType:d.bindType)||p,f=l[p]||[],s=s[2]&&new RegExp("(^|\\.)"+h.join("\\.(?:.*\\.|)")+"(\\.|$)"),a=o=f.length;o--;)u=f[o],!r&&v!==u.origType||n&&n.guid!==u.guid||s&&!s.test(u.namespace)||i&&i!==u.selector&&("**"!==i||!u.selector)||(f.splice(o,1),u.selector&&f.delegateCount--,d.remove&&d.remove.call(t,u));a&&!f.length&&(d.teardown&&d.teardown.call(t,h,m.handle)!==!1||yt.removeEvent(t,p,m.handle),delete l[p])}else for(p in l)yt.event.remove(t,p+e[c],n,i,!0);yt.isEmptyObject(l)&&Mt.remove(t,"handle events")}},dispatch:function(t){var e,n,i,r,o,a,s=yt.event.fix(t),l=new Array(arguments.length),c=(Mt.get(this,"events")||{})[s.type]||[],u=yt.event.special[s.type]||{};for(l[0]=s,e=1;e<arguments.length;e++)l[e]=arguments[e];if(s.delegateTarget=this,!u.preDispatch||u.preDispatch.call(this,s)!==!1){for(a=yt.event.handlers.call(this,s,c),e=0;(r=a[e++])&&!s.isPropagationStopped();)for(s.currentTarget=r.elem,n=0;(o=r.handlers[n++])&&!s.isImmediatePropagationStopped();)s.rnamespace&&!s.rnamespace.test(o.namespace)||(s.handleObj=o,s.data=o.data,i=((yt.event.special[o.origType]||{}).handle||o.handler).apply(r.elem,l),void 0!==i&&(s.result=i)===!1&&(s.preventDefault(),s.stopPropagation()));return u.postDispatch&&u.postDispatch.call(this,s),s.result}},handlers:function(t,e){var n,i,r,o,a,s=[],l=e.delegateCount,c=t.target;if(l&&c.nodeType&&!("click"===t.type&&t.button>=1))for(;c!==this;c=c.parentNode||this)if(1===c.nodeType&&("click"!==t.type||c.disabled!==!0)){for(o=[],a={},n=0;n<l;n++)i=e[n],r=i.selector+" ",void 0===a[r]&&(a[r]=i.needsContext?yt(r,this).index(c)>-1:yt.find(r,this,null,[c]).length),a[r]&&o.push(i);o.length&&s.push({elem:c,handlers:o})}return c=this,l<e.length&&s.push({elem:c,handlers:e.slice(l)}),s},addProp:function(t,e){Object.defineProperty(yt.Event.prototype,t,{enumerable:!0,configurable:!0,get:yt.isFunction(e)?function(){if(this.originalEvent)return e(this.originalEvent)}:function(){if(this.originalEvent)return this.originalEvent[t]},set:function(e){Object.defineProperty(this,t,{enumerable:!0,configurable:!0,writable:!0,value:e})}})},fix:function(t){return t[yt.expando]?t:new yt.Event(t)},special:{load:{noBubble:!0},focus:{trigger:function(){if(this!==T()&&this.focus)return this.focus(),!1},delegateType:"focusin"},blur:{trigger:function(){if(this===T()&&this.blur)return this.blur(),!1},delegateType:"focusout"},click:{trigger:function(){if("checkbox"===this.type&&this.click&&yt.nodeName(this,"input"))return this.click(),!1},_default:function(t){return yt.nodeName(t.target,"a")}},beforeunload:{postDispatch:function(t){void 0!==t.result&&t.originalEvent&&(t.originalEvent.returnValue=t.result)}}}},yt.removeEvent=function(t,e,n){t.removeEventListener&&t.removeEventListener(e,n)},yt.Event=function(t,e){return this instanceof yt.Event?(t&&t.type?(this.originalEvent=t,this.type=t.type,this.isDefaultPrevented=t.defaultPrevented||void 0===t.defaultPrevented&&t.returnValue===!1?k:S,this.target=t.target&&3===t.target.nodeType?t.target.parentNode:t.target,this.currentTarget=t.currentTarget,this.relatedTarget=t.relatedTarget):this.type=t,e&&yt.extend(this,e),this.timeStamp=t&&t.timeStamp||yt.now(),void(this[yt.expando]=!0)):new yt.Event(t,e)},yt.Event.prototype={constructor:yt.Event,isDefaultPrevented:S,isPropagationStopped:S,isImmediatePropagationStopped:S,isSimulated:!1,preventDefault:function(){var t=this.originalEvent;this.isDefaultPrevented=k,t&&!this.isSimulated&&t.preventDefault()},stopPropagation:function(){var t=this.originalEvent;this.isPropagationStopped=k,t&&!this.isSimulated&&t.stopPropagation()},stopImmediatePropagation:function(){var t=this.originalEvent;this.isImmediatePropagationStopped=k,t&&!this.isSimulated&&t.stopImmediatePropagation(),this.stopPropagation()}},yt.each({altKey:!0,bubbles:!0,cancelable:!0,changedTouches:!0,ctrlKey:!0,detail:!0,eventPhase:!0,metaKey:!0,pageX:!0,pageY:!0,shiftKey:!0,view:!0,char:!0,charCode:!0,key:!0,keyCode:!0,button:!0,buttons:!0,clientX:!0,clientY:!0,offsetX:!0,offsetY:!0,pointerId:!0,pointerType:!0,screenX:!0,screenY:!0,targetTouches:!0,toElement:!0,touches:!0,which:function(t){var e=t.button;return null==t.which&&ee.test(t.type)?null!=t.charCode?t.charCode:t.keyCode:!t.which&&void 0!==e&&ne.test(t.type)?1&e?1:2&e?3:4&e?2:0:t.which}},yt.event.addProp),yt.each({mouseenter:"mouseover",mouseleave:"mouseout",pointerenter:"pointerover",pointerleave:"pointerout"},function(t,e){yt.event.special[t]={delegateType:e,bindType:e,handle:function(t){var n,i=this,r=t.relatedTarget,o=t.handleObj;return r&&(r===i||yt.contains(i,r))||(t.type=o.origType,n=o.handler.apply(this,arguments),t.type=e),n}}}),yt.fn.extend({on:function(t,e,n,i){return $(this,t,e,n,i)},one:function(t,e,n,i){return $(this,t,e,n,i,1)},off:function(t,e,n){var i,r;if(t&&t.preventDefault&&t.handleObj)return i=t.handleObj,yt(t.delegateTarget).off(i.namespace?i.origType+"."+i.namespace:i.origType,i.selector,i.handler),this;if("object"==typeof t){for(r in t)this.off(r,e,t[r]);return this}return e!==!1&&"function"!=typeof e||(n=e,e=void 0),n===!1&&(n=S),this.each(function(){yt.event.remove(this,t,n,e)})}});var re=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([a-z][^\/\0>\x20\t\r\n\f]*)[^>]*)\/>/gi,oe=/<script|<style|<link/i,ae=/checked\s*(?:[^=]|=\s*.checked.)/i,se=/^true\/(.*)/,le=/^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g;yt.extend({htmlPrefilter:function(t){return t.replace(re,"<$1></$2>")},clone:function(t,e,n){var i,r,o,a,s=t.cloneNode(!0),l=yt.contains(t.ownerDocument,t);if(!(mt.noCloneChecked||1!==t.nodeType&&11!==t.nodeType||yt.isXMLDoc(t)))for(a=x(s),o=x(t),i=0,r=o.length;i<r;i++)j(o[i],a[i]);if(e)if(n)for(o=o||x(t),a=a||x(s),i=0,r=o.length;i<r;i++)O(o[i],a[i]);else O(t,s);return a=x(s,"script"),a.length>0&&w(a,!l&&x(t,"script")),s},cleanData:function(t){for(var e,n,i,r=yt.event.special,o=0;void 0!==(n=t[o]);o++)if(Ft(n)){if(e=n[Mt.expando]){if(e.events)for(i in e.events)r[i]?yt.event.remove(n,i):yt.removeEvent(n,i,e.handle);n[Mt.expando]=void 0}n[Ht.expando]&&(n[Ht.expando]=void 0)}}}),yt.fn.extend({detach:function(t){return I(this,t,!0)},remove:function(t){return I(this,t)},text:function(t){return Rt(this,function(t){return void 0===t?yt.text(this):this.empty().each(function(){1!==this.nodeType&&11!==this.nodeType&&9!==this.nodeType||(this.textContent=t)})},null,t,arguments.length)},append:function(){return D(this,arguments,function(t){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var e=A(this,t);e.appendChild(t)}})},prepend:function(){return D(this,arguments,function(t){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var e=A(this,t);e.insertBefore(t,e.firstChild)}})},before:function(){return D(this,arguments,function(t){this.parentNode&&this.parentNode.insertBefore(t,this)})},after:function(){return D(this,arguments,function(t){this.parentNode&&this.parentNode.insertBefore(t,this.nextSibling)})},empty:function(){for(var t,e=0;null!=(t=this[e]);e++)1===t.nodeType&&(yt.cleanData(x(t,!1)),t.textContent="");return this},clone:function(t,e){return t=null!=t&&t,e=null==e?t:e,this.map(function(){return yt.clone(this,t,e)})},html:function(t){return Rt(this,function(t){var e=this[0]||{},n=0,i=this.length;if(void 0===t&&1===e.nodeType)return e.innerHTML;if("string"==typeof t&&!oe.test(t)&&!Zt[(Yt.exec(t)||["",""])[1].toLowerCase()]){t=yt.htmlPrefilter(t);try{for(;n<i;n++)e=this[n]||{},1===e.nodeType&&(yt.cleanData(x(e,!1)),e.innerHTML=t);e=0}catch(t){}}e&&this.empty().append(t)},null,t,arguments.length)},replaceWith:function(){var t=[];return D(this,arguments,function(e){var n=this.parentNode;yt.inArray(this,t)<0&&(yt.cleanData(x(this)),n&&n.replaceChild(e,this))},t)}}),yt.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(t,e){yt.fn[t]=function(t){for(var n,i=[],r=yt(t),o=r.length-1,a=0;a<=o;a++)n=a===o?this:this.clone(!0),yt(r[a])[e](n),ct.apply(i,n.get());return this.pushStack(i)}});var ce=/^margin/,ue=new RegExp("^("+Bt+")(?!px)[a-z%]+$","i"),de=function(t){var e=t.ownerDocument.defaultView;return e&&e.opener||(e=n),e.getComputedStyle(t)};!function(){function t(){if(s){s.style.cssText="box-sizing:border-box;position:relative;display:block;margin:auto;border:1px;padding:1px;top:1%;width:50%",s.innerHTML="",te.appendChild(a);var t=n.getComputedStyle(s);e="1%"!==t.top,o="2px"===t.marginLeft,i="4px"===t.width,s.style.marginRight="50%",r="4px"===t.marginRight,te.removeChild(a),s=null}}var e,i,r,o,a=ot.createElement("div"),s=ot.createElement("div");s.style&&(s.style.backgroundClip="content-box",s.cloneNode(!0).style.backgroundClip="",mt.clearCloneStyle="content-box"===s.style.backgroundClip,a.style.cssText="border:0;width:8px;height:0;top:0;left:-9999px;padding:0;margin-top:1px;position:absolute",a.appendChild(s),yt.extend(mt,{pixelPosition:function(){return t(),e},boxSizingReliable:function(){return t(),i},pixelMarginRight:function(){return t(),r},reliableMarginLeft:function(){return t(),o}}))}();var fe=/^(none|table(?!-c[ea]).+)/,pe={position:"absolute",visibility:"hidden",display:"block"},he={letterSpacing:"0",fontWeight:"400"},ve=["Webkit","Moz","ms"],me=ot.createElement("div").style;yt.extend({cssHooks:{opacity:{get:function(t,e){if(e){var n=L(t,"opacity");return""===n?"1":n}}}},cssNumber:{animationIterationCount:!0,columnCount:!0,fillOpacity:!0,flexGrow:!0,flexShrink:!0,fontWeight:!0,lineHeight:!0,opacity:!0,order:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{float:"cssFloat"},style:function(t,e,n,i){if(t&&3!==t.nodeType&&8!==t.nodeType&&t.style){var r,o,a,s=yt.camelCase(e),l=t.style;return e=yt.cssProps[s]||(yt.cssProps[s]=R(s)||s),a=yt.cssHooks[e]||yt.cssHooks[s],void 0===n?a&&"get"in a&&void 0!==(r=a.get(t,!1,i))?r:l[e]:(o=typeof n,"string"===o&&(r=Vt.exec(n))&&r[1]&&(n=y(t,e,r),o="number"),null!=n&&n===n&&("number"===o&&(n+=r&&r[3]||(yt.cssNumber[s]?"":"px")),mt.clearCloneStyle||""!==n||0!==e.indexOf("background")||(l[e]="inherit"),a&&"set"in a&&void 0===(n=a.set(t,n,i))||(l[e]=n)),void 0)}},css:function(t,e,n,i){var r,o,a,s=yt.camelCase(e);return e=yt.cssProps[s]||(yt.cssProps[s]=R(s)||s),a=yt.cssHooks[e]||yt.cssHooks[s],a&&"get"in a&&(r=a.get(t,!0,n)),void 0===r&&(r=L(t,e,i)),"normal"===r&&e in he&&(r=he[e]),""===n||n?(o=parseFloat(r),n===!0||isFinite(o)?o||0:r):r}}),yt.each(["height","width"],function(t,e){yt.cssHooks[e]={get:function(t,n,i){if(n)return!fe.test(yt.css(t,"display"))||t.getClientRects().length&&t.getBoundingClientRect().width?H(t,e,i):Jt(t,pe,function(){return H(t,e,i)})},set:function(t,n,i){var r,o=i&&de(t),a=i&&M(t,e,i,"border-box"===yt.css(t,"boxSizing",!1,o),o);return a&&(r=Vt.exec(n))&&"px"!==(r[3]||"px")&&(t.style[e]=n,n=yt.css(t,e)),F(t,n,a)}}}),yt.cssHooks.marginLeft=P(mt.reliableMarginLeft,function(t,e){if(e)return(parseFloat(L(t,"marginLeft"))||t.getBoundingClientRect().left-Jt(t,{marginLeft:0},function(){return t.getBoundingClientRect().left}))+"px"}),yt.each({margin:"",padding:"",border:"Width"},function(t,e){yt.cssHooks[t+e]={expand:function(n){for(var i=0,r={},o="string"==typeof n?n.split(" "):[n];i<4;i++)r[t+zt[i]+e]=o[i]||o[i-2]||o[0];return r}},ce.test(t)||(yt.cssHooks[t+e].set=F)}),yt.fn.extend({css:function(t,e){return Rt(this,function(t,e,n){var i,r,o={},a=0;if(yt.isArray(e)){for(i=de(t),r=e.length;a<r;a++)o[e[a]]=yt.css(t,e[a],!1,i);return o}return void 0!==n?yt.style(t,e,n):yt.css(t,e)},t,e,arguments.length>1)}}),yt.Tween=q,q.prototype={constructor:q,init:function(t,e,n,i,r,o){this.elem=t,this.prop=n,this.easing=r||yt.easing._default,this.options=e,this.start=this.now=this.cur(),this.end=i,this.unit=o||(yt.cssNumber[n]?"":"px")},cur:function(){var t=q.propHooks[this.prop];return t&&t.get?t.get(this):q.propHooks._default.get(this)},run:function(t){var e,n=q.propHooks[this.prop];return this.options.duration?this.pos=e=yt.easing[this.easing](t,this.options.duration*t,0,1,this.options.duration):this.pos=e=t,this.now=(this.end-this.start)*e+this.start,this.options.step&&this.options.step.call(this.elem,this.now,this),n&&n.set?n.set(this):q.propHooks._default.set(this),this}},q.prototype.init.prototype=q.prototype,q.propHooks={_default:{get:function(t){var e;return 1!==t.elem.nodeType||null!=t.elem[t.prop]&&null==t.elem.style[t.prop]?t.elem[t.prop]:(e=yt.css(t.elem,t.prop,""),e&&"auto"!==e?e:0)},set:function(t){yt.fx.step[t.prop]?yt.fx.step[t.prop](t):1!==t.elem.nodeType||null==t.elem.style[yt.cssProps[t.prop]]&&!yt.cssHooks[t.prop]?t.elem[t.prop]=t.now:yt.style(t.elem,t.prop,t.now+t.unit)}}},q.propHooks.scrollTop=q.propHooks.scrollLeft={set:function(t){t.elem.nodeType&&t.elem.parentNode&&(t.elem[t.prop]=t.now)}},yt.easing={linear:function(t){return t},swing:function(t){return.5-Math.cos(t*Math.PI)/2},_default:"swing"},yt.fx=q.prototype.init,yt.fx.step={};var ge,ye,_e=/^(?:toggle|show|hide)$/,be=/queueHooks$/;yt.Animation=yt.extend(K,{tweeners:{"*":[function(t,e){var n=this.createTween(t,e);return y(n.elem,t,Vt.exec(e),n),n}]},tweener:function(t,e){yt.isFunction(t)?(e=t,t=["*"]):t=t.match(It);for(var n,i=0,r=t.length;i<r;i++)n=t[i],K.tweeners[n]=K.tweeners[n]||[],K.tweeners[n].unshift(e)},prefilters:[W],prefilter:function(t,e){e?K.prefilters.unshift(t):K.prefilters.push(t)}}),yt.speed=function(t,e,n){var i=t&&"object"==typeof t?yt.extend({},t):{complete:n||!n&&e||yt.isFunction(t)&&t,duration:t,easing:n&&e||e&&!yt.isFunction(e)&&e};return yt.fx.off||ot.hidden?i.duration=0:"number"!=typeof i.duration&&(i.duration in yt.fx.speeds?i.duration=yt.fx.speeds[i.duration]:i.duration=yt.fx.speeds._default),null!=i.queue&&i.queue!==!0||(i.queue="fx"),i.old=i.complete,i.complete=function(){yt.isFunction(i.old)&&i.old.call(this),i.queue&&yt.dequeue(this,i.queue)},i},yt.fn.extend({fadeTo:function(t,e,n,i){return this.filter(Wt).css("opacity",0).show().end().animate({opacity:e},t,n,i)},animate:function(t,e,n,i){var r=yt.isEmptyObject(t),o=yt.speed(e,n,i),a=function(){var e=K(this,yt.extend({},t),o);(r||Mt.get(this,"finish"))&&e.stop(!0)};return a.finish=a,r||o.queue===!1?this.each(a):this.queue(o.queue,a)},stop:function(t,e,n){var i=function(t){var e=t.stop;delete t.stop,e(n)};return"string"!=typeof t&&(n=e,e=t,t=void 0),e&&t!==!1&&this.queue(t||"fx",[]),this.each(function(){var e=!0,r=null!=t&&t+"queueHooks",o=yt.timers,a=Mt.get(this);if(r)a[r]&&a[r].stop&&i(a[r]);else for(r in a)a[r]&&a[r].stop&&be.test(r)&&i(a[r]);for(r=o.length;r--;)o[r].elem!==this||null!=t&&o[r].queue!==t||(o[r].anim.stop(n),e=!1,o.splice(r,1));!e&&n||yt.dequeue(this,t)})},finish:function(t){return t!==!1&&(t=t||"fx"),this.each(function(){var e,n=Mt.get(this),i=n[t+"queue"],r=n[t+"queueHooks"],o=yt.timers,a=i?i.length:0;for(n.finish=!0,yt.queue(this,t,[]),r&&r.stop&&r.stop.call(this,!0),e=o.length;e--;)o[e].elem===this&&o[e].queue===t&&(o[e].anim.stop(!0),o.splice(e,1));for(e=0;e<a;e++)i[e]&&i[e].finish&&i[e].finish.call(this);delete n.finish})}}),yt.each(["toggle","show","hide"],function(t,e){var n=yt.fn[e];yt.fn[e]=function(t,i,r){return null==t||"boolean"==typeof t?n.apply(this,arguments):this.animate(V(e,!0),t,i,r)}}),yt.each({slideDown:V("show"),slideUp:V("hide"),slideToggle:V("toggle"),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(t,e){yt.fn[t]=function(t,n,i){return this.animate(e,t,n,i)}}),yt.timers=[],yt.fx.tick=function(){var t,e=0,n=yt.timers;for(ge=yt.now();e<n.length;e++)t=n[e],t()||n[e]!==t||n.splice(e--,1);n.length||yt.fx.stop(),ge=void 0},yt.fx.timer=function(t){yt.timers.push(t),t()?yt.fx.start():yt.timers.pop()},yt.fx.interval=13,yt.fx.start=function(){ye||(ye=n.requestAnimationFrame?n.requestAnimationFrame(U):n.setInterval(yt.fx.tick,yt.fx.interval))},yt.fx.stop=function(){n.cancelAnimationFrame?n.cancelAnimationFrame(ye):n.clearInterval(ye),ye=null},yt.fx.speeds={slow:600,fast:200,_default:400},yt.fn.delay=function(t,e){return t=yt.fx?yt.fx.speeds[t]||t:t,e=e||"fx",this.queue(e,function(e,i){var r=n.setTimeout(e,t);i.stop=function(){n.clearTimeout(r)}})},function(){var t=ot.createElement("input"),e=ot.createElement("select"),n=e.appendChild(ot.createElement("option"));t.type="checkbox",mt.checkOn=""!==t.value,mt.optSelected=n.selected,t=ot.createElement("input"),t.value="t",t.type="radio",mt.radioValue="t"===t.value}();var xe,we=yt.expr.attrHandle;yt.fn.extend({attr:function(t,e){return Rt(this,yt.attr,t,e,arguments.length>1)},removeAttr:function(t){return this.each(function(){yt.removeAttr(this,t)})}}),yt.extend({attr:function(t,e,n){var i,r,o=t.nodeType;if(3!==o&&8!==o&&2!==o)return"undefined"==typeof t.getAttribute?yt.prop(t,e,n):(1===o&&yt.isXMLDoc(t)||(r=yt.attrHooks[e.toLowerCase()]||(yt.expr.match.bool.test(e)?xe:void 0)),void 0!==n?null===n?void yt.removeAttr(t,e):r&&"set"in r&&void 0!==(i=r.set(t,n,e))?i:(t.setAttribute(e,n+""),n):r&&"get"in r&&null!==(i=r.get(t,e))?i:(i=yt.find.attr(t,e),null==i?void 0:i))},attrHooks:{type:{set:function(t,e){if(!mt.radioValue&&"radio"===e&&yt.nodeName(t,"input")){var n=t.value;return t.setAttribute("type",e),n&&(t.value=n),e}}}},removeAttr:function(t,e){var n,i=0,r=e&&e.match(It);if(r&&1===t.nodeType)for(;n=r[i++];)t.removeAttribute(n)}}),xe={set:function(t,e,n){return e===!1?yt.removeAttr(t,n):t.setAttribute(n,n),n}},yt.each(yt.expr.match.bool.source.match(/\w+/g),function(t,e){var n=we[e]||yt.find.attr;we[e]=function(t,e,i){var r,o,a=e.toLowerCase();return i||(o=we[a],we[a]=r,r=null!=n(t,e,i)?a:null,we[a]=o),r}});var Ce=/^(?:input|select|textarea|button)$/i,ke=/^(?:a|area)$/i;yt.fn.extend({prop:function(t,e){return Rt(this,yt.prop,t,e,arguments.length>1)},removeProp:function(t){return this.each(function(){delete this[yt.propFix[t]||t]})}}),yt.extend({prop:function(t,e,n){var i,r,o=t.nodeType;if(3!==o&&8!==o&&2!==o)return 1===o&&yt.isXMLDoc(t)||(e=yt.propFix[e]||e,r=yt.propHooks[e]),void 0!==n?r&&"set"in r&&void 0!==(i=r.set(t,n,e))?i:t[e]=n:r&&"get"in r&&null!==(i=r.get(t,e))?i:t[e]},propHooks:{tabIndex:{get:function(t){var e=yt.find.attr(t,"tabindex");return e?parseInt(e,10):Ce.test(t.nodeName)||ke.test(t.nodeName)&&t.href?0:-1}}},propFix:{for:"htmlFor",class:"className"}}),mt.optSelected||(yt.propHooks.selected={get:function(t){var e=t.parentNode;return e&&e.parentNode&&e.parentNode.selectedIndex,null},set:function(t){var e=t.parentNode;e&&(e.selectedIndex,e.parentNode&&e.parentNode.selectedIndex)}}),yt.each(["tabIndex","readOnly","maxLength","cellSpacing","cellPadding","rowSpan","colSpan","useMap","frameBorder","contentEditable"],function(){yt.propFix[this.toLowerCase()]=this}),yt.fn.extend({addClass:function(t){var e,n,i,r,o,a,s,l=0;if(yt.isFunction(t))return this.each(function(e){yt(this).addClass(t.call(this,e,Y(this)))});if("string"==typeof t&&t)for(e=t.match(It)||[];n=this[l++];)if(r=Y(n),i=1===n.nodeType&&" "+X(r)+" "){for(a=0;o=e[a++];)i.indexOf(" "+o+" ")<0&&(i+=o+" ");s=X(i),r!==s&&n.setAttribute("class",s)}return this},removeClass:function(t){var e,n,i,r,o,a,s,l=0;if(yt.isFunction(t))return this.each(function(e){yt(this).removeClass(t.call(this,e,Y(this)))});if(!arguments.length)return this.attr("class","");if("string"==typeof t&&t)for(e=t.match(It)||[];n=this[l++];)if(r=Y(n),i=1===n.nodeType&&" "+X(r)+" "){for(a=0;o=e[a++];)for(;i.indexOf(" "+o+" ")>-1;)i=i.replace(" "+o+" "," ");s=X(i),r!==s&&n.setAttribute("class",s)}return this},toggleClass:function(t,e){var n=typeof t;return"boolean"==typeof e&&"string"===n?e?this.addClass(t):this.removeClass(t):yt.isFunction(t)?this.each(function(n){yt(this).toggleClass(t.call(this,n,Y(this),e),e)}):this.each(function(){var e,i,r,o;if("string"===n)for(i=0,r=yt(this),o=t.match(It)||[];e=o[i++];)r.hasClass(e)?r.removeClass(e):r.addClass(e);else void 0!==t&&"boolean"!==n||(e=Y(this),e&&Mt.set(this,"__className__",e),this.setAttribute&&this.setAttribute("class",e||t===!1?"":Mt.get(this,"__className__")||""))})},hasClass:function(t){var e,n,i=0;for(e=" "+t+" ";n=this[i++];)if(1===n.nodeType&&(" "+X(Y(n))+" ").indexOf(e)>-1)return!0;return!1}});var Se=/\r/g;yt.fn.extend({val:function(t){var e,n,i,r=this[0];{if(arguments.length)return i=yt.isFunction(t),this.each(function(n){var r;1===this.nodeType&&(r=i?t.call(this,n,yt(this).val()):t,null==r?r="":"number"==typeof r?r+="":yt.isArray(r)&&(r=yt.map(r,function(t){return null==t?"":t+""})),e=yt.valHooks[this.type]||yt.valHooks[this.nodeName.toLowerCase()],e&&"set"in e&&void 0!==e.set(this,r,"value")||(this.value=r))});if(r)return e=yt.valHooks[r.type]||yt.valHooks[r.nodeName.toLowerCase()],e&&"get"in e&&void 0!==(n=e.get(r,"value"))?n:(n=r.value,"string"==typeof n?n.replace(Se,""):null==n?"":n)}}}),yt.extend({valHooks:{option:{get:function(t){var e=yt.find.attr(t,"value");return null!=e?e:X(yt.text(t))}},select:{get:function(t){var e,n,i,r=t.options,o=t.selectedIndex,a="select-one"===t.type,s=a?null:[],l=a?o+1:r.length;for(i=o<0?l:a?o:0;i<l;i++)if(n=r[i],(n.selected||i===o)&&!n.disabled&&(!n.parentNode.disabled||!yt.nodeName(n.parentNode,"optgroup"))){if(e=yt(n).val(),a)return e;s.push(e)}return s},set:function(t,e){for(var n,i,r=t.options,o=yt.makeArray(e),a=r.length;a--;)i=r[a],(i.selected=yt.inArray(yt.valHooks.option.get(i),o)>-1)&&(n=!0);return n||(t.selectedIndex=-1),o}}}}),yt.each(["radio","checkbox"],function(){yt.valHooks[this]={set:function(t,e){if(yt.isArray(e))return t.checked=yt.inArray(yt(t).val(),e)>-1}},mt.checkOn||(yt.valHooks[this].get=function(t){return null===t.getAttribute("value")?"on":t.value})});var Te=/^(?:focusinfocus|focusoutblur)$/;yt.extend(yt.event,{trigger:function(t,e,i,r){var o,a,s,l,c,u,d,f=[i||ot],p=pt.call(t,"type")?t.type:t,h=pt.call(t,"namespace")?t.namespace.split("."):[];if(a=s=i=i||ot,3!==i.nodeType&&8!==i.nodeType&&!Te.test(p+yt.event.triggered)&&(p.indexOf(".")>-1&&(h=p.split("."),p=h.shift(),h.sort()),c=p.indexOf(":")<0&&"on"+p,t=t[yt.expando]?t:new yt.Event(p,"object"==typeof t&&t),t.isTrigger=r?2:3,t.namespace=h.join("."),t.rnamespace=t.namespace?new RegExp("(^|\\.)"+h.join("\\.(?:.*\\.|)")+"(\\.|$)"):null,t.result=void 0,t.target||(t.target=i),e=null==e?[t]:yt.makeArray(e,[t]),d=yt.event.special[p]||{},r||!d.trigger||d.trigger.apply(i,e)!==!1)){if(!r&&!d.noBubble&&!yt.isWindow(i)){for(l=d.delegateType||p,Te.test(l+p)||(a=a.parentNode);a;a=a.parentNode)f.push(a),s=a;s===(i.ownerDocument||ot)&&f.push(s.defaultView||s.parentWindow||n)}for(o=0;(a=f[o++])&&!t.isPropagationStopped();)t.type=o>1?l:d.bindType||p,u=(Mt.get(a,"events")||{})[t.type]&&Mt.get(a,"handle"),u&&u.apply(a,e),u=c&&a[c],u&&u.apply&&Ft(a)&&(t.result=u.apply(a,e),t.result===!1&&t.preventDefault());return t.type=p,r||t.isDefaultPrevented()||d._default&&d._default.apply(f.pop(),e)!==!1||!Ft(i)||c&&yt.isFunction(i[p])&&!yt.isWindow(i)&&(s=i[c],s&&(i[c]=null),yt.event.triggered=p,i[p](),yt.event.triggered=void 0,s&&(i[c]=s)),t.result}},simulate:function(t,e,n){var i=yt.extend(new yt.Event,n,{type:t,isSimulated:!0});yt.event.trigger(i,null,e)}}),yt.fn.extend({trigger:function(t,e){return this.each(function(){yt.event.trigger(t,e,this)})},triggerHandler:function(t,e){var n=this[0];if(n)return yt.event.trigger(t,e,n,!0)}}),yt.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "),function(t,e){yt.fn[e]=function(t,n){return arguments.length>0?this.on(e,null,t,n):this.trigger(e)}}),yt.fn.extend({hover:function(t,e){return this.mouseenter(t).mouseleave(e||t)}}),mt.focusin="onfocusin"in n,mt.focusin||yt.each({focus:"focusin",blur:"focusout"},function(t,e){var n=function(t){yt.event.simulate(e,t.target,yt.event.fix(t))};yt.event.special[e]={setup:function(){var i=this.ownerDocument||this,r=Mt.access(i,e);r||i.addEventListener(t,n,!0),Mt.access(i,e,(r||0)+1)},teardown:function(){var i=this.ownerDocument||this,r=Mt.access(i,e)-1;r?Mt.access(i,e,r):(i.removeEventListener(t,n,!0),Mt.remove(i,e))}}});var $e=n.location,Ae=yt.now(),Ee=/\?/;yt.parseXML=function(t){var e;if(!t||"string"!=typeof t)return null;try{e=(new n.DOMParser).parseFromString(t,"text/xml")}catch(t){e=void 0}return e&&!e.getElementsByTagName("parsererror").length||yt.error("Invalid XML: "+t),e};var Ne=/\[\]$/,Oe=/\r?\n/g,je=/^(?:submit|button|image|reset|file)$/i,De=/^(?:input|select|textarea|keygen)/i;yt.param=function(t,e){var n,i=[],r=function(t,e){var n=yt.isFunction(e)?e():e;i[i.length]=encodeURIComponent(t)+"="+encodeURIComponent(null==n?"":n)};if(yt.isArray(t)||t.jquery&&!yt.isPlainObject(t))yt.each(t,function(){r(this.name,this.value)});else for(n in t)G(n,t[n],e,r);return i.join("&")},yt.fn.extend({serialize:function(){return yt.param(this.serializeArray())},serializeArray:function(){return this.map(function(){var t=yt.prop(this,"elements");return t?yt.makeArray(t):this}).filter(function(){var t=this.type;return this.name&&!yt(this).is(":disabled")&&De.test(this.nodeName)&&!je.test(t)&&(this.checked||!Xt.test(t))}).map(function(t,e){var n=yt(this).val();return null==n?null:yt.isArray(n)?yt.map(n,function(t){return{name:e.name,value:t.replace(Oe,"\r\n")}}):{name:e.name,value:n.replace(Oe,"\r\n")}}).get()}});var Ie=/%20/g,Le=/#.*$/,Pe=/([?&])_=[^&]*/,Re=/^(.*?):[ \t]*([^\r\n]*)$/gm,Fe=/^(?:about|app|app-storage|.+-extension|file|res|widget):$/,Me=/^(?:GET|HEAD)$/,He=/^\/\//,qe={},Ue={},Be="*/".concat("*"),Ve=ot.createElement("a");Ve.href=$e.href,yt.extend({active:0,lastModified:{},etag:{},ajaxSettings:{url:$e.href,type:"GET",isLocal:Fe.test($e.protocol),global:!0,processData:!0,async:!0,contentType:"application/x-www-form-urlencoded; charset=UTF-8",accepts:{"*":Be,text:"text/plain",html:"text/html",xml:"application/xml, text/xml",json:"application/json, text/javascript"},contents:{xml:/\bxml\b/,html:/\bhtml/,json:/\bjson\b/},responseFields:{xml:"responseXML",text:"responseText",json:"responseJSON"},converters:{"* text":String,"text html":!0,"text json":JSON.parse,"text xml":yt.parseXML},flatOptions:{url:!0,context:!0}},ajaxSetup:function(t,e){return e?tt(tt(t,yt.ajaxSettings),e):tt(yt.ajaxSettings,t)},ajaxPrefilter:Z(qe),ajaxTransport:Z(Ue),ajax:function(t,e){function i(t,e,i,s){var c,f,p,b,x,w=e;u||(u=!0,l&&n.clearTimeout(l),r=void 0,a=s||"",C.readyState=t>0?4:0,c=t>=200&&t<300||304===t,i&&(b=et(h,C,i)),b=nt(h,b,C,c),c?(h.ifModified&&(x=C.getResponseHeader("Last-Modified"),x&&(yt.lastModified[o]=x),x=C.getResponseHeader("etag"),x&&(yt.etag[o]=x)),204===t||"HEAD"===h.type?w="nocontent":304===t?w="notmodified":(w=b.state,f=b.data,p=b.error,c=!p)):(p=w,!t&&w||(w="error",t<0&&(t=0))),C.status=t,C.statusText=(e||w)+"",c?g.resolveWith(v,[f,w,C]):g.rejectWith(v,[C,w,p]),C.statusCode(_),_=void 0,d&&m.trigger(c?"ajaxSuccess":"ajaxError",[C,h,c?f:p]),y.fireWith(v,[C,w]),d&&(m.trigger("ajaxComplete",[C,h]),--yt.active||yt.event.trigger("ajaxStop")))}"object"==typeof t&&(e=t,t=void 0),e=e||{};var r,o,a,s,l,c,u,d,f,p,h=yt.ajaxSetup({},e),v=h.context||h,m=h.context&&(v.nodeType||v.jquery)?yt(v):yt.event,g=yt.Deferred(),y=yt.Callbacks("once memory"),_=h.statusCode||{},b={},x={},w="canceled",C={readyState:0,getResponseHeader:function(t){var e;if(u){if(!s)for(s={};e=Re.exec(a);)s[e[1].toLowerCase()]=e[2];e=s[t.toLowerCase()]}return null==e?null:e},getAllResponseHeaders:function(){return u?a:null},setRequestHeader:function(t,e){return null==u&&(t=x[t.toLowerCase()]=x[t.toLowerCase()]||t,b[t]=e),this},overrideMimeType:function(t){return null==u&&(h.mimeType=t),this},statusCode:function(t){var e;if(t)if(u)C.always(t[C.status]);else for(e in t)_[e]=[_[e],t[e]];return this},abort:function(t){var e=t||w;return r&&r.abort(e),i(0,e),this}};if(g.promise(C),h.url=((t||h.url||$e.href)+"").replace(He,$e.protocol+"//"),h.type=e.method||e.type||h.method||h.type,h.dataTypes=(h.dataType||"*").toLowerCase().match(It)||[""],null==h.crossDomain){c=ot.createElement("a");try{c.href=h.url,c.href=c.href,h.crossDomain=Ve.protocol+"//"+Ve.host!=c.protocol+"//"+c.host}catch(t){h.crossDomain=!0}}if(h.data&&h.processData&&"string"!=typeof h.data&&(h.data=yt.param(h.data,h.traditional)),Q(qe,h,e,C),u)return C;d=yt.event&&h.global,d&&0===yt.active++&&yt.event.trigger("ajaxStart"),h.type=h.type.toUpperCase(),h.hasContent=!Me.test(h.type),o=h.url.replace(Le,""),h.hasContent?h.data&&h.processData&&0===(h.contentType||"").indexOf("application/x-www-form-urlencoded")&&(h.data=h.data.replace(Ie,"+")):(p=h.url.slice(o.length),h.data&&(o+=(Ee.test(o)?"&":"?")+h.data,delete h.data),h.cache===!1&&(o=o.replace(Pe,"$1"),p=(Ee.test(o)?"&":"?")+"_="+Ae++ +p),h.url=o+p),h.ifModified&&(yt.lastModified[o]&&C.setRequestHeader("If-Modified-Since",yt.lastModified[o]),yt.etag[o]&&C.setRequestHeader("If-None-Match",yt.etag[o])),(h.data&&h.hasContent&&h.contentType!==!1||e.contentType)&&C.setRequestHeader("Content-Type",h.contentType),C.setRequestHeader("Accept",h.dataTypes[0]&&h.accepts[h.dataTypes[0]]?h.accepts[h.dataTypes[0]]+("*"!==h.dataTypes[0]?", "+Be+"; q=0.01":""):h.accepts["*"]);for(f in h.headers)C.setRequestHeader(f,h.headers[f]);if(h.beforeSend&&(h.beforeSend.call(v,C,h)===!1||u))return C.abort();if(w="abort",y.add(h.complete),C.done(h.success),C.fail(h.error),r=Q(Ue,h,e,C)){if(C.readyState=1,d&&m.trigger("ajaxSend",[C,h]),u)return C;h.async&&h.timeout>0&&(l=n.setTimeout(function(){C.abort("timeout")},h.timeout));try{u=!1,r.send(b,i)}catch(t){if(u)throw t;i(-1,t)}}else i(-1,"No Transport");return C},getJSON:function(t,e,n){return yt.get(t,e,n,"json")},getScript:function(t,e){return yt.get(t,void 0,e,"script")}}),yt.each(["get","post"],function(t,e){yt[e]=function(t,n,i,r){return yt.isFunction(n)&&(r=r||i,i=n,n=void 0),yt.ajax(yt.extend({url:t,type:e,dataType:r,data:n,success:i},yt.isPlainObject(t)&&t))}}),yt._evalUrl=function(t){return yt.ajax({url:t,type:"GET",dataType:"script",cache:!0,async:!1,global:!1,throws:!0})},yt.fn.extend({wrapAll:function(t){var e;return this[0]&&(yt.isFunction(t)&&(t=t.call(this[0])),e=yt(t,this[0].ownerDocument).eq(0).clone(!0),this[0].parentNode&&e.insertBefore(this[0]),e.map(function(){for(var t=this;t.firstElementChild;)t=t.firstElementChild;return t}).append(this)),this},wrapInner:function(t){return yt.isFunction(t)?this.each(function(e){yt(this).wrapInner(t.call(this,e))}):this.each(function(){var e=yt(this),n=e.contents();n.length?n.wrapAll(t):e.append(t)})},wrap:function(t){var e=yt.isFunction(t);return this.each(function(n){yt(this).wrapAll(e?t.call(this,n):t)})},unwrap:function(t){return this.parent(t).not("body").each(function(){
yt(this).replaceWith(this.childNodes)}),this}}),yt.expr.pseudos.hidden=function(t){return!yt.expr.pseudos.visible(t)},yt.expr.pseudos.visible=function(t){return!!(t.offsetWidth||t.offsetHeight||t.getClientRects().length)},yt.ajaxSettings.xhr=function(){try{return new n.XMLHttpRequest}catch(t){}};var ze={0:200,1223:204},We=yt.ajaxSettings.xhr();mt.cors=!!We&&"withCredentials"in We,mt.ajax=We=!!We,yt.ajaxTransport(function(t){var e,i;if(mt.cors||We&&!t.crossDomain)return{send:function(r,o){var a,s=t.xhr();if(s.open(t.type,t.url,t.async,t.username,t.password),t.xhrFields)for(a in t.xhrFields)s[a]=t.xhrFields[a];t.mimeType&&s.overrideMimeType&&s.overrideMimeType(t.mimeType),t.crossDomain||r["X-Requested-With"]||(r["X-Requested-With"]="XMLHttpRequest");for(a in r)s.setRequestHeader(a,r[a]);e=function(t){return function(){e&&(e=i=s.onload=s.onerror=s.onabort=s.onreadystatechange=null,"abort"===t?s.abort():"error"===t?"number"!=typeof s.status?o(0,"error"):o(s.status,s.statusText):o(ze[s.status]||s.status,s.statusText,"text"!==(s.responseType||"text")||"string"!=typeof s.responseText?{binary:s.response}:{text:s.responseText},s.getAllResponseHeaders()))}},s.onload=e(),i=s.onerror=e("error"),void 0!==s.onabort?s.onabort=i:s.onreadystatechange=function(){4===s.readyState&&n.setTimeout(function(){e&&i()})},e=e("abort");try{s.send(t.hasContent&&t.data||null)}catch(t){if(e)throw t}},abort:function(){e&&e()}}}),yt.ajaxPrefilter(function(t){t.crossDomain&&(t.contents.script=!1)}),yt.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/\b(?:java|ecma)script\b/},converters:{"text script":function(t){return yt.globalEval(t),t}}}),yt.ajaxPrefilter("script",function(t){void 0===t.cache&&(t.cache=!1),t.crossDomain&&(t.type="GET")}),yt.ajaxTransport("script",function(t){if(t.crossDomain){var e,n;return{send:function(i,r){e=yt("<script>").prop({charset:t.scriptCharset,src:t.url}).on("load error",n=function(t){e.remove(),n=null,t&&r("error"===t.type?404:200,t.type)}),ot.head.appendChild(e[0])},abort:function(){n&&n()}}}});var Je=[],Ke=/(=)\?(?=&|$)|\?\?/;yt.ajaxSetup({jsonp:"callback",jsonpCallback:function(){var t=Je.pop()||yt.expando+"_"+Ae++;return this[t]=!0,t}}),yt.ajaxPrefilter("json jsonp",function(t,e,i){var r,o,a,s=t.jsonp!==!1&&(Ke.test(t.url)?"url":"string"==typeof t.data&&0===(t.contentType||"").indexOf("application/x-www-form-urlencoded")&&Ke.test(t.data)&&"data");if(s||"jsonp"===t.dataTypes[0])return r=t.jsonpCallback=yt.isFunction(t.jsonpCallback)?t.jsonpCallback():t.jsonpCallback,s?t[s]=t[s].replace(Ke,"$1"+r):t.jsonp!==!1&&(t.url+=(Ee.test(t.url)?"&":"?")+t.jsonp+"="+r),t.converters["script json"]=function(){return a||yt.error(r+" was not called"),a[0]},t.dataTypes[0]="json",o=n[r],n[r]=function(){a=arguments},i.always(function(){void 0===o?yt(n).removeProp(r):n[r]=o,t[r]&&(t.jsonpCallback=e.jsonpCallback,Je.push(r)),a&&yt.isFunction(o)&&o(a[0]),a=o=void 0}),"script"}),mt.createHTMLDocument=function(){var t=ot.implementation.createHTMLDocument("").body;return t.innerHTML="<form></form><form></form>",2===t.childNodes.length}(),yt.parseHTML=function(t,e,n){if("string"!=typeof t)return[];"boolean"==typeof e&&(n=e,e=!1);var i,r,o;return e||(mt.createHTMLDocument?(e=ot.implementation.createHTMLDocument(""),i=e.createElement("base"),i.href=ot.location.href,e.head.appendChild(i)):e=ot),r=$t.exec(t),o=!n&&[],r?[e.createElement(r[1])]:(r=C([t],e,o),o&&o.length&&yt(o).remove(),yt.merge([],r.childNodes))},yt.fn.load=function(t,e,n){var i,r,o,a=this,s=t.indexOf(" ");return s>-1&&(i=X(t.slice(s)),t=t.slice(0,s)),yt.isFunction(e)?(n=e,e=void 0):e&&"object"==typeof e&&(r="POST"),a.length>0&&yt.ajax({url:t,type:r||"GET",dataType:"html",data:e}).done(function(t){o=arguments,a.html(i?yt("<div>").append(yt.parseHTML(t)).find(i):t)}).always(n&&function(t,e){a.each(function(){n.apply(this,o||[t.responseText,e,t])})}),this},yt.each(["ajaxStart","ajaxStop","ajaxComplete","ajaxError","ajaxSuccess","ajaxSend"],function(t,e){yt.fn[e]=function(t){return this.on(e,t)}}),yt.expr.pseudos.animated=function(t){return yt.grep(yt.timers,function(e){return t===e.elem}).length},yt.offset={setOffset:function(t,e,n){var i,r,o,a,s,l,c,u=yt.css(t,"position"),d=yt(t),f={};"static"===u&&(t.style.position="relative"),s=d.offset(),o=yt.css(t,"top"),l=yt.css(t,"left"),c=("absolute"===u||"fixed"===u)&&(o+l).indexOf("auto")>-1,c?(i=d.position(),a=i.top,r=i.left):(a=parseFloat(o)||0,r=parseFloat(l)||0),yt.isFunction(e)&&(e=e.call(t,n,yt.extend({},s))),null!=e.top&&(f.top=e.top-s.top+a),null!=e.left&&(f.left=e.left-s.left+r),"using"in e?e.using.call(t,f):d.css(f)}},yt.fn.extend({offset:function(t){if(arguments.length)return void 0===t?this:this.each(function(e){yt.offset.setOffset(this,t,e)});var e,n,i,r,o=this[0];if(o)return o.getClientRects().length?(i=o.getBoundingClientRect(),i.width||i.height?(r=o.ownerDocument,n=it(r),e=r.documentElement,{top:i.top+n.pageYOffset-e.clientTop,left:i.left+n.pageXOffset-e.clientLeft}):i):{top:0,left:0}},position:function(){if(this[0]){var t,e,n=this[0],i={top:0,left:0};return"fixed"===yt.css(n,"position")?e=n.getBoundingClientRect():(t=this.offsetParent(),e=this.offset(),yt.nodeName(t[0],"html")||(i=t.offset()),i={top:i.top+yt.css(t[0],"borderTopWidth",!0),left:i.left+yt.css(t[0],"borderLeftWidth",!0)}),{top:e.top-i.top-yt.css(n,"marginTop",!0),left:e.left-i.left-yt.css(n,"marginLeft",!0)}}},offsetParent:function(){return this.map(function(){for(var t=this.offsetParent;t&&"static"===yt.css(t,"position");)t=t.offsetParent;return t||te})}}),yt.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(t,e){var n="pageYOffset"===e;yt.fn[t]=function(i){return Rt(this,function(t,i,r){var o=it(t);return void 0===r?o?o[e]:t[i]:void(o?o.scrollTo(n?o.pageXOffset:r,n?r:o.pageYOffset):t[i]=r)},t,i,arguments.length)}}),yt.each(["top","left"],function(t,e){yt.cssHooks[e]=P(mt.pixelPosition,function(t,n){if(n)return n=L(t,e),ue.test(n)?yt(t).position()[e]+"px":n})}),yt.each({Height:"height",Width:"width"},function(t,e){yt.each({padding:"inner"+t,content:e,"":"outer"+t},function(n,i){yt.fn[i]=function(r,o){var a=arguments.length&&(n||"boolean"!=typeof r),s=n||(r===!0||o===!0?"margin":"border");return Rt(this,function(e,n,r){var o;return yt.isWindow(e)?0===i.indexOf("outer")?e["inner"+t]:e.document.documentElement["client"+t]:9===e.nodeType?(o=e.documentElement,Math.max(e.body["scroll"+t],o["scroll"+t],e.body["offset"+t],o["offset"+t],o["client"+t])):void 0===r?yt.css(e,n,s):yt.style(e,n,r,s)},e,a?r:void 0,a)}})}),yt.fn.extend({bind:function(t,e,n){return this.on(t,null,e,n)},unbind:function(t,e){return this.off(t,null,e)},delegate:function(t,e,n,i){return this.on(e,t,n,i)},undelegate:function(t,e,n){return 1===arguments.length?this.off(t,"**"):this.off(e,t||"**",n)}}),yt.parseJSON=JSON.parse,i=[],r=function(){return yt}.apply(e,i),!(void 0!==r&&(t.exports=r));var Xe=n.jQuery,Ye=n.$;return yt.noConflict=function(t){return n.$===yt&&(n.$=Ye),t&&n.jQuery===yt&&(n.jQuery=Xe),yt},o||(n.jQuery=n.$=yt),yt})},function(t,e,n){"use strict";(function(e){function i(t,e){!o.isUndefined(t)&&o.isUndefined(t["Content-Type"])&&(t["Content-Type"]=e)}function r(){var t;return"undefined"!=typeof XMLHttpRequest?t=n(6):"undefined"!=typeof e&&(t=n(6)),t}var o=n(1),a=n(27),s=/^\)\]\}',?\n/,l={"Content-Type":"application/x-www-form-urlencoded"},c={adapter:r(),transformRequest:[function(t,e){return a(e,"Content-Type"),o.isFormData(t)||o.isArrayBuffer(t)||o.isStream(t)||o.isFile(t)||o.isBlob(t)?t:o.isArrayBufferView(t)?t.buffer:o.isURLSearchParams(t)?(i(e,"application/x-www-form-urlencoded;charset=utf-8"),t.toString()):o.isObject(t)?(i(e,"application/json;charset=utf-8"),JSON.stringify(t)):t}],transformResponse:[function(t){if("string"==typeof t){t=t.replace(s,"");try{t=JSON.parse(t)}catch(t){}}return t}],timeout:0,xsrfCookieName:"XSRF-TOKEN",xsrfHeaderName:"X-XSRF-TOKEN",maxContentLength:-1,validateStatus:function(t){return t>=200&&t<300}};c.headers={common:{Accept:"application/json, text/plain, */*"}},o.forEach(["delete","get","head"],function(t){c.headers[t]={}}),o.forEach(["post","put","patch"],function(t){c.headers[t]=o.merge(l)}),t.exports=c}).call(e,n(51))},function(t,e,n){"use strict";var i=n(1),r=n(19),o=n(22),a=n(28),s=n(26),l=n(9),c="undefined"!=typeof window&&window.btoa&&window.btoa.bind(window)||n(21);t.exports=function(t){return new Promise(function(e,u){var d=t.data,f=t.headers;i.isFormData(d)&&delete f["Content-Type"];var p=new XMLHttpRequest,h="onreadystatechange",v=!1;if("undefined"==typeof window||!window.XDomainRequest||"withCredentials"in p||s(t.url)||(p=new window.XDomainRequest,h="onload",v=!0,p.onprogress=function(){},p.ontimeout=function(){}),t.auth){var m=t.auth.username||"",g=t.auth.password||"";f.Authorization="Basic "+c(m+":"+g)}if(p.open(t.method.toUpperCase(),o(t.url,t.params,t.paramsSerializer),!0),p.timeout=t.timeout,p[h]=function(){if(p&&(4===p.readyState||v)&&(0!==p.status||p.responseURL&&0===p.responseURL.indexOf("file:"))){var n="getAllResponseHeaders"in p?a(p.getAllResponseHeaders()):null,i=t.responseType&&"text"!==t.responseType?p.response:p.responseText,o={data:i,status:1223===p.status?204:p.status,statusText:1223===p.status?"No Content":p.statusText,headers:n,config:t,request:p};r(e,u,o),p=null}},p.onerror=function(){u(l("Network Error",t)),p=null},p.ontimeout=function(){u(l("timeout of "+t.timeout+"ms exceeded",t,"ECONNABORTED")),p=null},i.isStandardBrowserEnv()){var y=n(24),_=(t.withCredentials||s(t.url))&&t.xsrfCookieName?y.read(t.xsrfCookieName):void 0;_&&(f[t.xsrfHeaderName]=_)}if("setRequestHeader"in p&&i.forEach(f,function(t,e){"undefined"==typeof d&&"content-type"===e.toLowerCase()?delete f[e]:p.setRequestHeader(e,t)}),t.withCredentials&&(p.withCredentials=!0),t.responseType)try{p.responseType=t.responseType}catch(t){if("json"!==p.responseType)throw t}"function"==typeof t.onDownloadProgress&&p.addEventListener("progress",t.onDownloadProgress),"function"==typeof t.onUploadProgress&&p.upload&&p.upload.addEventListener("progress",t.onUploadProgress),t.cancelToken&&t.cancelToken.promise.then(function(t){p&&(p.abort(),u(t),p=null)}),void 0===d&&(d=null),p.send(d)})}},function(t,e,n){"use strict";function i(t){this.message=t}i.prototype.toString=function(){return"Cancel"+(this.message?": "+this.message:"")},i.prototype.__CANCEL__=!0,t.exports=i},function(t,e,n){"use strict";t.exports=function(t){return!(!t||!t.__CANCEL__)}},function(t,e,n){"use strict";var i=n(18);t.exports=function(t,e,n,r){var o=new Error(t);return i(o,e,n,r)}},function(t,e,n){"use strict";t.exports=function(t,e){return function(){for(var n=new Array(arguments.length),i=0;i<n.length;i++)n[i]=arguments[i];return t.apply(e,n)}}},function(t,e,n){n(43),window.Event=new Vue,Vue.component("notifications",n(53)),Vue.component("notifications-table",n(52)),Vue.component("scholarships-create",n(59)),Vue.component("users-table",n(54)),Vue.component("schools-table",n(61)),Vue.component("scholarships-view",n(60)),Vue.component("students-view",n(62)),Vue.component("teachers-view",n(64)),Vue.component("resource-requests",n(58)),Vue.component("studies-select",n(63)),Vue.component("passport-clients",n(56)),Vue.component("passport-authorized-clients",n(55)),Vue.component("passport-personal-access-tokens",n(57));new Vue({el:"#app"})},function(t,e,n){t.exports=n(13)},function(t,e,n){"use strict";function i(t){var e=new a(t),n=o(a.prototype.request,e);return r.extend(n,a.prototype,e),r.extend(n,e),n}var r=n(1),o=n(10),a=n(15),s=n(5),l=i(s);l.Axios=a,l.create=function(t){return i(r.merge(s,t))},l.Cancel=n(7),l.CancelToken=n(14),l.isCancel=n(8),l.all=function(t){return Promise.all(t)},l.spread=n(29),t.exports=l,t.exports.default=l},function(t,e,n){"use strict";function i(t){if("function"!=typeof t)throw new TypeError("executor must be a function.");var e;this.promise=new Promise(function(t){e=t});var n=this;t(function(t){n.reason||(n.reason=new r(t),e(n.reason))})}var r=n(7);i.prototype.throwIfRequested=function(){if(this.reason)throw this.reason},i.source=function(){var t,e=new i(function(e){t=e});return{token:e,cancel:t}},t.exports=i},function(t,e,n){"use strict";function i(t){this.defaults=t,this.interceptors={request:new a,response:new a}}var r=n(5),o=n(1),a=n(16),s=n(17),l=n(25),c=n(23);i.prototype.request=function(t){"string"==typeof t&&(t=o.merge({url:arguments[0]},arguments[1])),t=o.merge(r,this.defaults,{method:"get"},t),t.baseURL&&!l(t.url)&&(t.url=c(t.baseURL,t.url));var e=[s,void 0],n=Promise.resolve(t);for(this.interceptors.request.forEach(function(t){e.unshift(t.fulfilled,t.rejected)}),this.interceptors.response.forEach(function(t){e.push(t.fulfilled,t.rejected)});e.length;)n=n.then(e.shift(),e.shift());return n},o.forEach(["delete","get","head"],function(t){i.prototype[t]=function(e,n){return this.request(o.merge(n||{},{method:t,url:e}))}}),o.forEach(["post","put","patch"],function(t){i.prototype[t]=function(e,n,i){return this.request(o.merge(i||{},{method:t,url:e,data:n}))}}),t.exports=i},function(t,e,n){"use strict";function i(){this.handlers=[]}var r=n(1);i.prototype.use=function(t,e){return this.handlers.push({fulfilled:t,rejected:e}),this.handlers.length-1},i.prototype.eject=function(t){this.handlers[t]&&(this.handlers[t]=null)},i.prototype.forEach=function(t){r.forEach(this.handlers,function(e){null!==e&&t(e)})},t.exports=i},function(t,e,n){"use strict";function i(t){t.cancelToken&&t.cancelToken.throwIfRequested()}var r=n(1),o=n(20),a=n(8),s=n(5);t.exports=function(t){i(t),t.headers=t.headers||{},t.data=o(t.data,t.headers,t.transformRequest),t.headers=r.merge(t.headers.common||{},t.headers[t.method]||{},t.headers||{}),r.forEach(["delete","get","head","post","put","patch","common"],function(e){delete t.headers[e]});var e=t.adapter||s.adapter;return e(t).then(function(e){return i(t),e.data=o(e.data,e.headers,t.transformResponse),e},function(e){return a(e)||(i(t),e&&e.response&&(e.response.data=o(e.response.data,e.response.headers,t.transformResponse))),Promise.reject(e)})}},function(t,e,n){"use strict";t.exports=function(t,e,n,i){return t.config=e,n&&(t.code=n),t.response=i,t}},function(t,e,n){"use strict";var i=n(9);t.exports=function(t,e,n){var r=n.config.validateStatus;n.status&&r&&!r(n.status)?e(i("Request failed with status code "+n.status,n.config,null,n)):t(n)}},function(t,e,n){"use strict";var i=n(1);t.exports=function(t,e,n){return i.forEach(n,function(n){t=n(t,e)}),t}},function(t,e,n){"use strict";function i(){this.message="String contains an invalid character"}function r(t){for(var e,n,r=String(t),a="",s=0,l=o;r.charAt(0|s)||(l="=",s%1);a+=l.charAt(63&e>>8-s%1*8)){if(n=r.charCodeAt(s+=.75),n>255)throw new i;e=e<<8|n}return a}var o="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";i.prototype=new Error,i.prototype.code=5,i.prototype.name="InvalidCharacterError",t.exports=r},function(t,e,n){"use strict";function i(t){return encodeURIComponent(t).replace(/%40/gi,"@").replace(/%3A/gi,":").replace(/%24/g,"$").replace(/%2C/gi,",").replace(/%20/g,"+").replace(/%5B/gi,"[").replace(/%5D/gi,"]")}var r=n(1);t.exports=function(t,e,n){if(!e)return t;var o;if(n)o=n(e);else if(r.isURLSearchParams(e))o=e.toString();else{var a=[];r.forEach(e,function(t,e){null!==t&&"undefined"!=typeof t&&(r.isArray(t)&&(e+="[]"),r.isArray(t)||(t=[t]),r.forEach(t,function(t){r.isDate(t)?t=t.toISOString():r.isObject(t)&&(t=JSON.stringify(t)),a.push(i(e)+"="+i(t))}))}),o=a.join("&")}return o&&(t+=(t.indexOf("?")===-1?"?":"&")+o),t}},function(t,e,n){"use strict";t.exports=function(t,e){return t.replace(/\/+$/,"")+"/"+e.replace(/^\/+/,"")}},function(t,e,n){"use strict";var i=n(1);t.exports=i.isStandardBrowserEnv()?function(){return{write:function(t,e,n,r,o,a){var s=[];s.push(t+"="+encodeURIComponent(e)),i.isNumber(n)&&s.push("expires="+new Date(n).toGMTString()),i.isString(r)&&s.push("path="+r),i.isString(o)&&s.push("domain="+o),a===!0&&s.push("secure"),document.cookie=s.join("; ")},read:function(t){var e=document.cookie.match(new RegExp("(^|;\\s*)("+t+")=([^;]*)"));return e?decodeURIComponent(e[3]):null},remove:function(t){this.write(t,"",Date.now()-864e5)}}}():function(){return{write:function(){},read:function(){return null},remove:function(){}}}()},function(t,e,n){"use strict";t.exports=function(t){return/^([a-z][a-z\d\+\-\.]*:)?\/\//i.test(t)}},function(t,e,n){"use strict";var i=n(1);t.exports=i.isStandardBrowserEnv()?function(){function t(t){var e=t;return n&&(r.setAttribute("href",e),e=r.href),r.setAttribute("href",e),{href:r.href,protocol:r.protocol?r.protocol.replace(/:$/,""):"",host:r.host,search:r.search?r.search.replace(/^\?/,""):"",hash:r.hash?r.hash.replace(/^#/,""):"",hostname:r.hostname,port:r.port,pathname:"/"===r.pathname.charAt(0)?r.pathname:"/"+r.pathname}}var e,n=/(msie|trident)/i.test(navigator.userAgent),r=document.createElement("a");return e=t(window.location.href),function(n){var r=i.isString(n)?t(n):n;return r.protocol===e.protocol&&r.host===e.host}}():function(){return function(){return!0}}()},function(t,e,n){"use strict";var i=n(1);t.exports=function(t,e){i.forEach(t,function(n,i){i!==e&&i.toUpperCase()===e.toUpperCase()&&(t[e]=n,delete t[i])})}},function(t,e,n){"use strict";var i=n(1);t.exports=function(t){var e,n,r,o={};return t?(i.forEach(t.split("\n"),function(t){r=t.indexOf(":"),e=i.trim(t.substr(0,r)).toLowerCase(),n=i.trim(t.substr(r+1)),e&&(o[e]=o[e]?o[e]+", "+n:n)}),o):o}},function(t,e,n){"use strict";t.exports=function(t){return function(e){return t.apply(null,e)}}},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default={data:function(){return{notifications:{}}},methods:{getNotifications:function(){var t=this;axios.get("/api/notifications/requests").then(function(e){t.notifications=e.data.notifications,console.log(e.data.notifications)})},markAsRead:function(){axios.post("/api/notifications/read").then(function(t){console.log("Notifications are read")})}},mounted:function(){console.log("Notifications-Table component mounted!"),this.getNotifications(),this.markAsRead(),Event.$emit("readNotifications")}}},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default={data:function(){return{unreadNotifications:{}}},methods:{getNotifications:function(){var t=this;axios.get("/api/notifications").then(function(e){t.unreadNotifications=e.data.unread}),this.listenOnStudentToSchoolConnection()},listenOnStudentToSchoolConnection:function(){var t=new Pusher("943717bf5769e7b902b4",{cluster:"eu",encrypted:!0}),e=t.subscribe("school."+window.Connection);e.bind("App\\Events\\StudentAppliedToSchool",function(t){this.getNotifications()}.bind(this)),e.bind("App\\Events\\TeacherAppliedToSchool",function(t){this.getNotifications()}.bind(this))}},mounted:function(){var t=this;console.log("Notifications Component ready."),this.getNotifications(),Event.$on("readNotifications",function(){return t.getNotifications()})}}},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default={data:function(){return{users:{}}},methods:{getUsers:function(){var t=this;axios.get("/api/users/all").then(function(e){t.users=e.data.users,console.log(t.users)})}},mounted:function(){console.log("Users-Table component mounted!"),this.getUsers()}}},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default={data:function(){return{tokens:[]}},ready:function(){this.prepareComponent()},mounted:function(){this.prepareComponent()},methods:{prepareComponent:function(){this.getTokens()},getTokens:function(){var t=this;this.$http.get("/oauth/tokens").then(function(e){t.tokens=e.data})},revoke:function(t){var e=this;this.$http.delete("/oauth/tokens/"+t.id).then(function(t){e.getTokens()})}}}},function(t,e,n){"use strict";(function(t){Object.defineProperty(e,"__esModule",{value:!0});var n="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t};e.default={data:function(){return{clients:[],createForm:{errors:[],name:"",redirect:""},editForm:{errors:[],name:"",redirect:""}}},ready:function(){this.prepareComponent()},mounted:function(){this.prepareComponent()},methods:{prepareComponent:function(){this.getClients(),t("#modal-create-client").on("shown.bs.modal",function(){t("#create-client-name").focus()}),t("#modal-edit-client").on("shown.bs.modal",function(){t("#edit-client-name").focus()})},getClients:function(){var t=this;this.$http.get("/oauth/clients").then(function(e){t.clients=e.data})},showCreateClientForm:function(){t("#modal-create-client").modal("show")},store:function(){this.persistClient("post","/oauth/clients",this.createForm,"#modal-create-client")},edit:function(e){this.editForm.id=e.id,this.editForm.name=e.name,this.editForm.redirect=e.redirect,t("#modal-edit-client").modal("show")},update:function(){this.persistClient("put","/oauth/clients/"+this.editForm.id,this.editForm,"#modal-edit-client")},persistClient:function(e,i,r,o){var a=this;r.errors=[],this.$http[e](i,r).then(function(e){a.getClients(),r.name="",r.redirect="",r.errors=[],t(o).modal("hide")}).catch(function(t){"object"===n(t.data)?r.errors=_.flatten(_.toArray(t.data)):r.errors=["Something went wrong. Please try again."]})},destroy:function(t){var e=this;this.$http.delete("/oauth/clients/"+t.id).then(function(t){e.getClients()})}}}}).call(e,n(4))},function(t,e,n){"use strict";(function(t){Object.defineProperty(e,"__esModule",{value:!0});var n="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t};e.default={data:function(){return{accessToken:null,tokens:[],scopes:[],form:{name:"",scopes:[],errors:[]}}},ready:function(){this.prepareComponent()},mounted:function(){this.prepareComponent()},methods:{prepareComponent:function(){this.getTokens(),this.getScopes(),t("#modal-create-token").on("shown.bs.modal",function(){t("#create-token-name").focus()})},getTokens:function(){var t=this;this.$http.get("/oauth/personal-access-tokens").then(function(e){t.tokens=e.data})},getScopes:function(){var t=this;this.$http.get("/oauth/scopes").then(function(e){t.scopes=e.data})},showCreateTokenForm:function(){t("#modal-create-token").modal("show")},store:function(){var t=this;this.accessToken=null,this.form.errors=[],this.$http.post("/oauth/personal-access-tokens",this.form).then(function(e){t.form.name="",t.form.scopes=[],t.form.errors=[],t.tokens.push(e.data.token),t.showAccessToken(e.data.accessToken)}).catch(function(e){"object"===n(e.data)?t.form.errors=_.flatten(_.toArray(e.data)):t.form.errors=["Something went wrong. Please try again."]})},toggleScope:function(t){this.scopeIsAssigned(t)?this.form.scopes=_.reject(this.form.scopes,function(e){return e==t}):this.form.scopes.push(t)},scopeIsAssigned:function(t){return _.indexOf(this.form.scopes,t)>=0},showAccessToken:function(e){t("#modal-create-token").modal("hide"),this.accessToken=e,t("#modal-access-token").modal("show")},revoke:function(t){var e=this;this.$http.delete("/oauth/personal-access-tokens/"+t.id).then(function(t){e.getTokens()})}}}}).call(e,n(4))},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default={data:function(){return{notifications:{}}},methods:{getNotifications:function(){var t=this;axios.get("/api/notifications/all").then(function(e){t.notifications=e.data.notifications,console.log(t.notifications)})}},mounted:function(){console.log("Notifications-Table component mounted!"),this.getNotifications()}}},function(t,e,n){"use strict";(function(t){Object.defineProperty(e,"__esModule",{value:!0});var i=n(84),r=n.n(i);Vue.use(r.a);var o=100,a=0;e.default={computed:{studies:function(){return this.all_studies}},mounted:function(){var t=this,e=this;this.getCheckedStudies(),Event.$on("saveScholarship",function(){return t.saveScholarship()}),Event.$on("datePick",function(t){e.end_at=t,e.errorDate()})},data:function(){return{financial_id:1,financial_amount:20,criteria_id:1,step1Select:"reduce",step3Select:"talent",all_studies:[""],selectedLevel:0,selectedSection:0,selectedStudy:0,studiesArray:[],checkedStudies:[],studyTable:[],levelsName:[],sectionsName:[],studiesName:[],sectionsCounter:0,exams:!1,studiesId:[],end_at:null,today:null,col_iek_eng_dan_mus:!1,error:!1,content:"<p> Αναφέρετε εδώ τους <strong> Όρους και Προϋποθεσεις </strong> της Υποτροφίας</p>",terms:null,withTerms:!1,tinyOptions:{language_url:"/el.js",entity_encoding:"raw",height:300,menubar:!1,plugins:["textcolor table autolink lists link image charmap print preview anchor","searchreplace visualblocks code","insertdatetime media table contextmenu paste code"],setup:function(e){e.on("KeyDown",function(e,n){a=t.trim(tinyMCE.activeEditor.getContent().replace(/(<([^>]+)>)/gi,"")).length;var i=e.keyCode;console.log(e.keyCode);var r=o-a;t("#chars_left").html(r),r<=0&&8!=i&&46!=i&&(e.stopPropagation(),e.preventDefault(),t("#chars_left").html("ΟΧΙ ΑΛΛΟ!"))})},toolbar:"undo redo | insert copy paste | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | forecolor backcolor | table "}}},methods:{eww:function(){console.log("as")},tinyMCE:function(){},todayDate:function(){var t=new Date,e=t.getDate(),n=t.getMonth()+1,i=t.getFullYear();e<10&&(e="0"+e),n<10&&(n="0"+n),t=e+"-"+n+"-"+i,this.end_at=t,this.today=t},getStudies:function(){var t=this;axios.get("/api/school/studies/").then(function(e){console.log("API 1 Full Studies OK "),t.all_studies=e.data.levels,t.changeLevel(),t.init()})},changeLevel:function(){this.selectedSection=0,this.selectedStudy=0,this.pullStudies(),this.countSections()},countSections:function(){this.sectionsCounter=0;for(var t in this.sectionsName[this.selectedLevel])this.sectionsCounter++},getCheckedStudies:function(){var t=this;axios.get("/api/school/getSchoolStudies").then(function(e){t.studyTable=e.data;var n=t;console.log("API 2 checkedStudies initial push OK"),t.studyTable.forEach(function(t){n.checkedStudies.push(t[0].id)}),t.getStudies()})},init:function(){this.todayDate(),(this.studyTable[0][0].section[0].level.id<7||this.studyTable[0][0].section[0].level.id>21)&&(this.col_iek_eng_dan_mus=!0),console.log("init DONE ! checkedStudies.length="+this.checkedStudies.length);for(var t in this.studyTable){var e=this.studyTable[t][0].section[0].level;this.levelsName[e.id]=e.name}this.levelsName=this.levelsName.filter(function(t){return t});for(t in this.levelsName){this.sectionsName[t]=[],this.studiesName[t]=[];var n=0;for(var i in this.studyTable){var r=this.studyTable[i][0].section[0].level.name,o=this.studyTable[i][0].section[0].name;if(this.levelsName[t]==r){var a=!1;for(var e in this.sectionsName[t])this.sectionsName[t][e]==o&&(a=!0);a||(this.studiesName[t][n]=[],this.sectionsName[t][n]=o,n++)}}}this.pullStudies(),this.countSections(),this.todayDate()},pullStudies:function(){this.studiesArray=[],this.studiesId=[];for(var t in this.studyTable){var e=this.studyTable[t][0].section[0].level.name,n=this.studyTable[t][0].section[0].name,i=this.studyTable[t][0];(e==this.levelsName[this.selectedLevel]&&n==this.sectionsName[this.selectedLevel][this.selectedSection]||!this.col_iek_eng_dan_mus)&&(this.studiesArray.push(i.name),this.studiesId.push(i.id)),this.selectedStudy=0}},errorDate:function(){},saveScholarship:function(){var t=this,e=0;this.exams&&(e=1),this.col_iek_eng_dan_mus||(this.selectedLevel=this.selectedStudy),axios.post("/api/scholarship/save",{school_id:window.Connection,financial_id:this.financial_id,financial_amount:this.financial_amount,study_id:this.studiesId[this.selectedStudy],criteria_id:this.criteria_id,end_at:this.end_at,winner_id:0,exams:e,terms:this.terms}).then(function(e){console.log("END AT >> "+t.end_at),console.log("SAVE study= "+t.studiesArray[t.selectedStudy]),console.log("SAVE study_id= "+t.studiesId[t.selectedStudy]),console.log(e.data),window.location=e.data.redirect})}}}}).call(e,n(4))},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default={data:function(){return{scholarships:{},showLevel:!1}},methods:{getScholarships:function(){var t=this;axios.get("/api/scholarship/"+window.Connection).then(function(e){t.scholarships=e.data,(t.scholarships[0].level.id<4||t.scholarships[0].level.id>21)&&(t.showLevel=!0)})}},mounted:function(){console.log("Scholarship-Table component mounted!"),this.getScholarships()}}},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default={data:function(){return{schools:{}}},methods:{getSchools:function(){var t=this;axios.get("/api/schools/all").then(function(e){t.schools=e.data.schools,console.log(t.schools)})}},mounted:function(){console.log("Schools-Table component mounted!"),this.getSchools()}}},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default={data:function(){return{students:[],searchStr:"",selection:!0,sortReverse:!1,sortType:"name"}},computed:{filteredStudies:function(){var t=this.students,e=this.searchStr;return e?(e=e.trim().toLowerCase(),t=t.filter(function(t){if(t.name.toLowerCase().indexOf(e)!==-1||t.nameL.toLowerCase().indexOf(e)!==-1||t.nameENG.toLowerCase().indexOf(e)!==-1)return t})):t}},methods:{nameChangeSort:function(){this.sortType="name",this.changeSortType(this.sortType)},emailChangeSort:function(){this.sortType="email",this.changeSortType(this.sortType)},changeSortType:function(){this.sortReverse=!this.sortReverse;var t=this.students;return t.sort(this.dynamicSort(this.sortType,this.sortReverse)),this.students=t,this.students},dynamicSort:function(t,e){var n=1;return e&&(n=-1),"-"===t[0]&&(n=-1,t=t.substr(1)),function(e,i){var r=e[t]<i[t]?-1:e[t]>i[t]?1:0;return r*n}},getAllStudents:function(){var t=this;axios.get("/connected/students").then(function(e){t.students=e.data.students;var n=t.students;n.sort(t.dynamicSort(t.sortType,t.sortReverse));for(var i in n)n[i].name=n[i].name.toLowerCase();var r=JSON.stringify(n).replace(/ά/g,"α").replace(/έ/g,"ε").replace(/ή/g,"η").replace(/ί/g,"ι").replace(/ό/g,"ο").replace(/ύ/g,"υ"),o=JSON.parse(r),a=JSON.stringify(n).replace(/ά/g,"a").replace(/α/g,"a").replace(/έ/g,"e").replace(/ε/g,"e").replace(/ή/g,"h").replace(/η/g,"h").replace(/ί/g,"i").replace(/ι/g,"i").replace(/ό/g,"o").replace(/ο/g,"o").replace(/υ/g,"y").replace(/ύ/g,"y").replace(/ω/g,"v").replace(/ώ/g,"v").replace(/β/g,"b").replace(/γ/g,"g").replace(/δ/g,"d").replace(/ζ/g,"z").replace(/θ/g,"u").replace(/κ/g,"k").replace(/λ/g,"l").replace(/μ/g,"m").replace(/ν/g,"n").replace(/ξ/g,"j").replace(/π/g,"p").replace(/ρ/g,"r").replace(/σ/g,"s").replace(/ς/g,"s").replace(/τ/g,"t").replace(/φ/g,"f").replace(/χ/g,"x").replace(/ψ/g,"c"),s=JSON.parse(a);for(var i in n)n[i].nameL=o[i].name,n[i].nameENG=s[i].name;t.students=n})},changeView:function(){this.selection=!this.selection}},mounted:function(){console.log("Students-Table component mounted!"),this.getAllStudents()}}},function(t,e,n){"use strict";(function(t){Object.defineProperty(e,"__esModule",{value:!0}),e.default={computed:{studies:function(){return this.all_studies}},data:function(){return{all_studies:[""],checkedStudies:[],selectedLevel:0,selectedSection:0,selectedStudy:0,status:[],sectionsStatus:[],studiesStatus:[],levels:[],sections:[],testClass:!0,col_iek_eng_dan_mus:!1,checkedStudiesTemp:{}}},mounted:function(){this.getCheckedStudies()},methods:{getCheckedStudies:function(){var t=this;axios.get("/api/school/getSchoolStudies").then(function(e){t.testTable=e.data;var n=t;t.testTable.forEach(function(t){n.checkedStudies.push(t[0].id),console.log(" API 2 checkedStudies initial push OK")}),t.getStudies()},function(t){console.log("ads")})},getStudies:function(){var t=this;axios.get("/api/school/studies/").then(function(e){console.log("API 1 Full Studies OK "),t.all_studies=e.data.levels,
t.createTableStatus()})},setSchoolStudies:function(t){axios.post("/api/school/studies",{checkedStudies:this.checkedStudies}).then(function(t){console.log(t.data)})},createTableStatus:function(){console.log("createTable DONE !"+this.all_studies.length);for(var e=0;e<this.all_studies.length;e++){var n=this.all_studies[e].id;this.levels[n]=0,this.sections[n]=[],this.sectionsStatus[e]=[],this.studiesStatus[e]=[];for(var i=0;i<this.all_studies[e].section.length;i++){var r=this.all_studies[e].section[i].id;this.all_studies[e].section[i].status=!1,this.sectionsStatus[e][i]=!1,this.studiesStatus[e][i]=[],this.sections[n][r]=0;for(var o=0;o<this.all_studies[e].section[i].study.length;o++)t.inArray(this.all_studies[e].section[i].study[o].id,this.checkedStudies)==-1?(this.all_studies[e].section[i].study[o].status=!1,this.studiesStatus[e][i][o]=!1):(this.all_studies[e].section[i].study[o].status=!0,this.studiesStatus[e][i][o]=!0)}}this.init()},IfCheck:function(t,e,n,i,r,o,a){this.col_iek_eng_dan_mus||(this.selectedLevel=o,this.selectedSection=a,console.log(o,o,t,n));var s=this.selectedLevel,l=this.selectedSection,c=t;if(this.all_studies[s].section[l].study[c].status=!this.all_studies[s].section[l].study[c].status,this.studiesStatus[s][l][c]=!this.studiesStatus[s][l][c],e){this.levels[i]--;var u=this.checkedStudies.indexOf(n);console.log(this.checkedStudies),console.log("studyId="+n," index="+u)}else this.levels[i]++,this.sections[i][r]++,console.log(this.checkedStudies);this.setSchoolStudies()},deleteStudy:function(t,e,n,i,r,o){this.all_studies[t].section[e].study[n].status=!1,this.studiesStatus[t][e][n]=!1,this.levels[r]--,this.sections[r][o]--;var a=this.checkedStudies.indexOf(i);this.checkedStudies.splice(a,1),this.setSchoolStudies()},clearAllStudies:function(){for(var t in this.all_studies){var e=this.all_studies[t].id;this.sections[e]=[];for(var n in this.all_studies[t].section){var i=this.all_studies[t].section[n].id;this.sections[e][i]=0;for(var r in this.all_studies[t].section[n].study)this.all_studies[t].section[n].study[r].status=!1,this.studiesStatus[t][n][r]=!1}}this.levels.length=0,this.checkedStudies=[],this.setSchoolStudies()},selectLevel:function(t){this.selectedLevel=t,this.selectedSection=0},selectSection:function(t){this.selectedSection=t},init:function(){this.all_studies[0].section[0].study[0].name!=this.all_studies[0].name&&(this.col_iek_eng_dan_mus=!0),console.log(this.col_iek_eng_dan_mus),console.log("init DONE ! checkedStudies.length="+this.checkedStudies.length);for(var t=0;t<this.checkedStudies.length;t++){var e=this.testTable[t][0].section[0].level.id,n=this.testTable[t][0].section[0].id;this.levels[e]++,this.sections[e][n]++}console.log(this.checkedStudies),console.log(this.checkedStudies.length)}}},t(document).ready(function(){t("#content").hide().fadeIn(2300)})}).call(e,n(4))},function(t,e,n){"use strict";Object.defineProperty(e,"__esModule",{value:!0}),e.default={data:function(){return{teachers:{}}},methods:{getAllTeachers:function(){var t=this;axios.get("/connected/teachers").then(function(e){t.teachers=e.data.teachers})}},mounted:function(){console.log("Teachers-Table component mounted!"),this.getAllTeachers()}}},function(t,e,n){n(44),window.Vue=n(85),window.axios=n(12),window.axios.defaults.headers.common={"X-CSRF-TOKEN":Scholio.csrfToken,"X-Requested-With":"XMLHttpRequest"}},function(t,e,n){(function(t){/*!
>>>>>>> 9813582ea2f8c7ab00343cccfbb3cc05289989ad
 * Bootstrap v3.3.7 (http://getbootstrap.com)
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under the MIT license
 */
<<<<<<< HEAD

if (typeof jQuery === 'undefined') {
  throw new Error('Bootstrap\'s JavaScript requires jQuery')
}

+function ($) {
  'use strict';
  var version = $.fn.jquery.split(' ')[0].split('.')
  if ((version[0] < 2 && version[1] < 9) || (version[0] == 1 && version[1] == 9 && version[2] < 1) || (version[0] > 3)) {
    throw new Error('Bootstrap\'s JavaScript requires jQuery version 1.9.1 or higher, but lower than version 4')
  }
}(jQuery);

/* ========================================================================
 * Bootstrap: transition.js v3.3.7
 * http://getbootstrap.com/javascript/#transitions
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // CSS TRANSITION SUPPORT (Shoutout: http://www.modernizr.com/)
  // ============================================================

  function transitionEnd() {
    var el = document.createElement('bootstrap')

    var transEndEventNames = {
      WebkitTransition : 'webkitTransitionEnd',
      MozTransition    : 'transitionend',
      OTransition      : 'oTransitionEnd otransitionend',
      transition       : 'transitionend'
    }

    for (var name in transEndEventNames) {
      if (el.style[name] !== undefined) {
        return { end: transEndEventNames[name] }
      }
    }

    return false // explicit for ie8 (  ._.)
  }

  // http://blog.alexmaccaw.com/css-transitions
  $.fn.emulateTransitionEnd = function (duration) {
    var called = false
    var $el = this
    $(this).one('bsTransitionEnd', function () { called = true })
    var callback = function () { if (!called) $($el).trigger($.support.transition.end) }
    setTimeout(callback, duration)
    return this
  }

  $(function () {
    $.support.transition = transitionEnd()

    if (!$.support.transition) return

    $.event.special.bsTransitionEnd = {
      bindType: $.support.transition.end,
      delegateType: $.support.transition.end,
      handle: function (e) {
        if ($(e.target).is(this)) return e.handleObj.handler.apply(this, arguments)
      }
    }
  })

}(jQuery);

/* ========================================================================
 * Bootstrap: alert.js v3.3.7
 * http://getbootstrap.com/javascript/#alerts
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // ALERT CLASS DEFINITION
  // ======================

  var dismiss = '[data-dismiss="alert"]'
  var Alert   = function (el) {
    $(el).on('click', dismiss, this.close)
  }

  Alert.VERSION = '3.3.7'

  Alert.TRANSITION_DURATION = 150

  Alert.prototype.close = function (e) {
    var $this    = $(this)
    var selector = $this.attr('data-target')

    if (!selector) {
      selector = $this.attr('href')
      selector = selector && selector.replace(/.*(?=#[^\s]*$)/, '') // strip for ie7
    }

    var $parent = $(selector === '#' ? [] : selector)

    if (e) e.preventDefault()

    if (!$parent.length) {
      $parent = $this.closest('.alert')
    }

    $parent.trigger(e = $.Event('close.bs.alert'))

    if (e.isDefaultPrevented()) return

    $parent.removeClass('in')

    function removeElement() {
      // detach from parent, fire event then clean up data
      $parent.detach().trigger('closed.bs.alert').remove()
    }

    $.support.transition && $parent.hasClass('fade') ?
      $parent
        .one('bsTransitionEnd', removeElement)
        .emulateTransitionEnd(Alert.TRANSITION_DURATION) :
      removeElement()
  }


  // ALERT PLUGIN DEFINITION
  // =======================

  function Plugin(option) {
    return this.each(function () {
      var $this = $(this)
      var data  = $this.data('bs.alert')

      if (!data) $this.data('bs.alert', (data = new Alert(this)))
      if (typeof option == 'string') data[option].call($this)
    })
  }

  var old = $.fn.alert

  $.fn.alert             = Plugin
  $.fn.alert.Constructor = Alert


  // ALERT NO CONFLICT
  // =================

  $.fn.alert.noConflict = function () {
    $.fn.alert = old
    return this
  }


  // ALERT DATA-API
  // ==============

  $(document).on('click.bs.alert.data-api', dismiss, Alert.prototype.close)

}(jQuery);

/* ========================================================================
 * Bootstrap: button.js v3.3.7
 * http://getbootstrap.com/javascript/#buttons
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // BUTTON PUBLIC CLASS DEFINITION
  // ==============================

  var Button = function (element, options) {
    this.$element  = $(element)
    this.options   = $.extend({}, Button.DEFAULTS, options)
    this.isLoading = false
  }

  Button.VERSION  = '3.3.7'

  Button.DEFAULTS = {
    loadingText: 'loading...'
  }

  Button.prototype.setState = function (state) {
    var d    = 'disabled'
    var $el  = this.$element
    var val  = $el.is('input') ? 'val' : 'html'
    var data = $el.data()

    state += 'Text'

    if (data.resetText == null) $el.data('resetText', $el[val]())

    // push to event loop to allow forms to submit
    setTimeout($.proxy(function () {
      $el[val](data[state] == null ? this.options[state] : data[state])

      if (state == 'loadingText') {
        this.isLoading = true
        $el.addClass(d).attr(d, d).prop(d, true)
      } else if (this.isLoading) {
        this.isLoading = false
        $el.removeClass(d).removeAttr(d).prop(d, false)
      }
    }, this), 0)
  }

  Button.prototype.toggle = function () {
    var changed = true
    var $parent = this.$element.closest('[data-toggle="buttons"]')

    if ($parent.length) {
      var $input = this.$element.find('input')
      if ($input.prop('type') == 'radio') {
        if ($input.prop('checked')) changed = false
        $parent.find('.active').removeClass('active')
        this.$element.addClass('active')
      } else if ($input.prop('type') == 'checkbox') {
        if (($input.prop('checked')) !== this.$element.hasClass('active')) changed = false
        this.$element.toggleClass('active')
      }
      $input.prop('checked', this.$element.hasClass('active'))
      if (changed) $input.trigger('change')
    } else {
      this.$element.attr('aria-pressed', !this.$element.hasClass('active'))
      this.$element.toggleClass('active')
    }
  }


  // BUTTON PLUGIN DEFINITION
  // ========================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.button')
      var options = typeof option == 'object' && option

      if (!data) $this.data('bs.button', (data = new Button(this, options)))

      if (option == 'toggle') data.toggle()
      else if (option) data.setState(option)
    })
  }

  var old = $.fn.button

  $.fn.button             = Plugin
  $.fn.button.Constructor = Button


  // BUTTON NO CONFLICT
  // ==================

  $.fn.button.noConflict = function () {
    $.fn.button = old
    return this
  }


  // BUTTON DATA-API
  // ===============

  $(document)
    .on('click.bs.button.data-api', '[data-toggle^="button"]', function (e) {
      var $btn = $(e.target).closest('.btn')
      Plugin.call($btn, 'toggle')
      if (!($(e.target).is('input[type="radio"], input[type="checkbox"]'))) {
        // Prevent double click on radios, and the double selections (so cancellation) on checkboxes
        e.preventDefault()
        // The target component still receive the focus
        if ($btn.is('input,button')) $btn.trigger('focus')
        else $btn.find('input:visible,button:visible').first().trigger('focus')
      }
    })
    .on('focus.bs.button.data-api blur.bs.button.data-api', '[data-toggle^="button"]', function (e) {
      $(e.target).closest('.btn').toggleClass('focus', /^focus(in)?$/.test(e.type))
    })

}(jQuery);

/* ========================================================================
 * Bootstrap: carousel.js v3.3.7
 * http://getbootstrap.com/javascript/#carousel
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // CAROUSEL CLASS DEFINITION
  // =========================

  var Carousel = function (element, options) {
    this.$element    = $(element)
    this.$indicators = this.$element.find('.carousel-indicators')
    this.options     = options
    this.paused      = null
    this.sliding     = null
    this.interval    = null
    this.$active     = null
    this.$items      = null

    this.options.keyboard && this.$element.on('keydown.bs.carousel', $.proxy(this.keydown, this))

    this.options.pause == 'hover' && !('ontouchstart' in document.documentElement) && this.$element
      .on('mouseenter.bs.carousel', $.proxy(this.pause, this))
      .on('mouseleave.bs.carousel', $.proxy(this.cycle, this))
  }

  Carousel.VERSION  = '3.3.7'

  Carousel.TRANSITION_DURATION = 600

  Carousel.DEFAULTS = {
    interval: 5000,
    pause: 'hover',
    wrap: true,
    keyboard: true
  }

  Carousel.prototype.keydown = function (e) {
    if (/input|textarea/i.test(e.target.tagName)) return
    switch (e.which) {
      case 37: this.prev(); break
      case 39: this.next(); break
      default: return
    }

    e.preventDefault()
  }

  Carousel.prototype.cycle = function (e) {
    e || (this.paused = false)

    this.interval && clearInterval(this.interval)

    this.options.interval
      && !this.paused
      && (this.interval = setInterval($.proxy(this.next, this), this.options.interval))

    return this
  }

  Carousel.prototype.getItemIndex = function (item) {
    this.$items = item.parent().children('.item')
    return this.$items.index(item || this.$active)
  }

  Carousel.prototype.getItemForDirection = function (direction, active) {
    var activeIndex = this.getItemIndex(active)
    var willWrap = (direction == 'prev' && activeIndex === 0)
                || (direction == 'next' && activeIndex == (this.$items.length - 1))
    if (willWrap && !this.options.wrap) return active
    var delta = direction == 'prev' ? -1 : 1
    var itemIndex = (activeIndex + delta) % this.$items.length
    return this.$items.eq(itemIndex)
  }

  Carousel.prototype.to = function (pos) {
    var that        = this
    var activeIndex = this.getItemIndex(this.$active = this.$element.find('.item.active'))

    if (pos > (this.$items.length - 1) || pos < 0) return

    if (this.sliding)       return this.$element.one('slid.bs.carousel', function () { that.to(pos) }) // yes, "slid"
    if (activeIndex == pos) return this.pause().cycle()

    return this.slide(pos > activeIndex ? 'next' : 'prev', this.$items.eq(pos))
  }

  Carousel.prototype.pause = function (e) {
    e || (this.paused = true)

    if (this.$element.find('.next, .prev').length && $.support.transition) {
      this.$element.trigger($.support.transition.end)
      this.cycle(true)
    }

    this.interval = clearInterval(this.interval)

    return this
  }

  Carousel.prototype.next = function () {
    if (this.sliding) return
    return this.slide('next')
  }

  Carousel.prototype.prev = function () {
    if (this.sliding) return
    return this.slide('prev')
  }

  Carousel.prototype.slide = function (type, next) {
    var $active   = this.$element.find('.item.active')
    var $next     = next || this.getItemForDirection(type, $active)
    var isCycling = this.interval
    var direction = type == 'next' ? 'left' : 'right'
    var that      = this

    if ($next.hasClass('active')) return (this.sliding = false)

    var relatedTarget = $next[0]
    var slideEvent = $.Event('slide.bs.carousel', {
      relatedTarget: relatedTarget,
      direction: direction
    })
    this.$element.trigger(slideEvent)
    if (slideEvent.isDefaultPrevented()) return

    this.sliding = true

    isCycling && this.pause()

    if (this.$indicators.length) {
      this.$indicators.find('.active').removeClass('active')
      var $nextIndicator = $(this.$indicators.children()[this.getItemIndex($next)])
      $nextIndicator && $nextIndicator.addClass('active')
    }

    var slidEvent = $.Event('slid.bs.carousel', { relatedTarget: relatedTarget, direction: direction }) // yes, "slid"
    if ($.support.transition && this.$element.hasClass('slide')) {
      $next.addClass(type)
      $next[0].offsetWidth // force reflow
      $active.addClass(direction)
      $next.addClass(direction)
      $active
        .one('bsTransitionEnd', function () {
          $next.removeClass([type, direction].join(' ')).addClass('active')
          $active.removeClass(['active', direction].join(' '))
          that.sliding = false
          setTimeout(function () {
            that.$element.trigger(slidEvent)
          }, 0)
        })
        .emulateTransitionEnd(Carousel.TRANSITION_DURATION)
    } else {
      $active.removeClass('active')
      $next.addClass('active')
      this.sliding = false
      this.$element.trigger(slidEvent)
    }

    isCycling && this.cycle()

    return this
  }


  // CAROUSEL PLUGIN DEFINITION
  // ==========================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.carousel')
      var options = $.extend({}, Carousel.DEFAULTS, $this.data(), typeof option == 'object' && option)
      var action  = typeof option == 'string' ? option : options.slide

      if (!data) $this.data('bs.carousel', (data = new Carousel(this, options)))
      if (typeof option == 'number') data.to(option)
      else if (action) data[action]()
      else if (options.interval) data.pause().cycle()
    })
  }

  var old = $.fn.carousel

  $.fn.carousel             = Plugin
  $.fn.carousel.Constructor = Carousel


  // CAROUSEL NO CONFLICT
  // ====================

  $.fn.carousel.noConflict = function () {
    $.fn.carousel = old
    return this
  }


  // CAROUSEL DATA-API
  // =================

  var clickHandler = function (e) {
    var href
    var $this   = $(this)
    var $target = $($this.attr('data-target') || (href = $this.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '')) // strip for ie7
    if (!$target.hasClass('carousel')) return
    var options = $.extend({}, $target.data(), $this.data())
    var slideIndex = $this.attr('data-slide-to')
    if (slideIndex) options.interval = false

    Plugin.call($target, options)

    if (slideIndex) {
      $target.data('bs.carousel').to(slideIndex)
    }

    e.preventDefault()
  }

  $(document)
    .on('click.bs.carousel.data-api', '[data-slide]', clickHandler)
    .on('click.bs.carousel.data-api', '[data-slide-to]', clickHandler)

  $(window).on('load', function () {
    $('[data-ride="carousel"]').each(function () {
      var $carousel = $(this)
      Plugin.call($carousel, $carousel.data())
    })
  })

}(jQuery);

/* ========================================================================
 * Bootstrap: collapse.js v3.3.7
 * http://getbootstrap.com/javascript/#collapse
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */

/* jshint latedef: false */

+function ($) {
  'use strict';

  // COLLAPSE PUBLIC CLASS DEFINITION
  // ================================

  var Collapse = function (element, options) {
    this.$element      = $(element)
    this.options       = $.extend({}, Collapse.DEFAULTS, options)
    this.$trigger      = $('[data-toggle="collapse"][href="#' + element.id + '"],' +
                           '[data-toggle="collapse"][data-target="#' + element.id + '"]')
    this.transitioning = null

    if (this.options.parent) {
      this.$parent = this.getParent()
    } else {
      this.addAriaAndCollapsedClass(this.$element, this.$trigger)
    }

    if (this.options.toggle) this.toggle()
  }

  Collapse.VERSION  = '3.3.7'

  Collapse.TRANSITION_DURATION = 350

  Collapse.DEFAULTS = {
    toggle: true
  }

  Collapse.prototype.dimension = function () {
    var hasWidth = this.$element.hasClass('width')
    return hasWidth ? 'width' : 'height'
  }

  Collapse.prototype.show = function () {
    if (this.transitioning || this.$element.hasClass('in')) return

    var activesData
    var actives = this.$parent && this.$parent.children('.panel').children('.in, .collapsing')

    if (actives && actives.length) {
      activesData = actives.data('bs.collapse')
      if (activesData && activesData.transitioning) return
    }

    var startEvent = $.Event('show.bs.collapse')
    this.$element.trigger(startEvent)
    if (startEvent.isDefaultPrevented()) return

    if (actives && actives.length) {
      Plugin.call(actives, 'hide')
      activesData || actives.data('bs.collapse', null)
    }

    var dimension = this.dimension()

    this.$element
      .removeClass('collapse')
      .addClass('collapsing')[dimension](0)
      .attr('aria-expanded', true)

    this.$trigger
      .removeClass('collapsed')
      .attr('aria-expanded', true)

    this.transitioning = 1

    var complete = function () {
      this.$element
        .removeClass('collapsing')
        .addClass('collapse in')[dimension]('')
      this.transitioning = 0
      this.$element
        .trigger('shown.bs.collapse')
    }

    if (!$.support.transition) return complete.call(this)

    var scrollSize = $.camelCase(['scroll', dimension].join('-'))

    this.$element
      .one('bsTransitionEnd', $.proxy(complete, this))
      .emulateTransitionEnd(Collapse.TRANSITION_DURATION)[dimension](this.$element[0][scrollSize])
  }

  Collapse.prototype.hide = function () {
    if (this.transitioning || !this.$element.hasClass('in')) return

    var startEvent = $.Event('hide.bs.collapse')
    this.$element.trigger(startEvent)
    if (startEvent.isDefaultPrevented()) return

    var dimension = this.dimension()

    this.$element[dimension](this.$element[dimension]())[0].offsetHeight

    this.$element
      .addClass('collapsing')
      .removeClass('collapse in')
      .attr('aria-expanded', false)

    this.$trigger
      .addClass('collapsed')
      .attr('aria-expanded', false)

    this.transitioning = 1

    var complete = function () {
      this.transitioning = 0
      this.$element
        .removeClass('collapsing')
        .addClass('collapse')
        .trigger('hidden.bs.collapse')
    }

    if (!$.support.transition) return complete.call(this)

    this.$element
      [dimension](0)
      .one('bsTransitionEnd', $.proxy(complete, this))
      .emulateTransitionEnd(Collapse.TRANSITION_DURATION)
  }

  Collapse.prototype.toggle = function () {
    this[this.$element.hasClass('in') ? 'hide' : 'show']()
  }

  Collapse.prototype.getParent = function () {
    return $(this.options.parent)
      .find('[data-toggle="collapse"][data-parent="' + this.options.parent + '"]')
      .each($.proxy(function (i, element) {
        var $element = $(element)
        this.addAriaAndCollapsedClass(getTargetFromTrigger($element), $element)
      }, this))
      .end()
  }

  Collapse.prototype.addAriaAndCollapsedClass = function ($element, $trigger) {
    var isOpen = $element.hasClass('in')

    $element.attr('aria-expanded', isOpen)
    $trigger
      .toggleClass('collapsed', !isOpen)
      .attr('aria-expanded', isOpen)
  }

  function getTargetFromTrigger($trigger) {
    var href
    var target = $trigger.attr('data-target')
      || (href = $trigger.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '') // strip for ie7

    return $(target)
  }


  // COLLAPSE PLUGIN DEFINITION
  // ==========================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.collapse')
      var options = $.extend({}, Collapse.DEFAULTS, $this.data(), typeof option == 'object' && option)

      if (!data && options.toggle && /show|hide/.test(option)) options.toggle = false
      if (!data) $this.data('bs.collapse', (data = new Collapse(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.collapse

  $.fn.collapse             = Plugin
  $.fn.collapse.Constructor = Collapse


  // COLLAPSE NO CONFLICT
  // ====================

  $.fn.collapse.noConflict = function () {
    $.fn.collapse = old
    return this
  }


  // COLLAPSE DATA-API
  // =================

  $(document).on('click.bs.collapse.data-api', '[data-toggle="collapse"]', function (e) {
    var $this   = $(this)

    if (!$this.attr('data-target')) e.preventDefault()

    var $target = getTargetFromTrigger($this)
    var data    = $target.data('bs.collapse')
    var option  = data ? 'toggle' : $this.data()

    Plugin.call($target, option)
  })

}(jQuery);

/* ========================================================================
 * Bootstrap: dropdown.js v3.3.7
 * http://getbootstrap.com/javascript/#dropdowns
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // DROPDOWN CLASS DEFINITION
  // =========================

  var backdrop = '.dropdown-backdrop'
  var toggle   = '[data-toggle="dropdown"]'
  var Dropdown = function (element) {
    $(element).on('click.bs.dropdown', this.toggle)
  }

  Dropdown.VERSION = '3.3.7'

  function getParent($this) {
    var selector = $this.attr('data-target')

    if (!selector) {
      selector = $this.attr('href')
      selector = selector && /#[A-Za-z]/.test(selector) && selector.replace(/.*(?=#[^\s]*$)/, '') // strip for ie7
    }

    var $parent = selector && $(selector)

    return $parent && $parent.length ? $parent : $this.parent()
  }

  function clearMenus(e) {
    if (e && e.which === 3) return
    $(backdrop).remove()
    $(toggle).each(function () {
      var $this         = $(this)
      var $parent       = getParent($this)
      var relatedTarget = { relatedTarget: this }

      if (!$parent.hasClass('open')) return

      if (e && e.type == 'click' && /input|textarea/i.test(e.target.tagName) && $.contains($parent[0], e.target)) return

      $parent.trigger(e = $.Event('hide.bs.dropdown', relatedTarget))

      if (e.isDefaultPrevented()) return

      $this.attr('aria-expanded', 'false')
      $parent.removeClass('open').trigger($.Event('hidden.bs.dropdown', relatedTarget))
    })
  }

  Dropdown.prototype.toggle = function (e) {
    var $this = $(this)

    if ($this.is('.disabled, :disabled')) return

    var $parent  = getParent($this)
    var isActive = $parent.hasClass('open')

    clearMenus()

    if (!isActive) {
      if ('ontouchstart' in document.documentElement && !$parent.closest('.navbar-nav').length) {
        // if mobile we use a backdrop because click events don't delegate
        $(document.createElement('div'))
          .addClass('dropdown-backdrop')
          .insertAfter($(this))
          .on('click', clearMenus)
      }

      var relatedTarget = { relatedTarget: this }
      $parent.trigger(e = $.Event('show.bs.dropdown', relatedTarget))

      if (e.isDefaultPrevented()) return

      $this
        .trigger('focus')
        .attr('aria-expanded', 'true')

      $parent
        .toggleClass('open')
        .trigger($.Event('shown.bs.dropdown', relatedTarget))
    }

    return false
  }

  Dropdown.prototype.keydown = function (e) {
    if (!/(38|40|27|32)/.test(e.which) || /input|textarea/i.test(e.target.tagName)) return

    var $this = $(this)

    e.preventDefault()
    e.stopPropagation()

    if ($this.is('.disabled, :disabled')) return

    var $parent  = getParent($this)
    var isActive = $parent.hasClass('open')

    if (!isActive && e.which != 27 || isActive && e.which == 27) {
      if (e.which == 27) $parent.find(toggle).trigger('focus')
      return $this.trigger('click')
    }

    var desc = ' li:not(.disabled):visible a'
    var $items = $parent.find('.dropdown-menu' + desc)

    if (!$items.length) return

    var index = $items.index(e.target)

    if (e.which == 38 && index > 0)                 index--         // up
    if (e.which == 40 && index < $items.length - 1) index++         // down
    if (!~index)                                    index = 0

    $items.eq(index).trigger('focus')
  }


  // DROPDOWN PLUGIN DEFINITION
  // ==========================

  function Plugin(option) {
    return this.each(function () {
      var $this = $(this)
      var data  = $this.data('bs.dropdown')

      if (!data) $this.data('bs.dropdown', (data = new Dropdown(this)))
      if (typeof option == 'string') data[option].call($this)
    })
  }

  var old = $.fn.dropdown

  $.fn.dropdown             = Plugin
  $.fn.dropdown.Constructor = Dropdown


  // DROPDOWN NO CONFLICT
  // ====================

  $.fn.dropdown.noConflict = function () {
    $.fn.dropdown = old
    return this
  }


  // APPLY TO STANDARD DROPDOWN ELEMENTS
  // ===================================

  $(document)
    .on('click.bs.dropdown.data-api', clearMenus)
    .on('click.bs.dropdown.data-api', '.dropdown form', function (e) { e.stopPropagation() })
    .on('click.bs.dropdown.data-api', toggle, Dropdown.prototype.toggle)
    .on('keydown.bs.dropdown.data-api', toggle, Dropdown.prototype.keydown)
    .on('keydown.bs.dropdown.data-api', '.dropdown-menu', Dropdown.prototype.keydown)

}(jQuery);

/* ========================================================================
 * Bootstrap: modal.js v3.3.7
 * http://getbootstrap.com/javascript/#modals
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // MODAL CLASS DEFINITION
  // ======================

  var Modal = function (element, options) {
    this.options             = options
    this.$body               = $(document.body)
    this.$element            = $(element)
    this.$dialog             = this.$element.find('.modal-dialog')
    this.$backdrop           = null
    this.isShown             = null
    this.originalBodyPad     = null
    this.scrollbarWidth      = 0
    this.ignoreBackdropClick = false

    if (this.options.remote) {
      this.$element
        .find('.modal-content')
        .load(this.options.remote, $.proxy(function () {
          this.$element.trigger('loaded.bs.modal')
        }, this))
    }
  }

  Modal.VERSION  = '3.3.7'

  Modal.TRANSITION_DURATION = 300
  Modal.BACKDROP_TRANSITION_DURATION = 150

  Modal.DEFAULTS = {
    backdrop: true,
    keyboard: true,
    show: true
  }

  Modal.prototype.toggle = function (_relatedTarget) {
    return this.isShown ? this.hide() : this.show(_relatedTarget)
  }

  Modal.prototype.show = function (_relatedTarget) {
    var that = this
    var e    = $.Event('show.bs.modal', { relatedTarget: _relatedTarget })

    this.$element.trigger(e)

    if (this.isShown || e.isDefaultPrevented()) return

    this.isShown = true

    this.checkScrollbar()
    this.setScrollbar()
    this.$body.addClass('modal-open')

    this.escape()
    this.resize()

    this.$element.on('click.dismiss.bs.modal', '[data-dismiss="modal"]', $.proxy(this.hide, this))

    this.$dialog.on('mousedown.dismiss.bs.modal', function () {
      that.$element.one('mouseup.dismiss.bs.modal', function (e) {
        if ($(e.target).is(that.$element)) that.ignoreBackdropClick = true
      })
    })

    this.backdrop(function () {
      var transition = $.support.transition && that.$element.hasClass('fade')

      if (!that.$element.parent().length) {
        that.$element.appendTo(that.$body) // don't move modals dom position
      }

      that.$element
        .show()
        .scrollTop(0)

      that.adjustDialog()

      if (transition) {
        that.$element[0].offsetWidth // force reflow
      }

      that.$element.addClass('in')

      that.enforceFocus()

      var e = $.Event('shown.bs.modal', { relatedTarget: _relatedTarget })

      transition ?
        that.$dialog // wait for modal to slide in
          .one('bsTransitionEnd', function () {
            that.$element.trigger('focus').trigger(e)
          })
          .emulateTransitionEnd(Modal.TRANSITION_DURATION) :
        that.$element.trigger('focus').trigger(e)
    })
  }

  Modal.prototype.hide = function (e) {
    if (e) e.preventDefault()

    e = $.Event('hide.bs.modal')

    this.$element.trigger(e)

    if (!this.isShown || e.isDefaultPrevented()) return

    this.isShown = false

    this.escape()
    this.resize()

    $(document).off('focusin.bs.modal')

    this.$element
      .removeClass('in')
      .off('click.dismiss.bs.modal')
      .off('mouseup.dismiss.bs.modal')

    this.$dialog.off('mousedown.dismiss.bs.modal')

    $.support.transition && this.$element.hasClass('fade') ?
      this.$element
        .one('bsTransitionEnd', $.proxy(this.hideModal, this))
        .emulateTransitionEnd(Modal.TRANSITION_DURATION) :
      this.hideModal()
  }

  Modal.prototype.enforceFocus = function () {
    $(document)
      .off('focusin.bs.modal') // guard against infinite focus loop
      .on('focusin.bs.modal', $.proxy(function (e) {
        if (document !== e.target &&
            this.$element[0] !== e.target &&
            !this.$element.has(e.target).length) {
          this.$element.trigger('focus')
        }
      }, this))
  }

  Modal.prototype.escape = function () {
    if (this.isShown && this.options.keyboard) {
      this.$element.on('keydown.dismiss.bs.modal', $.proxy(function (e) {
        e.which == 27 && this.hide()
      }, this))
    } else if (!this.isShown) {
      this.$element.off('keydown.dismiss.bs.modal')
    }
  }

  Modal.prototype.resize = function () {
    if (this.isShown) {
      $(window).on('resize.bs.modal', $.proxy(this.handleUpdate, this))
    } else {
      $(window).off('resize.bs.modal')
    }
  }

  Modal.prototype.hideModal = function () {
    var that = this
    this.$element.hide()
    this.backdrop(function () {
      that.$body.removeClass('modal-open')
      that.resetAdjustments()
      that.resetScrollbar()
      that.$element.trigger('hidden.bs.modal')
    })
  }

  Modal.prototype.removeBackdrop = function () {
    this.$backdrop && this.$backdrop.remove()
    this.$backdrop = null
  }

  Modal.prototype.backdrop = function (callback) {
    var that = this
    var animate = this.$element.hasClass('fade') ? 'fade' : ''

    if (this.isShown && this.options.backdrop) {
      var doAnimate = $.support.transition && animate

      this.$backdrop = $(document.createElement('div'))
        .addClass('modal-backdrop ' + animate)
        .appendTo(this.$body)

      this.$element.on('click.dismiss.bs.modal', $.proxy(function (e) {
        if (this.ignoreBackdropClick) {
          this.ignoreBackdropClick = false
          return
        }
        if (e.target !== e.currentTarget) return
        this.options.backdrop == 'static'
          ? this.$element[0].focus()
          : this.hide()
      }, this))

      if (doAnimate) this.$backdrop[0].offsetWidth // force reflow

      this.$backdrop.addClass('in')

      if (!callback) return

      doAnimate ?
        this.$backdrop
          .one('bsTransitionEnd', callback)
          .emulateTransitionEnd(Modal.BACKDROP_TRANSITION_DURATION) :
        callback()

    } else if (!this.isShown && this.$backdrop) {
      this.$backdrop.removeClass('in')

      var callbackRemove = function () {
        that.removeBackdrop()
        callback && callback()
      }
      $.support.transition && this.$element.hasClass('fade') ?
        this.$backdrop
          .one('bsTransitionEnd', callbackRemove)
          .emulateTransitionEnd(Modal.BACKDROP_TRANSITION_DURATION) :
        callbackRemove()

    } else if (callback) {
      callback()
    }
  }

  // these following methods are used to handle overflowing modals

  Modal.prototype.handleUpdate = function () {
    this.adjustDialog()
  }

  Modal.prototype.adjustDialog = function () {
    var modalIsOverflowing = this.$element[0].scrollHeight > document.documentElement.clientHeight

    this.$element.css({
      paddingLeft:  !this.bodyIsOverflowing && modalIsOverflowing ? this.scrollbarWidth : '',
      paddingRight: this.bodyIsOverflowing && !modalIsOverflowing ? this.scrollbarWidth : ''
    })
  }

  Modal.prototype.resetAdjustments = function () {
    this.$element.css({
      paddingLeft: '',
      paddingRight: ''
    })
  }

  Modal.prototype.checkScrollbar = function () {
    var fullWindowWidth = window.innerWidth
    if (!fullWindowWidth) { // workaround for missing window.innerWidth in IE8
      var documentElementRect = document.documentElement.getBoundingClientRect()
      fullWindowWidth = documentElementRect.right - Math.abs(documentElementRect.left)
    }
    this.bodyIsOverflowing = document.body.clientWidth < fullWindowWidth
    this.scrollbarWidth = this.measureScrollbar()
  }

  Modal.prototype.setScrollbar = function () {
    var bodyPad = parseInt((this.$body.css('padding-right') || 0), 10)
    this.originalBodyPad = document.body.style.paddingRight || ''
    if (this.bodyIsOverflowing) this.$body.css('padding-right', bodyPad + this.scrollbarWidth)
  }

  Modal.prototype.resetScrollbar = function () {
    this.$body.css('padding-right', this.originalBodyPad)
  }

  Modal.prototype.measureScrollbar = function () { // thx walsh
    var scrollDiv = document.createElement('div')
    scrollDiv.className = 'modal-scrollbar-measure'
    this.$body.append(scrollDiv)
    var scrollbarWidth = scrollDiv.offsetWidth - scrollDiv.clientWidth
    this.$body[0].removeChild(scrollDiv)
    return scrollbarWidth
  }


  // MODAL PLUGIN DEFINITION
  // =======================

  function Plugin(option, _relatedTarget) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.modal')
      var options = $.extend({}, Modal.DEFAULTS, $this.data(), typeof option == 'object' && option)

      if (!data) $this.data('bs.modal', (data = new Modal(this, options)))
      if (typeof option == 'string') data[option](_relatedTarget)
      else if (options.show) data.show(_relatedTarget)
    })
  }

  var old = $.fn.modal

  $.fn.modal             = Plugin
  $.fn.modal.Constructor = Modal


  // MODAL NO CONFLICT
  // =================

  $.fn.modal.noConflict = function () {
    $.fn.modal = old
    return this
  }


  // MODAL DATA-API
  // ==============

  $(document).on('click.bs.modal.data-api', '[data-toggle="modal"]', function (e) {
    var $this   = $(this)
    var href    = $this.attr('href')
    var $target = $($this.attr('data-target') || (href && href.replace(/.*(?=#[^\s]+$)/, ''))) // strip for ie7
    var option  = $target.data('bs.modal') ? 'toggle' : $.extend({ remote: !/#/.test(href) && href }, $target.data(), $this.data())

    if ($this.is('a')) e.preventDefault()

    $target.one('show.bs.modal', function (showEvent) {
      if (showEvent.isDefaultPrevented()) return // only register focus restorer if modal will actually get shown
      $target.one('hidden.bs.modal', function () {
        $this.is(':visible') && $this.trigger('focus')
      })
    })
    Plugin.call($target, option, this)
  })

}(jQuery);

/* ========================================================================
 * Bootstrap: tooltip.js v3.3.7
 * http://getbootstrap.com/javascript/#tooltip
 * Inspired by the original jQuery.tipsy by Jason Frame
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // TOOLTIP PUBLIC CLASS DEFINITION
  // ===============================

  var Tooltip = function (element, options) {
    this.type       = null
    this.options    = null
    this.enabled    = null
    this.timeout    = null
    this.hoverState = null
    this.$element   = null
    this.inState    = null

    this.init('tooltip', element, options)
  }

  Tooltip.VERSION  = '3.3.7'

  Tooltip.TRANSITION_DURATION = 150

  Tooltip.DEFAULTS = {
    animation: true,
    placement: 'top',
    selector: false,
    template: '<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',
    trigger: 'hover focus',
    title: '',
    delay: 0,
    html: false,
    container: false,
    viewport: {
      selector: 'body',
      padding: 0
    }
  }

  Tooltip.prototype.init = function (type, element, options) {
    this.enabled   = true
    this.type      = type
    this.$element  = $(element)
    this.options   = this.getOptions(options)
    this.$viewport = this.options.viewport && $($.isFunction(this.options.viewport) ? this.options.viewport.call(this, this.$element) : (this.options.viewport.selector || this.options.viewport))
    this.inState   = { click: false, hover: false, focus: false }

    if (this.$element[0] instanceof document.constructor && !this.options.selector) {
      throw new Error('`selector` option must be specified when initializing ' + this.type + ' on the window.document object!')
    }

    var triggers = this.options.trigger.split(' ')

    for (var i = triggers.length; i--;) {
      var trigger = triggers[i]

      if (trigger == 'click') {
        this.$element.on('click.' + this.type, this.options.selector, $.proxy(this.toggle, this))
      } else if (trigger != 'manual') {
        var eventIn  = trigger == 'hover' ? 'mouseenter' : 'focusin'
        var eventOut = trigger == 'hover' ? 'mouseleave' : 'focusout'

        this.$element.on(eventIn  + '.' + this.type, this.options.selector, $.proxy(this.enter, this))
        this.$element.on(eventOut + '.' + this.type, this.options.selector, $.proxy(this.leave, this))
      }
    }

    this.options.selector ?
      (this._options = $.extend({}, this.options, { trigger: 'manual', selector: '' })) :
      this.fixTitle()
  }

  Tooltip.prototype.getDefaults = function () {
    return Tooltip.DEFAULTS
  }

  Tooltip.prototype.getOptions = function (options) {
    options = $.extend({}, this.getDefaults(), this.$element.data(), options)

    if (options.delay && typeof options.delay == 'number') {
      options.delay = {
        show: options.delay,
        hide: options.delay
      }
    }

    return options
  }

  Tooltip.prototype.getDelegateOptions = function () {
    var options  = {}
    var defaults = this.getDefaults()

    this._options && $.each(this._options, function (key, value) {
      if (defaults[key] != value) options[key] = value
    })

    return options
  }

  Tooltip.prototype.enter = function (obj) {
    var self = obj instanceof this.constructor ?
      obj : $(obj.currentTarget).data('bs.' + this.type)

    if (!self) {
      self = new this.constructor(obj.currentTarget, this.getDelegateOptions())
      $(obj.currentTarget).data('bs.' + this.type, self)
    }

    if (obj instanceof $.Event) {
      self.inState[obj.type == 'focusin' ? 'focus' : 'hover'] = true
    }

    if (self.tip().hasClass('in') || self.hoverState == 'in') {
      self.hoverState = 'in'
      return
    }

    clearTimeout(self.timeout)

    self.hoverState = 'in'

    if (!self.options.delay || !self.options.delay.show) return self.show()

    self.timeout = setTimeout(function () {
      if (self.hoverState == 'in') self.show()
    }, self.options.delay.show)
  }

  Tooltip.prototype.isInStateTrue = function () {
    for (var key in this.inState) {
      if (this.inState[key]) return true
    }

    return false
  }

  Tooltip.prototype.leave = function (obj) {
    var self = obj instanceof this.constructor ?
      obj : $(obj.currentTarget).data('bs.' + this.type)

    if (!self) {
      self = new this.constructor(obj.currentTarget, this.getDelegateOptions())
      $(obj.currentTarget).data('bs.' + this.type, self)
    }

    if (obj instanceof $.Event) {
      self.inState[obj.type == 'focusout' ? 'focus' : 'hover'] = false
    }

    if (self.isInStateTrue()) return

    clearTimeout(self.timeout)

    self.hoverState = 'out'

    if (!self.options.delay || !self.options.delay.hide) return self.hide()

    self.timeout = setTimeout(function () {
      if (self.hoverState == 'out') self.hide()
    }, self.options.delay.hide)
  }

  Tooltip.prototype.show = function () {
    var e = $.Event('show.bs.' + this.type)

    if (this.hasContent() && this.enabled) {
      this.$element.trigger(e)

      var inDom = $.contains(this.$element[0].ownerDocument.documentElement, this.$element[0])
      if (e.isDefaultPrevented() || !inDom) return
      var that = this

      var $tip = this.tip()

      var tipId = this.getUID(this.type)

      this.setContent()
      $tip.attr('id', tipId)
      this.$element.attr('aria-describedby', tipId)

      if (this.options.animation) $tip.addClass('fade')

      var placement = typeof this.options.placement == 'function' ?
        this.options.placement.call(this, $tip[0], this.$element[0]) :
        this.options.placement

      var autoToken = /\s?auto?\s?/i
      var autoPlace = autoToken.test(placement)
      if (autoPlace) placement = placement.replace(autoToken, '') || 'top'

      $tip
        .detach()
        .css({ top: 0, left: 0, display: 'block' })
        .addClass(placement)
        .data('bs.' + this.type, this)

      this.options.container ? $tip.appendTo(this.options.container) : $tip.insertAfter(this.$element)
      this.$element.trigger('inserted.bs.' + this.type)

      var pos          = this.getPosition()
      var actualWidth  = $tip[0].offsetWidth
      var actualHeight = $tip[0].offsetHeight

      if (autoPlace) {
        var orgPlacement = placement
        var viewportDim = this.getPosition(this.$viewport)

        placement = placement == 'bottom' && pos.bottom + actualHeight > viewportDim.bottom ? 'top'    :
                    placement == 'top'    && pos.top    - actualHeight < viewportDim.top    ? 'bottom' :
                    placement == 'right'  && pos.right  + actualWidth  > viewportDim.width  ? 'left'   :
                    placement == 'left'   && pos.left   - actualWidth  < viewportDim.left   ? 'right'  :
                    placement

        $tip
          .removeClass(orgPlacement)
          .addClass(placement)
      }

      var calculatedOffset = this.getCalculatedOffset(placement, pos, actualWidth, actualHeight)

      this.applyPlacement(calculatedOffset, placement)

      var complete = function () {
        var prevHoverState = that.hoverState
        that.$element.trigger('shown.bs.' + that.type)
        that.hoverState = null

        if (prevHoverState == 'out') that.leave(that)
      }

      $.support.transition && this.$tip.hasClass('fade') ?
        $tip
          .one('bsTransitionEnd', complete)
          .emulateTransitionEnd(Tooltip.TRANSITION_DURATION) :
        complete()
    }
  }

  Tooltip.prototype.applyPlacement = function (offset, placement) {
    var $tip   = this.tip()
    var width  = $tip[0].offsetWidth
    var height = $tip[0].offsetHeight

    // manually read margins because getBoundingClientRect includes difference
    var marginTop = parseInt($tip.css('margin-top'), 10)
    var marginLeft = parseInt($tip.css('margin-left'), 10)

    // we must check for NaN for ie 8/9
    if (isNaN(marginTop))  marginTop  = 0
    if (isNaN(marginLeft)) marginLeft = 0

    offset.top  += marginTop
    offset.left += marginLeft

    // $.fn.offset doesn't round pixel values
    // so we use setOffset directly with our own function B-0
    $.offset.setOffset($tip[0], $.extend({
      using: function (props) {
        $tip.css({
          top: Math.round(props.top),
          left: Math.round(props.left)
        })
      }
    }, offset), 0)

    $tip.addClass('in')

    // check to see if placing tip in new offset caused the tip to resize itself
    var actualWidth  = $tip[0].offsetWidth
    var actualHeight = $tip[0].offsetHeight

    if (placement == 'top' && actualHeight != height) {
      offset.top = offset.top + height - actualHeight
    }

    var delta = this.getViewportAdjustedDelta(placement, offset, actualWidth, actualHeight)

    if (delta.left) offset.left += delta.left
    else offset.top += delta.top

    var isVertical          = /top|bottom/.test(placement)
    var arrowDelta          = isVertical ? delta.left * 2 - width + actualWidth : delta.top * 2 - height + actualHeight
    var arrowOffsetPosition = isVertical ? 'offsetWidth' : 'offsetHeight'

    $tip.offset(offset)
    this.replaceArrow(arrowDelta, $tip[0][arrowOffsetPosition], isVertical)
  }

  Tooltip.prototype.replaceArrow = function (delta, dimension, isVertical) {
    this.arrow()
      .css(isVertical ? 'left' : 'top', 50 * (1 - delta / dimension) + '%')
      .css(isVertical ? 'top' : 'left', '')
  }

  Tooltip.prototype.setContent = function () {
    var $tip  = this.tip()
    var title = this.getTitle()

    $tip.find('.tooltip-inner')[this.options.html ? 'html' : 'text'](title)
    $tip.removeClass('fade in top bottom left right')
  }

  Tooltip.prototype.hide = function (callback) {
    var that = this
    var $tip = $(this.$tip)
    var e    = $.Event('hide.bs.' + this.type)

    function complete() {
      if (that.hoverState != 'in') $tip.detach()
      if (that.$element) { // TODO: Check whether guarding this code with this `if` is really necessary.
        that.$element
          .removeAttr('aria-describedby')
          .trigger('hidden.bs.' + that.type)
      }
      callback && callback()
    }

    this.$element.trigger(e)

    if (e.isDefaultPrevented()) return

    $tip.removeClass('in')

    $.support.transition && $tip.hasClass('fade') ?
      $tip
        .one('bsTransitionEnd', complete)
        .emulateTransitionEnd(Tooltip.TRANSITION_DURATION) :
      complete()

    this.hoverState = null

    return this
  }

  Tooltip.prototype.fixTitle = function () {
    var $e = this.$element
    if ($e.attr('title') || typeof $e.attr('data-original-title') != 'string') {
      $e.attr('data-original-title', $e.attr('title') || '').attr('title', '')
    }
  }

  Tooltip.prototype.hasContent = function () {
    return this.getTitle()
  }

  Tooltip.prototype.getPosition = function ($element) {
    $element   = $element || this.$element

    var el     = $element[0]
    var isBody = el.tagName == 'BODY'

    var elRect    = el.getBoundingClientRect()
    if (elRect.width == null) {
      // width and height are missing in IE8, so compute them manually; see https://github.com/twbs/bootstrap/issues/14093
      elRect = $.extend({}, elRect, { width: elRect.right - elRect.left, height: elRect.bottom - elRect.top })
    }
    var isSvg = window.SVGElement && el instanceof window.SVGElement
    // Avoid using $.offset() on SVGs since it gives incorrect results in jQuery 3.
    // See https://github.com/twbs/bootstrap/issues/20280
    var elOffset  = isBody ? { top: 0, left: 0 } : (isSvg ? null : $element.offset())
    var scroll    = { scroll: isBody ? document.documentElement.scrollTop || document.body.scrollTop : $element.scrollTop() }
    var outerDims = isBody ? { width: $(window).width(), height: $(window).height() } : null

    return $.extend({}, elRect, scroll, outerDims, elOffset)
  }

  Tooltip.prototype.getCalculatedOffset = function (placement, pos, actualWidth, actualHeight) {
    return placement == 'bottom' ? { top: pos.top + pos.height,   left: pos.left + pos.width / 2 - actualWidth / 2 } :
           placement == 'top'    ? { top: pos.top - actualHeight, left: pos.left + pos.width / 2 - actualWidth / 2 } :
           placement == 'left'   ? { top: pos.top + pos.height / 2 - actualHeight / 2, left: pos.left - actualWidth } :
        /* placement == 'right' */ { top: pos.top + pos.height / 2 - actualHeight / 2, left: pos.left + pos.width }

  }

  Tooltip.prototype.getViewportAdjustedDelta = function (placement, pos, actualWidth, actualHeight) {
    var delta = { top: 0, left: 0 }
    if (!this.$viewport) return delta

    var viewportPadding = this.options.viewport && this.options.viewport.padding || 0
    var viewportDimensions = this.getPosition(this.$viewport)

    if (/right|left/.test(placement)) {
      var topEdgeOffset    = pos.top - viewportPadding - viewportDimensions.scroll
      var bottomEdgeOffset = pos.top + viewportPadding - viewportDimensions.scroll + actualHeight
      if (topEdgeOffset < viewportDimensions.top) { // top overflow
        delta.top = viewportDimensions.top - topEdgeOffset
      } else if (bottomEdgeOffset > viewportDimensions.top + viewportDimensions.height) { // bottom overflow
        delta.top = viewportDimensions.top + viewportDimensions.height - bottomEdgeOffset
      }
    } else {
      var leftEdgeOffset  = pos.left - viewportPadding
      var rightEdgeOffset = pos.left + viewportPadding + actualWidth
      if (leftEdgeOffset < viewportDimensions.left) { // left overflow
        delta.left = viewportDimensions.left - leftEdgeOffset
      } else if (rightEdgeOffset > viewportDimensions.right) { // right overflow
        delta.left = viewportDimensions.left + viewportDimensions.width - rightEdgeOffset
      }
    }

    return delta
  }

  Tooltip.prototype.getTitle = function () {
    var title
    var $e = this.$element
    var o  = this.options

    title = $e.attr('data-original-title')
      || (typeof o.title == 'function' ? o.title.call($e[0]) :  o.title)

    return title
  }

  Tooltip.prototype.getUID = function (prefix) {
    do prefix += ~~(Math.random() * 1000000)
    while (document.getElementById(prefix))
    return prefix
  }

  Tooltip.prototype.tip = function () {
    if (!this.$tip) {
      this.$tip = $(this.options.template)
      if (this.$tip.length != 1) {
        throw new Error(this.type + ' `template` option must consist of exactly 1 top-level element!')
      }
    }
    return this.$tip
  }

  Tooltip.prototype.arrow = function () {
    return (this.$arrow = this.$arrow || this.tip().find('.tooltip-arrow'))
  }

  Tooltip.prototype.enable = function () {
    this.enabled = true
  }

  Tooltip.prototype.disable = function () {
    this.enabled = false
  }

  Tooltip.prototype.toggleEnabled = function () {
    this.enabled = !this.enabled
  }

  Tooltip.prototype.toggle = function (e) {
    var self = this
    if (e) {
      self = $(e.currentTarget).data('bs.' + this.type)
      if (!self) {
        self = new this.constructor(e.currentTarget, this.getDelegateOptions())
        $(e.currentTarget).data('bs.' + this.type, self)
      }
    }

    if (e) {
      self.inState.click = !self.inState.click
      if (self.isInStateTrue()) self.enter(self)
      else self.leave(self)
    } else {
      self.tip().hasClass('in') ? self.leave(self) : self.enter(self)
    }
  }

  Tooltip.prototype.destroy = function () {
    var that = this
    clearTimeout(this.timeout)
    this.hide(function () {
      that.$element.off('.' + that.type).removeData('bs.' + that.type)
      if (that.$tip) {
        that.$tip.detach()
      }
      that.$tip = null
      that.$arrow = null
      that.$viewport = null
      that.$element = null
    })
  }


  // TOOLTIP PLUGIN DEFINITION
  // =========================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.tooltip')
      var options = typeof option == 'object' && option

      if (!data && /destroy|hide/.test(option)) return
      if (!data) $this.data('bs.tooltip', (data = new Tooltip(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.tooltip

  $.fn.tooltip             = Plugin
  $.fn.tooltip.Constructor = Tooltip


  // TOOLTIP NO CONFLICT
  // ===================

  $.fn.tooltip.noConflict = function () {
    $.fn.tooltip = old
    return this
  }

}(jQuery);

/* ========================================================================
 * Bootstrap: popover.js v3.3.7
 * http://getbootstrap.com/javascript/#popovers
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // POPOVER PUBLIC CLASS DEFINITION
  // ===============================

  var Popover = function (element, options) {
    this.init('popover', element, options)
  }

  if (!$.fn.tooltip) throw new Error('Popover requires tooltip.js')

  Popover.VERSION  = '3.3.7'

  Popover.DEFAULTS = $.extend({}, $.fn.tooltip.Constructor.DEFAULTS, {
    placement: 'right',
    trigger: 'click',
    content: '',
    template: '<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
  })


  // NOTE: POPOVER EXTENDS tooltip.js
  // ================================

  Popover.prototype = $.extend({}, $.fn.tooltip.Constructor.prototype)

  Popover.prototype.constructor = Popover

  Popover.prototype.getDefaults = function () {
    return Popover.DEFAULTS
  }

  Popover.prototype.setContent = function () {
    var $tip    = this.tip()
    var title   = this.getTitle()
    var content = this.getContent()

    $tip.find('.popover-title')[this.options.html ? 'html' : 'text'](title)
    $tip.find('.popover-content').children().detach().end()[ // we use append for html objects to maintain js events
      this.options.html ? (typeof content == 'string' ? 'html' : 'append') : 'text'
    ](content)

    $tip.removeClass('fade top bottom left right in')

    // IE8 doesn't accept hiding via the `:empty` pseudo selector, we have to do
    // this manually by checking the contents.
    if (!$tip.find('.popover-title').html()) $tip.find('.popover-title').hide()
  }

  Popover.prototype.hasContent = function () {
    return this.getTitle() || this.getContent()
  }

  Popover.prototype.getContent = function () {
    var $e = this.$element
    var o  = this.options

    return $e.attr('data-content')
      || (typeof o.content == 'function' ?
            o.content.call($e[0]) :
            o.content)
  }

  Popover.prototype.arrow = function () {
    return (this.$arrow = this.$arrow || this.tip().find('.arrow'))
  }


  // POPOVER PLUGIN DEFINITION
  // =========================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.popover')
      var options = typeof option == 'object' && option

      if (!data && /destroy|hide/.test(option)) return
      if (!data) $this.data('bs.popover', (data = new Popover(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.popover

  $.fn.popover             = Plugin
  $.fn.popover.Constructor = Popover


  // POPOVER NO CONFLICT
  // ===================

  $.fn.popover.noConflict = function () {
    $.fn.popover = old
    return this
  }

}(jQuery);

/* ========================================================================
 * Bootstrap: scrollspy.js v3.3.7
 * http://getbootstrap.com/javascript/#scrollspy
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // SCROLLSPY CLASS DEFINITION
  // ==========================

  function ScrollSpy(element, options) {
    this.$body          = $(document.body)
    this.$scrollElement = $(element).is(document.body) ? $(window) : $(element)
    this.options        = $.extend({}, ScrollSpy.DEFAULTS, options)
    this.selector       = (this.options.target || '') + ' .nav li > a'
    this.offsets        = []
    this.targets        = []
    this.activeTarget   = null
    this.scrollHeight   = 0

    this.$scrollElement.on('scroll.bs.scrollspy', $.proxy(this.process, this))
    this.refresh()
    this.process()
  }

  ScrollSpy.VERSION  = '3.3.7'

  ScrollSpy.DEFAULTS = {
    offset: 10
  }

  ScrollSpy.prototype.getScrollHeight = function () {
    return this.$scrollElement[0].scrollHeight || Math.max(this.$body[0].scrollHeight, document.documentElement.scrollHeight)
  }

  ScrollSpy.prototype.refresh = function () {
    var that          = this
    var offsetMethod  = 'offset'
    var offsetBase    = 0

    this.offsets      = []
    this.targets      = []
    this.scrollHeight = this.getScrollHeight()

    if (!$.isWindow(this.$scrollElement[0])) {
      offsetMethod = 'position'
      offsetBase   = this.$scrollElement.scrollTop()
    }

    this.$body
      .find(this.selector)
      .map(function () {
        var $el   = $(this)
        var href  = $el.data('target') || $el.attr('href')
        var $href = /^#./.test(href) && $(href)

        return ($href
          && $href.length
          && $href.is(':visible')
          && [[$href[offsetMethod]().top + offsetBase, href]]) || null
      })
      .sort(function (a, b) { return a[0] - b[0] })
      .each(function () {
        that.offsets.push(this[0])
        that.targets.push(this[1])
      })
  }

  ScrollSpy.prototype.process = function () {
    var scrollTop    = this.$scrollElement.scrollTop() + this.options.offset
    var scrollHeight = this.getScrollHeight()
    var maxScroll    = this.options.offset + scrollHeight - this.$scrollElement.height()
    var offsets      = this.offsets
    var targets      = this.targets
    var activeTarget = this.activeTarget
    var i

    if (this.scrollHeight != scrollHeight) {
      this.refresh()
    }

    if (scrollTop >= maxScroll) {
      return activeTarget != (i = targets[targets.length - 1]) && this.activate(i)
    }

    if (activeTarget && scrollTop < offsets[0]) {
      this.activeTarget = null
      return this.clear()
    }

    for (i = offsets.length; i--;) {
      activeTarget != targets[i]
        && scrollTop >= offsets[i]
        && (offsets[i + 1] === undefined || scrollTop < offsets[i + 1])
        && this.activate(targets[i])
    }
  }

  ScrollSpy.prototype.activate = function (target) {
    this.activeTarget = target

    this.clear()

    var selector = this.selector +
      '[data-target="' + target + '"],' +
      this.selector + '[href="' + target + '"]'

    var active = $(selector)
      .parents('li')
      .addClass('active')

    if (active.parent('.dropdown-menu').length) {
      active = active
        .closest('li.dropdown')
        .addClass('active')
    }

    active.trigger('activate.bs.scrollspy')
  }

  ScrollSpy.prototype.clear = function () {
    $(this.selector)
      .parentsUntil(this.options.target, '.active')
      .removeClass('active')
  }


  // SCROLLSPY PLUGIN DEFINITION
  // ===========================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.scrollspy')
      var options = typeof option == 'object' && option

      if (!data) $this.data('bs.scrollspy', (data = new ScrollSpy(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.scrollspy

  $.fn.scrollspy             = Plugin
  $.fn.scrollspy.Constructor = ScrollSpy


  // SCROLLSPY NO CONFLICT
  // =====================

  $.fn.scrollspy.noConflict = function () {
    $.fn.scrollspy = old
    return this
  }


  // SCROLLSPY DATA-API
  // ==================

  $(window).on('load.bs.scrollspy.data-api', function () {
    $('[data-spy="scroll"]').each(function () {
      var $spy = $(this)
      Plugin.call($spy, $spy.data())
    })
  })

}(jQuery);

/* ========================================================================
 * Bootstrap: tab.js v3.3.7
 * http://getbootstrap.com/javascript/#tabs
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // TAB CLASS DEFINITION
  // ====================

  var Tab = function (element) {
    // jscs:disable requireDollarBeforejQueryAssignment
    this.element = $(element)
    // jscs:enable requireDollarBeforejQueryAssignment
  }

  Tab.VERSION = '3.3.7'

  Tab.TRANSITION_DURATION = 150

  Tab.prototype.show = function () {
    var $this    = this.element
    var $ul      = $this.closest('ul:not(.dropdown-menu)')
    var selector = $this.data('target')

    if (!selector) {
      selector = $this.attr('href')
      selector = selector && selector.replace(/.*(?=#[^\s]*$)/, '') // strip for ie7
    }

    if ($this.parent('li').hasClass('active')) return

    var $previous = $ul.find('.active:last a')
    var hideEvent = $.Event('hide.bs.tab', {
      relatedTarget: $this[0]
    })
    var showEvent = $.Event('show.bs.tab', {
      relatedTarget: $previous[0]
    })

    $previous.trigger(hideEvent)
    $this.trigger(showEvent)

    if (showEvent.isDefaultPrevented() || hideEvent.isDefaultPrevented()) return

    var $target = $(selector)

    this.activate($this.closest('li'), $ul)
    this.activate($target, $target.parent(), function () {
      $previous.trigger({
        type: 'hidden.bs.tab',
        relatedTarget: $this[0]
      })
      $this.trigger({
        type: 'shown.bs.tab',
        relatedTarget: $previous[0]
      })
    })
  }

  Tab.prototype.activate = function (element, container, callback) {
    var $active    = container.find('> .active')
    var transition = callback
      && $.support.transition
      && ($active.length && $active.hasClass('fade') || !!container.find('> .fade').length)

    function next() {
      $active
        .removeClass('active')
        .find('> .dropdown-menu > .active')
          .removeClass('active')
        .end()
        .find('[data-toggle="tab"]')
          .attr('aria-expanded', false)

      element
        .addClass('active')
        .find('[data-toggle="tab"]')
          .attr('aria-expanded', true)

      if (transition) {
        element[0].offsetWidth // reflow for transition
        element.addClass('in')
      } else {
        element.removeClass('fade')
      }

      if (element.parent('.dropdown-menu').length) {
        element
          .closest('li.dropdown')
            .addClass('active')
          .end()
          .find('[data-toggle="tab"]')
            .attr('aria-expanded', true)
      }

      callback && callback()
    }

    $active.length && transition ?
      $active
        .one('bsTransitionEnd', next)
        .emulateTransitionEnd(Tab.TRANSITION_DURATION) :
      next()

    $active.removeClass('in')
  }


  // TAB PLUGIN DEFINITION
  // =====================

  function Plugin(option) {
    return this.each(function () {
      var $this = $(this)
      var data  = $this.data('bs.tab')

      if (!data) $this.data('bs.tab', (data = new Tab(this)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.tab

  $.fn.tab             = Plugin
  $.fn.tab.Constructor = Tab


  // TAB NO CONFLICT
  // ===============

  $.fn.tab.noConflict = function () {
    $.fn.tab = old
    return this
  }


  // TAB DATA-API
  // ============

  var clickHandler = function (e) {
    e.preventDefault()
    Plugin.call($(this), 'show')
  }

  $(document)
    .on('click.bs.tab.data-api', '[data-toggle="tab"]', clickHandler)
    .on('click.bs.tab.data-api', '[data-toggle="pill"]', clickHandler)

}(jQuery);

/* ========================================================================
 * Bootstrap: affix.js v3.3.7
 * http://getbootstrap.com/javascript/#affix
 * ========================================================================
 * Copyright 2011-2016 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 * ======================================================================== */


+function ($) {
  'use strict';

  // AFFIX CLASS DEFINITION
  // ======================

  var Affix = function (element, options) {
    this.options = $.extend({}, Affix.DEFAULTS, options)

    this.$target = $(this.options.target)
      .on('scroll.bs.affix.data-api', $.proxy(this.checkPosition, this))
      .on('click.bs.affix.data-api',  $.proxy(this.checkPositionWithEventLoop, this))

    this.$element     = $(element)
    this.affixed      = null
    this.unpin        = null
    this.pinnedOffset = null

    this.checkPosition()
  }

  Affix.VERSION  = '3.3.7'

  Affix.RESET    = 'affix affix-top affix-bottom'

  Affix.DEFAULTS = {
    offset: 0,
    target: window
  }

  Affix.prototype.getState = function (scrollHeight, height, offsetTop, offsetBottom) {
    var scrollTop    = this.$target.scrollTop()
    var position     = this.$element.offset()
    var targetHeight = this.$target.height()

    if (offsetTop != null && this.affixed == 'top') return scrollTop < offsetTop ? 'top' : false

    if (this.affixed == 'bottom') {
      if (offsetTop != null) return (scrollTop + this.unpin <= position.top) ? false : 'bottom'
      return (scrollTop + targetHeight <= scrollHeight - offsetBottom) ? false : 'bottom'
    }

    var initializing   = this.affixed == null
    var colliderTop    = initializing ? scrollTop : position.top
    var colliderHeight = initializing ? targetHeight : height

    if (offsetTop != null && scrollTop <= offsetTop) return 'top'
    if (offsetBottom != null && (colliderTop + colliderHeight >= scrollHeight - offsetBottom)) return 'bottom'

    return false
  }

  Affix.prototype.getPinnedOffset = function () {
    if (this.pinnedOffset) return this.pinnedOffset
    this.$element.removeClass(Affix.RESET).addClass('affix')
    var scrollTop = this.$target.scrollTop()
    var position  = this.$element.offset()
    return (this.pinnedOffset = position.top - scrollTop)
  }

  Affix.prototype.checkPositionWithEventLoop = function () {
    setTimeout($.proxy(this.checkPosition, this), 1)
  }

  Affix.prototype.checkPosition = function () {
    if (!this.$element.is(':visible')) return

    var height       = this.$element.height()
    var offset       = this.options.offset
    var offsetTop    = offset.top
    var offsetBottom = offset.bottom
    var scrollHeight = Math.max($(document).height(), $(document.body).height())

    if (typeof offset != 'object')         offsetBottom = offsetTop = offset
    if (typeof offsetTop == 'function')    offsetTop    = offset.top(this.$element)
    if (typeof offsetBottom == 'function') offsetBottom = offset.bottom(this.$element)

    var affix = this.getState(scrollHeight, height, offsetTop, offsetBottom)

    if (this.affixed != affix) {
      if (this.unpin != null) this.$element.css('top', '')

      var affixType = 'affix' + (affix ? '-' + affix : '')
      var e         = $.Event(affixType + '.bs.affix')

      this.$element.trigger(e)

      if (e.isDefaultPrevented()) return

      this.affixed = affix
      this.unpin = affix == 'bottom' ? this.getPinnedOffset() : null

      this.$element
        .removeClass(Affix.RESET)
        .addClass(affixType)
        .trigger(affixType.replace('affix', 'affixed') + '.bs.affix')
    }

    if (affix == 'bottom') {
      this.$element.offset({
        top: scrollHeight - height - offsetBottom
      })
    }
  }


  // AFFIX PLUGIN DEFINITION
  // =======================

  function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.affix')
      var options = typeof option == 'object' && option

      if (!data) $this.data('bs.affix', (data = new Affix(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.affix

  $.fn.affix             = Plugin
  $.fn.affix.Constructor = Affix


  // AFFIX NO CONFLICT
  // =================

  $.fn.affix.noConflict = function () {
    $.fn.affix = old
    return this
  }


  // AFFIX DATA-API
  // ==============

  $(window).on('load', function () {
    $('[data-spy="affix"]').each(function () {
      var $spy = $(this)
      var data = $spy.data()

      data.offset = data.offset || {}

      if (data.offsetBottom != null) data.offset.bottom = data.offsetBottom
      if (data.offsetTop    != null) data.offset.top    = data.offsetTop

      Plugin.call($spy, data)
    })
  })

}(jQuery);

/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(4)))

/***/ }),
/* 46 */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(2)();
// imports


// module
exports.push([module.i, "\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n/* jQuery Datepicker scholio Styling */\n.ui-widget-header {\n    background: #00bcd4; \n    color: #fff\n}\n.ui-icon, .ui-icon:hover  {\n    width: 16px;\n    height: 16px;\n    /*background-color: #00bcd4;*/\n}\n.ui-widget-header .ui-icon {\n    background-image: url(\"/images/ui-icons_ffffff_256x240.png\");\n}\n.ui-state-default,\n.ui-widget-content .ui-state-default,\n.ui-widget-header .ui-state-default,\n.ui-button,\nhtml .ui-button.ui-state-disabled:hover,\nhtml .ui-button.ui-state-disabled:active {\n    border: none;\n    background: #f4f4f4;\n    /*font-weight: bold;*/\n    color: #004276;\n}\n.ui-state-highlight,\n.ui-widget-content .ui-state-highlight,\n.ui-widget-header .ui-state-highlight {\n    border: none;\n    background: #008da5 ;\n    color: #fff;\n}\n.ui-state-active,\n.ui-widget-content .ui-state-active,\n.ui-widget-header .ui-state-active,\n.ui-button:active,\n.ui-button.ui-state-active:hover{\n    background: #00bcd4;\n    /*font-weight: bold;*/\n    color: #fff;\n}\n.error {color: red\n}\n.step4MinHeight {min-height: 300px!important;\n}\n@media (min-width: 1420px) {\n#step-4 .step .step-box { width: 1100px;  margin-left: -290px; margin-right: auto\n}\n}\n@media (min-width: 1220px) and (max-width: 1419px) {\n#step-4 .step .step-box { width: 900px;  margin-left: -190px; margin-right: auto\n}\n}\n\n", ""]);

// exports


/***/ }),
/* 47 */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(2)();
// imports


// module
exports.push([module.i, "\n.action-link[data-v-4558c92a] {\n    cursor: pointer;\n}\n.m-b-none[data-v-4558c92a] {\n    margin-bottom: 0;\n}\n", ""]);

// exports


/***/ }),
/* 48 */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(2)();
// imports


// module
exports.push([module.i, "\n.action-link[data-v-4f7474f0] {\n    cursor: pointer;\n}\n.m-b-none[data-v-4f7474f0] {\n    margin-bottom: 0;\n}\n", ""]);

// exports


/***/ }),
/* 49 */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(2)();
// imports


// module
exports.push([module.i, "\n*{\n    font-family: Helvetica;\n}\nh3{color: #008da5\n}\nh4{color: #324c5a; text-decoration:underline\n}\np span {color: #a9a9a9\n}\n.btn-del:hover{color: orange; cursor: pointer;\n}\n.ml5{margin-left: -10px;\n}\n.ml20{margin-left: -20px;\n}\nselect {\n    margin: 5px;\n    border: 1px solid #008da5;\n    background: #fefefe;\n    padding: 5px 35px 5px 5px;\n    font-size: 105%;\n    height: 34px;\n}\n.sel1{width: 220px;\n}\n.sel2{width: 455px; margin-left: 2px;\n}\ninput[type=\"checkbox\"] {\n    padding-left:5px;\n    padding-right:5px;\n    border-radius:5px;\n\n    /*-webkit-appearance:button;*/\n\n    border: solid 1px #008da5;\n    background-color: #ffffff;\n    color:#FFF;\n    white-space: nowrap;\n    overflow:hidden;\n\n    width:20px;\n    height:15px;\n}\n#cover {position: fixed; height: 100%; width: 100%; top:0; left: 0; background: #e8e8e8; z-index:9999;\n    font-size: 60px; text-align: center; padding-top: 200px; color: #fff;\n}\n@media (min-width: 1880px) {\n.col-xxl-4 {  width: 33.33%;\n}\n}\n@media (min-width: 2280px) {\n.col-xxl-3 {  width: 24.5%;\n}\n}\n", ""]);

// exports


/***/ }),
/* 50 */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(2)();
// imports


// module
exports.push([module.i, "\n@media (min-width: 1360px) {\n.col-xl-4 {  width: 33.33%;\n}\n}\n@media (min-width: 1840px) {\n.col-xxl-3 {  width: 25%;\n}\n}\n@media (min-width: 2280px) {\n.pull-right{ margin-right: 50px!important;\n}\n}\n", ""]);

// exports


/***/ }),
/* 51 */
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__(2)();
// imports


// module
exports.push([module.i, "\n.action-link[data-v-7cf2cf86] {\n    cursor: pointer;\n}\n.m-b-none[data-v-7cf2cf86] {\n    margin-bottom: 0;\n}\n", ""]);

// exports


/***/ }),
/* 52 */
/***/ (function(module, exports, __webpack_require__) {

var Component = __webpack_require__(0)(
  /* script */
  __webpack_require__(31),
  /* template */
  __webpack_require__(74),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "/Users/apostolossiokas/Documents/Work/scholio/resources/assets/js/components/Notifications-Table.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] Notifications-Table.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-6e8e5c1e", Component.options)
  } else {
    hotAPI.reload("data-v-6e8e5c1e", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),
/* 53 */
/***/ (function(module, exports, __webpack_require__) {

var Component = __webpack_require__(0)(
  /* script */
  __webpack_require__(32),
  /* template */
  __webpack_require__(68),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "/Users/apostolossiokas/Documents/Work/scholio/resources/assets/js/components/Notifications.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] Notifications.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-2858a4bd", Component.options)
  } else {
    hotAPI.reload("data-v-2858a4bd", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),
/* 54 */
/***/ (function(module, exports, __webpack_require__) {

var Component = __webpack_require__(0)(
  /* script */
  __webpack_require__(33),
  /* template */
  __webpack_require__(77),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "/Users/apostolossiokas/Documents/Work/scholio/resources/assets/js/components/Users-Table.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] Users-Table.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-e2b98b84", Component.options)
  } else {
    hotAPI.reload("data-v-e2b98b84", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),
/* 55 */
/***/ (function(module, exports, __webpack_require__) {


/* styles */
__webpack_require__(79)

var Component = __webpack_require__(0)(
  /* script */
  __webpack_require__(34),
  /* template */
  __webpack_require__(71),
  /* scopeId */
  "data-v-4558c92a",
  /* cssModules */
  null
)
Component.options.__file = "/Users/apostolossiokas/Documents/Work/scholio/resources/assets/js/components/passport/AuthorizedClients.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] AuthorizedClients.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-4558c92a", Component.options)
  } else {
    hotAPI.reload("data-v-4558c92a", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),
/* 56 */
/***/ (function(module, exports, __webpack_require__) {


/* styles */
__webpack_require__(83)

var Component = __webpack_require__(0)(
  /* script */
  __webpack_require__(35),
  /* template */
  __webpack_require__(76),
  /* scopeId */
  "data-v-7cf2cf86",
  /* cssModules */
  null
)
Component.options.__file = "/Users/apostolossiokas/Documents/Work/scholio/resources/assets/js/components/passport/Clients.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] Clients.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-7cf2cf86", Component.options)
  } else {
    hotAPI.reload("data-v-7cf2cf86", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),
/* 57 */
/***/ (function(module, exports, __webpack_require__) {


/* styles */
__webpack_require__(80)

var Component = __webpack_require__(0)(
  /* script */
  __webpack_require__(36),
  /* template */
  __webpack_require__(72),
  /* scopeId */
  "data-v-4f7474f0",
  /* cssModules */
  null
)
Component.options.__file = "/Users/apostolossiokas/Documents/Work/scholio/resources/assets/js/components/passport/PersonalAccessTokens.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] PersonalAccessTokens.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-4f7474f0", Component.options)
  } else {
    hotAPI.reload("data-v-4f7474f0", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),
/* 58 */
/***/ (function(module, exports, __webpack_require__) {

var Component = __webpack_require__(0)(
  /* script */
  __webpack_require__(37),
  /* template */
  __webpack_require__(66),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "/Users/apostolossiokas/Documents/Work/scholio/resources/assets/js/components/schools/Resource-Requests.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] Resource-Requests.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-0b16e708", Component.options)
  } else {
    hotAPI.reload("data-v-0b16e708", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),
/* 59 */
/***/ (function(module, exports, __webpack_require__) {


/* styles */
__webpack_require__(78)

var Component = __webpack_require__(0)(
  /* script */
  __webpack_require__(38),
  /* template */
  __webpack_require__(69),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "/Users/apostolossiokas/Documents/Work/scholio/resources/assets/js/components/schools/Scholarships-Create.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] Scholarships-Create.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-2bfae65d", Component.options)
  } else {
    hotAPI.reload("data-v-2bfae65d", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),
/* 60 */
/***/ (function(module, exports, __webpack_require__) {

var Component = __webpack_require__(0)(
  /* script */
  __webpack_require__(39),
  /* template */
  __webpack_require__(70),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "/Users/apostolossiokas/Documents/Work/scholio/resources/assets/js/components/schools/Scholarships-View.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] Scholarships-View.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-432d21c6", Component.options)
  } else {
    hotAPI.reload("data-v-432d21c6", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),
/* 61 */
/***/ (function(module, exports, __webpack_require__) {

var Component = __webpack_require__(0)(
  /* script */
  __webpack_require__(40),
  /* template */
  __webpack_require__(67),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "/Users/apostolossiokas/Documents/Work/scholio/resources/assets/js/components/schools/Schools-Table.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] Schools-Table.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-232c1425", Component.options)
  } else {
    hotAPI.reload("data-v-232c1425", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),
/* 62 */
/***/ (function(module, exports, __webpack_require__) {


/* styles */
__webpack_require__(82)

var Component = __webpack_require__(0)(
  /* script */
  __webpack_require__(41),
  /* template */
  __webpack_require__(75),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "/Users/apostolossiokas/Documents/Work/scholio/resources/assets/js/components/schools/Students-View.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] Students-View.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-72f4b91f", Component.options)
  } else {
    hotAPI.reload("data-v-72f4b91f", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),
/* 63 */
/***/ (function(module, exports, __webpack_require__) {


/* styles */
__webpack_require__(81)

var Component = __webpack_require__(0)(
  /* script */
  __webpack_require__(42),
  /* template */
  __webpack_require__(73),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "/Users/apostolossiokas/Documents/Work/scholio/resources/assets/js/components/schools/Studies-Select.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] Studies-Select.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-5e696f0d", Component.options)
  } else {
    hotAPI.reload("data-v-5e696f0d", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),
/* 64 */
/***/ (function(module, exports, __webpack_require__) {

var Component = __webpack_require__(0)(
  /* script */
  __webpack_require__(43),
  /* template */
  __webpack_require__(65),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "/Users/apostolossiokas/Documents/Work/scholio/resources/assets/js/components/schools/Teachers-View.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] Teachers-View.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-01915e06", Component.options)
  } else {
    hotAPI.reload("data-v-01915e06", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),
/* 65 */
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "row"
  }, _vm._l((_vm.teachers), function(teacher) {
    return _c('div', {
      directives: [{
        name: "show",
        rawName: "v-show",
        value: (teacher.role == 'teacher'),
        expression: "teacher.role=='teacher'"
      }],
      staticClass: "col-xs-12 col-sm-6 com-md-4"
    }, [_c('div', {
      staticClass: "card-box"
    }, [_c('div', {
      staticClass: "row"
    }, [_c('div', {
      staticClass: "contact-card"
    }, [_c('a', {
      staticClass: "pull-left",
      attrs: {
        "href": "#"
      }
    }, [_c('img', {
      staticClass: "img-circle",
      attrs: {
        "width": "80",
        "height": "80",
        "src": teacher.avatar,
        "alt": ""
      }
    })]), _vm._v(" "), _c('div', {
      staticClass: "member-info"
    }, [_c('h4', {
      staticClass: "m-t-0 m-b-5 header-title"
    }, [_c('b', [_vm._v(_vm._s(teacher.name))])]), _vm._v(" "), _c('p', {
      staticClass: "text-muted"
    }, [_vm._v("Καθηγητής")]), _vm._v(" "), _c('p', {
      staticClass: "text-dark"
    }, [_c('i', {
      staticClass: "md md-email"
    }), _vm._v(" "), _c('small', [_vm._v(_vm._s(teacher.email))])])]), _vm._v(" "), _vm._m(0, true)])])])])
  }))
},staticRenderFns: [function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('ul', {
    staticClass: "social-links list-inline m-0"
  }, [_c('li', [_c('a', {
    staticClass: "tooltips",
    attrs: {
      "title": "",
      "data-placement": "top",
      "data-toggle": "tooltip",
      "href": "",
      "data-original-title": "Facebook"
    }
  }, [_c('i', {
    staticClass: "fa fa-facebook"
  })])]), _vm._v(" "), _c('li', [_c('a', {
    staticClass: "tooltips",
    attrs: {
      "title": "",
      "data-placement": "top",
      "data-toggle": "tooltip",
      "href": "",
      "data-original-title": "Twitter"
    }
  }, [_c('i', {
    staticClass: "fa fa-twitter"
  })])]), _vm._v(" "), _c('li', [_c('a', {
    staticClass: "tooltips",
    attrs: {
      "title": "",
      "data-placement": "top",
      "data-toggle": "tooltip",
      "href": "",
      "data-original-title": "LinkedIn"
    }
  }, [_c('i', {
    staticClass: "fa fa-linkedin"
  })])]), _vm._v(" "), _c('li', [_c('a', {
    staticClass: "tooltips",
    attrs: {
      "title": "",
      "data-placement": "top",
      "data-toggle": "tooltip",
      "href": "",
      "data-original-title": "Skype"
    }
  }, [_c('i', {
    staticClass: "fa fa-skype"
  })])]), _vm._v(" "), _c('li', [_c('a', {
    staticClass: "tooltips",
    attrs: {
      "title": "",
      "data-placement": "top",
      "data-toggle": "tooltip",
      "href": "",
      "data-original-title": "Message"
    }
  }, [_c('i', {
    staticClass: "fa fa-envelope-o"
  })])])])
}]}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-01915e06", module.exports)
  }
}

/***/ }),
/* 66 */
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "row"
  }, [_c('div', {
    staticClass: "col-sm-12"
  }, [_c('div', {
    staticClass: "card-box"
  }, [_c('div', {
    staticClass: "row"
  }, [_c('div', {
    staticClass: "col-lg-12"
  }, [_vm._m(0), _vm._v(" "), _c('p', {
    staticClass: "text-muted font-13"
  }, [_vm._v("\n                       Bla Bla\n                    ")]), _vm._v(" "), _c('div', {
    staticClass: "p-20"
  }, [_c('div', {
    staticClass: "table-responsive"
  }, [_c('table', {
    staticClass: "table m-0"
  }, [_vm._m(1), _vm._v(" "), _c('tbody', _vm._l((_vm.notifications), function(notification) {
    return _c('tr', [_c('td', [_vm._v(_vm._s(notification.type))]), _vm._v(" "), _c('td', [_vm._v(_vm._s(notification.notifiable_id))]), _vm._v(" "), _c('td', [_vm._v(_vm._s(notification.notifiable_type))]), _vm._v(" "), _c('td', [_vm._v(_vm._s(notification.read_at))]), _vm._v(" "), _c('td', [_vm._v(_vm._s(notification.created_at))])])
  }))])])])])])])])])
},staticRenderFns: [function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('h4', {
    staticClass: "m-t-0 header-title"
  }, [_c('b', [_vm._v("Notifications Table")])])
},function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('thead', [_c('tr', [_c('th', [_vm._v("Type")]), _vm._v(" "), _c('th', [_vm._v("Notifiable Id")]), _vm._v(" "), _c('th', [_vm._v("Notifiable Type")]), _vm._v(" "), _c('th', [_vm._v("Read At")]), _vm._v(" "), _c('th', [_vm._v("Created At")])])])
}]}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-0b16e708", module.exports)
  }
}

/***/ }),
/* 67 */
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "row"
  }, [_c('div', {
    staticClass: "col-sm-12"
  }, [_c('div', {
    staticClass: "card-box"
  }, [_c('div', {
    staticClass: "row"
  }, [_c('div', {
    staticClass: "col-lg-12"
  }, [_vm._m(0), _vm._v(" "), _c('p', {
    staticClass: "text-muted font-13"
  }, [_vm._v("\n                       Bla Bla\n                    ")]), _vm._v(" "), _c('div', {
    staticClass: "table-rep-plugin"
  }, [_c('div', {
    staticClass: "table-responsive",
    attrs: {
      "data-pattern": "priority-columns"
    }
  }, [_c('table', {
    staticClass: "table  table-striped",
    attrs: {
      "id": "tech-companies-1"
    }
  }, [_vm._m(1), _vm._v(" "), _c('tbody', _vm._l((_vm.schools), function(school) {
    return _c('tr', [_c('td', [_vm._v(_vm._s(school.id))]), _vm._v(" "), _c('td', [_vm._v(_vm._s(school.name))]), _vm._v(" "), _c('td', [_vm._v(_vm._s(school.email))]), _vm._v(" "), _c('td', [_vm._v(_vm._s(school.type_id))]), _vm._v(" "), _c('td', [_vm._v(_vm._s(school.address))]), _vm._v(" "), _c('td', [_vm._v(_vm._s(school.city))]), _vm._v(" "), _c('td', [_vm._v(_vm._s(school.phone))]), _vm._v(" "), _c('td', [_vm._v(_vm._s(school.website))]), _vm._v(" "), _c('td', [_vm._v(_vm._s(school.logo_id))]), _vm._v(" "), _c('td', [_vm._v(_vm._s(school.approved))]), _vm._v(" "), _c('td', [_vm._v(_vm._s(school.created_at))])])
  }))])])])])])])])])
},staticRenderFns: [function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('h4', {
    staticClass: "m-t-0 header-title"
  }, [_c('b', [_vm._v("Schools Table")])])
},function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('thead', [_c('tr', [_c('th', [_vm._v("ID")]), _vm._v(" "), _c('th', [_vm._v("Name")]), _vm._v(" "), _c('th', [_vm._v("Email")]), _vm._v(" "), _c('th', [_vm._v("Type")]), _vm._v(" "), _c('th', [_vm._v("Address")]), _vm._v(" "), _c('th', [_vm._v("City")]), _vm._v(" "), _c('th', [_vm._v("Phone")]), _vm._v(" "), _c('th', [_vm._v("Website")]), _vm._v(" "), _c('th', [_vm._v("Logo")]), _vm._v(" "), _c('th', [_vm._v("Approved")]), _vm._v(" "), _c('th', [_vm._v("Created At")])])])
}]}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-232c1425", module.exports)
  }
}

/***/ }),
/* 68 */
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('li', {
    staticClass: "dropdown hidden-xs"
  }, [_c('a', {
    staticClass: "dropdown-toggle waves-effect",
    attrs: {
      "href": "#",
      "data-toggle": "dropdown",
      "aria-expanded": "true"
    }
  }, [_c('i', {
    staticClass: "icon-bell"
  }), _vm._v(" "), (_vm.unreadNotifications) ? _c('span', {
    staticClass: "badge badge-xs badge-danger"
  }, [_vm._v("\n            " + _vm._s(_vm.unreadNotifications.length) + "\n        ")]) : _vm._e()]), _vm._v(" "), _c('ul', {
    staticClass: "dropdown-menu dropdown-menu-lg"
  }, [_vm._m(0), _vm._v(" "), _c('li', {
    staticClass: "list-group nicescroll notification-list"
  }, [_c('a', {
    staticClass: "list-group-item",
    attrs: {
      "href": "/panel/school/requests"
    }
  }, [_c('div', {
    staticClass: "media"
  }, [_vm._m(1), _vm._v(" "), _c('div', {
    staticClass: "media-body"
  }, [_c('h5', {
    staticClass: "media-heading"
  }, [_vm._v("Ειδοποίηση για σύνδεση")]), _vm._v(" "), _c('p', {
    staticClass: "m-0"
  }, [(_vm.unreadNotifications) ? _c('small', [_vm._v(_vm._s(_vm.unreadNotifications.length) + " αιτήματα")]) : _vm._e()])])])])]), _vm._v(" "), _vm._m(2)])])
},staticRenderFns: [function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('li', {
    staticClass: "notifi-title"
  }, [_c('span', {
    staticClass: "label label-default pull-right"
  }, [_vm._v("New 3")]), _vm._v("Notification")])
},function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "pull-left p-r-10"
  }, [_c('em', {
    staticClass: "fa fa-user-plus fa-2x text-info"
  })])
},function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('li', [_c('a', {
    staticClass: "list-group-item text-right",
    attrs: {
      "href": "/panel/school/requests"
    }
  }, [_c('small', {
    staticClass: "font-600"
  }, [_vm._v("See all notifications")])])])
}]}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-2858a4bd", module.exports)
  }
}

/***/ }),
/* 69 */
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "row"
  }, [_c('div', {
    attrs: {
      "id": "smartwizard"
    }
  }, [_vm._m(0), _vm._v(" "), _c('div', {
    staticClass: "row"
  }, [_c('div', {
    staticClass: "step-anchor",
    attrs: {
      "id": "step-1"
    }
  }, [_c('div', {
    staticClass: "step centered-text"
  }, [_c('div', {
    staticClass: "step-box"
  }, [_c('div', {
    staticClass: "step-img"
  }, [(_vm.financial_id == 1) ? _c('img', {
    staticClass: "step-image",
    attrs: {
      "src": "/panel/assets/images/steps/step1-reduce2.png",
      "alt": "scholio logo"
    }
  }) : _vm._e(), _vm._v(" "), (_vm.financial_id == 2) ? _c('img', {
    staticClass: "step-image",
    attrs: {
      "src": "/panel/assets/images/steps/step1-hand2.png",
      "alt": "scholio logo"
    }
  }) : _vm._e(), _vm._v(" "), (_vm.financial_id == 3) ? _c('img', {
    staticClass: "step-image",
    attrs: {
      "src": "/panel/assets/images/steps/step1-clock2.png",
      "alt": "scholio logo"
    }
  }) : _vm._e()]), _vm._v(" "), _c('select', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.financial_id),
      expression: "financial_id"
    }],
    staticClass: "selectpicker",
    attrs: {
      "data-width": "100%"
    },
    on: {
      "change": function($event) {
        _vm.financial_id = Array.prototype.filter.call($event.target.options, function(o) {
          return o.selected
        }).map(function(o) {
          var val = "_value" in o ? o._value : o.value;
          return val
        })[0]
      }
    }
  }, [_c('option', {
    attrs: {
      "data-icon": "fa fa-scissors"
    },
    domProps: {
      "value": 1
    }
  }, [_vm._v("  Μείωση Διδάκτρων")]), _vm._v(" "), _c('option', {
    attrs: {
      "data-icon": "fa fa-money"
    },
    domProps: {
      "value": 2
    }
  }, [_vm._v("  Ποσό Επιδότησης")]), _vm._v(" "), _c('option', {
    attrs: {
      "data-icon": "fa fa-clock-o"
    },
    domProps: {
      "value": 3
    }
  }, [_vm._v("  Χρόνος Δωρεάν Φοίτησης")])]), _vm._v(" "), _c('div', {
    staticStyle: {
      "width": "50%",
      "margin-left": "25%"
    }
  }, [(_vm.financial_id == 1) ? _c('div', {
    staticClass: "input-group ",
    staticStyle: {
      "padding": "15px 0",
      "z-index": "1"
    }
  }, [_c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.financial_amount),
      expression: "financial_amount"
    }],
    staticClass: "form-control",
    attrs: {
      "type": "text",
      "placeholder": "20",
      "aria-describedby": "basic-addon1"
    },
    domProps: {
      "value": _vm._s(_vm.financial_amount)
    },
    on: {
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.financial_amount = $event.target.value
      }
    }
  }), _vm._v(" "), _c('span', {
    staticClass: "input-group-addon",
    attrs: {
      "id": "basic-addon1"
    }
  }, [_vm._v("%")])]) : _vm._e(), _vm._v(" "), (_vm.financial_id == 2) ? _c('div', {
    staticClass: "input-group",
    staticStyle: {
      "padding": "15px 0",
      "z-index": "1"
    }
  }, [_c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.financial_amount),
      expression: "financial_amount"
    }],
    staticClass: "form-control",
    attrs: {
      "type": "text",
      "placeholder": "800",
      "aria-describedby": "basic-addon2"
    },
    domProps: {
      "value": _vm._s(_vm.financial_amount)
    },
    on: {
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.financial_amount = $event.target.value
      }
    }
  }), _vm._v(" "), _c('span', {
    staticClass: "input-group-addon",
    attrs: {
      "id": "basic-addon2"
    }
  }, [_vm._v("€")])]) : _vm._e(), _vm._v(" "), (_vm.financial_id == 3) ? _c('div', {
    staticClass: "input-group",
    staticStyle: {
      "padding": "15px 0",
      "z-index": "1"
    }
  }, [_c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.financial_amount),
      expression: "financial_amount"
    }],
    staticClass: "form-control",
    attrs: {
      "type": "text",
      "placeholder": "2",
      "aria-describedby": "basic-addon3"
    },
    domProps: {
      "value": _vm._s(_vm.financial_amount)
    },
    on: {
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.financial_amount = $event.target.value
      }
    }
  }), _vm._v(" "), _c('span', {
    staticClass: "input-group-addon",
    attrs: {
      "id": "basic-addon3"
    }
  }, [_vm._v("Μήνες")])]) : _vm._e()])])])]), _vm._v(" "), _c('div', {
    staticClass: "step-anchor",
    attrs: {
      "id": "step-2"
    }
  }, [_c('div', {
    staticClass: "step centered-text"
  }, [_c('div', {
    staticClass: "step-box",
    class: {
      'step3check': (_vm.levelsName.length > 2)
    },
    style: ([!_vm.col_iek_eng_dan_mus, {
      minHeight: 380 + 'px'
    }])
  }, [(_vm.checkedStudies.length) ? _c('div', {
    staticClass: "step-img"
  }, _vm._l((_vm.studies[_vm.selectedLevel].section), function(image) {
    return _c('div', [(image.name == _vm.sectionsName[_vm.selectedLevel][_vm.selectedSection]) ? _c('img', {
      staticClass: "step-image",
      attrs: {
        "src": '/panel/assets/images/steps/' + image.name + '.png',
        "alt": ""
      }
    }) : _vm._e()])
  })) : _vm._e(), _vm._v(" "), (_vm.col_iek_eng_dan_mus) ? _c('div', [(_vm.sectionsCounter > 1) ? _c('select', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.selectedSection),
      expression: "selectedSection"
    }],
    staticClass: "select-step2",
    on: {
      "change": [function($event) {
        _vm.selectedSection = Array.prototype.filter.call($event.target.options, function(o) {
          return o.selected
        }).map(function(o) {
          var val = "_value" in o ? o._value : o.value;
          return val
        })[0]
      }, function($event) {
        _vm.pullStudies()
      }]
    }
  }, _vm._l((_vm.sectionsName[_vm.selectedLevel]), function(section, indexSection) {
    return _c('option', {
      domProps: {
        "value": indexSection
      }
    }, [_vm._v("\n                                    " + _vm._s(section))])
  })) : _vm._e(), _vm._v(" "), (_vm.checkedStudies.length) ? _c('select', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.selectedStudy),
      expression: "selectedStudy"
    }],
    staticClass: "select-step2",
    on: {
      "change": function($event) {
        _vm.selectedStudy = Array.prototype.filter.call($event.target.options, function(o) {
          return o.selected
        }).map(function(o) {
          var val = "_value" in o ? o._value : o.value;
          return val
        })[0]
      }
    }
  }, _vm._l((_vm.studiesArray), function(sect, indexStudy) {
    return _c('option', {
      domProps: {
        "value": indexStudy
      }
    }, [_vm._v("\n                                    " + _vm._s(sect) + "\n                                ")])
  })) : _vm._e(), _vm._v(" "), _c('div', {
    staticClass: "checkBox-step2"
  }, [(_vm.levelsName.length > 1 && _vm.levelsName.length < 3) ? _c('div', {
    staticClass: "funkyradio"
  }, _vm._l((_vm.levelsName), function(level, indexLevel) {
    return _c('div', {
      staticClass: "funkyradio-success"
    }, [_c('input', {
      directives: [{
        name: "model",
        rawName: "v-model",
        value: (_vm.selectedLevel),
        expression: "selectedLevel"
      }],
      attrs: {
        "type": "radio",
        "name": 'radio-' + indexLevel,
        "id": 'radio-' + indexLevel
      },
      domProps: {
        "value": indexLevel,
        "checked": _vm._q(_vm.selectedLevel, indexLevel)
      },
      on: {
        "change": function($event) {
          _vm.changeLevel()
        },
        "click": function($event) {
          _vm.selectedLevel = indexLevel
        }
      }
    }), _vm._v(" "), (level != null) ? _c('label', {
      attrs: {
        "for": 'radio-' + indexLevel
      }
    }, [_vm._v(" " + _vm._s(level) + "  ")]) : _vm._e()])
  })) : _vm._e(), _vm._v(" "), (_vm.levelsName.length > 2) ? _c('select', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.selectedLevel),
      expression: "selectedLevel"
    }],
    staticClass: "select-step2",
    on: {
      "change": [function($event) {
        _vm.selectedLevel = Array.prototype.filter.call($event.target.options, function(o) {
          return o.selected
        }).map(function(o) {
          var val = "_value" in o ? o._value : o.value;
          return val
        })[0]
      }, function($event) {
        _vm.changeLevel()
      }]
    }
  }, _vm._l((_vm.levelsName), function(level, indexLevel) {
    return _c('option', {
      domProps: {
        "value": indexLevel
      }
    }, [_vm._v("\n                                            " + _vm._s(level) + "\n                                    ")])
  })) : _vm._e()])]) : _vm._e(), _vm._v(" "), (!_vm.col_iek_eng_dan_mus && _vm.checkedStudies.length) ? _c('div', [_c('select', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.selectedStudy),
      expression: "selectedStudy"
    }],
    staticClass: "select-step2",
    on: {
      "change": function($event) {
        _vm.selectedStudy = Array.prototype.filter.call($event.target.options, function(o) {
          return o.selected
        }).map(function(o) {
          var val = "_value" in o ? o._value : o.value;
          return val
        })[0]
      }
    }
  }, _vm._l((_vm.levelsName), function(study, indexStudy) {
    return _c('option', {
      domProps: {
        "value": indexStudy
      }
    }, [_vm._v("\n                                        " + _vm._s(study))])
  }))]) : _vm._e()])])]), _vm._v(" "), _c('div', {
    staticClass: "step-anchor",
    attrs: {
      "id": "step-3"
    }
  }, [_c('div', {
    staticClass: "step centered-text"
  }, [_c('div', {
    staticClass: "step-box"
  }, [_c('div', {
    staticClass: "step-img"
  }, [(_vm.criteria_id == 1) ? _c('img', {
    staticClass: "step-image",
    attrs: {
      "src": "/panel/assets/images/steps/step3-skills1.png",
      "alt": ""
    }
  }) : _vm._e(), _vm._v(" "), (_vm.criteria_id == 2) ? _c('img', {
    staticClass: "step-image",
    attrs: {
      "src": "/panel/assets/images/steps/step3-best.png",
      "alt": ""
    }
  }) : _vm._e(), _vm._v(" "), (_vm.criteria_id == 3) ? _c('img', {
    staticClass: "step-image",
    attrs: {
      "src": "/panel/assets/images/steps/step3-help.png",
      "alt": ""
    }
  }) : _vm._e(), _vm._v(" "), (_vm.criteria_id == 4) ? _c('img', {
    staticClass: "step-image",
    attrs: {
      "src": "/panel/assets/images/steps/step3-friends.png",
      "alt": ""
    }
  }) : _vm._e(), _vm._v(" "), (_vm.criteria_id == 5) ? _c('img', {
    staticClass: "step-image",
    attrs: {
      "src": "/panel/assets/images/steps/step3-open.png",
      "alt": ""
    }
  }) : _vm._e()]), _vm._v(" "), _c('select', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.criteria_id),
      expression: "criteria_id"
    }],
    staticClass: "selectpicker",
    attrs: {
      "data-live-search": "true",
      "data-mobile": "false",
      "data-size": "3",
      "data-width": "100%"
    },
    on: {
      "change": function($event) {
        _vm.criteria_id = Array.prototype.filter.call($event.target.options, function(o) {
          return o.selected
        }).map(function(o) {
          var val = "_value" in o ? o._value : o.value;
          return val
        })[0]
      }
    }
  }, [_c('option', {
    attrs: {
      "data-icon": "fa ",
      "value": "1"
    }
  }, [_vm._v("  Υποτροφία Ταλέντου/Δεξιοτήτων")]), _vm._v(" "), _c('option', {
    attrs: {
      "data-icon": "fa ",
      "value": "2"
    }
  }, [_vm._v("  Υποτροφία Αριστείας")]), _vm._v(" "), _c('option', {
    attrs: {
      "data-icon": "fa ",
      "value": "3"
    }
  }, [_vm._v("  Υποτροφια με Κοινωνικά Κριτήρια")]), _vm._v(" "), _c('option', {
    attrs: {
      "data-icon": "fa ",
      "value": "4"
    }
  }, [_vm._v("  1+1 Φίλοι / Αδέλφια")]), _vm._v(" "), _c('option', {
    attrs: {
      "data-icon": "fa ",
      "value": "5"
    }
  }, [_vm._v("  Υποτροφία Ανοιχτού Τύπου")])])])])]), _vm._v(" "), _c('div', {
    staticClass: "step-anchor",
    attrs: {
      "id": "step-4"
    }
  }, [_c('div', {
    staticClass: "step centered-text"
  }, [_c('div', {
    staticClass: "step-box",
    class: {
      'step4MinHeight': !_vm.withTerms
    }
  }, [_c('h3', [_vm._v("Όροι και Λεπτομέρειες Συμμετοχής")]), _vm._v(" "), _c('div', {
    staticClass: "col-lg-4"
  }, [_c('div', {
    staticClass: "pull-left"
  }, [_vm._v(" Υποτροφία ενεργή μέχρι: ")]), _vm._v(" "), _c('div', {
    staticClass: "clearfix"
  }), _vm._v(" "), _c('input', {
    staticClass: "ll-skin-cangas pull-left",
    class: {
      'error': _vm.error
    },
    staticStyle: {
      "margin-top": "10px",
      "height": "35px",
      "border": "1px solid #d2d2d2",
      "border-radius": "3px"
    },
    attrs: {
      "type": "text",
      "id": "datepicker",
      "size": "30",
      "onchange": "Event.$emit('datePick', event.target.value)"
    },
    domProps: {
      "value": _vm.end_at
    }
  }), _vm._v(" "), _c('div', {
    staticClass: "clearfix"
  })]), _vm._v(" "), _c('div', {
    staticClass: "col-lg-4 col-sm-6"
  }, [_c('div', {
    staticClass: "funkyradio",
    staticStyle: {
      "width": "240px",
      "margin": "15px 0 0 0"
    }
  }, [_c('div', {
    staticClass: "funkyradio-success"
  }, [_c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.exams),
      expression: "exams"
    }],
    attrs: {
      "type": "checkbox",
      "id": "exams"
    },
    domProps: {
      "checked": Array.isArray(_vm.exams) ? _vm._i(_vm.exams, null) > -1 : (_vm.exams)
    },
    on: {
      "click": function($event) {
        var $$a = _vm.exams,
          $$el = $event.target,
          $$c = $$el.checked ? (true) : (false);
        if (Array.isArray($$a)) {
          var $$v = null,
            $$i = _vm._i($$a, $$v);
          if ($$c) {
            $$i < 0 && (_vm.exams = $$a.concat($$v))
          } else {
            $$i > -1 && (_vm.exams = $$a.slice(0, $$i).concat($$a.slice($$i + 1)))
          }
        } else {
          _vm.exams = $$c
        }
      }
    }
  }), _vm._v(" "), _c('label', {
    attrs: {
      "for": "exams"
    }
  }, [_vm._v(" Υποτροφία με εξετάσεις")])])])]), _vm._v(" "), _c('div', {
    staticClass: "col-lg-4 col-sm-6"
  }, [_c('div', {
    staticClass: "funkyradio",
    staticStyle: {
      "width": "240px",
      "margin": "15px 0 0 0"
    }
  }, [_c('div', {
    staticClass: "funkyradio-success"
  }, [_c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.withTerms),
      expression: "withTerms"
    }],
    attrs: {
      "type": "checkbox",
      "id": "withTerms"
    },
    domProps: {
      "checked": Array.isArray(_vm.withTerms) ? _vm._i(_vm.withTerms, null) > -1 : (_vm.withTerms)
    },
    on: {
      "click": function($event) {
        var $$a = _vm.withTerms,
          $$el = $event.target,
          $$c = $$el.checked ? (true) : (false);
        if (Array.isArray($$a)) {
          var $$v = null,
            $$i = _vm._i($$a, $$v);
          if ($$c) {
            $$i < 0 && (_vm.withTerms = $$a.concat($$v))
          } else {
            $$i > -1 && (_vm.withTerms = $$a.slice(0, $$i).concat($$a.slice($$i + 1)))
          }
        } else {
          _vm.withTerms = $$c
        }
      }
    }
  }), _vm._v(" "), _c('label', {
    attrs: {
      "for": "withTerms"
    }
  }, [_vm._v(" Όροι και Προϋποθέσεις")])])]), _vm._v(" "), _c('div', {
    staticClass: "clearfix"
  })]), _vm._v(" "), (_vm.withTerms) ? _c('div', {
    attrs: {
      "id": ""
    }
  }, [_c('span', {
    staticStyle: {
      "color": "transparent"
    }
  }, [_vm._v(".")]), _vm._v(" "), _c('tinymce', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.terms),
      expression: "terms"
    }],
    attrs: {
      "id": "editor",
      "options": _vm.tinyOptions,
      "content": _vm.content
    },
    domProps: {
      "value": (_vm.terms)
    },
    on: {
      "change": _vm.tinyMCE,
      "input": function($event) {
        _vm.terms = $event
      }
    }
  }), _vm._v(" "), _vm._m(1)], 1) : _vm._e()])])])])])])
},staticRenderFns: [function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('ul', {
    staticClass: "clearfix"
  }, [_c('li', [_c('a', {
    attrs: {
      "href": "#step-1"
    }
  }, [_vm._v("Βήμα 1"), _c('br'), _c('small', {
    staticClass: "mar-le-10"
  }, [_vm._v("Οικονομική "), _c('p', {
    staticStyle: {
      "margin-top": "-18px"
    }
  }, [_vm._v("Προσφορά")])])])]), _vm._v(" "), _c('li', [_c('a', {
    attrs: {
      "href": "#step-2"
    }
  }, [_vm._v("Βήμα 2"), _c('br'), _c('small', {
    staticClass: "mar-le-10"
  }, [_vm._v("Σπουδές/Ειδικότητα")])])]), _vm._v(" "), _c('li', [_c('a', {
    attrs: {
      "href": "#step-3"
    }
  }, [_vm._v("Βήμα 3"), _c('br'), _c('small', {
    staticClass: "mar-le-10"
  }, [_vm._v("Κριτήρια/Όροι")])])]), _vm._v(" "), _c('li', [_c('a', {
    attrs: {
      "href": "#step-4"
    }
  }, [_vm._v("Βήμα 4"), _c('br'), _c('small', {
    staticClass: "mar-le-10"
  }, [_vm._v("Όροι Συμμετοχής")])])])])
},function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', [_c('span', [_vm._v("Υπολοιπο Χαρακτήρων:")]), _vm._v(" "), _c('span', {
    attrs: {
      "id": "chars_left"
    }
  })])
}]}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-2bfae65d", module.exports)
  }
}

/***/ }),
/* 70 */
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "row"
  }, [_c('div', {
    staticClass: "col-sm-12"
  }, [_c('div', {
    staticClass: "card-box"
  }, [_c('div', {
    staticClass: "row"
  }, [_c('div', {
    staticClass: "col-lg-12"
  }, [_vm._m(0), _vm._v(" "), _c('p', {
    staticClass: "text-muted font-13"
  }, [_vm._v("\n                       Μπλά μπλά μπλά\n                    ")]), _vm._v(" "), _c('div', {
    staticClass: "table-rep-plugin"
  }, [_c('div', {
    staticClass: "table-responsive",
    attrs: {
      "data-pattern": "priority-columns"
    }
  }, [_c('table', {
    staticClass: "table  table-striped",
    attrs: {
      "id": "tech-companies-1"
    }
  }, [_c('thead', [_c('tr', [_c('th', [_vm._v("Πλάνο Υποτροφίας")]), _vm._v(" "), _c('th', [_vm._v("Ποσό")]), _vm._v(" "), (_vm.showLevel) ? _c('th', [_vm._v("Τύπος Σπουδών")]) : _vm._e(), _vm._v(" "), _c('th', [_vm._v("Επίπεδο Σπουδών")]), _vm._v(" "), _c('th', [_vm._v("Κριτήρια")]), _vm._v(" "), _c('th', [_vm._v("Ημερομηνία Λήξης")]), _vm._v(" "), _c('th', [_vm._v("Νικητής")])])]), _vm._v(" "), _c('tbody', _vm._l((_vm.scholarships), function(scholarship) {
    return _c('tr', [_c('td', [_vm._v(_vm._s(scholarship.financial.plan))]), _vm._v(" "), _c('td', [_vm._v(_vm._s(scholarship.financial_amount) + "\n                                            "), (scholarship.financial.id == 1) ? _c('span', [_vm._v("%")]) : _vm._e(), _vm._v(" "), (scholarship.financial.id == 2) ? _c('span', [_vm._v("€")]) : _vm._e(), _vm._v(" "), (scholarship.financial.id == 3) ? _c('span', [_vm._v("μήνες")]) : _vm._e()]), _vm._v(" "), (_vm.showLevel) ? _c('td', [_vm._v(_vm._s(scholarship.study.name))]) : _vm._e(), _vm._v(" "), _c('td', [_vm._v(_vm._s(scholarship.level.name))]), _vm._v(" "), _c('td', [_vm._v(_vm._s(scholarship.criteria_id))]), _vm._v(" "), _c('td', [_vm._v(_vm._s(scholarship.end_at))]), _vm._v(" "), _c('td', [_vm._v(_vm._s(scholarship.winner_id))])])
  }))])])])])])])])])
},staticRenderFns: [function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('h4', {
    staticClass: "m-t-0 header-title"
  }, [_c('b', [_vm._v("Πίνακας Υποτροφιών")])])
}]}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-432d21c6", module.exports)
  }
}

/***/ }),
/* 71 */
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', [(_vm.tokens.length > 0) ? _c('div', [_c('div', {
    staticClass: "panel panel-default"
  }, [_c('div', {
    staticClass: "panel-heading"
  }, [_vm._v("Authorized Applications")]), _vm._v(" "), _c('div', {
    staticClass: "panel-body"
  }, [_c('table', {
    staticClass: "table table-borderless m-b-none"
  }, [_vm._m(0), _vm._v(" "), _c('tbody', _vm._l((_vm.tokens), function(token) {
    return _c('tr', [_c('td', {
      staticStyle: {
        "vertical-align": "middle"
      }
    }, [_vm._v("\n                                " + _vm._s(token.client.name) + "\n                            ")]), _vm._v(" "), _c('td', {
      staticStyle: {
        "vertical-align": "middle"
      }
    }, [(token.scopes.length > 0) ? _c('span', [_vm._v("\n                                    " + _vm._s(token.scopes.join(', ')) + "\n                                ")]) : _vm._e()]), _vm._v(" "), _c('td', {
      staticStyle: {
        "vertical-align": "middle"
      }
    }, [_c('a', {
      staticClass: "action-link text-danger",
      on: {
        "click": function($event) {
          _vm.revoke(token)
        }
      }
    }, [_vm._v("\n                                    Revoke\n                                ")])])])
  }))])])])]) : _vm._e()])
},staticRenderFns: [function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('thead', [_c('tr', [_c('th', [_vm._v("Name")]), _vm._v(" "), _c('th', [_vm._v("Scopes")]), _vm._v(" "), _c('th')])])
}]}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-4558c92a", module.exports)
  }
}

/***/ }),
/* 72 */
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', [_c('div', [_c('div', {
    staticClass: "panel panel-border panel-primary"
  }, [_c('div', {
    staticClass: "panel-heading"
  }, [_c('div', {
    staticStyle: {
      "display": "flex",
      "justify-content": "space-between",
      "align-items": "center"
    }
  }, [_c('span', [_vm._v("\n                        Personal Access Tokens\n                    ")]), _vm._v(" "), _c('a', {
    staticClass: "action-link",
    on: {
      "click": _vm.showCreateTokenForm
    }
  }, [_vm._v("\n                        Create New Token\n                    ")])])]), _vm._v(" "), _c('div', {
    staticClass: "panel-body"
  }, [(_vm.tokens.length === 0) ? _c('p', {
    staticClass: "m-b-none"
  }, [_vm._v("\n                    You have not created any personal access tokens.\n                ")]) : _vm._e(), _vm._v(" "), (_vm.tokens.length > 0) ? _c('table', {
    staticClass: "table table-borderless m-b-none"
  }, [_vm._m(0), _vm._v(" "), _c('tbody', _vm._l((_vm.tokens), function(token) {
    return _c('tr', [_c('td', {
      staticStyle: {
        "vertical-align": "middle"
      }
    }, [_vm._v("\n                                " + _vm._s(token.name) + "\n                            ")]), _vm._v(" "), _c('td', {
      staticStyle: {
        "vertical-align": "middle"
      }
    }, [_c('a', {
      staticClass: "action-link text-danger",
      on: {
        "click": function($event) {
          _vm.revoke(token)
        }
      }
    }, [_vm._v("\n                                    Delete\n                                ")])])])
  }))]) : _vm._e()])])]), _vm._v(" "), _c('div', {
    staticClass: "modal fade",
    attrs: {
      "id": "modal-create-token",
      "tabindex": "-1",
      "role": "dialog"
    }
  }, [_c('div', {
    staticClass: "modal-dialog"
  }, [_c('div', {
    staticClass: "modal-content"
  }, [_vm._m(1), _vm._v(" "), _c('div', {
    staticClass: "modal-body"
  }, [(_vm.form.errors.length > 0) ? _c('div', {
    staticClass: "alert alert-danger"
  }, [_vm._m(2), _vm._v(" "), _c('br'), _vm._v(" "), _c('ul', _vm._l((_vm.form.errors), function(error) {
    return _c('li', [_vm._v("\n                                " + _vm._s(error) + "\n                            ")])
  }))]) : _vm._e(), _vm._v(" "), _c('form', {
    staticClass: "form-horizontal",
    attrs: {
      "role": "form"
    },
    on: {
      "submit": function($event) {
        $event.preventDefault();
        _vm.store($event)
      }
    }
  }, [_c('div', {
    staticClass: "form-group"
  }, [_c('label', {
    staticClass: "col-md-4 control-label"
  }, [_vm._v("Name")]), _vm._v(" "), _c('div', {
    staticClass: "col-md-6"
  }, [_c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.form.name),
      expression: "form.name"
    }],
    staticClass: "form-control",
    attrs: {
      "id": "create-token-name",
      "type": "text",
      "name": "name"
    },
    domProps: {
      "value": _vm._s(_vm.form.name)
    },
    on: {
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.form.name = $event.target.value
      }
    }
  })])]), _vm._v(" "), (_vm.scopes.length > 0) ? _c('div', {
    staticClass: "form-group"
  }, [_c('label', {
    staticClass: "col-md-4 control-label"
  }, [_vm._v("Scopes")]), _vm._v(" "), _c('div', {
    staticClass: "col-md-6"
  }, _vm._l((_vm.scopes), function(scope) {
    return _c('div', [_c('div', {
      staticClass: "checkbox"
    }, [_c('label', [_c('input', {
      attrs: {
        "type": "checkbox"
      },
      domProps: {
        "checked": _vm.scopeIsAssigned(scope.id)
      },
      on: {
        "click": function($event) {
          _vm.toggleScope(scope.id)
        }
      }
    }), _vm._v("\n\n                                                " + _vm._s(scope.id) + "\n                                        ")])])])
  }))]) : _vm._e()])]), _vm._v(" "), _c('div', {
    staticClass: "modal-footer"
  }, [_c('button', {
    staticClass: "btn btn-default",
    attrs: {
      "type": "button",
      "data-dismiss": "modal"
    }
  }, [_vm._v("Close")]), _vm._v(" "), _c('button', {
    staticClass: "btn btn-primary",
    attrs: {
      "type": "button"
    },
    on: {
      "click": _vm.store
    }
  }, [_vm._v("\n                        Create\n                    ")])])])])]), _vm._v(" "), _c('div', {
    staticClass: "modal fade",
    attrs: {
      "id": "modal-access-token",
      "tabindex": "-1",
      "role": "dialog"
    }
  }, [_c('div', {
    staticClass: "modal-dialog"
  }, [_c('div', {
    staticClass: "modal-content"
  }, [_vm._m(3), _vm._v(" "), _c('div', {
    staticClass: "modal-body"
  }, [_c('p', [_vm._v("\n                        Here is your new personal access token. This is the only time it will be shown so don't lose it!\n                        You may now use this token to make API requests.\n                    ")]), _vm._v(" "), _c('pre', [_c('code', [_vm._v(_vm._s(_vm.accessToken))])])]), _vm._v(" "), _vm._m(4)])])])])
},staticRenderFns: [function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('thead', [_c('tr', [_c('th', [_vm._v("Name")]), _vm._v(" "), _c('th')])])
},function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "modal-header"
  }, [_c('button', {
    staticClass: "close",
    attrs: {
      "type": "button ",
      "data-dismiss": "modal",
      "aria-hidden": "true"
    }
  }, [_vm._v("×")]), _vm._v(" "), _c('h4', {
    staticClass: "modal-title"
  }, [_vm._v("\n                        Create Token\n                    ")])])
},function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('p', [_c('strong', [_vm._v("Whoops!")]), _vm._v(" Something went wrong!")])
},function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "modal-header"
  }, [_c('button', {
    staticClass: "close",
    attrs: {
      "type": "button ",
      "data-dismiss": "modal",
      "aria-hidden": "true"
    }
  }, [_vm._v("×")]), _vm._v(" "), _c('h4', {
    staticClass: "modal-title"
  }, [_vm._v("\n                        Personal Access Token\n                    ")])])
},function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "modal-footer"
  }, [_c('button', {
    staticClass: "btn btn-default",
    attrs: {
      "type": "button",
      "data-dismiss": "modal"
    }
  }, [_vm._v("Close")])])
}]}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-4f7474f0", module.exports)
  }
}

/***/ }),
/* 73 */
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    attrs: {
      "id": "content"
    }
  }, [(_vm.col_iek_eng_dan_mus) ? _c('div', {
    staticStyle: {
      "margin-left": "20px"
    }
  }, [_c('h3', {
    staticClass: "title ml20",
    staticStyle: {
      "margin-left": "-10px"
    }
  }, [_vm._v("Επιλογή Ειδικοτήτων Σπουδών")]), _vm._v(" "), _c('div', {
    staticClass: "row margin-top-30"
  }, [(_vm.studies.length) ? _c('div', [(_vm.studies.length > 1) ? _c('div', [_c('select', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.selectedLevel),
      expression: "selectedLevel"
    }],
    staticClass: "sel1",
    staticStyle: {
      "margin": "10px",
      "width": "280px"
    },
    on: {
      "change": [function($event) {
        _vm.selectedLevel = Array.prototype.filter.call($event.target.options, function(o) {
          return o.selected
        }).map(function(o) {
          var val = "_value" in o ? o._value : o.value;
          return val
        })[0]
      }, function($event) {
        _vm.selectedSection = 0
      }]
    }
  }, _vm._l((_vm.studies), function(level, indexLevel) {
    return _c('option', {
      domProps: {
        "value": indexLevel
      }
    }, [_vm._v("\n                            " + _vm._s(level.name) + "\n                        ")])
  }))]) : _c('h3', [_vm._v(" " + _vm._s(_vm.studies[0].name) + " ")]), _vm._v(" "), _c('div', {
    staticStyle: {
      "clear": "both"
    }
  }), _vm._v(" "), (_vm.studies[_vm.selectedLevel].section) ? _c('span', [(_vm.studies[_vm.selectedLevel].section.length > 1) ? _c('span', [_c('select', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.selectedSection),
      expression: "selectedSection"
    }],
    staticClass: "sel2",
    staticStyle: {
      "margin": "10px"
    },
    on: {
      "change": function($event) {
        _vm.selectedSection = Array.prototype.filter.call($event.target.options, function(o) {
          return o.selected
        }).map(function(o) {
          var val = "_value" in o ? o._value : o.value;
          return val
        })[0]
      }
    }
  }, _vm._l((_vm.studies[_vm.selectedLevel].section), function(section, indexSection) {
    return _c('option', {
      domProps: {
        "value": indexSection
      }
    }, [_vm._v("\n                        " + _vm._s(section.name) + "\n                    ")])
  }))]) : _vm._e(), _vm._v(" "), (_vm.studies[_vm.selectedLevel].section.length > 0) ? _c('div', [(_vm.studies[_vm.selectedLevel].section[_vm.selectedSection].study) ? _c('div', {
    staticStyle: {
      "margin-top": "5px",
      "padding": "0"
    }
  }, _vm._l((_vm.studies[_vm.selectedLevel].section[_vm.selectedSection].study), function(study, indexStudy) {
    return _c('div', {
      class: [{
        'col-md-6 col-xxl-4 col-xxl-3': (_vm.studies[_vm.selectedLevel].section[_vm.selectedSection].study.length > 14)
      }],
      attrs: {
        "value": indexStudy
      }
    }, [_c('input', {
      directives: [{
        name: "model",
        rawName: "v-model",
        value: (_vm.checkedStudies),
        expression: "checkedStudies"
      }],
      attrs: {
        "id": "",
        "type": "checkbox"
      },
      domProps: {
        "checked": study.status,
        "value": study.id,
        "checked": Array.isArray(_vm.checkedStudies) ? _vm._i(_vm.checkedStudies, study.id) > -1 : (_vm.checkedStudies)
      },
      on: {
        "click": [function($event) {
          var $$a = _vm.checkedStudies,
            $$el = $event.target,
            $$c = $$el.checked ? (true) : (false);
          if (Array.isArray($$a)) {
            var $$v = study.id,
              $$i = _vm._i($$a, $$v);
            if ($$c) {
              $$i < 0 && (_vm.checkedStudies = $$a.concat($$v))
            } else {
              $$i > -1 && (_vm.checkedStudies = $$a.slice(0, $$i).concat($$a.slice($$i + 1)))
            }
          } else {
            _vm.checkedStudies = $$c
          }
        }, function($event) {
          _vm.IfCheck(indexStudy, study.status, study.id, _vm.studies[_vm.selectedLevel].id, _vm.studies[_vm.selectedLevel].section[_vm.selectedSection].id)
        }]
      }
    }), _c('label', {
      attrs: {
        "for": ""
      }
    }), _vm._v("\n                        " + _vm._s(study.name) + "\n                    ")])
  })) : _vm._e()]) : _vm._e()]) : _vm._e(), _vm._v(" "), _c('div', {
    staticClass: "clearfix",
    staticStyle: {
      "clear": "both"
    }
  }), _vm._v(" "), _c('hr', {
    staticStyle: {
      "height": "10px",
      "border": "0",
      "box-shadow": "0 10px 10px -10px #324c5a inset",
      "margin-top": "30px",
      "margin-left": "10px",
      "margin-right": "30px"
    }
  }), _vm._v(" "), (_vm.checkedStudies.length) ? _c('button', {
    staticClass: "btn btn-info",
    staticStyle: {
      "margin-top": "20px",
      "margin-left": "10px"
    },
    on: {
      "click": _vm.clearAllStudies
    }
  }, [_c('i', {
    staticClass: "fa fa-trash-o",
    staticStyle: {
      "margin-right": "10px"
    },
    attrs: {
      "aria-hidden": "true"
    }
  }), _vm._v("\n                    Διαγραφή Επιλογών\n                ")]) : _vm._e(), _vm._v(" "), _vm._l((_vm.studies), function(level, indexLevel) {
    return _c('div', [_c('div', {
      class: [{
        'col-md-6': (_vm.levels[_vm.studies[indexLevel].id] > 0)
      }]
    }, [(_vm.levels[_vm.studies[indexLevel].id] > 0) ? _c('h3', {
      staticClass: "title ml5",
      staticStyle: {
        "clear": "both",
        "padding-top": "25px"
      }
    }, [_vm._v("\n                            " + _vm._s(level.name) + " ")]) : _vm._e(), _vm._v(" "), _vm._l((level.section), function(section, indexSection) {
      return _c('div', [_c('div', [(_vm.sections[_vm.studies[indexLevel].id][_vm.studies[indexLevel].section[indexSection].id] > 0) ? _c('h4', {
        staticClass: "title ml5",
        staticStyle: {
          "clear": "both",
          "margin-top": "10px"
        }
      }, [_vm._v("\n                                    " + _vm._s(section.name))]) : _vm._e(), _vm._v(" "), _vm._l((section.study), function(study, indexStudy) {
        return _c('div', {}, [(_vm.studiesStatus[indexLevel][indexSection][indexStudy]) ? _c('span', [_vm._v("\n                                    " + _vm._s(study.name) + "\n                                    "), _c('span', [_c('i', {
          staticClass: "fa fa-trash btn-del",
          staticStyle: {
            "margin-left": "10px"
          },
          on: {
            "click": function($event) {
              _vm.deleteStudy(indexLevel, indexSection, indexStudy, study.id, _vm.studies[indexLevel].id, _vm.studies[indexLevel].section[indexSection].id)
            }
          }
        })])]) : _vm._e()])
      })], 2)])
    })], 2)])
  })], 2) : _vm._e()])]) : _vm._e(), _vm._v(" "), (!_vm.col_iek_eng_dan_mus) ? _c('div', [_c('h3', {
    staticClass: "title ml20",
    staticStyle: {
      "margin-left": "-10px"
    }
  }, [_vm._v("Επιλογή Επιπέδων Σπουδών")]), _vm._v(" "), _c('div', _vm._l((_vm.all_studies), function(level, indexLevel) {
    return _c('div', _vm._l((_vm.all_studies[indexLevel].section), function(section, indexSection) {
      return _c('div', _vm._l((_vm.all_studies[indexLevel].section[indexSection].study), function(study, indexStudy) {
        return _c('div', [_c('input', {
          directives: [{
            name: "model",
            rawName: "v-model",
            value: (_vm.checkedStudies),
            expression: "checkedStudies"
          }],
          attrs: {
            "type": "checkbox"
          },
          domProps: {
            "checked": study.status,
            "value": study.id,
            "checked": Array.isArray(_vm.checkedStudies) ? _vm._i(_vm.checkedStudies, study.id) > -1 : (_vm.checkedStudies)
          },
          on: {
            "click": [function($event) {
              var $$a = _vm.checkedStudies,
                $$el = $event.target,
                $$c = $$el.checked ? (true) : (false);
              if (Array.isArray($$a)) {
                var $$v = study.id,
                  $$i = _vm._i($$a, $$v);
                if ($$c) {
                  $$i < 0 && (_vm.checkedStudies = $$a.concat($$v))
                } else {
                  $$i > -1 && (_vm.checkedStudies = $$a.slice(0, $$i).concat($$a.slice($$i + 1)))
                }
              } else {
                _vm.checkedStudies = $$c
              }
            }, function($event) {
              _vm.IfCheck(indexStudy, study.status, study.id, _vm.studies[indexLevel].id, _vm.studies[indexLevel].section[indexSection].id, indexLevel, indexStudy)
            }]
          }
        }), _c('label', {
          attrs: {
            "for": ""
          }
        }), _vm._v("\n                        " + _vm._s(study.name) + "\n                        ")])
      }))
    }))
  }))]) : _vm._e()])
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-5e696f0d", module.exports)
  }
}

/***/ }),
/* 74 */
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "row"
  }, [_c('div', {
    staticClass: "col-sm-12"
  }, [_c('div', {
    staticClass: "card-box"
  }, [_c('div', {
    staticClass: "row"
  }, [_c('div', {
    staticClass: "col-lg-12"
  }, [_vm._m(0), _vm._v(" "), _c('p', {
    staticClass: "text-muted font-13"
  }, [_vm._v("\n                       Όλα τα αιτήματα\n                    ")]), _vm._v(" "), _c('div', {
    staticClass: "p-20"
  }, [_c('div', {
    staticClass: "table-responsive"
  }, [_c('table', {
    staticClass: "table m-0"
  }, [_vm._m(1), _vm._v(" "), _c('tbody', _vm._l((_vm.notifications), function(notification) {
    return _c('tr', [(notification.type === 'App\\Notifications\\StudentConnectNotification') ? _c('td', [_vm._v("Μαθητής")]) : _vm._e(), _vm._v(" "), (notification.type === 'App\\Notifications\\TeacherConnectNotification') ? _c('td', [_vm._v("Καθηγητής")]) : _vm._e(), _vm._v(" "), _c('td', [_vm._v(_vm._s(notification.data['user_name']))]), _vm._v(" "), _vm._m(2, true)])
  }))])])])])])])])])
},staticRenderFns: [function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('h4', {
    staticClass: "m-t-0 header-title"
  }, [_c('b', [_vm._v("Ειδποιήσεις για Σύνδεση")])])
},function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('thead', [_c('tr', [_c('th', [_vm._v("Ρόλος")]), _vm._v(" "), _c('th', [_vm._v("Όνομα")]), _vm._v(" "), _c('th', [_vm._v("Επιλογή")])])])
},function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('td', [_c('button', {
    staticClass: "btn btn-success",
    attrs: {
      "type": "button"
    }
  }, [_vm._v("Αποδοχή")]), _vm._v(" "), _c('button', {
    staticClass: "btn btn-danger",
    attrs: {
      "type": "button"
    }
  }, [_vm._v("Απόρριψη")])])
}]}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-6e8e5c1e", module.exports)
  }
}

/***/ }),
/* 75 */
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "row"
  }, [_c('div', {
    staticClass: "input-group pull-left ",
    staticStyle: {
      "width": "210px",
      "margin": "10px 0 10px 10px",
      "border": "1px solid #d1d1d1",
      "border-radius": "5px"
    }
  }, [_vm._m(0), _vm._v(" "), _c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.searchStr),
      expression: "searchStr"
    }],
    staticClass: "form-control",
    attrs: {
      "type": "text",
      "placeholder": "Αναζήτηση"
    },
    domProps: {
      "value": _vm._s(_vm.searchStr)
    },
    on: {
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.searchStr = $event.target.value
      }
    }
  })]), _vm._v(" "), _c('button', {
    staticClass: "btn btn-info pull-right",
    staticStyle: {
      "margin": "11px 10px 10px 0",
      "height": "38px"
    },
    on: {
      "click": _vm.changeView
    }
  }, [_vm._v("Αλλαγή Προβολής")]), _vm._v(" "), _c('div', {
    staticClass: "clearfix"
  }), _vm._v(" "), (_vm.selection == true) ? _c('div', _vm._l((_vm.filteredStudies), function(student) {
    return ((student.role == 'student' || student.role == 'teacher')) ? _c('div', {
      staticClass: "col-xs-12 col-sm-6 col-xl-4 col-xxl-3"
    }, [_c('div', {
      staticClass: "card-box"
    }, [_c('div', {
      staticClass: "row"
    }, [_c('div', {
      staticClass: "contact-card"
    }, [_c('a', {
      staticClass: "pull-left",
      attrs: {
        "href": "#"
      }
    }, [_c('img', {
      staticClass: "img-circle",
      attrs: {
        "width": "80",
        "height": "80",
        "src": student.avatar,
        "alt": ""
      }
    })]), _vm._v(" "), _c('div', {
      staticClass: "member-info"
    }, [_c('h4', {
      staticClass: "m-t-0 m-b-5 header-title"
    }, [_c('b', {
      staticStyle: {
        "text-transform": "capitalize"
      }
    }, [_vm._v(" " + _vm._s(student.name))])]), _vm._v(" "), _c('p', {
      staticClass: "text-muted"
    }, [_vm._v("Φοιτητής")]), _vm._v(" "), _c('p', {
      staticClass: "text-dark"
    }, [_c('i', {
      staticClass: "md md-email"
    }), _vm._v(" "), _c('small', [_vm._v(_vm._s(student.email))])])]), _vm._v(" "), _vm._m(1, true)])])])]) : _vm._e()
  })) : _vm._e(), _vm._v(" "), _c('div', {
    staticClass: "clearfix"
  }), _vm._v(" "), _c('div', {
    staticClass: "table-responsive"
  }, [(_vm.selection == false) ? _c('table', {
    staticClass: "table table-striped table-bordered table-hover",
    staticStyle: {
      "background-color": "#fff"
    }
  }, [_c('thead', [_c('tr', [_c('th', {
    staticStyle: {
      "width": "30px"
    }
  }), _vm._v(" "), _c('th', [_c('a', {
    attrs: {
      "href": "#"
    },
    on: {
      "click": _vm.nameChangeSort
    }
  }, [_vm._v("\n                    Ονοματεπώνυμο\n                    "), (_vm.sortType == 'name' && !_vm.sortReverse) ? _c('span', {
    staticClass: "fa fa-sort-amount-asc"
  }) : _vm._e(), _vm._v(" "), (_vm.sortType == 'name' && _vm.sortReverse) ? _c('span', {
    staticClass: "fa fa-sort-amount-desc"
  }) : _vm._e()])]), _vm._v(" "), _c('th', [_c('a', {
    attrs: {
      "href": "#"
    },
    on: {
      "click": _vm.emailChangeSort
    }
  }, [_vm._v("\n                    e-mail\n                    "), (_vm.sortType == 'email' && !_vm.sortReverse) ? _c('span', {
    staticClass: "fa fa-sort-amount-asc"
  }) : _vm._e(), _vm._v(" "), (_vm.sortType == 'email' && _vm.sortReverse) ? _c('span', {
    staticClass: "fa fa-sort-amount-desc"
  }) : _vm._e()])])])]), _vm._v(" "), _c('tbody', _vm._l((_vm.filteredStudies), function(student) {
    return (student.role == 'student' || student.role == 'teacher') ? _c('tr', [_vm._m(2, true), _vm._v(" "), _c('td', {
      staticStyle: {
        "text-transform": "capitalize"
      }
    }, [_vm._v(_vm._s(student.name))]), _vm._v(" "), _c('td', [_vm._v(_vm._s(student.email))])]) : _vm._e()
  }))]) : _vm._e()])])
},staticRenderFns: [function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('span', {
    staticClass: "input-group-addon"
  }, [_c('i', {
    staticClass: "fa fa-search"
  })])
},function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('ul', {
    staticClass: "social-links list-inline m-0"
  }, [_c('li', [_c('a', {
    staticClass: "tooltips",
    attrs: {
      "title": "",
      "data-placement": "top",
      "data-toggle": "tooltip",
      "href": "",
      "data-original-title": "Facebook"
    }
  }, [_c('i', {
    staticClass: "fa fa-facebook"
  })])]), _vm._v(" "), _c('li', [_c('a', {
    staticClass: "tooltips",
    attrs: {
      "title": "",
      "data-placement": "top",
      "data-toggle": "tooltip",
      "href": "",
      "data-original-title": "Twitter"
    }
  }, [_c('i', {
    staticClass: "fa fa-twitter"
  })])]), _vm._v(" "), _c('li', [_c('a', {
    staticClass: "tooltips",
    attrs: {
      "title": "",
      "data-placement": "top",
      "data-toggle": "tooltip",
      "href": "",
      "data-original-title": "LinkedIn"
    }
  }, [_c('i', {
    staticClass: "fa fa-linkedin"
  })])]), _vm._v(" "), _c('li', [_c('a', {
    staticClass: "tooltips",
    attrs: {
      "title": "",
      "data-placement": "top",
      "data-toggle": "tooltip",
      "href": "",
      "data-original-title": "Skype"
    }
  }, [_c('i', {
    staticClass: "fa fa-skype"
  })])]), _vm._v(" "), _c('li', [_c('a', {
    staticClass: "tooltips",
    attrs: {
      "title": "",
      "data-placement": "top",
      "data-toggle": "tooltip",
      "href": "",
      "data-original-title": "Message"
    }
  }, [_c('i', {
    staticClass: "fa fa-envelope-o"
  })])])])
},function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('td', [_c('i', {
    staticClass: "fa fa-user",
    staticStyle: {
      "font-size": "140%"
    },
    attrs: {
      "aria-hidden": "true"
    }
  })])
}]}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-72f4b91f", module.exports)
  }
}

/***/ }),
/* 76 */
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', [_c('div', {
    staticClass: "panel panel-default"
  }, [_c('div', {
    staticClass: "panel-heading"
  }, [_c('div', {
    staticStyle: {
      "display": "flex",
      "justify-content": "space-between",
      "align-items": "center"
    }
  }, [_c('span', [_vm._v("\n                    OAuth Clients\n                ")]), _vm._v(" "), _c('a', {
    staticClass: "action-link",
    on: {
      "click": _vm.showCreateClientForm
    }
  }, [_vm._v("\n                    Create New Client\n                ")])])]), _vm._v(" "), _c('div', {
    staticClass: "panel-body"
  }, [(_vm.clients.length === 0) ? _c('p', {
    staticClass: "m-b-none"
  }, [_vm._v("\n                You have not created any OAuth clients.\n            ")]) : _vm._e(), _vm._v(" "), (_vm.clients.length > 0) ? _c('table', {
    staticClass: "table table-borderless m-b-none"
  }, [_vm._m(0), _vm._v(" "), _c('tbody', _vm._l((_vm.clients), function(client) {
    return _c('tr', [_c('td', {
      staticStyle: {
        "vertical-align": "middle"
      }
    }, [_vm._v("\n                            " + _vm._s(client.id) + "\n                        ")]), _vm._v(" "), _c('td', {
      staticStyle: {
        "vertical-align": "middle"
      }
    }, [_vm._v("\n                            " + _vm._s(client.name) + "\n                        ")]), _vm._v(" "), _c('td', {
      staticStyle: {
        "vertical-align": "middle"
      }
    }, [_c('code', [_vm._v(_vm._s(client.secret))])]), _vm._v(" "), _c('td', {
      staticStyle: {
        "vertical-align": "middle"
      }
    }, [_c('a', {
      staticClass: "action-link",
      on: {
        "click": function($event) {
          _vm.edit(client)
        }
      }
    }, [_vm._v("\n                                Edit\n                            ")])]), _vm._v(" "), _c('td', {
      staticStyle: {
        "vertical-align": "middle"
      }
    }, [_c('a', {
      staticClass: "action-link text-danger",
      on: {
        "click": function($event) {
          _vm.destroy(client)
        }
      }
    }, [_vm._v("\n                                Delete\n                            ")])])])
  }))]) : _vm._e()])]), _vm._v(" "), _c('div', {
    staticClass: "modal fade",
    attrs: {
      "id": "modal-create-client",
      "tabindex": "-1",
      "role": "dialog"
    }
  }, [_c('div', {
    staticClass: "modal-dialog"
  }, [_c('div', {
    staticClass: "modal-content"
  }, [_vm._m(1), _vm._v(" "), _c('div', {
    staticClass: "modal-body"
  }, [(_vm.createForm.errors.length > 0) ? _c('div', {
    staticClass: "alert alert-danger"
  }, [_vm._m(2), _vm._v(" "), _c('br'), _vm._v(" "), _c('ul', _vm._l((_vm.createForm.errors), function(error) {
    return _c('li', [_vm._v("\n                                " + _vm._s(error) + "\n                            ")])
  }))]) : _vm._e(), _vm._v(" "), _c('form', {
    staticClass: "form-horizontal",
    attrs: {
      "role": "form"
    }
  }, [_c('div', {
    staticClass: "form-group"
  }, [_c('label', {
    staticClass: "col-md-3 control-label"
  }, [_vm._v("Name")]), _vm._v(" "), _c('div', {
    staticClass: "col-md-7"
  }, [_c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.createForm.name),
      expression: "createForm.name"
    }],
    staticClass: "form-control",
    attrs: {
      "id": "create-client-name",
      "type": "text"
    },
    domProps: {
      "value": _vm._s(_vm.createForm.name)
    },
    on: {
      "keyup": function($event) {
        if (_vm._k($event.keyCode, "enter", 13)) { return; }
        _vm.store($event)
      },
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.createForm.name = $event.target.value
      }
    }
  }), _vm._v(" "), _c('span', {
    staticClass: "help-block"
  }, [_vm._v("\n                                    Something your users will recognize and trust.\n                                ")])])]), _vm._v(" "), _c('div', {
    staticClass: "form-group"
  }, [_c('label', {
    staticClass: "col-md-3 control-label"
  }, [_vm._v("Redirect URL")]), _vm._v(" "), _c('div', {
    staticClass: "col-md-7"
  }, [_c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.createForm.redirect),
      expression: "createForm.redirect"
    }],
    staticClass: "form-control",
    attrs: {
      "type": "text",
      "name": "redirect"
    },
    domProps: {
      "value": _vm._s(_vm.createForm.redirect)
    },
    on: {
      "keyup": function($event) {
        if (_vm._k($event.keyCode, "enter", 13)) { return; }
        _vm.store($event)
      },
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.createForm.redirect = $event.target.value
      }
    }
  }), _vm._v(" "), _c('span', {
    staticClass: "help-block"
  }, [_vm._v("\n                                    Your application's authorization callback URL.\n                                ")])])])])]), _vm._v(" "), _c('div', {
    staticClass: "modal-footer"
  }, [_c('button', {
    staticClass: "btn btn-default",
    attrs: {
      "type": "button",
      "data-dismiss": "modal"
    }
  }, [_vm._v("Close")]), _vm._v(" "), _c('button', {
    staticClass: "btn btn-primary",
    attrs: {
      "type": "button"
    },
    on: {
      "click": _vm.store
    }
  }, [_vm._v("\n                        Create\n                    ")])])])])]), _vm._v(" "), _c('div', {
    staticClass: "modal fade",
    attrs: {
      "id": "modal-edit-client",
      "tabindex": "-1",
      "role": "dialog"
    }
  }, [_c('div', {
    staticClass: "modal-dialog"
  }, [_c('div', {
    staticClass: "modal-content"
  }, [_vm._m(3), _vm._v(" "), _c('div', {
    staticClass: "modal-body"
  }, [(_vm.editForm.errors.length > 0) ? _c('div', {
    staticClass: "alert alert-danger"
  }, [_vm._m(4), _vm._v(" "), _c('br'), _vm._v(" "), _c('ul', _vm._l((_vm.editForm.errors), function(error) {
    return _c('li', [_vm._v("\n                                " + _vm._s(error) + "\n                            ")])
  }))]) : _vm._e(), _vm._v(" "), _c('form', {
    staticClass: "form-horizontal",
    attrs: {
      "role": "form"
    }
  }, [_c('div', {
    staticClass: "form-group"
  }, [_c('label', {
    staticClass: "col-md-3 control-label"
  }, [_vm._v("Name")]), _vm._v(" "), _c('div', {
    staticClass: "col-md-7"
  }, [_c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.editForm.name),
      expression: "editForm.name"
    }],
    staticClass: "form-control",
    attrs: {
      "id": "edit-client-name",
      "type": "text"
    },
    domProps: {
      "value": _vm._s(_vm.editForm.name)
    },
    on: {
      "keyup": function($event) {
        if (_vm._k($event.keyCode, "enter", 13)) { return; }
        _vm.update($event)
      },
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.editForm.name = $event.target.value
      }
    }
  }), _vm._v(" "), _c('span', {
    staticClass: "help-block"
  }, [_vm._v("\n                                    Something your users will recognize and trust.\n                                ")])])]), _vm._v(" "), _c('div', {
    staticClass: "form-group"
  }, [_c('label', {
    staticClass: "col-md-3 control-label"
  }, [_vm._v("Redirect URL")]), _vm._v(" "), _c('div', {
    staticClass: "col-md-7"
  }, [_c('input', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.editForm.redirect),
      expression: "editForm.redirect"
    }],
    staticClass: "form-control",
    attrs: {
      "type": "text",
      "name": "redirect"
    },
    domProps: {
      "value": _vm._s(_vm.editForm.redirect)
    },
    on: {
      "keyup": function($event) {
        if (_vm._k($event.keyCode, "enter", 13)) { return; }
        _vm.update($event)
      },
      "input": function($event) {
        if ($event.target.composing) { return; }
        _vm.editForm.redirect = $event.target.value
      }
    }
  }), _vm._v(" "), _c('span', {
    staticClass: "help-block"
  }, [_vm._v("\n                                    Your application's authorization callback URL.\n                                ")])])])])]), _vm._v(" "), _c('div', {
    staticClass: "modal-footer"
  }, [_c('button', {
    staticClass: "btn btn-default",
    attrs: {
      "type": "button",
      "data-dismiss": "modal"
    }
  }, [_vm._v("Close")]), _vm._v(" "), _c('button', {
    staticClass: "btn btn-primary",
    attrs: {
      "type": "button"
    },
    on: {
      "click": _vm.update
    }
  }, [_vm._v("\n                        Save Changes\n                    ")])])])])])])
},staticRenderFns: [function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('thead', [_c('tr', [_c('th', [_vm._v("Client ID")]), _vm._v(" "), _c('th', [_vm._v("Name")]), _vm._v(" "), _c('th', [_vm._v("Secret")]), _vm._v(" "), _c('th'), _vm._v(" "), _c('th')])])
},function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "modal-header"
  }, [_c('button', {
    staticClass: "close",
    attrs: {
      "type": "button ",
      "data-dismiss": "modal",
      "aria-hidden": "true"
    }
  }, [_vm._v("×")]), _vm._v(" "), _c('h4', {
    staticClass: "modal-title"
  }, [_vm._v("\n                        Create Client\n                    ")])])
},function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('p', [_c('strong', [_vm._v("Whoops!")]), _vm._v(" Something went wrong!")])
},function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "modal-header"
  }, [_c('button', {
    staticClass: "close",
    attrs: {
      "type": "button ",
      "data-dismiss": "modal",
      "aria-hidden": "true"
    }
  }, [_vm._v("×")]), _vm._v(" "), _c('h4', {
    staticClass: "modal-title"
  }, [_vm._v("\n                        Edit Client\n                    ")])])
},function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('p', [_c('strong', [_vm._v("Whoops!")]), _vm._v(" Something went wrong!")])
}]}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-7cf2cf86", module.exports)
  }
}

/***/ }),
/* 77 */
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "row"
  }, [_c('div', {
    staticClass: "col-sm-12"
  }, [_c('div', {
    staticClass: "card-box"
  }, [_c('div', {
    staticClass: "row"
  }, [_c('div', {
    staticClass: "col-lg-12"
  }, [_vm._m(0), _vm._v(" "), _c('p', {
    staticClass: "text-muted font-13"
  }, [_vm._v("\n                       Bla Bla\n                    ")]), _vm._v(" "), _c('div', {
    staticClass: "p-20"
  }, [_c('div', {
    staticClass: "table-responsive"
  }, [_c('table', {
    staticClass: "table m-0"
  }, [_vm._m(1), _vm._v(" "), _c('tbody', _vm._l((_vm.users), function(user) {
    return _c('tr', [_c('td', [_vm._v(_vm._s(user.id))]), _vm._v(" "), _c('td', [_vm._v(_vm._s(user.name))]), _vm._v(" "), _c('td', [_vm._v(_vm._s(user.email))]), _vm._v(" "), _c('td', [_vm._v(_vm._s(user.role))]), _vm._v(" "), _c('td', [_vm._v(_vm._s(user.created_at))])])
  }))])])])])])])])])
},staticRenderFns: [function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('h4', {
    staticClass: "m-t-0 header-title"
  }, [_c('b', [_vm._v("Users Table")])])
},function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('thead', [_c('tr', [_c('th', [_vm._v("ID")]), _vm._v(" "), _c('th', [_vm._v("Name")]), _vm._v(" "), _c('th', [_vm._v("Email")]), _vm._v(" "), _c('th', [_vm._v("Role")]), _vm._v(" "), _c('th', [_vm._v("Created At")])])])
}]}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-e2b98b84", module.exports)
  }
}

/***/ }),
/* 78 */
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(46);
if(typeof content === 'string') content = [[module.i, content, '']];
// add the styles to the DOM
var update = __webpack_require__(3)(content, {});
if(content.locals) module.exports = content.locals;
// Hot Module Replacement
if(false) {
	// When the styles change, update the <style> tags
	if(!content.locals) {
		module.hot.accept("!!./../../../../../node_modules/css-loader/index.js!./../../../../../node_modules/vue-loader/lib/style-rewriter.js?id=data-v-2bfae65d!./../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./Scholarships-Create.vue", function() {
			var newContent = require("!!./../../../../../node_modules/css-loader/index.js!./../../../../../node_modules/vue-loader/lib/style-rewriter.js?id=data-v-2bfae65d!./../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./Scholarships-Create.vue");
			if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
			update(newContent);
		});
	}
	// When the module is disposed, remove the <style> tags
	module.hot.dispose(function() { update(); });
}

/***/ }),
/* 79 */
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(47);
if(typeof content === 'string') content = [[module.i, content, '']];
// add the styles to the DOM
var update = __webpack_require__(3)(content, {});
if(content.locals) module.exports = content.locals;
// Hot Module Replacement
if(false) {
	// When the styles change, update the <style> tags
	if(!content.locals) {
		module.hot.accept("!!./../../../../../node_modules/css-loader/index.js!./../../../../../node_modules/vue-loader/lib/style-rewriter.js?id=data-v-4558c92a&scoped=true!./../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./AuthorizedClients.vue", function() {
			var newContent = require("!!./../../../../../node_modules/css-loader/index.js!./../../../../../node_modules/vue-loader/lib/style-rewriter.js?id=data-v-4558c92a&scoped=true!./../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./AuthorizedClients.vue");
			if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
			update(newContent);
		});
	}
	// When the module is disposed, remove the <style> tags
	module.hot.dispose(function() { update(); });
}

/***/ }),
/* 80 */
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(48);
if(typeof content === 'string') content = [[module.i, content, '']];
// add the styles to the DOM
var update = __webpack_require__(3)(content, {});
if(content.locals) module.exports = content.locals;
// Hot Module Replacement
if(false) {
	// When the styles change, update the <style> tags
	if(!content.locals) {
		module.hot.accept("!!./../../../../../node_modules/css-loader/index.js!./../../../../../node_modules/vue-loader/lib/style-rewriter.js?id=data-v-4f7474f0&scoped=true!./../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./PersonalAccessTokens.vue", function() {
			var newContent = require("!!./../../../../../node_modules/css-loader/index.js!./../../../../../node_modules/vue-loader/lib/style-rewriter.js?id=data-v-4f7474f0&scoped=true!./../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./PersonalAccessTokens.vue");
			if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
			update(newContent);
		});
	}
	// When the module is disposed, remove the <style> tags
	module.hot.dispose(function() { update(); });
}

/***/ }),
/* 81 */
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(49);
if(typeof content === 'string') content = [[module.i, content, '']];
// add the styles to the DOM
var update = __webpack_require__(3)(content, {});
if(content.locals) module.exports = content.locals;
// Hot Module Replacement
if(false) {
	// When the styles change, update the <style> tags
	if(!content.locals) {
		module.hot.accept("!!./../../../../../node_modules/css-loader/index.js!./../../../../../node_modules/vue-loader/lib/style-rewriter.js?id=data-v-5e696f0d!./../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./Studies-Select.vue", function() {
			var newContent = require("!!./../../../../../node_modules/css-loader/index.js!./../../../../../node_modules/vue-loader/lib/style-rewriter.js?id=data-v-5e696f0d!./../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./Studies-Select.vue");
			if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
			update(newContent);
		});
	}
	// When the module is disposed, remove the <style> tags
	module.hot.dispose(function() { update(); });
}

/***/ }),
/* 82 */
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(50);
if(typeof content === 'string') content = [[module.i, content, '']];
// add the styles to the DOM
var update = __webpack_require__(3)(content, {});
if(content.locals) module.exports = content.locals;
// Hot Module Replacement
if(false) {
	// When the styles change, update the <style> tags
	if(!content.locals) {
		module.hot.accept("!!./../../../../../node_modules/css-loader/index.js!./../../../../../node_modules/vue-loader/lib/style-rewriter.js?id=data-v-72f4b91f!./../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./Students-View.vue", function() {
			var newContent = require("!!./../../../../../node_modules/css-loader/index.js!./../../../../../node_modules/vue-loader/lib/style-rewriter.js?id=data-v-72f4b91f!./../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./Students-View.vue");
			if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
			update(newContent);
		});
	}
	// When the module is disposed, remove the <style> tags
	module.hot.dispose(function() { update(); });
}

/***/ }),
/* 83 */
/***/ (function(module, exports, __webpack_require__) {

// style-loader: Adds some css to the DOM by adding a <style> tag

// load the styles
var content = __webpack_require__(51);
if(typeof content === 'string') content = [[module.i, content, '']];
// add the styles to the DOM
var update = __webpack_require__(3)(content, {});
if(content.locals) module.exports = content.locals;
// Hot Module Replacement
if(false) {
	// When the styles change, update the <style> tags
	if(!content.locals) {
		module.hot.accept("!!./../../../../../node_modules/css-loader/index.js!./../../../../../node_modules/vue-loader/lib/style-rewriter.js?id=data-v-7cf2cf86&scoped=true!./../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./Clients.vue", function() {
			var newContent = require("!!./../../../../../node_modules/css-loader/index.js!./../../../../../node_modules/vue-loader/lib/style-rewriter.js?id=data-v-7cf2cf86&scoped=true!./../../../../../node_modules/vue-loader/lib/selector.js?type=styles&index=0!./Clients.vue");
			if(typeof newContent === 'string') newContent = [[module.id, newContent, '']];
			update(newContent);
		});
	}
	// When the module is disposed, remove the <style> tags
	module.hot.dispose(function() { update(); });
}

/***/ }),
/* 84 */
/***/ (function(module, exports, __webpack_require__) {

!function(e,t){ true?module.exports=t():"function"==typeof define&&define.amd?define([],t):"object"==typeof exports?exports.VueTinymce=t():e.VueTinymce=t()}(this,function(){return function(e){function t(r){if(n[r])return n[r].exports;var i=n[r]={i:r,l:!1,exports:{}};return e[r].call(i.exports,i,i.exports,t),i.l=!0,i.exports}var n={};return t.m=e,t.c=n,t.i=function(e){return e},t.d=function(e,n,r){t.o(e,n)||Object.defineProperty(e,n,{configurable:!1,enumerable:!0,get:r})},t.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(n,"a",n),n},t.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},t.p="/dist/",t(t.s=5)}([function(e,t,n){var r,i;r=n(1);var o=n(2);i=r=r||{},"object"!=typeof r.default&&"function"!=typeof r.default||(i=r=r.default),"function"==typeof i&&(i=i.options),i.render=o.render,i.staticRenderFns=o.staticRenderFns,e.exports=r},function(e,t,n){"use strict";function r(e){return e&&e.__esModule?e:{default:e}}Object.defineProperty(t,"__esModule",{value:!0});var i="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},o=n(3),a=r(o);t.default={name:"tinymce",props:{id:{type:String,required:!0},options:Object,content:{type:String,default:""},value:String},watch:{content:function(){tinymce.get(this.id).setContent(this.content)}},mounted:function(){var e=this,t={},n=new Function,r=function(t){t.on("NodeChange Change KeyUp",function(t){e.$emit("input",tinymce.get(e.id).getContent()),e.$emit("change",tinymce.get(e.id),tinymce.get(e.id).getContent())}),t.on("init",function(t){void 0!=e.content&&tinymce.get(e.id).setContent(e.content),e.$emit("input",e.content)})};n=function(e){return r(e)},"object"==i(this.options)?(t=Object.assign({},this.options),this.options.hasOwnProperty("selector")||(t.selector="#"+this.id),"function"==typeof this.options.setup&&(n=function(t){r(t),e.options.setup(t)})):t.selector="#"+this.id,t.setup=function(e){return n(e)},a.default.nextTick(function(){return tinymce.init(t)})},beforeDestroy:function(){tinymce.execCommand("mceRemoveEditor",!1,this.id)}}},function(e,t){e.exports={render:function(){var e=this;return e._c("textarea",{attrs:{id:e.id}})},staticRenderFns:[]}},function(e,t,n){(function(t){/*!
=======
if("undefined"==typeof t)throw new Error("Bootstrap's JavaScript requires jQuery");+function(t){"use strict";var e=t.fn.jquery.split(" ")[0].split(".");if(e[0]<2&&e[1]<9||1==e[0]&&9==e[1]&&e[2]<1||e[0]>3)throw new Error("Bootstrap's JavaScript requires jQuery version 1.9.1 or higher, but lower than version 4")}(t),+function(t){"use strict";function e(){var t=document.createElement("bootstrap"),e={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd otransitionend",transition:"transitionend"};for(var n in e)if(void 0!==t.style[n])return{end:e[n]};return!1}t.fn.emulateTransitionEnd=function(e){var n=!1,i=this;t(this).one("bsTransitionEnd",function(){n=!0});var r=function(){n||t(i).trigger(t.support.transition.end)};return setTimeout(r,e),this},t(function(){t.support.transition=e(),t.support.transition&&(t.event.special.bsTransitionEnd={bindType:t.support.transition.end,delegateType:t.support.transition.end,handle:function(e){if(t(e.target).is(this))return e.handleObj.handler.apply(this,arguments)}})})}(t),+function(t){"use strict";function e(e){return this.each(function(){var n=t(this),r=n.data("bs.alert");r||n.data("bs.alert",r=new i(this)),"string"==typeof e&&r[e].call(n)})}var n='[data-dismiss="alert"]',i=function(e){t(e).on("click",n,this.close)};i.VERSION="3.3.7",i.TRANSITION_DURATION=150,i.prototype.close=function(e){function n(){a.detach().trigger("closed.bs.alert").remove()}var r=t(this),o=r.attr("data-target");o||(o=r.attr("href"),o=o&&o.replace(/.*(?=#[^\s]*$)/,""));var a=t("#"===o?[]:o);e&&e.preventDefault(),a.length||(a=r.closest(".alert")),a.trigger(e=t.Event("close.bs.alert")),e.isDefaultPrevented()||(a.removeClass("in"),t.support.transition&&a.hasClass("fade")?a.one("bsTransitionEnd",n).emulateTransitionEnd(i.TRANSITION_DURATION):n())};var r=t.fn.alert;t.fn.alert=e,t.fn.alert.Constructor=i,t.fn.alert.noConflict=function(){return t.fn.alert=r,this},t(document).on("click.bs.alert.data-api",n,i.prototype.close)}(t),+function(t){"use strict";function e(e){return this.each(function(){var i=t(this),r=i.data("bs.button"),o="object"==typeof e&&e;r||i.data("bs.button",r=new n(this,o)),"toggle"==e?r.toggle():e&&r.setState(e)})}var n=function(e,i){this.$element=t(e),this.options=t.extend({},n.DEFAULTS,i),this.isLoading=!1};n.VERSION="3.3.7",n.DEFAULTS={loadingText:"loading..."},n.prototype.setState=function(e){var n="disabled",i=this.$element,r=i.is("input")?"val":"html",o=i.data();e+="Text",null==o.resetText&&i.data("resetText",i[r]()),setTimeout(t.proxy(function(){i[r](null==o[e]?this.options[e]:o[e]),"loadingText"==e?(this.isLoading=!0,i.addClass(n).attr(n,n).prop(n,!0)):this.isLoading&&(this.isLoading=!1,i.removeClass(n).removeAttr(n).prop(n,!1))},this),0)},n.prototype.toggle=function(){var t=!0,e=this.$element.closest('[data-toggle="buttons"]');if(e.length){var n=this.$element.find("input");"radio"==n.prop("type")?(n.prop("checked")&&(t=!1),e.find(".active").removeClass("active"),this.$element.addClass("active")):"checkbox"==n.prop("type")&&(n.prop("checked")!==this.$element.hasClass("active")&&(t=!1),this.$element.toggleClass("active")),n.prop("checked",this.$element.hasClass("active")),t&&n.trigger("change")}else this.$element.attr("aria-pressed",!this.$element.hasClass("active")),this.$element.toggleClass("active")};var i=t.fn.button;t.fn.button=e,t.fn.button.Constructor=n,t.fn.button.noConflict=function(){return t.fn.button=i,this},t(document).on("click.bs.button.data-api",'[data-toggle^="button"]',function(n){var i=t(n.target).closest(".btn");e.call(i,"toggle"),t(n.target).is('input[type="radio"], input[type="checkbox"]')||(n.preventDefault(),i.is("input,button")?i.trigger("focus"):i.find("input:visible,button:visible").first().trigger("focus"))}).on("focus.bs.button.data-api blur.bs.button.data-api",'[data-toggle^="button"]',function(e){t(e.target).closest(".btn").toggleClass("focus",/^focus(in)?$/.test(e.type))})}(t),+function(t){"use strict";function e(e){return this.each(function(){var i=t(this),r=i.data("bs.carousel"),o=t.extend({},n.DEFAULTS,i.data(),"object"==typeof e&&e),a="string"==typeof e?e:o.slide;r||i.data("bs.carousel",r=new n(this,o)),"number"==typeof e?r.to(e):a?r[a]():o.interval&&r.pause().cycle()})}var n=function(e,n){this.$element=t(e),this.$indicators=this.$element.find(".carousel-indicators"),this.options=n,this.paused=null,this.sliding=null,this.interval=null,this.$active=null,this.$items=null,this.options.keyboard&&this.$element.on("keydown.bs.carousel",t.proxy(this.keydown,this)),"hover"==this.options.pause&&!("ontouchstart"in document.documentElement)&&this.$element.on("mouseenter.bs.carousel",t.proxy(this.pause,this)).on("mouseleave.bs.carousel",t.proxy(this.cycle,this))};n.VERSION="3.3.7",n.TRANSITION_DURATION=600,n.DEFAULTS={interval:5e3,pause:"hover",wrap:!0,keyboard:!0},n.prototype.keydown=function(t){if(!/input|textarea/i.test(t.target.tagName)){switch(t.which){case 37:this.prev();break;case 39:this.next();break;default:return}t.preventDefault()}},n.prototype.cycle=function(e){return e||(this.paused=!1),this.interval&&clearInterval(this.interval),this.options.interval&&!this.paused&&(this.interval=setInterval(t.proxy(this.next,this),this.options.interval)),this},n.prototype.getItemIndex=function(t){return this.$items=t.parent().children(".item"),this.$items.index(t||this.$active)},n.prototype.getItemForDirection=function(t,e){var n=this.getItemIndex(e),i="prev"==t&&0===n||"next"==t&&n==this.$items.length-1;if(i&&!this.options.wrap)return e;var r="prev"==t?-1:1,o=(n+r)%this.$items.length;return this.$items.eq(o)},n.prototype.to=function(t){var e=this,n=this.getItemIndex(this.$active=this.$element.find(".item.active"));if(!(t>this.$items.length-1||t<0))return this.sliding?this.$element.one("slid.bs.carousel",function(){e.to(t)}):n==t?this.pause().cycle():this.slide(t>n?"next":"prev",this.$items.eq(t))},n.prototype.pause=function(e){return e||(this.paused=!0),this.$element.find(".next, .prev").length&&t.support.transition&&(this.$element.trigger(t.support.transition.end),this.cycle(!0)),this.interval=clearInterval(this.interval),this},n.prototype.next=function(){if(!this.sliding)return this.slide("next")},n.prototype.prev=function(){if(!this.sliding)return this.slide("prev")},n.prototype.slide=function(e,i){var r=this.$element.find(".item.active"),o=i||this.getItemForDirection(e,r),a=this.interval,s="next"==e?"left":"right",l=this;if(o.hasClass("active"))return this.sliding=!1;var c=o[0],u=t.Event("slide.bs.carousel",{relatedTarget:c,direction:s});if(this.$element.trigger(u),!u.isDefaultPrevented()){if(this.sliding=!0,a&&this.pause(),this.$indicators.length){this.$indicators.find(".active").removeClass("active");var d=t(this.$indicators.children()[this.getItemIndex(o)]);d&&d.addClass("active")}var f=t.Event("slid.bs.carousel",{relatedTarget:c,direction:s});return t.support.transition&&this.$element.hasClass("slide")?(o.addClass(e),o[0].offsetWidth,r.addClass(s),o.addClass(s),r.one("bsTransitionEnd",function(){o.removeClass([e,s].join(" ")).addClass("active"),r.removeClass(["active",s].join(" ")),l.sliding=!1,setTimeout(function(){l.$element.trigger(f)},0)}).emulateTransitionEnd(n.TRANSITION_DURATION)):(r.removeClass("active"),o.addClass("active"),this.sliding=!1,this.$element.trigger(f)),a&&this.cycle(),this}};var i=t.fn.carousel;t.fn.carousel=e,t.fn.carousel.Constructor=n,t.fn.carousel.noConflict=function(){return t.fn.carousel=i,this};var r=function(n){var i,r=t(this),o=t(r.attr("data-target")||(i=r.attr("href"))&&i.replace(/.*(?=#[^\s]+$)/,""));if(o.hasClass("carousel")){var a=t.extend({},o.data(),r.data()),s=r.attr("data-slide-to");s&&(a.interval=!1),e.call(o,a),s&&o.data("bs.carousel").to(s),n.preventDefault()}};t(document).on("click.bs.carousel.data-api","[data-slide]",r).on("click.bs.carousel.data-api","[data-slide-to]",r),t(window).on("load",function(){t('[data-ride="carousel"]').each(function(){var n=t(this);e.call(n,n.data())})})}(t),+function(t){"use strict";function e(e){var n,i=e.attr("data-target")||(n=e.attr("href"))&&n.replace(/.*(?=#[^\s]+$)/,"");return t(i)}function n(e){return this.each(function(){var n=t(this),r=n.data("bs.collapse"),o=t.extend({},i.DEFAULTS,n.data(),"object"==typeof e&&e);!r&&o.toggle&&/show|hide/.test(e)&&(o.toggle=!1),r||n.data("bs.collapse",r=new i(this,o)),"string"==typeof e&&r[e]()})}var i=function(e,n){this.$element=t(e),this.options=t.extend({},i.DEFAULTS,n),this.$trigger=t('[data-toggle="collapse"][href="#'+e.id+'"],[data-toggle="collapse"][data-target="#'+e.id+'"]'),this.transitioning=null,this.options.parent?this.$parent=this.getParent():this.addAriaAndCollapsedClass(this.$element,this.$trigger),this.options.toggle&&this.toggle()};i.VERSION="3.3.7",i.TRANSITION_DURATION=350,i.DEFAULTS={toggle:!0},i.prototype.dimension=function(){var t=this.$element.hasClass("width");return t?"width":"height"},i.prototype.show=function(){if(!this.transitioning&&!this.$element.hasClass("in")){var e,r=this.$parent&&this.$parent.children(".panel").children(".in, .collapsing");if(!(r&&r.length&&(e=r.data("bs.collapse"),e&&e.transitioning))){var o=t.Event("show.bs.collapse");if(this.$element.trigger(o),!o.isDefaultPrevented()){r&&r.length&&(n.call(r,"hide"),e||r.data("bs.collapse",null));var a=this.dimension();this.$element.removeClass("collapse").addClass("collapsing")[a](0).attr("aria-expanded",!0),this.$trigger.removeClass("collapsed").attr("aria-expanded",!0),this.transitioning=1;var s=function(){this.$element.removeClass("collapsing").addClass("collapse in")[a](""),this.transitioning=0,this.$element.trigger("shown.bs.collapse")};if(!t.support.transition)return s.call(this);var l=t.camelCase(["scroll",a].join("-"));this.$element.one("bsTransitionEnd",t.proxy(s,this)).emulateTransitionEnd(i.TRANSITION_DURATION)[a](this.$element[0][l])}}}},i.prototype.hide=function(){if(!this.transitioning&&this.$element.hasClass("in")){var e=t.Event("hide.bs.collapse");if(this.$element.trigger(e),!e.isDefaultPrevented()){var n=this.dimension();this.$element[n](this.$element[n]())[0].offsetHeight,this.$element.addClass("collapsing").removeClass("collapse in").attr("aria-expanded",!1),this.$trigger.addClass("collapsed").attr("aria-expanded",!1),this.transitioning=1;var r=function(){this.transitioning=0,this.$element.removeClass("collapsing").addClass("collapse").trigger("hidden.bs.collapse")};return t.support.transition?void this.$element[n](0).one("bsTransitionEnd",t.proxy(r,this)).emulateTransitionEnd(i.TRANSITION_DURATION):r.call(this)}}},i.prototype.toggle=function(){this[this.$element.hasClass("in")?"hide":"show"]()},i.prototype.getParent=function(){return t(this.options.parent).find('[data-toggle="collapse"][data-parent="'+this.options.parent+'"]').each(t.proxy(function(n,i){var r=t(i);this.addAriaAndCollapsedClass(e(r),r)},this)).end()},i.prototype.addAriaAndCollapsedClass=function(t,e){var n=t.hasClass("in");t.attr("aria-expanded",n),e.toggleClass("collapsed",!n).attr("aria-expanded",n)};var r=t.fn.collapse;t.fn.collapse=n,t.fn.collapse.Constructor=i,t.fn.collapse.noConflict=function(){return t.fn.collapse=r,this},t(document).on("click.bs.collapse.data-api",'[data-toggle="collapse"]',function(i){var r=t(this);r.attr("data-target")||i.preventDefault();var o=e(r),a=o.data("bs.collapse"),s=a?"toggle":r.data();n.call(o,s)})}(t),+function(t){"use strict";function e(e){var n=e.attr("data-target");n||(n=e.attr("href"),n=n&&/#[A-Za-z]/.test(n)&&n.replace(/.*(?=#[^\s]*$)/,""));var i=n&&t(n);return i&&i.length?i:e.parent()}function n(n){n&&3===n.which||(t(r).remove(),t(o).each(function(){var i=t(this),r=e(i),o={relatedTarget:this};r.hasClass("open")&&(n&&"click"==n.type&&/input|textarea/i.test(n.target.tagName)&&t.contains(r[0],n.target)||(r.trigger(n=t.Event("hide.bs.dropdown",o)),n.isDefaultPrevented()||(i.attr("aria-expanded","false"),r.removeClass("open").trigger(t.Event("hidden.bs.dropdown",o)))))}))}function i(e){return this.each(function(){var n=t(this),i=n.data("bs.dropdown");i||n.data("bs.dropdown",i=new a(this)),"string"==typeof e&&i[e].call(n)})}var r=".dropdown-backdrop",o='[data-toggle="dropdown"]',a=function(e){t(e).on("click.bs.dropdown",this.toggle)};a.VERSION="3.3.7",a.prototype.toggle=function(i){var r=t(this);if(!r.is(".disabled, :disabled")){var o=e(r),a=o.hasClass("open");if(n(),!a){"ontouchstart"in document.documentElement&&!o.closest(".navbar-nav").length&&t(document.createElement("div")).addClass("dropdown-backdrop").insertAfter(t(this)).on("click",n);var s={relatedTarget:this};if(o.trigger(i=t.Event("show.bs.dropdown",s)),i.isDefaultPrevented())return;r.trigger("focus").attr("aria-expanded","true"),o.toggleClass("open").trigger(t.Event("shown.bs.dropdown",s))}return!1}},a.prototype.keydown=function(n){if(/(38|40|27|32)/.test(n.which)&&!/input|textarea/i.test(n.target.tagName)){var i=t(this);if(n.preventDefault(),n.stopPropagation(),!i.is(".disabled, :disabled")){var r=e(i),a=r.hasClass("open");if(!a&&27!=n.which||a&&27==n.which)return 27==n.which&&r.find(o).trigger("focus"),i.trigger("click");var s=" li:not(.disabled):visible a",l=r.find(".dropdown-menu"+s);if(l.length){var c=l.index(n.target);38==n.which&&c>0&&c--,40==n.which&&c<l.length-1&&c++,~c||(c=0),l.eq(c).trigger("focus")}}}};var s=t.fn.dropdown;t.fn.dropdown=i,t.fn.dropdown.Constructor=a,t.fn.dropdown.noConflict=function(){return t.fn.dropdown=s,this},t(document).on("click.bs.dropdown.data-api",n).on("click.bs.dropdown.data-api",".dropdown form",function(t){t.stopPropagation()}).on("click.bs.dropdown.data-api",o,a.prototype.toggle).on("keydown.bs.dropdown.data-api",o,a.prototype.keydown).on("keydown.bs.dropdown.data-api",".dropdown-menu",a.prototype.keydown)}(t),+function(t){"use strict";function e(e,i){return this.each(function(){var r=t(this),o=r.data("bs.modal"),a=t.extend({},n.DEFAULTS,r.data(),"object"==typeof e&&e);o||r.data("bs.modal",o=new n(this,a)),"string"==typeof e?o[e](i):a.show&&o.show(i)})}var n=function(e,n){this.options=n,this.$body=t(document.body),this.$element=t(e),this.$dialog=this.$element.find(".modal-dialog"),this.$backdrop=null,this.isShown=null,this.originalBodyPad=null,this.scrollbarWidth=0,this.ignoreBackdropClick=!1,this.options.remote&&this.$element.find(".modal-content").load(this.options.remote,t.proxy(function(){this.$element.trigger("loaded.bs.modal")},this))};n.VERSION="3.3.7",n.TRANSITION_DURATION=300,n.BACKDROP_TRANSITION_DURATION=150,n.DEFAULTS={backdrop:!0,keyboard:!0,show:!0},n.prototype.toggle=function(t){return this.isShown?this.hide():this.show(t)},n.prototype.show=function(e){var i=this,r=t.Event("show.bs.modal",{relatedTarget:e});this.$element.trigger(r),this.isShown||r.isDefaultPrevented()||(this.isShown=!0,this.checkScrollbar(),this.setScrollbar(),this.$body.addClass("modal-open"),this.escape(),this.resize(),this.$element.on("click.dismiss.bs.modal",'[data-dismiss="modal"]',t.proxy(this.hide,this)),this.$dialog.on("mousedown.dismiss.bs.modal",function(){i.$element.one("mouseup.dismiss.bs.modal",function(e){t(e.target).is(i.$element)&&(i.ignoreBackdropClick=!0)})}),this.backdrop(function(){var r=t.support.transition&&i.$element.hasClass("fade");i.$element.parent().length||i.$element.appendTo(i.$body),i.$element.show().scrollTop(0),i.adjustDialog(),r&&i.$element[0].offsetWidth,i.$element.addClass("in"),i.enforceFocus();var o=t.Event("shown.bs.modal",{relatedTarget:e});r?i.$dialog.one("bsTransitionEnd",function(){i.$element.trigger("focus").trigger(o)}).emulateTransitionEnd(n.TRANSITION_DURATION):i.$element.trigger("focus").trigger(o)}))},n.prototype.hide=function(e){e&&e.preventDefault(),e=t.Event("hide.bs.modal"),this.$element.trigger(e),this.isShown&&!e.isDefaultPrevented()&&(this.isShown=!1,this.escape(),this.resize(),t(document).off("focusin.bs.modal"),this.$element.removeClass("in").off("click.dismiss.bs.modal").off("mouseup.dismiss.bs.modal"),this.$dialog.off("mousedown.dismiss.bs.modal"),t.support.transition&&this.$element.hasClass("fade")?this.$element.one("bsTransitionEnd",t.proxy(this.hideModal,this)).emulateTransitionEnd(n.TRANSITION_DURATION):this.hideModal())},n.prototype.enforceFocus=function(){t(document).off("focusin.bs.modal").on("focusin.bs.modal",t.proxy(function(t){document===t.target||this.$element[0]===t.target||this.$element.has(t.target).length||this.$element.trigger("focus")},this))},n.prototype.escape=function(){this.isShown&&this.options.keyboard?this.$element.on("keydown.dismiss.bs.modal",t.proxy(function(t){27==t.which&&this.hide()},this)):this.isShown||this.$element.off("keydown.dismiss.bs.modal")},n.prototype.resize=function(){this.isShown?t(window).on("resize.bs.modal",t.proxy(this.handleUpdate,this)):t(window).off("resize.bs.modal")},n.prototype.hideModal=function(){var t=this;this.$element.hide(),this.backdrop(function(){t.$body.removeClass("modal-open"),t.resetAdjustments(),t.resetScrollbar(),t.$element.trigger("hidden.bs.modal")})},n.prototype.removeBackdrop=function(){this.$backdrop&&this.$backdrop.remove(),this.$backdrop=null},n.prototype.backdrop=function(e){var i=this,r=this.$element.hasClass("fade")?"fade":"";if(this.isShown&&this.options.backdrop){var o=t.support.transition&&r;if(this.$backdrop=t(document.createElement("div")).addClass("modal-backdrop "+r).appendTo(this.$body),this.$element.on("click.dismiss.bs.modal",t.proxy(function(t){return this.ignoreBackdropClick?void(this.ignoreBackdropClick=!1):void(t.target===t.currentTarget&&("static"==this.options.backdrop?this.$element[0].focus():this.hide()))},this)),o&&this.$backdrop[0].offsetWidth,this.$backdrop.addClass("in"),!e)return;o?this.$backdrop.one("bsTransitionEnd",e).emulateTransitionEnd(n.BACKDROP_TRANSITION_DURATION):e()}else if(!this.isShown&&this.$backdrop){this.$backdrop.removeClass("in");var a=function(){i.removeBackdrop(),e&&e()};t.support.transition&&this.$element.hasClass("fade")?this.$backdrop.one("bsTransitionEnd",a).emulateTransitionEnd(n.BACKDROP_TRANSITION_DURATION):a()}else e&&e()},n.prototype.handleUpdate=function(){this.adjustDialog()},n.prototype.adjustDialog=function(){var t=this.$element[0].scrollHeight>document.documentElement.clientHeight;this.$element.css({paddingLeft:!this.bodyIsOverflowing&&t?this.scrollbarWidth:"",paddingRight:this.bodyIsOverflowing&&!t?this.scrollbarWidth:""})},n.prototype.resetAdjustments=function(){this.$element.css({paddingLeft:"",paddingRight:""})},n.prototype.checkScrollbar=function(){var t=window.innerWidth;if(!t){var e=document.documentElement.getBoundingClientRect();t=e.right-Math.abs(e.left)}this.bodyIsOverflowing=document.body.clientWidth<t,this.scrollbarWidth=this.measureScrollbar()},n.prototype.setScrollbar=function(){var t=parseInt(this.$body.css("padding-right")||0,10);this.originalBodyPad=document.body.style.paddingRight||"",this.bodyIsOverflowing&&this.$body.css("padding-right",t+this.scrollbarWidth)},n.prototype.resetScrollbar=function(){this.$body.css("padding-right",this.originalBodyPad)},n.prototype.measureScrollbar=function(){var t=document.createElement("div");t.className="modal-scrollbar-measure",this.$body.append(t);var e=t.offsetWidth-t.clientWidth;return this.$body[0].removeChild(t),e};var i=t.fn.modal;t.fn.modal=e,t.fn.modal.Constructor=n,t.fn.modal.noConflict=function(){return t.fn.modal=i,this},t(document).on("click.bs.modal.data-api",'[data-toggle="modal"]',function(n){var i=t(this),r=i.attr("href"),o=t(i.attr("data-target")||r&&r.replace(/.*(?=#[^\s]+$)/,"")),a=o.data("bs.modal")?"toggle":t.extend({remote:!/#/.test(r)&&r},o.data(),i.data());i.is("a")&&n.preventDefault(),o.one("show.bs.modal",function(t){t.isDefaultPrevented()||o.one("hidden.bs.modal",function(){i.is(":visible")&&i.trigger("focus")})}),e.call(o,a,this)})}(t),+function(t){"use strict";function e(e){return this.each(function(){var i=t(this),r=i.data("bs.tooltip"),o="object"==typeof e&&e;!r&&/destroy|hide/.test(e)||(r||i.data("bs.tooltip",r=new n(this,o)),"string"==typeof e&&r[e]())})}var n=function(t,e){this.type=null,this.options=null,this.enabled=null,this.timeout=null,this.hoverState=null,this.$element=null,this.inState=null,this.init("tooltip",t,e)};n.VERSION="3.3.7",n.TRANSITION_DURATION=150,n.DEFAULTS={animation:!0,placement:"top",selector:!1,template:'<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',trigger:"hover focus",title:"",delay:0,html:!1,container:!1,viewport:{selector:"body",padding:0}},n.prototype.init=function(e,n,i){if(this.enabled=!0,this.type=e,this.$element=t(n),this.options=this.getOptions(i),this.$viewport=this.options.viewport&&t(t.isFunction(this.options.viewport)?this.options.viewport.call(this,this.$element):this.options.viewport.selector||this.options.viewport),this.inState={click:!1,hover:!1,focus:!1},this.$element[0]instanceof document.constructor&&!this.options.selector)throw new Error("`selector` option must be specified when initializing "+this.type+" on the window.document object!");for(var r=this.options.trigger.split(" "),o=r.length;o--;){var a=r[o];if("click"==a)this.$element.on("click."+this.type,this.options.selector,t.proxy(this.toggle,this));else if("manual"!=a){var s="hover"==a?"mouseenter":"focusin",l="hover"==a?"mouseleave":"focusout";this.$element.on(s+"."+this.type,this.options.selector,t.proxy(this.enter,this)),this.$element.on(l+"."+this.type,this.options.selector,t.proxy(this.leave,this))}}this.options.selector?this._options=t.extend({},this.options,{trigger:"manual",selector:""}):this.fixTitle()},n.prototype.getDefaults=function(){return n.DEFAULTS},n.prototype.getOptions=function(e){return e=t.extend({},this.getDefaults(),this.$element.data(),e),e.delay&&"number"==typeof e.delay&&(e.delay={show:e.delay,hide:e.delay}),e},n.prototype.getDelegateOptions=function(){var e={},n=this.getDefaults();return this._options&&t.each(this._options,function(t,i){n[t]!=i&&(e[t]=i)}),e},n.prototype.enter=function(e){var n=e instanceof this.constructor?e:t(e.currentTarget).data("bs."+this.type);return n||(n=new this.constructor(e.currentTarget,this.getDelegateOptions()),t(e.currentTarget).data("bs."+this.type,n)),e instanceof t.Event&&(n.inState["focusin"==e.type?"focus":"hover"]=!0),n.tip().hasClass("in")||"in"==n.hoverState?void(n.hoverState="in"):(clearTimeout(n.timeout),n.hoverState="in",n.options.delay&&n.options.delay.show?void(n.timeout=setTimeout(function(){"in"==n.hoverState&&n.show()},n.options.delay.show)):n.show())},n.prototype.isInStateTrue=function(){for(var t in this.inState)if(this.inState[t])return!0;return!1},n.prototype.leave=function(e){var n=e instanceof this.constructor?e:t(e.currentTarget).data("bs."+this.type);if(n||(n=new this.constructor(e.currentTarget,this.getDelegateOptions()),t(e.currentTarget).data("bs."+this.type,n)),e instanceof t.Event&&(n.inState["focusout"==e.type?"focus":"hover"]=!1),!n.isInStateTrue())return clearTimeout(n.timeout),n.hoverState="out",n.options.delay&&n.options.delay.hide?void(n.timeout=setTimeout(function(){"out"==n.hoverState&&n.hide()},n.options.delay.hide)):n.hide()},n.prototype.show=function(){var e=t.Event("show.bs."+this.type);if(this.hasContent()&&this.enabled){this.$element.trigger(e);var i=t.contains(this.$element[0].ownerDocument.documentElement,this.$element[0]);if(e.isDefaultPrevented()||!i)return;var r=this,o=this.tip(),a=this.getUID(this.type);this.setContent(),o.attr("id",a),this.$element.attr("aria-describedby",a),this.options.animation&&o.addClass("fade");var s="function"==typeof this.options.placement?this.options.placement.call(this,o[0],this.$element[0]):this.options.placement,l=/\s?auto?\s?/i,c=l.test(s);c&&(s=s.replace(l,"")||"top"),o.detach().css({top:0,left:0,display:"block"}).addClass(s).data("bs."+this.type,this),this.options.container?o.appendTo(this.options.container):o.insertAfter(this.$element),this.$element.trigger("inserted.bs."+this.type);var u=this.getPosition(),d=o[0].offsetWidth,f=o[0].offsetHeight;if(c){var p=s,h=this.getPosition(this.$viewport);s="bottom"==s&&u.bottom+f>h.bottom?"top":"top"==s&&u.top-f<h.top?"bottom":"right"==s&&u.right+d>h.width?"left":"left"==s&&u.left-d<h.left?"right":s,o.removeClass(p).addClass(s)}var v=this.getCalculatedOffset(s,u,d,f);this.applyPlacement(v,s);var m=function(){var t=r.hoverState;r.$element.trigger("shown.bs."+r.type),r.hoverState=null,"out"==t&&r.leave(r)};t.support.transition&&this.$tip.hasClass("fade")?o.one("bsTransitionEnd",m).emulateTransitionEnd(n.TRANSITION_DURATION):m()}},n.prototype.applyPlacement=function(e,n){var i=this.tip(),r=i[0].offsetWidth,o=i[0].offsetHeight,a=parseInt(i.css("margin-top"),10),s=parseInt(i.css("margin-left"),10);isNaN(a)&&(a=0),isNaN(s)&&(s=0),e.top+=a,e.left+=s,t.offset.setOffset(i[0],t.extend({using:function(t){i.css({top:Math.round(t.top),left:Math.round(t.left)})}},e),0),i.addClass("in");var l=i[0].offsetWidth,c=i[0].offsetHeight;"top"==n&&c!=o&&(e.top=e.top+o-c);var u=this.getViewportAdjustedDelta(n,e,l,c);u.left?e.left+=u.left:e.top+=u.top;var d=/top|bottom/.test(n),f=d?2*u.left-r+l:2*u.top-o+c,p=d?"offsetWidth":"offsetHeight";i.offset(e),this.replaceArrow(f,i[0][p],d)},n.prototype.replaceArrow=function(t,e,n){this.arrow().css(n?"left":"top",50*(1-t/e)+"%").css(n?"top":"left","")},n.prototype.setContent=function(){var t=this.tip(),e=this.getTitle();t.find(".tooltip-inner")[this.options.html?"html":"text"](e),t.removeClass("fade in top bottom left right")},n.prototype.hide=function(e){function i(){"in"!=r.hoverState&&o.detach(),r.$element&&r.$element.removeAttr("aria-describedby").trigger("hidden.bs."+r.type),e&&e()}var r=this,o=t(this.$tip),a=t.Event("hide.bs."+this.type);if(this.$element.trigger(a),!a.isDefaultPrevented())return o.removeClass("in"),t.support.transition&&o.hasClass("fade")?o.one("bsTransitionEnd",i).emulateTransitionEnd(n.TRANSITION_DURATION):i(),this.hoverState=null,this},n.prototype.fixTitle=function(){var t=this.$element;(t.attr("title")||"string"!=typeof t.attr("data-original-title"))&&t.attr("data-original-title",t.attr("title")||"").attr("title","")},n.prototype.hasContent=function(){return this.getTitle()},n.prototype.getPosition=function(e){e=e||this.$element;var n=e[0],i="BODY"==n.tagName,r=n.getBoundingClientRect();null==r.width&&(r=t.extend({},r,{width:r.right-r.left,height:r.bottom-r.top}));var o=window.SVGElement&&n instanceof window.SVGElement,a=i?{top:0,left:0}:o?null:e.offset(),s={scroll:i?document.documentElement.scrollTop||document.body.scrollTop:e.scrollTop()},l=i?{width:t(window).width(),height:t(window).height()}:null;return t.extend({},r,s,l,a)},n.prototype.getCalculatedOffset=function(t,e,n,i){return"bottom"==t?{top:e.top+e.height,left:e.left+e.width/2-n/2}:"top"==t?{top:e.top-i,left:e.left+e.width/2-n/2}:"left"==t?{top:e.top+e.height/2-i/2,left:e.left-n}:{top:e.top+e.height/2-i/2,left:e.left+e.width}},n.prototype.getViewportAdjustedDelta=function(t,e,n,i){var r={top:0,left:0};if(!this.$viewport)return r;var o=this.options.viewport&&this.options.viewport.padding||0,a=this.getPosition(this.$viewport);if(/right|left/.test(t)){var s=e.top-o-a.scroll,l=e.top+o-a.scroll+i;s<a.top?r.top=a.top-s:l>a.top+a.height&&(r.top=a.top+a.height-l)}else{var c=e.left-o,u=e.left+o+n;c<a.left?r.left=a.left-c:u>a.right&&(r.left=a.left+a.width-u)}return r},n.prototype.getTitle=function(){var t,e=this.$element,n=this.options;return t=e.attr("data-original-title")||("function"==typeof n.title?n.title.call(e[0]):n.title)},n.prototype.getUID=function(t){do t+=~~(1e6*Math.random());while(document.getElementById(t));return t},n.prototype.tip=function(){if(!this.$tip&&(this.$tip=t(this.options.template),1!=this.$tip.length))throw new Error(this.type+" `template` option must consist of exactly 1 top-level element!");return this.$tip},n.prototype.arrow=function(){return this.$arrow=this.$arrow||this.tip().find(".tooltip-arrow")},n.prototype.enable=function(){this.enabled=!0},n.prototype.disable=function(){this.enabled=!1},n.prototype.toggleEnabled=function(){this.enabled=!this.enabled},n.prototype.toggle=function(e){var n=this;e&&(n=t(e.currentTarget).data("bs."+this.type),n||(n=new this.constructor(e.currentTarget,this.getDelegateOptions()),t(e.currentTarget).data("bs."+this.type,n))),e?(n.inState.click=!n.inState.click,n.isInStateTrue()?n.enter(n):n.leave(n)):n.tip().hasClass("in")?n.leave(n):n.enter(n)},n.prototype.destroy=function(){var t=this;clearTimeout(this.timeout),this.hide(function(){t.$element.off("."+t.type).removeData("bs."+t.type),t.$tip&&t.$tip.detach(),t.$tip=null,t.$arrow=null,t.$viewport=null,t.$element=null})};var i=t.fn.tooltip;t.fn.tooltip=e,t.fn.tooltip.Constructor=n,t.fn.tooltip.noConflict=function(){return t.fn.tooltip=i,this}}(t),+function(t){"use strict";function e(e){return this.each(function(){var i=t(this),r=i.data("bs.popover"),o="object"==typeof e&&e;!r&&/destroy|hide/.test(e)||(r||i.data("bs.popover",r=new n(this,o)),"string"==typeof e&&r[e]())})}var n=function(t,e){this.init("popover",t,e)};if(!t.fn.tooltip)throw new Error("Popover requires tooltip.js");n.VERSION="3.3.7",n.DEFAULTS=t.extend({},t.fn.tooltip.Constructor.DEFAULTS,{placement:"right",trigger:"click",content:"",template:'<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'}),n.prototype=t.extend({},t.fn.tooltip.Constructor.prototype),n.prototype.constructor=n,n.prototype.getDefaults=function(){return n.DEFAULTS},n.prototype.setContent=function(){var t=this.tip(),e=this.getTitle(),n=this.getContent();t.find(".popover-title")[this.options.html?"html":"text"](e),t.find(".popover-content").children().detach().end()[this.options.html?"string"==typeof n?"html":"append":"text"](n),t.removeClass("fade top bottom left right in"),t.find(".popover-title").html()||t.find(".popover-title").hide()},n.prototype.hasContent=function(){return this.getTitle()||this.getContent()},n.prototype.getContent=function(){var t=this.$element,e=this.options;return t.attr("data-content")||("function"==typeof e.content?e.content.call(t[0]):e.content)},n.prototype.arrow=function(){return this.$arrow=this.$arrow||this.tip().find(".arrow")};var i=t.fn.popover;t.fn.popover=e,t.fn.popover.Constructor=n,t.fn.popover.noConflict=function(){return t.fn.popover=i,this}}(t),+function(t){"use strict";function e(n,i){this.$body=t(document.body),this.$scrollElement=t(t(n).is(document.body)?window:n),this.options=t.extend({},e.DEFAULTS,i),this.selector=(this.options.target||"")+" .nav li > a",this.offsets=[],this.targets=[],this.activeTarget=null,this.scrollHeight=0,this.$scrollElement.on("scroll.bs.scrollspy",t.proxy(this.process,this)),this.refresh(),this.process()}function n(n){return this.each(function(){var i=t(this),r=i.data("bs.scrollspy"),o="object"==typeof n&&n;r||i.data("bs.scrollspy",r=new e(this,o)),"string"==typeof n&&r[n]()})}e.VERSION="3.3.7",e.DEFAULTS={offset:10},e.prototype.getScrollHeight=function(){return this.$scrollElement[0].scrollHeight||Math.max(this.$body[0].scrollHeight,document.documentElement.scrollHeight)},e.prototype.refresh=function(){var e=this,n="offset",i=0;this.offsets=[],this.targets=[],this.scrollHeight=this.getScrollHeight(),t.isWindow(this.$scrollElement[0])||(n="position",i=this.$scrollElement.scrollTop()),this.$body.find(this.selector).map(function(){var e=t(this),r=e.data("target")||e.attr("href"),o=/^#./.test(r)&&t(r);return o&&o.length&&o.is(":visible")&&[[o[n]().top+i,r]]||null}).sort(function(t,e){return t[0]-e[0]}).each(function(){e.offsets.push(this[0]),e.targets.push(this[1])})},e.prototype.process=function(){var t,e=this.$scrollElement.scrollTop()+this.options.offset,n=this.getScrollHeight(),i=this.options.offset+n-this.$scrollElement.height(),r=this.offsets,o=this.targets,a=this.activeTarget;if(this.scrollHeight!=n&&this.refresh(),e>=i)return a!=(t=o[o.length-1])&&this.activate(t);if(a&&e<r[0])return this.activeTarget=null,this.clear();for(t=r.length;t--;)a!=o[t]&&e>=r[t]&&(void 0===r[t+1]||e<r[t+1])&&this.activate(o[t])},e.prototype.activate=function(e){this.activeTarget=e,this.clear();
var n=this.selector+'[data-target="'+e+'"],'+this.selector+'[href="'+e+'"]',i=t(n).parents("li").addClass("active");i.parent(".dropdown-menu").length&&(i=i.closest("li.dropdown").addClass("active")),i.trigger("activate.bs.scrollspy")},e.prototype.clear=function(){t(this.selector).parentsUntil(this.options.target,".active").removeClass("active")};var i=t.fn.scrollspy;t.fn.scrollspy=n,t.fn.scrollspy.Constructor=e,t.fn.scrollspy.noConflict=function(){return t.fn.scrollspy=i,this},t(window).on("load.bs.scrollspy.data-api",function(){t('[data-spy="scroll"]').each(function(){var e=t(this);n.call(e,e.data())})})}(t),+function(t){"use strict";function e(e){return this.each(function(){var i=t(this),r=i.data("bs.tab");r||i.data("bs.tab",r=new n(this)),"string"==typeof e&&r[e]()})}var n=function(e){this.element=t(e)};n.VERSION="3.3.7",n.TRANSITION_DURATION=150,n.prototype.show=function(){var e=this.element,n=e.closest("ul:not(.dropdown-menu)"),i=e.data("target");if(i||(i=e.attr("href"),i=i&&i.replace(/.*(?=#[^\s]*$)/,"")),!e.parent("li").hasClass("active")){var r=n.find(".active:last a"),o=t.Event("hide.bs.tab",{relatedTarget:e[0]}),a=t.Event("show.bs.tab",{relatedTarget:r[0]});if(r.trigger(o),e.trigger(a),!a.isDefaultPrevented()&&!o.isDefaultPrevented()){var s=t(i);this.activate(e.closest("li"),n),this.activate(s,s.parent(),function(){r.trigger({type:"hidden.bs.tab",relatedTarget:e[0]}),e.trigger({type:"shown.bs.tab",relatedTarget:r[0]})})}}},n.prototype.activate=function(e,i,r){function o(){a.removeClass("active").find("> .dropdown-menu > .active").removeClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded",!1),e.addClass("active").find('[data-toggle="tab"]').attr("aria-expanded",!0),s?(e[0].offsetWidth,e.addClass("in")):e.removeClass("fade"),e.parent(".dropdown-menu").length&&e.closest("li.dropdown").addClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded",!0),r&&r()}var a=i.find("> .active"),s=r&&t.support.transition&&(a.length&&a.hasClass("fade")||!!i.find("> .fade").length);a.length&&s?a.one("bsTransitionEnd",o).emulateTransitionEnd(n.TRANSITION_DURATION):o(),a.removeClass("in")};var i=t.fn.tab;t.fn.tab=e,t.fn.tab.Constructor=n,t.fn.tab.noConflict=function(){return t.fn.tab=i,this};var r=function(n){n.preventDefault(),e.call(t(this),"show")};t(document).on("click.bs.tab.data-api",'[data-toggle="tab"]',r).on("click.bs.tab.data-api",'[data-toggle="pill"]',r)}(t),+function(t){"use strict";function e(e){return this.each(function(){var i=t(this),r=i.data("bs.affix"),o="object"==typeof e&&e;r||i.data("bs.affix",r=new n(this,o)),"string"==typeof e&&r[e]()})}var n=function(e,i){this.options=t.extend({},n.DEFAULTS,i),this.$target=t(this.options.target).on("scroll.bs.affix.data-api",t.proxy(this.checkPosition,this)).on("click.bs.affix.data-api",t.proxy(this.checkPositionWithEventLoop,this)),this.$element=t(e),this.affixed=null,this.unpin=null,this.pinnedOffset=null,this.checkPosition()};n.VERSION="3.3.7",n.RESET="affix affix-top affix-bottom",n.DEFAULTS={offset:0,target:window},n.prototype.getState=function(t,e,n,i){var r=this.$target.scrollTop(),o=this.$element.offset(),a=this.$target.height();if(null!=n&&"top"==this.affixed)return r<n&&"top";if("bottom"==this.affixed)return null!=n?!(r+this.unpin<=o.top)&&"bottom":!(r+a<=t-i)&&"bottom";var s=null==this.affixed,l=s?r:o.top,c=s?a:e;return null!=n&&r<=n?"top":null!=i&&l+c>=t-i&&"bottom"},n.prototype.getPinnedOffset=function(){if(this.pinnedOffset)return this.pinnedOffset;this.$element.removeClass(n.RESET).addClass("affix");var t=this.$target.scrollTop(),e=this.$element.offset();return this.pinnedOffset=e.top-t},n.prototype.checkPositionWithEventLoop=function(){setTimeout(t.proxy(this.checkPosition,this),1)},n.prototype.checkPosition=function(){if(this.$element.is(":visible")){var e=this.$element.height(),i=this.options.offset,r=i.top,o=i.bottom,a=Math.max(t(document).height(),t(document.body).height());"object"!=typeof i&&(o=r=i),"function"==typeof r&&(r=i.top(this.$element)),"function"==typeof o&&(o=i.bottom(this.$element));var s=this.getState(a,e,r,o);if(this.affixed!=s){null!=this.unpin&&this.$element.css("top","");var l="affix"+(s?"-"+s:""),c=t.Event(l+".bs.affix");if(this.$element.trigger(c),c.isDefaultPrevented())return;this.affixed=s,this.unpin="bottom"==s?this.getPinnedOffset():null,this.$element.removeClass(n.RESET).addClass(l).trigger(l.replace("affix","affixed")+".bs.affix")}"bottom"==s&&this.$element.offset({top:a-e-o})}};var i=t.fn.affix;t.fn.affix=e,t.fn.affix.Constructor=n,t.fn.affix.noConflict=function(){return t.fn.affix=i,this},t(window).on("load",function(){t('[data-spy="affix"]').each(function(){var n=t(this),i=n.data();i.offset=i.offset||{},null!=i.offsetBottom&&(i.offset.bottom=i.offsetBottom),null!=i.offsetTop&&(i.offset.top=i.offsetTop),e.call(n,i)})})}(t)}).call(e,n(4))},function(t,e,n){e=t.exports=n(2)(),e.push([t.i,'.ui-widget-header{background:#00bcd4;color:#fff}.ui-icon,.ui-icon:hover{width:16px;height:16px}.ui-widget-header .ui-icon{background-image:url("/images/ui-icons_ffffff_256x240.png")}.ui-button,.ui-state-default,.ui-widget-content .ui-state-default,.ui-widget-header .ui-state-default,html .ui-button.ui-state-disabled:active,html .ui-button.ui-state-disabled:hover{border:none;background:#f4f4f4;color:#004276}.ui-state-highlight,.ui-widget-content .ui-state-highlight,.ui-widget-header .ui-state-highlight{border:none;background:#008da5;color:#fff}.ui-button.ui-state-active:hover,.ui-button:active,.ui-state-active,.ui-widget-content .ui-state-active,.ui-widget-header .ui-state-active{background:#00bcd4;color:#fff}.error{color:red}.step4MinHeight{min-height:300px!important}@media (min-width:1420px){#step-4 .step .step-box{width:1100px;margin-left:-290px;margin-right:auto}}@media (min-width:1220px) and (max-width:1419px){#step-4 .step .step-box{width:900px;margin-left:-190px;margin-right:auto}}',""])},function(t,e,n){e=t.exports=n(2)(),e.push([t.i,".action-link[data-v-4558c92a]{cursor:pointer}.m-b-none[data-v-4558c92a]{margin-bottom:0}",""])},function(t,e,n){e=t.exports=n(2)(),e.push([t.i,".action-link[data-v-4f7474f0]{cursor:pointer}.m-b-none[data-v-4f7474f0]{margin-bottom:0}",""])},function(t,e,n){e=t.exports=n(2)(),e.push([t.i,"*{font-family:Helvetica}h3{color:#008da5}h4{color:#324c5a;text-decoration:underline}p span{color:#a9a9a9}.btn-del:hover{color:orange;cursor:pointer}.ml5{margin-left:-10px}.ml20{margin-left:-20px}select{margin:5px;border:1px solid #008da5;background:#fefefe;padding:5px 35px 5px 5px;font-size:105%;height:34px}.sel1{width:220px}.sel2{width:455px;margin-left:2px}input[type=checkbox]{padding-left:5px;padding-right:5px;border-radius:5px;border:1px solid #008da5;background-color:#fff;color:#fff;white-space:nowrap;overflow:hidden;width:20px;height:15px}#cover{position:fixed;height:100%;width:100%;top:0;left:0;background:#e8e8e8;z-index:9999;font-size:60px;text-align:center;padding-top:200px;color:#fff}@media (min-width:1880px){.col-xxl-4{width:33.33%}}@media (min-width:2280px){.col-xxl-3{width:24.5%}}",""])},function(t,e,n){e=t.exports=n(2)(),e.push([t.i,"@media (min-width:1360px){.col-xl-4{width:33.33%}}@media (min-width:1840px){.col-xxl-3{width:25%}}@media (min-width:2280px){.pull-right{margin-right:50px!important}}",""])},function(t,e,n){e=t.exports=n(2)(),e.push([t.i,".action-link[data-v-7cf2cf86]{cursor:pointer}.m-b-none[data-v-7cf2cf86]{margin-bottom:0}",""])},function(t,e){function n(){throw new Error("setTimeout has not been defined")}function i(){throw new Error("clearTimeout has not been defined")}function r(t){if(u===setTimeout)return setTimeout(t,0);if((u===n||!u)&&setTimeout)return u=setTimeout,setTimeout(t,0);try{return u(t,0)}catch(e){try{return u.call(null,t,0)}catch(e){return u.call(this,t,0)}}}function o(t){if(d===clearTimeout)return clearTimeout(t);if((d===i||!d)&&clearTimeout)return d=clearTimeout,clearTimeout(t);try{return d(t)}catch(e){try{return d.call(null,t)}catch(e){return d.call(this,t)}}}function a(){v&&p&&(v=!1,p.length?h=p.concat(h):m=-1,h.length&&s())}function s(){if(!v){var t=r(a);v=!0;for(var e=h.length;e;){for(p=h,h=[];++m<e;)p&&p[m].run();m=-1,e=h.length}p=null,v=!1,o(t)}}function l(t,e){this.fun=t,this.array=e}function c(){}var u,d,f=t.exports={};!function(){try{u="function"==typeof setTimeout?setTimeout:n}catch(t){u=n}try{d="function"==typeof clearTimeout?clearTimeout:i}catch(t){d=i}}();var p,h=[],v=!1,m=-1;f.nextTick=function(t){var e=new Array(arguments.length-1);if(arguments.length>1)for(var n=1;n<arguments.length;n++)e[n-1]=arguments[n];h.push(new l(t,e)),1!==h.length||v||r(s)},l.prototype.run=function(){this.fun.apply(null,this.array)},f.title="browser",f.browser=!0,f.env={},f.argv=[],f.version="",f.versions={},f.on=c,f.addListener=c,f.once=c,f.off=c,f.removeListener=c,f.removeAllListeners=c,f.emit=c,f.binding=function(t){throw new Error("process.binding is not supported")},f.cwd=function(){return"/"},f.chdir=function(t){throw new Error("process.chdir is not supported")},f.umask=function(){return 0}},function(t,e,n){var i=n(0)(n(30),n(74),null,null);t.exports=i.exports},function(t,e,n){var i=n(0)(n(31),n(68),null,null);t.exports=i.exports},function(t,e,n){var i=n(0)(n(32),n(77),null,null);t.exports=i.exports},function(t,e,n){n(79);var i=n(0)(n(33),n(71),"data-v-4558c92a",null);t.exports=i.exports},function(t,e,n){n(83);var i=n(0)(n(34),n(76),"data-v-7cf2cf86",null);t.exports=i.exports},function(t,e,n){n(80);var i=n(0)(n(35),n(72),"data-v-4f7474f0",null);t.exports=i.exports},function(t,e,n){var i=n(0)(n(36),n(66),null,null);t.exports=i.exports},function(t,e,n){n(78);var i=n(0)(n(37),n(69),null,null);t.exports=i.exports},function(t,e,n){var i=n(0)(n(38),n(70),null,null);t.exports=i.exports},function(t,e,n){var i=n(0)(n(39),n(67),null,null);t.exports=i.exports},function(t,e,n){n(82);var i=n(0)(n(40),n(75),null,null);t.exports=i.exports},function(t,e,n){n(81);var i=n(0)(n(41),n(73),null,null);t.exports=i.exports},function(t,e,n){var i=n(0)(n(42),n(65),null,null);t.exports=i.exports},function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"row"},t._l(t.teachers,function(e){return n("div",{directives:[{name:"show",rawName:"v-show",value:"teacher"==e.role,expression:"teacher.role=='teacher'"}],staticClass:"col-xs-12 col-sm-6 com-md-4"},[n("div",{staticClass:"card-box"},[n("div",{staticClass:"row"},[n("div",{staticClass:"contact-card"},[n("a",{staticClass:"pull-left",attrs:{href:"#"}},[n("img",{staticClass:"img-circle",attrs:{width:"80",height:"80",src:e.avatar,alt:""}})]),t._v(" "),n("div",{staticClass:"member-info"},[n("h4",{staticClass:"m-t-0 m-b-5 header-title"},[n("b",[t._v(t._s(e.name))])]),t._v(" "),n("p",{staticClass:"text-muted"},[t._v("Καθηγητής")]),t._v(" "),n("p",{staticClass:"text-dark"},[n("i",{staticClass:"md md-email"}),t._v(" "),n("small",[t._v(t._s(e.email))])])]),t._v(" "),t._m(0,!0)])])])])}))},staticRenderFns:[function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("ul",{staticClass:"social-links list-inline m-0"},[n("li",[n("a",{staticClass:"tooltips",attrs:{title:"","data-placement":"top","data-toggle":"tooltip",href:"","data-original-title":"Facebook"}},[n("i",{staticClass:"fa fa-facebook"})])]),t._v(" "),n("li",[n("a",{staticClass:"tooltips",attrs:{title:"","data-placement":"top","data-toggle":"tooltip",href:"","data-original-title":"Twitter"}},[n("i",{staticClass:"fa fa-twitter"})])]),t._v(" "),n("li",[n("a",{staticClass:"tooltips",attrs:{title:"","data-placement":"top","data-toggle":"tooltip",href:"","data-original-title":"LinkedIn"}},[n("i",{staticClass:"fa fa-linkedin"})])]),t._v(" "),n("li",[n("a",{staticClass:"tooltips",attrs:{title:"","data-placement":"top","data-toggle":"tooltip",href:"","data-original-title":"Skype"}},[n("i",{staticClass:"fa fa-skype"})])]),t._v(" "),n("li",[n("a",{staticClass:"tooltips",attrs:{title:"","data-placement":"top","data-toggle":"tooltip",href:"","data-original-title":"Message"}},[n("i",{staticClass:"fa fa-envelope-o"})])])])}]}},function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"row"},[n("div",{staticClass:"col-sm-12"},[n("div",{staticClass:"card-box"},[n("div",{staticClass:"row"},[n("div",{staticClass:"col-lg-12"},[t._m(0),t._v(" "),n("p",{staticClass:"text-muted font-13"},[t._v("\n                       Bla Bla\n                    ")]),t._v(" "),n("div",{staticClass:"p-20"},[n("div",{staticClass:"table-responsive"},[n("table",{staticClass:"table m-0"},[t._m(1),t._v(" "),n("tbody",t._l(t.notifications,function(e){return n("tr",[n("td",[t._v(t._s(e.type))]),t._v(" "),n("td",[t._v(t._s(e.notifiable_id))]),t._v(" "),n("td",[t._v(t._s(e.notifiable_type))]),t._v(" "),n("td",[t._v(t._s(e.read_at))]),t._v(" "),n("td",[t._v(t._s(e.created_at))])])}))])])])])])])])])},staticRenderFns:[function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("h4",{staticClass:"m-t-0 header-title"},[n("b",[t._v("Notifications Table")])])},function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("thead",[n("tr",[n("th",[t._v("Type")]),t._v(" "),n("th",[t._v("Notifiable Id")]),t._v(" "),n("th",[t._v("Notifiable Type")]),t._v(" "),n("th",[t._v("Read At")]),t._v(" "),n("th",[t._v("Created At")])])])}]}},function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"row"},[n("div",{staticClass:"col-sm-12"},[n("div",{staticClass:"card-box"},[n("div",{staticClass:"row"},[n("div",{staticClass:"col-lg-12"},[t._m(0),t._v(" "),n("p",{staticClass:"text-muted font-13"},[t._v("\n                       Bla Bla\n                    ")]),t._v(" "),n("div",{staticClass:"table-rep-plugin"},[n("div",{staticClass:"table-responsive",attrs:{"data-pattern":"priority-columns"}},[n("table",{staticClass:"table  table-striped",attrs:{id:"tech-companies-1"}},[t._m(1),t._v(" "),n("tbody",t._l(t.schools,function(e){return n("tr",[n("td",[t._v(t._s(e.id))]),t._v(" "),n("td",[t._v(t._s(e.name))]),t._v(" "),n("td",[t._v(t._s(e.email))]),t._v(" "),n("td",[t._v(t._s(e.type_id))]),t._v(" "),n("td",[t._v(t._s(e.address))]),t._v(" "),n("td",[t._v(t._s(e.city))]),t._v(" "),n("td",[t._v(t._s(e.phone))]),t._v(" "),n("td",[t._v(t._s(e.website))]),t._v(" "),n("td",[t._v(t._s(e.logo_id))]),t._v(" "),n("td",[t._v(t._s(e.approved))]),t._v(" "),n("td",[t._v(t._s(e.created_at))])])}))])])])])])])])])},staticRenderFns:[function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("h4",{staticClass:"m-t-0 header-title"},[n("b",[t._v("Schools Table")])])},function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("thead",[n("tr",[n("th",[t._v("ID")]),t._v(" "),n("th",[t._v("Name")]),t._v(" "),n("th",[t._v("Email")]),t._v(" "),n("th",[t._v("Type")]),t._v(" "),n("th",[t._v("Address")]),t._v(" "),n("th",[t._v("City")]),t._v(" "),n("th",[t._v("Phone")]),t._v(" "),n("th",[t._v("Website")]),t._v(" "),n("th",[t._v("Logo")]),t._v(" "),n("th",[t._v("Approved")]),t._v(" "),n("th",[t._v("Created At")])])])}]}},function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("li",{staticClass:"dropdown hidden-xs"},[n("a",{staticClass:"dropdown-toggle waves-effect",attrs:{href:"#","data-toggle":"dropdown","aria-expanded":"true"}},[n("i",{staticClass:"icon-bell"}),t._v(" "),t.unreadNotifications?n("span",{staticClass:"badge badge-xs badge-danger"},[t._v("\n            "+t._s(t.unreadNotifications.length)+"\n        ")]):t._e()]),t._v(" "),n("ul",{staticClass:"dropdown-menu dropdown-menu-lg"},[t._m(0),t._v(" "),n("li",{staticClass:"list-group nicescroll notification-list"},[n("a",{staticClass:"list-group-item",attrs:{href:"/panel/school/requests"}},[n("div",{staticClass:"media"},[t._m(1),t._v(" "),n("div",{staticClass:"media-body"},[n("h5",{staticClass:"media-heading"},[t._v("Ειδοποίηση για σύνδεση")]),t._v(" "),n("p",{staticClass:"m-0"},[t.unreadNotifications?n("small",[t._v(t._s(t.unreadNotifications.length)+" αιτήματα")]):t._e()])])])])]),t._v(" "),t._m(2)])])},staticRenderFns:[function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("li",{staticClass:"notifi-title"},[n("span",{staticClass:"label label-default pull-right"},[t._v("New 3")]),t._v("Notification")])},function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"pull-left p-r-10"},[n("em",{staticClass:"fa fa-user-plus fa-2x text-info"})])},function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("li",[n("a",{staticClass:"list-group-item text-right",attrs:{href:"/panel/school/requests"}},[n("small",{staticClass:"font-600"},[t._v("See all notifications")])])])}]}},function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"row"},[n("div",{attrs:{id:"smartwizard"}},[t._m(0),t._v(" "),n("div",{staticClass:"row"},[n("div",{staticClass:"step-anchor",attrs:{id:"step-1"}},[n("div",{staticClass:"step centered-text"},[n("div",{staticClass:"step-box"},[n("div",{staticClass:"step-img"},[1==t.financial_id?n("img",{staticClass:"step-image",attrs:{src:"/panel/assets/images/steps/step1-reduce2.png",alt:"scholio logo"}}):t._e(),t._v(" "),2==t.financial_id?n("img",{staticClass:"step-image",attrs:{src:"/panel/assets/images/steps/step1-hand2.png",alt:"scholio logo"}}):t._e(),t._v(" "),3==t.financial_id?n("img",{staticClass:"step-image",attrs:{src:"/panel/assets/images/steps/step1-clock2.png",alt:"scholio logo"}}):t._e()]),t._v(" "),n("select",{directives:[{name:"model",rawName:"v-model",value:t.financial_id,expression:"financial_id"}],staticClass:"selectpicker",attrs:{"data-width":"100%"},on:{change:function(e){t.financial_id=Array.prototype.filter.call(e.target.options,function(t){return t.selected}).map(function(t){var e="_value"in t?t._value:t.value;return e})[0]}}},[n("option",{attrs:{"data-icon":"fa fa-scissors"},domProps:{value:1}},[t._v("  Μείωση Διδάκτρων")]),t._v(" "),n("option",{attrs:{"data-icon":"fa fa-money"},domProps:{value:2}},[t._v("  Ποσό Επιδότησης")]),t._v(" "),n("option",{attrs:{"data-icon":"fa fa-clock-o"},domProps:{value:3}},[t._v("  Χρόνος Δωρεάν Φοίτησης")])]),t._v(" "),n("div",{staticStyle:{width:"50%","margin-left":"25%"}},[1==t.financial_id?n("div",{staticClass:"input-group ",staticStyle:{padding:"15px 0","z-index":"1"}},[n("input",{directives:[{name:"model",rawName:"v-model",value:t.financial_amount,expression:"financial_amount"}],staticClass:"form-control",attrs:{type:"text",placeholder:"20","aria-describedby":"basic-addon1"},domProps:{value:t._s(t.financial_amount)},on:{input:function(e){e.target.composing||(t.financial_amount=e.target.value)}}}),t._v(" "),n("span",{staticClass:"input-group-addon",attrs:{id:"basic-addon1"}},[t._v("%")])]):t._e(),t._v(" "),2==t.financial_id?n("div",{staticClass:"input-group",staticStyle:{padding:"15px 0","z-index":"1"}},[n("input",{directives:[{name:"model",rawName:"v-model",value:t.financial_amount,expression:"financial_amount"}],staticClass:"form-control",attrs:{type:"text",placeholder:"800","aria-describedby":"basic-addon2"},domProps:{value:t._s(t.financial_amount)},on:{input:function(e){e.target.composing||(t.financial_amount=e.target.value)}}}),t._v(" "),n("span",{staticClass:"input-group-addon",attrs:{id:"basic-addon2"}},[t._v("€")])]):t._e(),t._v(" "),3==t.financial_id?n("div",{staticClass:"input-group",staticStyle:{padding:"15px 0","z-index":"1"}},[n("input",{directives:[{name:"model",rawName:"v-model",value:t.financial_amount,expression:"financial_amount"}],staticClass:"form-control",attrs:{type:"text",placeholder:"2","aria-describedby":"basic-addon3"},domProps:{value:t._s(t.financial_amount)},on:{input:function(e){e.target.composing||(t.financial_amount=e.target.value)}}}),t._v(" "),n("span",{staticClass:"input-group-addon",attrs:{id:"basic-addon3"}},[t._v("Μήνες")])]):t._e()])])])]),t._v(" "),n("div",{staticClass:"step-anchor",attrs:{id:"step-2"}},[n("div",{staticClass:"step centered-text"},[n("div",{staticClass:"step-box",class:{step3check:t.levelsName.length>2},style:[!t.col_iek_eng_dan_mus,{minHeight:"380px"}]},[t.checkedStudies.length?n("div",{staticClass:"step-img"},t._l(t.studies[t.selectedLevel].section,function(e){return n("div",[e.name==t.sectionsName[t.selectedLevel][t.selectedSection]?n("img",{staticClass:"step-image",attrs:{src:"/panel/assets/images/steps/"+e.name+".png",alt:""}}):t._e()])})):t._e(),t._v(" "),t.col_iek_eng_dan_mus?n("div",[t.sectionsCounter>1?n("select",{directives:[{name:"model",rawName:"v-model",value:t.selectedSection,expression:"selectedSection"}],staticClass:"select-step2",on:{change:[function(e){t.selectedSection=Array.prototype.filter.call(e.target.options,function(t){return t.selected}).map(function(t){var e="_value"in t?t._value:t.value;return e})[0]},function(e){t.pullStudies()}]}},t._l(t.sectionsName[t.selectedLevel],function(e,i){return n("option",{domProps:{value:i}},[t._v("\n                                    "+t._s(e))])})):t._e(),t._v(" "),t.checkedStudies.length?n("select",{directives:[{name:"model",rawName:"v-model",value:t.selectedStudy,expression:"selectedStudy"}],staticClass:"select-step2",on:{change:function(e){t.selectedStudy=Array.prototype.filter.call(e.target.options,function(t){return t.selected}).map(function(t){var e="_value"in t?t._value:t.value;return e})[0]}}},t._l(t.studiesArray,function(e,i){return n("option",{domProps:{value:i}},[t._v("\n                                    "+t._s(e)+"\n                                ")])})):t._e(),t._v(" "),n("div",{staticClass:"checkBox-step2"},[t.levelsName.length>1&&t.levelsName.length<3?n("div",{staticClass:"funkyradio"},t._l(t.levelsName,function(e,i){return n("div",{staticClass:"funkyradio-success"},[n("input",{directives:[{name:"model",rawName:"v-model",value:t.selectedLevel,expression:"selectedLevel"}],attrs:{type:"radio",name:"radio-"+i,id:"radio-"+i},domProps:{value:i,checked:t._q(t.selectedLevel,i)},on:{change:function(e){t.changeLevel()},click:function(e){t.selectedLevel=i}}}),t._v(" "),null!=e?n("label",{attrs:{for:"radio-"+i}},[t._v(" "+t._s(e)+"  ")]):t._e()])})):t._e(),t._v(" "),t.levelsName.length>2?n("select",{directives:[{name:"model",rawName:"v-model",value:t.selectedLevel,expression:"selectedLevel"}],staticClass:"select-step2",on:{change:[function(e){t.selectedLevel=Array.prototype.filter.call(e.target.options,function(t){return t.selected}).map(function(t){var e="_value"in t?t._value:t.value;return e})[0]},function(e){t.changeLevel()}]}},t._l(t.levelsName,function(e,i){return n("option",{domProps:{value:i}},[t._v("\n                                            "+t._s(e)+"\n                                    ")])})):t._e()])]):t._e(),t._v(" "),!t.col_iek_eng_dan_mus&&t.checkedStudies.length?n("div",[n("select",{directives:[{name:"model",rawName:"v-model",value:t.selectedStudy,expression:"selectedStudy"}],staticClass:"select-step2",on:{change:function(e){t.selectedStudy=Array.prototype.filter.call(e.target.options,function(t){return t.selected}).map(function(t){var e="_value"in t?t._value:t.value;return e})[0]}}},t._l(t.levelsName,function(e,i){return n("option",{domProps:{value:i}},[t._v("\n                                        "+t._s(e))])}))]):t._e()])])]),t._v(" "),n("div",{staticClass:"step-anchor",attrs:{id:"step-3"}},[n("div",{staticClass:"step centered-text"},[n("div",{staticClass:"step-box"},[n("div",{staticClass:"step-img"},[1==t.criteria_id?n("img",{staticClass:"step-image",attrs:{src:"/panel/assets/images/steps/step3-skills1.png",alt:""}}):t._e(),t._v(" "),2==t.criteria_id?n("img",{staticClass:"step-image",attrs:{src:"/panel/assets/images/steps/step3-best.png",alt:""}}):t._e(),t._v(" "),3==t.criteria_id?n("img",{staticClass:"step-image",attrs:{src:"/panel/assets/images/steps/step3-help.png",alt:""}}):t._e(),t._v(" "),4==t.criteria_id?n("img",{staticClass:"step-image",attrs:{src:"/panel/assets/images/steps/step3-friends.png",alt:""}}):t._e(),t._v(" "),5==t.criteria_id?n("img",{staticClass:"step-image",attrs:{src:"/panel/assets/images/steps/step3-open.png",alt:""}}):t._e()]),t._v(" "),n("select",{directives:[{name:"model",rawName:"v-model",value:t.criteria_id,expression:"criteria_id"}],staticClass:"selectpicker",attrs:{"data-live-search":"true","data-mobile":"false","data-size":"3","data-width":"100%"},on:{change:function(e){t.criteria_id=Array.prototype.filter.call(e.target.options,function(t){return t.selected}).map(function(t){var e="_value"in t?t._value:t.value;return e})[0]}}},[n("option",{attrs:{"data-icon":"fa ",value:"1"}},[t._v("  Υποτροφία Ταλέντου/Δεξιοτήτων")]),t._v(" "),n("option",{attrs:{"data-icon":"fa ",value:"2"}},[t._v("  Υποτροφία Αριστείας")]),t._v(" "),n("option",{attrs:{"data-icon":"fa ",value:"3"}},[t._v("  Υποτροφια με Κοινωνικά Κριτήρια")]),t._v(" "),n("option",{attrs:{"data-icon":"fa ",value:"4"}},[t._v("  1+1 Φίλοι / Αδέλφια")]),t._v(" "),n("option",{attrs:{"data-icon":"fa ",value:"5"}},[t._v("  Υποτροφία Ανοιχτού Τύπου")])])])])]),t._v(" "),n("div",{staticClass:"step-anchor",attrs:{id:"step-4"}},[n("div",{staticClass:"step centered-text"},[n("div",{staticClass:"step-box",class:{step4MinHeight:!t.withTerms}},[n("h3",[t._v("Όροι και Λεπτομέρειες Συμμετοχής")]),t._v(" "),n("div",{staticClass:"col-lg-4"},[n("div",{staticClass:"pull-left"},[t._v(" Υποτροφία ενεργή μέχρι: ")]),t._v(" "),n("div",{staticClass:"clearfix"}),t._v(" "),n("input",{staticClass:"ll-skin-cangas pull-left",class:{error:t.error},staticStyle:{"margin-top":"10px",height:"35px",border:"1px solid #d2d2d2","border-radius":"3px"},attrs:{type:"text",id:"datepicker",size:"30",onchange:"Event.$emit('datePick', event.target.value)"},domProps:{value:t.end_at}}),t._v(" "),n("div",{staticClass:"clearfix"})]),t._v(" "),n("div",{staticClass:"col-lg-4 col-sm-6"},[n("div",{staticClass:"funkyradio",staticStyle:{width:"240px",margin:"15px 0 0 0"}},[n("div",{staticClass:"funkyradio-success"},[n("input",{directives:[{name:"model",rawName:"v-model",value:t.exams,expression:"exams"}],attrs:{type:"checkbox",id:"exams"},domProps:{checked:Array.isArray(t.exams)?t._i(t.exams,null)>-1:t.exams},on:{click:function(e){var n=t.exams,i=e.target,r=!!i.checked;if(Array.isArray(n)){var o=null,a=t._i(n,o);r?a<0&&(t.exams=n.concat(o)):a>-1&&(t.exams=n.slice(0,a).concat(n.slice(a+1)))}else t.exams=r}}}),t._v(" "),n("label",{attrs:{for:"exams"}},[t._v(" Υποτροφία με εξετάσεις")])])])]),t._v(" "),n("div",{staticClass:"col-lg-4 col-sm-6"},[n("div",{staticClass:"funkyradio",staticStyle:{width:"240px",margin:"15px 0 0 0"}},[n("div",{staticClass:"funkyradio-success"},[n("input",{directives:[{name:"model",rawName:"v-model",value:t.withTerms,expression:"withTerms"}],attrs:{type:"checkbox",id:"withTerms"},domProps:{checked:Array.isArray(t.withTerms)?t._i(t.withTerms,null)>-1:t.withTerms},on:{click:function(e){var n=t.withTerms,i=e.target,r=!!i.checked;if(Array.isArray(n)){var o=null,a=t._i(n,o);r?a<0&&(t.withTerms=n.concat(o)):a>-1&&(t.withTerms=n.slice(0,a).concat(n.slice(a+1)))}else t.withTerms=r}}}),t._v(" "),n("label",{attrs:{for:"withTerms"}},[t._v(" Όροι και Προϋποθέσεις")])])]),t._v(" "),n("div",{staticClass:"clearfix"})]),t._v(" "),t.withTerms?n("div",{attrs:{id:""}},[n("span",{staticStyle:{color:"transparent"}},[t._v(".")]),t._v(" "),n("tinymce",{directives:[{name:"model",rawName:"v-model",value:t.terms,expression:"terms"}],attrs:{id:"editor",options:t.tinyOptions,content:t.content},domProps:{value:t.terms},on:{change:t.tinyMCE,input:function(e){t.terms=e}}}),t._v(" "),t._m(1)],1):t._e()])])])])])])},staticRenderFns:[function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("ul",{staticClass:"clearfix"},[n("li",[n("a",{attrs:{href:"#step-1"}},[t._v("Βήμα 1"),n("br"),n("small",{staticClass:"mar-le-10"},[t._v("Οικονομική "),n("p",{staticStyle:{"margin-top":"-18px"}},[t._v("Προσφορά")])])])]),t._v(" "),n("li",[n("a",{attrs:{href:"#step-2"}},[t._v("Βήμα 2"),n("br"),n("small",{staticClass:"mar-le-10"},[t._v("Σπουδές/Ειδικότητα")])])]),t._v(" "),n("li",[n("a",{attrs:{href:"#step-3"}},[t._v("Βήμα 3"),n("br"),n("small",{staticClass:"mar-le-10"},[t._v("Κριτήρια/Όροι")])])]),t._v(" "),n("li",[n("a",{attrs:{href:"#step-4"}},[t._v("Βήμα 4"),n("br"),n("small",{staticClass:"mar-le-10"},[t._v("Όροι Συμμετοχής")])])])])},function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",[n("span",[t._v("Υπολοιπο Χαρακτήρων:")]),t._v(" "),n("span",{attrs:{id:"chars_left"}})])}]}},function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"row"},[n("div",{staticClass:"col-sm-12"},[n("div",{staticClass:"card-box"},[n("div",{staticClass:"row"},[n("div",{staticClass:"col-lg-12"},[t._m(0),t._v(" "),n("p",{staticClass:"text-muted font-13"},[t._v("\n                       Μπλά μπλά μπλά\n                    ")]),t._v(" "),n("div",{staticClass:"table-rep-plugin"},[n("div",{staticClass:"table-responsive",attrs:{"data-pattern":"priority-columns"}},[n("table",{staticClass:"table  table-striped",attrs:{id:"tech-companies-1"}},[n("thead",[n("tr",[n("th",[t._v("Πλάνο Υποτροφίας")]),t._v(" "),n("th",[t._v("Ποσό")]),t._v(" "),t.showLevel?n("th",[t._v("Τύπος Σπουδών")]):t._e(),t._v(" "),n("th",[t._v("Επίπεδο Σπουδών")]),t._v(" "),n("th",[t._v("Κριτήρια")]),t._v(" "),n("th",[t._v("Ημερομηνία Λήξης")]),t._v(" "),n("th",[t._v("Νικητής")])])]),t._v(" "),n("tbody",t._l(t.scholarships,function(e){return n("tr",[n("td",[t._v(t._s(e.financial.plan))]),t._v(" "),n("td",[t._v(t._s(e.financial_amount)+"\n                                            "),1==e.financial.id?n("span",[t._v("%")]):t._e(),t._v(" "),2==e.financial.id?n("span",[t._v("€")]):t._e(),t._v(" "),3==e.financial.id?n("span",[t._v("μήνες")]):t._e()]),t._v(" "),t.showLevel?n("td",[t._v(t._s(e.study.name))]):t._e(),t._v(" "),n("td",[t._v(t._s(e.level.name))]),t._v(" "),n("td",[t._v(t._s(e.criteria_id))]),t._v(" "),n("td",[t._v(t._s(e.end_at))]),t._v(" "),n("td",[t._v(t._s(e.winner_id))])])}))])])])])])])])])},staticRenderFns:[function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("h4",{staticClass:"m-t-0 header-title"},[n("b",[t._v("Πίνακας Υποτροφιών")])])}]}},function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",[t.tokens.length>0?n("div",[n("div",{staticClass:"panel panel-default"},[n("div",{staticClass:"panel-heading"},[t._v("Authorized Applications")]),t._v(" "),n("div",{staticClass:"panel-body"},[n("table",{staticClass:"table table-borderless m-b-none"},[t._m(0),t._v(" "),n("tbody",t._l(t.tokens,function(e){return n("tr",[n("td",{staticStyle:{"vertical-align":"middle"}},[t._v("\n                                "+t._s(e.client.name)+"\n                            ")]),t._v(" "),n("td",{staticStyle:{"vertical-align":"middle"}},[e.scopes.length>0?n("span",[t._v("\n                                    "+t._s(e.scopes.join(", "))+"\n                                ")]):t._e()]),t._v(" "),n("td",{staticStyle:{"vertical-align":"middle"}},[n("a",{staticClass:"action-link text-danger",on:{click:function(n){t.revoke(e)}}},[t._v("\n                                    Revoke\n                                ")])])])}))])])])]):t._e()])},staticRenderFns:[function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("thead",[n("tr",[n("th",[t._v("Name")]),t._v(" "),n("th",[t._v("Scopes")]),t._v(" "),n("th")])])}]}},function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",[n("div",[n("div",{staticClass:"panel panel-border panel-primary"},[n("div",{staticClass:"panel-heading"},[n("div",{staticStyle:{display:"flex","justify-content":"space-between","align-items":"center"}},[n("span",[t._v("\n                        Personal Access Tokens\n                    ")]),t._v(" "),n("a",{staticClass:"action-link",on:{click:t.showCreateTokenForm}},[t._v("\n                        Create New Token\n                    ")])])]),t._v(" "),n("div",{staticClass:"panel-body"},[0===t.tokens.length?n("p",{staticClass:"m-b-none"},[t._v("\n                    You have not created any personal access tokens.\n                ")]):t._e(),t._v(" "),t.tokens.length>0?n("table",{
staticClass:"table table-borderless m-b-none"},[t._m(0),t._v(" "),n("tbody",t._l(t.tokens,function(e){return n("tr",[n("td",{staticStyle:{"vertical-align":"middle"}},[t._v("\n                                "+t._s(e.name)+"\n                            ")]),t._v(" "),n("td",{staticStyle:{"vertical-align":"middle"}},[n("a",{staticClass:"action-link text-danger",on:{click:function(n){t.revoke(e)}}},[t._v("\n                                    Delete\n                                ")])])])}))]):t._e()])])]),t._v(" "),n("div",{staticClass:"modal fade",attrs:{id:"modal-create-token",tabindex:"-1",role:"dialog"}},[n("div",{staticClass:"modal-dialog"},[n("div",{staticClass:"modal-content"},[t._m(1),t._v(" "),n("div",{staticClass:"modal-body"},[t.form.errors.length>0?n("div",{staticClass:"alert alert-danger"},[t._m(2),t._v(" "),n("br"),t._v(" "),n("ul",t._l(t.form.errors,function(e){return n("li",[t._v("\n                                "+t._s(e)+"\n                            ")])}))]):t._e(),t._v(" "),n("form",{staticClass:"form-horizontal",attrs:{role:"form"},on:{submit:function(e){e.preventDefault(),t.store(e)}}},[n("div",{staticClass:"form-group"},[n("label",{staticClass:"col-md-4 control-label"},[t._v("Name")]),t._v(" "),n("div",{staticClass:"col-md-6"},[n("input",{directives:[{name:"model",rawName:"v-model",value:t.form.name,expression:"form.name"}],staticClass:"form-control",attrs:{id:"create-token-name",type:"text",name:"name"},domProps:{value:t._s(t.form.name)},on:{input:function(e){e.target.composing||(t.form.name=e.target.value)}}})])]),t._v(" "),t.scopes.length>0?n("div",{staticClass:"form-group"},[n("label",{staticClass:"col-md-4 control-label"},[t._v("Scopes")]),t._v(" "),n("div",{staticClass:"col-md-6"},t._l(t.scopes,function(e){return n("div",[n("div",{staticClass:"checkbox"},[n("label",[n("input",{attrs:{type:"checkbox"},domProps:{checked:t.scopeIsAssigned(e.id)},on:{click:function(n){t.toggleScope(e.id)}}}),t._v("\n\n                                                "+t._s(e.id)+"\n                                        ")])])])}))]):t._e()])]),t._v(" "),n("div",{staticClass:"modal-footer"},[n("button",{staticClass:"btn btn-default",attrs:{type:"button","data-dismiss":"modal"}},[t._v("Close")]),t._v(" "),n("button",{staticClass:"btn btn-primary",attrs:{type:"button"},on:{click:t.store}},[t._v("\n                        Create\n                    ")])])])])]),t._v(" "),n("div",{staticClass:"modal fade",attrs:{id:"modal-access-token",tabindex:"-1",role:"dialog"}},[n("div",{staticClass:"modal-dialog"},[n("div",{staticClass:"modal-content"},[t._m(3),t._v(" "),n("div",{staticClass:"modal-body"},[n("p",[t._v("\n                        Here is your new personal access token. This is the only time it will be shown so don't lose it!\n                        You may now use this token to make API requests.\n                    ")]),t._v(" "),n("pre",[n("code",[t._v(t._s(t.accessToken))])])]),t._v(" "),t._m(4)])])])])},staticRenderFns:[function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("thead",[n("tr",[n("th",[t._v("Name")]),t._v(" "),n("th")])])},function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"modal-header"},[n("button",{staticClass:"close",attrs:{type:"button ","data-dismiss":"modal","aria-hidden":"true"}},[t._v("×")]),t._v(" "),n("h4",{staticClass:"modal-title"},[t._v("\n                        Create Token\n                    ")])])},function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("p",[n("strong",[t._v("Whoops!")]),t._v(" Something went wrong!")])},function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"modal-header"},[n("button",{staticClass:"close",attrs:{type:"button ","data-dismiss":"modal","aria-hidden":"true"}},[t._v("×")]),t._v(" "),n("h4",{staticClass:"modal-title"},[t._v("\n                        Personal Access Token\n                    ")])])},function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"modal-footer"},[n("button",{staticClass:"btn btn-default",attrs:{type:"button","data-dismiss":"modal"}},[t._v("Close")])])}]}},function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{attrs:{id:"content"}},[t.col_iek_eng_dan_mus?n("div",{staticStyle:{"margin-left":"20px"}},[n("h3",{staticClass:"title ml20",staticStyle:{"margin-left":"-10px"}},[t._v("Επιλογή Ειδικοτήτων Σπουδών")]),t._v(" "),n("div",{staticClass:"row margin-top-30"},[t.studies.length?n("div",[t.studies.length>1?n("div",[n("select",{directives:[{name:"model",rawName:"v-model",value:t.selectedLevel,expression:"selectedLevel"}],staticClass:"sel1",staticStyle:{margin:"10px",width:"280px"},on:{change:[function(e){t.selectedLevel=Array.prototype.filter.call(e.target.options,function(t){return t.selected}).map(function(t){var e="_value"in t?t._value:t.value;return e})[0]},function(e){t.selectedSection=0}]}},t._l(t.studies,function(e,i){return n("option",{domProps:{value:i}},[t._v("\n                            "+t._s(e.name)+"\n                        ")])}))]):n("h3",[t._v(" "+t._s(t.studies[0].name)+" ")]),t._v(" "),n("div",{staticStyle:{clear:"both"}}),t._v(" "),t.studies[t.selectedLevel].section?n("span",[t.studies[t.selectedLevel].section.length>1?n("span",[n("select",{directives:[{name:"model",rawName:"v-model",value:t.selectedSection,expression:"selectedSection"}],staticClass:"sel2",staticStyle:{margin:"10px"},on:{change:function(e){t.selectedSection=Array.prototype.filter.call(e.target.options,function(t){return t.selected}).map(function(t){var e="_value"in t?t._value:t.value;return e})[0]}}},t._l(t.studies[t.selectedLevel].section,function(e,i){return n("option",{domProps:{value:i}},[t._v("\n                        "+t._s(e.name)+"\n                    ")])}))]):t._e(),t._v(" "),t.studies[t.selectedLevel].section.length>0?n("div",[t.studies[t.selectedLevel].section[t.selectedSection].study?n("div",{staticStyle:{"margin-top":"5px",padding:"0"}},t._l(t.studies[t.selectedLevel].section[t.selectedSection].study,function(e,i){return n("div",{class:[{"col-md-6 col-xxl-4 col-xxl-3":t.studies[t.selectedLevel].section[t.selectedSection].study.length>14}],attrs:{value:i}},[n("input",{directives:[{name:"model",rawName:"v-model",value:t.checkedStudies,expression:"checkedStudies"}],attrs:{id:"",type:"checkbox"},domProps:{checked:e.status,value:e.id,checked:Array.isArray(t.checkedStudies)?t._i(t.checkedStudies,e.id)>-1:t.checkedStudies},on:{click:[function(n){var i=t.checkedStudies,r=n.target,o=!!r.checked;if(Array.isArray(i)){var a=e.id,s=t._i(i,a);o?s<0&&(t.checkedStudies=i.concat(a)):s>-1&&(t.checkedStudies=i.slice(0,s).concat(i.slice(s+1)))}else t.checkedStudies=o},function(n){t.IfCheck(i,e.status,e.id,t.studies[t.selectedLevel].id,t.studies[t.selectedLevel].section[t.selectedSection].id)}]}}),n("label",{attrs:{for:""}}),t._v("\n                        "+t._s(e.name)+"\n                    ")])})):t._e()]):t._e()]):t._e(),t._v(" "),n("div",{staticClass:"clearfix",staticStyle:{clear:"both"}}),t._v(" "),n("hr",{staticStyle:{height:"10px",border:"0","box-shadow":"0 10px 10px -10px #324c5a inset","margin-top":"30px","margin-left":"10px","margin-right":"30px"}}),t._v(" "),t.checkedStudies.length?n("button",{staticClass:"btn btn-info",staticStyle:{"margin-top":"20px","margin-left":"10px"},on:{click:t.clearAllStudies}},[n("i",{staticClass:"fa fa-trash-o",staticStyle:{"margin-right":"10px"},attrs:{"aria-hidden":"true"}}),t._v("\n                    Διαγραφή Επιλογών\n                ")]):t._e(),t._v(" "),t._l(t.studies,function(e,i){return n("div",[n("div",{class:[{"col-md-6":t.levels[t.studies[i].id]>0}]},[t.levels[t.studies[i].id]>0?n("h3",{staticClass:"title ml5",staticStyle:{clear:"both","padding-top":"25px"}},[t._v("\n                            "+t._s(e.name)+" ")]):t._e(),t._v(" "),t._l(e.section,function(e,r){return n("div",[n("div",[t.sections[t.studies[i].id][t.studies[i].section[r].id]>0?n("h4",{staticClass:"title ml5",staticStyle:{clear:"both","margin-top":"10px"}},[t._v("\n                                    "+t._s(e.name))]):t._e(),t._v(" "),t._l(e.study,function(e,o){return n("div",{},[t.studiesStatus[i][r][o]?n("span",[t._v("\n                                    "+t._s(e.name)+"\n                                    "),n("span",[n("i",{staticClass:"fa fa-trash btn-del",staticStyle:{"margin-left":"10px"},on:{click:function(n){t.deleteStudy(i,r,o,e.id,t.studies[i].id,t.studies[i].section[r].id)}}})])]):t._e()])})],2)])})],2)])})],2):t._e()])]):t._e(),t._v(" "),t.col_iek_eng_dan_mus?t._e():n("div",[n("h3",{staticClass:"title ml20",staticStyle:{"margin-left":"-10px"}},[t._v("Επιλογή Επιπέδων Σπουδών")]),t._v(" "),n("div",t._l(t.all_studies,function(e,i){return n("div",t._l(t.all_studies[i].section,function(e,r){return n("div",t._l(t.all_studies[i].section[r].study,function(e,o){return n("div",[n("input",{directives:[{name:"model",rawName:"v-model",value:t.checkedStudies,expression:"checkedStudies"}],attrs:{type:"checkbox"},domProps:{checked:e.status,value:e.id,checked:Array.isArray(t.checkedStudies)?t._i(t.checkedStudies,e.id)>-1:t.checkedStudies},on:{click:[function(n){var i=t.checkedStudies,r=n.target,o=!!r.checked;if(Array.isArray(i)){var a=e.id,s=t._i(i,a);o?s<0&&(t.checkedStudies=i.concat(a)):s>-1&&(t.checkedStudies=i.slice(0,s).concat(i.slice(s+1)))}else t.checkedStudies=o},function(n){t.IfCheck(o,e.status,e.id,t.studies[i].id,t.studies[i].section[r].id,i,o)}]}}),n("label",{attrs:{for:""}}),t._v("\n                        "+t._s(e.name)+"\n                        ")])}))}))}))])])},staticRenderFns:[]}},function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"row"},[n("div",{staticClass:"col-sm-12"},[n("div",{staticClass:"card-box"},[n("div",{staticClass:"row"},[n("div",{staticClass:"col-lg-12"},[t._m(0),t._v(" "),n("p",{staticClass:"text-muted font-13"},[t._v("\n                       Όλα τα αιτήματα\n                    ")]),t._v(" "),n("div",{staticClass:"p-20"},[n("div",{staticClass:"table-responsive"},[n("table",{staticClass:"table m-0"},[t._m(1),t._v(" "),n("tbody",t._l(t.notifications,function(e){return n("tr",["App\\Notifications\\StudentConnectNotification"===e.type?n("td",[t._v("Μαθητής")]):t._e(),t._v(" "),"App\\Notifications\\TeacherConnectNotification"===e.type?n("td",[t._v("Καθηγητής")]):t._e(),t._v(" "),n("td",[t._v(t._s(e.data.user_name))]),t._v(" "),t._m(2,!0)])}))])])])])])])])])},staticRenderFns:[function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("h4",{staticClass:"m-t-0 header-title"},[n("b",[t._v("Ειδποιήσεις για Σύνδεση")])])},function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("thead",[n("tr",[n("th",[t._v("Ρόλος")]),t._v(" "),n("th",[t._v("Όνομα")]),t._v(" "),n("th",[t._v("Επιλογή")])])])},function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("td",[n("button",{staticClass:"btn btn-success",attrs:{type:"button"}},[t._v("Αποδοχή")]),t._v(" "),n("button",{staticClass:"btn btn-danger",attrs:{type:"button"}},[t._v("Απόρριψη")])])}]}},function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"row"},[n("div",{staticClass:"input-group pull-left ",staticStyle:{width:"210px",margin:"10px 0 10px 10px",border:"1px solid #d1d1d1","border-radius":"5px"}},[t._m(0),t._v(" "),n("input",{directives:[{name:"model",rawName:"v-model",value:t.searchStr,expression:"searchStr"}],staticClass:"form-control",attrs:{type:"text",placeholder:"Αναζήτηση"},domProps:{value:t._s(t.searchStr)},on:{input:function(e){e.target.composing||(t.searchStr=e.target.value)}}})]),t._v(" "),n("button",{staticClass:"btn btn-info pull-right",staticStyle:{margin:"11px 10px 10px 0",height:"38px"},on:{click:t.changeView}},[t._v("Αλλαγή Προβολής")]),t._v(" "),n("div",{staticClass:"clearfix"}),t._v(" "),1==t.selection?n("div",t._l(t.filteredStudies,function(e){return"student"==e.role||"teacher"==e.role?n("div",{staticClass:"col-xs-12 col-sm-6 col-xl-4 col-xxl-3"},[n("div",{staticClass:"card-box"},[n("div",{staticClass:"row"},[n("div",{staticClass:"contact-card"},[n("a",{staticClass:"pull-left",attrs:{href:"#"}},[n("img",{staticClass:"img-circle",attrs:{width:"80",height:"80",src:e.avatar,alt:""}})]),t._v(" "),n("div",{staticClass:"member-info"},[n("h4",{staticClass:"m-t-0 m-b-5 header-title"},[n("b",{staticStyle:{"text-transform":"capitalize"}},[t._v(" "+t._s(e.name))])]),t._v(" "),n("p",{staticClass:"text-muted"},[t._v("Φοιτητής")]),t._v(" "),n("p",{staticClass:"text-dark"},[n("i",{staticClass:"md md-email"}),t._v(" "),n("small",[t._v(t._s(e.email))])])]),t._v(" "),t._m(1,!0)])])])]):t._e()})):t._e(),t._v(" "),n("div",{staticClass:"clearfix"}),t._v(" "),n("div",{staticClass:"table-responsive"},[0==t.selection?n("table",{staticClass:"table table-striped table-bordered table-hover",staticStyle:{"background-color":"#fff"}},[n("thead",[n("tr",[n("th",{staticStyle:{width:"30px"}}),t._v(" "),n("th",[n("a",{attrs:{href:"#"},on:{click:t.nameChangeSort}},[t._v("\n                    Ονοματεπώνυμο\n                    "),"name"!=t.sortType||t.sortReverse?t._e():n("span",{staticClass:"fa fa-sort-amount-asc"}),t._v(" "),"name"==t.sortType&&t.sortReverse?n("span",{staticClass:"fa fa-sort-amount-desc"}):t._e()])]),t._v(" "),n("th",[n("a",{attrs:{href:"#"},on:{click:t.emailChangeSort}},[t._v("\n                    e-mail\n                    "),"email"!=t.sortType||t.sortReverse?t._e():n("span",{staticClass:"fa fa-sort-amount-asc"}),t._v(" "),"email"==t.sortType&&t.sortReverse?n("span",{staticClass:"fa fa-sort-amount-desc"}):t._e()])])])]),t._v(" "),n("tbody",t._l(t.filteredStudies,function(e){return"student"==e.role||"teacher"==e.role?n("tr",[t._m(2,!0),t._v(" "),n("td",{staticStyle:{"text-transform":"capitalize"}},[t._v(t._s(e.name))]),t._v(" "),n("td",[t._v(t._s(e.email))])]):t._e()}))]):t._e()])])},staticRenderFns:[function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("span",{staticClass:"input-group-addon"},[n("i",{staticClass:"fa fa-search"})])},function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("ul",{staticClass:"social-links list-inline m-0"},[n("li",[n("a",{staticClass:"tooltips",attrs:{title:"","data-placement":"top","data-toggle":"tooltip",href:"","data-original-title":"Facebook"}},[n("i",{staticClass:"fa fa-facebook"})])]),t._v(" "),n("li",[n("a",{staticClass:"tooltips",attrs:{title:"","data-placement":"top","data-toggle":"tooltip",href:"","data-original-title":"Twitter"}},[n("i",{staticClass:"fa fa-twitter"})])]),t._v(" "),n("li",[n("a",{staticClass:"tooltips",attrs:{title:"","data-placement":"top","data-toggle":"tooltip",href:"","data-original-title":"LinkedIn"}},[n("i",{staticClass:"fa fa-linkedin"})])]),t._v(" "),n("li",[n("a",{staticClass:"tooltips",attrs:{title:"","data-placement":"top","data-toggle":"tooltip",href:"","data-original-title":"Skype"}},[n("i",{staticClass:"fa fa-skype"})])]),t._v(" "),n("li",[n("a",{staticClass:"tooltips",attrs:{title:"","data-placement":"top","data-toggle":"tooltip",href:"","data-original-title":"Message"}},[n("i",{staticClass:"fa fa-envelope-o"})])])])},function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("td",[n("i",{staticClass:"fa fa-user",staticStyle:{"font-size":"140%"},attrs:{"aria-hidden":"true"}})])}]}},function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",[n("div",{staticClass:"panel panel-default"},[n("div",{staticClass:"panel-heading"},[n("div",{staticStyle:{display:"flex","justify-content":"space-between","align-items":"center"}},[n("span",[t._v("\n                    OAuth Clients\n                ")]),t._v(" "),n("a",{staticClass:"action-link",on:{click:t.showCreateClientForm}},[t._v("\n                    Create New Client\n                ")])])]),t._v(" "),n("div",{staticClass:"panel-body"},[0===t.clients.length?n("p",{staticClass:"m-b-none"},[t._v("\n                You have not created any OAuth clients.\n            ")]):t._e(),t._v(" "),t.clients.length>0?n("table",{staticClass:"table table-borderless m-b-none"},[t._m(0),t._v(" "),n("tbody",t._l(t.clients,function(e){return n("tr",[n("td",{staticStyle:{"vertical-align":"middle"}},[t._v("\n                            "+t._s(e.id)+"\n                        ")]),t._v(" "),n("td",{staticStyle:{"vertical-align":"middle"}},[t._v("\n                            "+t._s(e.name)+"\n                        ")]),t._v(" "),n("td",{staticStyle:{"vertical-align":"middle"}},[n("code",[t._v(t._s(e.secret))])]),t._v(" "),n("td",{staticStyle:{"vertical-align":"middle"}},[n("a",{staticClass:"action-link",on:{click:function(n){t.edit(e)}}},[t._v("\n                                Edit\n                            ")])]),t._v(" "),n("td",{staticStyle:{"vertical-align":"middle"}},[n("a",{staticClass:"action-link text-danger",on:{click:function(n){t.destroy(e)}}},[t._v("\n                                Delete\n                            ")])])])}))]):t._e()])]),t._v(" "),n("div",{staticClass:"modal fade",attrs:{id:"modal-create-client",tabindex:"-1",role:"dialog"}},[n("div",{staticClass:"modal-dialog"},[n("div",{staticClass:"modal-content"},[t._m(1),t._v(" "),n("div",{staticClass:"modal-body"},[t.createForm.errors.length>0?n("div",{staticClass:"alert alert-danger"},[t._m(2),t._v(" "),n("br"),t._v(" "),n("ul",t._l(t.createForm.errors,function(e){return n("li",[t._v("\n                                "+t._s(e)+"\n                            ")])}))]):t._e(),t._v(" "),n("form",{staticClass:"form-horizontal",attrs:{role:"form"}},[n("div",{staticClass:"form-group"},[n("label",{staticClass:"col-md-3 control-label"},[t._v("Name")]),t._v(" "),n("div",{staticClass:"col-md-7"},[n("input",{directives:[{name:"model",rawName:"v-model",value:t.createForm.name,expression:"createForm.name"}],staticClass:"form-control",attrs:{id:"create-client-name",type:"text"},domProps:{value:t._s(t.createForm.name)},on:{keyup:function(e){t._k(e.keyCode,"enter",13)||t.store(e)},input:function(e){e.target.composing||(t.createForm.name=e.target.value)}}}),t._v(" "),n("span",{staticClass:"help-block"},[t._v("\n                                    Something your users will recognize and trust.\n                                ")])])]),t._v(" "),n("div",{staticClass:"form-group"},[n("label",{staticClass:"col-md-3 control-label"},[t._v("Redirect URL")]),t._v(" "),n("div",{staticClass:"col-md-7"},[n("input",{directives:[{name:"model",rawName:"v-model",value:t.createForm.redirect,expression:"createForm.redirect"}],staticClass:"form-control",attrs:{type:"text",name:"redirect"},domProps:{value:t._s(t.createForm.redirect)},on:{keyup:function(e){t._k(e.keyCode,"enter",13)||t.store(e)},input:function(e){e.target.composing||(t.createForm.redirect=e.target.value)}}}),t._v(" "),n("span",{staticClass:"help-block"},[t._v("\n                                    Your application's authorization callback URL.\n                                ")])])])])]),t._v(" "),n("div",{staticClass:"modal-footer"},[n("button",{staticClass:"btn btn-default",attrs:{type:"button","data-dismiss":"modal"}},[t._v("Close")]),t._v(" "),n("button",{staticClass:"btn btn-primary",attrs:{type:"button"},on:{click:t.store}},[t._v("\n                        Create\n                    ")])])])])]),t._v(" "),n("div",{staticClass:"modal fade",attrs:{id:"modal-edit-client",tabindex:"-1",role:"dialog"}},[n("div",{staticClass:"modal-dialog"},[n("div",{staticClass:"modal-content"},[t._m(3),t._v(" "),n("div",{staticClass:"modal-body"},[t.editForm.errors.length>0?n("div",{staticClass:"alert alert-danger"},[t._m(4),t._v(" "),n("br"),t._v(" "),n("ul",t._l(t.editForm.errors,function(e){return n("li",[t._v("\n                                "+t._s(e)+"\n                            ")])}))]):t._e(),t._v(" "),n("form",{staticClass:"form-horizontal",attrs:{role:"form"}},[n("div",{staticClass:"form-group"},[n("label",{staticClass:"col-md-3 control-label"},[t._v("Name")]),t._v(" "),n("div",{staticClass:"col-md-7"},[n("input",{directives:[{name:"model",rawName:"v-model",value:t.editForm.name,expression:"editForm.name"}],staticClass:"form-control",attrs:{id:"edit-client-name",type:"text"},domProps:{value:t._s(t.editForm.name)},on:{keyup:function(e){t._k(e.keyCode,"enter",13)||t.update(e)},input:function(e){e.target.composing||(t.editForm.name=e.target.value)}}}),t._v(" "),n("span",{staticClass:"help-block"},[t._v("\n                                    Something your users will recognize and trust.\n                                ")])])]),t._v(" "),n("div",{staticClass:"form-group"},[n("label",{staticClass:"col-md-3 control-label"},[t._v("Redirect URL")]),t._v(" "),n("div",{staticClass:"col-md-7"},[n("input",{directives:[{name:"model",rawName:"v-model",value:t.editForm.redirect,expression:"editForm.redirect"}],staticClass:"form-control",attrs:{type:"text",name:"redirect"},domProps:{value:t._s(t.editForm.redirect)},on:{keyup:function(e){t._k(e.keyCode,"enter",13)||t.update(e)},input:function(e){e.target.composing||(t.editForm.redirect=e.target.value)}}}),t._v(" "),n("span",{staticClass:"help-block"},[t._v("\n                                    Your application's authorization callback URL.\n                                ")])])])])]),t._v(" "),n("div",{staticClass:"modal-footer"},[n("button",{staticClass:"btn btn-default",attrs:{type:"button","data-dismiss":"modal"}},[t._v("Close")]),t._v(" "),n("button",{staticClass:"btn btn-primary",attrs:{type:"button"},on:{click:t.update}},[t._v("\n                        Save Changes\n                    ")])])])])])])},staticRenderFns:[function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("thead",[n("tr",[n("th",[t._v("Client ID")]),t._v(" "),n("th",[t._v("Name")]),t._v(" "),n("th",[t._v("Secret")]),t._v(" "),n("th"),t._v(" "),n("th")])])},function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"modal-header"},[n("button",{staticClass:"close",attrs:{type:"button ","data-dismiss":"modal","aria-hidden":"true"}},[t._v("×")]),t._v(" "),n("h4",{staticClass:"modal-title"},[t._v("\n                        Create Client\n                    ")])])},function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("p",[n("strong",[t._v("Whoops!")]),t._v(" Something went wrong!")])},function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"modal-header"},[n("button",{staticClass:"close",attrs:{type:"button ","data-dismiss":"modal","aria-hidden":"true"}},[t._v("×")]),t._v(" "),n("h4",{staticClass:"modal-title"},[t._v("\n                        Edit Client\n                    ")])])},function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("p",[n("strong",[t._v("Whoops!")]),t._v(" Something went wrong!")])}]}},function(t,e){t.exports={render:function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"row"},[n("div",{staticClass:"col-sm-12"},[n("div",{staticClass:"card-box"},[n("div",{staticClass:"row"},[n("div",{staticClass:"col-lg-12"},[t._m(0),t._v(" "),n("p",{staticClass:"text-muted font-13"},[t._v("\n                       Bla Bla\n                    ")]),t._v(" "),n("div",{staticClass:"p-20"},[n("div",{staticClass:"table-responsive"},[n("table",{staticClass:"table m-0"},[t._m(1),t._v(" "),n("tbody",t._l(t.users,function(e){return n("tr",[n("td",[t._v(t._s(e.id))]),t._v(" "),n("td",[t._v(t._s(e.name))]),t._v(" "),n("td",[t._v(t._s(e.email))]),t._v(" "),n("td",[t._v(t._s(e.role))]),t._v(" "),n("td",[t._v(t._s(e.created_at))])])}))])])])])])])])])},staticRenderFns:[function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("h4",{staticClass:"m-t-0 header-title"},[n("b",[t._v("Users Table")])])},function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("thead",[n("tr",[n("th",[t._v("ID")]),t._v(" "),n("th",[t._v("Name")]),t._v(" "),n("th",[t._v("Email")]),t._v(" "),n("th",[t._v("Role")]),t._v(" "),n("th",[t._v("Created At")])])])}]}},function(t,e,n){var i=n(45);"string"==typeof i&&(i=[[t.i,i,""]]);n(3)(i,{});i.locals&&(t.exports=i.locals)},function(t,e,n){var i=n(46);"string"==typeof i&&(i=[[t.i,i,""]]);n(3)(i,{});i.locals&&(t.exports=i.locals)},function(t,e,n){var i=n(47);"string"==typeof i&&(i=[[t.i,i,""]]);n(3)(i,{});i.locals&&(t.exports=i.locals)},function(t,e,n){var i=n(48);"string"==typeof i&&(i=[[t.i,i,""]]);n(3)(i,{});i.locals&&(t.exports=i.locals)},function(t,e,n){var i=n(49);"string"==typeof i&&(i=[[t.i,i,""]]);n(3)(i,{});i.locals&&(t.exports=i.locals)},function(t,e,n){var i=n(50);"string"==typeof i&&(i=[[t.i,i,""]]);n(3)(i,{});i.locals&&(t.exports=i.locals)},function(t,e,n){!function(e,n){t.exports=n()}(this,function(){return function(t){function e(i){if(n[i])return n[i].exports;var r=n[i]={i:i,l:!1,exports:{}};return t[i].call(r.exports,r,r.exports,e),r.l=!0,r.exports}var n={};return e.m=t,e.c=n,e.i=function(t){return t},e.d=function(t,n,i){e.o(t,n)||Object.defineProperty(t,n,{configurable:!1,enumerable:!0,get:i})},e.n=function(t){var n=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(n,"a",n),n},e.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},e.p="/dist/",e(e.s=5)}([function(t,e,n){var i,r;i=n(1);var o=n(2);r=i=i||{},"object"!=typeof i.default&&"function"!=typeof i.default||(r=i=i.default),"function"==typeof r&&(r=r.options),r.render=o.render,r.staticRenderFns=o.staticRenderFns,t.exports=i},function(t,e,n){"use strict";function i(t){return t&&t.__esModule?t:{default:t}}Object.defineProperty(e,"__esModule",{value:!0});var r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},o=n(3),a=i(o);e.default={name:"tinymce",props:{id:{type:String,required:!0},options:Object,content:{type:String,default:""},value:String},watch:{content:function(){tinymce.get(this.id).setContent(this.content)}},mounted:function(){var t=this,e={},n=new Function,i=function(e){e.on("NodeChange Change KeyUp",function(e){t.$emit("input",tinymce.get(t.id).getContent()),t.$emit("change",tinymce.get(t.id),tinymce.get(t.id).getContent())}),e.on("init",function(e){void 0!=t.content&&tinymce.get(t.id).setContent(t.content),t.$emit("input",t.content)})};n=function(t){return i(t)},"object"==r(this.options)?(e=Object.assign({},this.options),this.options.hasOwnProperty("selector")||(e.selector="#"+this.id),"function"==typeof this.options.setup&&(n=function(e){i(e),t.options.setup(e)})):e.selector="#"+this.id,e.setup=function(t){return n(t)},a.default.nextTick(function(){return tinymce.init(e)})},beforeDestroy:function(){tinymce.execCommand("mceRemoveEditor",!1,this.id)}}},function(t,e){t.exports={render:function(){var t=this;return t._c("textarea",{attrs:{id:t.id}})},staticRenderFns:[]}},function(t,e,n){(function(e){/*!
>>>>>>> 9813582ea2f8c7ab00343cccfbb3cc05289989ad
 * Vue.js v2.1.10
 * (c) 2014-2017 Evan You
 * Released under the MIT License.
 */
!function(e,n){t.exports=n()}(this,function(){"use strict";function t(t){return null==t?"":"object"==typeof t?JSON.stringify(t,null,2):String(t)}function n(t){var e=parseFloat(t);return isNaN(e)?t:e}function i(t,e){for(var n=Object.create(null),i=t.split(","),r=0;r<i.length;r++)n[i[r]]=!0;return e?function(t){return n[t.toLowerCase()]}:function(t){return n[t]}}function r(t,e){if(t.length){var n=t.indexOf(e);if(n>-1)return t.splice(n,1)}}function o(t,e){return vr.call(t,e)}function a(t){return"string"==typeof t||"number"==typeof t}function s(t){var e=Object.create(null);return function(n){var i=e[n];return i||(e[n]=t(n))}}function l(t,e){function n(n){var i=arguments.length;return i?i>1?t.apply(e,arguments):t.call(e,n):t.call(e)}return n._length=t.length,n}function c(t,e){e=e||0;for(var n=t.length-e,i=new Array(n);n--;)i[n]=t[n+e];return i}function u(t,e){for(var n in e)t[n]=e[n];return t}function d(t){return null!==t&&"object"==typeof t}function f(t){return xr.call(t)===wr}function p(t){for(var e={},n=0;n<t.length;n++)t[n]&&u(e,t[n]);return e}function h(){}function v(t){return t.reduce(function(t,e){return t.concat(e.staticKeys||[])},[]).join(",")}function m(t,e){var n=d(t),i=d(e);return n&&i?JSON.stringify(t)===JSON.stringify(e):!n&&!i&&String(t)===String(e)}function g(t,e){for(var n=0;n<t.length;n++)if(m(t[n],e))return n;return-1}function y(t){var e=(t+"").charCodeAt(0);return 36===e||95===e}function _(t,e,n,i){Object.defineProperty(t,e,{value:n,enumerable:!!i,writable:!0,configurable:!0})}function b(t){if(!Tr.test(t)){var e=t.split(".");return function(t){for(var n=0;n<e.length;n++){if(!t)return;t=t[e[n]]}return t}}}function x(t){return/native code/.test(t.toString())}function w(t){Br.target&&Vr.push(Br.target),Br.target=t}function C(){Br.target=Vr.pop()}function k(t,e){t.__proto__=e}function S(t,e,n){for(var i=0,r=n.length;i<r;i++){var o=n[i];_(t,o,e[o])}}function T(t,e){if(d(t)){var n;return o(t,"__ob__")&&t.__ob__ instanceof Xr?n=t.__ob__:Kr.shouldConvert&&!Lr()&&(Array.isArray(t)||f(t))&&Object.isExtensible(t)&&!t._isVue&&(n=new Xr(t)),e&&n&&n.vmCount++,n}}function $(t,e,n,i){var r=new Br,o=Object.getOwnPropertyDescriptor(t,e);if(!o||o.configurable!==!1){var a=o&&o.get,s=o&&o.set,l=T(n);Object.defineProperty(t,e,{enumerable:!0,configurable:!0,get:function(){var e=a?a.call(t):n;return Br.target&&(r.depend(),l&&l.dep.depend(),Array.isArray(e)&&N(e)),e},set:function(e){var o=a?a.call(t):n;e===o||e!==e&&o!==o||(i&&i(),s?s.call(t,e):n=e,l=T(e),r.notify())}})}}function A(t,e,n){if(Array.isArray(t))return t.length=Math.max(t.length,e),t.splice(e,1,n),n;if(o(t,e))return void(t[e]=n);var i=t.__ob__;return t._isVue||i&&i.vmCount?void Mr("Avoid adding reactive properties to a Vue instance or its root $data at runtime - declare it upfront in the data option."):i?($(i.value,e,n),i.dep.notify(),n):void(t[e]=n)}function E(t,e){var n=t.__ob__;return t._isVue||n&&n.vmCount?void Mr("Avoid deleting properties on a Vue instance or its root $data - just set it to null."):void(o(t,e)&&(delete t[e],n&&n.dep.notify()))}function N(t){for(var e=void 0,n=0,i=t.length;n<i;n++)e=t[n],e&&e.__ob__&&e.__ob__.dep.depend(),Array.isArray(e)&&N(e)}function O(t,e){if(!e)return t;for(var n,i,r,a=Object.keys(e),s=0;s<a.length;s++)n=a[s],i=t[n],r=e[n],o(t,n)?f(i)&&f(r)&&O(i,r):A(t,n,r);return t}function j(t,e){return e?t?t.concat(e):Array.isArray(e)?e:[e]:t}function D(t,e){var n=Object.create(t||null);return e?u(n,e):n}function I(t){for(var e in t.components){var n=e.toLowerCase();(hr(n)||Sr.isReservedTag(n))&&Mr("Do not use built-in or reserved HTML elements as component id: "+e)}}function L(t){var e=t.props;if(e){var n,i,r,o={};if(Array.isArray(e))for(n=e.length;n--;)i=e[n],"string"==typeof i?(r=gr(i),o[r]={type:null}):Mr("props must be strings when using array syntax.");else if(f(e))for(var a in e)i=e[a],r=gr(a),o[r]=f(i)?i:{type:i};t.props=o}}function P(t){var e=t.directives;if(e)for(var n in e){var i=e[n];"function"==typeof i&&(e[n]={bind:i,update:i})}}function R(t,e,n){function i(i){var r=Yr[i]||Zr;u[i]=r(t[i],e[i],n,i)}I(e),L(e),P(e);var r=e.extends;if(r&&(t="function"==typeof r?R(t,r.options,n):R(t,r,n)),e.mixins)for(var a=0,s=e.mixins.length;a<s;a++){var l=e.mixins[a];l.prototype instanceof zt&&(l=l.options),t=R(t,l,n)}var c,u={};for(c in t)i(c);for(c in e)o(t,c)||i(c);return u}function F(t,e,n,i){if("string"==typeof n){var r=t[e];if(o(r,n))return r[n];var a=gr(n);if(o(r,a))return r[a];var s=yr(a);if(o(r,s))return r[s];var l=r[n]||r[a]||r[s];return i&&!l&&Mr("Failed to resolve "+e.slice(0,-1)+": "+n,t),l}}function M(t,e,n,i){var r=e[t],a=!o(n,t),s=n[t];if(V(Boolean,r.type)&&(a&&!o(r,"default")?s=!1:V(String,r.type)||""!==s&&s!==br(t)||(s=!0)),void 0===s){s=H(i,r,t);var l=Kr.shouldConvert;Kr.shouldConvert=!0,T(s),Kr.shouldConvert=l}return q(r,t,s,i,a),s}function H(t,e,n){if(o(e,"default")){var i=e.default;return d(i)&&Mr('Invalid default value for prop "'+n+'": Props with type Object/Array must use a factory function to return the default value.',t),t&&t.$options.propsData&&void 0===t.$options.propsData[n]&&void 0!==t[n]?t[n]:"function"==typeof i&&e.type!==Function?i.call(t):i}}function q(t,e,n,i,r){if(t.required&&r)return void Mr('Missing required prop: "'+e+'"',i);if(null!=n||t.required){var o=t.type,a=!o||o===!0,s=[];if(o){Array.isArray(o)||(o=[o]);for(var l=0;l<o.length&&!a;l++){var c=U(n,o[l]);s.push(c.expectedType||""),a=c.valid}}if(!a)return void Mr('Invalid prop: type check failed for prop "'+e+'". Expected '+s.map(yr).join(", ")+", got "+Object.prototype.toString.call(n).slice(8,-1)+".",i);var u=t.validator;u&&(u(n)||Mr('Invalid prop: custom validator check failed for prop "'+e+'".',i))}}function U(t,e){var n,i=B(e);return n="String"===i?typeof t==(i="string"):"Number"===i?typeof t==(i="number"):"Boolean"===i?typeof t==(i="boolean"):"Function"===i?typeof t==(i="function"):"Object"===i?f(t):"Array"===i?Array.isArray(t):t instanceof e,{valid:n,expectedType:i}}function B(t){var e=t&&t.toString().match(/^\s*function (\w+)/);return e&&e[1]}function V(t,e){if(!Array.isArray(e))return B(e)===B(t);for(var n=0,i=e.length;n<i;n++)if(B(e[n])===B(t))return!0;return!1}function z(t){return new ao(void 0,void 0,void 0,String(t))}function W(t){var e=new ao(t.tag,t.data,t.children,t.text,t.elm,t.context,t.componentOptions);return e.ns=t.ns,e.isStatic=t.isStatic,e.key=t.key,e.isCloned=!0,e}function J(t){for(var e=new Array(t.length),n=0;n<t.length;n++)e[n]=W(t[n]);return e}function K(t,e,n,i,r){if(t){var o=n.$options._base;if(d(t)&&(t=o.extend(t)),"function"!=typeof t)return void Mr("Invalid Component definition: "+String(t),n);if(!t.cid)if(t.resolved)t=t.resolved;else if(t=et(t,o,function(){n.$forceUpdate()}),!t)return;Vt(t),e=e||{};var a=nt(e,t);if(t.options.functional)return X(t,a,e,n,i);var s=e.on;e.on=e.nativeOn,t.options.abstract&&(e={}),rt(e);var l=t.options.name||r,c=new ao("vue-component-"+t.cid+(l?"-"+l:""),e,void 0,void 0,void 0,n,{Ctor:t,propsData:a,listeners:s,tag:r,children:i});return c}}function X(t,e,n,i,r){var o={},a=t.options.props;if(a)for(var s in a)o[s]=M(s,a,e);var l=Object.create(i),c=function(t,e,n,i){return pt(l,t,e,n,i,!0)},u=t.options.render.call(null,c,{props:o,data:n,parent:i,children:r,slots:function(){return yt(r,i)}});return u instanceof ao&&(u.functionalContext=i,n.slot&&((u.data||(u.data={})).slot=n.slot)),u}function Y(t,e,n,i){var r=t.componentOptions,o={_isComponent:!0,parent:e,propsData:r.propsData,_componentTag:r.tag,_parentVnode:t,_parentListeners:r.listeners,_renderChildren:r.children,_parentElm:n||null,_refElm:i||null},a=t.data.inlineTemplate;return a&&(o.render=a.render,o.staticRenderFns=a.staticRenderFns),new r.Ctor(o)}function G(t,e,n,i){if(!t.componentInstance||t.componentInstance._isDestroyed){var r=t.componentInstance=Y(t,mo,n,i);r.$mount(e?t.elm:void 0,e)}else if(t.data.keepAlive){var o=t;Z(o,o)}}function Z(t,e){var n=e.componentOptions,i=e.componentInstance=t.componentInstance;i._updateFromParent(n.propsData,n.listeners,e,n.children)}function Q(t){t.componentInstance._isMounted||(t.componentInstance._isMounted=!0,Tt(t.componentInstance,"mounted")),t.data.keepAlive&&(t.componentInstance._inactive=!1,Tt(t.componentInstance,"activated"))}function tt(t){t.componentInstance._isDestroyed||(t.data.keepAlive?(t.componentInstance._inactive=!0,Tt(t.componentInstance,"deactivated")):t.componentInstance.$destroy())}function et(t,e,n){if(!t.requested){t.requested=!0;var i=t.pendingCallbacks=[n],r=!0,o=function(n){if(d(n)&&(n=e.extend(n)),t.resolved=n,!r)for(var o=0,a=i.length;o<a;o++)i[o](n)},a=function(e){Mr("Failed to resolve async component: "+String(t)+(e?"\nReason: "+e:""))},s=t(o,a);return s&&"function"==typeof s.then&&!t.resolved&&s.then(o,a),r=!1,t.resolved}t.pendingCallbacks.push(n)}function nt(t,e){var n=e.options.props;if(n){var i={},r=t.attrs,o=t.props,a=t.domProps;if(r||o||a)for(var s in n){var l=br(s);it(i,o,s,l,!0)||it(i,r,s,l)||it(i,a,s,l)}return i}}function it(t,e,n,i,r){if(e){if(o(e,n))return t[n]=e[n],r||delete e[n],!0;if(o(e,i))return t[n]=e[i],r||delete e[i],!0}return!1}function rt(t){t.hook||(t.hook={});for(var e=0;e<fo.length;e++){var n=fo[e],i=t.hook[n],r=uo[n];t.hook[n]=i?ot(r,i):r}}function ot(t,e){return function(n,i,r,o){t(n,i,r,o),e(n,i,r,o)}}function at(t,e,n,i){i+=e;var r=t.__injected||(t.__injected={});if(!r[i]){r[i]=!0;var o=t[e];o?t[e]=function(){o.apply(this,arguments),n.apply(this,arguments)}:t[e]=n}}function st(t){var e={fn:t,invoker:function(){var t=arguments,n=e.fn;if(Array.isArray(n))for(var i=0;i<n.length;i++)n[i].apply(null,t);else n.apply(null,arguments)}};return e}function lt(t,e,n,i,r){var o,a,s,l;for(o in t)a=t[o],s=e[o],l=po(o),a?s?a!==s&&(s.fn=a,t[o]=s):(a.invoker||(a=t[o]=st(a)),n(l.name,a.invoker,l.once,l.capture)):Mr('Invalid handler for event "'+l.name+'": got '+String(a),r);for(o in e)t[o]||(l=po(o),i(l.name,e[o].invoker,l.capture))}function ct(t){for(var e=0;e<t.length;e++)if(Array.isArray(t[e]))return Array.prototype.concat.apply([],t);return t}function ut(t){return a(t)?[z(t)]:Array.isArray(t)?dt(t):void 0}function dt(t,e){var n,i,r,o=[];for(n=0;n<t.length;n++)i=t[n],null!=i&&"boolean"!=typeof i&&(r=o[o.length-1],Array.isArray(i)?o.push.apply(o,dt(i,(e||"")+"_"+n)):a(i)?r&&r.text?r.text+=String(i):""!==i&&o.push(z(i)):i.text&&r&&r.text?o[o.length-1]=z(r.text+i.text):(i.tag&&null==i.key&&null!=e&&(i.key="__vlist"+e+"_"+n+"__"),o.push(i)));return o}function ft(t){return t&&t.filter(function(t){return t&&t.componentOptions})[0]}function pt(t,e,n,i,r,o){return(Array.isArray(n)||a(n))&&(r=i,i=n,n=void 0),o&&(r=vo),ht(t,e,n,i,r)}function ht(t,e,n,i,r){if(n&&n.__ob__)return Mr("Avoid using observed data object as vnode data: "+JSON.stringify(n)+"\nAlways create fresh vnode data objects in each render!",t),co();if(!e)return co();Array.isArray(i)&&"function"==typeof i[0]&&(n=n||{},n.scopedSlots={default:i[0]},i.length=0),r===vo?i=ut(i):r===ho&&(i=ct(i));var o,a;if("string"==typeof e){var s;a=Sr.getTagNamespace(e),o=Sr.isReservedTag(e)?new ao(Sr.parsePlatformTagName(e),n,i,void 0,void 0,t):(s=F(t.$options,"components",e))?K(s,n,t,i,e):new ao(e,n,i,void 0,void 0,t)}else o=K(e,n,t,i);return o?(a&&vt(o,a),o):co()}function vt(t,e){if(t.ns=e,"foreignObject"!==t.tag&&t.children)for(var n=0,i=t.children.length;n<i;n++){var r=t.children[n];r.tag&&!r.ns&&vt(r,e)}}function mt(t){t.$vnode=null,t._vnode=null,t._staticTrees=null;var e=t.$options._parentVnode,n=e&&e.context;t.$slots=yt(t.$options._renderChildren,n),t.$scopedSlots={},t._c=function(e,n,i,r){return pt(t,e,n,i,r,!1)},t.$createElement=function(e,n,i,r){return pt(t,e,n,i,r,!0)}}function gt(e){function i(t,e,n){if(Array.isArray(t))for(var i=0;i<t.length;i++)t[i]&&"string"!=typeof t[i]&&r(t[i],e+"_"+i,n);else r(t,e,n)}function r(t,e,n){t.isStatic=!0,t.key=e,t.isOnce=n}e.prototype.$nextTick=function(t){return Rr(t,this)},e.prototype._render=function(){var t=this,e=t.$options,n=e.render,i=e.staticRenderFns,r=e._parentVnode;if(t._isMounted)for(var o in t.$slots)t.$slots[o]=J(t.$slots[o]);r&&r.data.scopedSlots&&(t.$scopedSlots=r.data.scopedSlots),i&&!t._staticTrees&&(t._staticTrees=[]),t.$vnode=r;var a;try{a=n.call(t._renderProxy,t.$createElement)}catch(e){if(!Sr.errorHandler)throw Mr("Error when rendering "+Fr(t)+":"),e;Sr.errorHandler.call(null,e,t),a=t._vnode}return a instanceof ao||(Array.isArray(a)&&Mr("Multiple root nodes returned from render function. Render function should return a single root node.",t),a=co()),a.parent=r,a},e.prototype._s=t,e.prototype._v=z,e.prototype._n=n,e.prototype._e=co,e.prototype._q=m,e.prototype._i=g,e.prototype._m=function(t,e){var n=this._staticTrees[t];return n&&!e?Array.isArray(n)?J(n):W(n):(n=this._staticTrees[t]=this.$options.staticRenderFns[t].call(this._renderProxy),i(n,"__static__"+t,!1),n)},e.prototype._o=function(t,e,n){return i(t,"__once__"+e+(n?"_"+n:""),!0),t},e.prototype._f=function(t){return F(this.$options,"filters",t,!0)||kr},e.prototype._l=function(t,e){var n,i,r,o,a;if(Array.isArray(t)||"string"==typeof t)for(n=new Array(t.length),i=0,r=t.length;i<r;i++)n[i]=e(t[i],i);else if("number"==typeof t)for(n=new Array(t),i=0;i<t;i++)n[i]=e(i+1,i);else if(d(t))for(o=Object.keys(t),n=new Array(o.length),i=0,r=o.length;i<r;i++)a=o[i],n[i]=e(t[a],a,i);return n},e.prototype._t=function(t,e,n,i){var r=this.$scopedSlots[t];if(r)return n=n||{},i&&u(n,i),r(n)||e;var o=this.$slots[t];return o&&(o._rendered&&Mr('Duplicate presence of slot "'+t+'" found in the same render tree - this will likely cause render errors.',this),o._rendered=!0),o||e},e.prototype._b=function(t,e,n,i){if(n)if(d(n)){Array.isArray(n)&&(n=p(n));for(var r in n)if("class"===r||"style"===r)t[r]=n[r];else{var o=t.attrs&&t.attrs.type,a=i||Sr.mustUseProp(e,o,r)?t.domProps||(t.domProps={}):t.attrs||(t.attrs={});a[r]=n[r]}}else Mr("v-bind without argument expects an Object or Array value",this);return t},e.prototype._k=function(t,e,n){var i=Sr.keyCodes[e]||n;return Array.isArray(i)?i.indexOf(t)===-1:i!==t}}function yt(t,e){var n={};if(!t)return n;for(var i,r,o=[],a=0,s=t.length;a<s;a++)if(r=t[a],(r.context===e||r.functionalContext===e)&&r.data&&(i=r.data.slot)){var l=n[i]||(n[i]=[]);"template"===r.tag?l.push.apply(l,r.children):l.push(r)}else o.push(r);return o.length&&(1!==o.length||" "!==o[0].text&&!o[0].isComment)&&(n.default=o),n}function _t(t){t._events=Object.create(null),t._hasHookEvent=!1;var e=t.$options._parentListeners;e&&wt(t,e)}function bt(t,e,n){n?lo.$once(t,e):lo.$on(t,e)}function xt(t,e){lo.$off(t,e)}function wt(t,e,n){lo=t,lt(e,n||{},bt,xt,t)}function Ct(t){var e=/^hook:/;t.prototype.$on=function(t,n){var i=this;return(i._events[t]||(i._events[t]=[])).push(n),e.test(t)&&(i._hasHookEvent=!0),i},t.prototype.$once=function(t,e){function n(){i.$off(t,n),e.apply(i,arguments)}var i=this;return n.fn=e,i.$on(t,n),i},t.prototype.$off=function(t,e){var n=this;if(!arguments.length)return n._events=Object.create(null),n;var i=n._events[t];if(!i)return n;if(1===arguments.length)return n._events[t]=null,n;for(var r,o=i.length;o--;)if(r=i[o],r===e||r.fn===e){i.splice(o,1);break}return n},t.prototype.$emit=function(t){var e=this,n=e._events[t];if(n){n=n.length>1?c(n):n;for(var i=c(arguments,1),r=0,o=n.length;r<o;r++)n[r].apply(e,i)}return e}}function kt(t){var e=t.$options,n=e.parent;if(n&&!e.abstract){for(;n.$options.abstract&&n.$parent;)n=n.$parent;n.$children.push(t)}t.$parent=n,t.$root=n?n.$root:t,t.$children=[],t.$refs={},t._watcher=null,t._inactive=!1,t._isMounted=!1,t._isDestroyed=!1,t._isBeingDestroyed=!1}function St(t){t.prototype._mount=function(t,e){var n=this;return n.$el=t,n.$options.render||(n.$options.render=co,n.$options.template&&"#"!==n.$options.template.charAt(0)?Mr("You are using the runtime-only build of Vue where the template option is not available. Either pre-compile the templates into render functions, or use the compiler-included build.",n):Mr("Failed to mount component: template or render function not defined.",n)),Tt(n,"beforeMount"),n._watcher=new ko(n,function(){n._update(n._render(),e)},h),e=!1,null==n.$vnode&&(n._isMounted=!0,Tt(n,"mounted")),n},t.prototype._update=function(t,e){var n=this;n._isMounted&&Tt(n,"beforeUpdate");var i=n.$el,r=n._vnode,o=mo;mo=n,n._vnode=t,r?n.$el=n.__patch__(r,t):n.$el=n.__patch__(n.$el,t,e,!1,n.$options._parentElm,n.$options._refElm),mo=o,i&&(i.__vue__=null),n.$el&&(n.$el.__vue__=n),n.$vnode&&n.$parent&&n.$vnode===n.$parent._vnode&&(n.$parent.$el=n.$el)},t.prototype._updateFromParent=function(t,e,n,i){var r=this,o=!(!r.$options._renderChildren&&!i);if(r.$options._parentVnode=n,r.$vnode=n,r._vnode&&(r._vnode.parent=n),r.$options._renderChildren=i,t&&r.$options.props){Kr.shouldConvert=!1,Kr.isSettingProps=!0;for(var a=r.$options._propKeys||[],s=0;s<a.length;s++){var l=a[s];r[l]=M(l,r.$options.props,t,r)}Kr.shouldConvert=!0,Kr.isSettingProps=!1,r.$options.propsData=t}if(e){var c=r.$options._parentListeners;r.$options._parentListeners=e,wt(r,e,c)}o&&(r.$slots=yt(i,n.context),r.$forceUpdate())},t.prototype.$forceUpdate=function(){var t=this;t._watcher&&t._watcher.update()},t.prototype.$destroy=function(){var t=this;if(!t._isBeingDestroyed){Tt(t,"beforeDestroy"),t._isBeingDestroyed=!0;var e=t.$parent;!e||e._isBeingDestroyed||t.$options.abstract||r(e.$children,t),t._watcher&&t._watcher.teardown();for(var n=t._watchers.length;n--;)t._watchers[n].teardown();t._data.__ob__&&t._data.__ob__.vmCount--,t._isDestroyed=!0,Tt(t,"destroyed"),t.$off(),t.$el&&(t.$el.__vue__=null),t.__patch__(t._vnode,null)}}}function Tt(t,e){var n=t.$options[e];if(n)for(var i=0,r=n.length;i<r;i++)n[i].call(t);t._hasHookEvent&&t.$emit("hook:"+e)}function $t(){go.length=0,yo={},_o={},bo=xo=!1}function At(){xo=!0;var t,e,n;for(go.sort(function(t,e){return t.id-e.id}),wo=0;wo<go.length;wo++)if(t=go[wo],e=t.id,yo[e]=null,t.run(),null!=yo[e]&&(_o[e]=(_o[e]||0)+1,_o[e]>Sr._maxUpdateCount)){Mr("You may have an infinite update loop "+(t.user?'in watcher with expression "'+t.expression+'"':"in a component render function."),t.vm);break}for(wo=go.length;wo--;)t=go[wo],n=t.vm,n._watcher===t&&n._isMounted&&Tt(n,"updated");Pr&&Sr.devtools&&Pr.emit("flush"),$t()}function Et(t){var e=t.id;if(null==yo[e]){if(yo[e]=!0,xo){for(var n=go.length-1;n>=0&&go[n].id>t.id;)n--;go.splice(Math.max(n,wo)+1,0,t)}else go.push(t);bo||(bo=!0,Rr(At))}}function Nt(t){So.clear(),Ot(t,So)}function Ot(t,e){var n,i,r=Array.isArray(t);if((r||d(t))&&Object.isExtensible(t)){if(t.__ob__){var o=t.__ob__.dep.id;if(e.has(o))return;e.add(o)}if(r)for(n=t.length;n--;)Ot(t[n],e);else for(i=Object.keys(t),n=i.length;n--;)Ot(t[i[n]],e)}}function jt(t){t._watchers=[];var e=t.$options;e.props&&Dt(t,e.props),e.methods&&Rt(t,e.methods),e.data?It(t):T(t._data={},!0),e.computed&&Lt(t,e.computed),e.watch&&Ft(t,e.watch)}function Dt(t,e){var n=t.$options.propsData||{},i=t.$options._propKeys=Object.keys(e),r=!t.$parent;Kr.shouldConvert=r;for(var o=function(r){var o=i[r];To[o]&&Mr('"'+o+'" is a reserved attribute and cannot be used as component prop.',t),$(t,o,M(o,e,n,t),function(){t.$parent&&!Kr.isSettingProps&&Mr("Avoid mutating a prop directly since the value will be overwritten whenever the parent component re-renders. Instead, use a data or computed property based on the prop's value. Prop being mutated: \""+o+'"',t)})},a=0;a<i.length;a++)o(a);Kr.shouldConvert=!0}function It(t){var e=t.$options.data;e=t._data="function"==typeof e?e.call(t):e||{},f(e)||(e={},Mr("data functions should return an object:\nhttps://vuejs.org/v2/guide/components.html#data-Must-Be-a-Function",t));for(var n=Object.keys(e),i=t.$options.props,r=n.length;r--;)i&&o(i,n[r])?Mr('The data property "'+n[r]+'" is already declared as a prop. Use prop default value instead.',t):qt(t,n[r]);T(e,!0)}function Lt(t,e){for(var n in e){n in t&&Mr('existing instance property "'+n+'" will be overwritten by a computed property with the same name.',t);var i=e[n];"function"==typeof i?($o.get=Pt(i,t),$o.set=h):($o.get=i.get?i.cache!==!1?Pt(i.get,t):l(i.get,t):h,$o.set=i.set?l(i.set,t):h),Object.defineProperty(t,n,$o)}}function Pt(t,e){var n=new ko(e,t,h,{lazy:!0});return function(){return n.dirty&&n.evaluate(),Br.target&&n.depend(),n.value}}function Rt(t,e){for(var n in e)t[n]=null==e[n]?h:l(e[n],t),null==e[n]&&Mr('method "'+n+'" has an undefined value in the component definition. Did you reference the function correctly?',t)}function Ft(t,e){for(var n in e){var i=e[n];if(Array.isArray(i))for(var r=0;r<i.length;r++)Mt(t,n,i[r]);else Mt(t,n,i)}}function Mt(t,e,n){var i;f(n)&&(i=n,n=n.handler),"string"==typeof n&&(n=t[n]),t.$watch(e,n,i)}function Ht(t){var e={};e.get=function(){return this._data},e.set=function(t){Mr("Avoid replacing instance root $data. Use nested data properties instead.",this)},Object.defineProperty(t.prototype,"$data",e),t.prototype.$set=A,t.prototype.$delete=E,t.prototype.$watch=function(t,e,n){var i=this;n=n||{},n.user=!0;var r=new ko(i,t,e,n);return n.immediate&&e.call(i,r.value),function(){r.teardown()}}}function qt(t,e){y(e)||Object.defineProperty(t,e,{configurable:!0,enumerable:!0,get:function(){return t._data[e]},set:function(n){t._data[e]=n}})}function Ut(t){t.prototype._init=function(t){var e=this;e._uid=Ao++,e._isVue=!0,t&&t._isComponent?Bt(e,t):e.$options=R(Vt(e.constructor),t||{},e),Gr(e),e._self=e,kt(e),_t(e),mt(e),Tt(e,"beforeCreate"),jt(e),Tt(e,"created"),e.$options.el&&e.$mount(e.$options.el)}}function Bt(t,e){var n=t.$options=Object.create(t.constructor.options);n.parent=e.parent,n.propsData=e.propsData,n._parentVnode=e._parentVnode,n._parentListeners=e._parentListeners,n._renderChildren=e._renderChildren,n._componentTag=e._componentTag,n._parentElm=e._parentElm,n._refElm=e._refElm,e.render&&(n.render=e.render,n.staticRenderFns=e.staticRenderFns)}function Vt(t){var e=t.options;if(t.super){var n=t.super.options,i=t.superOptions,r=t.extendOptions;n!==i&&(t.superOptions=n,r.render=e.render,r.staticRenderFns=e.staticRenderFns,r._scopeId=e._scopeId,e=t.options=R(n,r),e.name&&(e.components[e.name]=t))}return e}function zt(t){this instanceof zt||Mr("Vue is a constructor and should be called with the `new` keyword"),this._init(t)}function Wt(t){t.use=function(t){if(!t.installed){var e=c(arguments,1);return e.unshift(this),"function"==typeof t.install?t.install.apply(t,e):t.apply(null,e),t.installed=!0,this}}}function Jt(t){t.mixin=function(t){this.options=R(this.options,t)}}function Kt(t){t.cid=0;var e=1;t.extend=function(t){t=t||{};var n=this,i=n.cid,r=t._Ctor||(t._Ctor={});if(r[i])return r[i];var o=t.name||n.options.name;/^[a-zA-Z][\w-]*$/.test(o)||Mr('Invalid component name: "'+o+'". Component names can only contain alphanumeric characters and the hyphen, and must start with a letter.');var a=function(t){this._init(t)};return a.prototype=Object.create(n.prototype),a.prototype.constructor=a,a.cid=e++,a.options=R(n.options,t),a.super=n,a.extend=n.extend,a.mixin=n.mixin,a.use=n.use,Sr._assetTypes.forEach(function(t){a[t]=n[t]}),o&&(a.options.components[o]=a),a.superOptions=n.options,a.extendOptions=t,r[i]=a,a}}function Xt(t){Sr._assetTypes.forEach(function(e){t[e]=function(t,n){return n?("component"===e&&Sr.isReservedTag(t)&&Mr("Do not use built-in or reserved HTML elements as component id: "+t),"component"===e&&f(n)&&(n.name=n.name||t,n=this.options._base.extend(n)),"directive"===e&&"function"==typeof n&&(n={bind:n,update:n}),this.options[e+"s"][t]=n,n):this.options[e+"s"][t]}})}function Yt(t){return t&&(t.Ctor.options.name||t.tag)}function Gt(t,e){return"string"==typeof t?t.split(",").indexOf(e)>-1:t.test(e)}function Zt(t,e){for(var n in t){var i=t[n];if(i){var r=Yt(i.componentOptions);r&&!e(r)&&(Qt(i),t[n]=null)}}}function Qt(t){t&&(t.componentInstance._inactive||Tt(t.componentInstance,"deactivated"),t.componentInstance.$destroy())}function te(t){var e={};e.get=function(){return Sr},e.set=function(){Mr("Do not replace the Vue.config object, set individual fields instead.")},Object.defineProperty(t,"config",e),t.util=Qr,t.set=A,t.delete=E,t.nextTick=Rr,t.options=Object.create(null),Sr._assetTypes.forEach(function(e){t.options[e+"s"]=Object.create(null)}),t.options._base=t,u(t.options.components,Oo),Wt(t),Jt(t),Kt(t),Xt(t)}function ee(t){for(var e=t.data,n=t,i=t;i.componentInstance;)i=i.componentInstance._vnode,i.data&&(e=ne(i.data,e));for(;n=n.parent;)n.data&&(e=ne(e,n.data));return ie(e)}function ne(t,e){return{staticClass:re(t.staticClass,e.staticClass),class:t.class?[t.class,e.class]:e.class}}function ie(t){var e=t.class,n=t.staticClass;return n||e?re(n,oe(e)):""}function re(t,e){return t?e?t+" "+e:t:e||""}function oe(t){var e="";if(!t)return e;if("string"==typeof t)return t;if(Array.isArray(t)){for(var n,i=0,r=t.length;i<r;i++)t[i]&&(n=oe(t[i]))&&(e+=n+" ");return e.slice(0,-1)}if(d(t)){for(var o in t)t[o]&&(e+=o+" ");return e.slice(0,-1)}return e}function ae(t){return Vo(t)?"svg":"math"===t?"math":void 0}function se(t){if(!Ar)return!0;if(Wo(t))return!1;if(t=t.toLowerCase(),null!=Jo[t])return Jo[t];var e=document.createElement(t);return t.indexOf("-")>-1?Jo[t]=e.constructor===window.HTMLUnknownElement||e.constructor===window.HTMLElement:Jo[t]=/HTMLUnknownElement/.test(e.toString())}function le(t){if("string"==typeof t){var e=t;if(t=document.querySelector(t),!t)return Mr("Cannot find element: "+e),document.createElement("div")}return t}function ce(t,e){var n=document.createElement(t);return"select"!==t?n:(e.data&&e.data.attrs&&"multiple"in e.data.attrs&&n.setAttribute("multiple","multiple"),n)}function ue(t,e){return document.createElementNS(Uo[t],e)}function de(t){return document.createTextNode(t)}function fe(t){return document.createComment(t)}function pe(t,e,n){t.insertBefore(e,n)}function he(t,e){t.removeChild(e)}function ve(t,e){t.appendChild(e)}function me(t){return t.parentNode}function ge(t){return t.nextSibling}function ye(t){return t.tagName}function _e(t,e){t.textContent=e}function be(t,e,n){t.setAttribute(e,n)}function xe(t,e){var n=t.data.ref;if(n){var i=t.context,o=t.componentInstance||t.elm,a=i.$refs;e?Array.isArray(a[n])?r(a[n],o):a[n]===o&&(a[n]=void 0):t.data.refInFor?Array.isArray(a[n])&&a[n].indexOf(o)<0?a[n].push(o):a[n]=[o]:a[n]=o}}function we(t){return null==t}function Ce(t){return null!=t}function ke(t,e){return t.key===e.key&&t.tag===e.tag&&t.isComment===e.isComment&&!t.data==!e.data}function Se(t,e,n){var i,r,o={};for(i=e;i<=n;++i)r=t[i].key,Ce(r)&&(o[r]=i);return o}function Te(t){function e(t){return new ao(A.tagName(t).toLowerCase(),{},[],void 0,t)}function n(t,e){function n(){0===--n.listeners&&r(t)}return n.listeners=e,n}function r(t){var e=A.parentNode(t);e&&A.removeChild(e,t)}function o(t,e,n,i,r){if(t.isRootInsert=!r,!s(t,e,n,i)){var o=t.data,a=t.children,l=t.tag;Ce(l)?(o&&o.pre&&E++,E||t.ns||Sr.ignoredElements.length&&Sr.ignoredElements.indexOf(l)>-1||!Sr.isUnknownElement(l)||Mr("Unknown custom element: <"+l+'> - did you register the component correctly? For recursive components, make sure to provide the "name" option.',t.context),t.elm=t.ns?A.createElementNS(t.ns,l):A.createElement(l,t),h(t),d(t,a,e),Ce(o)&&p(t,e),u(n,t.elm,i),o&&o.pre&&E--):t.isComment?(t.elm=A.createComment(t.text),u(n,t.elm,i)):(t.elm=A.createTextNode(t.text),u(n,t.elm,i))}}function s(t,e,n,i){var r=t.data;if(Ce(r)){var o=Ce(t.componentInstance)&&r.keepAlive;if(Ce(r=r.hook)&&Ce(r=r.init)&&r(t,!1,n,i),Ce(t.componentInstance))return l(t,e),o&&c(t,e,n,i),!0}}function l(t,e){t.data.pendingInsert&&e.push.apply(e,t.data.pendingInsert),t.elm=t.componentInstance.$el,f(t)?(p(t,e),h(t)):(xe(t),e.push(t))}function c(t,e,n,i){for(var r,o=t;o.componentInstance;)if(o=o.componentInstance._vnode,Ce(r=o.data)&&Ce(r=r.transition)){for(r=0;r<T.activate.length;++r)T.activate[r](Yo,o);e.push(o);break}u(n,t.elm,i)}function u(t,e,n){t&&(n?A.insertBefore(t,e,n):A.appendChild(t,e))}function d(t,e,n){if(Array.isArray(e))for(var i=0;i<e.length;++i)o(e[i],n,t.elm,null,!0);else a(t.text)&&A.appendChild(t.elm,A.createTextNode(t.text))}function f(t){for(;t.componentInstance;)t=t.componentInstance._vnode;return Ce(t.tag)}function p(t,e){for(var n=0;n<T.create.length;++n)T.create[n](Yo,t);k=t.data.hook,Ce(k)&&(k.create&&k.create(Yo,t),k.insert&&e.push(t))}function h(t){var e;Ce(e=t.context)&&Ce(e=e.$options._scopeId)&&A.setAttribute(t.elm,e,""),Ce(e=mo)&&e!==t.context&&Ce(e=e.$options._scopeId)&&A.setAttribute(t.elm,e,"")}function v(t,e,n,i,r,a){for(;i<=r;++i)o(n[i],a,t,e)}function m(t){var e,n,i=t.data;if(Ce(i))for(Ce(e=i.hook)&&Ce(e=e.destroy)&&e(t),e=0;e<T.destroy.length;++e)T.destroy[e](t);if(Ce(e=t.children))for(n=0;n<t.children.length;++n)m(t.children[n])}function g(t,e,n,i){for(;n<=i;++n){var o=e[n];Ce(o)&&(Ce(o.tag)?(y(o),m(o)):r(o.elm))}}function y(t,e){if(e||Ce(t.data)){var i=T.remove.length+1;for(e?e.listeners+=i:e=n(t.elm,i),Ce(k=t.componentInstance)&&Ce(k=k._vnode)&&Ce(k.data)&&y(k,e),k=0;k<T.remove.length;++k)T.remove[k](t,e);Ce(k=t.data.hook)&&Ce(k=k.remove)?k(t,e):e()}else r(t.elm)}function _(t,e,n,i,r){for(var a,s,l,c,u=0,d=0,f=e.length-1,p=e[0],h=e[f],m=n.length-1,y=n[0],_=n[m],x=!r;u<=f&&d<=m;)we(p)?p=e[++u]:we(h)?h=e[--f]:ke(p,y)?(b(p,y,i),p=e[++u],y=n[++d]):ke(h,_)?(b(h,_,i),h=e[--f],_=n[--m]):ke(p,_)?(b(p,_,i),x&&A.insertBefore(t,p.elm,A.nextSibling(h.elm)),p=e[++u],_=n[--m]):ke(h,y)?(b(h,y,i),x&&A.insertBefore(t,h.elm,p.elm),h=e[--f],y=n[++d]):(we(a)&&(a=Se(e,u,f)),s=Ce(y.key)?a[y.key]:null,we(s)?(o(y,i,t,p.elm),y=n[++d]):(l=e[s],l||Mr("It seems there are duplicate keys that is causing an update error. Make sure each v-for item has a unique key."),ke(l,y)?(b(l,y,i),e[s]=void 0,x&&A.insertBefore(t,y.elm,p.elm),y=n[++d]):(o(y,i,t,p.elm),y=n[++d])));u>f?(c=we(n[m+1])?null:n[m+1].elm,v(t,c,n,d,m,i)):d>m&&g(t,e,u,f)}function b(t,e,n,i){if(t!==e){if(e.isStatic&&t.isStatic&&e.key===t.key&&(e.isCloned||e.isOnce))return e.elm=t.elm,void(e.componentInstance=t.componentInstance);var r,o=e.data,a=Ce(o);a&&Ce(r=o.hook)&&Ce(r=r.prepatch)&&r(t,e);var s=e.elm=t.elm,l=t.children,c=e.children;if(a&&f(e)){for(r=0;r<T.update.length;++r)T.update[r](t,e);Ce(r=o.hook)&&Ce(r=r.update)&&r(t,e)}we(e.text)?Ce(l)&&Ce(c)?l!==c&&_(s,l,c,n,i):Ce(c)?(Ce(t.text)&&A.setTextContent(s,""),v(s,null,c,0,c.length-1,n)):Ce(l)?g(s,l,0,l.length-1):Ce(t.text)&&A.setTextContent(s,""):t.text!==e.text&&A.setTextContent(s,e.text),a&&Ce(r=o.hook)&&Ce(r=r.postpatch)&&r(t,e)}}function x(t,e,n){if(n&&t.parent)t.parent.data.pendingInsert=e;else for(var i=0;i<e.length;++i)e[i].data.hook.insert(e[i])}function w(t,e,n){if(!C(t,e))return!1;e.elm=t;var i=e.tag,r=e.data,o=e.children;if(Ce(r)&&(Ce(k=r.hook)&&Ce(k=k.init)&&k(e,!0),Ce(k=e.componentInstance)))return l(e,n),!0;if(Ce(i)){if(Ce(o))if(t.hasChildNodes()){for(var a=!0,s=t.firstChild,c=0;c<o.length;c++){if(!s||!w(s,o[c],n)){a=!1;break}s=s.nextSibling}if(!a||s)return"undefined"==typeof console||N||(N=!0,console.warn("Parent: ",t),console.warn("Mismatching childNodes vs. VNodes: ",t.childNodes,o)),!1}else d(e,o,n);if(Ce(r))for(var u in r)if(!O(u)){p(e,n);break}}else t.data!==e.text&&(t.data=e.text);return!0}function C(t,e){return e.tag?0===e.tag.indexOf("vue-component")||e.tag.toLowerCase()===(t.tagName&&t.tagName.toLowerCase()):t.nodeType===(e.isComment?8:3)}var k,S,T={},$=t.modules,A=t.nodeOps;for(k=0;k<Go.length;++k)for(T[Go[k]]=[],S=0;S<$.length;++S)void 0!==$[S][Go[k]]&&T[Go[k]].push($[S][Go[k]]);var E=0,N=!1,O=i("attrs,style,class,staticClass,staticStyle,key");return function(t,n,i,r,a,s){if(!n)return void(t&&m(t));var l=!1,c=[];if(t){var u=Ce(t.nodeType);if(!u&&ke(t,n))b(t,n,c,r);else{if(u){if(1===t.nodeType&&t.hasAttribute("server-rendered")&&(t.removeAttribute("server-rendered"),i=!0),i){if(w(t,n,c))return x(n,c,!0),t;Mr("The client-side rendered virtual DOM tree is not matching server-rendered content. This is likely caused by incorrect HTML markup, for example nesting block-level elements inside <p>, or missing <tbody>. Bailing hydration and performing full client-side render.")}t=e(t)}var d=t.elm,p=A.parentNode(d);if(o(n,c,d._leaveCb?null:p,A.nextSibling(d)),n.parent){for(var h=n.parent;h;)h.elm=n.elm,h=h.parent;if(f(n))for(var v=0;v<T.create.length;++v)T.create[v](Yo,n.parent);
}null!==p?g(p,[t],0,0):Ce(t.tag)&&m(t)}}else l=!0,o(n,c,a,s);return x(n,c,l),n.elm}}function $e(t,e){(t.data.directives||e.data.directives)&&Ae(t,e)}function Ae(t,e){var n,i,r,o=t===Yo,a=e===Yo,s=Ee(t.data.directives,t.context),l=Ee(e.data.directives,e.context),c=[],u=[];for(n in l)i=s[n],r=l[n],i?(r.oldValue=i.value,Oe(r,"update",e,t),r.def&&r.def.componentUpdated&&u.push(r)):(Oe(r,"bind",e,t),r.def&&r.def.inserted&&c.push(r));if(c.length){var d=function(){for(var n=0;n<c.length;n++)Oe(c[n],"inserted",e,t)};o?at(e.data.hook||(e.data.hook={}),"insert",d,"dir-insert"):d()}if(u.length&&at(e.data.hook||(e.data.hook={}),"postpatch",function(){for(var n=0;n<u.length;n++)Oe(u[n],"componentUpdated",e,t)},"dir-postpatch"),!o)for(n in s)l[n]||Oe(s[n],"unbind",t,t,a)}function Ee(t,e){var n=Object.create(null);if(!t)return n;var i,r;for(i=0;i<t.length;i++)r=t[i],r.modifiers||(r.modifiers=Qo),n[Ne(r)]=r,r.def=F(e.$options,"directives",r.name,!0);return n}function Ne(t){return t.rawName||t.name+"."+Object.keys(t.modifiers||{}).join(".")}function Oe(t,e,n,i,r){var o=t.def&&t.def[e];o&&o(n.elm,t,n,i,r)}function je(t,e){if(t.data.attrs||e.data.attrs){var n,i,r,o=e.elm,a=t.data.attrs||{},s=e.data.attrs||{};s.__ob__&&(s=e.data.attrs=u({},s));for(n in s)i=s[n],r=a[n],r!==i&&De(o,n,i);Or&&s.value!==a.value&&De(o,"value",s.value);for(n in a)null==s[n]&&(Mo(n)?o.removeAttributeNS(Fo,Ho(n)):Po(n)||o.removeAttribute(n))}}function De(t,e,n){Ro(e)?qo(n)?t.removeAttribute(e):t.setAttribute(e,e):Po(e)?t.setAttribute(e,qo(n)||"false"===n?"false":"true"):Mo(e)?qo(n)?t.removeAttributeNS(Fo,Ho(e)):t.setAttributeNS(Fo,e,n):qo(n)?t.removeAttribute(e):t.setAttribute(e,n)}function Ie(t,e){var n=e.elm,i=e.data,r=t.data;if(i.staticClass||i.class||r&&(r.staticClass||r.class)){var o=ee(e),a=n._transitionClasses;a&&(o=re(o,oe(a))),o!==n._prevClass&&(n.setAttribute("class",o),n._prevClass=o)}}function Le(t,e,n,i){if(n){var r=e,o=jo;e=function(n){Pe(t,e,i,o),1===arguments.length?r(n):r.apply(null,arguments)}}jo.addEventListener(t,e,i)}function Pe(t,e,n,i){(i||jo).removeEventListener(t,e,n)}function Re(t,e){if(t.data.on||e.data.on){var n=e.data.on||{},i=t.data.on||{};jo=e.elm,lt(n,i,Le,Pe,e.context)}}function Fe(t,e){if(t.data.domProps||e.data.domProps){var n,i,r=e.elm,o=t.data.domProps||{},a=e.data.domProps||{};a.__ob__&&(a=e.data.domProps=u({},a));for(n in o)null==a[n]&&(r[n]="");for(n in a)if(i=a[n],"textContent"!==n&&"innerHTML"!==n||(e.children&&(e.children.length=0),i!==o[n]))if("value"===n){r._value=i;var s=null==i?"":String(i);Me(r,e,s)&&(r.value=s)}else r[n]=i}}function Me(t,e,n){return!t.composing&&("option"===e.tag||He(t,n)||qe(e,n))}function He(t,e){return document.activeElement!==t&&t.value!==e}function qe(t,e){var i=t.elm.value,r=t.elm._vModifiers;return r&&r.number||"number"===t.elm.type?n(i)!==n(e):r&&r.trim?i.trim()!==e.trim():i!==e}function Ue(t){var e=Be(t.style);return t.staticStyle?u(t.staticStyle,e):e}function Be(t){return Array.isArray(t)?p(t):"string"==typeof t?oa(t):t}function Ve(t,e){var n,i={};if(e)for(var r=t;r.componentInstance;)r=r.componentInstance._vnode,r.data&&(n=Ue(r.data))&&u(i,n);(n=Ue(t.data))&&u(i,n);for(var o=t;o=o.parent;)o.data&&(n=Ue(o.data))&&u(i,n);return i}function ze(t,e){var n=e.data,i=t.data;if(n.staticStyle||n.style||i.staticStyle||i.style){var r,o,a=e.elm,s=t.data.staticStyle,l=t.data.style||{},c=s||l,d=Be(e.data.style)||{};e.data.style=d.__ob__?u({},d):d;var f=Ve(e,!0);for(o in c)null==f[o]&&la(a,o,"");for(o in f)r=f[o],r!==c[o]&&la(a,o,null==r?"":r)}}function We(t,e){if(e&&e.trim())if(t.classList)e.indexOf(" ")>-1?e.split(/\s+/).forEach(function(e){return t.classList.add(e)}):t.classList.add(e);else{var n=" "+t.getAttribute("class")+" ";n.indexOf(" "+e+" ")<0&&t.setAttribute("class",(n+e).trim())}}function Je(t,e){if(e&&e.trim())if(t.classList)e.indexOf(" ")>-1?e.split(/\s+/).forEach(function(e){return t.classList.remove(e)}):t.classList.remove(e);else{for(var n=" "+t.getAttribute("class")+" ",i=" "+e+" ";n.indexOf(i)>=0;)n=n.replace(i," ");t.setAttribute("class",n.trim())}}function Ke(t){_a(function(){_a(t)})}function Xe(t,e){(t._transitionClasses||(t._transitionClasses=[])).push(e),We(t,e)}function Ye(t,e){t._transitionClasses&&r(t._transitionClasses,e),Je(t,e)}function Ge(t,e,n){var i=Ze(t,e),r=i.type,o=i.timeout,a=i.propCount;if(!r)return n();var s=r===pa?ma:ya,l=0,c=function(){t.removeEventListener(s,u),n()},u=function(e){e.target===t&&++l>=a&&c()};setTimeout(function(){l<a&&c()},o+1),t.addEventListener(s,u)}function Ze(t,e){var n,i=window.getComputedStyle(t),r=i[va+"Delay"].split(", "),o=i[va+"Duration"].split(", "),a=Qe(r,o),s=i[ga+"Delay"].split(", "),l=i[ga+"Duration"].split(", "),c=Qe(s,l),u=0,d=0;e===pa?a>0&&(n=pa,u=a,d=o.length):e===ha?c>0&&(n=ha,u=c,d=l.length):(u=Math.max(a,c),n=u>0?a>c?pa:ha:null,d=n?n===pa?o.length:l.length:0);var f=n===pa&&ba.test(i[va+"Property"]);return{type:n,timeout:u,propCount:d,hasTransform:f}}function Qe(t,e){for(;t.length<e.length;)t=t.concat(t);return Math.max.apply(null,e.map(function(e,n){return tn(e)+tn(t[n])}))}function tn(t){return 1e3*Number(t.slice(0,-1))}function en(t,e){var n=t.elm;n._leaveCb&&(n._leaveCb.cancelled=!0,n._leaveCb());var i=rn(t.data.transition);if(i&&!n._enterCb&&1===n.nodeType){for(var r=i.css,o=i.type,a=i.enterClass,s=i.enterToClass,l=i.enterActiveClass,c=i.appearClass,u=i.appearToClass,d=i.appearActiveClass,f=i.beforeEnter,p=i.enter,h=i.afterEnter,v=i.enterCancelled,m=i.beforeAppear,g=i.appear,y=i.afterAppear,_=i.appearCancelled,b=mo,x=mo.$vnode;x&&x.parent;)x=x.parent,b=x.context;var w=!b._isMounted||!t.isRootInsert;if(!w||g||""===g){var C=w?c:a,k=w?d:l,S=w?u:s,T=w?m||f:f,$=w&&"function"==typeof g?g:p,A=w?y||h:h,E=w?_||v:v,N=r!==!1&&!Or,O=$&&($._length||$.length)>1,j=n._enterCb=on(function(){N&&(Ye(n,S),Ye(n,k)),j.cancelled?(N&&Ye(n,C),E&&E(n)):A&&A(n),n._enterCb=null});t.data.show||at(t.data.hook||(t.data.hook={}),"insert",function(){var e=n.parentNode,i=e&&e._pending&&e._pending[t.key];i&&i.tag===t.tag&&i.elm._leaveCb&&i.elm._leaveCb(),$&&$(n,j)},"transition-insert"),T&&T(n),N&&(Xe(n,C),Xe(n,k),Ke(function(){Xe(n,S),Ye(n,C),j.cancelled||O||Ge(n,o,j)})),t.data.show&&(e&&e(),$&&$(n,j)),N||O||j()}}}function nn(t,e){function n(){g.cancelled||(t.data.show||((i.parentNode._pending||(i.parentNode._pending={}))[t.key]=t),u&&u(i),v&&(Xe(i,s),Xe(i,c),Ke(function(){Xe(i,l),Ye(i,s),g.cancelled||m||Ge(i,a,g)})),d&&d(i,g),v||m||g())}var i=t.elm;i._enterCb&&(i._enterCb.cancelled=!0,i._enterCb());var r=rn(t.data.transition);if(!r)return e();if(!i._leaveCb&&1===i.nodeType){var o=r.css,a=r.type,s=r.leaveClass,l=r.leaveToClass,c=r.leaveActiveClass,u=r.beforeLeave,d=r.leave,f=r.afterLeave,p=r.leaveCancelled,h=r.delayLeave,v=o!==!1&&!Or,m=d&&(d._length||d.length)>1,g=i._leaveCb=on(function(){i.parentNode&&i.parentNode._pending&&(i.parentNode._pending[t.key]=null),v&&(Ye(i,l),Ye(i,c)),g.cancelled?(v&&Ye(i,s),p&&p(i)):(e(),f&&f(i)),i._leaveCb=null});h?h(n):n()}}function rn(t){if(t){if("object"==typeof t){var e={};return t.css!==!1&&u(e,xa(t.name||"v")),u(e,t),e}return"string"==typeof t?xa(t):void 0}}function on(t){var e=!1;return function(){e||(e=!0,t())}}function an(t,e){e.data.show||en(e)}function sn(t,e,n){var i=e.value,r=t.multiple;if(r&&!Array.isArray(i))return void Mr('<select multiple v-model="'+e.expression+'"> expects an Array value for its binding, but got '+Object.prototype.toString.call(i).slice(8,-1),n);for(var o,a,s=0,l=t.options.length;s<l;s++)if(a=t.options[s],r)o=g(i,cn(a))>-1,a.selected!==o&&(a.selected=o);else if(m(cn(a),i))return void(t.selectedIndex!==s&&(t.selectedIndex=s));r||(t.selectedIndex=-1)}function ln(t,e){for(var n=0,i=e.length;n<i;n++)if(m(cn(e[n]),t))return!1;return!0}function cn(t){return"_value"in t?t._value:t.value}function un(t){t.target.composing=!0}function dn(t){t.target.composing=!1,fn(t.target,"input")}function fn(t,e){var n=document.createEvent("HTMLEvents");n.initEvent(e,!0,!0),t.dispatchEvent(n)}function pn(t){return!t.componentInstance||t.data&&t.data.transition?t:pn(t.componentInstance._vnode)}function hn(t){var e=t&&t.componentOptions;return e&&e.Ctor.options.abstract?hn(ft(e.children)):t}function vn(t){var e={},n=t.$options;for(var i in n.propsData)e[i]=t[i];var r=n._parentListeners;for(var o in r)e[gr(o)]=r[o].fn;return e}function mn(t,e){return/\d-keep-alive$/.test(e.tag)?t("keep-alive"):null}function gn(t){for(;t=t.parent;)if(t.data.transition)return!0}function yn(t,e){return e.key===t.key&&e.tag===t.tag}function _n(t){t.elm._moveCb&&t.elm._moveCb(),t.elm._enterCb&&t.elm._enterCb()}function bn(t){t.data.newPos=t.elm.getBoundingClientRect()}function xn(t){var e=t.data.pos,n=t.data.newPos,i=e.left-n.left,r=e.top-n.top;if(i||r){t.data.moved=!0;var o=t.elm.style;o.transform=o.WebkitTransform="translate("+i+"px,"+r+"px)",o.transitionDuration="0s"}}function wn(t,e){var n=document.createElement("div");return n.innerHTML='<div a="'+t+'">',n.innerHTML.indexOf(e)>0}function Cn(t){return La=La||document.createElement("div"),La.innerHTML=t,La.textContent}function kn(t,e){return e&&(t=t.replace(As,"\n")),t.replace(Ts,"<").replace($s,">").replace(Es,"&").replace(Ns,'"')}function Sn(t,e){function n(e){d+=e,t=t.substring(e)}function i(){var e=t.match(Wa);if(e){var i={tagName:e[1],attrs:[],start:d};n(e[0].length);for(var r,o;!(r=t.match(Ja))&&(o=t.match(Ba));)n(o[0].length),i.attrs.push(o);if(r)return i.unarySlash=r[1],n(r[0].length),i.end=d,i}}function r(t){var n=t.tagName,i=t.unarySlash;c&&("p"===s&&Ma(n)&&o(s),Fa(n)&&s===n&&o(n));for(var r=u(n)||"html"===n&&"head"===s||!!i,a=t.attrs.length,d=new Array(a),f=0;f<a;f++){var p=t.attrs[f];Za&&p[0].indexOf('""')===-1&&(""===p[3]&&delete p[3],""===p[4]&&delete p[4],""===p[5]&&delete p[5]);var h=p[3]||p[4]||p[5]||"";d[f]={name:p[1],value:kn(h,e.shouldDecodeNewlines)}}r||(l.push({tag:n,lowerCasedTag:n.toLowerCase(),attrs:d}),s=n,i=""),e.start&&e.start(n,d,r,t.start,t.end)}function o(t,n,i){var r,o;if(null==n&&(n=d),null==i&&(i=d),t&&(o=t.toLowerCase()),t)for(r=l.length-1;r>=0&&l[r].lowerCasedTag!==o;r--);else r=0;if(r>=0){for(var a=l.length-1;a>=r;a--)e.end&&e.end(l[a].tag,n,i);l.length=r,s=r&&l[r-1].tag}else"br"===o?e.start&&e.start(t,[],!0,n,i):"p"===o&&(e.start&&e.start(t,[],!1,n,i),e.end&&e.end(t,n,i))}for(var a,s,l=[],c=e.expectHTML,u=e.isUnaryTag||Cr,d=0;t;){if(a=t,s&&ks(s)){var f=s.toLowerCase(),p=Ss[f]||(Ss[f]=new RegExp("([\\s\\S]*?)(</"+f+"[^>]*>)","i")),h=0,v=t.replace(p,function(t,n,i){return h=i.length,"script"!==f&&"style"!==f&&"noscript"!==f&&(n=n.replace(/<!--([\s\S]*?)-->/g,"$1").replace(/<!\[CDATA\[([\s\S]*?)]]>/g,"$1")),e.chars&&e.chars(n),""});d+=t.length-v.length,t=v,o(f,d-h,d)}else{var m=t.indexOf("<");if(0===m){if(Ya.test(t)){var g=t.indexOf("-->");if(g>=0){n(g+3);continue}}if(Ga.test(t)){var y=t.indexOf("]>");if(y>=0){n(y+2);continue}}var _=t.match(Xa);if(_){n(_[0].length);continue}var b=t.match(Ka);if(b){var x=d;n(b[0].length),o(b[1],x,d);continue}var w=i();if(w){r(w);continue}}var C=void 0,k=void 0,S=void 0;if(m>0){for(k=t.slice(m);!(Ka.test(k)||Wa.test(k)||Ya.test(k)||Ga.test(k)||(S=k.indexOf("<",1),S<0));)m+=S,k=t.slice(m);C=t.substring(0,m),n(m)}m<0&&(C=t,t=""),e.chars&&C&&e.chars(C)}if(t===a&&e.chars){e.chars(t);break}}o()}function Tn(t){function e(){(a||(a=[])).push(t.slice(h,r).trim()),h=r+1}var n,i,r,o,a,s=!1,l=!1,c=!1,u=!1,d=0,f=0,p=0,h=0;for(r=0;r<t.length;r++)if(i=n,n=t.charCodeAt(r),s)39===n&&92!==i&&(s=!1);else if(l)34===n&&92!==i&&(l=!1);else if(c)96===n&&92!==i&&(c=!1);else if(u)47===n&&92!==i&&(u=!1);else if(124!==n||124===t.charCodeAt(r+1)||124===t.charCodeAt(r-1)||d||f||p){switch(n){case 34:l=!0;break;case 39:s=!0;break;case 96:c=!0;break;case 40:p++;break;case 41:p--;break;case 91:f++;break;case 93:f--;break;case 123:d++;break;case 125:d--}if(47===n){for(var v=r-1,m=void 0;v>=0&&(m=t.charAt(v)," "===m);v--);m&&/[\w$]/.test(m)||(u=!0)}}else void 0===o?(h=r+1,o=t.slice(0,r).trim()):e();if(void 0===o?o=t.slice(0,r).trim():0!==h&&e(),a)for(r=0;r<a.length;r++)o=$n(o,a[r]);return o}function $n(t,e){var n=e.indexOf("(");if(n<0)return'_f("'+e+'")('+t+")";var i=e.slice(0,n),r=e.slice(n+1);return'_f("'+i+'")('+t+","+r}function An(t,e){var n=e?Ds(e):Os;if(n.test(t)){for(var i,r,o=[],a=n.lastIndex=0;i=n.exec(t);){r=i.index,r>a&&o.push(JSON.stringify(t.slice(a,r)));var s=Tn(i[1].trim());o.push("_s("+s+")"),a=r+i[0].length}return a<t.length&&o.push(JSON.stringify(t.slice(a))),o.join("+")}}function En(t){console.error("[Vue parser]: "+t)}function Nn(t,e){return t?t.map(function(t){return t[e]}).filter(function(t){return t}):[]}function On(t,e,n){(t.props||(t.props=[])).push({name:e,value:n})}function jn(t,e,n){(t.attrs||(t.attrs=[])).push({name:e,value:n})}function Dn(t,e,n,i,r,o){(t.directives||(t.directives=[])).push({name:e,rawName:n,value:i,arg:r,modifiers:o})}function In(t,e,n,i,r){i&&i.capture&&(delete i.capture,e="!"+e),i&&i.once&&(delete i.once,e="~"+e);var o;i&&i.native?(delete i.native,o=t.nativeEvents||(t.nativeEvents={})):o=t.events||(t.events={});var a={value:n,modifiers:i},s=o[e];Array.isArray(s)?r?s.unshift(a):s.push(a):s?o[e]=r?[a,s]:[s,a]:o[e]=a}function Ln(t,e,n){var i=Pn(t,":"+e)||Pn(t,"v-bind:"+e);if(null!=i)return Tn(i);if(n!==!1){var r=Pn(t,e);if(null!=r)return JSON.stringify(r)}}function Pn(t,e){var n;if(null!=(n=t.attrsMap[e]))for(var i=t.attrsList,r=0,o=i.length;r<o;r++)if(i[r].name===e){i.splice(r,1);break}return n}function Rn(t){if(ts=t,Qa=ts.length,ns=is=rs=0,t.indexOf("[")<0||t.lastIndexOf("]")<Qa-1)return{exp:t,idx:null};for(;!Mn();)es=Fn(),Hn(es)?Un(es):91===es&&qn(es);return{exp:t.substring(0,is),idx:t.substring(is+1,rs)}}function Fn(){return ts.charCodeAt(++ns)}function Mn(){return ns>=Qa}function Hn(t){return 34===t||39===t}function qn(t){var e=1;for(is=ns;!Mn();)if(t=Fn(),Hn(t))Un(t);else if(91===t&&e++,93===t&&e--,0===e){rs=ns;break}}function Un(t){for(var e=t;!Mn()&&(t=Fn(),t!==e););}function Bn(t,e){os=e.warn||En,as=e.getTagNamespace||Cr,ss=e.mustUseProp||Cr,ls=e.isPreTag||Cr,cs=Nn(e.modules,"preTransformNode"),us=Nn(e.modules,"transformNode"),ds=Nn(e.modules,"postTransformNode"),fs=e.delimiters;var n,i,r=[],o=e.preserveWhitespace!==!1,a=!1,s=!1,l=!1;return Sn(t,{expectHTML:e.expectHTML,isUnaryTag:e.isUnaryTag,shouldDecodeNewlines:e.shouldDecodeNewlines,start:function(o,c,u){function d(e){l||("slot"!==e.tag&&"template"!==e.tag||(l=!0,os("Cannot use <"+e.tag+"> as component root element because it may contain multiple nodes:\n"+t)),e.attrsMap.hasOwnProperty("v-for")&&(l=!0,os("Cannot use v-for on stateful component root element because it renders multiple elements:\n"+t)))}var f=i&&i.ns||as(o);Nr&&"svg"===f&&(c=si(c));var p={type:1,tag:o,attrsList:c,attrsMap:oi(c),parent:i,children:[]};f&&(p.ns=f),ai(p)&&!Lr()&&(p.forbidden=!0,os("Templates should only be responsible for mapping the state to the UI. Avoid placing tags with side-effects in your templates, such as <"+o+">, as they will not be parsed."));for(var h=0;h<cs.length;h++)cs[h](p,e);if(a||(Vn(p),p.pre&&(a=!0)),ls(p.tag)&&(s=!0),a)zn(p);else{Kn(p),Xn(p),Qn(p),Wn(p),p.plain=!p.key&&!c.length,Jn(p),ti(p),ei(p);for(var v=0;v<us.length;v++)us[v](p,e);ni(p)}if(n?r.length||(n.if&&(p.elseif||p.else)?(d(p),Zn(n,{exp:p.elseif,block:p})):l||(l=!0,os("Component template should contain exactly one root element:\n\n"+t+"\n\nIf you are using v-if on multiple elements, use v-else-if to chain them instead."))):(n=p,d(n)),i&&!p.forbidden)if(p.elseif||p.else)Yn(p,i);else if(p.slotScope){i.plain=!1;var m=p.slotTarget||"default";(i.scopedSlots||(i.scopedSlots={}))[m]=p}else i.children.push(p),p.parent=i;u||(i=p,r.push(p));for(var g=0;g<ds.length;g++)ds[g](p,e)},end:function(){var t=r[r.length-1],e=t.children[t.children.length-1];e&&3===e.type&&" "===e.text&&t.children.pop(),r.length-=1,i=r[r.length-1],t.pre&&(a=!1),ls(t.tag)&&(s=!1)},chars:function(e){if(!i)return void(l||e!==t||(l=!0,os("Component template requires a root element, rather than just text:\n\n"+t)));if(!Nr||"textarea"!==i.tag||i.attrsMap.placeholder!==e){var n=i.children;if(e=s||e.trim()?qs(e):o&&n.length?" ":""){var r;!a&&" "!==e&&(r=An(e,fs))?n.push({type:2,expression:r,text:e}):" "===e&&" "===n[n.length-1].text||i.children.push({type:3,text:e})}}}}),n}function Vn(t){null!=Pn(t,"v-pre")&&(t.pre=!0)}function zn(t){var e=t.attrsList.length;if(e)for(var n=t.attrs=new Array(e),i=0;i<e;i++)n[i]={name:t.attrsList[i].name,value:JSON.stringify(t.attrsList[i].value)};else t.pre||(t.plain=!0)}function Wn(t){var e=Ln(t,"key");e&&("template"===t.tag&&os("<template> cannot be keyed. Place the key on real elements instead."),t.key=e)}function Jn(t){var e=Ln(t,"ref");e&&(t.ref=e,t.refInFor=ii(t))}function Kn(t){var e;if(e=Pn(t,"v-for")){var n=e.match(Ls);if(!n)return void os("Invalid v-for expression: "+e);t.for=n[2].trim();var i=n[1].trim(),r=i.match(Ps);r?(t.alias=r[1].trim(),t.iterator1=r[2].trim(),r[3]&&(t.iterator2=r[3].trim())):t.alias=i}}function Xn(t){var e=Pn(t,"v-if");if(e)t.if=e,Zn(t,{exp:e,block:t});else{null!=Pn(t,"v-else")&&(t.else=!0);var n=Pn(t,"v-else-if");n&&(t.elseif=n)}}function Yn(t,e){var n=Gn(e.children);n&&n.if?Zn(n,{exp:t.elseif,block:t}):os("v-"+(t.elseif?'else-if="'+t.elseif+'"':"else")+" used on element <"+t.tag+"> without corresponding v-if.")}function Gn(t){for(var e=t.length;e--;){if(1===t[e].type)return t[e];" "!==t[e].text&&os('text "'+t[e].text.trim()+'" between v-if and v-else(-if) will be ignored.'),t.pop()}}function Zn(t,e){t.ifConditions||(t.ifConditions=[]),t.ifConditions.push(e)}function Qn(t){var e=Pn(t,"v-once");null!=e&&(t.once=!0)}function ti(t){if("slot"===t.tag)t.slotName=Ln(t,"name"),t.key&&os("`key` does not work on <slot> because slots are abstract outlets and can possibly expand into multiple elements. Use the key on a wrapping element instead.");else{var e=Ln(t,"slot");e&&(t.slotTarget='""'===e?'"default"':e),"template"===t.tag&&(t.slotScope=Pn(t,"scope"))}}function ei(t){var e;(e=Ln(t,"is"))&&(t.component=e),null!=Pn(t,"inline-template")&&(t.inlineTemplate=!0)}function ni(t){var e,n,i,r,o,a,s,l,c=t.attrsList;for(e=0,n=c.length;e<n;e++)if(i=r=c[e].name,o=c[e].value,Is.test(i))if(t.hasBindings=!0,s=ri(i),s&&(i=i.replace(Hs,"")),Rs.test(i))i=i.replace(Rs,""),o=Tn(o),l=!1,s&&(s.prop&&(l=!0,i=gr(i),"innerHtml"===i&&(i="innerHTML")),s.camel&&(i=gr(i))),l||ss(t.tag,t.attrsMap.type,i)?On(t,i,o):jn(t,i,o);else if(Fs.test(i))i=i.replace(Fs,""),In(t,i,o,s);else{i=i.replace(Is,"");var u=i.match(Ms);u&&(a=u[1])&&(i=i.slice(0,-(a.length+1))),Dn(t,i,r,o,a,s),"model"===i&&li(t,o)}else{var d=An(o,fs);d&&os(i+'="'+o+'": Interpolation inside attributes has been removed. Use v-bind or the colon shorthand instead. For example, instead of <div id="{{ val }}">, use <div :id="val">.'),jn(t,i,JSON.stringify(o))}}function ii(t){for(var e=t;e;){if(void 0!==e.for)return!0;e=e.parent}return!1}function ri(t){var e=t.match(Hs);if(e){var n={};return e.forEach(function(t){n[t.slice(1)]=!0}),n}}function oi(t){for(var e={},n=0,i=t.length;n<i;n++)e[t[n].name]&&!Nr&&os("duplicate attribute: "+t[n].name),e[t[n].name]=t[n].value;return e}function ai(t){return"style"===t.tag||"script"===t.tag&&(!t.attrsMap.type||"text/javascript"===t.attrsMap.type)}function si(t){for(var e=[],n=0;n<t.length;n++){var i=t[n];Us.test(i.name)||(i.name=i.name.replace(Bs,""),e.push(i))}return e}function li(t,e){for(var n=t;n;)n.for&&n.alias===e&&os("<"+t.tag+' v-model="'+e+'">: You are binding v-model directly to a v-for iteration alias. This will not be able to modify the v-for source array because writing to the alias is like modifying a function local variable. Consider using an array of objects and use v-model on an object property instead.'),n=n.parent}function ci(t,e){t&&(ps=Vs(e.staticKeys||""),hs=e.isReservedTag||Cr,di(t),fi(t,!1))}function ui(t){return i("type,tag,attrsList,attrsMap,plain,parent,children,attrs"+(t?","+t:""))}function di(t){if(t.static=hi(t),1===t.type){if(!hs(t.tag)&&"slot"!==t.tag&&null==t.attrsMap["inline-template"])return;for(var e=0,n=t.children.length;e<n;e++){var i=t.children[e];di(i),i.static||(t.static=!1)}}}function fi(t,e){if(1===t.type){if((t.static||t.once)&&(t.staticInFor=e),t.static&&t.children.length&&(1!==t.children.length||3!==t.children[0].type))return void(t.staticRoot=!0);if(t.staticRoot=!1,t.children)for(var n=0,i=t.children.length;n<i;n++)fi(t.children[n],e||!!t.for);t.ifConditions&&pi(t.ifConditions,e)}}function pi(t,e){for(var n=1,i=t.length;n<i;n++)fi(t[n].block,e)}function hi(t){return 2!==t.type&&(3===t.type||!(!t.pre&&(t.hasBindings||t.if||t.for||hr(t.tag)||!hs(t.tag)||vi(t)||!Object.keys(t).every(ps))))}function vi(t){for(;t.parent;){if(t=t.parent,"template"!==t.tag)return!1;if(t.for)return!0}return!1}function mi(t,e){var n=e?"nativeOn:{":"on:{";for(var i in t)n+='"'+i+'":'+gi(i,t[i])+",";return n.slice(0,-1)+"}"}function gi(t,e){if(e){if(Array.isArray(e))return"["+e.map(function(e){return gi(t,e)}).join(",")+"]";if(e.modifiers){var n="",i=[];for(var r in e.modifiers)Ks[r]?n+=Ks[r]:i.push(r);i.length&&(n=yi(i)+n);var o=Ws.test(e.value)?e.value+"($event)":e.value;return"function($event){"+n+o+"}"}return zs.test(e.value)||Ws.test(e.value)?e.value:"function($event){"+e.value+"}"}return"function(){}"}function yi(t){return"if("+t.map(_i).join("&&")+")return;"}function _i(t){var e=parseInt(t,10);if(e)return"$event.keyCode!=="+e;var n=Js[t];return"_k($event.keyCode,"+JSON.stringify(t)+(n?","+JSON.stringify(n):"")+")"}function bi(t,e){t.wrapData=function(n){return"_b("+n+",'"+t.tag+"',"+e.value+(e.modifiers&&e.modifiers.prop?",true":"")+")"}}function xi(t,e){var n=bs,i=bs=[],r=xs;xs=0,ws=e,vs=e.warn||En,ms=Nn(e.modules,"transformCode"),gs=Nn(e.modules,"genData"),ys=e.directives||{},_s=e.isReservedTag||Cr;var o=t?wi(t):'_c("div")';return bs=n,xs=r,{render:"with(this){return "+o+"}",staticRenderFns:i}}function wi(t){if(t.staticRoot&&!t.staticProcessed)return Ci(t);if(t.once&&!t.onceProcessed)return ki(t);if(t.for&&!t.forProcessed)return $i(t);if(t.if&&!t.ifProcessed)return Si(t);if("template"!==t.tag||t.slotTarget){if("slot"===t.tag)return Mi(t);var e;if(t.component)e=Hi(t.component,t);else{var n=t.plain?void 0:Ai(t),i=t.inlineTemplate?null:Di(t,!0);e="_c('"+t.tag+"'"+(n?","+n:"")+(i?","+i:"")+")"}for(var r=0;r<ms.length;r++)e=ms[r](t,e);return e}return Di(t)||"void 0"}function Ci(t){return t.staticProcessed=!0,bs.push("with(this){return "+wi(t)+"}"),"_m("+(bs.length-1)+(t.staticInFor?",true":"")+")"}function ki(t){if(t.onceProcessed=!0,t.if&&!t.ifProcessed)return Si(t);if(t.staticInFor){for(var e="",n=t.parent;n;){if(n.for){e=n.key;break}n=n.parent}return e?"_o("+wi(t)+","+xs++ +(e?","+e:"")+")":(vs("v-once can only be used inside v-for that is keyed. "),wi(t))}return Ci(t)}function Si(t){return t.ifProcessed=!0,Ti(t.ifConditions.slice())}function Ti(t){function e(t){return t.once?ki(t):wi(t)}if(!t.length)return"_e()";var n=t.shift();return n.exp?"("+n.exp+")?"+e(n.block)+":"+Ti(t):""+e(n.block)}function $i(t){var e=t.for,n=t.alias,i=t.iterator1?","+t.iterator1:"",r=t.iterator2?","+t.iterator2:"";return t.forProcessed=!0,"_l(("+e+"),function("+n+i+r+"){return "+wi(t)+"})"}function Ai(t){var e="{",n=Ei(t);n&&(e+=n+","),t.key&&(e+="key:"+t.key+","),t.ref&&(e+="ref:"+t.ref+","),t.refInFor&&(e+="refInFor:true,"),t.pre&&(e+="pre:true,"),t.component&&(e+='tag:"'+t.tag+'",');for(var i=0;i<gs.length;i++)e+=gs[i](t);if(t.attrs&&(e+="attrs:{"+qi(t.attrs)+"},"),t.props&&(e+="domProps:{"+qi(t.props)+"},"),t.events&&(e+=mi(t.events)+","),t.nativeEvents&&(e+=mi(t.nativeEvents,!0)+","),t.slotTarget&&(e+="slot:"+t.slotTarget+","),t.scopedSlots&&(e+=Oi(t.scopedSlots)+","),t.inlineTemplate){var r=Ni(t);r&&(e+=r+",")}return e=e.replace(/,$/,"")+"}",t.wrapData&&(e=t.wrapData(e)),e}function Ei(t){var e=t.directives;if(e){var n,i,r,o,a="directives:[",s=!1;for(n=0,i=e.length;n<i;n++){r=e[n],o=!0;var l=ys[r.name]||Xs[r.name];l&&(o=!!l(t,r,vs)),o&&(s=!0,a+='{name:"'+r.name+'",rawName:"'+r.rawName+'"'+(r.value?",value:("+r.value+"),expression:"+JSON.stringify(r.value):"")+(r.arg?',arg:"'+r.arg+'"':"")+(r.modifiers?",modifiers:"+JSON.stringify(r.modifiers):"")+"},")}return s?a.slice(0,-1)+"]":void 0}}function Ni(t){var e=t.children[0];if((t.children.length>1||1!==e.type)&&vs("Inline-template components must have exactly one child element."),1===e.type){var n=xi(e,ws);return"inlineTemplate:{render:function(){"+n.render+"},staticRenderFns:["+n.staticRenderFns.map(function(t){return"function(){"+t+"}"}).join(",")+"]}"}}function Oi(t){return"scopedSlots:{"+Object.keys(t).map(function(e){return ji(e,t[e])}).join(",")+"}"}function ji(t,e){return t+":function("+String(e.attrsMap.scope)+"){return "+("template"===e.tag?Di(e)||"void 0":wi(e))+"}"}function Di(t,e){var n=t.children;if(n.length){var i=n[0];if(1===n.length&&i.for&&"template"!==i.tag&&"slot"!==i.tag)return wi(i);var r=Ii(n);return"["+n.map(Ri).join(",")+"]"+(e&&r?","+r:"")}}function Ii(t){for(var e=0,n=0;n<t.length;n++){var i=t[n];if(1===i.type){if(Li(i)||i.ifConditions&&i.ifConditions.some(function(t){return Li(t.block)})){e=2;break}(Pi(i)||i.ifConditions&&i.ifConditions.some(function(t){return Pi(t.block)}))&&(e=1)}}return e}function Li(t){return void 0!==t.for||"template"===t.tag||"slot"===t.tag}function Pi(t){return!_s(t.tag)}function Ri(t){return 1===t.type?wi(t):Fi(t)}function Fi(t){return"_v("+(2===t.type?t.expression:Ui(JSON.stringify(t.text)))+")"}function Mi(t){var e=t.slotName||'"default"',n=Di(t),i="_t("+e+(n?","+n:""),r=t.attrs&&"{"+t.attrs.map(function(t){return gr(t.name)+":"+t.value}).join(",")+"}",o=t.attrsMap["v-bind"];return!r&&!o||n||(i+=",null"),r&&(i+=","+r),o&&(i+=(r?"":",null")+","+o),i+")"}function Hi(t,e){var n=e.inlineTemplate?null:Di(e,!0);return"_c("+t+","+Ai(e)+(n?","+n:"")+")"}function qi(t){for(var e="",n=0;n<t.length;n++){var i=t[n];e+='"'+i.name+'":'+Ui(i.value)+","}return e.slice(0,-1)}function Ui(t){return t.replace(/\u2028/g,"\\u2028").replace(/\u2029/g,"\\u2029")}function Bi(t,e){var n=Bn(t.trim(),e);ci(n,e);var i=xi(n,e);return{ast:n,render:i.render,staticRenderFns:i.staticRenderFns}}function Vi(t){var e=[];return t&&zi(t,e),e}function zi(t,e){if(1===t.type){for(var n in t.attrsMap)if(Is.test(n)){var i=t.attrsMap[n];i&&("v-for"===n?Wi(t,'v-for="'+i+'"',e):Ki(i,n+'="'+i+'"',e))}if(t.children)for(var r=0;r<t.children.length;r++)zi(t.children[r],e)}else 2===t.type&&Ki(t.expression,t.text,e)}function Wi(t,e,n){Ki(t.for||"",e,n),Ji(t.alias,"v-for alias",e,n),Ji(t.iterator1,"v-for iterator",e,n),Ji(t.iterator2,"v-for iterator",e,n)}function Ji(t,e,n,i){"string"!=typeof t||Gs.test(t)||i.push("- invalid "+e+' "'+t+'" in expression: '+n)}function Ki(t,e,n){try{new Function("return "+t)}catch(r){var i=t.replace(Zs,"").match(Ys);i?n.push('- avoid using JavaScript keyword as property name: "'+i[0]+'" in expression '+e):n.push("- invalid expression: "+e)}}function Xi(t,e){var n=e.warn||En,i=Pn(t,"class");if(i){var r=An(i,e.delimiters);r&&n('class="'+i+'": Interpolation inside attributes has been removed. Use v-bind or the colon shorthand instead. For example, instead of <div class="{{ val }}">, use <div :class="val">.')}i&&(t.staticClass=JSON.stringify(i));var o=Ln(t,"class",!1);o&&(t.classBinding=o)}function Yi(t){var e="";return t.staticClass&&(e+="staticClass:"+t.staticClass+","),t.classBinding&&(e+="class:"+t.classBinding+","),e}function Gi(t,e){var n=e.warn||En,i=Pn(t,"style");if(i){var r=An(i,e.delimiters);r&&n('style="'+i+'": Interpolation inside attributes has been removed. Use v-bind or the colon shorthand instead. For example, instead of <div style="{{ val }}">, use <div :style="val">.'),t.staticStyle=JSON.stringify(oa(i))}var o=Ln(t,"style",!1);o&&(t.styleBinding=o)}function Zi(t){var e="";return t.staticStyle&&(e+="staticStyle:"+t.staticStyle+","),t.styleBinding&&(e+="style:("+t.styleBinding+"),"),e}function Qi(t,e,n){Cs=n;var i=e.value,r=e.modifiers,o=t.tag,a=t.attrsMap.type,s=t.attrsMap["v-bind:type"]||t.attrsMap[":type"];return"input"===o&&s&&Cs('<input :type="'+s+'" v-model="'+i+'">:\nv-model does not support dynamic input types. Use v-if branches instead.'),"select"===o?ir(t,i,r):"input"===o&&"checkbox"===a?tr(t,i,r):"input"===o&&"radio"===a?er(t,i,r):nr(t,i,r),!0}function tr(t,e,n){null!=t.attrsMap.checked&&Cs("<"+t.tag+' v-model="'+e+"\" checked>:\ninline checked attributes will be ignored when using v-model. Declare initial values in the component's data option instead.");var i=n&&n.number,r=Ln(t,"value")||"null",o=Ln(t,"true-value")||"true",a=Ln(t,"false-value")||"false";On(t,"checked","Array.isArray("+e+")?_i("+e+","+r+")>-1"+("true"===o?":("+e+")":":_q("+e+","+o+")")),In(t,"click","var $$a="+e+",$$el=$event.target,$$c=$$el.checked?("+o+"):("+a+");if(Array.isArray($$a)){var $$v="+(i?"_n("+r+")":r)+",$$i=_i($$a,$$v);if($$c){$$i<0&&("+e+"=$$a.concat($$v))}else{$$i>-1&&("+e+"=$$a.slice(0,$$i).concat($$a.slice($$i+1)))}}else{"+e+"=$$c}",null,!0)}function er(t,e,n){null!=t.attrsMap.checked&&Cs("<"+t.tag+' v-model="'+e+"\" checked>:\ninline checked attributes will be ignored when using v-model. Declare initial values in the component's data option instead.");var i=n&&n.number,r=Ln(t,"value")||"null";r=i?"_n("+r+")":r,On(t,"checked","_q("+e+","+r+")"),In(t,"click",or(e,r),null,!0)}function nr(t,e,n){"input"===t.tag&&t.attrsMap.value&&Cs("<"+t.tag+' v-model="'+e+'" value="'+t.attrsMap.value+"\">:\ninline value attributes will be ignored when using v-model. Declare initial values in the component's data option instead."),"textarea"===t.tag&&t.children.length&&Cs('<textarea v-model="'+e+"\">:\ninline content inside <textarea> will be ignored when using v-model. Declare initial values in the component's data option instead.");var i=t.attrsMap.type,r=n||{},o=r.lazy,a=r.number,s=r.trim,l=o||Nr&&"range"===i?"change":"input",c=!o&&"range"!==i,u="input"===t.tag||"textarea"===t.tag,d=u?"$event.target.value"+(s?".trim()":""):s?"(typeof $event === 'string' ? $event.trim() : $event)":"$event";d=a||"number"===i?"_n("+d+")":d;var f=or(e,d);u&&c&&(f="if($event.target.composing)return;"+f),"file"===i&&Cs("<"+t.tag+' v-model="'+e+'" type="file">:\nFile inputs are read only. Use a v-on:change listener instead.'),On(t,"value",u?"_s("+e+")":"("+e+")"),In(t,l,f,null,!0),(s||a||"number"===i)&&In(t,"blur","$forceUpdate()")}function ir(t,e,n){t.children.some(rr);var i=n&&n.number,r='Array.prototype.filter.call($event.target.options,function(o){return o.selected}).map(function(o){var val = "_value" in o ? o._value : o.value;return '+(i?"_n(val)":"val")+"})"+(null==t.attrsMap.multiple?"[0]":""),o=or(e,r);In(t,"change",o,null,!0)}function rr(t){return 1===t.type&&"option"===t.tag&&null!=t.attrsMap.selected&&(Cs('<select v-model="'+t.parent.attrsMap["v-model"]+"\">:\ninline selected attributes on <option> will be ignored when using v-model. Declare initial values in the component's data option instead."),!0)}function or(t,e){var n=Rn(t);return null===n.idx?t+"="+e:"var $$exp = "+n.exp+", $$idx = "+n.idx+";if (!Array.isArray($$exp)){"+t+"="+e+"}else{$$exp.splice($$idx, 1, "+e+")}"}function ar(t,e){e.value&&On(t,"textContent","_s("+e.value+")")}function sr(t,e){e.value&&On(t,"innerHTML","_s("+e.value+")")}function lr(t,e){return e=e?u(u({},rl),e):rl,Bi(t,e)}function cr(t,e,n){var i=e&&e.warn||Mr;try{new Function("return 1")}catch(t){t.toString().match(/unsafe-eval|CSP/)&&i("It seems you are using the standalone build of Vue.js in an environment with Content Security Policy that prohibits unsafe-eval. The template compiler cannot work in this environment. Consider relaxing the policy to allow unsafe-eval or pre-compiling your templates into render functions.")}var r=e&&e.delimiters?String(e.delimiters)+t:t;if(il[r])return il[r];var o={},a=lr(t,e);o.render=ur(a.render);var s=a.staticRenderFns.length;o.staticRenderFns=new Array(s);for(var l=0;l<s;l++)o.staticRenderFns[l]=ur(a.staticRenderFns[l]);return(o.render===h||o.staticRenderFns.some(function(t){return t===h}))&&i("failed to compile template:\n\n"+t+"\n\n"+Vi(a.ast).join("\n")+"\n\n",n),il[r]=o}function ur(t){try{return new Function(t)}catch(t){return h}}function dr(t){
if(t.outerHTML)return t.outerHTML;var e=document.createElement("div");return e.appendChild(t.cloneNode(!0)),e.innerHTML}var fr,pr,hr=i("slot,component",!0),vr=Object.prototype.hasOwnProperty,mr=/-(\w)/g,gr=s(function(t){return t.replace(mr,function(t,e){return e?e.toUpperCase():""})}),yr=s(function(t){return t.charAt(0).toUpperCase()+t.slice(1)}),_r=/([^-])([A-Z])/g,br=s(function(t){return t.replace(_r,"$1-$2").replace(_r,"$1-$2").toLowerCase()}),xr=Object.prototype.toString,wr="[object Object]",Cr=function(){return!1},kr=function(t){return t},Sr={optionMergeStrategies:Object.create(null),silent:!1,devtools:!0,errorHandler:null,ignoredElements:[],keyCodes:Object.create(null),isReservedTag:Cr,isUnknownElement:Cr,getTagNamespace:h,parsePlatformTagName:kr,mustUseProp:Cr,_assetTypes:["component","directive","filter"],_lifecycleHooks:["beforeCreate","created","beforeMount","mounted","beforeUpdate","updated","beforeDestroy","destroyed","activated","deactivated"],_maxUpdateCount:100},Tr=/[^\w.$]/,$r="__proto__"in{},Ar="undefined"!=typeof window,Er=Ar&&window.navigator.userAgent.toLowerCase(),Nr=Er&&/msie|trident/.test(Er),Or=Er&&Er.indexOf("msie 9.0")>0,jr=Er&&Er.indexOf("edge/")>0,Dr=Er&&Er.indexOf("android")>0,Ir=Er&&/iphone|ipad|ipod|ios/.test(Er),Lr=function(){return void 0===fr&&(fr=!Ar&&"undefined"!=typeof e&&"server"===e.process.env.VUE_ENV),fr},Pr=Ar&&window.__VUE_DEVTOOLS_GLOBAL_HOOK__,Rr=function(){function t(){i=!1;var t=n.slice(0);n.length=0;for(var e=0;e<t.length;e++)t[e]()}var e,n=[],i=!1;if("undefined"!=typeof Promise&&x(Promise)){var r=Promise.resolve(),o=function(t){console.error(t)};e=function(){r.then(t).catch(o),Ir&&setTimeout(h)}}else if("undefined"==typeof MutationObserver||!x(MutationObserver)&&"[object MutationObserverConstructor]"!==MutationObserver.toString())e=function(){setTimeout(t,0)};else{var a=1,s=new MutationObserver(t),l=document.createTextNode(String(a));s.observe(l,{characterData:!0}),e=function(){a=(a+1)%2,l.data=String(a)}}return function(t,r){var o;if(n.push(function(){t&&t.call(r),o&&o(r)}),i||(i=!0,e()),!t&&"undefined"!=typeof Promise)return new Promise(function(t){o=t})}}();pr="undefined"!=typeof Set&&x(Set)?Set:function(){function t(){this.set=Object.create(null)}return t.prototype.has=function(t){return this.set[t]===!0},t.prototype.add=function(t){this.set[t]=!0},t.prototype.clear=function(){this.set=Object.create(null)},t}();var Fr,Mr=h,Hr="undefined"!=typeof console;Mr=function(t,e){Hr&&!Sr.silent&&console.error("[Vue warn]: "+t+" "+(e?qr(Fr(e)):""))},Fr=function(t){if(t.$root===t)return"root instance";var e=t._isVue?t.$options.name||t.$options._componentTag:t.name;return(e?"component <"+e+">":"anonymous component")+(t._isVue&&t.$options.__file?" at "+t.$options.__file:"")};var qr=function(t){return"anonymous component"===t&&(t+=' - use the "name" option for better debugging messages.'),"\n(found in "+t+")"},Ur=0,Br=function(){this.id=Ur++,this.subs=[]};Br.prototype.addSub=function(t){this.subs.push(t)},Br.prototype.removeSub=function(t){r(this.subs,t)},Br.prototype.depend=function(){Br.target&&Br.target.addDep(this)},Br.prototype.notify=function(){for(var t=this.subs.slice(),e=0,n=t.length;e<n;e++)t[e].update()},Br.target=null;var Vr=[],zr=Array.prototype,Wr=Object.create(zr);["push","pop","shift","unshift","splice","sort","reverse"].forEach(function(t){var e=zr[t];_(Wr,t,function(){for(var n=arguments,i=arguments.length,r=new Array(i);i--;)r[i]=n[i];var o,a=e.apply(this,r),s=this.__ob__;switch(t){case"push":o=r;break;case"unshift":o=r;break;case"splice":o=r.slice(2)}return o&&s.observeArray(o),s.dep.notify(),a})});var Jr=Object.getOwnPropertyNames(Wr),Kr={shouldConvert:!0,isSettingProps:!1},Xr=function(t){if(this.value=t,this.dep=new Br,this.vmCount=0,_(t,"__ob__",this),Array.isArray(t)){var e=$r?k:S;e(t,Wr,Jr),this.observeArray(t)}else this.walk(t)};Xr.prototype.walk=function(t){for(var e=Object.keys(t),n=0;n<e.length;n++)$(t,e[n],t[e[n]])},Xr.prototype.observeArray=function(t){for(var e=0,n=t.length;e<n;e++)T(t[e])};var Yr=Sr.optionMergeStrategies;Yr.el=Yr.propsData=function(t,e,n,i){return n||Mr('option "'+i+'" can only be used during instance creation with the `new` keyword.'),Zr(t,e)},Yr.data=function(t,e,n){return n?t||e?function(){var i="function"==typeof e?e.call(n):e,r="function"==typeof t?t.call(n):void 0;return i?O(i,r):r}:void 0:e?"function"!=typeof e?(Mr('The "data" option should be a function that returns a per-instance value in component definitions.',n),t):t?function(){return O(e.call(this),t.call(this))}:e:t},Sr._lifecycleHooks.forEach(function(t){Yr[t]=j}),Sr._assetTypes.forEach(function(t){Yr[t+"s"]=D}),Yr.watch=function(t,e){if(!e)return t;if(!t)return e;var n={};u(n,t);for(var i in e){var r=n[i],o=e[i];r&&!Array.isArray(r)&&(r=[r]),n[i]=r?r.concat(o):[o]}return n},Yr.props=Yr.methods=Yr.computed=function(t,e){if(!e)return t;if(!t)return e;var n=Object.create(null);return u(n,t),u(n,e),n};var Gr,Zr=function(t,e){return void 0===e?t:e},Qr=Object.freeze({defineReactive:$,_toString:t,toNumber:n,makeMap:i,isBuiltInTag:hr,remove:r,hasOwn:o,isPrimitive:a,cached:s,camelize:gr,capitalize:yr,hyphenate:br,bind:l,toArray:c,extend:u,isObject:d,isPlainObject:f,toObject:p,noop:h,no:Cr,identity:kr,genStaticKeys:v,looseEqual:m,looseIndexOf:g,isReserved:y,def:_,parsePath:b,hasProto:$r,inBrowser:Ar,UA:Er,isIE:Nr,isIE9:Or,isEdge:jr,isAndroid:Dr,isIOS:Ir,isServerRendering:Lr,devtools:Pr,nextTick:Rr,get _Set(){return pr},mergeOptions:R,resolveAsset:F,get warn(){return Mr},get formatComponentName(){return Fr},validateProp:M}),to=i("Infinity,undefined,NaN,isFinite,isNaN,parseFloat,parseInt,decodeURI,decodeURIComponent,encodeURI,encodeURIComponent,Math,Number,Date,Array,Object,Boolean,String,RegExp,Map,Set,JSON,Intl,require"),eo=function(t,e){Mr('Property or method "'+e+'" is not defined on the instance but referenced during render. Make sure to declare reactive data properties in the data option.',t)},no="undefined"!=typeof Proxy&&Proxy.toString().match(/native code/);if(no){var io=i("stop,prevent,self,ctrl,shift,alt,meta");Sr.keyCodes=new Proxy(Sr.keyCodes,{set:function(t,e,n){return io(e)?(Mr("Avoid overwriting built-in modifier in config.keyCodes: ."+e),!1):(t[e]=n,!0)}})}var ro={has:function t(e,n){var t=n in e,i=to(n)||"_"===n.charAt(0);return t||i||eo(e,n),t||!i}},oo={get:function(t,e){return"string"!=typeof e||e in t||eo(t,e),t[e]}};Gr=function(t){if(no){var e=t.$options,n=e.render&&e.render._withStripped?oo:ro;t._renderProxy=new Proxy(t,n)}else t._renderProxy=t};var ao=function(t,e,n,i,r,o,a){this.tag=t,this.data=e,this.children=n,this.text=i,this.elm=r,this.ns=void 0,this.context=o,this.functionalContext=void 0,this.key=e&&e.key,this.componentOptions=a,this.componentInstance=void 0,this.parent=void 0,this.raw=!1,this.isStatic=!1,this.isRootInsert=!0,this.isComment=!1,this.isCloned=!1,this.isOnce=!1},so={child:{}};so.child.get=function(){return this.componentInstance},Object.defineProperties(ao.prototype,so);var lo,co=function(){var t=new ao;return t.text="",t.isComment=!0,t},uo={init:G,prepatch:Z,insert:Q,destroy:tt},fo=Object.keys(uo),po=s(function(t){var e="~"===t.charAt(0);t=e?t.slice(1):t;var n="!"===t.charAt(0);return t=n?t.slice(1):t,{name:t,once:e,capture:n}}),ho=1,vo=2,mo=null,go=[],yo={},_o={},bo=!1,xo=!1,wo=0,Co=0,ko=function(t,e,n,i){this.vm=t,t._watchers.push(this),i?(this.deep=!!i.deep,this.user=!!i.user,this.lazy=!!i.lazy,this.sync=!!i.sync):this.deep=this.user=this.lazy=this.sync=!1,this.cb=n,this.id=++Co,this.active=!0,this.dirty=this.lazy,this.deps=[],this.newDeps=[],this.depIds=new pr,this.newDepIds=new pr,this.expression=e.toString(),"function"==typeof e?this.getter=e:(this.getter=b(e),this.getter||(this.getter=function(){},Mr('Failed watching path: "'+e+'" Watcher only accepts simple dot-delimited paths. For full control, use a function instead.',t))),this.value=this.lazy?void 0:this.get()};ko.prototype.get=function(){w(this);var t=this.getter.call(this.vm,this.vm);return this.deep&&Nt(t),C(),this.cleanupDeps(),t},ko.prototype.addDep=function(t){var e=t.id;this.newDepIds.has(e)||(this.newDepIds.add(e),this.newDeps.push(t),this.depIds.has(e)||t.addSub(this))},ko.prototype.cleanupDeps=function(){for(var t=this,e=this.deps.length;e--;){var n=t.deps[e];t.newDepIds.has(n.id)||n.removeSub(t)}var i=this.depIds;this.depIds=this.newDepIds,this.newDepIds=i,this.newDepIds.clear(),i=this.deps,this.deps=this.newDeps,this.newDeps=i,this.newDeps.length=0},ko.prototype.update=function(){this.lazy?this.dirty=!0:this.sync?this.run():Et(this)},ko.prototype.run=function(){if(this.active){var t=this.get();if(t!==this.value||d(t)||this.deep){var e=this.value;if(this.value=t,this.user)try{this.cb.call(this.vm,t,e)}catch(t){if(!Sr.errorHandler)throw Mr('Error in watcher "'+this.expression+'"',this.vm),t;Sr.errorHandler.call(null,t,this.vm)}else this.cb.call(this.vm,t,e)}}},ko.prototype.evaluate=function(){this.value=this.get(),this.dirty=!1},ko.prototype.depend=function(){for(var t=this,e=this.deps.length;e--;)t.deps[e].depend()},ko.prototype.teardown=function(){var t=this;if(this.active){this.vm._isBeingDestroyed||r(this.vm._watchers,this);for(var e=this.deps.length;e--;)t.deps[e].removeSub(t);this.active=!1}};var So=new pr,To={key:1,ref:1,slot:1},$o={enumerable:!0,configurable:!0,get:h,set:h},Ao=0;Ut(zt),Ht(zt),Ct(zt),St(zt),gt(zt);var Eo=[String,RegExp],No={name:"keep-alive",abstract:!0,props:{include:Eo,exclude:Eo},created:function(){this.cache=Object.create(null)},destroyed:function(){var t=this;for(var e in this.cache)Qt(t.cache[e])},watch:{include:function(t){Zt(this.cache,function(e){return Gt(t,e)})},exclude:function(t){Zt(this.cache,function(e){return!Gt(t,e)})}},render:function(){var t=ft(this.$slots.default),e=t&&t.componentOptions;if(e){var n=Yt(e);if(n&&(this.include&&!Gt(this.include,n)||this.exclude&&Gt(this.exclude,n)))return t;var i=null==t.key?e.Ctor.cid+(e.tag?"::"+e.tag:""):t.key;this.cache[i]?t.componentInstance=this.cache[i].componentInstance:this.cache[i]=t,t.data.keepAlive=!0}return t}},Oo={KeepAlive:No};te(zt),Object.defineProperty(zt.prototype,"$isServer",{get:Lr}),zt.version="2.1.10";var jo,Do,Io=i("input,textarea,option,select"),Lo=function(t,e,n){return"value"===n&&Io(t)&&"button"!==e||"selected"===n&&"option"===t||"checked"===n&&"input"===t||"muted"===n&&"video"===t},Po=i("contenteditable,draggable,spellcheck"),Ro=i("allowfullscreen,async,autofocus,autoplay,checked,compact,controls,declare,default,defaultchecked,defaultmuted,defaultselected,defer,disabled,enabled,formnovalidate,hidden,indeterminate,inert,ismap,itemscope,loop,multiple,muted,nohref,noresize,noshade,novalidate,nowrap,open,pauseonexit,readonly,required,reversed,scoped,seamless,selected,sortable,translate,truespeed,typemustmatch,visible"),Fo="http://www.w3.org/1999/xlink",Mo=function(t){return":"===t.charAt(5)&&"xlink"===t.slice(0,5)},Ho=function(t){return Mo(t)?t.slice(6,t.length):""},qo=function(t){return null==t||t===!1},Uo={svg:"http://www.w3.org/2000/svg",math:"http://www.w3.org/1998/Math/MathML"},Bo=i("html,body,base,head,link,meta,style,title,address,article,aside,footer,header,h1,h2,h3,h4,h5,h6,hgroup,nav,section,div,dd,dl,dt,figcaption,figure,hr,img,li,main,ol,p,pre,ul,a,b,abbr,bdi,bdo,br,cite,code,data,dfn,em,i,kbd,mark,q,rp,rt,rtc,ruby,s,samp,small,span,strong,sub,sup,time,u,var,wbr,area,audio,map,track,video,embed,object,param,source,canvas,script,noscript,del,ins,caption,col,colgroup,table,thead,tbody,td,th,tr,button,datalist,fieldset,form,input,label,legend,meter,optgroup,option,output,progress,select,textarea,details,dialog,menu,menuitem,summary,content,element,shadow,template"),Vo=i("svg,animate,circle,clippath,cursor,defs,desc,ellipse,filter,font-face,g,glyph,image,line,marker,mask,missing-glyph,path,pattern,polygon,polyline,rect,switch,symbol,text,textpath,tspan,use,view",!0),zo=function(t){return"pre"===t},Wo=function(t){return Bo(t)||Vo(t)},Jo=Object.create(null),Ko=Object.freeze({createElement:ce,createElementNS:ue,createTextNode:de,createComment:fe,insertBefore:pe,removeChild:he,appendChild:ve,parentNode:me,nextSibling:ge,tagName:ye,setTextContent:_e,setAttribute:be}),Xo={create:function(t,e){xe(e)},update:function(t,e){t.data.ref!==e.data.ref&&(xe(t,!0),xe(e))},destroy:function(t){xe(t,!0)}},Yo=new ao("",{},[]),Go=["create","activate","update","remove","destroy"],Zo={create:$e,update:$e,destroy:function(t){$e(t,Yo)}},Qo=Object.create(null),ta=[Xo,Zo],ea={create:je,update:je},na={create:Ie,update:Ie},ia={create:Re,update:Re},ra={create:Fe,update:Fe},oa=s(function(t){var e={},n=/;(?![^(]*\))/g,i=/:(.+)/;return t.split(n).forEach(function(t){if(t){var n=t.split(i);n.length>1&&(e[n[0].trim()]=n[1].trim())}}),e}),aa=/^--/,sa=/\s*!important$/,la=function(t,e,n){aa.test(e)?t.style.setProperty(e,n):sa.test(n)?t.style.setProperty(e,n.replace(sa,""),"important"):t.style[ua(e)]=n},ca=["Webkit","Moz","ms"],ua=s(function(t){if(Do=Do||document.createElement("div"),t=gr(t),"filter"!==t&&t in Do.style)return t;for(var e=t.charAt(0).toUpperCase()+t.slice(1),n=0;n<ca.length;n++){var i=ca[n]+e;if(i in Do.style)return i}}),da={create:ze,update:ze},fa=Ar&&!Or,pa="transition",ha="animation",va="transition",ma="transitionend",ga="animation",ya="animationend";fa&&(void 0===window.ontransitionend&&void 0!==window.onwebkittransitionend&&(va="WebkitTransition",ma="webkitTransitionEnd"),void 0===window.onanimationend&&void 0!==window.onwebkitanimationend&&(ga="WebkitAnimation",ya="webkitAnimationEnd"));var _a=Ar&&window.requestAnimationFrame?window.requestAnimationFrame.bind(window):setTimeout,ba=/\b(transform|all)(,|$)/,xa=s(function(t){return{enterClass:t+"-enter",leaveClass:t+"-leave",appearClass:t+"-enter",enterToClass:t+"-enter-to",leaveToClass:t+"-leave-to",appearToClass:t+"-enter-to",enterActiveClass:t+"-enter-active",leaveActiveClass:t+"-leave-active",appearActiveClass:t+"-enter-active"}}),wa=Ar?{create:an,activate:an,remove:function(t,e){t.data.show?e():nn(t,e)}}:{},Ca=[ea,na,ia,ra,da,wa],ka=Ca.concat(ta),Sa=Te({nodeOps:Ko,modules:ka}),Ta=/^input|select|textarea|vue-component-[0-9]+(-[0-9a-zA-Z_-]*)?$/;Or&&document.addEventListener("selectionchange",function(){var t=document.activeElement;t&&t.vmodel&&fn(t,"input")});var $a={inserted:function(t,e,n){if(Ta.test(n.tag)||Mr("v-model is not supported on element type: <"+n.tag+">. If you are working with contenteditable, it's recommended to wrap a library dedicated for that purpose inside a custom component.",n.context),"select"===n.tag){var i=function(){sn(t,e,n.context)};i(),(Nr||jr)&&setTimeout(i,0)}else"textarea"!==n.tag&&"text"!==t.type||(t._vModifiers=e.modifiers,e.modifiers.lazy||(Dr||(t.addEventListener("compositionstart",un),t.addEventListener("compositionend",dn)),Or&&(t.vmodel=!0)))},componentUpdated:function(t,e,n){if("select"===n.tag){sn(t,e,n.context);var i=t.multiple?e.value.some(function(e){return ln(e,t.options)}):e.value!==e.oldValue&&ln(e.value,t.options);i&&fn(t,"change")}}},Aa={bind:function(t,e,n){var i=e.value;n=pn(n);var r=n.data&&n.data.transition,o=t.__vOriginalDisplay="none"===t.style.display?"":t.style.display;i&&r&&!Or?(n.data.show=!0,en(n,function(){t.style.display=o})):t.style.display=i?o:"none"},update:function(t,e,n){var i=e.value,r=e.oldValue;if(i!==r){n=pn(n);var o=n.data&&n.data.transition;o&&!Or?(n.data.show=!0,i?en(n,function(){t.style.display=t.__vOriginalDisplay}):nn(n,function(){t.style.display="none"})):t.style.display=i?t.__vOriginalDisplay:"none"}},unbind:function(t,e,n,i,r){r||(t.style.display=t.__vOriginalDisplay)}},Ea={model:$a,show:Aa},Na={name:String,appear:Boolean,css:Boolean,mode:String,type:String,enterClass:String,leaveClass:String,enterToClass:String,leaveToClass:String,enterActiveClass:String,leaveActiveClass:String,appearClass:String,appearActiveClass:String,appearToClass:String},Oa={name:"transition",props:Na,abstract:!0,render:function(t){var e=this,n=this.$slots.default;if(n&&(n=n.filter(function(t){return t.tag}),n.length)){n.length>1&&Mr("<transition> can only be used on a single element. Use <transition-group> for lists.",this.$parent);var i=this.mode;i&&"in-out"!==i&&"out-in"!==i&&Mr("invalid <transition> mode: "+i,this.$parent);var r=n[0];if(gn(this.$vnode))return r;var o=hn(r);if(!o)return r;if(this._leaving)return mn(t,r);var s="__transition-"+this._uid+"-",l=o.key=null==o.key?s+o.tag:a(o.key)?0===String(o.key).indexOf(s)?o.key:s+o.key:o.key,c=(o.data||(o.data={})).transition=vn(this),d=this._vnode,f=hn(d);if(o.data.directives&&o.data.directives.some(function(t){return"show"===t.name})&&(o.data.show=!0),f&&f.data&&!yn(o,f)){var p=f&&(f.data.transition=u({},c));if("out-in"===i)return this._leaving=!0,at(p,"afterLeave",function(){e._leaving=!1,e.$forceUpdate()},l),mn(t,r);if("in-out"===i){var h,v=function(){h()};at(c,"afterEnter",v,l),at(c,"enterCancelled",v,l),at(p,"delayLeave",function(t){h=t},l)}}return r}}},ja=u({tag:String,moveClass:String},Na);delete ja.mode;var Da={props:ja,render:function(t){for(var e=this.tag||this.$vnode.data.tag||"span",n=Object.create(null),i=this.prevChildren=this.children,r=this.$slots.default||[],o=this.children=[],a=vn(this),s=0;s<r.length;s++){var l=r[s];if(l.tag)if(null!=l.key&&0!==String(l.key).indexOf("__vlist"))o.push(l),n[l.key]=l,(l.data||(l.data={})).transition=a;else{var c=l.componentOptions,u=c?c.Ctor.options.name||c.tag:l.tag;Mr("<transition-group> children must be keyed: <"+u+">")}}if(i){for(var d=[],f=[],p=0;p<i.length;p++){var h=i[p];h.data.transition=a,h.data.pos=h.elm.getBoundingClientRect(),n[h.key]?d.push(h):f.push(h)}this.kept=t(e,null,d),this.removed=f}return t(e,null,o)},beforeUpdate:function(){this.__patch__(this._vnode,this.kept,!1,!0),this._vnode=this.kept},updated:function(){var t=this.prevChildren,e=this.moveClass||(this.name||"v")+"-move";t.length&&this.hasMove(t[0].elm,e)&&(t.forEach(_n),t.forEach(bn),t.forEach(xn),document.body.offsetHeight,t.forEach(function(t){if(t.data.moved){var n=t.elm,i=n.style;Xe(n,e),i.transform=i.WebkitTransform=i.transitionDuration="",n.addEventListener(ma,n._moveCb=function t(i){i&&!/transform$/.test(i.propertyName)||(n.removeEventListener(ma,t),n._moveCb=null,Ye(n,e))})}}))},methods:{hasMove:function(t,e){if(!fa)return!1;if(null!=this._hasMove)return this._hasMove;Xe(t,e);var n=Ze(t);return Ye(t,e),this._hasMove=n.hasTransform}}},Ia={Transition:Oa,TransitionGroup:Da};zt.config.isUnknownElement=se,zt.config.isReservedTag=Wo,zt.config.getTagNamespace=ae,zt.config.mustUseProp=Lo,u(zt.options.directives,Ea),u(zt.options.components,Ia),zt.prototype.__patch__=Ar?Sa:h,zt.prototype.$mount=function(t,e){return t=t&&Ar?le(t):void 0,this._mount(t,e)},Ar&&"undefined"!=typeof console&&console[console.info?"info":"log"]("You are running Vue in development mode.\nMake sure to turn on production mode when deploying for production.\nSee more tips at https://vuejs.org/guide/deployment.html"),setTimeout(function(){Sr.devtools&&(Pr?Pr.emit("init",zt):Ar&&!jr&&/Chrome\/\d+/.test(window.navigator.userAgent)&&console[console.info?"info":"log"]("Download the Vue Devtools extension for a better development experience:\nhttps://github.com/vuejs/vue-devtools"))},0);var La,Pa=!!Ar&&wn("\n","&#10;"),Ra=i("area,base,br,col,embed,frame,hr,img,input,isindex,keygen,link,meta,param,source,track,wbr",!0),Fa=i("colgroup,dd,dt,li,options,p,td,tfoot,th,thead,tr,source",!0),Ma=i("address,article,aside,base,blockquote,body,caption,col,colgroup,dd,details,dialog,div,dl,dt,fieldset,figcaption,figure,footer,form,h1,h2,h3,h4,h5,h6,head,header,hgroup,hr,html,legend,li,menuitem,meta,optgroup,option,param,rp,rt,source,style,summary,tbody,td,tfoot,th,thead,title,tr,track",!0),Ha=/([^\s"'<>\/=]+)/,qa=/(?:=)/,Ua=[/"([^"]*)"+/.source,/'([^']*)'+/.source,/([^\s"'=<>`]+)/.source],Ba=new RegExp("^\\s*"+Ha.source+"(?:\\s*("+qa.source+")\\s*(?:"+Ua.join("|")+"))?"),Va="[a-zA-Z_][\\w\\-\\.]*",za="((?:"+Va+"\\:)?"+Va+")",Wa=new RegExp("^<"+za),Ja=/^\s*(\/?)>/,Ka=new RegExp("^<\\/"+za+"[^>]*>"),Xa=/^<!DOCTYPE [^>]+>/i,Ya=/^<!--/,Ga=/^<!\[/,Za=!1;"x".replace(/x(.)?/g,function(t,e){Za=""===e});var Qa,ts,es,ns,is,rs,os,as,ss,ls,cs,us,ds,fs,ps,hs,vs,ms,gs,ys,_s,bs,xs,ws,Cs,ks=i("script,style",!0),Ss={},Ts=/&lt;/g,$s=/&gt;/g,As=/&#10;/g,Es=/&amp;/g,Ns=/&quot;/g,Os=/\{\{((?:.|\n)+?)\}\}/g,js=/[-.*+?^${}()|[\]\/\\]/g,Ds=s(function(t){var e=t[0].replace(js,"\\$&"),n=t[1].replace(js,"\\$&");return new RegExp(e+"((?:.|\\n)+?)"+n,"g")}),Is=/^v-|^@|^:/,Ls=/(.*?)\s+(?:in|of)\s+(.*)/,Ps=/\((\{[^}]*\}|[^,]*),([^,]*)(?:,([^,]*))?\)/,Rs=/^:|^v-bind:/,Fs=/^@|^v-on:/,Ms=/:(.*)$/,Hs=/\.[^.]+/g,qs=s(Cn),Us=/^xmlns:NS\d+/,Bs=/^NS\d+:/,Vs=s(ui),zs=/^\s*([\w$_]+|\([^)]*?\))\s*=>|^function\s*\(/,Ws=/^\s*[A-Za-z_$][\w$]*(?:\.[A-Za-z_$][\w$]*|\['.*?']|\[".*?"]|\[\d+]|\[[A-Za-z_$][\w$]*])*\s*$/,Js={esc:27,tab:9,enter:13,space:32,up:38,left:37,right:39,down:40,delete:[8,46]},Ks={stop:"$event.stopPropagation();",prevent:"$event.preventDefault();",self:"if($event.target !== $event.currentTarget)return;",ctrl:"if(!$event.ctrlKey)return;",shift:"if(!$event.shiftKey)return;",alt:"if(!$event.altKey)return;",meta:"if(!$event.metaKey)return;"},Xs={bind:bi,cloak:h},Ys=new RegExp("\\b"+"do,if,for,let,new,try,var,case,else,with,await,break,catch,class,const,super,throw,while,yield,delete,export,import,return,switch,default,extends,finally,continue,debugger,function,arguments".split(",").join("\\b|\\b")+"\\b"),Gs=/[A-Za-z_$][\w$]*/,Zs=/'(?:[^'\\]|\\.)*'|"(?:[^"\\]|\\.)*"|`(?:[^`\\]|\\.)*\$\{|\}(?:[^`\\]|\\.)*`|`(?:[^`\\]|\\.)*`/g,Qs={staticKeys:["staticClass"],transformNode:Xi,genData:Yi},tl={staticKeys:["staticStyle"],transformNode:Gi,genData:Zi},el=[Qs,tl],nl={model:Qi,text:ar,html:sr},il=Object.create(null),rl={expectHTML:!0,modules:el,staticKeys:v(el),directives:nl,isReservedTag:Wo,isUnaryTag:Ra,mustUseProp:Lo,getTagNamespace:ae,isPreTag:zo},ol=s(function(t){var e=le(t);return e&&e.innerHTML}),al=zt.prototype.$mount;return zt.prototype.$mount=function(t,e){if(t=t&&le(t),t===document.body||t===document.documentElement)return Mr("Do not mount Vue to <html> or <body> - mount to normal elements instead."),this;var n=this.$options;if(!n.render){var i=n.template;if(i)if("string"==typeof i)"#"===i.charAt(0)&&(i=ol(i),i||Mr("Template element not found or is empty: "+n.template,this));else{if(!i.nodeType)return Mr("invalid template option:"+i,this),this;i=i.innerHTML}else t&&(i=dr(t));if(i){var r=cr(i,{warn:Mr,shouldDecodeNewlines:Pa,delimiters:n.delimiters},this),o=r.render,a=r.staticRenderFns;n.render=o,n.staticRenderFns=a}}return al.call(this,t,e)},zt.compile=cr,zt})}).call(e,n(4))},function(t,e){var n;n=function(){return this}();try{n=n||Function("return this")()||(0,eval)("this")}catch(t){"object"==typeof window&&(n=window)}t.exports=n},function(t,e,n){"use strict";function i(t){return t&&t.__esModule?t:{default:t}}function r(t){r.installed||t.component("tinymce",a.default)}Object.defineProperty(e,"__esModule",{value:!0});var o=n(0),a=i(o);e.default=r}])})},function(t,e,n){"use strict";(function(e){/*!
 * Vue.js v2.1.10
 * (c) 2014-2017 Evan You
 * Released under the MIT License.
 */
function n(t){return null==t?"":"object"==typeof t?JSON.stringify(t,null,2):String(t)}function i(t){var e=parseFloat(t);return isNaN(e)?t:e}function r(t,e){for(var n=Object.create(null),i=t.split(","),r=0;r<i.length;r++)n[i[r]]=!0;return e?function(t){return n[t.toLowerCase()]}:function(t){return n[t]}}function o(t,e){if(t.length){var n=t.indexOf(e);if(n>-1)return t.splice(n,1)}}function a(t,e){return ar.call(t,e)}function s(t){return"string"==typeof t||"number"==typeof t}function l(t){var e=Object.create(null);return function(n){var i=e[n];return i||(e[n]=t(n))}}function c(t,e){function n(n){var i=arguments.length;return i?i>1?t.apply(e,arguments):t.call(e,n):t.call(e)}return n._length=t.length,n}function u(t,e){e=e||0;for(var n=t.length-e,i=new Array(n);n--;)i[n]=t[n+e];return i}function d(t,e){for(var n in e)t[n]=e[n];return t}function f(t){return null!==t&&"object"==typeof t}function p(t){return fr.call(t)===pr}function h(t){for(var e={},n=0;n<t.length;n++)t[n]&&d(e,t[n]);return e}function v(){}function m(t){return t.reduce(function(t,e){return t.concat(e.staticKeys||[])},[]).join(",")}function g(t,e){var n=f(t),i=f(e);return n&&i?JSON.stringify(t)===JSON.stringify(e):!n&&!i&&String(t)===String(e)}function y(t,e){for(var n=0;n<t.length;n++)if(g(t[n],e))return n;return-1}function _(t){var e=(t+"").charCodeAt(0);return 36===e||95===e}function b(t,e,n,i){Object.defineProperty(t,e,{value:n,enumerable:!!i,writable:!0,configurable:!0})}function x(t){if(!gr.test(t)){var e=t.split(".");return function(t){for(var n=0;n<e.length;n++){if(!t)return;t=t[e[n]]}return t}}}function w(t){return/native code/.test(t.toString())}function C(t){jr.target&&Dr.push(jr.target),jr.target=t}function k(){jr.target=Dr.pop()}function S(t,e){t.__proto__=e}function T(t,e,n){for(var i=0,r=n.length;i<r;i++){var o=n[i];b(t,o,e[o])}}function $(t,e){if(f(t)){var n;return a(t,"__ob__")&&t.__ob__ instanceof Fr?n=t.__ob__:Rr.shouldConvert&&!Tr()&&(Array.isArray(t)||p(t))&&Object.isExtensible(t)&&!t._isVue&&(n=new Fr(t)),e&&n&&n.vmCount++,n}}function A(t,e,n,i){var r=new jr,o=Object.getOwnPropertyDescriptor(t,e);if(!o||o.configurable!==!1){var a=o&&o.get,s=o&&o.set,l=$(n);Object.defineProperty(t,e,{enumerable:!0,configurable:!0,get:function(){var e=a?a.call(t):n;return jr.target&&(r.depend(),l&&l.dep.depend(),Array.isArray(e)&&O(e)),e},set:function(e){var i=a?a.call(t):n;e===i||e!==e&&i!==i||(s?s.call(t,e):n=e,l=$(e),r.notify())}})}}function E(t,e,n){if(Array.isArray(t))return t.length=Math.max(t.length,e),t.splice(e,1,n),n;if(a(t,e))return void(t[e]=n);var i=t.__ob__;if(!(t._isVue||i&&i.vmCount))return i?(A(i.value,e,n),i.dep.notify(),n):void(t[e]=n)}function N(t,e){var n=t.__ob__;t._isVue||n&&n.vmCount||a(t,e)&&(delete t[e],n&&n.dep.notify())}function O(t){for(var e=void 0,n=0,i=t.length;n<i;n++)e=t[n],e&&e.__ob__&&e.__ob__.dep.depend(),Array.isArray(e)&&O(e)}function j(t,e){if(!e)return t;for(var n,i,r,o=Object.keys(e),s=0;s<o.length;s++)n=o[s],i=t[n],r=e[n],a(t,n)?p(i)&&p(r)&&j(i,r):E(t,n,r);return t}function D(t,e){return e?t?t.concat(e):Array.isArray(e)?e:[e]:t}function I(t,e){var n=Object.create(t||null);return e?d(n,e):n}function L(t){var e=t.props;if(e){var n,i,r,o={};if(Array.isArray(e))for(n=e.length;n--;)i=e[n],"string"==typeof i&&(r=lr(i),o[r]={type:null});else if(p(e))for(var a in e)i=e[a],r=lr(a),o[r]=p(i)?i:{type:i};t.props=o}}function P(t){var e=t.directives;if(e)for(var n in e){var i=e[n];"function"==typeof i&&(e[n]={bind:i,update:i})}}function R(t,e,n){function i(i){var r=Mr[i]||Hr;u[i]=r(t[i],e[i],n,i)}L(e),P(e);var r=e.extends;if(r&&(t="function"==typeof r?R(t,r.options,n):R(t,r,n)),e.mixins)for(var o=0,s=e.mixins.length;o<s;o++){var l=e.mixins[o];l.prototype instanceof Bt&&(l=l.options),t=R(t,l,n)}var c,u={};for(c in t)i(c);for(c in e)a(t,c)||i(c);return u}function F(t,e,n,i){if("string"==typeof n){var r=t[e];if(a(r,n))return r[n];var o=lr(n);if(a(r,o))return r[o];var s=cr(o);if(a(r,s))return r[s];var l=r[n]||r[o]||r[s];return l}}function M(t,e,n,i){var r=e[t],o=!a(n,t),s=n[t];if(U(Boolean,r.type)&&(o&&!a(r,"default")?s=!1:U(String,r.type)||""!==s&&s!==dr(t)||(s=!0)),void 0===s){s=H(i,r,t);var l=Rr.shouldConvert;Rr.shouldConvert=!0,$(s),Rr.shouldConvert=l}return s}function H(t,e,n){if(a(e,"default")){var i=e.default;return f(i),t&&t.$options.propsData&&void 0===t.$options.propsData[n]&&void 0!==t[n]?t[n]:"function"==typeof i&&e.type!==Function?i.call(t):i}}function q(t){var e=t&&t.toString().match(/^\s*function (\w+)/);return e&&e[1]}function U(t,e){if(!Array.isArray(e))return q(e)===q(t);for(var n=0,i=e.length;n<i;n++)if(q(e[n])===q(t))return!0;return!1}function B(t){return new Ur(void 0,void 0,void 0,String(t))}function V(t){var e=new Ur(t.tag,t.data,t.children,t.text,t.elm,t.context,t.componentOptions);return e.ns=t.ns,e.isStatic=t.isStatic,e.key=t.key,e.isCloned=!0,e}function z(t){for(var e=new Array(t.length),n=0;n<t.length;n++)e[n]=V(t[n]);return e}function W(t,e,n,i,r){if(t){var o=n.$options._base;if(f(t)&&(t=o.extend(t)),"function"==typeof t){if(!t.cid)if(t.resolved)t=t.resolved;else if(t=Q(t,o,function(){n.$forceUpdate()}),!t)return;Ut(t),e=e||{};var a=tt(e,t);if(t.options.functional)return J(t,a,e,n,i);var s=e.on;e.on=e.nativeOn,t.options.abstract&&(e={}),nt(e);var l=t.options.name||r,c=new Ur("vue-component-"+t.cid+(l?"-"+l:""),e,void 0,void 0,void 0,n,{Ctor:t,propsData:a,listeners:s,tag:r,children:i});return c}}}function J(t,e,n,i,r){var o={},a=t.options.props;if(a)for(var s in a)o[s]=M(s,a,e);var l=Object.create(i),c=function(t,e,n,i){return dt(l,t,e,n,i,!0)},u=t.options.render.call(null,c,{props:o,data:n,parent:i,children:r,slots:function(){return mt(r,i)}});return u instanceof Ur&&(u.functionalContext=i,n.slot&&((u.data||(u.data={})).slot=n.slot)),u}function K(t,e,n,i){var r=t.componentOptions,o={_isComponent:!0,parent:e,propsData:r.propsData,_componentTag:r.tag,_parentVnode:t,_parentListeners:r.listeners,_renderChildren:r.children,_parentElm:n||null,_refElm:i||null},a=t.data.inlineTemplate;return a&&(o.render=a.render,o.staticRenderFns=a.staticRenderFns),new r.Ctor(o)}function X(t,e,n,i){if(!t.componentInstance||t.componentInstance._isDestroyed){var r=t.componentInstance=K(t,Gr,n,i);r.$mount(e?t.elm:void 0,e)}else if(t.data.keepAlive){var o=t;Y(o,o)}}function Y(t,e){var n=e.componentOptions,i=e.componentInstance=t.componentInstance;i._updateFromParent(n.propsData,n.listeners,e,n.children)}function G(t){t.componentInstance._isMounted||(t.componentInstance._isMounted=!0,kt(t.componentInstance,"mounted")),t.data.keepAlive&&(t.componentInstance._inactive=!1,kt(t.componentInstance,"activated"))}function Z(t){t.componentInstance._isDestroyed||(t.data.keepAlive?(t.componentInstance._inactive=!0,kt(t.componentInstance,"deactivated")):t.componentInstance.$destroy())}function Q(t,e,n){if(!t.requested){t.requested=!0;var i=t.pendingCallbacks=[n],r=!0,o=function(n){if(f(n)&&(n=e.extend(n)),t.resolved=n,!r)for(var o=0,a=i.length;o<a;o++)i[o](n)},a=function(t){},s=t(o,a);return s&&"function"==typeof s.then&&!t.resolved&&s.then(o,a),r=!1,t.resolved}t.pendingCallbacks.push(n)}function tt(t,e){var n=e.options.props;if(n){var i={},r=t.attrs,o=t.props,a=t.domProps;if(r||o||a)for(var s in n){var l=dr(s);et(i,o,s,l,!0)||et(i,r,s,l)||et(i,a,s,l)}return i}}function et(t,e,n,i,r){if(e){if(a(e,n))return t[n]=e[n],r||delete e[n],!0;if(a(e,i))return t[n]=e[i],r||delete e[i],!0}return!1}function nt(t){t.hook||(t.hook={});for(var e=0;e<Jr.length;e++){var n=Jr[e],i=t.hook[n],r=Wr[n];t.hook[n]=i?it(r,i):r}}function it(t,e){return function(n,i,r,o){t(n,i,r,o),e(n,i,r,o)}}function rt(t,e,n,i){i+=e;var r=t.__injected||(t.__injected={});if(!r[i]){r[i]=!0;var o=t[e];o?t[e]=function(){o.apply(this,arguments),n.apply(this,arguments)}:t[e]=n}}function ot(t){var e={fn:t,invoker:function(){var t=arguments,n=e.fn;if(Array.isArray(n))for(var i=0;i<n.length;i++)n[i].apply(null,t);else n.apply(null,arguments)}};return e}function at(t,e,n,i,r){var o,a,s,l;for(o in t)a=t[o],s=e[o],l=Kr(o),a&&(s?a!==s&&(s.fn=a,t[o]=s):(a.invoker||(a=t[o]=ot(a)),n(l.name,a.invoker,l.once,l.capture)));for(o in e)t[o]||(l=Kr(o),i(l.name,e[o].invoker,l.capture))}function st(t){for(var e=0;e<t.length;e++)if(Array.isArray(t[e]))return Array.prototype.concat.apply([],t);return t}function lt(t){return s(t)?[B(t)]:Array.isArray(t)?ct(t):void 0}function ct(t,e){var n,i,r,o=[];for(n=0;n<t.length;n++)i=t[n],null!=i&&"boolean"!=typeof i&&(r=o[o.length-1],Array.isArray(i)?o.push.apply(o,ct(i,(e||"")+"_"+n)):s(i)?r&&r.text?r.text+=String(i):""!==i&&o.push(B(i)):i.text&&r&&r.text?o[o.length-1]=B(r.text+i.text):(i.tag&&null==i.key&&null!=e&&(i.key="__vlist"+e+"_"+n+"__"),o.push(i)));return o}function ut(t){return t&&t.filter(function(t){return t&&t.componentOptions})[0]}function dt(t,e,n,i,r,o){return(Array.isArray(n)||s(n))&&(r=i,i=n,n=void 0),o&&(r=Yr),ft(t,e,n,i,r)}function ft(t,e,n,i,r){if(n&&n.__ob__)return zr();if(!e)return zr();Array.isArray(i)&&"function"==typeof i[0]&&(n=n||{},n.scopedSlots={default:i[0]},i.length=0),r===Yr?i=lt(i):r===Xr&&(i=st(i));var o,a;if("string"==typeof e){var s;a=mr.getTagNamespace(e),o=mr.isReservedTag(e)?new Ur(mr.parsePlatformTagName(e),n,i,void 0,void 0,t):(s=F(t.$options,"components",e))?W(s,n,t,i,e):new Ur(e,n,i,void 0,void 0,t)}else o=W(e,n,t,i);return o?(a&&pt(o,a),o):zr()}function pt(t,e){if(t.ns=e,"foreignObject"!==t.tag&&t.children)for(var n=0,i=t.children.length;n<i;n++){var r=t.children[n];r.tag&&!r.ns&&pt(r,e)}}function ht(t){t.$vnode=null,t._vnode=null,t._staticTrees=null;var e=t.$options._parentVnode,n=e&&e.context;t.$slots=mt(t.$options._renderChildren,n),t.$scopedSlots={},t._c=function(e,n,i,r){return dt(t,e,n,i,r,!1)},t.$createElement=function(e,n,i,r){return dt(t,e,n,i,r,!0)}}function vt(t){function e(t,e,n){if(Array.isArray(t))for(var i=0;i<t.length;i++)t[i]&&"string"!=typeof t[i]&&r(t[i],e+"_"+i,n);else r(t,e,n)}function r(t,e,n){t.isStatic=!0,t.key=e,t.isOnce=n}t.prototype.$nextTick=function(t){return Ar(t,this)},t.prototype._render=function(){var t=this,e=t.$options,n=e.render,i=e.staticRenderFns,r=e._parentVnode;if(t._isMounted)for(var o in t.$slots)t.$slots[o]=z(t.$slots[o]);r&&r.data.scopedSlots&&(t.$scopedSlots=r.data.scopedSlots),i&&!t._staticTrees&&(t._staticTrees=[]),t.$vnode=r;var a;try{a=n.call(t._renderProxy,t.$createElement)}catch(e){if(!mr.errorHandler)throw e;mr.errorHandler.call(null,e,t),a=t._vnode}return a instanceof Ur||(a=zr()),a.parent=r,a},t.prototype._s=n,t.prototype._v=B,t.prototype._n=i,t.prototype._e=zr,t.prototype._q=g,t.prototype._i=y,t.prototype._m=function(t,n){var i=this._staticTrees[t];return i&&!n?Array.isArray(i)?z(i):V(i):(i=this._staticTrees[t]=this.$options.staticRenderFns[t].call(this._renderProxy),e(i,"__static__"+t,!1),i)},t.prototype._o=function(t,n,i){return e(t,"__once__"+n+(i?"_"+i:""),!0),t},t.prototype._f=function(t){return F(this.$options,"filters",t,!0)||vr},t.prototype._l=function(t,e){var n,i,r,o,a;if(Array.isArray(t)||"string"==typeof t)for(n=new Array(t.length),i=0,r=t.length;i<r;i++)n[i]=e(t[i],i);else if("number"==typeof t)for(n=new Array(t),i=0;i<t;i++)n[i]=e(i+1,i);else if(f(t))for(o=Object.keys(t),n=new Array(o.length),i=0,r=o.length;i<r;i++)a=o[i],n[i]=e(t[a],a,i);return n},t.prototype._t=function(t,e,n,i){var r=this.$scopedSlots[t];if(r)return n=n||{},i&&d(n,i),r(n)||e;var o=this.$slots[t];return o||e},t.prototype._b=function(t,e,n,i){if(n)if(f(n)){Array.isArray(n)&&(n=h(n));for(var r in n)if("class"===r||"style"===r)t[r]=n[r];else{var o=t.attrs&&t.attrs.type,a=i||mr.mustUseProp(e,o,r)?t.domProps||(t.domProps={}):t.attrs||(t.attrs={});a[r]=n[r]}}else;return t},t.prototype._k=function(t,e,n){var i=mr.keyCodes[e]||n;return Array.isArray(i)?i.indexOf(t)===-1:i!==t}}function mt(t,e){var n={};if(!t)return n;for(var i,r,o=[],a=0,s=t.length;a<s;a++)if(r=t[a],(r.context===e||r.functionalContext===e)&&r.data&&(i=r.data.slot)){var l=n[i]||(n[i]=[]);"template"===r.tag?l.push.apply(l,r.children):l.push(r)}else o.push(r);return o.length&&(1!==o.length||" "!==o[0].text&&!o[0].isComment)&&(n.default=o),n}function gt(t){t._events=Object.create(null),t._hasHookEvent=!1;var e=t.$options._parentListeners;e&&bt(t,e)}function yt(t,e,n){n?Vr.$once(t,e):Vr.$on(t,e)}function _t(t,e){Vr.$off(t,e)}function bt(t,e,n){Vr=t,at(e,n||{},yt,_t,t)}function xt(t){var e=/^hook:/;t.prototype.$on=function(t,n){var i=this;return(i._events[t]||(i._events[t]=[])).push(n),e.test(t)&&(i._hasHookEvent=!0),i},t.prototype.$once=function(t,e){function n(){i.$off(t,n),e.apply(i,arguments)}var i=this;return n.fn=e,i.$on(t,n),i},t.prototype.$off=function(t,e){var n=this;if(!arguments.length)return n._events=Object.create(null),n;var i=n._events[t];if(!i)return n;if(1===arguments.length)return n._events[t]=null,n;for(var r,o=i.length;o--;)if(r=i[o],r===e||r.fn===e){i.splice(o,1);break}return n},t.prototype.$emit=function(t){var e=this,n=e._events[t];if(n){n=n.length>1?u(n):n;for(var i=u(arguments,1),r=0,o=n.length;r<o;r++)n[r].apply(e,i)}return e}}function wt(t){var e=t.$options,n=e.parent;if(n&&!e.abstract){for(;n.$options.abstract&&n.$parent;)n=n.$parent;n.$children.push(t)}t.$parent=n,t.$root=n?n.$root:t,t.$children=[],t.$refs={},t._watcher=null,t._inactive=!1,t._isMounted=!1,t._isDestroyed=!1,t._isBeingDestroyed=!1}function Ct(t){t.prototype._mount=function(t,e){var n=this;return n.$el=t,n.$options.render||(n.$options.render=zr),kt(n,"beforeMount"),n._watcher=new ro(n,function(){n._update(n._render(),e)},v),e=!1,null==n.$vnode&&(n._isMounted=!0,kt(n,"mounted")),n},t.prototype._update=function(t,e){var n=this;n._isMounted&&kt(n,"beforeUpdate");var i=n.$el,r=n._vnode,o=Gr;Gr=n,n._vnode=t,r?n.$el=n.__patch__(r,t):n.$el=n.__patch__(n.$el,t,e,!1,n.$options._parentElm,n.$options._refElm),Gr=o,i&&(i.__vue__=null),n.$el&&(n.$el.__vue__=n),n.$vnode&&n.$parent&&n.$vnode===n.$parent._vnode&&(n.$parent.$el=n.$el)},t.prototype._updateFromParent=function(t,e,n,i){var r=this,o=!(!r.$options._renderChildren&&!i);if(r.$options._parentVnode=n,r.$vnode=n,r._vnode&&(r._vnode.parent=n),r.$options._renderChildren=i,t&&r.$options.props){Rr.shouldConvert=!1;for(var a=r.$options._propKeys||[],s=0;s<a.length;s++){var l=a[s];r[l]=M(l,r.$options.props,t,r)}Rr.shouldConvert=!0,r.$options.propsData=t}if(e){var c=r.$options._parentListeners;r.$options._parentListeners=e,bt(r,e,c)}o&&(r.$slots=mt(i,n.context),r.$forceUpdate())},t.prototype.$forceUpdate=function(){var t=this;t._watcher&&t._watcher.update()},t.prototype.$destroy=function(){var t=this;if(!t._isBeingDestroyed){kt(t,"beforeDestroy"),t._isBeingDestroyed=!0;var e=t.$parent;!e||e._isBeingDestroyed||t.$options.abstract||o(e.$children,t),t._watcher&&t._watcher.teardown();for(var n=t._watchers.length;n--;)t._watchers[n].teardown();t._data.__ob__&&t._data.__ob__.vmCount--,t._isDestroyed=!0,kt(t,"destroyed"),t.$off(),t.$el&&(t.$el.__vue__=null),t.__patch__(t._vnode,null)}}}function kt(t,e){var n=t.$options[e];if(n)for(var i=0,r=n.length;i<r;i++)n[i].call(t);t._hasHookEvent&&t.$emit("hook:"+e)}function St(){Zr.length=0,Qr={},to=eo=!1}function Tt(){eo=!0;var t,e,n;for(Zr.sort(function(t,e){return t.id-e.id}),no=0;no<Zr.length;no++)t=Zr[no],e=t.id,Qr[e]=null,t.run();for(no=Zr.length;no--;)t=Zr[no],n=t.vm,n._watcher===t&&n._isMounted&&kt(n,"updated");$r&&mr.devtools&&$r.emit("flush"),St()}function $t(t){var e=t.id;if(null==Qr[e]){if(Qr[e]=!0,eo){for(var n=Zr.length-1;n>=0&&Zr[n].id>t.id;)n--;Zr.splice(Math.max(n,no)+1,0,t)}else Zr.push(t);to||(to=!0,Ar(Tt))}}function At(t){oo.clear(),Et(t,oo)}function Et(t,e){var n,i,r=Array.isArray(t);if((r||f(t))&&Object.isExtensible(t)){if(t.__ob__){var o=t.__ob__.dep.id;if(e.has(o))return;e.add(o)}if(r)for(n=t.length;n--;)Et(t[n],e);else for(i=Object.keys(t),n=i.length;n--;)Et(t[i[n]],e)}}function Nt(t){t._watchers=[];var e=t.$options;e.props&&Ot(t,e.props),e.methods&&Lt(t,e.methods),e.data?jt(t):$(t._data={},!0),e.computed&&Dt(t,e.computed),e.watch&&Pt(t,e.watch)}function Ot(t,e){var n=t.$options.propsData||{},i=t.$options._propKeys=Object.keys(e),r=!t.$parent;Rr.shouldConvert=r;for(var o=function(r){var o=i[r];A(t,o,M(o,e,n,t))},a=0;a<i.length;a++)o(a);Rr.shouldConvert=!0}function jt(t){var e=t.$options.data;e=t._data="function"==typeof e?e.call(t):e||{},p(e)||(e={});for(var n=Object.keys(e),i=t.$options.props,r=n.length;r--;)i&&a(i,n[r])||Mt(t,n[r]);$(e,!0)}function Dt(t,e){for(var n in e){var i=e[n];"function"==typeof i?(ao.get=It(i,t),ao.set=v):(ao.get=i.get?i.cache!==!1?It(i.get,t):c(i.get,t):v,ao.set=i.set?c(i.set,t):v),Object.defineProperty(t,n,ao)}}function It(t,e){var n=new ro(e,t,v,{lazy:!0});return function(){return n.dirty&&n.evaluate(),jr.target&&n.depend(),n.value}}function Lt(t,e){for(var n in e)t[n]=null==e[n]?v:c(e[n],t)}function Pt(t,e){for(var n in e){var i=e[n];if(Array.isArray(i))for(var r=0;r<i.length;r++)Rt(t,n,i[r]);else Rt(t,n,i)}}function Rt(t,e,n){var i;p(n)&&(i=n,n=n.handler),"string"==typeof n&&(n=t[n]),t.$watch(e,n,i)}function Ft(t){var e={};e.get=function(){return this._data},Object.defineProperty(t.prototype,"$data",e),t.prototype.$set=E,t.prototype.$delete=N,t.prototype.$watch=function(t,e,n){var i=this;n=n||{},n.user=!0;var r=new ro(i,t,e,n);return n.immediate&&e.call(i,r.value),function(){r.teardown()}}}function Mt(t,e){_(e)||Object.defineProperty(t,e,{configurable:!0,enumerable:!0,get:function(){return t._data[e]},set:function(n){t._data[e]=n}})}function Ht(t){t.prototype._init=function(t){var e=this;e._uid=so++,e._isVue=!0,t&&t._isComponent?qt(e,t):e.$options=R(Ut(e.constructor),t||{},e),e._renderProxy=e,e._self=e,wt(e),gt(e),ht(e),kt(e,"beforeCreate"),Nt(e),kt(e,"created"),e.$options.el&&e.$mount(e.$options.el)}}function qt(t,e){var n=t.$options=Object.create(t.constructor.options);n.parent=e.parent,n.propsData=e.propsData,n._parentVnode=e._parentVnode,n._parentListeners=e._parentListeners,n._renderChildren=e._renderChildren,n._componentTag=e._componentTag,n._parentElm=e._parentElm,n._refElm=e._refElm,e.render&&(n.render=e.render,n.staticRenderFns=e.staticRenderFns)}function Ut(t){var e=t.options;if(t.super){var n=t.super.options,i=t.superOptions,r=t.extendOptions;n!==i&&(t.superOptions=n,r.render=e.render,r.staticRenderFns=e.staticRenderFns,r._scopeId=e._scopeId,e=t.options=R(n,r),e.name&&(e.components[e.name]=t))}return e}function Bt(t){this._init(t)}function Vt(t){t.use=function(t){if(!t.installed){var e=u(arguments,1);return e.unshift(this),"function"==typeof t.install?t.install.apply(t,e):t.apply(null,e),t.installed=!0,this}}}function zt(t){t.mixin=function(t){this.options=R(this.options,t)}}function Wt(t){t.cid=0;var e=1;t.extend=function(t){t=t||{};var n=this,i=n.cid,r=t._Ctor||(t._Ctor={});if(r[i])return r[i];var o=t.name||n.options.name,a=function(t){this._init(t)};return a.prototype=Object.create(n.prototype),a.prototype.constructor=a,a.cid=e++,a.options=R(n.options,t),a.super=n,a.extend=n.extend,a.mixin=n.mixin,a.use=n.use,mr._assetTypes.forEach(function(t){a[t]=n[t]}),o&&(a.options.components[o]=a),a.superOptions=n.options,a.extendOptions=t,r[i]=a,a}}function Jt(t){mr._assetTypes.forEach(function(e){t[e]=function(t,n){return n?("component"===e&&p(n)&&(n.name=n.name||t,n=this.options._base.extend(n)),"directive"===e&&"function"==typeof n&&(n={bind:n,update:n}),this.options[e+"s"][t]=n,n):this.options[e+"s"][t]}})}function Kt(t){return t&&(t.Ctor.options.name||t.tag)}function Xt(t,e){return"string"==typeof t?t.split(",").indexOf(e)>-1:t.test(e)}function Yt(t,e){for(var n in t){var i=t[n];if(i){var r=Kt(i.componentOptions);r&&!e(r)&&(Gt(i),t[n]=null)}}}function Gt(t){t&&(t.componentInstance._inactive||kt(t.componentInstance,"deactivated"),t.componentInstance.$destroy())}function Zt(t){var e={};e.get=function(){return mr},Object.defineProperty(t,"config",e),t.util=qr,t.set=E,t.delete=N,t.nextTick=Ar,t.options=Object.create(null),mr._assetTypes.forEach(function(e){t.options[e+"s"]=Object.create(null)}),t.options._base=t,d(t.options.components,uo),Vt(t),zt(t),Wt(t),Jt(t)}function Qt(t){for(var e=t.data,n=t,i=t;i.componentInstance;)i=i.componentInstance._vnode,i.data&&(e=te(i.data,e));for(;n=n.parent;)n.data&&(e=te(e,n.data));return ee(e)}function te(t,e){return{staticClass:ne(t.staticClass,e.staticClass),class:t.class?[t.class,e.class]:e.class}}function ee(t){var e=t.class,n=t.staticClass;return n||e?ne(n,ie(e)):""}function ne(t,e){return t?e?t+" "+e:t:e||""}function ie(t){var e="";if(!t)return e;if("string"==typeof t)return t;if(Array.isArray(t)){for(var n,i=0,r=t.length;i<r;i++)t[i]&&(n=ie(t[i]))&&(e+=n+" ");return e.slice(0,-1)}if(f(t)){for(var o in t)t[o]&&(e+=o+" ");return e.slice(0,-1)}return e}function re(t){return ko(t)?"svg":"math"===t?"math":void 0}function oe(t){if(!_r)return!0;if(To(t))return!1;if(t=t.toLowerCase(),null!=$o[t])return $o[t];var e=document.createElement(t);return t.indexOf("-")>-1?$o[t]=e.constructor===window.HTMLUnknownElement||e.constructor===window.HTMLElement:$o[t]=/HTMLUnknownElement/.test(e.toString())}function ae(t){if("string"==typeof t){if(t=document.querySelector(t),!t)return document.createElement("div")}return t}function se(t,e){var n=document.createElement(t);return"select"!==t?n:(e.data&&e.data.attrs&&"multiple"in e.data.attrs&&n.setAttribute("multiple","multiple"),n)}function le(t,e){return document.createElementNS(wo[t],e)}function ce(t){return document.createTextNode(t)}function ue(t){return document.createComment(t)}function de(t,e,n){t.insertBefore(e,n)}function fe(t,e){t.removeChild(e)}function pe(t,e){t.appendChild(e)}function he(t){return t.parentNode}function ve(t){return t.nextSibling}function me(t){return t.tagName}function ge(t,e){t.textContent=e}function ye(t,e,n){t.setAttribute(e,n)}function _e(t,e){var n=t.data.ref;if(n){var i=t.context,r=t.componentInstance||t.elm,a=i.$refs;e?Array.isArray(a[n])?o(a[n],r):a[n]===r&&(a[n]=void 0):t.data.refInFor?Array.isArray(a[n])&&a[n].indexOf(r)<0?a[n].push(r):a[n]=[r]:a[n]=r}}function be(t){return null==t}function xe(t){return null!=t}function we(t,e){return t.key===e.key&&t.tag===e.tag&&t.isComment===e.isComment&&!t.data==!e.data}function Ce(t,e,n){var i,r,o={};for(i=e;i<=n;++i)r=t[i].key,xe(r)&&(o[r]=i);return o}function ke(t){function e(t){return new Ur($.tagName(t).toLowerCase(),{},[],void 0,t)}function n(t,e){function n(){0===--n.listeners&&i(t)}return n.listeners=e,n}function i(t){var e=$.parentNode(t);e&&$.removeChild(e,t)}function o(t,e,n,i,r){if(t.isRootInsert=!r,!a(t,e,n,i)){var o=t.data,s=t.children,l=t.tag;xe(l)?(t.elm=t.ns?$.createElementNS(t.ns,l):$.createElement(l,t),h(t),d(t,s,e),xe(o)&&p(t,e),u(n,t.elm,i)):t.isComment?(t.elm=$.createComment(t.text),u(n,t.elm,i)):(t.elm=$.createTextNode(t.text),u(n,t.elm,i))}}function a(t,e,n,i){var r=t.data;if(xe(r)){var o=xe(t.componentInstance)&&r.keepAlive;if(xe(r=r.hook)&&xe(r=r.init)&&r(t,!1,n,i),xe(t.componentInstance))return l(t,e),o&&c(t,e,n,i),!0}}function l(t,e){t.data.pendingInsert&&e.push.apply(e,t.data.pendingInsert),t.elm=t.componentInstance.$el,f(t)?(p(t,e),h(t)):(_e(t),e.push(t))}function c(t,e,n,i){for(var r,o=t;o.componentInstance;)if(o=o.componentInstance._vnode,xe(r=o.data)&&xe(r=r.transition)){for(r=0;r<S.activate.length;++r)S.activate[r](No,o);e.push(o);break}u(n,t.elm,i)}function u(t,e,n){t&&(n?$.insertBefore(t,e,n):$.appendChild(t,e))}function d(t,e,n){if(Array.isArray(e))for(var i=0;i<e.length;++i)o(e[i],n,t.elm,null,!0);else s(t.text)&&$.appendChild(t.elm,$.createTextNode(t.text))}function f(t){for(;t.componentInstance;)t=t.componentInstance._vnode;return xe(t.tag)}function p(t,e){for(var n=0;n<S.create.length;++n)S.create[n](No,t);C=t.data.hook,xe(C)&&(C.create&&C.create(No,t),C.insert&&e.push(t))}function h(t){var e;xe(e=t.context)&&xe(e=e.$options._scopeId)&&$.setAttribute(t.elm,e,""),xe(e=Gr)&&e!==t.context&&xe(e=e.$options._scopeId)&&$.setAttribute(t.elm,e,"")}function v(t,e,n,i,r,a){for(;i<=r;++i)o(n[i],a,t,e)}function m(t){var e,n,i=t.data;if(xe(i))for(xe(e=i.hook)&&xe(e=e.destroy)&&e(t),e=0;e<S.destroy.length;++e)S.destroy[e](t);if(xe(e=t.children))for(n=0;n<t.children.length;++n)m(t.children[n])}function g(t,e,n,r){for(;n<=r;++n){var o=e[n];xe(o)&&(xe(o.tag)?(y(o),m(o)):i(o.elm))}}function y(t,e){if(e||xe(t.data)){var r=S.remove.length+1;for(e?e.listeners+=r:e=n(t.elm,r),xe(C=t.componentInstance)&&xe(C=C._vnode)&&xe(C.data)&&y(C,e),C=0;C<S.remove.length;++C)S.remove[C](t,e);xe(C=t.data.hook)&&xe(C=C.remove)?C(t,e):e()}else i(t.elm)}function _(t,e,n,i,r){for(var a,s,l,c,u=0,d=0,f=e.length-1,p=e[0],h=e[f],m=n.length-1,y=n[0],_=n[m],x=!r;u<=f&&d<=m;)be(p)?p=e[++u]:be(h)?h=e[--f]:we(p,y)?(b(p,y,i),p=e[++u],y=n[++d]):we(h,_)?(b(h,_,i),h=e[--f],_=n[--m]):we(p,_)?(b(p,_,i),x&&$.insertBefore(t,p.elm,$.nextSibling(h.elm)),p=e[++u],_=n[--m]):we(h,y)?(b(h,y,i),x&&$.insertBefore(t,h.elm,p.elm),h=e[--f],y=n[++d]):(be(a)&&(a=Ce(e,u,f)),s=xe(y.key)?a[y.key]:null,be(s)?(o(y,i,t,p.elm),y=n[++d]):(l=e[s],we(l,y)?(b(l,y,i),e[s]=void 0,x&&$.insertBefore(t,y.elm,p.elm),y=n[++d]):(o(y,i,t,p.elm),y=n[++d])));u>f?(c=be(n[m+1])?null:n[m+1].elm,v(t,c,n,d,m,i)):d>m&&g(t,e,u,f)}function b(t,e,n,i){if(t!==e){if(e.isStatic&&t.isStatic&&e.key===t.key&&(e.isCloned||e.isOnce))return e.elm=t.elm,void(e.componentInstance=t.componentInstance);var r,o=e.data,a=xe(o);a&&xe(r=o.hook)&&xe(r=r.prepatch)&&r(t,e);var s=e.elm=t.elm,l=t.children,c=e.children;if(a&&f(e)){for(r=0;r<S.update.length;++r)S.update[r](t,e);xe(r=o.hook)&&xe(r=r.update)&&r(t,e)}be(e.text)?xe(l)&&xe(c)?l!==c&&_(s,l,c,n,i):xe(c)?(xe(t.text)&&$.setTextContent(s,""),v(s,null,c,0,c.length-1,n)):xe(l)?g(s,l,0,l.length-1):xe(t.text)&&$.setTextContent(s,""):t.text!==e.text&&$.setTextContent(s,e.text),a&&xe(r=o.hook)&&xe(r=r.postpatch)&&r(t,e)}}function x(t,e,n){if(n&&t.parent)t.parent.data.pendingInsert=e;else for(var i=0;i<e.length;++i)e[i].data.hook.insert(e[i])}function w(t,e,n){e.elm=t;var i=e.tag,r=e.data,o=e.children;if(xe(r)&&(xe(C=r.hook)&&xe(C=C.init)&&C(e,!0),xe(C=e.componentInstance)))return l(e,n),!0;if(xe(i)){if(xe(o))if(t.hasChildNodes()){for(var a=!0,s=t.firstChild,c=0;c<o.length;c++){if(!s||!w(s,o[c],n)){a=!1;break}s=s.nextSibling}if(!a||s)return!1}else d(e,o,n);if(xe(r))for(var u in r)if(!A(u)){p(e,n);break}}else t.data!==e.text&&(t.data=e.text);return!0}var C,k,S={},T=t.modules,$=t.nodeOps;for(C=0;C<Oo.length;++C)for(S[Oo[C]]=[],k=0;k<T.length;++k)void 0!==T[k][Oo[C]]&&S[Oo[C]].push(T[k][Oo[C]]);var A=r("attrs,style,class,staticClass,staticStyle,key");return function(t,n,i,r,a,s){if(!n)return void(t&&m(t));var l=!1,c=[];if(t){var u=xe(t.nodeType);if(!u&&we(t,n))b(t,n,c,r);else{if(u){if(1===t.nodeType&&t.hasAttribute("server-rendered")&&(t.removeAttribute("server-rendered"),i=!0),i&&w(t,n,c))return x(n,c,!0),t;t=e(t)}var d=t.elm,p=$.parentNode(d);if(o(n,c,d._leaveCb?null:p,$.nextSibling(d)),n.parent){for(var h=n.parent;h;)h.elm=n.elm,h=h.parent;if(f(n))for(var v=0;v<S.create.length;++v)S.create[v](No,n.parent)}null!==p?g(p,[t],0,0):xe(t.tag)&&m(t)}}else l=!0,o(n,c,a,s);return x(n,c,l),n.elm}}function Se(t,e){(t.data.directives||e.data.directives)&&Te(t,e)}function Te(t,e){var n,i,r,o=t===No,a=e===No,s=$e(t.data.directives,t.context),l=$e(e.data.directives,e.context),c=[],u=[];for(n in l)i=s[n],r=l[n],i?(r.oldValue=i.value,Ee(r,"update",e,t),r.def&&r.def.componentUpdated&&u.push(r)):(Ee(r,"bind",e,t),r.def&&r.def.inserted&&c.push(r));if(c.length){var d=function(){for(var n=0;n<c.length;n++)Ee(c[n],"inserted",e,t)};o?rt(e.data.hook||(e.data.hook={}),"insert",d,"dir-insert"):d()}if(u.length&&rt(e.data.hook||(e.data.hook={}),"postpatch",function(){for(var n=0;n<u.length;n++)Ee(u[n],"componentUpdated",e,t)},"dir-postpatch"),!o)for(n in s)l[n]||Ee(s[n],"unbind",t,t,a)}function $e(t,e){var n=Object.create(null);if(!t)return n;var i,r;for(i=0;i<t.length;i++)r=t[i],r.modifiers||(r.modifiers=Do),n[Ae(r)]=r,r.def=F(e.$options,"directives",r.name,!0);return n}function Ae(t){return t.rawName||t.name+"."+Object.keys(t.modifiers||{}).join(".")}function Ee(t,e,n,i,r){var o=t.def&&t.def[e];o&&o(n.elm,t,n,i,r)}function Ne(t,e){if(t.data.attrs||e.data.attrs){var n,i,r,o=e.elm,a=t.data.attrs||{},s=e.data.attrs||{};s.__ob__&&(s=e.data.attrs=d({},s));for(n in s)i=s[n],r=a[n],r!==i&&Oe(o,n,i);wr&&s.value!==a.value&&Oe(o,"value",s.value);for(n in a)null==s[n]&&(_o(n)?o.removeAttributeNS(yo,bo(n)):mo(n)||o.removeAttribute(n))}}function Oe(t,e,n){go(e)?xo(n)?t.removeAttribute(e):t.setAttribute(e,e):mo(e)?t.setAttribute(e,xo(n)||"false"===n?"false":"true"):_o(e)?xo(n)?t.removeAttributeNS(yo,bo(e)):t.setAttributeNS(yo,e,n):xo(n)?t.removeAttribute(e):t.setAttribute(e,n)}function je(t,e){var n=e.elm,i=e.data,r=t.data;if(i.staticClass||i.class||r&&(r.staticClass||r.class)){var o=Qt(e),a=n._transitionClasses;a&&(o=ne(o,ie(a))),o!==n._prevClass&&(n.setAttribute("class",o),n._prevClass=o)}}function De(t,e,n,i){if(n){var r=e,o=fo;e=function(n){Ie(t,e,i,o),1===arguments.length?r(n):r.apply(null,arguments)}}fo.addEventListener(t,e,i)}function Ie(t,e,n,i){(i||fo).removeEventListener(t,e,n)}function Le(t,e){if(t.data.on||e.data.on){var n=e.data.on||{},i=t.data.on||{};fo=e.elm,at(n,i,De,Ie,e.context)}}function Pe(t,e){if(t.data.domProps||e.data.domProps){var n,i,r=e.elm,o=t.data.domProps||{},a=e.data.domProps||{};a.__ob__&&(a=e.data.domProps=d({},a));for(n in o)null==a[n]&&(r[n]="");for(n in a)if(i=a[n],"textContent"!==n&&"innerHTML"!==n||(e.children&&(e.children.length=0),i!==o[n]))if("value"===n){r._value=i;var s=null==i?"":String(i);Re(r,e,s)&&(r.value=s)}else r[n]=i}}function Re(t,e,n){return!t.composing&&("option"===e.tag||Fe(t,n)||Me(e,n))}function Fe(t,e){return document.activeElement!==t&&t.value!==e}function Me(t,e){var n=t.elm.value,r=t.elm._vModifiers;return r&&r.number||"number"===t.elm.type?i(n)!==i(e):r&&r.trim?n.trim()!==e.trim():n!==e}function He(t){var e=qe(t.style);return t.staticStyle?d(t.staticStyle,e):e}function qe(t){return Array.isArray(t)?h(t):"string"==typeof t?Mo(t):t}function Ue(t,e){var n,i={};if(e)for(var r=t;r.componentInstance;)r=r.componentInstance._vnode,r.data&&(n=He(r.data))&&d(i,n);(n=He(t.data))&&d(i,n);for(var o=t;o=o.parent;)o.data&&(n=He(o.data))&&d(i,n);return i}function Be(t,e){var n=e.data,i=t.data;if(n.staticStyle||n.style||i.staticStyle||i.style){var r,o,a=e.elm,s=t.data.staticStyle,l=t.data.style||{},c=s||l,u=qe(e.data.style)||{};e.data.style=u.__ob__?d({},u):u;var f=Ue(e,!0);for(o in c)null==f[o]&&Uo(a,o,"");for(o in f)r=f[o],r!==c[o]&&Uo(a,o,null==r?"":r)}}function Ve(t,e){if(e&&e.trim())if(t.classList)e.indexOf(" ")>-1?e.split(/\s+/).forEach(function(e){return t.classList.add(e)}):t.classList.add(e);else{var n=" "+t.getAttribute("class")+" ";n.indexOf(" "+e+" ")<0&&t.setAttribute("class",(n+e).trim())}}function ze(t,e){if(e&&e.trim())if(t.classList)e.indexOf(" ")>-1?e.split(/\s+/).forEach(function(e){return t.classList.remove(e)}):t.classList.remove(e);else{for(var n=" "+t.getAttribute("class")+" ",i=" "+e+" ";n.indexOf(i)>=0;)n=n.replace(i," ");t.setAttribute("class",n.trim())}}function We(t){Qo(function(){Qo(t)})}function Je(t,e){(t._transitionClasses||(t._transitionClasses=[])).push(e),Ve(t,e)}function Ke(t,e){t._transitionClasses&&o(t._transitionClasses,e),ze(t,e)}function Xe(t,e,n){var i=Ye(t,e),r=i.type,o=i.timeout,a=i.propCount;if(!r)return n();var s=r===Jo?Yo:Zo,l=0,c=function(){t.removeEventListener(s,u),n()},u=function(e){e.target===t&&++l>=a&&c()};setTimeout(function(){l<a&&c()},o+1),t.addEventListener(s,u)}function Ye(t,e){var n,i=window.getComputedStyle(t),r=i[Xo+"Delay"].split(", "),o=i[Xo+"Duration"].split(", "),a=Ge(r,o),s=i[Go+"Delay"].split(", "),l=i[Go+"Duration"].split(", "),c=Ge(s,l),u=0,d=0;e===Jo?a>0&&(n=Jo,u=a,d=o.length):e===Ko?c>0&&(n=Ko,u=c,d=l.length):(u=Math.max(a,c),n=u>0?a>c?Jo:Ko:null,d=n?n===Jo?o.length:l.length:0);var f=n===Jo&&ta.test(i[Xo+"Property"]);return{type:n,timeout:u,propCount:d,hasTransform:f}}function Ge(t,e){for(;t.length<e.length;)t=t.concat(t);return Math.max.apply(null,e.map(function(e,n){return Ze(e)+Ze(t[n])}))}function Ze(t){return 1e3*Number(t.slice(0,-1))}function Qe(t,e){var n=t.elm;n._leaveCb&&(n._leaveCb.cancelled=!0,
n._leaveCb());var i=en(t.data.transition);if(i&&!n._enterCb&&1===n.nodeType){for(var r=i.css,o=i.type,a=i.enterClass,s=i.enterToClass,l=i.enterActiveClass,c=i.appearClass,u=i.appearToClass,d=i.appearActiveClass,f=i.beforeEnter,p=i.enter,h=i.afterEnter,v=i.enterCancelled,m=i.beforeAppear,g=i.appear,y=i.afterAppear,_=i.appearCancelled,b=Gr,x=Gr.$vnode;x&&x.parent;)x=x.parent,b=x.context;var w=!b._isMounted||!t.isRootInsert;if(!w||g||""===g){var C=w?c:a,k=w?d:l,S=w?u:s,T=w?m||f:f,$=w&&"function"==typeof g?g:p,A=w?y||h:h,E=w?_||v:v,N=r!==!1&&!wr,O=$&&($._length||$.length)>1,j=n._enterCb=nn(function(){N&&(Ke(n,S),Ke(n,k)),j.cancelled?(N&&Ke(n,C),E&&E(n)):A&&A(n),n._enterCb=null});t.data.show||rt(t.data.hook||(t.data.hook={}),"insert",function(){var e=n.parentNode,i=e&&e._pending&&e._pending[t.key];i&&i.tag===t.tag&&i.elm._leaveCb&&i.elm._leaveCb(),$&&$(n,j)},"transition-insert"),T&&T(n),N&&(Je(n,C),Je(n,k),We(function(){Je(n,S),Ke(n,C),j.cancelled||O||Xe(n,o,j)})),t.data.show&&(e&&e(),$&&$(n,j)),N||O||j()}}}function tn(t,e){function n(){g.cancelled||(t.data.show||((i.parentNode._pending||(i.parentNode._pending={}))[t.key]=t),u&&u(i),v&&(Je(i,s),Je(i,c),We(function(){Je(i,l),Ke(i,s),g.cancelled||m||Xe(i,a,g)})),d&&d(i,g),v||m||g())}var i=t.elm;i._enterCb&&(i._enterCb.cancelled=!0,i._enterCb());var r=en(t.data.transition);if(!r)return e();if(!i._leaveCb&&1===i.nodeType){var o=r.css,a=r.type,s=r.leaveClass,l=r.leaveToClass,c=r.leaveActiveClass,u=r.beforeLeave,d=r.leave,f=r.afterLeave,p=r.leaveCancelled,h=r.delayLeave,v=o!==!1&&!wr,m=d&&(d._length||d.length)>1,g=i._leaveCb=nn(function(){i.parentNode&&i.parentNode._pending&&(i.parentNode._pending[t.key]=null),v&&(Ke(i,l),Ke(i,c)),g.cancelled?(v&&Ke(i,s),p&&p(i)):(e(),f&&f(i)),i._leaveCb=null});h?h(n):n()}}function en(t){if(t){if("object"==typeof t){var e={};return t.css!==!1&&d(e,ea(t.name||"v")),d(e,t),e}return"string"==typeof t?ea(t):void 0}}function nn(t){var e=!1;return function(){e||(e=!0,t())}}function rn(t,e){e.data.show||Qe(e)}function on(t,e,n){var i=e.value,r=t.multiple;if(!r||Array.isArray(i)){for(var o,a,s=0,l=t.options.length;s<l;s++)if(a=t.options[s],r)o=y(i,sn(a))>-1,a.selected!==o&&(a.selected=o);else if(g(sn(a),i))return void(t.selectedIndex!==s&&(t.selectedIndex=s));r||(t.selectedIndex=-1)}}function an(t,e){for(var n=0,i=e.length;n<i;n++)if(g(sn(e[n]),t))return!1;return!0}function sn(t){return"_value"in t?t._value:t.value}function ln(t){t.target.composing=!0}function cn(t){t.target.composing=!1,un(t.target,"input")}function un(t,e){var n=document.createEvent("HTMLEvents");n.initEvent(e,!0,!0),t.dispatchEvent(n)}function dn(t){return!t.componentInstance||t.data&&t.data.transition?t:dn(t.componentInstance._vnode)}function fn(t){var e=t&&t.componentOptions;return e&&e.Ctor.options.abstract?fn(ut(e.children)):t}function pn(t){var e={},n=t.$options;for(var i in n.propsData)e[i]=t[i];var r=n._parentListeners;for(var o in r)e[lr(o)]=r[o].fn;return e}function hn(t,e){return/\d-keep-alive$/.test(e.tag)?t("keep-alive"):null}function vn(t){for(;t=t.parent;)if(t.data.transition)return!0}function mn(t,e){return e.key===t.key&&e.tag===t.tag}function gn(t){t.elm._moveCb&&t.elm._moveCb(),t.elm._enterCb&&t.elm._enterCb()}function yn(t){t.data.newPos=t.elm.getBoundingClientRect()}function _n(t){var e=t.data.pos,n=t.data.newPos,i=e.left-n.left,r=e.top-n.top;if(i||r){t.data.moved=!0;var o=t.elm.style;o.transform=o.WebkitTransform="translate("+i+"px,"+r+"px)",o.transitionDuration="0s"}}function bn(t,e){var n=document.createElement("div");return n.innerHTML='<div a="'+t+'">',n.innerHTML.indexOf(e)>0}function xn(t){return ha=ha||document.createElement("div"),ha.innerHTML=t,ha.textContent}function wn(t,e){return e&&(t=t.replace(ss,"\n")),t.replace(os,"<").replace(as,">").replace(ls,"&").replace(cs,'"')}function Cn(t,e){function n(e){d+=e,t=t.substring(e)}function i(){var e=t.match(Sa);if(e){var i={tagName:e[1],attrs:[],start:d};n(e[0].length);for(var r,o;!(r=t.match(Ta))&&(o=t.match(wa));)n(o[0].length),i.attrs.push(o);if(r)return i.unarySlash=r[1],n(r[0].length),i.end=d,i}}function r(t){var n=t.tagName,i=t.unarySlash;c&&("p"===s&&ya(n)&&o(s),ga(n)&&s===n&&o(n));for(var r=u(n)||"html"===n&&"head"===s||!!i,a=t.attrs.length,d=new Array(a),f=0;f<a;f++){var p=t.attrs[f];Oa&&p[0].indexOf('""')===-1&&(""===p[3]&&delete p[3],""===p[4]&&delete p[4],""===p[5]&&delete p[5]);var h=p[3]||p[4]||p[5]||"";d[f]={name:p[1],value:wn(h,e.shouldDecodeNewlines)}}r||(l.push({tag:n,lowerCasedTag:n.toLowerCase(),attrs:d}),s=n,i=""),e.start&&e.start(n,d,r,t.start,t.end)}function o(t,n,i){var r,o;if(null==n&&(n=d),null==i&&(i=d),t&&(o=t.toLowerCase()),t)for(r=l.length-1;r>=0&&l[r].lowerCasedTag!==o;r--);else r=0;if(r>=0){for(var a=l.length-1;a>=r;a--)e.end&&e.end(l[a].tag,n,i);l.length=r,s=r&&l[r-1].tag}else"br"===o?e.start&&e.start(t,[],!0,n,i):"p"===o&&(e.start&&e.start(t,[],!1,n,i),e.end&&e.end(t,n,i))}for(var a,s,l=[],c=e.expectHTML,u=e.isUnaryTag||hr,d=0;t;){if(a=t,s&&is(s)){var f=s.toLowerCase(),p=rs[f]||(rs[f]=new RegExp("([\\s\\S]*?)(</"+f+"[^>]*>)","i")),h=0,v=t.replace(p,function(t,n,i){return h=i.length,"script"!==f&&"style"!==f&&"noscript"!==f&&(n=n.replace(/<!--([\s\S]*?)-->/g,"$1").replace(/<!\[CDATA\[([\s\S]*?)]]>/g,"$1")),e.chars&&e.chars(n),""});d+=t.length-v.length,t=v,o(f,d-h,d)}else{var m=t.indexOf("<");if(0===m){if(Ea.test(t)){var g=t.indexOf("-->");if(g>=0){n(g+3);continue}}if(Na.test(t)){var y=t.indexOf("]>");if(y>=0){n(y+2);continue}}var _=t.match(Aa);if(_){n(_[0].length);continue}var b=t.match($a);if(b){var x=d;n(b[0].length),o(b[1],x,d);continue}var w=i();if(w){r(w);continue}}var C=void 0,k=void 0,S=void 0;if(m>0){for(k=t.slice(m);!($a.test(k)||Sa.test(k)||Ea.test(k)||Na.test(k)||(S=k.indexOf("<",1),S<0));)m+=S,k=t.slice(m);C=t.substring(0,m),n(m)}m<0&&(C=t,t=""),e.chars&&C&&e.chars(C)}if(t===a&&e.chars){e.chars(t);break}}o()}function kn(t){function e(){(a||(a=[])).push(t.slice(h,r).trim()),h=r+1}var n,i,r,o,a,s=!1,l=!1,c=!1,u=!1,d=0,f=0,p=0,h=0;for(r=0;r<t.length;r++)if(i=n,n=t.charCodeAt(r),s)39===n&&92!==i&&(s=!1);else if(l)34===n&&92!==i&&(l=!1);else if(c)96===n&&92!==i&&(c=!1);else if(u)47===n&&92!==i&&(u=!1);else if(124!==n||124===t.charCodeAt(r+1)||124===t.charCodeAt(r-1)||d||f||p){switch(n){case 34:l=!0;break;case 39:s=!0;break;case 96:c=!0;break;case 40:p++;break;case 41:p--;break;case 91:f++;break;case 93:f--;break;case 123:d++;break;case 125:d--}if(47===n){for(var v=r-1,m=void 0;v>=0&&(m=t.charAt(v)," "===m);v--);m&&/[\w$]/.test(m)||(u=!0)}}else void 0===o?(h=r+1,o=t.slice(0,r).trim()):e();if(void 0===o?o=t.slice(0,r).trim():0!==h&&e(),a)for(r=0;r<a.length;r++)o=Sn(o,a[r]);return o}function Sn(t,e){var n=e.indexOf("(");if(n<0)return'_f("'+e+'")('+t+")";var i=e.slice(0,n),r=e.slice(n+1);return'_f("'+i+'")('+t+","+r}function Tn(t,e){var n=e?fs(e):us;if(n.test(t)){for(var i,r,o=[],a=n.lastIndex=0;i=n.exec(t);){r=i.index,r>a&&o.push(JSON.stringify(t.slice(a,r)));var s=kn(i[1].trim());o.push("_s("+s+")"),a=r+i[0].length}return a<t.length&&o.push(JSON.stringify(t.slice(a))),o.join("+")}}function $n(t){console.error("[Vue parser]: "+t)}function An(t,e){return t?t.map(function(t){return t[e]}).filter(function(t){return t}):[]}function En(t,e,n){(t.props||(t.props=[])).push({name:e,value:n})}function Nn(t,e,n){(t.attrs||(t.attrs=[])).push({name:e,value:n})}function On(t,e,n,i,r,o){(t.directives||(t.directives=[])).push({name:e,rawName:n,value:i,arg:r,modifiers:o})}function jn(t,e,n,i,r){i&&i.capture&&(delete i.capture,e="!"+e),i&&i.once&&(delete i.once,e="~"+e);var o;i&&i.native?(delete i.native,o=t.nativeEvents||(t.nativeEvents={})):o=t.events||(t.events={});var a={value:n,modifiers:i},s=o[e];Array.isArray(s)?r?s.unshift(a):s.push(a):s?o[e]=r?[a,s]:[s,a]:o[e]=a}function Dn(t,e,n){var i=In(t,":"+e)||In(t,"v-bind:"+e);if(null!=i)return kn(i);if(n!==!1){var r=In(t,e);if(null!=r)return JSON.stringify(r)}}function In(t,e){var n;if(null!=(n=t.attrsMap[e]))for(var i=t.attrsList,r=0,o=i.length;r<o;r++)if(i[r].name===e){i.splice(r,1);break}return n}function Ln(t){if(Da=t,ja=Da.length,La=Pa=Ra=0,t.indexOf("[")<0||t.lastIndexOf("]")<ja-1)return{exp:t,idx:null};for(;!Rn();)Ia=Pn(),Fn(Ia)?Hn(Ia):91===Ia&&Mn(Ia);return{exp:t.substring(0,Pa),idx:t.substring(Pa+1,Ra)}}function Pn(){return Da.charCodeAt(++La)}function Rn(){return La>=ja}function Fn(t){return 34===t||39===t}function Mn(t){var e=1;for(Pa=La;!Rn();)if(t=Pn(),Fn(t))Hn(t);else if(91===t&&e++,93===t&&e--,0===e){Ra=La;break}}function Hn(t){for(var e=t;!Rn()&&(t=Pn(),t!==e););}function qn(t,e){Fa=e.warn||$n,Ma=e.getTagNamespace||hr,Ha=e.mustUseProp||hr,qa=e.isPreTag||hr,Ua=An(e.modules,"preTransformNode"),Ba=An(e.modules,"transformNode"),Va=An(e.modules,"postTransformNode"),za=e.delimiters;var n,i,r=[],o=e.preserveWhitespace!==!1,a=!1,s=!1;return Cn(t,{expectHTML:e.expectHTML,isUnaryTag:e.isUnaryTag,shouldDecodeNewlines:e.shouldDecodeNewlines,start:function(t,o,l){function c(t){}var u=i&&i.ns||Ma(t);xr&&"svg"===u&&(o=oi(o));var d={type:1,tag:t,attrsList:o,attrsMap:ii(o),parent:i,children:[]};u&&(d.ns=u),ri(d)&&!Tr()&&(d.forbidden=!0);for(var f=0;f<Ua.length;f++)Ua[f](d,e);if(a||(Un(d),d.pre&&(a=!0)),qa(d.tag)&&(s=!0),a)Bn(d);else{Wn(d),Jn(d),Gn(d),Vn(d),d.plain=!d.key&&!o.length,zn(d),Zn(d),Qn(d);for(var p=0;p<Ba.length;p++)Ba[p](d,e);ti(d)}if(n?r.length||n.if&&(d.elseif||d.else)&&(c(d),Yn(n,{exp:d.elseif,block:d})):(n=d,c(n)),i&&!d.forbidden)if(d.elseif||d.else)Kn(d,i);else if(d.slotScope){i.plain=!1;var h=d.slotTarget||"default";(i.scopedSlots||(i.scopedSlots={}))[h]=d}else i.children.push(d),d.parent=i;l||(i=d,r.push(d));for(var v=0;v<Va.length;v++)Va[v](d,e)},end:function(){var t=r[r.length-1],e=t.children[t.children.length-1];e&&3===e.type&&" "===e.text&&t.children.pop(),r.length-=1,i=r[r.length-1],t.pre&&(a=!1),qa(t.tag)&&(s=!1)},chars:function(t){if(i&&(!xr||"textarea"!==i.tag||i.attrsMap.placeholder!==t)){var e=i.children;if(t=s||t.trim()?bs(t):o&&e.length?" ":""){var n;!a&&" "!==t&&(n=Tn(t,za))?e.push({type:2,expression:n,text:t}):" "===t&&" "===e[e.length-1].text||i.children.push({type:3,text:t})}}}}),n}function Un(t){null!=In(t,"v-pre")&&(t.pre=!0)}function Bn(t){var e=t.attrsList.length;if(e)for(var n=t.attrs=new Array(e),i=0;i<e;i++)n[i]={name:t.attrsList[i].name,value:JSON.stringify(t.attrsList[i].value)};else t.pre||(t.plain=!0)}function Vn(t){var e=Dn(t,"key");e&&(t.key=e)}function zn(t){var e=Dn(t,"ref");e&&(t.ref=e,t.refInFor=ei(t))}function Wn(t){var e;if(e=In(t,"v-for")){var n=e.match(hs);if(!n)return;t.for=n[2].trim();var i=n[1].trim(),r=i.match(vs);r?(t.alias=r[1].trim(),t.iterator1=r[2].trim(),r[3]&&(t.iterator2=r[3].trim())):t.alias=i}}function Jn(t){var e=In(t,"v-if");if(e)t.if=e,Yn(t,{exp:e,block:t});else{null!=In(t,"v-else")&&(t.else=!0);var n=In(t,"v-else-if");n&&(t.elseif=n)}}function Kn(t,e){var n=Xn(e.children);n&&n.if&&Yn(n,{exp:t.elseif,block:t})}function Xn(t){for(var e=t.length;e--;){if(1===t[e].type)return t[e];t.pop()}}function Yn(t,e){t.ifConditions||(t.ifConditions=[]),t.ifConditions.push(e)}function Gn(t){var e=In(t,"v-once");null!=e&&(t.once=!0)}function Zn(t){if("slot"===t.tag)t.slotName=Dn(t,"name");else{var e=Dn(t,"slot");e&&(t.slotTarget='""'===e?'"default"':e),"template"===t.tag&&(t.slotScope=In(t,"scope"))}}function Qn(t){var e;(e=Dn(t,"is"))&&(t.component=e),null!=In(t,"inline-template")&&(t.inlineTemplate=!0)}function ti(t){var e,n,i,r,o,a,s,l,c=t.attrsList;for(e=0,n=c.length;e<n;e++)if(i=r=c[e].name,o=c[e].value,ps.test(i))if(t.hasBindings=!0,s=ni(i),s&&(i=i.replace(_s,"")),ms.test(i))i=i.replace(ms,""),o=kn(o),l=!1,s&&(s.prop&&(l=!0,i=lr(i),"innerHtml"===i&&(i="innerHTML")),s.camel&&(i=lr(i))),l||Ha(t.tag,t.attrsMap.type,i)?En(t,i,o):Nn(t,i,o);else if(gs.test(i))i=i.replace(gs,""),jn(t,i,o,s);else{i=i.replace(ps,"");var u=i.match(ys);u&&(a=u[1])&&(i=i.slice(0,-(a.length+1))),On(t,i,r,o,a,s)}else{Nn(t,i,JSON.stringify(o))}}function ei(t){for(var e=t;e;){if(void 0!==e.for)return!0;e=e.parent}return!1}function ni(t){var e=t.match(_s);if(e){var n={};return e.forEach(function(t){n[t.slice(1)]=!0}),n}}function ii(t){for(var e={},n=0,i=t.length;n<i;n++)e[t[n].name]=t[n].value;return e}function ri(t){return"style"===t.tag||"script"===t.tag&&(!t.attrsMap.type||"text/javascript"===t.attrsMap.type)}function oi(t){for(var e=[],n=0;n<t.length;n++){var i=t[n];xs.test(i.name)||(i.name=i.name.replace(ws,""),e.push(i))}return e}function ai(t,e){t&&(Wa=Cs(e.staticKeys||""),Ja=e.isReservedTag||hr,li(t),ci(t,!1))}function si(t){return r("type,tag,attrsList,attrsMap,plain,parent,children,attrs"+(t?","+t:""))}function li(t){if(t.static=di(t),1===t.type){if(!Ja(t.tag)&&"slot"!==t.tag&&null==t.attrsMap["inline-template"])return;for(var e=0,n=t.children.length;e<n;e++){var i=t.children[e];li(i),i.static||(t.static=!1)}}}function ci(t,e){if(1===t.type){if((t.static||t.once)&&(t.staticInFor=e),t.static&&t.children.length&&(1!==t.children.length||3!==t.children[0].type))return void(t.staticRoot=!0);if(t.staticRoot=!1,t.children)for(var n=0,i=t.children.length;n<i;n++)ci(t.children[n],e||!!t.for);t.ifConditions&&ui(t.ifConditions,e)}}function ui(t,e){for(var n=1,i=t.length;n<i;n++)ci(t[n].block,e)}function di(t){return 2!==t.type&&(3===t.type||!(!t.pre&&(t.hasBindings||t.if||t.for||or(t.tag)||!Ja(t.tag)||fi(t)||!Object.keys(t).every(Wa))))}function fi(t){for(;t.parent;){if(t=t.parent,"template"!==t.tag)return!1;if(t.for)return!0}return!1}function pi(t,e){var n=e?"nativeOn:{":"on:{";for(var i in t)n+='"'+i+'":'+hi(i,t[i])+",";return n.slice(0,-1)+"}"}function hi(t,e){if(e){if(Array.isArray(e))return"["+e.map(function(e){return hi(t,e)}).join(",")+"]";if(e.modifiers){var n="",i=[];for(var r in e.modifiers)$s[r]?n+=$s[r]:i.push(r);i.length&&(n=vi(i)+n);var o=Ss.test(e.value)?e.value+"($event)":e.value;return"function($event){"+n+o+"}"}return ks.test(e.value)||Ss.test(e.value)?e.value:"function($event){"+e.value+"}"}return"function(){}"}function vi(t){return"if("+t.map(mi).join("&&")+")return;"}function mi(t){var e=parseInt(t,10);if(e)return"$event.keyCode!=="+e;var n=Ts[t];return"_k($event.keyCode,"+JSON.stringify(t)+(n?","+JSON.stringify(n):"")+")"}function gi(t,e){t.wrapData=function(n){return"_b("+n+",'"+t.tag+"',"+e.value+(e.modifiers&&e.modifiers.prop?",true":"")+")"}}function yi(t,e){var n=Qa,i=Qa=[],r=ts;ts=0,es=e,Ka=e.warn||$n,Xa=An(e.modules,"transformCode"),Ya=An(e.modules,"genData"),Ga=e.directives||{},Za=e.isReservedTag||hr;var o=t?_i(t):'_c("div")';return Qa=n,ts=r,{render:"with(this){return "+o+"}",staticRenderFns:i}}function _i(t){if(t.staticRoot&&!t.staticProcessed)return bi(t);if(t.once&&!t.onceProcessed)return xi(t);if(t.for&&!t.forProcessed)return ki(t);if(t.if&&!t.ifProcessed)return wi(t);if("template"!==t.tag||t.slotTarget){if("slot"===t.tag)return Pi(t);var e;if(t.component)e=Ri(t.component,t);else{var n=t.plain?void 0:Si(t),i=t.inlineTemplate?null:Ni(t,!0);e="_c('"+t.tag+"'"+(n?","+n:"")+(i?","+i:"")+")"}for(var r=0;r<Xa.length;r++)e=Xa[r](t,e);return e}return Ni(t)||"void 0"}function bi(t){return t.staticProcessed=!0,Qa.push("with(this){return "+_i(t)+"}"),"_m("+(Qa.length-1)+(t.staticInFor?",true":"")+")"}function xi(t){if(t.onceProcessed=!0,t.if&&!t.ifProcessed)return wi(t);if(t.staticInFor){for(var e="",n=t.parent;n;){if(n.for){e=n.key;break}n=n.parent}return e?"_o("+_i(t)+","+ts++ +(e?","+e:"")+")":_i(t)}return bi(t)}function wi(t){return t.ifProcessed=!0,Ci(t.ifConditions.slice())}function Ci(t){function e(t){return t.once?xi(t):_i(t)}if(!t.length)return"_e()";var n=t.shift();return n.exp?"("+n.exp+")?"+e(n.block)+":"+Ci(t):""+e(n.block)}function ki(t){var e=t.for,n=t.alias,i=t.iterator1?","+t.iterator1:"",r=t.iterator2?","+t.iterator2:"";return t.forProcessed=!0,"_l(("+e+"),function("+n+i+r+"){return "+_i(t)+"})"}function Si(t){var e="{",n=Ti(t);n&&(e+=n+","),t.key&&(e+="key:"+t.key+","),t.ref&&(e+="ref:"+t.ref+","),t.refInFor&&(e+="refInFor:true,"),t.pre&&(e+="pre:true,"),t.component&&(e+='tag:"'+t.tag+'",');for(var i=0;i<Ya.length;i++)e+=Ya[i](t);if(t.attrs&&(e+="attrs:{"+Fi(t.attrs)+"},"),t.props&&(e+="domProps:{"+Fi(t.props)+"},"),t.events&&(e+=pi(t.events)+","),t.nativeEvents&&(e+=pi(t.nativeEvents,!0)+","),t.slotTarget&&(e+="slot:"+t.slotTarget+","),t.scopedSlots&&(e+=Ai(t.scopedSlots)+","),t.inlineTemplate){var r=$i(t);r&&(e+=r+",")}return e=e.replace(/,$/,"")+"}",t.wrapData&&(e=t.wrapData(e)),e}function Ti(t){var e=t.directives;if(e){var n,i,r,o,a="directives:[",s=!1;for(n=0,i=e.length;n<i;n++){r=e[n],o=!0;var l=Ga[r.name]||As[r.name];l&&(o=!!l(t,r,Ka)),o&&(s=!0,a+='{name:"'+r.name+'",rawName:"'+r.rawName+'"'+(r.value?",value:("+r.value+"),expression:"+JSON.stringify(r.value):"")+(r.arg?',arg:"'+r.arg+'"':"")+(r.modifiers?",modifiers:"+JSON.stringify(r.modifiers):"")+"},")}return s?a.slice(0,-1)+"]":void 0}}function $i(t){var e=t.children[0];if(1===e.type){var n=yi(e,es);return"inlineTemplate:{render:function(){"+n.render+"},staticRenderFns:["+n.staticRenderFns.map(function(t){return"function(){"+t+"}"}).join(",")+"]}"}}function Ai(t){return"scopedSlots:{"+Object.keys(t).map(function(e){return Ei(e,t[e])}).join(",")+"}"}function Ei(t,e){return t+":function("+String(e.attrsMap.scope)+"){return "+("template"===e.tag?Ni(e)||"void 0":_i(e))+"}"}function Ni(t,e){var n=t.children;if(n.length){var i=n[0];if(1===n.length&&i.for&&"template"!==i.tag&&"slot"!==i.tag)return _i(i);var r=Oi(n);return"["+n.map(Ii).join(",")+"]"+(e&&r?","+r:"")}}function Oi(t){for(var e=0,n=0;n<t.length;n++){var i=t[n];if(1===i.type){if(ji(i)||i.ifConditions&&i.ifConditions.some(function(t){return ji(t.block)})){e=2;break}(Di(i)||i.ifConditions&&i.ifConditions.some(function(t){return Di(t.block)}))&&(e=1)}}return e}function ji(t){return void 0!==t.for||"template"===t.tag||"slot"===t.tag}function Di(t){return!Za(t.tag)}function Ii(t){return 1===t.type?_i(t):Li(t)}function Li(t){return"_v("+(2===t.type?t.expression:Mi(JSON.stringify(t.text)))+")"}function Pi(t){var e=t.slotName||'"default"',n=Ni(t),i="_t("+e+(n?","+n:""),r=t.attrs&&"{"+t.attrs.map(function(t){return lr(t.name)+":"+t.value}).join(",")+"}",o=t.attrsMap["v-bind"];return!r&&!o||n||(i+=",null"),r&&(i+=","+r),o&&(i+=(r?"":",null")+","+o),i+")"}function Ri(t,e){var n=e.inlineTemplate?null:Ni(e,!0);return"_c("+t+","+Si(e)+(n?","+n:"")+")"}function Fi(t){for(var e="",n=0;n<t.length;n++){var i=t[n];e+='"'+i.name+'":'+Mi(i.value)+","}return e.slice(0,-1)}function Mi(t){return t.replace(/\u2028/g,"\\u2028").replace(/\u2029/g,"\\u2029")}function Hi(t,e){var n=qn(t.trim(),e);ai(n,e);var i=yi(n,e);return{ast:n,render:i.render,staticRenderFns:i.staticRenderFns}}function qi(t,e){var n=(e.warn||$n,In(t,"class"));n&&(t.staticClass=JSON.stringify(n));var i=Dn(t,"class",!1);i&&(t.classBinding=i)}function Ui(t){var e="";return t.staticClass&&(e+="staticClass:"+t.staticClass+","),t.classBinding&&(e+="class:"+t.classBinding+","),e}function Bi(t,e){var n=(e.warn||$n,In(t,"style"));if(n){t.staticStyle=JSON.stringify(Mo(n))}var i=Dn(t,"style",!1);i&&(t.styleBinding=i)}function Vi(t){var e="";return t.staticStyle&&(e+="staticStyle:"+t.staticStyle+","),t.styleBinding&&(e+="style:("+t.styleBinding+"),"),e}function zi(t,e,n){ns=n;var i=e.value,r=e.modifiers,o=t.tag,a=t.attrsMap.type;return"select"===o?Xi(t,i,r):"input"===o&&"checkbox"===a?Wi(t,i,r):"input"===o&&"radio"===a?Ji(t,i,r):Ki(t,i,r),!0}function Wi(t,e,n){var i=n&&n.number,r=Dn(t,"value")||"null",o=Dn(t,"true-value")||"true",a=Dn(t,"false-value")||"false";En(t,"checked","Array.isArray("+e+")?_i("+e+","+r+")>-1"+("true"===o?":("+e+")":":_q("+e+","+o+")")),jn(t,"click","var $$a="+e+",$$el=$event.target,$$c=$$el.checked?("+o+"):("+a+");if(Array.isArray($$a)){var $$v="+(i?"_n("+r+")":r)+",$$i=_i($$a,$$v);if($$c){$$i<0&&("+e+"=$$a.concat($$v))}else{$$i>-1&&("+e+"=$$a.slice(0,$$i).concat($$a.slice($$i+1)))}}else{"+e+"=$$c}",null,!0)}function Ji(t,e,n){var i=n&&n.number,r=Dn(t,"value")||"null";r=i?"_n("+r+")":r,En(t,"checked","_q("+e+","+r+")"),jn(t,"click",Yi(e,r),null,!0)}function Ki(t,e,n){var i=t.attrsMap.type,r=n||{},o=r.lazy,a=r.number,s=r.trim,l=o||xr&&"range"===i?"change":"input",c=!o&&"range"!==i,u="input"===t.tag||"textarea"===t.tag,d=u?"$event.target.value"+(s?".trim()":""):s?"(typeof $event === 'string' ? $event.trim() : $event)":"$event";d=a||"number"===i?"_n("+d+")":d;var f=Yi(e,d);u&&c&&(f="if($event.target.composing)return;"+f),En(t,"value",u?"_s("+e+")":"("+e+")"),jn(t,l,f,null,!0),(s||a||"number"===i)&&jn(t,"blur","$forceUpdate()")}function Xi(t,e,n){var i=n&&n.number,r='Array.prototype.filter.call($event.target.options,function(o){return o.selected}).map(function(o){var val = "_value" in o ? o._value : o.value;return '+(i?"_n(val)":"val")+"})"+(null==t.attrsMap.multiple?"[0]":""),o=Yi(e,r);jn(t,"change",o,null,!0)}function Yi(t,e){var n=Ln(t);return null===n.idx?t+"="+e:"var $$exp = "+n.exp+", $$idx = "+n.idx+";if (!Array.isArray($$exp)){"+t+"="+e+"}else{$$exp.splice($$idx, 1, "+e+")}"}function Gi(t,e){e.value&&En(t,"textContent","_s("+e.value+")")}function Zi(t,e){e.value&&En(t,"innerHTML","_s("+e.value+")")}function Qi(t,e){return e=e?d(d({},Is),e):Is,Hi(t,e)}function tr(t,e,n){var i=(e&&e.warn||Nr,e&&e.delimiters?String(e.delimiters)+t:t);if(Ds[i])return Ds[i];var r={},o=Qi(t,e);r.render=er(o.render);var a=o.staticRenderFns.length;r.staticRenderFns=new Array(a);for(var s=0;s<a;s++)r.staticRenderFns[s]=er(o.staticRenderFns[s]);return Ds[i]=r}function er(t){try{return new Function(t)}catch(t){return v}}function nr(t){if(t.outerHTML)return t.outerHTML;var e=document.createElement("div");return e.appendChild(t.cloneNode(!0)),e.innerHTML}var ir,rr,or=r("slot,component",!0),ar=Object.prototype.hasOwnProperty,sr=/-(\w)/g,lr=l(function(t){return t.replace(sr,function(t,e){return e?e.toUpperCase():""})}),cr=l(function(t){return t.charAt(0).toUpperCase()+t.slice(1)}),ur=/([^-])([A-Z])/g,dr=l(function(t){return t.replace(ur,"$1-$2").replace(ur,"$1-$2").toLowerCase()}),fr=Object.prototype.toString,pr="[object Object]",hr=function(){return!1},vr=function(t){return t},mr={optionMergeStrategies:Object.create(null),silent:!1,devtools:!1,errorHandler:null,ignoredElements:[],keyCodes:Object.create(null),isReservedTag:hr,isUnknownElement:hr,getTagNamespace:v,parsePlatformTagName:vr,mustUseProp:hr,_assetTypes:["component","directive","filter"],_lifecycleHooks:["beforeCreate","created","beforeMount","mounted","beforeUpdate","updated","beforeDestroy","destroyed","activated","deactivated"],_maxUpdateCount:100},gr=/[^\w.$]/,yr="__proto__"in{},_r="undefined"!=typeof window,br=_r&&window.navigator.userAgent.toLowerCase(),xr=br&&/msie|trident/.test(br),wr=br&&br.indexOf("msie 9.0")>0,Cr=br&&br.indexOf("edge/")>0,kr=br&&br.indexOf("android")>0,Sr=br&&/iphone|ipad|ipod|ios/.test(br),Tr=function(){return void 0===ir&&(ir=!_r&&"undefined"!=typeof e&&"server"===e.process.env.VUE_ENV),ir},$r=_r&&window.__VUE_DEVTOOLS_GLOBAL_HOOK__,Ar=function(){function t(){i=!1;var t=n.slice(0);n.length=0;for(var e=0;e<t.length;e++)t[e]()}var e,n=[],i=!1;if("undefined"!=typeof Promise&&w(Promise)){var r=Promise.resolve(),o=function(t){console.error(t)};e=function(){r.then(t).catch(o),Sr&&setTimeout(v)}}else if("undefined"==typeof MutationObserver||!w(MutationObserver)&&"[object MutationObserverConstructor]"!==MutationObserver.toString())e=function(){setTimeout(t,0)};else{var a=1,s=new MutationObserver(t),l=document.createTextNode(String(a));s.observe(l,{characterData:!0}),e=function(){a=(a+1)%2,l.data=String(a)}}return function(t,r){var o;if(n.push(function(){t&&t.call(r),o&&o(r)}),i||(i=!0,e()),!t&&"undefined"!=typeof Promise)return new Promise(function(t){o=t})}}();rr="undefined"!=typeof Set&&w(Set)?Set:function(){function t(){this.set=Object.create(null)}return t.prototype.has=function(t){return this.set[t]===!0},t.prototype.add=function(t){this.set[t]=!0},t.prototype.clear=function(){this.set=Object.create(null)},t}();var Er,Nr=v,Or=0,jr=function(){this.id=Or++,this.subs=[]};jr.prototype.addSub=function(t){this.subs.push(t)},jr.prototype.removeSub=function(t){o(this.subs,t)},jr.prototype.depend=function(){jr.target&&jr.target.addDep(this)},jr.prototype.notify=function(){for(var t=this.subs.slice(),e=0,n=t.length;e<n;e++)t[e].update()},jr.target=null;var Dr=[],Ir=Array.prototype,Lr=Object.create(Ir);["push","pop","shift","unshift","splice","sort","reverse"].forEach(function(t){var e=Ir[t];b(Lr,t,function(){for(var n=arguments,i=arguments.length,r=new Array(i);i--;)r[i]=n[i];var o,a=e.apply(this,r),s=this.__ob__;switch(t){case"push":o=r;break;case"unshift":o=r;break;case"splice":o=r.slice(2)}return o&&s.observeArray(o),s.dep.notify(),a})});var Pr=Object.getOwnPropertyNames(Lr),Rr={shouldConvert:!0,isSettingProps:!1},Fr=function(t){if(this.value=t,this.dep=new jr,this.vmCount=0,b(t,"__ob__",this),Array.isArray(t)){var e=yr?S:T;e(t,Lr,Pr),this.observeArray(t)}else this.walk(t)};Fr.prototype.walk=function(t){for(var e=Object.keys(t),n=0;n<e.length;n++)A(t,e[n],t[e[n]])},Fr.prototype.observeArray=function(t){for(var e=0,n=t.length;e<n;e++)$(t[e])};var Mr=mr.optionMergeStrategies;Mr.data=function(t,e,n){return n?t||e?function(){var i="function"==typeof e?e.call(n):e,r="function"==typeof t?t.call(n):void 0;return i?j(i,r):r}:void 0:e?"function"!=typeof e?t:t?function(){return j(e.call(this),t.call(this))}:e:t},mr._lifecycleHooks.forEach(function(t){Mr[t]=D}),mr._assetTypes.forEach(function(t){Mr[t+"s"]=I}),Mr.watch=function(t,e){if(!e)return t;if(!t)return e;var n={};d(n,t);for(var i in e){var r=n[i],o=e[i];r&&!Array.isArray(r)&&(r=[r]),n[i]=r?r.concat(o):[o]}return n},Mr.props=Mr.methods=Mr.computed=function(t,e){if(!e)return t;if(!t)return e;var n=Object.create(null);return d(n,t),d(n,e),n};var Hr=function(t,e){return void 0===e?t:e},qr=Object.freeze({defineReactive:A,_toString:n,toNumber:i,makeMap:r,isBuiltInTag:or,remove:o,hasOwn:a,isPrimitive:s,cached:l,camelize:lr,capitalize:cr,hyphenate:dr,bind:c,toArray:u,extend:d,isObject:f,isPlainObject:p,toObject:h,noop:v,no:hr,identity:vr,genStaticKeys:m,looseEqual:g,looseIndexOf:y,isReserved:_,def:b,parsePath:x,hasProto:yr,inBrowser:_r,UA:br,isIE:xr,isIE9:wr,isEdge:Cr,isAndroid:kr,isIOS:Sr,isServerRendering:Tr,devtools:$r,nextTick:Ar,get _Set(){return rr},mergeOptions:R,resolveAsset:F,get warn(){return Nr},get formatComponentName(){return Er},validateProp:M}),Ur=function(t,e,n,i,r,o,a){this.tag=t,this.data=e,this.children=n,this.text=i,this.elm=r,this.ns=void 0,this.context=o,this.functionalContext=void 0,this.key=e&&e.key,this.componentOptions=a,this.componentInstance=void 0,this.parent=void 0,this.raw=!1,this.isStatic=!1,this.isRootInsert=!0,this.isComment=!1,this.isCloned=!1,this.isOnce=!1},Br={child:{}};Br.child.get=function(){return this.componentInstance},Object.defineProperties(Ur.prototype,Br);var Vr,zr=function(){var t=new Ur;return t.text="",t.isComment=!0,t},Wr={init:X,prepatch:Y,insert:G,destroy:Z},Jr=Object.keys(Wr),Kr=l(function(t){var e="~"===t.charAt(0);t=e?t.slice(1):t;var n="!"===t.charAt(0);return t=n?t.slice(1):t,{name:t,once:e,capture:n}}),Xr=1,Yr=2,Gr=null,Zr=[],Qr={},to=!1,eo=!1,no=0,io=0,ro=function(t,e,n,i){this.vm=t,t._watchers.push(this),i?(this.deep=!!i.deep,this.user=!!i.user,this.lazy=!!i.lazy,this.sync=!!i.sync):this.deep=this.user=this.lazy=this.sync=!1,this.cb=n,this.id=++io,this.active=!0,this.dirty=this.lazy,this.deps=[],this.newDeps=[],this.depIds=new rr,this.newDepIds=new rr,this.expression="","function"==typeof e?this.getter=e:(this.getter=x(e),this.getter||(this.getter=function(){})),this.value=this.lazy?void 0:this.get()};ro.prototype.get=function(){C(this);var t=this.getter.call(this.vm,this.vm);return this.deep&&At(t),k(),this.cleanupDeps(),t},ro.prototype.addDep=function(t){var e=t.id;this.newDepIds.has(e)||(this.newDepIds.add(e),this.newDeps.push(t),this.depIds.has(e)||t.addSub(this))},ro.prototype.cleanupDeps=function(){for(var t=this,e=this.deps.length;e--;){var n=t.deps[e];t.newDepIds.has(n.id)||n.removeSub(t)}var i=this.depIds;this.depIds=this.newDepIds,this.newDepIds=i,this.newDepIds.clear(),i=this.deps,this.deps=this.newDeps,this.newDeps=i,this.newDeps.length=0},ro.prototype.update=function(){this.lazy?this.dirty=!0:this.sync?this.run():$t(this)},ro.prototype.run=function(){if(this.active){var t=this.get();if(t!==this.value||f(t)||this.deep){var e=this.value;if(this.value=t,this.user)try{this.cb.call(this.vm,t,e)}catch(t){if(!mr.errorHandler)throw t;mr.errorHandler.call(null,t,this.vm)}else this.cb.call(this.vm,t,e)}}},ro.prototype.evaluate=function(){this.value=this.get(),this.dirty=!1},ro.prototype.depend=function(){for(var t=this,e=this.deps.length;e--;)t.deps[e].depend()},ro.prototype.teardown=function(){var t=this;if(this.active){this.vm._isBeingDestroyed||o(this.vm._watchers,this);for(var e=this.deps.length;e--;)t.deps[e].removeSub(t);this.active=!1}};var oo=new rr,ao={enumerable:!0,configurable:!0,get:v,set:v},so=0;Ht(Bt),Ft(Bt),xt(Bt),Ct(Bt),vt(Bt);var lo=[String,RegExp],co={name:"keep-alive",abstract:!0,props:{include:lo,exclude:lo},created:function(){this.cache=Object.create(null)},destroyed:function(){var t=this;for(var e in this.cache)Gt(t.cache[e])},watch:{include:function(t){Yt(this.cache,function(e){return Xt(t,e)})},exclude:function(t){Yt(this.cache,function(e){return!Xt(t,e)})}},render:function(){var t=ut(this.$slots.default),e=t&&t.componentOptions;if(e){var n=Kt(e);if(n&&(this.include&&!Xt(this.include,n)||this.exclude&&Xt(this.exclude,n)))return t;var i=null==t.key?e.Ctor.cid+(e.tag?"::"+e.tag:""):t.key;this.cache[i]?t.componentInstance=this.cache[i].componentInstance:this.cache[i]=t,t.data.keepAlive=!0}return t}},uo={KeepAlive:co};Zt(Bt),Object.defineProperty(Bt.prototype,"$isServer",{get:Tr}),Bt.version="2.1.10";var fo,po,ho=r("input,textarea,option,select"),vo=function(t,e,n){return"value"===n&&ho(t)&&"button"!==e||"selected"===n&&"option"===t||"checked"===n&&"input"===t||"muted"===n&&"video"===t},mo=r("contenteditable,draggable,spellcheck"),go=r("allowfullscreen,async,autofocus,autoplay,checked,compact,controls,declare,default,defaultchecked,defaultmuted,defaultselected,defer,disabled,enabled,formnovalidate,hidden,indeterminate,inert,ismap,itemscope,loop,multiple,muted,nohref,noresize,noshade,novalidate,nowrap,open,pauseonexit,readonly,required,reversed,scoped,seamless,selected,sortable,translate,truespeed,typemustmatch,visible"),yo="http://www.w3.org/1999/xlink",_o=function(t){return":"===t.charAt(5)&&"xlink"===t.slice(0,5)},bo=function(t){return _o(t)?t.slice(6,t.length):""},xo=function(t){return null==t||t===!1},wo={svg:"http://www.w3.org/2000/svg",math:"http://www.w3.org/1998/Math/MathML"},Co=r("html,body,base,head,link,meta,style,title,address,article,aside,footer,header,h1,h2,h3,h4,h5,h6,hgroup,nav,section,div,dd,dl,dt,figcaption,figure,hr,img,li,main,ol,p,pre,ul,a,b,abbr,bdi,bdo,br,cite,code,data,dfn,em,i,kbd,mark,q,rp,rt,rtc,ruby,s,samp,small,span,strong,sub,sup,time,u,var,wbr,area,audio,map,track,video,embed,object,param,source,canvas,script,noscript,del,ins,caption,col,colgroup,table,thead,tbody,td,th,tr,button,datalist,fieldset,form,input,label,legend,meter,optgroup,option,output,progress,select,textarea,details,dialog,menu,menuitem,summary,content,element,shadow,template"),ko=r("svg,animate,circle,clippath,cursor,defs,desc,ellipse,filter,font-face,g,glyph,image,line,marker,mask,missing-glyph,path,pattern,polygon,polyline,rect,switch,symbol,text,textpath,tspan,use,view",!0),So=function(t){return"pre"===t},To=function(t){return Co(t)||ko(t)},$o=Object.create(null),Ao=Object.freeze({createElement:se,createElementNS:le,createTextNode:ce,createComment:ue,insertBefore:de,removeChild:fe,appendChild:pe,parentNode:he,nextSibling:ve,tagName:me,setTextContent:ge,setAttribute:ye}),Eo={create:function(t,e){_e(e)},update:function(t,e){t.data.ref!==e.data.ref&&(_e(t,!0),_e(e))},destroy:function(t){_e(t,!0)}},No=new Ur("",{},[]),Oo=["create","activate","update","remove","destroy"],jo={create:Se,update:Se,destroy:function(t){Se(t,No)}},Do=Object.create(null),Io=[Eo,jo],Lo={create:Ne,update:Ne},Po={create:je,
update:je},Ro={create:Le,update:Le},Fo={create:Pe,update:Pe},Mo=l(function(t){var e={},n=/;(?![^(]*\))/g,i=/:(.+)/;return t.split(n).forEach(function(t){if(t){var n=t.split(i);n.length>1&&(e[n[0].trim()]=n[1].trim())}}),e}),Ho=/^--/,qo=/\s*!important$/,Uo=function(t,e,n){Ho.test(e)?t.style.setProperty(e,n):qo.test(n)?t.style.setProperty(e,n.replace(qo,""),"important"):t.style[Vo(e)]=n},Bo=["Webkit","Moz","ms"],Vo=l(function(t){if(po=po||document.createElement("div"),t=lr(t),"filter"!==t&&t in po.style)return t;for(var e=t.charAt(0).toUpperCase()+t.slice(1),n=0;n<Bo.length;n++){var i=Bo[n]+e;if(i in po.style)return i}}),zo={create:Be,update:Be},Wo=_r&&!wr,Jo="transition",Ko="animation",Xo="transition",Yo="transitionend",Go="animation",Zo="animationend";Wo&&(void 0===window.ontransitionend&&void 0!==window.onwebkittransitionend&&(Xo="WebkitTransition",Yo="webkitTransitionEnd"),void 0===window.onanimationend&&void 0!==window.onwebkitanimationend&&(Go="WebkitAnimation",Zo="webkitAnimationEnd"));var Qo=_r&&window.requestAnimationFrame?window.requestAnimationFrame.bind(window):setTimeout,ta=/\b(transform|all)(,|$)/,ea=l(function(t){return{enterClass:t+"-enter",leaveClass:t+"-leave",appearClass:t+"-enter",enterToClass:t+"-enter-to",leaveToClass:t+"-leave-to",appearToClass:t+"-enter-to",enterActiveClass:t+"-enter-active",leaveActiveClass:t+"-leave-active",appearActiveClass:t+"-enter-active"}}),na=_r?{create:rn,activate:rn,remove:function(t,e){t.data.show?e():tn(t,e)}}:{},ia=[Lo,Po,Ro,Fo,zo,na],ra=ia.concat(Io),oa=ke({nodeOps:Ao,modules:ra});wr&&document.addEventListener("selectionchange",function(){var t=document.activeElement;t&&t.vmodel&&un(t,"input")});var aa={inserted:function(t,e,n){if("select"===n.tag){var i=function(){on(t,e,n.context)};i(),(xr||Cr)&&setTimeout(i,0)}else"textarea"!==n.tag&&"text"!==t.type||(t._vModifiers=e.modifiers,e.modifiers.lazy||(kr||(t.addEventListener("compositionstart",ln),t.addEventListener("compositionend",cn)),wr&&(t.vmodel=!0)))},componentUpdated:function(t,e,n){if("select"===n.tag){on(t,e,n.context);var i=t.multiple?e.value.some(function(e){return an(e,t.options)}):e.value!==e.oldValue&&an(e.value,t.options);i&&un(t,"change")}}},sa={bind:function(t,e,n){var i=e.value;n=dn(n);var r=n.data&&n.data.transition,o=t.__vOriginalDisplay="none"===t.style.display?"":t.style.display;i&&r&&!wr?(n.data.show=!0,Qe(n,function(){t.style.display=o})):t.style.display=i?o:"none"},update:function(t,e,n){var i=e.value,r=e.oldValue;if(i!==r){n=dn(n);var o=n.data&&n.data.transition;o&&!wr?(n.data.show=!0,i?Qe(n,function(){t.style.display=t.__vOriginalDisplay}):tn(n,function(){t.style.display="none"})):t.style.display=i?t.__vOriginalDisplay:"none"}},unbind:function(t,e,n,i,r){r||(t.style.display=t.__vOriginalDisplay)}},la={model:aa,show:sa},ca={name:String,appear:Boolean,css:Boolean,mode:String,type:String,enterClass:String,leaveClass:String,enterToClass:String,leaveToClass:String,enterActiveClass:String,leaveActiveClass:String,appearClass:String,appearActiveClass:String,appearToClass:String},ua={name:"transition",props:ca,abstract:!0,render:function(t){var e=this,n=this.$slots.default;if(n&&(n=n.filter(function(t){return t.tag}),n.length)){var i=this.mode,r=n[0];if(vn(this.$vnode))return r;var o=fn(r);if(!o)return r;if(this._leaving)return hn(t,r);var a="__transition-"+this._uid+"-",l=o.key=null==o.key?a+o.tag:s(o.key)?0===String(o.key).indexOf(a)?o.key:a+o.key:o.key,c=(o.data||(o.data={})).transition=pn(this),u=this._vnode,f=fn(u);if(o.data.directives&&o.data.directives.some(function(t){return"show"===t.name})&&(o.data.show=!0),f&&f.data&&!mn(o,f)){var p=f&&(f.data.transition=d({},c));if("out-in"===i)return this._leaving=!0,rt(p,"afterLeave",function(){e._leaving=!1,e.$forceUpdate()},l),hn(t,r);if("in-out"===i){var h,v=function(){h()};rt(c,"afterEnter",v,l),rt(c,"enterCancelled",v,l),rt(p,"delayLeave",function(t){h=t},l)}}return r}}},da=d({tag:String,moveClass:String},ca);delete da.mode;var fa={props:da,render:function(t){for(var e=this.tag||this.$vnode.data.tag||"span",n=Object.create(null),i=this.prevChildren=this.children,r=this.$slots.default||[],o=this.children=[],a=pn(this),s=0;s<r.length;s++){var l=r[s];if(l.tag)if(null!=l.key&&0!==String(l.key).indexOf("__vlist"))o.push(l),n[l.key]=l,(l.data||(l.data={})).transition=a;else;}if(i){for(var c=[],u=[],d=0;d<i.length;d++){var f=i[d];f.data.transition=a,f.data.pos=f.elm.getBoundingClientRect(),n[f.key]?c.push(f):u.push(f)}this.kept=t(e,null,c),this.removed=u}return t(e,null,o)},beforeUpdate:function(){this.__patch__(this._vnode,this.kept,!1,!0),this._vnode=this.kept},updated:function(){var t=this.prevChildren,e=this.moveClass||(this.name||"v")+"-move";if(t.length&&this.hasMove(t[0].elm,e)){t.forEach(gn),t.forEach(yn),t.forEach(_n);document.body.offsetHeight;t.forEach(function(t){if(t.data.moved){var n=t.elm,i=n.style;Je(n,e),i.transform=i.WebkitTransform=i.transitionDuration="",n.addEventListener(Yo,n._moveCb=function t(i){i&&!/transform$/.test(i.propertyName)||(n.removeEventListener(Yo,t),n._moveCb=null,Ke(n,e))})}})}},methods:{hasMove:function(t,e){if(!Wo)return!1;if(null!=this._hasMove)return this._hasMove;Je(t,e);var n=Ye(t);return Ke(t,e),this._hasMove=n.hasTransform}}},pa={Transition:ua,TransitionGroup:fa};Bt.config.isUnknownElement=oe,Bt.config.isReservedTag=To,Bt.config.getTagNamespace=re,Bt.config.mustUseProp=vo,d(Bt.options.directives,la),d(Bt.options.components,pa),Bt.prototype.__patch__=_r?oa:v,Bt.prototype.$mount=function(t,e){return t=t&&_r?ae(t):void 0,this._mount(t,e)},setTimeout(function(){mr.devtools&&$r&&$r.emit("init",Bt)},0);var ha,va=!!_r&&bn("\n","&#10;"),ma=r("area,base,br,col,embed,frame,hr,img,input,isindex,keygen,link,meta,param,source,track,wbr",!0),ga=r("colgroup,dd,dt,li,options,p,td,tfoot,th,thead,tr,source",!0),ya=r("address,article,aside,base,blockquote,body,caption,col,colgroup,dd,details,dialog,div,dl,dt,fieldset,figcaption,figure,footer,form,h1,h2,h3,h4,h5,h6,head,header,hgroup,hr,html,legend,li,menuitem,meta,optgroup,option,param,rp,rt,source,style,summary,tbody,td,tfoot,th,thead,title,tr,track",!0),_a=/([^\s"'<>\/=]+)/,ba=/(?:=)/,xa=[/"([^"]*)"+/.source,/'([^']*)'+/.source,/([^\s"'=<>`]+)/.source],wa=new RegExp("^\\s*"+_a.source+"(?:\\s*("+ba.source+")\\s*(?:"+xa.join("|")+"))?"),Ca="[a-zA-Z_][\\w\\-\\.]*",ka="((?:"+Ca+"\\:)?"+Ca+")",Sa=new RegExp("^<"+ka),Ta=/^\s*(\/?)>/,$a=new RegExp("^<\\/"+ka+"[^>]*>"),Aa=/^<!DOCTYPE [^>]+>/i,Ea=/^<!--/,Na=/^<!\[/,Oa=!1;"x".replace(/x(.)?/g,function(t,e){Oa=""===e});var ja,Da,Ia,La,Pa,Ra,Fa,Ma,Ha,qa,Ua,Ba,Va,za,Wa,Ja,Ka,Xa,Ya,Ga,Za,Qa,ts,es,ns,is=r("script,style",!0),rs={},os=/&lt;/g,as=/&gt;/g,ss=/&#10;/g,ls=/&amp;/g,cs=/&quot;/g,us=/\{\{((?:.|\n)+?)\}\}/g,ds=/[-.*+?^${}()|[\]\/\\]/g,fs=l(function(t){var e=t[0].replace(ds,"\\$&"),n=t[1].replace(ds,"\\$&");return new RegExp(e+"((?:.|\\n)+?)"+n,"g")}),ps=/^v-|^@|^:/,hs=/(.*?)\s+(?:in|of)\s+(.*)/,vs=/\((\{[^}]*\}|[^,]*),([^,]*)(?:,([^,]*))?\)/,ms=/^:|^v-bind:/,gs=/^@|^v-on:/,ys=/:(.*)$/,_s=/\.[^.]+/g,bs=l(xn),xs=/^xmlns:NS\d+/,ws=/^NS\d+:/,Cs=l(si),ks=/^\s*([\w$_]+|\([^)]*?\))\s*=>|^function\s*\(/,Ss=/^\s*[A-Za-z_$][\w$]*(?:\.[A-Za-z_$][\w$]*|\['.*?']|\[".*?"]|\[\d+]|\[[A-Za-z_$][\w$]*])*\s*$/,Ts={esc:27,tab:9,enter:13,space:32,up:38,left:37,right:39,down:40,delete:[8,46]},$s={stop:"$event.stopPropagation();",prevent:"$event.preventDefault();",self:"if($event.target !== $event.currentTarget)return;",ctrl:"if(!$event.ctrlKey)return;",shift:"if(!$event.shiftKey)return;",alt:"if(!$event.altKey)return;",meta:"if(!$event.metaKey)return;"},As={bind:gi,cloak:v},Es=(new RegExp("\\b"+"do,if,for,let,new,try,var,case,else,with,await,break,catch,class,const,super,throw,while,yield,delete,export,import,return,switch,default,extends,finally,continue,debugger,function,arguments".split(",").join("\\b|\\b")+"\\b"),{staticKeys:["staticClass"],transformNode:qi,genData:Ui}),Ns={staticKeys:["staticStyle"],transformNode:Bi,genData:Vi},Os=[Es,Ns],js={model:zi,text:Gi,html:Zi},Ds=Object.create(null),Is={expectHTML:!0,modules:Os,staticKeys:m(Os),directives:js,isReservedTag:To,isUnaryTag:ma,mustUseProp:vo,getTagNamespace:re,isPreTag:So},Ls=l(function(t){var e=ae(t);return e&&e.innerHTML}),Ps=Bt.prototype.$mount;Bt.prototype.$mount=function(t,e){if(t=t&&ae(t),t===document.body||t===document.documentElement)return this;var n=this.$options;if(!n.render){var i=n.template;if(i)if("string"==typeof i)"#"===i.charAt(0)&&(i=Ls(i));else{if(!i.nodeType)return this;i=i.innerHTML}else t&&(i=nr(t));if(i){var r=tr(i,{warn:Nr,shouldDecodeNewlines:va,delimiters:n.delimiters},this),o=r.render,a=r.staticRenderFns;n.render=o,n.staticRenderFns=a}}return Ps.call(this,t,e)},Bt.compile=tr,t.exports=Bt}).call(e,n(86))},function(t,e){var n;n=function(){return this}();try{n=n||Function("return this")()||(0,eval)("this")}catch(t){"object"==typeof window&&(n=window)}t.exports=n},function(t,e,n){t.exports=n(11)}]);