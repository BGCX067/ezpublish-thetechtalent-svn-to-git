<?php
// URI:       design/admin2/templates/parts/ini_menu.tpl
// Filename:  design/admin2/templates/parts/ini_menu.tpl
// Timestamp: 1285696610 (Tue Sep 28 10:56:50 MST 2010)
$oldSetArray_07505e87bd24c47176c6cc93ee140606 = isset( $setArray ) ? $setArray : array();
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
unset( $elseif_cond_970462f1f44fa6148022882ccf6ff5f0_40 );
unset( $elseif_cond_970462f1f44fa6148022882ccf6ff5f0_401 );
unset( $elseif_cond_970462f1f44fa6148022882ccf6ff5f0_401 );
$elseif_cond_970462f1f44fa6148022882ccf6ff5f0_401 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ini_section', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ini_section'] : null;
if (! isset( $elseif_cond_970462f1f44fa6148022882ccf6ff5f0_401 ) ) $elseif_cond_970462f1f44fa6148022882ccf6ff5f0_401 = NULL;
while ( is_object( $elseif_cond_970462f1f44fa6148022882ccf6ff5f0_401 ) and method_exists( $elseif_cond_970462f1f44fa6148022882ccf6ff5f0_401, 'templateValue' ) )
    $elseif_cond_970462f1f44fa6148022882ccf6ff5f0_401 = $elseif_cond_970462f1f44fa6148022882ccf6ff5f0_401->templateValue();
while ( is_object( $elseif_cond_970462f1f44fa6148022882ccf6ff5f0_401 ) and method_exists( $elseif_cond_970462f1f44fa6148022882ccf6ff5f0_401, 'templateValue' ) )
    $elseif_cond_970462f1f44fa6148022882ccf6ff5f0_401 = $elseif_cond_970462f1f44fa6148022882ccf6ff5f0_401->templateValue();
if( is_string( $elseif_cond_970462f1f44fa6148022882ccf6ff5f0_401 ) )
{
  $elseif_cond_970462f1f44fa6148022882ccf6ff5f0_40 = ( strpos( $elseif_cond_970462f1f44fa6148022882ccf6ff5f0_401, "_" ) !== false );
}
else if ( is_array( $elseif_cond_970462f1f44fa6148022882ccf6ff5f0_401 ) )
{
  $elseif_cond_970462f1f44fa6148022882ccf6ff5f0_40 = in_array( "_", $elseif_cond_970462f1f44fa6148022882ccf6ff5f0_401 );
}
else
{
$elseif_cond_970462f1f44fa6148022882ccf6ff5f0_40 = false;
}unset( $elseif_cond_970462f1f44fa6148022882ccf6ff5f0_401 );
if (! isset( $elseif_cond_970462f1f44fa6148022882ccf6ff5f0_40 ) ) $elseif_cond_970462f1f44fa6148022882ccf6ff5f0_40 = NULL;
while ( is_object( $elseif_cond_970462f1f44fa6148022882ccf6ff5f0_40 ) and method_exists( $elseif_cond_970462f1f44fa6148022882ccf6ff5f0_40, 'templateValue' ) )
    $elseif_cond_970462f1f44fa6148022882ccf6ff5f0_40 = $elseif_cond_970462f1f44fa6148022882ccf6ff5f0_40->templateValue();

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ini_section', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ini_section'] : null;
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
// def $ini_section
if ( $tpl->hasVariable( 'ini_section', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'ini_section' is already defined.", array (
  0 => 
  array (
    0 => 13,
    1 => 4,
    2 => 314,
  ),
  1 => 
  array (
    0 => 14,
    1 => 50,
    2 => 396,
  ),
  2 => 'design/admin2/templates/parts/ini_menu.tpl',
) );
    $tpl->setVariable( 'ini_section', 'Leftmenu_', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'ini_section', 'Leftmenu_', $rootNamespace );
}

// def $i18n_section
if ( $tpl->hasVariable( 'i18n_section', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'i18n_section' is already defined.", array (
  0 => 
  array (
    0 => 13,
    1 => 4,
    2 => 314,
  ),
  1 => 
  array (
    0 => 14,
    1 => 50,
    2 => 396,
  ),
  2 => 'design/admin2/templates/parts/ini_menu.tpl',
) );
    $tpl->setVariable( 'i18n_section', 'design/admin/parts/menu', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'i18n_section', 'design/admin/parts/menu', $rootNamespace );
}

}
elseif ( $elseif_cond_970462f1f44fa6148022882ccf6ff5f0_40 )
{
$text .= '    ';
// def $i18n_section
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ini_section', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ini_section'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
if ( is_string( $var3 ) )
{
	$var2 = explode( "_", $var3 );
}
else if ( is_array( $var3 ) )
{
	$var2 = array( array_slice( $var3, 0, "_" ), array_slice( $var3, "_" ) );
}
else
{
	$var2 = null;
}
unset( $var3 );
$var3 = compiledFetchAttribute( $var2, 1 );
unset( $var2 );
$var2 = $var3;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = ( 'design/admin/parts/' . $var2 . '/menu' );
unset( $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'i18n_section', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'i18n_section' is already defined.", array (
  0 => 
  array (
    0 => 16,
    1 => 4,
    2 => 439,
  ),
  1 => 
  array (
    0 => 16,
    1 => 92,
    2 => 527,
  ),
  2 => 'design/admin2/templates/parts/ini_menu.tpl',
) );
    $tpl->setVariable( 'i18n_section', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'i18n_section', $var, $rootNamespace );
}

}
else
{
$text .= '    ';
// def $i18n_section
if ( $tpl->hasVariable( 'i18n_section', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'i18n_section' is already defined.", array (
  0 => 
  array (
    0 => 18,
    1 => 4,
    2 => 541,
  ),
  1 => 
  array (
    0 => 18,
    1 => 49,
    2 => 586,
  ),
  2 => 'design/admin2/templates/parts/ini_menu.tpl',
) );
    $tpl->setVariable( 'i18n_section', 'design/admin/parts/menu', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'i18n_section', 'design/admin/parts/menu', $rootNamespace );
}

}
unset( $if_cond );
// if ends

