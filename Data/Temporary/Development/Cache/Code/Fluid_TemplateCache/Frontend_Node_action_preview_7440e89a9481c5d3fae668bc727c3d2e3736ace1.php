<?php 
class Frontend_Node_action_preview_7440e89a9481c5d3fae668bc727c3d2e3736ace1 extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
));
}

/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
<div id="neos-shortcut">
	<p>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output233 = '';

$output233 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure235 = function() use ($renderingContext, $self) {
$output236 = '';

$output236 .= '
				';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure238 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments237 = array();
$arguments237['id'] = NULL;
$arguments237['value'] = NULL;
$arguments237['arguments'] = array (
);
$arguments237['source'] = 'Main';
$arguments237['package'] = NULL;
$arguments237['quantity'] = NULL;
$arguments237['locale'] = NULL;
$arguments237['id'] = 'shortcut.toSpecificTarget';
$arguments237['value'] = 'This is a shortcut to a specific target:';

$output236 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments237, $renderChildrenClosure238, $renderingContext)]);

$output236 .= '<br />
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure240 = function() use ($renderingContext, $self) {
$output339 = '';

$output339 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure341 = function() use ($renderingContext, $self) {
$output342 = '';

$output342 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure344 = function() use ($renderingContext, $self) {
$output387 = '';

$output387 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure389 = function() use ($renderingContext, $self) {
$output390 = '';

$output390 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure392 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure394 = function() use ($renderingContext, $self) {
$output399 = '';

$output399 .= '
									Click ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure401 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments400 = array();
$arguments400['additionalAttributes'] = NULL;
$arguments400['data'] = NULL;
$arguments400['class'] = NULL;
$arguments400['dir'] = NULL;
$arguments400['id'] = NULL;
$arguments400['lang'] = NULL;
$arguments400['style'] = NULL;
$arguments400['title'] = NULL;
$arguments400['accesskey'] = NULL;
$arguments400['tabindex'] = NULL;
$arguments400['onclick'] = NULL;
$arguments400['name'] = NULL;
$arguments400['rel'] = NULL;
$arguments400['rev'] = NULL;
$arguments400['target'] = NULL;
$arguments400['node'] = NULL;
$arguments400['format'] = NULL;
$arguments400['absolute'] = false;
$arguments400['arguments'] = array (
);
$arguments400['section'] = '';
$arguments400['addQueryString'] = false;
$arguments400['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments400['baseNodeName'] = 'documentNode';
$arguments400['nodeVariableName'] = 'linkedNode';
$arguments400['resolveShortcuts'] = true;
$array402 = array (
);$arguments400['node'] = $renderingContext->getVariableProvider()->getByPath('targetConverted', $array402);

$output399 .= Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments400, $renderChildrenClosure401, $renderingContext);

$output399 .= ' to continue to the page.
								';
return $output399;
};
$arguments393 = array();
$arguments393['id'] = NULL;
$arguments393['value'] = NULL;
$arguments393['arguments'] = array (
);
$arguments393['source'] = 'Main';
$arguments393['package'] = NULL;
$arguments393['quantity'] = NULL;
$arguments393['locale'] = NULL;
$arguments393['id'] = 'shortcut.clickToContinueToPage';
// Rendering Array
$array395 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure397 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments396 = array();
$arguments396['additionalAttributes'] = NULL;
$arguments396['data'] = NULL;
$arguments396['class'] = NULL;
$arguments396['dir'] = NULL;
$arguments396['id'] = NULL;
$arguments396['lang'] = NULL;
$arguments396['style'] = NULL;
$arguments396['title'] = NULL;
$arguments396['accesskey'] = NULL;
$arguments396['tabindex'] = NULL;
$arguments396['onclick'] = NULL;
$arguments396['name'] = NULL;
$arguments396['rel'] = NULL;
$arguments396['rev'] = NULL;
$arguments396['target'] = NULL;
$arguments396['node'] = NULL;
$arguments396['format'] = NULL;
$arguments396['absolute'] = false;
$arguments396['arguments'] = array (
);
$arguments396['section'] = '';
$arguments396['addQueryString'] = false;
$arguments396['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments396['baseNodeName'] = 'documentNode';
$arguments396['nodeVariableName'] = 'linkedNode';
$arguments396['resolveShortcuts'] = true;
$array398 = array (
);$arguments396['node'] = $renderingContext->getVariableProvider()->getByPath('targetConverted', $array398);
$array395['0'] = Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments396, $renderChildrenClosure397, $renderingContext);
$arguments393['arguments'] = $array395;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments393, $renderChildrenClosure394, $renderingContext);
};
$arguments391 = array();
$arguments391['value'] = NULL;

$output390 .= isset($arguments391['value']) ? $arguments391['value'] : $renderChildrenClosure392();

$output390 .= '
							';
return $output390;
};
$arguments388 = array();
$arguments388['value'] = NULL;
$arguments388['value'] = 'node';

$output387 .= '';

$output387 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure404 = function() use ($renderingContext, $self) {
$output405 = '';

$output405 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure407 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure409 = function() use ($renderingContext, $self) {
$output416 = '';

$output416 .= '
									Click <a href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure418 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments417 = array();
$arguments417['path'] = NULL;
$arguments417['package'] = NULL;
$arguments417['resource'] = NULL;
$arguments417['localize'] = true;
$array419 = array (
);$arguments417['resource'] = $renderingContext->getVariableProvider()->getByPath('targetConverted.resource', $array419);

$output416 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments417, $renderChildrenClosure418, $renderingContext);

$output416 .= '" target="_blank">';
$array420 = array (
);
$output416 .= $renderingContext->getVariableProvider()->getByPath('targetConverted.label', $array420);

$output416 .= '</a> to see the file.
								';
return $output416;
};
$arguments408 = array();
$arguments408['id'] = NULL;
$arguments408['value'] = NULL;
$arguments408['arguments'] = array (
);
$arguments408['source'] = 'Main';
$arguments408['package'] = NULL;
$arguments408['quantity'] = NULL;
$arguments408['locale'] = NULL;
$arguments408['id'] = 'shortcut.clickToContinueToAsset';
// Rendering Array
$array410 = array();
$output411 = '';

$output411 .= '<a href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure413 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments412 = array();
$arguments412['path'] = NULL;
$arguments412['package'] = NULL;
$arguments412['resource'] = NULL;
$arguments412['localize'] = true;
$array414 = array (
);$arguments412['resource'] = $renderingContext->getVariableProvider()->getByPath('targetConverted.resource', $array414);

$output411 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments412, $renderChildrenClosure413, $renderingContext);

$output411 .= '" target="_blank">';
$array415 = array (
);
$output411 .= $renderingContext->getVariableProvider()->getByPath('targetConverted.label', $array415);

$output411 .= '</a>';
$array410['0'] = $output411;
$arguments408['arguments'] = $array410;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments408, $renderChildrenClosure409, $renderingContext);
};
$arguments406 = array();
$arguments406['value'] = NULL;

$output405 .= isset($arguments406['value']) ? $arguments406['value'] : $renderChildrenClosure407();

$output405 .= '
							';
return $output405;
};
$arguments403 = array();
$arguments403['value'] = NULL;
$arguments403['value'] = 'asset';

$output387 .= '';

$output387 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure422 = function() use ($renderingContext, $self) {
$output423 = '';

$output423 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure425 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure427 = function() use ($renderingContext, $self) {
$output432 = '';

$output432 .= '
									Click <a href="';
$array433 = array (
);
$output432 .= $renderingContext->getVariableProvider()->getByPath('target', $array433);

$output432 .= '" target="_blank">';
$array434 = array (
);
$output432 .= $renderingContext->getVariableProvider()->getByPath('target', $array434);

$output432 .= '</a> to open the link.
								';
return $output432;
};
$arguments426 = array();
$arguments426['id'] = NULL;
$arguments426['value'] = NULL;
$arguments426['arguments'] = array (
);
$arguments426['source'] = 'Main';
$arguments426['package'] = NULL;
$arguments426['quantity'] = NULL;
$arguments426['locale'] = NULL;
$arguments426['id'] = 'shortcut.clickToContinueToExternalUrl';
// Rendering Array
$array428 = array();
$output429 = '';

$output429 .= '<a href="';
$array430 = array (
);
$output429 .= $renderingContext->getVariableProvider()->getByPath('target', $array430);

$output429 .= '" target="_blank">';
$array431 = array (
);
$output429 .= $renderingContext->getVariableProvider()->getByPath('target', $array431);

$output429 .= '</a>';
$array428['0'] = $output429;
$arguments426['arguments'] = $array428;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments426, $renderChildrenClosure427, $renderingContext);
};
$arguments424 = array();
$arguments424['value'] = NULL;

$output423 .= isset($arguments424['value']) ? $arguments424['value'] : $renderChildrenClosure425();

$output423 .= '
							';
return $output423;
};
$arguments421 = array();

$output387 .= '';

$output387 .= '
						';
return $output387;
};
$arguments343 = array();
$arguments343['expression'] = NULL;
$array386 = array (
);$arguments343['expression'] = $renderingContext->getVariableProvider()->getByPath('targetSchema', $array386);

