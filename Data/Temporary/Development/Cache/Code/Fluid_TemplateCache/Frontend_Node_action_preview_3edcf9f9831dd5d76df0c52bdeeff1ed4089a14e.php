<?php 
class Frontend_Node_action_preview_3edcf9f9831dd5d76df0c52bdeeff1ed4089a14e extends \TYPO3Fluid\Fluid\Core\Compiler\AbstractCompiledTemplate {

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
  'ts' => 
  array (
    0 => 'Neos\\Fusion\\ViewHelpers',
  ),
));
}

/**
 * section itemsList
 */
public function section_972aa32a62a3edb2361f354fbe5a593300986184(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output0 = '';

$output0 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure2 = function() use ($renderingContext, $self) {
$output4 = '';

$output4 .= '
		<li';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure6 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Fusion\ViewHelpers\RenderViewHelper
$renderChildrenClosure8 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments7 = array();
$arguments7['path'] = NULL;
$arguments7['context'] = NULL;
$arguments7['fusionPackageKey'] = NULL;
$arguments7['fusionFilePathPattern'] = NULL;
$output9 = '';
$array10 = array (
);
$output9 .= $renderingContext->getVariableProvider()->getByPath('item.state', $array10);

$output9 .= '.attributes';
$arguments7['path'] = $output9;
// Rendering Array
$array11 = array();
$array12 = array (
);$array11['item'] = $renderingContext->getVariableProvider()->getByPath('item', $array12);
$arguments7['context'] = $array11;
return Neos\Fusion\ViewHelpers\RenderViewHelper::renderStatic($arguments7, $renderChildrenClosure8, $renderingContext);
};
$arguments5 = array();
$arguments5['value'] = NULL;

$output4 .= isset($arguments5['value']) ? $arguments5['value'] : $renderChildrenClosure6();

$output4 .= '>
		<a href=';
$array13 = array (
);
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.uri', $array13)]);

$output4 .= ' title=';
$array14 = array (
);
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.label', $array14)]);

$output4 .= '>';
$array15 = array (
);
$output4 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.label', $array15)]);

$output4 .= '</a>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure17 = function() use ($renderingContext, $self) {
$output21 = '';

$output21 .= '
			<ul>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure23 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments22 = array();
$arguments22['section'] = NULL;
$arguments22['partial'] = NULL;
$arguments22['delegate'] = NULL;
$arguments22['renderable'] = NULL;
$arguments22['arguments'] = array (
);
$arguments22['optional'] = false;
$arguments22['default'] = NULL;
$arguments22['contentAs'] = NULL;
$arguments22['section'] = 'itemsList';
// Rendering Array
$array24 = array();
$array25 = array (
);$array24['items'] = $renderingContext->getVariableProvider()->getByPath('item.subItems', $array25);
$arguments22['arguments'] = $array24;

$output21 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments22, $renderChildrenClosure23, $renderingContext);

$output21 .= '
			</ul>
		';
return $output21;
};
$arguments16 = array();
$arguments16['then'] = NULL;
$arguments16['else'] = NULL;
$arguments16['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array18 = array();
$array19 = array (
);$array18['0'] = $renderingContext->getVariableProvider()->getByPath('item.subItems', $array19);

$expression20 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments16['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression20(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array18)
					),
					$renderingContext
				);
$arguments16['__thenClosure'] = $renderChildrenClosure17;

$output4 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments16, $renderChildrenClosure17, $renderingContext);

$output4 .= '
		</li>
	';
return $output4;
};
$arguments1 = array();
$arguments1['each'] = NULL;
$arguments1['as'] = NULL;
$arguments1['key'] = NULL;
$arguments1['reverse'] = false;
$arguments1['iteration'] = NULL;
$array3 = array (
);$arguments1['each'] = $renderingContext->getVariableProvider()->getByPath('items', $array3);
$arguments1['as'] = 'item';

$output0 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments1, $renderChildrenClosure2, $renderingContext);

$output0 .= '
';

