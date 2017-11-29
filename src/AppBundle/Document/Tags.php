<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Tags
{
  /**
   * @MongoDB\Id
   */
  protected $id;

  /**
   * @MongoDB\ReferenceOne(targetDocument="Video", inversedBy="tags")
   */
  protected $video;

  /**
   * @MongoDB\Field(type="string")
   */
  protected $tagName;
}