<?php

namespace Repair\StoreBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * affliates
 *
 * @ORM\Table(name="affliates")
 * @ORM\Entity(repositoryClass="Repair\StoreBundle\Entity\affliatesRepository")
 * @UniqueEntity(fields="username",message="Username is already in use",groups={"registration"})
 * 
 * 
 */
class affliates
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
     * @Assert\NotBlank(message="username should not be blank",groups={"registration","login"})
     * @ORM\Column(name="username", type="string", length=40)
     *
     */
    private $username;
     
    /**
     * @var string
     * @Assert\NotBlank(message="password should not be blank",groups={"registration","login"})
     * @ORM\Column(name="password", type="string", length=40)
     */
    private $password;
     /**
     * @var  integer
     *
     * @ORM\Column(name="parentid", type="integer", length=40)
     */
   private $parentid;
     /**
     * @var string
     * @Assert\NotBlank(message="email should not be blank",groups={"registration"})
     * @ORM\Column(name="email", type="string", length=40) 
     */
    private $email;
     /**
     * @var  integer
     *
     * @ORM\Column(name="status", type="integer", length=40)
     */
   private $status;
     /**
     * @var integer
     * 
     * @ORM\Column(name="role", type="integer", length=20)
     */
    private $role;  
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
     * Set username
     *
     * @param string $username
     * @return affliates
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
     * @return affliates
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
     * Set parentid
     *
     * @param integer $parentid
     * @return users
     */
    public function setParentId($parentid)
    {
        $this->parentid = $parentid;
    
        return $this;
    }

    /**
     * Get parentid
     *
     * @return integer 
     */
    public function getParentId()
    {
        return $this->parentid;
    }
    /**
     * Set email
     *
     * @param string $email
     * @return affliates
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
     * Set status
     *
     * @param integer $status
     * @return affliates
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
     public function getStatus()
    {
        return $this->status;
    }
    /**
     * Set role
     *
     * @param integer $role
     * @return affliates
     */
    public function setRole($role)
    {
        $this->role = $role;
    
        return $this;
    }

    /**
     * Get role
     *
     * @return integer 
     */
    public function getRole()
    {
        return $this->role;
    }

}
