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
 * @ORM\Entity(repositoryClass="Triebawerke\SkilleratorBundle\Entity\UserSkillsRepository")
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
     * Set user_id
     *
     * @param integer $userId
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;
    }

    /**
     * Get user_id
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set skill_id
     *
     * @param integer $skillId
     */
    public function setSkillId($skillId)
    {
        $this->skill_id = $skillId;
    }

    /**
     * Get skill_id
     *
     * @return integer 
     */
    public function getSkillId()
    {
        return $this->skill_id;
    }

    /**
     * Set skills
     *
     * @param Triebawerke\SkilleratorBundle\Entity\Skill $skills
     */
    public function setSkills(\Triebawerke\SkilleratorBundle\Entity\Skill $skills)
    {
        $this->skills = $skills;
    }

    /**
     * Get skills
     *
     * @return Triebawerke\SkilleratorBundle\Entity\Skill 
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * Set users
     *
     * @param Triebawerke\SkilleratorBundle\Entity\User $users
     */
    public function setUsers(\Triebawerke\SkilleratorBundle\Entity\User $users)
    {
        $this->users = $users;
    }

    /**
     * Get users
     *
     * @return Triebawerke\SkilleratorBundle\Entity\User 
     */
    public function getUsers()
    {
        return $this->users;
    }
}