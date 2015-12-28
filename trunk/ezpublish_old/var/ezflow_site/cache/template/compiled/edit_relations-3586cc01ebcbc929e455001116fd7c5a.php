<?php
// URI:       design/admin2/templates/content/edit_relations.tpl
// Filename:  design/admin2/templates/content/edit_relations.tpl
// Timestamp: 1285696610 (Tue Sep 28 10:56:50 MST 2010)
$oldSetArray_c42c6ed4a07bf4c75a9290ec1674a0d9 = isset( $setArray ) ? $setArray : array();
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

<div class="context-block" id="content-relation-items">

<div class="box-header"><div class="box-ml">

<h2 class="context-title">';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_contentobjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_contentobjects'] : null;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var3Data = array( 'value' => $var3 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $var3Data, false, false );
$var3 = $var3Data['value'];
unset( $var3Data );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%related_objects' => $var3 );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var3 = array();
foreach ( $var2 as $var4 => $var5 )
{
  if ( is_int( $var4 ) )
    $var3['%' . ( ($var4%9) + 1 )] = $var5;
  else
    $var3[$var4] = $var5;
}
$var = strtr( 'Related objects (%related_objects)', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</h2>



</div></div>

<div class="box-ml"><div class="box-mr"><div class="box-content">
';
// def $relation_type_names
if ( $tpl->hasVariable( 'relation_type_names', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'relation_type_names' is already defined.", array (
  0 => 
  array (
    0 => 15,
    1 => 0,
    2 => 495,
  ),
  1 => 
  array (
    0 => 18,
    1 => 96,
    2 => 870,
  ),
  2 => 'design/admin2/templates/content/edit_relations.tpl',
) );
    $tpl->setVariable( 'relation_type_names', array (
  'common' => 'Common',
  'xml_embed' => 'Embedded',
  'xml_link' => 'Linked',
  'attribute' => 'Attribute',
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'relation_type_names', array (
  'common' => 'Common',
  'xml_embed' => 'Embedded',
  'xml_link' => 'Linked',
  'attribute' => 'Attribute',
), $rootNamespace );
}

// def $relation_name_delimiter
if ( $tpl->hasVariable( 'relation_name_delimiter', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'relation_name_delimiter' is already defined.", array (
  0 => 
  array (
    0 => 19,
    1 => 0,
    2 => 873,
  ),
  1 => 
  array (
    0 => 19,
    1 => 35,
    2 => 908,
  ),
  2 => 'design/admin2/templates/content/edit_relations.tpl',
) );
    $tpl->setVariable( 'relation_name_delimiter', ', ', $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'relation_name_delimiter', ', ', $rootNamespace );
}

// def $empty_array
if ( $tpl->hasVariable( 'empty_array', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'empty_array' is already defined.", array (
  0 => 
  array (
    0 => 21,
    1 => 0,
    2 => 912,
  ),
  1 => 
  array (
    0 => 21,
    1 => 29,
    2 => 941,
  ),
  2 => 'design/admin2/templates/content/edit_relations.tpl',
) );
    $tpl->setVariable( 'empty_array', array (
  0 => 1,
), $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'empty_array', array (
  0 => 1,
), $rootNamespace );
}

unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'empty_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['empty_array'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( is_string( $var1 ) )
    $var = substr( $var1, 1 );
else
    $var = array_slice( $var1, 1 );unset( $var1 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'empty_array', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['empty_array'] = $var;
    unset( $var );
}
unset( $show );
unset( $show1 );
unset( $show1 );
$show1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_contentobjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_contentobjects'] : null;
if (! isset( $show1 ) ) $show1 = NULL;
while ( is_object( $show1 ) and method_exists( $show1, 'templateValue' ) )
    $show1 = $show1->templateValue();
$show1Data = array( 'value' => $show1 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $show1Data, false, false );
$show1 = $show1Data['value'];
unset( $show1Data );
if (! isset( $show1 ) ) $show1 = NULL;
while ( is_object( $show1 ) and method_exists( $show1, 'templateValue' ) )
    $show1 = $show1->templateValue();
$show = ( ( $show1 ) > ( 0 ) );
unset( $show1 );
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '
    
    ';
unset( $show );
unset( $show1 );
unset( $show1 );
$show1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'grouped_related_contentobjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['grouped_related_contentobjects'] : null;
$show2 = compiledFetchAttribute( $show1, 'images' );
unset( $show1 );
$show1 = $show2;
if (! isset( $show1 ) ) $show1 = NULL;
while ( is_object( $show1 ) and method_exists( $show1, 'templateValue' ) )
    $show1 = $show1->templateValue();
$show1Data = array( 'value' => $show1 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $show1Data, false, false );
$show1 = $show1Data['value'];
unset( $show1Data );
if (! isset( $show1 ) ) $show1 = NULL;
while ( is_object( $show1 ) and method_exists( $show1, 'templateValue' ) )
    $show1 = $show1->templateValue();
$show = ( ( $show1 ) > ( 0 ) );
unset( $show1 );
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '    <h3>';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'grouped_related_contentobjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['grouped_related_contentobjects'] : null;
$var4 = compiledFetchAttribute( $var3, 'images' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var3Data = array( 'value' => $var3 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $var3Data, false, false );
$var3 = $var3Data['value'];
unset( $var3Data );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%related_images' => $var3 );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var3 = array();
foreach ( $var2 as $var4 => $var5 )
{
  if ( is_int( $var4 ) )
    $var3['%' . ( ($var4%9) + 1 )] = $var5;
  else
    $var3[$var4] = $var5;
}
$var = strtr( 'Related images (%related_images)', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</h3>
    <table class="list-thumbnails" cellspacing="0">
    <tr>

        ';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'grouped_related_contentobjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['grouped_related_contentobjects'] : null;
$loopItem1 = compiledFetchAttribute( $loopItem, 'images' );
unset( $loopItem );
$loopItem = $loopItem1;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

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
$vars[$currentNamespace]['RelatedImageObjects'] = $variableValue;
$sectionStack[] = array( &$variableValue, &$loopItem, $loopKeys, $loopCount, $currentIndex, $index );
unset( $loopItem, $loopKeys );

if ( $currentIndex > 1 and ( ( $currentIndex - 1 ) % 4 ) == 0 )
{
$text .= '        </tr><tr>
        ';
}

$text .= '        <td>
        <div class="image-thumbnail-item">
            ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedImageObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedImageObjects'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'item' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'can_read' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                ';
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
        2 => 'RelatedImageObjects',
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
          1 => 'item',
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
          1 => 'image',
          2 => false,
        ),
      ),
      2 => false,
    ),
  ),
  'image_class' => 
  array (
    0 => 
    array (
      0 => 3,
      1 => 'small',
      2 => false,
    ),
  ),
),
                       array (
  0 => 
  array (
    0 => 36,
    1 => 16,
    2 => 1576,
  ),
  1 => 
  array (
    0 => 36,
    1 => 103,
    2 => 1663,
  ),
  2 => 'design/admin2/templates/content/edit_relations.tpl',
),
                       $rootNamespace, $currentNamespace );
$text .= implode( '', $textElements );

$text .= '                <p>
                    <input type="checkbox" id="related-object-id-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedImageObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedImageObjects'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" name="DeleteRelationIDArray[]" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedImageObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedImageObjects'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_contentobjects_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_contentobjects_id'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'common' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedImageObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedImageObjects'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'item' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'id' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
if( is_string( $if_cond2 ) )
{
  $if_cond1 = ( strpos( $if_cond2, $if_cond3 ) !== false );
}
else if ( is_array( $if_cond2 ) )
{
  $if_cond1 = in_array( $if_cond3, $if_cond2 );
}
else
{
$if_cond1 = false;
}unset( $if_cond2, $if_cond3 );
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
$text .= 'disabled="disabled"';
}
unset( $if_cond );
// if ends

$text .= ' />
                    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedImageObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedImageObjects'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
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
            ';
}
else
{
$text .= '                <p>
                    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedImageObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedImageObjects'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
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

$text .= ' - You do not have permission to view this object
                </p>
            ';
}
unset( $if_cond );
// if ends

$text .= '           <input class="linkbox" type="text" value="&lt;embed href=\'ezobject://';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedImageObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedImageObjects'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\' /&gt;" readonly="readonly" title="Copy this code and paste it into an XML field to embed the object." /><br />
           <input class="linkbox" type="text" value="&lt;link href=\'ezobject://';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedImageObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedImageObjects'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\'&gt;&lt;/link&gt;" readonly="readonly" title="Copy this code and paste it into an XML field to link the object." /><br />
            ';
// def $relation_name_array
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'empty_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['empty_array'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'relation_name_array', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'relation_name_array' is already defined.", array (
  0 => 
  array (
    0 => 48,
    1 => 12,
    2 => 2815,
  ),
  1 => 
  array (
    0 => 48,
    1 => 51,
    2 => 2854,
  ),
  2 => 'design/admin2/templates/content/edit_relations.tpl',
) );
    $tpl->setVariable( 'relation_name_array', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'relation_name_array', $var, $rootNamespace );
}

