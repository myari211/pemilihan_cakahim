<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Himpunan Mahasiswa Informatika</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/Hmif.ico') }}">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        #body-row{
            margin-left:0;
            margin-right:0;
        }
        #sidebar-container {
            min-height: 100vh;   
            background-color: #333;
            padding: 0;
        }


        .sidebar-expanded {
            width: 230px;
        }
        .sidebar-collapsed {
            width: 60px;
        }


        #sidebar-container .list-group a {
            height: 50px;
            color: white;
        }


        #sidebar-container .list-group .sidebar-submenu a {
            height: 45px;
            padding-left: 30px;
        }
        .sidebar-submenu {
            font-size: 0.9rem;
        }


        .sidebar-separator-title {
            background-color: #333;
            height: 35px;
        }
        .sidebar-separator {
            background-color: #333;
            height: 25px;
        }
        .logo-separator {
            background-color: #333;    
            height: 60px;
        }


        #sidebar-container .list-group .list-group-item[aria-expanded="false"] .submenu-icon::after {
        content: " \f0d7";
        font-family: FontAwesome;
        display: inline;
        text-align: right;
        padding-left: 10px;
        }

        #sidebar-container .list-group .list-group-item[aria-expanded="true"] .submenu-icon::after {
        content: " \f0da";
        font-family: FontAwesome;
        display: inline;
        text-align: right;
        padding-left: 10px;
        }

        .highcharts-area {
            width: 10px;
        }


    </style>
</head>
<body>
<!-- Start Sidebar -->
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item dropdown d-sm-block d-md-none">
        <a class="nav-link dropdown-toggle" href="#" id="smallerscreenmenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Menu
        </a>
        <div class="dropdown-menu" aria-labelledby="smallerscreenmenu">
            <a class="dropdown-item" href="#">Dashboard</a>
        </div>
            <a class="dropdown-item" href="#">Profile</a>
      </li>
    </ul>
  </div>
<div class="row display-flex" id="body-row">
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
        <ul class="list-group">
            <br />
                <img src="{{ asset('img/Hmif.png') }}" class="mx-auto" style="width:100px">
            <br />
            <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-dashboard fa-fw mr-3"></span>
                    <span class="menu-collapsed">Dashboard</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <div id='submenu1' class="collapse sidebar-submenu">
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Charts</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Reports</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Tables</span>
                </a>
            </div>
            <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-user fa-fw mr-3"></span>
                    <span class="menu-collapsed">Profile</span>
                    <span class="submenu-icon ml-auto"></span>
                </div>
            </a>
            <div id='submenu2' class="collapse sidebar-submenu">
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Settings</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <span class="menu-collapsed">Password</span>
                </a>
            </div>            
           
        </ul>
    </div> 
    <!-- End Sidebar -->


    <!-- MAIN -->
    <div class="col">
    <div class="row mt-4 d-flex justify-content-center items-align-center">
        <div class="col-md-3">
            <div class="card shadow mx-auto" style="width:18rem">
                <div class="card-header">
                    Total Pemilih
                </div>
                <div class="card-body bg-dark">
                    <p class="h3 text-white text-center">{{ $statistik }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow mx-auto mt-md-0 mt-4" style="width:18rem">
                <div class="card-header">
                    Total Pemilih Kandidat 1
                </div>
                <div class="card-body bg-dark">
                    <p class="h3 text-white text-center">{{ $statistik1 }}</p>
                </div>
            </div>
        </div>
                <div class="col-md-3">
            <div class="card shadow  mt-md-0 mt-4 mx-auto" style="width:18rem">
                <div class="card-header">
                    Total Pemilih Kandidat 2
                </div>
                <div class="card-body bg-dark">
                    <p class="h3 text-white text-center">{{ $statistik2 }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow  mt-md-0 mt-4 mx-auto" style="width:18rem">
                <div class="card-header">
                    Total Pemilih Kandidat 3
                </div>
                <div class="card-body bg-dark">
                    <p class="h3 text-white text-center">{{ $statistik3 }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4 d-flex justify-content-stretch">
        <div class="col-md">
            <div class="card"  style="height:400px">
                <h5 class="card-header bg-dark" style="color:white">Diagram Pemilihan</h5>
                <div class="card-body d-flex justify-content-center">
                    <div id="chartVote"></div>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-dark mt-4">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Nim</th>
      <th scope="col">Vote</th>
    </tr>
  </thead>
  <tbody>
      @php
      $i = 1;
      @endphp
      @foreach($pemilih as $p)
    <tr>
      <th scope="row">{{ $i++ }}</th>
      <td>{{ $p -> name }}</td></td>
      <td>{{ $p -> nim }}</td>
      <td>{{ $p -> voting }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="row d-flex justify-content-center">
        {{ $pemilih -> links() }}
</div>
    </div>

   
<script>
    Highcharts.chart('chartVote', {
    chart: {
        width: 500,
        height: 250,
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie',
        setTitle: false,
    },
    title:false,
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [{
            name: 'David Dan Figi',
            y: {!!json_encode($statistik1)!!},
            sliced: true,
            selected: true
        }, {
            name: 'Iqbal dan Ayu',
            y:{!!json_encode($statistik2)!!},
        },{
            name: 'Argya dan Renatha',
            y:{!!json_encode($statistik3)!!},
        }]
    }]
});
//chart pie
var chart = Highcharts.chart('container', {

    chart: {
        type: 'column'
    },

    title: {
        text: 'Highcharts responsive chart'
    },

    subtitle: {
        text: 'Resize the frame or click buttons to change appearance'
    },

    legend: {
        align: 'right',
        verticalAlign: 'middle',
        layout: 'vertical'
    },

    xAxis: {
        categories: ['David & Figi', 'Iqbal dan Ayu', 'Argya dan Renatha'],
        labels: {
            x: -10
        }
    },

    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Amount'
        }
    },

    series: [{
        name: 'David dan Figi',
        data: '{!!json_encode($statistik1)!!}',
    }, {
        name: 'Iqbal dan Ayu',
        data: '{!!json_encode($statistik2)!!}',
    }, {
        name: 'Argya dan Renatha',
        data: '{!!json_encode($statistik3)!!}',
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    align: 'center',
                    verticalAlign: 'bottom',
                    layout: 'horizontal'
                },
                yAxis: {
                    labels: {
                        align: 'left',
                        x: 0,
                        y: -5
                    },
                    title: {
                        text: null
                    }
                },
                subtitle: {
                    text: null
                },
                credits: {
                    enabled: false
                }
            }
        }]
    }
});

document.getElementById('small').addEventListener('click', function () {
    chart.setSize(400);
});

document.getElementById('large').addEventListener('click', function () {
    chart.setSize(600);
});

document.getElementById('auto').addEventListener('click', function () {
    chart.setSize(null);
});


</script>
</body>
</html>
