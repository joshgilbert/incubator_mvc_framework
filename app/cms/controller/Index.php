<?php

class Cms_Controller_Index extends Core_Controller_Abstract {

    public function indexAction() {
        $page = Bootstrap::getView('page/page');
        $page->setTemplate('page/admin_login');
//        $page->setChildTemplate('header', 'test');
        $page->renderTemplate();

    }
}