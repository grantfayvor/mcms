<!DOCTYPE html>
<html data-ng-app="mcms">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Metaheuristics CMS | Register</title>

	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="css/plugins/iCheck/custom.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg" data-ng-controller="UserController">

	<div class="middle-box text-center loginscreen   animated fadeInDown">
		<div>
			<div>

				<h1 class="logo-name" style="font-size: 90px;margin-top: 0px;">MCMS</h1>

			</div>
			<h3>Register to MCMS</h3>
			<p>Create account to see it in action.</p>
			<form class="m-t" role="form" method="POST" action="{{ route('user-register') }}" enctype="multipart/form-data"">
				{{ csrf_field() }}
				<div class="form-group">
					<input class="form-control" name="username" value="{{ old('username') }}" required="" placeholder="Username" type="text">
				</div>
				<div class="form-group">
					<input class="form-control" name="firstName" value="{{ old('firstName') }}" required="" placeholder="First Name" type="text">
				</div>
				<div class="form-group">
					<input class="form-control" name="lastName" value="{{ old('lastName') }}" required="" placeholder="Last Name" type="text">
				</div>
				<!--<div class="form-group">
					<div class="fileinput fileinput-new input-group" data-provides="fileinput">
						<div class="form-control" data-trigger="fileinput">
							<i class="glyphicon glyphicon-file fileinput-exists"></i>
							<span class="fileinput-filename"></span>
						</div>
						<span class="input-group-addon btn btn-default btn-file">
                        <span class="fileinput-new">Select Image</span>
						<span class="fileinput-exists">Change</span>
						<input type="file" name="..." />
						</span>
						<a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
					</div>
				</div>-->
				<div class="form-group">
					<input class="form-control" type="file" name="photo" required="" placeholder="Select Profile Photo" value="{{ old('photo') }}">
				</div>
				<div class="form-group">
					<select name="department" value="{{ old('department') }}" class="form-control m-b" required="">
                                        <option>Animal Science - Lecturer</option>
                                        <option>Animal Science - Student</option>
                                        <option>Biological and Environmental Engineering - Lecturer</option>
                                        <option>Biological and Environmental Engineering - Student</option>
                                        <option>Biological Statistics and Computational Biology - Lecturer</option>
                                        <option>Biological Statistics and Computational Biology - Student</option>
                                        <option>Communication - Lecturer</option>
                                        <option>Communication - Student</option>
                                        <option>Development Sociology - Lecturer</option>
                                        <option>Development Sociology - Student</option>
                                        <option>Food Science - Lecturer</option>
                                        <option>Food Science - Student</option>
                                        <option>Landscape Architecture - Lecturer</option>
                                        <option>Landscape Architecture - Student</option>
                                        <option>Microbiology - Lecturer</option>
                                        <option>Microbiology - Student</option>
                                        <option>Natural Resources - Lecturer</option>
                                        <option>Natural Resources - Student</option>
                                        <option>Nutritional Sciences - Lecturer</option>
                                        <option>Nutritional Sciences - Student</option>
                                    </select>
				</div>
				<div class="form-group">
					<select name="institution" value="{{ old('institution') }}" class="form-control m-b form-group" required="">
                         <option>University of Lagos</option>
                         <option>University of Abuja</option>
                         <option>University of Nigeria Nsukka</option>
                         <option>University of Ibadan</option>
                         <option>Obafemi Awolowo University</option>
                         <option>Ahmadu Bello University Zaria</option>
                         <option>Federal University of Technology Owerri</option>
                    </select>
				</div>
				<div class="form-group">
					<input class="form-control" name="password" data-ng-model="new_user.password" placeholder="Password" required="" type="password">
				</div>
				<div class="form-group">
					<label style="color:red!important;" for="passwordConfirm" data-ng-show="!passwordMatch">Password does not match.</label>
					<input id="passwordConfirm" class="form-control" required="" name="passwordConfirm" data-ng-model="new_user.confirmPassword"
						data-ng-change="confirmPassword()" placeholder="Confirm Password" type="password">
				</div>
				<div class="form-group">
					<div class="checkbox i-checks"><label class=""> <div class="icheckbox_square-green checked" style="position: relative;"><div class="icheckbox_square-green" style="position: relative;"><div class="icheckbox_square-green" style="position: relative;"><div class="icheckbox_square-green" style="position: relative;"><input style="position: absolute; opacity: 0;" type="checkbox"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;"></ins></div><i></i> Agree to the terms and policy </label></div>
				</div>
				<button type="submit" class="btn btn-primary block full-width m-b">Register</button>

				<p class="text-muted text-center"><small>Already have an account?</small></p>
				<a class="btn btn-sm btn-white btn-block" href="/login">Login</a>
			</form>
			<p class="m-t"> <small>Metaheuristics Content Management System © 2017</small> </p>
		</div>
	</div>

	<!-- Mainly scripts -->
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- iCheck -->
	<script src="js/plugins/iCheck/icheck.min.js"></script>

	<!--app-->
	<script type="text/javascript" src="/app/angular.js"></script>
	<script type="text/javascript" src="/app/angular-sanitize.js"></script>
	<script type="text/javascript" src="/app/config/config.js"></script>
	<script type="text/javascript" src="/app/service/api-service.js"></script>
	<script type="text/javascript" src="/app/modules/user/user.js"></script>
	<script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>





</body>

</html>