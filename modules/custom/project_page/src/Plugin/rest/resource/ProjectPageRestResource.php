<?php
 namespace Drupal\project_page\Plugin\rest\resource;

use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;
use Psr\Log\LoggerInterface;
use Drupal\Core\Session\AccountProxyInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
/**
 * Provides a resource to get view modes by entity and bundle.
 * @RestResource(
 *   id = "project_page",
 *   label = @Translation("Project Page Content Type"),
 *   uri_paths = {
 *     "canonical" = "/project/page",
 *   }
 * )
 */
class ProjectPageRestResource extends ResourceBase {
  /**
   * Responds to entity GET requests.
   * @return \Drupal\rest\ResourceResponse
   */
    public function get() {
    //   $response = ['message' => 'Hello, this is a rest service'];
      $nids = \Drupal::entityQuery('node')->condition('type','project_page')->execute();
      $nodes =  \Drupal\node\Entity\Node::load($nids[14]);
    //   $title = [];
    //   $title[0] = $nodes->title->value;
    //   $title[1] = $nodes->field_title->value;
      return new ResourceResponse($nodes);
    }
}
    
  