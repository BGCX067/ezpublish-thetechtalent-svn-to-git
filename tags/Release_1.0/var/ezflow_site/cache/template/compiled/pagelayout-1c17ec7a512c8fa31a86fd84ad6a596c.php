<?php
// URI:       design:pagelayout.tpl
// Filename:  design/admin2/templates/pagelayout.tpl
// Timestamp: 1285696608 (Tue Sep 28 10:56:48 MST 2010)
$oldSetArray_bb3627da2639e5a1420345035740f4cd = isset( $setArray ) ? $setArray : array();
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

$text .= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'site', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['site'] : null;
$var2 = compiledFetchAttribute( $var1, 'http_equiv' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'Content-language' );
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

$text .= '" lang="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'site', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['site'] : null;
$var2 = compiledFetchAttribute( $var1, 'http_equiv' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'Content-language' );
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

$text .= '">
<head>

';
// def $ui_context_edit
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = ( ( $var1 ) == ( 'edit' ) );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'ui_context_edit', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'ui_context_edit' is already defined.", array (
  0 => 
  array (
    0 => 6,
    1 => 0,
    2 => 346,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 1101,
  ),
  2 => 'design/admin2/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'ui_context_edit', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'ui_context_edit', $var, $rootNamespace );
}

// def $content_edit
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context_edit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context_edit'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_component', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_component'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = ( ( $var3 ) == ( 'content' ) );
unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( !$var1 )
    $var = false;
else if ( !$var2 )
    $var = false;
else
    $var = $var2;
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'content_edit', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'content_edit' is already defined.", array (
  0 => 
  array (
    0 => 6,
    1 => 0,
    2 => 346,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 1101,
  ),
  2 => 'design/admin2/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'content_edit', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'content_edit', $var, $rootNamespace );
}

// def $hide_left_menu
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "module_result", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["module_result"] : null;
$var3 = compiledFetchAttribute( $var2, "content_info" );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, "persistent_variable" );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, "left_menu" );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

if ( isset( $var2 ) )
{
    $var1 = $var2;
}
else
{
    unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "content_edit", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["content_edit"] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = !( $var4 );
unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

    if ( isset( $var3 ) )
    {
        $var1 = $var3;
    }
}
unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = !( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'hide_left_menu', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'hide_left_menu' is already defined.", array (
  0 => 
  array (
    0 => 6,
    1 => 0,
    2 => 346,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 1101,
  ),
  2 => 'design/admin2/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'hide_left_menu', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'hide_left_menu', $var, $rootNamespace );
}

// def $hide_right_menu
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "module_result", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["module_result"] : null;
$var3 = compiledFetchAttribute( $var2, "content_info" );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, "persistent_variable" );
unset( $var2 );
$var2 = $var3;
$var3 = compiledFetchAttribute( $var2, "extra_menu" );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();

if ( isset( $var2 ) )
{
    $var1 = $var2;
}
else
{
    unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "ui_context_edit", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["ui_context_edit"] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = !( $var4 );
unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();

    if ( isset( $var3 ) )
    {
        $var1 = $var3;
    }
}
unset( $var2, $var3 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = !( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'hide_right_menu', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'hide_right_menu' is already defined.", array (
  0 => 
  array (
    0 => 6,
    1 => 0,
    2 => 346,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 1101,
  ),
  2 => 'design/admin2/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'hide_right_menu', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'hide_right_menu', $var, $rootNamespace );
}

// def $collapse_right_menu
unset( $var );
unset( $var1 );
//include_once( 'kernel/classes/ezpreferences.php' );
$var1 = eZPreferences::value( "admin_right_menu_show" );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = !( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'collapse_right_menu', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'collapse_right_menu' is already defined.", array (
  0 => 
  array (
    0 => 6,
    1 => 0,
    2 => 346,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 1101,
  ),
  2 => 'design/admin2/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'collapse_right_menu', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'collapse_right_menu', $var, $rootNamespace );
}

// def $admin_left_size
unset( $var );
//include_once( 'kernel/classes/ezpreferences.php' );
$var = eZPreferences::value( "admin_left_menu_size" );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'admin_left_size', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'admin_left_size' is already defined.", array (
  0 => 
  array (
    0 => 6,
    1 => 0,
    2 => 346,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 1101,
  ),
  2 => 'design/admin2/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'admin_left_size', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'admin_left_size', $var, $rootNamespace );
}

// def $admin_theme
unset( $var );
//include_once( 'kernel/classes/ezpreferences.php' );
$var = eZPreferences::value( "admin_theme" );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'admin_theme', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'admin_theme' is already defined.", array (
  0 => 
  array (
    0 => 6,
    1 => 0,
    2 => 346,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 1101,
  ),
  2 => 'design/admin2/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'admin_theme', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'admin_theme', $var, $rootNamespace );
}

