<?php
// URI:       extension/ezwt/design/standard/templates/parts/website_toolbar.tpl
// Filename:  extension/ezwt/design/standard/templates/parts/website_toolbar.tpl
// Timestamp: 1295903512 (Mon Jan 24 14:11:52 MST 2011)
$oldSetArray_dbf72c34c7213fec3c0b49f747ae0910 = isset( $setArray ) ? $setArray : array();
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

// def $current_node
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node_id'] : null;
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
if ( $tpl->hasVariable( 'current_node', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'current_node' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 16,
    1 => 96,
    2 => 1386,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'current_node', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'current_node', $var, $rootNamespace );
}

// def $content_object
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node'] : null;
$var1 = compiledFetchAttribute( $var, 'object' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'content_object', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'content_object' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 16,
    1 => 96,
    2 => 1386,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'content_object', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'content_object', $var, $rootNamespace );
}

// def $can_edit_languages
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$var1 = compiledFetchAttribute( $var, 'can_edit_languages' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'can_edit_languages', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'can_edit_languages' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 16,
    1 => 96,
    2 => 1386,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'can_edit_languages', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'can_edit_languages', $var, $rootNamespace );
}

// def $can_manage_location
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'checkAccess' ),
  array(     'access' => "manage_locations",
    'contentobject' => $var1,
    'contentclass_id' => false,
    'parent_contentclass_id' => false,
    'language' => false ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'can_manage_location', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'can_manage_location' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 16,
    1 => 96,
    2 => 1386,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'can_manage_location', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'can_manage_location', $var, $rootNamespace );
}

// def $can_create_languages
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$var1 = compiledFetchAttribute( $var, 'can_create_languages' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'can_create_languages', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'can_create_languages' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 16,
    1 => 96,
    2 => 1386,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'can_create_languages', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'can_create_languages', $var, $rootNamespace );
}

// def $is_container
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$var1 = compiledFetchAttribute( $var, 'content_class' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'is_container' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'is_container', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'is_container' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 16,
    1 => 96,
    2 => 1386,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'is_container', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'is_container', $var, $rootNamespace );
}

// def $odf_display_classes
if ( $tpl->hasVariable( 'odf_display_classes', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'odf_display_classes' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 16,
    1 => 96,
    2 => 1386,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'odf_display_classes', array (
  0 => 'documentation_page',
  1 => 'blog',
  2 => 'blog_post',
  3 => 'folder',
  4 => 'article',
  5 => 'article_mainpage',
  6 => 'article_subpage',
  7 => 'event',
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'odf_display_classes', array (
  0 => 'documentation_page',
  1 => 'blog',
  2 => 'blog_post',
  3 => 'folder',
  4 => 'article',
  5 => 'article_mainpage',
  6 => 'article_subpage',
  7 => 'event',
), $rootNamespace );
}

// def $odf_hide_container_classes
if ( $tpl->hasVariable( 'odf_hide_container_classes', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'odf_hide_container_classes' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 16,
    1 => 96,
    2 => 1386,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'odf_hide_container_classes', array (
  0 => 'article',
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'odf_hide_container_classes', array (
  0 => 'article',
), $rootNamespace );
}

// def $website_toolbar_access
unset( $var );
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'hasAccessTo' ),
  array(     'module' => "websitetoolbar",
    'function' => "use",
    'user_id' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'website_toolbar_access', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'website_toolbar_access' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 16,
    1 => 96,
    2 => 1386,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'website_toolbar_access', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'website_toolbar_access', $var, $rootNamespace );
}

// def $odf_import_access
unset( $var );
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'hasAccessTo' ),
  array(     'module' => "ezodf",
    'function' => "import",
    'user_id' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'odf_import_access', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'odf_import_access' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 16,
    1 => 96,
    2 => 1386,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'odf_import_access', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'odf_import_access', $var, $rootNamespace );
}

// def $odf_export_access
unset( $var );
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'hasAccessTo' ),
  array(     'module' => "ezodf",
    'function' => "export",
    'user_id' => null ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'odf_export_access', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'odf_export_access' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 16,
    1 => 96,
    2 => 1386,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'odf_export_access', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'odf_export_access', $var, $rootNamespace );
}

// def $content_object_language_code
if ( $tpl->hasVariable( 'content_object_language_code', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'content_object_language_code' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 16,
    1 => 96,
    2 => 1386,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'content_object_language_code', '', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'content_object_language_code', '', $rootNamespace );
}

