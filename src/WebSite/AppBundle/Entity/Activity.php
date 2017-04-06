<?php

namespace WebSite\AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * ListApp
 *
 * @ORM\Table(name="activity")
 * @ORM\Entity(repositoryClass="WebSite\AppBundle\Repository\ActivityRepository")
 */
class Activity {
    
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     * @Assert\NotBlank()
     */
    private $name;
    
            /**
     * @var \List
     *
     * @ORM\ManyToOne(targetEntity="ListApp", inversedBy="activities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="list", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $list;
    
    
     /**
     * @var \DateTime $created
     *
     * @ORM\Column(type="datetime")
     */
    private $created;
    
    /**
     * @var \DateTime deadline
     *
     * @ORM\Column(type="datetime", name="date_limit", nullable=true)
     */
    private $deadline;
    
     /**
     * @var \DateTime $endDate
     *
     * @ORM\Column(type="datetime", name="end_date", nullable=true)
     */
    private $endDate;
    
       /**
     * @var \DateTime $created
     *
     * @ORM\Column(type="boolean", name="status")
     */
    private $status;


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
     *
     * @return Activity
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Activity
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set deadline
     *
     * @param \DateTime $deadline
     *
     * @return Activity
     */
    public function setDeadline($deadline)
    {
        $this->deadline = $deadline;

        return $this;
    }

    /**
     * Get deadline
     *
     * @return \DateTime
     */
    public function getDeadline()
    {
        return $this->deadline;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return Activity
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set status
     *
     * @param boolean $status
     *
     * @return Activity
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set list
     *
     * @param \WebSite\AppBundle\Entity\ListApp $list
     *
     * @return Activity
     */
    public function setList(\WebSite\AppBundle\Entity\ListApp $list = null)
    {
        $this->list = $list;

        return $this;
    }

    /**
     * Get list
     *
     * @return \WebSite\AppBundle\Entity\ListApp
     */
    public function getList()
    {
        return $this->list;
    }
}
