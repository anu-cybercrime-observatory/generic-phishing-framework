twttr=window.twttr||{},twttr.conversion=function(){function t(){this.pixelId="",this.eventQueue=[]}var e="&tpx_cb=twttr.conversion.loadPixels",n="//t.co/i/adsct?p_id=Twitter&p_user_id=0",i="https://analytics.twitter.com/i/adsct?p_id=Twitter&p_user_id=0";return t.prototype={setPixelId:function(t){this.pixelId=t},queueEvent:function(t,e){var n=this;t=t.toLowerCase().trim(),n.eventQueue.push([t,e]),setTimeout(function(){n.sendEvents()},0)},sendEvents:function(){if(0!==this.eventQueue.length){var t=this.eventQueue;this.eventQueue=[];var e=this.getLegacyParams(t),r=!0;twttr.conversion.trackPidBase(i,this.pixelId,e,r),twttr.conversion.trackPidBase(n,this.pixelId,e)}},getLegacyParams:function(t){var e={},n=this.isObject(t[0])?t[0]:{},i=this.isObject(n[1])?n[1]:{};return i.hasOwnProperty("value")&&(e.tw_sale_amount=i.value),i.hasOwnProperty("num_items")&&(e.tw_order_quantity=i.num_items),this.isObject(i.content_ids)&&(e.tw_product_id=i.content_ids[0]),e},isObject:function(t){return Object(t)===t}},function(){if(window.twq){var e=new t;twq.exe=function(){var t,n=Array.prototype.slice.call(arguments),i=n[0],r=n.slice(1);switch(i){case"init":t=e.setPixelId;break;case"track":t=e.queueEvent}t&&t.apply(e,r)};for(var n=0;n<twq.queue.length;n++)twq.exe.apply(null,twq.queue[n])}}(),{trackBase:function(t,e,n,i){if(e&&n){var r=t+"&merch_id="+encodeURIComponent(e);r+="&event="+encodeURIComponent(n),i&&(r+="&value="+encodeURIComponent(i)),this.buildPixel(r)}},trackPidBase:function(t,n,i,r){if(n){var o="";if("object"==typeof i){"tw_sale_amount"in i||(i.tw_sale_amount=0),"tw_order_quantity"in i||(i.tw_order_quantity=0);for(var a in i)i.hasOwnProperty(a)&&(o+="&"+(encodeURIComponent(a)+"="+encodeURIComponent(i[a])))}else o="&tw_sale_amount=0&tw_order_quantity=0";var s=t+"&txn_id="+encodeURIComponent(n)+o,u=this.getIframeStatus();if(s+="&tw_iframe_status="+encodeURIComponent(u.value),u===this.IframeStatusCodes.IN_IFRAME&&""!=document.referrer){var c=encodeURIComponent(document.referrer);s+="&tw_document_referrer="+c}var d=this.buildPixel;r&&(s+=e,d=this.buildScript);var l=this.getHiddenProp();this.isDocumentHidden()?this.buildPixelWhenVizChange(s,l,d):d(s)}},track:function(t,e,r){this.trackBase(i,t,e,r),this.trackBase(n,t,e,r)},trackPid:function(t,e){var r=!0;this.trackPidBase(i,t,e,r),this.trackPidBase(n,t,e)},buildScript:function(t){var e=document.createElement("script");e.src=t,document.body.appendChild(e)},cs:!0,buildIframe:function(t){if(twttr.conversion.cs){twttr.conversion.cs=!1;var e=document.createElement("iframe");e.src=t,e.hidden=!0,document.body.appendChild(e)}},buildPixel:function(t){var e=new Image;e.src=t},isDocumentHidden:function(){var t=this.getHiddenProp();return t&&document[t]},getHiddenProp:function(){var t=["webkit","moz","ms","o"];if("hidden"in document)return"hidden";for(var e=0;e<t.length;e++)if(t[e]+"Hidden"in document)return t[e]+"Hidden";return null},buildPixelWhenVizChange:function(t,e,n){var i=e.replace(/[H|h]idden/,"")+"visibilitychange",r=function(){n(t),document.removeEventListener(i,r,!1)}.bind(this);document.addEventListener(i,r,!1)},getIframeStatus:function(){try{return this.isIframed()?this.IframeStatusCodes.NOT_IN_IFRAME:this.IframeStatusCodes.IN_IFRAME}catch(t){return this.IframeStatusCodes.ERROR}},isIframed:function(){return window.self===window.top},IframeStatusCodes:{NOT_IN_IFRAME:{value:0},IN_IFRAME:{value:1},ERROR:{value:2}},loadPixels:function(t){var e,n;"hif"in t&&(e=t.hif,e.forEach(twttr.conversion.buildIframe)),"tags"in t&&(n=t.tags,n.forEach(twttr.conversion.buildPixel))}}}();