$text .= '            ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_963ba73efeb552a4deb39f8fad1c0013_10 ) ) $fe_variable_stack_963ba73efeb552a4deb39f8fad1c0013_10 = array();
$fe_variable_stack_963ba73efeb552a4deb39f8fad1c0013_10[] = compact( 'fe_array_963ba73efeb552a4deb39f8fad1c0013_10', 'fe_array_keys_963ba73efeb552a4deb39f8fad1c0013_10', 'fe_n_items_963ba73efeb552a4deb39f8fad1c0013_10', 'fe_n_items_processed_963ba73efeb552a4deb39f8fad1c0013_10', 'fe_i_963ba73efeb552a4deb39f8fad1c0013_10', 'fe_key_963ba73efeb552a4deb39f8fad1c0013_10', 'fe_val_963ba73efeb552a4deb39f8fad1c0013_10', 'fe_offset_963ba73efeb552a4deb39f8fad1c0013_10', 'fe_max_963ba73efeb552a4deb39f8fad1c0013_10', 'fe_reverse_963ba73efeb552a4deb39f8fad1c0013_10', 'fe_first_val_963ba73efeb552a4deb39f8fad1c0013_10', 'fe_last_val_963ba73efeb552a4deb39f8fad1c0013_10' );
unset( $fe_array_963ba73efeb552a4deb39f8fad1c0013_10 );
unset( $fe_array_963ba73efeb552a4deb39f8fad1c0013_10 );
$fe_array_963ba73efeb552a4deb39f8fad1c0013_10 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_contentobjects_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_contentobjects_id'] : null;
if (! isset( $fe_array_963ba73efeb552a4deb39f8fad1c0013_10 ) ) $fe_array_963ba73efeb552a4deb39f8fad1c0013_10 = NULL;
while ( is_object( $fe_array_963ba73efeb552a4deb39f8fad1c0013_10 ) and method_exists( $fe_array_963ba73efeb552a4deb39f8fad1c0013_10, 'templateValue' ) )
    $fe_array_963ba73efeb552a4deb39f8fad1c0013_10 = $fe_array_963ba73efeb552a4deb39f8fad1c0013_10->templateValue();

$fe_array_keys_963ba73efeb552a4deb39f8fad1c0013_10 = is_array( $fe_array_963ba73efeb552a4deb39f8fad1c0013_10 ) ? array_keys( $fe_array_963ba73efeb552a4deb39f8fad1c0013_10 ) : array();
$fe_n_items_963ba73efeb552a4deb39f8fad1c0013_10 = count( $fe_array_keys_963ba73efeb552a4deb39f8fad1c0013_10 );
$fe_n_items_processed_963ba73efeb552a4deb39f8fad1c0013_10 = 0;
$fe_offset_963ba73efeb552a4deb39f8fad1c0013_10 = 0;
$fe_max_963ba73efeb552a4deb39f8fad1c0013_10 = $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_10 - $fe_offset_963ba73efeb552a4deb39f8fad1c0013_10;
$fe_reverse_963ba73efeb552a4deb39f8fad1c0013_10 = false;
if ( $fe_offset_963ba73efeb552a4deb39f8fad1c0013_10 < 0 || $fe_offset_963ba73efeb552a4deb39f8fad1c0013_10 >= $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_10 )
{
    $fe_offset_963ba73efeb552a4deb39f8fad1c0013_10 = ( $fe_offset_963ba73efeb552a4deb39f8fad1c0013_10 < 0 ) ? 0 : $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_10;
    if ( $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_10 || $fe_offset_963ba73efeb552a4deb39f8fad1c0013_10 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_963ba73efeb552a4deb39f8fad1c0013_10'. Array count: $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_10");   
}
}
if ( $fe_max_963ba73efeb552a4deb39f8fad1c0013_10 < 0 || $fe_offset_963ba73efeb552a4deb39f8fad1c0013_10 + $fe_max_963ba73efeb552a4deb39f8fad1c0013_10 > $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_10 )
{
    if ( $fe_max_963ba73efeb552a4deb39f8fad1c0013_10 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_963ba73efeb552a4deb39f8fad1c0013_10");
    $fe_max_963ba73efeb552a4deb39f8fad1c0013_10 = $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_10 - $fe_offset_963ba73efeb552a4deb39f8fad1c0013_10;
}
if ( $fe_reverse_963ba73efeb552a4deb39f8fad1c0013_10 )
{
    $fe_first_val_963ba73efeb552a4deb39f8fad1c0013_10 = $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_10 - 1 - $fe_offset_963ba73efeb552a4deb39f8fad1c0013_10;
    $fe_last_val_963ba73efeb552a4deb39f8fad1c0013_10  = 0;
}
else
{
    $fe_first_val_963ba73efeb552a4deb39f8fad1c0013_10 = $fe_offset_963ba73efeb552a4deb39f8fad1c0013_10;
    $fe_last_val_963ba73efeb552a4deb39f8fad1c0013_10  = $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_10 - 1;
}
// foreach
for ( $fe_i_963ba73efeb552a4deb39f8fad1c0013_10 = $fe_first_val_963ba73efeb552a4deb39f8fad1c0013_10; $fe_n_items_processed_963ba73efeb552a4deb39f8fad1c0013_10 < $fe_max_963ba73efeb552a4deb39f8fad1c0013_10 && ( $fe_reverse_963ba73efeb552a4deb39f8fad1c0013_10 ? $fe_i_963ba73efeb552a4deb39f8fad1c0013_10 >= $fe_last_val_963ba73efeb552a4deb39f8fad1c0013_10 : $fe_i_963ba73efeb552a4deb39f8fad1c0013_10 <= $fe_last_val_963ba73efeb552a4deb39f8fad1c0013_10 ); $fe_reverse_963ba73efeb552a4deb39f8fad1c0013_10 ? $fe_i_963ba73efeb552a4deb39f8fad1c0013_10-- : $fe_i_963ba73efeb552a4deb39f8fad1c0013_10++ )
{
$fe_key_963ba73efeb552a4deb39f8fad1c0013_10 = $fe_array_keys_963ba73efeb552a4deb39f8fad1c0013_10[$fe_i_963ba73efeb552a4deb39f8fad1c0013_10];
$fe_val_963ba73efeb552a4deb39f8fad1c0013_10 = $fe_array_963ba73efeb552a4deb39f8fad1c0013_10[$fe_key_963ba73efeb552a4deb39f8fad1c0013_10];
$vars[$rootNamespace]['relation_id_array'] = $fe_val_963ba73efeb552a4deb39f8fad1c0013_10;
$vars[$rootNamespace]['relation_type'] = $fe_key_963ba73efeb552a4deb39f8fad1c0013_10;
$text .= '                ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_id_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_id_array'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedImageObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedImageObjects'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'item' );
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
$text .= '                    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_type_names', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_type_names'] : null;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_type'] : null;
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
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_name_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_name_array'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( is_string( $var2 ) )
    $var = $var2 . implode( '', array( $var1 ) );
else if( is_array( $var2 ) )
    $var = array_merge( $var2, array( $var1 ) );
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'relation_name_array', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['relation_name_array'] = $var;
    unset( $var );
}
$text .= '                ';
}
unset( $if_cond );
// if ends

$text .= '            ';
$fe_n_items_processed_963ba73efeb552a4deb39f8fad1c0013_10++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_963ba73efeb552a4deb39f8fad1c0013_10 ) ) extract( array_pop( $fe_variable_stack_963ba73efeb552a4deb39f8fad1c0013_10 ) );

else
{

unset( $fe_array_963ba73efeb552a4deb39f8fad1c0013_10 );

unset( $fe_array_keys_963ba73efeb552a4deb39f8fad1c0013_10 );

unset( $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_10 );

unset( $fe_n_items_processed_963ba73efeb552a4deb39f8fad1c0013_10 );

unset( $fe_i_963ba73efeb552a4deb39f8fad1c0013_10 );

unset( $fe_key_963ba73efeb552a4deb39f8fad1c0013_10 );

unset( $fe_val_963ba73efeb552a4deb39f8fad1c0013_10 );

unset( $fe_offset_963ba73efeb552a4deb39f8fad1c0013_10 );

unset( $fe_max_963ba73efeb552a4deb39f8fad1c0013_10 );

unset( $fe_reverse_963ba73efeb552a4deb39f8fad1c0013_10 );

unset( $fe_first_val_963ba73efeb552a4deb39f8fad1c0013_10 );

unset( $fe_last_val_963ba73efeb552a4deb39f8fad1c0013_10 );

unset( $fe_variable_stack_963ba73efeb552a4deb39f8fad1c0013_10 );

}

// foreach ends
$text .= '            (';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_name_delimiter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_name_delimiter'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_name_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_name_array'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = implode( $var1, $var2 );unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= ')
            ';
// undef $relation_name_array
$tpl->unsetLocalVariable( 'relation_name_array', $rootNamespace );

$text .= '        </div>
        </td>
                ';
list( $variableValue, $loopItem, $loopKeys, $loopCount, $currentIndex, $index ) = array_pop( $sectionStack );
++$currentIndex;

$lastVariableValue = $variableValue;
++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem );
$text .= '
    </tr>
    </table>

    ';
}

$text .= '


    
    ';
unset( $show );
unset( $show1 );
unset( $show1 );
$show1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'grouped_related_contentobjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['grouped_related_contentobjects'] : null;
$show2 = compiledFetchAttribute( $show1, 'files' );
unset( $show1 );
$show1 = $show2;
if (! isset( $show1 ) ) $show1 = NULL;
while ( is_object( $show1 ) and method_exists( $show1, 'templateValue' ) )
    $show1 = $show1->templateValue();
