<?php
// URI:       design/admin2/templates/relations.tpl
// Filename:  design/admin2/templates/relations.tpl
// Timestamp: 1285696610 (Tue Sep 28 10:56:50 MST 2010)
$oldSetArray_bba76c4681a575bb8aa04e505ba05274 = isset( $setArray ) ? $setArray : array();
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

';
// def $relation_type_names
if ( $tpl->hasVariable( 'relation_type_names', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'relation_type_names' is already defined.", array (
  0 => 
  array (
    0 => 4,
    1 => 0,
    2 => 55,
  ),
  1 => 
  array (
    0 => 7,
    1 => 96,
    2 => 430,
  ),
  2 => 'design/admin2/templates/relations.tpl',
) );
    $tpl->setVariable( 'relation_type_names', array (
  'common' => 'Common',
  'xml_embed' => 'Embedded',
  'xml_link' => 'Linked',
  'attribute' => 'Attribute',
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'relation_type_names', array (
  'common' => 'Common',
  'xml_embed' => 'Embedded',
  'xml_link' => 'Linked',
  'attribute' => 'Attribute',
), $rootNamespace );
}

// def $relation_name_delimiter
if ( $tpl->hasVariable( 'relation_name_delimiter', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'relation_name_delimiter' is already defined.", array (
  0 => 
  array (
    0 => 8,
    1 => 0,
    2 => 433,
  ),
  1 => 
  array (
    0 => 8,
    1 => 35,
    2 => 468,
  ),
  2 => 'design/admin2/templates/relations.tpl',
) );
    $tpl->setVariable( 'relation_name_delimiter', ', ', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'relation_name_delimiter', ', ', $rootNamespace );
}

$text .= '
<table class="list" cellspacing="0" summary="Object relation list from current object.">
<tr>
    <th>';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_objects_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_objects_count'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%related_objects_count' => $var3 );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var3 = array();
foreach ( $var2 as $var4 => $var5 )
{
  if ( is_int( $var4 ) )
    $var3['%' . ( ($var4%9) + 1 )] = $var5;
  else
    $var3[$var4] = $var5;
}
$var = strtr( 'Related objects (%related_objects_count)', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</th>
    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_objects_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_objects_count'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <th>Class</th>
    <th>Relation type</th>
    ';
}
unset( $if_cond );
// if ends

$text .= '</tr>';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_objects_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_objects_count'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
// def $related_objects_grouped
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchRelatedObjects' ),
  array(     'object_id' => $var1,
    'attribute_identifier' => "0",
    'all_relations' => true,
    'group_by_attribute' => true,
    'sort_by' => array( array( "class_identifier",
              true ),
       array( "name",
              true ) ),
    'limit' => false,
    'offset' => false,
    'as_object' => true,
    'load_data_map' => false,
    'ignore_visibility' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'related_objects_grouped', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'related_objects_grouped' is already defined.", array (
  0 => 
  array (
    0 => 19,
    1 => 4,
    2 => 972,
  ),
  1 => 
  array (
    0 => 19,
    1 => 247,
    2 => 1215,
  ),
  2 => 'design/admin2/templates/relations.tpl',
) );
    $tpl->setVariable( 'related_objects_grouped', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'related_objects_grouped', $var, $rootNamespace );
}

$text .= '    ';
// def $related_objects_id_typed
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchRelatedObjectsID' ),
  array(     'object_id' => $var1,
    'attribute_identifier' => "0",
    'all_relations' => false ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'related_objects_id_typed', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'related_objects_id_typed' is already defined.", array (
  0 => 
  array (
    0 => 20,
    1 => 4,
    2 => 1222,
  ),
  1 => 
  array (
    0 => 20,
    1 => 115,
    2 => 1333,
  ),
  2 => 'design/admin2/templates/relations.tpl',
) );
    $tpl->setVariable( 'related_objects_id_typed', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'related_objects_id_typed', $var, $rootNamespace );
}

$text .= '
    ';
// def $tr_class
if ( $tpl->hasVariable( 'tr_class', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'tr_class' is already defined.", array (
  0 => 
  array (
    0 => 22,
    1 => 4,
    2 => 1341,
  ),
  1 => 
  array (
    0 => 22,
    1 => 27,
    2 => 1364,
  ),
  2 => 'design/admin2/templates/relations.tpl',
) );
    $tpl->setVariable( 'tr_class', 'bglight', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'tr_class', 'bglight', $rootNamespace );
}

$text .= '    ';
// def $attr
if ( $tpl->hasVariable( 'attr', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'attr' is already defined.", array (
  0 => 
  array (
    0 => 23,
    1 => 4,
    2 => 1371,
  ),
  1 => 
  array (
    0 => 23,
    1 => 17,
    2 => 1384,
  ),
  2 => 'design/admin2/templates/relations.tpl',
) );
    $tpl->setVariable( 'attr', 0, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'attr', 0, $rootNamespace );
}

$text .= '    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_10 ) ) $fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_10 = array();
$fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_10[] = compact( 'fe_array_8ef0bd49181921a6cf6168619ad677e3_10', 'fe_array_keys_8ef0bd49181921a6cf6168619ad677e3_10', 'fe_n_items_8ef0bd49181921a6cf6168619ad677e3_10', 'fe_n_items_processed_8ef0bd49181921a6cf6168619ad677e3_10', 'fe_i_8ef0bd49181921a6cf6168619ad677e3_10', 'fe_key_8ef0bd49181921a6cf6168619ad677e3_10', 'fe_val_8ef0bd49181921a6cf6168619ad677e3_10', 'fe_offset_8ef0bd49181921a6cf6168619ad677e3_10', 'fe_max_8ef0bd49181921a6cf6168619ad677e3_10', 'fe_reverse_8ef0bd49181921a6cf6168619ad677e3_10', 'fe_first_val_8ef0bd49181921a6cf6168619ad677e3_10', 'fe_last_val_8ef0bd49181921a6cf6168619ad677e3_10' );
unset( $fe_array_8ef0bd49181921a6cf6168619ad677e3_10 );
unset( $fe_array_8ef0bd49181921a6cf6168619ad677e3_10 );
$fe_array_8ef0bd49181921a6cf6168619ad677e3_10 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_objects_grouped', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_objects_grouped'] : null;
if (! isset( $fe_array_8ef0bd49181921a6cf6168619ad677e3_10 ) ) $fe_array_8ef0bd49181921a6cf6168619ad677e3_10 = NULL;
while ( is_object( $fe_array_8ef0bd49181921a6cf6168619ad677e3_10 ) and method_exists( $fe_array_8ef0bd49181921a6cf6168619ad677e3_10, 'templateValue' ) )
    $fe_array_8ef0bd49181921a6cf6168619ad677e3_10 = $fe_array_8ef0bd49181921a6cf6168619ad677e3_10->templateValue();

