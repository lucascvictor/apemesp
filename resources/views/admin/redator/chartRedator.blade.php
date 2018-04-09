 <script>

   var barChartData = {
            labels: [
                <?php ?>
                "10 dias", "20 dias", "30 dias"],
           datasets: [{
                type: 'bar',
                label: 'Novos Associados',
                backgroundColor: "#4BC0C0",
                data: [
                "19",
                "25",
                "40"    
                ]
            }]
        };

   var ctx = document.getElementById("canvas");
    var myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    title:{
                        display:true,
                        text:"Acompanhamento da confirmação de e-mail"
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: false
                    },
                    responsive: true,
                    scales: {
                        xAxes: [{
                            stacked: true,
                        }],
                        yAxes: [{
                            stacked: true
                        }]
                    }
                }
            });
            
</script>

