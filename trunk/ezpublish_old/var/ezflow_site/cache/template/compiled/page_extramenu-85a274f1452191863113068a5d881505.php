<?php
// URI:       extension/ezwebin/design/ezwebin/templates/page_extramenu.tpl
// Filename:  extension/ezwebin/design/ezwebin/templates/page_extramenu.tpl
// Timestamp: 1295903528 (Mon Jan 24 14:12:08 MST 2011)
$oldSetArray_5b12101f09ea183569b05d1f8745775b = isset( $setArray ) ? $setArray : array();
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

$text .= '    <div id="extrainfo-position">
      <div id="extrainfo">
        ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'extra_menu' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = is_array( $if_cond1 );unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '            ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_c81a7b5dd822d3423ebfd3ac98b8ae27_13 ) ) $fe_variable_stack_c81a7b5dd822d3423ebfd3ac98b8ae27_13 = array();
$fe_variable_stack_c81a7b5dd822d3423ebfd3ac98b8ae27_13[] = compact( 'fe_array_c81a7b5dd822d3423ebfd3ac98b8ae27_13', 'fe_array_keys_c81a7b5dd822d3423ebfd3ac98b8ae27_13', 'fe_n_items_c81a7b5dd822d3423ebfd3ac98b8ae27_13', 'fe_n_items_processed_c81a7b5dd822d3423ebfd3ac98b8ae27_13', 'fe_i_c81a7b5dd822d3423ebfd3ac98b8ae27_13', 'fe_key_c81a7b5dd822d3423ebfd3ac98b8ae27_13', 'fe_val_c81a7b5dd822d3423ebfd3ac98b8ae27_13', 'fe_offset_c81a7b5dd822d3423ebfd3ac98b8ae27_13', 'fe_max_c81a7b5dd822d3423ebfd3ac98b8ae27_13', 'fe_reverse_c81a7b5dd822d3423ebfd3ac98b8ae27_13', 'fe_first_val_c81a7b5dd822d3423ebfd3ac98b8ae27_13', 'fe_last_val_c81a7b5dd822d3423ebfd3ac98b8ae27_13' );
unset( $fe_array_c81a7b5dd822d3423ebfd3ac98b8ae27_13 );
unset( $fe_array_c81a7b5dd822d3423ebfd3ac98b8ae27_13 );
$fe_array_c81a7b5dd822d3423ebfd3ac98b8ae27_13 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'pagedata', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['pagedata'] : null;
$fe_array_c81a7b5dd822d3423ebfd3ac98b8ae27_131 = compiledFetchAttribute( $fe_array_c81a7b5dd822d3423ebfd3ac98b8ae27_13, 'extra_menu' );
unset( $fe_array_c81a7b5dd822d3423ebfd3ac98b8ae27_13 );
$fe_array_c81a7b5dd822d3423ebfd3ac98b8ae27_13 = $fe_array_c81a7b5dd822d3423ebfd3ac98b8ae27_131;
if (! isset( $fe_array_c81a7b5dd822d3423ebfd3ac98b8ae27_13 ) ) $fe_array_c81a7b5dd822d3423ebfd3ac98b8ae27_13 = NULL;
while ( is_object( $fe_array_c81a7b5dd822d3423ebfd3ac98b8ae27_13 ) and method_exists( $fe_array_c81a7b5dd822d3423ebfd3ac98b8ae27_13, 'templateValue' ) )
    $fe_array_c81a7b5dd822d3423ebfd3ac98b8ae27_13 = $fe_array_c81a7b5dd822d3423ebfd3ac98b8ae27_13->templateValue();

