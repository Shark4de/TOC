<?php

namespace Toc\CleanModule;

class ConfigProvider
{
    function __invoke()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}