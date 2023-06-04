<?php

class Catagory
{
    private ?int $id = null;


    private ?items $item = null;

    private ?string $catagoryName = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getItem(): ?items
    {
        return $this->item;
    }

    public function setItem(?items $item): self
    {
        $this->item = $item;

        return $this;
    }

    public function getCatagoryName(): ?string
    {
        return $this->catagoryName;
    }

    public function setCatagoryName(string $catagoryName): self
    {
        $this->catagoryName = $catagoryName;

        return $this;
    }
}