unset( $elseif_cond_970462f1f44fa6148022882ccf6ff5f0_40 );

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'i18n_hash', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['i18n_hash'] : null;
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
// def $i18n_hash
if ( $tpl->hasVariable( 'i18n_hash', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'i18n_hash' is already defined.", array (
  0 => 
  array (
    0 => 22,
    1 => 4,
    2 => 628,
  ),
  1 => 
  array (
    0 => 22,
    1 => 27,
    2 => 651,
  ),
  2 => 'design/admin2/templates/parts/ini_menu.tpl',
) );
    $tpl->setVariable( 'i18n_hash', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'i18n_hash', array (
), $rootNamespace );
}

}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'uri_string', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['uri_string'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
// def $current_uri_string
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'uri_string', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['uri_string'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'current_uri_string', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'current_uri_string' is already defined.", array (
  0 => 
  array (
    0 => 26,
    1 => 4,
    2 => 682,
  ),
  1 => 
  array (
    0 => 26,
    1 => 41,
    2 => 719,
  ),
  2 => 'design/admin2/templates/parts/ini_menu.tpl',
) );
    $tpl->setVariable( 'current_uri_string', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'current_uri_string', $var, $rootNamespace );
}

}
else
{
$text .= '    ';
// def $current_uri_string
if ( $tpl->hasVariable( 'current_uri_string', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'current_uri_string' is already defined.", array (
  0 => 
  array (
    0 => 28,
    1 => 4,
    2 => 733,
  ),
  1 => 
  array (
    0 => 28,
    1 => 65,
    2 => 794,
  ),
  2 => 'design/admin2/templates/parts/ini_menu.tpl',
) );
    $tpl->setVariable( 'current_uri_string', '/content/view/full/2/', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'current_uri_string', '/content/view/full/2/', $rootNamespace );
}

}
unset( $if_cond );
// if ends

$text .= '
';
// if begins
unset( $if_cond );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();
$if_condData = array( 'value' => $if_cond );
$tpl->processOperator( 'ezini_hasvariable',
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
        2 => 'ini_section',
      ),
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'Links',
      2 => false,
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'menu.ini',
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $if_condData, false, false );
$if_cond = $if_condData['value'];
unset( $if_condData );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
// def $url_list
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezini',
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
        2 => 'ini_section',
      ),
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'Links',
      2 => false,
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'menu.ini',
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
if ( $tpl->hasVariable( 'url_list', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'url_list' is already defined.", array (
  0 => 
  array (
    0 => 33,
    1 => 4,
    2 => 869,
  ),
  1 => 
  array (
    0 => 38,
    1 => 24,
    2 => 1150,
  ),
  2 => 'design/admin2/templates/parts/ini_menu.tpl',
) );
    $tpl->setVariable( 'url_list', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'url_list', $var, $rootNamespace );
}

// def $name_list
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezini',
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
        2 => 'ini_section',
      ),
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'LinkNames',
      2 => false,
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'menu.ini',
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
if ( $tpl->hasVariable( 'name_list', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'name_list' is already defined.", array (
  0 => 
  array (
    0 => 33,
    1 => 4,
    2 => 869,
  ),
  1 => 
  array (
    0 => 38,
    1 => 24,
    2 => 1150,
  ),
  2 => 'design/admin2/templates/parts/ini_menu.tpl',
) );
    $tpl->setVariable( 'name_list', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'name_list', $var, $rootNamespace );
}

// def $menu_name
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezini',
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
        2 => 'ini_section',
      ),
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'Name',
      2 => false,
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'menu.ini',
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
if ( $tpl->hasVariable( 'menu_name', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'menu_name' is already defined.", array (
  0 => 
  array (
    0 => 33,
    1 => 4,
    2 => 869,
  ),
  1 => 
  array (
    0 => 38,
    1 => 24,
    2 => 1150,
  ),
  2 => 'design/admin2/templates/parts/ini_menu.tpl',
) );
    $tpl->setVariable( 'menu_name', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'menu_name', $var, $rootNamespace );
}

// def $check
if ( $tpl->hasVariable( 'check', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'check' is already defined.", array (
  0 => 
  array (
    0 => 33,
    1 => 4,
    2 => 869,
  ),
  1 => 
  array (
    0 => 38,
    1 => 24,
    2 => 1150,
  ),
  2 => 'design/admin2/templates/parts/ini_menu.tpl',
) );
    $tpl->setVariable( 'check', array (
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'check', array (
), $rootNamespace );
}

// def $has_access
if ( $tpl->hasVariable( 'has_access', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'has_access' is already defined.", array (
  0 => 
  array (
    0 => 33,
    1 => 4,
    2 => 869,
  ),
  1 => 
  array (
    0 => 38,
    1 => 24,
    2 => 1150,
  ),
  2 => 'design/admin2/templates/parts/ini_menu.tpl',
) );
    $tpl->setVariable( 'has_access', true, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'has_access', true, $rootNamespace );
}

// def $item_name
if ( $tpl->hasVariable( 'item_name', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'item_name' is already defined.", array (
  0 => 
  array (
    0 => 33,
    1 => 4,
    2 => 869,
  ),
  1 => 
  array (
    0 => 38,
    1 => 24,
    2 => 1150,
  ),
  2 => 'design/admin2/templates/parts/ini_menu.tpl',
) );
    $tpl->setVariable( 'item_name', '', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'item_name', '', $rootNamespace );
}

$text .= '
    
    ';
// if begins
unset( $if_cond );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();
$if_condData = array( 'value' => $if_cond );
$tpl->processOperator( 'ezini_hasvariable',
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
        2 => 'ini_section',
      ),
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'PolicyList',
      2 => false,
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'menu.ini',
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $if_condData, false, false );
$if_cond = $if_condData['value'];
unset( $if_condData );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_970462f1f44fa6148022882ccf6ff5f0_2 ) ) $fe_variable_stack_970462f1f44fa6148022882ccf6ff5f0_2 = array();
$fe_variable_stack_970462f1f44fa6148022882ccf6ff5f0_2[] = compact( 'fe_array_970462f1f44fa6148022882ccf6ff5f0_2', 'fe_array_keys_970462f1f44fa6148022882ccf6ff5f0_2', 'fe_n_items_970462f1f44fa6148022882ccf6ff5f0_2', 'fe_n_items_processed_970462f1f44fa6148022882ccf6ff5f0_2', 'fe_i_970462f1f44fa6148022882ccf6ff5f0_2', 'fe_key_970462f1f44fa6148022882ccf6ff5f0_2', 'fe_val_970462f1f44fa6148022882ccf6ff5f0_2', 'fe_offset_970462f1f44fa6148022882ccf6ff5f0_2', 'fe_max_970462f1f44fa6148022882ccf6ff5f0_2', 'fe_reverse_970462f1f44fa6148022882ccf6ff5f0_2', 'fe_first_val_970462f1f44fa6148022882ccf6ff5f0_2', 'fe_last_val_970462f1f44fa6148022882ccf6ff5f0_2' );
unset( $fe_array_970462f1f44fa6148022882ccf6ff5f0_2 );
if (! isset( $fe_array_970462f1f44fa6148022882ccf6ff5f0_2 ) ) $fe_array_970462f1f44fa6148022882ccf6ff5f0_2 = NULL;
while ( is_object( $fe_array_970462f1f44fa6148022882ccf6ff5f0_2 ) and method_exists( $fe_array_970462f1f44fa6148022882ccf6ff5f0_2, 'templateValue' ) )
    $fe_array_970462f1f44fa6148022882ccf6ff5f0_2 = $fe_array_970462f1f44fa6148022882ccf6ff5f0_2->templateValue();
