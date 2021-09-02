<?php

namespace Ebay\Commerce\Charity\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The physical location of the item.
 */
class Address extends AbstractModel
{
    /**
     * The city of the charitable organization.
     *
     * @var string
     */
    public $city = null;

    /**
     * The state or province of the charitable organization.
     *
     * @var string
     */
    public $stateOrProvince = null;

    /**
     * The postal code of the charitable organization.
     *
     * @var string
     */
    public $postalCode = null;

    /**
     * The two-letter ISO 3166 standard of the country of the address. For
     * implementation help, refer to <a
     * href='https://developer.ebay.com/api-docs/commerce/charity/types/bas:CountryCodeEnum'>eBay
     * API documentation</a>.
     *
     * @var string
     */
    public $country = null;
}
