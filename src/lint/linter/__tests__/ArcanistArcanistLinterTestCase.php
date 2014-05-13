<?php

abstract class ArcanistArcanistLinterTestCase extends ArcanistLinterTestCase {

  protected function getLink($method) {
    // This could be converted to trait from ArcanistTestCase.
    $arcanist_project = 'PHID-APRJ-703e0b140530f17ede30';
    return
      'https://secure.phabricator.com/diffusion/symbol/'.$method.
      '/?lang=php&projects='.$arcanist_project.
      '&jump=true&context='.get_class($this);
  }

}
