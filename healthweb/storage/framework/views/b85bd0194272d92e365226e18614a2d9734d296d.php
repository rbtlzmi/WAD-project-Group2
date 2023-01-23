<style>
    .form{
        margin-left: 100px;
    }
    .col-left{
        /* margin: 0 auto; */
        width:85%;
        padding: 20px;
        background-color: white;
        border: 1px solid #F4F8EC;
        border-radius: 15px;
        margin-left: 30px;
        margin-top: 30px;
        color: grey;
        z-index: 1;
        padding-left: 40px;
    }

    .col-right{
        margin-left: 555px;
        margin-top: -634px;
        color: grey;

    }

    p{
        font-size: large;
        font-weight: bold;
        color: blue;
        text-decoration: underline;
    }

    input[type=text]{
        width: 40%;
        border-radius: 15px;
        border-color: grey;
        margin-top: 5px;
    }

    input[type=number]{
        width: 100px;
        border-radius: 15px;
        border-color: grey;
        margin-top: 5px;
    }

    .form-control{
        width: 73%;
        border-radius: 15px;
        border-color: grey;
        margin-top: 5px;
    }

    #day{

    }

    #month{

        margin-top: -75px;
        margin-left: 120px;
    }

    #year{

        margin-top: -75px;
        margin-left: 240px;
    }

    #create{

        width: 25%;
        background-color: #E7C14D;
        color: white;
        padding: 10px;
        border-radius: 15px;

    }

    .text-box{
        width: 1250px;

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
<div class = "form">
    <form method="post" action="addtopatient">
        <div class = "col-left">
            <p>New Patient</p> <br>

            <?php echo e(csrf_field()); ?>

        <div>
            <label for="patient_name"><?php echo e(__('Patient Name')); ?></label> <br>

            <input type="text"  name="patient_name" placeholder="<?php echo e(__('Full Name')); ?>">
        </div>

            <br>

        <div>
            <label for="patient_ic"><?php echo e(__('IC No.')); ?></label> <br>

            <input type="text"  name="patient_ic" placeholder="<?php echo e(__('IC No.')); ?>">
        </div>

        <br>

        <div>
            <label for="patient_email"><?php echo e(__('Email')); ?></label> <br>

            <input type="text"  name="patient_email" placeholder="<?php echo e(__('Email')); ?>">
        </div>

        <br>

        <div>
            <label for="patient_no"><?php echo e(__('Phone No.')); ?></label> <br>

            <input type="text"  name="patient_no" placeholder="<?php echo e(__('Phone No.')); ?>">
        </div>

        <br>

        <div>
            <label for="patient_address"><?php echo e(__('Address')); ?></label> <br>

            <input type="text"  name="patient_address" placeholder="<?php echo e(__('Address')); ?>">
        </div>

            <br>

                <br><br>

                <div class = "button">
                <button type = "submit" value = "info" id = "create"> Add Patient </button>
                </div>
        </div>

            <br><br>
            <div class = "col-right">

                <label for="bloodtype"><?php echo e(__('Blood Type')); ?></label><br>
                                            <select class="form-control" name="blood_type" >
                                                <option value="A"><?php echo e(__('A')); ?></option>
                                                <option value="B"><?php echo e(__('B')); ?></option>
                                                <option value="O"><?php echo e(__('O')); ?></option>
                                                <option value="AB"><?php echo e(__('AB')); ?></option>
                                            </select>

                <br><br>
                <div>
                    <label for="patient_weight"><?php echo e(__('Weight')); ?></label> <br>

                    <input type="number"  name="patient_weight" placeholder="<?php echo e(__('Weight')); ?>">   Kg
                </div>
                    <br>
                <div>
                    <label for="patient_height"><?php echo e(__('Height')); ?></label> <br>

                    <input type="number"  name="patient_height" placeholder="<?php echo e(__('Height')); ?>">    cm
                </div>
                <br>
                <div class="text-box">
                    <label for="patient_mhistory"><?php echo e(__('Medical History')); ?></label> <br>

                    <input type="text"  name="patient_mhistory" placeholder="<?php echo e(__('Note')); ?>">
                </div>
            </div>

     <form>
</div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\healthweb\resources\views/patient/add.blade.php ENDPATH**/ ?>