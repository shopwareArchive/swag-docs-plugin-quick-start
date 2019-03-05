<?php declare(strict_types=1);

namespace PluginQuickStart\Subscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class MySubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return[
            'example_event' => 'onExampleEvent'
        ];
    }

    public function onExampleEvent(): void
    {
        // do something
    }
}