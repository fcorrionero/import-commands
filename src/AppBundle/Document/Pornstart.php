<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Pornstart
{
  /**
   * @MongoDB\Id
   */
  protected $id;

  /**
   * @MongoDB\ReferenceOne(targetDocument="Video", inversedBy="pornstarts")
   */
  protected $video;

  /**
   * @MongoDB\Field(type="string")
   */
  protected $startName;

  /**
   * @MongoDB\Field(type="string")
   */
  protected $startThumb;

  /**
   * @MongoDB\Field(type="string")
   */
  protected $startUrl;
}