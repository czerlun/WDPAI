<?php

class User {
    private $user_name;
    private $content;

    public function __construct(
        string $user_name,
        string $content
    ) {
        $this->user_name = $user_name;
        $this->content = $content;
    }

    public function getUser_name(): string
    {
        return $this->user_name;
    }

    public function setUser_name(string $user_name): void
    {
        $this->user_name = $user_name;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content): void
    {
        $this->content = $content;
    }
}