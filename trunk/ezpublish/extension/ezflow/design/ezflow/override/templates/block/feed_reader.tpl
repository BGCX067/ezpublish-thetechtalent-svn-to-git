{set-block scope=global variable=cache_ttl}0{/set-block}
{*cache-block expiry=300 keys=array($block.custom_attributes.source, $block.custom_attributes.limit, $block.custom_attributes.offset)*}

{def $source = $block.custom_attributes.source
     $limit = $block.custom_attributes.limit
     $offset = $block.custom_attributes.offset
     $res = feedreader( $source, $limit, $offset )}

<div class="block-type-feed-reader">
    <h2>
        <a href="{$res.links[0]}" title="{$res.title|wash()}" target="_blank">{$res.title|wash()}</a>
    </h2>

{foreach $res.items as $item}
    <div>
        <a href="{$item.links[0]}" title="{$item.title|wash()}" target="_blank">{$item.title|wash()}</a>
    </div>
{/foreach}

</div>
{*/cache-block*}