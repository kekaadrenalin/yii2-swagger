<?php declare(strict_types=1);

namespace kekaadrenalin\swagger\actions;

use Exception;
use yii\base\Action;
use Yii;
use function OpenApi\scan;

class OpenApi extends Action
{
    public function run(): void
    {
        $docDirectories = [];
        $params = Yii::$app->params['swagger'] ?? [];

        if (isset($params['scan_dir']) && is_array($params['scan_dir'])) {
            foreach ($params['scan_dir'] as $item) {
                $docDirectories[] = Yii::getAlias('@' . $item);
            }
        } else {
            $docDirectories[] = __DIR__;
        }

        try {
            $openapi = scan($docDirectories);
            header('Access-Control-Allow-Origin: *');
            header('Content-Type: application/json');
            echo $openapi->toJson();
            exit;
        } catch (Exception $exception) {
            echo json_encode([
                $exception->getFile(),
                $exception->getMessage(),
                $exception->getLine(),
            ]);
        }
    }
}