<?php

use core\Router;

$router = new Router();

// sistema de login feito
$router->get('/', 'HomeController@index');
$router->get('/sair', 'HomeController@logout');
$router->get('/entrar', 'LoginController@userLogin');
$router->post('/entrar', 'LoginController@userLoginAction');
$router->get('/cadastrar', 'RegisterController@userCad');
$router->post('/cadastrar', 'RegisterController@userCadAction');

// Rotas adm //cursos
$router->get('/cursos/adm', 'CourseController@adm_courses');
$router->get('/curso/cadastrar', 'CourseController@courseCad');
$router->post('/curso/cadastrar', 'CourseController@courseCadAction');
$router->get('/curso/{courseid}/deletar', 'CourseController@adm_course_del');
$router->get('/curso/{courseid}/editar', 'CourseController@adm_course_edit'); //não implementado

// Rotas adm //modulos
$router->get('/curso/{slugcourse}/modulos', 'CourseController@adm_modules');
$router->get('/curso/{slugcourse}/modulo/cadastrar', 'CourseController@adm_module_cad');
$router->post('/modulo/cadastrar', 'CourseController@adm_module_cad_action');
$router->get('/curso/{idcourse}/modulo/{idmodule}/deletar', 'ModuleController@del');

// $router->get('/modulo/{id}/editar', 'CourseController@adm_module_edit');
// $router->post('/modulo/{id}/editar', 'CourseController@adm_module_edit_action');

// ações de reorganização dos modulos
$router->get('/curso/{idcourse}/modulo/{idmodule}/sobetodos', 'ModuleController@upAll');
$router->get('/curso/{idcourse}/modulo/{idmodule}/sobeum', 'ModuleController@upOne');
$router->get('/curso/{idcourse}/modulo/{idmodule}/desceum', 'ModuleController@downOne');
$router->get('/curso/{idcourse}/modulo/{idmodule}/descetodos', 'ModuleController@downAll');

// Rotas adm //aulas
// listar aulas por módulo
$router->get('/curso/{idcourse}/modulo/{idmodule}/aulas', 'LessonController@adm_lessons');
$router->get('/curso/{idcourse}/module/{idmodule}/aula/cadastrar', 'LessonController@cad');
$router->post('/aula/cadastrar', 'LessonController@cad_action');


// Rotas aluno
$router->get('/cursos', 'CourseController@courses');
$router->get('/curso/{slugcourse}/aula/{sluglesson}', 'CourseController@lesson');
$router->get('/curso/{slugcourse}', 'CourseController@course');





// rota de teste
$router->get('/mostrar', 'TestController@show');
$router->post('/post', 'TestController@index');
