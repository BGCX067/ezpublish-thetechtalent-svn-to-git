<?php
// URI:       design:content/create_languages.tpl
// Filename:  design/admin2/templates/content/create_languages.tpl
// Timestamp: 1285696610 (Tue Sep 28 10:56:50 MST 2010)
$oldSetArray_2d572de25ee5e5a1cc77d7af2e05b526 = isset( $setArray ) ? $setArray : array();
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

// def $languages
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchPrioritizedLanguages' ),
  array(  ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'languages', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'languages' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 4,
    1 => 24,
    2 => 198,
  ),
  2 => 'design/admin2/templates/content/create_languages.tpl',
) );
    $tpl->setVariable( 'languages', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'languages', $var, $rootNamespace );
}

// def $classes
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_id'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'canInstantiateClassList' ),
  array(     'group_id' => 0,
    'parent_node' => $var1,
    'filter_type' => "include",
    'fetch_id' => false,
    'as_object' => true,
    'group_by_class_group' => false ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'classes', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'classes' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 4,
    1 => 24,
    2 => 198,
  ),
  2 => 'design/admin2/templates/content/create_languages.tpl',
) );
    $tpl->setVariable( 'classes', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'classes', $var, $rootNamespace );
}

// def $class
if ( $tpl->hasVariable( 'class', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'class' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 4,
    1 => 24,
    2 => 198,
  ),
  2 => 'design/admin2/templates/content/create_languages.tpl',
) );
    $tpl->setVariable( 'class', false, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'class', false, $rootNamespace );
}

// def $can_create
if ( $tpl->hasVariable( 'can_create', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'can_create' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 4,
    1 => 24,
    2 => 198,
  ),
  2 => 'design/admin2/templates/content/create_languages.tpl',
) );
    $tpl->setVariable( 'can_create', false, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'can_create', false, $rootNamespace );
}

// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_d3568aff4d7e02cf094f49d827e1e00c_1 ) ) $fe_variable_stack_d3568aff4d7e02cf094f49d827e1e00c_1 = array();
$fe_variable_stack_d3568aff4d7e02cf094f49d827e1e00c_1[] = compact( 'fe_array_d3568aff4d7e02cf094f49d827e1e00c_1', 'fe_array_keys_d3568aff4d7e02cf094f49d827e1e00c_1', 'fe_n_items_d3568aff4d7e02cf094f49d827e1e00c_1', 'fe_n_items_processed_d3568aff4d7e02cf094f49d827e1e00c_1', 'fe_i_d3568aff4d7e02cf094f49d827e1e00c_1', 'fe_key_d3568aff4d7e02cf094f49d827e1e00c_1', 'fe_val_d3568aff4d7e02cf094f49d827e1e00c_1', 'fe_offset_d3568aff4d7e02cf094f49d827e1e00c_1', 'fe_max_d3568aff4d7e02cf094f49d827e1e00c_1', 'fe_reverse_d3568aff4d7e02cf094f49d827e1e00c_1', 'fe_first_val_d3568aff4d7e02cf094f49d827e1e00c_1', 'fe_last_val_d3568aff4d7e02cf094f49d827e1e00c_1' );
unset( $fe_array_d3568aff4d7e02cf094f49d827e1e00c_1 );
unset( $fe_array_d3568aff4d7e02cf094f49d827e1e00c_1 );
$fe_array_d3568aff4d7e02cf094f49d827e1e00c_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'classes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['classes'] : null;
if (! isset( $fe_array_d3568aff4d7e02cf094f49d827e1e00c_1 ) ) $fe_array_d3568aff4d7e02cf094f49d827e1e00c_1 = NULL;
while ( is_object( $fe_array_d3568aff4d7e02cf094f49d827e1e00c_1 ) and method_exists( $fe_array_d3568aff4d7e02cf094f49d827e1e00c_1, 'templateValue' ) )
    $fe_array_d3568aff4d7e02cf094f49d827e1e00c_1 = $fe_array_d3568aff4d7e02cf094f49d827e1e00c_1->templateValue();

