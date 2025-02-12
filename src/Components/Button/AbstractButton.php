<?php

namespace NotificationChannels\GoogleChat\Components\Button;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Str;

abstract class AbstractButton implements Arrayable
{
    /**
     * The button payload.
     *
     * @var array
     */
    protected $payload = [];

    /**
     * Set the onClick url.
     *
     * @param string $url
     * @return self
     */
    public function url(string $url): self
    {
        $this->payload['onClick'] = [
            'openLink' => [
                'url' => $url,
            ],
        ];

        return $this;
    }

    /**
     * Return the array representation of this button.
     *
     * @return array
     */
    public function toArray()
    {
        $class = Str::camel(class_basename(static::class));

        return [
            (string) $class => $this->payload,
        ];
    }
}
