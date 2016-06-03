<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jeu
 *
 * @ORM\Table(name="jeu")
 * @ORM\Entity(repositoryClass="CoreBundle\Repository\JeuRepository")
 */
class Jeu
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255, unique=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="editeur", type="string", length=255)
     */
    private $editeur;

    /**
     * @var string
     *
     * @ORM\Column(name="console", type="string", length=255)
     */
    private $console;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=255)
     */
    private $genre;
	
	/**
	 * @ORM\Column(name="description", type="text")
	 */
	private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_sortie", type="date")
     */
    private $dateSortie;

    /**
     * @var int
     *
     * @ORM\Column(name="nombre_joueurs", type="integer")
     */
    private $nombreJoueurs;
	
	/**
	 *@ORM\OneToOne(targetEntity="CoreBundle\Entity\Image", cascade={"persist"})
	 */
	private $image;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Jeu
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set editeur
     *
     * @param string $editeur
     *
     * @return Jeu
     */
    public function setEditeur($editeur)
    {
        $this->editeur = $editeur;

        return $this;
    }

    /**
     * Get editeur
     *
     * @return string
     */
    public function getEditeur()
    {
        return $this->editeur;
    }

    /**
     * Set console
     *
     * @param string $console
     *
     * @return Jeu
     */
    public function setConsole($console)
    {
        $this->console = $console;

        return $this;
    }

    /**
     * Get console
     *
     * @return string
     */
    public function getConsole()
    {
        return $this->console;
    }

    /**
     * Set genre
     *
     * @param string $genre
     *
     * @return Jeu
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set dateSortie
     *
     * @param \DateTime $dateSortie
     *
     * @return Jeu
     */
    public function setDateSortie($dateSortie)
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }

    /**
     * Get dateSortie
     *
     * @return \DateTime
     */
    public function getDateSortie()
    {
        return $this->dateSortie;
    }

    /**
     * Set nombreJoueurs
     *
     * @param integer $nombreJoueurs
     *
     * @return Jeu
     */
    public function setNombreJoueurs($nombreJoueurs)
    {
        $this->nombreJoueurs = $nombreJoueurs;

        return $this;
    }

    /**
     * Get nombreJoueurs
     *
     * @return int
     */
    public function getNombreJoueurs()
    {
        return $this->nombreJoueurs;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Jeu
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
     * Set image
     *
     * @param \CoreBundle\Entity\Image $image
     *
     * @return Jeu
     */
    public function setImage(\CoreBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return CoreBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }
}
