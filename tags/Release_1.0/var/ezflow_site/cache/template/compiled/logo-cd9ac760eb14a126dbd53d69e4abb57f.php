<?php
// URI:       extension/ezwt/design/standard/templates/parts/websitetoolbar/logo.tpl
// Filename:  extension/ezwt/design/standard/templates/parts/websitetoolbar/logo.tpl
// Timestamp: 1295903513 (Mon Jan 24 14:11:53 MST 2011)
$oldSetArray_77143f0e008c575fa36285c519eefb84 = isset( $setArray ) ? $setArray : array();
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

$text .= '<div id="ezwt-ezlogo">
<a href="/ezinfo/about" title="About" target="_blank"><img src="/extension/ezwt/design/standard/images/websitetoolbar/ezwt-logo.gif" width="50" height="16" alt="eZ" /></a>
</div>';

$setArray = $oldSetArray_77143f0e008c575fa36285c519eefb84;
$tpl->Level--;
?>
