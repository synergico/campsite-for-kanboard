<?php

namespace Kanboard\Plugin\CampsiteTheme;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on("template:layout:css", array("template" => "plugins/CampsiteTheme/valera-font/stylesheet.css"));
        $this->hook->on("template:layout:css", array("template" => "plugins/CampsiteTheme/milligram-ui/milligram.css"));
        $this->hook->on("template:layout:css", array("template" => "plugins/CampsiteTheme/skin.css"));
    }

    public function getPluginName()
    {
        return 'Campsite';
    }

    public function getPluginDescription()
    {
        return t('A CSS-only theme for Kanboard, inspired by Basecamp');
    }

    public function getPluginAuthor()
    {
        return 'Author';
    }

    public function getPluginVersion()
    {
        return '0.0.1';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/synergico/campsite-for-kanboard';
    }
}