$fe_array_970462f1f44fa6148022882ccf6ff5f0_2Data = array( 'value' => $fe_array_970462f1f44fa6148022882ccf6ff5f0_2 );
$tpl->processOperator( 'ezini',
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
        2 => 'ini_section',
      ),
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'PolicyList',
      2 => false,
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'menu.ini',
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $fe_array_970462f1f44fa6148022882ccf6ff5f0_2Data, false, false );
$fe_array_970462f1f44fa6148022882ccf6ff5f0_2 = $fe_array_970462f1f44fa6148022882ccf6ff5f0_2Data['value'];
unset( $fe_array_970462f1f44fa6148022882ccf6ff5f0_2Data );
if (! isset( $fe_array_970462f1f44fa6148022882ccf6ff5f0_2 ) ) $fe_array_970462f1f44fa6148022882ccf6ff5f0_2 = NULL;
while ( is_object( $fe_array_970462f1f44fa6148022882ccf6ff5f0_2 ) and method_exists( $fe_array_970462f1f44fa6148022882ccf6ff5f0_2, 'templateValue' ) )
    $fe_array_970462f1f44fa6148022882ccf6ff5f0_2 = $fe_array_970462f1f44fa6148022882ccf6ff5f0_2->templateValue();

$fe_array_keys_970462f1f44fa6148022882ccf6ff5f0_2 = is_array( $fe_array_970462f1f44fa6148022882ccf6ff5f0_2 ) ? array_keys( $fe_array_970462f1f44fa6148022882ccf6ff5f0_2 ) : array();
$fe_n_items_970462f1f44fa6148022882ccf6ff5f0_2 = count( $fe_array_keys_970462f1f44fa6148022882ccf6ff5f0_2 );
$fe_n_items_processed_970462f1f44fa6148022882ccf6ff5f0_2 = 0;
$fe_offset_970462f1f44fa6148022882ccf6ff5f0_2 = 0;
$fe_max_970462f1f44fa6148022882ccf6ff5f0_2 = $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_2 - $fe_offset_970462f1f44fa6148022882ccf6ff5f0_2;
$fe_reverse_970462f1f44fa6148022882ccf6ff5f0_2 = false;
if ( $fe_offset_970462f1f44fa6148022882ccf6ff5f0_2 < 0 || $fe_offset_970462f1f44fa6148022882ccf6ff5f0_2 >= $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_2 )
{
    $fe_offset_970462f1f44fa6148022882ccf6ff5f0_2 = ( $fe_offset_970462f1f44fa6148022882ccf6ff5f0_2 < 0 ) ? 0 : $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_2;
    if ( $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_2 || $fe_offset_970462f1f44fa6148022882ccf6ff5f0_2 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_970462f1f44fa6148022882ccf6ff5f0_2'. Array count: $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_2");   
}
}
if ( $fe_max_970462f1f44fa6148022882ccf6ff5f0_2 < 0 || $fe_offset_970462f1f44fa6148022882ccf6ff5f0_2 + $fe_max_970462f1f44fa6148022882ccf6ff5f0_2 > $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_2 )
{
    if ( $fe_max_970462f1f44fa6148022882ccf6ff5f0_2 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_970462f1f44fa6148022882ccf6ff5f0_2");
    $fe_max_970462f1f44fa6148022882ccf6ff5f0_2 = $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_2 - $fe_offset_970462f1f44fa6148022882ccf6ff5f0_2;
}
if ( $fe_reverse_970462f1f44fa6148022882ccf6ff5f0_2 )
{
    $fe_first_val_970462f1f44fa6148022882ccf6ff5f0_2 = $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_2 - 1 - $fe_offset_970462f1f44fa6148022882ccf6ff5f0_2;
    $fe_last_val_970462f1f44fa6148022882ccf6ff5f0_2  = 0;
}
else
{
    $fe_first_val_970462f1f44fa6148022882ccf6ff5f0_2 = $fe_offset_970462f1f44fa6148022882ccf6ff5f0_2;
    $fe_last_val_970462f1f44fa6148022882ccf6ff5f0_2  = $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_2 - 1;
}
// foreach
for ( $fe_i_970462f1f44fa6148022882ccf6ff5f0_2 = $fe_first_val_970462f1f44fa6148022882ccf6ff5f0_2; $fe_n_items_processed_970462f1f44fa6148022882ccf6ff5f0_2 < $fe_max_970462f1f44fa6148022882ccf6ff5f0_2 && ( $fe_reverse_970462f1f44fa6148022882ccf6ff5f0_2 ? $fe_i_970462f1f44fa6148022882ccf6ff5f0_2 >= $fe_last_val_970462f1f44fa6148022882ccf6ff5f0_2 : $fe_i_970462f1f44fa6148022882ccf6ff5f0_2 <= $fe_last_val_970462f1f44fa6148022882ccf6ff5f0_2 ); $fe_reverse_970462f1f44fa6148022882ccf6ff5f0_2 ? $fe_i_970462f1f44fa6148022882ccf6ff5f0_2-- : $fe_i_970462f1f44fa6148022882ccf6ff5f0_2++ )
{
$fe_key_970462f1f44fa6148022882ccf6ff5f0_2 = $fe_array_keys_970462f1f44fa6148022882ccf6ff5f0_2[$fe_i_970462f1f44fa6148022882ccf6ff5f0_2];
$fe_val_970462f1f44fa6148022882ccf6ff5f0_2 = $fe_array_970462f1f44fa6148022882ccf6ff5f0_2[$fe_key_970462f1f44fa6148022882ccf6ff5f0_2];
$vars[$rootNamespace]['policy'] = $fe_val_970462f1f44fa6148022882ccf6ff5f0_2;
$text .= '            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
if( is_string( $if_cond1 ) )
{
  $if_cond = ( strpos( $if_cond1, "/" ) !== false );
}
else if ( is_array( $if_cond1 ) )
{
  $if_cond = in_array( "/", $if_cond1 );
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
$text .= '                ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( is_string( $var1 ) )
{
	$var = explode( "/", $var1 );
}
else if ( is_array( $var1 ) )
{
	$var = array( array_slice( $var1, 0, "/" ), array_slice( $var1, "/" ) );
}
else
{
	$var = null;
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'check', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['check'] = $var;
    unset( $var );
}
$text .= '                ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'check', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['check'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 0 );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'check', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['check'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 1 );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond1 = call_user_func_array( array( new eZUserFunctionCollection(), 'hasAccessTo' ),
  array(     'module' => $if_cond2,
    'function' => $if_cond3,
    'user_id' => null ) );
$if_cond1 = isset( $if_cond1['result'] ) ? $if_cond1['result'] : null;
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
$text .= '                    ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'has_access', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['has_access'] = false;
}
$text .= '                    ';
break;

$text .= '                ';
}
unset( $if_cond );
// if ends

