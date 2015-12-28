<?php
// URI:       design/admin2/templates/window_controls.tpl
// Filename:  design/admin2/templates/window_controls.tpl
// Timestamp: 1285696608 (Tue Sep 28 10:56:48 MST 2010)
$oldSetArray_01850ac33794e28e07232e3428470e76 = isset( $setArray ) ? $setArray : array();
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

// def $node_url_alias
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'url_alias' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'node_url_alias', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'node_url_alias' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 967,
  ),
  2 => 'design/admin2/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'node_url_alias', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'node_url_alias', $var, $rootNamespace );
}

// def $tabs_disabled
unset( $var );
unset( $var1 );
//include_once( 'kernel/classes/ezpreferences.php' );
$var1 = eZPreferences::value( "admin_navigation_content" );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = !( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'tabs_disabled', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'tabs_disabled' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 967,
  ),
  2 => 'design/admin2/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'tabs_disabled', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'tabs_disabled', $var, $rootNamespace );
}

// def $default_tab
if ( $tpl->hasVariable( 'default_tab', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'default_tab' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 967,
  ),
  2 => 'design/admin2/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'default_tab', 'view', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'default_tab', 'view', $rootNamespace );
}

// def $node_tab_index
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "view_parameters", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["view_parameters"] : null;
$var2 = compiledFetchAttribute( $var1, "tab" );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

if ( isset( $var1 ) )
{
    $var = $var1;
}
else
{
    unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "default_tab", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["default_tab"] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

    if ( isset( $var2 ) )
    {
        $var = $var2;
    }
}
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'node_tab_index', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'node_tab_index' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 967,
  ),
  2 => 'design/admin2/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'node_tab_index', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'node_tab_index', $var, $rootNamespace );
}

// def $read_open_tab_by_cookie
if ( $tpl->hasVariable( 'read_open_tab_by_cookie', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'read_open_tab_by_cookie' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 967,
  ),
  2 => 'design/admin2/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'read_open_tab_by_cookie', true, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'read_open_tab_by_cookie', true, $rootNamespace );
}

// def $available_languages
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchPrioritizedLanguages' ),
  array(  ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'available_languages', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'available_languages' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 967,
  ),
  2 => 'design/admin2/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'available_languages', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'available_languages', $var, $rootNamespace );
}

// def $translations
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'languages' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'translations', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'translations' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 967,
  ),
  2 => 'design/admin2/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'translations', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'translations', $var, $rootNamespace );
}

// def $translations_count
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'translations', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['translations'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'translations_count', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'translations_count' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 967,
  ),
  2 => 'design/admin2/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'translations_count', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'translations_count', $var, $rootNamespace );
}

// def $states
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'allowed_assign_state_list' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'states', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'states' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 967,
  ),
  2 => 'design/admin2/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'states', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'states', $var, $rootNamespace );
}

// def $states_count
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'states', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['states'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $varData, false, false );
$var = $varData['value'];
unset( $varData );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'states_count', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'states_count' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 967,
  ),
  2 => 'design/admin2/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'states_count', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'states_count', $var, $rootNamespace );
}

// def $related_objects_count
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
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchRelatedObjectsCount' ),
  array(     'object_id' => $var1,
    'attribute_identifier' => "0",
    'all_relations' => true ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'related_objects_count', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'related_objects_count' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 967,
  ),
  2 => 'design/admin2/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'related_objects_count', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'related_objects_count', $var, $rootNamespace );
}

// def $reverse_related_objects_count
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
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchReverseRelatedObjectsCount' ),
  array(     'object_id' => $var1,
    'attribute_identifier' => null,
    'all_relations' => true,
    'ignore_visibility' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'reverse_related_objects_count', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'reverse_related_objects_count' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 967,
  ),
  2 => 'design/admin2/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'reverse_related_objects_count', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'reverse_related_objects_count', $var, $rootNamespace );
}

