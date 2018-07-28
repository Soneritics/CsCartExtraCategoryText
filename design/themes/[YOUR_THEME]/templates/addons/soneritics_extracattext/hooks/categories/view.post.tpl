{if fn_soneritics_extracattext_has_text($category_data.category_id)}
    <div id="soneritics_extracattext" class="ty-wysiwyg-content">
        {fn_soneritics_extracattext_get_text($category_data.category_id) nofilter}
    </div>
{/if}
