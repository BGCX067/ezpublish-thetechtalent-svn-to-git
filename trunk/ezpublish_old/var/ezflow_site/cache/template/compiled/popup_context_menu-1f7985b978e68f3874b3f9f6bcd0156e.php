<?php
// URI:       design/admin2/templates/popupmenu/popup_context_menu.tpl
// Filename:  design/admin2/templates/popupmenu/popup_context_menu.tpl
// Timestamp: 1285696606 (Tue Sep 28 10:56:46 MST 2010)
$oldSetArray_ad1cf4efc2b9e995dd8586cf8f579b6b = isset( $setArray ) ? $setArray : array();
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

$text .= '<!-- Treemenu icon click popup menu -->
<script type="text/javascript">
<!--
menuArray[\'ContextMenu\'] = { \'depth\': 0, \'headerID\': \'menu-header\' };
menuArray[\'ContextMenu\'][\'elements\'] = {};
//menuArray[\'ContextMenu\'][\'elements\'][\'menu-view\'] = { \'url\': "/content/view/full/%nodeID%" };
menuArray[\'ContextMenu\'][\'elements\'][\'menu-edit\'] = { \'url\': "/content/edit/%objectID%" };
menuArray[\'ContextMenu\'][\'elements\'][\'menu-copy\'] = { \'url\': "/content/copy/%objectID%" };
menuArray[\'ContextMenu\'][\'elements\'][\'menu-copy-subtree\']= { \'url\': "/content/copysubtree/%nodeID%" };
menuArray[\'ContextMenu\'][\'elements\'][\'menu-create-here\']= { \'disabled_class\': \'menu-item-disabled\' };

// -->
</script>

<div class="popupmenu" id="ContextMenu">
    <div class="popupmenuheader"><h3 id="menu-header">XXX</h3>
        <div class="break"></div>
    </div>
    <!-- a id="menu-view" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' )">View</a -->';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'multilingual_site', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['multilingual_site'] : null;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <a id="menu-edit-in" class="more" href="#" onmouseover="ezpopmenu_showSubLevel( event, \'EditSubmenu\', \'menu-edit-in\' ); return false;">Edit in</a>';
}
else
{
$text .= '    <a id="menu-edit" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' )">Edit</a>';
}
unset( $if_cond );
// if ends

$text .= '    <hr />
    <a id="menu-copy" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' )">Copy</a>
    <a id="menu-copy-subtree" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' )">Copy subtree</a>
    <a id="menu-move" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' )" onclick="ezpopmenu_submitForm( \'menu-form-move\' ); return false;">Move</a>
    <a id="menu-remove" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' )" onclick="ezpopmenu_submitForm( \'menu-form-remove\' ); return false;">Remove</a>
    <a id="menu-advanced" class="more" href="#" onmouseover="ezpopmenu_showSubLevel( event, \'Advanced\', \'menu-advanced\' ); return false;">Advanced</a>
    <hr />';
// if begins
$if_cond = false;
if ( $if_cond )
{
$text .= '    <a id="menu-expand" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' )"
       onclick="ezcst_expandSubtree( CurrentSubstituteValues[\'%nodeID%\'] ); ezpopmenu_hideAll(); return false;">Expand</a>
    <a id="menu-collapse" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' )"
       onclick="ezcst_collapseSubtree( CurrentSubstituteValues[\'%nodeID%\'] ); ezpopmenu_hideAll(); return false;">Collapse</a>';
}
else
{
$text .= '    <a id="menu-collapse" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' )"
       onclick="treeMenu.collapse( CurrentSubstituteValues[\'%nodeID%\'] ); ezpopmenu_hideAll(); return false;">Collapse</a>';
}
unset( $if_cond );
// if ends

$text .= '    <hr />
    <a id="menu-bookmark" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' )"
       onclick="ezpopmenu_submitForm( \'menu-form-addbookmark\' ); return false;">Add to my bookmarks</a>
    <a id="menu-notify" href="#" onmouseover="ezpopmenu_mouseOver( \'ContextMenu\' )"
       onclick="ezpopmenu_submitForm( \'menu-form-notify\' ); return false;">Add to my notifications</a>

    <a id="menu-create-here" class="more" href="#" onmouseover="ezpopmenu_showSubLevel( event, \'CreateHereMenu\', \'menu-create-here\' ); return false;">Create here</a>

    
    ';
$loopItem = array (
  0 => 'node/ezflcontextmenu.tpl',
  1 => 'node/oocontextmenu.tpl',
);
if ( !isset( $sectionStack ) )
    $sectionStack = array();
//include_once( 'lib/eztemplate/classes/eztemplatesectioniterator.php' );
$variableValue = new eZTemplateSectionIterator();
$lastVariableValue = false;
$index = 0;
$currentIndex = 1;
if ( is_array( $loopItem ) )
{
    $loopKeys = array_keys( $loopItem );
    $loopCount = count( $loopKeys );
}
else if ( is_numeric( $loopItem ) )
{
    $loopKeys = false;
    if ( $loopItem < 0 )
        $loopCountValue = -$loopItem;
    else
        $loopCountValue = $loopItem;
    $loopCount = $loopCountValue - 0;
}
else if ( is_string( $loopItem ) )
{
    $loopKeys = false;
    $loopCount = strlen( $loopItem ) - 0;
}
else
{
    $loopKeys = false;
    $loopCount = 0;
}
while ( $index < $loopCount )
{
    if ( is_array( $loopItem ) )
    {
        $loopKey = $loopKeys[$index];
        unset( $item );
        $item = $loopItem[$loopKey];
    }
    else if ( is_numeric( $loopItem ) )
    {
        unset( $item );
        $item = $index + 0 + 1;
        if ( $loopItem < 0 )
            $item = -$item;
        $loopKey = $index + 0;
    }
    else if ( is_string( $loopItem ) )
    {
        unset( $item );
        $loopKey = $index + 0;
        $item = $loopItem[$loopKey];
    }
    unset( $last );
    $last = false;

    $variableValue->setIteratorValues( $item, $loopKey, $currentIndex - 1, $currentIndex, false, $last );
$vars[$currentNamespace]['template'] = $variableValue;
$sectionStack[] = array( &$variableValue, &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

$text .= '        ';
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
            1 => 'design:',
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
              2 => 'template',
            ),
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
    0 => 51,
    1 => 8,
    2 => 4130,
  ),
  1 => 
  array (
    0 => 51,
    1 => 49,
    2 => 4171,
  ),
  2 => 'design/admin2/templates/popupmenu/popup_context_menu.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '    ';
list( $variableValue, $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

$lastVariableValue = $variableValue;
++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$text .= '</div>';

$setArray = $oldSetArray_ad1cf4efc2b9e995dd8586cf8f579b6b;
$tpl->Level--;
?>
