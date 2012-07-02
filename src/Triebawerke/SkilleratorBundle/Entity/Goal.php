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
    * @ORM\OneToOne(targetEntity="UserSkills", mappedBy="goal")
    */       
    protected $userSkill;
    
    /**
     * @ORM\ManyToOne(targetEntity="Level", inversedBy="goals", cascade={"persist"})
     * @ORM\JoinColumn(name="level_id", referencedColumnName="id") 
     */    
    private $levels;

    /**
     * @ORM\ManyToOne(targetEntity="Certificate", inversedBy="goals", cascade={"persist"})
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
     * Set level_id
     *
     * @param integer $levelId
     */
    public function setLevel_Id($levelId)
    {
        $this->level_id = $levelId;
    }

    /**
     * Get level_id
     *
     * @return integer 
     */
    public function getLevel_Id()
    {
        return $this->level_id;
    }

    /**
     * Set certificate_id
     *
     * @param integer $certificateId
     */
    public function setCertificate_Id($certificateId)
    {
        $this->certificate_id = $certificateId;
    }

    /**
     * Get certificate_id
     *
     * @return integer 
     */
    public function getCertificate_Id()
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