$fe_array_keys_8ef0bd49181921a6cf6168619ad677e3_10 = is_array( $fe_array_8ef0bd49181921a6cf6168619ad677e3_10 ) ? array_keys( $fe_array_8ef0bd49181921a6cf6168619ad677e3_10 ) : array();
$fe_n_items_8ef0bd49181921a6cf6168619ad677e3_10 = count( $fe_array_keys_8ef0bd49181921a6cf6168619ad677e3_10 );
$fe_n_items_processed_8ef0bd49181921a6cf6168619ad677e3_10 = 0;
$fe_offset_8ef0bd49181921a6cf6168619ad677e3_10 = 0;
$fe_max_8ef0bd49181921a6cf6168619ad677e3_10 = $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_10 - $fe_offset_8ef0bd49181921a6cf6168619ad677e3_10;
$fe_reverse_8ef0bd49181921a6cf6168619ad677e3_10 = false;
if ( $fe_offset_8ef0bd49181921a6cf6168619ad677e3_10 < 0 || $fe_offset_8ef0bd49181921a6cf6168619ad677e3_10 >= $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_10 )
{
    $fe_offset_8ef0bd49181921a6cf6168619ad677e3_10 = ( $fe_offset_8ef0bd49181921a6cf6168619ad677e3_10 < 0 ) ? 0 : $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_10;
    if ( $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_10 || $fe_offset_8ef0bd49181921a6cf6168619ad677e3_10 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_8ef0bd49181921a6cf6168619ad677e3_10'. Array count: $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_10");   
}
}
if ( $fe_max_8ef0bd49181921a6cf6168619ad677e3_10 < 0 || $fe_offset_8ef0bd49181921a6cf6168619ad677e3_10 + $fe_max_8ef0bd49181921a6cf6168619ad677e3_10 > $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_10 )
{
    if ( $fe_max_8ef0bd49181921a6cf6168619ad677e3_10 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_8ef0bd49181921a6cf6168619ad677e3_10");
    $fe_max_8ef0bd49181921a6cf6168619ad677e3_10 = $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_10 - $fe_offset_8ef0bd49181921a6cf6168619ad677e3_10;
}
if ( $fe_reverse_8ef0bd49181921a6cf6168619ad677e3_10 )
{
    $fe_first_val_8ef0bd49181921a6cf6168619ad677e3_10 = $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_10 - 1 - $fe_offset_8ef0bd49181921a6cf6168619ad677e3_10;
    $fe_last_val_8ef0bd49181921a6cf6168619ad677e3_10  = 0;
}
else
{
    $fe_first_val_8ef0bd49181921a6cf6168619ad677e3_10 = $fe_offset_8ef0bd49181921a6cf6168619ad677e3_10;
    $fe_last_val_8ef0bd49181921a6cf6168619ad677e3_10  = $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_10 - 1;
}
// foreach
for ( $fe_i_8ef0bd49181921a6cf6168619ad677e3_10 = $fe_first_val_8ef0bd49181921a6cf6168619ad677e3_10; $fe_n_items_processed_8ef0bd49181921a6cf6168619ad677e3_10 < $fe_max_8ef0bd49181921a6cf6168619ad677e3_10 && ( $fe_reverse_8ef0bd49181921a6cf6168619ad677e3_10 ? $fe_i_8ef0bd49181921a6cf6168619ad677e3_10 >= $fe_last_val_8ef0bd49181921a6cf6168619ad677e3_10 : $fe_i_8ef0bd49181921a6cf6168619ad677e3_10 <= $fe_last_val_8ef0bd49181921a6cf6168619ad677e3_10 ); $fe_reverse_8ef0bd49181921a6cf6168619ad677e3_10 ? $fe_i_8ef0bd49181921a6cf6168619ad677e3_10-- : $fe_i_8ef0bd49181921a6cf6168619ad677e3_10++ )
{
$fe_key_8ef0bd49181921a6cf6168619ad677e3_10 = $fe_array_keys_8ef0bd49181921a6cf6168619ad677e3_10[$fe_i_8ef0bd49181921a6cf6168619ad677e3_10];
$fe_val_8ef0bd49181921a6cf6168619ad677e3_10 = $fe_array_8ef0bd49181921a6cf6168619ad677e3_10[$fe_key_8ef0bd49181921a6cf6168619ad677e3_10];
$vars[$rootNamespace]['related_objects_array'] = $fe_val_8ef0bd49181921a6cf6168619ad677e3_10;
$vars[$rootNamespace]['attribute_id'] = $fe_key_8ef0bd49181921a6cf6168619ad677e3_10;
$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_id'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) != ( 0 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_id'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchClassAttribute' ),
  array(     'attribute_id' => $var1,
    'version_id' => 0 ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'attr', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['attr'] = $var;
    unset( $var );
}
$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_9 ) ) $fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_9 = array();
$fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_9[] = compact( 'fe_array_8ef0bd49181921a6cf6168619ad677e3_9', 'fe_array_keys_8ef0bd49181921a6cf6168619ad677e3_9', 'fe_n_items_8ef0bd49181921a6cf6168619ad677e3_9', 'fe_n_items_processed_8ef0bd49181921a6cf6168619ad677e3_9', 'fe_i_8ef0bd49181921a6cf6168619ad677e3_9', 'fe_key_8ef0bd49181921a6cf6168619ad677e3_9', 'fe_val_8ef0bd49181921a6cf6168619ad677e3_9', 'fe_offset_8ef0bd49181921a6cf6168619ad677e3_9', 'fe_max_8ef0bd49181921a6cf6168619ad677e3_9', 'fe_reverse_8ef0bd49181921a6cf6168619ad677e3_9', 'fe_first_val_8ef0bd49181921a6cf6168619ad677e3_9', 'fe_last_val_8ef0bd49181921a6cf6168619ad677e3_9' );
unset( $fe_array_8ef0bd49181921a6cf6168619ad677e3_9 );
unset( $fe_array_8ef0bd49181921a6cf6168619ad677e3_9 );
$fe_array_8ef0bd49181921a6cf6168619ad677e3_9 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_objects_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_objects_array'] : null;
if (! isset( $fe_array_8ef0bd49181921a6cf6168619ad677e3_9 ) ) $fe_array_8ef0bd49181921a6cf6168619ad677e3_9 = NULL;
while ( is_object( $fe_array_8ef0bd49181921a6cf6168619ad677e3_9 ) and method_exists( $fe_array_8ef0bd49181921a6cf6168619ad677e3_9, 'templateValue' ) )
    $fe_array_8ef0bd49181921a6cf6168619ad677e3_9 = $fe_array_8ef0bd49181921a6cf6168619ad677e3_9->templateValue();

$fe_array_keys_8ef0bd49181921a6cf6168619ad677e3_9 = is_array( $fe_array_8ef0bd49181921a6cf6168619ad677e3_9 ) ? array_keys( $fe_array_8ef0bd49181921a6cf6168619ad677e3_9 ) : array();
$fe_n_items_8ef0bd49181921a6cf6168619ad677e3_9 = count( $fe_array_keys_8ef0bd49181921a6cf6168619ad677e3_9 );
$fe_n_items_processed_8ef0bd49181921a6cf6168619ad677e3_9 = 0;
$fe_offset_8ef0bd49181921a6cf6168619ad677e3_9 = 0;
$fe_max_8ef0bd49181921a6cf6168619ad677e3_9 = $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_9 - $fe_offset_8ef0bd49181921a6cf6168619ad677e3_9;
$fe_reverse_8ef0bd49181921a6cf6168619ad677e3_9 = false;
if ( $fe_offset_8ef0bd49181921a6cf6168619ad677e3_9 < 0 || $fe_offset_8ef0bd49181921a6cf6168619ad677e3_9 >= $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_9 )
{
    $fe_offset_8ef0bd49181921a6cf6168619ad677e3_9 = ( $fe_offset_8ef0bd49181921a6cf6168619ad677e3_9 < 0 ) ? 0 : $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_9;
    if ( $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_9 || $fe_offset_8ef0bd49181921a6cf6168619ad677e3_9 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_8ef0bd49181921a6cf6168619ad677e3_9'. Array count: $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_9");   
}
}
if ( $fe_max_8ef0bd49181921a6cf6168619ad677e3_9 < 0 || $fe_offset_8ef0bd49181921a6cf6168619ad677e3_9 + $fe_max_8ef0bd49181921a6cf6168619ad677e3_9 > $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_9 )
{
    if ( $fe_max_8ef0bd49181921a6cf6168619ad677e3_9 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_8ef0bd49181921a6cf6168619ad677e3_9");
    $fe_max_8ef0bd49181921a6cf6168619ad677e3_9 = $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_9 - $fe_offset_8ef0bd49181921a6cf6168619ad677e3_9;
}
if ( $fe_reverse_8ef0bd49181921a6cf6168619ad677e3_9 )
{
    $fe_first_val_8ef0bd49181921a6cf6168619ad677e3_9 = $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_9 - 1 - $fe_offset_8ef0bd49181921a6cf6168619ad677e3_9;
    $fe_last_val_8ef0bd49181921a6cf6168619ad677e3_9  = 0;
}
else
{
    $fe_first_val_8ef0bd49181921a6cf6168619ad677e3_9 = $fe_offset_8ef0bd49181921a6cf6168619ad677e3_9;
    $fe_last_val_8ef0bd49181921a6cf6168619ad677e3_9  = $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_9 - 1;
}
// foreach
for ( $fe_i_8ef0bd49181921a6cf6168619ad677e3_9 = $fe_first_val_8ef0bd49181921a6cf6168619ad677e3_9; $fe_n_items_processed_8ef0bd49181921a6cf6168619ad677e3_9 < $fe_max_8ef0bd49181921a6cf6168619ad677e3_9 && ( $fe_reverse_8ef0bd49181921a6cf6168619ad677e3_9 ? $fe_i_8ef0bd49181921a6cf6168619ad677e3_9 >= $fe_last_val_8ef0bd49181921a6cf6168619ad677e3_9 : $fe_i_8ef0bd49181921a6cf6168619ad677e3_9 <= $fe_last_val_8ef0bd49181921a6cf6168619ad677e3_9 ); $fe_reverse_8ef0bd49181921a6cf6168619ad677e3_9 ? $fe_i_8ef0bd49181921a6cf6168619ad677e3_9-- : $fe_i_8ef0bd49181921a6cf6168619ad677e3_9++ )
{
$fe_key_8ef0bd49181921a6cf6168619ad677e3_9 = $fe_array_keys_8ef0bd49181921a6cf6168619ad677e3_9[$fe_i_8ef0bd49181921a6cf6168619ad677e3_9];
$fe_val_8ef0bd49181921a6cf6168619ad677e3_9 = $fe_array_8ef0bd49181921a6cf6168619ad677e3_9[$fe_key_8ef0bd49181921a6cf6168619ad677e3_9];
$vars[$rootNamespace]['object'] = $fe_val_8ef0bd49181921a6cf6168619ad677e3_9;
$text .= '            <tr class="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tr_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tr_class'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
            <td>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$var1 = compiledFetchAttribute( $var, 'content_class' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'identifier' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'class_icon',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 3,
      1 => 'small',
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'object',
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
          1 => 'content_class',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'name',
          2 => false,
        ),
      ),
      2 => false,
    ),
    3 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'wash',
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
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '&nbsp;';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
$vars[$namespace]['object'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( 'design' );
    $dKeys = $resH->keys();
}
if ( !isset( $dKeysStack ) )
{
    $dKeysStack = array();
}
$dKeysStack[] = $dKeys;
unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["object"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'match_ingroup_id_list' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_group"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'contentclass_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'section_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["section"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'state_id_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'state_identifier_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state_identifier"] = $dKey;
unset( $dKey );

