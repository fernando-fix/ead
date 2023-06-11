<?php $render('header') ?>

<!-- seção que lista os cursos start -->
<section id="courses" class="mt-4">
    <div class="container-lg">

        <div>
            <a href="<?= $base; ?>/curso/<?= $course->getSlug(); ?>/modulos" class="btn btn-outline-info">Voltar</a>
            <a href="<?= $base; ?>/curso/<?= $course->getId(); ?>/module/<?= $module->getId(); ?>/aula/cadastrar" class="btn btn-outline-info">Cadastrar nova aula</a>
        </div>

        <div class="mb-2 mt-2 p-2 pt-3 rounded-2 bg-dark text-white">
            <h5>
                <img style="height: 30px;" src="<?= $base; ?>/media/logos/courses/<?= $course->getLogo(); ?>" alt="">
                <?= $course->getName(); ?>
            </h5>
            <div class="ps-2">
                <span class="fs-5">Módulo: </span> <span><?= $module->getName(); ?></span>
            </div>
        </div>

        <!-- table listando todos os cursos start -->
        <table class="table table-dark table-striped mt-3">
            <thead>
                <tr>
                    <td>Nome</td>
                    <td>ordem</td>
                    <td>reordenar</td>
                    <td>Ações</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lessons as $lesson) : ?>
                    <tr>
                        <td><?= $lesson->getName(); ?></td>
                        <td><?= $lesson->getOrderNumber(); ?></td>
                        <td>
                            <a class="btn btn-sm btn-light" href="">
                                <img src="<?= $base; ?>/assets/img/svg/chevron-double-up.svg" alt="">
                            </a>

                            <a class="btn btn-sm btn-light" href="">
                                <img src="<?= $base; ?>/assets/img/svg/chevron-up.svg" alt="">
                            </a>

                            <a class="btn btn-sm btn-light" href="">
                                <img src="<?= $base; ?>/assets/img/svg/chevron-down.svg" alt="">
                            </a>

                            <a class="btn btn-sm btn-light" href="">
                                <img src="<?= $base; ?>/assets/img/svg/chevron-double-down.svg" alt="">
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-sm btn-outline-info" href="">Editar aula</a>
                            <a class="btn btn-sm btn-outline-danger" href="" onclick='return confirm("Você deseja realmente deletar a aula: <?= $lesson->getName() ?>")'>Excluir aula</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <!-- table listando todos os cursos end -->
    </div>
</section>
<!-- seção que lista os cursos end -->

<?php $render('footer') ?>