$show1Data = array( 'value' => $show1 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $show1Data, false, false );
$show1 = $show1Data['value'];
unset( $show1Data );
if (! isset( $show1 ) ) $show1 = NULL;
while ( is_object( $show1 ) and method_exists( $show1, 'templateValue' ) )
    $show1 = $show1->templateValue();
$show = ( ( $show1 ) > ( 0 ) );
unset( $show1 );
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '    <h3>';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'grouped_related_contentobjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['grouped_related_contentobjects'] : null;
$var4 = compiledFetchAttribute( $var3, 'files' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var3Data = array( 'value' => $var3 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $var3Data, false, false );
$var3 = $var3Data['value'];
unset( $var3Data );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%related_files' => $var3 );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var3 = array();
foreach ( $var2 as $var4 => $var5 )
{
  if ( is_int( $var4 ) )
    $var3['%' . ( ($var4%9) + 1 )] = $var5;
  else
    $var3[$var4] = $var5;
}
$var = strtr( 'Related files (%related_files)', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</h3>
        <div class="file-detail-list">

            <table class="list" cellspacing="0">
            <tr>
                <th>&nbsp;</th>
                <th class="name">Name</th>
                <th class="filetype nowrap">File type</th>
                <th class="filesize nowrap">Size</th>
                <th class="code">XML code</th>
                <th class="code">Relation type</th>
            </tr>

            ';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'grouped_related_contentobjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['grouped_related_contentobjects'] : null;
$loopItem1 = compiledFetchAttribute( $loopItem, 'files' );
unset( $loopItem );
$loopItem = $loopItem1;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

$sequence = array (
  0 => 'bglight',
  1 => 'bgdark',
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
$vars[$currentNamespace]['RelatedFileObjects'] = $variableValue;
if ( is_array( $sequence ) )
{
    $sequenceValue = array_shift( $sequence );
    $variableValue->setSequence( $sequenceValue );
    $sequence[] = $sequenceValue;
    unset( $sequenceValue );
}
$vars[$currentNamespace]['RelatedFileObjects'] = $variableValue;
$sectionStack[] = array( &$variableValue, &$loopItem, $loopKeys, $loopCount, $currentIndex, $index, $sequence );
unset( $loopItem, $loopKeys );

$text .= '                <tr class="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedFileObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedFileObjects'] : null;
$var2 = compiledFetchAttribute( $var1, 'sequence' );
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

$text .= '">
                    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedFileObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedFileObjects'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'item' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'can_read' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                        <td class="checkbox"><input type="checkbox" id="related-object-id-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedFileObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedFileObjects'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" name="DeleteRelationIDArray[]" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedFileObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedFileObjects'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_contentobjects_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_contentobjects_id'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'common' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedFileObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedFileObjects'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'item' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'id' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
if( is_string( $if_cond2 ) )
{
  $if_cond1 = ( strpos( $if_cond2, $if_cond3 ) !== false );
}
else if ( is_array( $if_cond2 ) )
{
  $if_cond1 = in_array( $if_cond3, $if_cond2 );
}
else
{
$if_cond1 = false;
}unset( $if_cond2, $if_cond3 );
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
$text .= 'disabled="disabled"';
}
unset( $if_cond );
// if ends

$text .= ' /></td>
                        <td class="name">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedFileObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedFileObjects'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'class_name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'class_icon',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 3,
      1 => 'small',
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'RelatedFileObjects',
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
          1 => 'class_name',
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
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '&nbsp;';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedFileObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedFileObjects'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
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

$text .= '</td>
                        <td class="filetype">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedFileObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedFileObjects'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'file' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'content' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'mime_type' );
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

$text .= '</td>
                        <td class="filesize nowrap">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedFileObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedFileObjects'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'data_map' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'file' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'content' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'filesize' );
unset( $var1 );
$var1 = $var2;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
if ( $var1 >= 0 and $var1 < 10 )
{
    $var6 = '';
}
else
{
    $var6 = "";
    foreach ( array (
  0 => 
  array (
    0 => '60',
    1 => 'E',
  ),
  1 => 
  array (
    0 => '50',
    1 => 'P',
  ),
  2 => 
  array (
    0 => '40',
    1 => 'T',
  ),
  3 => 
  array (
    0 => '30',
    1 => 'G',
  ),
  4 => 
  array (
    0 => '20',
    1 => 'M',
  ),
  5 => 
  array (
    0 => '10',
    1 => 'k',
  ),
) as $var4 )
    {
      $var5 = pow( 2, (int)$var4[0] );
      if ( $var5 <= $var1 )
      {
        $var6 = $var4[1];
        $var1 = number_format( $var1 / $var5, 2, ".", "," );
        break;
      }
    }
}
$var = $var1 . ' ' . $var6 . 'B';unset( $var1, $var4, $var5, $var6 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</td>
                        <td class="code">
                            <input class="linkbox" type="text" value="&lt;embed href=\'ezobject://';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedFileObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedFileObjects'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\' /&gt;" readonly="readonly" title="Copy this code and paste it into an XML field to embed the object." /><br />
                            <input class="linkbox" type="text" value="&lt;link href=\'ezobject://';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedFileObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedFileObjects'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\'&gt;&lt;/link&gt;" readonly="readonly" title="Copy this code and paste it into an XML field to link the object." />
                        </td>
                        <td class="code">
                            ';
// def $relation_name_array
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'empty_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['empty_array'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'relation_name_array', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'relation_name_array' is already defined.", array (
  0 => 
  array (
    0 => 97,
    1 => 28,
    2 => 5997,
  ),
  1 => 
  array (
    0 => 97,
    1 => 67,
    2 => 6036,
  ),
  2 => 'design/admin2/templates/content/edit_relations.tpl',
) );
    $tpl->setVariable( 'relation_name_array', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'relation_name_array', $var, $rootNamespace );
}

$text .= '                            ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_963ba73efeb552a4deb39f8fad1c0013_11 ) ) $fe_variable_stack_963ba73efeb552a4deb39f8fad1c0013_11 = array();
$fe_variable_stack_963ba73efeb552a4deb39f8fad1c0013_11[] = compact( 'fe_array_963ba73efeb552a4deb39f8fad1c0013_11', 'fe_array_keys_963ba73efeb552a4deb39f8fad1c0013_11', 'fe_n_items_963ba73efeb552a4deb39f8fad1c0013_11', 'fe_n_items_processed_963ba73efeb552a4deb39f8fad1c0013_11', 'fe_i_963ba73efeb552a4deb39f8fad1c0013_11', 'fe_key_963ba73efeb552a4deb39f8fad1c0013_11', 'fe_val_963ba73efeb552a4deb39f8fad1c0013_11', 'fe_offset_963ba73efeb552a4deb39f8fad1c0013_11', 'fe_max_963ba73efeb552a4deb39f8fad1c0013_11', 'fe_reverse_963ba73efeb552a4deb39f8fad1c0013_11', 'fe_first_val_963ba73efeb552a4deb39f8fad1c0013_11', 'fe_last_val_963ba73efeb552a4deb39f8fad1c0013_11' );
unset( $fe_array_963ba73efeb552a4deb39f8fad1c0013_11 );
unset( $fe_array_963ba73efeb552a4deb39f8fad1c0013_11 );
$fe_array_963ba73efeb552a4deb39f8fad1c0013_11 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_contentobjects_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_contentobjects_id'] : null;
if (! isset( $fe_array_963ba73efeb552a4deb39f8fad1c0013_11 ) ) $fe_array_963ba73efeb552a4deb39f8fad1c0013_11 = NULL;
while ( is_object( $fe_array_963ba73efeb552a4deb39f8fad1c0013_11 ) and method_exists( $fe_array_963ba73efeb552a4deb39f8fad1c0013_11, 'templateValue' ) )
    $fe_array_963ba73efeb552a4deb39f8fad1c0013_11 = $fe_array_963ba73efeb552a4deb39f8fad1c0013_11->templateValue();

