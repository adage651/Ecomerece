<?php
include('../controller/Database.php');
class Catagory
{
    private ?int $id = null;
    private $database=null;

    private ?Items $item = null;

    private ?string $catagoryName = null;
    public function __construct(string  $catagoryName,Items $item){
        $this->database=Database::getInstance();
        $this->catagoryName=$catagoryName;
        $this->item=$item;
       $itemId= $this->database->insertItem($item);
        $this->database->addCatagoryName($this,$itemId);

    }

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
