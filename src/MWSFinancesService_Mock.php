<?php
/*******************************************************************************
 * Copyright 2009-2020 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License"); 
 *
 * You may not use this file except in compliance with the License. 
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR 
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the 
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  MWS Finances Service
 * @version  2015-05-01
 * Library Version: 2020-02-21
 * Generated: Fri Feb 21 09:07:30 PST 2020
 */

namespace MWSF;

use Exception;
use MWSF\Model\MWSFinancesService_Model_ListFinancialEventGroupsByNextTokenResponse;
use MWSF\Model\MWSFinancesService_Model_GetServiceStatusResponse;
use MWSF\Model\MWSFinancesService_Model_ListFinancialEventsByNextTokenResponse;
use MWSF\Model\MWSFinancesService_Model_ListFinancialEventsResponse;
use MWSF\Model\MWSFinancesService_Model_ListFinancialEventGroupsResponse;


class MWSFinancesService_Mock implements MWSFinancesService_Interface
{
    // Public API ------------------------------------------------------------//

    /**
     * List Financial Event Groups
     * ListFinancialEventGroups can be used to find financial event groups that meet filter criteria.
     *
     * @param mixed $request array of parameters for MWSFinancesService_Model_ListFinancialEventGroups request or MWSFinancesService_Model_ListFinancialEventGroups object itself
     * @return MWSFinancesService_Model_ListFinancialEventGroupsResponse
     *
     * @throws Exception
     *@see MWSFinancesService_Model_ListFinancialEventGroups
     */
    public function listFinancialEventGroups($request)
    {

        return MWSFinancesService_Model_ListFinancialEventGroupsResponse::fromXML($this->_invoke('ListFinancialEventGroups'));
    }

    /**
     * List Financial Event Groups By Next Token
     * If ListFinancialEventGroups returns a nextToken, thus indicating that there are more groups
     *         than returned that matched the given filter criteria, ListFinancialEventGroupsByNextToken
     *         can be used to retrieve those groups using that nextToken.
     *
     * @param mixed $request array of parameters for MWSFinancesService_Model_ListFinancialEventGroupsByNextToken request or MWSFinancesService_Model_ListFinancialEventGroupsByNextToken object itself
     * @return MWSFinancesService_Model_ListFinancialEventGroupsByNextTokenResponse
     *
     * @throws Exception
     *@see MWSFinancesService_Model_ListFinancialEventGroupsByNextToken
     */
    public function listFinancialEventGroupsByNextToken($request)
    {
        return MWSFinancesService_Model_ListFinancialEventGroupsByNextTokenResponse::fromXML($this->_invoke('ListFinancialEventGroupsByNextToken'));
    }

    /**
     * List Financial Events
     * ListFinancialEvents can be used to find financial events that meet the specified criteria.
     *
     * @param mixed $request array of parameters for MWSFinancesService_Model_ListFinancialEvents request or MWSFinancesService_Model_ListFinancialEvents object itself
     * @return MWSFinancesService_Model_ListFinancialEventsResponse
     *
     * @throws Exception
     *@see MWSFinancesService_Model_ListFinancialEvents
     */
    public function listFinancialEvents($request)
    {
        return MWSFinancesService_Model_ListFinancialEventsResponse::fromXML($this->_invoke('ListFinancialEvents'));
    }

    /**
     * List Financial Events By Next Token
     * If ListFinancialEvents returns a nextToken, thus indicating that there are more financial events
     *         than returned that matched the given filter criteria, ListFinancialEventsByNextToken
     *         can be used to retrieve those events using that nextToken.
     *
     * @param mixed $request array of parameters for MWSFinancesService_Model_ListFinancialEventsByNextToken request or MWSFinancesService_Model_ListFinancialEventsByNextToken object itself
     * @see MWSFinancesService_Model_ListFinancialEventsByNextToken
     * @return MWSFinancesService_Model_ListFinancialEventsByNextTokenResponse
     *
     */
    public function listFinancialEventsByNextToken($request)
    {
        return MWSFinancesService_Model_ListFinancialEventsByNextTokenResponse::fromXML($this->_invoke('ListFinancialEventsByNextToken'));
    }

    /**
     * Get Service Status
     * 
     *
     * @param mixed $request array of parameters for MWSFinancesService_Model_GetServiceStatus request or MWSFinancesService_Model_GetServiceStatus object itself
     * @see MWSFinancesService_Model_GetServiceStatus
     * @return MWSFinancesService_Model_GetServiceStatusResponse
     *
     */
    public function getServiceStatus($request)
    {
        return MWSFinancesService_Model_GetServiceStatusResponse::fromXML($this->_invoke('GetServiceStatus'));
    }

    // Private API ------------------------------------------------------------//

    private function _invoke($actionName)
    {
        return $xml = file_get_contents(dirname(__FILE__) . '/Mock/' . $actionName . 'Response.xml', /** search include path */ TRUE);
    }

}
