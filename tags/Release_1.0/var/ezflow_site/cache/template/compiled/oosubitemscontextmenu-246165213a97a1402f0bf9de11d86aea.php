<?php
// URI:       design:node/oosubitemscontextmenu.tpl
// Filename:  extension/ezodf/design/standard/templates/node/oosubitemscontextmenu.tpl
// Timestamp: 1285696618 (Tue Sep 28 10:56:58 MST 2010)
$oldSetArray_bd2c8ea4cc6f207685465d0d5657900f = isset( $setArray ) ? $setArray : array();
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

$text .= '<script language="JavaScript1.2" type="text/javascript">
menuArray[\'OpenOffice\'] = new Array();
menuArray[\'OpenOffice\'][\'depth\'] = 1; // this is a first level submenu of ContextMenu
menuArray[\'OpenOffice\'][\'elements\'] = new Array();
</script>

 <hr/>
    <a id="child-menu-openoffice" class="more" href="#" onmouseover="ezpopmenu_showSubLevel( event, \'OpenOffice\', \'child-menu-openoffice\' ); return false;">OpenOffice.org</a>


';

$setArray = $oldSetArray_bd2c8ea4cc6f207685465d0d5657900f;
$tpl->Level--;
?>
