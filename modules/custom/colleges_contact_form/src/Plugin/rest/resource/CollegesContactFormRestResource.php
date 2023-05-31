<?php
 namespace Drupal\colleges_contact_form\Plugin\rest\resource;

use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;
use Psr\Log\LoggerInterface;
use Drupal\Core\Session\AccountProxyInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
/**
 * Provides a resource to get view modes by entity and bundle.
 * @RestResource(
 *   id = "colleges_contact_form_",
 *   label = @Translation("Colleges Contact Form Content Type"),
 *   uri_paths = {
 *     "canonical" = "/colleges-contact-form",
 *   }
 * )
 */
class CollegesContactFormRestResource extends ResourceBase {
  /**
   * Responds to entity GET requests.
   * @return \Drupal\rest\ResourceResponse
   */
    public function get() {
    //   $response = ['message' => 'Hello, this is a rest service'];
      $nids = \Drupal::entityQuery('node')->condition('type','colleges_contact_form_')->execute();
      $nodes =  \Drupal\node\Entity\Node::load($nids[36]);
    //   $title = [];
    //   $title[0] = $nodes->title->value;
    //   $title[1] = $nodes->field_title->value;
      return new ResourceResponse($nodes);
    }
}
    
  