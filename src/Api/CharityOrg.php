<?php

namespace Ebay\Commerce\Charity\Api;

use Ebay\Commerce\Charity\Model\CharityOrg as CharityOrgModel;
use Ebay\Commerce\Charity\Model\CharitySearchResponse as CharitySearchResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class CharityOrg extends AbstractAPI
{
    /**
     * This call is used to retrieve detailed information about supported charitable
     * organizations. It allows users to retrieve the details for a specific charitable
     * organization using its charity organization ID. The call returns the full
     * details for the charitable organization that matches the specified ID.
     *
     * @param string $charity_org_id the unique ID of the charitable organization
     *
     * @return CharityOrgModel
     */
    public function get(string $charity_org_id): CharityOrgModel
    {
        return $this->client->request('getCharityOrg', 'GET', "charity_org/{$charity_org_id}",
            [
            ]
        );
    }

    /**
     * This call is used to search for supported charitable organizations. It allows
     * users to search for a specific charitable organization, or for multiple
     * charitable organizations, from a particular charitable domain and/or
     * geographical region, or by using search criteria. The call returns paginated
     * search results containing the charitable organizations that match the specified
     * criteria.
     *
     * @param array $queries options:
     *                       'limit'	string	The number of items, from the result set, returned in a single
     *                       page. Valid Values: 1-100 Default: 20
     *                       'offset'	string	The number of items that will be skipped in the result set. This
     *                       is used with the limit field to control the pagination of the output. For
     *                       example, if the offset is set to 0 and the limit is set to 10, the method will
     *                       retrieve items 1 through 10 from the list of items returned. If the offset is
     *                       set to 10 and the limit is set to 10, the method will retrieve items 11 through
     *                       20 from the list of items returned. Valid Values: 0-10,000 Default: 0
     *                       'q'	string	A query string that matches the keywords in name, mission statement,
     *                       or description.
     *                       'registration_ids'	string	A comma-separated list of charitable organization
     *                       registration IDs. Note: Do not specify this parameter for query-based searches.
     *                       Specify either the q or registration_ids parameter, but not both. Maximum Limit:
     *                       20
     *
     * @return CharitySearchResponse
     */
    public function gets(array $queries = []): CharitySearchResponse
    {
        return $this->client->request('getCharityOrgs', 'GET', 'charity_org',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * This call allows users to retrieve the details for a specific charitable
     * organization using its legacy charity ID, which has also been referred to as the
     * charity number, external ID, and PayPal Giving Fund ID. The legacy charity
     * ID&nbsp;is separate from eBay&rsquo;s generic charity ID.
     *
     * @param array $queries options:
     *                       'legacy_charity_org_id'	string	The legacy ID of the charitable organization.
     *                       Note: The legacy charity ID is the identifier assigned to an organization upon
     *                       registration with the PayPal Giving Fund (PPGF). It has also been referred to as
     *                       the external ID/charity number.
     *
     * @return CharityOrgModel
     */
    public function getByLegacyId(array $queries = []): CharityOrgModel
    {
        return $this->client->request('getCharityOrgByLegacyId', 'GET', 'charity_org/get_charity_org_by_legacy_id',
            [
                'query' => $queries,
            ]
        );
    }
}
