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

namespace MWSF\Model;


use MWSF\MWSFinancesService_Model;

use DOMDocument;
use DOMXPath;
use Exception;




/**
 * MWSFinancesService_Model_ListFinancialEventGroupsResponse
 * 
 * Properties:
 * ListFinancialEventGroupsResult: MWSFinancesService_Model_ListFinancialEventGroupsResult
 * ResponseMetadata: MWSFinancesService_Model_ResponseMetadata
 * ResponseHeaderMetadata: MWSFinancesService_Model_ResponseHeaderMetadata
 *
 */

 class MWSFinancesService_Model_ListFinancialEventGroupsResponse extends MWSFinancesService_Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'ListFinancialEventGroupsResult' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_ListFinancialEventGroupsResult'),
    'ResponseMetadata' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_ResponseMetadata'),
    'ResponseHeaderMetadata' => array('FieldValue' => null, 'FieldType' => 'MWSFinancesService_Model_ResponseHeaderMetadata'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the ListFinancialEventGroupsResult property.
     *
     * @return ListFinancialEventGroupsResult ListFinancialEventGroupsResult.
     */
    public function getListFinancialEventGroupsResult()
    {
        return $this->_fields['ListFinancialEventGroupsResult']['FieldValue'];
    }

    /**
     * Set the value of the ListFinancialEventGroupsResult property.
     *
     * @param MWSFinancesService_Model_ListFinancialEventGroupsResult listFinancialEventGroupsResult
     * @return MWSFinancesService_Model_ListFinancialEventGroupsResponse
     */
    public function setListFinancialEventGroupsResult($value)
    {
        $this->_fields['ListFinancialEventGroupsResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ListFinancialEventGroupsResult is set.
     *
     * @return true if ListFinancialEventGroupsResult is set.
     */
    public function isSetListFinancialEventGroupsResult()
    {
                return !is_null($this->_fields['ListFinancialEventGroupsResult']['FieldValue']);
            }

    /**
     * Set the value of ListFinancialEventGroupsResult, return this.
     *
     * @param listFinancialEventGroupsResult
     *             The new value to set.
     *
     * @return MWSFinancesService_Model_ListFinancialEventGroupsResponse
     */
    public function withListFinancialEventGroupsResult($value)
    {
        $this->setListFinancialEventGroupsResult($value);
        return $this;
    }

    /**
     * Get the value of the ResponseMetadata property.
     *
     * @return ResponseMetadata ResponseMetadata.
     */
    public function getResponseMetadata()
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseMetadata property.
     *
     * @param MWSFinancesService_Model_ResponseMetadata responseMetadata
     * @return MWSFinancesService_Model_ListFinancialEventGroupsResponse
     */
    public function setResponseMetadata($value)
    {
        $this->_fields['ResponseMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseMetadata is set.
     *
     * @return true if ResponseMetadata is set.
     */
    public function isSetResponseMetadata()
    {
                return !is_null($this->_fields['ResponseMetadata']['FieldValue']);
            }

    /**
     * Set the value of ResponseMetadata, return this.
     *
     * @param responseMetadata
     *             The new value to set.
     *
     * @return MWSFinancesService_Model_ListFinancialEventGroupsResponse
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);
        return $this;
    }

    /**
     * Get the value of the ResponseHeaderMetadata property.
     *
     * @return MWSFinancesService_Model_ResponseHeaderMetadata
     */
    public function getResponseHeaderMetadata()
    {
        return $this->_fields['ResponseHeaderMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseHeaderMetadata property.
     *
     * @param MWSFinancesService_Model_ResponseHeaderMetadata
     * @return MWSFinancesService_Model_ListFinancialEventGroupsResponse
     */
    public function setResponseHeaderMetadata($value)
    {
        $this->_fields['ResponseHeaderMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseHeaderMetadata is set.
     *
     * @return true if ResponseHeaderMetadata is set.
     */
    public function isSetResponseHeaderMetadata()
    {
                return !is_null($this->_fields['ResponseHeaderMetadata']['FieldValue']);
            }

    /**
     * Set the value of ResponseHeaderMetadata, return this.
     *
     * @param MWSFinancesService_Model_ResponseHeaderMetadata
     *             The new value to set.
     *
     * @return MWSFinancesService_Model_ListFinancialEventGroupsResponse
     */
    public function withResponseHeaderMetadata($value)
    {
        $this->setResponseHeaderMetadata($value);
        return $this;
    }

     /**
      * Construct MWSFinancesService_Model_ListFinancialEventGroupsResponse from XML string
      *
      * @param $xml
      *        XML string to construct from
      *
      * @return MWSFinancesService_Model_ListFinancialEventGroupsResponse
      * @throws Exception
      */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ListFinancialEventGroupsResponse']");
        if ($response->length == 1) {
            return new MWSFinancesService_Model_ListFinancialEventGroupsResponse(($response->item(0))); 
        } else {
            throw new Exception ("Unable to construct MWSFinancesService_Model_ListFinancialEventGroupsResponse from provided XML. 
                                  Make sure that ListFinancialEventGroupsResponse is a root element");
        }
    }
    /**
     * XML Representation for this object
     * 
     * @return string XML for this object
     */
    public function toXML() 
    {
        $xml = "";
        $xml .= "<ListFinancialEventGroupsResponse xmlns=\"http://mws.amazonservices.com/Finances/2015-05-01\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ListFinancialEventGroupsResponse>";
        return $xml;
    }

}
