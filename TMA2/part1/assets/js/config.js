(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? module.exports = factory() :
    typeof define === 'function' && define.amd ? define(factory) :
    (global = typeof globalThis !== 'undefined' ? globalThis : global || self, global.config = factory());
  })(this, (function () { 'use strict';
  
    const configQueryMap={"navbar-vertical-collapsed":"phoenixIsNavbarVerticalCollapsed","color-scheme":"phoenixTheme","navigation-type":"phoenixNavbarPosition","vertical-navbar-appearance":"phoenixNavbarVerticalStyle","horizontal-navbar-shape":"phoenixNavbarTopShape","horizontal-navbar-appearance":"phoenixNavbarTopStyle"},initialConfig={phoenixIsNavbarVerticalCollapsed:!1,phoenixTheme:"light",phoenixNavbarTopStyle:"default",phoenixNavbarVerticalStyle:"default",phoenixNavbarPosition:"vertical",phoenixNavbarTopShape:"default",phoenixIsRTL:!1},CONFIG={...initialConfig},setConfig=(e,a=!0)=>{Object.keys(e).forEach((o=>{CONFIG[o]=e[o],a&&localStorage.setItem(o,e[o]);}));},resetConfig=()=>{Object.keys(initialConfig).forEach((e=>{CONFIG[e]=initialConfig[e],localStorage.setItem(e,initialConfig[e]);}));},urlSearchParams=new URLSearchParams(window.location.search),params=Object.fromEntries(urlSearchParams.entries());console.log({params:params}),Object.keys(params).length>0&&Object.keys(params).includes("theme-control")&&(resetConfig(),Object.keys(params).forEach((e=>{configQueryMap[e]&&localStorage.setItem(configQueryMap[e],params[e]);}))),Object.keys(CONFIG).forEach((e=>{if(null===localStorage.getItem(e))localStorage.setItem(e,CONFIG[e]);else try{setConfig({[e]:JSON.parse(localStorage.getItem(e))});}catch{setConfig({[e]:localStorage.getItem(e)});}})),JSON.parse(localStorage.getItem("phoenixIsNavbarVerticalCollapsed"))&&document.documentElement.classList.add("navbar-vertical-collapsed"),"dark"===localStorage.getItem("phoenixTheme")&&document.documentElement.classList.add("dark"),"horizontal"===localStorage.getItem("phoenixNavbarPosition")&&document.documentElement.classList.add("navbar-horizontal"),"combo"===localStorage.getItem("phoenixNavbarPosition")&&document.documentElement.classList.add("navbar-combo");var config = {config:CONFIG,reset:resetConfig,set:setConfig};
  
    return config;
  
  }));
  //# sourceMappingURL=config.js.map