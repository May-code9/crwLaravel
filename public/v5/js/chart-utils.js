"use strict";window.chartColors={red:"rgb(255, 99, 132)",orange:"rgb(255, 159, 64)",yellow:"rgb(255, 205, 86)",green:"rgb(26, 188, 156)",blue:"rgb(54, 162, 235)",purple:"rgb(153, 102, 255)",grey:"rgb(201, 203, 207)"},window.randomScalingFactor=function(){return(Math.random()>.5?1:-1)*Math.round(100*Math.random())},function(r){var n=["January","February","March","April","May","June","July","August","September","October","November","December"],e=r.Samples||(r.Samples={});e.utils={srand:function(r){this._seed=r},rand:function(r,n){var e=this._seed;return r=void 0===r?0:r,n=void 0===n?1:n,this._seed=(9301*e+49297)%233280,r+this._seed/233280*(n-r)},numbers:function(r){var n,e,t=r||{},a=t.min||0,o=t.max||1,u=t.from||[],i=t.count||8,s=t.decimals||8,h=t.continuity||1,c=Math.pow(10,s)||0,d=[];for(n=0;i>n;++n)e=(u[n]||0)+this.rand(a,o),this.rand()<=h?d.push(Math.round(c*e)/c):d.push(null);return d},labels:function(r){var n,e=r||{},t=e.min||0,a=e.max||100,o=e.count||8,u=(a-t)/o,i=e.decimals||8,s=Math.pow(10,i)||0,h=e.prefix||"",c=[];for(n=t;a>n;n+=u)c.push(h+Math.round(s*n)/s);return c},months:function(r){var e,t,a=r||{},o=a.count||12,u=a.section,i=[];for(e=0;o>e;++e)t=n[Math.ceil(e)%12],i.push(t.substring(0,u));return i},transparentize:function(r,n){var e=void 0===n?.5:1-n;return Chart.helpers.color(r).alpha(e).rgbString()},merge:Chart.helpers.configMerge},e.utils.srand(Date.now())}(this);
