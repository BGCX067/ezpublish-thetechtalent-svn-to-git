<?php
// URI:       design/admin2/templates/content/parts/edit_states.tpl
// Filename:  design/admin2/templates/content/parts/edit_states.tpl
// Timestamp: 1285696610 (Tue Sep 28 10:56:50 MST 2010)
$oldSetArray_a22964cc80db6d3be11dc77aa0fdcea0 = isset( $setArray ) ? $setArray : array();
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

// def $enable_StateEditButton
if ( $tpl->hasVariable( 'enable_StateEditButton', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'enable_StateEditButton' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 64,
  ),
  1 => 
  array (
    0 => 2,
    1 => 37,
    2 => 101,
  ),
  2 => 'design/admin2/templates/content/parts/edit_states.tpl',
) );
    $tpl->setVariable( 'enable_StateEditButton', false, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'enable_StateEditButton', false, $rootNamespace );
}

$text .= '
<div class="box-header"><div class="box-ml">

<h4 class="context-title">States</h4>

</div></div>


<div class="box-bc"><div class="box-ml"><div class="box-mr"><div class="box-bl"><div class="box-br"><div class="box-content">
';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_b971a2b2d3dcd86b92b0ef70786ff9d7_5 ) ) $fe_variable_stack_b971a2b2d3dcd86b92b0ef70786ff9d7_5 = array();
$fe_variable_stack_b971a2b2d3dcd86b92b0ef70786ff9d7_5[] = compact( 'fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_5', 'fe_array_keys_b971a2b2d3dcd86b92b0ef70786ff9d7_5', 'fe_n_items_b971a2b2d3dcd86b92b0ef70786ff9d7_5', 'fe_n_items_processed_b971a2b2d3dcd86b92b0ef70786ff9d7_5', 'fe_i_b971a2b2d3dcd86b92b0ef70786ff9d7_5', 'fe_key_b971a2b2d3dcd86b92b0ef70786ff9d7_5', 'fe_val_b971a2b2d3dcd86b92b0ef70786ff9d7_5', 'fe_offset_b971a2b2d3dcd86b92b0ef70786ff9d7_5', 'fe_max_b971a2b2d3dcd86b92b0ef70786ff9d7_5', 'fe_reverse_b971a2b2d3dcd86b92b0ef70786ff9d7_5', 'fe_first_val_b971a2b2d3dcd86b92b0ef70786ff9d7_5', 'fe_last_val_b971a2b2d3dcd86b92b0ef70786ff9d7_5' );
unset( $fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_5 );
unset( $fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_5 );
$fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_51 = compiledFetchAttribute( $fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_5, 'allowed_assign_state_list' );
unset( $fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_5 );
$fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_5 = $fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_51;
if (! isset( $fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_5 ) ) $fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_5 = NULL;
while ( is_object( $fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_5 ) and method_exists( $fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_5, 'templateValue' ) )
    $fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_5 = $fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_5->templateValue();

