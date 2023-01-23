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
        margin-left: 570px;
        margin-top: -445px;
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

    #patient-name {

        width: 40%;
    }

    #doctor-name {

    width: 40%;
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
            <?php echo e(__('Appointment')); ?>

        </h2>
     <?php $__env->endSlot(); ?>
<div class = "form">
    <form method="post" action="addtoappointment">
        <div class = "col-left">
            <p>New Appointment</p> <br>

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

        

        <div>
            <label for="doctor"><?php echo e(__('Doctor')); ?></label> <br>
            <select class="form-control" id="doctor-name" name="doctor_name" >
            <option><?php echo e(__('Select Doctor')); ?></option>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($user->name); ?>"><?php echo e($user->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

            <br>

            <label for="Date"><?php echo e(__('Date')); ?></label><br>
                <div id="day">
                    <p>Day</p>

                    <input type="number"  name="appointment_day" placeholder="<?php echo e(__('Day')); ?>">
                </div>
                <div id="month">
                    <p>Month</p>

                    <input type="number"  name="appointment_month" placeholder="<?php echo e(__('Month')); ?>">
                </div>
                <div id="year">
                    <p>Year</p>

                    <input type="number"  name="appointment_year" placeholder="<?php echo e(__('Year')); ?>">
                </div>

                <br><br>

                <div class = "button">
                <button type = "submit" value = "info" id = "create"> Create Appointment </button>
                </div>
        </div>

            <br><br>
            <div class = "col-right">
                <label for="SelectTime"><?php echo e(__('Select Time')); ?></label><br>
                                            <select class="form-control" name="appointment_time">
                                                <option value="8:00 a.m - 10:00 a.m"><?php echo e(__('8:00 a.m - 10:00 a.m')); ?></option>
                                                <option value="10:00 a.m - 12:00 a.m"><?php echo e(__('10:00 a.m - 12:00 a.m')); ?></option>
                                                <option value="2:00 p.m - 4:00 p.m"><?php echo e(__('2:00 p.m - 4:00 p.m')); ?></option>
                                                <option value="4:00 p.m - 6:00 p.m"><?php echo e(__('4:00 p.m - 6:00 p.m')); ?></option>
                                                <option value="7:00 p.m - 9:00 p.m"><?php echo e(__('7:00 p.m - 9:00 p.m')); ?></option>
                                            </select>
            </div>


     <form>
</div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>


<?php /**PATH C:\xampp\htdocs\healthweb\resources\views/appointment/create.blade.php ENDPATH**/ ?>