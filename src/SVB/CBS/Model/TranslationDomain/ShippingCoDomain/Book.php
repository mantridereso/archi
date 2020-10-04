<?php
/**
 * Created by IntelliJ IDEA.
 * User: martin
 * Date: 23.09.15
 * Time: 17:30
 */

namespace SVB\CBS\Model\TranslationDomain\ShippingCoDomain;

use HireVoice\Neo4j\Annotation as OGM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @OGM\Entity
 */
class Book implements BookInterface
{

    /**
     * @OGM\Auto
     */
    protected $id;

    /**
     * @var string
     * @OGM\Property
     */
    protected $title;

    /**
     * @var ArrayCollection
     * @OGM\ManyToMany(relation="previous")
     */
    protected $previousVersions;

    /**
     * @var string
     * @OGM\Property
     */
    protected $textContent;

    /**
     * @var int
     * @OGM\Property
     */
    protected $countReaders;

    /**
     * @var TransportInterface
     * @OGM\ManyToOne(relation="transport")
     */
    protected $transport;

    /**
     * @var VillageInterface
     * @OGM\ManyToOne(relation="village")
     */
    protected $village;

    public function __construct(){
        $this->previousVersions = new ArrayCollection();
    }

    /**
     * @return string
     *
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return BookInterface[]
     * (0..2)
     */
    public function getPreviousVersions()
    {
        return $this->previousVersions;
    }

    /**
     * @return string
     */
    public function getTextContent()
    {
        return $this->textContent;
    }

    /**
     * @return int
     */
    public function getCountReaders()
    {
        return $this->countReaders;
    }

    /**
     * @return TransportInterface|null
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * @return VillageInterface|null
     */
    public function getVillage()
    {
        return $this->village;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @param BookInterface $previousVersion
     */
    public function addPreviousVersion($previousVersion)
    {
        $this->previousVersions->add($previousVersion);
    }

    /**
     * @param string $textContent
     */
    public function setTextContent($textContent)
    {
        $this->textContent = $textContent;
    }

    /**
     * @param int $countReaders
     */
    public function setCountReaders($countReaders)
    {
        $this->countReaders = $countReaders;
    }

    /**
     * @param TransportInterface $transport
     */
    public function setTransport($transport)
    {
        $this->transport = $transport;
    }

    /**
     * @param VillageInterface $village
     */
    public function setVillage($village)
    {
        $this->village = $village;
    }


}