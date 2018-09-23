 <script>

   var barChartData = {
            labels: [@foreach($maisVistos as $maisVisto)
                    "{{ $maisVisto->id }}",
                    @endforeach
                ],
           datasets: [{
                type: 'bar',
                label: 'Quantidade de visualizações',
                backgroundColor: "#4BC0C0",
                data: [
                    @foreach($maisVistos as $maisVisto)
                    "{{ $maisVisto->total_visitas }}",
                    @endforeach
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
                        text:"Posts mais visualizados"
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: false
                    },
                    responsive: false,
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

