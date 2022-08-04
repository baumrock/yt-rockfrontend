<?php namespace ProcessWire;
/** @var RockMigrations $rm */
$rm = $this->wire->modules->get('RockMigrations');
$rm->createField("demo1", "text");
$rm->addFieldToTemplate("demo1", "home");
$rm->setFieldData("demo1", [
  'label' => 'our foo label',
]);
