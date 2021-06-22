<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>DASHBOARD</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('site/style.css')}}">
        <style>
            .coar_graphic{
                width:100%;
                border-radius: 10px;
                border:solid 1px #295C8A;
                display:inline-block;
                padding:10px;
                margin-top:20px;
            }
        </style>

        <script>
            window.onload = function () {

            CanvasJS.addColorSet("greenShades",[
                "#19834C",
                "#295C8A",              
            ]);
            
            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                colorSet: "greenShades",
                exportEnabled: true,
                theme: "light1", // "light1", "light2", "dark1", "dark2"
                title:{
                    text: ""
                },
                axisY:{
                    includeZero: true
                },
                data: [{
                    type: "column", //change type to bar, line, area, pie, etc
                    //indexLabel: "{y}", //Shows y value on all Data Points
                    indexLabelFontColor: "#5A5757",
                    indexLabelPlacement: "outside",   
                    dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                }]
            });
            chart.render();
            
            }
        </script>
    </head>
    <body>
        <x-layout/>
        <!--
        <label for="email" >EMAIL: </label>
        <h4 id="email">{{ $user->email }}</h4>-->

        <div class="container">
            <div class="row">          
                <div class="card col bg-main" style="margin: 15px; padding: 1% 4% 1% 4%; border-radius:15px;">
                    <h6 class="text-center text-light">Orçamentos cadastrados</h6>
                        <div class="row text-center">
                            <div class="col">
                                <h1 class="text-light" style="font-size: 70px;">--</h1>
                            </div>
                            <div class="col">
                                <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-file-earmark-text text-light" viewBox="0 0 16 16">
                                    <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                    <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                </svg>
                                <div class="card bg-light" style="margin-top: 8%; margin-bottom: 3%; border-radius: 7.5%;">
                                    <a href="{{route('user_create')}}" class="text-main text-decoration-none"><b>Ver todos</b></a>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="card col bg-main" style="margin: 15px; padding: 1% 4% 1% 4%; border-radius:15px;">
                        <h6 class="text-center text-light">Clientes cadastrados</h6>
                        <div class="row text-center">
                            <div class="col">
                                <h1 class="text-light" style="font-size: 70px;">{{$clientes}}</h1>
                            </div>
                            <div class="col">
                                <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-file-earmark-text text-light" viewBox="0 0 16 16">
                                    <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                    <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                </svg>
                                <div class="card bg-light" style="margin-top: 8%; margin-bottom: 3%; border-radius: 7.5%;">
                                    <a href="{{route('list_cliente')}}" class="text-main text-decoration-none"><b>Ver todos</b></a>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="card col bg-main" style="margin: 15px; padding: 1% 4% 1% 4%; border-radius:15px;">
                    <h6 class="text-center text-light">Materiais cadastrados</h6>
                    <div class="row text-center">
                        <div class="col">
                            <h1 class="text-light" style="font-size: 70px;">--</h1>
                        </div>
                        <div class="col">
                            <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-file-earmark-text text-light" viewBox="0 0 16 16">
                                <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                            </svg>
                            <div class="card bg-light" style="margin-top: 8%; margin-bottom: 3%; border-radius: 7.5%;">
                                <a href="{{route('new_cliente')}}" class="text-main text-decoration-none"><b>Ver todos</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card col bg-main" style="margin: 15px; padding: 1% 4% 1% 4%; border-radius:15px;">
                    <h6 class="text-center text-light">Modelos cadastrados</h6>
                    <div class="row text-center">
                        <div class="col">
                            <h1 class="text-light" style="font-size: 70px;">{{$modelos}}</h1>
                        </div>
                        <div class="col">
                            <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-file-earmark-text text-light" viewBox="0 0 16 16">
                                <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                            </svg>
                            <div class="card bg-light" style="margin-top: 8%; margin-bottom: 3%; border-radius: 7.5%;">
                                <a href="{{route('listModelo')}}" class="text-main text-decoration-none"><b>Ver todos</b></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col bg-main" style="margin: 15px; padding: 1% 4% 1% 4%; border-radius:15px;">
                    <h6 class="text-center text-light">Linhas cadastrados</h6>
                    <div class="row text-center">
                        <div class="col">
                            <h1 class="text-light" style="font-size: 70px;">{{$linhas}}</h1>
                        </div>
                        <div class="col">
                            <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-file-earmark-text text-light" viewBox="0 0 16 16">
                                <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                            </svg>
                            <div class="card bg-light" style="margin-top: 8%; margin-bottom: 3%; border-radius: 7.5%;">
                                <a href="{{route('list_linha')}}" class="text-main text-decoration-none"><b>Ver todos</b></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card col bg-main" style="margin: 15px; padding: 1% 4% 1% 4%; border-radius:15px;">
                    <h6 class="text-center text-light">Funcionários cadastrados</h6>
                    <div class="row text-center">
                        <div class="col">
                            <h1 class="text-light" style="font-size: 70px;">{{$funcionarios}}</h1>
                        </div>
                        <div class="col">
                            <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor" class="bi bi-file-earmark-text text-light" viewBox="0 0 16 16">
                                <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z"/>
                                <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                            </svg>
                            <div class="card bg-light" style="margin-top: 8%; margin-bottom: 3%; border-radius: 7.5%;">
                                <a href="{{route('list_funcionario')}}" class="text-main text-decoration-none"><b>Ver todos</b></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   

        @if(session()->has('errors'))
            <div style="text-align: center; display: flex;justify-content: center; width:100%; z-index:1;">
                <p id="alert" class="alert alert-warning" role="alert" style="width:200px;">{{session()->get('errors')}}</p>
            </div>
        @elseif(session()->has('succes'))
            <div style="text-align: center; display: flex;justify-content: center; width:100%; z-index:1;">
                <p id="alert" class="alert alert-success" role="alert" style="width:200px;">{{session()->get('succes')}}</p>
            </div>
        @endif

        <!-- grafico -->
        <div class="coar_graphic">
            <h2 style="width:330px; margin-top: -35px; margin-left: 15px; background-color: white; text-align:center;">
                Relatório Estatístico
            </h2>
            <div id="chartContainer" style="height: 370px; width: 100%;"></div>
        </div>

        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        <script src="{{ asset('site/jquery.js') }}" async defer></script>
        <script src="{{ asset('site/bootstrap.js') }}" async defer></script>
    </body>
</html>