<?php
// URI:       design:parts/content/menu.tpl
// Filename:  design/admin2/templates/parts/content/menu.tpl
// Timestamp: 1285696610 (Tue Sep 28 10:56:50 MST 2010)
$oldSetArray_e7eeeb457926fb6885311e35886f060f = isset( $setArray ) ? $setArray : array();
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

$text .= '<div id="content-tree">

<div class="box-header"><div class="box-ml">
<h4>Content structure</h4>
</div></div>
<div class="box-bc"><div class="box-ml"><div class="box-content">


<div id="contentstructure">';
// if begins
$if_cond = true;
if ( $if_cond )
{
$text .= '    ';
$oldRestoreIncludeArray_de1a14371dbc99beb083b56a11811c69 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezflow_site/cache/template/compiled/content_structure_menu_dynamic-9f9f966fb6dcf756777cd6c4260765d0.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/contentstructuremenu/content_structure_menu_dynamic.tpl' );
include( '' . 'var/ezflow_site/cache/template/compiled/content_structure_menu_dynamic-9f9f966fb6dcf756777cd6c4260765d0.php' );
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
$tpl->processURI( 'design/admin2/templates/contentstructuremenu/content_structure_menu_dynamic.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_de1a14371dbc99beb083b56a11811c69;

}
else
{
$text .= '    ';
$oldRestoreIncludeArray_b1b11c59980c54c206a36e8e47752d65 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezflow_site/cache/template/compiled/content_structure_menu-ec7e79a113301dcff74de113524c71e6.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/standard/templates/contentstructuremenu/content_structure_menu.tpl' );
include( '' . 'var/ezflow_site/cache/template/compiled/content_structure_menu-ec7e79a113301dcff74de113524c71e6.php' );
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
$tpl->processURI( 'design/standard/templates/contentstructuremenu/content_structure_menu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_b1b11c59980c54c206a36e8e47752d65;

}
unset( $if_cond );
// if ends

$text .= '</div>

';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'ui_context', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['ui_context'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) != ( 'browse' ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<div id="trash">
<a class="image-text" href=';
unset( $var );
unset( $var1 );
$var1 = ( '/content/trash/' . '2' );
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

$text .= ' title="View and manage the contents of the trash bin."><img src="/design/admin2/images/trash-icon-16x16.gif" width="16" height="16" alt="Trash" />&nbsp;<span>Trash</span></a>
</div>';
}
unset( $if_cond );
// if ends

$text .= '



</div></div></div>

</div>

';
$oldRestoreIncludeArray_6ab86ee11cae62eb8ae0120863ca6aa8 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['ini_section'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'ini_section', $vars[$currentNamespace]['ini_section'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['ini_section'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'ini_section', 'unset' );

$vars[$currentNamespace]['ini_section'] = 'Leftmenu_content';
if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezflow_site/cache/template/compiled/ini_menu-11baa9786a1f4a3b564250e0086ae09b.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'design/admin2/templates/parts/ini_menu.tpl' );
include( '' . 'var/ezflow_site/cache/template/compiled/ini_menu-11baa9786a1f4a3b564250e0086ae09b.php' );
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
$tpl->processURI( 'design/admin2/templates/parts/ini_menu.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_6ab86ee11cae62eb8ae0120863ca6aa8;

$text .= '

<div id="widthcontrol-links" class="widthcontrol">
<p>';
$textElements = array();
$tpl->processFunction( 'switch', $textElements,
                       array (
  0 => 
  array (
    0 => 2,
    1 => false,
    2 => '    ',
    3 => 
    array (
      0 => 
      array (
        0 => 37,
        1 => 51,
        2 => 1460,
      ),
      1 => 
      array (
        0 => 38,
        1 => 4,
        2 => 1465,
      ),
      2 => 'design/admin2/templates/parts/content/menu.tpl',
    ),
  ),
  1 => 
  array (
    0 => 4,
    1 => 
    array (
      0 => 
      array (
        0 => 2,
        1 => false,
        2 => '    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 38,
            1 => 23,
            2 => 1486,
          ),
          1 => 
          array (
            0 => 39,
            1 => 12,
            2 => 1499,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      1 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 39,
            1 => 12,
            2 => 1500,
          ),
          1 => 
          array (
            0 => 39,
            1 => 68,
            2 => 1556,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      2 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 39,
            1 => 68,
            2 => 1557,
          ),
          1 => 
          array (
            0 => 39,
            1 => 76,
            2 => 1565,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      3 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to small size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/content/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 39,
            1 => 76,
            2 => 1566,
          ),
          1 => 
          array (
            0 => 39,
            1 => 161,
            2 => 1651,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      4 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 39,
            1 => 161,
            2 => 1652,
          ),
          1 => 
          array (
            0 => 39,
            1 => 163,
            2 => 1654,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      5 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/content/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 39,
            1 => 163,
            2 => 1655,
          ),
          1 => 
          array (
            0 => 39,
            1 => 212,
            2 => 1704,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      6 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <span class="current">',
        3 => 
        array (
          0 => 
          array (
            0 => 39,
            1 => 212,
            2 => 1705,
          ),
          1 => 
          array (
            0 => 40,
            1 => 26,
            2 => 1736,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      7 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/content/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 40,
            1 => 26,
            2 => 1737,
          ),
          1 => 
          array (
            0 => 40,
            1 => 76,
            2 => 1787,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      8 => 
      array (
        0 => 2,
        1 => false,
        2 => '</span>
    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 40,
            1 => 76,
            2 => 1788,
          ),
          1 => 
          array (
            0 => 41,
            1 => 12,
            2 => 1808,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      9 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 41,
            1 => 12,
            2 => 1809,
          ),
          1 => 
          array (
            0 => 41,
            1 => 68,
            2 => 1865,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      10 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 41,
            1 => 68,
            2 => 1866,
          ),
          1 => 
          array (
            0 => 41,
            1 => 76,
            2 => 1874,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      11 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to large size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/content/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 41,
            1 => 76,
            2 => 1875,
          ),
          1 => 
          array (
            0 => 41,
            1 => 161,
            2 => 1960,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      12 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 41,
            1 => 161,
            2 => 1961,
          ),
          1 => 
          array (
            0 => 41,
            1 => 163,
            2 => 1963,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      13 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/content/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 41,
            1 => 163,
            2 => 1964,
          ),
          1 => 
          array (
            0 => 41,
            1 => 212,
            2 => 2013,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      14 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    ',
        3 => 
        array (
          0 => 
          array (
            0 => 41,
            1 => 212,
            2 => 2014,
          ),
          1 => 
          array (
            0 => 42,
            1 => 4,
            2 => 2023,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
    ),
    2 => 'case',
    3 => 
    array (
      'match' => 
      array (
        0 => 
        array (
          0 => 1,
          1 => 'medium',
          2 => false,
        ),
      ),
    ),
    4 => 
    array (
      0 => 
      array (
        0 => 38,
        1 => 4,
        2 => 1466,
      ),
      1 => 
      array (
        0 => 38,
        1 => 23,
        2 => 1485,
      ),
      2 => 'design/admin2/templates/parts/content/menu.tpl',
    ),
  ),
  2 => 
  array (
    0 => 2,
    1 => false,
    2 => '
    ',
    3 => 
    array (
      0 => 
      array (
        0 => 42,
        1 => 8,
        2 => 2030,
      ),
      1 => 
      array (
        0 => 44,
        1 => 4,
        2 => 2036,
      ),
      2 => 'design/admin2/templates/parts/content/menu.tpl',
    ),
  ),
  3 => 
  array (
    0 => 4,
    1 => 
    array (
      0 => 
      array (
        0 => 2,
        1 => false,
        2 => '    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 44,
            1 => 22,
            2 => 2056,
          ),
          1 => 
          array (
            0 => 45,
            1 => 12,
            2 => 2069,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      1 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 45,
            1 => 12,
            2 => 2070,
          ),
          1 => 
          array (
            0 => 45,
            1 => 68,
            2 => 2126,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      2 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 45,
            1 => 68,
            2 => 2127,
          ),
          1 => 
          array (
            0 => 45,
            1 => 76,
            2 => 2135,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      3 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to small size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/content/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 45,
            1 => 76,
            2 => 2136,
          ),
          1 => 
          array (
            0 => 45,
            1 => 161,
            2 => 2221,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      4 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 45,
            1 => 161,
            2 => 2222,
          ),
          1 => 
          array (
            0 => 45,
            1 => 163,
            2 => 2224,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      5 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/content/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 45,
            1 => 163,
            2 => 2225,
          ),
          1 => 
          array (
            0 => 45,
            1 => 212,
            2 => 2274,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      6 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 45,
            1 => 212,
            2 => 2275,
          ),
          1 => 
          array (
            0 => 46,
            1 => 12,
            2 => 2292,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      7 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 46,
            1 => 12,
            2 => 2293,
          ),
          1 => 
          array (
            0 => 46,
            1 => 69,
            2 => 2350,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      8 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 46,
            1 => 69,
            2 => 2351,
          ),
          1 => 
          array (
            0 => 46,
            1 => 77,
            2 => 2359,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      9 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to medium size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/content/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 46,
            1 => 77,
            2 => 2360,
          ),
          1 => 
          array (
            0 => 46,
            1 => 163,
            2 => 2446,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      10 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 46,
            1 => 163,
            2 => 2447,
          ),
          1 => 
          array (
            0 => 46,
            1 => 165,
            2 => 2449,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      11 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/content/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 46,
            1 => 165,
            2 => 2450,
          ),
          1 => 
          array (
            0 => 46,
            1 => 215,
            2 => 2500,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      12 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <span class="current">',
        3 => 
        array (
          0 => 
          array (
            0 => 46,
            1 => 215,
            2 => 2501,
          ),
          1 => 
          array (
            0 => 47,
            1 => 26,
            2 => 2532,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      13 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/content/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 47,
            1 => 26,
            2 => 2533,
          ),
          1 => 
          array (
            0 => 47,
            1 => 75,
            2 => 2582,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      14 => 
      array (
        0 => 2,
        1 => false,
        2 => '</span>
    ',
        3 => 
        array (
          0 => 
          array (
            0 => 47,
            1 => 75,
            2 => 2583,
          ),
          1 => 
          array (
            0 => 48,
            1 => 4,
            2 => 2595,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
    ),
    2 => 'case',
    3 => 
    array (
      'match' => 
      array (
        0 => 
        array (
          0 => 1,
          1 => 'large',
          2 => false,
        ),
      ),
    ),
    4 => 
    array (
      0 => 
      array (
        0 => 44,
        1 => 4,
        2 => 2037,
      ),
      1 => 
      array (
        0 => 44,
        1 => 22,
        2 => 2055,
      ),
      2 => 'design/admin2/templates/parts/content/menu.tpl',
    ),
  ),
  4 => 
  array (
    0 => 2,
    1 => false,
    2 => '
    ',
    3 => 
    array (
      0 => 
      array (
        0 => 48,
        1 => 8,
        2 => 2602,
      ),
      1 => 
      array (
        0 => 50,
        1 => 4,
        2 => 2608,
      ),
      2 => 'design/admin2/templates/parts/content/menu.tpl',
    ),
  ),
  5 => 
  array (
    0 => 4,
    1 => 
    array (
      0 => 
      array (
        0 => 2,
        1 => false,
        2 => '    <span class="current">',
        3 => 
        array (
          0 => 
          array (
            0 => 50,
            1 => 32,
            2 => 2638,
          ),
          1 => 
          array (
            0 => 51,
            1 => 26,
            2 => 2665,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      1 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/content/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 51,
            1 => 26,
            2 => 2666,
          ),
          1 => 
          array (
            0 => 51,
            1 => 75,
            2 => 2715,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      2 => 
      array (
        0 => 2,
        1 => false,
        2 => '</span>
    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 51,
            1 => 75,
            2 => 2716,
          ),
          1 => 
          array (
            0 => 52,
            1 => 12,
            2 => 2736,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      3 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 52,
            1 => 12,
            2 => 2737,
          ),
          1 => 
          array (
            0 => 52,
            1 => 69,
            2 => 2794,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      4 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 52,
            1 => 69,
            2 => 2795,
          ),
          1 => 
          array (
            0 => 52,
            1 => 77,
            2 => 2803,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      5 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to medium size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/content/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 52,
            1 => 77,
            2 => 2804,
          ),
          1 => 
          array (
            0 => 52,
            1 => 163,
            2 => 2890,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      6 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 52,
            1 => 163,
            2 => 2891,
          ),
          1 => 
          array (
            0 => 52,
            1 => 165,
            2 => 2893,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      7 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/content/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 52,
            1 => 165,
            2 => 2894,
          ),
          1 => 
          array (
            0 => 52,
            1 => 215,
            2 => 2944,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      8 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 52,
            1 => 215,
            2 => 2945,
          ),
          1 => 
          array (
            0 => 53,
            1 => 12,
            2 => 2962,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      9 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 53,
            1 => 12,
            2 => 2963,
          ),
          1 => 
          array (
            0 => 53,
            1 => 68,
            2 => 3019,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      10 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 53,
            1 => 68,
            2 => 3020,
          ),
          1 => 
          array (
            0 => 53,
            1 => 76,
            2 => 3028,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      11 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to large size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/content/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 53,
            1 => 76,
            2 => 3029,
          ),
          1 => 
          array (
            0 => 53,
            1 => 161,
            2 => 3114,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      12 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 53,
            1 => 161,
            2 => 3115,
          ),
          1 => 
          array (
            0 => 53,
            1 => 163,
            2 => 3117,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      13 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/content/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 53,
            1 => 163,
            2 => 3118,
          ),
          1 => 
          array (
            0 => 53,
            1 => 212,
            2 => 3167,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      14 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    ',
        3 => 
        array (
          0 => 
          array (
            0 => 53,
            1 => 212,
            2 => 3168,
          ),
          1 => 
          array (
            0 => 54,
            1 => 4,
            2 => 3177,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
    ),
    2 => 'case',
    3 => 
    array (
      'in' => 
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
                1 => 'small',
                2 => false,
              ),
            ),
            2 => 
            array (
              0 => 
              array (
                0 => 1,
                1 => '',
                2 => false,
              ),
            ),
          ),
          2 => false,
        ),
      ),
    ),
    4 => 
    array (
      0 => 
      array (
        0 => 50,
        1 => 4,
        2 => 2609,
      ),
      1 => 
      array (
        0 => 50,
        1 => 32,
        2 => 2637,
      ),
      2 => 'design/admin2/templates/parts/content/menu.tpl',
    ),
  ),
  6 => 
  array (
    0 => 2,
    1 => false,
    2 => '
    ',
    3 => 
    array (
      0 => 
      array (
        0 => 54,
        1 => 8,
        2 => 3184,
      ),
      1 => 
      array (
        0 => 56,
        1 => 4,
        2 => 3190,
      ),
      2 => 'design/admin2/templates/parts/content/menu.tpl',
    ),
  ),
  7 => 
  array (
    0 => 4,
    1 => 
    array (
      0 => 
      array (
        0 => 2,
        1 => false,
        2 => '    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 56,
            1 => 8,
            2 => 3196,
          ),
          1 => 
          array (
            0 => 57,
            1 => 12,
            2 => 3209,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      1 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 57,
            1 => 12,
            2 => 3210,
          ),
          1 => 
          array (
            0 => 57,
            1 => 68,
            2 => 3266,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      2 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 57,
            1 => 68,
            2 => 3267,
          ),
          1 => 
          array (
            0 => 57,
            1 => 76,
            2 => 3275,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      3 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to small size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/content/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 57,
            1 => 76,
            2 => 3276,
          ),
          1 => 
          array (
            0 => 57,
            1 => 161,
            2 => 3361,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      4 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 57,
            1 => 161,
            2 => 3362,
          ),
          1 => 
          array (
            0 => 57,
            1 => 163,
            2 => 3364,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      5 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Small',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/content/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 57,
            1 => 163,
            2 => 3365,
          ),
          1 => 
          array (
            0 => 57,
            1 => 212,
            2 => 3414,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      6 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 57,
            1 => 212,
            2 => 3415,
          ),
          1 => 
          array (
            0 => 58,
            1 => 12,
            2 => 3432,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      7 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 58,
            1 => 12,
            2 => 3433,
          ),
          1 => 
          array (
            0 => 58,
            1 => 69,
            2 => 3490,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      8 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 58,
            1 => 69,
            2 => 3491,
          ),
          1 => 
          array (
            0 => 58,
            1 => 77,
            2 => 3499,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      9 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to medium size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/content/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 58,
            1 => 77,
            2 => 3500,
          ),
          1 => 
          array (
            0 => 58,
            1 => 163,
            2 => 3586,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      10 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 58,
            1 => 163,
            2 => 3587,
          ),
          1 => 
          array (
            0 => 58,
            1 => 165,
            2 => 3589,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      11 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Medium',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/content/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 58,
            1 => 165,
            2 => 3590,
          ),
          1 => 
          array (
            0 => 58,
            1 => 215,
            2 => 3640,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      12 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    <a href=',
        3 => 
        array (
          0 => 
          array (
            0 => 58,
            1 => 215,
            2 => 3641,
          ),
          1 => 
          array (
            0 => 59,
            1 => 12,
            2 => 3658,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      13 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => '/user/preferences/set/admin_left_menu_size/large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'ezurl',
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 59,
            1 => 12,
            2 => 3659,
          ),
          1 => 
          array (
            0 => 59,
            1 => 68,
            2 => 3715,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      14 => 
      array (
        0 => 2,
        1 => false,
        2 => ' title="',
        3 => 
        array (
          0 => 
          array (
            0 => 59,
            1 => 68,
            2 => 3716,
          ),
          1 => 
          array (
            0 => 59,
            1 => 76,
            2 => 3724,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      15 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Change the left menu width to large size.',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/content/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 59,
            1 => 76,
            2 => 3725,
          ),
          1 => 
          array (
            0 => 59,
            1 => 161,
            2 => 3810,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      16 => 
      array (
        0 => 2,
        1 => false,
        2 => '">',
        3 => 
        array (
          0 => 
          array (
            0 => 59,
            1 => 161,
            2 => 3811,
          ),
          1 => 
          array (
            0 => 59,
            1 => 163,
            2 => 3813,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      17 => 
      array (
        0 => 3,
        1 => false,
        2 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'Large',
            2 => false,
          ),
          1 => 
          array (
            0 => 6,
            1 => 
            array (
              0 => 'i18n',
              1 => 
              array (
                0 => 
                array (
                  0 => 1,
                  1 => 'design/admin/parts/content/menu',
                  2 => false,
                ),
              ),
            ),
            2 => false,
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            0 => 59,
            1 => 163,
            2 => 3814,
          ),
          1 => 
          array (
            0 => 59,
            1 => 212,
            2 => 3863,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
      18 => 
      array (
        0 => 2,
        1 => false,
        2 => '</a>
    ',
        3 => 
        array (
          0 => 
          array (
            0 => 59,
            1 => 212,
            2 => 3864,
          ),
          1 => 
          array (
            0 => 60,
            1 => 4,
            2 => 3873,
          ),
          2 => 'design/admin2/templates/parts/content/menu.tpl',
        ),
      ),
    ),
    2 => 'case',
    3 => 
    array (
    ),
    4 => 
    array (
      0 => 
      array (
        0 => 56,
        1 => 4,
        2 => 3191,
      ),
      1 => 
      array (
        0 => 56,
        1 => 8,
        2 => 3195,
      ),
      2 => 'design/admin2/templates/parts/content/menu.tpl',
    ),
  ),
  8 => 
  array (
    0 => 2,
    1 => false,
    2 => false,
    3 => 
    array (
      0 => 
      array (
        0 => 60,
        1 => 8,
        2 => 3880,
      ),
      1 => 
      array (
        0 => 61,
        1 => 0,
        2 => 3881,
      ),
      2 => 'design/admin2/templates/parts/content/menu.tpl',
    ),
  ),
),
                       array (
  'match' => 
  array (
    0 => 
    array (
      0 => 6,
      1 => 
      array (
        0 => 'ezpreference',
        1 => 
        array (
          0 => 
          array (
            0 => 1,
            1 => 'admin_left_menu_size',
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
    0 => 37,
    1 => 0,
    2 => 1408,
  ),
  1 => 
  array (
    0 => 37,
    1 => 51,
    2 => 1459,
  ),
  2 => 'design/admin2/templates/parts/content/menu.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '</p>
</div>


<div id="widthcontrol-handler" class="hide">
<div class="widthcontrol-grippy"></div>
</div>

<!-- script type="text/javascript" src="/design/admin2/javascript/leftmenu_widthcontrol.js" charset="utf-8"></script -->
';

$setArray = $oldSetArray_e7eeeb457926fb6885311e35886f060f;
$tpl->Level--;
?>
