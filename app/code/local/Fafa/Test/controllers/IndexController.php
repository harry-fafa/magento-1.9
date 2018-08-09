<?php
class Fafa_Test_IndexController extends Mage_Core_Controller_Front_Action {
    public function indexAction() {
       $posts = Mage::getModel('test/test')->getCollection();
       foreach($posts as $blog_post){
           echo '<h3>'.$blog_post->getTitle().'</h3>';
           echo nl2br($blog_post->getPost());
           echo "test";
           echo "test";echo "test";
           
       }
    }
}