// def $policies
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_user', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_user'] : null;
$var2 = compiledFetchAttribute( $var1, 'contentobject_id' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
$var = call_user_func_array( array( new eZUserFunctionCollection(), 'fetchUserRole' ),
  array(     'user_id' => $var1 ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'policies', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'policies' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 16,
    1 => 96,
    2 => 1386,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'policies', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'policies', $var, $rootNamespace );
}

// def $available_for_current_class
if ( $tpl->hasVariable( 'available_for_current_class', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'available_for_current_class' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 16,
    1 => 96,
    2 => 1386,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'available_for_current_class', false, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'available_for_current_class', false, $rootNamespace );
}

// def $custom_templates
if ( $tpl->hasVariable( 'custom_templates', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'custom_templates' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 16,
    1 => 96,
    2 => 1386,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'custom_templates', array (
  0 => 'object_states',
  1 => 'link',
  2 => 'rss',
  3 => 'timeline',
  4 => 'push',
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'custom_templates', array (
  0 => 'object_states',
  1 => 'link',
  2 => 'rss',
  3 => 'timeline',
  4 => 'push',
), $rootNamespace );
}

// def $include_in_view
if ( $tpl->hasVariable( 'include_in_view', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'include_in_view' is already defined.", array (
  0 => 
  array (
    0 => 1,
    1 => 0,
    2 => 1,
  ),
  1 => 
  array (
    0 => 16,
    1 => 96,
    2 => 1386,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'include_in_view', array (
  'object_states' => 'full',
  'link' => 'full',
  'rss' => 'full',
  'timeline' => 'full',
  'push' => 'full',
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'include_in_view', array (
  'object_states' => 'full',
  'link' => 'full',
  'rss' => 'full',
  'timeline' => 'full',
  'push' => 'full',
), $rootNamespace );
}

$text .= '
     ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_9 ) ) $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_9 = array();
$fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_9[] = compact( 'fe_array_b038cefefab7a06fcb792cf731d0c8a8_9', 'fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_9', 'fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_9', 'fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_9', 'fe_i_b038cefefab7a06fcb792cf731d0c8a8_9', 'fe_key_b038cefefab7a06fcb792cf731d0c8a8_9', 'fe_val_b038cefefab7a06fcb792cf731d0c8a8_9', 'fe_offset_b038cefefab7a06fcb792cf731d0c8a8_9', 'fe_max_b038cefefab7a06fcb792cf731d0c8a8_9', 'fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_9', 'fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_9', 'fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_9' );
unset( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_9 );
unset( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_9 );
$fe_array_b038cefefab7a06fcb792cf731d0c8a8_9 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policies', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policies'] : null;
if (! isset( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_9 ) ) $fe_array_b038cefefab7a06fcb792cf731d0c8a8_9 = NULL;
while ( is_object( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_9 ) and method_exists( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_9, 'templateValue' ) )
    $fe_array_b038cefefab7a06fcb792cf731d0c8a8_9 = $fe_array_b038cefefab7a06fcb792cf731d0c8a8_9->templateValue();

$fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_9 = is_array( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_9 ) ? array_keys( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_9 ) : array();
$fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_9 = count( $fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_9 );
$fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_9 = 0;
$fe_offset_b038cefefab7a06fcb792cf731d0c8a8_9 = 0;
$fe_max_b038cefefab7a06fcb792cf731d0c8a8_9 = $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_9 - $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_9;
$fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_9 = false;
if ( $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_9 < 0 || $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_9 >= $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_9 )
{
    $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_9 = ( $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_9 < 0 ) ? 0 : $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_9;
    if ( $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_9 || $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_9 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_b038cefefab7a06fcb792cf731d0c8a8_9'. Array count: $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_9");   
}
}
if ( $fe_max_b038cefefab7a06fcb792cf731d0c8a8_9 < 0 || $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_9 + $fe_max_b038cefefab7a06fcb792cf731d0c8a8_9 > $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_9 )
{
    if ( $fe_max_b038cefefab7a06fcb792cf731d0c8a8_9 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_b038cefefab7a06fcb792cf731d0c8a8_9");
    $fe_max_b038cefefab7a06fcb792cf731d0c8a8_9 = $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_9 - $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_9;
}
if ( $fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_9 )
{
    $fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_9 = $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_9 - 1 - $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_9;
    $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_9  = 0;
}
else
{
    $fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_9 = $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_9;
    $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_9  = $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_9 - 1;
}
// foreach
for ( $fe_i_b038cefefab7a06fcb792cf731d0c8a8_9 = $fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_9; $fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_9 < $fe_max_b038cefefab7a06fcb792cf731d0c8a8_9 && ( $fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_9 ? $fe_i_b038cefefab7a06fcb792cf731d0c8a8_9 >= $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_9 : $fe_i_b038cefefab7a06fcb792cf731d0c8a8_9 <= $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_9 ); $fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_9 ? $fe_i_b038cefefab7a06fcb792cf731d0c8a8_9-- : $fe_i_b038cefefab7a06fcb792cf731d0c8a8_9++ )
{
$fe_key_b038cefefab7a06fcb792cf731d0c8a8_9 = $fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_9[$fe_i_b038cefefab7a06fcb792cf731d0c8a8_9];
$fe_val_b038cefefab7a06fcb792cf731d0c8a8_9 = $fe_array_b038cefefab7a06fcb792cf731d0c8a8_9[$fe_key_b038cefefab7a06fcb792cf731d0c8a8_9];
$vars[$rootNamespace]['policy'] = $fe_val_b038cefefab7a06fcb792cf731d0c8a8_9;
$text .= '        ';
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_77 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_771 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_772 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 = compiledFetchAttribute( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773, 'moduleName' );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774;
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773->templateValue();
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773->templateValue();
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_772 = ( ( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 ) == ( '*' ) );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 );
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_772 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_772 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_772 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_772, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_772 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_772->templateValue();
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 = compiledFetchAttribute( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774, 'functionName' );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775;
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774->templateValue();
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774->templateValue();
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 = ( ( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 ) == ( '*' ) );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 );
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773->templateValue();
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 = compiledFetchAttribute( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775, 'limitation' );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776;
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775->templateValue();
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775->templateValue();
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 = ( ( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 ) == ( '*' ) );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 );
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774->templateValue();
if ( !$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_772 )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_771 = false;
else if ( !$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_771 = false;
else if ( !$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_771 = false;
else
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_771 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774;
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_772, $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773, $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 );
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_771 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_771 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_771 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_771, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_771 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_771->templateValue();
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_772 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 = compiledFetchAttribute( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774, 'moduleName' );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775;
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774->templateValue();
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774->templateValue();
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 = ( ( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 ) == ( 'websitetoolbar' ) );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 );
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773->templateValue();
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 = compiledFetchAttribute( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775, 'functionName' );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776;
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775->templateValue();
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775->templateValue();
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 = ( ( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 ) == ( '*' ) );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 );
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774->templateValue();
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_777 = compiledFetchAttribute( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776, 'limitation' );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_777;
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776->templateValue();
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776->templateValue();
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 = ( ( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 ) == ( '*' ) );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 );
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775->templateValue();
if ( !$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_772 = false;
else if ( !$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_772 = false;
else if ( !$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_772 = false;
else
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_772 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775;
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773, $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774, $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 );
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_772 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_772 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_772 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_772, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_772 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_772->templateValue();
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 = compiledFetchAttribute( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775, 'moduleName' );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776;
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775->templateValue();
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775->templateValue();
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 = ( ( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 ) == ( 'websitetoolbar' ) );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 );
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774->templateValue();
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_777 = compiledFetchAttribute( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776, 'functionName' );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_777;
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776->templateValue();
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776->templateValue();
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 = ( ( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 ) == ( 'use' ) );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 );
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775->templateValue();
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_777 );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_777 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_777 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_778 = compiledFetchAttribute( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_777, 'limitation' );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_777 );
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_777 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_778;
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_777 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_777 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_777 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_777, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_777 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_777->templateValue();
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_777 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_777, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_777 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_777->templateValue();
$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 = ( ( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_777 ) == ( '*' ) );
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_777 );
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776->templateValue();
if ( !$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774 )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 = false;
else if ( !$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775 )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 = false;
else if ( !$elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 = false;
else
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776;
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_774, $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_775, $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_776 );
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773->templateValue();
if ( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_771 )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_77 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_771;
else if ( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_772 )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_77 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_772;
else if ( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_77 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773;
else
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_77 = false;
unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_771, $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_772, $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_773 );
if (! isset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_77 ) ) $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_77 = NULL;
while ( is_object( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_77 ) and method_exists( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_77, 'templateValue' ) )
    $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_77 = $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_77->templateValue();

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'moduleName' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = ( ( $if_cond2 ) == ( 'websitetoolbar' ) );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'functionName' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = ( ( $if_cond3 ) == ( 'use' ) );
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$if_cond5 = compiledFetchAttribute( $if_cond4, 'limitation' );
unset( $if_cond4 );
$if_cond4 = $if_cond5;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
$if_cond3 = is_array( $if_cond4 );unset( $if_cond4 );
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else if ( !$if_cond3 )
    $if_cond = false;
