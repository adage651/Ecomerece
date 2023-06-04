<?php

class Items
{
    private ?int $id = null;


    private ?string $ItemName = null;


    private ?string $itemDescription = null;

 
    private ?float $itemPrice = null;

   
    private ?string $itemPicture = null;


    private ?float $itemEditedPrice = null;


    private Array $orderd;

    private Array $catagory;


    private Array $review;

    public function __construct(string $itemName,string $itemDescription,float $itemPrice,string $itemPicture)
    {
$this->ItemName=$itemName;
$this->itemDescription=$itemDescription;
$this->itemPrice=$itemPrice;
$this->itemPicture=$itemPicture;
        $this->orderd = array();
        $this->catagory = array();
        $this->review = array();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getItemName(): ?string
    {
        return $this->ItemName;
    }

    public function setItemName(string $ItemName): self
    {
        $this->ItemName = $ItemName;

        return $this;
    }

    public function getItemDescription(): ?string
    {
        return $this->itemDescription;
    }

    public function setItemDescription(string $itemDescription): self
    {
        $this->itemDescription = $itemDescription;

        return $this;
    }

    public function getItemPrice(): ?float
    {
        return $this->itemPrice;
    }

    public function setItemPrice(float $itemPrice): self
    {
        $this->itemPrice = $itemPrice;

        return $this;
    }

    public function getItemPicture(): ?string
    {
        return $this->itemPicture;
    }

    public function setItemPicture(string $itemPicture): self
    {
        $this->itemPicture = $itemPicture;

        return $this;
    }

    public function getItemEditedPrice(): ?float
    {
        return $this->itemEditedPrice;
    }

    public function setItemEditedPrice(?float $itemEditedPrice): self
    {
        $this->itemEditedPrice = $itemEditedPrice;

        return $this;
    }

    /**
     * @return Collection<int, Order>
     */
    public function getOrderd(): Array
    {
        return $this->orderd;
    }

    public function addOrderd(Order $orderd): self
    {
        if (!array_search($orderd,$this->orderd)) {
            array_push($this->orderd,$orderd);
            $orderd->setItems($this);
        }

        return $this;
    }

    public function removeOrderd(Order $orderd): self
    {
        if (array_slice($this->orderd,array_search($orderd,$this->orderd),1)) { 
            // set the owning side to null (unless already changed)
            if ($orderd->getItems() === $this) {
                $orderd->setItems(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Catagory>
     */
    public function getCatagory(): Array
    {
        return $this->catagory;
    }

    public function addCatagory(Catagory $catagory): self
    {
        if (!array_search($catagory,$this->catagory)) {
            array_push($this->catagory,$catagory);
            $catagory->setItem($this);
        }

        return $this;
    }

    public function removeCatagory(Catagory $catagory): self
    {
        if (array_slice($this->catagory,array_search($catagory,$this->catagory),1)) { 
            // set the owning side to null (unless already changed)
            if ($catagory->getItem() === $this) {
                $catagory->setItem(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Review>
     */
    public function getReview(): array
    {
        return $this->review;
    }

    public function addReview(Review $review): self
    {
        if (!array_search($review,$this->review)) {
            array_push($this->review,$review);
            $review->setItem($this);
        }

        return $this;
    }

    public function removeReview(Review $review): self
    {
        if (array_slice($this->review,array_search($review,$this->review),1)) { 
            // set the owning side to null (unless already changed)
            if ($review->getItem() === $this) {
                $review->setItem(null);
            }
        }

        return $this;
    }
}
