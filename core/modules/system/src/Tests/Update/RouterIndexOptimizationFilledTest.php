<?php
/**
 * @file
 * Contains \Drupal\system\Tests\Update\RouterIndexOptimizationFilledTest.
 */

namespace Drupal\system\Tests\Update;

/**
 * Runs RouterIndexOptimizationTest with a dump filled with content.
 *
 * @group Update
 */
class RouterIndexOptimizationFilledTest extends RouterIndexOptimizationTest {

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    $this->databaseDumpFiles[0] = __DIR__ . '/../../../tests/fixtures/update/drupal-8.filled.standard.php.gz';
    parent::setUp();
  }

}
