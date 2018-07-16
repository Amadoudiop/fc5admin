<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\AbstractEntity;

/**
 * PlayerDEFStats
 *
 * @ORM\Table(name="player_d_e_f_stats")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DefaultRepository")
 */
class PlayerDEFStats extends AbstractEntity
{
    public static $fieldsApi = [
        'headingAccuracy',
        'interceptions',
        'jumping',
        'marking',
        'reactions',
        'slidingTackle',
        'standingTackle',
        'strength',
        'stamina'
    ];

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
     * @ORM\Column(name="heading_accuracy", type="integer", length=3)
     */
    private $headingAccuracy;

    /**
     * @var int
     *
     * @ORM\Column(name="interceptions", type="integer", length=3)
     */
    private $interceptions;

    /**
     * @var int
     *
     * @ORM\Column(name="jumping", type="integer", length=3)
     */
    private $jumping;

    /**
     * @var int
     *
     * @ORM\Column(name="marking", type="integer", length=3)
     */
    private $marking;

    /**
     * @var int
     *
     * @ORM\Column(name="reactions", type="integer", length=3)
     */
    private $reactions;

    /**
     * @var int
     *
     * @ORM\Column(name="sliding_tackle", type="integer", length=3)
     */
    private $slidingTackle;

    /**
     * @var int
     *
     * @ORM\Column(name="standing_tackle", type="integer", length=3)
     */
    private $standingTackle;

    /**
     * @var int
     *
     * @ORM\Column(name="strength", type="integer", length=3)
     */
    private $strength;

    /**
     * @var int
     *
     * @ORM\Column(name="stamina", type="integer", length=3)
     */
    private $stamina;


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
     * Set headingAccuracy
     *
     * @param integer $headingAccuracy
     *
     * @return PlayerDEFStats
     */
    public function setHeadingAccuracy($headingAccuracy)
    {
        $this->headingAccuracy = $headingAccuracy;

        return $this;
    }

    /**
     * Get headingAccuracy
     *
     * @return integer
     */
    public function getHeadingAccuracy()
    {
        return $this->headingAccuracy;
    }

    /**
     * Set interceptions
     *
     * @param integer $interceptions
     *
     * @return PlayerDEFStats
     */
    public function setInterceptions($interceptions)
    {
        $this->interceptions = $interceptions;

        return $this;
    }

    /**
     * Get interceptions
     *
     * @return integer
     */
    public function getInterceptions()
    {
        return $this->interceptions;
    }

    /**
     * Set jumping
     *
     * @param integer $jumping
     *
     * @return PlayerDEFStats
     */
    public function setJumping($jumping)
    {
        $this->jumping = $jumping;

        return $this;
    }

    /**
     * Get jumping
     *
     * @return integer
     */
    public function getJumping()
    {
        return $this->jumping;
    }

    /**
     * Set marking
     *
     * @param integer $marking
     *
     * @return PlayerDEFStats
     */
    public function setMarking($marking)
    {
        $this->marking = $marking;

        return $this;
    }

    /**
     * Get marking
     *
     * @return integer
     */
    public function getMarking()
    {
        return $this->marking;
    }

    /**
     * Set reactions
     *
     * @param integer $reactions
     *
     * @return PlayerDEFStats
     */
    public function setReactions($reactions)
    {
        $this->reactions = $reactions;

        return $this;
    }

    /**
     * Get reactions
     *
     * @return integer
     */
    public function getReactions()
    {
        return $this->reactions;
    }

    /**
     * Set slidingTackle
     *
     * @param integer $slidingTackle
     *
     * @return PlayerDEFStats
     */
    public function setSlidingTackle($slidingTackle)
    {
        $this->slidingTackle = $slidingTackle;

        return $this;
    }

    /**
     * Get slidingTackle
     *
     * @return integer
     */
    public function getSlidingTackle()
    {
        return $this->slidingTackle;
    }

    /**
     * Set standingTackle
     *
     * @param integer $standingTackle
     *
     * @return PlayerDEFStats
     */
    public function setStandingTackle($standingTackle)
    {
        $this->standingTackle = $standingTackle;

        return $this;
    }

    /**
     * Get standingTackle
     *
     * @return integer
     */
    public function getStandingTackle()
    {
        return $this->standingTackle;
    }

    /**
     * Set strength
     *
     * @param integer $strength
     *
     * @return PlayerDEFStats
     */
    public function setStrength($strength)
    {
        $this->strength = $strength;

        return $this;
    }

    /**
     * Get strength
     *
     * @return integer
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * Set stamina
     *
     * @param integer $stamina
     *
     * @return PlayerDEFStats
     */
    public function setStamina($stamina)
    {
        $this->stamina = $stamina;

        return $this;
    }

    /**
     * Get stamina
     *
     * @return integer
     */
    public function getStamina()
    {
        return $this->stamina;
    }
}
