"use strict";document.addEventListener("DOMContentLoaded",function(){setTimeout(function(){new ApexCharts(document.querySelector("#activity-line-chart"),{chart:{type:"line",height:150,toolbar:{show:!1}},colors:["#2ca87f","#2ca87f"],dataLabels:{enabled:!1},legend:{show:!0,position:"top"},markers:{size:1,colors:["#fff","#fff"],strokeColors:["#2ca87f","#2ca87f"],strokeWidth:1,shape:"circle",hover:{size:4}},fill:{opacity:[1,.3]},stroke:{width:3,curve:"smooth"},grid:{show:!1},series:[{name:"Active",data:[20,90,65,85,20,80,30]},{name:"Inactive",data:[70,30,40,15,60,40,95]}],xaxis:{labels:{hideOverlappingLabels:!0},axisBorder:{show:!1},axisTicks:{show:!1}}}).render()},500)});