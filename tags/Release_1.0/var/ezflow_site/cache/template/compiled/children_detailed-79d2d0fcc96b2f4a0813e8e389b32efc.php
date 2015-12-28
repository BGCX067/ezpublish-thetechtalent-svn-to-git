<?php
// URI:       design/admin2/templates/children_detailed.tpl
// Filename:  design/admin2/templates/children_detailed.tpl
// Timestamp: 1285696602 (Tue Sep 28 10:56:42 MST 2010)
$oldSetArray_d650ce99cbc8cb5d5b80122f13db9eee = isset( $setArray ) ? $setArray : array();
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

// def $section
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'section_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZSectionFunctionCollection(), 'fetchSectionObject' ),
  array(     'section_id' => $var1,
    'identifier' => false ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'section', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'section' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 3,
    1 => 63,
    2 => 245,
  ),
  2 => 'design/admin2/templates/children_detailed.tpl',
) );
    $tpl->setVariable( 'section', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'section', $var, $rootNamespace );
}

// def $visible_columns
if ( $tpl->hasVariable( 'visible_columns', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'visible_columns' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 3,
    1 => 63,
    2 => 245,
  ),
  2 => 'design/admin2/templates/children_detailed.tpl',
) );
    $tpl->setVariable( 'visible_columns', array (
  'ezcontentnavigationpart' => 'checkbox;crank;name;hidden_status_string;published_date;priority',
  'ezmedianavigationpart' => 'checkbox;crank;thumbnail;name;hidden_status_string;class_name',
  'ezusernavigationpart' => 'checkbox;crank;name;creator;published_date',
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'visible_columns', array (
  'ezcontentnavigationpart' => 'checkbox;crank;name;hidden_status_string;published_date;priority',
  'ezmedianavigationpart' => 'checkbox;crank;thumbnail;name;hidden_status_string;class_name',
  'ezusernavigationpart' => 'checkbox;crank;name;creator;published_date',
), $rootNamespace );
}

// def $locales
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchTranslationList' ),
  array(  ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'locales', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'locales' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 3,
    1 => 63,
    2 => 245,
  ),
  2 => 'design/admin2/templates/children_detailed.tpl',
) );
    $tpl->setVariable( 'locales', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'locales', $var, $rootNamespace );
}

$text .= '

