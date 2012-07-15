<?php

namespace Triebawerke\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Triebawerke\UserBundle\Entity\Company
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Triebawerke\UserBundle\Entity\CompanyRepository")
 * 
 */
class Company
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=100)
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @var string $street
     *
     * @ORM\Column(name="street", type="string", length=100)
     */
    private $street;

    /**
     * @var string $city
     *
     * @ORM\Column(name="city", type="string", length=100)
     */
    private $city;

    /**
     * @var string $web
     *
     * @ORM\Column(name="web", type="string", length=100)
     */
    private $web;
    
    /**
     * @ORM\ManyToMany(targetEntity="Triebawerke\UserBundle\Entity\User", mappedBy="company")
     */
    protected $users;
    
    /**
     * @ORM\OneToMany(targetEntity="Triebawerke\UserBundle\Entity\Team", mappedBy="company")
     */
    protected $teams;
    


    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->teams = new ArrayCollection();
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * Set street
     *
     * @param string $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * Get street
     *
     * @return string 
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set city
     *
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set web
     *
     * @param string $web
     */
    public function setWeb($web)
    {
        $this->web = $web;
    }

    /**
     * Get web
     *
     * @return string 
     */
    public function getWeb()
    {
        return $this->web;
    }
    
    public function getUsers()
    {
        return $this->users;
    }
    
    /**
     * Get teams
     *
     * @return team object 
     */
    public function getTeams()
    {
        return $this->teams;
    }
     
    public function __toString()
    {
      return $this->name;
    }
    
    
}