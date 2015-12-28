<?php
// URI:       design/admin2/templates/page_copyright.tpl
// Filename:  design/admin2/templates/page_copyright.tpl
// Timestamp: 1285696604 (Tue Sep 28 10:56:44 MST 2010)
$oldSetArray_c6d8cb34c682d13b3ac4774bd7ddaae1 = isset( $setArray ) ? $setArray : array();
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

$text .= '
<a href="http://ez.no/ezpublish" title="eZ Publish ';
unset( $var );
$var = call_user_func_array( array( new eZSetupFunctionCollection(), 'fetchFullVersionString' ),
  array(  ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '">eZ Publish</a> Copyright &copy; 1999-2010 <a href="http://ez.no/">eZ Systems AS</a> and others. For more information see <a href="/ezinfo/about">ezinfo/about</a>.

';

$setArray = $oldSetArray_c6d8cb34c682d13b3ac4774bd7ddaae1;
$tpl->Level--;
?>
