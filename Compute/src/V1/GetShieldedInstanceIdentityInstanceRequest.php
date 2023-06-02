<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request message for Instances.GetShieldedInstanceIdentity. See the method description for details.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.GetShieldedInstanceIdentityInstanceRequest</code>
 */
class GetShieldedInstanceIdentityInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Name or id of the instance scoping this request.
     *
     * Generated from protobuf field <code>string instance = 18257045 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $instance = '';
    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project = '';
    /**
     * The name of the zone for this request.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $zone = '';

    /**
     * @param string $project  Project ID for this request.
     * @param string $zone     The name of the zone for this request.
     * @param string $instance Name or id of the instance scoping this request.
     *
     * @return \Google\Cloud\Compute\V1\GetShieldedInstanceIdentityInstanceRequest
     *
     * @experimental
     */
    public static function build(string $project, string $zone, string $instance): self
    {
        return (new self())
            ->setProject($project)
            ->setZone($zone)
            ->setInstance($instance);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $instance
     *           Name or id of the instance scoping this request.
     *     @type string $project
     *           Project ID for this request.
     *     @type string $zone
     *           The name of the zone for this request.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Name or id of the instance scoping this request.
     *
     * Generated from protobuf field <code>string instance = 18257045 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Name or id of the instance scoping this request.
     *
     * Generated from protobuf field <code>string instance = 18257045 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkString($var, True);
        $this->instance = $var;

        return $this;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project ID for this request.
     *
     * Generated from protobuf field <code>string project = 227560217 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * The name of the zone for this request.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * The name of the zone for this request.
     *
     * Generated from protobuf field <code>string zone = 3744684 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

}