// def $left_size_hash
if ( $tpl->hasVariable( 'left_size_hash', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'left_size_hash' is already defined.", array (
  0 => 
  array (
    0 => 6,
    1 => 0,
    2 => 346,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 1101,
  ),
  2 => 'design/admin2/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'left_size_hash', 0, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'left_size_hash', 0, $rootNamespace );
}

// def $user_hash
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$var3 = compiledFetchAttribute( $var2, 'role_id_list' );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = implode( ",", $var2 );unset( $var2 );
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var3 );
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$var5 = compiledFetchAttribute( $var4, 'limited_assignment_value_list' );
unset( $var4 );
$var4 = $var5;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = implode( ",", $var4 );unset( $var4 );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var = ( $var1 . ',' . $var3 );
unset( $var1, $var3 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'user_hash', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'user_hash' is already defined.", array (
  0 => 
  array (
    0 => 6,
    1 => 0,
    2 => 346,
  ),
  1 => 
  array (
    0 => 15,
    1 => 0,
    2 => 1101,
  ),
  2 => 'design/admin2/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'user_hash', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'user_hash', $var, $rootNamespace );
}

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hide_right_menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hide_right_menu'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'collapse_right_menu', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['collapse_right_menu'] = false;
}
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context_edit', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context_edit'] : null;
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
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'collapse_right_menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['collapse_right_menu'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'admin_left_size', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['admin_left_size'] : null;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
if ( $if_cond3 )
    $if_cond2 = $if_cond3;
else if ( $if_cond4 )
    $if_cond2 = $if_cond4;
else
    $if_cond2 = false;
unset( $if_cond3, $if_cond4 );
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
$text .= '<style type="text/css">';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'collapse_right_menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['collapse_right_menu'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    div#page div#rightmenu  { width: 18px; }    div#page div#maincolumn { margin-right: 17px; }';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'admin_left_size', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['admin_left_size'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
// def $left_menu_widths
if ( $tpl->hasVariable( 'left_menu_widths', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'left_menu_widths' is already defined.", array (
  0 => 
  array (
    0 => 28,
    1 => 4,
    2 => 1460,
  ),
  1 => 
  array (
    0 => 28,
    1 => 79,
    2 => 1535,
  ),
  2 => 'design/admin2/templates/pagelayout.tpl',
) );
    $tpl->setVariable( 'left_menu_widths', array (
  'small' => '13',
  'medium' => '19',
  'large' => '25',
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'left_menu_widths', array (
  'small' => '13',
  'medium' => '19',
  'large' => '25',
), $rootNamespace );
}

$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'left_menu_widths', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['left_menu_widths'] : null;
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'admin_left_size', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['admin_left_size'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = compiledFetchAttribute( $if_cond1, $if_cond3 );
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
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'left_menu_widths', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['left_menu_widths'] : null;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'admin_left_size', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['admin_left_size'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = compiledFetchAttribute( $var, $var2 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'left_size_hash', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['left_size_hash'] = $var;
    unset( $var );
}
$text .= '        div#leftmenu   { width: ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'left_size_hash', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['left_size_hash'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = (int)$var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= 'em; }        div#maincontent { margin-left: ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'left_size_hash', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['left_size_hash'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = (int)$var1;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= 'em; }    ';
}
else
{
$text .= '        div#page div#leftmenu   { width: ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'admin_left_size', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['admin_left_size'] : null;
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

$text .= '; }        div#page div#maincontent { margin-left: ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'admin_left_size', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['admin_left_size'] : null;
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

$text .= '; }    ';
}
unset( $if_cond );
// if ends

$text .= '    ';
// undef $left_menu_widths
$tpl->unsetLocalVariable( 'left_menu_widths', $rootNamespace );

}
unset( $if_cond );
// if ends

$text .= '</style>';
}
unset( $if_cond );
// if ends

$text .= '
';
unset( $cacheKeys );
unset( $cacheKeys1 );
unset( $cacheKeys1 );
$cacheKeys1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$cacheKeys2 = compiledFetchAttribute( $cacheKeys1, 'uri' );
unset( $cacheKeys1 );
$cacheKeys1 = $cacheKeys2;
if (! isset( $cacheKeys1 ) ) $cacheKeys1 = NULL;
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
unset( $cacheKeys2 );
unset( $cacheKeys2 );
$cacheKeys2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user_hash', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user_hash'] : null;
if (! isset( $cacheKeys2 ) ) $cacheKeys2 = NULL;
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
unset( $cacheKeys3 );
unset( $cacheKeys3 );
$cacheKeys3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'admin_theme', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['admin_theme'] : null;
if (! isset( $cacheKeys3 ) ) $cacheKeys3 = NULL;
while ( is_object( $cacheKeys3 ) and method_exists( $cacheKeys3, 'templateValue' ) )
    $cacheKeys3 = $cacheKeys3->templateValue();
while ( is_object( $cacheKeys3 ) and method_exists( $cacheKeys3, 'templateValue' ) )
    $cacheKeys3 = $cacheKeys3->templateValue();
unset( $cacheKeys4 );
unset( $cacheKeys4 );
$cacheKeys4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'access_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['access_type'] : null;
if (! isset( $cacheKeys4 ) ) $cacheKeys4 = NULL;
while ( is_object( $cacheKeys4 ) and method_exists( $cacheKeys4, 'templateValue' ) )
    $cacheKeys4 = $cacheKeys4->templateValue();