// def $valid_tabs
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'default_tab', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['default_tab'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = array( $var1, "details", "translations", "locations", "relations", "states" );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'valid_tabs', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'valid_tabs' is already defined.", array (
  0 => 
  array (
    0 => 2,
    1 => 0,
    2 => 23,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 967,
  ),
  2 => 'design/admin2/templates/window_controls.tpl',
) );
    $tpl->setVariable( 'valid_tabs', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'valid_tabs', $var, $rootNamespace );
}

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tabs_disabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tabs_disabled'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <div class="button-left"><a id="maincontent-show" class="show-hide-tabs" href="/user/preferences/set/admin_navigation_content/1" title="Enable &quot;Tabs&quot; by default while browsing content.">+</a></div>';
}
else
{
$text .= '    <div class="button-left"><a id="maincontent-hide" class="show-hide-tabs" href="/user/preferences/set/admin_navigation_content/0" title="Disable &quot;Tabs&quot; by default while browsing content.">-</a></div>';
}
unset( $if_cond );
// if ends

unset( $elseif_cond_b43710e2304207956a6a4369b6e03d0a_13 );
unset( $elseif_cond_b43710e2304207956a6a4369b6e03d0a_131 );
unset( $elseif_cond_b43710e2304207956a6a4369b6e03d0a_131 );
$elseif_cond_b43710e2304207956a6a4369b6e03d0a_131 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'view_parameters', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['view_parameters'] : null;
$elseif_cond_b43710e2304207956a6a4369b6e03d0a_132 = compiledFetchAttribute( $elseif_cond_b43710e2304207956a6a4369b6e03d0a_131, 'tab' );
unset( $elseif_cond_b43710e2304207956a6a4369b6e03d0a_131 );
$elseif_cond_b43710e2304207956a6a4369b6e03d0a_131 = $elseif_cond_b43710e2304207956a6a4369b6e03d0a_132;
if (! isset( $elseif_cond_b43710e2304207956a6a4369b6e03d0a_131 ) ) $elseif_cond_b43710e2304207956a6a4369b6e03d0a_131 = NULL;
while ( is_object( $elseif_cond_b43710e2304207956a6a4369b6e03d0a_131 ) and method_exists( $elseif_cond_b43710e2304207956a6a4369b6e03d0a_131, 'templateValue' ) )
    $elseif_cond_b43710e2304207956a6a4369b6e03d0a_131 = $elseif_cond_b43710e2304207956a6a4369b6e03d0a_131->templateValue();
while ( is_object( $elseif_cond_b43710e2304207956a6a4369b6e03d0a_131 ) and method_exists( $elseif_cond_b43710e2304207956a6a4369b6e03d0a_131, 'templateValue' ) )
    $elseif_cond_b43710e2304207956a6a4369b6e03d0a_131 = $elseif_cond_b43710e2304207956a6a4369b6e03d0a_131->templateValue();
$elseif_cond_b43710e2304207956a6a4369b6e03d0a_13 = isset( $elseif_cond_b43710e2304207956a6a4369b6e03d0a_131 );unset( $elseif_cond_b43710e2304207956a6a4369b6e03d0a_131 );
if (! isset( $elseif_cond_b43710e2304207956a6a4369b6e03d0a_13 ) ) $elseif_cond_b43710e2304207956a6a4369b6e03d0a_13 = NULL;
while ( is_object( $elseif_cond_b43710e2304207956a6a4369b6e03d0a_13 ) and method_exists( $elseif_cond_b43710e2304207956a6a4369b6e03d0a_13, 'templateValue' ) )
    $elseif_cond_b43710e2304207956a6a4369b6e03d0a_13 = $elseif_cond_b43710e2304207956a6a4369b6e03d0a_13->templateValue();

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'valid_tabs', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['valid_tabs'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_tab_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_tab_index'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
if( is_string( $if_cond2 ) )
{
  $if_cond1 = ( strpos( $if_cond2, $if_cond3 ) !== false );
}
else if ( is_array( $if_cond2 ) )
{
  $if_cond1 = in_array( $if_cond3, $if_cond2 );
}
else
{
$if_cond1 = false;
}unset( $if_cond2, $if_cond3 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = !( $if_cond1 );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'default_tab', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['default_tab'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'node_tab_index', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['node_tab_index'] = $var;
    unset( $var );
}
}
elseif ( $elseif_cond_b43710e2304207956a6a4369b6e03d0a_13 )
{
$text .= '    
    ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'tabs_disabled', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['tabs_disabled'] = false;
}
$text .= '    
    ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'read_open_tab_by_cookie', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['read_open_tab_by_cookie'] = false;
}
}
unset( $if_cond );
// if ends