$text .= '            ';
}
else
{
$text .= '                ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
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
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'check', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['check'] = $var;
    unset( $var );
}
$text .= '                ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'check', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['check'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'check', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['check'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'can_read' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
if ( !$if_cond2 )
    $if_cond1 = false;
else if ( !$if_cond3 )
    $if_cond1 = false;
else
    $if_cond1 = $if_cond3;
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
$text .= '                    ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'has_access', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['has_access'] = false;
}
$text .= '                    ';
break;

$text .= '                ';
}
unset( $if_cond );
// if ends

$text .= '            ';
}
unset( $if_cond );
// if ends

$text .= '        ';
$fe_n_items_processed_970462f1f44fa6148022882ccf6ff5f0_2++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_970462f1f44fa6148022882ccf6ff5f0_2 ) ) extract( array_pop( $fe_variable_stack_970462f1f44fa6148022882ccf6ff5f0_2 ) );

else
{

unset( $fe_array_970462f1f44fa6148022882ccf6ff5f0_2 );

unset( $fe_array_keys_970462f1f44fa6148022882ccf6ff5f0_2 );

unset( $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_2 );

unset( $fe_n_items_processed_970462f1f44fa6148022882ccf6ff5f0_2 );

unset( $fe_i_970462f1f44fa6148022882ccf6ff5f0_2 );

unset( $fe_key_970462f1f44fa6148022882ccf6ff5f0_2 );

unset( $fe_val_970462f1f44fa6148022882ccf6ff5f0_2 );

unset( $fe_offset_970462f1f44fa6148022882ccf6ff5f0_2 );

unset( $fe_max_970462f1f44fa6148022882ccf6ff5f0_2 );

unset( $fe_reverse_970462f1f44fa6148022882ccf6ff5f0_2 );

unset( $fe_first_val_970462f1f44fa6148022882ccf6ff5f0_2 );

unset( $fe_last_val_970462f1f44fa6148022882ccf6ff5f0_2 );

unset( $fe_variable_stack_970462f1f44fa6148022882ccf6ff5f0_2 );

}

// foreach ends
$text .= '    ';
}
unset( $if_cond );
// if ends

$text .= '
    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'has_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['has_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '        <div class="box-header"><div class="box-ml">
        <h4>';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'i18n_hash', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['i18n_hash'] : null;
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'menu_name', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['menu_name'] : null;
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
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'i18n_hash', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['i18n_hash'] : null;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'menu_name', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['menu_name'] : null;
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
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

}
else
{
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'menu_name', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['menu_name'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'd18n',
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
        2 => 'i18n_section',
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

}
unset( $if_cond );
// if ends

$text .= '</h4>
        </div></div>

        <div class="box-bc"><div class="box-ml"><div class="box-content">

        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) == ( 'edit' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            <ul class="leftmenu-items">
            ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_970462f1f44fa6148022882ccf6ff5f0_3 ) ) $fe_variable_stack_970462f1f44fa6148022882ccf6ff5f0_3 = array();
$fe_variable_stack_970462f1f44fa6148022882ccf6ff5f0_3[] = compact( 'fe_array_970462f1f44fa6148022882ccf6ff5f0_3', 'fe_array_keys_970462f1f44fa6148022882ccf6ff5f0_3', 'fe_n_items_970462f1f44fa6148022882ccf6ff5f0_3', 'fe_n_items_processed_970462f1f44fa6148022882ccf6ff5f0_3', 'fe_i_970462f1f44fa6148022882ccf6ff5f0_3', 'fe_key_970462f1f44fa6148022882ccf6ff5f0_3', 'fe_val_970462f1f44fa6148022882ccf6ff5f0_3', 'fe_offset_970462f1f44fa6148022882ccf6ff5f0_3', 'fe_max_970462f1f44fa6148022882ccf6ff5f0_3', 'fe_reverse_970462f1f44fa6148022882ccf6ff5f0_3', 'fe_first_val_970462f1f44fa6148022882ccf6ff5f0_3', 'fe_last_val_970462f1f44fa6148022882ccf6ff5f0_3' );
unset( $fe_array_970462f1f44fa6148022882ccf6ff5f0_3 );
unset( $fe_array_970462f1f44fa6148022882ccf6ff5f0_3 );
$fe_array_970462f1f44fa6148022882ccf6ff5f0_3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'url_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['url_list'] : null;
if (! isset( $fe_array_970462f1f44fa6148022882ccf6ff5f0_3 ) ) $fe_array_970462f1f44fa6148022882ccf6ff5f0_3 = NULL;
while ( is_object( $fe_array_970462f1f44fa6148022882ccf6ff5f0_3 ) and method_exists( $fe_array_970462f1f44fa6148022882ccf6ff5f0_3, 'templateValue' ) )
    $fe_array_970462f1f44fa6148022882ccf6ff5f0_3 = $fe_array_970462f1f44fa6148022882ccf6ff5f0_3->templateValue();

