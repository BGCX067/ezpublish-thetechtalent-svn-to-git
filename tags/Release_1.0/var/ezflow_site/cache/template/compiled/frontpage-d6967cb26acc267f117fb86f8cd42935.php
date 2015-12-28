<?php
// URI:       design:node/view/full.tpl
// Filename:  extension/ezflow/design/ezflow/override/templates/full/frontpage.tpl
// Timestamp: 1295903542 (Mon Jan 24 14:12:22 MST 2011)
$oldSetArray_4b532810f41421f71d0e572cd81a5fdd = isset( $setArray ) ? $setArray : array();
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

$text .= '<div class="content-view-full">
    <div class="class-frontpage">

    <div class="attribute-page">
    ';
$textElements = array();
$tpl->processFunction( 'attribute_view_gui', $textElements,
                       false,
                       array (
  'attribute' => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'node',
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
          1 => 'object',
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
          1 => 'data_map',
          2 => false,
        ),
      ),
      2 => false,
    ),
    3 => 
    array (
      0 => 5,
      1 => 
      array (
        0 => 
        array (
          0 => 3,
          1 => 'page',
          2 => false,
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
    1 => 4,
    2 => 105,
  ),
  1 => 
  array (
    0 => 5,
    1 => 59,
    2 => 160,
  ),
  2 => 'extension/ezflow/design/ezflow/override/templates/full/frontpage.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '    </div>

    </div>
</div>';

$setArray = $oldSetArray_4b532810f41421f71d0e572cd81a5fdd;
$tpl->Level--;
?>
