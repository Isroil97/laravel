
<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12">
                <div class="card m-3">
                    <div class="card-header">
                        <h3 class="card-title"><?php echo e(__('messages.contact__table')); ?></h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Text</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $contact; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($contact->id); ?></td>
                                        <td><?php echo e($contact->name); ?></td>
                                        <td><?php echo e($contact->lname); ?></td>
                                        <td><?php echo e($contact->email); ?></td>
                                        <td><?php echo e($contact->phone); ?></td>
                                        <td><?php echo e($contact->text); ?></td>
                                        <td>
                                            <form action="<?php echo e(route('deletcontact', ['id' => $contact->id])); ?>" method="post">
                                                <?php echo method_field('delete'); ?>
                                                <?php echo csrf_field(); ?>
                                                <button class="btn btn-danger"><?php echo e(__('messages.delet')); ?></button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\Turizim\resources\views/admin/contact/index.blade.php ENDPATH**/ ?>