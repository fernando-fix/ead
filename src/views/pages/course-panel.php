<?php $render('header') ?>

<!-- section dos detalhes do curso start -->
<section id="course-detail" class="mt-5">

    <div class="container-lg">
        <div class="p-2">
            <a class="btn btn-outline-info" href="<?= $base; ?>/cursos">Voltar</a>
        </div>
        <div class="p-2 row-gap-2 row">

            <div class="col-12 col-lg-8">
                <div id="video-area" class="mx-auto">
                    <div id="video-frame">
                        <iframe class="meu-iframe" src="<?= $course->getUrl(); ?>" title="Video player" controls="0" frameborder="0" style="z-index: 0;" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="">
                        </iframe>
                        <a href="<?= $base; ?>/index.html" class="smcap" title="Community Coders" style="background-image: url('assets/img/png/logo-sm3.png');">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4 mt-2">
                <div class="d-flex align-items-center">
                    <img src="<?= $base; ?>/media/logos/courses/<?= $course->getLogo(); ?>" alt="curso-logo" style="height: 40px;">
                    <div>
                        <h5 class="ms-2 text-light"><?= $course->getName(); ?></h5>
                        <div style="height: 5px; min-width: 200px;" class="progress ms-2" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-info" style="width: 0%;">
                            </div>
                        </div>
                        <span class="ms-2 text-info">0%</span>
                    </div>
                </div>
                <div>
                    <table class="mt-3 table table-dark table-striped small align-middle">
                        <tr>
                            <th>Quantidade de aulas: </th>
                            <td>20 aulas</td>
                        </tr>
                        <tr>
                            <th>Curso atualizado em:</th>
                            <td>15/12/2022</td>
                        </tr>
                        <tr>
                            <th>Aulas:</th>
                            <td>
                                <a href="<?= $base; ?>/curso/<?= $course->getSlug(); ?>/aula/<?= $firstLesson->getSlug(); ?>" class="btn btn-sm btn-outline-info">Acesse agora</a>
                                <!-- 15/05/2023 -->
                            </td>
                        </tr>
                        <!-- <tr>
                            <th>Acesso às aulas:</th>
                            <td><a href="<?= $base; ?>/#" class="btn btn-sm btn-outline-info">Continuar</a></td>
                        </tr> -->
                        <tr>
                            <th>Ver todos os cursos:</th>
                            <td>
                                <a href="<?= $base; ?>/cursos" class="btn btn-sm btn-outline-info">Ver todos</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>

    </div>

</section>
<!-- section dos detalhes do curso end -->

<?php $render('footer') ?>