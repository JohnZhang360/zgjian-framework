<?php
namespace app\modules\admin\controllers;
use app\models\Config;
use Zb;

/**
 * Default controller for the `tags` module
 */
class SettingController extends BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        if(Zb::$app->request->isPost){
            Config::savePost(Zb::$app->request->post());
        }
        return $this->render("index", ["config" => Config::getAll(), "menuActive" => "setting"]);
    }
}