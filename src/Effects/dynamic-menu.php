<?php
  $menuproperties = array(
  );
  
menu-properties {
  background-color:
}

interface Element {
  function name() {
    // return element name */
  }
}
class Title extends Element {
  const $element_name = 'title';
  function __construct() {
  }
}

class Anchor extends Element {
  const $element_name = "a";
  
  protected $URL = "";
  protected label = "";
  protected portnum = "";
  protected protocol = "";
  
  function ___constructor($text, $url) {
      parent->__constructor('a',array('href=',$url));
      
  }
}
class Menu {
}