<?php
// URI:       design/admin2/templates/popupmenu/popup_sub_edit_menu.tpl
// Filename:  design/admin2/templates/popupmenu/popup_sub_edit_menu.tpl
// Timestamp: 1285696610 (Tue Sep 28 10:56:50 MST 2010)
$oldSetArray_161c11ff9cde8b6d9325c1917720bd4f = isset( $setArray ) ? $setArray : array();
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

$text .= '<!-- Edit menu -->
<script type="text/javascript">
<!--
menuArray[\'EditSubmenu\'] = { \'depth\': 1 };
menuArray[\'EditSubmenu\'][\'elements\'] = {};
menuArray[\'EditSubmenu\'][\'elements\'][\'edit-languages\'] = { \'variable\': \'%languages%\' };
menuArray[\'EditSubmenu\'][\'elements\'][\'edit-languages\'][\'content\'] = \'<a href="/content/edit/%objectID%/f/%locale%" onmouseover="ezpopmenu_mouseOver( \\\'EditSubmenu\\\' )">%name%<\\/a>\';
menuArray[\'EditSubmenu\'][\'elements\'][\'edit-languages-another\'] = { \'url\': "/content/edit/%objectID%/a" };
// -->
</script>

<div class="popupmenu" id="EditSubmenu">
    <div id="edit-languages"></div>
    <hr />
    <a id="edit-languages-another" href="#" onmouseover="ezpopmenu_mouseOver( \'EditSubmenu\' )">New translation</a>
</div>';

$setArray = $oldSetArray_161c11ff9cde8b6d9325c1917720bd4f;
$tpl->Level--;
?>
