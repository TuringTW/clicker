
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Game">
		<meta name="author" content="TuringTW">

		<title>吵死你室友</title>

		<!-- Bootstrap core CSS -->
		<link href="style/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="style/css/cover.css" rel="stylesheet">

	</head>

	<body>

		<div class="site-wrapper">

			<div class="site-wrapper-inner">

				<div class="cover-container">

					<div class="masthead clearfix">
						<div class="inner">
							<h3 class="masthead-brand">吵死你室友</h3>
							<nav>
								<ul class="nav masthead-nav navbar-nav">
								<li class="active"><a href="#">Clicker</a></li>
								<!-- <li><a href="#">受災戶專區</a></li> -->
								</ul>
							</nav>
						</div>
					</div>

					<div class="inner cover">
						
						<p style="font-size:60px">你滑鼠是在大聲什麼啦!!!</p>
						
						<br>
						<p style="font-size:60px">我要加倍奉還!!!</p>
						<br>
						<div class="row">
							
							<div class="col-sm-6">
								<div class="panel panel-default" style="background-color:#333;height:120px;">
									<div class="panel-body" style="height: 100%;vertical-align:middle">
										<h1 style="margin:0px 0px 0px 0px;" id="countdown">還有<span style="font-size:80px" id="time_show">10</span><span >秒</span>	</h1>			
										<h1 style="margin:0px 0px 0px 0px;display:none;font-size:80px;" id="timeup">時間到!</h1>
									</div>
								</div>
							</div>	
							<div class="col-sm-6">
								<div class="panel panel-default" style="background-color:#333;height:120px">
									<div class="panel-body">
										<h1 style="margin:0px 0px 0px 0px;">按了<span style="font-size:80px" id="times_show">0</span><span >下</span>	</h1>			
										<input type="hidden" id="times" value="0">
									</div>
								</div>
							</div>	
						</div>
						<div class="row">
							
							<div class="col-sm-12">
								<div class="panel panel-default" style="background-color:#333;height:250px">
									<div class="panel-body" style="background-color:#333;height:100%">
										<button class="btn btn-default btn-lg" style="width:90%;height:100%;font-size:90px"  onclick="clicker()"  id="clickbtn">按一下開始</button>
									</div>
									
								</div>
								
							</div>	
							
						</div>
						<button class="btn btn-default btn-lg" onclick="start()" id="start">重置</button>
					</div>
					<br>
					<div class="mastfoot">
						<div class="inner">
							<p>by TuringTW.</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</body>
	<script src="style/js/jquery-2.1.0.js"></script>
	<script src="style/js/bootstrap.min.js"></script>
	<script src="style/js/countdown/jquery.countdown.js"></script>
	
	<script type="text/javascript">
	
	var status = 0, timeid;
	function clicker() {
		if (status==0) {
			countdown(10)
			status = 1;
			document.getElementById('clickbtn').innerHTML = "狂按這裡";
		}
		var times = document.getElementById('times');
		times.value = parseInt(times.value)+1;
		document.getElementById('times_show').innerHTML = times.value;
	}
	function countdown(left){
		if (left <= 0) {
			left = 0;
			clearTimeout(timeid);
			stop();
		}else{
			
			left --; 
			timeid = setTimeout("countdown("+left+")",1000);
		}
		document.getElementById('time_show').innerHTML = left;
	}
	function stop(){

		document.getElementById('countdown').style.display="none";
		document.getElementById('timeup').style.display="inline";
		document.getElementById('clickbtn').disabled = true;
		document.getElementById('start').disabled = false;
	}
	function start(){
		status = 0;
		document.getElementById('clickbtn').innerHTML = "按一下開始";
		document.getElementById('times').value = 0;
		document.getElementById('times_show').innerHTML = 0;
		document.getElementById('countdown').style.display="inline";
		document.getElementById('timeup').style.display="none";
		document.getElementById('clickbtn').disabled = false;
		document.getElementById('time_show').innerHTML = 10;
		clearTimeout(timeid);
	}
	</script>
</html>
