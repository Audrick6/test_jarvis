<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\UserRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Date;
use Doctrine\ORM\Mapping\PrePersist;
use Doctrine\ORM\Mapping\PreUpdate;
use Symfony\Component\Validator\Constraints\DateTime;
use Doctrine\ORM\Mapping\HasLifecycleCallbacks;

/**
 * @ApiResource(
 *     itemOperations={"get", "put", "delete"}
 * )
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @HasLifecycleCallbacks
 */
class User
{
    const API_ROUTE = '/api/users';
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $lastName;

    /**
     * @ORM\Column(type="datetime")
     */
    private $creationDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updateDate;

    /**
     * User constructor.
     * @param int|null $id
     * @param string|null $firstName
     * @param string|null $lastName
     * @param \DateTime|null $creationDate
     * @param \DateTime|null $updateDate
     */
    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->creationDate = new \DateTime();
        $this->updateDate = new \DateTime();
    }

    /**
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string|null $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string|null $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return \DateTime|null
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    public function setCreationDate()
    {
        $this->creationDate = new \DateTime();
    }

    /**
     * @return \DateTime|null
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    public function setUpdateDate()
    {
        $this->updateDate = new \DateTime();
    }

    /**
     * @PrePersist
     */
    public function onPersist()
    {
        $this->updateDate = new \DateTime();
    }

    /**
     * @PreUpdate
     */
    public function onUpdate()
    {
        $this->updateDate = new \DateTime();
    }
}
