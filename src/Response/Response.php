<?php
declare(strict_types=1);

namespace PseudoFramework\Response;

abstract class Response
{
    private $content;

    protected function __construct($content)
    {
        $this->content = $content;
    }

    protected function getContent()
    {
        return $this->content;
    }
}
