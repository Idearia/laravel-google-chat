<?php

namespace NotificationChannels\GoogleChat\Widgets;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Str;

abstract class AbstractWidget implements Arrayable
{
    /**
     * The widget payload.
     *
     * @var array
     */
    protected $payload = [];

    /**
     * Serialize the widget to an array representation.
     *
     * @return array
     */
    public function toArray()
    {
        $widgetName = Str::camel(class_basename(static::class));

        return [
            (string) $widgetName => $this->payload,
        ];
    }
}
