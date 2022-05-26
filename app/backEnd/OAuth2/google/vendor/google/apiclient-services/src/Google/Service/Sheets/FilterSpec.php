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

class Google_Service_Sheets_FilterSpec extends Google_Model
{
  public $columnIndex;
  protected $dataSourceColumnReferenceType = 'Google_Service_Sheets_DataSourceColumnReference';
  protected $dataSourceColumnReferenceDataType = '';
  protected $filterCriteriaType = 'Google_Service_Sheets_FilterCriteria';
  protected $filterCriteriaDataType = '';

  public function setColumnIndex($columnIndex)
  {
    $this->columnIndex = $columnIndex;
  }
  public function getColumnIndex()
  {
    return $this->columnIndex;
  }
  /**
   * @param Google_Service_Sheets_DataSourceColumnReference
   */
  public function setDataSourceColumnReference(Google_Service_Sheets_DataSourceColumnReference $dataSourceColumnReference)
  {
    $this->dataSourceColumnReference = $dataSourceColumnReference;
  }
  /**
   * @return Google_Service_Sheets_DataSourceColumnReference
   */
  public function getDataSourceColumnReference()
  {
    return $this->dataSourceColumnReference;
  }
  /**
   * @param Google_Service_Sheets_FilterCriteria
   */
  public function setFilterCriteria(Google_Service_Sheets_FilterCriteria $filterCriteria)
  {
    $this->filterCriteria = $filterCriteria;
  }
  /**
   * @return Google_Service_Sheets_FilterCriteria
   */
  public function getFilterCriteria()
  {
    return $this->filterCriteria;
  }
}
