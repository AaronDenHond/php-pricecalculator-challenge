<?php

class Customer
{

    private int $id;
    private string $firstname;
    private string $lastname;
    private int $groupId;
    private int $fixedDiscount;
    private int $variableDiscount;



    public function __construct(int $id, string $firstname, string $lastname, int $groupId, int $fixedDiscount, int $variableDiscount)
    {

        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->groupId = $groupId;
        $this->fixedDiscount = $fixedDiscount;
        $this->variableDiscount = $variableDiscount;
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function getGroupId(): int
    {
        return $this->groupId;

    }
    public function getFixedDiscount(): int
    {
        return $this->fixedDiscount;
    }
    public function getVariableDiscount(): int
    {

        return $this->variableDiscount;
    }
}
