<?php declare(strict_types=1);

namespace Knops\Utilities\Traits;

use Cocur\Slugify\Slugify;

trait CreateSlugTrait
{
    protected function createSlug(string $input): string
    {
        $slugify = new Slugify();

        return $slugify->slugify($input);
    }
}