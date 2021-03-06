<!DOCTYPE html>
<html lang="en">
	<head>
		<title>PCAP Viewer</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="local/style.css"/>
	    <meta http-equiv="Content-Language" content="en" />
	    <meta name="author" content="Nicolas Ngô-Maï - Thibault Lengagne" />
	</head>

	<body>

		<nav class="navbar navbar-default navbar-fixed-top">
	      <div class="container-fluid">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="#">Pcap Viewer</a>
	        </div>
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav">
	            <li><a href="">New Pcap</a></li>
	            <li class="dropdown">
	              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Options<span class="caret"></span></a>
	              <ul class="dropdown-menu">
	                <li><a href="#">Action</a></li>
	                <li><a href="#">Another action</a></li>
	                <li><a href="#">Something else here</a></li>
	                <!-- <li role="separator" class="divider"></li>
	                <li class="dropdown-header">Nav header</li>
	                <li><a href="#">Separated link</a></li>
	                <li><a href="#">One more separated link</a></li> -->
	              </ul>
	            </li>
	            <li><a href="">About</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>

		<div id="content" class="container-fluid">
			<div class="row">
				<div class="left-bar col-md-3">
					<ul id="left-tab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#hosts" aria-controls="hosts" role="tab" data-toggle="tab">Hosts</a></li>
						<li role="presentation"><a href="#services" aria-controls="services" role="tab" data-toggle="tab">Services</a></li>
					</ul>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="hosts">
						  <table class="table table-striped">
				            <thead>
				              <tr>
				                <th>#</th>
				                <th>Name</th>
				                <th>OS</th>
				              </tr>
				            </thead>
				            <tbody>
				              <tr>
				                <td>1</td>
				                <td>192.168.0.1</td>
				                <td>Ubuntu</td>
				              </tr>
				            </tbody>
				          </table>
						</div>
						<div role="tabpanel" class="tab-pane" id="services">
							<table class="table table-striped">
				            <thead>
				              <tr>
				                <th>#</th>
				                <th>Protocol</th>
				                <th>Port</th>
				              </tr>
				            </thead>
				            <tbody>
				              <tr>
				                <td>1</td>
				                <td>HTTP</td>
				                <td>80</td>
				              </tr>
				            </tbody>
				          </table>
						</div>
					</div>
				</div>
				<div class="visu-wrapper col-md-6">

					<button id="parallel-btn" class="btn btn-default" type="button">Parallel</button>
					<button id="network-btn" class="btn btn-default" type="button">Network</button>

					<div id="view-wrapper" class="panel panel-default">
						
					</div>
				</div>
				<div class="info-wrapper col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading">Info</div>
						<div class="panel-body"></div>
					</div>
				</div>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="//d3js.org/d3.v3.min.js"></script>
		<script type="text/javascript" src="local/local.js"></script>
	</body>
</html>