$fe_array_keys_963ba73efeb552a4deb39f8fad1c0013_11 = is_array( $fe_array_963ba73efeb552a4deb39f8fad1c0013_11 ) ? array_keys( $fe_array_963ba73efeb552a4deb39f8fad1c0013_11 ) : array();
$fe_n_items_963ba73efeb552a4deb39f8fad1c0013_11 = count( $fe_array_keys_963ba73efeb552a4deb39f8fad1c0013_11 );
$fe_n_items_processed_963ba73efeb552a4deb39f8fad1c0013_11 = 0;
$fe_offset_963ba73efeb552a4deb39f8fad1c0013_11 = 0;
$fe_max_963ba73efeb552a4deb39f8fad1c0013_11 = $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_11 - $fe_offset_963ba73efeb552a4deb39f8fad1c0013_11;
$fe_reverse_963ba73efeb552a4deb39f8fad1c0013_11 = false;
if ( $fe_offset_963ba73efeb552a4deb39f8fad1c0013_11 < 0 || $fe_offset_963ba73efeb552a4deb39f8fad1c0013_11 >= $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_11 )
{
    $fe_offset_963ba73efeb552a4deb39f8fad1c0013_11 = ( $fe_offset_963ba73efeb552a4deb39f8fad1c0013_11 < 0 ) ? 0 : $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_11;
    if ( $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_11 || $fe_offset_963ba73efeb552a4deb39f8fad1c0013_11 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_963ba73efeb552a4deb39f8fad1c0013_11'. Array count: $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_11");   
}
}
if ( $fe_max_963ba73efeb552a4deb39f8fad1c0013_11 < 0 || $fe_offset_963ba73efeb552a4deb39f8fad1c0013_11 + $fe_max_963ba73efeb552a4deb39f8fad1c0013_11 > $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_11 )
{
    if ( $fe_max_963ba73efeb552a4deb39f8fad1c0013_11 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_963ba73efeb552a4deb39f8fad1c0013_11");
    $fe_max_963ba73efeb552a4deb39f8fad1c0013_11 = $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_11 - $fe_offset_963ba73efeb552a4deb39f8fad1c0013_11;
}
if ( $fe_reverse_963ba73efeb552a4deb39f8fad1c0013_11 )
{
    $fe_first_val_963ba73efeb552a4deb39f8fad1c0013_11 = $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_11 - 1 - $fe_offset_963ba73efeb552a4deb39f8fad1c0013_11;
    $fe_last_val_963ba73efeb552a4deb39f8fad1c0013_11  = 0;
}
else
{
    $fe_first_val_963ba73efeb552a4deb39f8fad1c0013_11 = $fe_offset_963ba73efeb552a4deb39f8fad1c0013_11;
    $fe_last_val_963ba73efeb552a4deb39f8fad1c0013_11  = $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_11 - 1;
}
// foreach
for ( $fe_i_963ba73efeb552a4deb39f8fad1c0013_11 = $fe_first_val_963ba73efeb552a4deb39f8fad1c0013_11; $fe_n_items_processed_963ba73efeb552a4deb39f8fad1c0013_11 < $fe_max_963ba73efeb552a4deb39f8fad1c0013_11 && ( $fe_reverse_963ba73efeb552a4deb39f8fad1c0013_11 ? $fe_i_963ba73efeb552a4deb39f8fad1c0013_11 >= $fe_last_val_963ba73efeb552a4deb39f8fad1c0013_11 : $fe_i_963ba73efeb552a4deb39f8fad1c0013_11 <= $fe_last_val_963ba73efeb552a4deb39f8fad1c0013_11 ); $fe_reverse_963ba73efeb552a4deb39f8fad1c0013_11 ? $fe_i_963ba73efeb552a4deb39f8fad1c0013_11-- : $fe_i_963ba73efeb552a4deb39f8fad1c0013_11++ )
{
$fe_key_963ba73efeb552a4deb39f8fad1c0013_11 = $fe_array_keys_963ba73efeb552a4deb39f8fad1c0013_11[$fe_i_963ba73efeb552a4deb39f8fad1c0013_11];
$fe_val_963ba73efeb552a4deb39f8fad1c0013_11 = $fe_array_963ba73efeb552a4deb39f8fad1c0013_11[$fe_key_963ba73efeb552a4deb39f8fad1c0013_11];
$vars[$rootNamespace]['relation_id_array'] = $fe_val_963ba73efeb552a4deb39f8fad1c0013_11;
$vars[$rootNamespace]['relation_type'] = $fe_key_963ba73efeb552a4deb39f8fad1c0013_11;
$text .= '                                ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_id_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_id_array'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedFileObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedFileObjects'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'item' );
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
$text .= '                                    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_type_names', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_type_names'] : null;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_type'] : null;
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
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_name_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_name_array'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( is_string( $var2 ) )
    $var = $var2 . implode( '', array( $var1 ) );
else if( is_array( $var2 ) )
    $var = array_merge( $var2, array( $var1 ) );
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'relation_name_array', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['relation_name_array'] = $var;
    unset( $var );
}
$text .= '                                ';
}
unset( $if_cond );
// if ends

$text .= '                            ';
$fe_n_items_processed_963ba73efeb552a4deb39f8fad1c0013_11++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_963ba73efeb552a4deb39f8fad1c0013_11 ) ) extract( array_pop( $fe_variable_stack_963ba73efeb552a4deb39f8fad1c0013_11 ) );

else
{

unset( $fe_array_963ba73efeb552a4deb39f8fad1c0013_11 );

unset( $fe_array_keys_963ba73efeb552a4deb39f8fad1c0013_11 );

unset( $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_11 );

unset( $fe_n_items_processed_963ba73efeb552a4deb39f8fad1c0013_11 );

unset( $fe_i_963ba73efeb552a4deb39f8fad1c0013_11 );

unset( $fe_key_963ba73efeb552a4deb39f8fad1c0013_11 );

unset( $fe_val_963ba73efeb552a4deb39f8fad1c0013_11 );

unset( $fe_offset_963ba73efeb552a4deb39f8fad1c0013_11 );

unset( $fe_max_963ba73efeb552a4deb39f8fad1c0013_11 );

unset( $fe_reverse_963ba73efeb552a4deb39f8fad1c0013_11 );

unset( $fe_first_val_963ba73efeb552a4deb39f8fad1c0013_11 );

unset( $fe_last_val_963ba73efeb552a4deb39f8fad1c0013_11 );

unset( $fe_variable_stack_963ba73efeb552a4deb39f8fad1c0013_11 );

}

// foreach ends
$text .= '                            ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_name_delimiter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_name_delimiter'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_name_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_name_array'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = implode( $var1, $var2 );unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
                            ';
// undef $relation_name_array
$tpl->unsetLocalVariable( 'relation_name_array', $rootNamespace );

$text .= '                        </td>
                    ';
}
else
{
$text .= '                        <td class="checkbox">&nbsp;</td>
                        <td colspan="3">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedFileObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedFileObjects'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
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

$text .= ' - You do not have permission to view this object</td>
                        <td class="code">
                            <input class="linkbox" type="text" value="&lt;embed href=\'ezobject://';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedFileObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedFileObjects'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\' /&gt;" readonly="readonly" title="Copy this code and paste it into an XML field to embed the object." /><br />
                            <input class="linkbox" type="text" value="&lt;link href=\'ezobject://';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedFileObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedFileObjects'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\'&gt;&lt;/link&gt;" readonly="readonly" title="Copy this code and paste it into an XML field to link the object." />
                        </td>
                        <td class="code">
                            ';
// def $relation_name_array
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'empty_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['empty_array'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'relation_name_array', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'relation_name_array' is already defined.", array (
  0 => 
  array (
    0 => 114,
    1 => 28,
    2 => 7582,
  ),
  1 => 
  array (
    0 => 114,
    1 => 67,
    2 => 7621,
  ),
  2 => 'design/admin2/templates/content/edit_relations.tpl',
) );
    $tpl->setVariable( 'relation_name_array', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'relation_name_array', $var, $rootNamespace );
}

$text .= '                            ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_963ba73efeb552a4deb39f8fad1c0013_12 ) ) $fe_variable_stack_963ba73efeb552a4deb39f8fad1c0013_12 = array();
$fe_variable_stack_963ba73efeb552a4deb39f8fad1c0013_12[] = compact( 'fe_array_963ba73efeb552a4deb39f8fad1c0013_12', 'fe_array_keys_963ba73efeb552a4deb39f8fad1c0013_12', 'fe_n_items_963ba73efeb552a4deb39f8fad1c0013_12', 'fe_n_items_processed_963ba73efeb552a4deb39f8fad1c0013_12', 'fe_i_963ba73efeb552a4deb39f8fad1c0013_12', 'fe_key_963ba73efeb552a4deb39f8fad1c0013_12', 'fe_val_963ba73efeb552a4deb39f8fad1c0013_12', 'fe_offset_963ba73efeb552a4deb39f8fad1c0013_12', 'fe_max_963ba73efeb552a4deb39f8fad1c0013_12', 'fe_reverse_963ba73efeb552a4deb39f8fad1c0013_12', 'fe_first_val_963ba73efeb552a4deb39f8fad1c0013_12', 'fe_last_val_963ba73efeb552a4deb39f8fad1c0013_12' );
unset( $fe_array_963ba73efeb552a4deb39f8fad1c0013_12 );
unset( $fe_array_963ba73efeb552a4deb39f8fad1c0013_12 );
$fe_array_963ba73efeb552a4deb39f8fad1c0013_12 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_contentobjects_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_contentobjects_id'] : null;
if (! isset( $fe_array_963ba73efeb552a4deb39f8fad1c0013_12 ) ) $fe_array_963ba73efeb552a4deb39f8fad1c0013_12 = NULL;
while ( is_object( $fe_array_963ba73efeb552a4deb39f8fad1c0013_12 ) and method_exists( $fe_array_963ba73efeb552a4deb39f8fad1c0013_12, 'templateValue' ) )
    $fe_array_963ba73efeb552a4deb39f8fad1c0013_12 = $fe_array_963ba73efeb552a4deb39f8fad1c0013_12->templateValue();

