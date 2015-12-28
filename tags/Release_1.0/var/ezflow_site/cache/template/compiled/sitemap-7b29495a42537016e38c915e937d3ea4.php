<?php
// URI:       design:node/view/sitemap.tpl
// Filename:  extension/ezwebin/design/ezwebin/templates/node/view/sitemap.tpl
// Timestamp: 1295903531 (Mon Jan 24 14:12:11 MST 2011)
$oldSetArray_3024307425facc104e50f4ed94405e71 = isset( $setArray ) ? $setArray : array();
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

// def $page_limit
if ( $tpl->hasVariable( 'page_limit', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'page_limit' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 7,
    1 => 72,
    2 => 350,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/node/view/sitemap.tpl',
) );
    $tpl->setVariable( 'page_limit', 10, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'page_limit', 10, $rootNamespace );
}

// def $col_count
if ( $tpl->hasVariable( 'col_count', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'col_count' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 7,
    1 => 72,
    2 => 350,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/node/view/sitemap.tpl',
) );
    $tpl->setVariable( 'col_count', 2, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'col_count', 2, $rootNamespace );
}

// def $sub_children
if ( $tpl->hasVariable( 'sub_children', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'sub_children' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 7,
    1 => 72,
    2 => 350,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/node/view/sitemap.tpl',
) );
    $tpl->setVariable( 'sub_children', 0, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'sub_children', 0, $rootNamespace );
}

