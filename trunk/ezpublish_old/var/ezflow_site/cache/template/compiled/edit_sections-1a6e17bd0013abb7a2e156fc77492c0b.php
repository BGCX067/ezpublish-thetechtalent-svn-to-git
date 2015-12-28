<?php
// URI:       design/admin2/templates/content/parts/edit_sections.tpl
// Filename:  design/admin2/templates/content/parts/edit_sections.tpl
// Timestamp: 1285696610 (Tue Sep 28 10:56:50 MST 2010)
$oldSetArray_edc1a8c7dd9bd4bf79e313ac67926013 = isset( $setArray ) ? $setArray : array();
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

<div class="box-header"><div class="box-ml">


';
// def $sections
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$var1 = compiledFetchAttribute( $var, 'allowed_assign_section_list' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'sections', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'sections' is already defined.", array (
  0 => 
  array (
    0 => 8,
    1 => 0,
    2 => 370,
  ),
  1 => 
  array (
    0 => 9,
    1 => 34,
    2 => 454,
  ),
  2 => 'design/admin2/templates/content/parts/edit_sections.tpl',
) );
    $tpl->setVariable( 'sections', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'sections', $var, $rootNamespace );
}

// def $currentSectionName
if ( $tpl->hasVariable( 'currentSectionName', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'currentSectionName' is already defined.", array (
  0 => 
  array (
    0 => 8,
    1 => 0,
    2 => 370,
  ),
  1 => 
  array (
    0 => 9,
    1 => 34,
    2 => 454,
  ),
  2 => 'design/admin2/templates/content/parts/edit_sections.tpl',
) );
    $tpl->setVariable( 'currentSectionName', 'unknown', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'currentSectionName', 'unknown', $rootNamespace );
}

$text .= '
';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_c6b15ff416c3606f9e72fe28d2ac7a8e_2 ) ) $fe_variable_stack_c6b15ff416c3606f9e72fe28d2ac7a8e_2 = array();
$fe_variable_stack_c6b15ff416c3606f9e72fe28d2ac7a8e_2[] = compact( 'fe_array_c6b15ff416c3606f9e72fe28d2ac7a8e_2', 'fe_array_keys_c6b15ff416c3606f9e72fe28d2ac7a8e_2', 'fe_n_items_c6b15ff416c3606f9e72fe28d2ac7a8e_2', 'fe_n_items_processed_c6b15ff416c3606f9e72fe28d2ac7a8e_2', 'fe_i_c6b15ff416c3606f9e72fe28d2ac7a8e_2', 'fe_key_c6b15ff416c3606f9e72fe28d2ac7a8e_2', 'fe_val_c6b15ff416c3606f9e72fe28d2ac7a8e_2', 'fe_offset_c6b15ff416c3606f9e72fe28d2ac7a8e_2', 'fe_max_c6b15ff416c3606f9e72fe28d2ac7a8e_2', 'fe_reverse_c6b15ff416c3606f9e72fe28d2ac7a8e_2', 'fe_first_val_c6b15ff416c3606f9e72fe28d2ac7a8e_2', 'fe_last_val_c6b15ff416c3606f9e72fe28d2ac7a8e_2' );
unset( $fe_array_c6b15ff416c3606f9e72fe28d2ac7a8e_2 );
unset( $fe_array_c6b15ff416c3606f9e72fe28d2ac7a8e_2 );
$fe_array_c6b15ff416c3606f9e72fe28d2ac7a8e_2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sections', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sections'] : null;
if (! isset( $fe_array_c6b15ff416c3606f9e72fe28d2ac7a8e_2 ) ) $fe_array_c6b15ff416c3606f9e72fe28d2ac7a8e_2 = NULL;
while ( is_object( $fe_array_c6b15ff416c3606f9e72fe28d2ac7a8e_2 ) and method_exists( $fe_array_c6b15ff416c3606f9e72fe28d2ac7a8e_2, 'templateValue' ) )
    $fe_array_c6b15ff416c3606f9e72fe28d2ac7a8e_2 = $fe_array_c6b15ff416c3606f9e72fe28d2ac7a8e_2->templateValue();

