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

class Google_Service_SecurityCommandCenter_GoogleCloudSecuritycenterV1Resource extends Google_Collection
{
  protected $collection_key = 'folders';
  protected $foldersType = 'Google_Service_SecurityCommandCenter_Folder';
  protected $foldersDataType = 'array';
  public $name;
  public $parent;
  public $parentDisplayName;
  public $project;
  public $projectDisplayName;

  /**
   * @param Google_Service_SecurityCommandCenter_Folder[]
   */
  public function setFolders($folders)
  {
    $this->folders = $folders;
  }
  /**
   * @return Google_Service_SecurityCommandCenter_Folder[]
   */
  public function getFolders()
  {
    return $this->folders;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setParent($parent)
  {
    $this->parent = $parent;
  }
  public function getParent()
  {
    return $this->parent;
  }
  public function setParentDisplayName($parentDisplayName)
  {
    $this->parentDisplayName = $parentDisplayName;
  }
  public function getParentDisplayName()
  {
    return $this->parentDisplayName;
  }
  public function setProject($project)
  {
    $this->project = $project;
  }
  public function getProject()
  {
    return $this->project;
  }
  public function setProjectDisplayName($projectDisplayName)
  {
    $this->projectDisplayName = $projectDisplayName;
  }
  public function getProjectDisplayName()
  {
    return $this->projectDisplayName;
  }
}
