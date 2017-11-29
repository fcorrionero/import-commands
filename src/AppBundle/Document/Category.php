<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Category
{
  /**
   * @MongoDB\Id
   */
  protected $id;

  /**
   * @MongoDB\ReferenceOne(targetDocument="Video", inversedBy="categories")
   */
  protected $video;

  /**
   * @MongoDB\Field(type="string")
   */
  protected $category;
}