$fe_array_keys_c6b15ff416c3606f9e72fe28d2ac7a8e_2 = is_array( $fe_array_c6b15ff416c3606f9e72fe28d2ac7a8e_2 ) ? array_keys( $fe_array_c6b15ff416c3606f9e72fe28d2ac7a8e_2 ) : array();
$fe_n_items_c6b15ff416c3606f9e72fe28d2ac7a8e_2 = count( $fe_array_keys_c6b15ff416c3606f9e72fe28d2ac7a8e_2 );
$fe_n_items_processed_c6b15ff416c3606f9e72fe28d2ac7a8e_2 = 0;
$fe_offset_c6b15ff416c3606f9e72fe28d2ac7a8e_2 = 0;
$fe_max_c6b15ff416c3606f9e72fe28d2ac7a8e_2 = $fe_n_items_c6b15ff416c3606f9e72fe28d2ac7a8e_2 - $fe_offset_c6b15ff416c3606f9e72fe28d2ac7a8e_2;
$fe_reverse_c6b15ff416c3606f9e72fe28d2ac7a8e_2 = false;
if ( $fe_offset_c6b15ff416c3606f9e72fe28d2ac7a8e_2 < 0 || $fe_offset_c6b15ff416c3606f9e72fe28d2ac7a8e_2 >= $fe_n_items_c6b15ff416c3606f9e72fe28d2ac7a8e_2 )
{
    $fe_offset_c6b15ff416c3606f9e72fe28d2ac7a8e_2 = ( $fe_offset_c6b15ff416c3606f9e72fe28d2ac7a8e_2 < 0 ) ? 0 : $fe_n_items_c6b15ff416c3606f9e72fe28d2ac7a8e_2;
    if ( $fe_n_items_c6b15ff416c3606f9e72fe28d2ac7a8e_2 || $fe_offset_c6b15ff416c3606f9e72fe28d2ac7a8e_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_c6b15ff416c3606f9e72fe28d2ac7a8e_2'. Array count: $fe_n_items_c6b15ff416c3606f9e72fe28d2ac7a8e_2");   
}
}
if ( $fe_max_c6b15ff416c3606f9e72fe28d2ac7a8e_2 < 0 || $fe_offset_c6b15ff416c3606f9e72fe28d2ac7a8e_2 + $fe_max_c6b15ff416c3606f9e72fe28d2ac7a8e_2 > $fe_n_items_c6b15ff416c3606f9e72fe28d2ac7a8e_2 )
{
    if ( $fe_max_c6b15ff416c3606f9e72fe28d2ac7a8e_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_c6b15ff416c3606f9e72fe28d2ac7a8e_2");
    $fe_max_c6b15ff416c3606f9e72fe28d2ac7a8e_2 = $fe_n_items_c6b15ff416c3606f9e72fe28d2ac7a8e_2 - $fe_offset_c6b15ff416c3606f9e72fe28d2ac7a8e_2;
}
if ( $fe_reverse_c6b15ff416c3606f9e72fe28d2ac7a8e_2 )
{
    $fe_first_val_c6b15ff416c3606f9e72fe28d2ac7a8e_2 = $fe_n_items_c6b15ff416c3606f9e72fe28d2ac7a8e_2 - 1 - $fe_offset_c6b15ff416c3606f9e72fe28d2ac7a8e_2;
    $fe_last_val_c6b15ff416c3606f9e72fe28d2ac7a8e_2  = 0;
}
else
{
    $fe_first_val_c6b15ff416c3606f9e72fe28d2ac7a8e_2 = $fe_offset_c6b15ff416c3606f9e72fe28d2ac7a8e_2;
    $fe_last_val_c6b15ff416c3606f9e72fe28d2ac7a8e_2  = $fe_n_items_c6b15ff416c3606f9e72fe28d2ac7a8e_2 - 1;
}
// foreach
for ( $fe_i_c6b15ff416c3606f9e72fe28d2ac7a8e_2 = $fe_first_val_c6b15ff416c3606f9e72fe28d2ac7a8e_2; $fe_n_items_processed_c6b15ff416c3606f9e72fe28d2ac7a8e_2 < $fe_max_c6b15ff416c3606f9e72fe28d2ac7a8e_2 && ( $fe_reverse_c6b15ff416c3606f9e72fe28d2ac7a8e_2 ? $fe_i_c6b15ff416c3606f9e72fe28d2ac7a8e_2 >= $fe_last_val_c6b15ff416c3606f9e72fe28d2ac7a8e_2 : $fe_i_c6b15ff416c3606f9e72fe28d2ac7a8e_2 <= $fe_last_val_c6b15ff416c3606f9e72fe28d2ac7a8e_2 ); $fe_reverse_c6b15ff416c3606f9e72fe28d2ac7a8e_2 ? $fe_i_c6b15ff416c3606f9e72fe28d2ac7a8e_2-- : $fe_i_c6b15ff416c3606f9e72fe28d2ac7a8e_2++ )
{
$fe_key_c6b15ff416c3606f9e72fe28d2ac7a8e_2 = $fe_array_keys_c6b15ff416c3606f9e72fe28d2ac7a8e_2[$fe_i_c6b15ff416c3606f9e72fe28d2ac7a8e_2];
$fe_val_c6b15ff416c3606f9e72fe28d2ac7a8e_2 = $fe_array_c6b15ff416c3606f9e72fe28d2ac7a8e_2[$fe_key_c6b15ff416c3606f9e72fe28d2ac7a8e_2];
$vars[$rootNamespace]['sectionItem'] = $fe_val_c6b15ff416c3606f9e72fe28d2ac7a8e_2;
$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sectionItem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sectionItem'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'id' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'section_id' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond = ( ( $if_cond1 ) == ( $if_cond2 ) );
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sectionItem', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sectionItem'] : null;
$var1 = compiledFetchAttribute( $var, 'name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'currentSectionName', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['currentSectionName'] = $var;
    unset( $var );
}
$text .= '    ';
}
unset( $if_cond );
// if ends

