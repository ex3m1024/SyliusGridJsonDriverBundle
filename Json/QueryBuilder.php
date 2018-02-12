<?php

declare(strict_types=1);

namespace Doctorx32\SyliusGridJsonDriverBundle\Json;


final class QueryBuilder
{
    private $url;

    public function __toString() {
        return $this->url;
    }

    public function __construct(string $host, string $url)
    {
        $this->url = $host . $url . "?";
    }

    public function addFilter(string $filter): void
    {
        $this->url = $this->url . $filter;
    }
}