$resourceFound = false;
if ( file_exists( 'var/ezflow_site/cache/template/compiled/text_linked-bc3ec57c0820d4ebf50ce255b772c42d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentView' : ( $currentNamespace . ':' . 'ContentView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/standard/templates/content/view/text_linked.tpl' );
include( '' . 'var/ezflow_site/cache/template/compiled/text_linked-bc3ec57c0820d4ebf50ce255b772c42d.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentView' : ( $currentNamespace . ':' . 'ContentView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/standard/templates/content/view/text_linked.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

$dKeys = array_pop( $dKeysStack );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $vars[$namespace]['object'] );
$text .= '</td>
            <td>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$var2 = compiledFetchAttribute( $var1, 'content_class' );
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

$text .= '</td>
            <td>
                ';
unset( $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_81 );
unset( $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_811 );
unset( $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_811 );
$elseif_cond_8ef0bd49181921a6cf6168619ad677e3_811 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_id'] : null;
if (! isset( $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_811 ) ) $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_811 = NULL;
while ( is_object( $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_811 ) and method_exists( $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_811, 'templateValue' ) )
    $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_811 = $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_811->templateValue();
while ( is_object( $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_811 ) and method_exists( $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_811, 'templateValue' ) )
    $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_811 = $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_811->templateValue();
$elseif_cond_8ef0bd49181921a6cf6168619ad677e3_81 = ( ( $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_811 ) == ( 0 ) );
unset( $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_811 );
if (! isset( $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_81 ) ) $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_81 = NULL;
while ( is_object( $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_81 ) and method_exists( $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_81, 'templateValue' ) )
    $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_81 = $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_81->templateValue();

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_id'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = ( ( $if_cond2 ) != ( 0 ) );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_objects_id_typed', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_objects_id_typed'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'attribute' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$if_cond5 = compiledFetchAttribute( $if_cond4, 'id' );
unset( $if_cond4 );
$if_cond4 = $if_cond5;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
if( is_string( $if_cond3 ) )
{
  $if_cond2 = ( strpos( $if_cond3, $if_cond4 ) !== false );
}
else if ( is_array( $if_cond3 ) )
{
  $if_cond2 = in_array( $if_cond4, $if_cond3 );
}
else
{
$if_cond2 = false;
}unset( $if_cond3, $if_cond4 );
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
$text .= '                    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_type_names', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_type_names'] : null;
$var1 = compiledFetchAttribute( $var, 'attribute' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' ( ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attr', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attr'] : null;
$var1 = compiledFetchAttribute( $var, 'name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' )
                ';
}
elseif ( $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_81 )
{
$text .= '                    ';
// def $relation_name_array
if ( $tpl->hasVariable( 'relation_name_array', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'relation_name_array' is already defined.", array (
  0 => 
  array (
    0 => 36,
    1 => 20,
    2 => 2213,
  ),
  1 => 
  array (
    0 => 36,
    1 => 54,
    2 => 2247,
  ),
  2 => 'design/admin2/templates/relations.tpl',
) );
    $tpl->setVariable( 'relation_name_array', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'relation_name_array', array (
), $rootNamespace );
}

$text .= '                    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_8 ) ) $fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_8 = array();
$fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_8[] = compact( 'fe_array_8ef0bd49181921a6cf6168619ad677e3_8', 'fe_array_keys_8ef0bd49181921a6cf6168619ad677e3_8', 'fe_n_items_8ef0bd49181921a6cf6168619ad677e3_8', 'fe_n_items_processed_8ef0bd49181921a6cf6168619ad677e3_8', 'fe_i_8ef0bd49181921a6cf6168619ad677e3_8', 'fe_key_8ef0bd49181921a6cf6168619ad677e3_8', 'fe_val_8ef0bd49181921a6cf6168619ad677e3_8', 'fe_offset_8ef0bd49181921a6cf6168619ad677e3_8', 'fe_max_8ef0bd49181921a6cf6168619ad677e3_8', 'fe_reverse_8ef0bd49181921a6cf6168619ad677e3_8', 'fe_first_val_8ef0bd49181921a6cf6168619ad677e3_8', 'fe_last_val_8ef0bd49181921a6cf6168619ad677e3_8' );
unset( $fe_array_8ef0bd49181921a6cf6168619ad677e3_8 );
unset( $fe_array_8ef0bd49181921a6cf6168619ad677e3_8 );
$fe_array_8ef0bd49181921a6cf6168619ad677e3_8 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_objects_id_typed', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_objects_id_typed'] : null;
if (! isset( $fe_array_8ef0bd49181921a6cf6168619ad677e3_8 ) ) $fe_array_8ef0bd49181921a6cf6168619ad677e3_8 = NULL;
while ( is_object( $fe_array_8ef0bd49181921a6cf6168619ad677e3_8 ) and method_exists( $fe_array_8ef0bd49181921a6cf6168619ad677e3_8, 'templateValue' ) )
    $fe_array_8ef0bd49181921a6cf6168619ad677e3_8 = $fe_array_8ef0bd49181921a6cf6168619ad677e3_8->templateValue();

$fe_array_keys_8ef0bd49181921a6cf6168619ad677e3_8 = is_array( $fe_array_8ef0bd49181921a6cf6168619ad677e3_8 ) ? array_keys( $fe_array_8ef0bd49181921a6cf6168619ad677e3_8 ) : array();
$fe_n_items_8ef0bd49181921a6cf6168619ad677e3_8 = count( $fe_array_keys_8ef0bd49181921a6cf6168619ad677e3_8 );
$fe_n_items_processed_8ef0bd49181921a6cf6168619ad677e3_8 = 0;
$fe_offset_8ef0bd49181921a6cf6168619ad677e3_8 = 0;
$fe_max_8ef0bd49181921a6cf6168619ad677e3_8 = $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_8 - $fe_offset_8ef0bd49181921a6cf6168619ad677e3_8;
$fe_reverse_8ef0bd49181921a6cf6168619ad677e3_8 = false;
if ( $fe_offset_8ef0bd49181921a6cf6168619ad677e3_8 < 0 || $fe_offset_8ef0bd49181921a6cf6168619ad677e3_8 >= $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_8 )
{
    $fe_offset_8ef0bd49181921a6cf6168619ad677e3_8 = ( $fe_offset_8ef0bd49181921a6cf6168619ad677e3_8 < 0 ) ? 0 : $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_8;
    if ( $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_8 || $fe_offset_8ef0bd49181921a6cf6168619ad677e3_8 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_8ef0bd49181921a6cf6168619ad677e3_8'. Array count: $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_8");   
}
}
if ( $fe_max_8ef0bd49181921a6cf6168619ad677e3_8 < 0 || $fe_offset_8ef0bd49181921a6cf6168619ad677e3_8 + $fe_max_8ef0bd49181921a6cf6168619ad677e3_8 > $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_8 )
{
    if ( $fe_max_8ef0bd49181921a6cf6168619ad677e3_8 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_8ef0bd49181921a6cf6168619ad677e3_8");
    $fe_max_8ef0bd49181921a6cf6168619ad677e3_8 = $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_8 - $fe_offset_8ef0bd49181921a6cf6168619ad677e3_8;
}
if ( $fe_reverse_8ef0bd49181921a6cf6168619ad677e3_8 )
{
    $fe_first_val_8ef0bd49181921a6cf6168619ad677e3_8 = $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_8 - 1 - $fe_offset_8ef0bd49181921a6cf6168619ad677e3_8;
    $fe_last_val_8ef0bd49181921a6cf6168619ad677e3_8  = 0;
}
else
{
    $fe_first_val_8ef0bd49181921a6cf6168619ad677e3_8 = $fe_offset_8ef0bd49181921a6cf6168619ad677e3_8;
    $fe_last_val_8ef0bd49181921a6cf6168619ad677e3_8  = $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_8 - 1;
}
// foreach
for ( $fe_i_8ef0bd49181921a6cf6168619ad677e3_8 = $fe_first_val_8ef0bd49181921a6cf6168619ad677e3_8; $fe_n_items_processed_8ef0bd49181921a6cf6168619ad677e3_8 < $fe_max_8ef0bd49181921a6cf6168619ad677e3_8 && ( $fe_reverse_8ef0bd49181921a6cf6168619ad677e3_8 ? $fe_i_8ef0bd49181921a6cf6168619ad677e3_8 >= $fe_last_val_8ef0bd49181921a6cf6168619ad677e3_8 : $fe_i_8ef0bd49181921a6cf6168619ad677e3_8 <= $fe_last_val_8ef0bd49181921a6cf6168619ad677e3_8 ); $fe_reverse_8ef0bd49181921a6cf6168619ad677e3_8 ? $fe_i_8ef0bd49181921a6cf6168619ad677e3_8-- : $fe_i_8ef0bd49181921a6cf6168619ad677e3_8++ )
{
$fe_key_8ef0bd49181921a6cf6168619ad677e3_8 = $fe_array_keys_8ef0bd49181921a6cf6168619ad677e3_8[$fe_i_8ef0bd49181921a6cf6168619ad677e3_8];
$fe_val_8ef0bd49181921a6cf6168619ad677e3_8 = $fe_array_8ef0bd49181921a6cf6168619ad677e3_8[$fe_key_8ef0bd49181921a6cf6168619ad677e3_8];
$vars[$rootNamespace]['relation_id_array'] = $fe_val_8ef0bd49181921a6cf6168619ad677e3_8;
$vars[$rootNamespace]['relation_type'] = $fe_key_8ef0bd49181921a6cf6168619ad677e3_8;
$text .= '                        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_type'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) != ( 'attribute' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_id_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_id_array'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
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
$text .= '                                ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_type_names', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_type_names'] : null;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_type'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = compiledFetchAttribute( $var1, $var3 );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_name_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_name_array'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( is_string( $var2 ) )
    $var = $var2 . implode( '', array( $var1 ) );
else if( is_array( $var2 ) )
    $var = array_merge( $var2, array( $var1 ) );
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'relation_name_array', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['relation_name_array'] = $var;
    unset( $var );
}
$text .= '                            ';
}
unset( $if_cond );
// if ends

$text .= '                        ';
}
unset( $if_cond );
// if ends

$text .= '                    ';
$fe_n_items_processed_8ef0bd49181921a6cf6168619ad677e3_8++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_8 ) ) extract( array_pop( $fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_8 ) );

