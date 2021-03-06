<?php

final class ArcanistBrowseURIRef
  extends ArcanistRef {

  private $uri;
  private $type;

  public function getRefIdentifier() {
    return pht('Browse URI "%s"', $this->getURI());
  }

  public function defineHardpoints() {
    return array();
  }

  public function setURI($uri) {
    $this->uri = $uri;
    return $this;
  }

  public function getURI() {
    return $this->uri;
  }

  public function setType($type) {
    $this->type = $type;
    return $this;
  }

  public function getType() {
    return $this->type;
  }

}
