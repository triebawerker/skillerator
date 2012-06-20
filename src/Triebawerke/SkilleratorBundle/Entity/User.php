<?php

namespace Triebawerke\SkilleratorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Triebawerke\SkilleratorBundle\Entity\User
 *
 * @ORM\Entity
 * @ORM\Table(name="user")
 *
 */
class User
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
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var string $lastname
     *
     * @ORM\Column(name="lastname", type="string", length=50)
     */
    private $lastname;
    
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
    private $usersSkills;    
    
    public function __construct()
    {
      $this->usersSkills = new ArrayCollection();
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
}