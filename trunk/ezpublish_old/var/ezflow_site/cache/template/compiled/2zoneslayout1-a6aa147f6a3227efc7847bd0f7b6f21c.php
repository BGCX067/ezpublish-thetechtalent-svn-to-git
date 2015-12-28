<?php
// URI:       design:zone/2zoneslayout1.tpl
// Filename:  extension/ezflow/design/ezflow/templates/zone/2zoneslayout1.tpl
// Timestamp: 1295903542 (Mon Jan 24 14:12:22 MST 2011)
$oldSetArray_f32ed2bea61c39f016a759f035fc6e89 = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="zone-layout-';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zone_layout', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zone_layout'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = mb_strtolower( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ' norightcol">

<div class="content-columns float-break">
<div class="leftcol-position">
<div class="leftcol">

<!-- ZONE CONTENT: START -->

<div class="border-box">
<div class="border-tl"><div class="border-tr"><div class="border-tc"></div></div></div>
<div class="border-ml"><div class="border-mr"><div class="border-mc">
<div class="border-content">
';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zones', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zones'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 0 );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'blocks' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = isset( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zones', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zones'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 0 );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'blocks' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond2Data = array( 'value' => $if_cond2 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond2Data, false, false );
$if_cond2 = $if_cond2Data['value'];
unset( $if_cond2Data );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else
    $if_cond = $if_cond2;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_c1f54f2270820cf1e3088db620718912_3 ) ) $fe_variable_stack_c1f54f2270820cf1e3088db620718912_3 = array();
$fe_variable_stack_c1f54f2270820cf1e3088db620718912_3[] = compact( 'fe_array_c1f54f2270820cf1e3088db620718912_3', 'fe_array_keys_c1f54f2270820cf1e3088db620718912_3', 'fe_n_items_c1f54f2270820cf1e3088db620718912_3', 'fe_n_items_processed_c1f54f2270820cf1e3088db620718912_3', 'fe_i_c1f54f2270820cf1e3088db620718912_3', 'fe_key_c1f54f2270820cf1e3088db620718912_3', 'fe_val_c1f54f2270820cf1e3088db620718912_3', 'fe_offset_c1f54f2270820cf1e3088db620718912_3', 'fe_max_c1f54f2270820cf1e3088db620718912_3', 'fe_reverse_c1f54f2270820cf1e3088db620718912_3', 'fe_first_val_c1f54f2270820cf1e3088db620718912_3', 'fe_last_val_c1f54f2270820cf1e3088db620718912_3' );
unset( $fe_array_c1f54f2270820cf1e3088db620718912_3 );
unset( $fe_array_c1f54f2270820cf1e3088db620718912_3 );
$fe_array_c1f54f2270820cf1e3088db620718912_3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zones', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zones'] : null;
$fe_array_c1f54f2270820cf1e3088db620718912_31 = compiledFetchAttribute( $fe_array_c1f54f2270820cf1e3088db620718912_3, 0 );
unset( $fe_array_c1f54f2270820cf1e3088db620718912_3 );
$fe_array_c1f54f2270820cf1e3088db620718912_3 = $fe_array_c1f54f2270820cf1e3088db620718912_31;
$fe_array_c1f54f2270820cf1e3088db620718912_31 = compiledFetchAttribute( $fe_array_c1f54f2270820cf1e3088db620718912_3, 'blocks' );
unset( $fe_array_c1f54f2270820cf1e3088db620718912_3 );
$fe_array_c1f54f2270820cf1e3088db620718912_3 = $fe_array_c1f54f2270820cf1e3088db620718912_31;
if (! isset( $fe_array_c1f54f2270820cf1e3088db620718912_3 ) ) $fe_array_c1f54f2270820cf1e3088db620718912_3 = NULL;
while ( is_object( $fe_array_c1f54f2270820cf1e3088db620718912_3 ) and method_exists( $fe_array_c1f54f2270820cf1e3088db620718912_3, 'templateValue' ) )
    $fe_array_c1f54f2270820cf1e3088db620718912_3 = $fe_array_c1f54f2270820cf1e3088db620718912_3->templateValue();

