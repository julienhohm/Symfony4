<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CityRepository")
 */
class City
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="postal_code", type="string", length=5)
     */
    private $postalCode;

	/**
	* @ORM\ManyToOne(targetEntity="App\Entity\Department")
	* @ORM\JoinColumn(nullable=false)
	*/
	private $department;
	
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
     * Set name
     *
     * @param string $name
     *
     * @return City
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
     * Set postalCode
     *
     * @param string $postalCode
     *
     * @return City
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set department
     *
     * @param App\Entity\Department $department
     *
     * @return City
     */
    public function setDepartment(Department $department) 
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return App\Entity\Department
     */
    public function getDepartment() : Department
    {
        return $this->department;
    }
}