else
    $if_cond = $if_cond3;
unset( $if_cond1, $if_cond2, $if_cond3 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'limitation' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 0 );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'values_as_array' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'content_class' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
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
$text .= '                ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'available_for_current_class', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['available_for_current_class'] = true;
}
$text .= '            ';
}
unset( $if_cond );
// if ends

$text .= '        ';
}
elseif ( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_77 )
{
$text .= '            ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'available_for_current_class', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['available_for_current_class'] = true;
}
$text .= '        ';
}
unset( $if_cond );
// if ends

unset( $elseif_cond_b038cefefab7a06fcb792cf731d0c8a8_77 );

$text .= '     ';
$fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_9++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_9 ) ) extract( array_pop( $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_9 ) );

else
{

unset( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_9 );

unset( $fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_9 );

unset( $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_9 );

unset( $fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_9 );

unset( $fe_i_b038cefefab7a06fcb792cf731d0c8a8_9 );

unset( $fe_key_b038cefefab7a06fcb792cf731d0c8a8_9 );

unset( $fe_val_b038cefefab7a06fcb792cf731d0c8a8_9 );

unset( $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_9 );

unset( $fe_max_b038cefefab7a06fcb792cf731d0c8a8_9 );

unset( $fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_9 );

unset( $fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_9 );

unset( $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_9 );

unset( $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_9 );

}

// foreach ends
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'website_toolbar_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['website_toolbar_access'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'available_for_current_class', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['available_for_current_class'] : null;
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
$text .= '
<!-- eZ website toolbar: START -->

<div id="ezwt">
<div class="tl"><div class="tr"><div class="tc"></div></div></div>
<div class="mc"><div class="ml"><div class="mr float-break">

<!-- eZ website toolbar content: START -->
';
$oldRestoreIncludeArray_77c0032aa49206de6977ba52289b59a1 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezflow_site/cache/template/compiled/logo-cd9ac760eb14a126dbd53d69e4abb57f.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwt/design/standard/templates/parts/websitetoolbar/logo.tpl' );
include( '' . 'var/ezflow_site/cache/template/compiled/logo-cd9ac760eb14a126dbd53d69e4abb57f.php' );
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
$tpl->processURI( 'extension/ezwt/design/standard/templates/parts/websitetoolbar/logo.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_77c0032aa49206de6977ba52289b59a1;

$text .= '
<div id="ezwt-standardactions">

<form method="post" action="/content/action" class="left">';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'can_create' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'is_container', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['is_container'] : null;
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
$text .= '<label for="ezwt-create" class="hide">Create:</label>';
// def $can_create_class_list
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezcreateclasslistgroups',
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
        2 => 'content_object',
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
          1 => 'can_create_class_list',
          2 => false,
        ),
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
if ( $tpl->hasVariable( 'can_create_class_list', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'can_create_class_list' is already defined.", array (
  0 => 
  array (
    0 => 55,
    1 => 0,
    2 => 3000,
  ),
  1 => 
  array (
    0 => 55,
    1 => 93,
    2 => 3093,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'can_create_class_list', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'can_create_class_list', $var, $rootNamespace );
}

$text .= '  ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_create_class_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_create_class_list'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();
$if_condData = array( 'value' => $if_cond );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_condData, false, false );
$if_cond = $if_condData['value'];
unset( $if_condData );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '  <select name="ClassID" id="ezwt-create">
  ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_11 ) ) $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_11 = array();
$fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_11[] = compact( 'fe_array_b038cefefab7a06fcb792cf731d0c8a8_11', 'fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_11', 'fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_11', 'fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_11', 'fe_i_b038cefefab7a06fcb792cf731d0c8a8_11', 'fe_key_b038cefefab7a06fcb792cf731d0c8a8_11', 'fe_val_b038cefefab7a06fcb792cf731d0c8a8_11', 'fe_offset_b038cefefab7a06fcb792cf731d0c8a8_11', 'fe_max_b038cefefab7a06fcb792cf731d0c8a8_11', 'fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_11', 'fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_11', 'fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_11' );
unset( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_11 );
unset( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_11 );
$fe_array_b038cefefab7a06fcb792cf731d0c8a8_11 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_create_class_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_create_class_list'] : null;
if (! isset( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_11 ) ) $fe_array_b038cefefab7a06fcb792cf731d0c8a8_11 = NULL;
while ( is_object( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_11 ) and method_exists( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_11, 'templateValue' ) )
    $fe_array_b038cefefab7a06fcb792cf731d0c8a8_11 = $fe_array_b038cefefab7a06fcb792cf731d0c8a8_11->templateValue();

$fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_11 = is_array( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_11 ) ? array_keys( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_11 ) : array();
$fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_11 = count( $fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_11 );
$fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_11 = 0;
$fe_offset_b038cefefab7a06fcb792cf731d0c8a8_11 = 0;
$fe_max_b038cefefab7a06fcb792cf731d0c8a8_11 = $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_11 - $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_11;
$fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_11 = false;
if ( $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_11 < 0 || $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_11 >= $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_11 )
{
    $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_11 = ( $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_11 < 0 ) ? 0 : $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_11;
    if ( $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_11 || $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_11 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_b038cefefab7a06fcb792cf731d0c8a8_11'. Array count: $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_11");   
}
}
if ( $fe_max_b038cefefab7a06fcb792cf731d0c8a8_11 < 0 || $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_11 + $fe_max_b038cefefab7a06fcb792cf731d0c8a8_11 > $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_11 )
{
    if ( $fe_max_b038cefefab7a06fcb792cf731d0c8a8_11 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_b038cefefab7a06fcb792cf731d0c8a8_11");
    $fe_max_b038cefefab7a06fcb792cf731d0c8a8_11 = $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_11 - $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_11;
}
if ( $fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_11 )
{
    $fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_11 = $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_11 - 1 - $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_11;
    $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_11  = 0;
}
else
{
    $fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_11 = $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_11;
    $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_11  = $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_11 - 1;
}
// foreach
for ( $fe_i_b038cefefab7a06fcb792cf731d0c8a8_11 = $fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_11; $fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_11 < $fe_max_b038cefefab7a06fcb792cf731d0c8a8_11 && ( $fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_11 ? $fe_i_b038cefefab7a06fcb792cf731d0c8a8_11 >= $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_11 : $fe_i_b038cefefab7a06fcb792cf731d0c8a8_11 <= $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_11 ); $fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_11 ? $fe_i_b038cefefab7a06fcb792cf731d0c8a8_11-- : $fe_i_b038cefefab7a06fcb792cf731d0c8a8_11++ )
{
$fe_key_b038cefefab7a06fcb792cf731d0c8a8_11 = $fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_11[$fe_i_b038cefefab7a06fcb792cf731d0c8a8_11];
$fe_val_b038cefefab7a06fcb792cf731d0c8a8_11 = $fe_array_b038cefefab7a06fcb792cf731d0c8a8_11[$fe_key_b038cefefab7a06fcb792cf731d0c8a8_11];
$vars[$rootNamespace]['group'] = $fe_val_b038cefefab7a06fcb792cf731d0c8a8_11;
$text .= '    <optgroup label="';
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

$text .= '">
    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_10 ) ) $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_10 = array();
$fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_10[] = compact( 'fe_array_b038cefefab7a06fcb792cf731d0c8a8_10', 'fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_10', 'fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_10', 'fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_10', 'fe_i_b038cefefab7a06fcb792cf731d0c8a8_10', 'fe_key_b038cefefab7a06fcb792cf731d0c8a8_10', 'fe_val_b038cefefab7a06fcb792cf731d0c8a8_10', 'fe_offset_b038cefefab7a06fcb792cf731d0c8a8_10', 'fe_max_b038cefefab7a06fcb792cf731d0c8a8_10', 'fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_10', 'fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_10', 'fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_10' );
unset( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_10 );
unset( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_10 );
$fe_array_b038cefefab7a06fcb792cf731d0c8a8_10 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'group', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['group'] : null;
$fe_array_b038cefefab7a06fcb792cf731d0c8a8_101 = compiledFetchAttribute( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_10, 'items' );
unset( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_10 );
$fe_array_b038cefefab7a06fcb792cf731d0c8a8_10 = $fe_array_b038cefefab7a06fcb792cf731d0c8a8_101;
if (! isset( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_10 ) ) $fe_array_b038cefefab7a06fcb792cf731d0c8a8_10 = NULL;
while ( is_object( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_10 ) and method_exists( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_10, 'templateValue' ) )
    $fe_array_b038cefefab7a06fcb792cf731d0c8a8_10 = $fe_array_b038cefefab7a06fcb792cf731d0c8a8_10->templateValue();

$fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_10 = is_array( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_10 ) ? array_keys( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_10 ) : array();
$fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_10 = count( $fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_10 );
$fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_10 = 0;
$fe_offset_b038cefefab7a06fcb792cf731d0c8a8_10 = 0;
$fe_max_b038cefefab7a06fcb792cf731d0c8a8_10 = $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_10 - $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_10;
$fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_10 = false;
if ( $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_10 < 0 || $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_10 >= $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_10 )
{
    $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_10 = ( $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_10 < 0 ) ? 0 : $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_10;
    if ( $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_10 || $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_10 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_b038cefefab7a06fcb792cf731d0c8a8_10'. Array count: $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_10");   
}
}
if ( $fe_max_b038cefefab7a06fcb792cf731d0c8a8_10 < 0 || $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_10 + $fe_max_b038cefefab7a06fcb792cf731d0c8a8_10 > $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_10 )
{
    if ( $fe_max_b038cefefab7a06fcb792cf731d0c8a8_10 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_b038cefefab7a06fcb792cf731d0c8a8_10");
    $fe_max_b038cefefab7a06fcb792cf731d0c8a8_10 = $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_10 - $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_10;
}
if ( $fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_10 )
{
    $fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_10 = $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_10 - 1 - $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_10;
    $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_10  = 0;
}
else
{
    $fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_10 = $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_10;
    $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_10  = $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_10 - 1;
}
// foreach
for ( $fe_i_b038cefefab7a06fcb792cf731d0c8a8_10 = $fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_10; $fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_10 < $fe_max_b038cefefab7a06fcb792cf731d0c8a8_10 && ( $fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_10 ? $fe_i_b038cefefab7a06fcb792cf731d0c8a8_10 >= $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_10 : $fe_i_b038cefefab7a06fcb792cf731d0c8a8_10 <= $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_10 ); $fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_10 ? $fe_i_b038cefefab7a06fcb792cf731d0c8a8_10-- : $fe_i_b038cefefab7a06fcb792cf731d0c8a8_10++ )
{
$fe_key_b038cefefab7a06fcb792cf731d0c8a8_10 = $fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_10[$fe_i_b038cefefab7a06fcb792cf731d0c8a8_10];
$fe_val_b038cefefab7a06fcb792cf731d0c8a8_10 = $fe_array_b038cefefab7a06fcb792cf731d0c8a8_10[$fe_key_b038cefefab7a06fcb792cf731d0c8a8_10];
$vars[$rootNamespace]['class'] = $fe_val_b038cefefab7a06fcb792cf731d0c8a8_10;
$text .= '        <option value="';
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

$text .= '">';
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
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</option>
    ';
$fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_10++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_10 ) ) extract( array_pop( $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_10 ) );

else
{

unset( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_10 );

unset( $fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_10 );

unset( $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_10 );

unset( $fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_10 );

unset( $fe_i_b038cefefab7a06fcb792cf731d0c8a8_10 );

unset( $fe_key_b038cefefab7a06fcb792cf731d0c8a8_10 );

unset( $fe_val_b038cefefab7a06fcb792cf731d0c8a8_10 );

unset( $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_10 );

unset( $fe_max_b038cefefab7a06fcb792cf731d0c8a8_10 );

unset( $fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_10 );

unset( $fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_10 );

unset( $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_10 );

unset( $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_10 );

}

// foreach ends
$text .= '    </optgroup>
  ';
$fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_11++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_11 ) ) extract( array_pop( $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_11 ) );

else
{

unset( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_11 );

unset( $fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_11 );

unset( $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_11 );

unset( $fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_11 );

unset( $fe_i_b038cefefab7a06fcb792cf731d0c8a8_11 );

unset( $fe_key_b038cefefab7a06fcb792cf731d0c8a8_11 );

unset( $fe_val_b038cefefab7a06fcb792cf731d0c8a8_11 );

unset( $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_11 );

unset( $fe_max_b038cefefab7a06fcb792cf731d0c8a8_11 );

unset( $fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_11 );

unset( $fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_11 );

unset( $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_11 );

unset( $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_11 );

}

// foreach ends
$text .= '  </select>
  ';
}
unset( $if_cond );
// if ends

$text .= '  <input type="hidden" name="ContentLanguageCode" value="eng-US" />
  <input type="image" src="/extension/ezwt/design/standard/images/websitetoolbar/ezwt-icon-new.gif" name="NewButton" title="Create here" />';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'can_edit' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <input type="hidden" name="ContentObjectLanguageCode" value="eng-US" />
    <input type="image" src="/extension/ezwt/design/standard/images/websitetoolbar/ezwt-icon-edit.gif" name="EditButton" title="';
unset( $var );
$var = 'Edit: %node_name [%class_name]';
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'i18n',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'design/standard/parts/website_toolbar',
      2 => false,
    ),
  ),
  1 => 
  array (
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'hash',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '%node_name',
            2 => false,
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'current_node',
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
                1 => 'name',
                2 => false,
              ),
            ),
            2 => false,
          ),
          2 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'wash',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '%class_name',
            2 => false,
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'content_object',
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