<script type="text/javascript">
(function() {


var icons = {';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_dbebccfb075865fcd879702972f4abaa_15 ) ) $fe_variable_stack_dbebccfb075865fcd879702972f4abaa_15 = array();
$fe_variable_stack_dbebccfb075865fcd879702972f4abaa_15[] = compact( 'fe_array_dbebccfb075865fcd879702972f4abaa_15', 'fe_array_keys_dbebccfb075865fcd879702972f4abaa_15', 'fe_n_items_dbebccfb075865fcd879702972f4abaa_15', 'fe_n_items_processed_dbebccfb075865fcd879702972f4abaa_15', 'fe_i_dbebccfb075865fcd879702972f4abaa_15', 'fe_key_dbebccfb075865fcd879702972f4abaa_15', 'fe_val_dbebccfb075865fcd879702972f4abaa_15', 'fe_offset_dbebccfb075865fcd879702972f4abaa_15', 'fe_max_dbebccfb075865fcd879702972f4abaa_15', 'fe_reverse_dbebccfb075865fcd879702972f4abaa_15', 'fe_first_val_dbebccfb075865fcd879702972f4abaa_15', 'fe_last_val_dbebccfb075865fcd879702972f4abaa_15' );
unset( $fe_array_dbebccfb075865fcd879702972f4abaa_15 );
unset( $fe_array_dbebccfb075865fcd879702972f4abaa_15 );
$fe_array_dbebccfb075865fcd879702972f4abaa_15 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locales', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locales'] : null;
if (! isset( $fe_array_dbebccfb075865fcd879702972f4abaa_15 ) ) $fe_array_dbebccfb075865fcd879702972f4abaa_15 = NULL;
while ( is_object( $fe_array_dbebccfb075865fcd879702972f4abaa_15 ) and method_exists( $fe_array_dbebccfb075865fcd879702972f4abaa_15, 'templateValue' ) )
    $fe_array_dbebccfb075865fcd879702972f4abaa_15 = $fe_array_dbebccfb075865fcd879702972f4abaa_15->templateValue();

$fe_array_keys_dbebccfb075865fcd879702972f4abaa_15 = is_array( $fe_array_dbebccfb075865fcd879702972f4abaa_15 ) ? array_keys( $fe_array_dbebccfb075865fcd879702972f4abaa_15 ) : array();
$fe_n_items_dbebccfb075865fcd879702972f4abaa_15 = count( $fe_array_keys_dbebccfb075865fcd879702972f4abaa_15 );
$fe_n_items_processed_dbebccfb075865fcd879702972f4abaa_15 = 0;
$fe_offset_dbebccfb075865fcd879702972f4abaa_15 = 0;
$fe_max_dbebccfb075865fcd879702972f4abaa_15 = $fe_n_items_dbebccfb075865fcd879702972f4abaa_15 - $fe_offset_dbebccfb075865fcd879702972f4abaa_15;
$fe_reverse_dbebccfb075865fcd879702972f4abaa_15 = false;
if ( $fe_offset_dbebccfb075865fcd879702972f4abaa_15 < 0 || $fe_offset_dbebccfb075865fcd879702972f4abaa_15 >= $fe_n_items_dbebccfb075865fcd879702972f4abaa_15 )
{
    $fe_offset_dbebccfb075865fcd879702972f4abaa_15 = ( $fe_offset_dbebccfb075865fcd879702972f4abaa_15 < 0 ) ? 0 : $fe_n_items_dbebccfb075865fcd879702972f4abaa_15;
    if ( $fe_n_items_dbebccfb075865fcd879702972f4abaa_15 || $fe_offset_dbebccfb075865fcd879702972f4abaa_15 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_dbebccfb075865fcd879702972f4abaa_15'. Array count: $fe_n_items_dbebccfb075865fcd879702972f4abaa_15");   
}
}
if ( $fe_max_dbebccfb075865fcd879702972f4abaa_15 < 0 || $fe_offset_dbebccfb075865fcd879702972f4abaa_15 + $fe_max_dbebccfb075865fcd879702972f4abaa_15 > $fe_n_items_dbebccfb075865fcd879702972f4abaa_15 )
{
    if ( $fe_max_dbebccfb075865fcd879702972f4abaa_15 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_dbebccfb075865fcd879702972f4abaa_15");
    $fe_max_dbebccfb075865fcd879702972f4abaa_15 = $fe_n_items_dbebccfb075865fcd879702972f4abaa_15 - $fe_offset_dbebccfb075865fcd879702972f4abaa_15;
}
if ( $fe_reverse_dbebccfb075865fcd879702972f4abaa_15 )
{
    $fe_first_val_dbebccfb075865fcd879702972f4abaa_15 = $fe_n_items_dbebccfb075865fcd879702972f4abaa_15 - 1 - $fe_offset_dbebccfb075865fcd879702972f4abaa_15;
    $fe_last_val_dbebccfb075865fcd879702972f4abaa_15  = 0;
}
else
{
    $fe_first_val_dbebccfb075865fcd879702972f4abaa_15 = $fe_offset_dbebccfb075865fcd879702972f4abaa_15;
    $fe_last_val_dbebccfb075865fcd879702972f4abaa_15  = $fe_n_items_dbebccfb075865fcd879702972f4abaa_15 - 1;
}
// foreach
for ( $fe_i_dbebccfb075865fcd879702972f4abaa_15 = $fe_first_val_dbebccfb075865fcd879702972f4abaa_15; $fe_n_items_processed_dbebccfb075865fcd879702972f4abaa_15 < $fe_max_dbebccfb075865fcd879702972f4abaa_15 && ( $fe_reverse_dbebccfb075865fcd879702972f4abaa_15 ? $fe_i_dbebccfb075865fcd879702972f4abaa_15 >= $fe_last_val_dbebccfb075865fcd879702972f4abaa_15 : $fe_i_dbebccfb075865fcd879702972f4abaa_15 <= $fe_last_val_dbebccfb075865fcd879702972f4abaa_15 ); $fe_reverse_dbebccfb075865fcd879702972f4abaa_15 ? $fe_i_dbebccfb075865fcd879702972f4abaa_15-- : $fe_i_dbebccfb075865fcd879702972f4abaa_15++ )
{
$fe_key_dbebccfb075865fcd879702972f4abaa_15 = $fe_array_keys_dbebccfb075865fcd879702972f4abaa_15[$fe_i_dbebccfb075865fcd879702972f4abaa_15];
$fe_val_dbebccfb075865fcd879702972f4abaa_15 = $fe_array_dbebccfb075865fcd879702972f4abaa_15[$fe_key_dbebccfb075865fcd879702972f4abaa_15];
$vars[$rootNamespace]['locale'] = $fe_val_dbebccfb075865fcd879702972f4abaa_15;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= ',
';
} // delimiter ends

$text .= '    \'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locale'] : null;
$var1 = compiledFetchAttribute( $var, 'locale_code' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\': \'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'locale', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['locale'] : null;
$var1 = compiledFetchAttribute( $var, 'locale_code' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'flag_icon',
                       array (
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\'';
$fe_n_items_processed_dbebccfb075865fcd879702972f4abaa_15++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_dbebccfb075865fcd879702972f4abaa_15 ) ) extract( array_pop( $fe_variable_stack_dbebccfb075865fcd879702972f4abaa_15 ) );

else
{

unset( $fe_array_dbebccfb075865fcd879702972f4abaa_15 );

unset( $fe_array_keys_dbebccfb075865fcd879702972f4abaa_15 );

unset( $fe_n_items_dbebccfb075865fcd879702972f4abaa_15 );

unset( $fe_n_items_processed_dbebccfb075865fcd879702972f4abaa_15 );

unset( $fe_i_dbebccfb075865fcd879702972f4abaa_15 );

unset( $fe_key_dbebccfb075865fcd879702972f4abaa_15 );

unset( $fe_val_dbebccfb075865fcd879702972f4abaa_15 );

unset( $fe_offset_dbebccfb075865fcd879702972f4abaa_15 );

unset( $fe_max_dbebccfb075865fcd879702972f4abaa_15 );

unset( $fe_reverse_dbebccfb075865fcd879702972f4abaa_15 );

unset( $fe_first_val_dbebccfb075865fcd879702972f4abaa_15 );

unset( $fe_last_val_dbebccfb075865fcd879702972f4abaa_15 );

unset( $fe_variable_stack_dbebccfb075865fcd879702972f4abaa_15 );

}

// foreach ends
$text .= '};

var vcols = {';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_dbebccfb075865fcd879702972f4abaa_16 ) ) $fe_variable_stack_dbebccfb075865fcd879702972f4abaa_16 = array();
$fe_variable_stack_dbebccfb075865fcd879702972f4abaa_16[] = compact( 'fe_array_dbebccfb075865fcd879702972f4abaa_16', 'fe_array_keys_dbebccfb075865fcd879702972f4abaa_16', 'fe_n_items_dbebccfb075865fcd879702972f4abaa_16', 'fe_n_items_processed_dbebccfb075865fcd879702972f4abaa_16', 'fe_i_dbebccfb075865fcd879702972f4abaa_16', 'fe_key_dbebccfb075865fcd879702972f4abaa_16', 'fe_val_dbebccfb075865fcd879702972f4abaa_16', 'fe_offset_dbebccfb075865fcd879702972f4abaa_16', 'fe_max_dbebccfb075865fcd879702972f4abaa_16', 'fe_reverse_dbebccfb075865fcd879702972f4abaa_16', 'fe_first_val_dbebccfb075865fcd879702972f4abaa_16', 'fe_last_val_dbebccfb075865fcd879702972f4abaa_16' );
unset( $fe_array_dbebccfb075865fcd879702972f4abaa_16 );
unset( $fe_array_dbebccfb075865fcd879702972f4abaa_16 );
$fe_array_dbebccfb075865fcd879702972f4abaa_16 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'visible_columns', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['visible_columns'] : null;
if (! isset( $fe_array_dbebccfb075865fcd879702972f4abaa_16 ) ) $fe_array_dbebccfb075865fcd879702972f4abaa_16 = NULL;
while ( is_object( $fe_array_dbebccfb075865fcd879702972f4abaa_16 ) and method_exists( $fe_array_dbebccfb075865fcd879702972f4abaa_16, 'templateValue' ) )
    $fe_array_dbebccfb075865fcd879702972f4abaa_16 = $fe_array_dbebccfb075865fcd879702972f4abaa_16->templateValue();

$fe_array_keys_dbebccfb075865fcd879702972f4abaa_16 = is_array( $fe_array_dbebccfb075865fcd879702972f4abaa_16 ) ? array_keys( $fe_array_dbebccfb075865fcd879702972f4abaa_16 ) : array();
$fe_n_items_dbebccfb075865fcd879702972f4abaa_16 = count( $fe_array_keys_dbebccfb075865fcd879702972f4abaa_16 );
$fe_n_items_processed_dbebccfb075865fcd879702972f4abaa_16 = 0;
$fe_offset_dbebccfb075865fcd879702972f4abaa_16 = 0;
$fe_max_dbebccfb075865fcd879702972f4abaa_16 = $fe_n_items_dbebccfb075865fcd879702972f4abaa_16 - $fe_offset_dbebccfb075865fcd879702972f4abaa_16;
$fe_reverse_dbebccfb075865fcd879702972f4abaa_16 = false;
if ( $fe_offset_dbebccfb075865fcd879702972f4abaa_16 < 0 || $fe_offset_dbebccfb075865fcd879702972f4abaa_16 >= $fe_n_items_dbebccfb075865fcd879702972f4abaa_16 )
{
    $fe_offset_dbebccfb075865fcd879702972f4abaa_16 = ( $fe_offset_dbebccfb075865fcd879702972f4abaa_16 < 0 ) ? 0 : $fe_n_items_dbebccfb075865fcd879702972f4abaa_16;
    if ( $fe_n_items_dbebccfb075865fcd879702972f4abaa_16 || $fe_offset_dbebccfb075865fcd879702972f4abaa_16 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_dbebccfb075865fcd879702972f4abaa_16'. Array count: $fe_n_items_dbebccfb075865fcd879702972f4abaa_16");   
}
}
if ( $fe_max_dbebccfb075865fcd879702972f4abaa_16 < 0 || $fe_offset_dbebccfb075865fcd879702972f4abaa_16 + $fe_max_dbebccfb075865fcd879702972f4abaa_16 > $fe_n_items_dbebccfb075865fcd879702972f4abaa_16 )
{
    if ( $fe_max_dbebccfb075865fcd879702972f4abaa_16 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_dbebccfb075865fcd879702972f4abaa_16");
    $fe_max_dbebccfb075865fcd879702972f4abaa_16 = $fe_n_items_dbebccfb075865fcd879702972f4abaa_16 - $fe_offset_dbebccfb075865fcd879702972f4abaa_16;
}
if ( $fe_reverse_dbebccfb075865fcd879702972f4abaa_16 )
{
    $fe_first_val_dbebccfb075865fcd879702972f4abaa_16 = $fe_n_items_dbebccfb075865fcd879702972f4abaa_16 - 1 - $fe_offset_dbebccfb075865fcd879702972f4abaa_16;
    $fe_last_val_dbebccfb075865fcd879702972f4abaa_16  = 0;
}
else
{
    $fe_first_val_dbebccfb075865fcd879702972f4abaa_16 = $fe_offset_dbebccfb075865fcd879702972f4abaa_16;
    $fe_last_val_dbebccfb075865fcd879702972f4abaa_16  = $fe_n_items_dbebccfb075865fcd879702972f4abaa_16 - 1;
}
// foreach
for ( $fe_i_dbebccfb075865fcd879702972f4abaa_16 = $fe_first_val_dbebccfb075865fcd879702972f4abaa_16; $fe_n_items_processed_dbebccfb075865fcd879702972f4abaa_16 < $fe_max_dbebccfb075865fcd879702972f4abaa_16 && ( $fe_reverse_dbebccfb075865fcd879702972f4abaa_16 ? $fe_i_dbebccfb075865fcd879702972f4abaa_16 >= $fe_last_val_dbebccfb075865fcd879702972f4abaa_16 : $fe_i_dbebccfb075865fcd879702972f4abaa_16 <= $fe_last_val_dbebccfb075865fcd879702972f4abaa_16 ); $fe_reverse_dbebccfb075865fcd879702972f4abaa_16 ? $fe_i_dbebccfb075865fcd879702972f4abaa_16-- : $fe_i_dbebccfb075865fcd879702972f4abaa_16++ )
{
$fe_key_dbebccfb075865fcd879702972f4abaa_16 = $fe_array_keys_dbebccfb075865fcd879702972f4abaa_16[$fe_i_dbebccfb075865fcd879702972f4abaa_16];
$fe_val_dbebccfb075865fcd879702972f4abaa_16 = $fe_array_dbebccfb075865fcd879702972f4abaa_16[$fe_key_dbebccfb075865fcd879702972f4abaa_16];
$vars[$rootNamespace]['object'] = $fe_val_dbebccfb075865fcd879702972f4abaa_16;
$vars[$rootNamespace]['index'] = $fe_key_dbebccfb075865fcd879702972f4abaa_16;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= ',
';
} // delimiter ends

$text .= '    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['index'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' : \'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\'.split(\';\')';
$fe_n_items_processed_dbebccfb075865fcd879702972f4abaa_16++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_dbebccfb075865fcd879702972f4abaa_16 ) ) extract( array_pop( $fe_variable_stack_dbebccfb075865fcd879702972f4abaa_16 ) );

else
{

unset( $fe_array_dbebccfb075865fcd879702972f4abaa_16 );

unset( $fe_array_keys_dbebccfb075865fcd879702972f4abaa_16 );

unset( $fe_n_items_dbebccfb075865fcd879702972f4abaa_16 );

unset( $fe_n_items_processed_dbebccfb075865fcd879702972f4abaa_16 );

unset( $fe_i_dbebccfb075865fcd879702972f4abaa_16 );

unset( $fe_key_dbebccfb075865fcd879702972f4abaa_16 );

unset( $fe_val_dbebccfb075865fcd879702972f4abaa_16 );

unset( $fe_offset_dbebccfb075865fcd879702972f4abaa_16 );

unset( $fe_max_dbebccfb075865fcd879702972f4abaa_16 );

unset( $fe_reverse_dbebccfb075865fcd879702972f4abaa_16 );

unset( $fe_first_val_dbebccfb075865fcd879702972f4abaa_16 );

unset( $fe_last_val_dbebccfb075865fcd879702972f4abaa_16 );

unset( $fe_variable_stack_dbebccfb075865fcd879702972f4abaa_16 );

}

// foreach ends
$text .= '};


var confObj = {
';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'sort_field' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['match'] = $var;
unset( $var );
unset( $match );
unset( $match );
$match = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$match1 = compiledFetchAttribute( $match, 'sort_field' );
unset( $match );
$match = $match1;
if (! isset( $match ) ) $match = NULL;
while ( is_object( $match ) and method_exists( $match, 'templateValue' ) )
    $match = $match->templateValue();

switch ( $match )
{
    case "2":
    {
$text .= '    sortKey: "published_date",';
    } break;
    case "3":
    {
$text .= '    sortKey: "modified_date",';
    } break;
    case "4":
    {
$text .= '    sortKey: "section",';
    } break;
    case "7":
    {
$text .= '    sortKey: "class_name",';
    } break;
    case "8":
    {
$text .= '    sortKey: "priority",';
    } break;
    case "9":
    {
$text .= '    sortKey: "name",';
    } break;
    default:
    {
$text .= '    sortKey: "published_date",';
    } break;
}
unset( $match );

unset( $vars[$currentNamespace]['match'] );
$text .= '
    dataSourceURL: "';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var4 = compiledFetchAttribute( $var3, 'node_id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( 'ezjscore/call/ezjscnode::subtree::' . $var3 );
unset( $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

//include_once( 'lib/ezutils/classes/ezuri.php' );
eZURI::transformURI( $var1, false, 'relative' );
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
    rowsPrPage: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'number_of_items', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['number_of_items'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ',
    sortOrder: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'sort_order' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ',
    defaultShownColumns: vcols,
    navigationPart: "';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'section', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['section'] : null;
$var1 = compiledFetchAttribute( $var, 'navigation_part_identifier' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '",
    cookieName: "eZSubitemColumns",
    cookieSecure: false,
    cookieDomain: "admin.the-tech-talent.com",
    languagesString: "';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'language_js_array' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '",
    classesString: "';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'classes_js_array' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '",
    flagIcons: icons
}

var labelsObj = {

    DATA_TABLE: {
                        msg_loading: "';
unset( $var );
$var = 'Loading ...' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"
                    },

    DATA_TABLE_COLS: {
                        thumbnail: "';
unset( $var );
$var = 'Thumbnail' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        name: "';
unset( $var );
$var = 'Name' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        visibility: "';
unset( $var );
$var = 'Visibility' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        type: "';
unset( $var );
$var = 'Type' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        modifier: "';
unset( $var );
$var = 'Modifier' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        modified: "';
unset( $var );
$var = 'Modified' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        published: "';
unset( $var );
$var = 'Published' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        section: "';
unset( $var );
$var = 'Section' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        translations: "';
unset( $var );
$var = 'Translations' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        priority: "';
unset( $var );
$var = 'Priority' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        nodeid: "';
unset( $var );
$var = 'Node ID' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        objectid: "';
unset( $var );
$var = 'Object ID' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        noderemoteid: "';
unset( $var );
$var = 'Node remote ID' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        objectremoteid: "';
unset( $var );
$var = 'Object remote ID' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"
                    },

    TABLE_OPTIONS: {
                        header: "';
unset( $var );
$var = 'Table options' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        header_noipp: "';
unset( $var );
$var = 'Number of items per page:' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        header_vtc: "';
unset( $var );
$var = 'Visible table columns:' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"
                   },

    ACTION_BUTTONS: {
                        select: "';
unset( $var );
$var = 'Select' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        select_sav: "';
unset( $var );
$var = 'Select all visible' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        select_sn: "';
unset( $var );
$var = 'Select none' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        create_new: "';
unset( $var );
$var = 'Create new' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        more_actions: "';
unset( $var );
$var = 'More actions' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        more_actions_rs: "';
unset( $var );
$var = 'Remove selected' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        more_actions_ms: "';
unset( $var );
$var = 'Move selected' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        more_actions_no: "';
unset( $var );
$var = 'Use the checkboxes to select one or more items.' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        table_options: "';
unset( $var );
$var = 'Table options' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        first_page: "&laquo;&nbsp;';
unset( $var );
$var = 'first' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        previous_page: "&lsaquo;&nbsp;';
unset( $var );
$var = 'prev' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",
                        next_page: "';
unset( $var );
$var = 'next' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '&nbsp;&rsaquo;",
                        last_page: "';
unset( $var );
$var = 'last' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '&nbsp;&raquo;"
                    }
};
';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'is_container' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'can_create' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
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
$text .= '    ';
unset( $elseif_cond_dbebccfb075865fcd879702972f4abaa_103 );
unset( $elseif_cond_dbebccfb075865fcd879702972f4abaa_1031 );
unset( $elseif_cond_dbebccfb075865fcd879702972f4abaa_1031 );
$elseif_cond_dbebccfb075865fcd879702972f4abaa_1031 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$elseif_cond_dbebccfb075865fcd879702972f4abaa_1032 = compiledFetchAttribute( $elseif_cond_dbebccfb075865fcd879702972f4abaa_1031, 'path_array' );
unset( $elseif_cond_dbebccfb075865fcd879702972f4abaa_1031 );
$elseif_cond_dbebccfb075865fcd879702972f4abaa_1031 = $elseif_cond_dbebccfb075865fcd879702972f4abaa_1032;
if (! isset( $elseif_cond_dbebccfb075865fcd879702972f4abaa_1031 ) ) $elseif_cond_dbebccfb075865fcd879702972f4abaa_1031 = NULL;
while ( is_object( $elseif_cond_dbebccfb075865fcd879702972f4abaa_1031 ) and method_exists( $elseif_cond_dbebccfb075865fcd879702972f4abaa_1031, 'templateValue' ) )
    $elseif_cond_dbebccfb075865fcd879702972f4abaa_1031 = $elseif_cond_dbebccfb075865fcd879702972f4abaa_1031->templateValue();
while ( is_object( $elseif_cond_dbebccfb075865fcd879702972f4abaa_1031 ) and method_exists( $elseif_cond_dbebccfb075865fcd879702972f4abaa_1031, 'templateValue' ) )
    $elseif_cond_dbebccfb075865fcd879702972f4abaa_1031 = $elseif_cond_dbebccfb075865fcd879702972f4abaa_1031->templateValue();
if( is_string( $elseif_cond_dbebccfb075865fcd879702972f4abaa_1031 ) )
{
  $elseif_cond_dbebccfb075865fcd879702972f4abaa_103 = ( strpos( $elseif_cond_dbebccfb075865fcd879702972f4abaa_1031, "5" ) !== false );
}
else if ( is_array( $elseif_cond_dbebccfb075865fcd879702972f4abaa_1031 ) )
{
  $elseif_cond_dbebccfb075865fcd879702972f4abaa_103 = in_array( "5", $elseif_cond_dbebccfb075865fcd879702972f4abaa_1031 );
}
else
{
$elseif_cond_dbebccfb075865fcd879702972f4abaa_103 = false;
}unset( $elseif_cond_dbebccfb075865fcd879702972f4abaa_1031 );
if (! isset( $elseif_cond_dbebccfb075865fcd879702972f4abaa_103 ) ) $elseif_cond_dbebccfb075865fcd879702972f4abaa_103 = NULL;
while ( is_object( $elseif_cond_dbebccfb075865fcd879702972f4abaa_103 ) and method_exists( $elseif_cond_dbebccfb075865fcd879702972f4abaa_103, 'templateValue' ) )
    $elseif_cond_dbebccfb075865fcd879702972f4abaa_103 = $elseif_cond_dbebccfb075865fcd879702972f4abaa_103->templateValue();

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'path_array' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
if( is_string( $if_cond1 ) )
{
  $if_cond = ( strpos( $if_cond1, "43" ) !== false );
}
else if ( is_array( $if_cond1 ) )
{
  $if_cond = in_array( "43", $if_cond1 );
}
else
{
$if_cond = false;
}unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
// def $group_id
if ( $tpl->hasVariable( 'group_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'group_id' is already defined.", array (
  0 => 
  array (
    0 => 114,
    1 => 8,
    2 => 5507,
  ),
  1 => 
  array (
    0 => 115,
    1 => 82,
    2 => 5662,
  ),
  2 => 'design/admin2/templates/children_detailed.tpl',
) );
    $tpl->setVariable( 'group_id', array (
  0 => '2',
  1 => '4',
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'group_id', array (
  0 => '2',
  1 => '4',
), $rootNamespace );
}

$text .= '    ';
}
elseif ( $elseif_cond_dbebccfb075865fcd879702972f4abaa_103 )
{
$text .= '        ';
// def $group_id
if ( $tpl->hasVariable( 'group_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'group_id' is already defined.", array (
  0 => 
  array (
    0 => 117,
    1 => 8,
    2 => 5770,
  ),
  1 => 
  array (
    0 => 119,
    1 => 82,
    2 => 6009,
  ),
  2 => 'design/admin2/templates/children_detailed.tpl',
) );
    $tpl->setVariable( 'group_id', array (
  0 => '4',
  1 => '1',
  2 => '3',
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'group_id', array (
  0 => '4',
  1 => '1',
  2 => '3',
), $rootNamespace );
}

$text .= '    ';
}
else
{
$text .= '        ';
// def $group_id
if ( $tpl->hasVariable( 'group_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'group_id' is already defined.", array (
  0 => 
  array (
    0 => 121,
    1 => 8,
    2 => 6031,
  ),
  1 => 
  array (
    0 => 121,
    1 => 31,
    2 => 6054,
  ),
  2 => 'design/admin2/templates/children_detailed.tpl',
) );
    $tpl->setVariable( 'group_id', false, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'group_id', false, $rootNamespace );
}

$text .= '    ';
}
unset( $if_cond );
// if ends

unset( $elseif_cond_dbebccfb075865fcd879702972f4abaa_103 );

$text .= '
    ';
// def $can_create_classes
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'group_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['group_id'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'canInstantiateClassList' ),
  array(     'group_id' => $var1,
    'parent_node' => $var2,
    'filter_type' => "exclude",
    'fetch_id' => false,
    'as_object' => true,
    'group_by_class_group' => true ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'can_create_classes', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'can_create_classes' is already defined.", array (
  0 => 
  array (
    0 => 124,
    1 => 4,
    2 => 6072,
  ),
  1 => 
  array (
    0 => 127,
    1 => 119,
    2 => 6512,
  ),
  2 => 'design/admin2/templates/children_detailed.tpl',
) );
    $tpl->setVariable( 'can_create_classes', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'can_create_classes', $var, $rootNamespace );
}

$text .= '
    var createGroups = [
    
    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_dbebccfb075865fcd879702972f4abaa_17 ) ) $fe_variable_stack_dbebccfb075865fcd879702972f4abaa_17 = array();
$fe_variable_stack_dbebccfb075865fcd879702972f4abaa_17[] = compact( 'fe_array_dbebccfb075865fcd879702972f4abaa_17', 'fe_array_keys_dbebccfb075865fcd879702972f4abaa_17', 'fe_n_items_dbebccfb075865fcd879702972f4abaa_17', 'fe_n_items_processed_dbebccfb075865fcd879702972f4abaa_17', 'fe_i_dbebccfb075865fcd879702972f4abaa_17', 'fe_key_dbebccfb075865fcd879702972f4abaa_17', 'fe_val_dbebccfb075865fcd879702972f4abaa_17', 'fe_offset_dbebccfb075865fcd879702972f4abaa_17', 'fe_max_dbebccfb075865fcd879702972f4abaa_17', 'fe_reverse_dbebccfb075865fcd879702972f4abaa_17', 'fe_first_val_dbebccfb075865fcd879702972f4abaa_17', 'fe_last_val_dbebccfb075865fcd879702972f4abaa_17' );
unset( $fe_array_dbebccfb075865fcd879702972f4abaa_17 );
unset( $fe_array_dbebccfb075865fcd879702972f4abaa_17 );
$fe_array_dbebccfb075865fcd879702972f4abaa_17 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_create_classes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_create_classes'] : null;
if (! isset( $fe_array_dbebccfb075865fcd879702972f4abaa_17 ) ) $fe_array_dbebccfb075865fcd879702972f4abaa_17 = NULL;
while ( is_object( $fe_array_dbebccfb075865fcd879702972f4abaa_17 ) and method_exists( $fe_array_dbebccfb075865fcd879702972f4abaa_17, 'templateValue' ) )
    $fe_array_dbebccfb075865fcd879702972f4abaa_17 = $fe_array_dbebccfb075865fcd879702972f4abaa_17->templateValue();

$fe_array_keys_dbebccfb075865fcd879702972f4abaa_17 = is_array( $fe_array_dbebccfb075865fcd879702972f4abaa_17 ) ? array_keys( $fe_array_dbebccfb075865fcd879702972f4abaa_17 ) : array();
$fe_n_items_dbebccfb075865fcd879702972f4abaa_17 = count( $fe_array_keys_dbebccfb075865fcd879702972f4abaa_17 );
$fe_n_items_processed_dbebccfb075865fcd879702972f4abaa_17 = 0;
$fe_offset_dbebccfb075865fcd879702972f4abaa_17 = 0;
$fe_max_dbebccfb075865fcd879702972f4abaa_17 = $fe_n_items_dbebccfb075865fcd879702972f4abaa_17 - $fe_offset_dbebccfb075865fcd879702972f4abaa_17;
$fe_reverse_dbebccfb075865fcd879702972f4abaa_17 = false;
if ( $fe_offset_dbebccfb075865fcd879702972f4abaa_17 < 0 || $fe_offset_dbebccfb075865fcd879702972f4abaa_17 >= $fe_n_items_dbebccfb075865fcd879702972f4abaa_17 )
{
    $fe_offset_dbebccfb075865fcd879702972f4abaa_17 = ( $fe_offset_dbebccfb075865fcd879702972f4abaa_17 < 0 ) ? 0 : $fe_n_items_dbebccfb075865fcd879702972f4abaa_17;
    if ( $fe_n_items_dbebccfb075865fcd879702972f4abaa_17 || $fe_offset_dbebccfb075865fcd879702972f4abaa_17 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_dbebccfb075865fcd879702972f4abaa_17'. Array count: $fe_n_items_dbebccfb075865fcd879702972f4abaa_17");   
}
}
if ( $fe_max_dbebccfb075865fcd879702972f4abaa_17 < 0 || $fe_offset_dbebccfb075865fcd879702972f4abaa_17 + $fe_max_dbebccfb075865fcd879702972f4abaa_17 > $fe_n_items_dbebccfb075865fcd879702972f4abaa_17 )
{
    if ( $fe_max_dbebccfb075865fcd879702972f4abaa_17 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_dbebccfb075865fcd879702972f4abaa_17");
    $fe_max_dbebccfb075865fcd879702972f4abaa_17 = $fe_n_items_dbebccfb075865fcd879702972f4abaa_17 - $fe_offset_dbebccfb075865fcd879702972f4abaa_17;
}
if ( $fe_reverse_dbebccfb075865fcd879702972f4abaa_17 )
{
    $fe_first_val_dbebccfb075865fcd879702972f4abaa_17 = $fe_n_items_dbebccfb075865fcd879702972f4abaa_17 - 1 - $fe_offset_dbebccfb075865fcd879702972f4abaa_17;
    $fe_last_val_dbebccfb075865fcd879702972f4abaa_17  = 0;
}
else
{
    $fe_first_val_dbebccfb075865fcd879702972f4abaa_17 = $fe_offset_dbebccfb075865fcd879702972f4abaa_17;
    $fe_last_val_dbebccfb075865fcd879702972f4abaa_17  = $fe_n_items_dbebccfb075865fcd879702972f4abaa_17 - 1;
}
// foreach
for ( $fe_i_dbebccfb075865fcd879702972f4abaa_17 = $fe_first_val_dbebccfb075865fcd879702972f4abaa_17; $fe_n_items_processed_dbebccfb075865fcd879702972f4abaa_17 < $fe_max_dbebccfb075865fcd879702972f4abaa_17 && ( $fe_reverse_dbebccfb075865fcd879702972f4abaa_17 ? $fe_i_dbebccfb075865fcd879702972f4abaa_17 >= $fe_last_val_dbebccfb075865fcd879702972f4abaa_17 : $fe_i_dbebccfb075865fcd879702972f4abaa_17 <= $fe_last_val_dbebccfb075865fcd879702972f4abaa_17 ); $fe_reverse_dbebccfb075865fcd879702972f4abaa_17 ? $fe_i_dbebccfb075865fcd879702972f4abaa_17-- : $fe_i_dbebccfb075865fcd879702972f4abaa_17++ )
{
$fe_key_dbebccfb075865fcd879702972f4abaa_17 = $fe_array_keys_dbebccfb075865fcd879702972f4abaa_17[$fe_i_dbebccfb075865fcd879702972f4abaa_17];
$fe_val_dbebccfb075865fcd879702972f4abaa_17 = $fe_array_dbebccfb075865fcd879702972f4abaa_17[$fe_key_dbebccfb075865fcd879702972f4abaa_17];
$vars[$rootNamespace]['group'] = $fe_val_dbebccfb075865fcd879702972f4abaa_17;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= '        ,
        ';
} // delimiter ends

$text .= '        "';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'group', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['group'] : null;
$var1 = compiledFetchAttribute( $var, 'group_name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '"
            ';
$fe_n_items_processed_dbebccfb075865fcd879702972f4abaa_17++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_dbebccfb075865fcd879702972f4abaa_17 ) ) extract( array_pop( $fe_variable_stack_dbebccfb075865fcd879702972f4abaa_17 ) );

else
{

unset( $fe_array_dbebccfb075865fcd879702972f4abaa_17 );

unset( $fe_array_keys_dbebccfb075865fcd879702972f4abaa_17 );

unset( $fe_n_items_dbebccfb075865fcd879702972f4abaa_17 );

unset( $fe_n_items_processed_dbebccfb075865fcd879702972f4abaa_17 );

unset( $fe_i_dbebccfb075865fcd879702972f4abaa_17 );

unset( $fe_key_dbebccfb075865fcd879702972f4abaa_17 );

unset( $fe_val_dbebccfb075865fcd879702972f4abaa_17 );

unset( $fe_offset_dbebccfb075865fcd879702972f4abaa_17 );

unset( $fe_max_dbebccfb075865fcd879702972f4abaa_17 );

unset( $fe_reverse_dbebccfb075865fcd879702972f4abaa_17 );

unset( $fe_first_val_dbebccfb075865fcd879702972f4abaa_17 );

unset( $fe_last_val_dbebccfb075865fcd879702972f4abaa_17 );

unset( $fe_variable_stack_dbebccfb075865fcd879702972f4abaa_17 );

}

// foreach ends
$text .= '    
    ];
    
    var createOptions = [
    
    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_dbebccfb075865fcd879702972f4abaa_19 ) ) $fe_variable_stack_dbebccfb075865fcd879702972f4abaa_19 = array();