$fe_array_keys_963ba73efeb552a4deb39f8fad1c0013_12 = is_array( $fe_array_963ba73efeb552a4deb39f8fad1c0013_12 ) ? array_keys( $fe_array_963ba73efeb552a4deb39f8fad1c0013_12 ) : array();
$fe_n_items_963ba73efeb552a4deb39f8fad1c0013_12 = count( $fe_array_keys_963ba73efeb552a4deb39f8fad1c0013_12 );
$fe_n_items_processed_963ba73efeb552a4deb39f8fad1c0013_12 = 0;
$fe_offset_963ba73efeb552a4deb39f8fad1c0013_12 = 0;
$fe_max_963ba73efeb552a4deb39f8fad1c0013_12 = $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_12 - $fe_offset_963ba73efeb552a4deb39f8fad1c0013_12;
$fe_reverse_963ba73efeb552a4deb39f8fad1c0013_12 = false;
if ( $fe_offset_963ba73efeb552a4deb39f8fad1c0013_12 < 0 || $fe_offset_963ba73efeb552a4deb39f8fad1c0013_12 >= $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_12 )
{
    $fe_offset_963ba73efeb552a4deb39f8fad1c0013_12 = ( $fe_offset_963ba73efeb552a4deb39f8fad1c0013_12 < 0 ) ? 0 : $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_12;
    if ( $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_12 || $fe_offset_963ba73efeb552a4deb39f8fad1c0013_12 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_963ba73efeb552a4deb39f8fad1c0013_12'. Array count: $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_12");   
}
}
if ( $fe_max_963ba73efeb552a4deb39f8fad1c0013_12 < 0 || $fe_offset_963ba73efeb552a4deb39f8fad1c0013_12 + $fe_max_963ba73efeb552a4deb39f8fad1c0013_12 > $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_12 )
{
    if ( $fe_max_963ba73efeb552a4deb39f8fad1c0013_12 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_963ba73efeb552a4deb39f8fad1c0013_12");
    $fe_max_963ba73efeb552a4deb39f8fad1c0013_12 = $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_12 - $fe_offset_963ba73efeb552a4deb39f8fad1c0013_12;
}
if ( $fe_reverse_963ba73efeb552a4deb39f8fad1c0013_12 )
{
    $fe_first_val_963ba73efeb552a4deb39f8fad1c0013_12 = $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_12 - 1 - $fe_offset_963ba73efeb552a4deb39f8fad1c0013_12;
    $fe_last_val_963ba73efeb552a4deb39f8fad1c0013_12  = 0;
}
else
{
    $fe_first_val_963ba73efeb552a4deb39f8fad1c0013_12 = $fe_offset_963ba73efeb552a4deb39f8fad1c0013_12;
    $fe_last_val_963ba73efeb552a4deb39f8fad1c0013_12  = $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_12 - 1;
}
// foreach
for ( $fe_i_963ba73efeb552a4deb39f8fad1c0013_12 = $fe_first_val_963ba73efeb552a4deb39f8fad1c0013_12; $fe_n_items_processed_963ba73efeb552a4deb39f8fad1c0013_12 < $fe_max_963ba73efeb552a4deb39f8fad1c0013_12 && ( $fe_reverse_963ba73efeb552a4deb39f8fad1c0013_12 ? $fe_i_963ba73efeb552a4deb39f8fad1c0013_12 >= $fe_last_val_963ba73efeb552a4deb39f8fad1c0013_12 : $fe_i_963ba73efeb552a4deb39f8fad1c0013_12 <= $fe_last_val_963ba73efeb552a4deb39f8fad1c0013_12 ); $fe_reverse_963ba73efeb552a4deb39f8fad1c0013_12 ? $fe_i_963ba73efeb552a4deb39f8fad1c0013_12-- : $fe_i_963ba73efeb552a4deb39f8fad1c0013_12++ )
{
$fe_key_963ba73efeb552a4deb39f8fad1c0013_12 = $fe_array_keys_963ba73efeb552a4deb39f8fad1c0013_12[$fe_i_963ba73efeb552a4deb39f8fad1c0013_12];
$fe_val_963ba73efeb552a4deb39f8fad1c0013_12 = $fe_array_963ba73efeb552a4deb39f8fad1c0013_12[$fe_key_963ba73efeb552a4deb39f8fad1c0013_12];
$vars[$rootNamespace]['relation_id_array'] = $fe_val_963ba73efeb552a4deb39f8fad1c0013_12;
$vars[$rootNamespace]['relation_type'] = $fe_key_963ba73efeb552a4deb39f8fad1c0013_12;
$text .= '                                ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_id_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_id_array'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedFileObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedFileObjects'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'item' );
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
$text .= '                                    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_type_names', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_type_names'] : null;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_type'] : null;
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
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_name_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_name_array'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( is_string( $var2 ) )
    $var = $var2 . implode( '', array( $var1 ) );
else if( is_array( $var2 ) )
    $var = array_merge( $var2, array( $var1 ) );
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'relation_name_array', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['relation_name_array'] = $var;
    unset( $var );
}
$text .= '                                ';
}
unset( $if_cond );
// if ends

$text .= '                            ';
$fe_n_items_processed_963ba73efeb552a4deb39f8fad1c0013_12++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_963ba73efeb552a4deb39f8fad1c0013_12 ) ) extract( array_pop( $fe_variable_stack_963ba73efeb552a4deb39f8fad1c0013_12 ) );

else
{

unset( $fe_array_963ba73efeb552a4deb39f8fad1c0013_12 );

unset( $fe_array_keys_963ba73efeb552a4deb39f8fad1c0013_12 );

unset( $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_12 );

unset( $fe_n_items_processed_963ba73efeb552a4deb39f8fad1c0013_12 );

unset( $fe_i_963ba73efeb552a4deb39f8fad1c0013_12 );

unset( $fe_key_963ba73efeb552a4deb39f8fad1c0013_12 );

unset( $fe_val_963ba73efeb552a4deb39f8fad1c0013_12 );

unset( $fe_offset_963ba73efeb552a4deb39f8fad1c0013_12 );

unset( $fe_max_963ba73efeb552a4deb39f8fad1c0013_12 );

unset( $fe_reverse_963ba73efeb552a4deb39f8fad1c0013_12 );

unset( $fe_first_val_963ba73efeb552a4deb39f8fad1c0013_12 );

unset( $fe_last_val_963ba73efeb552a4deb39f8fad1c0013_12 );

unset( $fe_variable_stack_963ba73efeb552a4deb39f8fad1c0013_12 );

}

// foreach ends
$text .= '                            ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_name_delimiter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_name_delimiter'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_name_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_name_array'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = implode( $var1, $var2 );unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
                            ';
// undef $relation_name_array
$tpl->unsetLocalVariable( 'relation_name_array', $rootNamespace );

$text .= '                        </td>
                    ';
}
unset( $if_cond );
// if ends

$text .= '                </tr>

            ';
list( $variableValue, $loopItem, $loopKeys, $loopCount, $currentIndex, $index, $sequence ) = array_pop( $sectionStack );
++$currentIndex;

$lastVariableValue = $variableValue;
++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem, $sequence );
$text .= '
            </table>
        </div>
    ';
}

$text .= '

    
    ';
unset( $show );
unset( $show1 );
unset( $show1 );
$show1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'grouped_related_contentobjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['grouped_related_contentobjects'] : null;
$show2 = compiledFetchAttribute( $show1, 'objects' );
unset( $show1 );
$show1 = $show2;
if (! isset( $show1 ) ) $show1 = NULL;
while ( is_object( $show1 ) and method_exists( $show1, 'templateValue' ) )
    $show1 = $show1->templateValue();
$show1Data = array( 'value' => $show1 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $show1Data, false, false );
$show1 = $show1Data['value'];
unset( $show1Data );
if (! isset( $show1 ) ) $show1 = NULL;
while ( is_object( $show1 ) and method_exists( $show1, 'templateValue' ) )
    $show1 = $show1->templateValue();
$show = ( ( $show1 ) > ( 0 ) );
unset( $show1 );
if (! isset( $show ) ) $show = NULL;
while ( is_object( $show ) and method_exists( $show, 'templateValue' ) )
    $show = $show->templateValue();

