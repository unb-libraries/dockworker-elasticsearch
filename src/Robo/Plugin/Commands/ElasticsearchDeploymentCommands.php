<?php

namespace Dockworker\Robo\Plugin\Commands;

use Dockworker\Robo\Plugin\Commands\DockworkerLocalCommands;

/**
 * Defines the commands used to interact with a local elasticsearch application.
 */
class ElasticsearchDeploymentCommands extends DockworkerLocalCommands {

  /**
   * Provides log checker with ignored log exception items for local Elasticsearch.
   *
   * @hook on-event dockworker-deployment-log-error-exceptions
   */
  public function getErrorLogExceptions() {
    return [
        'Failed to reserve shared memory' => 'Not a critical error',
    ];
  }

}
