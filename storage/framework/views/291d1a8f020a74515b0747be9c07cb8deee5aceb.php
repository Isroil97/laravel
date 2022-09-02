
<?php $__env->startSection('content'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content mt-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="card-title"><?php echo e(__('messages.photos')); ?></h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="filter-container p-0 row">
                                        <?php $__currentLoopData = $photos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $photo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="filtr-item col-sm-2 mt-2 mb-2 " data-category="1"
                                                data-sort="white sample">
                                                <a href="<?php echo e(route('showphoto', ['id' => $photo->id])); ?>">
                                                    <img src="<?php echo e(asset('/storage/assets/images/' . $photo->images)); ?>"
                                                        class="img-fluid mb-2" style="height:100%; cursor: pointer;"
                                                        alt="<?php echo e($photo->title); ?>" />
                                                </a>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3 class="card-title"><?php echo e(__('messages.payment_table')); ?></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>№</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Price</th>
                                            <th>Davlat Nomi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php $__currentLoopData = $payment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td><?php echo e($payment->name); ?></td>
                                                <td><?php echo e($payment->phone); ?></td>
                                                <td><?php echo e($payment->price); ?></td>
                                                <td><?php echo e($photo->title); ?></td>
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

                <div class="row">
                    <div class="col-12">
                        <div class="card mt-3">
                            <div class="card-header">
                                <h3 class="card-title"><?php echo e(__('messages.contact__table')); ?></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>№</th>
                                            <th>Ismi</th>
                                            <th>Familya</th>
                                            <th>Email</th>
                                            <th>Telifon</th>
                                            <th>Messages</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?= $i++ ?></td>
                                                <td><?php echo e($contact->name); ?></td>
                                                <td><?php echo e($contact->lname); ?></td>
                                                <td><?php echo e($contact->email); ?></td>
                                                <td><?php echo e($contact->phone); ?></td>
                                                <td><?php echo e($contact->text); ?></td>
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


                <div class="container p-3">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4 class="card-title"><?php echo e(__('messages.f24')); ?></h4>
                        </div>
                        <div class="card-body">
                        <div class="row">
                                <?php $__currentLoopData = $workers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $workers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-4">
                                        <div class="card">
                                            <img src="<?php echo e(asset('/storage/assets/user_img/' . $workers->images)); ?>"
                                                class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title"><?php echo e($workers->name); ?></h5>
                                                <p class="card-text"><?php echo e($workers->info); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\Turizim\resources\views/admin/index.blade.php ENDPATH**/ ?>