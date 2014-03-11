<?php

namespace Lean\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Corporation
 *
 * @ORM\Table(name="corporation")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Lean\AdminBundle\Entity\CorporationRepository")
 */
class Corporation
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="industry", type="string", length=255)
     */
    private $industry;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=11)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=255)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var integer
     *
     * @ORM\Column(name="postid", type="integer")
     */
    private $postid;

    /**
     * @var string
     *
     * @ORM\Column(name="turnover", type="string", length=255)
     */
    private $turnover;

    /**
     * @var string
     *
     * @ORM\Column(name="employee", type="string", length=255)
     */
    private $employee;

    /**
     * @var string
     *
     * @ORM\Column(name="weburl", type="string", length=255)
     */
    private $weburl;

    /**
     * @var string
     *
     * @ORM\Column(name="more", type="string", length=255)
     */
    private $more;

    /**
     * @var integer
     *
     * @ORM\Column(name="created_userid", type="integer")
     */
    private $createdUserid;

    /**
     * @var integer
     *
     * @ORM\Column(name="timecreated", type="integer")
     */
    private $timecreated;

    /**
     * @var integer
     *
     * @ORM\Column(name="timeupdated", type="integer")
     */
    private $timeupdated;


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
     * @return Corporation
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
     * Set industry
     *
     * @param string $industry
     * @return Corporation
     */
    public function setIndustry($industry)
    {
        $this->industry = $industry;

        return $this;
    }

    /**
     * Get industry
     *
     * @return string 
     */
    public function getIndustry()
    {
        return $this->industry;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Corporation
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Corporation
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Corporation
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Corporation
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set postid
     *
     * @param integer $postid
     * @return Corporation
     */
    public function setPostid($postid)
    {
        $this->postid = $postid;

        return $this;
    }

    /**
     * Get postid
     *
     * @return integer 
     */
    public function getPostid()
    {
        return $this->postid;
    }

    /**
     * Set turnover
     *
     * @param string $turnover
     * @return Corporation
     */
    public function setTurnover($turnover)
    {
        $this->turnover = $turnover;

        return $this;
    }

    /**
     * Get turnover
     *
     * @return string 
     */
    public function getTurnover()
    {
        return $this->turnover;
    }

    /**
     * Set employee
     *
     * @param string $employee
     * @return Corporation
     */
    public function setEmployee($employee)
    {
        $this->employee = $employee;

        return $this;
    }

    /**
     * Get employee
     *
     * @return string 
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * Set weburl
     *
     * @param string $weburl
     * @return Corporation
     */
    public function setWeburl($weburl)
    {
        $this->weburl = $weburl;

        return $this;
    }

    /**
     * Get weburl
     *
     * @return string 
     */
    public function getWeburl()
    {
        return $this->weburl;
    }

    /**
     * Set more
     *
     * @param string $more
     * @return Corporation
     */
    public function setMore($more)
    {
        $this->more = $more;

        return $this;
    }

    /**
     * Get more
     *
     * @return string 
     */
    public function getMore()
    {
        return $this->more;
    }

    /**
     * Set createdUserid
     *
     * @param integer $createdUserid
     * @return Corporation
     */
    public function setCreatedUserid($createdUserid)
    {
        $this->createdUserid = $createdUserid;

        return $this;
    }

    /**
     * Get createdUserid
     *
     * @return integer 
     */
    public function getCreatedUserid()
    {
        return $this->createdUserid;
    }

    /**
     * Set timecreated
     *
     * @param integer $timecreated
     * @return Corporation
     */
    public function setTimecreated($timecreated)
    {
        $this->timecreated = $timecreated;

        return $this;
    }

    /**
     * Get timecreated
     *
     * @return integer 
     */
    public function getTimecreated()
    {
        return $this->timecreated;
    }

    /**
     * Set timeupdated
     *
     * @param integer $timeupdated
     * @return Corporation
     */
    public function setTimeupdated($timeupdated)
    {
        $this->timeupdated = $timeupdated;

        return $this;
    }

    /**
     * Get timeupdated
     *
     * @return integer 
     */
    public function getTimeupdated()
    {
        return $this->timeupdated;
    }
}
