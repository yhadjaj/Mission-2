
    <?php $__env->startSection('contenu1'); ?>

    <div class="contenu">

        <h2>Liste des visiteurs</h2>
        <h3>id des visiteurs : </h3>

        <form action=" <?php echo e(route('chemin_leVisiteur')); ?>"> <?php echo e(csrf_field()); ?>


            <div class="corpsForm"><p>

                <label for="visiteur"></label>

                <select name="visiteur" id="visiteur">

                    <?php $__currentLoopData = $lesVisiteurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $visiteur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <option selected value="<?php echo e($visiteur['id']); ?>">

                        <?php echo e($visiteur['id']); ?> <?php echo e($visiteur['nom']); ?> <?php echo e($visiteur['prenom']); ?>


                    </option>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </select>
                </p>
            </div>    

            <p class="piedForm">

                <input type="submit" value="afficher">

            </p>

            
        </form>

            
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('sommairegestionnaire', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laragon\www\gsblaravel1\resources\views/listevisiteur.blade.php ENDPATH**/ ?>