$fe_array_keys_d3568aff4d7e02cf094f49d827e1e00c_1 = is_array( $fe_array_d3568aff4d7e02cf094f49d827e1e00c_1 ) ? array_keys( $fe_array_d3568aff4d7e02cf094f49d827e1e00c_1 ) : array();
$fe_n_items_d3568aff4d7e02cf094f49d827e1e00c_1 = count( $fe_array_keys_d3568aff4d7e02cf094f49d827e1e00c_1 );
$fe_n_items_processed_d3568aff4d7e02cf094f49d827e1e00c_1 = 0;
$fe_offset_d3568aff4d7e02cf094f49d827e1e00c_1 = 0;
$fe_max_d3568aff4d7e02cf094f49d827e1e00c_1 = $fe_n_items_d3568aff4d7e02cf094f49d827e1e00c_1 - $fe_offset_d3568aff4d7e02cf094f49d827e1e00c_1;
$fe_reverse_d3568aff4d7e02cf094f49d827e1e00c_1 = false;
if ( $fe_offset_d3568aff4d7e02cf094f49d827e1e00c_1 < 0 || $fe_offset_d3568aff4d7e02cf094f49d827e1e00c_1 >= $fe_n_items_d3568aff4d7e02cf094f49d827e1e00c_1 )
{
    $fe_offset_d3568aff4d7e02cf094f49d827e1e00c_1 = ( $fe_offset_d3568aff4d7e02cf094f49d827e1e00c_1 < 0 ) ? 0 : $fe_n_items_d3568aff4d7e02cf094f49d827e1e00c_1;
    if ( $fe_n_items_d3568aff4d7e02cf094f49d827e1e00c_1 || $fe_offset_d3568aff4d7e02cf094f49d827e1e00c_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_d3568aff4d7e02cf094f49d827e1e00c_1'. Array count: $fe_n_items_d3568aff4d7e02cf094f49d827e1e00c_1");   
}
}
if ( $fe_max_d3568aff4d7e02cf094f49d827e1e00c_1 < 0 || $fe_offset_d3568aff4d7e02cf094f49d827e1e00c_1 + $fe_max_d3568aff4d7e02cf094f49d827e1e00c_1 > $fe_n_items_d3568aff4d7e02cf094f49d827e1e00c_1 )
{
    if ( $fe_max_d3568aff4d7e02cf094f49d827e1e00c_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_d3568aff4d7e02cf094f49d827e1e00c_1");
    $fe_max_d3568aff4d7e02cf094f49d827e1e00c_1 = $fe_n_items_d3568aff4d7e02cf094f49d827e1e00c_1 - $fe_offset_d3568aff4d7e02cf094f49d827e1e00c_1;
}
if ( $fe_reverse_d3568aff4d7e02cf094f49d827e1e00c_1 )
{
    $fe_first_val_d3568aff4d7e02cf094f49d827e1e00c_1 = $fe_n_items_d3568aff4d7e02cf094f49d827e1e00c_1 - 1 - $fe_offset_d3568aff4d7e02cf094f49d827e1e00c_1;
    $fe_last_val_d3568aff4d7e02cf094f49d827e1e00c_1  = 0;
}
else
{
    $fe_first_val_d3568aff4d7e02cf094f49d827e1e00c_1 = $fe_offset_d3568aff4d7e02cf094f49d827e1e00c_1;
    $fe_last_val_d3568aff4d7e02cf094f49d827e1e00c_1  = $fe_n_items_d3568aff4d7e02cf094f49d827e1e00c_1 - 1;
}
// foreach
for ( $fe_i_d3568aff4d7e02cf094f49d827e1e00c_1 = $fe_first_val_d3568aff4d7e02cf094f49d827e1e00c_1; $fe_n_items_processed_d3568aff4d7e02cf094f49d827e1e00c_1 < $fe_max_d3568aff4d7e02cf094f49d827e1e00c_1 && ( $fe_reverse_d3568aff4d7e02cf094f49d827e1e00c_1 ? $fe_i_d3568aff4d7e02cf094f49d827e1e00c_1 >= $fe_last_val_d3568aff4d7e02cf094f49d827e1e00c_1 : $fe_i_d3568aff4d7e02cf094f49d827e1e00c_1 <= $fe_last_val_d3568aff4d7e02cf094f49d827e1e00c_1 ); $fe_reverse_d3568aff4d7e02cf094f49d827e1e00c_1 ? $fe_i_d3568aff4d7e02cf094f49d827e1e00c_1-- : $fe_i_d3568aff4d7e02cf094f49d827e1e00c_1++ )
{
$fe_key_d3568aff4d7e02cf094f49d827e1e00c_1 = $fe_array_keys_d3568aff4d7e02cf094f49d827e1e00c_1[$fe_i_d3568aff4d7e02cf094f49d827e1e00c_1];
$fe_val_d3568aff4d7e02cf094f49d827e1e00c_1 = $fe_array_d3568aff4d7e02cf094f49d827e1e00c_1[$fe_key_d3568aff4d7e02cf094f49d827e1e00c_1];
$vars[$rootNamespace]['tmp_class'] = $fe_val_d3568aff4d7e02cf094f49d827e1e00c_1;
$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tmp_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tmp_class'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'id' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class_id'] : null;
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
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'tmp_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['tmp_class'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'class', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['class'] = $var;
    unset( $var );
}
$text .= '        ';
break;

