<?php

use App\Controllers\BrandController;
use App\Controllers\PhoneController;
use Phroute\Phroute\RouteCollector;

function applyRoute($url){
    $router = new RouteCollector();

    $router->get('/', [BrandController::class, 'trangChu']);

    $router->get('brands', [BrandController::class, 'index']);
    $router->get('brands/xoa/{id}', [BrandController::class, 'xoa']);
    $router->get('brands/tao', [BrandController::class, 'taoForm']);
    $router->post('brands/tao', [BrandController::class, 'luuTao']);
    $router->get('brands/sua/{id}', [BrandController::class, 'suaForm']);
    $router->post('brands/sua/{id}', [BrandController::class, 'luuSua']);

    $router->get('phone', [PhoneController::class, 'index']);
    $router->get('phone/xoa/{id}', [PhoneController::class, 'xoa']);
    $router->get('phone/tao', [PhoneController::class, 'taoForm']);
    $router->post('phone/tao', [PhoneController::class, 'luuTao']);
    $router->get('phone/sua/{id}', [PhoneController::class, 'suaForm']);
    $router->post('phone/sua/{id}', [PhoneController::class, 'luuSua']);

    

    // // đăng nhập 
    // // đăng xuất => LoginController và hàm logout
    // $router->any('logout', [LoginController::class, 'logout']);
    // // danh sách môn học - mon-hoc
    // // SubjectController => index
    // $router->get('mon-hoc', [SubjectController::class, 'index']);
    // // {id} vị trí tham số đường dẫn
    // $router->get('mon-hoc/xoa/{id}', [SubjectController::class, 'xoa']);

    // // các bài quiz của môn học
    // $router->get('bai-quiz', [QuizController::class, 'index']);
    // $router->get('bai-quiz/tao-moi', [QuizController::class, 'addForm']);
    // $router->post('bai-quiz/tao-moi', [QuizController::class, 'saveAdd']);
    // $router->get('bai-quiz/cap-nhat/{id}', [QuizController::class, 'editForm']);
    // $router->post('bai-quiz/cap-nhat/{id}', [QuizController::class, 'saveEdit']);
    // $router->get('bai-quiz/xoa/{id}', [QuizController::class, 'remove']);
    // các câu hỏi của 1 bài quiz
    // $router->get('cau-hoi', [QuestionController::class, 'index']);



    $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
    // Print out the value returned from the dispatched function
    echo $response;
}


?>