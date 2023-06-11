<?php $render('header') ?>

<!-- seção que lista os cursos start -->
<section id="courses" class="mt-4">
    <div class="container-lg">

        <div>
            <a href="<?= $base; ?>/cursos/adm" class="btn btn-outline-info">Voltar</a>
            <a href="<?= $base; ?>/curso/<?= $course->getSlug(); ?>/modulo/cadastrar" class="btn btn-outline-info">Cadastrar novo módulo</a>
        </div>

        <div class="mb-2 mt-2 p-2 pt-3 rounded-2 bg-dark text-white">
            <h5>
                <img style="height: 30px;" src="<?= $base; ?>/media/logos/courses/<?= $course->getLogo(); ?>" alt="">
                <?= $course->getName(); ?>
            </h5>
        </div>

        <!-- table listando todos os cursos start -->
        <table class="table table-dark table-striped mt-3">
            <thead>
                <tr>
                    <td>Nome</td>
                    <td>qt_Aulas</td>
                    <td>ordem</td>
                    <td>reordenar</td>
                    <td>Ações</td>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($modulesAndLessons as $item) : ?>
                    <tr>
                        <td><?= $item['module']->getName(); ?></td>
                        <td><?= count($item['lessons']); ?></td>
                        <td><?= $item['module']->getOrderNumber(); ?></td>
                        <td>
                            <a class="btn btn-sm btn-light" href="<?= $base; ?>/curso/<?= $course->getId(); ?>/modulo/<?= $item['module']->getId(); ?>/sobetodos">
                                <img src="<?= $base; ?>/assets/img/svg/chevron-double-up.svg" alt="">
                            </a>

                            <a class="btn btn-sm btn-light" href="<?= $base; ?>/curso/<?= $course->getId(); ?>/modulo/<?= $item['module']->getId(); ?>/sobeum">
                                <img src="<?= $base; ?>/assets/img/svg/chevron-up.svg" alt="">
                            </a>

                            <a class="btn btn-sm btn-light" href="<?= $base; ?>/curso/<?= $course->getId(); ?>/modulo/<?= $item['module']->getId(); ?>/desceum">
                                <img src="<?= $base; ?>/assets/img/svg/chevron-down.svg" alt="">
                            </a>

                            <a class="btn btn-sm btn-light" href="<?= $base; ?>/curso/<?= $course->getId(); ?>/modulo/<?= $item['module']->getId(); ?>/descetodos">
                                <img src="<?= $base; ?>/assets/img/svg/chevron-double-down.svg" alt="">
                            </a>
                        </td>
                        <td>
                            <a class="btn btn-sm btn-outline-light" href="<?= $base; ?>/curso/<?= $course->getId(); ?>/modulo/<?= $item['module']->getId(); ?>/aulas">Ver aulas</a>
                            <a class="btn btn-sm btn-outline-info" href="">Editar módulo</a>
                            <a class="btn btn-sm btn-outline-danger" href="<?= $base; ?>/curso/<?= $course->getId(); ?>/modulo/<?= $item['module']->getId(); ?>/deletar" onclick='return confirm("Você deseja realmente deletar o modulo: <?= $item["module"]->getName() ?>")'>Excluir módulo</a>
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