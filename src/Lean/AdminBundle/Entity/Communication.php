<?php

namespace Lean\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Communication
 *
 * @ORM\Table(name="communication")
 * @ORM\Entity(repositoryClass="Lean\AdminBundle\Entity\CommunicationRepository")
 */
class Communication
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="contact_id", type="integer")
     */
    private $contactId;

    /**
     * @var integer
     *
     * @ORM\Column(name="master_id", type="integer")
     */
    private $masterId;

    /**
     * @var string
     *
     * @ORM\Column(name="record_text", type="string", length=255)
     */
    private $recordText;

    /**
     * @var integer
     *
     * @ORM\Column(name="date", type="integer")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="remindeddate", type="integer")
     */
    private $remindeddate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_closed", type="boolean")
     */
    private $isClosed;


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
     * Set contactId
     *
     * @param integer $contactId
     * @return Communication
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;

        return $this;
    }

    /**
     * Get contactId
     *
     * @return integer 
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * Set masterId
     *
     * @param integer $masterId
     * @return Communication
     */
    public function setMasterId($masterId)
    {
        $this->masterId = $masterId;

        return $this;
    }

    /**
     * Get masterId
     *
     * @return integer 
     */
    public function getMasterId()
    {
        return $this->masterId;
    }

    /**
     * Set recordText
     *
     * @param string $recordText
     * @return Communication
     */
    public function setRecordText($recordText)
    {
        $this->recordText = $recordText;

        return $this;
    }

    /**
     * Get recordText
     *
     * @return string 
     */
    public function getRecordText()
    {
        return $this->recordText;
    }

    /**
     * Set date
     *
     * @param integer $date
     * @return Communication
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return integer 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set remindeddate
     *
     * @param integer $remindeddate
     * @return Communication
     */
    public function setRemindeddate($remindeddate)
    {
        $this->remindeddate = $remindeddate;

        return $this;
    }

    /**
     * Get remindeddate
     *
     * @return integer 
     */
    public function getRemindeddate()
    {
        return $this->remindeddate;
    }

    /**
     * Set isClosed
     *
     * @param boolean $isClosed
     * @return Communication
     */
    public function setIsClosed($isClosed)
    {
        $this->isClosed = $isClosed;

        return $this;
    }

    /**
     * Get isClosed
     *
     * @return boolean 
     */
    public function getIsClosed()
    {
        return $this->isClosed;
    }
}
