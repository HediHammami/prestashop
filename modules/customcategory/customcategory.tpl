{if $categories}
    <div class="home-categories">
        <h2 style="text-align: center;">{l s='Our Categories'}</h2>
        <div class="category-list" style="display: flex; justify-content: center;">
            {foreach from=$categories item=category}
                <div class="category-item" style="text-align: center; margin: 0 10px;">
                    <div class="category-image">
                        <img src="{$category.category_cover}" alt="{$category.name}">
                    </div>
                    <div class="category-name" style="margin-top: 5px; white-space: nowrap;">
                        {$category.name}
                    </div>
                </div>
            {/foreach}
        </div>
    </div>
{/if}