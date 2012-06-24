<?php

namespace Triebawerke\SkilleratorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * Triebawerke\SkilleratorBundle\Entity\User
 *
 * @ORM\Entity
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="Triebawerke\SkilleratorBundle\Entity\UserRepository")
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


    public function eraseCredentials() {
      return null;
    }

    public function getRoles() {
      return $this->role;
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

}