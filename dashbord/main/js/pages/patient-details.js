//[Dashboard Javascript]

//Project:	Doclinic - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';
	
		var options = {
          series: [44, 55, 41, 17, 15],
          chart: {
			  type: 'donut',
			},
		colors: ['#3246D3', '#00D0FF', '#ee3158', '#ffa800', '#05825f'],
		legend: {
		  position: 'bottom'
		},
			
		  plotOptions: {
			  pie: {
				  donut: {
					size: '45%',
				  }
			  }
		  },
		labels: ["Operation", "Theraphy", "Mediation", "Colestrol", "Heart Beat"],
        responsive: [{
          breakpoint: 1600,
          options: {
            chart: {
				width: 330,
            }
          }
        },{
          breakpoint: 500,
          options: {
            chart: {
				width: 280,
            }
          }
        }]
        };

        var chart = new ApexCharts(document.querySelector("#chart123"), options);
        chart.render();
	
		
	
	
	
}); // End of use strict
