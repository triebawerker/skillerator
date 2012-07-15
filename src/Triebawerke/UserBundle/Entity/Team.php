<?php
namespace Triebawerke\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Description of Team
 *
 * @author micha
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="team")
 */
class Team {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")  
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $nickname;
    
  /**
    * @ORM\ManyToMany(targetEntity="User", mappedBy="teams")
    */
    protected $users;
    
   /**
    * @ORM\ManyToOne(targetEntity="Triebawerke\UserBundle\Entity\Company", inversedBy="teams", cascade={"persist"})
    */
    protected $company;

    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nickname
     *
     * @param string $nickname
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;
    }

    /**
     * Get nickname
     *
     * @return string 
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Add users
     *
     * @param Triebawerke\UserBundle\Entity\User $users
     */
    public function addUser(\Triebawerke\UserBundle\Entity\User $users)
    {
        $this->users[] = $users;
    }

    /**
     * Get users
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set company
     *
     * @param Triebawerke\UserBundle\Entity\Company $company
     */
    public function setCompany(\Triebawerke\UserBundle\Entity\Company $company)
    {
        $this->company = $company;
    }

    /**
     * Get company
     *
     * @return Triebawerke\UserBundle\Entity\Company 
     */
    public function getCompany()
    {
        return $this->company;
    }
}