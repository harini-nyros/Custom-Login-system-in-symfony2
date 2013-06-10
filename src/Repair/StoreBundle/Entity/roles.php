<?php

namespace Repair\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * roles
 *
 * @ORM\Table(name="roles")
 * @ORM\Entity(repositoryClass="Repair\StoreBundle\Entity\rolesRepository")
 */
class roles
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
     * @ORM\Column(name="name", type="string", length=20)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="role_id", type="integer", length=10)
     */
    private $role_id;


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
     * @return roles
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
     * Set role_id
     *
     * @param integer $roleId
     * @return roles
     */
    public function setRoleId($roleId)
    {
        $this->role_id = $roleId;
    
        return $this;
    }

    /**
     * Get role_id
     *
     * @return integer 
     */
    public function getRoleId()
    {
        return $this->role_id;
    }
}