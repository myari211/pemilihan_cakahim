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
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="card shadow" style="width:18rem">
                <div class="card-header">
                    Total Pemilih
                </div>
                <div class="card-body bg-dark">
                    <p class="h3 text-white text-center">{{ $statistik }}</p>
                </div>
            </div>
        </div>
                <div class="col-md-3">
            <div class="card shadow" style="width:18rem">
                <div class="card-header">
                    Total Pemilih Kandidat 1
                </div>
                <div class="card-body bg-dark">
                    <p class="h3 text-white text-center">{{ $statistik1 }}</p>
                </div>
            </div>
        </div>
                <div class="col-md-3">
            <div class="card shadow" style="width:18rem">
                <div class="card-header">
                    Total Pemilih Kandidat 2
                </div>
                <div class="card-body bg-dark">
                    <p class="h3 text-white text-center">{{ $statistik2 }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow" style="width:18rem">
                <div class="card-header">
                    Total Pemilih Kandidat 3
                </div>
                <div class="card-body bg-dark">
                    <p class="h3 text-white text-center">{{ $statistik3 }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin:15px">
        <div class="col-md-6">
            <div class="card"  style="height:400px">
                <h5 class="card-header bg-dark" style="color:white">Diagram Pemilihan</h5>
                <div class="card-body">
                    <div id="chartVote"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card"  style="height:400px">
                <h5 class="card-header bg-dark" style="color:white;">Tren</h5>
                <div class="card-body"> 
                    <div id="semsVote"></div>
                </div>
            </div>
        </div>   
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
            name: 'Paslon 1',
            y: {!!json_encode($statistik1)!!},
            sliced: true,
            selected: true
        }, {
            name: 'Paslon 2',
            y:{!!json_encode($statistik2)!!},
        },{
            name: 'Paslon 3',
            y:{!!json_encode($statistik3)!!},
        }]
    }]
});
//chart pie
Highcharts.chart('semsVote', {
    chart: {
        type: 'column',
        width: 400,
        height: 290,
        setTitle: false,
    },
    title:false,
    xAxis: {
        categories: ['Semester I',
                     'Semester II',
                     'Semester III',
                     'Semester IV',
                     'Semester V',
                     'Semester VI',
                     'Semester VII'],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: '%'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Paslon 1',
        data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5]

    }, {
        name: 'Paslon II',
        data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3]

    }, {
        name: 'Paslon III',
        data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6]

    }]
});


</script>
</body>
</html>
