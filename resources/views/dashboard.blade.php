<!DOCTYPE html>
<html data-ng-app="mcms">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Metaheuristics CMS | Dashboard</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="css/plugins/summernote/summernote.css" rel="stylesheet">
	<link href="css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
	<link href="css/plugins/slick/slick.css" rel="stylesheet">
	<link href="css/plugins/slick/slick-theme.css" rel="stylesheet">
	<link href="css/plugins/iCheck/custom.css" rel="stylesheet">

	<link href="css/animate.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

</head>

<body class="pace-done {{ $skin }}" data-ng-controller="MainController">
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

					<li class="active">
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
			<div data-ng-show="page == 'dashboard'">
				<div class="row wrapper border-bottom white-bg page-heading">
					<div class="feed-element inline pull-right">
						<img alt="image" class="img-circle pull-right" src="{{ $logo }}">
						<strong class="well-lg fa-2x">{{ $institution }}</strong>
					</div>
					<div class="col-sm-4">
						<h2>Dashboard</h2>

					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="wrapper wrapper-content animated fadeInUp" style="padding-bottom: 0px;">

							<div class="ibox">

								<div class="ibox-title">
									<h5>Search All Files</h5>

								</div>
								<div class="ibox-content">


									<div class="row m-b-sm m-t-sm">

										<div class="col-md-11">
											<div class="input-group"><input data-ng-model="search" placeholder="Search" class="input-sm form-control" type="text"> <span class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-primary"> Go!</button> </span></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="wrapper wrapper-content animated fadeInUp" style="padding-top: 0px;">

							<div class="ibox">

								<div class="ibox-title">
									<h5>Recent files</h5>
									<div class="ibox-tools">
										<a class="btn btn-primary btn-xs" href="/upload">Upload New Document</a>
										<a href="/create" class="btn btn-primary btn-xs">Create New Document</a>
									</div>
								</div>
								<div class="ibox-content">


									<div class="project-list">

										<table class="table table-hover">
											<tbody>
												<tr data-ng-repeat="document in documentList | filter: search">
													<td class="project-status">
														<span class="label label-primary">Active</span>
													</td>
													<td class="project-title">
														<a href="javascript:void(0)" data-ng-click="openDocument(document)"><span data-ng-bind="document.topic"></span></a>
														<br>
														<small><span data-ng-bind="document.size"></span> bytes</small>
													</td>
													<td class="project-completion">
														<small>Created by <span data-ng-bind="document.author"></span></small>

													</td>
													<td class="project-people">
														Computer Science </td>
													<td class="project-actions">
														<a data-ng-href="/api/document/download?path=<%document.path%>" class="btn btn-white btn-sm" download><i class="fa fa-download"></i> Download File</a>														<a class="btn btn-white btn-sm" href="javascript:void(0)" data-ng-click="openDocument(document)"><i class="fa fa-eye-slash"></i> View File</a>
														<!--<a class="btn btn-white btn-sm" href="javascript:void(0)" data-ng-click="editPage(document)"><i class="fa fa-pencil"></i> Edit File</a>-->
														<!--<a class="btn btn-white btn-sm" href="javascript:void(0)" data-ng-click="deleteDialog(document)"><i class="fa fa-trash"></i> Delete File</a>-->
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
			</div>
			<div class="wrapper wrapper-content" data-ng-show="page == 'view'">
				<div class="row">

					<div class="col-lg-11 animated fadeInRight">
						<div class="mail-box-header">
							<div class="pull-right tooltip-demo">
								<a class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back" data-ng-click="documentsPage()"><i class="fa fa-reply"></i> Back</a>
							</div>
							<div class="pull-right tooltip-demo">
								<a class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download document"
									data-ng-href="/api/document/download?path=<%document.path%>" download=""><i class="fa fa-download"></i> Download</a>
								<a class="btn btn-white btn-sm" data-ng-show="document.author == user || document.editor == true" data-toggle="tooltip" data-placement="top"
									title="" data-original-title="Edit Document" href="javascript:void(0)" data-ng-click="editPage(document)"><i class="fa fa-edit"></i> Edit Document</a>
								<a class="btn btn-white btn-sm" data-ng-show="document.author == user || document.editor == true" data-toggle="tooltip" data-placement="top"
									title="" data-original-title="Document Info" href="javascript:void(0)" data-ng-click="showDocInfo(document)"><i class="fa fa-info"></i> Document Info</a>
								<a class="btn btn-white btn-sm" data-ng-show="document.author == user || document.editor == true" data-toggle="tooltip" data-placement="top"
									title="" data-original-title="Delete" href="javascript:void(0)" data-ng-click="deleteDialog(document)"><i class="fa fa-trash"></i> Delete File</a>


							</div>
							<h2>
								View Document
							</h2>
							<div class="mail-tools tooltip-demo m-t-md">


								<h3>
									<span class="font-normal">Title: </span><span data-ng-bind="document.topic"></span>
								</h3>
								<h5>
									<span class="pull-right font-normal" data-ng-bind="document.updatedAt"></span>
									<span class="font-normal">Author: </span><span data-ng-bind="document.author"></span></h5>

								<div style="width: 100%;height: 35px;">
									<ul class="tag-list" style="padding: 0;">


										<li data-ng-repeat="tag in document.tags"><a href="#"><i class="fa fa-tag"></i> <span data-ng-bind="tag"></span></a></li>
									</ul>
								</div>

							</div>
							<!--<h3>
								<div class="form-group"><label class="col-sm-2 control-label" style="margin-right: 15px;">Tags <small></small>:</label>
									<ul class="tag-list" style="padding: 0">
										<li data-ng-repeat="tag in document.tags"><a href="#"><i class="fa fa-tag"></i> <span data-ng-bind="tag"></span></a></li>
									</ul>

								</div>
							</h3>-->


						</div>

						<div class="mail-box">


							<div class="mail-body" data-ng-bind-html="document.body">

							</div>


							<div class="clearfix"></div>


						</div>
					</div>
				</div>
			</div>
			<div class="wrapper wrapper-content" data-ng-show="page == 'edit'">
				<div class="row">

					<div class="col-lg-11 animated fadeInRight">
						<div class="mail-box-header">
							<div class="pull-right tooltip-demo">
								<a href="javascript:void(0)" data-ng-click="updateDocument()" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top"
									title="" data-original-title="Save"><i class="fa fa-save"></i> Save</a>
								<a href="javascript:void(0)" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#discardModal" data-placement="top"
									title="" data-original-title="Discard email"><i class="fa fa-times"></i> Discard</a>
							</div>
							<h2>Edit Document</h2>
						</div>
						<div class="mail-box">

							<form class="form-horizontal" method="get">
								{{ csrf_field() }}

								<div class="mail-body">

									<div class="form-group"><label class="col-sm-2 control-label">Title:</label>

										<div class="col-sm-10"><input class="form-control" data-ng-model="editedDocument.topic" value="" type="text" required></div>
									</div>
									<div class="form-group"><label class="col-sm-2 control-label" style="margin-right: 15px;">Tags <small></small>:</label>
										<ul class="tag-list" style="padding: 0">
											<li data-ng-repeat="tag in editedDocument.tags"><a href="#"><i class="fa fa-tag"></i> <span data-ng-bind="tag"></span></a></li>
										</ul>

									</div>


								</div>

								<div class="mail-text h-200">

									<div class="summernote2" style="display: none;" data-ng-bind-html="editedDocument.body">

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
											</div><textarea class="note-codable"></textarea>
											<div tabindex="-1" style="position: absolute; left: -100000px; opacity: 0;" contenteditable="true"></div>
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

			<div class="row wrapper border-bottom white-bg page-heading" data-ng-show="page == 'docinfo'">
				<div class="col-lg-10">
					<h2>View Document Info</h2>

				</div>
				<div class="btn-group" style="padding: 20px 0px 0px 0px;">
					<a class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back" data-ng-click="documentsPage()"><i class="fa fa-reply"></i> View Document</a>


				</div>
				<div class="col-lg-2">

				</div>
			</div>

			<div class="wrapper wrapper-content animated fadeInRight" data-ng-show="page == 'docinfo'">

				<div class="row">
					<div class="col-lg-12">

						<div class="ibox product-detail">
							<div class="ibox-content">

								<div class="row">
									<div class="col-md-5">

										<div class="product-images slick-initialized slick-slider" role="toolbar">

											<div aria-live="polite" class="slick-list draggable" style="border: 1px solid #2f4050;">
												<div class="slick-track" style="opacity: 1; width: 1840px; transform: translate3d(-368px, 0px, 0px);" role="listbox">
													<div class="slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true" style="width: 368px;" tabindex="-1">
														<div class="image-imitation">
															[IMAGE 3]
														</div>
													</div>
													<div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 368px;" tabindex="0"
														role="option" aria-describedby="slick-slide00">
														<div class="image-imitation">
															[IMAGE 1]
														</div>
													</div>
													<div class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 368px;" tabindex="-1" role="option" aria-describedby="slick-slide01">
														<div class="image-imitation">
															[IMAGE 2]
														</div>
													</div>
													<div class="slick-slide" data-slick-index="2" aria-hidden="true" style="width: 368px;" tabindex="-1" role="option" aria-describedby="slick-slide02">
														<div class="image-imitation">
															[IMAGE 3]
														</div>
													</div>
													<div class="slick-slide slick-cloned" data-slick-index="3" aria-hidden="true" style="width: 368px;" tabindex="-1">
														<div class="image-imitation">
															[IMAGE 1]
														</div>
													</div>
												</div>
											</div>

										</div>

									</div>
									<div class="col-md-7">

										<h2 class="font-bold m-b-xs" data-ng-bind="docInfo.topic"></h2>
										<div style="width: 100%;height: 35px;">
											<ul class="tag-list" style="padding: 0;">


												<li data-ng-repeat="tag in docInfo.tags"><a href="#"><i class="fa fa-tag"></i> <span data-ng-bind="tag"></span></a></li>
											</ul>
										</div>

										<h3 class="product-main-price">Author(s): <span data-ng-bind="docInfo.author"></span> </h3>
										<h3 class="product-main-price">Viewer(s): <span data-ng-bind="docInfo.viewers"></span> </h3>
										<h3 class="product-main-price">Editors: <span data-ng-repeat="editor in docInfo.editors" data-ng-bind="editor"></span>
										</h3>
										<h3 class="product-main-price">Last updated at: <span data-ng-bind="docInfo.updatedAt"></span> </h3>

										<a class="btn btn-primary btn-sm" data-ng-show="user == docInfo.author" href="javascript:void(0)" data-toggle="modal" data-target="#myModal4"><i class="fa fa-cogs"></i> Set Viewership</a>
										<div class="modal inmodal" id="myModal4" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
											<div class="modal-dialog">
												<div class="modal-content animated fadeIn" style="width: 70%;margin: auto;">
													<div class="modal-header">

														<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button><i></i>
														<h4 class="modal-title">Set Viewership</h4>

													</div>
													<form name="viewershipform">
														<div class="modal-body">
															<div class="form-group" style="height: 175px;">

																<div class="col-sm-10">
																	<div class="" style="font-size:20px;">
																		<label>
																	<input type="radio" value="All" name="viewers" data-ng-model="formModel.viewers">
																	<i></i>
																	All
																	</label>
																	</div>
																	<br>
																	<div class="" style="font-size:20px;">
																		<label>
																	<input type="radio" value="Creator" name="viewers" data-ng-model="formModel.viewers">
																	<i></i>
																	Creator
																	</label>
																	</div>
																	<br>
																	<div class="" style="font-size:20px;">
																		<label>
																	<input type="radio" value="Authors" name="viewers" data-ng-model="formModel.viewers">
																	<i></i>
																	Authors
																	</label>
																	</div>
																	<br>
																	<div class="" style="font-size:20px;">
																		<label>
																	<input type="radio" value="Lecturers" name="viewers" data-ng-model="formModel.viewers">
																	<i></i>
																	Lecturers
																	</label>
																	</div>
																	<br>
																	<div class="" style="font-size:20px;">
																		<label>
																	<input type="radio" value="Students" name="viewers" data-ng-model="formModel.viewers">
																	<i></i>
																	Students
																	</label>
																	</div>

																</div>
															</div>

														</div>

														<div class="modal-footer">
															<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
															<button type="button" class="btn btn-primary" data-ng-click="setViewers()">Save changes</button>
														</div>
													</form>
												</div>
											</div>
										</div>
										<hr>

										<h4>Document description</h4>

										<div class="small text-muted">
											<span data-ng-bind="docInfo.size"></span> bytes
											<!--It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
											The point of using Lorem Ipsum is

											<br>
											<br> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
											in some form, by injected humour, or randomised words which don't look even slightly believable.-->
										</div>

										<hr>

										<div>

										</div>



									</div>
								</div>

							</div>

						</div>

					</div>
				</div>

			</div>

			<div id="updateModal" class="modal fade" aria-hidden="false" tabindex="-1" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
							<h4 class="modal-title">Success</h4>
						</div>
						<div class="modal-body">
							<div class="form-group"><label>The document was successfully updated</label></div>
						</div>
						<div class="modal-footer"><button type="button" class="btn btn-info" data-dismiss="modal">Ok</button></div>
					</div>
				</div>
			</div>
			<div id="discardModal" class="modal fade" aria-hidden="false" tabindex="-1" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
							<h4 class="modal-title">Discard</h4>
						</div>
						<div class="modal-body">
							<div class="form-group"><label>Do you want to discard your changes</label></div>
						</div>
						<div class="modal-footer">
							<button type="button" data-ng-click="discardEdit()" class="btn btn-info">Ok</button>
							<button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
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

	<!-- slick carousel-->
	<script src="js/plugins/slick/slick.min.js"></script>

	<!-- SUMMERNOTE -->
	<script src="js/plugins/summernote/summernote.min.js"></script>

	<!-- Custom and plugin javascript -->
	<script src="js/inspinia.js"></script>
	<script src="js/plugins/pace/pace.min.js"></script>

	<!-- iCheck -->
	<script src="js/plugins/iCheck/icheck.min.js"></script>

	<script type="text/javascript" src="/app/angular.js"></script>
	<script type="text/javascript" src="/app/angular-sanitize.js"></script>
	<script type="text/javascript" src="/app/config/config.js"></script>
	<script type="text/javascript" src="/app/service/api-service.js"></script>
	<script type="text/javascript" src="/app/main.js"></script>

	<script>
        $(document).ready(function(){

            $('#loading-example-btn').click(function () {
                btn = $(this);
                simpleLoad(btn, true)

                // Ajax example
//                $.ajax().always(function () {
//                    simpleLoad($(this), false)
//                });

                simpleLoad(btn, false)
            });

			$('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });

        function simpleLoad(btn, state) {
            if (state) {
                btn.children().addClass('fa-spin');
                btn.contents().last().replaceWith(" Loading");
            } else {
                setTimeout(function () {
                    btn.children().removeClass('fa-spin');
                    btn.contents().last().replaceWith(" Refresh");
                }, 2000);
            }
        }
    </script>





</body>

</html>