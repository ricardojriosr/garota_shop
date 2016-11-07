{if isset($leoGroup) && $leoGroup}
    {foreach from=$leoGroup item=group}
       
        <div {if isset($group.class) && $group.class}class="{$group.class}"{/if} {if isset($group.background) && $group.background}style="background-color: {$group.background}"{/if}>
        {if isset($group.title) && $group.title}
		<h4 class="title_block">{$group.title}</h4>
        {/if}
        {if isset($group.columns) && $group.columns}
            {foreach from=$group.columns item=column}
                {if $column.active}
                     <div class="widget{$column.col_value}{if isset($column.class) && $column.class} {$column.class}{/if}" {if isset($column.background) && $column.background}style="background-color: {$column.background}"{/if}>
                {if isset($column.rows)}
                    {foreach from=$column.rows item=row}
                        {if isset($row.content)}{$row.content}{/if}
                    {/foreach}
                {/if}
                    </div>
                {/if}
            {/foreach}
        {/if}
        </div>
    {/foreach}
{/if}
{if isset($LEO_ANIMATELOAD) && $LEO_ANIMATELOAD}
<script type="text/javascript">
    $(document).ready(function () {
            {foreach from=$LEO_ANIMATELOAD_CONFIG key=class item=value}
            {if $class != ''}
            $('.{$class}').waypoint(function () {
                $(this).addClass('animated {$value['skin']}').css("animation-delay", "{$value['delay']}s").css("-webkit-animation-delay", "{$value['delay']}s");
            }, {
                offset: '{$value['offset']}%'
            });
            {/if}
            {/foreach}
    });
</script>
{/if}