while ( is_object( $cacheKeys4 ) and method_exists( $cacheKeys4, 'templateValue' ) )
    $cacheKeys4 = $cacheKeys4->templateValue();
unset( $cacheKeys5 );
unset( $cacheKeys6 );
unset( $cacheKeys6 );
$cacheKeys6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "module_result", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["module_result"] : null;
$cacheKeys7 = compiledFetchAttribute( $cacheKeys6, "navigation_part" );
unset( $cacheKeys6 );
$cacheKeys6 = $cacheKeys7;
if (! isset( $cacheKeys6 ) ) $cacheKeys6 = NULL;
while ( is_object( $cacheKeys6 ) and method_exists( $cacheKeys6, 'templateValue' ) )
    $cacheKeys6 = $cacheKeys6->templateValue();
while ( is_object( $cacheKeys6 ) and method_exists( $cacheKeys6, 'templateValue' ) )
    $cacheKeys6 = $cacheKeys6->templateValue();

if ( isset( $cacheKeys6 ) )
{
    $cacheKeys5 = $cacheKeys6;
}
else
{
    unset( $cacheKeys7 );
unset( $cacheKeys7 );
$cacheKeys7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "navigation_part", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["navigation_part"] : null;
$cacheKeys8 = compiledFetchAttribute( $cacheKeys7, "identifier" );
unset( $cacheKeys7 );
$cacheKeys7 = $cacheKeys8;
if (! isset( $cacheKeys7 ) ) $cacheKeys7 = NULL;
while ( is_object( $cacheKeys7 ) and method_exists( $cacheKeys7, 'templateValue' ) )
    $cacheKeys7 = $cacheKeys7->templateValue();
while ( is_object( $cacheKeys7 ) and method_exists( $cacheKeys7, 'templateValue' ) )
    $cacheKeys7 = $cacheKeys7->templateValue();

    if ( isset( $cacheKeys7 ) )
    {
        $cacheKeys5 = $cacheKeys7;
    }
}
unset( $cacheKeys6, $cacheKeys7 );
if (! isset( $cacheKeys5 ) ) $cacheKeys5 = NULL;
while ( is_object( $cacheKeys5 ) and method_exists( $cacheKeys5, 'templateValue' ) )
    $cacheKeys5 = $cacheKeys5->templateValue();
$cacheKeys = array( $cacheKeys1, $cacheKeys2, $cacheKeys3, $cacheKeys4, $cacheKeys5 );unset( $cacheKeys1, $cacheKeys2, $cacheKeys3, $cacheKeys4, $cacheKeys5 );
if (! isset( $cacheKeys ) ) $cacheKeys = NULL;
while ( is_object( $cacheKeys ) and method_exists( $cacheKeys, 'templateValue' ) )
    $cacheKeys = $cacheKeys->templateValue();

$subtreeExpiry = NULL;
//include_once( 'lib/eztemplate/classes/eztemplatecacheblock.php' );
$cacheKeys = array( $cacheKeys, "44_0_44_180_design/admin2/templates/pagelayout.tpl", "ezflow_site_clean_admin" );