if ( $show )
{

unset( $show );

$text .= '    <h3>';
unset( $var );
unset( $var2 );
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'grouped_related_contentobjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['grouped_related_contentobjects'] : null;
$var4 = compiledFetchAttribute( $var3, 'objects' );
unset( $var3 );
$var3 = $var4;
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var3Data = array( 'value' => $var3 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $var3Data, false, false );
$var3 = $var3Data['value'];
unset( $var3Data );
if (! isset( $var3 ) ) $var3 = NULL;
while ( is_object( $var3 ) and method_exists( $var3, 'templateValue' ) )
    $var3 = $var3->templateValue();
$var2 = array( '%related_objects' => $var3 );unset( $var3 );
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var3 = array();
foreach ( $var2 as $var4 => $var5 )
{
  if ( is_int( $var4 ) )
    $var3['%' . ( ($var4%9) + 1 )] = $var5;
  else
    $var3[$var4] = $var5;
}
$var = strtr( 'Related content (%related_objects)', $var3 );
unset( $var2, $var3, $var4, $var5 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '</h3>
        <div class="related-detail-list">

            <table class="list" cellspacing="0">
            <tr>
                <th>&nbsp;</th>
                <th class="name">Name</th>
                <th class="class nowrap">Type</th>
                <th class="code">XML code</th>
                <th class="code">Relation type</th>
            </tr>

            ';
unset( $loopItem );
unset( $loopItem );
$loopItem = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'grouped_related_contentobjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['grouped_related_contentobjects'] : null;
$loopItem1 = compiledFetchAttribute( $loopItem, 'objects' );
unset( $loopItem );
$loopItem = $loopItem1;
if (! isset( $loopItem ) ) $loopItem = NULL;
while ( is_object( $loopItem ) and method_exists( $loopItem, 'templateValue' ) )
    $loopItem = $loopItem->templateValue();

$sequence = array (
  0 => 'bglight',
  1 => 'bgdark',
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
$vars[$currentNamespace]['RelatedObjects'] = $variableValue;
if ( is_array( $sequence ) )
{
    $sequenceValue = array_shift( $sequence );
    $variableValue->setSequence( $sequenceValue );
    $sequence[] = $sequenceValue;
    unset( $sequenceValue );
}
$vars[$currentNamespace]['RelatedObjects'] = $variableValue;
$sectionStack[] = array( &$variableValue, &$loopItem, $loopKeys, $loopCount, $currentIndex, $index, $sequence );
unset( $loopItem, $loopKeys );

$text .= '
                <tr class="';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedObjects'] : null;
$var2 = compiledFetchAttribute( $var1, 'sequence' );
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

$text .= '">
                    ';
// if begins
unset( $if_cond );
unset( $if_cond );
$if_cond = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedObjects'] : null;
$if_cond1 = compiledFetchAttribute( $if_cond, 'item' );
unset( $if_cond );
$if_cond = $if_cond1;
$if_cond1 = compiledFetchAttribute( $if_cond, 'can_read' );
unset( $if_cond );
$if_cond = $if_cond1;
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '                        <td class="checkbox"><input type="checkbox" id="related-object-id-';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedObjects'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" name="DeleteRelationIDArray[]" value="';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedObjects'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '" ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_contentobjects_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_contentobjects_id'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'common' );
unset( $if_cond2 );
$if_cond2 = $if_cond3;
if (! isset( $if_cond2 ) ) $if_cond2 = NULL;
while ( is_object( $if_cond2 ) and method_exists( $if_cond2, 'templateValue' ) )
    $if_cond2 = $if_cond2->templateValue();
unset( $if_cond3 );
unset( $if_cond3 );
$if_cond3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedObjects'] : null;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'item' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
$if_cond4 = compiledFetchAttribute( $if_cond3, 'id' );
unset( $if_cond3 );
$if_cond3 = $if_cond4;
if (! isset( $if_cond3 ) ) $if_cond3 = NULL;
while ( is_object( $if_cond3 ) and method_exists( $if_cond3, 'templateValue' ) )
    $if_cond3 = $if_cond3->templateValue();
if( is_string( $if_cond2 ) )
{
  $if_cond1 = ( strpos( $if_cond2, $if_cond3 ) !== false );
}
else if ( is_array( $if_cond2 ) )
{
  $if_cond1 = in_array( $if_cond3, $if_cond2 );
}
else
{
$if_cond1 = false;
}unset( $if_cond2, $if_cond3 );
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
$text .= 'disabled="disabled"';
}
unset( $if_cond );
// if ends

$text .= ' /></td>
                        <td class="name">';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedObjects'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'class_name' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'class_icon',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 3,
      1 => 'small',
      2 => false,
    ),
  ),
  1 => 
  array (
    0 => 
    array (
      0 => 4,
      1 => 
      array (
        0 => '',
        1 => 2,
        2 => 'RelatedObjects',
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
          1 => 'class_name',
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
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '&nbsp;';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedObjects'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
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

$text .= '</td>
                        <td class="class nowrap">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedObjects'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
unset( $var1 );
$var1 = $var2;
$var2 = compiledFetchAttribute( $var1, 'class_name' );
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

$text .= '</td>
                        <td class="code">
                            <input class="linkbox" type="text" value="&lt;embed href=\'ezobject://';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedObjects'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\' /&gt;" readonly="readonly" title="Copy this code and paste it into an XML field to embed the object." /><br />
                            <input class="linkbox" type="text" value="&lt;link href=\'ezobject://';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedObjects'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\'&gt;&lt;/link&gt;" readonly="readonly" title="Copy this code and paste it into an XML field to link the object." />
                        </td>
                        <td class="code">
                            ';
// def $relation_name_array
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'empty_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['empty_array'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'relation_name_array', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'relation_name_array' is already defined.", array (
  0 => 
  array (
    0 => 159,
    1 => 28,
    2 => 10595,
  ),
  1 => 
  array (
    0 => 159,
    1 => 67,
    2 => 10634,
  ),
  2 => 'design/admin2/templates/content/edit_relations.tpl',
) );
    $tpl->setVariable( 'relation_name_array', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'relation_name_array', $var, $rootNamespace );
}

$text .= '                            ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_963ba73efeb552a4deb39f8fad1c0013_13 ) ) $fe_variable_stack_963ba73efeb552a4deb39f8fad1c0013_13 = array();
$fe_variable_stack_963ba73efeb552a4deb39f8fad1c0013_13[] = compact( 'fe_array_963ba73efeb552a4deb39f8fad1c0013_13', 'fe_array_keys_963ba73efeb552a4deb39f8fad1c0013_13', 'fe_n_items_963ba73efeb552a4deb39f8fad1c0013_13', 'fe_n_items_processed_963ba73efeb552a4deb39f8fad1c0013_13', 'fe_i_963ba73efeb552a4deb39f8fad1c0013_13', 'fe_key_963ba73efeb552a4deb39f8fad1c0013_13', 'fe_val_963ba73efeb552a4deb39f8fad1c0013_13', 'fe_offset_963ba73efeb552a4deb39f8fad1c0013_13', 'fe_max_963ba73efeb552a4deb39f8fad1c0013_13', 'fe_reverse_963ba73efeb552a4deb39f8fad1c0013_13', 'fe_first_val_963ba73efeb552a4deb39f8fad1c0013_13', 'fe_last_val_963ba73efeb552a4deb39f8fad1c0013_13' );
unset( $fe_array_963ba73efeb552a4deb39f8fad1c0013_13 );
unset( $fe_array_963ba73efeb552a4deb39f8fad1c0013_13 );
$fe_array_963ba73efeb552a4deb39f8fad1c0013_13 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_contentobjects_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_contentobjects_id'] : null;
if (! isset( $fe_array_963ba73efeb552a4deb39f8fad1c0013_13 ) ) $fe_array_963ba73efeb552a4deb39f8fad1c0013_13 = NULL;
while ( is_object( $fe_array_963ba73efeb552a4deb39f8fad1c0013_13 ) and method_exists( $fe_array_963ba73efeb552a4deb39f8fad1c0013_13, 'templateValue' ) )
    $fe_array_963ba73efeb552a4deb39f8fad1c0013_13 = $fe_array_963ba73efeb552a4deb39f8fad1c0013_13->templateValue();

$fe_array_keys_963ba73efeb552a4deb39f8fad1c0013_13 = is_array( $fe_array_963ba73efeb552a4deb39f8fad1c0013_13 ) ? array_keys( $fe_array_963ba73efeb552a4deb39f8fad1c0013_13 ) : array();
$fe_n_items_963ba73efeb552a4deb39f8fad1c0013_13 = count( $fe_array_keys_963ba73efeb552a4deb39f8fad1c0013_13 );
$fe_n_items_processed_963ba73efeb552a4deb39f8fad1c0013_13 = 0;
$fe_offset_963ba73efeb552a4deb39f8fad1c0013_13 = 0;
$fe_max_963ba73efeb552a4deb39f8fad1c0013_13 = $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_13 - $fe_offset_963ba73efeb552a4deb39f8fad1c0013_13;
$fe_reverse_963ba73efeb552a4deb39f8fad1c0013_13 = false;
if ( $fe_offset_963ba73efeb552a4deb39f8fad1c0013_13 < 0 || $fe_offset_963ba73efeb552a4deb39f8fad1c0013_13 >= $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_13 )
{
    $fe_offset_963ba73efeb552a4deb39f8fad1c0013_13 = ( $fe_offset_963ba73efeb552a4deb39f8fad1c0013_13 < 0 ) ? 0 : $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_13;
    if ( $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_13 || $fe_offset_963ba73efeb552a4deb39f8fad1c0013_13 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_963ba73efeb552a4deb39f8fad1c0013_13'. Array count: $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_13");   
}
}
if ( $fe_max_963ba73efeb552a4deb39f8fad1c0013_13 < 0 || $fe_offset_963ba73efeb552a4deb39f8fad1c0013_13 + $fe_max_963ba73efeb552a4deb39f8fad1c0013_13 > $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_13 )
{
    if ( $fe_max_963ba73efeb552a4deb39f8fad1c0013_13 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_963ba73efeb552a4deb39f8fad1c0013_13");
    $fe_max_963ba73efeb552a4deb39f8fad1c0013_13 = $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_13 - $fe_offset_963ba73efeb552a4deb39f8fad1c0013_13;
}
if ( $fe_reverse_963ba73efeb552a4deb39f8fad1c0013_13 )
{
    $fe_first_val_963ba73efeb552a4deb39f8fad1c0013_13 = $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_13 - 1 - $fe_offset_963ba73efeb552a4deb39f8fad1c0013_13;
    $fe_last_val_963ba73efeb552a4deb39f8fad1c0013_13  = 0;
}
else
{
    $fe_first_val_963ba73efeb552a4deb39f8fad1c0013_13 = $fe_offset_963ba73efeb552a4deb39f8fad1c0013_13;
    $fe_last_val_963ba73efeb552a4deb39f8fad1c0013_13  = $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_13 - 1;
}
// foreach
for ( $fe_i_963ba73efeb552a4deb39f8fad1c0013_13 = $fe_first_val_963ba73efeb552a4deb39f8fad1c0013_13; $fe_n_items_processed_963ba73efeb552a4deb39f8fad1c0013_13 < $fe_max_963ba73efeb552a4deb39f8fad1c0013_13 && ( $fe_reverse_963ba73efeb552a4deb39f8fad1c0013_13 ? $fe_i_963ba73efeb552a4deb39f8fad1c0013_13 >= $fe_last_val_963ba73efeb552a4deb39f8fad1c0013_13 : $fe_i_963ba73efeb552a4deb39f8fad1c0013_13 <= $fe_last_val_963ba73efeb552a4deb39f8fad1c0013_13 ); $fe_reverse_963ba73efeb552a4deb39f8fad1c0013_13 ? $fe_i_963ba73efeb552a4deb39f8fad1c0013_13-- : $fe_i_963ba73efeb552a4deb39f8fad1c0013_13++ )
{
$fe_key_963ba73efeb552a4deb39f8fad1c0013_13 = $fe_array_keys_963ba73efeb552a4deb39f8fad1c0013_13[$fe_i_963ba73efeb552a4deb39f8fad1c0013_13];
$fe_val_963ba73efeb552a4deb39f8fad1c0013_13 = $fe_array_963ba73efeb552a4deb39f8fad1c0013_13[$fe_key_963ba73efeb552a4deb39f8fad1c0013_13];
$vars[$rootNamespace]['relation_id_array'] = $fe_val_963ba73efeb552a4deb39f8fad1c0013_13;
$vars[$rootNamespace]['relation_type'] = $fe_key_963ba73efeb552a4deb39f8fad1c0013_13;
$text .= '                                ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_id_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_id_array'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedObjects'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'item' );
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
$text .= '                                    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_type_names', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_type_names'] : null;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_type'] : null;
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
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_name_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_name_array'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( is_string( $var2 ) )
    $var = $var2 . implode( '', array( $var1 ) );
else if( is_array( $var2 ) )
    $var = array_merge( $var2, array( $var1 ) );
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'relation_name_array', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['relation_name_array'] = $var;
    unset( $var );
}
$text .= '                                ';
}
unset( $if_cond );
// if ends

