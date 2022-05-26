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

class Google_Service_ContainerAnalysis_SourceContext extends Google_Model
{
  protected $cloudRepoType = 'Google_Service_ContainerAnalysis_CloudRepoSourceContext';
  protected $cloudRepoDataType = '';
  protected $gerritType = 'Google_Service_ContainerAnalysis_GerritSourceContext';
  protected $gerritDataType = '';
  protected $gitType = 'Google_Service_ContainerAnalysis_GitSourceContext';
  protected $gitDataType = '';
  public $labels;

  /**
   * @param Google_Service_ContainerAnalysis_CloudRepoSourceContext
   */
  public function setCloudRepo(Google_Service_ContainerAnalysis_CloudRepoSourceContext $cloudRepo)
  {
    $this->cloudRepo = $cloudRepo;
  }
  /**
   * @return Google_Service_ContainerAnalysis_CloudRepoSourceContext
   */
  public function getCloudRepo()
  {
    return $this->cloudRepo;
  }
  /**
   * @param Google_Service_ContainerAnalysis_GerritSourceContext
   */
  public function setGerrit(Google_Service_ContainerAnalysis_GerritSourceContext $gerrit)
  {
    $this->gerrit = $gerrit;
  }
  /**
   * @return Google_Service_ContainerAnalysis_GerritSourceContext
   */
  public function getGerrit()
  {
    return $this->gerrit;
  }
  /**
   * @param Google_Service_ContainerAnalysis_GitSourceContext
   */
  public function setGit(Google_Service_ContainerAnalysis_GitSourceContext $git)
  {
    $this->git = $git;
  }
  /**
   * @return Google_Service_ContainerAnalysis_GitSourceContext
   */
  public function getGit()
  {
    return $this->git;
  }
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  public function getLabels()
  {
    return $this->labels;
  }
}
