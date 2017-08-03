<?php

namespace rowe\UItoTop;

use yii\base\Widget;

class UItoTopWidget extends Widget
{

    public function init()
    {
        JQueryEasingAsset::register($this->getView());
        UItoTopAsset::register($this->getView());
    }


    public function run()
    {
        $this->getView()->registerJs("jQuery().UItoTop({ easingType: 'easeOutQuart' });");
    }
}