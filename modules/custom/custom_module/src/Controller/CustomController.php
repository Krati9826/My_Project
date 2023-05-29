<?php
namespace Drupal\custom_module\Controller;


class CustomController{
    public function custom(){
        $num1 = 10;
        $num2 = 20;
        $sum = $num1 + $num2;
        $nids = \Drupal::entityQuery('node')->condition('type','page')->execute();
        dump($nids);die();
        $nodes =  \Drupal\node\Entity\Node::load($nids[9]);
         dump($nodes);die();
        // return[
        //     '#type' => 'markup',
        //     '#markup' => "<div class='test'>$sum</div>",
        //     '#attached' => [
        //         'library' => [
        //           'custom_module/custom-module-global-style',
        //         ],
        //     ],
        // ];
    }
}