<?php $render('header') ?>

<!-- section das aulas start -->
<section id="classes" class="mt-3">
    <div class="container-lg">
        <div id="video-area" class="mx-auto">
            <div class="d-flex justify-content-between text-white mb-1 mt-1 ps-1 row row-cols-sm-2">
                <div class="d-flex align-items-center">
                    <a href="<?= $base; ?>/curso/<?= $course->getSlug(); ?>"><img src="<?= $base; ?>/media/logos/courses/<?= $course->getLogo(); ?>" alt="curso-logo" style="height: 40px;"></a>
                    <div>
                        <h5 class="ms-2"><?= $course->getName(); ?></h5>
                        <div style="height: 5px; min-width: 200px;" class="progress ms-2" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar bg-info" style="width: 0%;">
                            </div>
                        </div>
                        <span class="ms-2 text-info">0%</span>
                    </div>
                </div>
                <div class="d-flex align-items-center col-auto justify-content-end">
                    <p class="m-0 fs-6"><?= $lesson->getName(); ?></p>
                    <img class="ms-3" src="<?= $base; ?>/assets/img/svg/code-slash-color.svg" style="height: 30px;" alt="curso-aula">
                </div>
            </div>
            <div id="video-frame">
                <iframe class="meu-iframe" src="<?= $lesson->getUrl(); ?>" title="Video player" controls="0" frameborder="0" style="z-index: 0;" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="">
                </iframe>
                <a href="index.html" class="smcap" title="Community Coders" style="background-image: url('<?= $base; ?>/assets/img/png/logo-sm3.png');">
                </a>
            </div>
        </div>
    </div>
</section>
<!-- section das aulas end -->

<!-- section com os botões de navegação e assistido start -->
<section id="" class="">
    <div class="container-lg">
        <!-- botões -->
        <div class="p-2 rounded-3 mt-4 d-flex justify-content-evenly">
            <a href="<?= $base; ?>/curso/1/aula/1" class="btn btn-secondary d-flex align-items-center justify-content-center gap-3">
                <img class="sm-mobile" src="<?= $base; ?>/assets/img/svg/double-carret-left.svg" alt="Aula anterior" style="height: 25px;">
                <span class="fs-5 hide-mobile"><strong>Aula anterior</strong></span>
            </a>
            <div class="">
                <a href=""><img src="<?= $base; ?>/assets/img/svg/eye-fill-green.svg" alt="Aula seguinte" style="height: 35px;"></a>
            </div>
            <a href="<?= $base; ?>/curso/1/aula/1" class="btn btn-secondary d-flex align-items-center justify-content-center gap-3">
                <span class="fs-5 hide-mobile"><strong>Aula seguinte</strong></span>
                <img class="sm-mobile" src="<?= $base; ?>/assets/img/svg/double-carret-right.svg" alt="Aula seguinte" style="height: 25px;">
            </a>
        </div>
    </div>
</section>
<!-- section com os botões de navegação e assistido end -->

<!-- section com o conteúdo em abas start -->
<section id="NaoSei" class="mt-4">
    <div class="container-lg">
        <ul class="nav nav-tabs bg-dark b-3 rounded-top-3 border-dark" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-classes-tab" data-bs-toggle="pill" data-bs-target="#pills-classes" type="button" role="tab" aria-controls="pills-classes" aria-selected="true">Aulas</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-description-tab" data-bs-toggle="pill" data-bs-target="#pills-description" type="button" role="tab" aria-controls="pills-description" aria-selected="false">Descrição</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-resourses-tab" data-bs-toggle="pill" data-bs-target="#pills-resourses" type="button" role="tab" aria-controls="pills-resourses" aria-selected="false">Recursos</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-notes-tab" data-bs-toggle="pill" data-bs-target="#pills-notes" type="button" role="tab" aria-controls="pills-notes" aria-selected="false" disabled>
                    Anotações
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" disabled>Disabled</button>
            </li>
        </ul>
        <div class="tab-content pb-5 rounded-bottom-3" id="pills-tabContent" style="background-color: var(--bs-gray-800);">
            <div class="tab-pane fade show active" id="pills-classes" role="tabpanel" aria-labelledby="pills-classes-tab" tabindex="0">

                <!-- accordion start -->

                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <?php foreach ($lessons as $key => $lessonItem) : ?>

                        <?php $module = $lessonItem['module']; ?>
                        <?php $moduleLessons = $lessonItem['lessons']; ?>

                        <!-- accordion item start -->
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-<?= $key; ?>" aria-expanded="false" aria-controls="flush-collapse-<?= $key; ?>">
                                    <span class="me-2">[01/03]</span>
                                    <strong><?= $module->getName(); ?></strong>
                                </button>
                            </h2>
                            <?php foreach ($moduleLessons as $moduleLesson) : ?>
                                <div id="flush-collapse-<?= $key; ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample<?= $key; ?>">
                                    <div class="accordion-body">
                                        <img src="<?= $base; ?>/assets/img/svg/eye-fill-green.svg" class="me-2" alt="assistido" style="height: 25px; cursor: pointer">
                                        <a href="<?= $base; ?>/curso/<?= $course->getSlug(); ?>/aula/<?= $moduleLesson->getSlug(); ?>" class="text-decoration-none text-reset">
                                            <?= $moduleLesson->getName() ?>
                                        </a>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                        <!-- accordion item end -->
                    <?php endforeach; ?>
                </div>
                <!-- accordion end -->
            </div>
            <div class="tab-pane fade" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab" tabindex="0">
                Conteúdo da descrição
            </div>
            <div class="tab-pane fade" id="pills-resourses" role="tabpanel" aria-labelledby="pills-resourses-tab" tabindex="0">
                Conteúdo dos recursos
            </div>
            <div class="tab-pane fade" id="pills-notes" role="tabpanel" aria-labelledby="pills-notes-tab" tabindex="0">
                Conteúdo das anotações
            </div>
            <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">
                Desabilitado
            </div>
        </div>
    </div>
</section>
<!-- section com o conteúdo em abas end -->

<?php $render('footer') ?>