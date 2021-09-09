<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/services/campaign_criterion_service.proto

namespace Google\Ads\GoogleAds\V8\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The result for the criterion mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v8.services.MutateCampaignCriterionResult</code>
 */
class MutateCampaignCriterionResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';
    /**
     * The mutated campaign criterion with only mutable fields after mutate. The
     * field will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.resources.CampaignCriterion campaign_criterion = 2;</code>
     */
    protected $campaign_criterion = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Returned for successful operations.
     *     @type \Google\Ads\GoogleAds\V8\Resources\CampaignCriterion $campaign_criterion
     *           The mutated campaign criterion with only mutable fields after mutate. The
     *           field will only be returned when response_content_type is set to
     *           "MUTABLE_RESOURCE".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V8\Services\CampaignCriterionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The mutated campaign criterion with only mutable fields after mutate. The
     * field will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.resources.CampaignCriterion campaign_criterion = 2;</code>
     * @return \Google\Ads\GoogleAds\V8\Resources\CampaignCriterion|null
     */
    public function getCampaignCriterion()
    {
        return isset($this->campaign_criterion) ? $this->campaign_criterion : null;
    }

    public function hasCampaignCriterion()
    {
        return isset($this->campaign_criterion);
    }

    public function clearCampaignCriterion()
    {
        unset($this->campaign_criterion);
    }

    /**
     * The mutated campaign criterion with only mutable fields after mutate. The
     * field will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v8.resources.CampaignCriterion campaign_criterion = 2;</code>
     * @param \Google\Ads\GoogleAds\V8\Resources\CampaignCriterion $var
     * @return $this
     */
    public function setCampaignCriterion($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V8\Resources\CampaignCriterion::class);
        $this->campaign_criterion = $var;

        return $this;
    }

}

