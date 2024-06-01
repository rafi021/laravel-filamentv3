<?php

namespace App\Enums;

enum ProductStatus: string
{
    case InStock = "in_stock";
    case SoldOut = "sold_out";
    case CommingSoon = "comming_soon";
}
