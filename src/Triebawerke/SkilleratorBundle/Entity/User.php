<?php

namespace Triebawerke\SkilleratorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Triebawerke\SkilleratorBundle\Entity\User
 *
 * @ORM\Entity
 * @ORM\Table(name="user")
 *
 */
class User implements UserInterface, \Serializable
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    protected $name;

    /**
     * @var string $lastname
     *
     * @ORM\Column(name="lastname", type="string", length=50)
     */
    protected $lastname;
    
    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=50)
     */
    protected $password;   
    
    /**
     * @ORM\Column(type="string", length=32)
     */
    protected $salt;
    
    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    protected $isActive;
    
    
    protected $role = array('ROLE_USER');


    
    /**
     * @var int $company_id
     *
     * @ORM\Column(name="company_id", type="integer")
     * 
     */
    protected $company_id;
    
    /**
    * @var object $company
    * @ORM\ManyToOne(targetEntity="Company", inversedBy="users", cascade={"persist"})
    * @ORM\JoinColumn(name="company_id", referencedColumnName="id")    
    */
    protected $company;    
    
   /**
    * @ORM\OneToMany(targetEntity="UserSkills", mappedBy="users")
    */    
    public function __construct()
    {
      $this->usersSkills = new ArrayCollection();
      $this->isActive = true;
      $this->salt = md5(time());
    }
    
    public function getCompany()
    {
      return $this->company;
    }
    
    public function setCompany(Company $company = null)
    {
      $this->company = $company;
    }
    
     public function getCompany_Id()
    {
      return $this->company_id;
    }
    
    public function setCompany_Id(Company $company_id = null)
    {
      $this->company_id = $company_id;
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
     * Set lastname
     *
     * @param string $lastname
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }
    
        /**
     * Set lastname
     *
     * @param string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }
    
    public function __toString()
    {
        return $this->lastname;
    }

    /**
     * Set company_id
     *
     * @param integer $companyId
     */
    public function setCompanyId($companyId)
    {
        $this->company_id = $companyId;
    }

    /**
     * Get company_id
     *
     * @return integer 
     */
    public function getCompanyId()
    {
        return $this->company_id;
    }

    /**
     * Add usersSkills
     *
     * @param Triebawerke\SkilleratorBundle\Entity\UserSkills $usersSkills
     */
    public function addUserSkills(\Triebawerke\SkilleratorBundle\Entity\UserSkills $usersSkills)
    {
        $this->usersSkills[] = $usersSkills;
    }

    /**
     * Get usersSkills
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getUsersSkills()
    {
        return $this->usersSkills;
    }

    /**
     * @inheritDoc
     */
    public function equals(UserInterface $user)
    {
        return $this->name === $user->name();
    }

  public function eraseCredentials() {
    // not implemented yet
    return null;
  }

  public function getRoles() {
    // not implemented yet
    return $this->role;
  }

    /**
     * @inheritDoc
     */
    public function getSalt()
    {
        return $this->salt;
    }

  public function getUsername() {
    return $this->lastname;
  }

  public function serialize() {
  }

  public function unserialize($serialized) {
    unserialize($serialized);
  }
}