{* Image - Full view *}

{def $sort_order=$node.parent.sort_array[0][1]
     $sort_column=$node.parent.sort_array[0][0]
     $sort_column_value=cond( $sort_column|eq( 'published' ), $node.object.published,
                             $sort_column|eq( 'modified' ), $node.object.modified,
                             $sort_column|eq( 'name' ), $node.object.name,
                             $sort_column|eq( 'priority' ), $node.priority,
                             $sort_column|eq( 'modified_subnode' ), $node.modified_subnode,
                             false() ) }
{if $sort_column_value|eq( false() )}
    {set $sort_column_value = $node.object.published
         $sort_column = 'published'}
{/if}

{def $previous_image = fetch( 'content', 'list', hash( 'parent_node_id', $node.parent_node_id,
                                                       'class_filter_type', 'include',
                                                       'class_filter_array', array( 'image' ),
                                                       'limit', '1',
                                                       'attribute_filter', array( 'and', array( $sort_column, $sort_order|choose( '>', '<' ), $sort_column_value ) ),
                                                       'sort_by', array( array( $sort_column, $sort_order|not ), array( 'node_id', $sort_order|not ) ) ) )
     $next_image = fetch( 'content', 'list', hash( 'parent_node_id', $node.parent_node_id,
                                                   'class_filter_type', 'include',
                                                   'class_filter_array', array( 'image' ),
                                                   'limit', '1',
                                                   'attribute_filter', array( 'and', array( $sort_column, $sort_order|choose( '<', '>' ), $sort_column_value ) ),
                                                   'sort_by', array( array( $sort_column, $sort_order ), array( 'node_id', $sort_order ) ) ) ) }

<div class="border-box">
<div class="border-tl"><div class="border-tr"><div class="border-tc"></div></div></div>
<div class="border-ml"><div class="border-mr"><div class="border-mc float-break">

<div class="content-view-full">
    <div class="class-image">

        <div class="attribute-header">
            <h1>{$node.name|wash()}</h1>
        </div>

		   <!-- Adding share this features to the articles. -->
        <span class='st_fblike_hcount' displayText='Facebook Like'></span>
		<span class='st_facebook_hcount' displayText='Facebook'></span>
		<span class='st_twitter_hcount' displayText='Tweet'></span>
		<span class='st_linkedin_hcount' displayText='LinkedIn'></span>
		<span class='st_email_hcount' displayText='Email'></span>
		<span class='st_sharethis_hcount' displayText='ShareThis'></span>
		

        {if is_unset( $versionview_mode )}
        <div class="content-navigator">
            {if $previous_image}
                <div class="content-navigator-previous">
                    <div class="content-navigator-arrow">&laquo;&nbsp;</div><a href={$previous_image[0].url_alias|ezurl} title="{$previous_image[0].name|wash}">{'Previous image'|i18n( 'design/ezwebin/full/image' )}</a>
                </div>
            {else}
                <div class="content-navigator-previous-disabled">
                    <div class="content-navigator-arrow">&laquo;&nbsp;</div>{'Previous image'|i18n( 'design/ezwebin/full/image' )}
                </div>
            {/if}

            {if $previous_image}
                <div class="content-navigator-separator">|</div>
            {else}
                <div class="content-navigator-separator-disabled">|</div>
            {/if}

            {def $parent=$node.parent}
                <div class="content-navigator-forum-link"><a href={$parent.url_alias|ezurl}>{$parent.name|wash}</a></div>

            {if $next_image}
                <div class="content-navigator-separator">|</div>
            {else}
                <div class="content-navigator-separator-disabled">|</div>
            {/if}

            {if $next_image}
                <div class="content-navigator-next">
                    <a href={$next_image[0].url_alias|ezurl} title="{$next_image[0].name|wash}">{'Next image'|i18n( 'design/ezwebin/full/image' )}</a><div class="content-navigator-arrow">&nbsp;&raquo;</div>
                </div>
            {else}
                <div class="content-navigator-next-disabled">
                    {'Next image'|i18n( 'design/ezwebin/full/image' )}<div class="content-navigator-arrow">&nbsp;&raquo;</div>
                </div>
            {/if}
            
            
            {literal}
                <script type="text/javascript"><!--
				google_ad_client = "ca-pub-0818702881980032";
				/* Link728 */
				google_ad_slot = "4112138566";
				google_ad_width = 728;
				google_ad_height = 15;
				//-->
				</script>
				<script type="text/javascript"
				src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
				</script>
			{/literal}
					
        </div>
        {/if}

		{cache-block keys=$node.node_id expiry=0}
        <div class="attribute-image">
            <p>{attribute_view_gui attribute=$node.data_map.image image_class=billboard}</p>
            
        </div>
        {/cache-block}
         <div class="attribute-caption">
            {attribute_view_gui attribute=$node.data_map.caption}
        </div>
        
        <div class="fb-comments" data-href={$node.url_alias|ezurl(,'full')} data-num-posts="20" data-width="770"></div>

		<div align="center">
		    {literal}
                <script type="text/javascript"><!--
				google_ad_client = "ca-pub-0818702881980032";
				/* Leaderboard */
				google_ad_slot = "6559077906";
				google_ad_width = 728;
				google_ad_height = 90;
				//-->
				</script>
				<script type="text/javascript"
				src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
				</script>
            {/literal}
        </div>
       
        {include uri='design:parts/image/related_content.tpl'}

	
        
    </div>
</div>

</div></div></div>
<div class="border-bl"><div class="border-br"><div class="border-bc"></div></div></div>
</div>