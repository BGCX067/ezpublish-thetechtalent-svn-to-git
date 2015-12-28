<?php
// URI:       design:node/oocontextsubmenu.tpl
// Filename:  extension/ezodf/design/standard/templates/node/oocontextsubmenu.tpl
// Timestamp: 1285696618 (Tue Sep 28 10:56:58 MST 2010)
$oldSetArray_c7d853abd35f95706be706079e84b62d = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="popupmenu" id="OpenOffice">

    <a id="menu-export-ooo" href="#" onmouseover="ezpopmenu_mouseOver( \'OpenOffice\' )"
       onclick="ezpopmenu_submitForm( \'menu-form-export-ooo\' ); return false;">Export OpenOffice</a>
    <a id="menu-export-ooo" href="#" onmouseover="ezpopmenu_mouseOver( \'OpenOffice\' )"
       onclick="ezpopmenu_submitForm( \'menu-form-export-pdf\' ); return false;">Export PDF</a>
    <a id="menu-export-ooo" href="#" onmouseover="ezpopmenu_mouseOver( \'OpenOffice\' )"
       onclick="ezpopmenu_submitForm( \'menu-form-export-word\' ); return false;">Export Word</a>
    <a id="menu-import-ooo" href="#" onmouseover="ezpopmenu_mouseOver( \'OpenOffice\' )"
       onclick="ezpopmenu_submitForm( \'menu-form-import-ooo\' ); return false;">Import OpenOffice</a>
    <a id="menu-import-ooo" href="#" onmouseover="ezpopmenu_mouseOver( \'OpenOffice\' )"
       onclick="ezpopmenu_submitForm( \'menu-form-replace-ooo\' ); return false;">Replace OpenOffice</a>
</div>
';

$setArray = $oldSetArray_c7d853abd35f95706be706079e84b62d;
$tpl->Level--;
?>
