<?php
class CustomCategory extends Module
{
    public function __construct()
    {
        $this->name = 'customcategory';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'MedHedi';
        

        parent::__construct();

        $this->displayName = $this->l('Custom Category Display');
        $this->description = $this->l('Displays categories with cover images on the homepage.');
    }

    public function install()
    {
        return parent::install() &&
            $this->registerHook('displayHome');
    }

    public function hookDisplayHome($params)
    {
        $categories = Category::getCategories($this->context->language->id, true, false);

        if (!empty($categories)) {
            $this->context->smarty->assign('categories', $categories);
            return $this->display(__FILE__, 'customcategory.tpl');
        }

        return '';
    }
}
