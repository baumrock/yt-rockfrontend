<?php namespace ProcessWire;
class BasicPagePage extends Page {

  public function doSomething() {
    return "I did something!";
  }

  public function galleryHeader() {
    return $this->_("This is the gallery header for page #$this");
  }

}
