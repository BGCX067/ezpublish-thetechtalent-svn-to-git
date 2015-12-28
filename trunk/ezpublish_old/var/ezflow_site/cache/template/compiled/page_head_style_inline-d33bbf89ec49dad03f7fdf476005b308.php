<?php
// URI:       design/admin2/templates/page_head_style_inline.tpl
// Filename:  design/admin2/templates/page_head_style_inline.tpl
// Timestamp: 1285696608 (Tue Sep 28 10:56:48 MST 2010)
$oldSetArray_47af10e5d957577d21af39785f5b080c = isset( $setArray ) ? $setArray : array();
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

// def $dynamic_csm_disabled
if ( $tpl->hasVariable( 'dynamic_csm_disabled', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'dynamic_csm_disabled' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 64,
  ),
  1 => 
  array (
    0 => 2,
    1 => 96,
    2 => 160,
  ),
  2 => 'design/admin2/templates/page_head_style_inline.tpl',
) );
    $tpl->setVariable( 'dynamic_csm_disabled', false, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'dynamic_csm_disabled', false, $rootNamespace );
}

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'dynamic_csm_disabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['dynamic_csm_disabled'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<style type="text/css">

div#contentstructure ul#content_tree_menu ul li { padding-left: 0; }div#contentstructure ul#content_tree_menu ul ul { margin-left: 20px; }
</style>';
}
unset( $if_cond );
// if ends

$text .= '

<!--[if lt IE 8]>
<style>
.float-break /* Terminate floating elements flow in IE < 8 */
{
    height: 1%;
}
</style>
<![endif]-->
';

$setArray = $oldSetArray_47af10e5d957577d21af39785f5b080c;
$tpl->Level--;
?>