$fe_array_keys_c1f54f2270820cf1e3088db620718912_3 = is_array( $fe_array_c1f54f2270820cf1e3088db620718912_3 ) ? array_keys( $fe_array_c1f54f2270820cf1e3088db620718912_3 ) : array();
$fe_n_items_c1f54f2270820cf1e3088db620718912_3 = count( $fe_array_keys_c1f54f2270820cf1e3088db620718912_3 );
$fe_n_items_processed_c1f54f2270820cf1e3088db620718912_3 = 0;
$fe_offset_c1f54f2270820cf1e3088db620718912_3 = 0;
$fe_max_c1f54f2270820cf1e3088db620718912_3 = $fe_n_items_c1f54f2270820cf1e3088db620718912_3 - $fe_offset_c1f54f2270820cf1e3088db620718912_3;
$fe_reverse_c1f54f2270820cf1e3088db620718912_3 = false;
if ( $fe_offset_c1f54f2270820cf1e3088db620718912_3 < 0 || $fe_offset_c1f54f2270820cf1e3088db620718912_3 >= $fe_n_items_c1f54f2270820cf1e3088db620718912_3 )
{
    $fe_offset_c1f54f2270820cf1e3088db620718912_3 = ( $fe_offset_c1f54f2270820cf1e3088db620718912_3 < 0 ) ? 0 : $fe_n_items_c1f54f2270820cf1e3088db620718912_3;
    if ( $fe_n_items_c1f54f2270820cf1e3088db620718912_3 || $fe_offset_c1f54f2270820cf1e3088db620718912_3 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_c1f54f2270820cf1e3088db620718912_3'. Array count: $fe_n_items_c1f54f2270820cf1e3088db620718912_3");   
}
}
if ( $fe_max_c1f54f2270820cf1e3088db620718912_3 < 0 || $fe_offset_c1f54f2270820cf1e3088db620718912_3 + $fe_max_c1f54f2270820cf1e3088db620718912_3 > $fe_n_items_c1f54f2270820cf1e3088db620718912_3 )
{
    if ( $fe_max_c1f54f2270820cf1e3088db620718912_3 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_c1f54f2270820cf1e3088db620718912_3");
    $fe_max_c1f54f2270820cf1e3088db620718912_3 = $fe_n_items_c1f54f2270820cf1e3088db620718912_3 - $fe_offset_c1f54f2270820cf1e3088db620718912_3;
}
if ( $fe_reverse_c1f54f2270820cf1e3088db620718912_3 )
{
    $fe_first_val_c1f54f2270820cf1e3088db620718912_3 = $fe_n_items_c1f54f2270820cf1e3088db620718912_3 - 1 - $fe_offset_c1f54f2270820cf1e3088db620718912_3;
    $fe_last_val_c1f54f2270820cf1e3088db620718912_3  = 0;
}
else
{
    $fe_first_val_c1f54f2270820cf1e3088db620718912_3 = $fe_offset_c1f54f2270820cf1e3088db620718912_3;
    $fe_last_val_c1f54f2270820cf1e3088db620718912_3  = $fe_n_items_c1f54f2270820cf1e3088db620718912_3 - 1;
}
// foreach
for ( $fe_i_c1f54f2270820cf1e3088db620718912_3 = $fe_first_val_c1f54f2270820cf1e3088db620718912_3; $fe_n_items_processed_c1f54f2270820cf1e3088db620718912_3 < $fe_max_c1f54f2270820cf1e3088db620718912_3 && ( $fe_reverse_c1f54f2270820cf1e3088db620718912_3 ? $fe_i_c1f54f2270820cf1e3088db620718912_3 >= $fe_last_val_c1f54f2270820cf1e3088db620718912_3 : $fe_i_c1f54f2270820cf1e3088db620718912_3 <= $fe_last_val_c1f54f2270820cf1e3088db620718912_3 ); $fe_reverse_c1f54f2270820cf1e3088db620718912_3 ? $fe_i_c1f54f2270820cf1e3088db620718912_3-- : $fe_i_c1f54f2270820cf1e3088db620718912_3++ )
{
$fe_key_c1f54f2270820cf1e3088db620718912_3 = $fe_array_keys_c1f54f2270820cf1e3088db620718912_3[$fe_i_c1f54f2270820cf1e3088db620718912_3];
$fe_val_c1f54f2270820cf1e3088db620718912_3 = $fe_array_c1f54f2270820cf1e3088db620718912_3[$fe_key_c1f54f2270820cf1e3088db620718912_3];
$vars[$rootNamespace]['block'] = $fe_val_c1f54f2270820cf1e3088db620718912_3;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= '        <div class="block-separator"></div>
    ';
} // delimiter ends

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'valid_nodes' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond1Data = array( 'value' => $if_cond1 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond1Data, false, false );
$if_cond1 = $if_cond1Data['value'];
unset( $if_cond1Data );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$if_cond5 = compiledFetchAttribute( $if_cond4, 'custom_attributes' );
unset( $if_cond4 );
$if_cond4 = $if_cond5;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
$if_cond3 = isset( $if_cond4 );unset( $if_cond4 );
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$if_cond5 = compiledFetchAttribute( $if_cond4, 'custom_attributes' );
unset( $if_cond4 );
$if_cond4 = $if_cond5;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
$if_cond4Data = array( 'value' => $if_cond4 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond4Data, false, false );
$if_cond4 = $if_cond4Data['value'];
unset( $if_cond4Data );
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
if ( !$if_cond3 )
    $if_cond2 = false;
else if ( !$if_cond4 )
    $if_cond2 = false;
else
    $if_cond2 = $if_cond4;
unset( $if_cond3, $if_cond4 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond4 );
unset( $if_cond5 );
if (! isset( $if_cond5 ) ) $if_cond5 = NULL;
while ( is_object( $if_cond5 ) and method_exists( $if_cond5, 'templateValue' ) )
    $if_cond5 = $if_cond5->templateValue();
$if_cond5Data = array( 'value' => $if_cond5 );
$tpl->processOperator( 'ezini',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'block',
      ),
      2 => false,
    ),
    1 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'type',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'ManualAddingOfItems',
      2 => false,
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'block.ini',
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $if_cond5Data, false, false );
$if_cond5 = $if_cond5Data['value'];
unset( $if_cond5Data );
if (! isset( $if_cond5 ) ) $if_cond5 = NULL;
while ( is_object( $if_cond5 ) and method_exists( $if_cond5, 'templateValue' ) )
    $if_cond5 = $if_cond5->templateValue();
