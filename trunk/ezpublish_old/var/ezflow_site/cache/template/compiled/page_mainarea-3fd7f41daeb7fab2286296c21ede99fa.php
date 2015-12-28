<?php
// URI:       extension/ezwebin/design/ezwebin/templates/page_mainarea.tpl
// Filename:  extension/ezwebin/design/ezwebin/templates/page_mainarea.tpl
// Timestamp: 1295903528 (Mon Jan 24 14:12:08 MST 2011)
$oldSetArray_d3dab4789f61623cf9b8f65c26e3be76 = isset( $setArray ) ? $setArray : array();
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

$text .= '    <div id="main-position">
      <div id="main" class="float-break">
        <div class="overflow-fix">
          <!-- Main area content: START -->
          ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$var1 = compiledFetchAttribute( $var, 'content' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
          <!-- Main area content: END -->
        </div>
      </div>
    </div>';

$setArray = $oldSetArray_d3dab4789f61623cf9b8f65c26e3be76;
$tpl->Level--;
?>
