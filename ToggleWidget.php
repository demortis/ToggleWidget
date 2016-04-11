<?php
/**
 * @author: Eugene
 * @date: 05.02.16
 * @time: 15:21
 */

namespace digitalmonk\widgets\ToggleWidget;

use yii\widgets\InputWidget;

class ToggleWidget extends InputWidget{

    /**
     * @var string
     * ID поля input
     */
    public $id = 'myonoffswitch';

    /**
     * @var string
     * Класс поля input
     */
    public $class = 'onoffswitch-checkbox';
    /**
     * @var string
     * Имя формы, в основном для использования в ActiveForm
     */
    public $name = '';

    /**
     * @var array
     * Настройки виджета
     */
    public $options;

    /**
     * @var array
     * Массив параметров для передачи во view
     */
    private $params = [];

    /**
     * @var string
     * Тип поля: Active или не Active
     */
    private $input = 'input';

    public function init(){
        parent::init();

        $this->input = $this->hasModel() ? 'activeInput' : $this->input;

        $param_one = $this->hasModel() ? $this->model : $this->name;
        $param_two = $this->hasModel() ? $this->attribute : 'checked';

        $defaultOptions = [
            'id' => $this->id,
            'class' => $this->class,
            'checked' => (boolean)$this->model->{$this->attribute}
        ];

        $this->options = array_merge($this->options, $defaultOptions);

        $this->params = [
            'id' => $this->id,
            'input' => $this->input,
            'param_one' => $param_one,  // модель или имя, зависит от наличия модели
            'param_two' => $param_two,  // атрибут или параметр checked, зависит от наличия модели
            'options' => $this->options
        ];
    }

    public function run(){
        return $this->render('index', $this->params);
    }
}