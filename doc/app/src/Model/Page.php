<?php

namespace App\Model;

class Page
{
    public string $title;
    public string $slug;
    public string $content;
    public string $type;
    public array $tableOfContent;
    public \DateTimeInterface $created;
    public \DateTimeInterface $lastModified;
}
