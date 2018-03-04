 <script>

   var barChartData = {
            labels: ["10 dias", "20 dias", "30 dias"],
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


    <script>

   var barChartData = {
            labels: ["10 dias", "20 dias", "30 dias"],
           datasets: [{
                type: 'bar',
                label: 'Novos Associados',
                backgroundColor: "#4BC0C0",
                data: [
                {{ $dadosdez }},
                {{ $dadosvinte }},
                {{ $dadostrinta }}    
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


    <script>

   var barChartData = { 
            labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
           datasets: [{
                type: 'bar',
                label: 'Associados ativos',
                backgroundColor: "#4BC0C0",
                data: [
                <?php $i=1;?>
                @while($i <= 12)
                {{ $meses[$i] }},
                <?php $i++; ?>
                @endwhile

                ]
            }]
        };

   var ctx = document.getElementById("canvas2");
    var myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    title:{
                        display:true,
                        text:"Novos associados por ano " +"("+ {{ $year }} +")"
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

     <script>

   var barChartData = {
            labels: [
            <?php $ano = 2018; ?>
            @while($ano <= 2048)
              '{{ $ano }}',
            <?php $ano++; ?>
            @endwhile
            ],
           datasets: [{
                type: 'line',
                label: 'Novos Associados',
                backgroundColor: "#7B68EE",
                data: [
                 <?php $i = 2018; ?>
                    @while($i <= 2048)
                    {{ $anos[$i] }},
                    <?php $i++; ?>
                    @endwhile
                ]
            }]
        };

       var ctx = document.getElementById("canvas3");
    var myBar = new Chart(ctx, {
                type: 'bar',
                data: barChartData,
                options: {
                    title:{
                        display:true,
                        text:"Novos associados por ano , ao longo dos anos"
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
