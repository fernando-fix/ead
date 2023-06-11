<?php $render('header') ?>

<!-- seção que lista os cursos start -->
<section id="courses" class="mt-4">
    <div class="container-lg">
        <!-- lista de cursos start -->
        <div class="row row-gap-4 gx-4 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">

            <?php foreach ($courses as $course) : ?>
                <!-- curso item start -->
                <div class="col">
                    <div class="course-item mx-auto h-100 pt-5 px-3 pb-2 d-flex flex-column justify-content-between rounded-3" style="max-width: 300px; background-color: #01242A;">
                        <div>
                            <div class="d-flex justify-content-center">
                                <img src="<?= $base; ?>/media/logos/courses/<?= $course->getLogo(); ?>" alt="" class="" style="height: 120px;">
                            </div>
                            <div class="title fs-5 text-white mt-4 text-center"><?= $course->getName(); ?></div>
                        </div>
                        <div>
                            <div style="height: 5px;" class="progress mt-2" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-info" style="width: 0%;">
                                </div>
                            </div>
                            <div class="mt-3 mb-2 d-flex justify-content-between">
                                <span class="fs-5 text-white">0%</span>
                                <a href="<?= $base; ?>/curso/<?= $course->getSlug(); ?>" class="btn btn-outline-info">Acessar o curso</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- curso item end -->
            <?php endforeach; ?>

        </div>
        <!-- lista de cursos end -->
    </div>
</section>
<!-- seção que lista os cursos end -->

<?php $render('footer') ?>