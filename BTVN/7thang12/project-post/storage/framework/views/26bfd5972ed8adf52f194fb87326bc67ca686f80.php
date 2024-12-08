<table class="table table-bordered">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Created At</th>
            <th>Updated At</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($post->id); ?></td>
            <td><?php echo e($post->title); ?></td>
            <td><?php echo e($post->content); ?></td>
            <td><?php echo e($post->created_at); ?></td>
            <td><?php echo e($post->updated_at); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
<?php /**PATH C:\xampp\htdocs\project-post\resources\views/home.blade.php ENDPATH**/ ?>