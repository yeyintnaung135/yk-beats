/**!
 * @fileOverview Kickass library to create and place poppers near their reference elements.
 * @version 1.15.0
 * @license
 * Copyright (c) 2016 Federico Zivolo and contributors
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */
!function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):e.Popper=t()}(this,function(){"use strict";for(var e="undefined"!=typeof window&&"undefined"!=typeof document,t=["Edge","Trident","Firefox"],n=0,o=0;o<t.length;o+=1)if(e&&0<=navigator.userAgent.indexOf(t[o])){n=1;break}var i=e&&window.Promise?function ee(e){var t=!1;return function(){t||(t=!0,window.Promise.resolve().then(function(){t=!1,e()}))}}:function te(e){var t=!1;return function(){t||(t=!0,setTimeout(function(){t=!1,e()},n))}};function a(e){return e&&"[object Function]"==={}.toString.call(e)}function y(e,t){if(1!==e.nodeType)return[];var n=e.ownerDocument.defaultView.getComputedStyle(e,null);return t?n[t]:n}function g(e){return"HTML"===e.nodeName?e:e.parentNode||e.host}function v(e){if(!e)return document.body;switch(e.nodeName){case"HTML":case"BODY":return e.ownerDocument.body;case"#document":return e.body}var t=y(e),n=t.overflow,o=t.overflowX,r=t.overflowY;return/(auto|scroll|overlay)/.test(n+r+o)?e:v(g(e))}var r=e&&!(!window.MSInputMethodContext||!document.documentMode),f=e&&/MSIE 10/.test(navigator.userAgent);function b(e){return 11===e?r:10===e?f:r||f}function x(e){if(!e)return document.documentElement;for(var t=b(10)?document.body:null,n=e.offsetParent||null;n===t&&e.nextElementSibling;)n=(e=e.nextElementSibling).offsetParent;var o=n&&n.nodeName;return o&&"BODY"!==o&&"HTML"!==o?-1!==["TH","TD","TABLE"].indexOf(n.nodeName)&&"static"===y(n,"position")?x(n):n:e?e.ownerDocument.documentElement:document.documentElement}function p(e){return null!==e.parentNode?p(e.parentNode):e}function w(e,t){if(!(e&&e.nodeType&&t&&t.nodeType))return document.documentElement;var n=e.compareDocumentPosition(t)&Node.DOCUMENT_POSITION_FOLLOWING,o=n?e:t,r=n?t:e,i=document.createRange();i.setStart(o,0),i.setEnd(r,0);var a=i.commonAncestorContainer;if(e!==a&&t!==a||o.contains(r))return function s(e){var t=e.nodeName;return"BODY"!==t&&("HTML"===t||x(e.firstElementChild)===e)}(a)?a:x(a);var f=p(e);return f.host?w(f.host,t):w(e,p(t).host)}function E(e,t){var n="top"===(1<arguments.length&&t!==undefined?t:"top")?"scrollTop":"scrollLeft",o=e.nodeName;if("BODY"!==o&&"HTML"!==o)return e[n];var r=e.ownerDocument.documentElement;return(e.ownerDocument.scrollingElement||r)[n]}function d(e,t){var n="x"===t?"Left":"Top",o="Left"==n?"Right":"Bottom";return parseFloat(e["border"+n+"Width"],10)+parseFloat(e["border"+o+"Width"],10)}function s(e,t,n,o){return Math.max(t["offset"+e],t["scroll"+e],n["client"+e],n["offset"+e],n["scroll"+e],b(10)?parseInt(n["offset"+e])+parseInt(o["margin"+("Height"===e?"Top":"Left")])+parseInt(o["margin"+("Height"===e?"Bottom":"Right")]):0)}function O(e){var t=e.body,n=e.documentElement,o=b(10)&&getComputedStyle(n);return{height:s("Height",t,n,o),width:s("Width",t,n,o)}}var l=function(e,t,n){return t&&u(e.prototype,t),n&&u(e,n),e};function u(e,t){for(var n=0;n<t.length;n++){var o=t[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}function L(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}var T=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var o in n)Object.prototype.hasOwnProperty.call(n,o)&&(e[o]=n[o])}return e};function D(e){return T({},e,{right:e.left+e.width,bottom:e.top+e.height})}function M(e){var t={};try{if(b(10)){t=e.getBoundingClientRect();var n=E(e,"top"),o=E(e,"left");t.top+=n,t.left+=o,t.bottom+=n,t.right+=o}else t=e.getBoundingClientRect()}catch(u){}var r={left:t.left,top:t.top,width:t.right-t.left,height:t.bottom-t.top},i="HTML"===e.nodeName?O(e.ownerDocument):{},a=i.width||e.clientWidth||r.right-r.left,f=i.height||e.clientHeight||r.bottom-r.top,s=e.offsetWidth-a,p=e.offsetHeight-f;if(s||p){var l=y(e);s-=d(l,"x"),p-=d(l,"y"),r.width-=s,r.height-=p}return D(r)}function N(e,t,n){var o=2<arguments.length&&n!==undefined&&n,r=b(10),i="HTML"===t.nodeName,a=M(e),f=M(t),s=v(e),p=y(t),l=parseFloat(p.borderTopWidth,10),u=parseFloat(p.borderLeftWidth,10);o&&i&&(f.top=Math.max(f.top,0),f.left=Math.max(f.left,0));var d=D({top:a.top-f.top-l,left:a.left-f.left-u,width:a.width,height:a.height});if(d.marginTop=0,d.marginLeft=0,!r&&i){var c=parseFloat(p.marginTop,10),h=parseFloat(p.marginLeft,10);d.top-=l-c,d.bottom-=l-c,d.left-=u-h,d.right-=u-h,d.marginTop=c,d.marginLeft=h}return(r&&!o?t.contains(s):t===s&&"BODY"!==s.nodeName)&&(d=function m(e,t,n){var o=2<arguments.length&&n!==undefined&&n,r=E(t,"top"),i=E(t,"left"),a=o?-1:1;return e.top+=r*a,e.bottom+=r*a,e.left+=i*a,e.right+=i*a,e}(d,t)),d}function F(e){if(!e||!e.parentElement||b())return document.documentElement;for(var t=e.parentElement;t&&"none"===y(t,"transform");)t=t.parentElement;return t||document.documentElement}function c(e,t,n,o,r){var i=4<arguments.length&&r!==undefined&&r,a={top:0,left:0},f=i?F(e):w(e,t);if("viewport"===o)a=function h(e,t){var n=1<arguments.length&&t!==undefined&&t,o=e.ownerDocument.documentElement,r=N(e,o),i=Math.max(o.clientWidth,window.innerWidth||0),a=Math.max(o.clientHeight,window.innerHeight||0),f=n?0:E(o),s=n?0:E(o,"left");return D({top:f-r.top+r.marginTop,left:s-r.left+r.marginLeft,width:i,height:a})}(f,i);else{var s=void 0;"scrollParent"===o?"BODY"===(s=v(g(t))).nodeName&&(s=e.ownerDocument.documentElement):s="window"===o?e.ownerDocument.documentElement:o;var p=N(s,f,i);if("HTML"!==s.nodeName||function m(e){var t=e.nodeName;if("BODY"===t||"HTML"===t)return!1;if("fixed"===y(e,"position"))return!0;var n=g(e);return!!n&&m(n)}(f))a=p;else{var l=O(e.ownerDocument),u=l.height,d=l.width;a.top+=p.top-p.marginTop,a.bottom=u+p.top,a.left+=p.left-p.marginLeft,a.right=d+p.left}}var c="number"==typeof(n=n||0);return a.left+=c?n:n.left||0,a.top+=c?n:n.top||0,a.right-=c?n:n.right||0,a.bottom-=c?n:n.bottom||0,a}function h(e,t,o,n,r,i){var a=5<arguments.length&&i!==undefined?i:0;if(-1===e.indexOf("auto"))return e;var f=c(o,n,a,r),s={top:{width:f.width,height:t.top-f.top},right:{width:f.right-t.right,height:f.height},bottom:{width:f.width,height:f.bottom-t.bottom},left:{width:t.left-f.left,height:f.height}},p=Object.keys(s).map(function(e){return T({key:e},s[e],{area:function t(e){return e.width*e.height}(s[e])})}).sort(function(e,t){return t.area-e.area}),l=p.filter(function(e){var t=e.width,n=e.height;return t>=o.clientWidth&&n>=o.clientHeight}),u=0<l.length?l[0].key:p[0].key,d=e.split("-")[1];return u+(d?"-"+d:"")}function m(e,t,n,o){var r=3<arguments.length&&o!==undefined?o:null;return N(n,r?F(t):w(t,n),r)}function k(e){var t=e.ownerDocument.defaultView.getComputedStyle(e),n=parseFloat(t.marginTop||0)+parseFloat(t.marginBottom||0),o=parseFloat(t.marginLeft||0)+parseFloat(t.marginRight||0);return{width:e.offsetWidth+o,height:e.offsetHeight+n}}function H(e){var t={left:"right",right:"left",bottom:"top",top:"bottom"};return e.replace(/left|right|bottom|top/g,function(e){return t[e]})}function C(e,t,n){n=n.split("-")[0];var o=k(e),r={width:o.width,height:o.height},i=-1!==["right","left"].indexOf(n),a=i?"top":"left",f=i?"left":"top",s=i?"height":"width",p=i?"width":"height";return r[a]=t[a]+t[s]/2-o[s]/2,r[f]=n===f?t[f]-o[p]:t[H(f)],r}function B(e,t){return Array.prototype.find?e.find(t):e.filter(t)[0]}function A(e,n,t){return(t===undefined?e:e.slice(0,function r(e,t,n){if(Array.prototype.findIndex)return e.findIndex(function(e){return e[t]===n});var o=B(e,function(e){return e[t]===n});return e.indexOf(o)}(e,"name",t))).forEach(function(e){e["function"]&&console.warn("`modifier.function` is deprecated, use `modifier.fn`!");var t=e["function"]||e.fn;e.enabled&&a(t)&&(n.offsets.popper=D(n.offsets.popper),n.offsets.reference=D(n.offsets.reference),n=t(n,e))}),n}function P(e,n){return e.some(function(e){var t=e.name;return e.enabled&&t===n})}function S(e){for(var t=[!1,"ms","Webkit","Moz","O"],n=e.charAt(0).toUpperCase()+e.slice(1),o=0;o<t.length;o++){var r=t[o],i=r?""+r+n:e;if("undefined"!=typeof document.body.style[i])return i}return null}function W(e){var t=e.ownerDocument;return t?t.defaultView:window}function j(e,t,n,o){n.updateBound=o,W(e).addEventListener("resize",n.updateBound,{passive:!0});var r=v(e);return function a(e,t,n,o){var r="BODY"===e.nodeName,i=r?e.ownerDocument.defaultView:e;i.addEventListener(t,n,{passive:!0}),r||a(v(i.parentNode),t,n,o),o.push(i)}(r,"scroll",n.updateBound,n.scrollParents),n.scrollElement=r,n.eventsEnabled=!0,n}function I(){this.state.eventsEnabled&&(cancelAnimationFrame(this.scheduleUpdate),this.state=function n(e,t){return W(e).removeEventListener("resize",t.updateBound),t.scrollParents.forEach(function(e){e.removeEventListener("scroll",t.updateBound)}),t.updateBound=null,t.scrollParents=[],t.scrollElement=null,t.eventsEnabled=!1,t}(this.reference,this.state))}function R(e){return""!==e&&!isNaN(parseFloat(e))&&isFinite(e)}function U(n,o){Object.keys(o).forEach(function(e){var t="";-1!==["width","height","top","right","bottom","left"].indexOf(e)&&R(o[e])&&(t="px"),n.style[e]=o[e]+t})}var Y=e&&/Firefox/i.test(navigator.userAgent);function V(e,t,n){var o=B(e,function(e){return e.name===t}),r=!!o&&e.some(function(e){return e.name===n&&e.enabled&&e.order<o.order});if(!r){var i="`"+t+"`",a="`"+n+"`";console.warn(a+" modifier is required by "+i+" modifier in order to work, be sure to include it before "+i+"!")}return r}var q=["auto-start","auto","auto-end","top-start","top","top-end","right-start","right","right-end","bottom-end","bottom","bottom-start","left-end","left","left-start"],z=q.slice(3);function G(e,t){var n=1<arguments.length&&t!==undefined&&t,o=z.indexOf(e),r=z.slice(o+1).concat(z.slice(0,o));return n?r.reverse():r}var _="flip",X="clockwise",J="counterclockwise";function K(e,r,i,t){var a=[0,0],f=-1!==["right","left"].indexOf(t),n=e.split(/(\+|\-)/).map(function(e){return e.trim()}),o=n.indexOf(B(n,function(e){return-1!==e.search(/,|\s/)}));n[o]&&-1===n[o].indexOf(",")&&console.warn("Offsets separated by white space(s) are deprecated, use a comma (,) instead.");var s=/\s*,\s*|\s+/,p=-1!==o?[n.slice(0,o).concat([n[o].split(s)[0]]),[n[o].split(s)[1]].concat(n.slice(o+1))]:[n];return(p=p.map(function(e,t){var n=(1===t?!f:f)?"height":"width",o=!1;return e.reduce(function(e,t){return""===e[e.length-1]&&-1!==["+","-"].indexOf(t)?(e[e.length-1]=t,o=!0,e):o?(e[e.length-1]+=t,o=!1,e):e.concat(t)},[]).map(function(e){return function s(e,t,n,o){var r=e.match(/((?:\-|\+)?\d*\.?\d*)(.*)/),i=+r[1],a=r[2];if(!i)return e;if(0!==a.indexOf("%"))return"vh"!==a&&"vw"!==a?i:("vh"===a?Math.max(document.documentElement.clientHeight,window.innerHeight||0):Math.max(document.documentElement.clientWidth,window.innerWidth||0))/100*i;var f=void 0;switch(a){case"%p":f=n;break;case"%":case"%r":default:f=o}return D(f)[t]/100*i}(e,n,r,i)})})).forEach(function(n,o){n.forEach(function(e,t){R(e)&&(a[o]+=e*("-"===n[t-1]?-1:1))})}),a}var Q={placement:"bottom",positionFixed:!1,eventsEnabled:!0,removeOnDestroy:!1,onCreate:function(){},onUpdate:function(){},modifiers:{shift:{order:100,enabled:!0,fn:function ne(e){var t=e.placement,n=t.split("-")[0],o=t.split("-")[1];if(o){var r=e.offsets,i=r.reference,a=r.popper,f=-1!==["bottom","top"].indexOf(n),s=f?"left":"top",p=f?"width":"height",l={start:L({},s,i[s]),end:L({},s,i[s]+i[p]-a[p])};e.offsets.popper=T({},a,l[o])}return e}},offset:{order:200,enabled:!0,fn:function oe(e,t){var n=t.offset,o=e.placement,r=e.offsets,i=r.popper,a=r.reference,f=o.split("-")[0],s=void 0;return s=R(+n)?[+n,0]:K(n,i,a,f),"left"===f?(i.top+=s[0],i.left-=s[1]):"right"===f?(i.top+=s[0],i.left+=s[1]):"top"===f?(i.left+=s[0],i.top-=s[1]):"bottom"===f&&(i.left+=s[0],i.top+=s[1]),e.popper=i,e},offset:0},preventOverflow:{order:300,enabled:!0,fn:function re(e,o){var t=o.boundariesElement||x(e.instance.popper);e.instance.reference===t&&(t=x(t));var n=S("transform"),r=e.instance.popper.style,i=r.top,a=r.left,f=r[n];r.top="",r.left="",r[n]="";var s=c(e.instance.popper,e.instance.reference,o.padding,t,e.positionFixed);r.top=i,r.left=a,r[n]=f,o.boundaries=s;var p=o.priority,l=e.offsets.popper,u={primary:function(e){var t=l[e];return l[e]<s[e]&&!o.escapeWithReference&&(t=Math.max(l[e],s[e])),L({},e,t)},secondary:function(e){var t="right"===e?"left":"top",n=l[t];return l[e]>s[e]&&!o.escapeWithReference&&(n=Math.min(l[t],s[e]-("right"===e?l.width:l.height))),L({},t,n)}};return p.forEach(function(e){var t=-1!==["left","top"].indexOf(e)?"primary":"secondary";l=T({},l,u[t](e))}),e.offsets.popper=l,e},priority:["left","right","top","bottom"],padding:5,boundariesElement:"scrollParent"},keepTogether:{order:400,enabled:!0,fn:function ie(e){var t=e.offsets,n=t.popper,o=t.reference,r=e.placement.split("-")[0],i=Math.floor,a=-1!==["top","bottom"].indexOf(r),f=a?"right":"bottom",s=a?"left":"top",p=a?"width":"height";return n[f]<i(o[s])&&(e.offsets.popper[s]=i(o[s])-n[p]),n[s]>i(o[f])&&(e.offsets.popper[s]=i(o[f])),e}},arrow:{order:500,enabled:!0,fn:function ae(e,t){var n;if(!V(e.instance.modifiers,"arrow","keepTogether"))return e;var o=t.element;if("string"==typeof o){if(!(o=e.instance.popper.querySelector(o)))return e}else if(!e.instance.popper.contains(o))return console.warn("WARNING: `arrow.element` must be child of its popper element!"),e;var r=e.placement.split("-")[0],i=e.offsets,a=i.popper,f=i.reference,s=-1!==["left","right"].indexOf(r),p=s?"height":"width",l=s?"Top":"Left",u=l.toLowerCase(),d=s?"left":"top",c=s?"bottom":"right",h=k(o)[p];f[c]-h<a[u]&&(e.offsets.popper[u]-=a[u]-(f[c]-h)),f[u]+h>a[c]&&(e.offsets.popper[u]+=f[u]+h-a[c]),e.offsets.popper=D(e.offsets.popper);var m=f[u]+f[p]/2-h/2,g=y(e.instance.popper),v=parseFloat(g["margin"+l],10),b=parseFloat(g["border"+l+"Width"],10),w=m-e.offsets.popper[u]-v-b;return w=Math.max(Math.min(a[p]-h,w),0),e.arrowElement=o,e.offsets.arrow=(L(n={},u,Math.round(w)),L(n,d,""),n),e},element:"[x-arrow]"},flip:{order:600,enabled:!0,fn:function fe(g,v){if(P(g.instance.modifiers,"inner"))return g;if(g.flipped&&g.placement===g.originalPlacement)return g;var b=c(g.instance.popper,g.instance.reference,v.padding,v.boundariesElement,g.positionFixed),w=g.placement.split("-")[0],y=H(w),x=g.placement.split("-")[1]||"",E=[];switch(v.behavior){case _:E=[w,y];break;case X:E=G(w);break;case J:E=G(w,!0);break;default:E=v.behavior}return E.forEach(function(e,t){if(w!==e||E.length===t+1)return g;w=g.placement.split("-")[0],y=H(w);var n=g.offsets.popper,o=g.offsets.reference,r=Math.floor,i="left"===w&&r(n.right)>r(o.left)||"right"===w&&r(n.left)<r(o.right)||"top"===w&&r(n.bottom)>r(o.top)||"bottom"===w&&r(n.top)<r(o.bottom),a=r(n.left)<r(b.left),f=r(n.right)>r(b.right),s=r(n.top)<r(b.top),p=r(n.bottom)>r(b.bottom),l="left"===w&&a||"right"===w&&f||"top"===w&&s||"bottom"===w&&p,u=-1!==["top","bottom"].indexOf(w),d=!!v.flipVariations&&(u&&"start"===x&&a||u&&"end"===x&&f||!u&&"start"===x&&s||!u&&"end"===x&&p),c=!!v.flipVariationsByContent&&(u&&"start"===x&&f||u&&"end"===x&&a||!u&&"start"===x&&p||!u&&"end"===x&&s),h=d||c;(i||l||h)&&(g.flipped=!0,(i||l)&&(w=E[t+1]),h&&(x=function m(e){return"end"===e?"start":"start"===e?"end":e}(x)),g.placement=w+(x?"-"+x:""),g.offsets.popper=T({},g.offsets.popper,C(g.instance.popper,g.offsets.reference,g.placement)),g=A(g.instance.modifiers,g,"flip"))}),g},behavior:"flip",padding:5,boundariesElement:"viewport",flipVariations:!1,flipVariationsByContent:!1},inner:{order:700,enabled:!1,fn:function se(e){var t=e.placement,n=t.split("-")[0],o=e.offsets,r=o.popper,i=o.reference,a=-1!==["left","right"].indexOf(n),f=-1===["top","left"].indexOf(n);return r[a?"left":"top"]=i[n]-(f?r[a?"width":"height"]:0),e.placement=H(t),e.offsets.popper=D(r),e}},hide:{order:800,enabled:!0,fn:function pe(e){if(!V(e.instance.modifiers,"hide","preventOverflow"))return e;var t=e.offsets.reference,n=B(e.instance.modifiers,function(e){return"preventOverflow"===e.name}).boundaries;if(t.bottom<n.top||t.left>n.right||t.top>n.bottom||t.right<n.left){if(!0===e.hide)return e;e.hide=!0,e.attributes["x-out-of-boundaries"]=""}else{if(!1===e.hide)return e;e.hide=!1,e.attributes["x-out-of-boundaries"]=!1}return e}},computeStyle:{order:850,enabled:!0,fn:function le(e,t){var n=t.x,o=t.y,r=e.offsets.popper,i=B(e.instance.modifiers,function(e){return"applyStyle"===e.name}).gpuAcceleration;i!==undefined&&console.warn("WARNING: `gpuAcceleration` option moved to `computeStyle` modifier and will not be supported in future versions of Popper.js!");var a=i!==undefined?i:t.gpuAcceleration,f=x(e.instance.popper),s=M(f),p={position:r.position},l=function w(e,t){var n=e.offsets,o=n.popper,r=n.reference,i=Math.round,a=Math.floor,f=function f(e){return e},s=i(r.width),p=i(o.width),l=-1!==["left","right"].indexOf(e.placement),u=-1!==e.placement.indexOf("-"),d=t?l||u||s%2==p%2?i:a:f,c=t?i:f;return{left:d(s%2==1&&p%2==1&&!u&&t?o.left-1:o.left),top:c(o.top),bottom:c(o.bottom),right:d(o.right)}}(e,window.devicePixelRatio<2||!Y),u="bottom"===n?"top":"bottom",d="right"===o?"left":"right",c=S("transform"),h=void 0,m=void 0;if(m="bottom"==u?"HTML"===f.nodeName?-f.clientHeight+l.bottom:-s.height+l.bottom:l.top,h="right"==d?"HTML"===f.nodeName?-f.clientWidth+l.right:-s.width+l.right:l.left,a&&c)p[c]="translate3d("+h+"px, "+m+"px, 0)",p[u]=0,p[d]=0,p.willChange="transform";else{var g="bottom"==u?-1:1,v="right"==d?-1:1;p[u]=m*g,p[d]=h*v,p.willChange=u+", "+d}var b={"x-placement":e.placement};return e.attributes=T({},b,e.attributes),e.styles=T({},p,e.styles),e.arrowStyles=T({},e.offsets.arrow,e.arrowStyles),e},gpuAcceleration:!0,x:"bottom",y:"right"},applyStyle:{order:900,enabled:!0,fn:function ue(e){return U(e.instance.popper,e.styles),function o(t,n){Object.keys(n).forEach(function(e){!1!==n[e]?t.setAttribute(e,n[e]):t.removeAttribute(e)})}(e.instance.popper,e.attributes),e.arrowElement&&Object.keys(e.arrowStyles).length&&U(e.arrowElement,e.arrowStyles),e},onLoad:function de(e,t,n,o,r){var i=m(r,t,e,n.positionFixed),a=h(n.placement,i,t,e,n.modifiers.flip.boundariesElement,n.modifiers.flip.padding);return t.setAttribute("x-placement",a),U(t,{position:n.positionFixed?"fixed":"absolute"}),n},gpuAcceleration:undefined}}},Z=(l($,[{key:"update",value:function(){return function t(){if(!this.state.isDestroyed){var e={instance:this,styles:{},arrowStyles:{},attributes:{},flipped:!1,offsets:{}};e.offsets.reference=m(this.state,this.popper,this.reference,this.options.positionFixed),e.placement=h(this.options.placement,e.offsets.reference,this.popper,this.reference,this.options.modifiers.flip.boundariesElement,this.options.modifiers.flip.padding),e.originalPlacement=e.placement,e.positionFixed=this.options.positionFixed,e.offsets.popper=C(this.popper,e.offsets.reference,e.placement),e.offsets.popper.position=this.options.positionFixed?"fixed":"absolute",e=A(this.modifiers,e),this.state.isCreated?this.options.onUpdate(e):(this.state.isCreated=!0,this.options.onCreate(e))}}.call(this)}},{key:"destroy",value:function(){return function e(){return this.state.isDestroyed=!0,P(this.modifiers,"applyStyle")&&(this.popper.removeAttribute("x-placement"),this.popper.style.position="",this.popper.style.top="",this.popper.style.left="",this.popper.style.right="",this.popper.style.bottom="",this.popper.style.willChange="",this.popper.style[S("transform")]=""),this.disableEventListeners(),this.options.removeOnDestroy&&this.popper.parentNode.removeChild(this.popper),this}.call(this)}},{key:"enableEventListeners",value:function(){return function e(){this.state.eventsEnabled||(this.state=j(this.reference,this.options,this.state,this.scheduleUpdate))}.call(this)}},{key:"disableEventListeners",value:function(){return I.call(this)}}]),$);function $(e,t){var n=this,o=2<arguments.length&&arguments[2]!==undefined?arguments[2]:{};!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,$),this.scheduleUpdate=function(){return requestAnimationFrame(n.update)},this.update=i(this.update.bind(this)),this.options=T({},$.Defaults,o),this.state={isDestroyed:!1,isCreated:!1,scrollParents:[]},this.reference=e&&e.jquery?e[0]:e,this.popper=t&&t.jquery?t[0]:t,this.options.modifiers={},Object.keys(T({},$.Defaults.modifiers,o.modifiers)).forEach(function(e){n.options.modifiers[e]=T({},$.Defaults.modifiers[e]||{},o.modifiers?o.modifiers[e]:{})}),this.modifiers=Object.keys(this.options.modifiers).map(function(e){return T({name:e},n.options.modifiers[e])}).sort(function(e,t){return e.order-t.order}),this.modifiers.forEach(function(e){e.enabled&&a(e.onLoad)&&e.onLoad(n.reference,n.popper,n.options,e,n.state)}),this.update();var r=this.options.eventsEnabled;r&&this.enableEventListeners(),this.state.eventsEnabled=r}return Z.Utils=("undefined"!=typeof window?window:global).PopperUtils,Z.placements=q,Z.Defaults=Q,Z});