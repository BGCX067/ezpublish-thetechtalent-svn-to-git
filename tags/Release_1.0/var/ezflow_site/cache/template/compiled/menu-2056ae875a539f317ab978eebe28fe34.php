<?php
// URI:       design:parts/my/menu.tpl
// Filename:  design/admin2/templates/parts/my/menu.tpl
// Timestamp: 1285696604 (Tue Sep 28 10:56:44 MST 2010)
$oldSetArray_2aa3ff9c2071a0aaad9bf8af27322cc6 = isset( $setArray ) ? $setArray : array();
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

$oldRestoreIncludeArray_060d16977f81eff3d7095fde1649931a = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['ini_section'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'ini_section', $vars[$currentNamespace]['ini_section'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['ini_section'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'ini_section', 'unset' );

$vars[$currentNamespace]['ini_section'] = 'Leftmenu_my';
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['i18n_hash'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'i18n_hash', $vars[$currentNamespace]['i18n_hash'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['i18n_hash'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'i18n_hash', 'unset' );

$vars[$currentNamespace]['i18n_hash'] = array (
  'my_account' => 'My account',
  'my_drafts' => 'My drafts',
  'my_pending' => 'My pending items',
  'my_notifications' => 'My notification settings',
  'my_bookmarks' => 'My bookmarks',
  'collaboration' => 'Collaboration',
  'change_password' => 'Change password',
  'my_shopping_basket' => 'My shopping basket',
  'my_wish_list' => 'My wish list',
  'edit_profile' => 'Edit profile',
  'dashboard' => 'Dashboard',
);
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
$restoreIncludeArray = $oldRestoreIncludeArray_060d16977f81eff3d7095fde1649931a;

$text .= '
';
// def $custom_root_node
unset( $var );
$var = call_user_func_array( array( new eZContentFunctionCollection(), 'fetchContentNode' ),
  array(     'node_id' => 1,
    'node_path' => false,
    'language_code' => false,
    'remote_id' => false ) );
$var = isset( $var['result'] ) ? $var['result'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'custom_root_node', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'custom_root_node' is already defined.", array (
  0 => 
  array (
    0 => 17,
    1 => 0,
    2 => 1074,
  ),
  1 => 
  array (
    0 => 17,
    1 => 72,
    2 => 1146,
  ),
  2 => 'design/admin2/templates/parts/my/menu.tpl',
) );
    $tpl->setVariable( 'custom_root_node', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'custom_root_node', $var, $rootNamespace );
}

// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_root_node'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'can_read' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '<div id="content-tree">
<div class="box-header"><div class="box-ml">
<h4>Site structure</h4>
</div></div>

<div class="box-bc"><div class="box-ml"><div class="box-content">


<div id="contentstructure">';
// if begins
$if_cond = true;
if ( $if_cond )
{
$text .= '    ';
$oldRestoreIncludeArray_2bcb58f2722129beffb85e2ecc114fb4 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['custom_root_node'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'custom_root_node', $vars[$currentNamespace]['custom_root_node'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['custom_root_node'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'custom_root_node', 'unset' );

unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'custom_root_node', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['custom_root_node'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$vars[$currentNamespace]['custom_root_node'] = $var;
unset( $var );
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['menu_persistence'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'menu_persistence', $vars[$currentNamespace]['menu_persistence'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['menu_persistence'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'menu_persistence', 'unset' );

$vars[$currentNamespace]['menu_persistence'] = false;
if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['hide_node_list'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'hide_node_list', $vars[$currentNamespace]['hide_node_list'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['hide_node_list'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'hide_node_list', 'unset' );

$vars[$currentNamespace]['hide_node_list'] = array (
  0 => '58',
  1 => '48',
);
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
$restoreIncludeArray = $oldRestoreIncludeArray_2bcb58f2722129beffb85e2ecc114fb4;

}
else
{
$text .= '    ';
$oldRestoreIncludeArray_21a7a796d8764df56db72fd8817c5a05 = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( isset( $currentNamespace ) and isset( $vars[$currentNamespace]['custom_root_node_id'] ) )
    $restoreIncludeArray[] = array( $currentNamespace, 'custom_root_node_id', $vars[$currentNamespace]['custom_root_node_id'] );
elseif ( !isset( $vars[( isset( $currentNamespace ) ? $currentNamespace : '' )]['custom_root_node_id'] ) ) 
    $restoreIncludeArray[] = array( ( isset( $currentNamespace ) ? $currentNamespace : '' ), 'custom_root_node_id', 'unset' );

$vars[$currentNamespace]['custom_root_node_id'] = 1;
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
$restoreIncludeArray = $oldRestoreIncludeArray_21a7a796d8764df56db72fd8817c5a05;

}
unset( $if_cond );
// if ends

$text .= '</div>

</div></div></div>
</div>';
}
unset( $if_cond );
// if ends

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
        0 => 42,
        1 => 51,
        2 => 2187,
      ),
      1 => 
      array (
        0 => 43,
        1 => 4,
        2 => 2192,
      ),
      2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 43,
            1 => 23,
            2 => 2213,
          ),
          1 => 
          array (
            0 => 44,
            1 => 12,
            2 => 2226,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 44,
            1 => 12,
            2 => 2227,
          ),
          1 => 
          array (
            0 => 44,
            1 => 68,
            2 => 2283,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 44,
            1 => 68,
            2 => 2284,
          ),
          1 => 
          array (
            0 => 44,
            1 => 76,
            2 => 2292,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            0 => 44,
            1 => 76,
            2 => 2293,
          ),
          1 => 
          array (
            0 => 44,
            1 => 158,
            2 => 2375,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 44,
            1 => 158,
            2 => 2376,
          ),
          1 => 
          array (
            0 => 44,
            1 => 160,
            2 => 2378,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            0 => 44,
            1 => 160,
            2 => 2379,
          ),
          1 => 
          array (
            0 => 44,
            1 => 206,
            2 => 2425,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 44,
            1 => 206,
            2 => 2426,
          ),
          1 => 
          array (
            0 => 45,
            1 => 26,
            2 => 2457,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            1 => 26,
            2 => 2458,
          ),
          1 => 
          array (
            0 => 45,
            1 => 73,
            2 => 2505,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 45,
            1 => 73,
            2 => 2506,
          ),
          1 => 
          array (
            0 => 46,
            1 => 12,
            2 => 2526,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 46,
            1 => 12,
            2 => 2527,
          ),
          1 => 
          array (
            0 => 46,
            1 => 68,
            2 => 2583,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 46,
            1 => 68,
            2 => 2584,
          ),
          1 => 
          array (
            0 => 46,
            1 => 76,
            2 => 2592,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            1 => 76,
            2 => 2593,
          ),
          1 => 
          array (
            0 => 46,
            1 => 158,
            2 => 2675,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 46,
            1 => 158,
            2 => 2676,
          ),
          1 => 
          array (
            0 => 46,
            1 => 160,
            2 => 2678,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            1 => 160,
            2 => 2679,
          ),
          1 => 
          array (
            0 => 46,
            1 => 206,
            2 => 2725,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 46,
            1 => 206,
            2 => 2726,
          ),
          1 => 
          array (
            0 => 47,
            1 => 4,
            2 => 2735,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
        0 => 43,
        1 => 4,
        2 => 2193,
      ),
      1 => 
      array (
        0 => 43,
        1 => 23,
        2 => 2212,
      ),
      2 => 'design/admin2/templates/parts/my/menu.tpl',
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
        0 => 47,
        1 => 8,
        2 => 2742,
      ),
      1 => 
      array (
        0 => 49,
        1 => 4,
        2 => 2748,
      ),
      2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 49,
            1 => 22,
            2 => 2768,
          ),
          1 => 
          array (
            0 => 50,
            1 => 12,
            2 => 2781,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 50,
            1 => 12,
            2 => 2782,
          ),
          1 => 
          array (
            0 => 50,
            1 => 68,
            2 => 2838,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 50,
            1 => 68,
            2 => 2839,
          ),
          1 => 
          array (
            0 => 50,
            1 => 76,
            2 => 2847,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            0 => 50,
            1 => 76,
            2 => 2848,
          ),
          1 => 
          array (
            0 => 50,
            1 => 158,
            2 => 2930,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 50,
            1 => 158,
            2 => 2931,
          ),
          1 => 
          array (
            0 => 50,
            1 => 160,
            2 => 2933,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            0 => 50,
            1 => 160,
            2 => 2934,
          ),
          1 => 
          array (
            0 => 50,
            1 => 206,
            2 => 2980,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 50,
            1 => 206,
            2 => 2981,
          ),
          1 => 
          array (
            0 => 51,
            1 => 12,
            2 => 2998,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 51,
            1 => 12,
            2 => 2999,
          ),
          1 => 
          array (
            0 => 51,
            1 => 69,
            2 => 3056,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 51,
            1 => 69,
            2 => 3057,
          ),
          1 => 
          array (
            0 => 51,
            1 => 77,
            2 => 3065,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            1 => 77,
            2 => 3066,
          ),
          1 => 
          array (
            0 => 51,
            1 => 160,
            2 => 3149,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 51,
            1 => 160,
            2 => 3150,
          ),
          1 => 
          array (
            0 => 51,
            1 => 162,
            2 => 3152,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            1 => 162,
            2 => 3153,
          ),
          1 => 
          array (
            0 => 51,
            1 => 209,
            2 => 3200,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 51,
            1 => 209,
            2 => 3201,
          ),
          1 => 
          array (
            0 => 52,
            1 => 26,
            2 => 3232,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            1 => 26,
            2 => 3233,
          ),
          1 => 
          array (
            0 => 52,
            1 => 72,
            2 => 3279,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 52,
            1 => 72,
            2 => 3280,
          ),
          1 => 
          array (
            0 => 53,
            1 => 4,
            2 => 3292,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
        0 => 49,
        1 => 4,
        2 => 2749,
      ),
      1 => 
      array (
        0 => 49,
        1 => 22,
        2 => 2767,
      ),
      2 => 'design/admin2/templates/parts/my/menu.tpl',
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
        0 => 53,
        1 => 8,
        2 => 3299,
      ),
      1 => 
      array (
        0 => 55,
        1 => 4,
        2 => 3305,
      ),
      2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 55,
            1 => 32,
            2 => 3335,
          ),
          1 => 
          array (
            0 => 56,
            1 => 26,
            2 => 3362,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            0 => 56,
            1 => 26,
            2 => 3363,
          ),
          1 => 
          array (
            0 => 56,
            1 => 72,
            2 => 3409,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 56,
            1 => 72,
            2 => 3410,
          ),
          1 => 
          array (
            0 => 57,
            1 => 12,
            2 => 3430,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 57,
            1 => 12,
            2 => 3431,
          ),
          1 => 
          array (
            0 => 57,
            1 => 69,
            2 => 3488,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 57,
            1 => 69,
            2 => 3489,
          ),
          1 => 
          array (
            0 => 57,
            1 => 77,
            2 => 3497,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            1 => 77,
            2 => 3498,
          ),
          1 => 
          array (
            0 => 57,
            1 => 160,
            2 => 3581,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 57,
            1 => 160,
            2 => 3582,
          ),
          1 => 
          array (
            0 => 57,
            1 => 162,
            2 => 3584,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            1 => 162,
            2 => 3585,
          ),
          1 => 
          array (
            0 => 57,
            1 => 209,
            2 => 3632,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 57,
            1 => 209,
            2 => 3633,
          ),
          1 => 
          array (
            0 => 58,
            1 => 12,
            2 => 3650,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 58,
            1 => 12,
            2 => 3651,
          ),
          1 => 
          array (
            0 => 58,
            1 => 68,
            2 => 3707,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 58,
            1 => 68,
            2 => 3708,
          ),
          1 => 
          array (
            0 => 58,
            1 => 76,
            2 => 3716,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            1 => 76,
            2 => 3717,
          ),
          1 => 
          array (
            0 => 58,
            1 => 158,
            2 => 3799,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 58,
            1 => 158,
            2 => 3800,
          ),
          1 => 
          array (
            0 => 58,
            1 => 160,
            2 => 3802,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            1 => 160,
            2 => 3803,
          ),
          1 => 
          array (
            0 => 58,
            1 => 206,
            2 => 3849,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 58,
            1 => 206,
            2 => 3850,
          ),
          1 => 
          array (
            0 => 59,
            1 => 4,
            2 => 3859,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
        0 => 55,
        1 => 4,
        2 => 3306,
      ),
      1 => 
      array (
        0 => 55,
        1 => 32,
        2 => 3334,
      ),
      2 => 'design/admin2/templates/parts/my/menu.tpl',
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
        0 => 59,
        1 => 8,
        2 => 3866,
      ),
      1 => 
      array (
        0 => 61,
        1 => 4,
        2 => 3872,
      ),
      2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 61,
            1 => 8,
            2 => 3878,
          ),
          1 => 
          array (
            0 => 62,
            1 => 12,
            2 => 3891,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 62,
            1 => 12,
            2 => 3892,
          ),
          1 => 
          array (
            0 => 62,
            1 => 68,
            2 => 3948,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 62,
            1 => 68,
            2 => 3949,
          ),
          1 => 
          array (
            0 => 62,
            1 => 76,
            2 => 3957,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            0 => 62,
            1 => 76,
            2 => 3958,
          ),
          1 => 
          array (
            0 => 62,
            1 => 158,
            2 => 4040,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 62,
            1 => 158,
            2 => 4041,
          ),
          1 => 
          array (
            0 => 62,
            1 => 160,
            2 => 4043,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            0 => 62,
            1 => 160,
            2 => 4044,
          ),
          1 => 
          array (
            0 => 62,
            1 => 206,
            2 => 4090,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 62,
            1 => 206,
            2 => 4091,
          ),
          1 => 
          array (
            0 => 63,
            1 => 12,
            2 => 4108,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 63,
            1 => 12,
            2 => 4109,
          ),
          1 => 
          array (
            0 => 63,
            1 => 69,
            2 => 4166,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 63,
            1 => 69,
            2 => 4167,
          ),
          1 => 
          array (
            0 => 63,
            1 => 77,
            2 => 4175,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            0 => 63,
            1 => 77,
            2 => 4176,
          ),
          1 => 
          array (
            0 => 63,
            1 => 160,
            2 => 4259,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 63,
            1 => 160,
            2 => 4260,
          ),
          1 => 
          array (
            0 => 63,
            1 => 162,
            2 => 4262,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            0 => 63,
            1 => 162,
            2 => 4263,
          ),
          1 => 
          array (
            0 => 63,
            1 => 209,
            2 => 4310,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 63,
            1 => 209,
            2 => 4311,
          ),
          1 => 
          array (
            0 => 64,
            1 => 12,
            2 => 4328,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 64,
            1 => 12,
            2 => 4329,
          ),
          1 => 
          array (
            0 => 64,
            1 => 68,
            2 => 4385,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 64,
            1 => 68,
            2 => 4386,
          ),
          1 => 
          array (
            0 => 64,
            1 => 76,
            2 => 4394,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            0 => 64,
            1 => 76,
            2 => 4395,
          ),
          1 => 
          array (
            0 => 64,
            1 => 158,
            2 => 4477,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 64,
            1 => 158,
            2 => 4478,
          ),
          1 => 
          array (
            0 => 64,
            1 => 160,
            2 => 4480,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
                  1 => 'design/admin/parts/user/menu',
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
            0 => 64,
            1 => 160,
            2 => 4481,
          ),
          1 => 
          array (
            0 => 64,
            1 => 206,
            2 => 4527,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
            0 => 64,
            1 => 206,
            2 => 4528,
          ),
          1 => 
          array (
            0 => 65,
            1 => 4,
            2 => 4537,
          ),
          2 => 'design/admin2/templates/parts/my/menu.tpl',
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
        0 => 61,
        1 => 4,
        2 => 3873,
      ),
      1 => 
      array (
        0 => 61,
        1 => 8,
        2 => 3877,
      ),
      2 => 'design/admin2/templates/parts/my/menu.tpl',
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
        0 => 65,
        1 => 8,
        2 => 4544,
      ),
      1 => 
      array (
        0 => 66,
        1 => 0,
        2 => 4545,
      ),
      2 => 'design/admin2/templates/parts/my/menu.tpl',
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
    0 => 42,
    1 => 0,
    2 => 2135,
  ),
  1 => 
  array (
    0 => 42,
    1 => 51,
    2 => 2186,
  ),
  2 => 'design/admin2/templates/parts/my/menu.tpl',
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

$setArray = $oldSetArray_2aa3ff9c2071a0aaad9bf8af27322cc6;
$tpl->Level--;
?>
