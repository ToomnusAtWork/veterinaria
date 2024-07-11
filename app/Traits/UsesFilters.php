<?php
namespace App\Traits;

trait UsesFilters 
{
    public function getFilter(array $options = ['rating', 'popular', 'recent', 'PriceLowToHigh' ,'PriceHighToLow'], string $default = 'recent'): string
    {
        $filter = request('filter');
        $filter = is_array($filter) ? '' : (string) request('filter');

        return in_array($filter, $options) ? $filter : $default;
    }
}
