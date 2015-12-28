<?php
// URI:       design/admin2/templates/popupmenu/popup_sub_advance_menu.tpl
// Filename:  design/admin2/templates/popupmenu/popup_sub_advance_menu.tpl
// Timestamp: 1285696612 (Tue Sep 28 10:56:52 MST 2010)
$oldSetArray_84cdf019e03a8ecaf814c584a35fdf19 = isset( $setArray ) ? $setArray : array();
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

$text .= '<!-- Advanced menu -->
<script type="text/javascript">
<!--
menuArray[\'Advanced\'] = { \'depth\': 1 };
menuArray[\'Advanced\'][\'elements\'] = {};
menuArray[\'Advanced\'][\'elements\'][\'menu-hide\'] = { \'url\': "/content/hide/%nodeID%" };
menuArray[\'Advanced\'][\'elements\'][\'menu-list\'] = { \'url\': "/content/view/sitemap/%nodeID%" };
menuArray[\'Advanced\'][\'elements\'][\'reverse-related\'] = { \'url\': "/content/reverserelatedlist/%nodeID%" };
menuArray[\'Advanced\'][\'elements\'][\'menu-history\'] = { \'url\': "/content/history/%objectID%" };
menuArray[\'Advanced\'][\'elements\'][\'menu-url-alias\'] = { \'url\': "/content/urlalias/%nodeID%" };
// -->
</script>

<div class="popupmenu" id="Advanced">
    <a id="menu-swap" href="#" onmouseover="ezpopmenu_mouseOver( \'Advanced\' )" onclick="ezpopmenu_submitForm( \'menu-form-swap\' ); return false;">Swap with another node</a>
    <a id="menu-hide" href="#" onmouseover="ezpopmenu_mouseOver( \'Advanced\' )">Hide / unhide</a>
    <hr />
    <a id="menu-list" href="#" onmouseover="ezpopmenu_mouseOver( \'Advanced\' )">Sitemap for subtree</a>
    <a id="reverse-related" href="#" onmouseover="ezpopmenu_mouseOver( \'Advanced\' )">Reverse related for subtree</a>
    <hr />
    <a id="menu-history" href="#" onmouseover="ezpopmenu_mouseOver( \'Advanced\' )">Manage versions</a>
    <a id="menu-url-alias" href="#" onmouseover="ezpopmenu_mouseOver( \'Advanced\' )">Manage URL aliases</a>

    
    ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_ccef96f19f6784a3837661000fd9548c_8 ) ) $fe_variable_stack_ccef96f19f6784a3837661000fd9548c_8 = array();
$fe_variable_stack_ccef96f19f6784a3837661000fd9548c_8[] = compact( 'fe_array_ccef96f19f6784a3837661000fd9548c_8', 'fe_array_keys_ccef96f19f6784a3837661000fd9548c_8', 'fe_n_items_ccef96f19f6784a3837661000fd9548c_8', 'fe_n_items_processed_ccef96f19f6784a3837661000fd9548c_8', 'fe_i_ccef96f19f6784a3837661000fd9548c_8', 'fe_key_ccef96f19f6784a3837661000fd9548c_8', 'fe_val_ccef96f19f6784a3837661000fd9548c_8', 'fe_offset_ccef96f19f6784a3837661000fd9548c_8', 'fe_max_ccef96f19f6784a3837661000fd9548c_8', 'fe_reverse_ccef96f19f6784a3837661000fd9548c_8', 'fe_first_val_ccef96f19f6784a3837661000fd9548c_8', 'fe_last_val_ccef96f19f6784a3837661000fd9548c_8' );
$fe_array_ccef96f19f6784a3837661000fd9548c_8 = array (
);
$fe_array_keys_ccef96f19f6784a3837661000fd9548c_8 = is_array( $fe_array_ccef96f19f6784a3837661000fd9548c_8 ) ? array_keys( $fe_array_ccef96f19f6784a3837661000fd9548c_8 ) : array();
$fe_n_items_ccef96f19f6784a3837661000fd9548c_8 = count( $fe_array_keys_ccef96f19f6784a3837661000fd9548c_8 );
$fe_n_items_processed_ccef96f19f6784a3837661000fd9548c_8 = 0;
$fe_offset_ccef96f19f6784a3837661000fd9548c_8 = 0;
$fe_max_ccef96f19f6784a3837661000fd9548c_8 = $fe_n_items_ccef96f19f6784a3837661000fd9548c_8 - $fe_offset_ccef96f19f6784a3837661000fd9548c_8;
$fe_reverse_ccef96f19f6784a3837661000fd9548c_8 = false;
if ( $fe_offset_ccef96f19f6784a3837661000fd9548c_8 < 0 || $fe_offset_ccef96f19f6784a3837661000fd9548c_8 >= $fe_n_items_ccef96f19f6784a3837661000fd9548c_8 )
{
    $fe_offset_ccef96f19f6784a3837661000fd9548c_8 = ( $fe_offset_ccef96f19f6784a3837661000fd9548c_8 < 0 ) ? 0 : $fe_n_items_ccef96f19f6784a3837661000fd9548c_8;
    if ( $fe_n_items_ccef96f19f6784a3837661000fd9548c_8 || $fe_offset_ccef96f19f6784a3837661000fd9548c_8 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_ccef96f19f6784a3837661000fd9548c_8'. Array count: $fe_n_items_ccef96f19f6784a3837661000fd9548c_8");   
}
}
if ( $fe_max_ccef96f19f6784a3837661000fd9548c_8 < 0 || $fe_offset_ccef96f19f6784a3837661000fd9548c_8 + $fe_max_ccef96f19f6784a3837661000fd9548c_8 > $fe_n_items_ccef96f19f6784a3837661000fd9548c_8 )
{
    if ( $fe_max_ccef96f19f6784a3837661000fd9548c_8 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_ccef96f19f6784a3837661000fd9548c_8");
    $fe_max_ccef96f19f6784a3837661000fd9548c_8 = $fe_n_items_ccef96f19f6784a3837661000fd9548c_8 - $fe_offset_ccef96f19f6784a3837661000fd9548c_8;
}
if ( $fe_reverse_ccef96f19f6784a3837661000fd9548c_8 )
{
    $fe_first_val_ccef96f19f6784a3837661000fd9548c_8 = $fe_n_items_ccef96f19f6784a3837661000fd9548c_8 - 1 - $fe_offset_ccef96f19f6784a3837661000fd9548c_8;
    $fe_last_val_ccef96f19f6784a3837661000fd9548c_8  = 0;
}
else
{
    $fe_first_val_ccef96f19f6784a3837661000fd9548c_8 = $fe_offset_ccef96f19f6784a3837661000fd9548c_8;
    $fe_last_val_ccef96f19f6784a3837661000fd9548c_8  = $fe_n_items_ccef96f19f6784a3837661000fd9548c_8 - 1;
}
// foreach
for ( $fe_i_ccef96f19f6784a3837661000fd9548c_8 = $fe_first_val_ccef96f19f6784a3837661000fd9548c_8; $fe_n_items_processed_ccef96f19f6784a3837661000fd9548c_8 < $fe_max_ccef96f19f6784a3837661000fd9548c_8 && ( $fe_reverse_ccef96f19f6784a3837661000fd9548c_8 ? $fe_i_ccef96f19f6784a3837661000fd9548c_8 >= $fe_last_val_ccef96f19f6784a3837661000fd9548c_8 : $fe_i_ccef96f19f6784a3837661000fd9548c_8 <= $fe_last_val_ccef96f19f6784a3837661000fd9548c_8 ); $fe_reverse_ccef96f19f6784a3837661000fd9548c_8 ? $fe_i_ccef96f19f6784a3837661000fd9548c_8-- : $fe_i_ccef96f19f6784a3837661000fd9548c_8++ )
{
$fe_key_ccef96f19f6784a3837661000fd9548c_8 = $fe_array_keys_ccef96f19f6784a3837661000fd9548c_8[$fe_i_ccef96f19f6784a3837661000fd9548c_8];
$fe_val_ccef96f19f6784a3837661000fd9548c_8 = $fe_array_ccef96f19f6784a3837661000fd9548c_8[$fe_key_ccef96f19f6784a3837661000fd9548c_8];
$vars[$rootNamespace]['template'] = $fe_val_ccef96f19f6784a3837661000fd9548c_8;
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
    0 => 26,
    1 => 8,
    2 => 1942,
  ),
  1 => 
  array (
    0 => 26,
    1 => 49,
    2 => 1983,
  ),
  2 => 'design/admin2/templates/popupmenu/popup_sub_advance_menu.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '    ';
$fe_n_items_processed_ccef96f19f6784a3837661000fd9548c_8++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_ccef96f19f6784a3837661000fd9548c_8 ) ) extract( array_pop( $fe_variable_stack_ccef96f19f6784a3837661000fd9548c_8 ) );

else
{

unset( $fe_array_ccef96f19f6784a3837661000fd9548c_8 );

unset( $fe_array_keys_ccef96f19f6784a3837661000fd9548c_8 );

unset( $fe_n_items_ccef96f19f6784a3837661000fd9548c_8 );

unset( $fe_n_items_processed_ccef96f19f6784a3837661000fd9548c_8 );

unset( $fe_i_ccef96f19f6784a3837661000fd9548c_8 );

unset( $fe_key_ccef96f19f6784a3837661000fd9548c_8 );

unset( $fe_val_ccef96f19f6784a3837661000fd9548c_8 );

unset( $fe_offset_ccef96f19f6784a3837661000fd9548c_8 );

unset( $fe_max_ccef96f19f6784a3837661000fd9548c_8 );

unset( $fe_reverse_ccef96f19f6784a3837661000fd9548c_8 );

unset( $fe_first_val_ccef96f19f6784a3837661000fd9548c_8 );

unset( $fe_last_val_ccef96f19f6784a3837661000fd9548c_8 );

unset( $fe_variable_stack_ccef96f19f6784a3837661000fd9548c_8 );

}

// foreach ends
$text .= '</div>


<form id="menu-form-swap" method="post" action="/content/action">
  <input type="hidden" name="TopLevelNode" value="%nodeID%" />
  <input type="hidden" name="ContentNodeID" value="%nodeID%" />
  <input type="hidden" name="ContentObjectID" value="%objectID%" />
  <input type="hidden" name="SwapNodeButton" value="x" />
</form>';

$setArray = $oldSetArray_84cdf019e03a8ecaf814c584a35fdf19;
$tpl->Level--;
?>
