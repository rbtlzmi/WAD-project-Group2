<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'jetstream::components.application-logo','data' => ['class' => 'block h-12 w-auto']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-application-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'block h-12 w-auto']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    </div>

    <div class="mt-8 text-2xl">
        Welcome to the Healthweb System!
    </div>

    <div class="mt-6 text-gray-500">
        HealthWeb System is a computer program used by healthcare providers to efficiently store and access patient information, schedule appointments, manage clinical data,
        and support the overall management of patients. It can be used by a single practitioner, or by an entire healthcare facility, and can help to streamline the process
        of caring for patients by providing easy access to patient information, allowing for appointment scheduling, and providing tools to manage and analyze patient data.
        Additionally, it can also include features such as electronic prescribing, lab ordering and results, and patient portals for self-service. HWS can improve patient care,
        and reduce administrative work for healthcare providers.
    </div>
</div>


<?php /**PATH C:\xampp\htdocs\healthweb\resources\views/vendor/jetstream/components/welcome.blade.php ENDPATH**/ ?>