$fe_array_keys_c81a7b5dd822d3423ebfd3ac98b8ae27_13 = is_array( $fe_array_c81a7b5dd822d3423ebfd3ac98b8ae27_13 ) ? array_keys( $fe_array_c81a7b5dd822d3423ebfd3ac98b8ae27_13 ) : array();
$fe_n_items_c81a7b5dd822d3423ebfd3ac98b8ae27_13 = count( $fe_array_keys_c81a7b5dd822d3423ebfd3ac98b8ae27_13 );
$fe_n_items_processed_c81a7b5dd822d3423ebfd3ac98b8ae27_13 = 0;
$fe_offset_c81a7b5dd822d3423ebfd3ac98b8ae27_13 = 0;
$fe_max_c81a7b5dd822d3423ebfd3ac98b8ae27_13 = $fe_n_items_c81a7b5dd822d3423ebfd3ac98b8ae27_13 - $fe_offset_c81a7b5dd822d3423ebfd3ac98b8ae27_13;
$fe_reverse_c81a7b5dd822d3423ebfd3ac98b8ae27_13 = false;
if ( $fe_offset_c81a7b5dd822d3423ebfd3ac98b8ae27_13 < 0 || $fe_offset_c81a7b5dd822d3423ebfd3ac98b8ae27_13 >= $fe_n_items_c81a7b5dd822d3423ebfd3ac98b8ae27_13 )
{
    $fe_offset_c81a7b5dd822d3423ebfd3ac98b8ae27_13 = ( $fe_offset_c81a7b5dd822d3423ebfd3ac98b8ae27_13 < 0 ) ? 0 : $fe_n_items_c81a7b5dd822d3423ebfd3ac98b8ae27_13;
    if ( $fe_n_items_c81a7b5dd822d3423ebfd3ac98b8ae27_13 || $fe_offset_c81a7b5dd822d3423ebfd3ac98b8ae27_13 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_c81a7b5dd822d3423ebfd3ac98b8ae27_13'. Array count: $fe_n_items_c81a7b5dd822d3423ebfd3ac98b8ae27_13");   
}
}
if ( $fe_max_c81a7b5dd822d3423ebfd3ac98b8ae27_13 < 0 || $fe_offset_c81a7b5dd822d3423ebfd3ac98b8ae27_13 + $fe_max_c81a7b5dd822d3423ebfd3ac98b8ae27_13 > $fe_n_items_c81a7b5dd822d3423ebfd3ac98b8ae27_13 )
{
    if ( $fe_max_c81a7b5dd822d3423ebfd3ac98b8ae27_13 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_c81a7b5dd822d3423ebfd3ac98b8ae27_13");
    $fe_max_c81a7b5dd822d3423ebfd3ac98b8ae27_13 = $fe_n_items_c81a7b5dd822d3423ebfd3ac98b8ae27_13 - $fe_offset_c81a7b5dd822d3423ebfd3ac98b8ae27_13;
}
if ( $fe_reverse_c81a7b5dd822d3423ebfd3ac98b8ae27_13 )
{
    $fe_first_val_c81a7b5dd822d3423ebfd3ac98b8ae27_13 = $fe_n_items_c81a7b5dd822d3423ebfd3ac98b8ae27_13 - 1 - $fe_offset_c81a7b5dd822d3423ebfd3ac98b8ae27_13;
    $fe_last_val_c81a7b5dd822d3423ebfd3ac98b8ae27_13  = 0;
}
else
{
    $fe_first_val_c81a7b5dd822d3423ebfd3ac98b8ae27_13 = $fe_offset_c81a7b5dd822d3423ebfd3ac98b8ae27_13;
    $fe_last_val_c81a7b5dd822d3423ebfd3ac98b8ae27_13  = $fe_n_items_c81a7b5dd822d3423ebfd3ac98b8ae27_13 - 1;
}
// foreach
for ( $fe_i_c81a7b5dd822d3423ebfd3ac98b8ae27_13 = $fe_first_val_c81a7b5dd822d3423ebfd3ac98b8ae27_13; $fe_n_items_processed_c81a7b5dd822d3423ebfd3ac98b8ae27_13 < $fe_max_c81a7b5dd822d3423ebfd3ac98b8ae27_13 && ( $fe_reverse_c81a7b5dd822d3423ebfd3ac98b8ae27_13 ? $fe_i_c81a7b5dd822d3423ebfd3ac98b8ae27_13 >= $fe_last_val_c81a7b5dd822d3423ebfd3ac98b8ae27_13 : $fe_i_c81a7b5dd822d3423ebfd3ac98b8ae27_13 <= $fe_last_val_c81a7b5dd822d3423ebfd3ac98b8ae27_13 ); $fe_reverse_c81a7b5dd822d3423ebfd3ac98b8ae27_13 ? $fe_i_c81a7b5dd822d3423ebfd3ac98b8ae27_13-- : $fe_i_c81a7b5dd822d3423ebfd3ac98b8ae27_13++ )
{
$fe_key_c81a7b5dd822d3423ebfd3ac98b8ae27_13 = $fe_array_keys_c81a7b5dd822d3423ebfd3ac98b8ae27_13[$fe_i_c81a7b5dd822d3423ebfd3ac98b8ae27_13];
$fe_val_c81a7b5dd822d3423ebfd3ac98b8ae27_13 = $fe_array_c81a7b5dd822d3423ebfd3ac98b8ae27_13[$fe_key_c81a7b5dd822d3423ebfd3ac98b8ae27_13];
$vars[$rootNamespace]['extra_menu'] = $fe_val_c81a7b5dd822d3423ebfd3ac98b8ae27_13;
if ( $skipDelimiter )
    $skipDelimiter = false;
else
{ // delimiter begins
$text .= '<div class="hr"></div>';
} // delimiter ends

$text .= '                ';
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
            1 => 'design:parts/',
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
              2 => 'extra_menu',
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
    0 => 5,
    1 => 16,
    2 => 182,
  ),
  1 => 
  array (
    0 => 5,
    1 => 72,
    2 => 238,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/page_extramenu.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '                            ';
$fe_n_items_processed_c81a7b5dd822d3423ebfd3ac98b8ae27_13++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_c81a7b5dd822d3423ebfd3ac98b8ae27_13 ) ) extract( array_pop( $fe_variable_stack_c81a7b5dd822d3423ebfd3ac98b8ae27_13 ) );

