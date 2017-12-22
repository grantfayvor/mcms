<!DOCTYPE html>
<html data-ng-app="mcms">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Metaheuristics CMS | Activity Log</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.css" rel="stylesheet">

	<!-- Toastr style -->
	<link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

	<link href="css/animate.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<style>
		.table-hover tr td:nth-child(1) {
			display: none;
		}
		
		.table-hover tr td:nth-child(5) {
			display: none;
		}
		
		.table-hover tr td:nth-child(6) {
			display: none;
		}
	</style>


</head>

<body class="pace-done {{ $skin }}" data-ng-controller="ActivityController">
	<div class="pace  pace-inactive" data-ng-init="initialize()">
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
					<li>
						<a href="/upload"><i class="fa fa-upload"></i> <span class="nav-label">Upload Document</span></a>
					</li>


					<li>
						<a href="{{ route('documents') }}"><i class="fa fa-file"></i> <span class="nav-label">My Documents</span>  </a>
					</li>
					<li class="active">
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
				<nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
					<div class="navbar-header">
						<a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

					</div>
					<ul class="nav navbar-top-links navbar-right">
						<li>
							<span class="m-r-sm text-muted welcome-message"> Welcome to Metaheuristics Content Management System </span>
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
					<h2>Activity Log</h2>

				</div>
			</div>

			<div class="wrapper wrapper-content  animated fadeInRight" data-ng-show="page == 'activities'">
				<div class="row">
					<div class="col-lg-12">
						<div class="ibox">

							<div class="ibox-content">

								<div class="m-b-lg">

									<div class="input-group">
										<input data-ng-model="search" placeholder="Search activity..." class=" form-control" type="text">
										<span class="input-group-btn">
                                        <button type="button" class="btn btn-white"> Search</button>
                                    </span>
									</div>
									<div class="m-t-md">



										<strong>Found <span data-ng-bind="activities.length"></span> activities.</strong>



									</div>

								</div>

								<div class="table-responsive">
									<table class="table table-hover activity-tracker">
										<tbody>
											<tr data-ng-repeat="activity in activities | filter: search">
												<td>
													<span class="label label-primary">Added</span>
												</td>
												<td class="activity-info">
													<a href="javascript:void(0)" data-ng-click="openDocument(activity)">
														<span data-ng-bind="activity.documentName"></span>
													</a>

													<small>
                                            <span data-ng-bind="activity.details"></span>
                                        </small>
												</td>
												<td>
													<span data-ng-bind="activity.user"></span>
												</td>
												<td>
													<span data-ng-bind="activity.timeStamp"></span>
												</td>
												<td>
													<span class="pie" style="display: none;">0.52,1.041</span>
													<svg class="peity" height="16" width="16">
														<path d="M 8 8 L 8 0 A 8 8 0 0 1 14.933563796318165 11.990700825968545 Z" fill="#1ab394"></path>
														<path d="M 8 8 L 14.933563796318165 11.990700825968545 A 8 8 0 1 1 7.999999999999998 0 Z" fill="#d7d7d7"></path>
													</svg>
													<svg class="peity" height="16" width="16">
														<path d="M 8 8 L 8 0 A 8 8 0 0 1 14.933563796318165 11.990700825968545 Z" fill="#1ab394"></path>
														<path d="M 8 8 L 14.933563796318165 11.990700825968545 A 8 8 0 1 1 7.999999999999998 0 Z" fill="#d7d7d7"></path>
													</svg>
													<svg class="peity" height="16" width="16">
														<path d="M 8 8 L 8 0 A 8 8 0 0 1 14.933563796318165 11.990700825968545 Z" fill="#1ab394"></path>
														<path d="M 8 8 L 14.933563796318165 11.990700825968545 A 8 8 0 1 1 7.999999999999998 0 Z" fill="#d7d7d7"></path>
													</svg>
													2d
												</td>
												<td class="text-right">

												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>

						</div>
					</div>
				</div>


			</div>
			<div class="wrapper wrapper-content" data-ng-show="page == 'view'">
				<div class="row">

					<div class="col-lg-11 animated fadeInRight">
						<div class="mail-box-header">
							<div class="pull-right tooltip-demo">
								<a class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back" data-ng-click="page = 'activities'"><i class="fa fa-reply"></i> Back</a>
							</div>
							<div class="pull-right tooltip-demo" data-ng-show="document.body">
								<a class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download document"
									data-ng-href="/api/document/download?path=<%document.documentPath%>" download=""><i class="fa fa-download"></i> Download</a>
							</div>
							<!--<div class="pull-right tooltip-demo" data-ng-show="document.body">
								<a class="btn btn-white btn-sm" href="javascript:void(0)" data-ng-click="deleteDialog(document)"><i class="fa fa-trash"></i> Delete File</a>
							</div>-->
							<h2>
								View Document
							</h2>
							<div class="mail-tools tooltip-demo m-t-md">


								<h3>
									<span class="font-normal">Title: </span><span data-ng-bind="document.documentName"></span>
								</h3>
								<h5>
									<span class="pull-right font-normal" data-ng-bind="document.timeStamp"></span>
									<span class="font-normal">Author: </span><span data-ng-bind="document.user"></span></h5>
							</div>
						</div>
						<div class="mail-box">


							<div class="mail-body" data-ng-bind-html="document.body">

							</div>


							<div class="clearfix"></div>


						</div>
					</div>
				</div>
			</div>
			<div id="deleteModal" class="modal fade" aria-hidden="false" tabindex="-1" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
							<h4 class="modal-title">Delete</h4>
						</div>
						<div class="modal-body">
							<div class="form-group"><label>Do you want to delete this document</label></div>
						</div>
						<div class="modal-footer">
							<button type="button" data-ng-click="deleteDocument()" class="btn btn-info">Ok</button>
							<button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
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

	<!-- Peity -->
	<script src="js/plugins/peity/jquery.peity.min.js"></script>

	<!-- Peity demo data -->
	<script src="js/demo/peity-demo.js"></script>

	<script type="text/javascript" src="/app/angular.js"></script>
	<script type="text/javascript" src="/app/angular-sanitize.js"></script>
	<script type="text/javascript" src="/app/config/config.js"></script>
	<script type="text/javascript" src="/app/service/api-service.js"></script>
	<script type="text/javascript" src="/app/modules/activity/activity.js"></script>





</body>

</html>