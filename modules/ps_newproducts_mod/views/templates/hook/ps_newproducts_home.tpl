{*
* 2007-2016 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{if isset($products) && $products}
    <div class='blocknewproducts' id='blocknewproducts' >
        <div class="products_tab">
            {foreach from=$products item="product"}
                {if isset($tc_dev_mode) && $tc_dev_mode && isset($tc_layout_products) && $tc_layout_products && in_array($product.id_product,$tc_layout_products) || !isset($tc_layout_products) || isset($tc_layout_products) && !$tc_layout_products}
                    {include file="catalog/_partials/miniatures/product.tpl" products=$product  }
                {/if}
            {/foreach}
        </div>
    </div>
{else}
<ul id="blocknewproducts" class="blocknewproducts">
	<li class="alert alert-info">{l s='No new products at this time.' mod='blocknewproducts'}</li>
</ul>
{/if}