$text .= '                            ';
$fe_n_items_processed_963ba73efeb552a4deb39f8fad1c0013_13++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_963ba73efeb552a4deb39f8fad1c0013_13 ) ) extract( array_pop( $fe_variable_stack_963ba73efeb552a4deb39f8fad1c0013_13 ) );

else
{

unset( $fe_array_963ba73efeb552a4deb39f8fad1c0013_13 );

unset( $fe_array_keys_963ba73efeb552a4deb39f8fad1c0013_13 );

unset( $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_13 );

unset( $fe_n_items_processed_963ba73efeb552a4deb39f8fad1c0013_13 );

unset( $fe_i_963ba73efeb552a4deb39f8fad1c0013_13 );

unset( $fe_key_963ba73efeb552a4deb39f8fad1c0013_13 );

unset( $fe_val_963ba73efeb552a4deb39f8fad1c0013_13 );

unset( $fe_offset_963ba73efeb552a4deb39f8fad1c0013_13 );

unset( $fe_max_963ba73efeb552a4deb39f8fad1c0013_13 );

unset( $fe_reverse_963ba73efeb552a4deb39f8fad1c0013_13 );

unset( $fe_first_val_963ba73efeb552a4deb39f8fad1c0013_13 );

unset( $fe_last_val_963ba73efeb552a4deb39f8fad1c0013_13 );

unset( $fe_variable_stack_963ba73efeb552a4deb39f8fad1c0013_13 );

}

// foreach ends
$text .= '                            ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_name_delimiter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_name_delimiter'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_name_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_name_array'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = implode( $var1, $var2 );unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
                            ';
// undef $relation_name_array
$tpl->unsetLocalVariable( 'relation_name_array', $rootNamespace );

$text .= '                        </td>
                    ';
}
else
{
$text .= '                        <td class="checkbox">&nbsp;</td>
                        <td colspan="2">';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedObjects'] : null;
$var2 = compiledFetchAttribute( $var1, 'item' );
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

$text .= ' - You do not have permission to view this object</td>
                        <td class="code">
                            <input class="linkbox" type="text" value="&lt;embed href=\'ezobject://';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedObjects'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\' /&gt;" readonly="readonly" title="Copy this code and paste it into an XML field to embed the object." />
                            <input class="linkbox" type="text" value="&lt;link href=\'ezobject://';
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedObjects'] : null;
$var1 = compiledFetchAttribute( $var, 'item' );
unset( $var );
$var = $var1;
$var1 = compiledFetchAttribute( $var, 'id' );
unset( $var );
$var = $var1;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= ( is_object( $var ) ? compiledFetchText( $tpl, $rootNamespace, $currentNamespace, false, $var ) : $var );
unset( $var );

$text .= '\'&gt;&lt;/link&gt;" readonly="readonly" title="Copy this code and paste it into an XML field to link the object." />
                        </td>
                        <td class="code">
                            ';
// def $relation_name_array
unset( $var );
unset( $var );
$var = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'empty_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['empty_array'] : null;
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( $tpl->hasVariable( 'relation_name_array', $rootNamespace ) )
{
    $tpl->warning( 'def', "Variable 'relation_name_array' is already defined.", array (
  0 => 
  array (
    0 => 176,
    1 => 28,
    2 => 12158,
  ),
  1 => 
  array (
    0 => 176,
    1 => 67,
    2 => 12197,
  ),
  2 => 'design/admin2/templates/content/edit_relations.tpl',
) );
    $tpl->setVariable( 'relation_name_array', $var, $rootNamespace );
}
else
{
    $tpl->setLocalVariable( 'relation_name_array', $var, $rootNamespace );
}

$text .= '                            ';
// foreach begins
$skipDelimiter = true;
if ( !isset( $fe_variable_stack_963ba73efeb552a4deb39f8fad1c0013_14 ) ) $fe_variable_stack_963ba73efeb552a4deb39f8fad1c0013_14 = array();
$fe_variable_stack_963ba73efeb552a4deb39f8fad1c0013_14[] = compact( 'fe_array_963ba73efeb552a4deb39f8fad1c0013_14', 'fe_array_keys_963ba73efeb552a4deb39f8fad1c0013_14', 'fe_n_items_963ba73efeb552a4deb39f8fad1c0013_14', 'fe_n_items_processed_963ba73efeb552a4deb39f8fad1c0013_14', 'fe_i_963ba73efeb552a4deb39f8fad1c0013_14', 'fe_key_963ba73efeb552a4deb39f8fad1c0013_14', 'fe_val_963ba73efeb552a4deb39f8fad1c0013_14', 'fe_offset_963ba73efeb552a4deb39f8fad1c0013_14', 'fe_max_963ba73efeb552a4deb39f8fad1c0013_14', 'fe_reverse_963ba73efeb552a4deb39f8fad1c0013_14', 'fe_first_val_963ba73efeb552a4deb39f8fad1c0013_14', 'fe_last_val_963ba73efeb552a4deb39f8fad1c0013_14' );
unset( $fe_array_963ba73efeb552a4deb39f8fad1c0013_14 );
unset( $fe_array_963ba73efeb552a4deb39f8fad1c0013_14 );
$fe_array_963ba73efeb552a4deb39f8fad1c0013_14 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_contentobjects_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_contentobjects_id'] : null;
if (! isset( $fe_array_963ba73efeb552a4deb39f8fad1c0013_14 ) ) $fe_array_963ba73efeb552a4deb39f8fad1c0013_14 = NULL;
while ( is_object( $fe_array_963ba73efeb552a4deb39f8fad1c0013_14 ) and method_exists( $fe_array_963ba73efeb552a4deb39f8fad1c0013_14, 'templateValue' ) )
    $fe_array_963ba73efeb552a4deb39f8fad1c0013_14 = $fe_array_963ba73efeb552a4deb39f8fad1c0013_14->templateValue();