$fe_array_keys_970462f1f44fa6148022882ccf6ff5f0_3 = is_array( $fe_array_970462f1f44fa6148022882ccf6ff5f0_3 ) ? array_keys( $fe_array_970462f1f44fa6148022882ccf6ff5f0_3 ) : array();
$fe_n_items_970462f1f44fa6148022882ccf6ff5f0_3 = count( $fe_array_keys_970462f1f44fa6148022882ccf6ff5f0_3 );
$fe_n_items_processed_970462f1f44fa6148022882ccf6ff5f0_3 = 0;
$fe_offset_970462f1f44fa6148022882ccf6ff5f0_3 = 0;
$fe_max_970462f1f44fa6148022882ccf6ff5f0_3 = $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_3 - $fe_offset_970462f1f44fa6148022882ccf6ff5f0_3;
$fe_reverse_970462f1f44fa6148022882ccf6ff5f0_3 = false;
if ( $fe_offset_970462f1f44fa6148022882ccf6ff5f0_3 < 0 || $fe_offset_970462f1f44fa6148022882ccf6ff5f0_3 >= $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_3 )
{
    $fe_offset_970462f1f44fa6148022882ccf6ff5f0_3 = ( $fe_offset_970462f1f44fa6148022882ccf6ff5f0_3 < 0 ) ? 0 : $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_3;
    if ( $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_3 || $fe_offset_970462f1f44fa6148022882ccf6ff5f0_3 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_970462f1f44fa6148022882ccf6ff5f0_3'. Array count: $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_3");   
}
}
if ( $fe_max_970462f1f44fa6148022882ccf6ff5f0_3 < 0 || $fe_offset_970462f1f44fa6148022882ccf6ff5f0_3 + $fe_max_970462f1f44fa6148022882ccf6ff5f0_3 > $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_3 )
{
    if ( $fe_max_970462f1f44fa6148022882ccf6ff5f0_3 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_970462f1f44fa6148022882ccf6ff5f0_3");
    $fe_max_970462f1f44fa6148022882ccf6ff5f0_3 = $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_3 - $fe_offset_970462f1f44fa6148022882ccf6ff5f0_3;
}
if ( $fe_reverse_970462f1f44fa6148022882ccf6ff5f0_3 )
{
    $fe_first_val_970462f1f44fa6148022882ccf6ff5f0_3 = $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_3 - 1 - $fe_offset_970462f1f44fa6148022882ccf6ff5f0_3;
    $fe_last_val_970462f1f44fa6148022882ccf6ff5f0_3  = 0;
}
else
{
    $fe_first_val_970462f1f44fa6148022882ccf6ff5f0_3 = $fe_offset_970462f1f44fa6148022882ccf6ff5f0_3;
    $fe_last_val_970462f1f44fa6148022882ccf6ff5f0_3  = $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_3 - 1;
}
// foreach
for ( $fe_i_970462f1f44fa6148022882ccf6ff5f0_3 = $fe_first_val_970462f1f44fa6148022882ccf6ff5f0_3; $fe_n_items_processed_970462f1f44fa6148022882ccf6ff5f0_3 < $fe_max_970462f1f44fa6148022882ccf6ff5f0_3 && ( $fe_reverse_970462f1f44fa6148022882ccf6ff5f0_3 ? $fe_i_970462f1f44fa6148022882ccf6ff5f0_3 >= $fe_last_val_970462f1f44fa6148022882ccf6ff5f0_3 : $fe_i_970462f1f44fa6148022882ccf6ff5f0_3 <= $fe_last_val_970462f1f44fa6148022882ccf6ff5f0_3 ); $fe_reverse_970462f1f44fa6148022882ccf6ff5f0_3 ? $fe_i_970462f1f44fa6148022882ccf6ff5f0_3-- : $fe_i_970462f1f44fa6148022882ccf6ff5f0_3++ )
{
$fe_key_970462f1f44fa6148022882ccf6ff5f0_3 = $fe_array_keys_970462f1f44fa6148022882ccf6ff5f0_3[$fe_i_970462f1f44fa6148022882ccf6ff5f0_3];
$fe_val_970462f1f44fa6148022882ccf6ff5f0_3 = $fe_array_970462f1f44fa6148022882ccf6ff5f0_3[$fe_key_970462f1f44fa6148022882ccf6ff5f0_3];
$vars[$rootNamespace]['link_url'] = $fe_val_970462f1f44fa6148022882ccf6ff5f0_3;
$vars[$rootNamespace]['link_key'] = $fe_key_970462f1f44fa6148022882ccf6ff5f0_3;
$text .= '                ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'name_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['name_list'] : null;
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'link_key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['link_key'] : null;
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
$text .= '                    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'name_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['name_list'] : null;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'link_key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['link_key'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = compiledFetchAttribute( $var, $var2 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'd18n',
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
        2 => 'i18n_section',
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
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'item_name', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['item_name'] = $var;
    unset( $var );
}
$text .= '                ';
}
else
{
$text .= '                    ';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "i18n_hash", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["i18n_hash"] : null;
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "link_key", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["link_key"] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = compiledFetchAttribute( $var2, $var4 );
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
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "link_key", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["link_key"] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
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
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'item_name', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['item_name'] = $var;
    unset( $var );
}
$text .= '                ';
}
unset( $if_cond );
// if ends

$text .= '                <li><div><span class="disabled">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item_name', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item_name'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</span></div></li>
            ';
$fe_n_items_processed_970462f1f44fa6148022882ccf6ff5f0_3++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_970462f1f44fa6148022882ccf6ff5f0_3 ) ) extract( array_pop( $fe_variable_stack_970462f1f44fa6148022882ccf6ff5f0_3 ) );

else
{

unset( $fe_array_970462f1f44fa6148022882ccf6ff5f0_3 );

unset( $fe_array_keys_970462f1f44fa6148022882ccf6ff5f0_3 );

unset( $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_3 );

unset( $fe_n_items_processed_970462f1f44fa6148022882ccf6ff5f0_3 );

unset( $fe_i_970462f1f44fa6148022882ccf6ff5f0_3 );

unset( $fe_key_970462f1f44fa6148022882ccf6ff5f0_3 );

unset( $fe_val_970462f1f44fa6148022882ccf6ff5f0_3 );

unset( $fe_offset_970462f1f44fa6148022882ccf6ff5f0_3 );

unset( $fe_max_970462f1f44fa6148022882ccf6ff5f0_3 );

unset( $fe_reverse_970462f1f44fa6148022882ccf6ff5f0_3 );

unset( $fe_first_val_970462f1f44fa6148022882ccf6ff5f0_3 );

unset( $fe_last_val_970462f1f44fa6148022882ccf6ff5f0_3 );

unset( $fe_variable_stack_970462f1f44fa6148022882ccf6ff5f0_3 );

}

// foreach ends
$text .= '            </ul>
        ';
}
else
{
$text .= '            <ul class="leftmenu-items">
            ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_970462f1f44fa6148022882ccf6ff5f0_5 ) ) $fe_variable_stack_970462f1f44fa6148022882ccf6ff5f0_5 = array();
$fe_variable_stack_970462f1f44fa6148022882ccf6ff5f0_5[] = compact( 'fe_array_970462f1f44fa6148022882ccf6ff5f0_5', 'fe_array_keys_970462f1f44fa6148022882ccf6ff5f0_5', 'fe_n_items_970462f1f44fa6148022882ccf6ff5f0_5', 'fe_n_items_processed_970462f1f44fa6148022882ccf6ff5f0_5', 'fe_i_970462f1f44fa6148022882ccf6ff5f0_5', 'fe_key_970462f1f44fa6148022882ccf6ff5f0_5', 'fe_val_970462f1f44fa6148022882ccf6ff5f0_5', 'fe_offset_970462f1f44fa6148022882ccf6ff5f0_5', 'fe_max_970462f1f44fa6148022882ccf6ff5f0_5', 'fe_reverse_970462f1f44fa6148022882ccf6ff5f0_5', 'fe_first_val_970462f1f44fa6148022882ccf6ff5f0_5', 'fe_last_val_970462f1f44fa6148022882ccf6ff5f0_5' );
unset( $fe_array_970462f1f44fa6148022882ccf6ff5f0_5 );
unset( $fe_array_970462f1f44fa6148022882ccf6ff5f0_5 );
$fe_array_970462f1f44fa6148022882ccf6ff5f0_5 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'url_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['url_list'] : null;
if (! isset( $fe_array_970462f1f44fa6148022882ccf6ff5f0_5 ) ) $fe_array_970462f1f44fa6148022882ccf6ff5f0_5 = NULL;
while ( is_object( $fe_array_970462f1f44fa6148022882ccf6ff5f0_5 ) and method_exists( $fe_array_970462f1f44fa6148022882ccf6ff5f0_5, 'templateValue' ) )
    $fe_array_970462f1f44fa6148022882ccf6ff5f0_5 = $fe_array_970462f1f44fa6148022882ccf6ff5f0_5->templateValue();

