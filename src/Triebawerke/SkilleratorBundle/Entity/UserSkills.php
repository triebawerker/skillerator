<?php

namespace Triebawerke\SkilleratorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Triebawerke\SkilleratorBundle\Entity\User
 *
 * @ORM\Entity
 * @ORM\Table(name="user_skill")
 *
 */
class UserSkills
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
     * @var integer $user_id
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $user_id;

    /**
     * @var string $skill_id
     *
     * @ORM\Column(name="skill_id", type="integer")
     */
    private $skill_id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Skill", inversedBy="userSkill", cascade={"persist"})
     * @ORM\JoinColumn(name="skill_id", referencedColumnName="id") 
     */    
    private $skills;
    
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="userSkill", cascade={"persist"})
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $users;
    
    public function getSkills()
    {
        return $this->skills;
    }
    
    public function setSkills($skills)
    {
        $this->skills = $skills;
    }
    
    public function getUsers()
    {
        return $this->users;
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
    
    public function getUserId()
    {
      return $this->user_id;
    }
    
    public function setUserId($user_id)
    {
      $this->user_id = $user_id;
    }
    
     public function getSkillId()
    {
      return $this->skill_id;
    }
    
    public function setSkillId($skill_id)
    {
      $this->skill_id = skill_id;
    }


}