else
{

unset( $fe_array_8ef0bd49181921a6cf6168619ad677e3_8 );

unset( $fe_array_keys_8ef0bd49181921a6cf6168619ad677e3_8 );

unset( $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_8 );

unset( $fe_n_items_processed_8ef0bd49181921a6cf6168619ad677e3_8 );

unset( $fe_i_8ef0bd49181921a6cf6168619ad677e3_8 );

unset( $fe_key_8ef0bd49181921a6cf6168619ad677e3_8 );

unset( $fe_val_8ef0bd49181921a6cf6168619ad677e3_8 );

unset( $fe_offset_8ef0bd49181921a6cf6168619ad677e3_8 );

unset( $fe_max_8ef0bd49181921a6cf6168619ad677e3_8 );

unset( $fe_reverse_8ef0bd49181921a6cf6168619ad677e3_8 );

unset( $fe_first_val_8ef0bd49181921a6cf6168619ad677e3_8 );

unset( $fe_last_val_8ef0bd49181921a6cf6168619ad677e3_8 );

unset( $fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_8 );

}

// foreach ends
$text .= '                    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_name_delimiter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_name_delimiter'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_name_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_name_array'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = implode( $var1, $var2 );unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
                    ';
// undef $relation_name_array
$tpl->unsetLocalVariable( 'relation_name_array', $rootNamespace );

$text .= '                ';
}
unset( $if_cond );
// if ends

unset( $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_81 );

$text .= '            </td>
            </tr>
            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tr_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tr_class'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'bgdark' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'tr_class', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['tr_class'] = 'bglight';
}
$text .= '            ';
}
else
{
$text .= '                ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'tr_class', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['tr_class'] = 'bgdark';
}
$text .= '            ';
}
unset( $if_cond );
// if ends

$text .= '        ';
$fe_n_items_processed_8ef0bd49181921a6cf6168619ad677e3_9++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_9 ) ) extract( array_pop( $fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_9 ) );

else
{

unset( $fe_array_8ef0bd49181921a6cf6168619ad677e3_9 );

unset( $fe_array_keys_8ef0bd49181921a6cf6168619ad677e3_9 );

unset( $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_9 );

unset( $fe_n_items_processed_8ef0bd49181921a6cf6168619ad677e3_9 );

unset( $fe_i_8ef0bd49181921a6cf6168619ad677e3_9 );

unset( $fe_key_8ef0bd49181921a6cf6168619ad677e3_9 );

unset( $fe_val_8ef0bd49181921a6cf6168619ad677e3_9 );

unset( $fe_offset_8ef0bd49181921a6cf6168619ad677e3_9 );

unset( $fe_max_8ef0bd49181921a6cf6168619ad677e3_9 );

unset( $fe_reverse_8ef0bd49181921a6cf6168619ad677e3_9 );

unset( $fe_first_val_8ef0bd49181921a6cf6168619ad677e3_9 );

unset( $fe_last_val_8ef0bd49181921a6cf6168619ad677e3_9 );

unset( $fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_9 );

}

// foreach ends
$text .= '    ';
$fe_n_items_processed_8ef0bd49181921a6cf6168619ad677e3_10++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_10 ) ) extract( array_pop( $fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_10 ) );

else
{

unset( $fe_array_8ef0bd49181921a6cf6168619ad677e3_10 );

unset( $fe_array_keys_8ef0bd49181921a6cf6168619ad677e3_10 );

unset( $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_10 );

unset( $fe_n_items_processed_8ef0bd49181921a6cf6168619ad677e3_10 );

unset( $fe_i_8ef0bd49181921a6cf6168619ad677e3_10 );

unset( $fe_key_8ef0bd49181921a6cf6168619ad677e3_10 );

unset( $fe_val_8ef0bd49181921a6cf6168619ad677e3_10 );

unset( $fe_offset_8ef0bd49181921a6cf6168619ad677e3_10 );

unset( $fe_max_8ef0bd49181921a6cf6168619ad677e3_10 );

unset( $fe_reverse_8ef0bd49181921a6cf6168619ad677e3_10 );

unset( $fe_first_val_8ef0bd49181921a6cf6168619ad677e3_10 );

unset( $fe_last_val_8ef0bd49181921a6cf6168619ad677e3_10 );

unset( $fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_10 );

}

// foreach ends
$text .= '    ';
// undef $tr_class
$tpl->unsetLocalVariable( 'tr_class', $rootNamespace );

// undef $attr
$tpl->unsetLocalVariable( 'attr', $rootNamespace );

}
else
{
$text .= '    <tr><td>The item being viewed does not make use of any other objects.</td></tr>';
}
unset( $if_cond );
// if ends

$text .= '</table>

