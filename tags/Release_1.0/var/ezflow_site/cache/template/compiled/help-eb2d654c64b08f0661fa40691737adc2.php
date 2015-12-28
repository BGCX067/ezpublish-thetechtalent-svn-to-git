<?php
// URI:       extension/ezwt/design/standard/templates/parts/websitetoolbar/help.tpl
// Filename:  extension/ezwt/design/standard/templates/parts/websitetoolbar/help.tpl
// Timestamp: 1295903513 (Mon Jan 24 14:11:53 MST 2011)
$oldSetArray_32089662ff88a5684d0a3311aa0eed0b = isset( $setArray ) ? $setArray : array();
$setArray = array();
$tpl->Level++;
if ( $tpl->Level > 40 )
{
$text = $tpl->MaxLevelWarning;$tpl->Level--;
return;
}
$eZTemplateCompilerCodeDate = 1074699607;
if ( !defined( 'EZ_TEMPLATE_COMPILER_COMMON_CODE' ) )
include_once( 'var/ezflow_site/cache/template/compiled/common.php' );

$text .= '<div id="ezwt-help">
<p><a href="http://ez.no/doc" title="Documentation" target="_blank"><span class="hide">Documentation</span>?</a></p>
</div>';

$setArray = $oldSetArray_32089662ff88a5684d0a3311aa0eed0b;
$tpl->Level--;
?>
