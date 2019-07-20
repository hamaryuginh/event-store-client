<?php

/**
 * This file is part of `prooph/event-store-client`.
 * (c) 2018-2019 Alexander Miertsch <kontakt@codeliner.ws>
 * (c) 2018-2019 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);
// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: ClientMessageDtos.proto

namespace Prooph\EventStoreClient\Messages\ClientMessages\PersistentSubscriptionNakEvents;

use UnexpectedValueException;

/**
 * Protobuf type <code>Prooph.EventStoreClient.Messages.ClientMessages.PersistentSubscriptionNakEvents.NakAction</code>
 */
class NakAction
{
    /**
     * Generated from protobuf enum <code>Unknown = 0;</code>
     */
    const Unknown = 0;
    /**
     * Generated from protobuf enum <code>Park = 1;</code>
     */
    const Park = 1;
    /**
     * Generated from protobuf enum <code>Retry = 2;</code>
     */
    const Retry = 2;
    /**
     * Generated from protobuf enum <code>Skip = 3;</code>
     */
    const Skip = 3;
    /**
     * Generated from protobuf enum <code>Stop = 4;</code>
     */
    const Stop = 4;

    private static $valueToName = [
        self::Unknown => 'Unknown',
        self::Park => 'Park',
        self::Retry => 'Retry',
        self::Skip => 'Skip',
        self::Stop => 'Stop',
    ];

    public static function name($value)
    {
        if (! isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(\sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }

        return self::$valueToName[$value];
    }

    public static function value($name)
    {
        $const = __CLASS__ . '::' . \strtoupper($name);
        if (! \defined($const)) {
            throw new UnexpectedValueException(\sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }

        return \constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(NakAction::class, \Prooph\EventStoreClient\Messages\ClientMessages\PersistentSubscriptionNakEvents_NakAction::class);
