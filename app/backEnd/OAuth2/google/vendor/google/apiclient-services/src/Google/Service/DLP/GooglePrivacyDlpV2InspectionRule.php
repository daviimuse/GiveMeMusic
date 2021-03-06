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

class Google_Service_DLP_GooglePrivacyDlpV2InspectionRule extends Google_Model
{
  protected $exclusionRuleType = 'Google_Service_DLP_GooglePrivacyDlpV2ExclusionRule';
  protected $exclusionRuleDataType = '';
  protected $hotwordRuleType = 'Google_Service_DLP_GooglePrivacyDlpV2HotwordRule';
  protected $hotwordRuleDataType = '';

  /**
   * @param Google_Service_DLP_GooglePrivacyDlpV2ExclusionRule
   */
  public function setExclusionRule(Google_Service_DLP_GooglePrivacyDlpV2ExclusionRule $exclusionRule)
  {
    $this->exclusionRule = $exclusionRule;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2ExclusionRule
   */
  public function getExclusionRule()
  {
    return $this->exclusionRule;
  }
  /**
   * @param Google_Service_DLP_GooglePrivacyDlpV2HotwordRule
   */
  public function setHotwordRule(Google_Service_DLP_GooglePrivacyDlpV2HotwordRule $hotwordRule)
  {
    $this->hotwordRule = $hotwordRule;
  }
  /**
   * @return Google_Service_DLP_GooglePrivacyDlpV2HotwordRule
   */
  public function getHotwordRule()
  {
    return $this->hotwordRule;
  }
}