list($cacheHandler_14fbc53fd1fdecd50fd2de9aa8783fd3, $contentData) =
  eZTemplateCacheBlock::retrieve( $cacheKeys, $subtreeExpiry, 7200, false );
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
$oldRestoreIncludeArray_67a26c843df7b031e5a7f7c8e08953ec = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezflow_site/cache/template/compiled/page_head-911a189646ab461dda211691c4a55282.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezjscore/design/admin/templates/page_head.tpl' );
include( '' . 'var/ezflow_site/cache/template/compiled/page_head-911a189646ab461dda211691c4a55282.php' );
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
$tpl->processURI( 'extension/ezjscore/design/admin/templates/page_head.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
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
$restoreIncludeArray = $oldRestoreIncludeArray_67a26c843df7b031e5a7f7c8e08953ec;

$oldRestoreIncludeArray_5203138c60bd723f5aba7aa48c91c1d6 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezflow_site/cache/template/compiled/page_head_style-dbddb3ffa9a55a5f966a7769df33a667.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/page_head_style.tpl' );
include( '' . 'var/ezflow_site/cache/template/compiled/page_head_style-dbddb3ffa9a55a5f966a7769df33a667.php' );
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
$tpl->processURI( 'design/admin2/templates/page_head_style.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
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
$restoreIncludeArray = $oldRestoreIncludeArray_5203138c60bd723f5aba7aa48c91c1d6;

$oldRestoreIncludeArray_74cca08647019fe00f462f2ad7db3130 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezflow_site/cache/template/compiled/page_head_script-010474f8caceff2d9d8d0e2273f9c1a0.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/page_head_script.tpl' );
include( '' . 'var/ezflow_site/cache/template/compiled/page_head_script-010474f8caceff2d9d8d0e2273f9c1a0.php' );
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
$tpl->processURI( 'design/admin2/templates/page_head_script.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
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
$restoreIncludeArray = $oldRestoreIncludeArray_74cca08647019fe00f462f2ad7db3130;

$text .= '
';
unset( $cacheKeys );
unset( $cacheKeys1 );
unset( $cacheKeys1 );
$cacheKeys1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context'] : null;
if (! isset( $cacheKeys1 ) ) $cacheKeys1 = NULL;
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
unset( $cacheKeys2 );
unset( $cacheKeys2 );
$cacheKeys2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_component', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_component'] : null;
if (! isset( $cacheKeys2 ) ) $cacheKeys2 = NULL;
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
unset( $cacheKeys3 );
unset( $cacheKeys3 );
$cacheKeys3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user_hash', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user_hash'] : null;
if (! isset( $cacheKeys3 ) ) $cacheKeys3 = NULL;
while ( is_object( $cacheKeys3 ) and method_exists( $cacheKeys3, 'templateValue' ) )
    $cacheKeys3 = $cacheKeys3->templateValue();
while ( is_object( $cacheKeys3 ) and method_exists( $cacheKeys3, 'templateValue' ) )
    $cacheKeys3 = $cacheKeys3->templateValue();
unset( $cacheKeys4 );
unset( $cacheKeys4 );
$cacheKeys4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'access_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['access_type'] : null;
if (! isset( $cacheKeys4 ) ) $cacheKeys4 = NULL;
while ( is_object( $cacheKeys4 ) and method_exists( $cacheKeys4, 'templateValue' ) )
    $cacheKeys4 = $cacheKeys4->templateValue();
while ( is_object( $cacheKeys4 ) and method_exists( $cacheKeys4, 'templateValue' ) )
    $cacheKeys4 = $cacheKeys4->templateValue();
unset( $cacheKeys5 );
unset( $cacheKeys6 );
unset( $cacheKeys6 );
$cacheKeys6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "module_result", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["module_result"] : null;
$cacheKeys7 = compiledFetchAttribute( $cacheKeys6, "navigation_part" );
unset( $cacheKeys6 );
$cacheKeys6 = $cacheKeys7;
if (! isset( $cacheKeys6 ) ) $cacheKeys6 = NULL;
while ( is_object( $cacheKeys6 ) and method_exists( $cacheKeys6, 'templateValue' ) )
    $cacheKeys6 = $cacheKeys6->templateValue();
while ( is_object( $cacheKeys6 ) and method_exists( $cacheKeys6, 'templateValue' ) )
    $cacheKeys6 = $cacheKeys6->templateValue();

if ( isset( $cacheKeys6 ) )
{
    $cacheKeys5 = $cacheKeys6;
}
else
{
    unset( $cacheKeys7 );
unset( $cacheKeys7 );
$cacheKeys7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "navigation_part", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["navigation_part"] : null;
$cacheKeys8 = compiledFetchAttribute( $cacheKeys7, "identifier" );
unset( $cacheKeys7 );
$cacheKeys7 = $cacheKeys8;
if (! isset( $cacheKeys7 ) ) $cacheKeys7 = NULL;
while ( is_object( $cacheKeys7 ) and method_exists( $cacheKeys7, 'templateValue' ) )
    $cacheKeys7 = $cacheKeys7->templateValue();
while ( is_object( $cacheKeys7 ) and method_exists( $cacheKeys7, 'templateValue' ) )
    $cacheKeys7 = $cacheKeys7->templateValue();

    if ( isset( $cacheKeys7 ) )
    {
        $cacheKeys5 = $cacheKeys7;
    }
}
unset( $cacheKeys6, $cacheKeys7 );
if (! isset( $cacheKeys5 ) ) $cacheKeys5 = NULL;
while ( is_object( $cacheKeys5 ) and method_exists( $cacheKeys5, 'templateValue' ) )
    $cacheKeys5 = $cacheKeys5->templateValue();
$cacheKeys = array( $cacheKeys1, $cacheKeys2, $cacheKeys3, $cacheKeys4, $cacheKeys5 );unset( $cacheKeys1, $cacheKeys2, $cacheKeys3, $cacheKeys4, $cacheKeys5 );
if (! isset( $cacheKeys ) ) $cacheKeys = NULL;
while ( is_object( $cacheKeys ) and method_exists( $cacheKeys, 'templateValue' ) )
    $cacheKeys = $cacheKeys->templateValue();

$subtreeExpiry = NULL;
//include_once( 'lib/eztemplate/classes/eztemplatecacheblock.php' );
$cacheKeys = array( $cacheKeys, "52_0_52_174_design/admin2/templates/pagelayout.tpl", "ezflow_site_clean_admin" );

list($cacheHandler_07a6012475d125426ea02b41f772d1b7, $contentData) =
  eZTemplateCacheBlock::retrieve( $cacheKeys, $subtreeExpiry, 7200, false );
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
$text .= '
</head>
<body>

<div id="page" class="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'navigation_part', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['navigation_part'] : null;
$var1 = compiledFetchAttribute( $var, 'identifier' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= ' section_id_';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "module_result", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["module_result"] : null;
$var2 = compiledFetchAttribute( $var1, "section_id" );
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
    $var = 0;
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '">

<div id="header">
<div id="header-design" class="float-break">

    
    ';
$oldRestoreIncludeArray_cf5f5c6b827fc2a5613f078c9229ee6a = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezflow_site/cache/template/compiled/page_header-55a590aecb463729e64a6b51ab647c78.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/page_header.tpl' );
include( '' . 'var/ezflow_site/cache/template/compiled/page_header-55a590aecb463729e64a6b51ab647c78.php' );
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
$tpl->processURI( 'design/admin2/templates/page_header.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
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
$restoreIncludeArray = $oldRestoreIncludeArray_cf5f5c6b827fc2a5613f078c9229ee6a;

$text .= '
    
    ';
$oldRestoreIncludeArray_c70a5820606397973f7174ba83c7dcb1 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezflow_site/cache/template/compiled/page_topmenu-452bb0f51a0707b79833d088b8f29af9.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/page_topmenu.tpl' );
include( '' . 'var/ezflow_site/cache/template/compiled/page_topmenu-452bb0f51a0707b79833d088b8f29af9.php' );
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
$tpl->processURI( 'design/admin2/templates/page_topmenu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
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
$restoreIncludeArray = $oldRestoreIncludeArray_c70a5820606397973f7174ba83c7dcb1;

$text .= '
</div>
</div>';
$cachedText = $text;
$cacheHandler_07a6012475d125426ea02b41f772d1b7->storeCache( array( 'scope' => 'template-block', 'binarydata' => $cachedText ) );

$text = array_pop( $textStack );
$text .= $cachedText;
    unset( $cachedText, $cacheHandler_07a6012475d125426ea02b41f772d1b7 );
}

$text .= '

<hr class="hide" />';
$cachedText = $text;
$cacheHandler_14fbc53fd1fdecd50fd2de9aa8783fd3->storeCache( array( 'scope' => 'template-block', 'binarydata' => $cachedText ) );

$text = array_pop( $textStack );
$text .= $cachedText;
    unset( $cachedText, $cacheHandler_14fbc53fd1fdecd50fd2de9aa8783fd3 );
}

$text .= '

<div id="columns"';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hide_right_menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hide_right_menu'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' class="hide-rightmenu"';
}
unset( $if_cond );
// if ends

$text .= '>


<div id="rightmenu">';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hide_right_menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hide_right_menu'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'collapse_right_menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['collapse_right_menu'] : null;
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
$text .= '    <a id="rightmenu-showhide" class="show-hide-control" title="Show / Hide rightmenu" href="/user/preferences/set/admin_right_menu_show/1">&laquo;</a>
    <div id="rightmenu-design"></div>';
}
else
{
$text .= '    <a id="rightmenu-showhide" class="show-hide-control" title="Hide / Show rightmenu" href="/user/preferences/set/admin_right_menu_show/0">&raquo;</a>
    <div id="rightmenu-design">
        ';
$oldRestoreIncludeArray_acef70b334d4283d1c08f42dfc238613 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

$vars[$currentNamespace]['tool_id'] = 'Tool_admin_right_admin_current_user_1';
$vars[$currentNamespace]['offset'] = 1;
$vars[$currentNamespace]['first'] = true;
$vars[$currentNamespace]['last'] = false;
$vars[$currentNamespace]['placement'] = 'first';
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezflow_site/cache/template/compiled/admin_current_user-dd5a7ea220fe47bf999c0a456bb1266d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/toolbar/full/admin_current_user.tpl' );
include( '' . 'var/ezflow_site/cache/template/compiled/admin_current_user-dd5a7ea220fe47bf999c0a456bb1266d.php' );
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
$tpl->processURI( 'design/admin2/templates/toolbar/full/admin_current_user.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
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
$restoreIncludeArray = $oldRestoreIncludeArray_acef70b334d4283d1c08f42dfc238613;

$oldRestoreIncludeArray_3905c0e139ba297194de346b392a277f = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

$vars[$currentNamespace]['tool_id'] = 'Tool_admin_right_admin_preferences_2';
$vars[$currentNamespace]['offset'] = 2;
$vars[$currentNamespace]['first'] = false;
$vars[$currentNamespace]['last'] = false;
$vars[$currentNamespace]['placement'] = '';
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezflow_site/cache/template/compiled/admin_preferences-85f5c85014f84ad610e0c0ee6d160fd9.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/toolbar/full/admin_preferences.tpl' );
include( '' . 'var/ezflow_site/cache/template/compiled/admin_preferences-85f5c85014f84ad610e0c0ee6d160fd9.php' );
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
$tpl->processURI( 'design/admin2/templates/toolbar/full/admin_preferences.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
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
$restoreIncludeArray = $oldRestoreIncludeArray_3905c0e139ba297194de346b392a277f;

$oldRestoreIncludeArray_a40a4c03cc7da8e567e5584871b9e231 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

$vars[$currentNamespace]['tool_id'] = 'Tool_admin_right_admin_bookmarks_3';
$vars[$currentNamespace]['offset'] = 3;
$vars[$currentNamespace]['first'] = false;
$vars[$currentNamespace]['last'] = true;
$vars[$currentNamespace]['placement'] = 'last';
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezflow_site/cache/template/compiled/admin_bookmarks-3af2ba1402f4a46eac9c87ab9c925f1d.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/toolbar/full/admin_bookmarks.tpl' );
include( '' . 'var/ezflow_site/cache/template/compiled/admin_bookmarks-3af2ba1402f4a46eac9c87ab9c925f1d.php' );
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
$tpl->processURI( 'design/admin2/templates/toolbar/full/admin_bookmarks.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
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
$restoreIncludeArray = $oldRestoreIncludeArray_a40a4c03cc7da8e567e5584871b9e231;

$text .= '        ';
$oldRestoreIncludeArray_e2502db246093758cf3afbba6da97fa9 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

$vars[$currentNamespace]['tool_id'] = 'Tool_admin_developer_admin_clear_cache_1';
$vars[$currentNamespace]['offset'] = 1;
$vars[$currentNamespace]['first'] = true;
$vars[$currentNamespace]['last'] = false;
$vars[$currentNamespace]['placement'] = 'first';
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezflow_site/cache/template/compiled/admin_clear_cache-7e97f1ce88f068669be3fd6527dd8d45.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/toolbar/full/admin_clear_cache.tpl' );
include( '' . 'var/ezflow_site/cache/template/compiled/admin_clear_cache-7e97f1ce88f068669be3fd6527dd8d45.php' );
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
$tpl->processURI( 'design/admin2/templates/toolbar/full/admin_clear_cache.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
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
$restoreIncludeArray = $oldRestoreIncludeArray_e2502db246093758cf3afbba6da97fa9;

$oldRestoreIncludeArray_d3abbd1310e6575af12554a4a6d01848 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

$vars[$currentNamespace]['tool_id'] = 'Tool_admin_developer_admin_quick_settings_2';
$vars[$currentNamespace]['offset'] = 2;
$vars[$currentNamespace]['first'] = false;
$vars[$currentNamespace]['last'] = true;
$vars[$currentNamespace]['placement'] = 'last';
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezflow_site/cache/template/compiled/admin_quick_settings-95cc3e331998e3505053753948c922ff.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/toolbar/full/admin_quick_settings.tpl' );
include( '' . 'var/ezflow_site/cache/template/compiled/admin_quick_settings-95cc3e331998e3505053753948c922ff.php' );
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
$tpl->processURI( 'design/admin2/templates/toolbar/full/admin_quick_settings.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
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
$restoreIncludeArray = $oldRestoreIncludeArray_d3abbd1310e6575af12554a4a6d01848;

$text .= '    </div>
    <!-- script type="text/javascript" src="/design/admin2/javascript/rightmenu_widthcontrol.js" charset="utf-8"></script -->
    <script type="text/javascript">
        rightMenuWidthControl();
    </script>';
}
unset( $if_cond );
// if ends

$text .= '</div>


<div id="maincolumn">

';
unset( $cacheKeys );
unset( $cacheKeys1 );
unset( $cacheKeys1 );
$cacheKeys1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'module_result', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['module_result'] : null;
$cacheKeys2 = compiledFetchAttribute( $cacheKeys1, 'uri' );
unset( $cacheKeys1 );
$cacheKeys1 = $cacheKeys2;
if (! isset( $cacheKeys1 ) ) $cacheKeys1 = NULL;
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
unset( $cacheKeys2 );
unset( $cacheKeys2 );
$cacheKeys2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'user_hash', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['user_hash'] : null;
if (! isset( $cacheKeys2 ) ) $cacheKeys2 = NULL;
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
while ( is_object( $cacheKeys2 ) and method_exists( $cacheKeys2, 'templateValue' ) )
    $cacheKeys2 = $cacheKeys2->templateValue();
unset( $cacheKeys3 );
unset( $cacheKeys3 );
$cacheKeys3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'left_size_hash', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['left_size_hash'] : null;
if (! isset( $cacheKeys3 ) ) $cacheKeys3 = NULL;
while ( is_object( $cacheKeys3 ) and method_exists( $cacheKeys3, 'templateValue' ) )
    $cacheKeys3 = $cacheKeys3->templateValue();
while ( is_object( $cacheKeys3 ) and method_exists( $cacheKeys3, 'templateValue' ) )
    $cacheKeys3 = $cacheKeys3->templateValue();
unset( $cacheKeys4 );
unset( $cacheKeys4 );
$cacheKeys4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'access_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['access_type'] : null;
if (! isset( $cacheKeys4 ) ) $cacheKeys4 = NULL;
while ( is_object( $cacheKeys4 ) and method_exists( $cacheKeys4, 'templateValue' ) )
    $cacheKeys4 = $cacheKeys4->templateValue();
while ( is_object( $cacheKeys4 ) and method_exists( $cacheKeys4, 'templateValue' ) )
    $cacheKeys4 = $cacheKeys4->templateValue();
unset( $cacheKeys5 );
unset( $cacheKeys6 );
unset( $cacheKeys6 );
$cacheKeys6 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "module_result", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["module_result"] : null;
$cacheKeys7 = compiledFetchAttribute( $cacheKeys6, "navigation_part" );
unset( $cacheKeys6 );
$cacheKeys6 = $cacheKeys7;
if (! isset( $cacheKeys6 ) ) $cacheKeys6 = NULL;
while ( is_object( $cacheKeys6 ) and method_exists( $cacheKeys6, 'templateValue' ) )
    $cacheKeys6 = $cacheKeys6->templateValue();
while ( is_object( $cacheKeys6 ) and method_exists( $cacheKeys6, 'templateValue' ) )
    $cacheKeys6 = $cacheKeys6->templateValue();

if ( isset( $cacheKeys6 ) )
{
    $cacheKeys5 = $cacheKeys6;
}
else
{
    unset( $cacheKeys7 );
unset( $cacheKeys7 );
$cacheKeys7 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "navigation_part", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["navigation_part"] : null;
$cacheKeys8 = compiledFetchAttribute( $cacheKeys7, "identifier" );
unset( $cacheKeys7 );
$cacheKeys7 = $cacheKeys8;
if (! isset( $cacheKeys7 ) ) $cacheKeys7 = NULL;
while ( is_object( $cacheKeys7 ) and method_exists( $cacheKeys7, 'templateValue' ) )
    $cacheKeys7 = $cacheKeys7->templateValue();
while ( is_object( $cacheKeys7 ) and method_exists( $cacheKeys7, 'templateValue' ) )
    $cacheKeys7 = $cacheKeys7->templateValue();

    if ( isset( $cacheKeys7 ) )
    {
        $cacheKeys5 = $cacheKeys7;
    }
}
unset( $cacheKeys6, $cacheKeys7 );
if (! isset( $cacheKeys5 ) ) $cacheKeys5 = NULL;
while ( is_object( $cacheKeys5 ) and method_exists( $cacheKeys5, 'templateValue' ) )
    $cacheKeys5 = $cacheKeys5->templateValue();
$cacheKeys = array( $cacheKeys1, $cacheKeys2, $cacheKeys3, $cacheKeys4, $cacheKeys5 );unset( $cacheKeys1, $cacheKeys2, $cacheKeys3, $cacheKeys4, $cacheKeys5 );
if (! isset( $cacheKeys ) ) $cacheKeys = NULL;
while ( is_object( $cacheKeys ) and method_exists( $cacheKeys, 'templateValue' ) )
    $cacheKeys = $cacheKeys->templateValue();

$subtreeExpiry = NULL;
//include_once( 'lib/eztemplate/classes/eztemplatecacheblock.php' );
$cacheKeys = array( $cacheKeys, "99_0_99_161_design/admin2/templates/pagelayout.tpl", "ezflow_site_clean_admin" );

list($cacheHandler_983484dfeaf262dc643d2cfd00b81d56, $contentData) =
  eZTemplateCacheBlock::retrieve( $cacheKeys, $subtreeExpiry, 7200, true );
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
$text .= '
<div id="path">
<div id="path-design">
    ';
$oldRestoreIncludeArray_6a147108de60ff0b8f1f5e428097053b = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezflow_site/cache/template/compiled/page_toppath-1bbbb81d9a3e34d8a68b8c9a43287ee8.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/page_toppath.tpl' );
include( '' . 'var/ezflow_site/cache/template/compiled/page_toppath-1bbbb81d9a3e34d8a68b8c9a43287ee8.php' );
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
$tpl->processURI( 'design/admin2/templates/page_toppath.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
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
$restoreIncludeArray = $oldRestoreIncludeArray_6a147108de60ff0b8f1f5e428097053b;

$text .= '</div>
</div>

<hr class="hide" />

';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hide_left_menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hide_left_menu'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
}
else
{
$text .= '    ';
$oldRestoreIncludeArray_abff13b35f9369719d1f62b79af945c7 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezflow_site/cache/template/compiled/page_leftmenu-7b11f2b76aec490cc0e5cdd51b397167.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/page_leftmenu.tpl' );
include( '' . 'var/ezflow_site/cache/template/compiled/page_leftmenu-7b11f2b76aec490cc0e5cdd51b397167.php' );
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
$tpl->processURI( 'design/admin2/templates/page_leftmenu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
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
$restoreIncludeArray = $oldRestoreIncludeArray_abff13b35f9369719d1f62b79af945c7;

}
unset( $if_cond );
// if ends

$cachedText = $text;
$cacheHandler_983484dfeaf262dc643d2cfd00b81d56->storeCache( array( 'scope' => 'template-block', 'binarydata' => $cachedText ) );

$text = array_pop( $textStack );
$text .= $cachedText;
    unset( $cachedText, $cacheHandler_983484dfeaf262dc643d2cfd00b81d56 );
}

$text .= '

';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'hide_left_menu', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['hide_left_menu'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
$oldRestoreIncludeArray_5df585a733ac962268d4ef428de9972f = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezflow_site/cache/template/compiled/page_mainarea-2ea52f72388c6dcfc6a26b48f98189bf.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/standard/templates/page_mainarea.tpl' );
include( '' . 'var/ezflow_site/cache/template/compiled/page_mainarea-2ea52f72388c6dcfc6a26b48f98189bf.php' );
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
$tpl->processURI( 'design/standard/templates/page_mainarea.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
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
$restoreIncludeArray = $oldRestoreIncludeArray_5df585a733ac962268d4ef428de9972f;

}
else
{
$text .= '    <div id="maincontent">
    <div id="maincontent-design" class="float-break"><div id="fix">
    <!-- Maincontent START -->
    ';
$oldRestoreIncludeArray_49456b8580677c89c99a9c76afb23894 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezflow_site/cache/template/compiled/page_mainarea-2ea52f72388c6dcfc6a26b48f98189bf.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/standard/templates/page_mainarea.tpl' );
include( '' . 'var/ezflow_site/cache/template/compiled/page_mainarea-2ea52f72388c6dcfc6a26b48f98189bf.php' );
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
$tpl->processURI( 'design/standard/templates/page_mainarea.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
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
$restoreIncludeArray = $oldRestoreIncludeArray_49456b8580677c89c99a9c76afb23894;

$text .= '    <!-- Maincontent END -->
    </div>
    <div class="break"></div>
    </div></div>';
}
unset( $if_cond );
// if ends

$text .= '
</div>


<div class="break"></div>
</div><!-- div id="columns" -->

<hr class="hide" />

';
unset( $cacheKeys );
unset( $cacheKeys1 );
unset( $cacheKeys1 );
$cacheKeys1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'access_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['access_type'] : null;
if (! isset( $cacheKeys1 ) ) $cacheKeys1 = NULL;
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
while ( is_object( $cacheKeys1 ) and method_exists( $cacheKeys1, 'templateValue' ) )
    $cacheKeys1 = $cacheKeys1->templateValue();
$cacheKeys = array( $cacheKeys1 );unset( $cacheKeys1 );
if (! isset( $cacheKeys ) ) $cacheKeys = NULL;
while ( is_object( $cacheKeys ) and method_exists( $cacheKeys, 'templateValue' ) )
    $cacheKeys = $cacheKeys->templateValue();

$subtreeExpiry = NULL;
//include_once( 'lib/eztemplate/classes/eztemplatecacheblock.php' );
$cacheKeys = array( $cacheKeys, "140_0_140_60_design/admin2/templates/pagelayout.tpl", "ezflow_site_clean_admin" );

list($cacheHandler_479ae7d98e3fcc190ba6398a65dad590, $contentData) =
  eZTemplateCacheBlock::retrieve( $cacheKeys, $subtreeExpiry, 7200, false );
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
$text .= '<div id="footer" class="float-break">
<div id="footer-design">
    ';
$oldRestoreIncludeArray_45fe33bff0775bf7793a6079f1cc5ed5 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezflow_site/cache/template/compiled/page_copyright-c4babb69ee234b4123b43dac48c9b3fd.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/page_copyright.tpl' );
include( '' . 'var/ezflow_site/cache/template/compiled/page_copyright-c4babb69ee234b4123b43dac48c9b3fd.php' );
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
$tpl->processURI( 'design/admin2/templates/page_copyright.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
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
$restoreIncludeArray = $oldRestoreIncludeArray_45fe33bff0775bf7793a6079f1cc5ed5;

$text .= '</div>
</div>

<div class="break"></div>

';
$oldRestoreIncludeArray_c549a721633086d05bf4db727d02fc82 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezflow_site/cache/template/compiled/popup_menu-003b87775e19dea5f371752a9d5dd0c0.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/popupmenu/popup_menu.tpl' );
include( '' . 'var/ezflow_site/cache/template/compiled/popup_menu-003b87775e19dea5f371752a9d5dd0c0.php' );
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
$tpl->processURI( 'design/admin2/templates/popupmenu/popup_menu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );
list( $rootNamespace, $currentNamespace ) = array_pop( $namespaceStack );
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
$restoreIncludeArray = $oldRestoreIncludeArray_c549a721633086d05bf4db727d02fc82;

$cachedText = $text;
$cacheHandler_479ae7d98e3fcc190ba6398a65dad590->storeCache( array( 'scope' => 'template-block', 'binarydata' => $cachedText ) );

$text = array_pop( $textStack );
$text .= $cachedText;
    unset( $cachedText, $cacheHandler_479ae7d98e3fcc190ba6398a65dad590 );
}

$text .= '
<script type="text/javascript">
<!--

document.getElementById(\'header-usermenu-logout\').innerHTML += \'<span class="header-usermenu-name">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$var2 = compiledFetchAttribute( $var1, 'login' );
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

$text .= '<\\/span>\';


(function( $ )
{
    var searchtext = document.getElementById(\'searchtext\');
    if ( !searchtext || searchtext.disabled )
        return;

    jQuery( searchtext ).val( searchtext.title
    ).addClass(\'passive\'
    ).focus(function(){
        if ( this.value === this.title )
        {
            jQuery( this ).removeClass(\'passive\').val(\'\');
        }
    }).blur(function(){
        if ( this.value === \'\' )
        {
            jQuery( this ).addClass(\'passive\').val( this.title );
        }
    });
})( jQuery );


// -->
</script>


<!--DEBUG_REPORT-->
</div><!-- div id="page" -->

</body>
</html>
';

$setArray = $oldSetArray_bb3627da2639e5a1420345035740f4cd;
$tpl->Level--;
?>
