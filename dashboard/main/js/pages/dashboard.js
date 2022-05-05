//[Dashboard Javascript]

//Project:	Doclinic - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';
	
		 var options = {
          series: [{
            name: "Heart Rate",
            data: [150, 135, 135, 145]
        }],
          chart: {
          height: 133,
          type: 'line',
		  foreColor: '#ffffff',
          zoom: {
            enabled: false
          },
		   toolbar: {
			show: false,
		  },
        },
        dataLabels: {
          enabled: false
        },
		colors: ['#fff'],
        stroke: {
          curve: 'straight',
			width: 1,
        },
        grid: {
			borderColor: '#6b70cb',
			strokeDashArray: 6,
        },
		markers: {
			size: 4,
		},
		tooltip: {
		  theme: "dark",
		},
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr'],
			labels: {
          		show: false,
			},
			axisBorder: {
          		show: false,
			},
        }
        };

        var chart = new ApexCharts(document.querySelector("#heartrate"), options);
        chart.render();
	
	
	var options = {
          series: [{
            name: "Fever",
            data: [99, 102, 102, 100]
        }],
          chart: {
          height: 133,
          type: 'line',
		  foreColor: '#3e4052',
          zoom: {
            enabled: false
          },
		   toolbar: {
			show: false,
		  },
        },
        dataLabels: {
          enabled: false
        },
		colors: ['#5156be'],
        stroke: {
          curve: 'straight',
			width: 1,
        },
        grid: {
			borderColor: '#dddde1',
			strokeDashArray: 6,
        },
		markers: {
			size: 4,
			strokeColors: '#5156be',
			strokeWidth: 1,
			fillOpacity: 0,
		},
		tooltip: {
		  theme: "light",
		},
        xaxis: {
          categories: ['Mon', 'Tue', 'Wed', 'The'],
			labels: {
          		show: false,
			},
			axisBorder: {
          		show: false,
			},
        }
        };

        var chart = new ApexCharts(document.querySelector("#fever"), options);
        chart.render();
	
	
		function getActualData() {
			var actualData = []
			for (var m = 0; m < 90; m++)
				actualData.push(50 + parseInt(Math.random() * 35))
				return actualData;
		}


		var ANIMATIONSTEPS = 600;

		var myLineChart;
		var labels;
		var animationStep;
		setInterval(function () {
			if (myLineChart === undefined) {
				var actualData = getActualData();

				// if we have only a few data points interpolate to fill out enough points to make the animation smooth
				var interpolationSteps = Math.ceil(ANIMATIONSTEPS / actualData.length);
				labels = []
				var data = []
				var blankData = []
				for (var i = 0; i < (actualData.length - 1); i++) {
					labels.push('')
					data.push(actualData[i])
					blankData.push(null)

					// push interpolation
					var difference = actualData[i + 1] - actualData[i];
					var interpolationStep = 1 / interpolationSteps;
					for (var j = 1; j < interpolationSteps; j++) {
						labels.push('')
						data.push(actualData[i] + difference * Chart.helpers.easingEffects["linear"](j * interpolationStep));
						blankData.push(null)
					}
				}
				labels.push('')
				data.push(actualData[i])
				blankData.push(null)

				var data = {
					labels: labels,
					datasets: [
						{
							strokeColor: "#5156be",
							data: blankData
						},
						{
							strokeColor: "transparent",
							data: data
						}
					]
				};

				var ctx = document.getElementById("ecg").getContext("2d");
				myLineChart = new Chart(ctx).Line(data, {
					animation: false,
					datasetFill: false,
					pointDot: false,
					datasetStrokeWidth: 2,
					showTooltips: false,
					scaleOverride: true,
					scaleSteps: 12,
					scaleStepWidth: 5,
					scaleStartValue: 30,
					scaleShowVerticalLines: false,
					scaleShowLabels: false,
				});

				animationStep = 0;
			}

			// the actual animation
			myLineChart.datasets[0].points[animationStep].value = myLineChart.datasets[1].points[animationStep].value
			myLineChart.update();
			animationStep++;

			// start new cycle
			if (animationStep >= labels.length) {
				myLineChart.destroy();
				myLineChart = undefined;
			}
		}, 10)
	
	
	
}); // End of use strict