$fe_n_items_processed_c6b15ff416c3606f9e72fe28d2ac7a8e_2++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_c6b15ff416c3606f9e72fe28d2ac7a8e_2 ) ) extract( array_pop( $fe_variable_stack_c6b15ff416c3606f9e72fe28d2ac7a8e_2 ) );

else
{

unset( $fe_array_c6b15ff416c3606f9e72fe28d2ac7a8e_2 );

unset( $fe_array_keys_c6b15ff416c3606f9e72fe28d2ac7a8e_2 );

unset( $fe_n_items_c6b15ff416c3606f9e72fe28d2ac7a8e_2 );

unset( $fe_n_items_processed_c6b15ff416c3606f9e72fe28d2ac7a8e_2 );

unset( $fe_i_c6b15ff416c3606f9e72fe28d2ac7a8e_2 );

unset( $fe_key_c6b15ff416c3606f9e72fe28d2ac7a8e_2 );

unset( $fe_val_c6b15ff416c3606f9e72fe28d2ac7a8e_2 );

unset( $fe_offset_c6b15ff416c3606f9e72fe28d2ac7a8e_2 );

unset( $fe_max_c6b15ff416c3606f9e72fe28d2ac7a8e_2 );

unset( $fe_reverse_c6b15ff416c3606f9e72fe28d2ac7a8e_2 );

unset( $fe_first_val_c6b15ff416c3606f9e72fe28d2ac7a8e_2 );

unset( $fe_last_val_c6b15ff416c3606f9e72fe28d2ac7a8e_2 );

unset( $fe_variable_stack_c6b15ff416c3606f9e72fe28d2ac7a8e_2 );

}

// foreach ends
$text .= '
<h4 class="context-title">Section: ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'currentSectionName', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['currentSectionName'] : null;
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

$text .= ' [';
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'count',
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
        2 => 'sections',
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

$text .= ']</h4>';
// undef $currentSectionName
$tpl->unsetLocalVariable( 'currentSectionName', $rootNamespace );

$text .= '
</div></div>

<div class="box-bc"><div class="box-ml"><div class="box-content">


<div class="block">
    <label for="SelectedSectionId">Choose section:</label>
    <select id="SelectedSectionId" name="SelectedSectionId">
    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_c6b15ff416c3606f9e72fe28d2ac7a8e_3 ) ) $fe_variable_stack_c6b15ff416c3606f9e72fe28d2ac7a8e_3 = array();
