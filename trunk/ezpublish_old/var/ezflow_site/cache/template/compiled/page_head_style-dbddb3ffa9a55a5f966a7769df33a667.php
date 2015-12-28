<?php
// URI:       design/admin2/templates/page_head_style.tpl
// Filename:  design/admin2/templates/page_head_style.tpl
// Timestamp: 1285696606 (Tue Sep 28 10:56:46 MST 2010)
$oldSetArray_99d717b76c3daecb1a1be0258333d24f = isset( $setArray ) ? $setArray : array();
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
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'load_css_file_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['load_css_file_list'] : null;
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
// def $load_css_file_list
if ( $tpl->hasVariable( 'load_css_file_list', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'load_css_file_list' is already defined.", array (
  0 => 
  array (
    0 => 4,
    1 => 4,
    2 => 106,
  ),
  1 => 
  array (
    0 => 4,
    1 => 36,
    2 => 138,
  ),
  2 => 'design/admin2/templates/page_head_style.tpl',
) );
    $tpl->setVariable( 'load_css_file_list', true, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'load_css_file_list', true, $rootNamespace );
}

}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'load_main_css', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['load_main_css'] : null;
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
// def $load_main_css
if ( $tpl->hasVariable( 'load_main_css', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'load_main_css' is already defined.", array (
  0 => 
  array (
    0 => 8,
    1 => 4,
    2 => 184,
  ),
  1 => 
  array (
    0 => 8,
    1 => 31,
    2 => 211,
  ),
  2 => 'design/admin2/templates/page_head_style.tpl',
) );
    $tpl->setVariable( 'load_main_css', true, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'load_main_css', true, $rootNamespace );
}

}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'admin_theme', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['admin_theme'] : null;
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
// def $admin_theme
if ( $tpl->hasVariable( 'admin_theme', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'admin_theme' is already defined.", array (
  0 => 
  array (
    0 => 12,
    1 => 4,
    2 => 255,
  ),
  1 => 
  array (
    0 => 12,
    1 => 25,
    2 => 276,
  ),
  2 => 'design/admin2/templates/page_head_style.tpl',
) );
    $tpl->setVariable( 'admin_theme', '', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'admin_theme', '', $rootNamespace );
}

}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'admin_theme', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['admin_theme'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
// def $admin_theme_css
unset( $var );
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'admin_theme', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['admin_theme'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = ( 'theme/' . $var2 . '.css' );
unset( $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'admin_theme_css', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'admin_theme_css' is already defined.", array (
  0 => 
  array (
    0 => 16,
    1 => 4,
    2 => 308,
  ),
  1 => 
  array (
    0 => 16,
    1 => 67,
    2 => 371,
  ),
  2 => 'design/admin2/templates/page_head_style.tpl',
) );
    $tpl->setVariable( 'admin_theme_css', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'admin_theme_css', $var, $rootNamespace );
}

}
else
{
$text .= '    ';
// def $admin_theme_css
if ( $tpl->hasVariable( 'admin_theme_css', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'admin_theme_css' is already defined.", array (
  0 => 
  array (
    0 => 18,
    1 => 4,
    2 => 385,
  ),
  1 => 
  array (
    0 => 18,
    1 => 46,
    2 => 427,
  ),
  2 => 'design/admin2/templates/page_head_style.tpl',
) );
    $tpl->setVariable( 'admin_theme_css', 'theme/rounded.css', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'admin_theme_css', 'theme/rounded.css', $rootNamespace );
}

$text .= '    ';
// def $admin_ydt_css
if ( $tpl->hasVariable( 'admin_ydt_css', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'admin_ydt_css' is already defined.", array (
  0 => 
  array (
    0 => 19,
    1 => 4,
    2 => 434,
  ),
  1 => 
  array (
    0 => 19,
    1 => 50,
    2 => 480,
  ),
  2 => 'design/admin2/templates/page_head_style.tpl',
) );
    $tpl->setVariable( 'admin_ydt_css', 'theme/yui_datatable.css', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'admin_ydt_css', 'theme/yui_datatable.css', $rootNamespace );
}

$text .= '    ';
// def $admin_ymn_css
if ( $tpl->hasVariable( 'admin_ymn_css', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'admin_ymn_css' is already defined.", array (
  0 => 
  array (
    0 => 20,
    1 => 4,
    2 => 487,
  ),
  1 => 
  array (
    0 => 20,
    1 => 45,
    2 => 528,
  ),
  2 => 'design/admin2/templates/page_head_style.tpl',
) );
    $tpl->setVariable( 'admin_ymn_css', 'theme/yui_menu.css', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'admin_ymn_css', 'theme/yui_menu.css', $rootNamespace );
}

$text .= '    ';
// def $admin_yct_css
if ( $tpl->hasVariable( 'admin_yct_css', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'admin_yct_css' is already defined.", array (
  0 => 
  array (
    0 => 21,
    1 => 4,
    2 => 535,
  ),
  1 => 
  array (
    0 => 21,
    1 => 50,
    2 => 581,
  ),
  2 => 'design/admin2/templates/page_head_style.tpl',
) );
    $tpl->setVariable( 'admin_yct_css', 'theme/yui_container.css', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'admin_yct_css', 'theme/yui_container.css', $rootNamespace );
}

}
unset( $if_cond );
// if ends

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'load_main_css', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['load_main_css'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '
  
  ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'load_css_file_list', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['load_css_file_list'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    ';
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezcss_load',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'array',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'core.css',
            2 => false,
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'debug.css',
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'pagelayout.css',
            2 => false,
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'content.css',
            2 => false,
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'admin_theme_css',
            ),
            2 => false,
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'admin_ydt_css',
            ),
            2 => false,
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'admin_ymn_css',
            ),
            2 => false,
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'admin_yct_css',
            ),
            2 => false,
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezini',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'StylesheetSettings',
                  2 => false,
                ),
              ),
              2 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'BackendCSSFileList',
                  2 => false,
                ),
              ),
              3 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design.ini',
                  2 => false,
                ),
              ),
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
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
  ';
}
else
{
$text .= '    ';
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezcss_load',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'array',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'core.css',
            2 => false,
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'debug.css',
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'pagelayout.css',
            2 => false,
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'content.css',
            2 => false,
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'admin_theme_css',
            ),
            2 => false,
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'admin_ydt_css',
            ),
            2 => false,
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'admin_ymn_css',
            ),
            2 => false,
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            0 => 4,
            1 => 
            array (
              0 => '',
              1 => 2,
              2 => 'admin_yct_css',
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
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '
  ';
}
unset( $if_cond );
// if ends

$text .= '
  ';
$oldRestoreIncludeArray_7fa70c78c7243443149af2d38b380f0b = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezflow_site/cache/template/compiled/page_head_style_inline-d33bbf89ec49dad03f7fdf476005b308.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/page_head_style_inline.tpl' );
include( '' . 'var/ezflow_site/cache/template/compiled/page_head_style_inline-d33bbf89ec49dad03f7fdf476005b308.php' );
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
$tpl->processURI( 'design/admin2/templates/page_head_style_inline.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_7fa70c78c7243443149af2d38b380f0b;

}
else
{
$text .= '
  
  ';
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezcss_load',
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

$text .= '
';
}
unset( $if_cond );
// if ends


$setArray = $oldSetArray_99d717b76c3daecb1a1be0258333d24f;
$tpl->Level--;
?>
