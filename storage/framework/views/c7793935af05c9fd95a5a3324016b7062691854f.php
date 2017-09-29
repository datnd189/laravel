<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="public/css/app.css">
		
	</head>
	<body>
		<?php echo $__env->make('inc.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<div class="container">
			<?php if(Request::is('/')): ?>
				<?php echo $__env->make('inc.showcase', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<?php endif; ?>
			<div class="row">
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
					<?php echo $__env->make('inc.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
					<?php echo $__env->yieldContent('content'); ?>
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<?php echo $__env->make('inc.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				</div>
			</div>

		</div>

		<footer id="footer" class="text-center">
			<p>Copyright 2017 &copy; Datnd</p>
		</footer>







		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		
	</body>
</html>