return $output0;
}
/**
 * Main Render function
 */
public function render(\TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface $renderingContext) {
$self = $this;
$output26 = '';

$output26 .= '

<nav';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure28 = function() use ($renderingContext, $self) {
$array29 = array (
);return $renderingContext->getVariableProvider()->getByPath('attributes', $array29);
};
$arguments27 = array();
$arguments27['value'] = NULL;

$output26 .= isset($arguments27['value']) ? $arguments27['value'] : $renderChildrenClosure28();

$output26 .= '>
';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure31 = function() use ($renderingContext, $self) {
$output52 = '';

$output52 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ThenViewHelper
$renderChildrenClosure54 = function() use ($renderingContext, $self) {
$output55 = '';

$output55 .= '
		<ul>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure57 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments56 = array();
$arguments56['section'] = NULL;
$arguments56['partial'] = NULL;
$arguments56['delegate'] = NULL;
$arguments56['renderable'] = NULL;
$arguments56['arguments'] = array (
);
$arguments56['optional'] = false;
$arguments56['default'] = NULL;
$arguments56['contentAs'] = NULL;
$arguments56['section'] = 'itemsList';
// Rendering Array
$array58 = array();
$array59 = array (
);$array58['items'] = $renderingContext->getVariableProvider()->getByPath('items', $array59);
$arguments56['arguments'] = $array58;

$output55 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments56, $renderChildrenClosure57, $renderingContext);

$output55 .= '
		</ul>
	';
return $output55;
};
$arguments53 = array();

$output52 .= '';

$output52 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ElseViewHelper
$renderChildrenClosure61 = function() use ($renderingContext, $self) {
$output62 = '';

$output62 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure64 = function() use ($renderingContext, $self) {
$output69 = '';

$output69 .= '
			<p>';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper
$renderChildrenClosure71 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments70 = array();
$arguments70['id'] = NULL;
$arguments70['value'] = NULL;
$arguments70['arguments'] = array (
);
$arguments70['source'] = 'Main';
$arguments70['package'] = NULL;
$arguments70['quantity'] = NULL;
$arguments70['locale'] = NULL;
$arguments70['id'] = 'content.emptyMenu';
$arguments70['package'] = 'Neos.NodeTypes.Navigation';
$arguments70['source'] = 'NodeTypes/Navigation';

$output69 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper::renderStatic($arguments70, $renderChildrenClosure71, $renderingContext)]);

$output69 .= '</p>
		';
return $output69;
};
$arguments63 = array();
$arguments63['then'] = NULL;
$arguments63['else'] = NULL;
$arguments63['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array65 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Rendering\InEditModeViewHelper
$renderChildrenClosure67 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments66 = array();
$arguments66['node'] = NULL;
$arguments66['mode'] = NULL;
$array65['0'] = Neos\Neos\ViewHelpers\Rendering\InEditModeViewHelper::renderStatic($arguments66, $renderChildrenClosure67, $renderingContext);

$expression68 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments63['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression68(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array65)
					),
					$renderingContext
				);
$arguments63['__thenClosure'] = $renderChildrenClosure64;

$output62 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments63, $renderChildrenClosure64, $renderingContext);

$output62 .= '
	';
return $output62;
};
$arguments60 = array();
$arguments60['if'] = NULL;

$output52 .= '';

$output52 .= '
';
return $output52;
};
$arguments30 = array();
$arguments30['then'] = NULL;
$arguments30['else'] = NULL;
$arguments30['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array47 = array();
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper
$renderChildrenClosure49 = function() use ($renderingContext, $self) {
$array50 = array (
);return $renderingContext->getVariableProvider()->getByPath('items', $array50);
};
$arguments48 = array();
$arguments48['subject'] = NULL;
$renderChildrenClosure49 = ($arguments48['subject'] !== null) ? function() use ($arguments48) { return $arguments48['subject']; } : $renderChildrenClosure49;$array47['0'] = TYPO3Fluid\Fluid\ViewHelpers\CountViewHelper::renderStatic($arguments48, $renderChildrenClosure49, $renderingContext);

$expression51 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments30['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression51(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array47)
					),
					$renderingContext
				);