$output342 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'node';
}): return call_user_func(function() use ($renderingContext, $self) {
$output345 = '';

$output345 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure347 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure349 = function() use ($renderingContext, $self) {
$output354 = '';

$output354 .= '
									Click ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure356 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments355 = array();
$arguments355['additionalAttributes'] = NULL;
$arguments355['data'] = NULL;
$arguments355['class'] = NULL;
$arguments355['dir'] = NULL;
$arguments355['id'] = NULL;
$arguments355['lang'] = NULL;
$arguments355['style'] = NULL;
$arguments355['title'] = NULL;
$arguments355['accesskey'] = NULL;
$arguments355['tabindex'] = NULL;
$arguments355['onclick'] = NULL;
$arguments355['name'] = NULL;
$arguments355['rel'] = NULL;
$arguments355['rev'] = NULL;
$arguments355['target'] = NULL;
$arguments355['node'] = NULL;
$arguments355['format'] = NULL;
$arguments355['absolute'] = false;
$arguments355['arguments'] = array (
);
$arguments355['section'] = '';
$arguments355['addQueryString'] = false;
$arguments355['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments355['baseNodeName'] = 'documentNode';
$arguments355['nodeVariableName'] = 'linkedNode';
$arguments355['resolveShortcuts'] = true;
$array357 = array (
);$arguments355['node'] = $renderingContext->getVariableProvider()->getByPath('targetConverted', $array357);

$output354 .= Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments355, $renderChildrenClosure356, $renderingContext);

$output354 .= ' to continue to the page.
								';
return $output354;
};
$arguments348 = array();
$arguments348['id'] = NULL;
$arguments348['value'] = NULL;
$arguments348['arguments'] = array (
);
$arguments348['source'] = 'Main';
$arguments348['package'] = NULL;
$arguments348['quantity'] = NULL;
$arguments348['locale'] = NULL;
$arguments348['id'] = 'shortcut.clickToContinueToPage';
// Rendering Array
$array350 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure352 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments351 = array();
$arguments351['additionalAttributes'] = NULL;
$arguments351['data'] = NULL;
$arguments351['class'] = NULL;
$arguments351['dir'] = NULL;
$arguments351['id'] = NULL;
$arguments351['lang'] = NULL;
$arguments351['style'] = NULL;
$arguments351['title'] = NULL;
$arguments351['accesskey'] = NULL;
$arguments351['tabindex'] = NULL;
$arguments351['onclick'] = NULL;
$arguments351['name'] = NULL;
$arguments351['rel'] = NULL;
$arguments351['rev'] = NULL;
$arguments351['target'] = NULL;
$arguments351['node'] = NULL;
$arguments351['format'] = NULL;
$arguments351['absolute'] = false;
$arguments351['arguments'] = array (
);
$arguments351['section'] = '';
$arguments351['addQueryString'] = false;
$arguments351['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments351['baseNodeName'] = 'documentNode';
$arguments351['nodeVariableName'] = 'linkedNode';
$arguments351['resolveShortcuts'] = true;
$array353 = array (
);$arguments351['node'] = $renderingContext->getVariableProvider()->getByPath('targetConverted', $array353);
$array350['0'] = Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments351, $renderChildrenClosure352, $renderingContext);
$arguments348['arguments'] = $array350;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments348, $renderChildrenClosure349, $renderingContext);
};
$arguments346 = array();
$arguments346['value'] = NULL;

$output345 .= isset($arguments346['value']) ? $arguments346['value'] : $renderChildrenClosure347();

$output345 .= '
							';
return $output345;
});
case call_user_func(function() use ($renderingContext, $self) {

return 'asset';
}): return call_user_func(function() use ($renderingContext, $self) {
$output358 = '';

$output358 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure360 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure362 = function() use ($renderingContext, $self) {
$output369 = '';

$output369 .= '
									Click <a href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure371 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments370 = array();
$arguments370['path'] = NULL;
$arguments370['package'] = NULL;
$arguments370['resource'] = NULL;
$arguments370['localize'] = true;
$array372 = array (
);$arguments370['resource'] = $renderingContext->getVariableProvider()->getByPath('targetConverted.resource', $array372);

$output369 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments370, $renderChildrenClosure371, $renderingContext);

$output369 .= '" target="_blank">';
$array373 = array (
);
$output369 .= $renderingContext->getVariableProvider()->getByPath('targetConverted.label', $array373);

$output369 .= '</a> to see the file.
								';
return $output369;
};
$arguments361 = array();
$arguments361['id'] = NULL;
$arguments361['value'] = NULL;
$arguments361['arguments'] = array (
);
$arguments361['source'] = 'Main';
$arguments361['package'] = NULL;
$arguments361['quantity'] = NULL;
$arguments361['locale'] = NULL;
$arguments361['id'] = 'shortcut.clickToContinueToAsset';
// Rendering Array
$array363 = array();
$output364 = '';

$output364 .= '<a href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure366 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments365 = array();
$arguments365['path'] = NULL;
$arguments365['package'] = NULL;
$arguments365['resource'] = NULL;
$arguments365['localize'] = true;
$array367 = array (
);$arguments365['resource'] = $renderingContext->getVariableProvider()->getByPath('targetConverted.resource', $array367);

$output364 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments365, $renderChildrenClosure366, $renderingContext);

$output364 .= '" target="_blank">';
$array368 = array (
);
$output364 .= $renderingContext->getVariableProvider()->getByPath('targetConverted.label', $array368);

$output364 .= '</a>';
$array363['0'] = $output364;
$arguments361['arguments'] = $array363;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments361, $renderChildrenClosure362, $renderingContext);
};
$arguments359 = array();
$arguments359['value'] = NULL;

$output358 .= isset($arguments359['value']) ? $arguments359['value'] : $renderChildrenClosure360();

$output358 .= '
							';
return $output358;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output374 = '';

$output374 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure376 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure378 = function() use ($renderingContext, $self) {
$output383 = '';

$output383 .= '
									Click <a href="';
$array384 = array (
);
$output383 .= $renderingContext->getVariableProvider()->getByPath('target', $array384);

$output383 .= '" target="_blank">';
$array385 = array (
);
$output383 .= $renderingContext->getVariableProvider()->getByPath('target', $array385);

$output383 .= '</a> to open the link.
								';
return $output383;
};
$arguments377 = array();
$arguments377['id'] = NULL;
$arguments377['value'] = NULL;
$arguments377['arguments'] = array (
);
$arguments377['source'] = 'Main';
$arguments377['package'] = NULL;
$arguments377['quantity'] = NULL;
$arguments377['locale'] = NULL;
$arguments377['id'] = 'shortcut.clickToContinueToExternalUrl';
// Rendering Array
$array379 = array();
$output380 = '';

$output380 .= '<a href="';
$array381 = array (
);
$output380 .= $renderingContext->getVariableProvider()->getByPath('target', $array381);

$output380 .= '" target="_blank">';
$array382 = array (
);
$output380 .= $renderingContext->getVariableProvider()->getByPath('target', $array382);

$output380 .= '</a>';
$array379['0'] = $output380;
$arguments377['arguments'] = $array379;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments377, $renderChildrenClosure378, $renderingContext);
};
$arguments375 = array();
$arguments375['value'] = NULL;

$output374 .= isset($arguments375['value']) ? $arguments375['value'] : $renderChildrenClosure376();

$output374 .= '
							';
return $output374;
});
}
}, array($arguments343));

$output342 .= '
					';
return $output342;
};
$arguments340 = array();

$output339 .= '';

$output339 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure436 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure438 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments437 = array();
$arguments437['id'] = NULL;
$arguments437['value'] = NULL;
$arguments437['arguments'] = array (
);
$arguments437['source'] = 'Main';
$arguments437['package'] = NULL;
$arguments437['quantity'] = NULL;
$arguments437['locale'] = NULL;
$arguments437['id'] = 'shortcut.noTargetSelected';
$arguments437['value'] = '(no target has been selected)';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments437, $renderChildrenClosure438, $renderingContext)]);
};
$arguments435 = array();
$arguments435['if'] = NULL;

$output339 .= '';

$output339 .= '
				';
return $output339;
};
$arguments239 = array();
$arguments239['then'] = NULL;
$arguments239['else'] = NULL;
$arguments239['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array336 = array();
$array337 = array (
);$array336['0'] = $renderingContext->getVariableProvider()->getByPath('target', $array337);

$expression338 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments239['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression338(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array336)
					),
					$renderingContext
				);
$arguments239['__thenClosure'] = function() use ($renderingContext, $self) {
$output241 = '';

$output241 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure243 = function() use ($renderingContext, $self) {
$output286 = '';

$output286 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure288 = function() use ($renderingContext, $self) {
$output289 = '';

$output289 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure291 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure293 = function() use ($renderingContext, $self) {
$output298 = '';

$output298 .= '
									Click ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure300 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments299 = array();
$arguments299['additionalAttributes'] = NULL;
$arguments299['data'] = NULL;
$arguments299['class'] = NULL;
$arguments299['dir'] = NULL;
$arguments299['id'] = NULL;
$arguments299['lang'] = NULL;
$arguments299['style'] = NULL;
$arguments299['title'] = NULL;
$arguments299['accesskey'] = NULL;
$arguments299['tabindex'] = NULL;
$arguments299['onclick'] = NULL;
$arguments299['name'] = NULL;
$arguments299['rel'] = NULL;
$arguments299['rev'] = NULL;
$arguments299['target'] = NULL;
$arguments299['node'] = NULL;
$arguments299['format'] = NULL;
$arguments299['absolute'] = false;
$arguments299['arguments'] = array (
);
$arguments299['section'] = '';
$arguments299['addQueryString'] = false;
$arguments299['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments299['baseNodeName'] = 'documentNode';
$arguments299['nodeVariableName'] = 'linkedNode';
$arguments299['resolveShortcuts'] = true;
$array301 = array (
);$arguments299['node'] = $renderingContext->getVariableProvider()->getByPath('targetConverted', $array301);

$output298 .= Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments299, $renderChildrenClosure300, $renderingContext);

$output298 .= ' to continue to the page.
								';
return $output298;
};
$arguments292 = array();
$arguments292['id'] = NULL;
$arguments292['value'] = NULL;
$arguments292['arguments'] = array (
);
$arguments292['source'] = 'Main';
$arguments292['package'] = NULL;
$arguments292['quantity'] = NULL;
$arguments292['locale'] = NULL;
$arguments292['id'] = 'shortcut.clickToContinueToPage';
// Rendering Array
$array294 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure296 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments295 = array();
$arguments295['additionalAttributes'] = NULL;
$arguments295['data'] = NULL;
$arguments295['class'] = NULL;
$arguments295['dir'] = NULL;
$arguments295['id'] = NULL;
$arguments295['lang'] = NULL;
$arguments295['style'] = NULL;
$arguments295['title'] = NULL;
$arguments295['accesskey'] = NULL;
$arguments295['tabindex'] = NULL;
$arguments295['onclick'] = NULL;
$arguments295['name'] = NULL;
$arguments295['rel'] = NULL;
$arguments295['rev'] = NULL;
$arguments295['target'] = NULL;
$arguments295['node'] = NULL;
$arguments295['format'] = NULL;
$arguments295['absolute'] = false;
$arguments295['arguments'] = array (
);
$arguments295['section'] = '';
$arguments295['addQueryString'] = false;
$arguments295['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments295['baseNodeName'] = 'documentNode';
$arguments295['nodeVariableName'] = 'linkedNode';
$arguments295['resolveShortcuts'] = true;
$array297 = array (
);$arguments295['node'] = $renderingContext->getVariableProvider()->getByPath('targetConverted', $array297);
$array294['0'] = Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments295, $renderChildrenClosure296, $renderingContext);
$arguments292['arguments'] = $array294;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments292, $renderChildrenClosure293, $renderingContext);
};
$arguments290 = array();
$arguments290['value'] = NULL;

$output289 .= isset($arguments290['value']) ? $arguments290['value'] : $renderChildrenClosure291();

$output289 .= '
							';
return $output289;
};
$arguments287 = array();
$arguments287['value'] = NULL;
$arguments287['value'] = 'node';

