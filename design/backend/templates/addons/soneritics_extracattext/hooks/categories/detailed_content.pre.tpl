{if $runtime.mode == 'update'}
    {include file="common/subheader.tpl" title=__("addons.soneritics_extracattext.extra_field") target="#soneritics_extracattext"}
    <div id="soneritics_extracattext" class="in collapse">
        <label class="control-label">{__("addons.soneritics_extracattext.extra_field")}:</label>
        <div class="controls">
            <textarea id="elm_soneritics_extracattext" name="soneritics_extracattext" cols="55" rows="8" class="input-large cm-wysiwyg input-textarea-long">{$soneritics_extracattext}</textarea>
        </div>
    </div>
{/if}
