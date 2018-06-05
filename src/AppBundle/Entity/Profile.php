<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Profile
 *
 * @ORM\Table(name="profile")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProfileRepository")
 */
class Profile
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
     * @ORM\Column(name="background_image", type="string", length=255)
     */
    private $background_img;

    /**
     * @var string
     *
     * @ORM\Column(name="headline", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $headline;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text")
     * @Assert\NotBlank()
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="hobbies", type="text")
     * @Assert\NotBlank()
     */
    private $hobbies;

    /**
     * @var string
     *
     * @ORM\Column(name="social_channels", type="text")
     */
    private $social_channels;

    /**
     * @var string
     *
     * @ORM\Column(name="clients", type="text")
     * @Assert\NotBlank()
     */
    private $clients;

    /**
     * @var string
     *
     * @ORM\Column(name="studios", type="text")
     * @Assert\NotBlank()
     */
    private $studios;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook", type="string")
     */
    private $facebook;

    /**
     * @var string
     *
     * @ORM\Column(name="instagram", type="string")
     */
    private $instagram;

    /**
     * @var string
     *
     * @ORM\Column(name="linkedin", type="string")
     */
    private $linkedin;

    /**
     * @var string
     *
     * @ORM\Column(name="tools", type="text")
     * @Assert\NotBlank()
     */
    private $tools;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string")
     * @Assert\NotBlank()
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string")
     */
    private $phone;


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
     * Set headline
     *
     * @param string $headline
     *
     * @return Profile
     */
    public function setHeadline($headline)
    {
        $this->headline = $headline;

        return $this;
    }

    /**
     * Get headline
     *
     * @return string
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return Profile
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return string
     */
    public function getHobbies()
    {
        return $this->hobbies;
    }

    /**
     * @param string $hobbies
     */
    public function setHobbies($hobbies)
    {
        $this->hobbies = $hobbies;
    }

    /**
     * @return string
     */
    public function getSocialChannels()
    {
        return $this->social_channels;
    }

    /**
     * @param string $social_channels
     */
    public function setSocialChannels($social_channels)
    {
        $this->social_channels = $social_channels;
    }

    /**
     * @return string
     */
    public function getClients()
    {
        return $this->clients;
    }

    /**
     * @param string $clients
     */
    public function setClients($clients)
    {
        $this->clients = $clients;
    }

    /**
     * @return string
     */
    public function getStudios()
    {
        return $this->studios;
    }

    /**
     * @param string $studios
     */
    public function setStudios($studios)
    {
        $this->studios = $studios;
    }

    /**
     * @return string
     */
    public function getTools()
    {
        return $this->tools;
    }

    /**
     * @param string $tools
     */
    public function setTools($tools)
    {
        $this->tools = $tools;
    }

    /**
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @param string $mail
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
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
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * @param string $facebook
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;
    }

    /**
     * @return string
     */
    public function getInstagram()
    {
        return $this->instagram;
    }

    /**
     * @param string $instagram
     */
    public function setInstagram($instagram)
    {
        $this->instagram = $instagram;
    }

    /**
     * @return string
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }

    /**
     * @param string $linkedin
     */
    public function setLinkedin($linkedin)
    {
        $this->linkedin = $linkedin;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
}

