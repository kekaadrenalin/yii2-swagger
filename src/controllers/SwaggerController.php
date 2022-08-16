<?php declare(strict_types=1);

namespace kekaadrenalin\swagger\controllers;

use yii\web\Controller;
use kekaadrenalin\swagger\actions;

class SwaggerController extends Controller
{
    public function actions(): array
    {
        return [
            'json' => actions\OpenApi::class,
            'swagger-ui' => actions\SwaggerUI::class,
        ];
    }
}