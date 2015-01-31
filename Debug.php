<?php

namespace helpers;

use DebugBar\StandardDebugBar;

class Debug {

    /**
     * Instance of DebugBar\StandardDebugBar
     * @var \DebugBar\StandardDebugBar object
     */
    private $debugBar;

    /**
     * Instance of DebugBar\JavascriptRenderer
     * @var \DebugBar\JavascriptRenderer
     */
    private $debugBarRenderer;

    public function __construct() {
        $this->debugBar = new StandardDebugBar();
        $this->debugBarRenderer = $this->debugBar->getJavascriptRenderer();

        $this->debugBar["messages"]->addMessage("hello world!");
    }

    public function renderHead() {
        if(ENVIRONMENT === 'development') {
            return $this->debugBarRenderer->renderHead();
        } else {
            return '';
        }
    }

    public function render() {
        if(ENVIRONMENT === 'development') {
            return $this->debugBarRenderer->render();
        } else {
            return '';
        }
    }

}