<br />


<table class="list" cellspacing="0" summary="Reverse object relation list to current object.">
<tr>
    <th>';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'reverse_related_objects_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['reverse_related_objects_count'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%related_objects_count' => $var3 );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var3 = array();
foreach ( $var2 as $var4 => $var5 )
{
  if ( is_int( $var4 ) )
    $var3['%' . ( ($var4%9) + 1 )] = $var5;
  else
    $var3[$var4] = $var5;
}
$var = strtr( 'Reverse related objects (%related_objects_count)', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</th>
    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'reverse_related_objects_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['reverse_related_objects_count'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <th>Class</th>
    <th>Relation type</th>
    ';
}
unset( $if_cond );
// if ends

$text .= '</tr>';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'reverse_related_objects_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['reverse_related_objects_count'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
// def $reverse_related_objects_grouped
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchReverseRelatedObjects' ),
  array(     'object_id' => $var1,
    'attribute_identifier' => null,
    'all_relations' => true,
    'group_by_attribute' => true,
    'sort_by' => array( array( "class_identifier",
              true ),
       array( "name",
              true ) ),
    'ignore_visibility' => null,
    'limit' => false,
    'offset' => false,
    'as_object' => true,
    'load_data_map' => false ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'reverse_related_objects_grouped', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'reverse_related_objects_grouped' is already defined.", array (
  0 => 
  array (
    0 => 74,
    1 => 4,
    2 => 3850,
  ),
  1 => 
  array (
    0 => 74,
    1 => 263,
    2 => 4109,
  ),
  2 => 'design/admin2/templates/relations.tpl',
) );
    $tpl->setVariable( 'reverse_related_objects_grouped', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'reverse_related_objects_grouped', $var, $rootNamespace );
}

$text .= '    ';
// def $reverse_related_objects_id_typed
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchReverseRelatedObjectsID' ),
  array(     'object_id' => $var1,
    'attribute_identifier' => "0",
    'all_relations' => false ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'reverse_related_objects_id_typed', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'reverse_related_objects_id_typed' is already defined.", array (
  0 => 
  array (
    0 => 75,
    1 => 4,
    2 => 4116,
  ),
  1 => 
  array (
    0 => 75,
    1 => 131,
    2 => 4243,
  ),
  2 => 'design/admin2/templates/relations.tpl',
) );
    $tpl->setVariable( 'reverse_related_objects_id_typed', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'reverse_related_objects_id_typed', $var, $rootNamespace );
}

$text .= '
    ';
// def $tr_class
if ( $tpl->hasVariable( 'tr_class', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'tr_class' is already defined.", array (
  0 => 
  array (
    0 => 77,
    1 => 4,
    2 => 4251,
  ),
  1 => 
  array (
    0 => 77,
    1 => 27,
    2 => 4274,
  ),
  2 => 'design/admin2/templates/relations.tpl',
) );
    $tpl->setVariable( 'tr_class', 'bglight', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'tr_class', 'bglight', $rootNamespace );
}

$text .= '    ';
// def $attr
if ( $tpl->hasVariable( 'attr', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'attr' is already defined.", array (
  0 => 
  array (
    0 => 78,
    1 => 4,
    2 => 4281,
  ),
  1 => 
  array (
    0 => 78,
    1 => 17,
    2 => 4294,
  ),
  2 => 'design/admin2/templates/relations.tpl',
) );
    $tpl->setVariable( 'attr', 0, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'attr', 0, $rootNamespace );
}

$text .= '    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_13 ) ) $fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_13 = array();
$fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_13[] = compact( 'fe_array_8ef0bd49181921a6cf6168619ad677e3_13', 'fe_array_keys_8ef0bd49181921a6cf6168619ad677e3_13', 'fe_n_items_8ef0bd49181921a6cf6168619ad677e3_13', 'fe_n_items_processed_8ef0bd49181921a6cf6168619ad677e3_13', 'fe_i_8ef0bd49181921a6cf6168619ad677e3_13', 'fe_key_8ef0bd49181921a6cf6168619ad677e3_13', 'fe_val_8ef0bd49181921a6cf6168619ad677e3_13', 'fe_offset_8ef0bd49181921a6cf6168619ad677e3_13', 'fe_max_8ef0bd49181921a6cf6168619ad677e3_13', 'fe_reverse_8ef0bd49181921a6cf6168619ad677e3_13', 'fe_first_val_8ef0bd49181921a6cf6168619ad677e3_13', 'fe_last_val_8ef0bd49181921a6cf6168619ad677e3_13' );
unset( $fe_array_8ef0bd49181921a6cf6168619ad677e3_13 );
unset( $fe_array_8ef0bd49181921a6cf6168619ad677e3_13 );
$fe_array_8ef0bd49181921a6cf6168619ad677e3_13 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'reverse_related_objects_grouped', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['reverse_related_objects_grouped'] : null;
if (! isset( $fe_array_8ef0bd49181921a6cf6168619ad677e3_13 ) ) $fe_array_8ef0bd49181921a6cf6168619ad677e3_13 = NULL;
while ( is_object( $fe_array_8ef0bd49181921a6cf6168619ad677e3_13 ) and method_exists( $fe_array_8ef0bd49181921a6cf6168619ad677e3_13, 'templateValue' ) )
    $fe_array_8ef0bd49181921a6cf6168619ad677e3_13 = $fe_array_8ef0bd49181921a6cf6168619ad677e3_13->templateValue();

