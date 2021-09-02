<?php

namespace Ebay\Commerce\Charity;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public static $types = [
        'getCharityOrg' => [
            '200.' => 'Ebay\\Commerce\\Charity\\Model\\CharityOrg',
        ],
        'getCharityOrgs' => [
            '200.' => 'Ebay\\Commerce\\Charity\\Model\\CharitySearchResponse',
        ],
        'getCharityOrgByLegacyId' => [
            '200.' => 'Ebay\\Commerce\\Charity\\Model\\CharityOrg',
        ],
    ];
}
