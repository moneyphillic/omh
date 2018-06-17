<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Design
 *
 * @ORM\Table(name="design")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DesignRepository")
 */
class Design
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
     * @ORM\Column(name="logo", type="string", length=255)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="relicon", type="string", length=255)
     */
    private $relicon;


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
     * Set logo
     *
     * @param string $logo
     *
     * @return Design
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set relicon
     *
     * @param string $relicon
     *
     * @return Design
     */
    public function setRelicon($relicon)
    {
        $this->relicon = $relicon;

        return $this;
    }

    /**
     * Get relicon
     *
     * @return string
     */
    public function getRelicon()
    {
        return $this->relicon;
    }
}

