<?php
 namespace Drupal\customrestapi\Plugin\rest\resource;

use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;
use Psr\Log\LoggerInterface;
use Drupal\Core\Session\AccountProxyInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
/**
 * Provides a resource to get view modes by entity and bundle.
 * @RestResource(
 *   id = "project_rest_api",
 *   label = @Translation("Project Rest APIs"),
 *   uri_paths = {
 *     "canonical" = "/rest/message/api",
 *   }
 * )
 */
class customrestapiresource extends ResourceBase {
  /**
   * Responds to entity GET requests.
   * @return \Drupal\rest\ResourceResponse
   */
    public function get() {
      $response = ['message' => 'Hello, Krati Arya'];
      $nids = \Drupal::entityQuery('node')->condition('type','page')->execute();
      $nodes =  \Drupal\node\Entity\Node::load($nids[8]);
      $title = [];
      $title[0] = $nodes->title->value;
      $title[1] = $nodes->field_title->value;
      return new ResourceResponse($nodes);
    }
      
  }
    
  

  