<?php
// URI:       design/admin2/templates/contentstructuremenu/content_structure_menu_dynamic.tpl
// Filename:  design/admin2/templates/contentstructuremenu/content_structure_menu_dynamic.tpl
// Timestamp: 1285696600 (Tue Sep 28 10:56:40 MST 2010)
$oldSetArray_81182138a5f77600fe708f60a235ddd9 = isset( $setArray ) ? $setArray : array();
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

unset( $elseif_cond_23bd687503dabf10324ba0781ed47ac7_110 );
unset( $elseif_cond_23bd687503dabf10324ba0781ed47ac7_1101 );
unset( $elseif_cond_23bd687503dabf10324ba0781ed47ac7_1101 );
$elseif_cond_23bd687503dabf10324ba0781ed47ac7_1101 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_root_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_root_node_id'] : null;
if (! isset( $elseif_cond_23bd687503dabf10324ba0781ed47ac7_1101 ) ) $elseif_cond_23bd687503dabf10324ba0781ed47ac7_1101 = NULL;
while ( is_object( $elseif_cond_23bd687503dabf10324ba0781ed47ac7_1101 ) and method_exists( $elseif_cond_23bd687503dabf10324ba0781ed47ac7_1101, 'templateValue' ) )
    $elseif_cond_23bd687503dabf10324ba0781ed47ac7_1101 = $elseif_cond_23bd687503dabf10324ba0781ed47ac7_1101->templateValue();
while ( is_object( $elseif_cond_23bd687503dabf10324ba0781ed47ac7_1101 ) and method_exists( $elseif_cond_23bd687503dabf10324ba0781ed47ac7_1101, 'templateValue' ) )
    $elseif_cond_23bd687503dabf10324ba0781ed47ac7_1101 = $elseif_cond_23bd687503dabf10324ba0781ed47ac7_1101->templateValue();
$elseif_cond_23bd687503dabf10324ba0781ed47ac7_110 = isset( $elseif_cond_23bd687503dabf10324ba0781ed47ac7_1101 );unset( $elseif_cond_23bd687503dabf10324ba0781ed47ac7_1101 );
if (! isset( $elseif_cond_23bd687503dabf10324ba0781ed47ac7_110 ) ) $elseif_cond_23bd687503dabf10324ba0781ed47ac7_110 = NULL;
while ( is_object( $elseif_cond_23bd687503dabf10324ba0781ed47ac7_110 ) and method_exists( $elseif_cond_23bd687503dabf10324ba0781ed47ac7_110, 'templateValue' ) )
    $elseif_cond_23bd687503dabf10324ba0781ed47ac7_110 = $elseif_cond_23bd687503dabf10324ba0781ed47ac7_110->templateValue();

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_root_node'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
// def $root_node
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_root_node'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'root_node', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'root_node' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 4,
    2 => 38,
  ),
  1 => 
  array (
    0 => 3,
    1 => 43,
    2 => 119,
  ),
  2 => 'design/admin2/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'root_node', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'root_node', $var, $rootNamespace );
}

// def $root_node_id
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'root_node_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'root_node_id' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 4,
    2 => 38,
  ),
  1 => 
  array (
    0 => 3,
    1 => 43,
    2 => 119,
  ),
  2 => 'design/admin2/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'root_node_id', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'root_node_id', $var, $rootNamespace );
}

}
elseif ( $elseif_cond_23bd687503dabf10324ba0781ed47ac7_110 )
{
$text .= '    ';
// def $root_node_id
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_root_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_root_node_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'root_node_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'root_node_id' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 4,
    2 => 166,
  ),
  1 => 
  array (
    0 => 6,
    1 => 85,
    2 => 292,
  ),
  2 => 'design/admin2/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'root_node_id', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'root_node_id', $var, $rootNamespace );
}

// def $root_node
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node_id'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchContentNode' ),
  array(     'node_id' => $var1,
    'node_path' => false,
    'language_code' => false,
    'remote_id' => false ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'root_node', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'root_node' is already defined.", array (
  0 => 
  array (
    0 => 5,
    1 => 4,
    2 => 166,
  ),
  1 => 
  array (
    0 => 6,
    1 => 85,
    2 => 292,
  ),
  2 => 'design/admin2/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'root_node', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'root_node', $var, $rootNamespace );
}

}
else
{
$text .= '    ';
// def $root_node_id
if ( $tpl->hasVariable( 'root_node_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'root_node_id' is already defined.", array (
  0 => 
  array (
    0 => 8,
    1 => 4,
    2 => 306,
  ),
  1 => 
  array (
    0 => 9,
    1 => 85,
    2 => 469,
  ),
  2 => 'design/admin2/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'root_node_id', '2', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'root_node_id', '2', $rootNamespace );
}

// def $root_node
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node_id'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchContentNode' ),
  array(     'node_id' => $var1,
    'node_path' => false,
    'language_code' => false,
    'remote_id' => false ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'root_node', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'root_node' is already defined.", array (
  0 => 
  array (
    0 => 8,
    1 => 4,
    2 => 306,
  ),
  1 => 
  array (
    0 => 9,
    1 => 85,
    2 => 469,
  ),
  2 => 'design/admin2/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'root_node', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'root_node', $var, $rootNamespace );
}

}
unset( $if_cond );
// if ends

unset( $elseif_cond_23bd687503dabf10324ba0781ed47ac7_110 );

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'menu_persistence', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['menu_persistence'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = !isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
// def $menu_persistence
if ( $tpl->hasVariable( 'menu_persistence', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'menu_persistence' is already defined.", array (
  0 => 
  array (
    0 => 12,
    1 => 4,
    2 => 517,
  ),
  1 => 
  array (
    0 => 12,
    1 => 104,
    2 => 617,
  ),
  2 => 'design/admin2/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'menu_persistence', true, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'menu_persistence', true, $rootNamespace );
}

}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hide_node_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hide_node_list'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = !isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
// def $hide_node_list
if ( $tpl->hasVariable( 'hide_node_list', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'hide_node_list' is already defined.", array (
  0 => 
  array (
    0 => 15,
    1 => 4,
    2 => 663,
  ),
  1 => 
  array (
    0 => 15,
    1 => 33,
    2 => 692,
  ),
  2 => 'design/admin2/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'hide_node_list', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'hide_node_list', array (
), $rootNamespace );
}

}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_subtree_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_subtree_array'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 0 );
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
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_subtree_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_subtree_array'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 0 );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = ( ( $if_cond3 ) != ( '1' ) );
unset( $if_cond3 );
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
// def $search_node
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_subtree_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_subtree_array'] : null;
$var2 = compiledFetchAttribute( $var1, 0 );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchContentNode' ),
  array(     'node_id' => $var1,
    'node_path' => false,
    'language_code' => false,
    'remote_id' => false ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'search_node', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'search_node' is already defined.", array (
  0 => 
  array (
    0 => 18,
    1 => 4,
    2 => 788,
  ),
  1 => 
  array (
    0 => 18,
    1 => 93,
    2 => 877,
  ),
  2 => 'design/admin2/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'search_node', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'search_node', $var, $rootNamespace );
}

$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_node'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'path_array' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 1 );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'search_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['search_node'] : null;
$var1 = compiledFetchAttribute( $var, 'path_array' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 1 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'root_node_id', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['root_node_id'] = $var;
    unset( $var );
}
$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '    ';
// undef $search_node
$tpl->unsetLocalVariable( 'search_node', $rootNamespace );

}
unset( $if_cond );
// if ends

