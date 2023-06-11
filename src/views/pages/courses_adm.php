<?php $render('header') ?>

<!-- seção que lista os cursos start -->
<section id="courses" class="mt-4">
    <div class="container-lg">

        <div>
            <a href="<?= $base; ?>/cursos" class="btn btn-outline-info">Ver cursos</a>
            <a href="<?= $base; ?>/curso/cadastrar" class="btn btn-outline-info">Cadastrar novo curso</a>
        </div>

        <!-- table listando todos os cursos start -->
        <table class="table table-dark table-striped mt-3">
            <thead>
                <tr>
                    <td>Logo</td>
                    <td>Nome</td>
                    <td>qt_Modulos</td>
                    <td>qt_Aulas</td>
                    <td>Ações</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($courses as $item) : ?>
                    <tr class="align-middle">
                        <td><a href="<?= $base; ?>/curso/<?= $item['course']->getSlug(); ?>">
                                <img class="" src="<?= $base . "/media/logos/courses/" . $item['course']->getLogo(); ?>" alt="" style="height: 40px;"></a></td>
                        <td><?= $item['course']->getName(); ?></td>
                        <td><?= count($item['modules']); ?></td>
                        <td><?= count($item['lessons']); ?></td>
                        <td>
                            <a href="<?= $base; ?>/curso/<?= $item['course']->getSlug(); ?>/modulos" class="btn btn-sm btn-outline-light">Ver Módulos</a>
                            <a href="<?= $base; ?>/curso/<?= $item['course']->getSlug(); ?>/editar" class="btn btn-sm btn-outline-info">Editar Curso</a>
                            <a href="<?= $base; ?>/curso/<?= $item['course']->getId(); ?>/deletar" class="btn btn-sm btn-outline-danger" onclick="return confirm('Tem certeza que deseja excluir o curso <?= $item['course']->getName(); ?>')">Excluir Curso</a>
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