$output286 .= '';

$output286 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure303 = function() use ($renderingContext, $self) {
$output304 = '';

$output304 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure306 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure308 = function() use ($renderingContext, $self) {
$output315 = '';

$output315 .= '
									Click <a href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure317 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments316 = array();
$arguments316['path'] = NULL;
$arguments316['package'] = NULL;
$arguments316['resource'] = NULL;
$arguments316['localize'] = true;
$array318 = array (
);$arguments316['resource'] = $renderingContext->getVariableProvider()->getByPath('targetConverted.resource', $array318);

$output315 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments316, $renderChildrenClosure317, $renderingContext);

$output315 .= '" target="_blank">';
$array319 = array (
);
$output315 .= $renderingContext->getVariableProvider()->getByPath('targetConverted.label', $array319);

$output315 .= '</a> to see the file.
								';
return $output315;
};
$arguments307 = array();
$arguments307['id'] = NULL;
$arguments307['value'] = NULL;
$arguments307['arguments'] = array (
);
$arguments307['source'] = 'Main';
$arguments307['package'] = NULL;
$arguments307['quantity'] = NULL;
$arguments307['locale'] = NULL;
$arguments307['id'] = 'shortcut.clickToContinueToAsset';
// Rendering Array
$array309 = array();
$output310 = '';

$output310 .= '<a href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure312 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments311 = array();
$arguments311['path'] = NULL;
$arguments311['package'] = NULL;
$arguments311['resource'] = NULL;
$arguments311['localize'] = true;
$array313 = array (
);$arguments311['resource'] = $renderingContext->getVariableProvider()->getByPath('targetConverted.resource', $array313);

$output310 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments311, $renderChildrenClosure312, $renderingContext);

$output310 .= '" target="_blank">';
$array314 = array (
);
$output310 .= $renderingContext->getVariableProvider()->getByPath('targetConverted.label', $array314);

$output310 .= '</a>';
$array309['0'] = $output310;
$arguments307['arguments'] = $array309;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments307, $renderChildrenClosure308, $renderingContext);
};
$arguments305 = array();
$arguments305['value'] = NULL;

$output304 .= isset($arguments305['value']) ? $arguments305['value'] : $renderChildrenClosure306();

$output304 .= '
							';
return $output304;
};
$arguments302 = array();
$arguments302['value'] = NULL;
$arguments302['value'] = 'asset';

$output286 .= '';

$output286 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure321 = function() use ($renderingContext, $self) {
$output322 = '';

$output322 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure324 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure326 = function() use ($renderingContext, $self) {
$output331 = '';

$output331 .= '
									Click <a href="';
$array332 = array (
);
$output331 .= $renderingContext->getVariableProvider()->getByPath('target', $array332);

$output331 .= '" target="_blank">';
$array333 = array (
);
$output331 .= $renderingContext->getVariableProvider()->getByPath('target', $array333);

$output331 .= '</a> to open the link.
								';
return $output331;
};
$arguments325 = array();
$arguments325['id'] = NULL;
$arguments325['value'] = NULL;
$arguments325['arguments'] = array (
);
$arguments325['source'] = 'Main';
$arguments325['package'] = NULL;
$arguments325['quantity'] = NULL;
$arguments325['locale'] = NULL;
$arguments325['id'] = 'shortcut.clickToContinueToExternalUrl';
// Rendering Array
$array327 = array();
$output328 = '';

$output328 .= '<a href="';
$array329 = array (
);
$output328 .= $renderingContext->getVariableProvider()->getByPath('target', $array329);

$output328 .= '" target="_blank">';
$array330 = array (
);
$output328 .= $renderingContext->getVariableProvider()->getByPath('target', $array330);

$output328 .= '</a>';
$array327['0'] = $output328;
$arguments325['arguments'] = $array327;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments325, $renderChildrenClosure326, $renderingContext);
};
$arguments323 = array();
$arguments323['value'] = NULL;

$output322 .= isset($arguments323['value']) ? $arguments323['value'] : $renderChildrenClosure324();

$output322 .= '
							';
return $output322;
};
$arguments320 = array();

$output286 .= '';

$output286 .= '
						';
return $output286;
};
$arguments242 = array();
$arguments242['expression'] = NULL;
$array285 = array (
);$arguments242['expression'] = $renderingContext->getVariableProvider()->getByPath('targetSchema', $array285);

$output241 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'node';
}): return call_user_func(function() use ($renderingContext, $self) {
$output244 = '';

$output244 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure246 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure248 = function() use ($renderingContext, $self) {
$output253 = '';

$output253 .= '
									Click ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure255 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments254 = array();
$arguments254['additionalAttributes'] = NULL;
$arguments254['data'] = NULL;
$arguments254['class'] = NULL;
$arguments254['dir'] = NULL;
$arguments254['id'] = NULL;
$arguments254['lang'] = NULL;
$arguments254['style'] = NULL;
$arguments254['title'] = NULL;
$arguments254['accesskey'] = NULL;
$arguments254['tabindex'] = NULL;
$arguments254['onclick'] = NULL;
$arguments254['name'] = NULL;
$arguments254['rel'] = NULL;
$arguments254['rev'] = NULL;
$arguments254['target'] = NULL;
$arguments254['node'] = NULL;
$arguments254['format'] = NULL;
$arguments254['absolute'] = false;
$arguments254['arguments'] = array (
);
$arguments254['section'] = '';
$arguments254['addQueryString'] = false;
$arguments254['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments254['baseNodeName'] = 'documentNode';
$arguments254['nodeVariableName'] = 'linkedNode';
$arguments254['resolveShortcuts'] = true;
$array256 = array (
);$arguments254['node'] = $renderingContext->getVariableProvider()->getByPath('targetConverted', $array256);

$output253 .= Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments254, $renderChildrenClosure255, $renderingContext);

$output253 .= ' to continue to the page.
								';
return $output253;
};
$arguments247 = array();
$arguments247['id'] = NULL;
$arguments247['value'] = NULL;
$arguments247['arguments'] = array (
);
$arguments247['source'] = 'Main';
$arguments247['package'] = NULL;
$arguments247['quantity'] = NULL;
$arguments247['locale'] = NULL;
$arguments247['id'] = 'shortcut.clickToContinueToPage';
// Rendering Array
$array249 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure251 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments250 = array();
$arguments250['additionalAttributes'] = NULL;
$arguments250['data'] = NULL;
$arguments250['class'] = NULL;
$arguments250['dir'] = NULL;
$arguments250['id'] = NULL;
$arguments250['lang'] = NULL;
$arguments250['style'] = NULL;
$arguments250['title'] = NULL;
$arguments250['accesskey'] = NULL;
$arguments250['tabindex'] = NULL;
$arguments250['onclick'] = NULL;
$arguments250['name'] = NULL;
$arguments250['rel'] = NULL;
$arguments250['rev'] = NULL;
$arguments250['target'] = NULL;
$arguments250['node'] = NULL;
$arguments250['format'] = NULL;
$arguments250['absolute'] = false;
$arguments250['arguments'] = array (
);
$arguments250['section'] = '';
$arguments250['addQueryString'] = false;
$arguments250['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments250['baseNodeName'] = 'documentNode';
$arguments250['nodeVariableName'] = 'linkedNode';
$arguments250['resolveShortcuts'] = true;
$array252 = array (
);$arguments250['node'] = $renderingContext->getVariableProvider()->getByPath('targetConverted', $array252);
$array249['0'] = Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments250, $renderChildrenClosure251, $renderingContext);
$arguments247['arguments'] = $array249;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments247, $renderChildrenClosure248, $renderingContext);
};
$arguments245 = array();
$arguments245['value'] = NULL;

$output244 .= isset($arguments245['value']) ? $arguments245['value'] : $renderChildrenClosure246();

$output244 .= '
							';
return $output244;
});
case call_user_func(function() use ($renderingContext, $self) {

return 'asset';
}): return call_user_func(function() use ($renderingContext, $self) {
$output257 = '';

$output257 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure259 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure261 = function() use ($renderingContext, $self) {
$output268 = '';

$output268 .= '
									Click <a href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure270 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments269 = array();
$arguments269['path'] = NULL;
$arguments269['package'] = NULL;
$arguments269['resource'] = NULL;
$arguments269['localize'] = true;
$array271 = array (
);$arguments269['resource'] = $renderingContext->getVariableProvider()->getByPath('targetConverted.resource', $array271);

$output268 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments269, $renderChildrenClosure270, $renderingContext);

$output268 .= '" target="_blank">';
$array272 = array (
);
$output268 .= $renderingContext->getVariableProvider()->getByPath('targetConverted.label', $array272);

$output268 .= '</a> to see the file.
								';
return $output268;
};
$arguments260 = array();
$arguments260['id'] = NULL;
$arguments260['value'] = NULL;
$arguments260['arguments'] = array (
);
$arguments260['source'] = 'Main';
$arguments260['package'] = NULL;
$arguments260['quantity'] = NULL;
$arguments260['locale'] = NULL;
$arguments260['id'] = 'shortcut.clickToContinueToAsset';
// Rendering Array
$array262 = array();
$output263 = '';

$output263 .= '<a href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure265 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments264 = array();
$arguments264['path'] = NULL;
$arguments264['package'] = NULL;
$arguments264['resource'] = NULL;
$arguments264['localize'] = true;
$array266 = array (
);$arguments264['resource'] = $renderingContext->getVariableProvider()->getByPath('targetConverted.resource', $array266);

$output263 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments264, $renderChildrenClosure265, $renderingContext);

$output263 .= '" target="_blank">';
$array267 = array (
);
$output263 .= $renderingContext->getVariableProvider()->getByPath('targetConverted.label', $array267);

