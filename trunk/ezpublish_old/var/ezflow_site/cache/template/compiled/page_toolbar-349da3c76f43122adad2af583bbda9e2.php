<?php
// URI:       extension/ezwebin/design/ezwebin/templates/page_toolbar.tpl
// Filename:  extension/ezwebin/design/ezwebin/templates/page_toolbar.tpl
// Timestamp: 1295903528 (Mon Jan 24 14:12:08 MST 2011)
$oldSetArray_841b8b41dac8399fe6fd1ad994756554 = isset( $setArray ) ? $setArray : array();
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

$text .= '  <div id="toolbar">
  ';
$oldRestoreIncludeArray_5b73f70dbcbab9b683263235f223daeb = isset( $restoreIncludeArray ) ? $restoreIncludeArray : array();
$restoreIncludeArray = array();

if ( !isset( $dKeys ) )
{
    $resH = $tpl->resourceHandler( "design" );
    $dKeys = $resH->keys();
}

$resourceFound = false;
if ( file_exists( 'var/ezflow_site/cache/template/compiled/website_toolbar-b14a2b4da864c5ce970ff6887b9b54c4.php' ) )
{
$resourceFound = true;
$namespaceStack[] = array( $rootNamespace, $currentNamespace );
$rootNamespace = $currentNamespace;
$tpl->createLocalVariablesList();
$tpl->appendTemplateFetch( 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl' );
include( '' . 'var/ezflow_site/cache/template/compiled/website_toolbar-b14a2b4da864c5ce970ff6887b9b54c4.php' );
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
$tpl->processURI( 'extension/ezwt/design/standard/templates/parts/website_toolbar.tpl', true, $extraParameters, $textElements, $rootNamespace, $currentNamespace );
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
$restoreIncludeArray = $oldRestoreIncludeArray_5b73f70dbcbab9b683263235f223daeb;

$text .= '  </div>';

$setArray = $oldSetArray_841b8b41dac8399fe6fd1ad994756554;
$tpl->Level--;
?>
