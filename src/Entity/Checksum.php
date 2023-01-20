<?php

namespace App\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\MappedSuperclass()
 */
abstract class Checksum
{
	/**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer", options={"unsigned"=true})
     */
    private $id;

	/**
     * @ORM\Column(type="datetime")
     */
    private $date;
	
	/**
     * @ORM\Column(type="string")
     */
    private $type;

	/**
     * @ORM\Column(type="string")
     */
    private $checksum;

	public function getId(): ?int
    {
        return $this->id;
    }

	public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }
	
	public function setDate(?\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

	public function getType(): ?string
    {
        return $this->type;
    }
	
	public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

	public function getChecksum(): ?string
		{
			return $this->checksum;
		}

    public function setChecksum(string $checksum): self
    {
        $this->checksum = $checksum;

        return $this;
    }
}