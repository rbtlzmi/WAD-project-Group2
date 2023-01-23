<style>


    p{
        font-size: large;
        font-weight: bold;
        color: blue;
        text-decoration: underline;

    }

    .title{
        margin-left: 100px;
        margin-top: 20px;
        padding-top: 40px;
    }

    table {

        width: 80%;
        margin-left: auto;
        margin-right: auto;
        margin-top:20px;
        text-align: center;
        font-size: 15px;
        background: white;
    }

    .table-section{

        width: 90%;
        margin-top: 30px;
        margin-left: auto;
        margin-right: auto;
        background: white;
        border-radius: 20px;
        padding-bottom : 30px;

    }

    th, td {
        padding: 5px;
        border-bottom: 1px solid #ddd
    }

    td{
        padding:10px;

    }

    .button{

        width: 10%;
        background-color: #E7C14D;
        color: white;
        padding: 10px;
        border-radius: 15px;
        text-align: center;
        margin-left: 140px;
        margin-top: 40px;
    }


</style>

<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

 <?php $__env->slot('header', null, []); ?> 
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        <?php echo e(__('Patient')); ?>

    </h2>
 <?php $__env->endSlot(); ?>


<div class = "table-section">
    <div class="title">
                <p> Patient List</p>
    </div>
    <table class="billing-table">

        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">ID</th>
            <th scope="col">Patient</th>
            <th scope="col">IC</th>
            <th scope="col">Email</th>
            <th scope="col">Phone No.</th>
            <th scope="col">Address</th>
            <th scope="col">Blood Type</th>
            <th scope="col">Weight</th>
            <th scope="col">Height</th>
            <th scope="col">Medical History</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <br>
        <tbody>
            <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($patient->id); ?></td>
                <td><?php echo e($patient->patient_id); ?></td>
                <td><?php echo e($patient->patient_name); ?></td>
                <td><?php echo e($patient->patient_ic); ?></td>
                <td><?php echo e($patient->patient_email); ?></td>
                <td><?php echo e($patient->patient_no); ?></td>
                <td><?php echo e($patient->patient_address); ?></td>
                <td><?php echo e($patient->blood_type); ?></td>
                <td><?php echo e($patient->patient_weight); ?></td>
                <td><?php echo e($patient->patient_height); ?></td>
                <td><?php echo e($patient->patient_mhistory); ?></td>
                <td><a href="<?php echo e(url('patient/delete/'.$patient->id)); ?>" class="btn btn-danger btn-circle btn-sm">Delete</a></td>

            </tr>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>
    <br>


</div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\healthweb\resources\views/patient/list.blade.php ENDPATH**/ ?>