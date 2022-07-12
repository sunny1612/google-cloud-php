<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/container/v1/cluster_service.proto

namespace Google\Cloud\Container\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SetMaintenancePolicyRequest sets the maintenance policy for a cluster.
 *
 * Generated from protobuf message <code>google.container.v1.SetMaintenancePolicyRequest</code>
 */
class SetMaintenancePolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Google Developers Console [project ID or project
     * number](https://cloud.google.com/resource-manager/docs/creating-managing-projects).
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $project_id = '';
    /**
     * Required. The name of the Google Compute Engine
     * [zone](https://cloud.google.com/compute/docs/zones#available) in which the
     * cluster resides.
     *
     * Generated from protobuf field <code>string zone = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $zone = '';
    /**
     * Required. The name of the cluster to update.
     *
     * Generated from protobuf field <code>string cluster_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $cluster_id = '';
    /**
     * Required. The maintenance policy to be set for the cluster. An empty field
     * clears the existing maintenance policy.
     *
     * Generated from protobuf field <code>.google.container.v1.MaintenancePolicy maintenance_policy = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $maintenance_policy = null;
    /**
     * The name (project, location, cluster name) of the cluster to set
     * maintenance policy.
     * Specified in the format `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;`.
     *
     * Generated from protobuf field <code>string name = 5;</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $project_id
     *           Required. The Google Developers Console [project ID or project
     *           number](https://cloud.google.com/resource-manager/docs/creating-managing-projects).
     *     @type string $zone
     *           Required. The name of the Google Compute Engine
     *           [zone](https://cloud.google.com/compute/docs/zones#available) in which the
     *           cluster resides.
     *     @type string $cluster_id
     *           Required. The name of the cluster to update.
     *     @type \Google\Cloud\Container\V1\MaintenancePolicy $maintenance_policy
     *           Required. The maintenance policy to be set for the cluster. An empty field
     *           clears the existing maintenance policy.
     *     @type string $name
     *           The name (project, location, cluster name) of the cluster to set
     *           maintenance policy.
     *           Specified in the format `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Container\V1\ClusterService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Google Developers Console [project ID or project
     * number](https://cloud.google.com/resource-manager/docs/creating-managing-projects).
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getProjectId()
    {
        return $this->project_id;
    }

    /**
     * Required. The Google Developers Console [project ID or project
     * number](https://cloud.google.com/resource-manager/docs/creating-managing-projects).
     *
     * Generated from protobuf field <code>string project_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setProjectId($var)
    {
        GPBUtil::checkString($var, True);
        $this->project_id = $var;

        return $this;
    }

    /**
     * Required. The name of the Google Compute Engine
     * [zone](https://cloud.google.com/compute/docs/zones#available) in which the
     * cluster resides.
     *
     * Generated from protobuf field <code>string zone = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Required. The name of the Google Compute Engine
     * [zone](https://cloud.google.com/compute/docs/zones#available) in which the
     * cluster resides.
     *
     * Generated from protobuf field <code>string zone = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

    /**
     * Required. The name of the cluster to update.
     *
     * Generated from protobuf field <code>string cluster_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getClusterId()
    {
        return $this->cluster_id;
    }

    /**
     * Required. The name of the cluster to update.
     *
     * Generated from protobuf field <code>string cluster_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setClusterId($var)
    {
        GPBUtil::checkString($var, True);
        $this->cluster_id = $var;

        return $this;
    }

    /**
     * Required. The maintenance policy to be set for the cluster. An empty field
     * clears the existing maintenance policy.
     *
     * Generated from protobuf field <code>.google.container.v1.MaintenancePolicy maintenance_policy = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Container\V1\MaintenancePolicy|null
     */
    public function getMaintenancePolicy()
    {
        return $this->maintenance_policy;
    }

    public function hasMaintenancePolicy()
    {
        return isset($this->maintenance_policy);
    }

    public function clearMaintenancePolicy()
    {
        unset($this->maintenance_policy);
    }

    /**
     * Required. The maintenance policy to be set for the cluster. An empty field
     * clears the existing maintenance policy.
     *
     * Generated from protobuf field <code>.google.container.v1.MaintenancePolicy maintenance_policy = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Container\V1\MaintenancePolicy $var
     * @return $this
     */
    public function setMaintenancePolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Container\V1\MaintenancePolicy::class);
        $this->maintenance_policy = $var;

        return $this;
    }

    /**
     * The name (project, location, cluster name) of the cluster to set
     * maintenance policy.
     * Specified in the format `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;`.
     *
     * Generated from protobuf field <code>string name = 5;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name (project, location, cluster name) of the cluster to set
     * maintenance policy.
     * Specified in the format `projects/&#42;&#47;locations/&#42;&#47;clusters/&#42;`.
     *
     * Generated from protobuf field <code>string name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

