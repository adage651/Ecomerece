<?php

class Review
{

    private ?int $id = null;


    private ?string $review = null;

    private ?string $ranking = null;


    private ?DateTime $reviewDate = null;


    private ?User $userReview = null;


    private ?Items $item = null;


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
