{def $page_limit=100
     $col_count=2
     $sub_children=0
     $children=fetch('content','list',hash('parent_node_id', $node.node_id,
                                           'limit', $page_limit,
                                           'offset', $view_parameters.offset,
                                           'sort_by', $node.sort_array))}


<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:codesearch="http://www.google.com/codesearch/schemas/sitemap/1.0"
        xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
        xmlns:video="http://www.google.com/schemas/sitemap-video/1.1"
        >

{foreach $children as $key => $child}
	<url>
		<loc>http://www.the-tech-talent.com{$child.url_alias|ezurl("no")|remove(0,15)}</loc>
		<changefreq>weekly</changefreq>
	</url>

    {if $child.class_identifier|eq( 'event_calendar' )}
        {set $sub_children=fetch('content','list',hash( 'parent_node_id', $child.node_id, 
                                                        'limit', $page_limit,
                                                        'sort_by', array( 'attribute', false(), 'event/from_time' ) ) )}
    {else}
        {set $sub_children=fetch('content','list',hash( 'parent_node_id', $child.node_id,
                                                        'limit', $page_limit,
                                                        'sort_by', $child.sort_array))}
    {/if}
    {foreach $sub_children as $sub_child}
	    <url>
			<loc>http://www.the-tech-talent.com{$sub_child.url_alias|ezurl("no")|remove(0,15)}</loc>
			<changefreq>weekly</changefreq>
		</url>
    {/foreach}
{/foreach}

</urlset>