$fe_variable_stack_dbebccfb075865fcd879702972f4abaa_19[] = compact( 'fe_array_dbebccfb075865fcd879702972f4abaa_19', 'fe_array_keys_dbebccfb075865fcd879702972f4abaa_19', 'fe_n_items_dbebccfb075865fcd879702972f4abaa_19', 'fe_n_items_processed_dbebccfb075865fcd879702972f4abaa_19', 'fe_i_dbebccfb075865fcd879702972f4abaa_19', 'fe_key_dbebccfb075865fcd879702972f4abaa_19', 'fe_val_dbebccfb075865fcd879702972f4abaa_19', 'fe_offset_dbebccfb075865fcd879702972f4abaa_19', 'fe_max_dbebccfb075865fcd879702972f4abaa_19', 'fe_reverse_dbebccfb075865fcd879702972f4abaa_19', 'fe_first_val_dbebccfb075865fcd879702972f4abaa_19', 'fe_last_val_dbebccfb075865fcd879702972f4abaa_19' );
unset( $fe_array_dbebccfb075865fcd879702972f4abaa_19 );
unset( $fe_array_dbebccfb075865fcd879702972f4abaa_19 );
$fe_array_dbebccfb075865fcd879702972f4abaa_19 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_create_classes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_create_classes'] : null;
if (! isset( $fe_array_dbebccfb075865fcd879702972f4abaa_19 ) ) $fe_array_dbebccfb075865fcd879702972f4abaa_19 = NULL;
while ( is_object( $fe_array_dbebccfb075865fcd879702972f4abaa_19 ) and method_exists( $fe_array_dbebccfb075865fcd879702972f4abaa_19, 'templateValue' ) )
    $fe_array_dbebccfb075865fcd879702972f4abaa_19 = $fe_array_dbebccfb075865fcd879702972f4abaa_19->templateValue();

