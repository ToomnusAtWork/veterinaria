<?php
declare(strict_types=1);

namespace App\Traits;
trait UsesFilters 
{
    public function getFilter(array $options = ['alphabetical', 'popular', 'recent', 'priceLowToHigh' ,'priceHighToLow'], string $default = 'alphabetical'): string
    {
        $filter = request('filter');
        $filter = is_array($filter) ? '' : (string) request('filter');

        return in_array($filter, $options) ? $filter : $default;
    }
}
