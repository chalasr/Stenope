<?php

namespace App\Stenope\Processor;

use App\Model\Page;
use Stenope\Bundle\Behaviour\ProcessorInterface;
use Stenope\Bundle\Content;

class PageTypeProcessor implements ProcessorInterface
{
    public function __invoke(array &$data, string $type, Content $content): void
    {
        if (!is_a($type, Page::class, true)) {
            return;
        }

        dump($content);

        $data['type'] = 'feature';
    }
}
