<?php

namespace Triebawerke\SkilleratorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Triebawerke\SkilleratorBundle\Entity\Goal
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Triebawerke\SkilleratorBundle\Entity\GoalRepository")
 * @ORM\ManyToOne(targetEntity="UserSkills")
 */
class Goal
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
     * @var text $comment
     *
     * @ORM\Column(name="comment", type="text")
     */
    private $comment;


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
     * Set comment
     *
     * @param text $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * Get comment
     *
     * @return text 
     */
    public function getComment()
    {
        return $this->comment;
    }
}