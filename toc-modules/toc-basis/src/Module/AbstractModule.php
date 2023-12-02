<?php

namespace Toc\Basis\Module;

abstract class AbstractModule 
{
    protected $moduleService = null;

    protected $moduleController = null;

    protected $module = "";

    protected $action = "";

    protected $userId = 0;

    protected $sessionKey = "";

    protected $ajaxCall = false;

    protected $htmlResponse = "";

    public function __construct($options = array())
    {
        if ($options instanceof Config) {
            $options = $options->toArray();
        }

        // Set options
        if (is_array($options)) {
            $this->setOptions($options);
        }


    }

    public function setOptions(array $options) 
    {
        foreach ($options as $key => $value) {
            $method = "set". ucfirst($key);

            if (method_exists($this, $method)) {
                $this->$method($value);
            } else {
                throw new \InvalidArgumentException('Invalid option '. $key .' provided');
            }
        }
        return $this;
    }

    public function processAction()
    {
        $this->setHtmlResponse("No Response calculated!");
    }

    public function getModuleService() {
        return $this->moduleService;
    }

    public function setModuleService($moduleService) {
        $this->moduleService = $moduleService;
    }

    public function getModuleController() {
        return $this->moduleController;
    }

    public function setModuleController($moduleController) {
        $this->moduleController = $moduleController;
    }

    public function getModule() {
        return $this->module;
    }

    public function setModule($module) {
        $this->module = $module;
    }

    public function getAction() {
        return $this->action;
    }

    public function setAction($action) {
        $this->action = $action;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
    }

    public function getSessionKey() {
        return $this->sessionKey;
    }

    public function setSessionKey($sessionKey) {
        $this->sessionKey = $sessionKey;
    }

    public function isAjaxCall() {
        return $this->ajaxCall;
    }

    public function setAjaxCall($isAjaxCall) {
        $this->ajaxCall = $isAjaxCall;
    }

    public function getHtmlResponse() {
        return $this->htmlResponse;
    }

    public function setHtmlResponse($htmlResponse) {
        $this->htmlResponse = $htmlResponse;
    }
}