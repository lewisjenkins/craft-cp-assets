<?php

namespace lewisjenkins\craftcpassets\models;

use lewisjenkins\craftcpassets\CraftCpAssets;

use Craft;
use craft\base\Model;

class Settings extends Model
{
    public $cssFile = '';
    
    public $jsFile = '';
/*
    public function rules()
    {
        return [
            ['someAttribute', 'string'],
            ['someAttribute', 'default', 'value' => 'Some Default'],
        ];
    }
*/
}
