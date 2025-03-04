<?php

declare(strict_types=1);

namespace Sylius\RefundPlugin\Model;

use MyCLabs\Enum\Enum;

final class RefundType extends Enum
{
    public const ORDER_ITEM_UNIT = 'order_item_unit';
    public const SHIPMENT = 'shipment';

    public static function orderItemUnit(): self
    {
        return new self(self::ORDER_ITEM_UNIT);
    }

    public static function shipment(): self
    {
        return new self(self::SHIPMENT);
    }
}
