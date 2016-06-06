<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="UserBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
	
	/**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="date", nullable=true)
     */
	private $dateNaissance;
	
	/**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255, nullable=true)
     */
	private $sexe;
	
	/**
	 * @ORM\Column(name="description", type="text", nullable=true)
	 */
	private $description;
	
	
	/**
     * @var int
     *
     * @ORM\Column(name="nombre_joueurs", type="integer", nullable=true)
     */
	private $codeAmi;
	
	
	/**
     * @var string
     *
     * @ORM\Column(name="nnid", type="string", length=255, nullable=true)
     */
	private $nnid;
	
	
	/**
     * @var string
     *
     * @ORM\Column(name="skype", type="string", length=255, nullable=true)
     */
	private $skype;
	
	
	/**
     * @var \DateTime
     *
     * @ORM\Column(name="date_inscription", type="date")
     */
	private $dateInscription;

	
	
	public function __construct()
   {
	$this->dateInscription = new \Datetime();   
	parent::__construct();
    
   }
	
	
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
	
    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return User
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     *
     * @return User
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return User
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set codeAmi
     *
     * @param integer $codeAmi
     *
     * @return User
     */
    public function setCodeAmi($codeAmi)
    {
        $this->codeAmi = $codeAmi;

        return $this;
    }

    /**
     * Get codeAmi
     *
     * @return integer
     */
    public function getCodeAmi()
    {
        return $this->codeAmi;
    }

    /**
     * Set nnid
     *
     * @param string $nnid
     *
     * @return User
     */
    public function setNnid($nnid)
    {
        $this->nnid = $nnid;

        return $this;
    }

    /**
     * Get nnid
     *
     * @return string
     */
    public function getNnid()
    {
        return $this->nnid;
    }

    /**
     * Set skype
     *
     * @param string $skype
     *
     * @return User
     */
    public function setSkype($skype)
    {
        $this->skype = $skype;

        return $this;
    }

    /**
     * Get skype
     *
     * @return string
     */
    public function getSkype()
    {
        return $this->skype;
    }

    /**
     * Set dateInscription
     *
     * @param \DateTime $dateInscription
     *
     * @return User
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return \DateTime
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }
}
