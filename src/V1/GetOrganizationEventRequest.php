<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/servicehealth/v1/event_resources.proto

namespace Google\Cloud\ServiceHealth\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Message for getting an organization event.
 *
 * Generated from protobuf message <code>google.cloud.servicehealth.v1.GetOrganizationEventRequest</code>
 */
class GetOrganizationEventRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Unique name of the event in this scope including organization and
     * event ID using the form
     * `organizations/{organization_id}/locations/locations/global/organizationEvents/{event_id}`.
     * `organization_id` - ID (number) of the project that contains the event. To
     * get your `organization_id`, see
     * [Getting your organization resource
     * ID](https://cloud.google.com/resource-manager/docs/creating-managing-organization#retrieving_your_organization_id).<br>
     * `event_id` - Organization event ID to retrieve.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. Unique name of the event in this scope including organization and
     *                     event ID using the form
     *                     `organizations/{organization_id}/locations/locations/global/organizationEvents/{event_id}`.
     *
     *                     `organization_id` - ID (number) of the project that contains the event. To
     *                     get your `organization_id`, see
     *                     [Getting your organization resource
     *                     ID](https://cloud.google.com/resource-manager/docs/creating-managing-organization#retrieving_your_organization_id).<br>
     *                     `event_id` - Organization event ID to retrieve. Please see
     *                     {@see ServiceHealthClient::organizationEventName()} for help formatting this field.
     *
     * @return \Google\Cloud\ServiceHealth\V1\GetOrganizationEventRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Unique name of the event in this scope including organization and
     *           event ID using the form
     *           `organizations/{organization_id}/locations/locations/global/organizationEvents/{event_id}`.
     *           `organization_id` - ID (number) of the project that contains the event. To
     *           get your `organization_id`, see
     *           [Getting your organization resource
     *           ID](https://cloud.google.com/resource-manager/docs/creating-managing-organization#retrieving_your_organization_id).<br>
     *           `event_id` - Organization event ID to retrieve.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Servicehealth\V1\EventResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Unique name of the event in this scope including organization and
     * event ID using the form
     * `organizations/{organization_id}/locations/locations/global/organizationEvents/{event_id}`.
     * `organization_id` - ID (number) of the project that contains the event. To
     * get your `organization_id`, see
     * [Getting your organization resource
     * ID](https://cloud.google.com/resource-manager/docs/creating-managing-organization#retrieving_your_organization_id).<br>
     * `event_id` - Organization event ID to retrieve.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Unique name of the event in this scope including organization and
     * event ID using the form
     * `organizations/{organization_id}/locations/locations/global/organizationEvents/{event_id}`.
     * `organization_id` - ID (number) of the project that contains the event. To
     * get your `organization_id`, see
     * [Getting your organization resource
     * ID](https://cloud.google.com/resource-manager/docs/creating-managing-organization#retrieving_your_organization_id).<br>
     * `event_id` - Organization event ID to retrieve.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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