$text .= '    ';
}
unset( $if_cond );
// if ends

$fe_n_items_processed_d3568aff4d7e02cf094f49d827e1e00c_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_d3568aff4d7e02cf094f49d827e1e00c_1 ) ) extract( array_pop( $fe_variable_stack_d3568aff4d7e02cf094f49d827e1e00c_1 ) );

else
{

unset( $fe_array_d3568aff4d7e02cf094f49d827e1e00c_1 );

unset( $fe_array_keys_d3568aff4d7e02cf094f49d827e1e00c_1 );

unset( $fe_n_items_d3568aff4d7e02cf094f49d827e1e00c_1 );

unset( $fe_n_items_processed_d3568aff4d7e02cf094f49d827e1e00c_1 );

unset( $fe_i_d3568aff4d7e02cf094f49d827e1e00c_1 );

unset( $fe_key_d3568aff4d7e02cf094f49d827e1e00c_1 );

unset( $fe_val_d3568aff4d7e02cf094f49d827e1e00c_1 );

unset( $fe_offset_d3568aff4d7e02cf094f49d827e1e00c_1 );

unset( $fe_max_d3568aff4d7e02cf094f49d827e1e00c_1 );

unset( $fe_reverse_d3568aff4d7e02cf094f49d827e1e00c_1 );

unset( $fe_first_val_d3568aff4d7e02cf094f49d827e1e00c_1 );

unset( $fe_last_val_d3568aff4d7e02cf094f49d827e1e00c_1 );

unset( $fe_variable_stack_d3568aff4d7e02cf094f49d827e1e00c_1 );

}

// foreach ends
$text .= '
<div id="leftmenu">
<div id="leftmenu-design">

<div class="objectinfo">

<div class="box-header"><div class="box-ml">

<h4>Object information</h4>

</div></div>

<div class="box-bc"><div class="box-ml"><div class="box-content">


<p>
<label>ID:</label>
0
</p>


<p>
<label>Created:</label>
Not yet published
</p>


<p>
<label>Modified:</label>
Not yet published
</p>


<p>
<label>Published version:</label>
Not yet published
</p>

</div></div></div>

</div>

</div>
</div>

<div id="maincontent">
<div id="maincontent-design" class="float-break"><div id="fix">
<!-- Maincontent START -->

<form name="CreateLanguages" action="/content/action" method="post">

<div class="context-block">

<div class="box-header"><div class="box-ml">

<h1 class="context-title">Language selection</h1>

<div class="header-mainline"></div>

</div></div>

<div class="box-ml"><div class="box-mr"><div class="box-content">

<div class="block">
';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = !( $if_cond2 );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'can_instantiate_languages' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = !( $if_cond3 );
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
if ( $if_cond1 )
    $if_cond = $if_cond1;
else if ( $if_cond2 )
    $if_cond = $if_cond2;
else
    $if_cond = false;
