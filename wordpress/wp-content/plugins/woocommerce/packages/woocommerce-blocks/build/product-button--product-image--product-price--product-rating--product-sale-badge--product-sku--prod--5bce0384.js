(window.webpackWcBlocksJsonp=window.webpackWcBlocksJsonp||[]).push([[2],{86:function(o,t,l){"use strict";l.d(t,"a",(function(){return v}));var e=l(4),n=l.n(e),r=l(28),s=l(106);const c=o=>Object(s.a)(o)?JSON.parse(o)||{}:Object(r.b)(o)?o:{};var i=l(593),a=l(120);function u(){let o=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};const t={};return Object(a.getCSSRules)(o,{selector:""}).forEach(o=>{t[o.key]=o.value}),t}function d(o,t){return o&&t?`has-${Object(i.a)(t)}-${o}`:""}const v=o=>{const t=Object(r.b)(o)?o:{style:{}},l=c(t.style),e=function(o){var t,l,e,s,c,i,a;const{backgroundColor:v,textColor:y,gradient:f,style:b}=o,g=d("background-color",v),m=d("color",y),h=function(o){if(o)return`has-${o}-gradient-background`}(f),p=h||(null==b||null===(t=b.color)||void 0===t?void 0:t.gradient);return{className:n()(m,h,{[g]:!p&&!!g,"has-text-color":y||(null==b||null===(l=b.color)||void 0===l?void 0:l.text),"has-background":v||(null==b||null===(e=b.color)||void 0===e?void 0:e.background)||f||(null==b||null===(s=b.color)||void 0===s?void 0:s.gradient),"has-link-color":Object(r.b)(null==b||null===(c=b.elements)||void 0===c?void 0:c.link)?null==b||null===(i=b.elements)||void 0===i||null===(a=i.link)||void 0===a?void 0:a.color:void 0})||void 0,style:u({color:(null==b?void 0:b.color)||{}})}}({...t,style:l}),i=function(o){var t;const l=(null===(t=o.style)||void 0===t?void 0:t.border)||{};return{className:function(o){var t;const{borderColor:l,style:e}=o,r=l?d("border-color",l):"";return n()({"has-border-color":l||(null==e||null===(t=e.border)||void 0===t?void 0:t.color),borderColorClass:r})}(o)||void 0,style:u({border:l})}}({...t,style:l}),a=function(o){const{style:t}=o;return{className:void 0,style:u({spacing:(null==t?void 0:t.spacing)||{}})}}({...t,style:l}),v=(o=>{const t=c(o.style),l=Object(r.b)(t.typography)?t.typography:{},e=Object(s.a)(l.fontFamily)?l.fontFamily:"";return{className:o.fontFamily?`has-${o.fontFamily}-font-family`:e,style:{fontSize:o.fontSize?`var(--wp--preset--font-size--${o.fontSize})`:l.fontSize,fontStyle:l.fontStyle,fontWeight:l.fontWeight,letterSpacing:l.letterSpacing,lineHeight:l.lineHeight,textDecoration:l.textDecoration,textTransform:l.textTransform}}})(t);return{className:n()(v.className,e.className,i.className,a.className),style:{...v.style,...e.style,...i.style,...a.style}}}}}]);