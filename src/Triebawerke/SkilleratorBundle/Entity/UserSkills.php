<?php

namespace Triebawerke\SkilleratorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Triebawerke\SkilleratorBundle\Entity\UserSkills
 *
 * @ORM\Table()
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
     * @var integer user_id
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $user_id;

    /**
     * @var integer $skill_id
     *
     * @ORM\Column(name="skill_id", type="integer")
     */
    private $skill_id;

    /**
     * @var integer $level_id
     *
     * @ORM\Column(name="level_id", type="integer")
     */
    private $level_id;

    /**
     * @var integer $certificate_id
     *
     * @ORM\Column(name="certificate_id", type="integer")
     */
    private $certificate_id;

    /**
     * @var integer $goal_id
     *
     * @ORM\Column(name="goal_id", type="integer")
     */
    private $goal_id;
    
    private $skills;

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
     * Set int user_id, int skill_id, int level_id, int certificate_id, int goal_id
     *
     * @param integer $intUserId,IntSkillId,IntLevelId,IntCertificateId,IntGoalId
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;
    }

    /**
     * Get int user_id
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
     * Set level_id
     *
     * @param integer $levelId
     */
    public function setLevelId($levelId)
    {
        $this->level_id = $levelId;
    }

    /**
     * Get level_id
     *
     * @return integer 
     */
    public function getLevelId()
    {
        return $this->level_id;
    }
    
    public function getSkills()
    {
        return $this->skills;
    }
    
    public function setSkills($skill)
    {
        $this->skills[] = $skill;
    }

    /**
     * Set certificate_id
     *
     * @param integer $certificateId
     */
    public function setCertificateId($certificateId)
    {
        $this->certificate_id = $certificateId;
    }

    /**
     * Get certificate_id
     *
     * @return integer 
     */
    public function getCertificateId()
    {
        return $this->certificate_id;
    }

    /**
     * Set goal_id
     *
     * @param integer $goalId
     */
    public function setGoalId($goalId)
    {
        $this->goal_id = $goalId;
    }

    /**
     * Get goal_id
     *
     * @return integer 
     */
    public function getGoalId()
    {
        return $this->goal_id;
    }
}