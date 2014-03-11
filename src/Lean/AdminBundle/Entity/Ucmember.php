<?php

namespace Lean\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ucmember
 *
 * @ORM\Table(name="ucmember")
 * @ORM\Entity(repositoryClass="Lean\AdminBundle\Entity\ucmemberRepository")
 */
class Ucmember
{

    /**
     * @ORM\Id
     * @ORM\Column(name="uid", type="integer")
     */
    private $uid;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="myid", type="string", length=32)
     */
    private $myid;

    /**
     * @var string
     *
     * @ORM\Column(name="myidkey", type="string", length=16)
     */
    private $myidkey;

    /**
     * @var string
     *
     * @ORM\Column(name="regip", type="string", length=15)
     */
    private $regip;

    /**
     * @var integer
     *
     * @ORM\Column(name="regdate", type="integer")
     */
    private $regdate;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastloginip", type="integer")
     */
    private $lastloginip;

    /**
     * @var integer
     *
     * @ORM\Column(name="lastlogintime", type="integer")
     */
    private $lastlogintime;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=6)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="secques", type="string", length=8)
     */
    private $secques;

    /**
     * Get uid
     *
     * @return integer 
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return ucmember
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return ucmember
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return ucmember
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
     * Set myid
     *
     * @param string $myid
     * @return ucmember
     */
    public function setMyid($myid)
    {
        $this->myid = $myid;

        return $this;
    }

    /**
     * Get myid
     *
     * @return string 
     */
    public function getMyid()
    {
        return $this->myid;
    }

    /**
     * Set myidkey
     *
     * @param string $myidkey
     * @return ucmember
     */
    public function setMyidkey($myidkey)
    {
        $this->myidkey = $myidkey;

        return $this;
    }

    /**
     * Get myidkey
     *
     * @return string 
     */
    public function getMyidkey()
    {
        return $this->myidkey;
    }

    /**
     * Set regip
     *
     * @param string $regip
     * @return ucmember
     */
    public function setRegip($regip)
    {
        $this->regip = $regip;

        return $this;
    }

    /**
     * Get regip
     *
     * @return string 
     */
    public function getRegip()
    {
        return $this->regip;
    }

    /**
     * Set regdate
     *
     * @param integer $regdate
     * @return ucmember
     */
    public function setRegdate($regdate)
    {
        $this->regdate = $regdate;

        return $this;
    }

    /**
     * Get regdate
     *
     * @return integer 
     */
    public function getRegdate()
    {
        return $this->regdate;
    }

    /**
     * Set lastloginip
     *
     * @param integer $lastloginip
     * @return ucmember
     */
    public function setLastloginip($lastloginip)
    {
        $this->lastloginip = $lastloginip;

        return $this;
    }

    /**
     * Get lastloginip
     *
     * @return integer 
     */
    public function getLastloginip()
    {
        return $this->lastloginip;
    }

    /**
     * Set lastlogintime
     *
     * @param integer $lastlogintime
     * @return ucmember
     */
    public function setLastlogintime($lastlogintime)
    {
        $this->lastlogintime = $lastlogintime;

        return $this;
    }

    /**
     * Get lastlogintime
     *
     * @return integer 
     */
    public function getLastlogintime()
    {
        return $this->lastlogintime;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return ucmember
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set secques
     *
     * @param string $secques
     * @return ucmember
     */
    public function setSecques($secques)
    {
        $this->secques = $secques;

        return $this;
    }

    /**
     * Get secques
     *
     * @return string 
     */
    public function getSecques()
    {
        return $this->secques;
    }
}
