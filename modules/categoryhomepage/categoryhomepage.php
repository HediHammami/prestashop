<?php
if (!defined('_PS_VERSION_')) {
    exit;
}

class CategoryHomePage extends Module
{
    public function __construct()
    {
        $this->name = 'categoryhomepage';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Med Hedi';
        $this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('Category on Homepage');
        $this->description = $this->l('Display categories on the homepage.');
    }

    public function install()
    {
        return parent::install() &&
            $this->registerHook('displayHome');
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    public function hookDisplayHome($params)
    {
        $categories = Category::getCategories($this->context->language->id, true, false);

        $this->context->smarty->assign(array(
            'categories' => $categories
        ));

        return $this->display(__FILE__, 'displayHome.tpl');
    }
}