unset( $elseif_cond_b43710e2304207956a6a4369b6e03d0a_13 );

$text .= '
<ul class="tabs';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tabs_disabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tabs_disabled'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' disabled';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'read_open_tab_by_cookie', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['read_open_tab_by_cookie'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' tabs-by-cookie';
}
unset( $if_cond );
// if ends

$text .= '">
    
    <li id="node-tab-view" class="first';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_tab_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_tab_index'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'view' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' selected';
}
unset( $if_cond );
// if ends

$text .= '">
        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tabs_disabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tabs_disabled'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <span class="disabled" title="Tab is disabled, enable with toggler to the left of these tabs.">View</span>
        ';
}
else
{
$text .= '            <a href=';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_url_alias', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_url_alias'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = ( $var2 . '/(tab)/view' );
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
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

$text .= ' title="Show simplified view of content.">View</a>
        ';
}
unset( $if_cond );
// if ends

$text .= '    </li>

    
    <li id="node-tab-details" class="middle';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_tab_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_tab_index'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'details' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' selected';
}
unset( $if_cond );
// if ends

$text .= '">
        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tabs_disabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tabs_disabled'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <span class="disabled" title="Tab is disabled, enable with toggler to the left of these tabs.">Details</span>
        ';
}
else
{
$text .= '            <a href=';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_url_alias', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_url_alias'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = ( $var2 . '/(tab)/details' );
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
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

$text .= ' title="Show details.">Details</a>
        ';
}
unset( $if_cond );
// if ends

$text .= '    </li>

    
    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
$if_cond1 = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchTranslationList' ),
  array(  ) );
$if_cond1 = isset( $if_cond1['result'] ) ? $if_cond1['result'] : null;
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
$if_cond = ( ( $if_cond1 ) > ( 1 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'available_languages', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['available_languages'] : null;
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
$if_cond = ( ( $if_cond1 ) > ( 1 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <li id="node-tab-translations" class="middle';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_tab_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_tab_index'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'translations' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' selected';
}
unset( $if_cond );
// if ends

$text .= '">
        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tabs_disabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tabs_disabled'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <span class="disabled" title="Tab is disabled, enable with toggler to the left of these tabs.">';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'translations_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['translations_count'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%count' => $var3 );unset( $var3 );
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
$var = strtr( 'Translations (%count)', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</span>
        ';
}
else
{
$text .= '            <a href=';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_url_alias', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_url_alias'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = ( $var2 . '/(tab)/translations' );
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
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

$text .= ' title="Show available translations.">';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'translations_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['translations_count'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%count' => $var3 );unset( $var3 );
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
$var = strtr( 'Translations (%count)', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</a>
        ';
}
unset( $if_cond );
// if ends

$text .= '    </li>
    ';
}
unset( $if_cond );
// if ends

$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '
    
    <li id="node-tab-locations" class="middle';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_tab_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_tab_index'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'locations' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' selected';
}
unset( $if_cond );
// if ends

$text .= '">
        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tabs_disabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tabs_disabled'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <span class="disabled" title="Tab is disabled, enable with toggler to the left of these tabs.">';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var4 = compiledFetchAttribute( $var3, 'object' );
