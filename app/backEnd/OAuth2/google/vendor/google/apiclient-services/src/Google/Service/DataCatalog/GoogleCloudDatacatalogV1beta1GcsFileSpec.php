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

class Google_Service_DataCatalog_GoogleCloudDatacatalogV1beta1GcsFileSpec extends Google_Model
{
  public $filePath;
  protected $gcsTimestampsType = 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1beta1SystemTimestamps';
  protected $gcsTimestampsDataType = '';
  public $sizeBytes;

  public function setFilePath($filePath)
  {
    $this->filePath = $filePath;
  }
  public function getFilePath()
  {
    return $this->filePath;
  }
  /**
   * @param Google_Service_DataCatalog_GoogleCloudDatacatalogV1beta1SystemTimestamps
   */
  public function setGcsTimestamps(Google_Service_DataCatalog_GoogleCloudDatacatalogV1beta1SystemTimestamps $gcsTimestamps)
  {
    $this->gcsTimestamps = $gcsTimestamps;
  }
  /**
   * @return Google_Service_DataCatalog_GoogleCloudDatacatalogV1beta1SystemTimestamps
   */
  public function getGcsTimestamps()
  {
    return $this->gcsTimestamps;
  }
  public function setSizeBytes($sizeBytes)
  {
    $this->sizeBytes = $sizeBytes;
  }
  public function getSizeBytes()
  {
    return $this->sizeBytes;
  }
}
