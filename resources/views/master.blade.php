<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">

    <!-- Script !-->
    <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/Chart.js') }}"></script>
    <script>
    var randomScalingFactor = function() {
        return (Math.random() > 0.5 ? 1.0 : -1.0) * Math.round(Math.random() * 100);
    };

    var barChartData = {
        labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
        datasets: [{
            label: 'Income',
            backgroundColor: "rgba(2,2,225,0.5)",
            yAxisID: "y-axis-1",
            borderColor: "rgba(2,2,225,0.5)",
            pointBorderWidth: 10,
            fill: false,
            data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
        },{
            label: 'Pengeluaran',
            backgroundColor: "rgba(2,200,225,0.5)",
            yAxisID: "y-axis-1",
            fill: false,
            pointBorderWidth: 10,
            borderColor: "rgba(2,200,225,0.5)",
            data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
        }]

    };
    window.onload = function() {
        var ctx = document.getElementById("canvas").getContext("2d");
        window.myBar = Chart.Line(ctx, {
            data: barChartData,
            options: {
                responsive: true,
                hoverMode: 'label',
                hoverAnimationDuration: 400,
                stacked: false,
                title:{
                    display:true,
                    text:"Presentase Keuntungan UKM"
                },
                scales: {
                    yAxes: [{
                        type: "linear", // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
                        display: true,
                        position: "left",
                        id: "y-axis-1",
                    }, {
                        type: "linear", // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
                        display: true,
                        position: "right",
                        id: "y-axis-2",
                        gridLines: {
                            drawOnChartArea: false
                        }
                    }],
                }
            }
        });
    };
    </script>
  </head>
  <body>
    <div class="col-md-2" style="padding:0; margin:0;">
      <div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="img/icon/user.png" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						Nama User
					</div>
					<div class="profile-usertitle-job">
						Jabatan
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Info</button>
					<button type="button" class="btn btn-danger btn-sm">Logout</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Dashboard </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-blackboard"></i>
							Event </a>
						</li>
						<li>
							<a href="peserta">
							<i class="glyphicon glyphicon-user"></i>
							Participants </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-credit-card"></i>
							Payment </a>
						</li>
            <li>
							<a href="#">
							<i class="glyphicon glyphicon-folder-open"></i>
							Payment Report </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>
    </div>
    <div class="col-md-10" style="padding:0; margin:0;">
      <div id="konten-container">
        @yield('konten')
      </div>
    </div>
  </body>
</html>
