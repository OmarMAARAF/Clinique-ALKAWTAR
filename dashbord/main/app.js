$(document).ready(function(){
    $.ajax({
        url:"http://localhost/dasbord1/main/data.php",
        method :"GET",
        success : function(usersList) {
            console.log(usersList);
            var player = [];
      var score = [];

      for(var i in usersList) {
        player.push("nom : " + usersList[i].name);
        score.push(usersList[i].id);
      }

      var chartdata = {
        labels: player,
        datasets : [
          {
            label: 'Player Score',
            backgroundColor: 'rgba(255, 99, 132, 1)',
            borderColor: 'rgba(200, 200, 200, 0.75)',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: score
          }
        ]
      };

      var ctx = $("#mycanvas");

      var barGraph = new Chart(ctx, {
        type: 'pie',
        data: chartdata,
        options: {
            responsive: true,
            plugins: {
              legend: {
                position: 'top',
              },
              title: {
                display: true,
                text: 'trying'
              }
            }
        }
      });






        },
       error: function(usersList){console.log(usersList);}
    });
});