$fe_array_keys_b971a2b2d3dcd86b92b0ef70786ff9d7_5 = is_array( $fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_5 ) ? array_keys( $fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_5 ) : array();
$fe_n_items_b971a2b2d3dcd86b92b0ef70786ff9d7_5 = count( $fe_array_keys_b971a2b2d3dcd86b92b0ef70786ff9d7_5 );
$fe_n_items_processed_b971a2b2d3dcd86b92b0ef70786ff9d7_5 = 0;
$fe_offset_b971a2b2d3dcd86b92b0ef70786ff9d7_5 = 0;
$fe_max_b971a2b2d3dcd86b92b0ef70786ff9d7_5 = $fe_n_items_b971a2b2d3dcd86b92b0ef70786ff9d7_5 - $fe_offset_b971a2b2d3dcd86b92b0ef70786ff9d7_5;
$fe_reverse_b971a2b2d3dcd86b92b0ef70786ff9d7_5 = false;
if ( $fe_offset_b971a2b2d3dcd86b92b0ef70786ff9d7_5 < 0 || $fe_offset_b971a2b2d3dcd86b92b0ef70786ff9d7_5 >= $fe_n_items_b971a2b2d3dcd86b92b0ef70786ff9d7_5 )
{
    $fe_offset_b971a2b2d3dcd86b92b0ef70786ff9d7_5 = ( $fe_offset_b971a2b2d3dcd86b92b0ef70786ff9d7_5 < 0 ) ? 0 : $fe_n_items_b971a2b2d3dcd86b92b0ef70786ff9d7_5;
    if ( $fe_n_items_b971a2b2d3dcd86b92b0ef70786ff9d7_5 || $fe_offset_b971a2b2d3dcd86b92b0ef70786ff9d7_5 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_b971a2b2d3dcd86b92b0ef70786ff9d7_5'. Array count: $fe_n_items_b971a2b2d3dcd86b92b0ef70786ff9d7_5");   
}
}
if ( $fe_max_b971a2b2d3dcd86b92b0ef70786ff9d7_5 < 0 || $fe_offset_b971a2b2d3dcd86b92b0ef70786ff9d7_5 + $fe_max_b971a2b2d3dcd86b92b0ef70786ff9d7_5 > $fe_n_items_b971a2b2d3dcd86b92b0ef70786ff9d7_5 )
{
    if ( $fe_max_b971a2b2d3dcd86b92b0ef70786ff9d7_5 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_b971a2b2d3dcd86b92b0ef70786ff9d7_5");
    $fe_max_b971a2b2d3dcd86b92b0ef70786ff9d7_5 = $fe_n_items_b971a2b2d3dcd86b92b0ef70786ff9d7_5 - $fe_offset_b971a2b2d3dcd86b92b0ef70786ff9d7_5;
}
if ( $fe_reverse_b971a2b2d3dcd86b92b0ef70786ff9d7_5 )
{
    $fe_first_val_b971a2b2d3dcd86b92b0ef70786ff9d7_5 = $fe_n_items_b971a2b2d3dcd86b92b0ef70786ff9d7_5 - 1 - $fe_offset_b971a2b2d3dcd86b92b0ef70786ff9d7_5;
    $fe_last_val_b971a2b2d3dcd86b92b0ef70786ff9d7_5  = 0;
}
else
{
    $fe_first_val_b971a2b2d3dcd86b92b0ef70786ff9d7_5 = $fe_offset_b971a2b2d3dcd86b92b0ef70786ff9d7_5;
    $fe_last_val_b971a2b2d3dcd86b92b0ef70786ff9d7_5  = $fe_n_items_b971a2b2d3dcd86b92b0ef70786ff9d7_5 - 1;
}
// foreach
for ( $fe_i_b971a2b2d3dcd86b92b0ef70786ff9d7_5 = $fe_first_val_b971a2b2d3dcd86b92b0ef70786ff9d7_5; $fe_n_items_processed_b971a2b2d3dcd86b92b0ef70786ff9d7_5 < $fe_max_b971a2b2d3dcd86b92b0ef70786ff9d7_5 && ( $fe_reverse_b971a2b2d3dcd86b92b0ef70786ff9d7_5 ? $fe_i_b971a2b2d3dcd86b92b0ef70786ff9d7_5 >= $fe_last_val_b971a2b2d3dcd86b92b0ef70786ff9d7_5 : $fe_i_b971a2b2d3dcd86b92b0ef70786ff9d7_5 <= $fe_last_val_b971a2b2d3dcd86b92b0ef70786ff9d7_5 ); $fe_reverse_b971a2b2d3dcd86b92b0ef70786ff9d7_5 ? $fe_i_b971a2b2d3dcd86b92b0ef70786ff9d7_5-- : $fe_i_b971a2b2d3dcd86b92b0ef70786ff9d7_5++ )
{
$fe_key_b971a2b2d3dcd86b92b0ef70786ff9d7_5 = $fe_array_keys_b971a2b2d3dcd86b92b0ef70786ff9d7_5[$fe_i_b971a2b2d3dcd86b92b0ef70786ff9d7_5];
$fe_val_b971a2b2d3dcd86b92b0ef70786ff9d7_5 = $fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_5[$fe_key_b971a2b2d3dcd86b92b0ef70786ff9d7_5];
$vars[$rootNamespace]['allowed_assign_state_info'] = $fe_val_b971a2b2d3dcd86b92b0ef70786ff9d7_5;
$text .= '<div class="block">
    <label for="SelectedStateIDList">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'allowed_assign_state_info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['allowed_assign_state_info'] : null;
$var2 = compiledFetchAttribute( $var1, 'group' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'current_translation' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'name' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</label>
    <select id="SelectedStateIDList" name="SelectedStateIDList[]" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'allowed_assign_state_info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['allowed_assign_state_info'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'states' );
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
$if_cond = ( ( $if_cond1 ) == ( 1 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'disabled="disabled"';
}
unset( $if_cond );
// if ends

$text .= '>
    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'allowed_assign_state_info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['allowed_assign_state_info'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'states' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'enable_StateEditButton', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['enable_StateEditButton'] = true;
}
$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_b971a2b2d3dcd86b92b0ef70786ff9d7_4 ) ) $fe_variable_stack_b971a2b2d3dcd86b92b0ef70786ff9d7_4 = array();
$fe_variable_stack_b971a2b2d3dcd86b92b0ef70786ff9d7_4[] = compact( 'fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_4', 'fe_array_keys_b971a2b2d3dcd86b92b0ef70786ff9d7_4', 'fe_n_items_b971a2b2d3dcd86b92b0ef70786ff9d7_4', 'fe_n_items_processed_b971a2b2d3dcd86b92b0ef70786ff9d7_4', 'fe_i_b971a2b2d3dcd86b92b0ef70786ff9d7_4', 'fe_key_b971a2b2d3dcd86b92b0ef70786ff9d7_4', 'fe_val_b971a2b2d3dcd86b92b0ef70786ff9d7_4', 'fe_offset_b971a2b2d3dcd86b92b0ef70786ff9d7_4', 'fe_max_b971a2b2d3dcd86b92b0ef70786ff9d7_4', 'fe_reverse_b971a2b2d3dcd86b92b0ef70786ff9d7_4', 'fe_first_val_b971a2b2d3dcd86b92b0ef70786ff9d7_4', 'fe_last_val_b971a2b2d3dcd86b92b0ef70786ff9d7_4' );
unset( $fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_4 );
unset( $fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_4 );
$fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'allowed_assign_state_info', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['allowed_assign_state_info'] : null;
$fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_41 = compiledFetchAttribute( $fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_4, 'states' );
unset( $fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_4 );
$fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_4 = $fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_41;
if (! isset( $fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_4 ) ) $fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_4 = NULL;
while ( is_object( $fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_4 ) and method_exists( $fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_4, 'templateValue' ) )
    $fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_4 = $fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_4->templateValue();

$fe_array_keys_b971a2b2d3dcd86b92b0ef70786ff9d7_4 = is_array( $fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_4 ) ? array_keys( $fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_4 ) : array();
$fe_n_items_b971a2b2d3dcd86b92b0ef70786ff9d7_4 = count( $fe_array_keys_b971a2b2d3dcd86b92b0ef70786ff9d7_4 );
$fe_n_items_processed_b971a2b2d3dcd86b92b0ef70786ff9d7_4 = 0;
$fe_offset_b971a2b2d3dcd86b92b0ef70786ff9d7_4 = 0;
$fe_max_b971a2b2d3dcd86b92b0ef70786ff9d7_4 = $fe_n_items_b971a2b2d3dcd86b92b0ef70786ff9d7_4 - $fe_offset_b971a2b2d3dcd86b92b0ef70786ff9d7_4;
$fe_reverse_b971a2b2d3dcd86b92b0ef70786ff9d7_4 = false;
if ( $fe_offset_b971a2b2d3dcd86b92b0ef70786ff9d7_4 < 0 || $fe_offset_b971a2b2d3dcd86b92b0ef70786ff9d7_4 >= $fe_n_items_b971a2b2d3dcd86b92b0ef70786ff9d7_4 )
{
    $fe_offset_b971a2b2d3dcd86b92b0ef70786ff9d7_4 = ( $fe_offset_b971a2b2d3dcd86b92b0ef70786ff9d7_4 < 0 ) ? 0 : $fe_n_items_b971a2b2d3dcd86b92b0ef70786ff9d7_4;
    if ( $fe_n_items_b971a2b2d3dcd86b92b0ef70786ff9d7_4 || $fe_offset_b971a2b2d3dcd86b92b0ef70786ff9d7_4 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_b971a2b2d3dcd86b92b0ef70786ff9d7_4'. Array count: $fe_n_items_b971a2b2d3dcd86b92b0ef70786ff9d7_4");   
}
}
if ( $fe_max_b971a2b2d3dcd86b92b0ef70786ff9d7_4 < 0 || $fe_offset_b971a2b2d3dcd86b92b0ef70786ff9d7_4 + $fe_max_b971a2b2d3dcd86b92b0ef70786ff9d7_4 > $fe_n_items_b971a2b2d3dcd86b92b0ef70786ff9d7_4 )
{
    if ( $fe_max_b971a2b2d3dcd86b92b0ef70786ff9d7_4 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_b971a2b2d3dcd86b92b0ef70786ff9d7_4");
    $fe_max_b971a2b2d3dcd86b92b0ef70786ff9d7_4 = $fe_n_items_b971a2b2d3dcd86b92b0ef70786ff9d7_4 - $fe_offset_b971a2b2d3dcd86b92b0ef70786ff9d7_4;
}
if ( $fe_reverse_b971a2b2d3dcd86b92b0ef70786ff9d7_4 )
{
    $fe_first_val_b971a2b2d3dcd86b92b0ef70786ff9d7_4 = $fe_n_items_b971a2b2d3dcd86b92b0ef70786ff9d7_4 - 1 - $fe_offset_b971a2b2d3dcd86b92b0ef70786ff9d7_4;
    $fe_last_val_b971a2b2d3dcd86b92b0ef70786ff9d7_4  = 0;
}
else
{
    $fe_first_val_b971a2b2d3dcd86b92b0ef70786ff9d7_4 = $fe_offset_b971a2b2d3dcd86b92b0ef70786ff9d7_4;
    $fe_last_val_b971a2b2d3dcd86b92b0ef70786ff9d7_4  = $fe_n_items_b971a2b2d3dcd86b92b0ef70786ff9d7_4 - 1;
}
// foreach
for ( $fe_i_b971a2b2d3dcd86b92b0ef70786ff9d7_4 = $fe_first_val_b971a2b2d3dcd86b92b0ef70786ff9d7_4; $fe_n_items_processed_b971a2b2d3dcd86b92b0ef70786ff9d7_4 < $fe_max_b971a2b2d3dcd86b92b0ef70786ff9d7_4 && ( $fe_reverse_b971a2b2d3dcd86b92b0ef70786ff9d7_4 ? $fe_i_b971a2b2d3dcd86b92b0ef70786ff9d7_4 >= $fe_last_val_b971a2b2d3dcd86b92b0ef70786ff9d7_4 : $fe_i_b971a2b2d3dcd86b92b0ef70786ff9d7_4 <= $fe_last_val_b971a2b2d3dcd86b92b0ef70786ff9d7_4 ); $fe_reverse_b971a2b2d3dcd86b92b0ef70786ff9d7_4 ? $fe_i_b971a2b2d3dcd86b92b0ef70786ff9d7_4-- : $fe_i_b971a2b2d3dcd86b92b0ef70786ff9d7_4++ )
{
$fe_key_b971a2b2d3dcd86b92b0ef70786ff9d7_4 = $fe_array_keys_b971a2b2d3dcd86b92b0ef70786ff9d7_4[$fe_i_b971a2b2d3dcd86b92b0ef70786ff9d7_4];
$fe_val_b971a2b2d3dcd86b92b0ef70786ff9d7_4 = $fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_4[$fe_key_b971a2b2d3dcd86b92b0ef70786ff9d7_4];
$vars[$rootNamespace]['state'] = $fe_val_b971a2b2d3dcd86b92b0ef70786ff9d7_4;
$text .= '        <option value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'state', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['state'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'state_id_array' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'state', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['state'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'id' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if( is_string( $if_cond1 ) )
{
  $if_cond = ( strpos( $if_cond1, $if_cond2 ) !== false );
}
else if ( is_array( $if_cond1 ) )
{
  $if_cond = in_array( $if_cond2, $if_cond1 );
}
else
{
$if_cond = false;
}unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'selected="selected"';
}
unset( $if_cond );
// if ends

$text .= '>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'state', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['state'] : null;
$var2 = compiledFetchAttribute( $var1, 'current_translation' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'name' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</option>
    ';
$fe_n_items_processed_b971a2b2d3dcd86b92b0ef70786ff9d7_4++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_b971a2b2d3dcd86b92b0ef70786ff9d7_4 ) ) extract( array_pop( $fe_variable_stack_b971a2b2d3dcd86b92b0ef70786ff9d7_4 ) );

else
{

unset( $fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_4 );

unset( $fe_array_keys_b971a2b2d3dcd86b92b0ef70786ff9d7_4 );

unset( $fe_n_items_b971a2b2d3dcd86b92b0ef70786ff9d7_4 );

unset( $fe_n_items_processed_b971a2b2d3dcd86b92b0ef70786ff9d7_4 );

unset( $fe_i_b971a2b2d3dcd86b92b0ef70786ff9d7_4 );

unset( $fe_key_b971a2b2d3dcd86b92b0ef70786ff9d7_4 );

unset( $fe_val_b971a2b2d3dcd86b92b0ef70786ff9d7_4 );

unset( $fe_offset_b971a2b2d3dcd86b92b0ef70786ff9d7_4 );

unset( $fe_max_b971a2b2d3dcd86b92b0ef70786ff9d7_4 );

unset( $fe_reverse_b971a2b2d3dcd86b92b0ef70786ff9d7_4 );

unset( $fe_first_val_b971a2b2d3dcd86b92b0ef70786ff9d7_4 );

unset( $fe_last_val_b971a2b2d3dcd86b92b0ef70786ff9d7_4 );

unset( $fe_variable_stack_b971a2b2d3dcd86b92b0ef70786ff9d7_4 );

}

// foreach ends
$text .= '    </select>
</div>';
$fe_n_items_processed_b971a2b2d3dcd86b92b0ef70786ff9d7_5++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_b971a2b2d3dcd86b92b0ef70786ff9d7_5 ) ) extract( array_pop( $fe_variable_stack_b971a2b2d3dcd86b92b0ef70786ff9d7_5 ) );

