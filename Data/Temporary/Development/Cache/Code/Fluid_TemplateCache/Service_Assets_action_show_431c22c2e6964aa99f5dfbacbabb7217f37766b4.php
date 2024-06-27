<?php 
class Service_Assets_action_show_431c22c2e6964aa99f5dfbacbabb7217f37766b4 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

public function getLayoutName(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
return (string) '';
}
public function hasLayout() {
return FALSE;
}
public function addCompiledNamespaces(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$renderingContext->getViewHelperResolver()->addNamespaces(array (
  'psr.simplecache' => 
  array (
    0 => 'Psr\\SimpleCache\\ViewHelpers',
  ),
  'psr.cache' => 
  array (
    0 => 'Psr\\Cache\\ViewHelpers',
  ),
  'psr.log' => 
  array (
    0 => 'Psr\\Log\\ViewHelpers',
  ),
  'neos.errormessages' => 
  array (
    0 => 'Neos\\Error\\Messages\\ViewHelpers',
  ),
  'neos.utility.files' => 
  array (
    0 => 'Neos\\Utility\\ViewHelpers',
  ),
  'neos.utility.pdo' => 
  array (
    0 => 'Neos\\Utility\\ViewHelpers',
  ),
  'neos.utility.opcodecache' => 
  array (
    0 => 'Neos\\Utility\\ViewHelpers',
  ),
  'neos.cache' => 
  array (
    0 => 'Neos\\Cache\\ViewHelpers',
  ),
  'neos.utilityunicode' => 
  array (
    0 => 'Neos\\Utility\\Unicode\\ViewHelpers',
  ),
  'neos.utility.objecthandling' => 
  array (
    0 => 'Neos\\Utility\\ViewHelpers',
  ),
  'neos.utility.arrays' => 
  array (
    0 => 'Neos\\Utility\\ViewHelpers',
  ),
  'neos.utility.mediatypes' => 
  array (
    0 => 'Neos\\Utility\\ViewHelpers',
  ),
  'neos.utility.schema' => 
  array (
    0 => 'Neos\\Utility\\ViewHelpers',
  ),
  'neos.flow.log' => 
  array (
    0 => 'Neos\\Flow\\Log\\ViewHelpers',
  ),
  'psr.httpmessage' => 
  array (
    0 => 'Psr\\Http\\Message\\ViewHelpers',
  ),
  'psr.httpfactory' => 
  array (
    0 => 'Psr\\Http\\Message\\ViewHelpers',
  ),
  'guzzlehttp.psr7' => 
  array (
    0 => 'GuzzleHttp\\Psr7\\ViewHelpers',
  ),
  'neos.http.factories' => 
  array (
    0 => 'Neos\\Http\\Factories\\ViewHelpers',
  ),
  'neos.composerplugin' => 
  array (
    0 => 'Neos\\ComposerPlugin\\ViewHelpers',
  ),
  'psr.container' => 
  array (
    0 => 'Psr\\Container\\ViewHelpers',
  ),
  'psr.httpserverhandler' => 
  array (
    0 => 'Psr\\Http\\Server\\ViewHelpers',
  ),
  'psr.httpservermiddleware' => 
  array (
    0 => 'Psr\\Http\\Server\\ViewHelpers',
  ),
  'psr.httpclient' => 
  array (
    0 => 'Psr\\Http\\Client\\ViewHelpers',
  ),
  'brick.math' => 
  array (
    0 => 'Brick\\Math\\ViewHelpers',
  ),
  'ramsey.collection' => 
  array (
    0 => 'Ramsey\\Collection\\ViewHelpers',
  ),
  'ramsey.uuid' => 
  array (
    0 => 'Ramsey\\Uuid\\ViewHelpers',
  ),
  'doctrine.cache' => 
  array (
    0 => 'Doctrine\\Common\\Cache\\ViewHelpers',
  ),
  'doctrine.deprecations' => 
  array (
    0 => 'Doctrine\\Deprecations\\ViewHelpers',
  ),
  'doctrine.collections' => 
  array (
    0 => 'Doctrine\\Common\\Collections\\ViewHelpers',
  ),
  'doctrine.eventmanager' => 
  array (
    0 => 'Doctrine\\Common\\ViewHelpers',
  ),
  'doctrine.persistence' => 
  array (
    0 => 'Doctrine\\Persistence\\ViewHelpers',
  ),
  'doctrine.common' => 
  array (
    0 => 'Doctrine\\Common\\ViewHelpers',
  ),
  'doctrine.dbal' => 
  array (
    0 => 'Doctrine\\DBAL\\ViewHelpers',
  ),
  'doctrine.inflector' => 
  array (
    0 => 'Doctrine\\Inflector\\ViewHelpers',
  ),
  'doctrine.instantiator' => 
  array (
    0 => 'Doctrine\\Instantiator\\ViewHelpers',
  ),
  'doctrine.lexer' => 
  array (
    0 => 'Doctrine\\Common\\Lexer\\ViewHelpers',
  ),
  'symfony.servicecontracts' => 
  array (
    0 => 'Symfony\\Contracts\\Service\\ViewHelpers',
  ),
  'symfony.polyfillctype' => 
  array (
    0 => 'Symfony\\Polyfill\\Ctype\\ViewHelpers',
  ),
  'symfony.polyfillintlgrapheme' => 
  array (
    0 => 'Symfony\\Polyfill\\Intl\\Grapheme\\ViewHelpers',
  ),
  'symfony.polyfillintlnormalizer' => 
  array (
    0 => 'Symfony\\Polyfill\\Intl\\Normalizer\\ViewHelpers',
  ),
  'symfony.string' => 
  array (
    0 => 'Symfony\\Component\\String\\ViewHelpers',
  ),
  'symfony.console' => 
  array (
    0 => 'Symfony\\Component\\Console\\ViewHelpers',
  ),
  'doctrine.orm' => 
  array (
    0 => 'Doctrine\\ORM\\ViewHelpers',
  ),
  'laminas.laminascode' => 
  array (
    0 => 'Laminas\\Code\\ViewHelpers',
  ),
  'symfony.filesystem' => 
  array (
    0 => 'Symfony\\Component\\Filesystem\\ViewHelpers',
  ),
  'friendsofphp.proxymanagerlts' => 
  array (
    0 => 'ProxyManager\\ViewHelpers',
  ),
  'symfony.stopwatch' => 
  array (
    0 => 'Symfony\\Component\\Stopwatch\\ViewHelpers',
  ),
  'doctrine.migrations' => 
  array (
    0 => 'Doctrine\\Migrations\\ViewHelpers',
  ),
  'doctrine.annotations' => 
  array (
    0 => 'Doctrine\\Common\\Annotations\\ViewHelpers',
  ),
  'symfony.yaml' => 
  array (
    0 => 'Symfony\\Component\\Yaml\\ViewHelpers',
  ),
  'masterminds.html5' => 
  array (
    0 => 'Masterminds\\ViewHelpers',
  ),
  'symfony.domcrawler' => 
  array (
    0 => 'Symfony\\Component\\DomCrawler\\ViewHelpers',
  ),
  'composer.cabundle' => 
  array (
    0 => 'Composer\\CaBundle\\ViewHelpers',
  ),
  'symfony.finder' => 
  array (
    0 => 'Symfony\\Component\\Finder\\ViewHelpers',
  ),
  'composer.pcre' => 
  array (
    0 => 'Composer\\Pcre\\ViewHelpers',
  ),
  'composer.classmapgenerator' => 
  array (
    0 => 'Composer\\ClassMapGenerator\\ViewHelpers',
  ),
  'composer.metadataminifier' => 
  array (
    0 => 'Composer\\MetadataMinifier\\ViewHelpers',
  ),
  'composer.semver' => 
  array (
    0 => 'Composer\\Semver\\ViewHelpers',
  ),
  'composer.spdxlicenses' => 
  array (
    0 => 'Composer\\Spdx\\ViewHelpers',
  ),
  'composer.xdebughandler' => 
  array (
    0 => 'Composer\\XdebugHandler\\ViewHelpers',
  ),
  'justinrainbow.jsonschema' => 
  array (
    0 => 'JsonSchema\\ViewHelpers',
  ),
  'seld.jsonlint' => 
  array (
    0 => 'Seld\\JsonLint\\ViewHelpers',
  ),
  'seld.pharutils' => 
  array (
    0 => 'Seld\\PharUtils\\ViewHelpers',
  ),
  'symfony.process' => 
  array (
    0 => 'Symfony\\Component\\Process\\ViewHelpers',
  ),
  'react.promise' => 
  array (
    0 => 'React\\Promise\\ViewHelpers',
  ),
  'symfony.polyfillphp81' => 
  array (
    0 => 'Symfony\\Polyfill\\Php81\\ViewHelpers',
  ),
  'seld.signalhandler' => 
  array (
    0 => 'Seld\\Signal\\ViewHelpers',
  ),
  'composer.composer' => 
  array (
    0 => 'Composer\\ViewHelpers',
  ),
  'symfony.polyfillintlidn' => 
  array (
    0 => 'Symfony\\Polyfill\\Intl\\Idn\\ViewHelpers',
  ),
  'egulias.emailvalidator' => 
  array (
    0 => 'Egulias\\EmailValidator\\ViewHelpers',
  ),
  'typo3fluid.fluid' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
  ),
  'imagine.imagine' => 
  array (
    0 => 'Imagine\\ViewHelpers',
  ),
  'neos.diff' => 
  array (
    0 => 'Neos\\Diff\\ViewHelpers',
  ),
  'behat.transliterator' => 
  array (
    0 => 'Behat\\Transliterator\\ViewHelpers',
  ),
  'symfony.cachecontracts' => 
  array (
    0 => 'Symfony\\Contracts\\Cache\\ViewHelpers',
  ),
  'symfony.varexporter' => 
  array (
    0 => 'Symfony\\Component\\VarExporter\\ViewHelpers',
  ),
  'symfony.cache' => 
  array (
    0 => 'Symfony\\Component\\Cache\\ViewHelpers',
  ),
  'gedmo.doctrineextensions' => 
  array (
    0 => 'Gedmo\\ViewHelpers',
  ),
  'enshrined.svgsanitize' => 
  array (
    0 => 'enshrined\\svgSanitize\\ViewHelpers',
  ),
  'neos.eel' => 
  array (
    0 => 'Neos\\Eel\\ViewHelpers',
  ),
  'neos.flow' => 
  array (
    0 => 'Neos\\Flow\\ViewHelpers',
    1 => 'Neos\\Flow\\Core\\Migrations\\ViewHelpers',
  ),
  'neos.fluidadaptor' => 
  array (
    0 => 'Neos\\FluidAdaptor\\ViewHelpers',
  ),
  'neos.fusion' => 
  array (
    0 => 'Neos\\Fusion\\ViewHelpers',
  ),
  'neos.fusion.afx' => 
  array (
    0 => 'Neos\\Fusion\\Afx\\ViewHelpers',
  ),
  'neos.fusion.form' => 
  array (
    0 => 'Neos\\Fusion\\Form\\ViewHelpers',
  ),
  'neos.imagine' => 
  array (
    0 => 'Neos\\Imagine\\ViewHelpers',
  ),
  'neos.media' => 
  array (
    0 => 'Neos\\Media\\ViewHelpers',
  ),
  'neos.contentrepository' => 
  array (
    0 => 'Neos\\ContentRepository\\ViewHelpers',
  ),
  'neos.twitter.bootstrap' => 
  array (
    0 => 'Neos\\Twitter\\Bootstrap\\ViewHelpers',
  ),
  'neos.party' => 
  array (
    0 => 'Neos\\Party\\ViewHelpers',
  ),
  'league.csv' => 
  array (
    0 => 'League\\Csv\\ViewHelpers',
  ),
  'neos.redirecthandler' => 
  array (
    0 => 'Neos\\RedirectHandler\\ViewHelpers',
  ),
  'neos.redirecthandler.databasestorage' => 
  array (
    0 => 'Neos\\RedirectHandler\\DatabaseStorage\\ViewHelpers',
  ),
  'neos.kickstarter' => 
  array (
    0 => 'Neos\\Kickstarter\\ViewHelpers',
  ),
  'neos.sitekickstarter' => 
  array (
    0 => 'Neos\\SiteKickstarter\\ViewHelpers',
  ),
  'neos.setup' => 
  array (
    0 => 'Neos\\Setup\\ViewHelpers',
  ),
  'neos.media.browser' => 
  array (
    0 => 'Neos\\Media\\Browser\\ViewHelpers',
  ),
  'neos.neos' => 
  array (
    0 => 'Neos\\Neos\\ViewHelpers',
  ),
  'neos.nodetypes.basemixins' => 
  array (
    0 => 'Neos\\NodeTypes\\BaseMixins\\ViewHelpers',
  ),
  'neos.nodetypes.contentreferences' => 
  array (
    0 => 'Neos\\NodeTypes\\ContentReferences\\ViewHelpers',
  ),
  'neos.nodetypes.navigation' => 
  array (
    0 => 'Neos\\NodeTypes\\Navigation\\ViewHelpers',
  ),
  'neos.seo' => 
  array (
    0 => 'Neos\\Seo\\ViewHelpers',
  ),
  'neos.redirecthandler.ui' => 
  array (
    0 => 'Neos\\RedirectHandler\\Ui\\ViewHelpers',
  ),
  'neos.nodetypes.html' => 
  array (
    0 => 'Neos\\NodeTypes\\Html\\ViewHelpers',
  ),
  'neos.neos.setup' => 
  array (
    0 => 'Neos\\Neos\\Setup\\ViewHelpers',
  ),
  'neos.nodetypes.assetlist' => 
  array (
    0 => 'Neos\\NodeTypes\\AssetList\\ViewHelpers',
  ),
  'neos.behat' => 
  array (
    0 => 'Neos\\Behat\\ViewHelpers',
  ),
  'neos.neos.ui.compiled' => 
  array (
    0 => 'Neos\\Neos\\Ui\\Compiled\\ViewHelpers',
  ),
  'neos.neos.ui' => 
  array (
    0 => 'Neos\\Neos\\Ui\\ViewHelpers',
  ),
  'neos.redirecthandler.neosadapter' => 
  array (
    0 => 'Neos\\RedirectHandler\\NeosAdapter\\ViewHelpers',
  ),
  'neos.demo' => 
  array (
    0 => 'Neos\\Demo\\ViewHelpers',
  ),
  'nikic.phpparser' => 
  array (
    0 => 'PhpParser\\ViewHelpers',
  ),
  'guzzlehttp.promises' => 
  array (
    0 => 'GuzzleHttp\\Promise\\ViewHelpers',
  ),
  'guzzlehttp.guzzle' => 
  array (
    0 => 'GuzzleHttp\\ViewHelpers',
  ),
  'myclabs.deepcopy' => 
  array (
    0 => 'DeepCopy\\ViewHelpers',
  ),
  'org.bovigo.vfs' => 
  array (
    0 => 'org\\bovigo\\vfs\\ViewHelpers',
  ),
  'f' => 
  array (
    0 => 'TYPO3Fluid\\Fluid\\ViewHelpers',
    1 => 'Neos\\FluidAdaptor\\ViewHelpers',
  ),
  'neos' => 
  array (
    0 => 'Neos\\Neos\\ViewHelpers',
  ),
  'media' => 
  array (
    0 => 'Neos\\Media\\ViewHelpers',
  ),
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
<html>
    <head>
        <title>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments1 = array();
$arguments1['id'] = NULL;
$arguments1['value'] = NULL;
$arguments1['arguments'] = array (
);
$arguments1['source'] = 'Main';
$arguments1['package'] = NULL;
$arguments1['quantity'] = NULL;
$arguments1['locale'] = NULL;
$arguments1['id'] = 'asset';
$arguments1['value'] = 'Asset';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext)]);

