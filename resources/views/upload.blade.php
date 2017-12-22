<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Metaheuristics CMS | Upload</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/plugins/dropzone/basic.css" rel="stylesheet">
	<link href="css/plugins/dropzone/dropzone.css" rel="stylesheet">
	<link href="css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">
	<link href="css/plugins/codemirror/codemirror.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

</head>

<body class="pace-done {{ $skin }}">
	<div class="pace  pace-inactive">
		<div class="pace-progress" style="transform: translate3d(100%, 0px, 0px);" data-progress-text="100%" data-progress="99">
			<div class="pace-progress-inner"></div>
		</div>
		<div class="pace-activity"></div>
	</div>
	<div class="pace  pace-inactive">
		<div class="pace-progress" style="transform: translate3d(100%, 0px, 0px);" data-progress-text="100%" data-progress="99">
			<div class="pace-progress-inner"></div>
		</div>
		<div class="pace-activity"></div>
	</div>

	<div id="wrapper">

		<nav class="navbar-default navbar-static-side" role="navigation">
			<div class="sidebar-collapse">
				<ul class="nav metismenu" id="side-menu" style="">
					<li class="nav-header">
						<div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="{{ $photo }}">
                             </span>
							<a data-toggle="dropdown" class="dropdown-toggle" href="#" aria-expanded="false">
								<span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ $username }}</strong>
                             </span> <span class="text-muted text-xs block">{{ $department }}</span> <span class="label label-warning pull-right">{{ $accountType }}</span>								</span>
							</a>

						</div>
						<div class="logo-element">
							MCMS
						</div>
					</li>

					<li>
						<a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</span></a>
					</li>
					<li>
						<a href="/create"><i class="fa fa-file-word-o"></i> <span class="nav-label">Create Document</span></a>
					</li>
					<li class="active">
						<a href="/upload"><i class="fa fa-upload"></i> <span class="nav-label">Upload Document</span></a>
					</li>

					<li>
						<a href="{{ route('documents') }}"><i class="fa fa-file"></i> <span class="nav-label">My Documents</span>  </a>
					</li>
					<li>
						<a href="/activity"><i class="fa fa-hourglass"></i> <span class="nav-label">Recent Activity</span></a>
					</li>
					<li>
						<a href="/logout"><i class="fa fa-sign-out"></i> <span class="nav-label">Logout</span></a>
					</li>

				</ul>

			</div>
		</nav>

		<div id="page-wrapper" class="gray-bg" style="min-height: 422px;">
			<div class="row border-bottom">
				<nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
					<div class="navbar-header">
						<a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

					</div>
					<ul class="nav navbar-top-links navbar-right">
						<li>
							<span class="m-r-sm text-muted welcome-message">Welcome to Metaheuristics Content Management System</span>
						</li>




						<li>
							<a href="/logout">
								<i class="fa fa-sign-out"></i> Log out
							</a>
						</li>
					</ul>

				</nav>
			</div>
			<div class="row wrapper border-bottom white-bg page-heading">
				<div class="feed-element inline pull-right">
					<img alt="image" class="img-circle pull-right" src="{{ $logo }}">
					<strong class="well-lg fa-2x">{{ $institution }}</strong>
				</div>
				<div class="col-sm-4">
					<h2>Upload Document</h2>

				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="wrapper wrapper-content animated fadeIn">


						<div class="row">
							<div class="col-lg-12">
								<div class="ibox">
									<div class="ibox-title">
										<h5>Upload New Files</h5>
									</div>
									<div class="ibox-content">

										<p>
											<strong>Upload your file</strong> </p>

										<form action="{{ route('upload') }}" method="POST" class="dropzone dz-clickable" id="dropzoneForm">
											{{ csrf_field() }}

											<div class="dz-default dz-message"><span><strong>Drop files here or click to upload. </strong><br> (Document will be uploaded automatically) </span></div>
										</form>
										<!--<div class="ibox-content">
											<h5>Basic ProgressBars</h5>

											<div class="progress progress-bar-default">
												<div style="width: 43%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="43" role="progressbar" class="progress-bar">
													<span class="sr-only">43% Complete (success)</span>
												</div>
											</div>

										</div>-->




									</div>
								</div>
							</div>
						</div>






					</div>
				</div>
			</div>
			<div class="footer">
				<div class="pull-right">
					10GB of <strong>250GB</strong> Free.
				</div>
				<div>
					<strong>© 2017 </strong> Metaheuristics Content Management System</div>
			</div>

		</div>
	</div>



	<!-- Mainly scripts -->
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
	<script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

	<!-- Custom and plugin javascript -->
	<script src="js/inspinia.js"></script>
	<script src="js/plugins/pace/pace.min.js"></script>

	<!-- Jasny -->
	<script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>

	<!-- DROPZONE -->
	<script src="js/plugins/dropzone/dropzone.js"></script>

	<!-- CodeMirror -->
	<script src="js/plugins/codemirror/codemirror.js"></script>
	<script src="js/plugins/codemirror/mode/xml/xml.js"></script>


	<script>
        Dropzone.options.dropzoneForm = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            uploadMultiple = false;
            dictDefaultMessage: "<strong>Drop files here or click to upload. </strong></br> (This is just a demo dropzone. Selected files are not actually uploaded.)"
        };

        $(document).ready(function(){

            var editor_one = CodeMirror.fromTextArea(document.getElementById("code1"), {
                lineNumbers: true,
                matchBrackets: true
            });

            var editor_two = CodeMirror.fromTextArea(document.getElementById("code2"), {
                lineNumbers: true,
                matchBrackets: true
            });

            var editor_two = CodeMirror.fromTextArea(document.getElementById("code3"), {
                lineNumbers: true,
                matchBrackets: true
            });

       });
    </script>






	<input multiple="multiple" class="dz-hidden-input" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;"
		type="file"><input multiple="multiple" class="dz-hidden-input" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;"
		type="file"></body>

</html>