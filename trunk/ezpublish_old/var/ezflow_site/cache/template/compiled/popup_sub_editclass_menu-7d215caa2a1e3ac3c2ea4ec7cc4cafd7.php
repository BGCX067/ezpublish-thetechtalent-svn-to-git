<?php
// URI:       design/admin2/templates/popupmenu/popup_sub_editclass_menu.tpl
// Filename:  design/admin2/templates/popupmenu/popup_sub_editclass_menu.tpl
// Timestamp: 1285696606 (Tue Sep 28 10:56:46 MST 2010)
$oldSetArray_d73f99872b9b9654b2602108fef8e3bc = isset( $setArray ) ? $setArray : array();
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

$text .= '<!-- Edit class submenu -->
<script type="text/javascript">
<!--
menuArray[\'EditClassSubmenu\'] = { \'depth\': 1 };
menuArray[\'EditClassSubmenu\'][\'elements\'] = {};
menuArray[\'EditClassSubmenu\'][\'elements\'][\'edit-class-languages\'] = { \'variable\': \'%languages%\' };
menuArray[\'EditClassSubmenu\'][\'elements\'][\'edit-class-languages\'][\'content\'] = \'<a href="/class/edit/%classID%/(language)/%locale%" onmouseover="ezpopmenu_mouseOver( \\\'EditClassSubmenu\\\' )">%name%<\\/a>\';
menuArray[\'EditClassSubmenu\'][\'elements\'][\'edit-class-another-language\'] = { \'url\': "/class/edit/%classID%" };
menuArray[\'EditClassSubmenu\'][\'elements\'][\'edit-class-another-language\'][\'disabled_class\'] = \'menu-item-disabled\';
// -->
</script>

<div class="popupmenu" id="EditClassSubmenu">
    <div id="edit-class-languages"></div>
    <hr />
    <!-- <a id="edit-class-another-language" href="#" onmouseover="ezpopmenu_mouseOver( \'EditClassSubmenu\' )">Another language</a> -->
    <!-- <div id="edit-class-another-language"></div> -->
    <a id="edit-class-another-language" href="#" onmouseover="ezpopmenu_mouseOver( \'EditClassSubmenu\' )">New translation</a>
</div>';

$setArray = $oldSetArray_d73f99872b9b9654b2602108fef8e3bc;
$tpl->Level--;
?>
