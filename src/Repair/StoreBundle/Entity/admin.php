<?php

namespace Repair\StoreBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * admin
 *
 * @ORM\Table(name="admin")
 * @ORM\Entity(repositoryClass="Repair\StoreBundle\Entity\adminRepository")
 */
class admin
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
     * @Assert\NotBlank(message="username should not be blank")
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var string
     * @Assert\NotBlank(message="password should not be blank")
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;
     /**
     * @var string
     * 
     * @ORM\Column(name="company1", type="string", length=255)
     */
    private $company1;
      /**
     * @var string
     * 
     * @ORM\Column(name="company2", type="string", length=255)
     */
    private $company2;
     /**
     * @var string
     *
     * @ORM\Column(name="company3", type="string", length=255)
     */
    private $company3;
	


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
     * @return admin
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
     * @return admin
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
     * Set company1
     *
     * @param string $company1
     * @return admin
     */
    public function setCompany1($company1)
    {
        $this->company1 = $company1;
    
        return $this;
    }

    /**
     * Get company1
     *
     * @return string 
     */
    public function getCompany1()
    {
        return $this->company1;
    }
    /**
     * Set company2
     *
     * @param string $company2
     * @return admin
     */
    public function setCompany2($company2)
    {
        $this->company2 = $company2;
    
        return $this;
    }

    /**
     * Get company2
     *
     * @return string 
     */
    public function getCompany2()
    {
        return $this->company2;
    }
     /**
     * Set company3
     *
     * @param string $company3
     * @return admin
     */
    public function setCompany3($company3)
    {
        $this->company3 = $company3;
    
        return $this;
    }

    /**
     * Get company3
     *
     * @return string 
     */
    public function getCompany3()
    {
        return $this->company3;
    }
}
