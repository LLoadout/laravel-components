function drawBarChart(labels, data, orientation, title, id) {

    if (!orientation) {
        var yaxisdata = {
            labels: {
                formatter: function (val) {
                    return val.toFixed(0)
                }
            }
        }
    } else {
        var yaxisdata = {};
    }

    var options = {
        title: {
            text: title,
            align: 'left',
            margin: 10,
            offsetX: 0,
            offsetY: 0,
            floating: false,
            style: {
                fontSize: '14px',
                fontWeight: 'bold',
                fontFamily: undefined,
                color: '#263238'
            },
        },
        chart: {
            type: 'bar',
            toolbar: {
                export: {
                    csv: {
                        filename: title,
                        columnDelimiter: ';',
                        headerCategory: 'category',
                        headerValue: 'value',
                        dateFormatter(timestamp) {
                            return new Date(timestamp).toDateString()
                        }
                    },
                    svg: {
                        filename: title,
                    },
                    png: {
                        filename: title,
                    }
                },
            }
        },
        series: data,
        xaxis: {
            categories: labels,
            labels: {
                show: true,
                rotate: -45
            }
        },
        dataLabels: {
            enabled: false,
        },
        plotOptions: {
            bar: {
                horizontal: orientation,
                dataLabels: {
                    position: 'top',
                },
            }
        },
        grid: {
            show: true,
            xaxis: {
                lines: {
                    show: true
                }
            },
            yaxis: {
                lines: {
                    show: true
                }
            },
        },

    }

    var barchart = document.getElementById('bar-chart-' + id);
    barchart.innerHTML = "";

    var chart = document.createElement('div');
    chart.id = 'chart-' + id;
    barchart.appendChild(chart);

    var chart = new ApexCharts(document.getElementById('chart-' + id), options);
    chart.render();

}

function drawPieChart(labels, data, title, id) {

    var options = {
        title: {
            text: title,
            align: 'left',
            margin: 10,
            offsetX: 0,
            offsetY: 0,
            floating: false,
            style: {
                fontSize: '14px',
                fontWeight: 'bold',
                fontFamily: undefined,
                color: '#263238'
            },
        },
        series: data,
        chart: {
            type: 'pie',
        },
        labels: labels,
        responsive: [{
            breakpoint: 480,
            options: {
                chart: {
                    width: 200
                },
                legend: {
                    position: 'bottom'
                }
            }
        }]
    };

    var piechart = document.getElementById('pie-chart-' + id);
    piechart.innerHTML = "";

    var chart = document.createElement('div');
    chart.id = 'chart-' + id;
    piechart.appendChild(chart);

    var chart = new ApexCharts(document.getElementById('chart-' + id), options);
    chart.render();


}

function drawLineChart(labels, data, title, id) {


    var options = {
        series: [{
            data: data
        }],
        chart: {
            height: 350,
            type: 'line',
            zoom: {
                enabled: false
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'straight'
        },
        title: {
            text: 'Product Trends by Month',
            align: 'left'
        },
        grid: {
            row: {
                colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                opacity: 0.5
            },
        },
        xaxis: {
            categories: labels,
        }
    };


    var piechart = document.getElementById('line-chart-' + id);
    piechart.innerHTML = "";

    var chart = document.createElement('div');
    chart.id = 'chart-' + id;
    piechart.appendChild(chart);

    var chart = new ApexCharts(document.getElementById('chart-' + id), options);
    chart.render();


}