$fe_array_keys_970462f1f44fa6148022882ccf6ff5f0_5 = is_array( $fe_array_970462f1f44fa6148022882ccf6ff5f0_5 ) ? array_keys( $fe_array_970462f1f44fa6148022882ccf6ff5f0_5 ) : array();
$fe_n_items_970462f1f44fa6148022882ccf6ff5f0_5 = count( $fe_array_keys_970462f1f44fa6148022882ccf6ff5f0_5 );
$fe_n_items_processed_970462f1f44fa6148022882ccf6ff5f0_5 = 0;
$fe_offset_970462f1f44fa6148022882ccf6ff5f0_5 = 0;
$fe_max_970462f1f44fa6148022882ccf6ff5f0_5 = $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_5 - $fe_offset_970462f1f44fa6148022882ccf6ff5f0_5;
$fe_reverse_970462f1f44fa6148022882ccf6ff5f0_5 = false;
if ( $fe_offset_970462f1f44fa6148022882ccf6ff5f0_5 < 0 || $fe_offset_970462f1f44fa6148022882ccf6ff5f0_5 >= $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_5 )
{
    $fe_offset_970462f1f44fa6148022882ccf6ff5f0_5 = ( $fe_offset_970462f1f44fa6148022882ccf6ff5f0_5 < 0 ) ? 0 : $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_5;
    if ( $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_5 || $fe_offset_970462f1f44fa6148022882ccf6ff5f0_5 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_970462f1f44fa6148022882ccf6ff5f0_5'. Array count: $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_5");   
}
}
if ( $fe_max_970462f1f44fa6148022882ccf6ff5f0_5 < 0 || $fe_offset_970462f1f44fa6148022882ccf6ff5f0_5 + $fe_max_970462f1f44fa6148022882ccf6ff5f0_5 > $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_5 )
{
    if ( $fe_max_970462f1f44fa6148022882ccf6ff5f0_5 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_970462f1f44fa6148022882ccf6ff5f0_5");
    $fe_max_970462f1f44fa6148022882ccf6ff5f0_5 = $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_5 - $fe_offset_970462f1f44fa6148022882ccf6ff5f0_5;
}
if ( $fe_reverse_970462f1f44fa6148022882ccf6ff5f0_5 )
{
    $fe_first_val_970462f1f44fa6148022882ccf6ff5f0_5 = $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_5 - 1 - $fe_offset_970462f1f44fa6148022882ccf6ff5f0_5;
    $fe_last_val_970462f1f44fa6148022882ccf6ff5f0_5  = 0;
}
else
{
    $fe_first_val_970462f1f44fa6148022882ccf6ff5f0_5 = $fe_offset_970462f1f44fa6148022882ccf6ff5f0_5;
    $fe_last_val_970462f1f44fa6148022882ccf6ff5f0_5  = $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_5 - 1;
}
// foreach
for ( $fe_i_970462f1f44fa6148022882ccf6ff5f0_5 = $fe_first_val_970462f1f44fa6148022882ccf6ff5f0_5; $fe_n_items_processed_970462f1f44fa6148022882ccf6ff5f0_5 < $fe_max_970462f1f44fa6148022882ccf6ff5f0_5 && ( $fe_reverse_970462f1f44fa6148022882ccf6ff5f0_5 ? $fe_i_970462f1f44fa6148022882ccf6ff5f0_5 >= $fe_last_val_970462f1f44fa6148022882ccf6ff5f0_5 : $fe_i_970462f1f44fa6148022882ccf6ff5f0_5 <= $fe_last_val_970462f1f44fa6148022882ccf6ff5f0_5 ); $fe_reverse_970462f1f44fa6148022882ccf6ff5f0_5 ? $fe_i_970462f1f44fa6148022882ccf6ff5f0_5-- : $fe_i_970462f1f44fa6148022882ccf6ff5f0_5++ )
{
$fe_key_970462f1f44fa6148022882ccf6ff5f0_5 = $fe_array_keys_970462f1f44fa6148022882ccf6ff5f0_5[$fe_i_970462f1f44fa6148022882ccf6ff5f0_5];
$fe_val_970462f1f44fa6148022882ccf6ff5f0_5 = $fe_array_970462f1f44fa6148022882ccf6ff5f0_5[$fe_key_970462f1f44fa6148022882ccf6ff5f0_5];
$vars[$rootNamespace]['link_url'] = $fe_val_970462f1f44fa6148022882ccf6ff5f0_5;
$vars[$rootNamespace]['link_key'] = $fe_key_970462f1f44fa6148022882ccf6ff5f0_5;
$text .= '                ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'name_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['name_list'] : null;
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'link_key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['link_key'] : null;
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
$text .= '                    ';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'name_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['name_list'] : null;
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'link_key', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['link_key'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var1 = compiledFetchAttribute( $var, $var2 );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'd18n',
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
        2 => 'i18n_section',
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
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'item_name', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['item_name'] = $var;
    unset( $var );
}
$text .= '                ';
}
else
{
$text .= '                    ';
unset( $var );
unset( $var1 );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "i18n_hash", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["i18n_hash"] : null;
unset( $var4 );
unset( $var4 );
$var4 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "link_key", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["link_key"] : null;
if (! isset( $var4 ) ) $var4 = NULL;
while ( is_object( $var4 ) and method_exists( $var4, 'templateValue' ) )
    $var4 = $var4->templateValue();
$var3 = compiledFetchAttribute( $var2, $var4 );
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
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( "link_key", $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]["link_key"] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
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
$var = htmlspecialchars( $var1 );
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'item_name', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['item_name'] = $var;
    unset( $var );
}
$text .= '                ';
}
unset( $if_cond );
// if ends

$text .= '                ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'has_access', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['has_access'] = true;
}
$text .= '                
                ';
