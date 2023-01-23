<style>

  .col{
      width:80%;
      padding: 20px;
      background-color: white;
      border: 1px solid #F4F8EC;
      border-radius: 15px;
      margin-left: auto;
      margin-right: auto;
      margin-top: 30px;
      color: grey;
      z-index: 1;
  }

    p{
      font-size: large;
      font-weight: bold;
      color: blue;
      text-decoration: underline;
    }

    input[type=text]{
      border-radius: 15px;
      border-color: grey;
      width: 100%;
      margin-top: 5px;
    }

    #create{
      width: 15%;
      background-color: #E7C14D;
      color: white;
      padding: 10px;
      border-radius: 15px;
    }

    .button{

    width: 200px;
    background-color: #535151b8;
    color: white;
    padding: 10px;
    border-radius: 15px;
    text-align: center;
    margin-left: 990px;
    margin-top: -45px;
    }

    #patient-name {

    border-radius: 15px;
    border-color: grey;
    width: 100%;
    margin-top: 5px;
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
            <?php echo e(__('Prescription')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <form action="addtoprescription" method="post" role="form" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>



        <div class="col">

        <p>Information</p> <br>

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


            <div class="form-group">
            <label for="patient"><?php echo e(__('Prescription')); ?></label> <br>
              <input type="text" name="prescription_drug" class="form-control" id="prescription_drug" placeholder="Prescription of Drug" required>
            </div>

            <br><br>

          <button type="submit" id="create" class="btn btn-primary">Submit</button>

          </div>
        </div>
    </form>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\healthweb\resources\views/prescription/add.blade.php ENDPATH**/ ?>