$if_cond4 = ( ( $if_cond5 ) == ( 'disabled' ) );
unset( $if_cond5 );
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
unset( $if_cond5 );
unset( $if_cond6 );
if (! isset( $if_cond6 ) ) $if_cond6 = NULL;
while ( is_object( $if_cond6 ) and method_exists( $if_cond6, 'templateValue' ) )
    $if_cond6 = $if_cond6->templateValue();
$if_cond6Data = array( 'value' => $if_cond6 );
$tpl->processOperator( 'ezini_hasvariable',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'block',
      ),
      2 => false,
    ),
    1 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'type',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'FetchClass',
      2 => false,
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'block.ini',
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $if_cond6Data, false, false );
$if_cond6 = $if_cond6Data['value'];
unset( $if_cond6Data );
if (! isset( $if_cond6 ) ) $if_cond6 = NULL;
while ( is_object( $if_cond6 ) and method_exists( $if_cond6, 'templateValue' ) )
    $if_cond6 = $if_cond6->templateValue();
$if_cond5 = !( $if_cond6 );
unset( $if_cond6 );
if (! isset( $if_cond5 ) ) $if_cond5 = NULL;
while ( is_object( $if_cond5 ) and method_exists( $if_cond5, 'templateValue' ) )
    $if_cond5 = $if_cond5->templateValue();
if ( !$if_cond4 )
    $if_cond3 = false;
else if ( !$if_cond5 )
    $if_cond3 = false;
else
    $if_cond3 = $if_cond5;
unset( $if_cond4, $if_cond5 );
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
if ( $if_cond1 )
    $if_cond = $if_cond1;
else if ( $if_cond2 )
    $if_cond = $if_cond2;
else if ( $if_cond3 )
    $if_cond = $if_cond3;