$output263 .= '</a>';
$array262['0'] = $output263;
$arguments260['arguments'] = $array262;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments260, $renderChildrenClosure261, $renderingContext);
};
$arguments258 = array();
$arguments258['value'] = NULL;

$output257 .= isset($arguments258['value']) ? $arguments258['value'] : $renderChildrenClosure259();

$output257 .= '
							';
return $output257;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output273 = '';

$output273 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure275 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure277 = function() use ($renderingContext, $self) {
$output282 = '';

$output282 .= '
									Click <a href="';
$array283 = array (
);
$output282 .= $renderingContext->getVariableProvider()->getByPath('target', $array283);

$output282 .= '" target="_blank">';
$array284 = array (
);
$output282 .= $renderingContext->getVariableProvider()->getByPath('target', $array284);

$output282 .= '</a> to open the link.
								';
return $output282;
};
$arguments276 = array();
$arguments276['id'] = NULL;
$arguments276['value'] = NULL;
$arguments276['arguments'] = array (
);
$arguments276['source'] = 'Main';
$arguments276['package'] = NULL;
$arguments276['quantity'] = NULL;
$arguments276['locale'] = NULL;
$arguments276['id'] = 'shortcut.clickToContinueToExternalUrl';
// Rendering Array
$array278 = array();
$output279 = '';

$output279 .= '<a href="';
$array280 = array (
);
$output279 .= $renderingContext->getVariableProvider()->getByPath('target', $array280);

$output279 .= '" target="_blank">';
$array281 = array (
);
$output279 .= $renderingContext->getVariableProvider()->getByPath('target', $array281);

$output279 .= '</a>';
$array278['0'] = $output279;
$arguments276['arguments'] = $array278;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments276, $renderChildrenClosure277, $renderingContext);
};
$arguments274 = array();
$arguments274['value'] = NULL;

$output273 .= isset($arguments274['value']) ? $arguments274['value'] : $renderChildrenClosure275();

$output273 .= '
							';
return $output273;
});
}
}, array($arguments242));

$output241 .= '
					';
return $output241;
};
$arguments239['__elseClosures'][] = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure335 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments334 = array();
$arguments334['id'] = NULL;
$arguments334['value'] = NULL;
$arguments334['arguments'] = array (
);
$arguments334['source'] = 'Main';
$arguments334['package'] = NULL;
$arguments334['quantity'] = NULL;
$arguments334['locale'] = NULL;
$arguments334['id'] = 'shortcut.noTargetSelected';
$arguments334['value'] = '(no target has been selected)';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments334, $renderChildrenClosure335, $renderingContext)]);
};

$output236 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments239, $renderChildrenClosure240, $renderingContext);

$output236 .= '
			';
return $output236;
};
$arguments234 = array();
$arguments234['value'] = NULL;
$arguments234['value'] = 'selectedTarget';

$output233 .= '';

$output233 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure440 = function() use ($renderingContext, $self) {
$output441 = '';

$output441 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure443 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure445 = function() use ($renderingContext, $self) {
$output450 = '';

$output450 .= '
					This is a shortcut to the first child page.<br />
					Click ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure452 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments451 = array();
$arguments451['additionalAttributes'] = NULL;
$arguments451['data'] = NULL;
$arguments451['class'] = NULL;
$arguments451['dir'] = NULL;
$arguments451['id'] = NULL;
$arguments451['lang'] = NULL;
$arguments451['style'] = NULL;
$arguments451['title'] = NULL;
$arguments451['accesskey'] = NULL;
$arguments451['tabindex'] = NULL;
$arguments451['onclick'] = NULL;
$arguments451['name'] = NULL;
$arguments451['rel'] = NULL;
$arguments451['rev'] = NULL;
$arguments451['target'] = NULL;
$arguments451['node'] = NULL;
$arguments451['format'] = NULL;
$arguments451['absolute'] = false;
$arguments451['arguments'] = array (
);
$arguments451['section'] = '';
$arguments451['addQueryString'] = false;
$arguments451['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments451['baseNodeName'] = 'documentNode';
$arguments451['nodeVariableName'] = 'linkedNode';
$arguments451['resolveShortcuts'] = true;
$array453 = array (
);$arguments451['node'] = $renderingContext->getVariableProvider()->getByPath('firstChildNode', $array453);

$output450 .= Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments451, $renderChildrenClosure452, $renderingContext);

$output450 .= ' to continue to the page.
				';
return $output450;
};
$arguments444 = array();
$arguments444['id'] = NULL;
$arguments444['value'] = NULL;
$arguments444['arguments'] = array (
);
$arguments444['source'] = 'Main';
$arguments444['package'] = NULL;
$arguments444['quantity'] = NULL;
$arguments444['locale'] = NULL;
$arguments444['id'] = 'shortcut.clickToContinueToFirstChildNode';
// Rendering Array
$array446 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure448 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments447 = array();
$arguments447['additionalAttributes'] = NULL;
$arguments447['data'] = NULL;
$arguments447['class'] = NULL;
$arguments447['dir'] = NULL;
$arguments447['id'] = NULL;
$arguments447['lang'] = NULL;
$arguments447['style'] = NULL;
$arguments447['title'] = NULL;
$arguments447['accesskey'] = NULL;
$arguments447['tabindex'] = NULL;
$arguments447['onclick'] = NULL;
$arguments447['name'] = NULL;
$arguments447['rel'] = NULL;
$arguments447['rev'] = NULL;
$arguments447['target'] = NULL;
$arguments447['node'] = NULL;
$arguments447['format'] = NULL;
$arguments447['absolute'] = false;
$arguments447['arguments'] = array (
);
$arguments447['section'] = '';
$arguments447['addQueryString'] = false;
$arguments447['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments447['baseNodeName'] = 'documentNode';
$arguments447['nodeVariableName'] = 'linkedNode';
$arguments447['resolveShortcuts'] = true;
$array449 = array (
);$arguments447['node'] = $renderingContext->getVariableProvider()->getByPath('firstChildNode', $array449);
$array446['0'] = Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments447, $renderChildrenClosure448, $renderingContext);
$arguments444['arguments'] = $array446;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments444, $renderChildrenClosure445, $renderingContext);
};
$arguments442 = array();
$arguments442['value'] = NULL;

$output441 .= isset($arguments442['value']) ? $arguments442['value'] : $renderChildrenClosure443();

$output441 .= '
			';
return $output441;
};
$arguments439 = array();
$arguments439['value'] = NULL;
$arguments439['value'] = 'firstChildNode';

$output233 .= '';

$output233 .= '
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure455 = function() use ($renderingContext, $self) {
$output456 = '';

$output456 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure458 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure460 = function() use ($renderingContext, $self) {
$output465 = '';

$output465 .= '
					This is a shortcut to the parent page.<br />
					Click ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure467 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments466 = array();
$arguments466['additionalAttributes'] = NULL;
$arguments466['data'] = NULL;
$arguments466['class'] = NULL;
$arguments466['dir'] = NULL;
$arguments466['id'] = NULL;
$arguments466['lang'] = NULL;
$arguments466['style'] = NULL;
$arguments466['title'] = NULL;
$arguments466['accesskey'] = NULL;
$arguments466['tabindex'] = NULL;
$arguments466['onclick'] = NULL;
$arguments466['name'] = NULL;
$arguments466['rel'] = NULL;
$arguments466['rev'] = NULL;
$arguments466['target'] = NULL;
$arguments466['node'] = NULL;
$arguments466['format'] = NULL;
$arguments466['absolute'] = false;
$arguments466['arguments'] = array (
);
$arguments466['section'] = '';
$arguments466['addQueryString'] = false;
$arguments466['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments466['baseNodeName'] = 'documentNode';
$arguments466['nodeVariableName'] = 'linkedNode';
$arguments466['resolveShortcuts'] = true;
$array468 = array (
);$arguments466['node'] = $renderingContext->getVariableProvider()->getByPath('node.parent', $array468);

$output465 .= Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments466, $renderChildrenClosure467, $renderingContext);

$output465 .= ' to continue to the page.
				';
return $output465;
};
$arguments459 = array();
$arguments459['id'] = NULL;
$arguments459['value'] = NULL;
$arguments459['arguments'] = array (
);
$arguments459['source'] = 'Main';
$arguments459['package'] = NULL;
$arguments459['quantity'] = NULL;
$arguments459['locale'] = NULL;
$arguments459['id'] = 'shortcut.clickToContinueToParentNode';
// Rendering Array
$array461 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure463 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments462 = array();
$arguments462['additionalAttributes'] = NULL;
$arguments462['data'] = NULL;
$arguments462['class'] = NULL;
$arguments462['dir'] = NULL;
$arguments462['id'] = NULL;
$arguments462['lang'] = NULL;
$arguments462['style'] = NULL;
$arguments462['title'] = NULL;
$arguments462['accesskey'] = NULL;
$arguments462['tabindex'] = NULL;
$arguments462['onclick'] = NULL;
$arguments462['name'] = NULL;
$arguments462['rel'] = NULL;
$arguments462['rev'] = NULL;
$arguments462['target'] = NULL;
$arguments462['node'] = NULL;
$arguments462['format'] = NULL;
$arguments462['absolute'] = false;
$arguments462['arguments'] = array (
);
$arguments462['section'] = '';
$arguments462['addQueryString'] = false;
$arguments462['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments462['baseNodeName'] = 'documentNode';
$arguments462['nodeVariableName'] = 'linkedNode';
$arguments462['resolveShortcuts'] = true;
$array464 = array (
);$arguments462['node'] = $renderingContext->getVariableProvider()->getByPath('node.parent', $array464);
$array461['0'] = Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments462, $renderChildrenClosure463, $renderingContext);
$arguments459['arguments'] = $array461;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments459, $renderChildrenClosure460, $renderingContext);
};
$arguments457 = array();
$arguments457['value'] = NULL;

$output456 .= isset($arguments457['value']) ? $arguments457['value'] : $renderChildrenClosure458();

$output456 .= '
			';
return $output456;
};
$arguments454 = array();
$arguments454['value'] = NULL;
$arguments454['value'] = 'parentNode';

$output233 .= '';

$output233 .= '
		';
