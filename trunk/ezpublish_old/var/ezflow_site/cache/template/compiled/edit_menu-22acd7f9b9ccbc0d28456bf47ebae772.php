<?php
// URI:       design/admin2/templates/content/edit_menu.tpl
// Filename:  design/admin2/templates/content/edit_menu.tpl
// Timestamp: 1285696600 (Tue Sep 28 10:56:40 MST 2010)
$oldSetArray_8c7fda4504bb4bffdabdced9c7a2fa9c = isset( $setArray ) ? $setArray : array();
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

$oldRestoreIncludeArray_7075fd5d6bc2800d8e048f5719fba7f2 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['object'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'object', $vars[$currentNamespace]['object'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['object'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'object', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['object'] = $var;
unset( $var );
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['manage_version_button'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'manage_version_button', $vars[$currentNamespace]['manage_version_button'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['manage_version_button'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'manage_version_button', 'unset' );

$vars[$currentNamespace]['manage_version_button'] = true;
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezflow_site/cache/template/compiled/object_information-bcb32ef64f89aebd271e3fc1d5caed88.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/content/parts/object_information.tpl' );
include( '' . 'var/ezflow_site/cache/template/compiled/object_information-bcb32ef64f89aebd271e3fc1d5caed88.php' );
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
$tpl->processURI( 'design/admin2/templates/content/parts/object_information.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_7075fd5d6bc2800d8e048f5719fba7f2;

$text .= '
<div class="drafts">

<div class="box-header">

<h4>Current draft</h4>

</div>

<div class="box-content">


<p>
<label>Created:</label>
';
unset( $var );
// l10nTransformation begin
//include_once("lib/ezlocale/classes/ezlocale.php");
$locale = eZLocale::instance();
// l10nTransformation: static
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_version', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_version'] : null;
$var2 = compiledFetchAttribute( $var1, 'created' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

$var = $locale->formatShortDateTime( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '<br />
';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_version', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_version'] : null;
$var2 = compiledFetchAttribute( $var1, 'creator' );
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

$text .= '
</p>


<p>
<label>Modified:</label>
';
unset( $var );
// l10nTransformation begin
//include_once("lib/ezlocale/classes/ezlocale.php");
$locale = eZLocale::instance();
// l10nTransformation: static
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_version', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_version'] : null;
$var2 = compiledFetchAttribute( $var1, 'modified' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();

$var = $locale->formatShortDateTime( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '<br />
';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_version', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_version'] : null;
$var2 = compiledFetchAttribute( $var1, 'creator' );
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

$text .= '
</p>


<p>
<label>Version:</label>
';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'edit_version', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['edit_version'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
</p>

<div class="block">
<input class="button" type="submit" name="PreviewButton" value="Preview" title="View the draft that is being edited." />
</div>

</div>
</div>

<!-- Translation box start-->
<div class="translations">

<div class="box-header">

<h4>Existing translations</h4>

</div>

<div class="box-content">
<p>Base translation on:</p>
<label>
<input type="radio" name="FromLanguage" value=""';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'from_language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['from_language'] : null;
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
$text .= ' checked="checked"';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'status' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 0 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' disabled="disabled"';
}
unset( $if_cond );
// if ends

$text .= ' /> None
</label>
';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'status' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_a684379d52f7a2d28e7e340349e2c909_1 ) ) $fe_variable_stack_a684379d52f7a2d28e7e340349e2c909_1 = array();
$fe_variable_stack_a684379d52f7a2d28e7e340349e2c909_1[] = compact( 'fe_array_a684379d52f7a2d28e7e340349e2c909_1', 'fe_array_keys_a684379d52f7a2d28e7e340349e2c909_1', 'fe_n_items_a684379d52f7a2d28e7e340349e2c909_1', 'fe_n_items_processed_a684379d52f7a2d28e7e340349e2c909_1', 'fe_i_a684379d52f7a2d28e7e340349e2c909_1', 'fe_key_a684379d52f7a2d28e7e340349e2c909_1', 'fe_val_a684379d52f7a2d28e7e340349e2c909_1', 'fe_offset_a684379d52f7a2d28e7e340349e2c909_1', 'fe_max_a684379d52f7a2d28e7e340349e2c909_1', 'fe_reverse_a684379d52f7a2d28e7e340349e2c909_1', 'fe_first_val_a684379d52f7a2d28e7e340349e2c909_1', 'fe_last_val_a684379d52f7a2d28e7e340349e2c909_1' );
unset( $fe_array_a684379d52f7a2d28e7e340349e2c909_1 );
unset( $fe_array_a684379d52f7a2d28e7e340349e2c909_1 );
$fe_array_a684379d52f7a2d28e7e340349e2c909_1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$fe_array_a684379d52f7a2d28e7e340349e2c909_11 = compiledFetchAttribute( $fe_array_a684379d52f7a2d28e7e340349e2c909_1, 'languages' );
unset( $fe_array_a684379d52f7a2d28e7e340349e2c909_1 );
$fe_array_a684379d52f7a2d28e7e340349e2c909_1 = $fe_array_a684379d52f7a2d28e7e340349e2c909_11;
if (! isset( $fe_array_a684379d52f7a2d28e7e340349e2c909_1 ) ) $fe_array_a684379d52f7a2d28e7e340349e2c909_1 = NULL;
while ( is_object( $fe_array_a684379d52f7a2d28e7e340349e2c909_1 ) and method_exists( $fe_array_a684379d52f7a2d28e7e340349e2c909_1, 'templateValue' ) )
    $fe_array_a684379d52f7a2d28e7e340349e2c909_1 = $fe_array_a684379d52f7a2d28e7e340349e2c909_1->templateValue();

$fe_array_keys_a684379d52f7a2d28e7e340349e2c909_1 = is_array( $fe_array_a684379d52f7a2d28e7e340349e2c909_1 ) ? array_keys( $fe_array_a684379d52f7a2d28e7e340349e2c909_1 ) : array();
$fe_n_items_a684379d52f7a2d28e7e340349e2c909_1 = count( $fe_array_keys_a684379d52f7a2d28e7e340349e2c909_1 );
$fe_n_items_processed_a684379d52f7a2d28e7e340349e2c909_1 = 0;
$fe_offset_a684379d52f7a2d28e7e340349e2c909_1 = 0;
$fe_max_a684379d52f7a2d28e7e340349e2c909_1 = $fe_n_items_a684379d52f7a2d28e7e340349e2c909_1 - $fe_offset_a684379d52f7a2d28e7e340349e2c909_1;
$fe_reverse_a684379d52f7a2d28e7e340349e2c909_1 = false;
if ( $fe_offset_a684379d52f7a2d28e7e340349e2c909_1 < 0 || $fe_offset_a684379d52f7a2d28e7e340349e2c909_1 >= $fe_n_items_a684379d52f7a2d28e7e340349e2c909_1 )
{
    $fe_offset_a684379d52f7a2d28e7e340349e2c909_1 = ( $fe_offset_a684379d52f7a2d28e7e340349e2c909_1 < 0 ) ? 0 : $fe_n_items_a684379d52f7a2d28e7e340349e2c909_1;
    if ( $fe_n_items_a684379d52f7a2d28e7e340349e2c909_1 || $fe_offset_a684379d52f7a2d28e7e340349e2c909_1 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_a684379d52f7a2d28e7e340349e2c909_1'. Array count: $fe_n_items_a684379d52f7a2d28e7e340349e2c909_1");   
}
}
if ( $fe_max_a684379d52f7a2d28e7e340349e2c909_1 < 0 || $fe_offset_a684379d52f7a2d28e7e340349e2c909_1 + $fe_max_a684379d52f7a2d28e7e340349e2c909_1 > $fe_n_items_a684379d52f7a2d28e7e340349e2c909_1 )
{
    if ( $fe_max_a684379d52f7a2d28e7e340349e2c909_1 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_a684379d52f7a2d28e7e340349e2c909_1");
    $fe_max_a684379d52f7a2d28e7e340349e2c909_1 = $fe_n_items_a684379d52f7a2d28e7e340349e2c909_1 - $fe_offset_a684379d52f7a2d28e7e340349e2c909_1;
}
if ( $fe_reverse_a684379d52f7a2d28e7e340349e2c909_1 )
{
    $fe_first_val_a684379d52f7a2d28e7e340349e2c909_1 = $fe_n_items_a684379d52f7a2d28e7e340349e2c909_1 - 1 - $fe_offset_a684379d52f7a2d28e7e340349e2c909_1;
    $fe_last_val_a684379d52f7a2d28e7e340349e2c909_1  = 0;
}
else
{
    $fe_first_val_a684379d52f7a2d28e7e340349e2c909_1 = $fe_offset_a684379d52f7a2d28e7e340349e2c909_1;
    $fe_last_val_a684379d52f7a2d28e7e340349e2c909_1  = $fe_n_items_a684379d52f7a2d28e7e340349e2c909_1 - 1;
}
// foreach
for ( $fe_i_a684379d52f7a2d28e7e340349e2c909_1 = $fe_first_val_a684379d52f7a2d28e7e340349e2c909_1; $fe_n_items_processed_a684379d52f7a2d28e7e340349e2c909_1 < $fe_max_a684379d52f7a2d28e7e340349e2c909_1 && ( $fe_reverse_a684379d52f7a2d28e7e340349e2c909_1 ? $fe_i_a684379d52f7a2d28e7e340349e2c909_1 >= $fe_last_val_a684379d52f7a2d28e7e340349e2c909_1 : $fe_i_a684379d52f7a2d28e7e340349e2c909_1 <= $fe_last_val_a684379d52f7a2d28e7e340349e2c909_1 ); $fe_reverse_a684379d52f7a2d28e7e340349e2c909_1 ? $fe_i_a684379d52f7a2d28e7e340349e2c909_1-- : $fe_i_a684379d52f7a2d28e7e340349e2c909_1++ )
{
$fe_key_a684379d52f7a2d28e7e340349e2c909_1 = $fe_array_keys_a684379d52f7a2d28e7e340349e2c909_1[$fe_i_a684379d52f7a2d28e7e340349e2c909_1];
$fe_val_a684379d52f7a2d28e7e340349e2c909_1 = $fe_array_a684379d52f7a2d28e7e340349e2c909_1[$fe_key_a684379d52f7a2d28e7e340349e2c909_1];
$vars[$rootNamespace]['language'] = $fe_val_a684379d52f7a2d28e7e340349e2c909_1;
$text .= '	';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'locale' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'current_language_object' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'locale' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond1 = ( ( $if_cond2 ) == ( $if_cond3 ) );
unset( $if_cond2, $if_cond3 );
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
$text .= ' 
	<label>
	<input type="radio" name="FromLanguage" value="';
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
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'locale' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'from_language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['from_language'] : null;
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
$text .= ' checked="checked"';
}
unset( $if_cond );
// if ends

$text .= ' />
	<img src="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['language'] : null;
$var1 = compiledFetchAttribute( $var, 'locale' );
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

$text .= '" alt="';
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

$text .= '" style="vertical-align: middle;" />
	';
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

$text .= '
	</label>
	';
}
unset( $if_cond );
// if ends

$fe_n_items_processed_a684379d52f7a2d28e7e340349e2c909_1++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_a684379d52f7a2d28e7e340349e2c909_1 ) ) extract( array_pop( $fe_variable_stack_a684379d52f7a2d28e7e340349e2c909_1 ) );

else
{

unset( $fe_array_a684379d52f7a2d28e7e340349e2c909_1 );

unset( $fe_array_keys_a684379d52f7a2d28e7e340349e2c909_1 );

unset( $fe_n_items_a684379d52f7a2d28e7e340349e2c909_1 );

unset( $fe_n_items_processed_a684379d52f7a2d28e7e340349e2c909_1 );

unset( $fe_i_a684379d52f7a2d28e7e340349e2c909_1 );

unset( $fe_key_a684379d52f7a2d28e7e340349e2c909_1 );

unset( $fe_val_a684379d52f7a2d28e7e340349e2c909_1 );

unset( $fe_offset_a684379d52f7a2d28e7e340349e2c909_1 );

unset( $fe_max_a684379d52f7a2d28e7e340349e2c909_1 );

unset( $fe_reverse_a684379d52f7a2d28e7e340349e2c909_1 );

unset( $fe_first_val_a684379d52f7a2d28e7e340349e2c909_1 );

unset( $fe_last_val_a684379d52f7a2d28e7e340349e2c909_1 );

unset( $fe_variable_stack_a684379d52f7a2d28e7e340349e2c909_1 );

}

// foreach ends
}
unset( $if_cond );
// if ends

$text .= '
<div class="block">
<input ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['object'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'status' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 0 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= 'class="button-disabled" disabled="disabled"';
}
else
{
$text .= ' class="button"';
}
unset( $if_cond );
// if ends

$text .= ' type="submit" name="FromLanguageButton" value="View" title="Edit the current object showing the selected language as a reference." />
</div>

</div>
</div>

<!-- Translation box end-->


<div class="sections">';
$oldRestoreIncludeArray_5cf8cefbd7ac0a664563cf9b8a447310 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezflow_site/cache/template/compiled/edit_sections-1a6e17bd0013abb7a2e156fc77492c0b.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/content/parts/edit_sections.tpl' );
include( '' . 'var/ezflow_site/cache/template/compiled/edit_sections-1a6e17bd0013abb7a2e156fc77492c0b.php' );
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
$tpl->processURI( 'design/admin2/templates/content/parts/edit_sections.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_5cf8cefbd7ac0a664563cf9b8a447310;

$text .= '</div>



<div class="states">';
$oldRestoreIncludeArray_a1d6bcbbceb7810c83661b461b43148b = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezflow_site/cache/template/compiled/edit_states-31b567c065b8bc7b7e813b92774da102.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/content/parts/edit_states.tpl' );
include( '' . 'var/ezflow_site/cache/template/compiled/edit_states-31b567c065b8bc7b7e813b92774da102.php' );
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
$tpl->processURI( 'design/admin2/templates/content/parts/edit_states.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_a1d6bcbbceb7810c83661b461b43148b;

$text .= '</div>

';

$setArray = $oldSetArray_8c7fda4504bb4bffdabdced9c7a2fa9c;
$tpl->Level--;
?>
