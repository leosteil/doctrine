<?php

namespace Alura\Doctrine\Entity;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 */
class Phone
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column
     */
    private int $id;

    /**
     * @ORM\Column (type="string")
     */
    private string $number;

    /**
     * @ORM\ManyToOne(targetEntity="Student")
     */
    private Student $student;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getNumber(): string
    {
        return $this->number;
    }


    public function setNumber(string $number): self
    {
        $this->number = $number;
        return $this;
    }

    public function getStudent(): Student
    {
        return $this->student;
    }

    public function setStudent(Student $student): self
    {
        $this->student = $student;
        return $this;
    }
}