$fe_array_keys_dbebccfb075865fcd879702972f4abaa_19 = is_array( $fe_array_dbebccfb075865fcd879702972f4abaa_19 ) ? array_keys( $fe_array_dbebccfb075865fcd879702972f4abaa_19 ) : array();
$fe_n_items_dbebccfb075865fcd879702972f4abaa_19 = count( $fe_array_keys_dbebccfb075865fcd879702972f4abaa_19 );
$fe_n_items_processed_dbebccfb075865fcd879702972f4abaa_19 = 0;
$fe_offset_dbebccfb075865fcd879702972f4abaa_19 = 0;
$fe_max_dbebccfb075865fcd879702972f4abaa_19 = $fe_n_items_dbebccfb075865fcd879702972f4abaa_19 - $fe_offset_dbebccfb075865fcd879702972f4abaa_19;
$fe_reverse_dbebccfb075865fcd879702972f4abaa_19 = false;
if ( $fe_offset_dbebccfb075865fcd879702972f4abaa_19 < 0 || $fe_offset_dbebccfb075865fcd879702972f4abaa_19 >= $fe_n_items_dbebccfb075865fcd879702972f4abaa_19 )
{
    $fe_offset_dbebccfb075865fcd879702972f4abaa_19 = ( $fe_offset_dbebccfb075865fcd879702972f4abaa_19 < 0 ) ? 0 : $fe_n_items_dbebccfb075865fcd879702972f4abaa_19;
    if ( $fe_n_items_dbebccfb075865fcd879702972f4abaa_19 || $fe_offset_dbebccfb075865fcd879702972f4abaa_19 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_dbebccfb075865fcd879702972f4abaa_19'. Array count: $fe_n_items_dbebccfb075865fcd879702972f4abaa_19");   
}
}
if ( $fe_max_dbebccfb075865fcd879702972f4abaa_19 < 0 || $fe_offset_dbebccfb075865fcd879702972f4abaa_19 + $fe_max_dbebccfb075865fcd879702972f4abaa_19 > $fe_n_items_dbebccfb075865fcd879702972f4abaa_19 )
{
    if ( $fe_max_dbebccfb075865fcd879702972f4abaa_19 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_dbebccfb075865fcd879702972f4abaa_19");
    $fe_max_dbebccfb075865fcd879702972f4abaa_19 = $fe_n_items_dbebccfb075865fcd879702972f4abaa_19 - $fe_offset_dbebccfb075865fcd879702972f4abaa_19;
}
if ( $fe_reverse_dbebccfb075865fcd879702972f4abaa_19 )
{
    $fe_first_val_dbebccfb075865fcd879702972f4abaa_19 = $fe_n_items_dbebccfb075865fcd879702972f4abaa_19 - 1 - $fe_offset_dbebccfb075865fcd879702972f4abaa_19;
    $fe_last_val_dbebccfb075865fcd879702972f4abaa_19  = 0;
}
else
{
    $fe_first_val_dbebccfb075865fcd879702972f4abaa_19 = $fe_offset_dbebccfb075865fcd879702972f4abaa_19;
    $fe_last_val_dbebccfb075865fcd879702972f4abaa_19  = $fe_n_items_dbebccfb075865fcd879702972f4abaa_19 - 1;
}
// foreach
for ( $fe_i_dbebccfb075865fcd879702972f4abaa_19 = $fe_first_val_dbebccfb075865fcd879702972f4abaa_19; $fe_n_items_processed_dbebccfb075865fcd879702972f4abaa_19 < $fe_max_dbebccfb075865fcd879702972f4abaa_19 && ( $fe_reverse_dbebccfb075865fcd879702972f4abaa_19 ? $fe_i_dbebccfb075865fcd879702972f4abaa_19 >= $fe_last_val_dbebccfb075865fcd879702972f4abaa_19 : $fe_i_dbebccfb075865fcd879702972f4abaa_19 <= $fe_last_val_dbebccfb075865fcd879702972f4abaa_19 ); $fe_reverse_dbebccfb075865fcd879702972f4abaa_19 ? $fe_i_dbebccfb075865fcd879702972f4abaa_19-- : $fe_i_dbebccfb075865fcd879702972f4abaa_19++ )
{
$fe_key_dbebccfb075865fcd879702972f4abaa_19 = $fe_array_keys_dbebccfb075865fcd879702972f4abaa_19[$fe_i_dbebccfb075865fcd879702972f4abaa_19];
$fe_val_dbebccfb075865fcd879702972f4abaa_19 = $fe_array_dbebccfb075865fcd879702972f4abaa_19[$fe_key_dbebccfb075865fcd879702972f4abaa_19];
$vars[$rootNamespace]['group'] = $fe_val_dbebccfb075865fcd879702972f4abaa_19;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= '        ,
        ';
} // delimiter ends

$text .= '        [
        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_dbebccfb075865fcd879702972f4abaa_18 ) ) $fe_variable_stack_dbebccfb075865fcd879702972f4abaa_18 = array();
