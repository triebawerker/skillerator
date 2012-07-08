<?php
/**
 * Description of Level
 *
 * @author micha
 */
namespace Triebawerke\SkilleratorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="certificate") 
 */
class Certificate {
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
    
   /**
    * @ORM\OneToMany(targetEntity="UserSkills", mappedBy="certificates")
    */       
    protected $userSkill;
    
   /**
    * @ORM\OneToMany(targetEntity="Goal", mappedBy="certificates")
    */       
    protected $goals;
  
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
    public function __construct()
    {
        $this->userSkill = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add userSkill
     *
     * @param Triebawerke\SkilleratorBundle\Entity\UserSkills $userSkill
     */
    public function addUserSkills(\Triebawerke\SkilleratorBundle\Entity\UserSkills $userSkill)
    {
        $this->userSkill[] = $userSkill;
    }

    /**
     * Get userSkill
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getUserSkill()
    {
        return $this->userSkill;
    }
}