$fe_variable_stack_c6b15ff416c3606f9e72fe28d2ac7a8e_3[] = compact( 'fe_array_c6b15ff416c3606f9e72fe28d2ac7a8e_3', 'fe_array_keys_c6b15ff416c3606f9e72fe28d2ac7a8e_3', 'fe_n_items_c6b15ff416c3606f9e72fe28d2ac7a8e_3', 'fe_n_items_processed_c6b15ff416c3606f9e72fe28d2ac7a8e_3', 'fe_i_c6b15ff416c3606f9e72fe28d2ac7a8e_3', 'fe_key_c6b15ff416c3606f9e72fe28d2ac7a8e_3', 'fe_val_c6b15ff416c3606f9e72fe28d2ac7a8e_3', 'fe_offset_c6b15ff416c3606f9e72fe28d2ac7a8e_3', 'fe_max_c6b15ff416c3606f9e72fe28d2ac7a8e_3', 'fe_reverse_c6b15ff416c3606f9e72fe28d2ac7a8e_3', 'fe_first_val_c6b15ff416c3606f9e72fe28d2ac7a8e_3', 'fe_last_val_c6b15ff416c3606f9e72fe28d2ac7a8e_3' );
unset( $fe_array_c6b15ff416c3606f9e72fe28d2ac7a8e_3 );
unset( $fe_array_c6b15ff416c3606f9e72fe28d2ac7a8e_3 );
$fe_array_c6b15ff416c3606f9e72fe28d2ac7a8e_3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sections', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sections'] : null;
if (! isset( $fe_array_c6b15ff416c3606f9e72fe28d2ac7a8e_3 ) ) $fe_array_c6b15ff416c3606f9e72fe28d2ac7a8e_3 = NULL;
while ( is_object( $fe_array_c6b15ff416c3606f9e72fe28d2ac7a8e_3 ) and method_exists( $fe_array_c6b15ff416c3606f9e72fe28d2ac7a8e_3, 'templateValue' ) )
    $fe_array_c6b15ff416c3606f9e72fe28d2ac7a8e_3 = $fe_array_c6b15ff416c3606f9e72fe28d2ac7a8e_3->templateValue();