return $output233;
};
$arguments1 = array();
$arguments1['expression'] = NULL;
$array232 = array (
);$arguments1['expression'] = $renderingContext->getVariableProvider()->getByPath('targetMode', $array232);

$output0 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'selectedTarget';
}): return call_user_func(function() use ($renderingContext, $self) {
$output3 = '';

$output3 .= '
				';
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
$arguments4['id'] = 'shortcut.toSpecificTarget';
$arguments4['value'] = 'This is a shortcut to a specific target:';

$output3 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments4, $renderChildrenClosure5, $renderingContext)]);

$output3 .= '<br />
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure7 = function() use ($renderingContext, $self) {
$output106 = '';

$output106 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure108 = function() use ($renderingContext, $self) {
$output109 = '';

$output109 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure111 = function() use ($renderingContext, $self) {
$output154 = '';

$output154 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure156 = function() use ($renderingContext, $self) {
$output157 = '';

$output157 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure159 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure161 = function() use ($renderingContext, $self) {
$output166 = '';

$output166 .= '
									Click ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure168 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments167 = array();
$arguments167['additionalAttributes'] = NULL;
$arguments167['data'] = NULL;
$arguments167['class'] = NULL;
$arguments167['dir'] = NULL;
$arguments167['id'] = NULL;
$arguments167['lang'] = NULL;
$arguments167['style'] = NULL;
$arguments167['title'] = NULL;
$arguments167['accesskey'] = NULL;
$arguments167['tabindex'] = NULL;
$arguments167['onclick'] = NULL;
$arguments167['name'] = NULL;
$arguments167['rel'] = NULL;
$arguments167['rev'] = NULL;
$arguments167['target'] = NULL;
$arguments167['node'] = NULL;
$arguments167['format'] = NULL;
$arguments167['absolute'] = false;
$arguments167['arguments'] = array (
);
$arguments167['section'] = '';
$arguments167['addQueryString'] = false;
$arguments167['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments167['baseNodeName'] = 'documentNode';
$arguments167['nodeVariableName'] = 'linkedNode';
$arguments167['resolveShortcuts'] = true;
$array169 = array (
);$arguments167['node'] = $renderingContext->getVariableProvider()->getByPath('targetConverted', $array169);

$output166 .= Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments167, $renderChildrenClosure168, $renderingContext);

$output166 .= ' to continue to the page.
								';
return $output166;
};
$arguments160 = array();
$arguments160['id'] = NULL;
$arguments160['value'] = NULL;
$arguments160['arguments'] = array (
);
$arguments160['source'] = 'Main';
$arguments160['package'] = NULL;
$arguments160['quantity'] = NULL;
$arguments160['locale'] = NULL;
$arguments160['id'] = 'shortcut.clickToContinueToPage';
// Rendering Array
$array162 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure164 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments163 = array();
$arguments163['additionalAttributes'] = NULL;
$arguments163['data'] = NULL;
$arguments163['class'] = NULL;
$arguments163['dir'] = NULL;
$arguments163['id'] = NULL;
$arguments163['lang'] = NULL;
$arguments163['style'] = NULL;
$arguments163['title'] = NULL;
$arguments163['accesskey'] = NULL;
$arguments163['tabindex'] = NULL;
$arguments163['onclick'] = NULL;
$arguments163['name'] = NULL;
$arguments163['rel'] = NULL;
$arguments163['rev'] = NULL;
$arguments163['target'] = NULL;
$arguments163['node'] = NULL;
$arguments163['format'] = NULL;
$arguments163['absolute'] = false;
$arguments163['arguments'] = array (
);
$arguments163['section'] = '';
$arguments163['addQueryString'] = false;
$arguments163['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments163['baseNodeName'] = 'documentNode';
$arguments163['nodeVariableName'] = 'linkedNode';
$arguments163['resolveShortcuts'] = true;
$array165 = array (
);$arguments163['node'] = $renderingContext->getVariableProvider()->getByPath('targetConverted', $array165);
$array162['0'] = Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments163, $renderChildrenClosure164, $renderingContext);
$arguments160['arguments'] = $array162;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments160, $renderChildrenClosure161, $renderingContext);
};
$arguments158 = array();
$arguments158['value'] = NULL;

$output157 .= isset($arguments158['value']) ? $arguments158['value'] : $renderChildrenClosure159();

$output157 .= '
							';
return $output157;
};
$arguments155 = array();
$arguments155['value'] = NULL;
$arguments155['value'] = 'node';

$output154 .= '';

$output154 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure171 = function() use ($renderingContext, $self) {
$output172 = '';

$output172 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure174 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure176 = function() use ($renderingContext, $self) {
$output183 = '';

$output183 .= '
									Click <a href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure185 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments184 = array();
$arguments184['path'] = NULL;
$arguments184['package'] = NULL;
$arguments184['resource'] = NULL;
$arguments184['localize'] = true;
$array186 = array (
);$arguments184['resource'] = $renderingContext->getVariableProvider()->getByPath('targetConverted.resource', $array186);

$output183 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments184, $renderChildrenClosure185, $renderingContext);

$output183 .= '" target="_blank">';
$array187 = array (
);
$output183 .= $renderingContext->getVariableProvider()->getByPath('targetConverted.label', $array187);

$output183 .= '</a> to see the file.
								';
return $output183;
};
$arguments175 = array();
$arguments175['id'] = NULL;
$arguments175['value'] = NULL;
$arguments175['arguments'] = array (
);
$arguments175['source'] = 'Main';
$arguments175['package'] = NULL;
$arguments175['quantity'] = NULL;
$arguments175['locale'] = NULL;
$arguments175['id'] = 'shortcut.clickToContinueToAsset';
// Rendering Array
$array177 = array();
$output178 = '';

$output178 .= '<a href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure180 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments179 = array();
$arguments179['path'] = NULL;
$arguments179['package'] = NULL;
$arguments179['resource'] = NULL;
$arguments179['localize'] = true;
$array181 = array (
);$arguments179['resource'] = $renderingContext->getVariableProvider()->getByPath('targetConverted.resource', $array181);

$output178 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments179, $renderChildrenClosure180, $renderingContext);

$output178 .= '" target="_blank">';
$array182 = array (
);
$output178 .= $renderingContext->getVariableProvider()->getByPath('targetConverted.label', $array182);

$output178 .= '</a>';
$array177['0'] = $output178;
$arguments175['arguments'] = $array177;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments175, $renderChildrenClosure176, $renderingContext);
};
$arguments173 = array();
$arguments173['value'] = NULL;

$output172 .= isset($arguments173['value']) ? $arguments173['value'] : $renderChildrenClosure174();

$output172 .= '
							';
return $output172;
};
$arguments170 = array();
$arguments170['value'] = NULL;
$arguments170['value'] = 'asset';

$output154 .= '';

$output154 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure189 = function() use ($renderingContext, $self) {
$output190 = '';

$output190 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure192 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure194 = function() use ($renderingContext, $self) {
$output199 = '';

$output199 .= '
									Click <a href="';
$array200 = array (
);
$output199 .= $renderingContext->getVariableProvider()->getByPath('target', $array200);

$output199 .= '" target="_blank">';
$array201 = array (
);
$output199 .= $renderingContext->getVariableProvider()->getByPath('target', $array201);

$output199 .= '</a> to open the link.
								';
return $output199;
};
$arguments193 = array();
$arguments193['id'] = NULL;
$arguments193['value'] = NULL;
$arguments193['arguments'] = array (
);
$arguments193['source'] = 'Main';
$arguments193['package'] = NULL;
$arguments193['quantity'] = NULL;
$arguments193['locale'] = NULL;
$arguments193['id'] = 'shortcut.clickToContinueToExternalUrl';
// Rendering Array
$array195 = array();
$output196 = '';

$output196 .= '<a href="';
$array197 = array (
);
$output196 .= $renderingContext->getVariableProvider()->getByPath('target', $array197);

$output196 .= '" target="_blank">';
$array198 = array (
);
$output196 .= $renderingContext->getVariableProvider()->getByPath('target', $array198);

$output196 .= '</a>';
$array195['0'] = $output196;
$arguments193['arguments'] = $array195;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments193, $renderChildrenClosure194, $renderingContext);
};
$arguments191 = array();
$arguments191['value'] = NULL;

$output190 .= isset($arguments191['value']) ? $arguments191['value'] : $renderChildrenClosure192();

$output190 .= '
							';
return $output190;
};
$arguments188 = array();

$output154 .= '';

$output154 .= '
						';
return $output154;
};
$arguments110 = array();
$arguments110['expression'] = NULL;
$array153 = array (
);$arguments110['expression'] = $renderingContext->getVariableProvider()->getByPath('targetSchema', $array153);

$output109 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'node';
}): return call_user_func(function() use ($renderingContext, $self) {
$output112 = '';

$output112 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure114 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure116 = function() use ($renderingContext, $self) {
$output121 = '';

$output121 .= '
									Click ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure123 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments122 = array();
$arguments122['additionalAttributes'] = NULL;
$arguments122['data'] = NULL;
$arguments122['class'] = NULL;
$arguments122['dir'] = NULL;
$arguments122['id'] = NULL;
$arguments122['lang'] = NULL;
$arguments122['style'] = NULL;
$arguments122['title'] = NULL;
$arguments122['accesskey'] = NULL;
$arguments122['tabindex'] = NULL;
$arguments122['onclick'] = NULL;
$arguments122['name'] = NULL;
$arguments122['rel'] = NULL;
$arguments122['rev'] = NULL;
$arguments122['target'] = NULL;
$arguments122['node'] = NULL;
$arguments122['format'] = NULL;
$arguments122['absolute'] = false;
$arguments122['arguments'] = array (
);
$arguments122['section'] = '';
$arguments122['addQueryString'] = false;
$arguments122['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments122['baseNodeName'] = 'documentNode';
$arguments122['nodeVariableName'] = 'linkedNode';
$arguments122['resolveShortcuts'] = true;
$array124 = array (
);$arguments122['node'] = $renderingContext->getVariableProvider()->getByPath('targetConverted', $array124);

$output121 .= Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments122, $renderChildrenClosure123, $renderingContext);

$output121 .= ' to continue to the page.
								';
return $output121;
};
$arguments115 = array();
$arguments115['id'] = NULL;
$arguments115['value'] = NULL;
$arguments115['arguments'] = array (
);
$arguments115['source'] = 'Main';
$arguments115['package'] = NULL;
$arguments115['quantity'] = NULL;
$arguments115['locale'] = NULL;
$arguments115['id'] = 'shortcut.clickToContinueToPage';
// Rendering Array
$array117 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure119 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments118 = array();
$arguments118['additionalAttributes'] = NULL;
$arguments118['data'] = NULL;
$arguments118['class'] = NULL;
$arguments118['dir'] = NULL;
$arguments118['id'] = NULL;
$arguments118['lang'] = NULL;
$arguments118['style'] = NULL;
$arguments118['title'] = NULL;
$arguments118['accesskey'] = NULL;
$arguments118['tabindex'] = NULL;
$arguments118['onclick'] = NULL;
$arguments118['name'] = NULL;
$arguments118['rel'] = NULL;
$arguments118['rev'] = NULL;
$arguments118['target'] = NULL;
$arguments118['node'] = NULL;
$arguments118['format'] = NULL;
$arguments118['absolute'] = false;
$arguments118['arguments'] = array (
);
$arguments118['section'] = '';
$arguments118['addQueryString'] = false;
$arguments118['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments118['baseNodeName'] = 'documentNode';
$arguments118['nodeVariableName'] = 'linkedNode';
$arguments118['resolveShortcuts'] = true;
$array120 = array (
);$arguments118['node'] = $renderingContext->getVariableProvider()->getByPath('targetConverted', $array120);
$array117['0'] = Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments118, $renderChildrenClosure119, $renderingContext);
$arguments115['arguments'] = $array117;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments115, $renderChildrenClosure116, $renderingContext);
};
$arguments113 = array();
$arguments113['value'] = NULL;