$arguments30['__thenClosure'] = function() use ($renderingContext, $self) {
$output32 = '';

$output32 .= '
		<ul>
			';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure34 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments33 = array();
$arguments33['section'] = NULL;
$arguments33['partial'] = NULL;
$arguments33['delegate'] = NULL;
$arguments33['renderable'] = NULL;
$arguments33['arguments'] = array (
);
$arguments33['optional'] = false;
$arguments33['default'] = NULL;
$arguments33['contentAs'] = NULL;
$arguments33['section'] = 'itemsList';
// Rendering Array
$array35 = array();
$array36 = array (
);$array35['items'] = $renderingContext->getVariableProvider()->getByPath('items', $array36);
$arguments33['arguments'] = $array35;

$output32 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments33, $renderChildrenClosure34, $renderingContext);

$output32 .= '
		</ul>
	';
return $output32;
};
$arguments30['__elseClosures'][] = function() use ($renderingContext, $self) {
$output37 = '';

$output37 .= '
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure39 = function() use ($renderingContext, $self) {
$output44 = '';

$output44 .= '
			<p>';
// Rendering ViewHelper Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper
$renderChildrenClosure46 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments45 = array();
$arguments45['id'] = NULL;
$arguments45['value'] = NULL;
$arguments45['arguments'] = array (
);
$arguments45['source'] = 'Main';
$arguments45['package'] = NULL;
$arguments45['quantity'] = NULL;
$arguments45['locale'] = NULL;
$arguments45['id'] = 'content.emptyMenu';
$arguments45['package'] = 'Neos.NodeTypes.Navigation';
$arguments45['source'] = 'NodeTypes/Navigation';

$output44 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [Neos\FluidAdaptor\ViewHelpers\TranslateViewHelper::renderStatic($arguments45, $renderChildrenClosure46, $renderingContext)]);

$output44 .= '</p>
		';
return $output44;
};
$arguments38 = array();
$arguments38['then'] = NULL;
$arguments38['else'] = NULL;
$arguments38['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array40 = array();
// Rendering ViewHelper Neos\Neos\ViewHelpers\Rendering\InEditModeViewHelper
$renderChildrenClosure42 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments41 = array();
$arguments41['node'] = NULL;
$arguments41['mode'] = NULL;
$array40['0'] = Neos\Neos\ViewHelpers\Rendering\InEditModeViewHelper::renderStatic($arguments41, $renderChildrenClosure42, $renderingContext);

$expression43 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments38['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression43(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array40)
					),
					$renderingContext
				);
$arguments38['__thenClosure'] = $renderChildrenClosure39;

$output37 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments38, $renderChildrenClosure39, $renderingContext);

$output37 .= '
	';
return $output37;
};

$output26 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments30, $renderChildrenClosure31, $renderingContext);

$output26 .= '
</nav>