$fe_array_keys_8ef0bd49181921a6cf6168619ad677e3_13 = is_array( $fe_array_8ef0bd49181921a6cf6168619ad677e3_13 ) ? array_keys( $fe_array_8ef0bd49181921a6cf6168619ad677e3_13 ) : array();
$fe_n_items_8ef0bd49181921a6cf6168619ad677e3_13 = count( $fe_array_keys_8ef0bd49181921a6cf6168619ad677e3_13 );
$fe_n_items_processed_8ef0bd49181921a6cf6168619ad677e3_13 = 0;
$fe_offset_8ef0bd49181921a6cf6168619ad677e3_13 = 0;
$fe_max_8ef0bd49181921a6cf6168619ad677e3_13 = $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_13 - $fe_offset_8ef0bd49181921a6cf6168619ad677e3_13;
$fe_reverse_8ef0bd49181921a6cf6168619ad677e3_13 = false;
if ( $fe_offset_8ef0bd49181921a6cf6168619ad677e3_13 < 0 || $fe_offset_8ef0bd49181921a6cf6168619ad677e3_13 >= $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_13 )
{
    $fe_offset_8ef0bd49181921a6cf6168619ad677e3_13 = ( $fe_offset_8ef0bd49181921a6cf6168619ad677e3_13 < 0 ) ? 0 : $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_13;
    if ( $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_13 || $fe_offset_8ef0bd49181921a6cf6168619ad677e3_13 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_8ef0bd49181921a6cf6168619ad677e3_13'. Array count: $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_13");   
}
}
if ( $fe_max_8ef0bd49181921a6cf6168619ad677e3_13 < 0 || $fe_offset_8ef0bd49181921a6cf6168619ad677e3_13 + $fe_max_8ef0bd49181921a6cf6168619ad677e3_13 > $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_13 )
{
    if ( $fe_max_8ef0bd49181921a6cf6168619ad677e3_13 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_8ef0bd49181921a6cf6168619ad677e3_13");
    $fe_max_8ef0bd49181921a6cf6168619ad677e3_13 = $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_13 - $fe_offset_8ef0bd49181921a6cf6168619ad677e3_13;
}
if ( $fe_reverse_8ef0bd49181921a6cf6168619ad677e3_13 )
{
    $fe_first_val_8ef0bd49181921a6cf6168619ad677e3_13 = $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_13 - 1 - $fe_offset_8ef0bd49181921a6cf6168619ad677e3_13;
    $fe_last_val_8ef0bd49181921a6cf6168619ad677e3_13  = 0;
}
else
{
    $fe_first_val_8ef0bd49181921a6cf6168619ad677e3_13 = $fe_offset_8ef0bd49181921a6cf6168619ad677e3_13;
    $fe_last_val_8ef0bd49181921a6cf6168619ad677e3_13  = $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_13 - 1;
}
// foreach
for ( $fe_i_8ef0bd49181921a6cf6168619ad677e3_13 = $fe_first_val_8ef0bd49181921a6cf6168619ad677e3_13; $fe_n_items_processed_8ef0bd49181921a6cf6168619ad677e3_13 < $fe_max_8ef0bd49181921a6cf6168619ad677e3_13 && ( $fe_reverse_8ef0bd49181921a6cf6168619ad677e3_13 ? $fe_i_8ef0bd49181921a6cf6168619ad677e3_13 >= $fe_last_val_8ef0bd49181921a6cf6168619ad677e3_13 : $fe_i_8ef0bd49181921a6cf6168619ad677e3_13 <= $fe_last_val_8ef0bd49181921a6cf6168619ad677e3_13 ); $fe_reverse_8ef0bd49181921a6cf6168619ad677e3_13 ? $fe_i_8ef0bd49181921a6cf6168619ad677e3_13-- : $fe_i_8ef0bd49181921a6cf6168619ad677e3_13++ )
{
$fe_key_8ef0bd49181921a6cf6168619ad677e3_13 = $fe_array_keys_8ef0bd49181921a6cf6168619ad677e3_13[$fe_i_8ef0bd49181921a6cf6168619ad677e3_13];
$fe_val_8ef0bd49181921a6cf6168619ad677e3_13 = $fe_array_8ef0bd49181921a6cf6168619ad677e3_13[$fe_key_8ef0bd49181921a6cf6168619ad677e3_13];
$vars[$rootNamespace]['related_objects_array'] = $fe_val_8ef0bd49181921a6cf6168619ad677e3_13;
$vars[$rootNamespace]['attribute_id'] = $fe_key_8ef0bd49181921a6cf6168619ad677e3_13;
$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_id'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) != ( 0 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_id'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchClassAttribute' ),
  array(     'attribute_id' => $var1,
    'version_id' => 0 ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'attr', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['attr'] = $var;
    unset( $var );
}
$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_12 ) ) $fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_12 = array();
$fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_12[] = compact( 'fe_array_8ef0bd49181921a6cf6168619ad677e3_12', 'fe_array_keys_8ef0bd49181921a6cf6168619ad677e3_12', 'fe_n_items_8ef0bd49181921a6cf6168619ad677e3_12', 'fe_n_items_processed_8ef0bd49181921a6cf6168619ad677e3_12', 'fe_i_8ef0bd49181921a6cf6168619ad677e3_12', 'fe_key_8ef0bd49181921a6cf6168619ad677e3_12', 'fe_val_8ef0bd49181921a6cf6168619ad677e3_12', 'fe_offset_8ef0bd49181921a6cf6168619ad677e3_12', 'fe_max_8ef0bd49181921a6cf6168619ad677e3_12', 'fe_reverse_8ef0bd49181921a6cf6168619ad677e3_12', 'fe_first_val_8ef0bd49181921a6cf6168619ad677e3_12', 'fe_last_val_8ef0bd49181921a6cf6168619ad677e3_12' );
unset( $fe_array_8ef0bd49181921a6cf6168619ad677e3_12 );
unset( $fe_array_8ef0bd49181921a6cf6168619ad677e3_12 );
$fe_array_8ef0bd49181921a6cf6168619ad677e3_12 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_objects_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_objects_array'] : null;
if (! isset( $fe_array_8ef0bd49181921a6cf6168619ad677e3_12 ) ) $fe_array_8ef0bd49181921a6cf6168619ad677e3_12 = NULL;
while ( is_object( $fe_array_8ef0bd49181921a6cf6168619ad677e3_12 ) and method_exists( $fe_array_8ef0bd49181921a6cf6168619ad677e3_12, 'templateValue' ) )
    $fe_array_8ef0bd49181921a6cf6168619ad677e3_12 = $fe_array_8ef0bd49181921a6cf6168619ad677e3_12->templateValue();

$fe_array_keys_8ef0bd49181921a6cf6168619ad677e3_12 = is_array( $fe_array_8ef0bd49181921a6cf6168619ad677e3_12 ) ? array_keys( $fe_array_8ef0bd49181921a6cf6168619ad677e3_12 ) : array();
$fe_n_items_8ef0bd49181921a6cf6168619ad677e3_12 = count( $fe_array_keys_8ef0bd49181921a6cf6168619ad677e3_12 );
$fe_n_items_processed_8ef0bd49181921a6cf6168619ad677e3_12 = 0;
$fe_offset_8ef0bd49181921a6cf6168619ad677e3_12 = 0;
$fe_max_8ef0bd49181921a6cf6168619ad677e3_12 = $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_12 - $fe_offset_8ef0bd49181921a6cf6168619ad677e3_12;
$fe_reverse_8ef0bd49181921a6cf6168619ad677e3_12 = false;
if ( $fe_offset_8ef0bd49181921a6cf6168619ad677e3_12 < 0 || $fe_offset_8ef0bd49181921a6cf6168619ad677e3_12 >= $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_12 )
{
    $fe_offset_8ef0bd49181921a6cf6168619ad677e3_12 = ( $fe_offset_8ef0bd49181921a6cf6168619ad677e3_12 < 0 ) ? 0 : $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_12;
    if ( $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_12 || $fe_offset_8ef0bd49181921a6cf6168619ad677e3_12 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_8ef0bd49181921a6cf6168619ad677e3_12'. Array count: $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_12");   
}
}
if ( $fe_max_8ef0bd49181921a6cf6168619ad677e3_12 < 0 || $fe_offset_8ef0bd49181921a6cf6168619ad677e3_12 + $fe_max_8ef0bd49181921a6cf6168619ad677e3_12 > $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_12 )
{
    if ( $fe_max_8ef0bd49181921a6cf6168619ad677e3_12 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_8ef0bd49181921a6cf6168619ad677e3_12");
    $fe_max_8ef0bd49181921a6cf6168619ad677e3_12 = $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_12 - $fe_offset_8ef0bd49181921a6cf6168619ad677e3_12;
}
if ( $fe_reverse_8ef0bd49181921a6cf6168619ad677e3_12 )
{
    $fe_first_val_8ef0bd49181921a6cf6168619ad677e3_12 = $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_12 - 1 - $fe_offset_8ef0bd49181921a6cf6168619ad677e3_12;
    $fe_last_val_8ef0bd49181921a6cf6168619ad677e3_12  = 0;
}
else
{
    $fe_first_val_8ef0bd49181921a6cf6168619ad677e3_12 = $fe_offset_8ef0bd49181921a6cf6168619ad677e3_12;
    $fe_last_val_8ef0bd49181921a6cf6168619ad677e3_12  = $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_12 - 1;
}
// foreach
for ( $fe_i_8ef0bd49181921a6cf6168619ad677e3_12 = $fe_first_val_8ef0bd49181921a6cf6168619ad677e3_12; $fe_n_items_processed_8ef0bd49181921a6cf6168619ad677e3_12 < $fe_max_8ef0bd49181921a6cf6168619ad677e3_12 && ( $fe_reverse_8ef0bd49181921a6cf6168619ad677e3_12 ? $fe_i_8ef0bd49181921a6cf6168619ad677e3_12 >= $fe_last_val_8ef0bd49181921a6cf6168619ad677e3_12 : $fe_i_8ef0bd49181921a6cf6168619ad677e3_12 <= $fe_last_val_8ef0bd49181921a6cf6168619ad677e3_12 ); $fe_reverse_8ef0bd49181921a6cf6168619ad677e3_12 ? $fe_i_8ef0bd49181921a6cf6168619ad677e3_12-- : $fe_i_8ef0bd49181921a6cf6168619ad677e3_12++ )
{
$fe_key_8ef0bd49181921a6cf6168619ad677e3_12 = $fe_array_keys_8ef0bd49181921a6cf6168619ad677e3_12[$fe_i_8ef0bd49181921a6cf6168619ad677e3_12];
$fe_val_8ef0bd49181921a6cf6168619ad677e3_12 = $fe_array_8ef0bd49181921a6cf6168619ad677e3_12[$fe_key_8ef0bd49181921a6cf6168619ad677e3_12];
$vars[$rootNamespace]['object'] = $fe_val_8ef0bd49181921a6cf6168619ad677e3_12;
$text .= '            <tr class="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tr_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tr_class'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '">
            <td>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$var1 = compiledFetchAttribute( $var, 'content_class' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'identifier' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'class_icon',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 3,
      1 => 'small',
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'object',
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
          1 => 'content_class',
          2 => false,
        ),
      ),
      2 => false,
    ),
    2 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'name',
          2 => false,
        ),
      ),
      2 => false,
    ),
    3 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'wash',
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
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '&nbsp;';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
$vars[$namespace]['object'] = $var;
unset( $var );
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( 'design' );
    $dKeys = $resH->keys();
}
if ( !isset( $dKeysStack ) )
{
    $dKeysStack = array();
}
$dKeysStack[] = $dKeys;
unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["object"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'match_ingroup_id_list' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_group"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'contentclass_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'section_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["section"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'class_identifier' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["class_identifier"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'remote_id' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["remote_id"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'state_id_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state"] = $dKey;
unset( $dKey );