$fe_array_keys_c6b15ff416c3606f9e72fe28d2ac7a8e_3 = is_array( $fe_array_c6b15ff416c3606f9e72fe28d2ac7a8e_3 ) ? array_keys( $fe_array_c6b15ff416c3606f9e72fe28d2ac7a8e_3 ) : array();
$fe_n_items_c6b15ff416c3606f9e72fe28d2ac7a8e_3 = count( $fe_array_keys_c6b15ff416c3606f9e72fe28d2ac7a8e_3 );
$fe_n_items_processed_c6b15ff416c3606f9e72fe28d2ac7a8e_3 = 0;
$fe_offset_c6b15ff416c3606f9e72fe28d2ac7a8e_3 = 0;
$fe_max_c6b15ff416c3606f9e72fe28d2ac7a8e_3 = $fe_n_items_c6b15ff416c3606f9e72fe28d2ac7a8e_3 - $fe_offset_c6b15ff416c3606f9e72fe28d2ac7a8e_3;
$fe_reverse_c6b15ff416c3606f9e72fe28d2ac7a8e_3 = false;
if ( $fe_offset_c6b15ff416c3606f9e72fe28d2ac7a8e_3 < 0 || $fe_offset_c6b15ff416c3606f9e72fe28d2ac7a8e_3 >= $fe_n_items_c6b15ff416c3606f9e72fe28d2ac7a8e_3 )
{
    $fe_offset_c6b15ff416c3606f9e72fe28d2ac7a8e_3 = ( $fe_offset_c6b15ff416c3606f9e72fe28d2ac7a8e_3 < 0 ) ? 0 : $fe_n_items_c6b15ff416c3606f9e72fe28d2ac7a8e_3;
    if ( $fe_n_items_c6b15ff416c3606f9e72fe28d2ac7a8e_3 || $fe_offset_c6b15ff416c3606f9e72fe28d2ac7a8e_3 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_c6b15ff416c3606f9e72fe28d2ac7a8e_3'. Array count: $fe_n_items_c6b15ff416c3606f9e72fe28d2ac7a8e_3");   
}
}
if ( $fe_max_c6b15ff416c3606f9e72fe28d2ac7a8e_3 < 0 || $fe_offset_c6b15ff416c3606f9e72fe28d2ac7a8e_3 + $fe_max_c6b15ff416c3606f9e72fe28d2ac7a8e_3 > $fe_n_items_c6b15ff416c3606f9e72fe28d2ac7a8e_3 )
{
    if ( $fe_max_c6b15ff416c3606f9e72fe28d2ac7a8e_3 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_c6b15ff416c3606f9e72fe28d2ac7a8e_3");
    $fe_max_c6b15ff416c3606f9e72fe28d2ac7a8e_3 = $fe_n_items_c6b15ff416c3606f9e72fe28d2ac7a8e_3 - $fe_offset_c6b15ff416c3606f9e72fe28d2ac7a8e_3;
}
if ( $fe_reverse_c6b15ff416c3606f9e72fe28d2ac7a8e_3 )
{
    $fe_first_val_c6b15ff416c3606f9e72fe28d2ac7a8e_3 = $fe_n_items_c6b15ff416c3606f9e72fe28d2ac7a8e_3 - 1 - $fe_offset_c6b15ff416c3606f9e72fe28d2ac7a8e_3;
    $fe_last_val_c6b15ff416c3606f9e72fe28d2ac7a8e_3  = 0;
}
else
{
    $fe_first_val_c6b15ff416c3606f9e72fe28d2ac7a8e_3 = $fe_offset_c6b15ff416c3606f9e72fe28d2ac7a8e_3;
    $fe_last_val_c6b15ff416c3606f9e72fe28d2ac7a8e_3  = $fe_n_items_c6b15ff416c3606f9e72fe28d2ac7a8e_3 - 1;
}
// foreach
for ( $fe_i_c6b15ff416c3606f9e72fe28d2ac7a8e_3 = $fe_first_val_c6b15ff416c3606f9e72fe28d2ac7a8e_3; $fe_n_items_processed_c6b15ff416c3606f9e72fe28d2ac7a8e_3 < $fe_max_c6b15ff416c3606f9e72fe28d2ac7a8e_3 && ( $fe_reverse_c6b15ff416c3606f9e72fe28d2ac7a8e_3 ? $fe_i_c6b15ff416c3606f9e72fe28d2ac7a8e_3 >= $fe_last_val_c6b15ff416c3606f9e72fe28d2ac7a8e_3 : $fe_i_c6b15ff416c3606f9e72fe28d2ac7a8e_3 <= $fe_last_val_c6b15ff416c3606f9e72fe28d2ac7a8e_3 ); $fe_reverse_c6b15ff416c3606f9e72fe28d2ac7a8e_3 ? $fe_i_c6b15ff416c3606f9e72fe28d2ac7a8e_3-- : $fe_i_c6b15ff416c3606f9e72fe28d2ac7a8e_3++ )
{
$fe_key_c6b15ff416c3606f9e72fe28d2ac7a8e_3 = $fe_array_keys_c6b15ff416c3606f9e72fe28d2ac7a8e_3[$fe_i_c6b15ff416c3606f9e72fe28d2ac7a8e_3];
$fe_val_c6b15ff416c3606f9e72fe28d2ac7a8e_3 = $fe_array_c6b15ff416c3606f9e72fe28d2ac7a8e_3[$fe_key_c6b15ff416c3606f9e72fe28d2ac7a8e_3];
$vars[$rootNamespace]['section'] = $fe_val_c6b15ff416c3606f9e72fe28d2ac7a8e_3;
$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'section', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['section'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'id' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'section_id' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond = ( ( $if_cond1 ) == ( $if_cond2 ) );
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <option value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'section', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['section'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" selected="selected">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'section', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['section'] : null;
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
}
else
{
$text .= '        <option value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'section', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['section'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'section', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['section'] : null;
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
}
unset( $if_cond );
// if ends

$text .= '    ';
$fe_n_items_processed_c6b15ff416c3606f9e72fe28d2ac7a8e_3++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_c6b15ff416c3606f9e72fe28d2ac7a8e_3 ) ) extract( array_pop( $fe_variable_stack_c6b15ff416c3606f9e72fe28d2ac7a8e_3 ) );

else
{

unset( $fe_array_c6b15ff416c3606f9e72fe28d2ac7a8e_3 );

unset( $fe_array_keys_c6b15ff416c3606f9e72fe28d2ac7a8e_3 );

unset( $fe_n_items_c6b15ff416c3606f9e72fe28d2ac7a8e_3 );

unset( $fe_n_items_processed_c6b15ff416c3606f9e72fe28d2ac7a8e_3 );

unset( $fe_i_c6b15ff416c3606f9e72fe28d2ac7a8e_3 );

unset( $fe_key_c6b15ff416c3606f9e72fe28d2ac7a8e_3 );

unset( $fe_val_c6b15ff416c3606f9e72fe28d2ac7a8e_3 );

unset( $fe_offset_c6b15ff416c3606f9e72fe28d2ac7a8e_3 );

unset( $fe_max_c6b15ff416c3606f9e72fe28d2ac7a8e_3 );

unset( $fe_reverse_c6b15ff416c3606f9e72fe28d2ac7a8e_3 );

unset( $fe_first_val_c6b15ff416c3606f9e72fe28d2ac7a8e_3 );

unset( $fe_last_val_c6b15ff416c3606f9e72fe28d2ac7a8e_3 );

unset( $fe_variable_stack_c6b15ff416c3606f9e72fe28d2ac7a8e_3 );

}

// foreach ends
$text .= '    </select>
</div>

<div class="block">
<input type="submit" value="Set" name="SectionEditButton" class="button" />
</div>
</div></div></div>


';

$setArray = $oldSetArray_edc1a8c7dd9bd4bf79e313ac67926013;
$tpl->Level--;
?>
