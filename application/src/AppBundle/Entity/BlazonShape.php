<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * BlazonShape
 *
 * @ORM\Table(name="blazon_shape")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DefaultRepository")
 * @Vich\Uploadable
 */
class BlazonShape extends AbstractEntity
{
    public static $defaultFieldOrder = "id";
    public static $defaultDirOrder = "asc";
    public static $fieldsOrder = [
        'id',
        'premium',
    ];
    public static $fieldsApi = [
        'id',
        'svg',
        'premium',
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
     * @var string
     *
     * @ORM\Column(name="svg", type="string", length=255)
     */
    private $svg;

    /**
     * @var bool
     *
     * @ORM\Column(name="premium", type="boolean")
     */
    private $premium;

    /**
     * @Vich\UploadableField(mapping="image", fileNameProperty="svg")
     * @var File
     */
    private $imageFile;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime")
     */
    private $updatedAt;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set svg.
     *
     * @param string $svg
     *
     * @return BlazonShape
     */
    public function setSvg($svg)
    {
        $this->svg = $svg;

        return $this;
    }

    /**
     * Get svg.
     *
     * @return string
     */
    public function getSvg()
    {
        return $this->svg;
    }

    /**
     * Set premium.
     *
     * @param bool $premium
     *
     * @return BlazonShape
     */
    public function setPremium($premium)
    {
        $this->premium = $premium;

        return $this;
    }

    /**
     * Get premium.
     *
     * @return bool
     */
    public function getPremium()
    {
        return $this->premium;
    }

    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        if ($image) {
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return BlazonShape
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
