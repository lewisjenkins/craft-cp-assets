<?php

namespace lewisjenkins\craftcpassets\assetbundles\CraftCpAssets;

use lewisjenkins\craftcpassets\CraftCpAssets;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

class CraftCpAssetsAsset extends AssetBundle
{
    public function init()
    {
        $this->depends = [
            CpAsset::class,
        ];
        
        $view = Craft::$app->getView();
        
        $settings = CraftCpAssets::$plugin->getSettings();
        
        $cssFile = trim(Craft::parseEnv($settings['cssFile']));

        if ($cssFile) :

            $this->css = [$cssFile . '?' . time()];

        endif;
        
        $jsFile = trim(Craft::parseEnv($settings['jsFile']));

        if ($jsFile) :

            $this->js = [$jsFile . '?' . time()];

        endif;

        parent::init();
    }
}
