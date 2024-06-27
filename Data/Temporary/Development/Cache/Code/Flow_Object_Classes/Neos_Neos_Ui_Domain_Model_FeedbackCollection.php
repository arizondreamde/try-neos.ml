<?php 
namespace Neos\Neos\Ui\Domain\Model;

/*
 * This file is part of the Neos.Neos.Ui package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Mvc\Controller\ControllerContext;

/**
 * @Flow\Scope("singleton")
 */
class FeedbackCollection_Original implements \JsonSerializable
{
    /**
     * @var array<FeedbackInterface>
     */
    protected $feedbacks = [];

    /**
     * @var ControllerContext
     */
    protected $controllerContext;

    /**
     * Set the controller context
     *
     * @param ControllerContext $controllerContext
     * @return void
     */
    public function setControllerContext(ControllerContext $controllerContext)
    {
        $this->controllerContext = $controllerContext;
    }

    /**
     * Add feedback
     *
     * @param FeedbackInterface $feedback
     * @return void
     */
    public function add(FeedbackInterface $feedback)
    {
        foreach ($this->feedbacks as $value) {
            if ($value->isSimilarTo($feedback)) {
                return;
            }
        }

        $this->feedbacks[] = $feedback;
    }

    /**
     * Serialize collection to `json_encode`able array
     *
     * @return array
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $feedbacks = [];

        foreach ($this->feedbacks as $feedback) {
            $feedbacks[] = $feedback->serialize($this->controllerContext);
        }

        return [
            'timestamp' => new \DateTime(),
            'feedbacks' => $feedbacks
        ];
    }

    public function reset()
    {
        $this->feedbacks = [];
    }
}

#
# Start of Flow generated Proxy code
#
/**
 * @Flow\Scope("singleton")
 * @codeCoverageIgnore
 */
class FeedbackCollection extends FeedbackCollection_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


    /**
     * Autogenerated Proxy Method
     */
    public function __construct()
    {
        if (get_class($this) === 'Neos\Neos\Ui\Domain\Model\FeedbackCollection') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Neos\Ui\Domain\Model\FeedbackCollection', $this);
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
  'feedbacks' => 'array<Neos\\Neos\\Ui\\Domain\\Model\\FeedbackInterface>',
  'controllerContext' => 'Neos\\Flow\\Mvc\\Controller\\ControllerContext',
);
        $result = $this->Flow_serializeRelatedEntities($transientProperties, $propertyVarTags);
        return $result;
    }

    /**
     * Autogenerated Proxy Method
     */
    public function __wakeup()
    {
        if (get_class($this) === 'Neos\Neos\Ui\Domain\Model\FeedbackCollection') \Neos\Flow\Core\Bootstrap::$staticObjectManager->setInstance('Neos\Neos\Ui\Domain\Model\FeedbackCollection', $this);

        $this->Flow_setRelatedEntities();
    }
}
# PathAndFilename: /var/www/neos/Packages/Application/Neos.Neos.Ui/Classes/Domain/Model/FeedbackCollection.php
#