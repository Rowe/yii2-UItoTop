<?php
namespace rowe\uitotop;

use yii\web\AssetBundle;

class UItoTopAsset extends AssetBundle
{
    public $sourcePath = "@bower/ui-to-top";
    public $depends = ['yii\web\JqueryAsset'];
    public function init()
    {
        if (YII_DEBUG) {
            $this->js[] = 'js/jquery.ui.totop.js';
            $this->css[] = 'css/ui.totop.css';
        } else {
            $this->js[] = 'js/jquery.ui.totop.min.js';
            $this->css[] = 'css/ui.totop.css';
        }
    }
}