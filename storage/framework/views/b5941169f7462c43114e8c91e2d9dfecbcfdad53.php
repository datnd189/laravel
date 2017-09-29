<?php $__env->startSection('content'); ?>
<h1>Home</h1>
<p>Sometimes you may want to group several middleware under a single key to make them easier to assign to routes. You may do this using the $middlewareGroups property of your HTTP kernel.

Out of the box, Laravel comes with web and api middleware groups that contains common middleware you may want to apply to your web UI and API routes:</p>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>
	##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##
	<p>this is append to the sidebar</p>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>