else
{

unset( $fe_array_c81a7b5dd822d3423ebfd3ac98b8ae27_13 );

unset( $fe_array_keys_c81a7b5dd822d3423ebfd3ac98b8ae27_13 );

unset( $fe_n_items_c81a7b5dd822d3423ebfd3ac98b8ae27_13 );

unset( $fe_n_items_processed_c81a7b5dd822d3423ebfd3ac98b8ae27_13 );

unset( $fe_i_c81a7b5dd822d3423ebfd3ac98b8ae27_13 );

unset( $fe_key_c81a7b5dd822d3423ebfd3ac98b8ae27_13 );

unset( $fe_val_c81a7b5dd822d3423ebfd3ac98b8ae27_13 );

unset( $fe_offset_c81a7b5dd822d3423ebfd3ac98b8ae27_13 );

unset( $fe_max_c81a7b5dd822d3423ebfd3ac98b8ae27_13 );

unset( $fe_reverse_c81a7b5dd822d3423ebfd3ac98b8ae27_13 );

unset( $fe_first_val_c81a7b5dd822d3423ebfd3ac98b8ae27_13 );

unset( $fe_last_val_c81a7b5dd822d3423ebfd3ac98b8ae27_13 );

unset( $fe_variable_stack_c81a7b5dd822d3423ebfd3ac98b8ae27_13 );

}

// foreach ends
$text .= '        ';
}
else
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
            1 => 'design:parts/',
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
              2 => 'pagedata',
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
                1 => 'extra_menu',
                2 => false,
              ),
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
    0 => 9,
    1 => 12,
    2 => 353,
  ),
  1 => 
  array (
    0 => 9,
    1 => 77,
    2 => 418,
  ),
  2 => 'extension/ezwebin/design/ezwebin/templates/page_extramenu.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '        ';
}
unset( $if_cond );
// if ends

$text .= '      </div>
    </div>';

$setArray = $oldSetArray_5b12101f09ea183569b05d1f8745775b;
$tpl->Level--;
?>
