<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Thumbs
{
  /**
   * @MongoDB\Id
   */
  protected $id;

  /**
   * @MongoDB\ReferenceOne(targetDocument="Video", inversedBy="thumbs")
   */
  protected $video;

  /**
   * @MongoDB\Field(type="string")
   */
  protected $size;

  /**
   * @MongoDB\Field(type="string")
   */
  protected $width;

  /**
   * @MongoDB\Field(type="string")
   */
  protected $height;

  /**
   * @MongoDB\Field(type="string")
   */
  protected $src;
}