$fe_array_keys_963ba73efeb552a4deb39f8fad1c0013_14 = is_array( $fe_array_963ba73efeb552a4deb39f8fad1c0013_14 ) ? array_keys( $fe_array_963ba73efeb552a4deb39f8fad1c0013_14 ) : array();
$fe_n_items_963ba73efeb552a4deb39f8fad1c0013_14 = count( $fe_array_keys_963ba73efeb552a4deb39f8fad1c0013_14 );
$fe_n_items_processed_963ba73efeb552a4deb39f8fad1c0013_14 = 0;
$fe_offset_963ba73efeb552a4deb39f8fad1c0013_14 = 0;
$fe_max_963ba73efeb552a4deb39f8fad1c0013_14 = $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_14 - $fe_offset_963ba73efeb552a4deb39f8fad1c0013_14;
$fe_reverse_963ba73efeb552a4deb39f8fad1c0013_14 = false;
if ( $fe_offset_963ba73efeb552a4deb39f8fad1c0013_14 < 0 || $fe_offset_963ba73efeb552a4deb39f8fad1c0013_14 >= $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_14 )
{
    $fe_offset_963ba73efeb552a4deb39f8fad1c0013_14 = ( $fe_offset_963ba73efeb552a4deb39f8fad1c0013_14 < 0 ) ? 0 : $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_14;
    if ( $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_14 || $fe_offset_963ba73efeb552a4deb39f8fad1c0013_14 < 0 )
 {
        eZDebug::writeWarning("Invalid 'offset' parameter specified: '$fe_offset_963ba73efeb552a4deb39f8fad1c0013_14'. Array count: $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_14");   
}
}
if ( $fe_max_963ba73efeb552a4deb39f8fad1c0013_14 < 0 || $fe_offset_963ba73efeb552a4deb39f8fad1c0013_14 + $fe_max_963ba73efeb552a4deb39f8fad1c0013_14 > $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_14 )
{
    if ( $fe_max_963ba73efeb552a4deb39f8fad1c0013_14 < 0 )
 eZDebug::writeWarning("Invalid 'max' parameter specified: $fe_max_963ba73efeb552a4deb39f8fad1c0013_14");
    $fe_max_963ba73efeb552a4deb39f8fad1c0013_14 = $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_14 - $fe_offset_963ba73efeb552a4deb39f8fad1c0013_14;
}
if ( $fe_reverse_963ba73efeb552a4deb39f8fad1c0013_14 )
{
    $fe_first_val_963ba73efeb552a4deb39f8fad1c0013_14 = $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_14 - 1 - $fe_offset_963ba73efeb552a4deb39f8fad1c0013_14;
    $fe_last_val_963ba73efeb552a4deb39f8fad1c0013_14  = 0;
}
else
{
    $fe_first_val_963ba73efeb552a4deb39f8fad1c0013_14 = $fe_offset_963ba73efeb552a4deb39f8fad1c0013_14;
    $fe_last_val_963ba73efeb552a4deb39f8fad1c0013_14  = $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_14 - 1;
}
// foreach
for ( $fe_i_963ba73efeb552a4deb39f8fad1c0013_14 = $fe_first_val_963ba73efeb552a4deb39f8fad1c0013_14; $fe_n_items_processed_963ba73efeb552a4deb39f8fad1c0013_14 < $fe_max_963ba73efeb552a4deb39f8fad1c0013_14 && ( $fe_reverse_963ba73efeb552a4deb39f8fad1c0013_14 ? $fe_i_963ba73efeb552a4deb39f8fad1c0013_14 >= $fe_last_val_963ba73efeb552a4deb39f8fad1c0013_14 : $fe_i_963ba73efeb552a4deb39f8fad1c0013_14 <= $fe_last_val_963ba73efeb552a4deb39f8fad1c0013_14 ); $fe_reverse_963ba73efeb552a4deb39f8fad1c0013_14 ? $fe_i_963ba73efeb552a4deb39f8fad1c0013_14-- : $fe_i_963ba73efeb552a4deb39f8fad1c0013_14++ )
{
$fe_key_963ba73efeb552a4deb39f8fad1c0013_14 = $fe_array_keys_963ba73efeb552a4deb39f8fad1c0013_14[$fe_i_963ba73efeb552a4deb39f8fad1c0013_14];
$fe_val_963ba73efeb552a4deb39f8fad1c0013_14 = $fe_array_963ba73efeb552a4deb39f8fad1c0013_14[$fe_key_963ba73efeb552a4deb39f8fad1c0013_14];
$vars[$rootNamespace]['relation_id_array'] = $fe_val_963ba73efeb552a4deb39f8fad1c0013_14;
$vars[$rootNamespace]['relation_type'] = $fe_key_963ba73efeb552a4deb39f8fad1c0013_14;
$text .= '                                ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_id_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_id_array'] : null;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
unset( $if_cond2 );
unset( $if_cond2 );
$if_cond2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'RelatedObjects', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['RelatedObjects'] : null;
$if_cond3 = compiledFetchAttribute( $if_cond2, 'item' );
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
$text .= '                                    ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_type_names', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_type_names'] : null;
unset( $var3 );
unset( $var3 );
$var3 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_type', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_type'] : null;
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
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_name_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_name_array'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
if ( is_string( $var2 ) )
    $var = $var2 . implode( '', array( $var1 ) );
else if( is_array( $var2 ) )
    $var = array_merge( $var2, array( $var1 ) );
unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
if ( array_key_exists( $currentNamespace, $vars ) && array_key_exists( 'relation_name_array', $vars[$currentNamespace] ) )
{
    $vars[$currentNamespace]['relation_name_array'] = $var;
    unset( $var );
}
$text .= '                                ';
}
unset( $if_cond );
// if ends

$text .= '                            ';
$fe_n_items_processed_963ba73efeb552a4deb39f8fad1c0013_14++;
} // foreach
$skipDelimiter = false;
if ( count( $fe_variable_stack_963ba73efeb552a4deb39f8fad1c0013_14 ) ) extract( array_pop( $fe_variable_stack_963ba73efeb552a4deb39f8fad1c0013_14 ) );

else
{

unset( $fe_array_963ba73efeb552a4deb39f8fad1c0013_14 );

unset( $fe_array_keys_963ba73efeb552a4deb39f8fad1c0013_14 );

unset( $fe_n_items_963ba73efeb552a4deb39f8fad1c0013_14 );

unset( $fe_n_items_processed_963ba73efeb552a4deb39f8fad1c0013_14 );

unset( $fe_i_963ba73efeb552a4deb39f8fad1c0013_14 );

unset( $fe_key_963ba73efeb552a4deb39f8fad1c0013_14 );

unset( $fe_val_963ba73efeb552a4deb39f8fad1c0013_14 );

unset( $fe_offset_963ba73efeb552a4deb39f8fad1c0013_14 );

unset( $fe_max_963ba73efeb552a4deb39f8fad1c0013_14 );

unset( $fe_reverse_963ba73efeb552a4deb39f8fad1c0013_14 );

unset( $fe_first_val_963ba73efeb552a4deb39f8fad1c0013_14 );

unset( $fe_last_val_963ba73efeb552a4deb39f8fad1c0013_14 );

unset( $fe_variable_stack_963ba73efeb552a4deb39f8fad1c0013_14 );

}

// foreach ends
$text .= '                            ';
unset( $var );
unset( $var1 );
unset( $var1 );
$var1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_name_delimiter', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_name_delimiter'] : null;
if (! isset( $var1 ) ) $var1 = NULL;
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
while ( is_object( $var1 ) and method_exists( $var1, 'templateValue' ) )
    $var1 = $var1->templateValue();
unset( $var2 );
unset( $var2 );
$var2 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'relation_name_array', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['relation_name_array'] : null;
if (! isset( $var2 ) ) $var2 = NULL;
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
while ( is_object( $var2 ) and method_exists( $var2, 'templateValue' ) )
    $var2 = $var2->templateValue();
$var = implode( $var1, $var2 );unset( $var1, $var2 );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$text .= $var;
unset( $var );

$text .= '
                            ';
// undef $relation_name_array
$tpl->unsetLocalVariable( 'relation_name_array', $rootNamespace );

$text .= '                        </td>
                    ';
}
unset( $if_cond );
// if ends

$text .= '                </tr>

            ';
list( $variableValue, $loopItem, $loopKeys, $loopCount, $currentIndex, $index, $sequence ) = array_pop( $sectionStack );
++$currentIndex;

$lastVariableValue = $variableValue;
++$index;

}
unset( $loopKeys, $loopCount, $index, $last, $loopIndex, $loopItem, $sequence );
$text .= '
            </table>
        </div>
    ';
}

}
else
{

unset( $show );

$text .= '<div class="block">
<p>There are no objects related to the one that is currently being edited.</p>
</div>';
}

$text .= '
</div></div></div>

<div class="controlbar">
<div class="box-bc"><div class="box-ml">
<div class="block">

    ';
// if begins
unset( $if_cond );
unset( $if_cond1 );
unset( $if_cond1 );
$if_cond1 = ( array_key_exists( $rootNamespace, $vars ) and array_key_exists( 'related_contentobjects_id', $vars[$rootNamespace] ) ) ? $vars[$rootNamespace]['related_contentobjects_id'] : null;
$if_cond2 = compiledFetchAttribute( $if_cond1, 'common' );
unset( $if_cond1 );
$if_cond1 = $if_cond2;
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond1Data = array( 'value' => $if_cond1 );
$tpl->processOperator( 'count',
                       array (
),
                       $rootNamespace, $currentNamespace, $if_cond1Data, false, false );
$if_cond1 = $if_cond1Data['value'];
unset( $if_cond1Data );
if (! isset( $if_cond1 ) ) $if_cond1 = NULL;
while ( is_object( $if_cond1 ) and method_exists( $if_cond1, 'templateValue' ) )
    $if_cond1 = $if_cond1->templateValue();
$if_cond = ( ( $if_cond1 ) > ( 0 ) );
unset( $if_cond1 );
if (! isset( $if_cond ) ) $if_cond = NULL;
while ( is_object( $if_cond ) and method_exists( $if_cond, 'templateValue' ) )
    $if_cond = $if_cond->templateValue();

if ( $if_cond )
{
$text .= '    <input class="button" type="submit" name="DeleteRelationButton" value="Remove selected" title="Remove the selected items from the list(s) above. It is only the relations that will be removed. The items will not be deleted." />
    ';
}
else
{
$text .= '    <input class="button-disabled" type="submit" name="DeleteRelationButton" value="Remove selected" disabled="disabled" />
    ';
}
unset( $if_cond );
// if ends

$text .= '
    <input class="button" type="submit" name="BrowseObjectButton" value="Add existing" title="Add an existing item as a related object." />
    <input class="button" type="submit" name="UploadFileRelationButton" value="Upload new" title="Upload a file and add it as a related object." />
</div>
</div></div>
</div>

</div>
';

$setArray = $oldSetArray_c42c6ed4a07bf4c75a9290ec1674a0d9;
$tpl->Level--;
?>
