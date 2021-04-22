<?php

declare(strict_types=1);

namespace LLoadOutComponents;

final class LLoadOutComponents
{

    public static function outputScripts(): string
    {

        $scripts = [
            "charts"    => [
                '<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>',
                '<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>',
                '<script>function drawBarChart(e,t,a,n,i,r){if(a);else;var o,l={title:{text:n,align:"left",margin:10,offsetX:0,offsetY:0,floating:!1,style:{fontSize:"14px",fontWeight:"bold",fontFamily:void 0,color:"#263238"}},chart:{events:{click:function(e,t,a){Livewire.emit("showChartDetails",{chartKey:r,dataPointIndex:a.dataPointIndex,seriesIndex:a.seriesIndex})}},type:"bar",toolbar:{export:{csv:{filename:n,columnDelimiter:";",headerCategory:"category",headerValue:"value",dateFormatter:e=>new Date(e).toDateString()},svg:{filename:n},png:{filename:n}}}},series:t,xaxis:{categories:e,labels:{show:!0,rotate:-45}},yaxis:{decimalsInFloat:0},legend:{show:!1},dataLabels:{enabled:!1},plotOptions:{bar:{horizontal:a,dataLabels:{position:"top"}}},grid:{show:!0,xaxis:{lines:{show:!0}},yaxis:{lines:{show:!0}}}},d=document.getElementById("bar-chart-"+i);d.innerHTML="",(o=document.createElement("div")).id="chart-"+i,d.appendChild(o),(o=new ApexCharts(document.getElementById("chart-"+i),l)).render()}function drawPieChart(e,t,a,n){var i,r={title:{text:a,align:"left",margin:10,offsetX:0,offsetY:0,floating:!1,style:{fontSize:"14px",fontWeight:"bold",fontFamily:void 0,color:"#263238"}},series:t,chart:{type:"pie"},labels:e,responsive:[{breakpoint:480,options:{chart:{width:200},legend:{position:"bottom"}}}]},o=document.getElementById("pie-chart-"+n);o.innerHTML="",(i=document.createElement("div")).id="chart-"+n,o.appendChild(i),(i=new ApexCharts(document.getElementById("chart-"+n),r)).render()}function drawLineChart(e,t,a,n){var i,r={series:[{data:t}],chart:{height:350,type:"line",zoom:{enabled:!1}},dataLabels:{enabled:!1},stroke:{curve:"straight"},title:{text:"Product Trends by Month",align:"left"},grid:{row:{colors:["#f3f3f3","transparent"],opacity:.5}},xaxis:{categories:e}},o=document.getElementById("line-chart-"+n);o.innerHTML="",(i=document.createElement("div")).id="chart-"+n,o.appendChild(i),(i=new ApexCharts(document.getElementById("chart-"+n),r)).render()}</script>'
            ],
            "select"    => [
                '<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />',
                '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>',
                '<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>',
                '<script>$(".searchable").select2();</script>'
            ],
            "daterange" => [
                '<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>',
                '<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>',
                '<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>',
                '<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />',
                '<script>$(".daterangepicker").daterangepicker();</script>'
            ],
            "signature" => [
                '<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>',
                '<script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>',
                '<script>function signPad(){return{signature:"",jpeg:"",draw(t=500,e=400,i="white",s="black"){var a=document.createElement("canvas");a.width=t,a.height=e,a.style.zIndex=8,a.style.background=i,a.style.position="absolute",a.style.border="1px solid #C0C0C0",a.position="relative",this.signature=new SignaturePad(a),this.signature.minWidth=2,this.signature.maxWidth=2,this.signature.penColor=s,this.signature.onEnd=(()=>this.save()),this.$el.appendChild(a)},save(){this.jpeg=this.signature.toDataURL("image/png")},clear(){this.signature.clear()}}}</script>'
            ],
            "weather"   => [
                '<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>',
                '<script type="text/javascript" src="https://raw.githubusercontent.com/andrewplummer/Sugar/2.0.4/dist/sugar.min.js"></script>',
                '<script src="https://cdnjs.cloudflare.com/ajax/libs/weather/0.0.2/weather.min.js" integrity="sha512-jGQomBlypWhDbIYakihhSlQjdXr/N8rDqwldjW+t9XKHBp4uOaEI/4eShQLHrsgIgX9ZgCQcH/Vrx/AhGDv1rw==" crossorigin="anonymous"></script>'
            ]
        ];

        return collect($scripts)->map(function (array $scripts) {
            return collect($scripts)->implode(PHP_EOL);
        })->implode(PHP_EOL);

    }


}
