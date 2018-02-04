<?php

class PostTest extends \PHPUnit\Framework\TestCase
{

  /**
  * Test the creation of a post
  */
  public function test_post_creation()
  {
    $post = new Post("123", "123", "123" , "123", "123");
    $this->assertTrue(isset($post));
  }

  /**
  * Test the getMetadata accessor
  */
  public function test_getMetadata()
  {
    $post = new Post("123", "123", "123" , "123", "123");
    $this->assertTrue($post->getMetadata() == "123");
  }

/**
* Test the find post function
*/
  public function test_find()
  {
    $post = Post::find(ContentActions::VIEW_FOLDER_NEWS, Post::SORT_DATE_DESC);
    $this->assertTrue(isset($post));
  }

/**
* Test the load post function
*/
  public function test_load()
  {
    $post = Post::load("news/01-the-lbry-opens");
    $this->assertTrue(isset($post));
  }
}