// def $children
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var2 = compiledFetchAttribute( $var1, 'node_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var3 = compiledFetchAttribute( $var2, 'sort_array' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
$var4 = compiledFetchAttribute( $var3, 'offset' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['page_limit'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTree' ),
  array(     'parent_node_id' => $var1,
    'sort_by' => $var2,
    'only_translated' => false,
    'language' => false,
    'offset' => $var3,
    'limit' => $var4,
    'depth' => 1,
    'depth_operator' => "le",
    'class_id' => false,
    'attribute_filter' => false,
    'extended_attribute_filter' => false,
    'class_filter_type' => false,
    'class_filter_array' => false,
    'group_by' => false,
    'main_node_only' => false,
    'ignore_visibility' => false,
    'limitation' => null,
    'as_object' => null,
    'objectname_filter' => null,
    'load_data_map' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2, $var3, $var4 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'children', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'children' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 7,
    1 => 72,
    2 => 350,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/node/view/sitemap.tpl',
) );
    $tpl->setVariable( 'children', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'children', $var, $rootNamespace );
}

$text .= '<div class="border-box">
<div class="border-tl"><div class="border-tr"><div class="border-tc"></div></div></div>
<div class="border-ml"><div class="border-mr"><div class="border-mc float-break">

<div class="content-view-sitemap">

<div class="attribute-header">
    <h1 class="long">Site map ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
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

$text .= '</h1>
</div>

<table width="100%" cellspacing="0" cellpadding="4">
<tr>';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_41d75d33c096b4c02dd3946d9f3b04e7_2 ) ) $fe_variable_stack_41d75d33c096b4c02dd3946d9f3b04e7_2 = array();
$fe_variable_stack_41d75d33c096b4c02dd3946d9f3b04e7_2[] = compact( 'fe_array_41d75d33c096b4c02dd3946d9f3b04e7_2', 'fe_array_keys_41d75d33c096b4c02dd3946d9f3b04e7_2', 'fe_n_items_41d75d33c096b4c02dd3946d9f3b04e7_2', 'fe_n_items_processed_41d75d33c096b4c02dd3946d9f3b04e7_2', 'fe_i_41d75d33c096b4c02dd3946d9f3b04e7_2', 'fe_key_41d75d33c096b4c02dd3946d9f3b04e7_2', 'fe_val_41d75d33c096b4c02dd3946d9f3b04e7_2', 'fe_offset_41d75d33c096b4c02dd3946d9f3b04e7_2', 'fe_max_41d75d33c096b4c02dd3946d9f3b04e7_2', 'fe_reverse_41d75d33c096b4c02dd3946d9f3b04e7_2', 'fe_first_val_41d75d33c096b4c02dd3946d9f3b04e7_2', 'fe_last_val_41d75d33c096b4c02dd3946d9f3b04e7_2' );
unset( $fe_array_41d75d33c096b4c02dd3946d9f3b04e7_2 );
unset( $fe_array_41d75d33c096b4c02dd3946d9f3b04e7_2 );
$fe_array_41d75d33c096b4c02dd3946d9f3b04e7_2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'children', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['children'] : null;
if (! isset( $fe_array_41d75d33c096b4c02dd3946d9f3b04e7_2 ) ) $fe_array_41d75d33c096b4c02dd3946d9f3b04e7_2 = NULL;
while ( is_object( $fe_array_41d75d33c096b4c02dd3946d9f3b04e7_2 ) and method_exists( $fe_array_41d75d33c096b4c02dd3946d9f3b04e7_2, 'templateValue' ) )
    $fe_array_41d75d33c096b4c02dd3946d9f3b04e7_2 = $fe_array_41d75d33c096b4c02dd3946d9f3b04e7_2->templateValue();

$fe_array_keys_41d75d33c096b4c02dd3946d9f3b04e7_2 = is_array( $fe_array_41d75d33c096b4c02dd3946d9f3b04e7_2 ) ? array_keys( $fe_array_41d75d33c096b4c02dd3946d9f3b04e7_2 ) : array();
$fe_n_items_41d75d33c096b4c02dd3946d9f3b04e7_2 = count( $fe_array_keys_41d75d33c096b4c02dd3946d9f3b04e7_2 );
$fe_n_items_processed_41d75d33c096b4c02dd3946d9f3b04e7_2 = 0;
$fe_offset_41d75d33c096b4c02dd3946d9f3b04e7_2 = 0;
$fe_max_41d75d33c096b4c02dd3946d9f3b04e7_2 = $fe_n_items_41d75d33c096b4c02dd3946d9f3b04e7_2 - $fe_offset_41d75d33c096b4c02dd3946d9f3b04e7_2;
$fe_reverse_41d75d33c096b4c02dd3946d9f3b04e7_2 = false;
if ( $fe_offset_41d75d33c096b4c02dd3946d9f3b04e7_2 < 0 || $fe_offset_41d75d33c096b4c02dd3946d9f3b04e7_2 >= $fe_n_items_41d75d33c096b4c02dd3946d9f3b04e7_2 )
{
    $fe_offset_41d75d33c096b4c02dd3946d9f3b04e7_2 = ( $fe_offset_41d75d33c096b4c02dd3946d9f3b04e7_2 < 0 ) ? 0 : $fe_n_items_41d75d33c096b4c02dd3946d9f3b04e7_2;
    if ( $fe_n_items_41d75d33c096b4c02dd3946d9f3b04e7_2 || $fe_offset_41d75d33c096b4c02dd3946d9f3b04e7_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_41d75d33c096b4c02dd3946d9f3b04e7_2'. Array count: $fe_n_items_41d75d33c096b4c02dd3946d9f3b04e7_2");   
}
}
if ( $fe_max_41d75d33c096b4c02dd3946d9f3b04e7_2 < 0 || $fe_offset_41d75d33c096b4c02dd3946d9f3b04e7_2 + $fe_max_41d75d33c096b4c02dd3946d9f3b04e7_2 > $fe_n_items_41d75d33c096b4c02dd3946d9f3b04e7_2 )
{
    if ( $fe_max_41d75d33c096b4c02dd3946d9f3b04e7_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_41d75d33c096b4c02dd3946d9f3b04e7_2");
    $fe_max_41d75d33c096b4c02dd3946d9f3b04e7_2 = $fe_n_items_41d75d33c096b4c02dd3946d9f3b04e7_2 - $fe_offset_41d75d33c096b4c02dd3946d9f3b04e7_2;
}
if ( $fe_reverse_41d75d33c096b4c02dd3946d9f3b04e7_2 )
{
    $fe_first_val_41d75d33c096b4c02dd3946d9f3b04e7_2 = $fe_n_items_41d75d33c096b4c02dd3946d9f3b04e7_2 - 1 - $fe_offset_41d75d33c096b4c02dd3946d9f3b04e7_2;
    $fe_last_val_41d75d33c096b4c02dd3946d9f3b04e7_2  = 0;
}
else
{
    $fe_first_val_41d75d33c096b4c02dd3946d9f3b04e7_2 = $fe_offset_41d75d33c096b4c02dd3946d9f3b04e7_2;
    $fe_last_val_41d75d33c096b4c02dd3946d9f3b04e7_2  = $fe_n_items_41d75d33c096b4c02dd3946d9f3b04e7_2 - 1;
}
// foreach
for ( $fe_i_41d75d33c096b4c02dd3946d9f3b04e7_2 = $fe_first_val_41d75d33c096b4c02dd3946d9f3b04e7_2; $fe_n_items_processed_41d75d33c096b4c02dd3946d9f3b04e7_2 < $fe_max_41d75d33c096b4c02dd3946d9f3b04e7_2 && ( $fe_reverse_41d75d33c096b4c02dd3946d9f3b04e7_2 ? $fe_i_41d75d33c096b4c02dd3946d9f3b04e7_2 >= $fe_last_val_41d75d33c096b4c02dd3946d9f3b04e7_2 : $fe_i_41d75d33c096b4c02dd3946d9f3b04e7_2 <= $fe_last_val_41d75d33c096b4c02dd3946d9f3b04e7_2 ); $fe_reverse_41d75d33c096b4c02dd3946d9f3b04e7_2 ? $fe_i_41d75d33c096b4c02dd3946d9f3b04e7_2-- : $fe_i_41d75d33c096b4c02dd3946d9f3b04e7_2++ )
{
$fe_key_41d75d33c096b4c02dd3946d9f3b04e7_2 = $fe_array_keys_41d75d33c096b4c02dd3946d9f3b04e7_2[$fe_i_41d75d33c096b4c02dd3946d9f3b04e7_2];
$fe_val_41d75d33c096b4c02dd3946d9f3b04e7_2 = $fe_array_41d75d33c096b4c02dd3946d9f3b04e7_2[$fe_key_41d75d33c096b4c02dd3946d9f3b04e7_2];
$vars[$rootNamespace]['child'] = $fe_val_41d75d33c096b4c02dd3946d9f3b04e7_2;
$vars[$rootNamespace]['key'] = $fe_key_41d75d33c096b4c02dd3946d9f3b04e7_2;
$text .= '    <td>
    <h2><a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'child', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['child'] : null;
$var2 = compiledFetchAttribute( $var1, 'url_alias' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

//include_once( 'lib/ezutils/classes/ezuri.php' );
eZURI::transformURI( $var1, false, 'relative' );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'child', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['child'] : null;
$var1 = compiledFetchAttribute( $var, 'name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</a></h2>
    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'child', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['child'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'class_identifier' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'event_calendar' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'child', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['child'] : null;
$var2 = compiledFetchAttribute( $var1, 'node_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['page_limit'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTree' ),
  array(     'parent_node_id' => $var1,
    'sort_by' => array( "attribute",
       false,
       "event/from_time" ),
    'only_translated' => false,
    'language' => false,
    'offset' => false,
    'limit' => $var2,
    'depth' => 1,
    'depth_operator' => "le",
    'class_id' => false,
    'attribute_filter' => false,
    'extended_attribute_filter' => false,
    'class_filter_type' => false,
    'class_filter_array' => false,
    'group_by' => false,
    'main_node_only' => false,
    'ignore_visibility' => false,
    'limitation' => null,
    'as_object' => null,
    'objectname_filter' => null,
    'load_data_map' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'sub_children', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['sub_children'] = $var;
    unset( $var );
}
$text .= '    ';
}
else
{
$text .= '        ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'child', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['child'] : null;
$var2 = compiledFetchAttribute( $var1, 'node_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'child', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['child'] : null;
$var3 = compiledFetchAttribute( $var2, 'sort_array' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'page_limit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['page_limit'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchObjectTree' ),
  array(     'parent_node_id' => $var1,
    'sort_by' => $var2,
    'only_translated' => false,
    'language' => false,
    'offset' => false,
    'limit' => $var3,
    'depth' => 1,
    'depth_operator' => "le",
    'class_id' => false,
    'attribute_filter' => false,
    'extended_attribute_filter' => false,
    'class_filter_type' => false,
    'class_filter_array' => false,
    'group_by' => false,
    'main_node_only' => false,
    'ignore_visibility' => false,
    'limitation' => null,
    'as_object' => null,
    'objectname_filter' => null,
    'load_data_map' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'sub_children', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['sub_children'] = $var;
    unset( $var );
}
$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '    <ul>
    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_41d75d33c096b4c02dd3946d9f3b04e7_1 ) ) $fe_variable_stack_41d75d33c096b4c02dd3946d9f3b04e7_1 = array();
$fe_variable_stack_41d75d33c096b4c02dd3946d9f3b04e7_1[] = compact( 'fe_array_41d75d33c096b4c02dd3946d9f3b04e7_1', 'fe_array_keys_41d75d33c096b4c02dd3946d9f3b04e7_1', 'fe_n_items_41d75d33c096b4c02dd3946d9f3b04e7_1', 'fe_n_items_processed_41d75d33c096b4c02dd3946d9f3b04e7_1', 'fe_i_41d75d33c096b4c02dd3946d9f3b04e7_1', 'fe_key_41d75d33c096b4c02dd3946d9f3b04e7_1', 'fe_val_41d75d33c096b4c02dd3946d9f3b04e7_1', 'fe_offset_41d75d33c096b4c02dd3946d9f3b04e7_1', 'fe_max_41d75d33c096b4c02dd3946d9f3b04e7_1', 'fe_reverse_41d75d33c096b4c02dd3946d9f3b04e7_1', 'fe_first_val_41d75d33c096b4c02dd3946d9f3b04e7_1', 'fe_last_val_41d75d33c096b4c02dd3946d9f3b04e7_1' );
unset( $fe_array_41d75d33c096b4c02dd3946d9f3b04e7_1 );
unset( $fe_array_41d75d33c096b4c02dd3946d9f3b04e7_1 );
$fe_array_41d75d33c096b4c02dd3946d9f3b04e7_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sub_children', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sub_children'] : null;
if (! isset( $fe_array_41d75d33c096b4c02dd3946d9f3b04e7_1 ) ) $fe_array_41d75d33c096b4c02dd3946d9f3b04e7_1 = NULL;
while ( is_object( $fe_array_41d75d33c096b4c02dd3946d9f3b04e7_1 ) and method_exists( $fe_array_41d75d33c096b4c02dd3946d9f3b04e7_1, 'templateValue' ) )
    $fe_array_41d75d33c096b4c02dd3946d9f3b04e7_1 = $fe_array_41d75d33c096b4c02dd3946d9f3b04e7_1->templateValue();

$fe_array_keys_41d75d33c096b4c02dd3946d9f3b04e7_1 = is_array( $fe_array_41d75d33c096b4c02dd3946d9f3b04e7_1 ) ? array_keys( $fe_array_41d75d33c096b4c02dd3946d9f3b04e7_1 ) : array();
$fe_n_items_41d75d33c096b4c02dd3946d9f3b04e7_1 = count( $fe_array_keys_41d75d33c096b4c02dd3946d9f3b04e7_1 );
$fe_n_items_processed_41d75d33c096b4c02dd3946d9f3b04e7_1 = 0;
$fe_offset_41d75d33c096b4c02dd3946d9f3b04e7_1 = 0;
$fe_max_41d75d33c096b4c02dd3946d9f3b04e7_1 = $fe_n_items_41d75d33c096b4c02dd3946d9f3b04e7_1 - $fe_offset_41d75d33c096b4c02dd3946d9f3b04e7_1;
$fe_reverse_41d75d33c096b4c02dd3946d9f3b04e7_1 = false;
if ( $fe_offset_41d75d33c096b4c02dd3946d9f3b04e7_1 < 0 || $fe_offset_41d75d33c096b4c02dd3946d9f3b04e7_1 >= $fe_n_items_41d75d33c096b4c02dd3946d9f3b04e7_1 )
{
    $fe_offset_41d75d33c096b4c02dd3946d9f3b04e7_1 = ( $fe_offset_41d75d33c096b4c02dd3946d9f3b04e7_1 < 0 ) ? 0 : $fe_n_items_41d75d33c096b4c02dd3946d9f3b04e7_1;
    if ( $fe_n_items_41d75d33c096b4c02dd3946d9f3b04e7_1 || $fe_offset_41d75d33c096b4c02dd3946d9f3b04e7_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_41d75d33c096b4c02dd3946d9f3b04e7_1'. Array count: $fe_n_items_41d75d33c096b4c02dd3946d9f3b04e7_1");   
}
}
if ( $fe_max_41d75d33c096b4c02dd3946d9f3b04e7_1 < 0 || $fe_offset_41d75d33c096b4c02dd3946d9f3b04e7_1 + $fe_max_41d75d33c096b4c02dd3946d9f3b04e7_1 > $fe_n_items_41d75d33c096b4c02dd3946d9f3b04e7_1 )
{
    if ( $fe_max_41d75d33c096b4c02dd3946d9f3b04e7_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_41d75d33c096b4c02dd3946d9f3b04e7_1");
    $fe_max_41d75d33c096b4c02dd3946d9f3b04e7_1 = $fe_n_items_41d75d33c096b4c02dd3946d9f3b04e7_1 - $fe_offset_41d75d33c096b4c02dd3946d9f3b04e7_1;
}
if ( $fe_reverse_41d75d33c096b4c02dd3946d9f3b04e7_1 )
{
    $fe_first_val_41d75d33c096b4c02dd3946d9f3b04e7_1 = $fe_n_items_41d75d33c096b4c02dd3946d9f3b04e7_1 - 1 - $fe_offset_41d75d33c096b4c02dd3946d9f3b04e7_1;
    $fe_last_val_41d75d33c096b4c02dd3946d9f3b04e7_1  = 0;
}
else
{
    $fe_first_val_41d75d33c096b4c02dd3946d9f3b04e7_1 = $fe_offset_41d75d33c096b4c02dd3946d9f3b04e7_1;
    $fe_last_val_41d75d33c096b4c02dd3946d9f3b04e7_1  = $fe_n_items_41d75d33c096b4c02dd3946d9f3b04e7_1 - 1;
}
// foreach
for ( $fe_i_41d75d33c096b4c02dd3946d9f3b04e7_1 = $fe_first_val_41d75d33c096b4c02dd3946d9f3b04e7_1; $fe_n_items_processed_41d75d33c096b4c02dd3946d9f3b04e7_1 < $fe_max_41d75d33c096b4c02dd3946d9f3b04e7_1 && ( $fe_reverse_41d75d33c096b4c02dd3946d9f3b04e7_1 ? $fe_i_41d75d33c096b4c02dd3946d9f3b04e7_1 >= $fe_last_val_41d75d33c096b4c02dd3946d9f3b04e7_1 : $fe_i_41d75d33c096b4c02dd3946d9f3b04e7_1 <= $fe_last_val_41d75d33c096b4c02dd3946d9f3b04e7_1 ); $fe_reverse_41d75d33c096b4c02dd3946d9f3b04e7_1 ? $fe_i_41d75d33c096b4c02dd3946d9f3b04e7_1-- : $fe_i_41d75d33c096b4c02dd3946d9f3b04e7_1++ )
{
$fe_key_41d75d33c096b4c02dd3946d9f3b04e7_1 = $fe_array_keys_41d75d33c096b4c02dd3946d9f3b04e7_1[$fe_i_41d75d33c096b4c02dd3946d9f3b04e7_1];
$fe_val_41d75d33c096b4c02dd3946d9f3b04e7_1 = $fe_array_41d75d33c096b4c02dd3946d9f3b04e7_1[$fe_key_41d75d33c096b4c02dd3946d9f3b04e7_1];
$vars[$rootNamespace]['sub_child'] = $fe_val_41d75d33c096b4c02dd3946d9f3b04e7_1;
$text .= '    <li><a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sub_child', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sub_child'] : null;
$var2 = compiledFetchAttribute( $var1, 'url_alias' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

//include_once( 'lib/ezutils/classes/ezuri.php' );
eZURI::transformURI( $var1, false, 'relative' );
$var1 = '"' . $var1 . '"';
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '>';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'sub_child', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['sub_child'] : null;
$var1 = compiledFetchAttribute( $var, 'name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</a></li>
    ';
$fe_n_items_processed_41d75d33c096b4c02dd3946d9f3b04e7_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_41d75d33c096b4c02dd3946d9f3b04e7_1 ) ) extract( array_pop( $fe_variable_stack_41d75d33c096b4c02dd3946d9f3b04e7_1 ) );

else
{

unset( $fe_array_41d75d33c096b4c02dd3946d9f3b04e7_1 );

unset( $fe_array_keys_41d75d33c096b4c02dd3946d9f3b04e7_1 );

unset( $fe_n_items_41d75d33c096b4c02dd3946d9f3b04e7_1 );

unset( $fe_n_items_processed_41d75d33c096b4c02dd3946d9f3b04e7_1 );

unset( $fe_i_41d75d33c096b4c02dd3946d9f3b04e7_1 );

unset( $fe_key_41d75d33c096b4c02dd3946d9f3b04e7_1 );

unset( $fe_val_41d75d33c096b4c02dd3946d9f3b04e7_1 );

unset( $fe_offset_41d75d33c096b4c02dd3946d9f3b04e7_1 );

unset( $fe_max_41d75d33c096b4c02dd3946d9f3b04e7_1 );

unset( $fe_reverse_41d75d33c096b4c02dd3946d9f3b04e7_1 );

unset( $fe_first_val_41d75d33c096b4c02dd3946d9f3b04e7_1 );

unset( $fe_last_val_41d75d33c096b4c02dd3946d9f3b04e7_1 );

unset( $fe_variable_stack_41d75d33c096b4c02dd3946d9f3b04e7_1 );

}

// foreach ends
$text .= '    </ul>
    </td>
    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['key'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'col_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['col_count'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond1 = $if_cond2 % $if_cond3;
unset( $if_cond2, $if_cond3 );
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
$text .= '</tr>
<tr>
    ';
}
unset( $if_cond );
// if ends

$fe_n_items_processed_41d75d33c096b4c02dd3946d9f3b04e7_2++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_41d75d33c096b4c02dd3946d9f3b04e7_2 ) ) extract( array_pop( $fe_variable_stack_41d75d33c096b4c02dd3946d9f3b04e7_2 ) );

else
{

unset( $fe_array_41d75d33c096b4c02dd3946d9f3b04e7_2 );

unset( $fe_array_keys_41d75d33c096b4c02dd3946d9f3b04e7_2 );

unset( $fe_n_items_41d75d33c096b4c02dd3946d9f3b04e7_2 );

unset( $fe_n_items_processed_41d75d33c096b4c02dd3946d9f3b04e7_2 );

unset( $fe_i_41d75d33c096b4c02dd3946d9f3b04e7_2 );

unset( $fe_key_41d75d33c096b4c02dd3946d9f3b04e7_2 );

unset( $fe_val_41d75d33c096b4c02dd3946d9f3b04e7_2 );

unset( $fe_offset_41d75d33c096b4c02dd3946d9f3b04e7_2 );

unset( $fe_max_41d75d33c096b4c02dd3946d9f3b04e7_2 );

unset( $fe_reverse_41d75d33c096b4c02dd3946d9f3b04e7_2 );

unset( $fe_first_val_41d75d33c096b4c02dd3946d9f3b04e7_2 );

unset( $fe_last_val_41d75d33c096b4c02dd3946d9f3b04e7_2 );

unset( $fe_variable_stack_41d75d33c096b4c02dd3946d9f3b04e7_2 );

}

// foreach ends
$text .= '</tr>
</table>

</div>

</div></div></div>
<div class="border-bl"><div class="border-br"><div class="border-bc"></div></div></div>
</div>';

$setArray = $oldSetArray_3024307425facc104e50f4ed94405e71;
$tpl->Level--;
?>