else
    $if_cond = false;
unset( $if_cond1, $if_cond2, $if_cond3 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <div id="address-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'zone_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
    ';
$textElements = array();
$tpl->processFunction( 'block_view_gui', $textElements,
                       false,
                       array (
  'block' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'block',
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 20,
    1 => 4,
    2 => 834,
  ),
  1 => 
  array (
    0 => 20,
    1 => 31,
    2 => 861,
  ),
  2 => 'extension/ezflow/design/ezflow/templates/zone/2zoneslayout1.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '    </div>';
}
else
{
$text .= '    ';
$skipDelimiter = true;
continue;

}
unset( $if_cond );
// if ends

$text .= '    ';
$fe_n_items_processed_c1f54f2270820cf1e3088db620718912_3++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_c1f54f2270820cf1e3088db620718912_3 ) ) extract( array_pop( $fe_variable_stack_c1f54f2270820cf1e3088db620718912_3 ) );

else
{

unset( $fe_array_c1f54f2270820cf1e3088db620718912_3 );

unset( $fe_array_keys_c1f54f2270820cf1e3088db620718912_3 );

unset( $fe_n_items_c1f54f2270820cf1e3088db620718912_3 );

unset( $fe_n_items_processed_c1f54f2270820cf1e3088db620718912_3 );

unset( $fe_i_c1f54f2270820cf1e3088db620718912_3 );

unset( $fe_key_c1f54f2270820cf1e3088db620718912_3 );

unset( $fe_val_c1f54f2270820cf1e3088db620718912_3 );

unset( $fe_offset_c1f54f2270820cf1e3088db620718912_3 );

unset( $fe_max_c1f54f2270820cf1e3088db620718912_3 );

unset( $fe_reverse_c1f54f2270820cf1e3088db620718912_3 );

unset( $fe_first_val_c1f54f2270820cf1e3088db620718912_3 );

unset( $fe_last_val_c1f54f2270820cf1e3088db620718912_3 );

unset( $fe_variable_stack_c1f54f2270820cf1e3088db620718912_3 );

}

// foreach ends
}
unset( $if_cond );
// if ends

$text .= '
</div>
</div></div></div>
<div class="border-bl"><div class="border-br"><div class="border-bc"></div></div></div>
</div>

<!-- ZONE CONTENT: END -->

</div>
</div>

<div class="maincol-position">
<div class="maincol">

<!-- ZONE CONTENT: START -->

<div class="border-box">
<div class="border-tl"><div class="border-tr"><div class="border-tc"></div></div></div>
<div class="border-ml"><div class="border-mr"><div class="border-mc">
<div class="border-content">
';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zones', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zones'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 1 );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'blocks' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = isset( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zones', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zones'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 1 );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'blocks' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond2Data = array( 'value' => $if_cond2 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond2Data, false, false );
$if_cond2 = $if_cond2Data['value'];
unset( $if_cond2Data );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else
    $if_cond = $if_cond2;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_c1f54f2270820cf1e3088db620718912_4 ) ) $fe_variable_stack_c1f54f2270820cf1e3088db620718912_4 = array();
