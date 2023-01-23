<style>

    .col-left{
        /* margin: 0 auto; */
        width:40%;
        padding: 20px;
        background-color: white;
        border: 1px solid #F4F8EC;
        border-radius: 15px;
        margin-left: 30px;
        margin-top: 30px;
        color: grey;
        z-index: 1;
    }

    .col-right{
        margin-top: -430px;
        margin-left: 660px;
        margin-right: 30px;
        z-index: -1;
        padding: 20px;
        background-color: white;
        border: 1px solid #F4F8EC;
        border-radius: 15px;

    }

    p{
        font-size: large;
        font-weight: bold;
        color: blue;
        text-decoration: underline;
    }

    .form-control{
        border-radius: 15px;
        border-color: grey;
        width: 100%

    }

    #create{

        width: 28%;
        background-color: #E7C14D;
        color: white;
        padding: 10px;
        border-radius: 15px;

    }

    input[type=text]{
        border-radius: 15px;
        border-color: grey;
        width: 100%;
    }



    #title{
        width: 70%;
    }

    #amount{
        width: 25%;
        margin-top: -42px;
        margin-left: 590px;
    }

    #add{
        width: 150px;
        background-color: #3EDF96;
        color: white;
        padding: 10px;
        border-radius: 15px;
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
            <?php echo e(__('Billing')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <form method="post" action="addtobill">
        <div class = "col-left">
            <p>Information</p> <br>

            <?php echo e(csrf_field()); ?>


            <div>
                <label for="patient"><?php echo e(__('Patient')); ?></label> <br>
                <select class="form-control" id="patient-name" name="patient_name" >
                <option><?php echo e(__('Select Patient')); ?></option>
                            <?php $__currentLoopData = $patients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patient): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($patient->patient_name); ?>"><?php echo e($patient->patient_name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <br>

            <label for="PaymentMethod"><?php echo e(__('Payment Method')); ?></label><br>
                                            <select class="form-control" name="payment_method" id="PaymentMethod">
                                                <option value="Cash"><?php echo e(__('Cash')); ?></option>
                                                <option value="Online Transfer"><?php echo e(__('Online Transfer')); ?></option>
                                            </select>
            <br><br>

            <label for="PaymentStatus"><?php echo e(__('Payment Status')); ?></label><br>
                                            <select class="form-control" name="payment_status">
                                                <option value="Paid"><?php echo e(__('Paid')); ?></option>
                                                <option value="Unpaid"><?php echo e(__('Unpaid')); ?></option>
                                            </select>
            <br><br><br>

            <div class = "button">
            <button type = "submit" value = "info" id = "create"> Create Invoice </button>
            </div>

        </div>

        <div class= "col-right">

            <p>Invoice Details</p> <br>

            <div>
                <input type="text" id="title" name="invoice_title" placeholder="<?php echo e(__('Invoice Title')); ?>">
            </div>

            <div>
                <input type="text" id="amount" name="invoice_amount" placeholder="<?php echo e(__('Amount')); ?>">
            </div>

            <br><br>

            <!-- <div class = "button">
            <button type = "submit" value = "info" id = "add"> Add More </button>
            </div> -->

        </div>
        <form>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\healthweb\resources\views/billing/view.blade.php ENDPATH**/ ?>