unset( $dKey );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $dKey );
$dKey = ( array_key_exists( $namespace, $vars ) and array_key_exists( 'object', $vars[$namespace] ) ) ? $vars[$namespace]['object'] : null;
$dKey1 = compiledFetchAttribute( $dKey, 'state_identifier_array' );
unset( $dKey );
$dKey = $dKey1;
if (! isset( $dKey ) ) $dKey = NULL;
while ( is_object( $dKey ) and method_exists( $dKey, 'templateValue' ) )
    $dKey = $dKey->templateValue();

$dKeys["state_identifier"] = $dKey;
unset( $dKey );

$resourceFound = false;
if ( file_exists( 'var/ezflow_site/cache/template/compiled/text_linked-bc3ec57c0820d4ebf50ce255b772c42d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentView' : ( $currentNamespace . ':' . 'ContentView' );
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/standard/templates/content/view/text_linked.tpl' );
include( '' . 'var/ezflow_site/cache/template/compiled/text_linked-bc3ec57c0820d4ebf50ce255b772c42d.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$currentNamespace = $rootNamespace = !$currentNamespace ? 'ContentView' : ( $currentNamespace . ':' . 'ContentView' );
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/standard/templates/content/view/text_linked.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

$dKeys = array_pop( $dKeysStack );
$namespace = $currentNamespace;
if ( $namespace == '' )
    $namespace = "ContentView";
else
    $namespace .= ':ContentView';
unset( $vars[$namespace]['object'] );
$text .= '</td>
            <td>';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$var2 = compiledFetchAttribute( $var1, 'content_class' );
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

$text .= '</td>
            <td>
                ';
unset( $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_89 );
unset( $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_891 );
unset( $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_891 );
$elseif_cond_8ef0bd49181921a6cf6168619ad677e3_891 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_id'] : null;
if (! isset( $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_891 ) ) $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_891 = NULL;
while ( is_object( $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_891 ) and method_exists( $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_891, 'templateValue' ) )
    $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_891 = $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_891->templateValue();
while ( is_object( $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_891 ) and method_exists( $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_891, 'templateValue' ) )
    $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_891 = $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_891->templateValue();
$elseif_cond_8ef0bd49181921a6cf6168619ad677e3_89 = ( ( $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_891 ) == ( 0 ) );
unset( $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_891 );
if (! isset( $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_89 ) ) $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_89 = NULL;
while ( is_object( $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_89 ) and method_exists( $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_89, 'templateValue' ) )
    $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_89 = $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_89->templateValue();

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attribute_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attribute_id'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = ( ( $if_cond2 ) != ( 0 ) );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'reverse_related_objects_id_typed', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['reverse_related_objects_id_typed'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'attribute' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$if_cond5 = compiledFetchAttribute( $if_cond4, 'id' );
unset( $if_cond4 );
$if_cond4 = $if_cond5;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
if( is_string( $if_cond3 ) )
{
  $if_cond2 = ( strpos( $if_cond3, $if_cond4 ) !== false );
}
else if ( is_array( $if_cond3 ) )
{
  $if_cond2 = in_array( $if_cond4, $if_cond3 );
}
else
{
$if_cond2 = false;
}unset( $if_cond3, $if_cond4 );
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
$text .= '                    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_type_names', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_type_names'] : null;
$var1 = compiledFetchAttribute( $var, 'attribute' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' ( ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'attr', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['attr'] : null;
$var1 = compiledFetchAttribute( $var, 'name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' )
                ';
}
elseif ( $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_89 )
{
$text .= '                    ';
// def $relation_name_array
if ( $tpl->hasVariable( 'relation_name_array', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'relation_name_array' is already defined.", array (
  0 => 
  array (
    0 => 91,
    1 => 20,
    2 => 5139,
  ),
  1 => 
  array (
    0 => 91,
    1 => 54,
    2 => 5173,
  ),
  2 => 'design/admin2/templates/relations.tpl',
) );
    $tpl->setVariable( 'relation_name_array', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'relation_name_array', array (
), $rootNamespace );
}

$text .= '                    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_11 ) ) $fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_11 = array();
$fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_11[] = compact( 'fe_array_8ef0bd49181921a6cf6168619ad677e3_11', 'fe_array_keys_8ef0bd49181921a6cf6168619ad677e3_11', 'fe_n_items_8ef0bd49181921a6cf6168619ad677e3_11', 'fe_n_items_processed_8ef0bd49181921a6cf6168619ad677e3_11', 'fe_i_8ef0bd49181921a6cf6168619ad677e3_11', 'fe_key_8ef0bd49181921a6cf6168619ad677e3_11', 'fe_val_8ef0bd49181921a6cf6168619ad677e3_11', 'fe_offset_8ef0bd49181921a6cf6168619ad677e3_11', 'fe_max_8ef0bd49181921a6cf6168619ad677e3_11', 'fe_reverse_8ef0bd49181921a6cf6168619ad677e3_11', 'fe_first_val_8ef0bd49181921a6cf6168619ad677e3_11', 'fe_last_val_8ef0bd49181921a6cf6168619ad677e3_11' );
unset( $fe_array_8ef0bd49181921a6cf6168619ad677e3_11 );
unset( $fe_array_8ef0bd49181921a6cf6168619ad677e3_11 );
$fe_array_8ef0bd49181921a6cf6168619ad677e3_11 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'reverse_related_objects_id_typed', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['reverse_related_objects_id_typed'] : null;
if (! isset( $fe_array_8ef0bd49181921a6cf6168619ad677e3_11 ) ) $fe_array_8ef0bd49181921a6cf6168619ad677e3_11 = NULL;
while ( is_object( $fe_array_8ef0bd49181921a6cf6168619ad677e3_11 ) and method_exists( $fe_array_8ef0bd49181921a6cf6168619ad677e3_11, 'templateValue' ) )
    $fe_array_8ef0bd49181921a6cf6168619ad677e3_11 = $fe_array_8ef0bd49181921a6cf6168619ad677e3_11->templateValue();

$fe_array_keys_8ef0bd49181921a6cf6168619ad677e3_11 = is_array( $fe_array_8ef0bd49181921a6cf6168619ad677e3_11 ) ? array_keys( $fe_array_8ef0bd49181921a6cf6168619ad677e3_11 ) : array();
$fe_n_items_8ef0bd49181921a6cf6168619ad677e3_11 = count( $fe_array_keys_8ef0bd49181921a6cf6168619ad677e3_11 );
$fe_n_items_processed_8ef0bd49181921a6cf6168619ad677e3_11 = 0;
$fe_offset_8ef0bd49181921a6cf6168619ad677e3_11 = 0;
$fe_max_8ef0bd49181921a6cf6168619ad677e3_11 = $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_11 - $fe_offset_8ef0bd49181921a6cf6168619ad677e3_11;
$fe_reverse_8ef0bd49181921a6cf6168619ad677e3_11 = false;
if ( $fe_offset_8ef0bd49181921a6cf6168619ad677e3_11 < 0 || $fe_offset_8ef0bd49181921a6cf6168619ad677e3_11 >= $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_11 )
{
    $fe_offset_8ef0bd49181921a6cf6168619ad677e3_11 = ( $fe_offset_8ef0bd49181921a6cf6168619ad677e3_11 < 0 ) ? 0 : $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_11;
    if ( $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_11 || $fe_offset_8ef0bd49181921a6cf6168619ad677e3_11 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_8ef0bd49181921a6cf6168619ad677e3_11'. Array count: $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_11");   
}
}
if ( $fe_max_8ef0bd49181921a6cf6168619ad677e3_11 < 0 || $fe_offset_8ef0bd49181921a6cf6168619ad677e3_11 + $fe_max_8ef0bd49181921a6cf6168619ad677e3_11 > $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_11 )
{
    if ( $fe_max_8ef0bd49181921a6cf6168619ad677e3_11 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_8ef0bd49181921a6cf6168619ad677e3_11");
    $fe_max_8ef0bd49181921a6cf6168619ad677e3_11 = $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_11 - $fe_offset_8ef0bd49181921a6cf6168619ad677e3_11;
}
if ( $fe_reverse_8ef0bd49181921a6cf6168619ad677e3_11 )
{
    $fe_first_val_8ef0bd49181921a6cf6168619ad677e3_11 = $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_11 - 1 - $fe_offset_8ef0bd49181921a6cf6168619ad677e3_11;
    $fe_last_val_8ef0bd49181921a6cf6168619ad677e3_11  = 0;
}
else
{
    $fe_first_val_8ef0bd49181921a6cf6168619ad677e3_11 = $fe_offset_8ef0bd49181921a6cf6168619ad677e3_11;
    $fe_last_val_8ef0bd49181921a6cf6168619ad677e3_11  = $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_11 - 1;
}
// foreach
for ( $fe_i_8ef0bd49181921a6cf6168619ad677e3_11 = $fe_first_val_8ef0bd49181921a6cf6168619ad677e3_11; $fe_n_items_processed_8ef0bd49181921a6cf6168619ad677e3_11 < $fe_max_8ef0bd49181921a6cf6168619ad677e3_11 && ( $fe_reverse_8ef0bd49181921a6cf6168619ad677e3_11 ? $fe_i_8ef0bd49181921a6cf6168619ad677e3_11 >= $fe_last_val_8ef0bd49181921a6cf6168619ad677e3_11 : $fe_i_8ef0bd49181921a6cf6168619ad677e3_11 <= $fe_last_val_8ef0bd49181921a6cf6168619ad677e3_11 ); $fe_reverse_8ef0bd49181921a6cf6168619ad677e3_11 ? $fe_i_8ef0bd49181921a6cf6168619ad677e3_11-- : $fe_i_8ef0bd49181921a6cf6168619ad677e3_11++ )
{
$fe_key_8ef0bd49181921a6cf6168619ad677e3_11 = $fe_array_keys_8ef0bd49181921a6cf6168619ad677e3_11[$fe_i_8ef0bd49181921a6cf6168619ad677e3_11];
$fe_val_8ef0bd49181921a6cf6168619ad677e3_11 = $fe_array_8ef0bd49181921a6cf6168619ad677e3_11[$fe_key_8ef0bd49181921a6cf6168619ad677e3_11];
$vars[$rootNamespace]['relation_id_array'] = $fe_val_8ef0bd49181921a6cf6168619ad677e3_11;
$vars[$rootNamespace]['relation_type'] = $fe_key_8ef0bd49181921a6cf6168619ad677e3_11;
$text .= '                        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_type'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) != ( 'attribute' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_id_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_id_array'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
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
$text .= '                                ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_type_names', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_type_names'] : null;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_type'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = compiledFetchAttribute( $var1, $var3 );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_name_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_name_array'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( is_string( $var2 ) )
    $var = $var2 . implode( '', array( $var1 ) );
else if( is_array( $var2 ) )
    $var = array_merge( $var2, array( $var1 ) );
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'relation_name_array', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['relation_name_array'] = $var;
    unset( $var );
}
$text .= '                            ';
}
unset( $if_cond );
// if ends

$text .= '                        ';
}
unset( $if_cond );
// if ends

$text .= '                    ';
$fe_n_items_processed_8ef0bd49181921a6cf6168619ad677e3_11++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_11 ) ) extract( array_pop( $fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_11 ) );

