<?php

namespace Ebay\Commerce\Charity\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A single set of search results, with information for accessing other sets.
 */
class CharitySearchResponse extends AbstractModel
{
    /**
     * The list of charitable organizations that match the search criteria.
     *
     * @var \Ebay\Commerce\Charity\Model\CharityOrg[]
     */
    public $charityOrgs = null;

    /**
     * The relative path to the current set of results.
     *
     * @var string
     */
    public $href = null;

    /**
     * The number of items, from the result set, returned in a single page. Valid
     * Values: 1-100 Default: 20.
     *
     * @var int
     */
    public $limit = null;

    /**
     * The relative path to the next set of results.
     *
     * @var string
     */
    public $next = null;

    /**
     * The number of items that will be skipped in the result set. This is used with
     * the limit field to control the pagination of the output. For example, if the
     * offset is set to 0 and the limit is set to 10, the method will retrieve items 1
     * through 10 from the list of items returned. If the offset is set to 10 and the
     * limit is set to 10, the method will retrieve items 11 through 20 from the list
     * of items returned. Valid Values: 0-10,000 Default: 0.
     *
     * @var int
     */
    public $offset = null;

    /**
     * The relative path to the previous set of results.
     *
     * @var string
     */
    public $prev = null;

    /**
     * The total number of matches for the search criteria.
     *
     * @var int
     */
    public $total = null;
}
