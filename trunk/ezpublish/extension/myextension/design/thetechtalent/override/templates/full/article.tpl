{* Article - Full view *}

<div class="border-box">
<div class="border-tl"><div class="border-tr"><div class="border-tc"></div></div></div>
<div class="border-ml"><div class="border-mr"><div class="border-mc float-break">

    <div class="content-view-full">
        <div class="class-article">

        <div class="attribute-header">
            <h1>{$node.data_map.title.content|wash()}</h1>
        </div>

        <div class="attribute-byline">
        {if $node.data_map.author.content.is_empty|not()}
        <p class="author">
             {attribute_view_gui attribute=$node.data_map.author}
        </p>
        {/if}
        <p class="date">
             {$node.object.published|l10n(shortdatetime)}
        </p>
        <br/>
        
        <!-- Adding share this features to the articles. -->
        <span class='st_fblike_hcount' displayText='Facebook Like'></span>
		<span class='st_facebook_hcount' displayText='Facebook'></span>
		<span class='st_twitter_hcount' displayText='Tweet'></span>
		<span class='st_linkedin_hcount' displayText='LinkedIn'></span>
		<span class='st_email_hcount' displayText='Email'></span>
		<span class='st_sharethis_hcount' displayText='ShareThis'></span>
		
        
        </div>

        {if eq( ezini( 'article', 'ImageInFullView', 'content.ini' ), 'enabled' )}
            {if $node.data_map.image.has_content}
                <div class="attribute-image">
                    {attribute_view_gui attribute=$node.data_map.image image_class=medium}

                    {if $node.data_map.caption.has_content}
                    <div class="caption" style="width: {$node.data_map.image.content.medium.width}px">
                        {attribute_view_gui attribute=$node.data_map.caption}
                    </div>
                    {/if}
                </div>
            {/if}
        {/if}

        {if eq( ezini( 'article', 'SummaryInFullView', 'content.ini' ), 'enabled' )}
            {if $node.data_map.intro.content.is_empty|not}
                <div class="attribute-short">
                    {attribute_view_gui attribute=$node.data_map.intro}
                    
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
        {/if}

		


        {if $node.data_map.body.content.is_empty|not}
            <div class="attribute-long">
            	{cache-block keys=$node.node_id expiry=0}
       		         {attribute_view_gui attribute=$node.data_map.body}
       		    {/cache-block}
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
        {/if}

        <div class="attribute-star-rating">
            {attribute_view_gui attribute=$node.data_map.star_rating}
        </div>

		{include uri='design:parts/related_content.tpl'}
        
        
        <div class="fb-comments" data-href={$node.url_alias|ezurl(,'full')} data-num-posts="20" data-width="770"></div>



        {def $tipafriend_access=fetch( 'user', 'has_access_to', hash( 'module', 'content',
                                                                      'function', 'tipafriend' ) )}
        {if and( ezmodule( 'content/tipafriend' ), $tipafriend_access )}
        <div class="attribute-tipafriend">
            <p><a href={concat( "/content/tipafriend/", $node.node_id )|ezurl} title="{'Tip a friend'|i18n( 'design/ezwebin/full/article' )}">{'Tip a friend'|i18n( 'design/ezwebin/full/article' )}</a></p>
        </div>
        {/if}

        </div>
    </div>

</div></div></div>
<div class="border-bl"><div class="border-br"><div class="border-bc"></div></div></div>
</div>