$output112 .= isset($arguments113['value']) ? $arguments113['value'] : $renderChildrenClosure114();

$output112 .= '
							';
return $output112;
});
case call_user_func(function() use ($renderingContext, $self) {

return 'asset';
}): return call_user_func(function() use ($renderingContext, $self) {
$output125 = '';

$output125 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure127 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure129 = function() use ($renderingContext, $self) {
$output136 = '';

$output136 .= '
									Click <a href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure138 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments137 = array();
$arguments137['path'] = NULL;
$arguments137['package'] = NULL;
$arguments137['resource'] = NULL;
$arguments137['localize'] = true;
$array139 = array (
);$arguments137['resource'] = $renderingContext->getVariableProvider()->getByPath('targetConverted.resource', $array139);

$output136 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments137, $renderChildrenClosure138, $renderingContext);

$output136 .= '" target="_blank">';
$array140 = array (
);
$output136 .= $renderingContext->getVariableProvider()->getByPath('targetConverted.label', $array140);

$output136 .= '</a> to see the file.
								';
return $output136;
};
$arguments128 = array();
$arguments128['id'] = NULL;
$arguments128['value'] = NULL;
$arguments128['arguments'] = array (
);
$arguments128['source'] = 'Main';
$arguments128['package'] = NULL;
$arguments128['quantity'] = NULL;
$arguments128['locale'] = NULL;
$arguments128['id'] = 'shortcut.clickToContinueToAsset';
// Rendering Array
$array130 = array();
$output131 = '';

$output131 .= '<a href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure133 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments132 = array();
$arguments132['path'] = NULL;
$arguments132['package'] = NULL;
$arguments132['resource'] = NULL;
$arguments132['localize'] = true;
$array134 = array (
);$arguments132['resource'] = $renderingContext->getVariableProvider()->getByPath('targetConverted.resource', $array134);

$output131 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments132, $renderChildrenClosure133, $renderingContext);

$output131 .= '" target="_blank">';
$array135 = array (
);
$output131 .= $renderingContext->getVariableProvider()->getByPath('targetConverted.label', $array135);

$output131 .= '</a>';
$array130['0'] = $output131;
$arguments128['arguments'] = $array130;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments128, $renderChildrenClosure129, $renderingContext);
};
$arguments126 = array();
$arguments126['value'] = NULL;

$output125 .= isset($arguments126['value']) ? $arguments126['value'] : $renderChildrenClosure127();

$output125 .= '
							';
return $output125;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output141 = '';

$output141 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure143 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure145 = function() use ($renderingContext, $self) {
$output150 = '';

$output150 .= '
									Click <a href="';
$array151 = array (
);
$output150 .= $renderingContext->getVariableProvider()->getByPath('target', $array151);

$output150 .= '" target="_blank">';
$array152 = array (
);
$output150 .= $renderingContext->getVariableProvider()->getByPath('target', $array152);

$output150 .= '</a> to open the link.
								';
return $output150;
};
$arguments144 = array();
$arguments144['id'] = NULL;
$arguments144['value'] = NULL;
$arguments144['arguments'] = array (
);
$arguments144['source'] = 'Main';
$arguments144['package'] = NULL;
$arguments144['quantity'] = NULL;
$arguments144['locale'] = NULL;
$arguments144['id'] = 'shortcut.clickToContinueToExternalUrl';
// Rendering Array
$array146 = array();
$output147 = '';

$output147 .= '<a href="';
$array148 = array (
);
$output147 .= $renderingContext->getVariableProvider()->getByPath('target', $array148);

$output147 .= '" target="_blank">';
$array149 = array (
);
$output147 .= $renderingContext->getVariableProvider()->getByPath('target', $array149);

$output147 .= '</a>';
$array146['0'] = $output147;
$arguments144['arguments'] = $array146;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments144, $renderChildrenClosure145, $renderingContext);
};
$arguments142 = array();
$arguments142['value'] = NULL;

$output141 .= isset($arguments142['value']) ? $arguments142['value'] : $renderChildrenClosure143();

$output141 .= '
							';
return $output141;
});
}
}, array($arguments110));

$output109 .= '
					';
return $output109;
};
$arguments107 = array();

$output106 .= '';

$output106 .= '
					';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure203 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure205 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments204 = array();
$arguments204['id'] = NULL;
$arguments204['value'] = NULL;
$arguments204['arguments'] = array (
);
$arguments204['source'] = 'Main';
$arguments204['package'] = NULL;
$arguments204['quantity'] = NULL;
$arguments204['locale'] = NULL;
$arguments204['id'] = 'shortcut.noTargetSelected';
$arguments204['value'] = '(no target has been selected)';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments204, $renderChildrenClosure205, $renderingContext)]);
};
$arguments202 = array();
$arguments202['if'] = NULL;

$output106 .= '';

$output106 .= '
				';
return $output106;
};
$arguments6 = array();
$arguments6['then'] = NULL;
$arguments6['else'] = NULL;
$arguments6['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array103 = array();
$array104 = array (
);$array103['0'] = $renderingContext->getVariableProvider()->getByPath('target', $array104);

$expression105 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments6['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression105(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array103)
					),
					$renderingContext
				);
$arguments6['__thenClosure'] = function() use ($renderingContext, $self) {
$output8 = '';

$output8 .= '
						';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SwitchViewHelper
$renderChildrenClosure10 = function() use ($renderingContext, $self) {
$output53 = '';

$output53 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure55 = function() use ($renderingContext, $self) {
$output56 = '';

$output56 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure58 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure60 = function() use ($renderingContext, $self) {
$output65 = '';

$output65 .= '
									Click ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['additionalAttributes'] = NULL;
$arguments66['data'] = NULL;
$arguments66['class'] = NULL;
$arguments66['dir'] = NULL;
$arguments66['id'] = NULL;
$arguments66['lang'] = NULL;
$arguments66['style'] = NULL;
$arguments66['title'] = NULL;
$arguments66['accesskey'] = NULL;
$arguments66['tabindex'] = NULL;
$arguments66['onclick'] = NULL;
$arguments66['name'] = NULL;
$arguments66['rel'] = NULL;
$arguments66['rev'] = NULL;
$arguments66['target'] = NULL;
$arguments66['node'] = NULL;
$arguments66['format'] = NULL;
$arguments66['absolute'] = false;
$arguments66['arguments'] = array (
);
$arguments66['section'] = '';
$arguments66['addQueryString'] = false;
$arguments66['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments66['baseNodeName'] = 'documentNode';
$arguments66['nodeVariableName'] = 'linkedNode';
$arguments66['resolveShortcuts'] = true;
$array68 = array (
);$arguments66['node'] = $renderingContext->getVariableProvider()->getByPath('targetConverted', $array68);

$output65 .= Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$output65 .= ' to continue to the page.
								';
return $output65;
};
$arguments59 = array();
$arguments59['id'] = NULL;
$arguments59['value'] = NULL;
$arguments59['arguments'] = array (
);
$arguments59['source'] = 'Main';
$arguments59['package'] = NULL;
$arguments59['quantity'] = NULL;
$arguments59['locale'] = NULL;
$arguments59['id'] = 'shortcut.clickToContinueToPage';
// Rendering Array
$array61 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure63 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments62 = array();
$arguments62['additionalAttributes'] = NULL;
$arguments62['data'] = NULL;
$arguments62['class'] = NULL;
$arguments62['dir'] = NULL;
$arguments62['id'] = NULL;
$arguments62['lang'] = NULL;
$arguments62['style'] = NULL;
$arguments62['title'] = NULL;
$arguments62['accesskey'] = NULL;
$arguments62['tabindex'] = NULL;
$arguments62['onclick'] = NULL;
$arguments62['name'] = NULL;
$arguments62['rel'] = NULL;
$arguments62['rev'] = NULL;
$arguments62['target'] = NULL;
$arguments62['node'] = NULL;
$arguments62['format'] = NULL;
$arguments62['absolute'] = false;
$arguments62['arguments'] = array (
);
$arguments62['section'] = '';
$arguments62['addQueryString'] = false;
$arguments62['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments62['baseNodeName'] = 'documentNode';
$arguments62['nodeVariableName'] = 'linkedNode';
$arguments62['resolveShortcuts'] = true;
$array64 = array (
);$arguments62['node'] = $renderingContext->getVariableProvider()->getByPath('targetConverted', $array64);
$array61['0'] = Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments62, $renderChildrenClosure63, $renderingContext);
$arguments59['arguments'] = $array61;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments59, $renderChildrenClosure60, $renderingContext);
};
$arguments57 = array();
$arguments57['value'] = NULL;

$output56 .= isset($arguments57['value']) ? $arguments57['value'] : $renderChildrenClosure58();

$output56 .= '
							';
return $output56;
};
$arguments54 = array();
$arguments54['value'] = NULL;
$arguments54['value'] = 'node';

$output53 .= '';

$output53 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CaseViewHelper
$renderChildrenClosure70 = function() use ($renderingContext, $self) {
$output71 = '';

$output71 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure75 = function() use ($renderingContext, $self) {
$output82 = '';

$output82 .= '
									Click <a href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure84 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments83 = array();
$arguments83['path'] = NULL;
$arguments83['package'] = NULL;
$arguments83['resource'] = NULL;
$arguments83['localize'] = true;
$array85 = array (
);$arguments83['resource'] = $renderingContext->getVariableProvider()->getByPath('targetConverted.resource', $array85);

$output82 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments83, $renderChildrenClosure84, $renderingContext);

$output82 .= '" target="_blank">';
$array86 = array (
);
$output82 .= $renderingContext->getVariableProvider()->getByPath('targetConverted.label', $array86);

$output82 .= '</a> to see the file.
								';
return $output82;
};
$arguments74 = array();
$arguments74['id'] = NULL;
$arguments74['value'] = NULL;
$arguments74['arguments'] = array (
);
$arguments74['source'] = 'Main';
$arguments74['package'] = NULL;
$arguments74['quantity'] = NULL;
$arguments74['locale'] = NULL;
$arguments74['id'] = 'shortcut.clickToContinueToAsset';
// Rendering Array
$array76 = array();
$output77 = '';

$output77 .= '<a href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure79 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments78 = array();
$arguments78['path'] = NULL;
$arguments78['package'] = NULL;
$arguments78['resource'] = NULL;
$arguments78['localize'] = true;
$array80 = array (
);$arguments78['resource'] = $renderingContext->getVariableProvider()->getByPath('targetConverted.resource', $array80);

$output77 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments78, $renderChildrenClosure79, $renderingContext);

