<?php

namespace Triebawerke\SkilleratorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Triebawerke\SkilleratorBundle\Entity\UserSkills
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
     * @var string $level_id
     *
     * @ORM\Column(name="level_id", type="integer")
     */
    private $level_id;
    
    /**
     * @ORM\ManyToOne(targetEntity="Skill", inversedBy="userSkill", cascade={"persist"})
     * @ORM\JoinColumn(name="skill_id", referencedColumnName="id") 
     */    
    private $skills;
    
    /**
     * @ORM\ManyToOne(targetEntity="Triebawerke\UserBundle\Entity\User", inversedBy="userSkill", cascade={"persist"})
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $users;
    
    /**
     * @ORM\ManyToOne(targetEntity="Level", inversedBy="userSkill", cascade={"persist"})
     * @ORM\JoinColumn(name="level_id", referencedColumnName="id") 
     */    
    private $levels;
    
    /**
     * @ORM\ManyToOne(targetEntity="Certificate", inversedBy="userSkill", cascade={"persist"})
     * @ORM\JoinColumn(name="certificate_id", referencedColumnName="id") 
     */    
    private $certificates;


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
     * Set users
     *
     * @param \Triebawerke\UserBundle\Entity\User $users
     */
    public function setUsers(\Triebawerke\UserBundle\Entity\User $users)
    {
        $this->users = $users;
    }

    /**
     * Get $users
     *
     * @return \Triebawerke\UserBundle\Entity\User 
     */
    public function getUsers()
    {
        return $this->users;
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
     * Set level
     *
     * @param \Triebawerke\SkilleratorBundle\Entity\Level $level
     */
    public function setLevels(\Triebawerke\SkilleratorBundle\Entity\Level $level)
    {
        $this->levels = $level;
    }

    /**
     * Get level
     *
     * @return \Triebawerke\SkilleratorBundle\Entity\Level 
     */
    public function getLevels()
    {
        return $this->levels;
    }
    
    /**
     * Get certificates
     *
     * @return Triebawerke\SkilleratorBundle\Entity\Certificate
     */
    public function getCertificates()
    {
        return $this->certificates;
    }

    /**
     * Set certificates
     *
     * @param Triebawerke\SkilleratorBundle\Entity\Certificate $certificate
     */
    public function setCertificates(\Triebawerke\SkilleratorBundle\Entity\Certificate $certificates)
    {
        $this->certificates = $certificates;
    }

}