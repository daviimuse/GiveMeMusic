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

class Google_Service_DataLabeling_GoogleCloudDatalabelingV1alpha1ImportDataOperationMetadata extends Google_Collection
{
  protected $collection_key = 'partialFailures';
  public $createTime;
  public $dataset;
  protected $partialFailuresType = 'Google_Service_DataLabeling_GoogleRpcStatus';
  protected $partialFailuresDataType = 'array';

  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  public function getCreateTime()
  {
    return $this->createTime;
  }
  public function setDataset($dataset)
  {
    $this->dataset = $dataset;
  }
  public function getDataset()
  {
    return $this->dataset;
  }
  /**
   * @param Google_Service_DataLabeling_GoogleRpcStatus[]
   */
  public function setPartialFailures($partialFailures)
  {
    $this->partialFailures = $partialFailures;
  }
  /**
   * @return Google_Service_DataLabeling_GoogleRpcStatus[]
   */
  public function getPartialFailures()
  {
    return $this->partialFailures;
  }
}