unset( $if_cond1, $if_cond2 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '
<p>You do not have permission to create an object of the requested class in any language.</p>
';
}
else
{
$text .= '
    ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'can_create', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['can_create'] = true;
}
$text .= '    ';
// def $language_codes
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class'] : null;
$var1 = compiledFetchAttribute( $var, 'can_instantiate_languages' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'language_codes', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'language_codes' is already defined.", array (
  0 => 
  array (
    0 => 84,
    1 => 4,
    2 => 2238,
  ),
  1 => 
  array (
    0 => 84,
    1 => 56,
    2 => 2290,
  ),
  2 => 'design/admin2/templates/content/create_languages.tpl',
) );
    $tpl->setVariable( 'language_codes', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'language_codes', $var, $rootNamespace );
}

$text .= '
    <p>Select the language in which you want to create the object:</p>

    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_d3568aff4d7e02cf094f49d827e1e00c_2 ) ) $fe_variable_stack_d3568aff4d7e02cf094f49d827e1e00c_2 = array();
$fe_variable_stack_d3568aff4d7e02cf094f49d827e1e00c_2[] = compact( 'fe_array_d3568aff4d7e02cf094f49d827e1e00c_2', 'fe_array_keys_d3568aff4d7e02cf094f49d827e1e00c_2', 'fe_n_items_d3568aff4d7e02cf094f49d827e1e00c_2', 'fe_n_items_processed_d3568aff4d7e02cf094f49d827e1e00c_2', 'fe_i_d3568aff4d7e02cf094f49d827e1e00c_2', 'fe_key_d3568aff4d7e02cf094f49d827e1e00c_2', 'fe_val_d3568aff4d7e02cf094f49d827e1e00c_2', 'fe_offset_d3568aff4d7e02cf094f49d827e1e00c_2', 'fe_max_d3568aff4d7e02cf094f49d827e1e00c_2', 'fe_reverse_d3568aff4d7e02cf094f49d827e1e00c_2', 'fe_first_val_d3568aff4d7e02cf094f49d827e1e00c_2', 'fe_last_val_d3568aff4d7e02cf094f49d827e1e00c_2' );
unset( $fe_array_d3568aff4d7e02cf094f49d827e1e00c_2 );
unset( $fe_array_d3568aff4d7e02cf094f49d827e1e00c_2 );
$fe_array_d3568aff4d7e02cf094f49d827e1e00c_2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'languages', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['languages'] : null;
if (! isset( $fe_array_d3568aff4d7e02cf094f49d827e1e00c_2 ) ) $fe_array_d3568aff4d7e02cf094f49d827e1e00c_2 = NULL;
while ( is_object( $fe_array_d3568aff4d7e02cf094f49d827e1e00c_2 ) and method_exists( $fe_array_d3568aff4d7e02cf094f49d827e1e00c_2, 'templateValue' ) )
    $fe_array_d3568aff4d7e02cf094f49d827e1e00c_2 = $fe_array_d3568aff4d7e02cf094f49d827e1e00c_2->templateValue();

