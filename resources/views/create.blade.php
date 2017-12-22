<!DOCTYPE html>
<html data-ng-app="mcms">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Metaheuristics CMS | Create Document</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="css/plugins/iCheck/custom.css" rel="stylesheet">
	<link href="css/plugins/summernote/summernote.css" rel="stylesheet">
	<link href="css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<link href="css/plugins/iCheck/custom.css" rel="stylesheet">

	<link href="css/plugins/chosen/bootstrap-chosen.css" rel="stylesheet">

	<link href="css/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

	<link href="css/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">

	<link href="css/plugins/cropper/cropper.min.css" rel="stylesheet">

	<link href="css/plugins/switchery/switchery.css" rel="stylesheet">

	<link href="css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">

	<link href="css/plugins/nouslider/jquery.nouislider.css" rel="stylesheet">

	<link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">

	<link href="css/plugins/ionRangeSlider/ion.rangeSlider.css" rel="stylesheet">
	<link href="css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css" rel="stylesheet">

	<link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

	<link href="css/plugins/clockpicker/clockpicker.css" rel="stylesheet">

	<link href="css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">

	<link href="css/plugins/select2/select2.min.css" rel="stylesheet">

	<link href="css/plugins/touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet">

	<link href="css/plugins/dualListbox/bootstrap-duallistbox.min.css" rel="stylesheet">

	<link href="css/animate.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

	<style type="text/css"></style>

</head>

<body data-ng-controller="DocumentController" class="pace-done {{ $skin }}">
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
					<li class="active">
						<a href="/create"><i class="fa fa-file-word-o"></i> <span class="nav-label">Create Document</span></a>
					</li>
					<li>
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
				<nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
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
					<h2>Create Document</h2>

				</div>
			</div>

			<div class="wrapper wrapper-content">
				<div class="row">

					<div class="col-lg-11 animated fadeInRight">
						<div class="mail-box-header">
							<div class="pull-right tooltip-demo">
								<button data-ng-click="saveDocument()" class="ladda-button btn btn-primary" data-style="expand-left">