$fe_variable_stack_dbebccfb075865fcd879702972f4abaa_18[] = compact( 'fe_array_dbebccfb075865fcd879702972f4abaa_18', 'fe_array_keys_dbebccfb075865fcd879702972f4abaa_18', 'fe_n_items_dbebccfb075865fcd879702972f4abaa_18', 'fe_n_items_processed_dbebccfb075865fcd879702972f4abaa_18', 'fe_i_dbebccfb075865fcd879702972f4abaa_18', 'fe_key_dbebccfb075865fcd879702972f4abaa_18', 'fe_val_dbebccfb075865fcd879702972f4abaa_18', 'fe_offset_dbebccfb075865fcd879702972f4abaa_18', 'fe_max_dbebccfb075865fcd879702972f4abaa_18', 'fe_reverse_dbebccfb075865fcd879702972f4abaa_18', 'fe_first_val_dbebccfb075865fcd879702972f4abaa_18', 'fe_last_val_dbebccfb075865fcd879702972f4abaa_18' );
unset( $fe_array_dbebccfb075865fcd879702972f4abaa_18 );
unset( $fe_array_dbebccfb075865fcd879702972f4abaa_18 );
$fe_array_dbebccfb075865fcd879702972f4abaa_18 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'group', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['group'] : null;
$fe_array_dbebccfb075865fcd879702972f4abaa_181 = compiledFetchAttribute( $fe_array_dbebccfb075865fcd879702972f4abaa_18, 'items' );
unset( $fe_array_dbebccfb075865fcd879702972f4abaa_18 );
$fe_array_dbebccfb075865fcd879702972f4abaa_18 = $fe_array_dbebccfb075865fcd879702972f4abaa_181;
if (! isset( $fe_array_dbebccfb075865fcd879702972f4abaa_18 ) ) $fe_array_dbebccfb075865fcd879702972f4abaa_18 = NULL;
while ( is_object( $fe_array_dbebccfb075865fcd879702972f4abaa_18 ) and method_exists( $fe_array_dbebccfb075865fcd879702972f4abaa_18, 'templateValue' ) )
    $fe_array_dbebccfb075865fcd879702972f4abaa_18 = $fe_array_dbebccfb075865fcd879702972f4abaa_18->templateValue();

