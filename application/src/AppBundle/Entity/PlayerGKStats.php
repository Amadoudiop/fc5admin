<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlayerGKStats
 *
 * @ORM\Table(name="player_g_k_stats")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DefaultRepository")
 */
class PlayerGKStats
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
     * @var int
     *
     * @ORM\Column(name="diving", type="integer", length=3)
     */
    private $diving;

    /**
     * @var int
     *
     * @ORM\Column(name="handling", type="integer", length=3)
     */
    private $handling;

    /**
     * @var int
     *
     * @ORM\Column(name="kicking", type="integer", length=3)
     */
    private $kicking;

    /**
     * @var int
     *
     * @ORM\Column(name="positioning", type="integer", length=3)
     */
    private $positioning;

    /**
     * @var int
     *
     * @ORM\Column(name="reflexes", type="integer", length=3)
     */
    private $reflexes;


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
     * Set diving
     *
     * @param integer $diving
     *
     * @return PlayerGKStats
     */
    public function setDiving($diving)
    {
        $this->diving = $diving;

        return $this;
    }

    /**
     * Get diving
     *
     * @return integer
     */
    public function getDiving()
    {
        return $this->diving;
    }

    /**
     * Set handling
     *
     * @param integer $handling
     *
     * @return PlayerGKStats
     */
    public function setHandling($handling)
    {
        $this->handling = $handling;

        return $this;
    }

    /**
     * Get handling
     *
     * @return integer
     */
    public function getHandling()
    {
        return $this->handling;
    }

    /**
     * Set kicking
     *
     * @param integer $kicking
     *
     * @return PlayerGKStats
     */
    public function setKicking($kicking)
    {
        $this->kicking = $kicking;

        return $this;
    }

    /**
     * Get kicking
     *
     * @return integer
     */
    public function getKicking()
    {
        return $this->kicking;
    }

    /**
     * Set positioning
     *
     * @param integer $positioning
     *
     * @return PlayerGKStats
     */
    public function setPositioning($positioning)
    {
        $this->positioning = $positioning;

        return $this;
    }

    /**
     * Get positioning
     *
     * @return integer
     */
    public function getPositioning()
    {
        return $this->positioning;
    }

    /**
     * Set reflexes
     *
     * @param integer $reflexes
     *
     * @return PlayerGKStats
     */
    public function setReflexes($reflexes)
    {
        $this->reflexes = $reflexes;

        return $this;
    }

    /**
     * Get reflexes
     *
     * @return integer
     */
    public function getReflexes()
    {
        return $this->reflexes;
    }
}
