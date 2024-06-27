<?php 
declare(strict_types=1);

namespace Neos\Flow\Http\Middleware;

use Neos\Flow\Annotations as Flow;
use Neos\Flow\ObjectManagement\ObjectManagerInterface;
use Neos\Flow\Property\PropertyMapper;
use Neos\Flow\Property\PropertyMappingConfiguration;
use Neos\Flow\Property\TypeConverter\MediaTypeConverterInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

/**
 * Parses the request body and adds the result to the ServerRequest instance.
 */
class RequestBodyParsingMiddleware_Original implements MiddlewareInterface
{
    /**
     * @Flow\Inject
     * @var PropertyMapper
     */
    protected $propertyMapper;

    /**
     * @Flow\Inject
     * @var ObjectManagerInterface
     */
    protected $objectManager;

    /**
     * @inheritDoc
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $next): ResponseInterface
    {
        if (!empty($request->getParsedBody())) {
            return $next->handle($request);
        }
        $parsedBody = $this->parseRequestBody($request);
        return $next->handle($request->withParsedBody($parsedBody));
    }

    /**
     * Parses the request body according to the media type.
     *
     * @param ServerRequestInterface $httpRequest
     * @return null|array|string|integer
     */
    protected function parseRequestBody(ServerRequestInterface $httpRequest)
    {
        $requestBody = $httpRequest->getBody()->getContents();
        if ($requestBody === null || $requestBody === '') {
            return $requestBody;
        }

        /** @var MediaTypeConverterInterface $mediaTypeConverter */
        $mediaTypeConverter = $this->objectManager->get(MediaTypeConverterInterface::class);
        $propertyMappingConfiguration = new PropertyMappingConfiguration();
        $propertyMappingConfiguration->setTypeConverter($mediaTypeConverter);
        $requestedContentType = $httpRequest->getHeaderLine('Content-Type');
        $propertyMappingConfiguration->setTypeConverterOption(MediaTypeConverterInterface::class, MediaTypeConverterInterface::CONFIGURATION_MEDIA_TYPE, $requestedContentType);
        // FIXME: The MediaTypeConverter returns an empty array for "error cases", which might be unintended
        return $this->propertyMapper->convert($requestBody, 'array', $propertyMappingConfiguration);
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * Parses the request body and adds the result to the ServerRequest instance.
 * @codeCoverageIgnore
 */
class RequestBodyParsingMiddleware extends RequestBodyParsingMiddleware_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait, \Neos\Flow\ObjectManagement\DependencyInjection\PropertyInjectionTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if ('Neos\Flow\Http\Middleware\RequestBodyParsingMiddleware' === get_class($this)) {
            $this->Flow_Proxy_injectProperties();
        }
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __sleep()
    {
            $result = NULL;
        $this->Flow_Object_PropertiesToSerialize = array();
        unset($this->Flow_Persistence_RelatedEntities);

        $transientProperties = array (
);
        $propertyVarTags = array (
  'propertyMapper' => 'Neos\\Flow\\Property\\PropertyMapper',
  'objectManager' => 'Neos\\Flow\\ObjectManagement\\ObjectManagerInterface',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {

        $this->Flow_setRelatedEntities();
        $this->Flow_Proxy_injectProperties();
    }

    /**
     * Autogenerated Proxy Method
     */
    private function Flow_Proxy_injectProperties()
    {
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\Property\PropertyMapper', 'Neos\Flow\Property\PropertyMapper', 'propertyMapper', '2ab4a1ce2ee31715713d0f207f0ac637', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\Property\PropertyMapper'); });
        $this->Flow_Proxy_LazyPropertyInjection('Neos\Flow\ObjectManagement\ObjectManagerInterface', 'Neos\Flow\ObjectManagement\ObjectManager', 'objectManager', '9524ff5e5332c1890aa361e5d186b7b6', function() { return \Neos\Flow\Core\Bootstrap::$staticObjectManager->get('Neos\Flow\ObjectManagement\ObjectManagerInterface'); });
        $this->Flow_Injected_Properties = array (
  0 => 'propertyMapper',
  1 => 'objectManager',
);
    }
}
# PathAndFilename: /var/www/neos/Packages/Framework/Neos.Flow/Classes/Http/Middleware/RequestBodyParsingMiddleware.php
#