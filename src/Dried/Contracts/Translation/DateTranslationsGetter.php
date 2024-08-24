<?php

declare(strict_types=1);

namespace Dried\Contracts\Translation;

use Closure;

interface DateTranslationsGetter
{
    /** @return array<string, Closure|array|string|int> */
    public function getTranslations(): array;
}