$fe_variable_stack_c1f54f2270820cf1e3088db620718912_4[] = compact( 'fe_array_c1f54f2270820cf1e3088db620718912_4', 'fe_array_keys_c1f54f2270820cf1e3088db620718912_4', 'fe_n_items_c1f54f2270820cf1e3088db620718912_4', 'fe_n_items_processed_c1f54f2270820cf1e3088db620718912_4', 'fe_i_c1f54f2270820cf1e3088db620718912_4', 'fe_key_c1f54f2270820cf1e3088db620718912_4', 'fe_val_c1f54f2270820cf1e3088db620718912_4', 'fe_offset_c1f54f2270820cf1e3088db620718912_4', 'fe_max_c1f54f2270820cf1e3088db620718912_4', 'fe_reverse_c1f54f2270820cf1e3088db620718912_4', 'fe_first_val_c1f54f2270820cf1e3088db620718912_4', 'fe_last_val_c1f54f2270820cf1e3088db620718912_4' );
unset( $fe_array_c1f54f2270820cf1e3088db620718912_4 );
unset( $fe_array_c1f54f2270820cf1e3088db620718912_4 );
$fe_array_c1f54f2270820cf1e3088db620718912_4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'zones', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['zones'] : null;
$fe_array_c1f54f2270820cf1e3088db620718912_41 = compiledFetchAttribute( $fe_array_c1f54f2270820cf1e3088db620718912_4, 1 );
unset( $fe_array_c1f54f2270820cf1e3088db620718912_4 );
$fe_array_c1f54f2270820cf1e3088db620718912_4 = $fe_array_c1f54f2270820cf1e3088db620718912_41;
$fe_array_c1f54f2270820cf1e3088db620718912_41 = compiledFetchAttribute( $fe_array_c1f54f2270820cf1e3088db620718912_4, 'blocks' );
unset( $fe_array_c1f54f2270820cf1e3088db620718912_4 );
$fe_array_c1f54f2270820cf1e3088db620718912_4 = $fe_array_c1f54f2270820cf1e3088db620718912_41;
if (! isset( $fe_array_c1f54f2270820cf1e3088db620718912_4 ) ) $fe_array_c1f54f2270820cf1e3088db620718912_4 = NULL;
while ( is_object( $fe_array_c1f54f2270820cf1e3088db620718912_4 ) and method_exists( $fe_array_c1f54f2270820cf1e3088db620718912_4, 'templateValue' ) )
    $fe_array_c1f54f2270820cf1e3088db620718912_4 = $fe_array_c1f54f2270820cf1e3088db620718912_4->templateValue();