$fe_array_keys_dbebccfb075865fcd879702972f4abaa_18 = is_array( $fe_array_dbebccfb075865fcd879702972f4abaa_18 ) ? array_keys( $fe_array_dbebccfb075865fcd879702972f4abaa_18 ) : array();
$fe_n_items_dbebccfb075865fcd879702972f4abaa_18 = count( $fe_array_keys_dbebccfb075865fcd879702972f4abaa_18 );
$fe_n_items_processed_dbebccfb075865fcd879702972f4abaa_18 = 0;
$fe_offset_dbebccfb075865fcd879702972f4abaa_18 = 0;
$fe_max_dbebccfb075865fcd879702972f4abaa_18 = $fe_n_items_dbebccfb075865fcd879702972f4abaa_18 - $fe_offset_dbebccfb075865fcd879702972f4abaa_18;
$fe_reverse_dbebccfb075865fcd879702972f4abaa_18 = false;
if ( $fe_offset_dbebccfb075865fcd879702972f4abaa_18 < 0 || $fe_offset_dbebccfb075865fcd879702972f4abaa_18 >= $fe_n_items_dbebccfb075865fcd879702972f4abaa_18 )
{
    $fe_offset_dbebccfb075865fcd879702972f4abaa_18 = ( $fe_offset_dbebccfb075865fcd879702972f4abaa_18 < 0 ) ? 0 : $fe_n_items_dbebccfb075865fcd879702972f4abaa_18;
    if ( $fe_n_items_dbebccfb075865fcd879702972f4abaa_18 || $fe_offset_dbebccfb075865fcd879702972f4abaa_18 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_dbebccfb075865fcd879702972f4abaa_18'. Array count: $fe_n_items_dbebccfb075865fcd879702972f4abaa_18");   
}
}
if ( $fe_max_dbebccfb075865fcd879702972f4abaa_18 < 0 || $fe_offset_dbebccfb075865fcd879702972f4abaa_18 + $fe_max_dbebccfb075865fcd879702972f4abaa_18 > $fe_n_items_dbebccfb075865fcd879702972f4abaa_18 )
{
    if ( $fe_max_dbebccfb075865fcd879702972f4abaa_18 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_dbebccfb075865fcd879702972f4abaa_18");
    $fe_max_dbebccfb075865fcd879702972f4abaa_18 = $fe_n_items_dbebccfb075865fcd879702972f4abaa_18 - $fe_offset_dbebccfb075865fcd879702972f4abaa_18;
}
if ( $fe_reverse_dbebccfb075865fcd879702972f4abaa_18 )
{
    $fe_first_val_dbebccfb075865fcd879702972f4abaa_18 = $fe_n_items_dbebccfb075865fcd879702972f4abaa_18 - 1 - $fe_offset_dbebccfb075865fcd879702972f4abaa_18;
    $fe_last_val_dbebccfb075865fcd879702972f4abaa_18  = 0;
}
else
{
    $fe_first_val_dbebccfb075865fcd879702972f4abaa_18 = $fe_offset_dbebccfb075865fcd879702972f4abaa_18;
    $fe_last_val_dbebccfb075865fcd879702972f4abaa_18  = $fe_n_items_dbebccfb075865fcd879702972f4abaa_18 - 1;
}
// foreach
for ( $fe_i_dbebccfb075865fcd879702972f4abaa_18 = $fe_first_val_dbebccfb075865fcd879702972f4abaa_18; $fe_n_items_processed_dbebccfb075865fcd879702972f4abaa_18 < $fe_max_dbebccfb075865fcd879702972f4abaa_18 && ( $fe_reverse_dbebccfb075865fcd879702972f4abaa_18 ? $fe_i_dbebccfb075865fcd879702972f4abaa_18 >= $fe_last_val_dbebccfb075865fcd879702972f4abaa_18 : $fe_i_dbebccfb075865fcd879702972f4abaa_18 <= $fe_last_val_dbebccfb075865fcd879702972f4abaa_18 ); $fe_reverse_dbebccfb075865fcd879702972f4abaa_18 ? $fe_i_dbebccfb075865fcd879702972f4abaa_18-- : $fe_i_dbebccfb075865fcd879702972f4abaa_18++ )
{
$fe_key_dbebccfb075865fcd879702972f4abaa_18 = $fe_array_keys_dbebccfb075865fcd879702972f4abaa_18[$fe_i_dbebccfb075865fcd879702972f4abaa_18];
$fe_val_dbebccfb075865fcd879702972f4abaa_18 = $fe_array_dbebccfb075865fcd879702972f4abaa_18[$fe_key_dbebccfb075865fcd879702972f4abaa_18];
$vars[$rootNamespace]['can_create_class'] = $fe_val_dbebccfb075865fcd879702972f4abaa_18;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_create_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_create_class'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'can_instantiate_languages' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ',';
}
unset( $if_cond );
// if ends

} // delimiter ends

