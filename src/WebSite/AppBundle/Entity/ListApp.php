<?php

namespace WebSite\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * ListApp
 *
 * @ORM\Table(name="list_app")
 * @ORM\Entity
 */
class ListApp {
    
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
     * @ORM\Column(name="accion", type="string", length=255, nullable=false)
     */
    private $name;
    
            /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="list")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user", referencedColumnName="id",  onDelete="CASCADE")
     * })
     */
    private $user;
    
    
     /**
     * @var \DateTime $created
     *
     * @ORM\Column(type="datetime")
     */
    private $created;
    
    /**
     * @var \activities
     *
     * @ORM\OneToMany(targetEntity="Activity", mappedBy="list")
     */
    private $activities;
    
     public function __construct()
    {
        $this->activities = new ArrayCollection();
        
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

    /**
     * Set name
     *
     * @param string $name
     *
     * @return ListApp
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
     * @return ListApp
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
     * Set user
     *
     * @param \WebSite\AppBundle\Entity\User $user
     *
     * @return ListApp
     */
    public function setUser(\WebSite\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \WebSite\AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add activity
     *
     * @param \WebSite\AppBundle\Entity\Activity $activity
     *
     * @return ListApp
     */
    public function addActivity(\WebSite\AppBundle\Entity\Activity $activity)
    {
        $this->activities[] = $activity;

        return $this;
    }

    /**
     * Remove activity
     *
     * @param \WebSite\AppBundle\Entity\Activity $activity
     */
    public function removeActivity(\WebSite\AppBundle\Entity\Activity $activity)
    {
        $this->activities->removeElement($activity);
    }

    /**
     * Get activities
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getActivities()
    {
        return $this->activities;
    }
}
