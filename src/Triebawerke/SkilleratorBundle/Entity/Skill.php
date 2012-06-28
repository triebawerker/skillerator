<?php
/**
 * Description of Skill
 *
 * @author micha
 */
namespace Triebawerke\SkilleratorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @ORM\Entity
 * @ORM\Table(name="skill")
 */
class Skill {
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
     * @ORM\Column(type="text") 
     */
    protected $description;
    
    protected $users;
    
   /**
    * @ORM\OneToMany(targetEntity="UserSkills", mappedBy="skills")
    */       
    protected $usersSkills;
    
//    public function __construct()
//    {
//        $this->usersSkills = new \Doctrine\Common\Collections\ArrayCollection();
//    }
  
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
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    public function __toString()
    {
      return $this->name;
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