';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\SectionViewHelper
$renderChildrenClosure73 = function() use ($renderingContext, $self) {
$output74 = '';

$output74 .= '
	';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper
$renderChildrenClosure76 = function() use ($renderingContext, $self) {
$output78 = '';

$output78 .= '
		<li';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\Format\RawViewHelper
$renderChildrenClosure80 = function() use ($renderingContext, $self) {
// Rendering ViewHelper Neos\Fusion\ViewHelpers\RenderViewHelper
$renderChildrenClosure82 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments81 = array();
$arguments81['path'] = NULL;
$arguments81['context'] = NULL;
$arguments81['fusionPackageKey'] = NULL;
$arguments81['fusionFilePathPattern'] = NULL;
$output83 = '';
$array84 = array (
);
$output83 .= $renderingContext->getVariableProvider()->getByPath('item.state', $array84);

$output83 .= '.attributes';
$arguments81['path'] = $output83;
// Rendering Array
$array85 = array();
$array86 = array (
);$array85['item'] = $renderingContext->getVariableProvider()->getByPath('item', $array86);
$arguments81['context'] = $array85;
return Neos\Fusion\ViewHelpers\RenderViewHelper::renderStatic($arguments81, $renderChildrenClosure82, $renderingContext);
};
$arguments79 = array();
$arguments79['value'] = NULL;

$output78 .= isset($arguments79['value']) ? $arguments79['value'] : $renderChildrenClosure80();

$output78 .= '>
		<a href=';
$array87 = array (
);
$output78 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.uri', $array87)]);

$output78 .= ' title=';
$array88 = array (
);
$output78 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.label', $array88)]);

$output78 .= '>';
$array89 = array (
);
$output78 .= call_user_func_array( function ($var) { return (is_string($var) || (is_object($var) && method_exists($var, '__toString')) ? htmlspecialchars((string) $var, ENT_QUOTES) : $var); }, [$renderingContext->getVariableProvider()->getByPath('item.label', $array89)]);

$output78 .= '</a>
		';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper
$renderChildrenClosure91 = function() use ($renderingContext, $self) {
$output95 = '';

$output95 .= '
			<ul>
				';
// Rendering ViewHelper TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper
$renderChildrenClosure97 = function() use ($renderingContext, $self) {
return NULL;
};
$arguments96 = array();
$arguments96['section'] = NULL;
$arguments96['partial'] = NULL;
$arguments96['delegate'] = NULL;
$arguments96['renderable'] = NULL;
$arguments96['arguments'] = array (
);
$arguments96['optional'] = false;
$arguments96['default'] = NULL;
$arguments96['contentAs'] = NULL;
$arguments96['section'] = 'itemsList';
// Rendering Array
$array98 = array();
$array99 = array (
);$array98['items'] = $renderingContext->getVariableProvider()->getByPath('item.subItems', $array99);
$arguments96['arguments'] = $array98;

$output95 .= TYPO3Fluid\Fluid\ViewHelpers\RenderViewHelper::renderStatic($arguments96, $renderChildrenClosure97, $renderingContext);

$output95 .= '
			</ul>
		';
return $output95;
};
$arguments90 = array();
$arguments90['then'] = NULL;
$arguments90['else'] = NULL;
$arguments90['condition'] = false;
// Rendering Boolean node
// Rendering Array
$array92 = array();
$array93 = array (
);$array92['0'] = $renderingContext->getVariableProvider()->getByPath('item.subItems', $array93);

$expression94 = function($context) {return TYPO3Fluid\Fluid\Core\Parser\BooleanParser::convertNodeToBoolean($context["node0"]);};
$arguments90['condition'] = TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::convertToBoolean(
					$expression94(
						TYPO3Fluid\Fluid\Core\Parser\SyntaxTree\BooleanNode::gatherContext($renderingContext, $array92)
					),
					$renderingContext
				);
$arguments90['__thenClosure'] = $renderChildrenClosure91;

$output78 .= TYPO3Fluid\Fluid\ViewHelpers\IfViewHelper::renderStatic($arguments90, $renderChildrenClosure91, $renderingContext);

$output78 .= '
		</li>
	';
return $output78;
};
$arguments75 = array();
$arguments75['each'] = NULL;
$arguments75['as'] = NULL;
$arguments75['key'] = NULL;
$arguments75['reverse'] = false;
$arguments75['iteration'] = NULL;
$array77 = array (
);$arguments75['each'] = $renderingContext->getVariableProvider()->getByPath('items', $array77);
$arguments75['as'] = 'item';

$output74 .= TYPO3Fluid\Fluid\ViewHelpers\ForViewHelper::renderStatic($arguments75, $renderChildrenClosure76, $renderingContext);

$output74 .= '
';
return $output74;
};
$arguments72 = array();
$arguments72['name'] = NULL;
$arguments72['name'] = 'itemsList';

$output26 .= '';

$output26 .= '
';

return $output26;
}


}
#0             30009     