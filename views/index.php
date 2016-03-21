<?php
/**
 * @author: Eugene
 * @date: 05.02.16
 * @time: 15:23
 */
\digitalmonk\widgets\ToggleWidget\ToggleWidgetAssets::register($this);

?>

<div class="onoffswitch">
    <?=\yii\helpers\Html::$input('checkbox', $param_one, $param_two, $options)?>
    <label class="onoffswitch-label" for="<?=$id?>">
        <span class="onoffswitch-inner"></span>
        <span class="onoffswitch-switch"></span>
    </label>
</div>
