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

class Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1ExportDataRequest extends Google_Model
{
  public $annotatedDataset;
  public $filter;
  protected $outputConfigType = 'Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1OutputConfig';
  protected $outputConfigDataType = '';
  public $userEmailAddress;

  public function setAnnotatedDataset($annotatedDataset)
  {
    $this->annotatedDataset = $annotatedDataset;
  }
  public function getAnnotatedDataset()
  {
    return $this->annotatedDataset;
  }
  public function setFilter($filter)
  {
    $this->filter = $filter;
  }
  public function getFilter()
  {
    return $this->filter;
  }
  /**
   * @param Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1OutputConfig
   */
  public function setOutputConfig(Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1OutputConfig $outputConfig)
  {
    $this->outputConfig = $outputConfig;
  }
  /**
   * @return Google_Service_DataLabeling_GoogleCloudDatalabelingV1beta1OutputConfig
   */
  public function getOutputConfig()
  {
    return $this->outputConfig;
  }
  public function setUserEmailAddress($userEmailAddress)
  {
    $this->userEmailAddress = $userEmailAddress;
  }
  public function getUserEmailAddress()
  {
    return $this->userEmailAddress;
  }
}
