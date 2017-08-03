<?php

namespace rowe\UItoTop;


use yii\web\AssetBundle;

class JQueryEasingAsset extends AssetBundle
{
    public $sourcePath = "@bower/jquery.easing";
    public $depends = ['yii\web\JqueryAsset'];

    public function init()
    {
        if (YII_DEBUG) {
            $this->js[] = 'js/jquery.easing.js';
        } else {
            $this->js[] = 'js/jquery.easing.min.js';
        }
    }
}