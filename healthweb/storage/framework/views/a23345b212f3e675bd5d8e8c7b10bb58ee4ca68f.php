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
            Staff
        </h2>
     <?php $__env->endSlot(); ?>

    <div class = "table-section">
        <div class="title">
                    <p> Staff List</p>
        </div>
        <table class="staff-table">

            <thead>
            <tr>
                <th scope="col">
                   Staff ID
                </th>
                <th scope="col">
                    Name
                </th>
                <th scope="col">
                    Email
                </th>
                <th scope="col">
                    Phone Number
                </th>
                <th scope="col">
                    Address
                </th>
                <th scope="col">
                    Role ID
                </th>
            </tr>
            </thead>
            <br>
            <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>

                    <td> ST<?php echo e($user->id); ?></td>

                    <td><?php echo e($user->name); ?></td>

                    <td><?php echo e($user->email); ?></td>

                    <td><?php echo e($user->phone_no); ?></td>

                    <td><?php echo e($user->address); ?></td>

                    <td><?php echo e($user->role_id); ?></td>

                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <br>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\healthweb\resources\views/users/index.blade.php ENDPATH**/ ?>