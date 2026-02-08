<?php

namespace BuyTwoChocola;

class Solution
{
    /**
     * @param Integer[] $prices
     * @param Integer $money
     * @return Integer
     */
    function buyChoco($prices, $money)
    {
        sort($prices);
        $minPrice = $prices[0] + $prices[1];
        return $money - $minPrice >= 0 ? $money - $minPrice : $money;
    }
}