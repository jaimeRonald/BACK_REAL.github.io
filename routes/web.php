<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/obtener', function () {
//     return "hola ronald";
// });
Route::get('/obtener_experiencias', function () {
    $dataFromBackend = [
        ['empresa'=>'Apuesta Total ','title' => 'Backend web developer', 'text' => 'Análisis y Desarrollo en módulos del sistema de Gestión en el cual se trabajo en mejorar, dar mantenimiento e implementar automatizaciones de procesos algunos para ejecutarse con Cron Job. Reuniones con analistas y usuarios , tecnologias a usar PHP , MYSQL , JAVASCRIPT (JQUERY , VUEJS), LINUX(UBUNTU) GIT , etc'],
        ['empresa'=>'INTIMEDIA SAC','title' => 'Desarrollador web', 'text' => 'Análisis , Diseño , Desarrollo y pruebas de plataformas de gestión Web , usando Laravel , MySQL , análisis, implementan y documentación de APIs'],
        ['empresa'=>'GROUP REBATE SAC','title' => 'Desarrollador web', 'text' => 'Análisis y mantenimiento desarrollo , despliegue y prueba de distintos módulos del de sistema de gestión , ademas de mejoras que el cliente lo requeria , con PHP , framework Laravel , MySQL y otras tecnologías , aqui se trabajo en tiempo completo y luego por periodo temporal por horas'],
        ['empresa'=>'Solera','title' => 'Backend Developer', 'text' => 'TRabaje con metologia de desarrollo de software SCRUM, automatizando un proceso de una entidad financiera'],
    ];
    
    // Configuramos las cabeceras para indicar que la respuesta es JSON
    header('Content-Type: application/json');
    
    // Convertimos los datos a formato JSON y los enviamos como respuesta
    echo json_encode($dataFromBackend);
    
});
Route::get('/obtener_skills', function () {
    $dataFromBackend = [
        ['title' => 'En Backend', 'text' => 'PHP con (Laravel,CodeIgniter,Symfony y puro) Python con (Django), Java'],
        ['title' => 'Frontend', 'text' => 'Javascript con (Jquery, React), CSS  con (Bootstrap,Tailwind)'],
        ['title' => 'Bases de datos', 'text' => 'MySQL, Oracle, Sqlserver'],
        ['title' => 'Control de versiones', 'text' => 'GIT (GitHub)'],
         
    ];
    
    // Configuramos las cabeceras para indicar que la respuesta es JSON
    header('Content-Type: application/json');
    
    // Convertimos los datos a formato JSON y los enviamos como respuesta
    echo json_encode($dataFromBackend);
    
});
