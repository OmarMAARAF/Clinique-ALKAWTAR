//[Dashboard Javascript]

//Project:	Doclinic - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';
	
	
		var options = {
          series: [440, 550],
          chart: {
			  type: 'donut',
			  width: 186,
			},
			dataLabels: {
			enabled: false,
		  },
		colors: ['#5156be', '#c8c9ee'],
		legend: {
		  show: false,
		},
			
		  plotOptions: {
			  pie: {
				  donut: {
					size: '75%',
					  labels: {
						show: true,
						total: {
						  showAlways: true,
						  show: true
						}
					  },
				  }
			  }
		  },
		labels: ["Woman", "Man"],
        responsive: [{
          breakpoint: 1600,
          options: {
            chart: {
				width: 175,
            }
          }
        },{
          breakpoint: 500,
          options: {
            chart: {
				width: 200,
            }
          }
        }]
        };

        var chart = new ApexCharts(document.querySelector("#chart124"), options);
        chart.render();
	
	
		var datepaginator = function() {
			return {
				init: function() {
					$("#paginator1").datepaginator()
				}
			}
		}();
		jQuery(document).ready(function() {
			datepaginator.init()
		});
	
	
		$('.inner-user-div4').slimScroll({
			height: '315px'
		  });
	
		$('.inner-user-div3').slimScroll({
			height: '127px'
	    });
	
		
		$('.owl-carousel').owlCarousel({
			loop: true,
			margin: 0,
			responsiveClass: true,
			autoplay: true,
			dots: false,
			nav: true,
			responsive: {
			  0: {
				items: 1,
			  },
			  600: {
				items: 1,
			  },
			  1000: {
				items: 1,
			  }
			}
		  });
	
	var options = {
          series: [30, 25, 30, 25],
          chart: {
          height: 200,
          type: 'polarArea'
        },
        labels: ['Male', 'Female', 'Child', 'Germany'],
        fill: {
          opacity: 1
        },
        stroke: {
          width: 1,
          colors: undefined
        },
        yaxis: {
          show: false
        },
        legend: {
          position: 'right'
        },
		colors: ['#5156be', '#3596f7', '#05825f', '#ee3158'],
        plotOptions: {
          polarArea: {
            rings: {
              strokeWidth: 0
            },
            spokes: {
              strokeWidth: 0
            },
          }
        },
        };

        var chart = new ApexCharts(document.querySelector("#chart432"), options);
        chart.render();
	
	
	
	var options = {
        series: [{
          name: 'Total',
          data: [4, 5, 7, 6, 1, 8, 3, 6, 2, 5]
        }],
        chart: {
          type: 'bar',
          height: 205,
          toolbar: {
            show: false
          }
        },
		colors:['#5156be'],
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '20%',
            endingShape: 'rounded'
          },
        },
        dataLabels: {
          enabled: false
        },
		grid: {
			show: false,  
		},
        stroke: {
          show: false,
          width: 0,
          colors: ['transparent']
        },
        xaxis: {
          categories: ['8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00'],
        },
		
        yaxis: {
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false,
          },
          labels: {
            show: false,
          }
        
        },
        fill: {
          opacity: 1
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return val + " Appointment"
            }
          }
        }
      };

      var chart = new ApexCharts(document.querySelector("#appointment_overview"), options);
      chart.render();
	
	
	
		var options = {
          series: [
          {
            name: "Groth",            
            data: [28, 39, 23, 36, 45, 32, 43]
          }
        ],
          chart: {
          height: 205,
          type: 'area',
          toolbar: {
            show: false
          }
        },
        colors: ['#05825f'],
        dataLabels: {
          enabled: false,
        },
        stroke: {
          curve: 'smooth'
        },
        grid: {
          borderColor: '#e7e7e7',
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        },
        legend: {
          show: false,
        }
        };

        var chart = new ApexCharts(document.querySelector("#overview_trend"), options);
        chart.render();
	
	
	
	
}); // End of use strict
