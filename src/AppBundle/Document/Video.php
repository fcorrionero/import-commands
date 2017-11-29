<?php

namespace AppBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Video
{
  /**
   * @MongoDB\Id
   */
  protected $id;

  /**
   * @MongoDB\Field(type="string")
   */
  protected $platform;

  /**
   * @MongoDB\Field(type="string")
   */
  protected $duration;

  /**
   * @MongoDB\Field(type="string")
   */
  protected $views;

  /**
   * @MongoDB\Field(type="string")
   */
  protected $videoId;

  /**
   * @MongoDB\Field(type="string")
   */
  protected $rating;

  /**
   * @MongoDB\Field(type="float")
   */
  protected $ratings;

  /**
   * @MongoDB\Field(type="string")
   */
  protected $title;

  /**
   * @MongoDB\Field(type="string")
   */
  protected $url;

  /**
   * @MongoDB\Field(type="string")
   */
  protected $defaultThumb;

  /**
   * @MongoDB\Field(type="string")
   */
  protected $thumb;

  /**
   * @MongoDB\Field(type="string")
   */
  protected $publishDate;

  /**
   * @MongoDB\Field(type="string")
   */
  protected $embedCode;

  /**
   * @MongoDB\Field(type="string")
   */
  protected $isActive;

  /**
   * @MongoDB\ReferenceMany(targetDocument="Thumbs", mappedBy="video")
   */
  protected $thumbs;

  /**
   * @MongoDB\ReferenceMany(targetDocument="Tags", mappedBy="video")
   */
  protected $tags;

  /**
   * @MongoDB\ReferenceMany(targetDocument="Category", mappedBy="video")
   */
  protected $categories;

  /**
   * @MongoDB\ReferenceMany(targetDocument="Pornstart", mappedBy="video")
   */
  protected $pornstarts;



}