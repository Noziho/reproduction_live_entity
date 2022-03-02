<?php

namespace App\Model\Entity;

class Comment extends AbstractEntity {
    private string $content;
    private ?int $user_fk;
    private ?int $article_fk;

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return int|null
     */
    public function getUserFk(): ?int
    {
        return $this->user_fk;
    }

    /**
     * @param int|null $user_fk
     */
    public function setUserFk(?int $user_fk): void
    {
        $this->user_fk = $user_fk;
    }

    /**
     * @return int|null
     */
    public function getArticleFk(): ?int
    {
        return $this->article_fk;
    }

    /**
     * @param int|null $article_fk
     */
    public function setArticleFk(?int $article_fk): void
    {
        $this->article_fk = $article_fk;
    }


}