$output77 .= '" target="_blank">';
$array81 = array (
);
$output77 .= $renderingContext->getVariableProvider()->getByPath('targetConverted.label', $array81);

$output77 .= '</a>';
$array76['0'] = $output77;
$arguments74['arguments'] = $array76;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments74, $renderChildrenClosure75, $renderingContext);
};
$arguments72 = array();
$arguments72['value'] = NULL;

$output71 .= isset($arguments72['value']) ? $arguments72['value'] : $renderChildrenClosure73();

$output71 .= '
							';
return $output71;
};
$arguments69 = array();
$arguments69['value'] = NULL;
$arguments69['value'] = 'asset';

$output53 .= '';

$output53 .= '
							';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\DefaultCaseViewHelper
$renderChildrenClosure88 = function() use ($renderingContext, $self) {
$output89 = '';

$output89 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure93 = function() use ($renderingContext, $self) {
$output98 = '';

$output98 .= '
									Click <a href="';
$array99 = array (
);
$output98 .= $renderingContext->getVariableProvider()->getByPath('target', $array99);

$output98 .= '" target="_blank">';
$array100 = array (
);
$output98 .= $renderingContext->getVariableProvider()->getByPath('target', $array100);

$output98 .= '</a> to open the link.
								';
return $output98;
};
$arguments92 = array();
$arguments92['id'] = NULL;
$arguments92['value'] = NULL;
$arguments92['arguments'] = array (
);
$arguments92['source'] = 'Main';
$arguments92['package'] = NULL;
$arguments92['quantity'] = NULL;
$arguments92['locale'] = NULL;
$arguments92['id'] = 'shortcut.clickToContinueToExternalUrl';
// Rendering Array
$array94 = array();
$output95 = '';

$output95 .= '<a href="';
$array96 = array (
);
$output95 .= $renderingContext->getVariableProvider()->getByPath('target', $array96);

$output95 .= '" target="_blank">';
$array97 = array (
);
$output95 .= $renderingContext->getVariableProvider()->getByPath('target', $array97);

$output95 .= '</a>';
$array94['0'] = $output95;
$arguments92['arguments'] = $array94;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments92, $renderChildrenClosure93, $renderingContext);
};
$arguments90 = array();
$arguments90['value'] = NULL;

$output89 .= isset($arguments90['value']) ? $arguments90['value'] : $renderChildrenClosure91();

$output89 .= '
							';
return $output89;
};
$arguments87 = array();

$output53 .= '';

$output53 .= '
						';
return $output53;
};
$arguments9 = array();
$arguments9['expression'] = NULL;
$array52 = array (
);$arguments9['expression'] = $renderingContext->getVariableProvider()->getByPath('targetSchema', $array52);

$output8 .= call_user_func_array(function($arguments) use ($renderingContext, $self) {
switch ($arguments['expression']) {
case call_user_func(function() use ($renderingContext, $self) {

return 'node';
}): return call_user_func(function() use ($renderingContext, $self) {
$output11 = '';

$output11 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure13 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure15 = function() use ($renderingContext, $self) {
$output20 = '';

$output20 .= '
									Click ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure22 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments21 = array();
$arguments21['additionalAttributes'] = NULL;
$arguments21['data'] = NULL;
$arguments21['class'] = NULL;
$arguments21['dir'] = NULL;
$arguments21['id'] = NULL;
$arguments21['lang'] = NULL;
$arguments21['style'] = NULL;
$arguments21['title'] = NULL;
$arguments21['accesskey'] = NULL;
$arguments21['tabindex'] = NULL;
$arguments21['onclick'] = NULL;
$arguments21['name'] = NULL;
$arguments21['rel'] = NULL;
$arguments21['rev'] = NULL;
$arguments21['target'] = NULL;
$arguments21['node'] = NULL;
$arguments21['format'] = NULL;
$arguments21['absolute'] = false;
$arguments21['arguments'] = array (
);
$arguments21['section'] = '';
$arguments21['addQueryString'] = false;
$arguments21['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments21['baseNodeName'] = 'documentNode';
$arguments21['nodeVariableName'] = 'linkedNode';
$arguments21['resolveShortcuts'] = true;
$array23 = array (
);$arguments21['node'] = $renderingContext->getVariableProvider()->getByPath('targetConverted', $array23);

$output20 .= Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments21, $renderChildrenClosure22, $renderingContext);

$output20 .= ' to continue to the page.
								';
return $output20;
};
$arguments14 = array();
$arguments14['id'] = NULL;
$arguments14['value'] = NULL;
$arguments14['arguments'] = array (
);
$arguments14['source'] = 'Main';
$arguments14['package'] = NULL;
$arguments14['quantity'] = NULL;
$arguments14['locale'] = NULL;
$arguments14['id'] = 'shortcut.clickToContinueToPage';
// Rendering Array
$array16 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure18 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments17 = array();
$arguments17['additionalAttributes'] = NULL;
$arguments17['data'] = NULL;
$arguments17['class'] = NULL;
$arguments17['dir'] = NULL;
$arguments17['id'] = NULL;
$arguments17['lang'] = NULL;
$arguments17['style'] = NULL;
$arguments17['title'] = NULL;
$arguments17['accesskey'] = NULL;
$arguments17['tabindex'] = NULL;
$arguments17['onclick'] = NULL;
$arguments17['name'] = NULL;
$arguments17['rel'] = NULL;
$arguments17['rev'] = NULL;
$arguments17['target'] = NULL;
$arguments17['node'] = NULL;
$arguments17['format'] = NULL;
$arguments17['absolute'] = false;
$arguments17['arguments'] = array (
);
$arguments17['section'] = '';
$arguments17['addQueryString'] = false;
$arguments17['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments17['baseNodeName'] = 'documentNode';
$arguments17['nodeVariableName'] = 'linkedNode';
$arguments17['resolveShortcuts'] = true;
$array19 = array (
);$arguments17['node'] = $renderingContext->getVariableProvider()->getByPath('targetConverted', $array19);
$array16['0'] = Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments17, $renderChildrenClosure18, $renderingContext);
$arguments14['arguments'] = $array16;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments14, $renderChildrenClosure15, $renderingContext);
};
$arguments12 = array();
$arguments12['value'] = NULL;

$output11 .= isset($arguments12['value']) ? $arguments12['value'] : $renderChildrenClosure13();

$output11 .= '
							';
return $output11;
});
case call_user_func(function() use ($renderingContext, $self) {

return 'asset';
}): return call_user_func(function() use ($renderingContext, $self) {
$output24 = '';

$output24 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure26 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$output35 = '';

$output35 .= '
									Click <a href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure37 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments36 = array();
$arguments36['path'] = NULL;
$arguments36['package'] = NULL;
$arguments36['resource'] = NULL;
$arguments36['localize'] = true;
$array38 = array (
);$arguments36['resource'] = $renderingContext->getVariableProvider()->getByPath('targetConverted.resource', $array38);

$output35 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments36, $renderChildrenClosure37, $renderingContext);

$output35 .= '" target="_blank">';
$array39 = array (
);
$output35 .= $renderingContext->getVariableProvider()->getByPath('targetConverted.label', $array39);

$output35 .= '</a> to see the file.
								';
return $output35;
};
$arguments27 = array();
$arguments27['id'] = NULL;
$arguments27['value'] = NULL;
$arguments27['arguments'] = array (
);
$arguments27['source'] = 'Main';
$arguments27['package'] = NULL;
$arguments27['quantity'] = NULL;
$arguments27['locale'] = NULL;
$arguments27['id'] = 'shortcut.clickToContinueToAsset';
// Rendering Array
$array29 = array();
$output30 = '';

$output30 .= '<a href="';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper
$renderChildrenClosure32 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments31 = array();
$arguments31['path'] = NULL;
$arguments31['package'] = NULL;
$arguments31['resource'] = NULL;
$arguments31['localize'] = true;
$array33 = array (
);$arguments31['resource'] = $renderingContext->getVariableProvider()->getByPath('targetConverted.resource', $array33);

$output30 .= Neos\FluidAdaptor\ViewHelpers\Uri\ResourceViewHelper::renderStatic($arguments31, $renderChildrenClosure32, $renderingContext);

$output30 .= '" target="_blank">';
$array34 = array (
);
$output30 .= $renderingContext->getVariableProvider()->getByPath('targetConverted.label', $array34);

$output30 .= '</a>';
$array29['0'] = $output30;
$arguments27['arguments'] = $array29;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments27, $renderChildrenClosure28, $renderingContext);
};
$arguments25 = array();
$arguments25['value'] = NULL;