$fe_array_keys_d3568aff4d7e02cf094f49d827e1e00c_2 = is_array( $fe_array_d3568aff4d7e02cf094f49d827e1e00c_2 ) ? array_keys( $fe_array_d3568aff4d7e02cf094f49d827e1e00c_2 ) : array();
$fe_n_items_d3568aff4d7e02cf094f49d827e1e00c_2 = count( $fe_array_keys_d3568aff4d7e02cf094f49d827e1e00c_2 );
$fe_n_items_processed_d3568aff4d7e02cf094f49d827e1e00c_2 = 0;
$fe_offset_d3568aff4d7e02cf094f49d827e1e00c_2 = 0;
$fe_max_d3568aff4d7e02cf094f49d827e1e00c_2 = $fe_n_items_d3568aff4d7e02cf094f49d827e1e00c_2 - $fe_offset_d3568aff4d7e02cf094f49d827e1e00c_2;
$fe_reverse_d3568aff4d7e02cf094f49d827e1e00c_2 = false;
if ( $fe_offset_d3568aff4d7e02cf094f49d827e1e00c_2 < 0 || $fe_offset_d3568aff4d7e02cf094f49d827e1e00c_2 >= $fe_n_items_d3568aff4d7e02cf094f49d827e1e00c_2 )
{
    $fe_offset_d3568aff4d7e02cf094f49d827e1e00c_2 = ( $fe_offset_d3568aff4d7e02cf094f49d827e1e00c_2 < 0 ) ? 0 : $fe_n_items_d3568aff4d7e02cf094f49d827e1e00c_2;
    if ( $fe_n_items_d3568aff4d7e02cf094f49d827e1e00c_2 || $fe_offset_d3568aff4d7e02cf094f49d827e1e00c_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_d3568aff4d7e02cf094f49d827e1e00c_2'. Array count: $fe_n_items_d3568aff4d7e02cf094f49d827e1e00c_2");   
}
}
if ( $fe_max_d3568aff4d7e02cf094f49d827e1e00c_2 < 0 || $fe_offset_d3568aff4d7e02cf094f49d827e1e00c_2 + $fe_max_d3568aff4d7e02cf094f49d827e1e00c_2 > $fe_n_items_d3568aff4d7e02cf094f49d827e1e00c_2 )
{
    if ( $fe_max_d3568aff4d7e02cf094f49d827e1e00c_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_d3568aff4d7e02cf094f49d827e1e00c_2");
    $fe_max_d3568aff4d7e02cf094f49d827e1e00c_2 = $fe_n_items_d3568aff4d7e02cf094f49d827e1e00c_2 - $fe_offset_d3568aff4d7e02cf094f49d827e1e00c_2;
}
if ( $fe_reverse_d3568aff4d7e02cf094f49d827e1e00c_2 )
{
    $fe_first_val_d3568aff4d7e02cf094f49d827e1e00c_2 = $fe_n_items_d3568aff4d7e02cf094f49d827e1e00c_2 - 1 - $fe_offset_d3568aff4d7e02cf094f49d827e1e00c_2;
    $fe_last_val_d3568aff4d7e02cf094f49d827e1e00c_2  = 0;
}
else
{
    $fe_first_val_d3568aff4d7e02cf094f49d827e1e00c_2 = $fe_offset_d3568aff4d7e02cf094f49d827e1e00c_2;
    $fe_last_val_d3568aff4d7e02cf094f49d827e1e00c_2  = $fe_n_items_d3568aff4d7e02cf094f49d827e1e00c_2 - 1;
}
// foreach
for ( $fe_i_d3568aff4d7e02cf094f49d827e1e00c_2 = $fe_first_val_d3568aff4d7e02cf094f49d827e1e00c_2; $fe_n_items_processed_d3568aff4d7e02cf094f49d827e1e00c_2 < $fe_max_d3568aff4d7e02cf094f49d827e1e00c_2 && ( $fe_reverse_d3568aff4d7e02cf094f49d827e1e00c_2 ? $fe_i_d3568aff4d7e02cf094f49d827e1e00c_2 >= $fe_last_val_d3568aff4d7e02cf094f49d827e1e00c_2 : $fe_i_d3568aff4d7e02cf094f49d827e1e00c_2 <= $fe_last_val_d3568aff4d7e02cf094f49d827e1e00c_2 ); $fe_reverse_d3568aff4d7e02cf094f49d827e1e00c_2 ? $fe_i_d3568aff4d7e02cf094f49d827e1e00c_2-- : $fe_i_d3568aff4d7e02cf094f49d827e1e00c_2++ )
{
$fe_key_d3568aff4d7e02cf094f49d827e1e00c_2 = $fe_array_keys_d3568aff4d7e02cf094f49d827e1e00c_2[$fe_i_d3568aff4d7e02cf094f49d827e1e00c_2];
$fe_val_d3568aff4d7e02cf094f49d827e1e00c_2 = $fe_array_d3568aff4d7e02cf094f49d827e1e00c_2[$fe_key_d3568aff4d7e02cf094f49d827e1e00c_2];
$vars[$rootNamespace]['language'] = $fe_val_d3568aff4d7e02cf094f49d827e1e00c_2;
$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language_codes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language_codes'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'locale' );
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
$text .= '            <label>
                <input name="ContentLanguageCode" type="radio" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language'] : null;
$var1 = compiledFetchAttribute( $var, 'locale' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '"';
if ( !isset( $GLOBALS['eZTemplateRunOnceKeys']["12fe77f234bd351ea31fdb73c7d4669a"] ) )
{
    $GLOBALS['eZTemplateRunOnceKeys']["12fe77f234bd351ea31fdb73c7d4669a"] = array( array( 91,
              87,
              2621 ),
       array( 91,
              95,
              2629 ),
       "design/admin2/templates/content/create_languages.tpl" );
$text .= ' checked="checked"';
}
$text .= ' /> ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language'] : null;
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

$text .= '
            </label>
            <div class="labelbreak"></div>
        ';
}
unset( $if_cond );
// if ends

$text .= '    ';
$fe_n_items_processed_d3568aff4d7e02cf094f49d827e1e00c_2++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_d3568aff4d7e02cf094f49d827e1e00c_2 ) ) extract( array_pop( $fe_variable_stack_d3568aff4d7e02cf094f49d827e1e00c_2 ) );