$fe_array_keys_c1f54f2270820cf1e3088db620718912_4 = is_array( $fe_array_c1f54f2270820cf1e3088db620718912_4 ) ? array_keys( $fe_array_c1f54f2270820cf1e3088db620718912_4 ) : array();
$fe_n_items_c1f54f2270820cf1e3088db620718912_4 = count( $fe_array_keys_c1f54f2270820cf1e3088db620718912_4 );
$fe_n_items_processed_c1f54f2270820cf1e3088db620718912_4 = 0;
$fe_offset_c1f54f2270820cf1e3088db620718912_4 = 0;
$fe_max_c1f54f2270820cf1e3088db620718912_4 = $fe_n_items_c1f54f2270820cf1e3088db620718912_4 - $fe_offset_c1f54f2270820cf1e3088db620718912_4;
$fe_reverse_c1f54f2270820cf1e3088db620718912_4 = false;
if ( $fe_offset_c1f54f2270820cf1e3088db620718912_4 < 0 || $fe_offset_c1f54f2270820cf1e3088db620718912_4 >= $fe_n_items_c1f54f2270820cf1e3088db620718912_4 )
{
    $fe_offset_c1f54f2270820cf1e3088db620718912_4 = ( $fe_offset_c1f54f2270820cf1e3088db620718912_4 < 0 ) ? 0 : $fe_n_items_c1f54f2270820cf1e3088db620718912_4;
    if ( $fe_n_items_c1f54f2270820cf1e3088db620718912_4 || $fe_offset_c1f54f2270820cf1e3088db620718912_4 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_c1f54f2270820cf1e3088db620718912_4'. Array count: $fe_n_items_c1f54f2270820cf1e3088db620718912_4");   
}
}
if ( $fe_max_c1f54f2270820cf1e3088db620718912_4 < 0 || $fe_offset_c1f54f2270820cf1e3088db620718912_4 + $fe_max_c1f54f2270820cf1e3088db620718912_4 > $fe_n_items_c1f54f2270820cf1e3088db620718912_4 )
{
    if ( $fe_max_c1f54f2270820cf1e3088db620718912_4 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_c1f54f2270820cf1e3088db620718912_4");
    $fe_max_c1f54f2270820cf1e3088db620718912_4 = $fe_n_items_c1f54f2270820cf1e3088db620718912_4 - $fe_offset_c1f54f2270820cf1e3088db620718912_4;
}
if ( $fe_reverse_c1f54f2270820cf1e3088db620718912_4 )
{
    $fe_first_val_c1f54f2270820cf1e3088db620718912_4 = $fe_n_items_c1f54f2270820cf1e3088db620718912_4 - 1 - $fe_offset_c1f54f2270820cf1e3088db620718912_4;
    $fe_last_val_c1f54f2270820cf1e3088db620718912_4  = 0;
}
else
{
    $fe_first_val_c1f54f2270820cf1e3088db620718912_4 = $fe_offset_c1f54f2270820cf1e3088db620718912_4;
    $fe_last_val_c1f54f2270820cf1e3088db620718912_4  = $fe_n_items_c1f54f2270820cf1e3088db620718912_4 - 1;
}
// foreach
for ( $fe_i_c1f54f2270820cf1e3088db620718912_4 = $fe_first_val_c1f54f2270820cf1e3088db620718912_4; $fe_n_items_processed_c1f54f2270820cf1e3088db620718912_4 < $fe_max_c1f54f2270820cf1e3088db620718912_4 && ( $fe_reverse_c1f54f2270820cf1e3088db620718912_4 ? $fe_i_c1f54f2270820cf1e3088db620718912_4 >= $fe_last_val_c1f54f2270820cf1e3088db620718912_4 : $fe_i_c1f54f2270820cf1e3088db620718912_4 <= $fe_last_val_c1f54f2270820cf1e3088db620718912_4 ); $fe_reverse_c1f54f2270820cf1e3088db620718912_4 ? $fe_i_c1f54f2270820cf1e3088db620718912_4-- : $fe_i_c1f54f2270820cf1e3088db620718912_4++ )
{
$fe_key_c1f54f2270820cf1e3088db620718912_4 = $fe_array_keys_c1f54f2270820cf1e3088db620718912_4[$fe_i_c1f54f2270820cf1e3088db620718912_4];
$fe_val_c1f54f2270820cf1e3088db620718912_4 = $fe_array_c1f54f2270820cf1e3088db620718912_4[$fe_key_c1f54f2270820cf1e3088db620718912_4];
$vars[$rootNamespace]['block'] = $fe_val_c1f54f2270820cf1e3088db620718912_4;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= '        <div class="block-separator"></div>
    ';
} // delimiter ends

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'valid_nodes' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond1Data = array( 'value' => $if_cond1 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond1Data, false, false );
$if_cond1 = $if_cond1Data['value'];
unset( $if_cond1Data );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$if_cond5 = compiledFetchAttribute( $if_cond4, 'custom_attributes' );
unset( $if_cond4 );
$if_cond4 = $if_cond5;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
$if_cond3 = isset( $if_cond4 );unset( $if_cond4 );
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$if_cond5 = compiledFetchAttribute( $if_cond4, 'custom_attributes' );
unset( $if_cond4 );
$if_cond4 = $if_cond5;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
$if_cond4Data = array( 'value' => $if_cond4 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond4Data, false, false );
$if_cond4 = $if_cond4Data['value'];
unset( $if_cond4Data );
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
if ( !$if_cond3 )
    $if_cond2 = false;
else if ( !$if_cond4 )
    $if_cond2 = false;
else
    $if_cond2 = $if_cond4;
unset( $if_cond3, $if_cond4 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond4 );
unset( $if_cond5 );
if (! isset( $if_cond5 ) ) $if_cond5 = NULL;
while ( is_object( $if_cond5 ) and method_exists( $if_cond5, 'templateValue' ) )
    $if_cond5 = $if_cond5->templateValue();
$if_cond5Data = array( 'value' => $if_cond5 );
$tpl->processOperator( 'ezini',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'block',
      ),
      2 => false,
    ),
    1 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'type',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'ManualAddingOfItems',
      2 => false,
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'block.ini',
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $if_cond5Data, false, false );
$if_cond5 = $if_cond5Data['value'];
unset( $if_cond5Data );
if (! isset( $if_cond5 ) ) $if_cond5 = NULL;
while ( is_object( $if_cond5 ) and method_exists( $if_cond5, 'templateValue' ) )
    $if_cond5 = $if_cond5->templateValue();
