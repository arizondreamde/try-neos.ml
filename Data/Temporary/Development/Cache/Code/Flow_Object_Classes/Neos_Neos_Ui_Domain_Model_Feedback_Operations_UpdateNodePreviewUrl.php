<?php 
namespace Neos\Neos\Ui\Domain\Model\Feedback\Operations;

/*
 * This file is part of the Neos.Neos.Ui package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\ContentRepository\Domain\Model\NodeInterface;
use Neos\Flow\Mvc\Controller\ControllerContext;
use Neos\Neos\Ui\Domain\Model\AbstractFeedback;
use Neos\Neos\Ui\Domain\Model\FeedbackInterface;
use Neos\Neos\Ui\Fusion\Helper\NodeInfoHelper;

class UpdateNodePreviewUrl_Original extends AbstractFeedback
{
    /**
     * @var NodeInterface
     */
    protected $node;

    /**
     * Set the node
     *
     * @param NodeInterface $node
     * @return void
     */
    public function setNode(NodeInterface $node)
    {
        $this->node = $node;
    }

    /**
     * Get the node
     *
     * @return NodeInterface
     */
    public function getNode()
    {
        return $this->node;
    }

    /**
     * Get the type identifier
     *
     * @return string
     */
    public function getType()
    {
        return 'Neos.Neos.Ui:UpdateNodePreviewUrl';
    }

    /**
     * Get the description
     *
     * @return string
     */
    public function getDescription()
    {
        return sprintf('The "preview URL" of node "%s" has been changed potentially.', $this->getNode()->getLabel());
    }

    /**
     * Checks whether this feedback is similar to another
     *
     * @param FeedbackInterface $feedback
     * @return boolean
     */
    public function isSimilarTo(FeedbackInterface $feedback)
    {
        if (!$feedback instanceof UpdateNodePreviewUrl) {
            return false;
        }
        return $this->getNode()->getContextPath() === $feedback->getNode()->getContextPath();
    }

    /**
     * Serialize the payload for this feedback
     *
     * @param ControllerContext $controllerContext
     * @return array
     */
    public function serializePayload(ControllerContext $controllerContext)
    {
        if ($this->node === null) {
            $newPreviewUrl = '';
            $contextPath = '';
        } else {
            $nodeInfoHelper = new NodeInfoHelper();
            $newPreviewUrl = $nodeInfoHelper->createRedirectToNode($controllerContext, $this->node);
            $contextPath = $this->node->getContextPath();
        }
        return [
            'newPreviewUrl' => $newPreviewUrl,
            'contextPath' => $contextPath,
        ];
    }
}

#
# Start of Flow generated Proxy code
#

class UpdateNodePreviewUrl extends UpdateNodePreviewUrl_Original implements \Neos\Flow\ObjectManagement\Proxy\ProxyInterface {

    use \Neos\Flow\ObjectManagement\Proxy\ObjectSerializationTrait;


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
  'node' => 'Neos\\ContentRepository\\Domain\\Model\\NodeInterface',
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
    }
}
# PathAndFilename: /var/www/neos/Packages/Application/Neos.Neos.Ui/Classes/Domain/Model/Feedback/Operations/UpdateNodePreviewUrl.php
#