// def $user_class_group_id
if ( $tpl->hasVariable( 'user_class_group_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'user_class_group_id' is already defined.", array (
  0 => 
  array (
    0 => 24,
    1 => 0,
    2 => 1024,
  ),
  1 => 
  array (
    0 => 27,
    1 => 0,
    2 => 1257,
  ),
  2 => 'design/admin2/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'user_class_group_id', '2', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'user_class_group_id', '2', $rootNamespace );
}

// def $setup_class_group_id
if ( $tpl->hasVariable( 'setup_class_group_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'setup_class_group_id' is already defined.", array (
  0 => 
  array (
    0 => 24,
    1 => 0,
    2 => 1024,
  ),
  1 => 
  array (
    0 => 27,
    1 => 0,
    2 => 1257,
  ),
  2 => 'design/admin2/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'setup_class_group_id', '4', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'setup_class_group_id', '4', $rootNamespace );
}

// def $user_root_node_id
if ( $tpl->hasVariable( 'user_root_node_id', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'user_root_node_id' is already defined.", array (
  0 => 
  array (
    0 => 24,
    1 => 0,
    2 => 1024,
  ),
  1 => 
  array (
    0 => 27,
    1 => 0,
    2 => 1257,
  ),
  2 => 'design/admin2/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'user_root_node_id', '5', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'user_root_node_id', '5', $rootNamespace );
}

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node_id'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) > ( 1 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
// def $filter_type
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node'] : null;
$var3 = compiledFetchAttribute( $var2, 'path_array' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user_root_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user_root_node_id'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
if( is_string( $var2 ) )
{
  $var1 = ( strpos( $var2, $var3 ) !== false );
}
else if ( is_array( $var2 ) )
{
  $var1 = in_array( $var3, $var2 );
}
else
{
$var1 = false;
}unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    $var = "include";
}
else
{
    
    $var = 'exclude';
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'filter_type', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'filter_type' is already defined.", array (
  0 => 
  array (
    0 => 29,
    1 => 4,
    2 => 1291,
  ),
  1 => 
  array (
    0 => 30,
    1 => 177,
    2 => 1578,
  ),
  2 => 'design/admin2/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'filter_type', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'filter_type', $var, $rootNamespace );
}

// def $filter_groups
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node'] : null;
$var3 = compiledFetchAttribute( $var2, 'path_array' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user_root_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user_root_node_id'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
if( is_string( $var2 ) )
{
  $var1 = ( strpos( $var2, $var3 ) !== false );
}
else if ( is_array( $var2 ) )
{
  $var1 = in_array( $var3, $var2 );
}
else
{
$var1 = false;
}unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 )
{
    unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "user_class_group_id", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["user_class_group_id"] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( $var3 );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

    $var = $var2;
}
else
{
    unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "user_class_group_id", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["user_class_group_id"] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "setup_class_group_id", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["setup_class_group_id"] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var3 = array( $var4, $var5 );unset( $var4, $var5 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

    $var = $var3;
}
unset( $var1, $var2, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'filter_groups', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'filter_groups' is already defined.", array (
  0 => 
  array (
    0 => 29,
    1 => 4,
    2 => 1291,
  ),
  1 => 
  array (
    0 => 30,
    1 => 177,
    2 => 1578,
  ),
  2 => 'design/admin2/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'filter_groups', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'filter_groups', $var, $rootNamespace );
}

}
else
{
$text .= '    ';
// def $filter_type
if ( $tpl->hasVariable( 'filter_type', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'filter_type' is already defined.", array (
  0 => 
  array (
    0 => 32,
    1 => 4,
    2 => 1592,
  ),
  1 => 
  array (
    0 => 33,
    1 => 40,
    2 => 1670,
  ),
  2 => 'design/admin2/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'filter_type', 'exclude', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'filter_type', 'exclude', $rootNamespace );
}

// def $filter_groups
if ( $tpl->hasVariable( 'filter_groups', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'filter_groups' is already defined.", array (
  0 => 
  array (
    0 => 32,
    1 => 4,
    2 => 1592,
  ),
  1 => 
  array (
    0 => 33,
    1 => 40,
    2 => 1670,
  ),
  2 => 'design/admin2/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'filter_groups', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'filter_groups', array (
), $rootNamespace );
}

}
unset( $if_cond );
// if ends

$text .= '
';
// def $click_action
if ( $tpl->hasVariable( 'click_action', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'click_action' is already defined.", array (
  0 => 
  array (
    0 => 40,
    1 => 0,
    2 => 1945,
  ),
  1 => 
  array (
    0 => 40,
    1 => 82,
    2 => 2027,
  ),
  2 => 'design/admin2/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'click_action', '', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'click_action', '', $rootNamespace );
}

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'csm_menu_item_click_action', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['csm_menu_item_click_action'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = isset( $if_cond2 );unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'click_action', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['click_action'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = !( $if_cond3 );
unset( $if_cond3 );
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
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'csm_menu_item_click_action', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['csm_menu_item_click_action'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'click_action', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['click_action'] = $var;
    unset( $var );
}
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'click_action', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['click_action'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'click_action', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['click_action'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

//include_once( 'lib/ezutils/classes/ezuri.php' );
eZURI::transformURI( $var1, false, 'relative' );
$var = $var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'click_action', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['click_action'] = $var;
    unset( $var );
}
}
unset( $if_cond );
// if ends

$text .= '

<script type="text/javascript">
<!--
function ContentStructureMenu( path, persistent )
{
    this.cookieName     = "contentStructureMenu";
    this.cookieValidity = 3650; // days
    this.useCookie      = persistent;
    this.cookie         = this.useCookie ? _getCookie( this.cookieName ) : \'\';
    this.open           = ( this.cookie )? this.cookie.split( \'/\' ): [];
    this.autoOpenPath   = path;

';
unset( $var );
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'fetchCurrentUser' ),
  array(  ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( !isset( $vars[$currentNamespace]['current_user'] ) )
{
    $vars[$currentNamespace]['current_user'] = $var;
    unset( $var );
    $setArray[$currentNamespace]['current_user'] = true;
}

$text .= '    this.perm = "';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$var4 = compiledFetchAttribute( $var3, 'role_id_list' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = implode( ",", $var3 );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
unset( $var4 );
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$var6 = compiledFetchAttribute( $var5, 'limited_assignment_value_list' );
unset( $var5 );
$var5 = $var6;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var4 = implode( ",", $var5 );unset( $var5 );
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var1 = ( $var2 . '|' . $var4 );
unset( $var2, $var4 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = md5( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '";';
if ( isset( $setArray[$currentNamespace]['current_user'] ) )
{
unset( $vars[$currentNamespace]['current_user'] );
}

$text .= '
    this.expiry = "';
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchContentTreeMenuExpiry' ),
  array(  ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '";
    this.action = "';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'click_action', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['click_action'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '";
    this.context = "';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '";
    this.hideNodes = [';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hide_node_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hide_node_list'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = implode( ",", $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '];
';
unset( $cacheKeys );
unset( $cacheKeys1 );
unset( $cacheKeys2 );
unset( $cacheKeys2 );
$cacheKeys2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node_id'] : null;
if (! isset( $cacheKeys2 ) ) $cacheKeys2 = NULL;
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
$cacheKeys1 = ( ( $cacheKeys2 ) > ( 1 ) );
unset( $cacheKeys2 );
if (! isset( $cacheKeys1 ) ) $cacheKeys1 = NULL;
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
unset( $cacheKeys2 );
unset( $cacheKeys2 );
$cacheKeys2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'access_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['access_type'] : null;
if (! isset( $cacheKeys2 ) ) $cacheKeys2 = NULL;
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
$cacheKeys = array( $cacheKeys1, $cacheKeys2 );unset( $cacheKeys1, $cacheKeys2 );
if (! isset( $cacheKeys ) ) $cacheKeys = NULL;
while ( is_object( $cacheKeys ) and method_exists( $cacheKeys, 'templateValue' ) )
    $cacheKeys = $cacheKeys->templateValue();

$subtreeExpiry = NULL;
//include_once( 'lib/eztemplate/classes/eztemplatecacheblock.php' );
$cacheKeys = array( $cacheKeys, "71_0_71_92_design/admin2/templates/contentstructuremenu/content_structure_menu_dynamic.tpl", "ezflow_site_clean_admin" );

list($cacheHandler_5cfed929cf11659a7f13e101fdebc198, $contentData) =
  eZTemplateCacheBlock::retrieve( $cacheKeys, $subtreeExpiry, null, false );
if ( !( $contentData instanceof eZClusterFileFailure ) )
{

$text .= $contentData;
    unset( $contentData );
}
else
{
    unset( $contentData );
if ( !isset( $textStack ) )
    $textStack = array();
$textStack[] = $text;
$text = '';
$text .= '    this.languages = {';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_23bd687503dabf10324ba0781ed47ac7_20 ) ) $fe_variable_stack_23bd687503dabf10324ba0781ed47ac7_20 = array();
$fe_variable_stack_23bd687503dabf10324ba0781ed47ac7_20[] = compact( 'fe_array_23bd687503dabf10324ba0781ed47ac7_20', 'fe_array_keys_23bd687503dabf10324ba0781ed47ac7_20', 'fe_n_items_23bd687503dabf10324ba0781ed47ac7_20', 'fe_n_items_processed_23bd687503dabf10324ba0781ed47ac7_20', 'fe_i_23bd687503dabf10324ba0781ed47ac7_20', 'fe_key_23bd687503dabf10324ba0781ed47ac7_20', 'fe_val_23bd687503dabf10324ba0781ed47ac7_20', 'fe_offset_23bd687503dabf10324ba0781ed47ac7_20', 'fe_max_23bd687503dabf10324ba0781ed47ac7_20', 'fe_reverse_23bd687503dabf10324ba0781ed47ac7_20', 'fe_first_val_23bd687503dabf10324ba0781ed47ac7_20', 'fe_last_val_23bd687503dabf10324ba0781ed47ac7_20' );
unset( $fe_array_23bd687503dabf10324ba0781ed47ac7_20 );
$fe_array_23bd687503dabf10324ba0781ed47ac7_20 = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchTranslationList' ),
  array(  ) );
$fe_array_23bd687503dabf10324ba0781ed47ac7_20 = isset( $fe_array_23bd687503dabf10324ba0781ed47ac7_20['result'] ) ? $fe_array_23bd687503dabf10324ba0781ed47ac7_20['result'] : null;
if (! isset( $fe_array_23bd687503dabf10324ba0781ed47ac7_20 ) ) $fe_array_23bd687503dabf10324ba0781ed47ac7_20 = NULL;
while ( is_object( $fe_array_23bd687503dabf10324ba0781ed47ac7_20 ) and method_exists( $fe_array_23bd687503dabf10324ba0781ed47ac7_20, 'templateValue' ) )
    $fe_array_23bd687503dabf10324ba0781ed47ac7_20 = $fe_array_23bd687503dabf10324ba0781ed47ac7_20->templateValue();

$fe_array_keys_23bd687503dabf10324ba0781ed47ac7_20 = is_array( $fe_array_23bd687503dabf10324ba0781ed47ac7_20 ) ? array_keys( $fe_array_23bd687503dabf10324ba0781ed47ac7_20 ) : array();
$fe_n_items_23bd687503dabf10324ba0781ed47ac7_20 = count( $fe_array_keys_23bd687503dabf10324ba0781ed47ac7_20 );
$fe_n_items_processed_23bd687503dabf10324ba0781ed47ac7_20 = 0;
$fe_offset_23bd687503dabf10324ba0781ed47ac7_20 = 0;
$fe_max_23bd687503dabf10324ba0781ed47ac7_20 = $fe_n_items_23bd687503dabf10324ba0781ed47ac7_20 - $fe_offset_23bd687503dabf10324ba0781ed47ac7_20;
$fe_reverse_23bd687503dabf10324ba0781ed47ac7_20 = false;
if ( $fe_offset_23bd687503dabf10324ba0781ed47ac7_20 < 0 || $fe_offset_23bd687503dabf10324ba0781ed47ac7_20 >= $fe_n_items_23bd687503dabf10324ba0781ed47ac7_20 )
{
    $fe_offset_23bd687503dabf10324ba0781ed47ac7_20 = ( $fe_offset_23bd687503dabf10324ba0781ed47ac7_20 < 0 ) ? 0 : $fe_n_items_23bd687503dabf10324ba0781ed47ac7_20;
    if ( $fe_n_items_23bd687503dabf10324ba0781ed47ac7_20 || $fe_offset_23bd687503dabf10324ba0781ed47ac7_20 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_23bd687503dabf10324ba0781ed47ac7_20'. Array count: $fe_n_items_23bd687503dabf10324ba0781ed47ac7_20");   
}
}
if ( $fe_max_23bd687503dabf10324ba0781ed47ac7_20 < 0 || $fe_offset_23bd687503dabf10324ba0781ed47ac7_20 + $fe_max_23bd687503dabf10324ba0781ed47ac7_20 > $fe_n_items_23bd687503dabf10324ba0781ed47ac7_20 )
{
    if ( $fe_max_23bd687503dabf10324ba0781ed47ac7_20 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_23bd687503dabf10324ba0781ed47ac7_20");
    $fe_max_23bd687503dabf10324ba0781ed47ac7_20 = $fe_n_items_23bd687503dabf10324ba0781ed47ac7_20 - $fe_offset_23bd687503dabf10324ba0781ed47ac7_20;
}
if ( $fe_reverse_23bd687503dabf10324ba0781ed47ac7_20 )
{
    $fe_first_val_23bd687503dabf10324ba0781ed47ac7_20 = $fe_n_items_23bd687503dabf10324ba0781ed47ac7_20 - 1 - $fe_offset_23bd687503dabf10324ba0781ed47ac7_20;
    $fe_last_val_23bd687503dabf10324ba0781ed47ac7_20  = 0;
}
else
{
    $fe_first_val_23bd687503dabf10324ba0781ed47ac7_20 = $fe_offset_23bd687503dabf10324ba0781ed47ac7_20;
    $fe_last_val_23bd687503dabf10324ba0781ed47ac7_20  = $fe_n_items_23bd687503dabf10324ba0781ed47ac7_20 - 1;
}
// foreach
for ( $fe_i_23bd687503dabf10324ba0781ed47ac7_20 = $fe_first_val_23bd687503dabf10324ba0781ed47ac7_20; $fe_n_items_processed_23bd687503dabf10324ba0781ed47ac7_20 < $fe_max_23bd687503dabf10324ba0781ed47ac7_20 && ( $fe_reverse_23bd687503dabf10324ba0781ed47ac7_20 ? $fe_i_23bd687503dabf10324ba0781ed47ac7_20 >= $fe_last_val_23bd687503dabf10324ba0781ed47ac7_20 : $fe_i_23bd687503dabf10324ba0781ed47ac7_20 <= $fe_last_val_23bd687503dabf10324ba0781ed47ac7_20 ); $fe_reverse_23bd687503dabf10324ba0781ed47ac7_20 ? $fe_i_23bd687503dabf10324ba0781ed47ac7_20-- : $fe_i_23bd687503dabf10324ba0781ed47ac7_20++ )
{
$fe_key_23bd687503dabf10324ba0781ed47ac7_20 = $fe_array_keys_23bd687503dabf10324ba0781ed47ac7_20[$fe_i_23bd687503dabf10324ba0781ed47ac7_20];
$fe_val_23bd687503dabf10324ba0781ed47ac7_20 = $fe_array_23bd687503dabf10324ba0781ed47ac7_20[$fe_key_23bd687503dabf10324ba0781ed47ac7_20];
$vars[$rootNamespace]['language'] = $fe_val_23bd687503dabf10324ba0781ed47ac7_20;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= ',';
} // delimiter ends

$text .= '"';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language'] : null;
$var2 = compiledFetchAttribute( $var1, 'locale_code' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = str_replace( array( "\\", "\"", "'" ),
                                             array( "\\\\", "\\042", "\\047" ) , $var1 ); unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '":"';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language'] : null;
$var2 = compiledFetchAttribute( $var1, 'intl_language_name' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = str_replace( array( "\\", "\"", "'" ),
                                             array( "\\\\", "\\042", "\\047" ) , $var1 ); unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"';
$fe_n_items_processed_23bd687503dabf10324ba0781ed47ac7_20++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_23bd687503dabf10324ba0781ed47ac7_20 ) ) extract( array_pop( $fe_variable_stack_23bd687503dabf10324ba0781ed47ac7_20 ) );

else
{

unset( $fe_array_23bd687503dabf10324ba0781ed47ac7_20 );

unset( $fe_array_keys_23bd687503dabf10324ba0781ed47ac7_20 );

unset( $fe_n_items_23bd687503dabf10324ba0781ed47ac7_20 );

unset( $fe_n_items_processed_23bd687503dabf10324ba0781ed47ac7_20 );

unset( $fe_i_23bd687503dabf10324ba0781ed47ac7_20 );

unset( $fe_key_23bd687503dabf10324ba0781ed47ac7_20 );

unset( $fe_val_23bd687503dabf10324ba0781ed47ac7_20 );

unset( $fe_offset_23bd687503dabf10324ba0781ed47ac7_20 );

unset( $fe_max_23bd687503dabf10324ba0781ed47ac7_20 );

unset( $fe_reverse_23bd687503dabf10324ba0781ed47ac7_20 );

unset( $fe_first_val_23bd687503dabf10324ba0781ed47ac7_20 );

unset( $fe_last_val_23bd687503dabf10324ba0781ed47ac7_20 );

unset( $fe_variable_stack_23bd687503dabf10324ba0781ed47ac7_20 );

}

// foreach ends
$text .= '};
    this.classes = {';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_23bd687503dabf10324ba0781ed47ac7_21 ) ) $fe_variable_stack_23bd687503dabf10324ba0781ed47ac7_21 = array();
$fe_variable_stack_23bd687503dabf10324ba0781ed47ac7_21[] = compact( 'fe_array_23bd687503dabf10324ba0781ed47ac7_21', 'fe_array_keys_23bd687503dabf10324ba0781ed47ac7_21', 'fe_n_items_23bd687503dabf10324ba0781ed47ac7_21', 'fe_n_items_processed_23bd687503dabf10324ba0781ed47ac7_21', 'fe_i_23bd687503dabf10324ba0781ed47ac7_21', 'fe_key_23bd687503dabf10324ba0781ed47ac7_21', 'fe_val_23bd687503dabf10324ba0781ed47ac7_21', 'fe_offset_23bd687503dabf10324ba0781ed47ac7_21', 'fe_max_23bd687503dabf10324ba0781ed47ac7_21', 'fe_reverse_23bd687503dabf10324ba0781ed47ac7_21', 'fe_first_val_23bd687503dabf10324ba0781ed47ac7_21', 'fe_last_val_23bd687503dabf10324ba0781ed47ac7_21' );
unset( $fe_array_23bd687503dabf10324ba0781ed47ac7_21 );
$fe_array_23bd687503dabf10324ba0781ed47ac7_21 = call_user_func_array( array( new eZClassFunctionCollection(), 'fetchClassList' ),
  array(     'class_filter' => false,
    'sort_by' => array() ) );
$fe_array_23bd687503dabf10324ba0781ed47ac7_21 = isset( $fe_array_23bd687503dabf10324ba0781ed47ac7_21['result'] ) ? $fe_array_23bd687503dabf10324ba0781ed47ac7_21['result'] : null;
if (! isset( $fe_array_23bd687503dabf10324ba0781ed47ac7_21 ) ) $fe_array_23bd687503dabf10324ba0781ed47ac7_21 = NULL;
while ( is_object( $fe_array_23bd687503dabf10324ba0781ed47ac7_21 ) and method_exists( $fe_array_23bd687503dabf10324ba0781ed47ac7_21, 'templateValue' ) )
    $fe_array_23bd687503dabf10324ba0781ed47ac7_21 = $fe_array_23bd687503dabf10324ba0781ed47ac7_21->templateValue();

$fe_array_keys_23bd687503dabf10324ba0781ed47ac7_21 = is_array( $fe_array_23bd687503dabf10324ba0781ed47ac7_21 ) ? array_keys( $fe_array_23bd687503dabf10324ba0781ed47ac7_21 ) : array();
$fe_n_items_23bd687503dabf10324ba0781ed47ac7_21 = count( $fe_array_keys_23bd687503dabf10324ba0781ed47ac7_21 );
$fe_n_items_processed_23bd687503dabf10324ba0781ed47ac7_21 = 0;
$fe_offset_23bd687503dabf10324ba0781ed47ac7_21 = 0;
$fe_max_23bd687503dabf10324ba0781ed47ac7_21 = $fe_n_items_23bd687503dabf10324ba0781ed47ac7_21 - $fe_offset_23bd687503dabf10324ba0781ed47ac7_21;
$fe_reverse_23bd687503dabf10324ba0781ed47ac7_21 = false;
if ( $fe_offset_23bd687503dabf10324ba0781ed47ac7_21 < 0 || $fe_offset_23bd687503dabf10324ba0781ed47ac7_21 >= $fe_n_items_23bd687503dabf10324ba0781ed47ac7_21 )
{
    $fe_offset_23bd687503dabf10324ba0781ed47ac7_21 = ( $fe_offset_23bd687503dabf10324ba0781ed47ac7_21 < 0 ) ? 0 : $fe_n_items_23bd687503dabf10324ba0781ed47ac7_21;
    if ( $fe_n_items_23bd687503dabf10324ba0781ed47ac7_21 || $fe_offset_23bd687503dabf10324ba0781ed47ac7_21 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_23bd687503dabf10324ba0781ed47ac7_21'. Array count: $fe_n_items_23bd687503dabf10324ba0781ed47ac7_21");   
}
}
if ( $fe_max_23bd687503dabf10324ba0781ed47ac7_21 < 0 || $fe_offset_23bd687503dabf10324ba0781ed47ac7_21 + $fe_max_23bd687503dabf10324ba0781ed47ac7_21 > $fe_n_items_23bd687503dabf10324ba0781ed47ac7_21 )
{
    if ( $fe_max_23bd687503dabf10324ba0781ed47ac7_21 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_23bd687503dabf10324ba0781ed47ac7_21");
    $fe_max_23bd687503dabf10324ba0781ed47ac7_21 = $fe_n_items_23bd687503dabf10324ba0781ed47ac7_21 - $fe_offset_23bd687503dabf10324ba0781ed47ac7_21;
}
if ( $fe_reverse_23bd687503dabf10324ba0781ed47ac7_21 )
{
    $fe_first_val_23bd687503dabf10324ba0781ed47ac7_21 = $fe_n_items_23bd687503dabf10324ba0781ed47ac7_21 - 1 - $fe_offset_23bd687503dabf10324ba0781ed47ac7_21;
    $fe_last_val_23bd687503dabf10324ba0781ed47ac7_21  = 0;
}
else
{
    $fe_first_val_23bd687503dabf10324ba0781ed47ac7_21 = $fe_offset_23bd687503dabf10324ba0781ed47ac7_21;
    $fe_last_val_23bd687503dabf10324ba0781ed47ac7_21  = $fe_n_items_23bd687503dabf10324ba0781ed47ac7_21 - 1;
}
// foreach
for ( $fe_i_23bd687503dabf10324ba0781ed47ac7_21 = $fe_first_val_23bd687503dabf10324ba0781ed47ac7_21; $fe_n_items_processed_23bd687503dabf10324ba0781ed47ac7_21 < $fe_max_23bd687503dabf10324ba0781ed47ac7_21 && ( $fe_reverse_23bd687503dabf10324ba0781ed47ac7_21 ? $fe_i_23bd687503dabf10324ba0781ed47ac7_21 >= $fe_last_val_23bd687503dabf10324ba0781ed47ac7_21 : $fe_i_23bd687503dabf10324ba0781ed47ac7_21 <= $fe_last_val_23bd687503dabf10324ba0781ed47ac7_21 ); $fe_reverse_23bd687503dabf10324ba0781ed47ac7_21 ? $fe_i_23bd687503dabf10324ba0781ed47ac7_21-- : $fe_i_23bd687503dabf10324ba0781ed47ac7_21++ )
{
$fe_key_23bd687503dabf10324ba0781ed47ac7_21 = $fe_array_keys_23bd687503dabf10324ba0781ed47ac7_21[$fe_i_23bd687503dabf10324ba0781ed47ac7_21];
$fe_val_23bd687503dabf10324ba0781ed47ac7_21 = $fe_array_23bd687503dabf10324ba0781ed47ac7_21[$fe_key_23bd687503dabf10324ba0781ed47ac7_21];
$vars[$rootNamespace]['class'] = $fe_val_23bd687503dabf10324ba0781ed47ac7_21;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= ',';
} // delimiter ends

$text .= '"';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '":{name:"';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var2 = compiledFetchAttribute( $var1, 'name' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = str_replace( array( "\\", "\"", "'" ),
                                             array( "\\\\", "\\042", "\\047" ) , $var1 ); unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '",identifier:"';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var2 = compiledFetchAttribute( $var1, 'identifier' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = str_replace( array( "\\", "\"", "'" ),
                                             array( "\\\\", "\\042", "\\047" ) , $var1 ); unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"}';
$fe_n_items_processed_23bd687503dabf10324ba0781ed47ac7_21++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_23bd687503dabf10324ba0781ed47ac7_21 ) ) extract( array_pop( $fe_variable_stack_23bd687503dabf10324ba0781ed47ac7_21 ) );

else
{

unset( $fe_array_23bd687503dabf10324ba0781ed47ac7_21 );

unset( $fe_array_keys_23bd687503dabf10324ba0781ed47ac7_21 );

unset( $fe_n_items_23bd687503dabf10324ba0781ed47ac7_21 );

unset( $fe_n_items_processed_23bd687503dabf10324ba0781ed47ac7_21 );

unset( $fe_i_23bd687503dabf10324ba0781ed47ac7_21 );

unset( $fe_key_23bd687503dabf10324ba0781ed47ac7_21 );

unset( $fe_val_23bd687503dabf10324ba0781ed47ac7_21 );

unset( $fe_offset_23bd687503dabf10324ba0781ed47ac7_21 );

unset( $fe_max_23bd687503dabf10324ba0781ed47ac7_21 );

unset( $fe_reverse_23bd687503dabf10324ba0781ed47ac7_21 );

unset( $fe_first_val_23bd687503dabf10324ba0781ed47ac7_21 );

unset( $fe_last_val_23bd687503dabf10324ba0781ed47ac7_21 );

unset( $fe_variable_stack_23bd687503dabf10324ba0781ed47ac7_21 );

}

// foreach ends
$text .= '};
';
// def $iconInfo
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'icon_info',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'class',
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
if ( $tpl->hasVariable( 'iconInfo', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'iconInfo' is already defined.", array (
  0 => 
  array (
    0 => 87,
    1 => 0,
    2 => 3805,
  ),
  1 => 
  array (
    0 => 88,
    1 => 84,
    2 => 3924,
  ),
  2 => 'design/admin2/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'iconInfo', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'iconInfo', $var, $rootNamespace );
}

// def $classIconsSize
if ( $tpl->hasVariable( 'classIconsSize', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'classIconsSize' is already defined.", array (
  0 => 
  array (
    0 => 87,
    1 => 0,
    2 => 3805,
  ),
  1 => 
  array (
    0 => 88,
    1 => 84,
    2 => 3924,
  ),
  2 => 'design/admin2/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'classIconsSize', 'small', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'classIconsSize', 'small', $rootNamespace );
}

$text .= '
    this.iconsList   = [];
    var wwwDirPrefix = "/';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'iconInfo', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['iconInfo'] : null;
$var1 = compiledFetchAttribute( $var, 'theme_path' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '/';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'iconInfo', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['iconInfo'] : null;
$var1 = compiledFetchAttribute( $var, 'size_path_list' );
unset( $var );
$var = $var1;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'classIconsSize', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['classIconsSize'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = compiledFetchAttribute( $var, $var2 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '/";

    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_23bd687503dabf10324ba0781ed47ac7_22 ) ) $fe_variable_stack_23bd687503dabf10324ba0781ed47ac7_22 = array();
$fe_variable_stack_23bd687503dabf10324ba0781ed47ac7_22[] = compact( 'fe_array_23bd687503dabf10324ba0781ed47ac7_22', 'fe_array_keys_23bd687503dabf10324ba0781ed47ac7_22', 'fe_n_items_23bd687503dabf10324ba0781ed47ac7_22', 'fe_n_items_processed_23bd687503dabf10324ba0781ed47ac7_22', 'fe_i_23bd687503dabf10324ba0781ed47ac7_22', 'fe_key_23bd687503dabf10324ba0781ed47ac7_22', 'fe_val_23bd687503dabf10324ba0781ed47ac7_22', 'fe_offset_23bd687503dabf10324ba0781ed47ac7_22', 'fe_max_23bd687503dabf10324ba0781ed47ac7_22', 'fe_reverse_23bd687503dabf10324ba0781ed47ac7_22', 'fe_first_val_23bd687503dabf10324ba0781ed47ac7_22', 'fe_last_val_23bd687503dabf10324ba0781ed47ac7_22' );
unset( $fe_array_23bd687503dabf10324ba0781ed47ac7_22 );
unset( $fe_array_23bd687503dabf10324ba0781ed47ac7_22 );
$fe_array_23bd687503dabf10324ba0781ed47ac7_22 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'iconInfo', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['iconInfo'] : null;
$fe_array_23bd687503dabf10324ba0781ed47ac7_221 = compiledFetchAttribute( $fe_array_23bd687503dabf10324ba0781ed47ac7_22, 'icons' );
unset( $fe_array_23bd687503dabf10324ba0781ed47ac7_22 );
$fe_array_23bd687503dabf10324ba0781ed47ac7_22 = $fe_array_23bd687503dabf10324ba0781ed47ac7_221;
if (! isset( $fe_array_23bd687503dabf10324ba0781ed47ac7_22 ) ) $fe_array_23bd687503dabf10324ba0781ed47ac7_22 = NULL;
while ( is_object( $fe_array_23bd687503dabf10324ba0781ed47ac7_22 ) and method_exists( $fe_array_23bd687503dabf10324ba0781ed47ac7_22, 'templateValue' ) )
    $fe_array_23bd687503dabf10324ba0781ed47ac7_22 = $fe_array_23bd687503dabf10324ba0781ed47ac7_22->templateValue();

$fe_array_keys_23bd687503dabf10324ba0781ed47ac7_22 = is_array( $fe_array_23bd687503dabf10324ba0781ed47ac7_22 ) ? array_keys( $fe_array_23bd687503dabf10324ba0781ed47ac7_22 ) : array();
$fe_n_items_23bd687503dabf10324ba0781ed47ac7_22 = count( $fe_array_keys_23bd687503dabf10324ba0781ed47ac7_22 );
$fe_n_items_processed_23bd687503dabf10324ba0781ed47ac7_22 = 0;
$fe_offset_23bd687503dabf10324ba0781ed47ac7_22 = 0;
$fe_max_23bd687503dabf10324ba0781ed47ac7_22 = $fe_n_items_23bd687503dabf10324ba0781ed47ac7_22 - $fe_offset_23bd687503dabf10324ba0781ed47ac7_22;
$fe_reverse_23bd687503dabf10324ba0781ed47ac7_22 = false;
if ( $fe_offset_23bd687503dabf10324ba0781ed47ac7_22 < 0 || $fe_offset_23bd687503dabf10324ba0781ed47ac7_22 >= $fe_n_items_23bd687503dabf10324ba0781ed47ac7_22 )
{
    $fe_offset_23bd687503dabf10324ba0781ed47ac7_22 = ( $fe_offset_23bd687503dabf10324ba0781ed47ac7_22 < 0 ) ? 0 : $fe_n_items_23bd687503dabf10324ba0781ed47ac7_22;
    if ( $fe_n_items_23bd687503dabf10324ba0781ed47ac7_22 || $fe_offset_23bd687503dabf10324ba0781ed47ac7_22 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_23bd687503dabf10324ba0781ed47ac7_22'. Array count: $fe_n_items_23bd687503dabf10324ba0781ed47ac7_22");   
}
}
if ( $fe_max_23bd687503dabf10324ba0781ed47ac7_22 < 0 || $fe_offset_23bd687503dabf10324ba0781ed47ac7_22 + $fe_max_23bd687503dabf10324ba0781ed47ac7_22 > $fe_n_items_23bd687503dabf10324ba0781ed47ac7_22 )
{
    if ( $fe_max_23bd687503dabf10324ba0781ed47ac7_22 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_23bd687503dabf10324ba0781ed47ac7_22");
    $fe_max_23bd687503dabf10324ba0781ed47ac7_22 = $fe_n_items_23bd687503dabf10324ba0781ed47ac7_22 - $fe_offset_23bd687503dabf10324ba0781ed47ac7_22;
}
if ( $fe_reverse_23bd687503dabf10324ba0781ed47ac7_22 )
{
    $fe_first_val_23bd687503dabf10324ba0781ed47ac7_22 = $fe_n_items_23bd687503dabf10324ba0781ed47ac7_22 - 1 - $fe_offset_23bd687503dabf10324ba0781ed47ac7_22;
    $fe_last_val_23bd687503dabf10324ba0781ed47ac7_22  = 0;
}
else
{
    $fe_first_val_23bd687503dabf10324ba0781ed47ac7_22 = $fe_offset_23bd687503dabf10324ba0781ed47ac7_22;
    $fe_last_val_23bd687503dabf10324ba0781ed47ac7_22  = $fe_n_items_23bd687503dabf10324ba0781ed47ac7_22 - 1;
}
// foreach
for ( $fe_i_23bd687503dabf10324ba0781ed47ac7_22 = $fe_first_val_23bd687503dabf10324ba0781ed47ac7_22; $fe_n_items_processed_23bd687503dabf10324ba0781ed47ac7_22 < $fe_max_23bd687503dabf10324ba0781ed47ac7_22 && ( $fe_reverse_23bd687503dabf10324ba0781ed47ac7_22 ? $fe_i_23bd687503dabf10324ba0781ed47ac7_22 >= $fe_last_val_23bd687503dabf10324ba0781ed47ac7_22 : $fe_i_23bd687503dabf10324ba0781ed47ac7_22 <= $fe_last_val_23bd687503dabf10324ba0781ed47ac7_22 ); $fe_reverse_23bd687503dabf10324ba0781ed47ac7_22 ? $fe_i_23bd687503dabf10324ba0781ed47ac7_22-- : $fe_i_23bd687503dabf10324ba0781ed47ac7_22++ )
{
$fe_key_23bd687503dabf10324ba0781ed47ac7_22 = $fe_array_keys_23bd687503dabf10324ba0781ed47ac7_22[$fe_i_23bd687503dabf10324ba0781ed47ac7_22];
$fe_val_23bd687503dabf10324ba0781ed47ac7_22 = $fe_array_23bd687503dabf10324ba0781ed47ac7_22[$fe_key_23bd687503dabf10324ba0781ed47ac7_22];
$vars[$rootNamespace]['icon'] = $fe_val_23bd687503dabf10324ba0781ed47ac7_22;
$vars[$rootNamespace]['class'] = $fe_key_23bd687503dabf10324ba0781ed47ac7_22;
$text .= 'this.iconsList[\'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\'] = wwwDirPrefix + "';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'icon', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['icon'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '";
    ';
$fe_n_items_processed_23bd687503dabf10324ba0781ed47ac7_22++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_23bd687503dabf10324ba0781ed47ac7_22 ) ) extract( array_pop( $fe_variable_stack_23bd687503dabf10324ba0781ed47ac7_22 ) );

else
{

unset( $fe_array_23bd687503dabf10324ba0781ed47ac7_22 );

unset( $fe_array_keys_23bd687503dabf10324ba0781ed47ac7_22 );

unset( $fe_n_items_23bd687503dabf10324ba0781ed47ac7_22 );

unset( $fe_n_items_processed_23bd687503dabf10324ba0781ed47ac7_22 );

unset( $fe_i_23bd687503dabf10324ba0781ed47ac7_22 );

unset( $fe_key_23bd687503dabf10324ba0781ed47ac7_22 );

unset( $fe_val_23bd687503dabf10324ba0781ed47ac7_22 );

unset( $fe_offset_23bd687503dabf10324ba0781ed47ac7_22 );

unset( $fe_max_23bd687503dabf10324ba0781ed47ac7_22 );

unset( $fe_reverse_23bd687503dabf10324ba0781ed47ac7_22 );

unset( $fe_first_val_23bd687503dabf10324ba0781ed47ac7_22 );

unset( $fe_last_val_23bd687503dabf10324ba0781ed47ac7_22 );

unset( $fe_variable_stack_23bd687503dabf10324ba0781ed47ac7_22 );

}

// foreach ends
$text .= '
    this.iconsList[\'__default__\'] = wwwDirPrefix + "';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'iconInfo', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['iconInfo'] : null;
$var1 = compiledFetchAttribute( $var, 'default' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '";

    ';
// if begins
$if_cond = true;
if ( $if_cond )
{
$text .= '    ezjslib_preloadImageList( this.iconsList );
    ';
}
unset( $if_cond );
// if ends

$text .= '
    this.showTips       = ';
// if begins
$if_cond = true;
if ( $if_cond )
{
$text .= 'true';
}
else
{
$text .= 'false';
}
unset( $if_cond );
// if ends

$text .= ';
    this.createHereMenu = "simplified";
    this.autoOpen       = ';
// if begins
$if_cond = true;
if ( $if_cond )
{
$text .= 'true';
}
else
{
$text .= 'false';
}
unset( $if_cond );
// if ends

$text .= ';


    this.updateCookie = function()
    {
        if ( !this.useCookie )
            return; 
        this.cookie = this.open.join(\'/\');
        expireDate  = new Date();
        expireDate.setTime( expireDate.getTime() + this.cookieValidity * 86400000 );
        _setCookie( this.cookieName, this.cookie, expireDate );
    };

    // cookie functions
    function _setCookie( name, value, expires, path )
    {
        document.cookie = name + \'=\' + escape(value) + ( expires ? \'; expires=\' + expires.toUTCString(): \'\' ) + \'; path=\'+ (path ? path : \'/\');
    }

    function _getCookie( name )
    {
        var n = name + \'=\', c = document.cookie, start = c.indexOf( n ), end = c.indexOf( ";", start );
        if ( start !== -1 )
        {
            return unescape( c.substring( start + n.length, ( end === -1 ? c.length : end ) ) );
        }
        return null;
    }

    function _delCookie( name )
    {
    	_setCookie( name, \'\', ( new Date() - 86400000 ) );
    }

    this.setOpen = function( nodeID )
    {
        if ( jQuery.inArray( \'\' + nodeID, this.open ) !== -1 )
        {
            return;
        }
        this.open[this.open.length] = nodeID;
        this.updateCookie();
    };

    this.setClosed = function( nodeID )
    {
    	var openIndex = jQuery.inArray( \'\' + nodeID, this.open );
        if ( openIndex !== -1 )
        {
        	this.open.splice( openIndex, 1 );
            this.updateCookie();
        }
    };

    this.generateEntry = function( item, lastli, rootNode )
    {
        var liclass = \'\';
        if ( lastli )
        {
            liclass += \' lastli\';
        }
        if ( path && ( path[path.length-1] == item.node_id || ( !item.has_children && jQuery.inArray( item.node_id, path ) !== -1 ) ) )
        {
            liclass += \' currentnode\';
        }
        var html = \'<li id="n\'+item.node_id+\'"\'
            + ( ( liclass )? \' class="\' + liclass + \'"\':
                             \'\' )
            + \'>\';
        if ( item.has_children && !rootNode )
        {
            html += \'<a class="openclose-open" id="a\'
                + item.node_id
                + \'" href="#" onclick="this.blur(); return treeMenu.load( this, \'
                + item.node_id
                + \', \'
                + item.modified_subnode
                +\' )"><\\/a>\';
        }

        var languages = "[";
        var firstLanguage = true;
        for ( var j = 0; j < item.languages.length; j++ )
        {
            if ( this.languages[item.languages[j]] )
            {
                if ( !firstLanguage )
                {
                    languages += ",";
                }
                firstLanguage = false;
                languages += "{locale:\'"
                    + item.languages[j].replace(/\'/g,"\\\\\'")
                    + "\',name:\'"
                    + this.languages[item.languages[j]].replace(/\'/g,"\\\\\'")
                    + "\'}";
            }
        }
        languages += "]";

        var canCreateClasses = false;
        var classes = "[";
        if ( this.createHereMenu != \'disabled\' )
        {
            if ( this.createHereMenu == \'full\' )
            {
                var classList = item.class_list;

                for ( var j = 0; j < classList.length; j++ )
                {
                    if ( this.classes[classList[j]] )
                    {
                        if ( canCreateClasses )
                        {
                            classes += ",";
                        }
                        canCreateClasses = true;
                        classes += "{classID:\'"
                            + classList[j]
                            + "\',name:\'"
                            + String(this.classes[classList[j]].name).replace(/\'/g,"\\\\\'").replace(/>/g,\'&gt;\').replace(/"/g,\'&quot;\')
                            + "\'}";
                    }
                }
            }
            else
            {
                for ( j in this.classes )
                {
                    if ( canCreateClasses )
                    {
                        classes += ",";
                    }
                    canCreateClasses = true;
                    classes += "{classID:\'"
                        + j
                        + "\',name:\'"
                        + String(this.classes[j].name).replace(/\'/g,"\\\\\'").replace(/>/g,\'&gt;\').replace(/"/g,\'&quot;\')
                        + "\'}";
                }
            }
        }
        classes += "]";

        var classIdentifier = this.classes[item.class_id].identifier;
        var icon = ( this.iconsList[classIdentifier] )? this.iconsList[classIdentifier]: this.iconsList[\'__default__\'];
        if ( this.context != \'browse\' && item.node_id > 1 )
        {
            html += \'<a class="nodeicon" href="#" onclick="ezpopmenu_showTopLevel( event, \\\'ContextMenu\\\', {\\\'%nodeID%\\\':\'
                + item.node_id
                + \', \\\'%objectID%\\\':\'
                + item.object_id
                + \', \\\'%languages%\\\':\'
                + languages
                + \', \\\'%classList%\\\':\'
                + classes
                + \' }, \\\'\'
                + String(item.name).replace(/\'/g,"\\\\\'").replace(/>/g,\'&gt;\').replace(/"/g,\'&quot;\')
                + \'\\\', \'
                + item.node_id
                + \', \'
                + ( ( canCreateClasses )? \'-1\':
                                          \'\\\'menu-create-here\\\'\' )
                + \' ); return false"><img src="\'
                + icon
                + \'" alt="" title="[\'
                + this.classes[item.class_id].name.replace(/>/g,\'&gt;\').replace(/"/g, \'&quot;\')

                + \'] ';
unset( $var );
unset( $var1 );
$var1 = 'Click on the icon to display a context-sensitive menu.' ;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = str_replace( array( "\\", "\"", "'" ),
                                             array( "\\\\", "\\042", "\\047" ) , $var1 ); unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '" /><\\/a>\';

        }
        else
        {
            html += \'<img src="\'
                + icon
                + \'" alt="" />\';
        }
        html += \'&nbsp;<a class="image-text" href="\'
            + ( ( this.action )? this.action + \'/\' + item.node_id:
                                 item.url )
            + \'"\';

        if ( this.showTips )
        {

            html += \' title="';
unset( $var );
unset( $var1 );
$var1 = 'Node ID' ;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = str_replace( array( "\\", "\"", "'" ),
                                             array( "\\\\", "\\042", "\\047" ) , $var1 ); unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ': \'
                + item.node_id
                + \', ';
unset( $var );
unset( $var1 );
$var1 = 'Object ID' ;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = str_replace( array( "\\", "\"", "'" ),
                                             array( "\\\\", "\\042", "\\047" ) , $var1 ); unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ': \'
                + item.object_id
                + \', ';
unset( $var );
unset( $var1 );
$var1 = 'Visibility' ;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = str_replace( array( "\\", "\"", "'" ),
                                             array( "\\\\", "\\042", "\\047" ) , $var1 ); unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ': \'
                + ( ( item.is_hidden )? \'';
unset( $var );
unset( $var1 );
$var1 = 'Hidden' ;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = str_replace( array( "\\", "\"", "'" ),
                                             array( "\\\\", "\\042", "\\047" ) , $var1 ); unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '\':
                                        ( item.is_invisible )? \'';
unset( $var );
unset( $var1 );
$var1 = 'Hidden by superior' ;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = str_replace( array( "\\", "\"", "'" ),
                                             array( "\\\\", "\\042", "\\047" ) , $var1 ); unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '\':
                                                               \'';
unset( $var );
unset( $var1 );
$var1 = 'Visible' ;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = str_replace( array( "\\", "\"", "'" ),
                                             array( "\\\\", "\\042", "\\047" ) , $var1 ); unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '\' )
                + \'"\';

        }

        html += \'><span class="node-name-\'
            + ( ( item.is_hidden )? \'hidden\':
                                    ( item.is_invisible )? \'hiddenbyparent\':
                                                           \'normal\' )
            + \'">\'
            + item.name
            + \'<\\/span>\';

        if ( item.is_hidden )
        {

            html += \'<span class="node-hidden"> (';
unset( $var );
unset( $var1 );
$var1 = 'Hidden' ;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = str_replace( array( "\\", "\"", "'" ),
                                             array( "\\\\", "\\042", "\\047" ) , $var1 ); unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ')<\\/span>\';

        }
        else if ( item.is_invisible )
        {

            html += \'<span class="node-hiddenbyparent"> (';
unset( $var );
unset( $var1 );
$var1 = 'Hidden by superior' ;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = str_replace( array( "\\", "\"", "'" ),
                                             array( "\\\\", "\\042", "\\047" ) , $var1 ); unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ')<\\/span>\';

        }

        html += \'<\\/a>\';
        html += \'<div id="c\'
             + item.node_id
             + \'"><\\/div>\';
        html += \'<\\/li>\';

        return html;
    };

    this.load = function( aElement, nodeID, modifiedSubnode )
    {
        var divElement = document.getElementById(\'c\' + nodeID);

        if ( !divElement )
        {
            return false;
        }

        if ( divElement.className == \'hidden\' )
        {
            divElement.className = \'loaded\';
            if ( aElement )
            {
                aElement.className = \'openclose-close\';
            }

            this.setOpen( nodeID );

            return false;
        }

        if ( divElement.className == \'loaded\' )
        {
            divElement.className = \'hidden\';
            if ( aElement )
            {
                aElement.className = \'openclose-open\';
            }

            this.setClosed( nodeID );

            return false;
        }

        if ( divElement.className == \'busy\' )
        {
            return false;
        }


        var url = "/content/treemenu/" + nodeID
            + "/" + modifiedSubnode
            + "/" + this.expiry
            + "/" + this.perm;


        divElement.className = \'busy\';
        if ( aElement )
        {
            aElement.className = "openclose-busy";
        }

        var thisThis = this;

        var request = jQuery.ajax({
            \'url\': url,
            \'dataType\': \'json\',
            \'success\': function( data, textStatus )
            {             
                var html = \'<ul>\', items = [];
                // Filter out nodes to hide
                for ( var i = 0, l = data.children_count; i < l; i++ )
                {
                    if ( jQuery.inArray( data.children[i].node_id, thisThis.hideNodes ) === -1 )
                    {
                    	items.push( data.children[i] );
                    }
                }
                // Generate html content
                for ( var i = 0, l = items.length; i < l; i++ )
                {
                    html += thisThis.generateEntry( items[i], i == l - 1, false );
                }
                html += \'<\\/ul>\';

                divElement.innerHTML += html;
                divElement.className = \'loaded\';
                if ( aElement )
                {
                    aElement.className = \'openclose-close\';
                }

                thisThis.setOpen( nodeID );
                thisThis.openUnder( nodeID );

                return;
            },
            \'error\': function( xhr, textStatus, errorThrown )
            {
                if ( aElement )
                {
                    aElement.className = \'openclose-error\';

                    switch( xhr.status )
                    {
                        case 403:
                        {

                            aElement.title = \'';
unset( $var );
$var = 'Dynamic tree not allowed for this siteaccess' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '\';

                        } break;

                        case 404:
                        {

                            aElement.title = \'';
unset( $var );
$var = 'Node does not exist' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '\';

                        } break;

                        case 500:
                        {

                            aElement.title = \'';
unset( $var );
$var = 'Internal error' ;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '\';

                        } break;
                    }
                    aElement.onclick = function()
                    {
                        return false;
                    }
                }
            }
        });

        return false;
    };

    this.openUnder = function( parentNodeID )
    {
        var divElement = document.getElementById( \'c\' + parentNodeID );
        if ( !divElement )
        {
            return;
        }

        var ul = divElement.getElementsByTagName( \'ul\' )[0];
        if ( !ul )
        {
            return;
        }

        var children = ul.childNodes;
        for ( var i = 0; i < children.length; i++ )
        {
            var liCandidate = children[i];
            if ( liCandidate.nodeType == 1 && liCandidate.id )
            {
                var nodeID = liCandidate.id.substr( 1 ), openIndex = jQuery.inArray( nodeID, this.autoOpenPath );
                if ( this.autoOpen && openIndex !== -1 )
                {
                    this.autoOpenPath.splice( openIndex, 1 );
                    this.setOpen( nodeID );
                }
                if ( jQuery.inArray( nodeID, this.open ) !== -1 )
                {
                    var aElement = document.getElementById( \'a\' + nodeID );
                    if ( aElement )
                    {
                        aElement.onclick();
                    }
                }
            }
        }
    };

    this.collapse = function( parentNodeID )
    {
        var divElement = document.getElementById( \'c\' + parentNodeID );
        if ( !divElement )
        {
            return;
        }

        var aElements = divElement.getElementsByTagName( \'a\' );
        for ( var index in aElements )
        {
            var aElement = aElements[index];
            if ( aElement.className == \'openclose-close\' )
            {
                var nodeID        = aElement.id.substr( 1 );
                var subdivElement = document.getElementById( \'c\' + nodeID );
                if ( subdivElement )
                {
                    subdivElement.className = \'hidden\';
                }
                aElement.className = \'openclose-open\';
                this.setClosed( nodeID );
            }
        }

        var aElement = document.getElementById( \'a\' + parentNodeID );
        if ( aElement )
        {
            divElement.className = \'hidden\';
            aElement.className   = \'openclose-open\';
            this.setClosed( parentNodeID );
        }
    };
}

// -->
</script>
';
$cachedText = $text;
$cacheHandler_5cfed929cf11659a7f13e101fdebc198->storeCache( array( 'scope' => 'template-block', 'binarydata' => $cachedText ) );

$text = array_pop( $textStack );
$text .= $cachedText;
    unset( $cachedText, $cacheHandler_5cfed929cf11659a7f13e101fdebc198 );
}

$text .= '
<script type="text/javascript">
<!--
var treeMenu;
(function(){    var path         = [';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'path' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 0 );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'node_id' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = isset( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_23bd687503dabf10324ba0781ed47ac7_23 ) ) $fe_variable_stack_23bd687503dabf10324ba0781ed47ac7_23 = array();
$fe_variable_stack_23bd687503dabf10324ba0781ed47ac7_23[] = compact( 'fe_array_23bd687503dabf10324ba0781ed47ac7_23', 'fe_array_keys_23bd687503dabf10324ba0781ed47ac7_23', 'fe_n_items_23bd687503dabf10324ba0781ed47ac7_23', 'fe_n_items_processed_23bd687503dabf10324ba0781ed47ac7_23', 'fe_i_23bd687503dabf10324ba0781ed47ac7_23', 'fe_key_23bd687503dabf10324ba0781ed47ac7_23', 'fe_val_23bd687503dabf10324ba0781ed47ac7_23', 'fe_offset_23bd687503dabf10324ba0781ed47ac7_23', 'fe_max_23bd687503dabf10324ba0781ed47ac7_23', 'fe_reverse_23bd687503dabf10324ba0781ed47ac7_23', 'fe_first_val_23bd687503dabf10324ba0781ed47ac7_23', 'fe_last_val_23bd687503dabf10324ba0781ed47ac7_23' );
unset( $fe_array_23bd687503dabf10324ba0781ed47ac7_23 );
unset( $fe_array_23bd687503dabf10324ba0781ed47ac7_23 );
$fe_array_23bd687503dabf10324ba0781ed47ac7_23 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$fe_array_23bd687503dabf10324ba0781ed47ac7_231 = compiledFetchAttribute( $fe_array_23bd687503dabf10324ba0781ed47ac7_23, 'path' );
unset( $fe_array_23bd687503dabf10324ba0781ed47ac7_23 );
$fe_array_23bd687503dabf10324ba0781ed47ac7_23 = $fe_array_23bd687503dabf10324ba0781ed47ac7_231;
if (! isset( $fe_array_23bd687503dabf10324ba0781ed47ac7_23 ) ) $fe_array_23bd687503dabf10324ba0781ed47ac7_23 = NULL;
while ( is_object( $fe_array_23bd687503dabf10324ba0781ed47ac7_23 ) and method_exists( $fe_array_23bd687503dabf10324ba0781ed47ac7_23, 'templateValue' ) )
    $fe_array_23bd687503dabf10324ba0781ed47ac7_23 = $fe_array_23bd687503dabf10324ba0781ed47ac7_23->templateValue();

$fe_array_keys_23bd687503dabf10324ba0781ed47ac7_23 = is_array( $fe_array_23bd687503dabf10324ba0781ed47ac7_23 ) ? array_keys( $fe_array_23bd687503dabf10324ba0781ed47ac7_23 ) : array();
$fe_n_items_23bd687503dabf10324ba0781ed47ac7_23 = count( $fe_array_keys_23bd687503dabf10324ba0781ed47ac7_23 );
$fe_n_items_processed_23bd687503dabf10324ba0781ed47ac7_23 = 0;
$fe_offset_23bd687503dabf10324ba0781ed47ac7_23 = 0;
$fe_max_23bd687503dabf10324ba0781ed47ac7_23 = $fe_n_items_23bd687503dabf10324ba0781ed47ac7_23 - $fe_offset_23bd687503dabf10324ba0781ed47ac7_23;
$fe_reverse_23bd687503dabf10324ba0781ed47ac7_23 = false;
if ( $fe_offset_23bd687503dabf10324ba0781ed47ac7_23 < 0 || $fe_offset_23bd687503dabf10324ba0781ed47ac7_23 >= $fe_n_items_23bd687503dabf10324ba0781ed47ac7_23 )
{
    $fe_offset_23bd687503dabf10324ba0781ed47ac7_23 = ( $fe_offset_23bd687503dabf10324ba0781ed47ac7_23 < 0 ) ? 0 : $fe_n_items_23bd687503dabf10324ba0781ed47ac7_23;
    if ( $fe_n_items_23bd687503dabf10324ba0781ed47ac7_23 || $fe_offset_23bd687503dabf10324ba0781ed47ac7_23 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_23bd687503dabf10324ba0781ed47ac7_23'. Array count: $fe_n_items_23bd687503dabf10324ba0781ed47ac7_23");   
}
}
if ( $fe_max_23bd687503dabf10324ba0781ed47ac7_23 < 0 || $fe_offset_23bd687503dabf10324ba0781ed47ac7_23 + $fe_max_23bd687503dabf10324ba0781ed47ac7_23 > $fe_n_items_23bd687503dabf10324ba0781ed47ac7_23 )
{
    if ( $fe_max_23bd687503dabf10324ba0781ed47ac7_23 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_23bd687503dabf10324ba0781ed47ac7_23");
    $fe_max_23bd687503dabf10324ba0781ed47ac7_23 = $fe_n_items_23bd687503dabf10324ba0781ed47ac7_23 - $fe_offset_23bd687503dabf10324ba0781ed47ac7_23;
}
if ( $fe_reverse_23bd687503dabf10324ba0781ed47ac7_23 )
{
    $fe_first_val_23bd687503dabf10324ba0781ed47ac7_23 = $fe_n_items_23bd687503dabf10324ba0781ed47ac7_23 - 1 - $fe_offset_23bd687503dabf10324ba0781ed47ac7_23;
    $fe_last_val_23bd687503dabf10324ba0781ed47ac7_23  = 0;
}
else
{
    $fe_first_val_23bd687503dabf10324ba0781ed47ac7_23 = $fe_offset_23bd687503dabf10324ba0781ed47ac7_23;
    $fe_last_val_23bd687503dabf10324ba0781ed47ac7_23  = $fe_n_items_23bd687503dabf10324ba0781ed47ac7_23 - 1;
}
// foreach
for ( $fe_i_23bd687503dabf10324ba0781ed47ac7_23 = $fe_first_val_23bd687503dabf10324ba0781ed47ac7_23; $fe_n_items_processed_23bd687503dabf10324ba0781ed47ac7_23 < $fe_max_23bd687503dabf10324ba0781ed47ac7_23 && ( $fe_reverse_23bd687503dabf10324ba0781ed47ac7_23 ? $fe_i_23bd687503dabf10324ba0781ed47ac7_23 >= $fe_last_val_23bd687503dabf10324ba0781ed47ac7_23 : $fe_i_23bd687503dabf10324ba0781ed47ac7_23 <= $fe_last_val_23bd687503dabf10324ba0781ed47ac7_23 ); $fe_reverse_23bd687503dabf10324ba0781ed47ac7_23 ? $fe_i_23bd687503dabf10324ba0781ed47ac7_23-- : $fe_i_23bd687503dabf10324ba0781ed47ac7_23++ )
{
$fe_key_23bd687503dabf10324ba0781ed47ac7_23 = $fe_array_keys_23bd687503dabf10324ba0781ed47ac7_23[$fe_i_23bd687503dabf10324ba0781ed47ac7_23];
$fe_val_23bd687503dabf10324ba0781ed47ac7_23 = $fe_array_23bd687503dabf10324ba0781ed47ac7_23[$fe_key_23bd687503dabf10324ba0781ed47ac7_23];
$vars[$rootNamespace]['element'] = $fe_val_23bd687503dabf10324ba0781ed47ac7_23;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= ', ';
} // delimiter ends

$text .= '\'';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'element', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['element'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\'';
$fe_n_items_processed_23bd687503dabf10324ba0781ed47ac7_23++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_23bd687503dabf10324ba0781ed47ac7_23 ) ) extract( array_pop( $fe_variable_stack_23bd687503dabf10324ba0781ed47ac7_23 ) );

else
{

unset( $fe_array_23bd687503dabf10324ba0781ed47ac7_23 );

unset( $fe_array_keys_23bd687503dabf10324ba0781ed47ac7_23 );

unset( $fe_n_items_23bd687503dabf10324ba0781ed47ac7_23 );

unset( $fe_n_items_processed_23bd687503dabf10324ba0781ed47ac7_23 );

unset( $fe_i_23bd687503dabf10324ba0781ed47ac7_23 );

unset( $fe_key_23bd687503dabf10324ba0781ed47ac7_23 );

unset( $fe_val_23bd687503dabf10324ba0781ed47ac7_23 );

unset( $fe_offset_23bd687503dabf10324ba0781ed47ac7_23 );

unset( $fe_max_23bd687503dabf10324ba0781ed47ac7_23 );

unset( $fe_reverse_23bd687503dabf10324ba0781ed47ac7_23 );

unset( $fe_first_val_23bd687503dabf10324ba0781ed47ac7_23 );

unset( $fe_last_val_23bd687503dabf10324ba0781ed47ac7_23 );

unset( $fe_variable_stack_23bd687503dabf10324ba0781ed47ac7_23 );

}

// foreach ends
}
unset( $if_cond );
// if ends

$text .= '];
    var persistence  = ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'menu_persistence', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['menu_persistence'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'true';
}
else
{
$text .= 'false';
}
unset( $if_cond );
// if ends

$text .= ';
    treeMenu         = new ContentStructureMenu( path, persistence );
';
unset( $cacheKeys );
unset( $cacheKeys1 );
unset( $cacheKeys1 );
$cacheKeys1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node_id'] : null;
if (! isset( $cacheKeys1 ) ) $cacheKeys1 = NULL;
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
unset( $cacheKeys2 );
unset( $cacheKeys2 );
$cacheKeys2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'access_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['access_type'] : null;
if (! isset( $cacheKeys2 ) ) $cacheKeys2 = NULL;
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
$cacheKeys = array( $cacheKeys1, $cacheKeys2 );unset( $cacheKeys1, $cacheKeys2 );
if (! isset( $cacheKeys ) ) $cacheKeys = NULL;
while ( is_object( $cacheKeys ) and method_exists( $cacheKeys, 'templateValue' ) )
    $cacheKeys = $cacheKeys->templateValue();

$subtreeExpiry = NULL;
//include_once( 'lib/eztemplate/classes/eztemplatecacheblock.php' );
$cacheKeys = array( $cacheKeys, "546_0_546_62_design/admin2/templates/contentstructuremenu/content_structure_menu_dynamic.tpl", "ezflow_site_clean_admin" );

list($cacheHandler_f455b8fa11552b945be2b2bf64ff5b59, $contentData) =
  eZTemplateCacheBlock::retrieve( $cacheKeys, $subtreeExpiry, null, true );
if ( !( $contentData instanceof eZClusterFileFailure ) )
{

$text .= $contentData;
    unset( $contentData );
}
else
{
    unset( $contentData );
if ( !isset( $textStack ) )
    $textStack = array();
$textStack[] = $text;
$text = '';
$text .= '    ';
// def $root_node_url
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node'] : null;
$var1 = compiledFetchAttribute( $var, 'url' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'root_node_url', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'root_node_url' is already defined.", array (
  0 => 
  array (
    0 => 547,
    1 => 4,
    2 => 19171,
  ),
  1 => 
  array (
    0 => 547,
    1 => 39,
    2 => 19206,
  ),
  2 => 'design/admin2/templates/contentstructuremenu/content_structure_menu_dynamic.tpl',
) );
    $tpl->setVariable( 'root_node_url', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'root_node_url', $var, $rootNamespace );
}

$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node_url', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node_url'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( '' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
unset( $var );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node_id'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = ( 'content/view/full/' . $var2 );
unset( $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'root_node_url', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['root_node_url'] = $var;
    unset( $var );
}
$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '
    var rootNode = {"node_id":';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ',"object_id":';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'object' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'id' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

}
else
{
$text .= '0';
}
unset( $if_cond );
// if ends

$text .= ',"class_id":';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'contentclass_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ',"has_children":';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'children_count' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'true';
}
else
{
$text .= 'false';
}
unset( $if_cond );
// if ends

$text .= ',"name":"';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node'] : null;
$var2 = compiledFetchAttribute( $var1, 'name' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = str_replace( array( "\\", "\"", "'" ),
                                             array( "\\\\", "\\042", "\\047" ) , $var1 ); unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '","url":';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node_url', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node_url'] : null;
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

$text .= ',"modified_subnode":';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node'] : null;
$var1 = compiledFetchAttribute( $var, 'modified_subnode' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ',"languages":["';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node'] : null;
$var2 = compiledFetchAttribute( $var1, 'object' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'language_codes' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = implode( "\", \"", $var1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '"],"class_list":[';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_23bd687503dabf10324ba0781ed47ac7_24 ) ) $fe_variable_stack_23bd687503dabf10324ba0781ed47ac7_24 = array();
$fe_variable_stack_23bd687503dabf10324ba0781ed47ac7_24[] = compact( 'fe_array_23bd687503dabf10324ba0781ed47ac7_24', 'fe_array_keys_23bd687503dabf10324ba0781ed47ac7_24', 'fe_n_items_23bd687503dabf10324ba0781ed47ac7_24', 'fe_n_items_processed_23bd687503dabf10324ba0781ed47ac7_24', 'fe_i_23bd687503dabf10324ba0781ed47ac7_24', 'fe_key_23bd687503dabf10324ba0781ed47ac7_24', 'fe_val_23bd687503dabf10324ba0781ed47ac7_24', 'fe_offset_23bd687503dabf10324ba0781ed47ac7_24', 'fe_max_23bd687503dabf10324ba0781ed47ac7_24', 'fe_reverse_23bd687503dabf10324ba0781ed47ac7_24', 'fe_first_val_23bd687503dabf10324ba0781ed47ac7_24', 'fe_last_val_23bd687503dabf10324ba0781ed47ac7_24' );
unset( $fe_array_23bd687503dabf10324ba0781ed47ac7_24 );
unset( $fe_array_23bd687503dabf10324ba0781ed47ac7_241 );
unset( $fe_array_23bd687503dabf10324ba0781ed47ac7_241 );
$fe_array_23bd687503dabf10324ba0781ed47ac7_241 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'filter_groups', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['filter_groups'] : null;
if (! isset( $fe_array_23bd687503dabf10324ba0781ed47ac7_241 ) ) $fe_array_23bd687503dabf10324ba0781ed47ac7_241 = NULL;
while ( is_object( $fe_array_23bd687503dabf10324ba0781ed47ac7_241 ) and method_exists( $fe_array_23bd687503dabf10324ba0781ed47ac7_241, 'templateValue' ) )
    $fe_array_23bd687503dabf10324ba0781ed47ac7_241 = $fe_array_23bd687503dabf10324ba0781ed47ac7_241->templateValue();
while ( is_object( $fe_array_23bd687503dabf10324ba0781ed47ac7_241 ) and method_exists( $fe_array_23bd687503dabf10324ba0781ed47ac7_241, 'templateValue' ) )
    $fe_array_23bd687503dabf10324ba0781ed47ac7_241 = $fe_array_23bd687503dabf10324ba0781ed47ac7_241->templateValue();
unset( $fe_array_23bd687503dabf10324ba0781ed47ac7_242 );
unset( $fe_array_23bd687503dabf10324ba0781ed47ac7_242 );
$fe_array_23bd687503dabf10324ba0781ed47ac7_242 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node'] : null;
if (! isset( $fe_array_23bd687503dabf10324ba0781ed47ac7_242 ) ) $fe_array_23bd687503dabf10324ba0781ed47ac7_242 = NULL;
while ( is_object( $fe_array_23bd687503dabf10324ba0781ed47ac7_242 ) and method_exists( $fe_array_23bd687503dabf10324ba0781ed47ac7_242, 'templateValue' ) )
    $fe_array_23bd687503dabf10324ba0781ed47ac7_242 = $fe_array_23bd687503dabf10324ba0781ed47ac7_242->templateValue();
while ( is_object( $fe_array_23bd687503dabf10324ba0781ed47ac7_242 ) and method_exists( $fe_array_23bd687503dabf10324ba0781ed47ac7_242, 'templateValue' ) )
    $fe_array_23bd687503dabf10324ba0781ed47ac7_242 = $fe_array_23bd687503dabf10324ba0781ed47ac7_242->templateValue();
unset( $fe_array_23bd687503dabf10324ba0781ed47ac7_243 );
unset( $fe_array_23bd687503dabf10324ba0781ed47ac7_243 );
$fe_array_23bd687503dabf10324ba0781ed47ac7_243 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'filter_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['filter_type'] : null;
if (! isset( $fe_array_23bd687503dabf10324ba0781ed47ac7_243 ) ) $fe_array_23bd687503dabf10324ba0781ed47ac7_243 = NULL;
while ( is_object( $fe_array_23bd687503dabf10324ba0781ed47ac7_243 ) and method_exists( $fe_array_23bd687503dabf10324ba0781ed47ac7_243, 'templateValue' ) )
    $fe_array_23bd687503dabf10324ba0781ed47ac7_243 = $fe_array_23bd687503dabf10324ba0781ed47ac7_243->templateValue();
while ( is_object( $fe_array_23bd687503dabf10324ba0781ed47ac7_243 ) and method_exists( $fe_array_23bd687503dabf10324ba0781ed47ac7_243, 'templateValue' ) )
    $fe_array_23bd687503dabf10324ba0781ed47ac7_243 = $fe_array_23bd687503dabf10324ba0781ed47ac7_243->templateValue();
$fe_array_23bd687503dabf10324ba0781ed47ac7_24 = call_user_func_array( array( new eZContentFunctionCollection(), 'canInstantiateClassList' ),
  array(     'group_id' => $fe_array_23bd687503dabf10324ba0781ed47ac7_241,
    'parent_node' => $fe_array_23bd687503dabf10324ba0781ed47ac7_242,
    'filter_type' => $fe_array_23bd687503dabf10324ba0781ed47ac7_243,
    'fetch_id' => false,
    'as_object' => true,
    'group_by_class_group' => false ) );
$fe_array_23bd687503dabf10324ba0781ed47ac7_24 = isset( $fe_array_23bd687503dabf10324ba0781ed47ac7_24['result'] ) ? $fe_array_23bd687503dabf10324ba0781ed47ac7_24['result'] : null;
unset( $fe_array_23bd687503dabf10324ba0781ed47ac7_241, $fe_array_23bd687503dabf10324ba0781ed47ac7_242, $fe_array_23bd687503dabf10324ba0781ed47ac7_243 );
if (! isset( $fe_array_23bd687503dabf10324ba0781ed47ac7_24 ) ) $fe_array_23bd687503dabf10324ba0781ed47ac7_24 = NULL;
while ( is_object( $fe_array_23bd687503dabf10324ba0781ed47ac7_24 ) and method_exists( $fe_array_23bd687503dabf10324ba0781ed47ac7_24, 'templateValue' ) )
    $fe_array_23bd687503dabf10324ba0781ed47ac7_24 = $fe_array_23bd687503dabf10324ba0781ed47ac7_24->templateValue();

$fe_array_keys_23bd687503dabf10324ba0781ed47ac7_24 = is_array( $fe_array_23bd687503dabf10324ba0781ed47ac7_24 ) ? array_keys( $fe_array_23bd687503dabf10324ba0781ed47ac7_24 ) : array();
$fe_n_items_23bd687503dabf10324ba0781ed47ac7_24 = count( $fe_array_keys_23bd687503dabf10324ba0781ed47ac7_24 );
$fe_n_items_processed_23bd687503dabf10324ba0781ed47ac7_24 = 0;
$fe_offset_23bd687503dabf10324ba0781ed47ac7_24 = 0;
$fe_max_23bd687503dabf10324ba0781ed47ac7_24 = $fe_n_items_23bd687503dabf10324ba0781ed47ac7_24 - $fe_offset_23bd687503dabf10324ba0781ed47ac7_24;
$fe_reverse_23bd687503dabf10324ba0781ed47ac7_24 = false;
if ( $fe_offset_23bd687503dabf10324ba0781ed47ac7_24 < 0 || $fe_offset_23bd687503dabf10324ba0781ed47ac7_24 >= $fe_n_items_23bd687503dabf10324ba0781ed47ac7_24 )
{
    $fe_offset_23bd687503dabf10324ba0781ed47ac7_24 = ( $fe_offset_23bd687503dabf10324ba0781ed47ac7_24 < 0 ) ? 0 : $fe_n_items_23bd687503dabf10324ba0781ed47ac7_24;
    if ( $fe_n_items_23bd687503dabf10324ba0781ed47ac7_24 || $fe_offset_23bd687503dabf10324ba0781ed47ac7_24 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_23bd687503dabf10324ba0781ed47ac7_24'. Array count: $fe_n_items_23bd687503dabf10324ba0781ed47ac7_24");   
}
}
if ( $fe_max_23bd687503dabf10324ba0781ed47ac7_24 < 0 || $fe_offset_23bd687503dabf10324ba0781ed47ac7_24 + $fe_max_23bd687503dabf10324ba0781ed47ac7_24 > $fe_n_items_23bd687503dabf10324ba0781ed47ac7_24 )
{
    if ( $fe_max_23bd687503dabf10324ba0781ed47ac7_24 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_23bd687503dabf10324ba0781ed47ac7_24");
    $fe_max_23bd687503dabf10324ba0781ed47ac7_24 = $fe_n_items_23bd687503dabf10324ba0781ed47ac7_24 - $fe_offset_23bd687503dabf10324ba0781ed47ac7_24;
}
if ( $fe_reverse_23bd687503dabf10324ba0781ed47ac7_24 )
{
    $fe_first_val_23bd687503dabf10324ba0781ed47ac7_24 = $fe_n_items_23bd687503dabf10324ba0781ed47ac7_24 - 1 - $fe_offset_23bd687503dabf10324ba0781ed47ac7_24;
    $fe_last_val_23bd687503dabf10324ba0781ed47ac7_24  = 0;
}
else
{
    $fe_first_val_23bd687503dabf10324ba0781ed47ac7_24 = $fe_offset_23bd687503dabf10324ba0781ed47ac7_24;
    $fe_last_val_23bd687503dabf10324ba0781ed47ac7_24  = $fe_n_items_23bd687503dabf10324ba0781ed47ac7_24 - 1;
}
// foreach
for ( $fe_i_23bd687503dabf10324ba0781ed47ac7_24 = $fe_first_val_23bd687503dabf10324ba0781ed47ac7_24; $fe_n_items_processed_23bd687503dabf10324ba0781ed47ac7_24 < $fe_max_23bd687503dabf10324ba0781ed47ac7_24 && ( $fe_reverse_23bd687503dabf10324ba0781ed47ac7_24 ? $fe_i_23bd687503dabf10324ba0781ed47ac7_24 >= $fe_last_val_23bd687503dabf10324ba0781ed47ac7_24 : $fe_i_23bd687503dabf10324ba0781ed47ac7_24 <= $fe_last_val_23bd687503dabf10324ba0781ed47ac7_24 ); $fe_reverse_23bd687503dabf10324ba0781ed47ac7_24 ? $fe_i_23bd687503dabf10324ba0781ed47ac7_24-- : $fe_i_23bd687503dabf10324ba0781ed47ac7_24++ )
{
$fe_key_23bd687503dabf10324ba0781ed47ac7_24 = $fe_array_keys_23bd687503dabf10324ba0781ed47ac7_24[$fe_i_23bd687503dabf10324ba0781ed47ac7_24];
$fe_val_23bd687503dabf10324ba0781ed47ac7_24 = $fe_array_23bd687503dabf10324ba0781ed47ac7_24[$fe_key_23bd687503dabf10324ba0781ed47ac7_24];
$vars[$rootNamespace]['class'] = $fe_val_23bd687503dabf10324ba0781ed47ac7_24;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= ',';
} // delimiter ends

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$fe_n_items_processed_23bd687503dabf10324ba0781ed47ac7_24++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_23bd687503dabf10324ba0781ed47ac7_24 ) ) extract( array_pop( $fe_variable_stack_23bd687503dabf10324ba0781ed47ac7_24 ) );

else
{

unset( $fe_array_23bd687503dabf10324ba0781ed47ac7_24 );

unset( $fe_array_keys_23bd687503dabf10324ba0781ed47ac7_24 );

unset( $fe_n_items_23bd687503dabf10324ba0781ed47ac7_24 );

unset( $fe_n_items_processed_23bd687503dabf10324ba0781ed47ac7_24 );

unset( $fe_i_23bd687503dabf10324ba0781ed47ac7_24 );

unset( $fe_key_23bd687503dabf10324ba0781ed47ac7_24 );

unset( $fe_val_23bd687503dabf10324ba0781ed47ac7_24 );

unset( $fe_offset_23bd687503dabf10324ba0781ed47ac7_24 );

unset( $fe_max_23bd687503dabf10324ba0781ed47ac7_24 );

unset( $fe_reverse_23bd687503dabf10324ba0781ed47ac7_24 );

unset( $fe_first_val_23bd687503dabf10324ba0781ed47ac7_24 );

unset( $fe_last_val_23bd687503dabf10324ba0781ed47ac7_24 );

unset( $fe_variable_stack_23bd687503dabf10324ba0781ed47ac7_24 );

}

// foreach ends
$text .= ']};

    document.writeln( \'<ul id="content_tree_menu">\' );
    document.writeln( treeMenu.generateEntry( rootNode, false, true ) );
    document.writeln( \'<\\/ul>\' );

    treeMenu.load( false, ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node_id'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ', ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['root_node'] : null;
$var1 = compiledFetchAttribute( $var, 'modified_subnode' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' );})();';
$cachedText = $text;
$cacheHandler_f455b8fa11552b945be2b2bf64ff5b59->storeCache( array( 'scope' => 'template-block', 'binarydata' => $cachedText ) );

$text = array_pop( $textStack );
$text .= $cachedText;
    unset( $cachedText, $cacheHandler_f455b8fa11552b945be2b2bf64ff5b59 );
}

$text .= '
// -->
</script>
';

$setArray = $oldSetArray_81182138a5f77600fe708f60a235ddd9;
$tpl->Level--;
?>
