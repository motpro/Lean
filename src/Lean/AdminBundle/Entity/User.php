<?php

namespace Lean\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="m_users")
 * @ORM\Entity(repositoryClass="Lean\AdminBundle\Entity\UserRepository")
 */
class User
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
     * @ORM\Column(name="username", type="string", length=150)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=100)
     */
    private $password;

    /**
     * @var integer
     *
     * @ORM\Column(name="block", type="integer")
     */
    private $block;

    /**
     * @var integer
     *
     * @ORM\Column(name="sendEmail", type="integer")
     */
    private $sendEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="registerDate", type="string", length=255)
     */
    private $registerDate;

    /**
     * @var string
     *
     * @ORM\Column(name="lastvisitDate", type="string", length=255)
     */
    private $lastvisitDate;

    /**
     * @var string
     *
     * @ORM\Column(name="activation", type="string", length=100)
     */
    private $activation;

    /**
     * @var string
     *
     * @ORM\Column(name="params", type="string", length=255)
     */
    private $params;

    /**
     * @var string
     *
     * @ORM\Column(name="lastResetTime", type="string", length=255)
     */
    private $lastResetTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="resetCount", type="integer")
     */
    private $resetCount;


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
     * @return User
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
     * Set username
     *
     * @param string $username
     * @return User
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
     * Set email
     *
     * @param string $email
     * @return User
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
     * Set password
     *
     * @param string $password
     * @return User
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
     * Set block
     *
     * @param integer $block
     * @return User
     */
    public function setBlock($block)
    {
        $this->block = $block;

        return $this;
    }

    /**
     * Get block
     *
     * @return integer 
     */
    public function getBlock()
    {
        return $this->block;
    }

    /**
     * Set sendEmail
     *
     * @param integer $sendEmail
     * @return User
     */
    public function setSendEmail($sendEmail)
    {
        $this->sendEmail = $sendEmail;

        return $this;
    }

    /**
     * Get sendEmail
     *
     * @return integer 
     */
    public function getSendEmail()
    {
        return $this->sendEmail;
    }

    /**
     * Set registerDate
     *
     * @param string $registerDate
     * @return User
     */
    public function setRegisterDate($registerDate)
    {
        $this->registerDate = $registerDate;

        return $this;
    }

    /**
     * Get registerDate
     *
     * @return string 
     */
    public function getRegisterDate()
    {
        return $this->registerDate;
    }

    /**
     * Set lastvisitDate
     *
     * @param string $lastvisitDate
     * @return User
     */
    public function setLastvisitDate($lastvisitDate)
    {
        $this->lastvisitDate = $lastvisitDate;

        return $this;
    }

    /**
     * Get lastvisitDate
     *
     * @return string 
     */
    public function getLastvisitDate()
    {
        return $this->lastvisitDate;
    }

    /**
     * Set activation
     *
     * @param string $activation
     * @return User
     */
    public function setActivation($activation)
    {
        $this->activation = $activation;

        return $this;
    }

    /**
     * Get activation
     *
     * @return string 
     */
    public function getActivation()
    {
        return $this->activation;
    }

    /**
     * Set params
     *
     * @param string $params
     * @return User
     */
    public function setParams($params)
    {
        $this->params = $params;

        return $this;
    }

    /**
     * Get params
     *
     * @return string 
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Set lastResetTime
     *
     * @param string $lastResetTime
     * @return User
     */
    public function setLastResetTime($lastResetTime)
    {
        $this->lastResetTime = $lastResetTime;

        return $this;
    }

    /**
     * Get lastResetTime
     *
     * @return string 
     */
    public function getLastResetTime()
    {
        return $this->lastResetTime;
    }

    /**
     * Set resetCount
     *
     * @param integer $resetCount
     * @return User
     */
    public function setResetCount($resetCount)
    {
        $this->resetCount = $resetCount;

        return $this;
    }

    /**
     * Get resetCount
     *
     * @return integer 
     */
    public function getResetCount()
    {
        return $this->resetCount;
    }
}