$text .= '            ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_create_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_create_class'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'can_instantiate_languages' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            { text: "';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_create_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_create_class'] : null;
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

$text .= '", value: ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_create_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_create_class'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' }
            ';
}
unset( $if_cond );
// if ends

$text .= '                    ';
$fe_n_items_processed_dbebccfb075865fcd879702972f4abaa_18++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_dbebccfb075865fcd879702972f4abaa_18 ) ) extract( array_pop( $fe_variable_stack_dbebccfb075865fcd879702972f4abaa_18 ) );

else
{

unset( $fe_array_dbebccfb075865fcd879702972f4abaa_18 );

unset( $fe_array_keys_dbebccfb075865fcd879702972f4abaa_18 );

unset( $fe_n_items_dbebccfb075865fcd879702972f4abaa_18 );

unset( $fe_n_items_processed_dbebccfb075865fcd879702972f4abaa_18 );

unset( $fe_i_dbebccfb075865fcd879702972f4abaa_18 );

unset( $fe_key_dbebccfb075865fcd879702972f4abaa_18 );

unset( $fe_val_dbebccfb075865fcd879702972f4abaa_18 );

unset( $fe_offset_dbebccfb075865fcd879702972f4abaa_18 );

unset( $fe_max_dbebccfb075865fcd879702972f4abaa_18 );

unset( $fe_reverse_dbebccfb075865fcd879702972f4abaa_18 );

unset( $fe_first_val_dbebccfb075865fcd879702972f4abaa_18 );

unset( $fe_last_val_dbebccfb075865fcd879702972f4abaa_18 );

unset( $fe_variable_stack_dbebccfb075865fcd879702972f4abaa_18 );

}