$output24 .= isset($arguments25['value']) ? $arguments25['value'] : $renderChildrenClosure26();

$output24 .= '
							';
return $output24;
});
default: return call_user_func(function() use ($renderingContext, $self) {
$output40 = '';

$output40 .= '
								';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure44 = function() use ($renderingContext, $self) {
$output49 = '';

$output49 .= '
									Click <a href="';
$array50 = array (
);
$output49 .= $renderingContext->getVariableProvider()->getByPath('target', $array50);

$output49 .= '" target="_blank">';
$array51 = array (
);
$output49 .= $renderingContext->getVariableProvider()->getByPath('target', $array51);

$output49 .= '</a> to open the link.
								';
return $output49;
};
$arguments43 = array();
$arguments43['id'] = NULL;
$arguments43['value'] = NULL;
$arguments43['arguments'] = array (
);
$arguments43['source'] = 'Main';
$arguments43['package'] = NULL;
$arguments43['quantity'] = NULL;
$arguments43['locale'] = NULL;
$arguments43['id'] = 'shortcut.clickToContinueToExternalUrl';
// Rendering Array
$array45 = array();
$output46 = '';

$output46 .= '<a href="';
$array47 = array (
);
$output46 .= $renderingContext->getVariableProvider()->getByPath('target', $array47);

$output46 .= '" target="_blank">';
$array48 = array (
);
$output46 .= $renderingContext->getVariableProvider()->getByPath('target', $array48);

$output46 .= '</a>';
$array45['0'] = $output46;
$arguments43['arguments'] = $array45;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments43, $renderChildrenClosure44, $renderingContext);
};
$arguments41 = array();
$arguments41['value'] = NULL;

$output40 .= isset($arguments41['value']) ? $arguments41['value'] : $renderChildrenClosure42();

$output40 .= '
							';
return $output40;
});
}
}, array($arguments9));

$output8 .= '
					';
return $output8;
};
$arguments6['__elseClosures'][] = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure102 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments101 = array();
$arguments101['id'] = NULL;
$arguments101['value'] = NULL;
$arguments101['arguments'] = array (
);
$arguments101['source'] = 'Main';
$arguments101['package'] = NULL;
$arguments101['quantity'] = NULL;
$arguments101['locale'] = NULL;
$arguments101['id'] = 'shortcut.noTargetSelected';
$arguments101['value'] = '(no target has been selected)';
return call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments101, $renderChildrenClosure102, $renderingContext)]);
};

$output3 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments6, $renderChildrenClosure7, $renderingContext);

$output3 .= '
			';
return $output3;
});
case call_user_func(function() use ($renderingContext, $self) {

return 'firstChildNode';
}): return call_user_func(function() use ($renderingContext, $self) {
$output206 = '';

$output206 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure208 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure210 = function() use ($renderingContext, $self) {
$output215 = '';

$output215 .= '
					This is a shortcut to the first child page.<br />
					Click ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure217 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments216 = array();
$arguments216['additionalAttributes'] = NULL;
$arguments216['data'] = NULL;
$arguments216['class'] = NULL;
$arguments216['dir'] = NULL;
$arguments216['id'] = NULL;
$arguments216['lang'] = NULL;
$arguments216['style'] = NULL;
$arguments216['title'] = NULL;
$arguments216['accesskey'] = NULL;
$arguments216['tabindex'] = NULL;
$arguments216['onclick'] = NULL;
$arguments216['name'] = NULL;
$arguments216['rel'] = NULL;
$arguments216['rev'] = NULL;
$arguments216['target'] = NULL;
$arguments216['node'] = NULL;
$arguments216['format'] = NULL;
$arguments216['absolute'] = false;
$arguments216['arguments'] = array (
);
$arguments216['section'] = '';
$arguments216['addQueryString'] = false;
$arguments216['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments216['baseNodeName'] = 'documentNode';
$arguments216['nodeVariableName'] = 'linkedNode';
$arguments216['resolveShortcuts'] = true;
$array218 = array (
);$arguments216['node'] = $renderingContext->getVariableProvider()->getByPath('firstChildNode', $array218);

$output215 .= Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments216, $renderChildrenClosure217, $renderingContext);

$output215 .= ' to continue to the page.
				';
return $output215;
};
$arguments209 = array();
$arguments209['id'] = NULL;
$arguments209['value'] = NULL;
$arguments209['arguments'] = array (
);
$arguments209['source'] = 'Main';
$arguments209['package'] = NULL;
$arguments209['quantity'] = NULL;
$arguments209['locale'] = NULL;
$arguments209['id'] = 'shortcut.clickToContinueToFirstChildNode';
// Rendering Array
$array211 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure213 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments212 = array();
$arguments212['additionalAttributes'] = NULL;
$arguments212['data'] = NULL;
$arguments212['class'] = NULL;
$arguments212['dir'] = NULL;
$arguments212['id'] = NULL;
$arguments212['lang'] = NULL;
$arguments212['style'] = NULL;
$arguments212['title'] = NULL;
$arguments212['accesskey'] = NULL;
$arguments212['tabindex'] = NULL;
$arguments212['onclick'] = NULL;
$arguments212['name'] = NULL;
$arguments212['rel'] = NULL;
$arguments212['rev'] = NULL;
$arguments212['target'] = NULL;
$arguments212['node'] = NULL;
$arguments212['format'] = NULL;
$arguments212['absolute'] = false;
$arguments212['arguments'] = array (
);
$arguments212['section'] = '';
$arguments212['addQueryString'] = false;
$arguments212['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments212['baseNodeName'] = 'documentNode';
$arguments212['nodeVariableName'] = 'linkedNode';
$arguments212['resolveShortcuts'] = true;
$array214 = array (
);$arguments212['node'] = $renderingContext->getVariableProvider()->getByPath('firstChildNode', $array214);
$array211['0'] = Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments212, $renderChildrenClosure213, $renderingContext);
$arguments209['arguments'] = $array211;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments209, $renderChildrenClosure210, $renderingContext);
};
$arguments207 = array();
$arguments207['value'] = NULL;

$output206 .= isset($arguments207['value']) ? $arguments207['value'] : $renderChildrenClosure208();

$output206 .= '
			';
return $output206;
});
case call_user_func(function() use ($renderingContext, $self) {

return 'parentNode';
}): return call_user_func(function() use ($renderingContext, $self) {
$output219 = '';

$output219 .= '
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure221 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Neos\ViewHelpers\Backend\TranslateViewHelper
$renderChildrenClosure223 = function() use ($renderingContext, $self) {
$output228 = '';

$output228 .= '
					This is a shortcut to the parent page.<br />
					Click ';
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure230 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments229 = array();
$arguments229['additionalAttributes'] = NULL;
$arguments229['data'] = NULL;
$arguments229['class'] = NULL;
$arguments229['dir'] = NULL;
$arguments229['id'] = NULL;
$arguments229['lang'] = NULL;
$arguments229['style'] = NULL;
$arguments229['title'] = NULL;
$arguments229['accesskey'] = NULL;
$arguments229['tabindex'] = NULL;
$arguments229['onclick'] = NULL;
$arguments229['name'] = NULL;
$arguments229['rel'] = NULL;
$arguments229['rev'] = NULL;
$arguments229['target'] = NULL;
$arguments229['node'] = NULL;
$arguments229['format'] = NULL;
$arguments229['absolute'] = false;
$arguments229['arguments'] = array (
);
$arguments229['section'] = '';
$arguments229['addQueryString'] = false;
$arguments229['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments229['baseNodeName'] = 'documentNode';
$arguments229['nodeVariableName'] = 'linkedNode';
$arguments229['resolveShortcuts'] = true;
$array231 = array (
);$arguments229['node'] = $renderingContext->getVariableProvider()->getByPath('node.parent', $array231);

$output228 .= Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments229, $renderChildrenClosure230, $renderingContext);

$output228 .= ' to continue to the page.
				';
return $output228;
};
$arguments222 = array();
$arguments222['id'] = NULL;
$arguments222['value'] = NULL;
$arguments222['arguments'] = array (
);
$arguments222['source'] = 'Main';
$arguments222['package'] = NULL;
$arguments222['quantity'] = NULL;
$arguments222['locale'] = NULL;
$arguments222['id'] = 'shortcut.clickToContinueToParentNode';
// Rendering Array
$array224 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Link\NodeViewHelper
$renderChildrenClosure226 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments225 = array();
$arguments225['additionalAttributes'] = NULL;
$arguments225['data'] = NULL;
$arguments225['class'] = NULL;
$arguments225['dir'] = NULL;
$arguments225['id'] = NULL;
$arguments225['lang'] = NULL;
$arguments225['style'] = NULL;
$arguments225['title'] = NULL;
$arguments225['accesskey'] = NULL;
$arguments225['tabindex'] = NULL;
$arguments225['onclick'] = NULL;
$arguments225['name'] = NULL;
$arguments225['rel'] = NULL;
$arguments225['rev'] = NULL;
$arguments225['target'] = NULL;
$arguments225['node'] = NULL;
$arguments225['format'] = NULL;
$arguments225['absolute'] = false;
$arguments225['arguments'] = array (
);
$arguments225['section'] = '';
$arguments225['addQueryString'] = false;
$arguments225['argumentsToBeExcludedFromQueryString'] = array (
);
$arguments225['baseNodeName'] = 'documentNode';
$arguments225['nodeVariableName'] = 'linkedNode';
$arguments225['resolveShortcuts'] = true;
$array227 = array (
);$arguments225['node'] = $renderingContext->getVariableProvider()->getByPath('node.parent', $array227);
$array224['0'] = Neos\Neos\ViewHelpers\Link\NodeViewHelper::renderStatic($arguments225, $renderChildrenClosure226, $renderingContext);
$arguments222['arguments'] = $array224;
return Neos\Neos\ViewHelpers\Backend\TranslateViewHelper::renderStatic($arguments222, $renderChildrenClosure223, $renderingContext);
};
$arguments220 = array();
$arguments220['value'] = NULL;

$output219 .= isset($arguments220['value']) ? $arguments220['value'] : $renderChildrenClosure221();

$output219 .= '
			';
return $output219;
});
default:
return '';
}
}, array($arguments1));

$output0 .= '
	</p>
</div>
';

return $output0;
}


}
#0             112103    