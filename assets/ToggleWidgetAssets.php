<?php
/**
 * @author: Eugene
 * @date: 05.02.16
 * @time: 15:24
 */

namespace digitalmonk\widgets\ToggleWidget\assets;
use yii\web\AssetBundle;

class ToggleWidgetAssets extends AssetBundle{

    public $sourcePath = '@digitalmonk/widgets/ToggleWidget/assets/assets';

    public $css = [
        'css/style.css'
    ];

    public $publishOptions = [
        'forceCopy' => YII_DEBUG
    ];
}