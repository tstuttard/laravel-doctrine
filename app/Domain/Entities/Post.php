<?php namespace App\Domain\Entities;

use Doctrine\ORM\Mapping as ORM;
use Atrauzzi\LaravelDoctrine\Util\Time;

/**
 * @ORM\Entity
 * @ORM\Table(name="Post")
 * @ORM\HasLifecycleCallbacks()
 */
class Post
{
    use Time;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $title;
    /**
     * @ORM\Column(type="text")
     */
    private $body;

    public function __construct($input)
    {
        $this->setTitle($input['title']);
        $this->setBody($input['body']);
    }
    public function getId()
    {
        return $this->id;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title=$title;
    }
    public function setBody($body)
    {
        $this->body=$body;
    }
    public function getBody()
    {
        return $this->body;
    }
}