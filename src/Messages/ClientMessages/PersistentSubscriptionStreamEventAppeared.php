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

namespace Prooph\EventStoreClient\Messages\ClientMessages;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Prooph.EventStoreClient.Messages.ClientMessages.PersistentSubscriptionStreamEventAppeared</code>
 */
class PersistentSubscriptionStreamEventAppeared extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Prooph.EventStoreClient.Messages.ClientMessages.ResolvedIndexedEvent event = 1;</code>
     */
    private $event = null;
    /**
     * Generated from protobuf field <code>int32 retryCount = 2;</code>
     */
    private $retryCount = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Prooph\EventStoreClient\Messages\ClientMessages\ResolvedIndexedEvent $event
     *     @type int $retryCount
     * }
     */
    public function __construct($data = null)
    {
        \GPBMetadata\ClientMessageDtos::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Prooph.EventStoreClient.Messages.ClientMessages.ResolvedIndexedEvent event = 1;</code>
     * @return \Prooph\EventStoreClient\Messages\ClientMessages\ResolvedIndexedEvent
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Generated from protobuf field <code>.Prooph.EventStoreClient.Messages.ClientMessages.ResolvedIndexedEvent event = 1;</code>
     * @param \Prooph\EventStoreClient\Messages\ClientMessages\ResolvedIndexedEvent $var
     * @return $this
     */
    public function setEvent($var)
    {
        GPBUtil::checkMessage($var, \Prooph\EventStoreClient\Messages\ClientMessages\ResolvedIndexedEvent::class);
        $this->event = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 retryCount = 2;</code>
     * @return int
     */
    public function getRetryCount()
    {
        return $this->retryCount;
    }

    /**
     * Generated from protobuf field <code>int32 retryCount = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRetryCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->retryCount = $var;

        return $this;
    }
}
