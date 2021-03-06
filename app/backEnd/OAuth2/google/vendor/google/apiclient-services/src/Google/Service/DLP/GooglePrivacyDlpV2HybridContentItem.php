<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

class Google_Service_DLP_GooglePrivacyDlpV2HybridContentItem extends Google_Model
{
  protected $findingDetailsType = 'Google_Service_DLP_GooglePrivacyDlpV2HybridFindingDetails';
  protected $findingDetailsDataType = '';
  protected $itemType = 'Google_Service_DLP_GooglePrivacyDlpV2ContentItem';
  protected $itemDataType = '';

  /**
   * @param Google_Service_DLP_GooglePrivacyDlpV2HybridFindingDetails
   */
  public function setFindingDetails(Google_Service_DLP_GooglePrivacyDlpV2HybridFindingDetails $findingDetails)
  {
    $this->findingDetails = $findingDetails;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2HybridFindingDetails
   */
  public function getFindingDetails()
  {
    return $this->findingDetails;
  }
  /**
   * @param Google_Service_DLP_GooglePrivacyDlpV2ContentItem
   */
  public function setItem(Google_Service_DLP_GooglePrivacyDlpV2ContentItem $item)
  {
    $this->item = $item;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2ContentItem
   */
  public function getItem()
  {
    return $this->item;
  }
}
