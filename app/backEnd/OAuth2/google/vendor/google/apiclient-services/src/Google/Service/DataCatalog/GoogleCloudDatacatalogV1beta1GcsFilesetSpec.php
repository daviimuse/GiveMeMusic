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

class Google_Service_DataCatalog_GoogleCloudDatacatalogV1beta1GcsFilesetSpec extends Google_Collection
{
  protected $collection_key = 'sampleGcsFileSpecs';
  public $filePatterns;
  protected $sampleGcsFileSpecsType = 'Google_Service_DataCatalog_GoogleCloudDatacatalogV1beta1GcsFileSpec';
  protected $sampleGcsFileSpecsDataType = 'array';

  public function setFilePatterns($filePatterns)
  {
    $this->filePatterns = $filePatterns;
  }
  public function getFilePatterns()
  {
    return $this->filePatterns;
  }
  /**
   * @param Google_Service_DataCatalog_GoogleCloudDatacatalogV1beta1GcsFileSpec[]
   */
  public function setSampleGcsFileSpecs($sampleGcsFileSpecs)
  {
    $this->sampleGcsFileSpecs = $sampleGcsFileSpecs;
  }
  /**
   * @return Google_Service_DataCatalog_GoogleCloudDatacatalogV1beta1GcsFileSpec[]
   */
  public function getSampleGcsFileSpecs()
  {
    return $this->sampleGcsFileSpecs;
  }
}
