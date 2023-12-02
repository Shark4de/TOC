<?php

namespace Toc\CleanModule;
use Toc\Basis\Module\AbstractModule;

class Module extends AbstractModule
{
    const MODULE_NAME = "clean_module";

    const MODULE_DESCRIPTION = "An Template Module";

    const ACTION_SHOW_EXAMPLE = "showExampleAction";

    protected $moduleService = new CleanModuleService();

    protected $moduleController = new CleanModuleControllerFactory();

    protected $module = "clean_module";

    public function __construct($options = array())
    {
        parent::__construct($options);
    }

    public function processAction()
    {
        $action = $this->getAction();

        $cleanModuleController = $this->getModuleController();

        switch ($action) {
            case self::ACTION_SHOW_EXAMPLE:

                $viewModel = $cleanModuleController->showAction();
                break;
            default:
                throw new \Exception('No Action with this name.');
        }
    }
}

