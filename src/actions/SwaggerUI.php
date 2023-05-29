<?php declare(strict_types = 1);

namespace kekaadrenalin\swagger\actions;

use yii\base\Action;
use yii\web\Response;

class SwaggerUI extends Action
{
    public function run(): string
    {
        $this->controller->response->format = Response::FORMAT_HTML;
        $this->controller->layout = false;

        return $this->controller->render('swagger-ui.php');
    }
}
