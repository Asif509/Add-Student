<?php $__env->startSection('title'); ?>
    Add Student
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto" >
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Add Student</h3>
                        </div>
                        <div class="card-body">
                            <span class="text-primary"><?php echo e(Session::has('success')? Session::get('success') : ''); ?></span>
                            <form action="<?php echo e(route('student-store')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <div class="row">
                                    <label for="" class="col-md-4">Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" name="email" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Phone Number</label>
                                    <div class="col-md-8">
                                        <input type="text" name="mobile" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" class="form-control" />
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success" value="Add Student" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Practice\Class-Exam\resources\views/addStudent.blade.php ENDPATH**/ ?>