else
{

unset( $fe_array_8ef0bd49181921a6cf6168619ad677e3_11 );

unset( $fe_array_keys_8ef0bd49181921a6cf6168619ad677e3_11 );

unset( $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_11 );

unset( $fe_n_items_processed_8ef0bd49181921a6cf6168619ad677e3_11 );

unset( $fe_i_8ef0bd49181921a6cf6168619ad677e3_11 );

unset( $fe_key_8ef0bd49181921a6cf6168619ad677e3_11 );

unset( $fe_val_8ef0bd49181921a6cf6168619ad677e3_11 );

unset( $fe_offset_8ef0bd49181921a6cf6168619ad677e3_11 );

unset( $fe_max_8ef0bd49181921a6cf6168619ad677e3_11 );

unset( $fe_reverse_8ef0bd49181921a6cf6168619ad677e3_11 );

unset( $fe_first_val_8ef0bd49181921a6cf6168619ad677e3_11 );

unset( $fe_last_val_8ef0bd49181921a6cf6168619ad677e3_11 );

unset( $fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_11 );

}

// foreach ends
$text .= '                    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_name_delimiter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_name_delimiter'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_name_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_name_array'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = implode( $var1, $var2 );unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
                    ';
// undef $relation_name_array
$tpl->unsetLocalVariable( 'relation_name_array', $rootNamespace );

$text .= '                ';
}
unset( $if_cond );
// if ends

unset( $elseif_cond_8ef0bd49181921a6cf6168619ad677e3_89 );

$text .= '            </td>
            </tr>
            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tr_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tr_class'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'bdark' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'tr_class', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['tr_class'] = 'bglight';
}
$text .= '            ';
}
else
{
$text .= '                ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'tr_class', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['tr_class'] = 'bgdark';
}
$text .= '            ';
}
unset( $if_cond );
// if ends

$text .= '        ';
$fe_n_items_processed_8ef0bd49181921a6cf6168619ad677e3_12++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_12 ) ) extract( array_pop( $fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_12 ) );

else
{

unset( $fe_array_8ef0bd49181921a6cf6168619ad677e3_12 );

unset( $fe_array_keys_8ef0bd49181921a6cf6168619ad677e3_12 );

unset( $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_12 );

unset( $fe_n_items_processed_8ef0bd49181921a6cf6168619ad677e3_12 );

unset( $fe_i_8ef0bd49181921a6cf6168619ad677e3_12 );

unset( $fe_key_8ef0bd49181921a6cf6168619ad677e3_12 );

unset( $fe_val_8ef0bd49181921a6cf6168619ad677e3_12 );

unset( $fe_offset_8ef0bd49181921a6cf6168619ad677e3_12 );

unset( $fe_max_8ef0bd49181921a6cf6168619ad677e3_12 );

unset( $fe_reverse_8ef0bd49181921a6cf6168619ad677e3_12 );

unset( $fe_first_val_8ef0bd49181921a6cf6168619ad677e3_12 );

unset( $fe_last_val_8ef0bd49181921a6cf6168619ad677e3_12 );

unset( $fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_12 );

}

// foreach ends
$text .= '    ';
$fe_n_items_processed_8ef0bd49181921a6cf6168619ad677e3_13++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_13 ) ) extract( array_pop( $fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_13 ) );

else
{

unset( $fe_array_8ef0bd49181921a6cf6168619ad677e3_13 );

unset( $fe_array_keys_8ef0bd49181921a6cf6168619ad677e3_13 );

unset( $fe_n_items_8ef0bd49181921a6cf6168619ad677e3_13 );

unset( $fe_n_items_processed_8ef0bd49181921a6cf6168619ad677e3_13 );

unset( $fe_i_8ef0bd49181921a6cf6168619ad677e3_13 );

unset( $fe_key_8ef0bd49181921a6cf6168619ad677e3_13 );

unset( $fe_val_8ef0bd49181921a6cf6168619ad677e3_13 );

unset( $fe_offset_8ef0bd49181921a6cf6168619ad677e3_13 );

unset( $fe_max_8ef0bd49181921a6cf6168619ad677e3_13 );

unset( $fe_reverse_8ef0bd49181921a6cf6168619ad677e3_13 );

unset( $fe_first_val_8ef0bd49181921a6cf6168619ad677e3_13 );

unset( $fe_last_val_8ef0bd49181921a6cf6168619ad677e3_13 );

unset( $fe_variable_stack_8ef0bd49181921a6cf6168619ad677e3_13 );

}

// foreach ends
$text .= '    ';
// undef $tr_class
$tpl->unsetLocalVariable( 'tr_class', $rootNamespace );

// undef $attr
$tpl->unsetLocalVariable( 'attr', $rootNamespace );

}
else
{
$text .= '    <tr><td>The item being viewed is not used by any other objects.</td></tr>';
}
unset( $if_cond );
// if ends

$text .= '</table>';

$setArray = $oldSetArray_bba76c4681a575bb8aa04e505ba05274;
$tpl->Level--;
?>
