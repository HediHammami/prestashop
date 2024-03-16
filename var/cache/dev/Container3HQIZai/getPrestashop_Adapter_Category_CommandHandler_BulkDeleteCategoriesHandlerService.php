<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.category.command_handler.bulk_delete_categories_handler' shared service.

return $this->services['prestashop.adapter.category.command_handler.bulk_delete_categories_handler'] = new \PrestaShop\PrestaShop\Adapter\Category\CommandHandler\BulkDeleteCategoriesHandler(($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getContext()->shop->id_category, ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductRepository'] ?? $this->getProductRepositoryService()), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Category\\Repository\\CategoryRepository'] ?? $this->getCategoryRepositoryService()));
