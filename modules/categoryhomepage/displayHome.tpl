<style>
    .categories-section {
        text-align: center;
    }

    .categories-list {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    .category-item {
        margin: 10px;
        text-align: center;
    }

    .category-item img {
        max-width: 100px; 
        height: auto;
    }
</style>

{if isset($categories) && $categories}
<div class="categories-section">
<h2>Our Categories</h2>
    <div class="categories-list">
        {foreach $categories as $category}
            <div class="category-item">
                <a href="{$link->getCategoryLink($category.id_category)|escape:'html':'UTF-8'}">
                    <img src="http://localhost/prestashop/img/c/{$category.id_category}.jpg" alt="{$category.name}" />
                    <h3>{$category.name}</h3>
                </a>
            </div>
        {/foreach}
    </div>
    </div>
{/if}
