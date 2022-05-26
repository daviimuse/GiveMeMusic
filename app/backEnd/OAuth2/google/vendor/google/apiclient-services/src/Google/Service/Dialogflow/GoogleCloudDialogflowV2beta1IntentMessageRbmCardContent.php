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

class Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageRbmCardContent extends Google_Collection
{
  protected $collection_key = 'suggestions';
  public $description;
  protected $mediaType = 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageRbmCardContentRbmMedia';
  protected $mediaDataType = '';
  protected $suggestionsType = 'Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestion';
  protected $suggestionsDataType = 'array';
  public $title;

  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageRbmCardContentRbmMedia
   */
  public function setMedia(Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageRbmCardContentRbmMedia $media)
  {
    $this->media = $media;
  }
  /**
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageRbmCardContentRbmMedia
   */
  public function getMedia()
  {
    return $this->media;
  }
  /**
   * @param Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestion[]
   */
  public function setSuggestions($suggestions)
  {
    $this->suggestions = $suggestions;
  }
  /**
   * @return Google_Service_Dialogflow_GoogleCloudDialogflowV2beta1IntentMessageRbmSuggestion[]
   */
  public function getSuggestions()
  {
    return $this->suggestions;
  }
  public function setTitle($title)
  {
    $this->title = $title;
  }
  public function getTitle()
  {
    return $this->title;
  }
}