<i class="fa fa-save"></i>
<span class="ladda-label">Save</span><span class="ladda-spinner"></span></button>



								<!--<a class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="" href="javascript:void(0)" data-ng-click="document={}"
									data-original-title="Discard"><i class="fa fa-times"></i> Discard</a>-->
							</div>
							<h2>Create Document</h2>
						</div>
						<div class="mail-box">

							<form class="form-horizontal" method="get">
								{{ csrf_field() }}

								<div class="mail-body">

									<div class="form-group"><label class="col-sm-2 control-label">Topic:</label>

										<div class="col-sm-10"><input data-ng-model="document.topic" class="form-control" value="" type="text" required></div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Select Tags:</label>
										<div class="col-sm-10">
											<select data-ng-model="document.tags" data-ng-options="tag.name as tag.name for tag in tags" data-placeholder="Choose Tags..."
												class="chosen-select" multiple="" style="width: 350px; display: none;" tabindex="-1" required>
                							</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Editors:</label>
										<div class="col-sm-10">
											<select data-ng-model="document.editors" data-ng-options="author.name as author.name for author in authors" data-placeholder="Add Authors..."
												class="chosen-select" multiple="" style="width: 350px; display: none;" tabindex="-1" required>
                        					</select>
										</div>
									</div>


								</div>

								<div class="mail-text h-200">

									<div class="summernote" style="display: none;" contenteditable="true" data-ng-model="document.body">

									</div>
									<div class="note-editor note-frame panel panel-default" id="citation" style="display: none;">
										<div class="note-dropzone">
											<div class="note-dropzone-message"></div>
										</div>
										<div class="note-editing-area" style="">
											<div class="note-handle">
												<div class="note-control-selection" style="display: none;">
													<div class="note-control-selection-bg"></div>
													<div class="note-control-holder note-control-nw"></div>
													<div class="note-control-holder note-control-ne"></div>
													<div class="note-control-holder note-control-sw"></div>
													<div class="note-control-sizing note-control-se"></div>
													<div class="note-control-selection-info"></div>
												</div>
											</div>
											<textarea class="note-codable"></textarea>
											<div tabindex="-1" style="position: absolute; left: -100000px; opacity: 0;" data-ng-model="document.body" contenteditable="true"></div>
											<h3 class="note-toolbar panel-heading" style="text-align: center;color: #666;font-weight: bold;background: #fff;">Citations</h3>
											<p class="note-editable panel-body" style="height: auto;width: 100%;border: 0px;background: #fff;" disabled="" contenteditable="false">Content Here Is Editable But Not By User</p>
											<div class="note-statusbar">
												<div class="note-resizebar">
													<div class="note-icon-bar"></div>
													<div class="note-icon-bar"></div>
													<div class="note-icon-bar"></div>
												</div>
											</div>
										</div>
										<div class="modal link-dialog" aria-hidden="false" tabindex="-1">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
														<h4 class="modal-title">Insert Link</h4>
													</div>
													<div class="modal-body">
														<div class="form-group"><label>Text to display</label><input class="note-link-text form-control" type="text"></div>
														<div class="form-group"><label>To what URL should this link go?</label><input class="note-link-url form-control" value="http://" type="text"></div>
														<div class="checkbox"><label><input checked="" type="checkbox"> Open in new window</label></div>
													</div>
													<div class="modal-footer"><button href="#" class="btn btn-primary note-link-btn disabled" disabled="">Insert Link</button></div>
												</div>
											</div>
										</div>
										<div class="modal" aria-hidden="false" tabindex="-1">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
														<h4 class="modal-title">Insert Image</h4>
													</div>
													<div class="modal-body">
														<div class="form-group note-group-select-from-files"><label>Select from files</label><input class="note-image-input form-control" name="files" accept="image/*"
																multiple="multiple" type="file"></div>
														<div class="form-group note-group-image-url" style="overflow:auto;"><label>Image URL</label><input class="note-image-url form-control col-md-12" type="text"></div>
													</div>
													<div class="modal-footer"><button href="#" class="btn btn-primary note-image-btn disabled" disabled="">Insert Image</button></div>
												</div>
											</div>
										</div>
										<div class="modal" aria-hidden="false" tabindex="-1">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
														<h4 class="modal-title">Insert Video</h4>
													</div>
													<div class="modal-body">
														<div class="form-group row-fluid"><label>Video URL? <small class="text-muted">(YouTube, Vimeo, Vine, Instagram, DailyMotion or Youku)</small></label>
															<input class="note-video-url form-control span12" type="text"></div>
													</div>
													<div class="modal-footer"><button href="#" class="btn btn-primary note-video-btn disabled" disabled="">Insert Video</button></div>
												</div>
											</div>
										</div>
										<div class="modal" aria-hidden="false" tabindex="-1">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
														<h4 class="modal-title">Help</h4>
													</div>
													<div class="modal-body" style="max-height: 300px; overflow: scroll;">
														<div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>ENTER</kbd></label><span>Insert Paragraph</span>
														<div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+Z</kbd></label><span>Undoes the last command</span>
														<div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+Y</kbd></label><span>Redoes the last command</span>
														<div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>TAB</kbd></label><span>Tab</span>
														<div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>SHIFT+TAB</kbd></label><span>Untab</span>
														<div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+B</kbd></label><span>Set a bold style</span>
														<div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+I</kbd></label><span>Set a italic style</span>
														<div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+U</kbd></label><span>Set a underline style</span>
														<div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+S</kbd></label><span>Set a strikethrough style</span>
														<div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+BACKSLASH</kbd></label><span>Clean a style</span>
														<div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+L</kbd></label><span>Set left align</span>
														<div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+E</kbd></label><span>Set center align</span>
														<div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+R</kbd></label><span>Set right align</span>
														<div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+J</kbd></label><span>Set full align</span>
														<div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM7</kbd></label><span>Toggle unordered list</span>
														<div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+SHIFT+NUM8</kbd></label><span>Toggle ordered list</span>
														<div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+LEFTBRACKET</kbd></label><span>Outdent on current paragraph</span>
														<div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+RIGHTBRACKET</kbd></label><span>Indent on current paragraph</span>
														<div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM0</kbd></label><span>Change current block's format as a paragraph(P tag)</span>
														<div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM1</kbd></label><span>Change current block's format as H1</span>
														<div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM2</kbd></label><span>Change current block's format as H2</span>
														<div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM3</kbd></label><span>Change current block's format as H3</span>
														<div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM4</kbd></label><span>Change current block's format as H4</span>
														<div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM5</kbd></label><span>Change current block's format as H5</span>
														<div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+NUM6</kbd></label><span>Change current block's format as H6</span>
														<div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+ENTER</kbd></label><span>Insert horizontal rule</span>
														<div class="help-list-item"></div><label style="width: 180px; margin-right: 10px;"><kbd>CTRL+K</kbd></label><span>Show Link Dialog</span></div>
													<div class="modal-footer">
														<p class="text-center"><a href="http://summernote.org/" target="_blank">Summernote 0.8.2</a> · <a href="https://github.com/summernote/summernote"
																target="_blank">Project</a> · <a href="https://github.com/summernote/summernote/issues" target="_blank">Issues</a></p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>

								<div class="clearfix"></div>


							</form>

						</div>
					</div>
				</div>
			</div>
			<!--modal-->
			<div id="createModal" class="modal fade" aria-hidden="false" tabindex="-1" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
							<h4 class="modal-title">Success</h4>
						</div>
						<div class="modal-body">
							<div class="form-group"><label>The document was successfully created</label></div>
						</div>
						<div class="modal-footer"><a href="/mydocuments" class="btn btn-info">Ok</a></div>
					</div>
				</div>
			</div>
			<div class="footer">
				<div class="pull-right">
					10GB of <strong>250GB</strong> Free.
				</div>
				<div>
					<strong>© 2017</strong> Metaheuristics Content Management System
				</div>
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

	<!-- iCheck -->
	<script src="js/plugins/iCheck/icheck.min.js"></script>

	<!-- Chosen -->
	<script src="js/plugins/chosen/chosen.jquery.js"></script>

	<!-- JSKnob -->
	<script src="js/plugins/jsKnob/jquery.knob.js"></script>

	<!-- Input Mask-->
	<script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>

	<!-- Data picker -->
	<script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>

	<!-- NouSlider -->
	<script src="js/plugins/nouslider/jquery.nouislider.min.js"></script>

	<!-- Switchery -->
	<script src="js/plugins/switchery/switchery.js"></script>

	<!-- IonRangeSlider -->
	<script src="js/plugins/ionRangeSlider/ion.rangeSlider.min.js"></script>

	<!-- iCheck -->
	<script src="js/plugins/iCheck/icheck.min.js"></script>

	<!-- MENU -->
	<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

	<!-- Color picker -->
	<script src="js/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>

	<!-- Clock picker -->
	<script src="js/plugins/clockpicker/clockpicker.js"></script>

	<!-- Image cropper -->
	<script src="js/plugins/cropper/cropper.min.js"></script>

	<!-- Date range use moment.js same as full calendar plugin -->
	<script src="js/plugins/fullcalendar/moment.min.js"></script>

	<!-- Date range picker -->
	<script src="js/plugins/daterangepicker/daterangepicker.js"></script>

	<!-- Select2 -->
	<script src="js/plugins/select2/select2.full.min.js"></script>

	<!-- TouchSpin -->
	<script src="js/plugins/touchspin/jquery.bootstrap-touchspin.min.js"></script>

	<!-- Tags Input -->
	<script src="js/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

	<!-- Dual Listbox -->
	<script src="js/plugins/dualListbox/jquery.bootstrap-duallistbox.js"></script>


	<!-- SUMMERNOTE -->
	<script src="js/plugins/summernote/summernote.min.js"></script>
	<script>
        /*$(document).ready(function(){
            
        });*/
		function extract(){
			var citationWindow = document.getElementById("citation");
			if(citationWindow.style.display == "block")
				document.getElementById("citation").style.display = "none";
			else{
				//should extract the citation here
				document.getElementById("citation").style.display = "block";
			}
				
		}
    </script>

	<script type="text/javascript" src="/app/angular.js"></script>
	<script type="text/javascript" src="/app/angular-sanitize.js"></script>
	<script type="text/javascript" src="/app/config/config.js"></script>
	<script type="text/javascript" src="/app/service/api-service.js"></script>
	<script type="text/javascript" src="/app/modules/document/document.js"></script>



	<div class="note-popover popover in note-link-popover bottom" style="display: none;">
		<div class="arrow"></div>
		<div class="popover-content note-children-container"><span><a target="_blank"></a>&nbsp;</span>
			<div class="note-btn-group btn-group note-link"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Edit"><i class="note-icon-link"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Unlink"><i class="note-icon-chain-broken"></i></button>
			</div>
		</div>
	</div>
	<div class="note-popover popover in note-image-popover bottom" style="display: none;">
		<div class="arrow"></div>
		<div class="popover-content note-children-container">
			<div class="note-btn-group btn-group note-imagesize"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Full"><span class="note-fontsize-10">100%</span></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Half"><span class="note-fontsize-10">50%</span></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Quarter"><span class="note-fontsize-10">25%</span></button>
			</div>
			<div class="note-btn-group btn-group note-float"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float Left"><i class="note-icon-align-left"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float Right"><i class="note-icon-align-right"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float None"><i class="note-icon-align-justify"></i></button>
			</div>
			<div class="note-btn-group btn-group note-remove"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Remove Image"><i class="note-icon-trash"></i></button></div>
		</div>
	</div>
	<div class="note-popover popover in note-link-popover bottom">
		<div class="arrow"></div>
		<div class="popover-content note-children-container"><span><a target="_blank"></a>&nbsp;</span>
			<div class="note-btn-group btn-group note-link"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Edit"><i class="note-icon-link"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Unlink"><i class="note-icon-chain-broken"></i></button>
			</div>
		</div>
	</div>
	<div class="note-popover popover in note-image-popover bottom">
		<div class="arrow"></div>
		<div class="popover-content note-children-container">
			<div class="note-btn-group btn-group note-imagesize"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Full"><span class="note-fontsize-10">100%</span></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Half"><span class="note-fontsize-10">50%</span></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Quarter"><span class="note-fontsize-10">25%</span></button>
			</div>
			<div class="note-btn-group btn-group note-float"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float Left"><i class="note-icon-align-left"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float Right"><i class="note-icon-align-right"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float None"><i class="note-icon-align-justify"></i></button>
			</div>
			<div class="note-btn-group btn-group note-remove"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Remove Image"><i class="note-icon-trash"></i></button></div>
		</div>
	</div>
	<div class="note-popover popover in note-link-popover bottom">
		<div class="arrow"></div>
		<div class="popover-content note-children-container"><span><a target="_blank"></a>&nbsp;</span>
			<div class="note-btn-group btn-group note-link"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Edit"><i class="note-icon-link"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Unlink"><i class="note-icon-chain-broken"></i></button>
			</div>
		</div>
	</div>
	<div class="note-popover popover in note-image-popover bottom">
		<div class="arrow"></div>
		<div class="popover-content note-children-container">
			<div class="note-btn-group btn-group note-imagesize"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Full"><span class="note-fontsize-10">100%</span></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Half"><span class="note-fontsize-10">50%</span></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Quarter"><span class="note-fontsize-10">25%</span></button>
			</div>
			<div class="note-btn-group btn-group note-float"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float Left"><i class="note-icon-align-left"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float Right"><i class="note-icon-align-right"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float None"><i class="note-icon-align-justify"></i></button>
			</div>
			<div class="note-btn-group btn-group note-remove"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Remove Image"><i class="note-icon-trash"></i></button></div>
		</div>
	</div>
	<div class="note-popover popover in note-link-popover bottom">
		<div class="arrow"></div>
		<div class="popover-content note-children-container"><span><a target="_blank"></a>&nbsp;</span>
			<div class="note-btn-group btn-group note-link"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Edit"><i class="note-icon-link"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Unlink"><i class="note-icon-chain-broken"></i></button>
			</div>
		</div>
	</div>
	<div class="note-popover popover in note-image-popover bottom">
		<div class="arrow"></div>
		<div class="popover-content note-children-container">
			<div class="note-btn-group btn-group note-imagesize"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Full"><span class="note-fontsize-10">100%</span></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Half"><span class="note-fontsize-10">50%</span></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Quarter"><span class="note-fontsize-10">25%</span></button>
			</div>
			<div class="note-btn-group btn-group note-float"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float Left"><i class="note-icon-align-left"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float Right"><i class="note-icon-align-right"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float None"><i class="note-icon-align-justify"></i></button>
			</div>
			<div class="note-btn-group btn-group note-remove"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Remove Image"><i class="note-icon-trash"></i></button></div>
		</div>
	</div>
	<div class="note-popover popover in note-link-popover bottom">
		<div class="arrow"></div>
		<div class="popover-content note-children-container"><span><a target="_blank"></a>&nbsp;</span>
			<div class="note-btn-group btn-group note-link"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Edit"><i class="note-icon-link"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Unlink"><i class="note-icon-chain-broken"></i></button>
			</div>
		</div>
	</div>
	<div class="note-popover popover in note-image-popover bottom">
		<div class="arrow"></div>
		<div class="popover-content note-children-container">
			<div class="note-btn-group btn-group note-imagesize"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Full"><span class="note-fontsize-10">100%</span></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Half"><span class="note-fontsize-10">50%</span></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Quarter"><span class="note-fontsize-10">25%</span></button>
			</div>
			<div class="note-btn-group btn-group note-float"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float Left"><i class="note-icon-align-left"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float Right"><i class="note-icon-align-right"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float None"><i class="note-icon-align-justify"></i></button>
			</div>
			<div class="note-btn-group btn-group note-remove"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Remove Image"><i class="note-icon-trash"></i></button></div>
		</div>
	</div>
	<div class="note-popover popover in note-link-popover bottom">
		<div class="arrow"></div>
		<div class="popover-content note-children-container"><span><a target="_blank"></a>&nbsp;</span>
			<div class="note-btn-group btn-group note-link"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Edit"><i class="note-icon-link"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Unlink"><i class="note-icon-chain-broken"></i></button>
			</div>
		</div>
	</div>
	<div class="note-popover popover in note-image-popover bottom">
		<div class="arrow"></div>
		<div class="popover-content note-children-container">
			<div class="note-btn-group btn-group note-imagesize"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Full"><span class="note-fontsize-10">100%</span></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Half"><span class="note-fontsize-10">50%</span></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Quarter"><span class="note-fontsize-10">25%</span></button>
			</div>
			<div class="note-btn-group btn-group note-float"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float Left"><i class="note-icon-align-left"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float Right"><i class="note-icon-align-right"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float None"><i class="note-icon-align-justify"></i></button>
			</div>
			<div class="note-btn-group btn-group note-remove"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Remove Image"><i class="note-icon-trash"></i></button></div>
		</div>
	</div>
	<div class="note-popover popover in note-link-popover bottom">
		<div class="arrow"></div>
		<div class="popover-content note-children-container"><span><a target="_blank"></a>&nbsp;</span>
			<div class="note-btn-group btn-group note-link"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Edit"><i class="note-icon-link"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Unlink"><i class="note-icon-chain-broken"></i></button>
			</div>
		</div>
	</div>
	<div class="note-popover popover in note-image-popover bottom">
		<div class="arrow"></div>
		<div class="popover-content note-children-container">
			<div class="note-btn-group btn-group note-imagesize"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Full"><span class="note-fontsize-10">100%</span></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Half"><span class="note-fontsize-10">50%</span></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Quarter"><span class="note-fontsize-10">25%</span></button>
			</div>
			<div class="note-btn-group btn-group note-float"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float Left"><i class="note-icon-align-left"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float Right"><i class="note-icon-align-right"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float None"><i class="note-icon-align-justify"></i></button>
			</div>
			<div class="note-btn-group btn-group note-remove"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Remove Image"><i class="note-icon-trash"></i></button></div>
		</div>
	</div>
	<div class="note-popover popover in note-link-popover bottom">
		<div class="arrow"></div>
		<div class="popover-content note-children-container"><span><a target="_blank"></a>&nbsp;</span>
			<div class="note-btn-group btn-group note-link"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Edit"><i class="note-icon-link"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Unlink"><i class="note-icon-chain-broken"></i></button>
			</div>
		</div>
	</div>
	<div class="note-popover popover in note-image-popover bottom">
		<div class="arrow"></div>
		<div class="popover-content note-children-container">
			<div class="note-btn-group btn-group note-imagesize"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Full"><span class="note-fontsize-10">100%</span></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Half"><span class="note-fontsize-10">50%</span></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Quarter"><span class="note-fontsize-10">25%</span></button>
			</div>
			<div class="note-btn-group btn-group note-float"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float Left"><i class="note-icon-align-left"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float Right"><i class="note-icon-align-right"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float None"><i class="note-icon-align-justify"></i></button>
			</div>
			<div class="note-btn-group btn-group note-remove"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Remove Image"><i class="note-icon-trash"></i></button></div>
		</div>
	</div>
	<div class="note-popover popover in note-link-popover bottom" style="display: none;">
		<div class="arrow"></div>
		<div class="popover-content note-children-container"><span><a target="_blank"></a>&nbsp;</span>
			<div class="note-btn-group btn-group note-link"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Edit"><i class="note-icon-link"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Unlink"><i class="note-icon-chain-broken"></i></button>
			</div>
		</div>
	</div>
	<div class="note-popover popover in note-image-popover bottom" style="display: none;">
		<div class="arrow"></div>
		<div class="popover-content note-children-container">
			<div class="note-btn-group btn-group note-imagesize"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Full"><span class="note-fontsize-10">100%</span></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Half"><span class="note-fontsize-10">50%</span></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Quarter"><span class="note-fontsize-10">25%</span></button>
			</div>
			<div class="note-btn-group btn-group note-float"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float Left"><i class="note-icon-align-left"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float Right"><i class="note-icon-align-right"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float None"><i class="note-icon-align-justify"></i></button>
			</div>
			<div class="note-btn-group btn-group note-remove"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Remove Image"><i class="note-icon-trash"></i></button></div>
		</div>
	</div>
	<div class="note-popover popover in note-link-popover bottom" style="display: none;">
		<div class="arrow"></div>
		<div class="popover-content note-children-container"><span><a target="_blank"></a>&nbsp;</span>
			<div class="note-btn-group btn-group note-link"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Edit"><i class="note-icon-link"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Unlink"><i class="note-icon-chain-broken"></i></button>
			</div>
		</div>
	</div>
	<div class="note-popover popover in note-image-popover bottom" style="display: none;">
		<div class="arrow"></div>
		<div class="popover-content note-children-container">
			<div class="note-btn-group btn-group note-imagesize"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Full"><span class="note-fontsize-10">100%</span></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Half"><span class="note-fontsize-10">50%</span></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Quarter"><span class="note-fontsize-10">25%</span></button>
			</div>
			<div class="note-btn-group btn-group note-float"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float Left"><i class="note-icon-align-left"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float Right"><i class="note-icon-align-right"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float None"><i class="note-icon-align-justify"></i></button>
			</div>
			<div class="note-btn-group btn-group note-remove"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Remove Image"><i class="note-icon-trash"></i></button></div>
		</div>
	</div>
	<div class="note-popover popover in note-link-popover bottom" style="display: none;">
		<div class="arrow"></div>
		<div class="popover-content note-children-container"><span><a target="_blank"></a>&nbsp;</span>
			<div class="note-btn-group btn-group note-link"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Edit"><i class="note-icon-link"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Unlink"><i class="note-icon-chain-broken"></i></button>
			</div>
		</div>
	</div>
	<div class="note-popover popover in note-image-popover bottom" style="display: none;">
		<div class="arrow"></div>
		<div class="popover-content note-children-container">
			<div class="note-btn-group btn-group note-imagesize"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Full"><span class="note-fontsize-10">100%</span></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Half"><span class="note-fontsize-10">50%</span></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Quarter"><span class="note-fontsize-10">25%</span></button>
			</div>
			<div class="note-btn-group btn-group note-float"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float Left"><i class="note-icon-align-left"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float Right"><i class="note-icon-align-right"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float None"><i class="note-icon-align-justify"></i></button>
			</div>
			<div class="note-btn-group btn-group note-remove"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Remove Image"><i class="note-icon-trash"></i></button></div>
		</div>
	</div>
	<div class="note-popover popover in note-link-popover bottom" style="display: none;">
		<div class="arrow"></div>
		<div class="popover-content note-children-container"><span><a target="_blank"></a>&nbsp;</span>
			<div class="note-btn-group btn-group note-link"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Edit"><i class="note-icon-link"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Unlink"><i class="note-icon-chain-broken"></i></button>
			</div>
		</div>
	</div>
	<div class="note-popover popover in note-image-popover bottom" style="display: none;">
		<div class="arrow"></div>
		<div class="popover-content note-children-container">
			<div class="note-btn-group btn-group note-imagesize"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Full"><span class="note-fontsize-10">100%</span></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Half"><span class="note-fontsize-10">50%</span></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Resize Quarter"><span class="note-fontsize-10">25%</span></button>
			</div>
			<div class="note-btn-group btn-group note-float"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float Left"><i class="note-icon-align-left"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float Right"><i class="note-icon-align-right"></i></button>
				<button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Float None"><i class="note-icon-align-justify"></i></button>
			</div>
			<div class="note-btn-group btn-group note-remove"><button type="button" class="note-btn btn btn-default btn-sm" tabindex="-1" title="" data-original-title="Remove Image"><i class="note-icon-trash"></i></button></div>
		</div>
	</div>
</body>

</html>