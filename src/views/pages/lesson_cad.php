<?php $render('header'); ?>

<section>
    <div class="container-lg ">
        <div class="mt-4 mx-0">
            <a class="btn btn-outline-info" href="<?= $base; ?>/curso/<?= $course->getId(); ?>/modulo/<?= $module->getId(); ?>/aulas">Voltar</a>
        </div>
        <div class="row mt-3 bg-secondary p-2 text-white rounded-2">
            <div class="mb-2 mt-2 p-2 rounded-2 bg-dark">
                <h3>Cadastrar Aula: </h3>
                <h5>
                    <img style="height: 30px;" src="<?= $base; ?>/media/logos/courses/<?= $course->getLogo(); ?>" alt="">
                    <?= $course->getName(); ?>
                </h5>
                <h6 class="ps-2">
                    Módulo: <?= $module->getName(); ?>
                </h6>
            </div>
            <form method="post" action="<?= $base ?>/aula/cadastrar" class="bg-dark p-2 rounded-2">

                <input type="hidden" name="course_id" value="<?= $course->getId(); ?>">
                <input type="hidden" name="module_id" value="<?= $module->getId(); ?>">

                <label class="d-block" for="name">Nome:</label>
                <input required class="p-1 mb-3" type="text" name="name" id="name" placeholder="informe o Nome">

                <label class="d-block" for="url">Url:</label>
                <input required class="p-1 mb-3" type="text" name="url" id="url" placeholder="informe a url">

                <button class="d-block mt-3 btn btn-primary" role="button">Cadastrar</button>
            </form>
        </div>
    </div>
</section>

<?php $render('footer'); ?>