<?php

namespace Triebawerke\SkilleratorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Triebawerke\SkilleratorBundle\Entity\User
 *
 * @ORM\Entity
 * @ORM\Table(name="users_skills")
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
    private $users_id;

    /**
     * @var string $skill_id
     *
     * @ORM\Column(name="skill_id", type="integer", length=50)
     */
    private $skills_id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Skill", inversedBy="usersSkills", cascade={"persist"})
     * @var type 
     */    
    private $skills;
    
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="usersSkills", cascade={"persist"})
     * @var type 
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
    
    public function getUsers_id()
    {
      return $this->user_id;
    }
    
    public function setUsers_id($user_id)
    {
      $this->user_id = $user_id;
    }
    
     public function getSkills_Id()
    {
      return $this->skill_id;
    }
    
    public function setSkills_Id($skill_id)
    {
      $this->skill_id = skill_id;
    }


}