// if begins
unset( $if_cond );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();
$if_condData = array( 'value' => $if_cond );
$tpl->processOperator( 'ezini_hasvariable',
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
        2 => 'ini_section',
      ),
      2 => false,
    ),
  ),
  1 => 
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
            1 => 'PolicyList_',
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
              2 => 'link_key',
            ),
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'menu.ini',
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $if_condData, false, false );
$if_cond = $if_condData['value'];
unset( $if_condData );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_970462f1f44fa6148022882ccf6ff5f0_4 ) ) $fe_variable_stack_970462f1f44fa6148022882ccf6ff5f0_4 = array();
$fe_variable_stack_970462f1f44fa6148022882ccf6ff5f0_4[] = compact( 'fe_array_970462f1f44fa6148022882ccf6ff5f0_4', 'fe_array_keys_970462f1f44fa6148022882ccf6ff5f0_4', 'fe_n_items_970462f1f44fa6148022882ccf6ff5f0_4', 'fe_n_items_processed_970462f1f44fa6148022882ccf6ff5f0_4', 'fe_i_970462f1f44fa6148022882ccf6ff5f0_4', 'fe_key_970462f1f44fa6148022882ccf6ff5f0_4', 'fe_val_970462f1f44fa6148022882ccf6ff5f0_4', 'fe_offset_970462f1f44fa6148022882ccf6ff5f0_4', 'fe_max_970462f1f44fa6148022882ccf6ff5f0_4', 'fe_reverse_970462f1f44fa6148022882ccf6ff5f0_4', 'fe_first_val_970462f1f44fa6148022882ccf6ff5f0_4', 'fe_last_val_970462f1f44fa6148022882ccf6ff5f0_4' );
unset( $fe_array_970462f1f44fa6148022882ccf6ff5f0_4 );
if (! isset( $fe_array_970462f1f44fa6148022882ccf6ff5f0_4 ) ) $fe_array_970462f1f44fa6148022882ccf6ff5f0_4 = NULL;
while ( is_object( $fe_array_970462f1f44fa6148022882ccf6ff5f0_4 ) and method_exists( $fe_array_970462f1f44fa6148022882ccf6ff5f0_4, 'templateValue' ) )
    $fe_array_970462f1f44fa6148022882ccf6ff5f0_4 = $fe_array_970462f1f44fa6148022882ccf6ff5f0_4->templateValue();
$fe_array_970462f1f44fa6148022882ccf6ff5f0_4Data = array( 'value' => $fe_array_970462f1f44fa6148022882ccf6ff5f0_4 );
$tpl->processOperator( 'ezini',
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
        2 => 'ini_section',
      ),
      2 => false,
    ),
  ),
  1 => 
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
            1 => 'PolicyList_',
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
              2 => 'link_key',
            ),
            2 => false,
          ),
        ),
      ),
      2 => false,
    ),
  ),
  2 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'menu.ini',
      2 => false,
    ),
  ),
),
                       $rootNamespace, $currentNamespace, $fe_array_970462f1f44fa6148022882ccf6ff5f0_4Data, false, false );
$fe_array_970462f1f44fa6148022882ccf6ff5f0_4 = $fe_array_970462f1f44fa6148022882ccf6ff5f0_4Data['value'];
unset( $fe_array_970462f1f44fa6148022882ccf6ff5f0_4Data );
if (! isset( $fe_array_970462f1f44fa6148022882ccf6ff5f0_4 ) ) $fe_array_970462f1f44fa6148022882ccf6ff5f0_4 = NULL;
while ( is_object( $fe_array_970462f1f44fa6148022882ccf6ff5f0_4 ) and method_exists( $fe_array_970462f1f44fa6148022882ccf6ff5f0_4, 'templateValue' ) )
    $fe_array_970462f1f44fa6148022882ccf6ff5f0_4 = $fe_array_970462f1f44fa6148022882ccf6ff5f0_4->templateValue();

$fe_array_keys_970462f1f44fa6148022882ccf6ff5f0_4 = is_array( $fe_array_970462f1f44fa6148022882ccf6ff5f0_4 ) ? array_keys( $fe_array_970462f1f44fa6148022882ccf6ff5f0_4 ) : array();
$fe_n_items_970462f1f44fa6148022882ccf6ff5f0_4 = count( $fe_array_keys_970462f1f44fa6148022882ccf6ff5f0_4 );
$fe_n_items_processed_970462f1f44fa6148022882ccf6ff5f0_4 = 0;
$fe_offset_970462f1f44fa6148022882ccf6ff5f0_4 = 0;
$fe_max_970462f1f44fa6148022882ccf6ff5f0_4 = $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_4 - $fe_offset_970462f1f44fa6148022882ccf6ff5f0_4;
$fe_reverse_970462f1f44fa6148022882ccf6ff5f0_4 = false;
if ( $fe_offset_970462f1f44fa6148022882ccf6ff5f0_4 < 0 || $fe_offset_970462f1f44fa6148022882ccf6ff5f0_4 >= $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_4 )
{
    $fe_offset_970462f1f44fa6148022882ccf6ff5f0_4 = ( $fe_offset_970462f1f44fa6148022882ccf6ff5f0_4 < 0 ) ? 0 : $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_4;
    if ( $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_4 || $fe_offset_970462f1f44fa6148022882ccf6ff5f0_4 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_970462f1f44fa6148022882ccf6ff5f0_4'. Array count: $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_4");   
}
}
if ( $fe_max_970462f1f44fa6148022882ccf6ff5f0_4 < 0 || $fe_offset_970462f1f44fa6148022882ccf6ff5f0_4 + $fe_max_970462f1f44fa6148022882ccf6ff5f0_4 > $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_4 )
{
    if ( $fe_max_970462f1f44fa6148022882ccf6ff5f0_4 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_970462f1f44fa6148022882ccf6ff5f0_4");
    $fe_max_970462f1f44fa6148022882ccf6ff5f0_4 = $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_4 - $fe_offset_970462f1f44fa6148022882ccf6ff5f0_4;
}
if ( $fe_reverse_970462f1f44fa6148022882ccf6ff5f0_4 )
{
    $fe_first_val_970462f1f44fa6148022882ccf6ff5f0_4 = $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_4 - 1 - $fe_offset_970462f1f44fa6148022882ccf6ff5f0_4;
    $fe_last_val_970462f1f44fa6148022882ccf6ff5f0_4  = 0;
}
else
{
    $fe_first_val_970462f1f44fa6148022882ccf6ff5f0_4 = $fe_offset_970462f1f44fa6148022882ccf6ff5f0_4;
    $fe_last_val_970462f1f44fa6148022882ccf6ff5f0_4  = $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_4 - 1;
}
// foreach
for ( $fe_i_970462f1f44fa6148022882ccf6ff5f0_4 = $fe_first_val_970462f1f44fa6148022882ccf6ff5f0_4; $fe_n_items_processed_970462f1f44fa6148022882ccf6ff5f0_4 < $fe_max_970462f1f44fa6148022882ccf6ff5f0_4 && ( $fe_reverse_970462f1f44fa6148022882ccf6ff5f0_4 ? $fe_i_970462f1f44fa6148022882ccf6ff5f0_4 >= $fe_last_val_970462f1f44fa6148022882ccf6ff5f0_4 : $fe_i_970462f1f44fa6148022882ccf6ff5f0_4 <= $fe_last_val_970462f1f44fa6148022882ccf6ff5f0_4 ); $fe_reverse_970462f1f44fa6148022882ccf6ff5f0_4 ? $fe_i_970462f1f44fa6148022882ccf6ff5f0_4-- : $fe_i_970462f1f44fa6148022882ccf6ff5f0_4++ )
{
$fe_key_970462f1f44fa6148022882ccf6ff5f0_4 = $fe_array_keys_970462f1f44fa6148022882ccf6ff5f0_4[$fe_i_970462f1f44fa6148022882ccf6ff5f0_4];
$fe_val_970462f1f44fa6148022882ccf6ff5f0_4 = $fe_array_970462f1f44fa6148022882ccf6ff5f0_4[$fe_key_970462f1f44fa6148022882ccf6ff5f0_4];
$vars[$rootNamespace]['policy'] = $fe_val_970462f1f44fa6148022882ccf6ff5f0_4;
$text .= '                        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
if( is_string( $if_cond1 ) )
{
  $if_cond = ( strpos( $if_cond1, "/" ) !== false );
}
else if ( is_array( $if_cond1 ) )
{
  $if_cond = in_array( "/", $if_cond1 );
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
$text .= '                            ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( is_string( $var1 ) )
{
	$var = explode( "/", $var1 );
}
else if ( is_array( $var1 ) )
{
	$var = array( array_slice( $var1, 0, "/" ), array_slice( $var1, "/" ) );
}
else
{
	$var = null;
}
unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'check', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['check'] = $var;
    unset( $var );
}
$text .= '                            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'check', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['check'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 0 );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'check', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['check'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 1 );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
$if_cond1 = call_user_func_array( array( new eZUserFunctionCollection(), 'hasAccessTo' ),
  array(     'module' => $if_cond2,
    'function' => $if_cond3,
    'user_id' => null ) );
$if_cond1 = isset( $if_cond1['result'] ) ? $if_cond1['result'] : null;
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
$text .= '                                ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'has_access', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['has_access'] = false;
}
$text .= '                                ';
break;

$text .= '                            ';
}
unset( $if_cond );
// if ends

