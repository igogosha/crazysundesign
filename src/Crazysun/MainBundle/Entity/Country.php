<?php

namespace Crazysun\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Country
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Crazysun\MainBundle\Entity\CountryRepository")
 */
class Country
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
     * @ORM\Column(name="name_eng", type="string", length=255)
     */
    private $nameEng;

    /**
     * @var string
     *
     * @ORM\Column(name="name_rus", type="string", length=255)
     */
    private $nameRus;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=2)
     */
    private $code;


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
     * Set nameEng
     *
     * @param string $name
     * @return Country
     */
    public function setNameEng($name)
    {
        $this->nameEng = $name;

        return $this;
    }

    /**
     * Get nameEng
     *
     * @return string 
     */
    public function getNameEng()
    {
        return $this->nameEng;
    }

    /**
     * Set nameRus
     *
     * @param string $name
     * @return Country
     */
    public function setNameRus($name)
    {
        $this->nameRus = $name;

        return $this;
    }

    /**
     * Get nameRus
     *
     * @return string
     */
    public function getNameRus()
    {
        return $this->nameRus;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Country
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }
}
