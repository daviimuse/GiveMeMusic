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

class Google_Service_BigtableAdmin_Frame extends Google_Model
{
  public $targetName;
  public $workflowGuid;
  public $zoneId;

  public function setTargetName($targetName)
  {
    $this->targetName = $targetName;
  }
  public function getTargetName()
  {
    return $this->targetName;
  }
  public function setWorkflowGuid($workflowGuid)
  {
    $this->workflowGuid = $workflowGuid;
  }
  public function getWorkflowGuid()
  {
    return $this->workflowGuid;
  }
  public function setZoneId($zoneId)
  {
    $this->zoneId = $zoneId;
  }
  public function getZoneId()
  {
    return $this->zoneId;
  }
}
