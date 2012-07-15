<?php

namespace Triebawerke\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * Triebawerke\UserBundle\Entity\User
 *
 * @ORM\Entity
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="Triebawerke\UserBundle\Entity\UserRepository")
 */
class User implements AdvancedUserInterface, \Serializable
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
     * @var string $username
     *
     * @ORM\Column(name="username", type="string", length=50)
     */
    protected $username;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string", length=50)
     */
    protected $email;
    
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
    
    /**
     * @Assert\NotBlank()
     * @Assert\True()
     */
    protected $termsAccepted;
    
    /**
    * @var object $company
    * @ORM\ManyToMany(targetEntity="Triebawerke\UserBundle\Entity\Company", inversedBy="users")    
    */
    protected $company;    
    
    /**
     * @var Array Collection $groups
     * @ORM\ManyToMany(targetEntity="Groups", inversedBy="users")
     */
    protected $groups;
    
    /**
     * @var Array Collection $teams
     * @ORM\ManyToMany(targetEntity="Team", inversedBy="users")
     */
    protected $teams;
    
   /**
    * @ORM\OneToMany(targetEntity="Triebawerke\SkilleratorBundle\Entity\UserSkills", mappedBy="users")
    */  
    protected $userSkills;
       
    public function __construct()
    {
      $this->usersSkills = new ArrayCollection();
      $this->groups = new ArrayCollection();
      $this->teams = new ArrayCollection();
      $this->company = new ArrayCollection();
      $this->isActive = true;
      $this->salt = md5(time());
    }
    
    public function getCompany()
    {
      return $this->company;
    }
    
    public function addCompany(Company $company = null)
    {
      $this->company[] = $company;
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
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get password
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
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    public function __toString()
    {
        return $this->username;
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


    public function eraseCredentials() {
      return null;
    }

    public function getRoles() {
      return $this->groups->toArray();
    }

    /**
    * @inheritDoc
    */
    public function getSalt()
    {
        return $this->salt;
    }

    public function isAccountNonExpired() {
      return true;
    }

    public function isAccountNonLocked() {
      return true;
    }

    public function isCredentialsNonExpired() {
      return true;
    }
    public function isEnabled() {
      return $this->isActive;
    }

    public function equals(UserInterface $user) {
      return $user->username === $this->username;
    }
    
    public function serialize() {
      return serialize(array($this->id, $this->username, $this->password));
    }

    public function unserialize($serialized) {
      return list($this->id, $this->username, $this->password) = unserialize($serialized);
    }


    /**
     * Set salt
     *
     * @param string $salt
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Add groups
     *
     * @param Triebawerke\UserBundle\Entity\Groups $groups
     */
    public function addGroups(\Triebawerke\UserBundle\Entity\Groups $groups)
    {
        $this->groups[] = $groups;
    }

    /**
     * Get groups
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getGroups()
    {
        return $this->groups;
    }
    
    /**
     * Add groups
     *
     * @param Triebawerke\UserBundle\Entity\Groups $groups
     */
    public function addTeam(\Triebawerke\UserBundle\Entity\Team $team)
    {
        $this->groups[] = $team;
    }

    /**
     * Get groups
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getTeam()
    {
        return $this->team;
    }
    
    public function getTermsAccepted()
    {
        return $this->termsAccepted;
    }

    public function setTermsAccepted($termsAccepted)
    {
        $this->termsAccepted = (boolean)$termsAccepted;
    }
}