$if_cond4 = ( ( $if_cond5 ) == ( 'disabled' ) );
unset( $if_cond5 );
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
unset( $if_cond5 );
unset( $if_cond6 );
if (! isset( $if_cond6 ) ) $if_cond6 = NULL;
while ( is_object( $if_cond6 ) and method_exists( $if_cond6, 'templateValue' ) )
    $if_cond6 = $if_cond6->templateValue();
$if_cond6Data = array( 'value' => $if_cond6 );
$tpl->processOperator( 'ezini_hasvariable',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'block',
      ),
      2 => false,
    ),
    1 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'type',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'FetchClass',
      2 => false,
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'block.ini',
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $if_cond6Data, false, false );
$if_cond6 = $if_cond6Data['value'];
unset( $if_cond6Data );
if (! isset( $if_cond6 ) ) $if_cond6 = NULL;
while ( is_object( $if_cond6 ) and method_exists( $if_cond6, 'templateValue' ) )
    $if_cond6 = $if_cond6->templateValue();
$if_cond5 = !( $if_cond6 );
unset( $if_cond6 );
if (! isset( $if_cond5 ) ) $if_cond5 = NULL;
while ( is_object( $if_cond5 ) and method_exists( $if_cond5, 'templateValue' ) )
    $if_cond5 = $if_cond5->templateValue();
if ( !$if_cond4 )
    $if_cond3 = false;
else if ( !$if_cond5 )
    $if_cond3 = false;
else
    $if_cond3 = $if_cond5;
unset( $if_cond4, $if_cond5 );
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
if ( $if_cond1 )
    $if_cond = $if_cond1;
else if ( $if_cond2 )
    $if_cond = $if_cond2;
else if ( $if_cond3 )
    $if_cond = $if_cond3;
else
    $if_cond = false;
unset( $if_cond1, $if_cond2, $if_cond3 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <div id="address-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'zone_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'block', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['block'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
    ';
$textElements = array();
$tpl->processFunction( 'block_view_gui', $textElements,
                       false,
                       array (
  'block' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'block',
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 57,
    1 => 4,
    2 => 1886,
  ),
  1 => 
  array (
    0 => 57,
    1 => 31,
    2 => 1913,
  ),
  2 => 'extension/ezflow/design/ezflow/templates/zone/2zoneslayout1.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '    </div>';
}
else
{
$text .= '    ';
$skipDelimiter = true;
continue;

}
unset( $if_cond );
// if ends

$text .= '    ';
$fe_n_items_processed_c1f54f2270820cf1e3088db620718912_4++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_c1f54f2270820cf1e3088db620718912_4 ) ) extract( array_pop( $fe_variable_stack_c1f54f2270820cf1e3088db620718912_4 ) );

else
{

unset( $fe_array_c1f54f2270820cf1e3088db620718912_4 );

unset( $fe_array_keys_c1f54f2270820cf1e3088db620718912_4 );

unset( $fe_n_items_c1f54f2270820cf1e3088db620718912_4 );

unset( $fe_n_items_processed_c1f54f2270820cf1e3088db620718912_4 );

unset( $fe_i_c1f54f2270820cf1e3088db620718912_4 );

unset( $fe_key_c1f54f2270820cf1e3088db620718912_4 );

unset( $fe_val_c1f54f2270820cf1e3088db620718912_4 );

unset( $fe_offset_c1f54f2270820cf1e3088db620718912_4 );

unset( $fe_max_c1f54f2270820cf1e3088db620718912_4 );

unset( $fe_reverse_c1f54f2270820cf1e3088db620718912_4 );

unset( $fe_first_val_c1f54f2270820cf1e3088db620718912_4 );

unset( $fe_last_val_c1f54f2270820cf1e3088db620718912_4 );

unset( $fe_variable_stack_c1f54f2270820cf1e3088db620718912_4 );

}

// foreach ends
}
unset( $if_cond );
// if ends

$text .= '
</div>
</div></div></div>
<div class="border-bl"><div class="border-br"><div class="border-bc"></div></div></div>
</div>

<!-- ZONE CONTENT: END -->

</div>
</div>

<div class="rightcol-position">
<div class="rightcol">

</div>
</div>
</div>

</div>';

$setArray = $oldSetArray_f32ed2bea61c39f016a759f035fc6e89;
$tpl->Level--;
?>