unset( $var3 );
$var3 = $var4;
$var4 = compiledFetchAttribute( $var3, 'assigned_nodes' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var3Data = array( 'value' => $var3 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $var3Data, false, false );
$var3 = $var3Data['value'];
unset( $var3Data );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%count' => $var3 );unset( $var3 );
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
$var = strtr( 'Locations (%count)', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</span>
        ';
}
else
{
$text .= '            <a href=';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_url_alias', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_url_alias'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = ( $var2 . '/(tab)/locations' );
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
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

$text .= ' title="Show location overview.">';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node'] : null;
$var4 = compiledFetchAttribute( $var3, 'object' );
unset( $var3 );
$var3 = $var4;
$var4 = compiledFetchAttribute( $var3, 'assigned_nodes' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var3Data = array( 'value' => $var3 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $var3Data, false, false );
$var3 = $var3Data['value'];
unset( $var3Data );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%count' => $var3 );unset( $var3 );
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
$var = strtr( 'Locations (%count)', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</a>
        ';
}
unset( $if_cond );
// if ends

$text .= '    </li>

    
    <li id="node-tab-relations" class="middle';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_tab_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_tab_index'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'relations' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' selected';
}
unset( $if_cond );
// if ends

$text .= '">
        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tabs_disabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tabs_disabled'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <span class="disabled" title="Tab is disabled, enable with toggler to the left of these tabs.">';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_objects_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_objects_count'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'reverse_related_objects_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['reverse_related_objects_count'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var3 = $var4 + $var5;
unset( $var4, $var5 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%count' => $var3 );unset( $var3 );
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
$var = strtr( 'Relations (%count)', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</span>
        ';
}
else
{
$text .= '            <a href=';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_url_alias', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_url_alias'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = ( $var2 . '/(tab)/relations' );
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
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

$text .= ' title="Show object relation overview.">';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_objects_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_objects_count'] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
unset( $var5 );
unset( $var5 );
$var5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'reverse_related_objects_count', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['reverse_related_objects_count'] : null;
if (! isset( $var5 ) ) $var5 = NULL;
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
while ( is_object( $var5 ) and method_exists( $var5, 'templateValue' ) )
    $var5 = $var5->templateValue();
$var3 = $var4 + $var5;
unset( $var4, $var5 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%count' => $var3 );unset( $var3 );
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
$var = strtr( 'Relations (%count)', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</a>
        ';
}
unset( $if_cond );
// if ends

$text .= '    </li>

    
    <li id="node-tab-ordering" class="last';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_tab_index', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_tab_index'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'ordering' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' selected';
}
unset( $if_cond );
// if ends

$text .= '">
        ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tabs_disabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tabs_disabled'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <span class="disabled" title="Tab is disabled, enable with toggler to the left of these tabs.">Ordering</span>
        ';
}
else
{
$text .= '            <a href=';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_url_alias', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_url_alias'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = ( $var2 . '/(tab)/ordering' );
unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
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

$text .= ' title="Show published ordering overview.">Ordering</a>
        ';
}
unset( $if_cond );
// if ends

$text .= '    </li>
</ul>
<div class="float-break"></div>
';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tabs_disabled', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tabs_disabled'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<div class="tabs-content disabled"></div>';
}
else
{
$text .= '<div class="tabs-content">
    ';
$oldRestoreIncludeArray_5dab6fe78d3ec942466c72b4f4f5ec68 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

if ( isset( $dKeys["navigation_part_identifier"] ) and ( is_array( $dKeys["navigation_part_identifier"] ) ? in_array( "ezusernavigationpart", $dKeys["navigation_part_identifier"] ) : $dKeys["navigation_part_identifier"] == "ezusernavigationpart" ) )
{
$resourceFound = false;
if ( file_exists( 'var/ezflow_site/cache/template/compiled/windows_user-2af8617c23d3aab78f2dec4f6b3b8870.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/override/templates/windows_user.tpl' );
include( '' . 'var/ezflow_site/cache/template/compiled/windows_user-2af8617c23d3aab78f2dec4f6b3b8870.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/admin2/override/templates/windows_user.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
else
{
$resourceFound = false;
if ( file_exists( 'var/ezflow_site/cache/template/compiled/windows-f799332ddddd7e2bb68a8bdbf4edbbba.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/windows.tpl' );
include( '' . 'var/ezflow_site/cache/template/compiled/windows-f799332ddddd7e2bb68a8bdbf4edbbba.php' );
$tpl->unsetLocalVariables();
$tpl->destroyLocalVariablesList();
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}
else
{
    $resourceFound = true;
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$textElements = array();
$extraParameters = array();
$tpl->processURI( 'design/admin2/templates/windows.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
}

}
foreach ( $restoreIncludeArray as $element )
{
    if ( $element[2] === 'unset' )
    {
        unset( $vars[$element[0]][$element[1]] );
        continue;
    }
    $vars[$element[0]][$element[1]] = $element[2];
}
$restoreIncludeArray = $oldRestoreIncludeArray_5dab6fe78d3ec942466c72b4f4f5ec68;

$text .= '</div>';
}
unset( $if_cond );
// if ends

$text .= '
';
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezscript_require',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'node_tabs.js',
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

// undef all
$tpl->unsetLocalVariables();

$setArray = $oldSetArray_01850ac33794e28e07232e3428470e76;
$tpl->Level--;
?>
