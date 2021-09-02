<?php

namespace Ebay\Commerce\Charity\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The full location, ID, logo and other details of the charity organization.
 */
class CharityOrg extends AbstractModel
{
    /**
     * The ID of the charitable organization.
     *
     * @var string
     */
    public $charityOrgId = null;

    /**
     * The location details of the charitable organization.
     *
     * @var \Ebay\Commerce\Charity\Model\Location
     */
    public $location = null;

    /**
     * The logo of the charitable organization.
     *
     * @var \Ebay\Commerce\Charity\Model\Image
     */
    public $logoImage = null;

    /**
     * The mission statement of the charitable organization.
     *
     * @var string
     */
    public $missionStatement = null;

    /**
     * The name of the charitable organization.
     *
     * @var string
     */
    public $name = null;

    /**
     * The registration ID for the charitable organization. For the US marketplace,
     * this is the EIN.
     *
     * @var string
     */
    public $registrationId = null;

    /**
     * The link to the website for the charitable organization.
     *
     * @var string
     */
    public $website = null;
}
