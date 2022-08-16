<?php

namespace kekaadrenalin\swagger;

/**
 * Swagger module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'kekaadrenalin\swagger\controllers';

    /**
     * @inheritdoc
     */
    public $defaultRoute = 'swagger/swagger-ui';
}