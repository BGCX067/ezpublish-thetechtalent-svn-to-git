<?php
// URI:       design:dashboard/maintenance.tpl
// Filename:  design/standard/templates/dashboard/maintenance.tpl
// Timestamp: 1285696608 (Tue Sep 28 10:56:48 MST 2010)
$oldSetArray_02f2cc040e3a0b03f27284a926a4679e = isset( $setArray ) ? $setArray : array();
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

$text .= '<h2>Software update and Maintenance</h2>

<p>';
unset( $var );
$var = 'Your installation: <span id="ez-version">%1</span>';
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'i18n',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'design/admin/dashboard/maintenance',
      2 => false,
    ),
  ),
  1 => 
  array (
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'array',
        1 => 
        array (
          0 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'fetch',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'setup',
                  2 => false,
                ),
              ),
              2 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'version',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</p>
<p>If your installation is not running eZ Publish Premium, it might not be up to date with the latest maintenance service packs. Contact eZ Systems.</p>';

$setArray = $oldSetArray_02f2cc040e3a0b03f27284a926a4679e;
$tpl->Level--;
?>
