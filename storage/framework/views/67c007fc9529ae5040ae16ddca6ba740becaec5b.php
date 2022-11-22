<!-- head --> 
<?php echo $__env->make('Back_end.layout.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- nav --> 
<?php echo $__env->make('Back_end.layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div id="layoutSidenav">

<!-- sidebar -->
<?php echo $__env->make('Back_end.layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Example
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Name</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>STT</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>       
                                    <td><?php echo e($key+1); ?></td>
                                    <td><?php echo e($value->CategoryName); ?></td>              
                                    <td><?php echo e($value->CategoryDescription); ?></td>
                                    <td>               
                                        <a href="<?php echo e(asset('admin/category/edit/'.$value->CategoryID)); ?>" class="btn btn-primary edit"><span class="glyphicon glyphicon-edit"> </span> Edit</a>
                                        <a href="<?php echo e(asset('admin/category/delete/'.$value->CategoryID)); ?>" onclick="return confirm('Bạn có chắc muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> </span>Delete</a>               
                                    </td> 
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <a href="<?php echo e(asset('admin/category/create/')); ?>" class="btn btn-primary "><span class="glyphicon glyphicon-edit"> </span> Add Category </a>
        </div>
    </main>
</div>

</div>

<!-- footer -->
<?php echo $__env->make('Back_end.layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- js -->
<?php echo $__env->make('Back_end.layout.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Xampp\htdocs\AllLaravel\HDL-LEGO_Project\resources\views/Back_end/content/managecategory.blade.php ENDPATH**/ ?>