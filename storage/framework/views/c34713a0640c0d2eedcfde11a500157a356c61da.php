<?php $__env->startSection('content'); ?>
<h1>Message</h1>
	<?php if(count($message) > 0): ?>
		<?php $__currentLoopData = $message; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<ul class="list-group">
				<li class="list-group-item">
					Name: <?php echo e($message->name); ?>

				</li>
				<li class="list-group-item">
					Email: <?php echo e($message->email); ?>

				</li>
				<li class="list-group-item">
					Message: <?php echo e($message->message); ?>

				</li>
			</ul>

		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>
	##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##
	<p>this is append to the sidebar</p>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>