$text .= '                        ';
}
else
{
$text .= '                            ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'policy', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['policy'] : null;
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
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'check', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['check'] = $var;
    unset( $var );
}
$text .= '                            ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'check', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['check'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'check', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['check'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'can_read' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
if ( !$if_cond2 )
    $if_cond1 = false;
else if ( !$if_cond3 )
    $if_cond1 = false;
else
    $if_cond1 = $if_cond3;
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
$text .= '                                ';
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'has_access', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['has_access'] = false;
}
$text .= '                                ';
break;

$text .= '                            ';
}
unset( $if_cond );
// if ends

$text .= '                        ';
}
unset( $if_cond );
// if ends

$text .= '                    ';
$fe_n_items_processed_970462f1f44fa6148022882ccf6ff5f0_4++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_970462f1f44fa6148022882ccf6ff5f0_4 ) ) extract( array_pop( $fe_variable_stack_970462f1f44fa6148022882ccf6ff5f0_4 ) );

else
{

unset( $fe_array_970462f1f44fa6148022882ccf6ff5f0_4 );

unset( $fe_array_keys_970462f1f44fa6148022882ccf6ff5f0_4 );

unset( $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_4 );

unset( $fe_n_items_processed_970462f1f44fa6148022882ccf6ff5f0_4 );

unset( $fe_i_970462f1f44fa6148022882ccf6ff5f0_4 );

unset( $fe_key_970462f1f44fa6148022882ccf6ff5f0_4 );

unset( $fe_val_970462f1f44fa6148022882ccf6ff5f0_4 );

unset( $fe_offset_970462f1f44fa6148022882ccf6ff5f0_4 );

unset( $fe_max_970462f1f44fa6148022882ccf6ff5f0_4 );

unset( $fe_reverse_970462f1f44fa6148022882ccf6ff5f0_4 );

unset( $fe_first_val_970462f1f44fa6148022882ccf6ff5f0_4 );

unset( $fe_last_val_970462f1f44fa6148022882ccf6ff5f0_4 );

unset( $fe_variable_stack_970462f1f44fa6148022882ccf6ff5f0_4 );

}

// foreach ends
$text .= '                ';
}
unset( $if_cond );
// if ends

$text .= '                ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'has_access', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['has_access'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                    <li';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'current_uri_string', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['current_uri_string'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'link_url', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['link_url'] : null;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
$if_cond3 = $if_cond1;
if ( is_string( $if_cond3 ) )
{
  if ( $if_cond2 == '' )
    $if_cond = false;
  else
    $if_cond = ( strpos( $if_cond3, $if_cond2 ) === 0 );
}
else if( is_array( $if_cond3 ) )
{
  $if_cond = true;
if ( $if_cond3[0] != $if_cond2)
    $if_cond = false;
}unset( $if_cond1, $if_cond2, $if_cond3 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= ' class="current"';
}
unset( $if_cond );
// if ends

$text .= '><div><a href=';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'link_url', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['link_url'] : null;
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
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item_name', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item_name'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</a></div></li>
                ';
}
else
{
$text .= '                    <li class="disabled-no-access"><div><span class="disabled">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'item_name', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['item_name'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '</span></div></li>
                ';
}
unset( $if_cond );
// if ends

$text .= '            ';
$fe_n_items_processed_970462f1f44fa6148022882ccf6ff5f0_5++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_970462f1f44fa6148022882ccf6ff5f0_5 ) ) extract( array_pop( $fe_variable_stack_970462f1f44fa6148022882ccf6ff5f0_5 ) );

else
{

unset( $fe_array_970462f1f44fa6148022882ccf6ff5f0_5 );

unset( $fe_array_keys_970462f1f44fa6148022882ccf6ff5f0_5 );

unset( $fe_n_items_970462f1f44fa6148022882ccf6ff5f0_5 );

unset( $fe_n_items_processed_970462f1f44fa6148022882ccf6ff5f0_5 );

unset( $fe_i_970462f1f44fa6148022882ccf6ff5f0_5 );

unset( $fe_key_970462f1f44fa6148022882ccf6ff5f0_5 );

unset( $fe_val_970462f1f44fa6148022882ccf6ff5f0_5 );

unset( $fe_offset_970462f1f44fa6148022882ccf6ff5f0_5 );

unset( $fe_max_970462f1f44fa6148022882ccf6ff5f0_5 );

unset( $fe_reverse_970462f1f44fa6148022882ccf6ff5f0_5 );

unset( $fe_first_val_970462f1f44fa6148022882ccf6ff5f0_5 );

unset( $fe_last_val_970462f1f44fa6148022882ccf6ff5f0_5 );

unset( $fe_variable_stack_970462f1f44fa6148022882ccf6ff5f0_5 );

}

// foreach ends
$text .= '            </ul>
        ';
}
unset( $if_cond );
// if ends

$text .= '
        </div></div></div>
    ';
}
unset( $if_cond );
// if ends

$text .= '    ';
// undef $url_list
$tpl->unsetLocalVariable( 'url_list', $rootNamespace );

// undef $menu_name
$tpl->unsetLocalVariable( 'menu_name', $rootNamespace );

// undef $check
$tpl->unsetLocalVariable( 'check', $rootNamespace );

// undef $has_access
$tpl->unsetLocalVariable( 'has_access', $rootNamespace );

}
unset( $if_cond );
// if ends


$setArray = $oldSetArray_07505e87bd24c47176c6cc93ee140606;
$tpl->Level--;
?>
