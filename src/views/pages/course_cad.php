<?php $render('header'); ?>

<section>
    <div class="container-lg ">
        <div class="mt-4 mx-0">
            <a class="btn btn-outline-info" href="<?= $base; ?>/cursos/adm">Voltar</a>
        </div>
        <div class="row mt-3 bg-secondary p-2 text-white rounded-2">
            <div class="mb-2 mt-2 p-2 rounded-2 bg-dark">
                <h3>Cadastrar Curso</h3>
            </div>
            <form method="post" action="<?= $base ?>/curso/cadastrar" enctype="multipart/form-data" class="bg-dark p-2 rounded-2">

                <label class="d-block" for="name">Nome:</label>
                <input required class="p-1 mb-3" type="text" name="name" id="name" placeholder="informe o Nome">

                <label class="d-block" for="nickname">Apelido:</label>
                <input required class="p-1 mb-3" type="text" name="nickname" id="nickname" placeholder="informe o Apelido">

                <label class="d-block" for="url">Url:</label>
                <input required class="p-1 mb-3" type="text" name="url" id="url" placeholder="informe a url">

                <label class="d-block" for="logo">Logo:</label>
                <input required class="mb-3" type="file" id="logo" name="logo">

                <button class="d-block mt-3 btn btn-primary" role="button">Cadastrar</button>
            </form>
        </div>
    </div>
</section>

<?php $render('footer'); ?>