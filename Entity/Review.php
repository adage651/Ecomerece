<?php
include('../controller/Database.php');
class Review
{

    private ?int $id = null;
private ?Database $database=null;

    private ?string $review = null;

    private ?string $ranking = null;


    private ?DateTime $reviewDate = null;


    private ?User $userReview = null;


    private ?Items $item = null;

public function __construct($reviwer,$itemId,$review,$rank,$reviewDate)
{
    $this->database=Database::getInstance();
    $this->review=$review;
    $this->ranking=$this->ranking+$rank;
   // $this->userReview=$this->database->getuser($reviwer);
//$this->item=$itemId;
//$this->reviewDate=$reviewDate;
$this->database->setReview( $reviwer, $itemId, $review, $rank, $reviewDate,$reviewDate);
}
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReview(): ?string
    {
        return $this->review;
    }

    public function setReview(string $review): self
    {
        $this->review = $review;

        return $this;
    }

    public function getRanking(): ?string
    {
        return $this->ranking;
    }

    public function setRanking(string $ranking): self
    {
        $this->ranking = $ranking;

        return $this;
    }

    public function getReviewDate(): ?DateTime
    {
        return $this->reviewDate;
    }

    public function setReviewDate(DateTime $reviewDate): self
    {
        $this->reviewDate = $reviewDate;

        return $this;
    }

    public function getUserReview(): ?User
    {
        return $this->userReview;
    }

    public function setUserReview(?User $userReview): self
    {
        $this->userReview = $userReview;

        return $this;
    }

    public function getItem(): ?Items
    {
        return $this->item;
    }

    public function setItem(?Items $item): self
    {
        $this->item = $item;

        return $this;
    }

}