else
{

unset( $fe_array_d3568aff4d7e02cf094f49d827e1e00c_2 );

unset( $fe_array_keys_d3568aff4d7e02cf094f49d827e1e00c_2 );

unset( $fe_n_items_d3568aff4d7e02cf094f49d827e1e00c_2 );

unset( $fe_n_items_processed_d3568aff4d7e02cf094f49d827e1e00c_2 );

unset( $fe_i_d3568aff4d7e02cf094f49d827e1e00c_2 );

unset( $fe_key_d3568aff4d7e02cf094f49d827e1e00c_2 );

unset( $fe_val_d3568aff4d7e02cf094f49d827e1e00c_2 );

unset( $fe_offset_d3568aff4d7e02cf094f49d827e1e00c_2 );

unset( $fe_max_d3568aff4d7e02cf094f49d827e1e00c_2 );

unset( $fe_reverse_d3568aff4d7e02cf094f49d827e1e00c_2 );

unset( $fe_first_val_d3568aff4d7e02cf094f49d827e1e00c_2 );

unset( $fe_last_val_d3568aff4d7e02cf094f49d827e1e00c_2 );

unset( $fe_variable_stack_d3568aff4d7e02cf094f49d827e1e00c_2 );

}

// foreach ends
}
unset( $if_cond );
// if ends

$text .= '
<input type="hidden" name="NodeID" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_id'] : null;
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

$text .= '" />
<input type="hidden" name="ClassID" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'class_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['class_id'] : null;
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

$text .= '" />
';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assignment_remote_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assignment_remote_id'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <input type="hidden" name="AssignmentRemoteID" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'assignment_remote_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['assignment_remote_id'] : null;
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

$text .= '" />';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'redirect_uri_after_publish', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['redirect_uri_after_publish'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <input type="hidden" name="RedirectURIAfterPublish" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'redirect_uri_after_publish', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['redirect_uri_after_publish'] : null;
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

$text .= '" />';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'redirect_uri_after_discard', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['redirect_uri_after_discard'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <input type="hidden" name="RedirectIfDiscarded" value="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'redirect_uri_after_discard', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['redirect_uri_after_discard'] : null;
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

$text .= '" />';
}
unset( $if_cond );
// if ends

$text .= '
<input type="hidden" name="CancelURI" value="content/view/full/';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['node_id'] : null;
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

$text .= '" />

</div>

</div></div></div>

<div class="controlbar">

<div class="box-bc"><div class="box-ml">

<div class="block">
    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_create', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_create'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <input class="button" type="submit" name="NewButton" value="OK" />
        <input class="button" type="submit" name="CancelButton" value="Cancel" />
    ';
}
else
{
$text .= '        <input class="button" type="submit" name="CancelButton" value="OK" />
    ';
}
unset( $if_cond );
// if ends

$text .= '</div>

</div></div>

</div>

</div>

</form>

<!-- Maincontent END -->
</div>
<div class="break"></div>
</div></div>
';

$setArray = $oldSetArray_2d572de25ee5e5a1cc77d7af2e05b526;
$tpl->Level--;
?>