$text .= '" />';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'can_move' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <input type="image" src="/extension/ezwt/design/standard/images/websitetoolbar/ezwt-icon-move.gif" name="MoveNodeButton" title="Move" />';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'can_remove' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <input type="image" src="/extension/ezwt/design/standard/images/websitetoolbar/ezwt-icon-remove.gif" name="ActionRemove" title="Remove" />';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_manage_location', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_manage_location'] : null;
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
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'can_manage_location', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['can_manage_location'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'node_id' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = ( ( $if_cond3 ) != ( '2' ) );
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node'] : null;
$if_cond5 = compiledFetchAttribute( $if_cond4, 'node_id' );
unset( $if_cond4 );
$if_cond4 = $if_cond5;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
$if_cond3 = ( ( $if_cond4 ) != ( '43' ) );
unset( $if_cond4 );
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
unset( $if_cond4 );
unset( $if_cond5 );
unset( $if_cond5 );
$if_cond5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node'] : null;
$if_cond6 = compiledFetchAttribute( $if_cond5, 'node_id' );
unset( $if_cond5 );
$if_cond5 = $if_cond6;
if (! isset( $if_cond5 ) ) $if_cond5 = NULL;
while ( is_object( $if_cond5 ) and method_exists( $if_cond5, 'templateValue' ) )
    $if_cond5 = $if_cond5->templateValue();
$if_cond4 = ( ( $if_cond5 ) != ( '5' ) );
unset( $if_cond5 );
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else if ( !$if_cond3 )
    $if_cond = false;
else if ( !$if_cond4 )
    $if_cond = false;
else
    $if_cond = $if_cond4;
unset( $if_cond1, $if_cond2, $if_cond3, $if_cond4 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <input type="image" src="/extension/ezwt/design/standard/images/websitetoolbar/ezwt-icon-locations.gif" name="AddAssignmentButton" title="Add locations" />
    ';
}
else
{
$text .= '        <input type="image" src="/extension/ezwt/design/standard/images/websitetoolbar/ezwt-icon-locations-disabled.gif" name="AddAssignmentButton" title="Add locations" disabled="disabled" />
    ';
}
unset( $if_cond );
// if ends

}
unset( $if_cond );
// if ends

