@extends('admin.dashboard')

@section('titulo', 'Página Inicial')

@section('conteudo')

<div class="row">
  <div class="col-md-4">
    <canvas id="canvas" style="display: block; width: 100%; height: 100%;"></canvas>
  </div>
  <div class="col-md-8">
    <canvas id="canvas2" style="width: 100%; height: 100%;"></canvas>
    <form action="{{ url('') }}" method="POST">
    Selecione o ano a ser exibido:
    <select id="ano" class="ano">
      <?php $ano = 2018; ?>
      @while($ano <= 2048)
      <option value="{{ $ano }}">{{ $ano }} </option>
      <?php $ano++; ?>
      @endwhile
    </select>
    <button class="btn btn-primary" type="submit">Ok</button>
    </form>
  </div>
</div>

<br><br><br>

<div class="row" >
  <div class="col-md-12">
  <canvas id="canvas3" style="width: 100%; height: 100%;"></canvas>
  </div>
</div>



@endsection

@section('extrascript')
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
            labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
           datasets: [{
                type: 'bar',
                label: 'Associados ativos',
                backgroundColor: "#4BC0C0",
                data: [
                "40",
                "45",
                "10",

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
                        text:"Novos associados por ano"
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
                "300",
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
@endsection