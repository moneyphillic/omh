<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Project
 *
 * @ORM\Table(name="project")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProjectRepository")
 *
 */
class Project
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
     * @ORM\Column(name="name", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     * @Assert\NotBlank()
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="background_image", type="string")
     */
    private $background_img;

    /**
     * @var string
     *
     * @ORM\Column(name="portfolio_image", type="string")
     */
    private $portfolio_img;

    /**
     * @var string
     *
     * @ORM\Column(name="thumbnail_image", type="string")
     */
    private $thumbnail_img;

    /**
     * @var string
     *
     * @ORM\Column(name="client", type="string")
     * @Assert\NotBlank()
     */
    private $client;

    /**
     * @var string
     *
     * @ORM\Column(name="year", type="string")
     * @Assert\NotBlank()
     */
    private $year;

    /**
     * @var string
     *
     * @ORM\Column(name="types", type="string")
     * @Assert\NotBlank()
     */
    private $types;

    /**
     * @var string
     *
     * @ORM\Column(name="agency", type="string")
     */
    private $agency;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string")
     * @Assert\NotBlank()
     */
    private $category;


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
     * Set name
     *
     * @param string $name
     *
     * @return Project
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Project
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getBackgroundImg()
    {
        return $this->background_img;
    }

    /**
     * @param string $background_img
     */
    public function setBackgroundImg($background_img)
    {
        $this->background_img = $background_img;
    }

    /**
     * @return string
     */
    public function getPortfolioImg()
    {
        return $this->portfolio_img;
    }

    /**
     * @param string $portfolio_img
     */
    public function setPortfolioImg($portfolio_img)
    {
        $this->portfolio_img = $portfolio_img;
    }

    /**
     * @return string
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param string $client
     */
    public function setClient($client)
    {
        $this->client = $client;
    }

    /**
     * @return string
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * @param string $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @return string
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * @param string $types
     */
    public function setTypes($types)
    {
        $this->types = $types;
    }

    /**
     * @return string
     */
    public function getAgency()
    {
        return $this->agency;
    }

    /**
     * @param string $agency
     */
    public function setAgency($agency)
    {
        $this->agency = $agency;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return string
     */
    public function getThumbnailImg()
    {
        return $this->thumbnail_img;
    }

    /**
     * @param string $thumbnail_img
     */
    public function setThumbnailImg($thumbnail_img)
    {
        $this->thumbnail_img = $thumbnail_img;
    }

}

