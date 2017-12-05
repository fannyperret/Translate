<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Translate
 *
 * @ORM\Table(name="translate")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TranslateRepository")
 */
class Translate
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="mum", type="string", length=255)
     */
    private $mum;

    /**
     * @var string
     *
     * @ORM\Column(name="dad", type="string", length=255)
     */
    private $dad;

    /**
     * @var string
     *
     * @ORM\Column(name="brother", type="string", length=255)
     */
    private $brother;

    /**
     * @var string
     *
     * @ORM\Column(name="sister", type="string", length=255)
     */
    private $sister;

    /**
     * @var string
     *
     * @ORM\Column(name="dog", type="string", length=255)
     */
    private $dog;

    /**
     * @var string
     *
     * @ORM\Column(name="cat", type="string", length=255)
     */
    private $cat;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set mum
     *
     * @param string $mum
     *
     * @return Translate
     */
    public function setMum($mum)
    {
        $this->mum = $mum;

        return $this;
    }

    /**
     * Get mum
     *
     * @return string
     */
    public function getMum()
    {
        return $this->mum;
    }

    /**
     * Set dad
     *
     * @param string $dad
     *
     * @return Translate
     */
    public function setDad($dad)
    {
        $this->dad = $dad;

        return $this;
    }

    /**
     * Get dad
     *
     * @return string
     */
    public function getDad()
    {
        return $this->dad;
    }

    /**
     * Set brother
     *
     * @param string $brother
     *
     * @return Translate
     */
    public function setBrother($brother)
    {
        $this->brother = $brother;

        return $this;
    }

    /**
     * Get brother
     *
     * @return string
     */
    public function getBrother()
    {
        return $this->brother;
    }

    /**
     * Set sister
     *
     * @param string $sister
     *
     * @return Translate
     */
    public function setSister($sister)
    {
        $this->sister = $sister;

        return $this;
    }

    /**
     * Get sister
     *
     * @return string
     */
    public function getSister()
    {
        return $this->sister;
    }

    /**
     * Set dog
     *
     * @param string $dog
     *
     * @return Translate
     */
    public function setDog($dog)
    {
        $this->dog = $dog;

        return $this;
    }

    /**
     * Get dog
     *
     * @return string
     */
    public function getDog()
    {
        return $this->dog;
    }

    /**
     * Set cat
     *
     * @param string $cat
     *
     * @return Translate
     */
    public function setCat($cat)
    {
        $this->cat = $cat;

        return $this;
    }

    /**
     * Get cat
     *
     * @return string
     */
    public function getCat()
    {
        return $this->cat;
    }
}

