<?php

class Markitup extends CInputWidget
{
    private $editorWidgetClass = 'application.modules.markitup.extensions.markitup-widget.EMarkitupWidget';

    public $options = array();

    public function run()
    {
        $this->widget(
            $this->editorWidgetClass,
            array(
                'model'     => $this->model,
                'attribute' => $this->attribute,
                'name'      => $this->name,
                'options'   => \CMap::mergeArray($this->getOptions(), $this->options),
            )
        );
    }

    public function getOptions()
    {
        return [];
    }
}
