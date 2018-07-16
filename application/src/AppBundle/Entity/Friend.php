<?php

namespace AppBundle\Entity;

use AppBundle\Entity\AbstractEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Friend
 *
 * @ORM\Table(name="friend")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DefaultRepository")
 */
class Friend extends AbstractEntity
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $from;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $to;

    /**
     * @var string
     *
     * @ORM\Column(name="approved", type="boolean")
     */
    private $approved;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set approved.
     *
     * @param bool $approved
     *
     * @return Friend
     */
    public function setApproved($approved)
    {
        $this->approved = $approved;

        return $this;
    }

    /**
     * Get approved.
     *
     * @return bool
     */
    public function getApproved()
    {
        return $this->approved;
    }

    /**
     * Set from.
     *
     * @param \AppBundle\Entity\User $from
     *
     * @return Friend
     */
    public function setFrom(\AppBundle\Entity\User $from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Get from.
     *
     * @return \AppBundle\Entity\User
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Set to.
     *
     * @param \AppBundle\Entity\User $to
     *
     * @return Friend
     */
    public function setTo(\AppBundle\Entity\User $to)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * Get to.
     *
     * @return \AppBundle\Entity\User
     */
    public function getTo()
    {
        return $this->to;
    }
}