else
{

unset( $fe_array_b971a2b2d3dcd86b92b0ef70786ff9d7_5 );

unset( $fe_array_keys_b971a2b2d3dcd86b92b0ef70786ff9d7_5 );

unset( $fe_n_items_b971a2b2d3dcd86b92b0ef70786ff9d7_5 );

unset( $fe_n_items_processed_b971a2b2d3dcd86b92b0ef70786ff9d7_5 );

unset( $fe_i_b971a2b2d3dcd86b92b0ef70786ff9d7_5 );

unset( $fe_key_b971a2b2d3dcd86b92b0ef70786ff9d7_5 );

unset( $fe_val_b971a2b2d3dcd86b92b0ef70786ff9d7_5 );

unset( $fe_offset_b971a2b2d3dcd86b92b0ef70786ff9d7_5 );

unset( $fe_max_b971a2b2d3dcd86b92b0ef70786ff9d7_5 );

unset( $fe_reverse_b971a2b2d3dcd86b92b0ef70786ff9d7_5 );

unset( $fe_first_val_b971a2b2d3dcd86b92b0ef70786ff9d7_5 );

unset( $fe_last_val_b971a2b2d3dcd86b92b0ef70786ff9d7_5 );

unset( $fe_variable_stack_b971a2b2d3dcd86b92b0ef70786ff9d7_5 );

}

// foreach ends
$text .= '

<div class="block">';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'enable_StateEditButton', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['enable_StateEditButton'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <input type="submit" value="Set" name="StateEditButton" class="button" />';
}
else
{
$text .= '    <input type="submit" value="Set" name="StateEditButton" class="button-disabled" />';
}
unset( $if_cond );
// if ends

$text .= '</div>
</div></div></div></div></div></div>

';

$setArray = $oldSetArray_a22964cc80db6d3be11dc77aa0fdcea0;
$tpl->Level--;
?>
