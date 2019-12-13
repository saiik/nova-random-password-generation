<?php

namespace Naif\GeneratePassword;

use Laravel\Nova\Fields\Text;

class GenerateText extends Text
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'generate-text';

    public function length($length)
    {
        return $this->withMeta([
            'length' => $length
        ]);
    }

    public function excludeRules($rules)
    {
        return $this->withMeta([
            'exclude_rules' => $rules
        ]);
    }
}