$text .= '
<a href=';
unset( $var );
unset( $var1 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node'] : null;
$var4 = compiledFetchAttribute( $var3, 'node_id' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var1 = ( 'websitetoolbar/sort/' . $var3 );
unset( $var3 );
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

$text .= ' title="Sorting"><img src="/extension/ezwt/design/standard/images/websitetoolbar/ezwt-icon-sort.gif" alt="Sorting" /></a>

';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_12 ) ) $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_12 = array();
$fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_12[] = compact( 'fe_array_b038cefefab7a06fcb792cf731d0c8a8_12', 'fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_12', 'fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_12', 'fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_12', 'fe_i_b038cefefab7a06fcb792cf731d0c8a8_12', 'fe_key_b038cefefab7a06fcb792cf731d0c8a8_12', 'fe_val_b038cefefab7a06fcb792cf731d0c8a8_12', 'fe_offset_b038cefefab7a06fcb792cf731d0c8a8_12', 'fe_max_b038cefefab7a06fcb792cf731d0c8a8_12', 'fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_12', 'fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_12', 'fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_12' );
unset( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_12 );
unset( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_12 );
$fe_array_b038cefefab7a06fcb792cf731d0c8a8_12 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_templates', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_templates'] : null;
if (! isset( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_12 ) ) $fe_array_b038cefefab7a06fcb792cf731d0c8a8_12 = NULL;
while ( is_object( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_12 ) and method_exists( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_12, 'templateValue' ) )
    $fe_array_b038cefefab7a06fcb792cf731d0c8a8_12 = $fe_array_b038cefefab7a06fcb792cf731d0c8a8_12->templateValue();

$fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_12 = is_array( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_12 ) ? array_keys( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_12 ) : array();
$fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_12 = count( $fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_12 );
$fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_12 = 0;
$fe_offset_b038cefefab7a06fcb792cf731d0c8a8_12 = 0;
$fe_max_b038cefefab7a06fcb792cf731d0c8a8_12 = $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_12 - $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_12;
$fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_12 = false;
if ( $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_12 < 0 || $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_12 >= $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_12 )
{
    $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_12 = ( $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_12 < 0 ) ? 0 : $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_12;
    if ( $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_12 || $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_12 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_b038cefefab7a06fcb792cf731d0c8a8_12'. Array count: $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_12");   
}
}
if ( $fe_max_b038cefefab7a06fcb792cf731d0c8a8_12 < 0 || $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_12 + $fe_max_b038cefefab7a06fcb792cf731d0c8a8_12 > $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_12 )
{
    if ( $fe_max_b038cefefab7a06fcb792cf731d0c8a8_12 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_b038cefefab7a06fcb792cf731d0c8a8_12");
    $fe_max_b038cefefab7a06fcb792cf731d0c8a8_12 = $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_12 - $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_12;
}
if ( $fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_12 )
{
    $fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_12 = $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_12 - 1 - $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_12;
    $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_12  = 0;
}
else
{
    $fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_12 = $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_12;
    $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_12  = $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_12 - 1;
}
// foreach
for ( $fe_i_b038cefefab7a06fcb792cf731d0c8a8_12 = $fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_12; $fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_12 < $fe_max_b038cefefab7a06fcb792cf731d0c8a8_12 && ( $fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_12 ? $fe_i_b038cefefab7a06fcb792cf731d0c8a8_12 >= $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_12 : $fe_i_b038cefefab7a06fcb792cf731d0c8a8_12 <= $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_12 ); $fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_12 ? $fe_i_b038cefefab7a06fcb792cf731d0c8a8_12-- : $fe_i_b038cefefab7a06fcb792cf731d0c8a8_12++ )
{
$fe_key_b038cefefab7a06fcb792cf731d0c8a8_12 = $fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_12[$fe_i_b038cefefab7a06fcb792cf731d0c8a8_12];
$fe_val_b038cefefab7a06fcb792cf731d0c8a8_12 = $fe_array_b038cefefab7a06fcb792cf731d0c8a8_12[$fe_key_b038cefefab7a06fcb792cf731d0c8a8_12];
$vars[$rootNamespace]['custom_template'] = $fe_val_b038cefefab7a06fcb792cf731d0c8a8_12;
$text .= '    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'include_in_view', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['include_in_view'] : null;
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_template', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_template'] : null;
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
// def $views
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'include_in_view', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['include_in_view'] : null;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_template', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_template'] : null;
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
if ( is_string( $var1 ) )
{
	$var = explode( ";", $var1 );
}
else if ( is_array( $var1 ) )
{
	$var = array( array_slice( $var1, 0, ";" ), array_slice( $var1, ";" ) );
}
else
{
	$var = null;
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'views', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'views' is already defined.", array (
  0 => 
  array (
    0 => 97,
    1 => 8,
    2 => 5749,
  ),
  1 => 
  array (
    0 => 97,
    1 => 70,
    2 => 5811,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'views', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'views', $var, $rootNamespace );
}

$text .= '        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'views', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['views'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
if( is_string( $if_cond1 ) )
{
  $if_cond = ( strpos( $if_cond1, "full" ) !== false );
}
else if ( is_array( $if_cond1 ) )
{
  $if_cond = in_array( "full", $if_cond1 );
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
$text .= '            ';
$textElements = array();
$tpl->processFunction( 'include', $textElements,
                       false,
                       array (
  'uri' => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'concat',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'design:parts/websitetoolbar/',
            2 => false,
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'custom_template',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '.tpl',
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 99,
    1 => 12,
    2 => 5865,
  ),
  1 => 
  array (
    0 => 99,
    1 => 90,
    2 => 5943,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '        ';
// undef $views
$tpl->unsetLocalVariable( 'views', $rootNamespace );

$text .= '    ';
}
unset( $if_cond );
// if ends

$fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_12++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_12 ) ) extract( array_pop( $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_12 ) );

else
{

unset( $fe_array_b038cefefab7a06fcb792cf731d0c8a8_12 );

unset( $fe_array_keys_b038cefefab7a06fcb792cf731d0c8a8_12 );

unset( $fe_n_items_b038cefefab7a06fcb792cf731d0c8a8_12 );

unset( $fe_n_items_processed_b038cefefab7a06fcb792cf731d0c8a8_12 );

unset( $fe_i_b038cefefab7a06fcb792cf731d0c8a8_12 );

unset( $fe_key_b038cefefab7a06fcb792cf731d0c8a8_12 );

unset( $fe_val_b038cefefab7a06fcb792cf731d0c8a8_12 );

unset( $fe_offset_b038cefefab7a06fcb792cf731d0c8a8_12 );

unset( $fe_max_b038cefefab7a06fcb792cf731d0c8a8_12 );

unset( $fe_reverse_b038cefefab7a06fcb792cf731d0c8a8_12 );

unset( $fe_first_val_b038cefefab7a06fcb792cf731d0c8a8_12 );

unset( $fe_last_val_b038cefefab7a06fcb792cf731d0c8a8_12 );

unset( $fe_variable_stack_b038cefefab7a06fcb792cf731d0c8a8_12 );

}

// foreach ends
$text .= '
  <input type="hidden" name="HasMainAssignment" value="1" />
  <input type="hidden" name="ContentObjectID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
  <input type="hidden" name="NodeID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
  <input type="hidden" name="ContentNodeID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
  
  ';
// def $avail_languages
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$var1 = compiledFetchAttribute( $var, 'available_languages' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'avail_languages', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'avail_languages' is already defined.", array (
  0 => 
  array (
    0 => 110,
    1 => 2,
    2 => 6446,
  ),
  1 => 
  array (
    0 => 111,
    1 => 59,
    2 => 6564,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'avail_languages', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'avail_languages', $var, $rootNamespace );
}

// def $default_language
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$var1 = compiledFetchAttribute( $var, 'default_language' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'default_language', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'default_language' is already defined.", array (
  0 => 
  array (
    0 => 110,
    1 => 2,
    2 => 6446,
  ),
  1 => 
  array (
    0 => 111,
    1 => 59,
    2 => 6564,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'default_language', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'default_language', $var, $rootNamespace );
}

$text .= '  ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'avail_languages', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['avail_languages'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond2Data = array( 'value' => $if_cond2 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond2Data, false, false );
$if_cond2 = $if_cond2Data['value'];
unset( $if_cond2Data );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond1 = ( ( $if_cond2 ) >= ( 1 ) );
unset( $if_cond2 );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'avail_languages', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['avail_languages'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'default_language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['default_language'] : null;
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
$text .= '    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'default_language', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['default_language'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'content_object_language_code', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['content_object_language_code'] = $var;
    unset( $var );
}
$text .= '  ';
}
else
{
$text .= '    ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'content_object_language_code', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['content_object_language_code'] = '';
}
$text .= '  ';
}
unset( $if_cond );
// if ends

