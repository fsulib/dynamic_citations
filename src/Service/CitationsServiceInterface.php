<?php

namespace Drupal\citations;

/**
 * Interface CitationsServiceInterface.
 */
interface CitationsServiceInterface {

  public function renderCitationMetadataFromNode($nid);
  public function renderFromMetadata($metadata, $style, $mode);
  public function renderCitationFromMetadata($metadata, $style);
  public function renderBibliographyFromMetadata($metadata, $style);

}