$output0 .= ': ';
$array3 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('asset.label', $array3)]);

$output0 .= '</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <div>
            <h1>';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure5 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments4 = array();
$arguments4['id'] = NULL;
$arguments4['value'] = NULL;
$arguments4['arguments'] = array (
);
$arguments4['source'] = 'Main';
$arguments4['package'] = NULL;
$arguments4['quantity'] = NULL;
$arguments4['locale'] = NULL;
$arguments4['id'] = 'asset';
$arguments4['value'] = 'Asset';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output0 .= ': ';
$array6 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('asset.label', $array6)]);

$output0 .= '</h1>
            <div class="asset">
                <label class="asset-label">';
$array7 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('asset.label', $array7)]);

$output0 .= '</label>
                (<span class="asset-identifier">';
$array8 = array (
);
$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('asset.identifier', $array8)]);

$output0 .= '</span>)
                <a rel="preview" href="';
// Rendering ViewHelper Neos\Media\ViewHelpers\Uri\ThumbnailViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments9 = array();
$arguments9['asset'] = NULL;
$arguments9['width'] = NULL;
$arguments9['maximumWidth'] = NULL;
$arguments9['height'] = NULL;
$arguments9['maximumHeight'] = NULL;
$arguments9['allowCropping'] = false;
$arguments9['allowUpScaling'] = false;
$arguments9['async'] = false;
$arguments9['preset'] = NULL;
$arguments9['quality'] = NULL;
$array11 = array (
);$arguments9['asset'] = $renderingContext->getVariableProvider()->getByPath('asset', $array11);
$arguments9['preset'] = 'Neos.Media.Browser:Thumbnail';
// Rendering Boolean node
// Rendering Array
$array12 = array();
$array13 = array (
);$array12['0'] = $renderingContext->getVariableProvider()->getByPath('asyncThumbnails', $array13);

$expression14 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments9['async'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression14(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array12)
					),
					$renderingContext
				);

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Media\ViewHelpers\Uri\ThumbnailViewHelper::renderStatic($arguments9, $renderChildrenClosure10, $renderingContext)]);

$output0 .= '">';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure16 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments15 = array();
$arguments15['id'] = NULL;
$arguments15['value'] = NULL;
$arguments15['arguments'] = array (
);
$arguments15['source'] = 'Main';
$arguments15['package'] = NULL;
$arguments15['quantity'] = NULL;
$arguments15['locale'] = NULL;
$arguments15['id'] = 'preview';
$arguments15['value'] = 'Preview';

$output0 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments15, $renderChildrenClosure16, $renderingContext)]);

$output0 .= '</a>
            </div>
        </div>
    </body>
</html>
';

return $output0;
}


}
#0             16629     