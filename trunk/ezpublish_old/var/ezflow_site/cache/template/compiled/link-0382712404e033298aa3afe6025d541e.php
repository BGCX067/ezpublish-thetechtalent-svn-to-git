<?php
// URI:       design:parts/websitetoolbar/link.tpl
// Filename:  extension/ezwt/design/standard/templates/parts/websitetoolbar/link.tpl
// Timestamp: 1295903513 (Mon Jan 24 14:11:53 MST 2011)
$oldSetArray_668e71c9bb7a000198240396ebfe1752 = isset( $setArray ) ? $setArray : array();
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

$text .= '<input type="image" class="hide" src="/extension/ezwt/design/standard/images/websitetoolbar/ezwt-icon-url.gif" alt="Toggle menu link type edit." title="Toggle menu link type edit." id="ezwt-link-switcher" />

';
unset( $var );
if (! isset( $var ) ) $var = NULL;
while ( is_object( $var ) and method_exists( $var, 'templateValue' ) )
    $var = $var->templateValue();
$varData = array( 'value' => $var );
$tpl->processOperator( 'ezscript_require',
                       array (
  0 => 
  array (
    0 => 
    array (
      0 => 1,
      1 => 'ezjsc::yui3',
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
<script type="text/javascript">

    if ( window.YUI !== undefined ) YUI( YUI3_config ).use(\'node\', function(Y) {
        Y.on(\'contentready\', function() {
            Y.get(\'#ezwt-link-switcher\').removeClass(\'hide\').on(\'click\', function(e) {
                Y.Node.all(\'.menu-item-link\').each(function(n, v) {
                    var rel = n.get(\'rel\'), href = n.get(\'href\');
                    n.set(\'rel\',  href);
                    n.set(\'href\', rel);
                });
                e.preventDefault();
            });
        }, \'#ezwt-link-switcher\' );
    });

</script>';

$setArray = $oldSetArray_668e71c9bb7a000198240396ebfe1752;
$tpl->Level--;
?>
