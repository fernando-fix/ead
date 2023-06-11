<?php $render('header'); ?>

<section>
    <div class="container-lg ">
        <div class="mt-4 mx-0">
            <a class="btn btn-outline-info" href="<?= $base; ?>/cursos/adm">Voltar</a>
        </div>
        <div class="row mt-3 bg-secondary p-2 text-white rounded-2">
            <div class="mb-2 mt-2 p-2 rounded-2 bg-dark">
                <h3>Cadastrar módulo: </h3>
                <h5>
                    <img style="height: 30px;" src="<?= $base; ?>/media/logos/courses/<?= $course->getLogo(); ?>" alt="">
                    <?= $course->getName(); ?>
                </h5>
            </div>
            <form method="post" action="<?= $base ?>/modulo/cadastrar" class="bg-dark p-2 rounded-2">

                <input type="hidden" name="course_id" value="<?= $course->getId(); ?>">

                <label class="d-block" for="name">Nome:</label>
                <input required class="p-1 mb-3" type="text" name="name" id="name" placeholder="informe o Nome">

                <button class="d-block mt-3 btn btn-primary" role="button">Cadastrar</button>
            </form>
        </div>
    </div>
</section>

<?php $render('footer'); ?>