$text .= '  <input type="hidden" name="ContentObjectLanguageCode" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object_language_code', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object_language_code'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
</form>
</div>
';
$oldRestoreIncludeArray_621ad22cad8facdec4921c3f64992a7a = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezflow_site/cache/template/compiled/help-eb2d654c64b08f0661fa40691737adc2.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwt/design/standard/templates/parts/websitetoolbar/help.tpl' );
include( '' . 'var/ezflow_site/cache/template/compiled/help-eb2d654c64b08f0661fa40691737adc2.php' );
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
$tpl->processURI( 'extension/ezwt/design/standard/templates/parts/websitetoolbar/help.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_621ad22cad8facdec4921c3f64992a7a;

$text .= '
<div id="ezwt-openoffice">
';
// def $disable_oo
if ( $tpl->hasVariable( 'disable_oo', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'disable_oo' is already defined.", array (
  0 => 
  array (
    0 => 125,
    1 => 0,
    2 => 6979,
  ),
  1 => 
  array (
    0 => 125,
    1 => 22,
    2 => 7001,
  ),
  2 => 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl',
) );
    $tpl->setVariable( 'disable_oo', true, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'disable_oo', true, $rootNamespace );
}

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'odf_display_classes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['odf_display_classes'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'content_class' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'identifier' );
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
$text .= '    ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'disable_oo', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['disable_oo'] = false;
}
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'disable_oo', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['disable_oo'] : null;
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
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'odf_import_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['odf_import_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<form method="post" action="/ezodf/import" class="right">
  <input type="hidden" name="ImportType" value="replace" />
  <input type="hidden" name="NodeID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
  <input type="hidden" name="ObjectID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
  <input type="image" src="/extension/ezwt/design/standard/images/websitetoolbar/ezwt-icon-replace.gif" name="ReplaceAction" title="Replace" />
</form>';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'odf_export_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['odf_export_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<form method="post" action="/ezodf/export" class="right">
  <input type="hidden" name="NodeID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
  <input type="hidden" name="ObjectID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
  <input type="image" src="/extension/ezwt/design/standard/images/websitetoolbar/ezwt-icon-export.gif" name="ExportAction" title="Export" />
</form>';
}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'content_class' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'is_container' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond3 );
unset( $if_cond4 );
unset( $if_cond4 );
$if_cond4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'odf_hide_container_classes', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['odf_hide_container_classes'] : null;
if (! isset( $if_cond4 ) ) $if_cond4 = NULL;
while ( is_object( $if_cond4 ) and method_exists( $if_cond4, 'templateValue' ) )
    $if_cond4 = $if_cond4->templateValue();
unset( $if_cond5 );
unset( $if_cond5 );
$if_cond5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$if_cond6 = compiledFetchAttribute( $if_cond5, 'content_class' );
unset( $if_cond5 );
$if_cond5 = $if_cond6;
$if_cond6 = compiledFetchAttribute( $if_cond5, 'identifier' );
unset( $if_cond5 );
$if_cond5 = $if_cond6;
if (! isset( $if_cond5 ) ) $if_cond5 = NULL;
while ( is_object( $if_cond5 ) and method_exists( $if_cond5, 'templateValue' ) )
    $if_cond5 = $if_cond5->templateValue();
if( is_string( $if_cond4 ) )
{
  $if_cond3 = ( strpos( $if_cond4, $if_cond5 ) !== false );
}
else if ( is_array( $if_cond4 ) )
{
  $if_cond3 = in_array( $if_cond5, $if_cond4 );
}
else
{
$if_cond3 = false;
}unset( $if_cond4, $if_cond5 );
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond2 = !( $if_cond3 );
unset( $if_cond3 );
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'odf_import_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['odf_import_access'] : null;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
if ( !$if_cond1 )
    $if_cond = false;
else if ( !$if_cond2 )
    $if_cond = false;
else if ( !$if_cond3 )
    $if_cond = false;
else
    $if_cond = $if_cond3;
unset( $if_cond1, $if_cond2, $if_cond3 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<form method="post" action="/ezodf/import" class="right">
  <input type="hidden" name="NodeID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_node'] : null;
$var1 = compiledFetchAttribute( $var, 'node_id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
  <input type="hidden" name="ObjectID" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'content_object', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['content_object'] : null;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" />
  <input type="image" src="/extension/ezwt/design/standard/images/websitetoolbar/ezwt-icon-import.gif" name="ImportAction" title="Import" />
</form>';
}
unset( $if_cond );
// if ends

$text .= '
<div id="ezwt-oologo">
<img src="/extension/ezwt/design/standard/images/websitetoolbar/ezwt-oo-logo.gif" width="58" height="18" alt="OpenOffice.org" />
</div>';
}
unset( $if_cond );
// if ends

$text .= '</div>

<!-- eZ website toolbar content: END -->

</div></div></div>
<div class="bl"><div class="br"><div class="bc"></div></div></div>
</div>

<!-- eZ website toolbar: END -->
';
}
unset( $if_cond );
// if ends


$setArray = $oldSetArray_dbf72c34c7213fec3c0b49f747ae0910;
$tpl->Level--;
?>
