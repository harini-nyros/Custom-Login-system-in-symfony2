<?php

namespace Repair\StoreBundle\Entity;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\DBAL\Types;
use Doctrine\ORM\Mapping as ORM;
use Repair\StoreBundle\Entity\disputes;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="Repair\StoreBundle\Entity\usersRepository")
 * @UniqueEntity(fields="username",message="Username is already in use",groups={"registration"})
 *
 */
class users
{
     /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\OneToOne(targetEntity="disputes", mappedBy="users")
     */
    private $id;
     /**
     * @var string
     * @Assert\NotBlank(message="username should not be blank",groups={"registration","login"})

     * @ORM\Column(name="username", type="string", length=40)
     */
    private $username;
    /**
     * @var string
     * @Assert\NotBlank(message="password should not be blank",groups={"registration","login"})
     * @ORM\Column(name="password", type="string", length=40)
     */
    private $password;

    /**
     * @var integer
     * 
     * @ORM\Column(name="role", type="integer", length=20)
     */
    private $role;
    /**
     * @var string
     * @Assert\NotBlank(message="name should not be blank",groups={"registration"})
     * @ORM\Column(name="name", type="string", length=40)
     */
    private $name;
    /**
     * @var string
     * @Assert\NotBlank(message="email should not be blank",groups={"registration"})
     * @ORM\Column(name="email", type="string", length=40)
     */
    private $email;
    /**
     * @var string
     * 
     * @ORM\Column(name="title", type="string", length=40)
     */
    private $title;
    /**
     * @var string
     * 
     * @ORM\Column(name="note", type="string", length=255)
     */
    private $note;
     /**
     * @var  bigint
     * @Assert\NotBlank(message="accountno should not be blank",groups={"admin"})
     * @Assert\MaxLength(limit=15,groups={"admin"})
     * @ORM\Column(name="accno", type="bigint", length=40)
     */
   private $accno;
     /**
     * @var  integer
     * 
     * @ORM\Column(name="score", type="integer", length=40)
     */
   private $score;
     /**
     * @var  integer
     *
     * @ORM\Column(name="parentid", type="integer", length=40)
     */
   private $parentid;
     /**
     * @var  integer
     *
     * @ORM\Column(name="status", type="integer", length=40)
     */
   private $status;
    /**
     * @var  integer
     *
     * @ORM\Column(name="company1", type="integer", length=40)
     */
   private $company1;
     /**
     * @var  integer
     *
     * @ORM\Column(name="company2", type="integer", length=40)
     */
   private $company2;
     /**
     * @var  integer
     *
     * @ORM\Column(name="company3", type="integer", length=40)
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
     * @param \string $username
     * @return users
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
     * @param \string $password
     * @return users
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
     * Set role
     *
     * @param integer $role
     * @return users
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
 /**
     * Set name
     *
     * @param \string $name
     * @return users
     */
      public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return \string 
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set email
     *
     * @param \string $email
     * @return users
     */
      public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return \string 
     */
    public function getEmail()
    {
        return $this->email;
    }
     
    /**
     * Set title
     *
     * @param \string $title
     * @return users
     */
      public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return \string 
     */
    public function getTitle()
    {
        return $this->title;
    }
   /**
     * Set note
     *
     * @param \string $note
     * @return users
     */
      public function setNote($note)
    {
        $this->note = $note;
    
        return $this;
    }

    /**
     * Get note
     *
     * @return \string 
     */
    public function getNote()
    {
        return $this->note;
    }
    /**
     * Set accno
     *
     * @param  bigint $accno
     * @return users
     */
    public function setAccno($accno)
    {
        $this->accno = $accno; 
        return $this;
    }

    /**
     * Get accno
     *
     * @return integer
     */
    public function getAccno()
    {
        return $this->accno;
    }
    /**
     * Get score
     *
     * @return integer 
     */
    public function getScore()
    {
        return $this->score;
    }
   /**
     * Set score
     *
     * @param integer $score
     * @return users
     */
      public function setScore($score)
    {
        $this->score = $score;
    
        return $this;
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
     * Set status
     *
     * @param integer $status
     * @return users
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
     * Set company1
     *
     * @param integer $company1
     * @return users
     */
    public function setCompany1($company1)
    {
        $this->company1 = $company1;
    
        return $this;
    }
    /**
     * Get company1
     *
     * @return integer 
     */
     public function getCompany1()
    {
        return $this->company1;
    }
    /**
     * Set company1
     *
     * @param integer $company1
     * @return users
     */
    public function setCompany2($company2)
    {
        $this->company2 = $company2;
    
        return $this;
    }
    /**
     * Get company2
     *
     * @return integer 
     */
     public function getCompany2()
    {
        return $this->company2;
    }

    /**
     * Set company3
     *
     * @param integer $company3
     * @return users
     */
    public function setCompany3($company3)
    {
        $this->company3 = $company3;
    
        return $this;
    }
    /**
     * Get company3
     *
     * @return integer 
     */
     public function getCompany3()
    {
        return $this->company3;
    }
     /**
    * @ORM\OneToMany(targetEntity="attachments", mappedBy="user_id")
    */
   private $attachments;
   public function __construct()
    {
        $this->attachments= new ArrayCollection();
    }
    /**
     * Add attachments
     *
     * @param \Repair\StoreBundle\Entity\attachments $attachments
     * @return users
     */
    public function addAttachment(\Repair\StoreBundle\Entity\attachments $attachments)
    {
        $this->attachments[] = $attachments;
    
        return $this;
    }
    /**
     * Remove attachments
     *
     * @param \Repair\StoreBundle\Entity\attachments $attachments
     */
    public function removeAttachment(\Repair\StoreBundle\Entity\attachments $attachments)
    {
        $this->attachments->removeElement($attachments);
    }

    /**
     * Get attachments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAttachments()
    {
        return $this->attachments;
    }
    /**
     * @ORM\OneToOne(targetEntity="disputes")
     */
    protected $disputes;



}