// foreach ends
$text .= '        ]
            ';
$fe_n_items_processed_dbebccfb075865fcd879702972f4abaa_19++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_dbebccfb075865fcd879702972f4abaa_19 ) ) extract( array_pop( $fe_variable_stack_dbebccfb075865fcd879702972f4abaa_19 ) );

else
{

unset( $fe_array_dbebccfb075865fcd879702972f4abaa_19 );

unset( $fe_array_keys_dbebccfb075865fcd879702972f4abaa_19 );

unset( $fe_n_items_dbebccfb075865fcd879702972f4abaa_19 );

unset( $fe_n_items_processed_dbebccfb075865fcd879702972f4abaa_19 );

unset( $fe_i_dbebccfb075865fcd879702972f4abaa_19 );

unset( $fe_key_dbebccfb075865fcd879702972f4abaa_19 );

unset( $fe_val_dbebccfb075865fcd879702972f4abaa_19 );

unset( $fe_offset_dbebccfb075865fcd879702972f4abaa_19 );

unset( $fe_max_dbebccfb075865fcd879702972f4abaa_19 );

unset( $fe_reverse_dbebccfb075865fcd879702972f4abaa_19 );

unset( $fe_first_val_dbebccfb075865fcd879702972f4abaa_19 );

unset( $fe_last_val_dbebccfb075865fcd879702972f4abaa_19 );

unset( $fe_variable_stack_dbebccfb075865fcd879702972f4abaa_19 );

}

// foreach ends
$text .= '    ];
    ';
}
else
{
$text .= '    var createGroups = [];
    var createOptions = [];';
}
unset( $if_cond );
// if ends

$text .= '

YUILoader.require([\'datatable\', \'button\', \'container\', \'cookie\']);
YUILoader.onSuccess = function() {
    sortableSubitems.init(confObj, labelsObj, createGroups, createOptions);
};
var options = [];
YUILoader.insert(options, \'js\');

})();
';
// undef $section
$tpl->unsetLocalVariable( 'section', $rootNamespace );

// undef $visible_columns
$tpl->unsetLocalVariable( 'visible_columns', $rootNamespace );

// undef $locales
$tpl->unsetLocalVariable( 'locales', $rootNamespace );

$text .= '</script>

<div id="action-controls-container">
    <div id="action-controls"></div>
    <div id="tpg"></div>
</div>
<div id="content-sub-items-list" class="content-navigation-childlist"></div>
<div id="bpg"></div>

<div id="to-dialog-container"></div>
';

$setArray = $oldSetArray_d650ce99cbc8cb5d5b80122f13db9eee;
$tpl->Level--;
?>
