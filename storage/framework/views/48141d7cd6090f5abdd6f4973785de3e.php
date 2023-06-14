<?php $__env->startSection('title'); ?>
    Manage-student
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card shadow">
                        <div class="card-header">
                            <h2 class="text-center">Manage Students</h2>
                        </div>
                        <div class="card-body">
                            <table class="table border">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($student->name); ?></td>
                                        <td><?php echo e($student->email); ?></td>
                                        <td><?php echo e($student->mobile); ?></td>
                                        <td>
                                            <img src="<?php echo e(asset($student->image)); ?>" style="height: 60px; width: 50px" alt="">
                                        </td>
                                        <td>
                                            <a href="" class="btn btn-primary  rounded-0">Edit</a>
                                            <a href="<?php echo e(route('student.destroy',['id'=>$student->id])); ?>" class="btn btn-danger  rounded-0">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Practice\Class-Exam\resources\views/manage.blade.php ENDPATH**/ ?>