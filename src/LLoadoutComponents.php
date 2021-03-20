<?php

declare(strict_types=1);

namespace LLoadOutComponents;

final class LLoadOutComponents
{

    public static function outputScripts(): string
    {

        $scripts = [
            "charts" => [
                '<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>',
                '<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>',
                '<script>function drawBarChart(e,t,a,n,r){if(a);else;var i,o={title:{text:n,align:"left",margin:10,offsetX:0,offsetY:0,floating:!1,style:{fontSize:"14px",fontWeight:"bold",fontFamily:void 0,color:"#263238"}},chart:{type:"bar",toolbar:{export:{csv:{filename:n+".csv",columnDelimiter:";",headerCategory:"category",headerValue:"value",dateFormatter:e=>new Date(e).toDateString()},svg:{filename:n+".svg"},png:{filename:n+".png"}}}},series:t,xaxis:{categories:e,labels:{show:!0,rotate:-45}},dataLabels:{enabled:!1},plotOptions:{bar:{horizontal:a,dataLabels:{position:"top"}}},grid:{show:!0,xaxis:{lines:{show:!0}},yaxis:{lines:{show:!0}}}},l=document.getElementById("bar-chart-"+r);l.innerHTML="",(i=document.createElement("div")).id="chart-"+r,l.appendChild(i),(i=new ApexCharts(document.getElementById("chart-"+r),o)).render()}function drawPieChart(e,t,a,n){var r,i={title:{text:a,align:"left",margin:10,offsetX:0,offsetY:0,floating:!1,style:{fontSize:"14px",fontWeight:"bold",fontFamily:void 0,color:"#263238"}},series:t,chart:{type:"pie"},labels:e,responsive:[{breakpoint:480,options:{chart:{width:200},legend:{position:"bottom"}}}]},o=document.getElementById("pie-chart-"+n);o.innerHTML="",(r=document.createElement("div")).id="chart-"+n,o.appendChild(r),(r=new ApexCharts(document.getElementById("chart-"+n),i)).render()}function drawLineChart(e,t,a,n){var r,i={series:[{data:t}],chart:{height:350,type:"line",zoom:{enabled:!1}},dataLabels:{enabled:!1},stroke:{curve:"straight"},title:{text:"Product Trends by Month",align:"left"},grid:{row:{colors:["#f3f3f3","transparent"],opacity:.5}},xaxis:{categories:e}},o=document.getElementById("line-chart-"+n);o.innerHTML="",(r=document.createElement("div")).id="chart-"+n,o.appendChild(r),(r=new ApexCharts(document.getElementById("chart-"+n),i)).render()}</script>'
            ],
            "select" => [
                '<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />',
                '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>',
                '<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>',
                '<script>$(".searchable").select2();</script>'
            ]
        ];

        return collect($scripts)->map(function (array $scripts) {
            return collect($scripts)->implode(PHP_EOL);
        })->implode(PHP_EOL);

    }


}
