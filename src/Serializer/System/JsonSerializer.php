<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Common\Serializer\System;

use WBW\Library\Common\Model\System\CpuInterface;
use WBW\Library\Common\Model\System\HardDiskInterface;
use WBW\Library\Common\Model\System\MemoryInterface;
use WBW\Library\Common\Model\System\NetworkCardInterface;
use WBW\Library\Common\Model\System\NetworkInterface;
use WBW\Library\Common\Model\System\OperatingSystemInterface;
use WBW\Library\Common\Model\System\ProcessorInterface;
use WBW\Library\Common\Serializer\SerializerKeys;

/**
 * JSON serializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Common\Serializer\System
 */
class JsonSerializer {

    /**
     * Serialize a current processor usage.
     *
     * @param CpuInterface $model The model.
     * @return array<string,mixed> Returns the serialized model.
     */
    public static function serializeCpu(CpuInterface $model): array {

        return [
            SerializerKeys::US => $model->getUs(),
            SerializerKeys::SY => $model->getSy(),
            SerializerKeys::NI => $model->getNi(),
            SerializerKeys::ID => $model->getId(),
            SerializerKeys::WA => $model->getWa(),
            SerializerKeys::HI => $model->getHi(),
            SerializerKeys::SI => $model->getSi(),
            SerializerKeys::ST => $model->getSt(),
        ];
    }

    /**
     * Serialize a hard disk.
     *
     * @param HardDiskInterface $model The model.
     * @return array<string,mixed> Returns the serialized model.
     */
    public static function serializeHardDisk(HardDiskInterface $model): array {

        return [
            SerializerKeys::AVAILABLE   => $model->getAvailable(),
            SerializerKeys::FILE_SYSTEM => $model->getFileSystem(),
            SerializerKeys::MOUNTED_ON  => $model->getMountedOn(),
            SerializerKeys::NAME        => $model->getName(),
            SerializerKeys::TYPE        => $model->getType(),
            SerializerKeys::USED        => $model->getUsed(),
            SerializerKeys::USE_PERCENT => $model->getUsePercent(),
        ];
    }

    /**
     * Serialize a memory.
     *
     * @param MemoryInterface $model The model.
     * @return array<string,mixed> Returns the serialized model.
     */
    public static function serializeMemory(MemoryInterface $model): array {
        return $model->getValues();
    }

    /**
     * Serialize a network.
     *
     * @param NetworkInterface $model The model.
     * @return array<string,mixed> Returns the serialized model.
     */
    public static function serializeNetwork(NetworkInterface $model): array {

        return [
            SerializerKeys::DNS      => $model->getDns(),
            SerializerKeys::GATEWAY  => $model->getGateway(),
            SerializerKeys::HOSTNAME => $model->getHostname(),
        ];
    }

    /**
     * Serialize a network card.
     *
     * @param NetworkCardInterface $model The model.
     * @return array<string,mixed> Returns the serialized model.
     */
    public static function serializeNetworkCard(NetworkCardInterface $model): array {

        return [
            SerializerKeys::DUPLEX => $model->getDuplex(),
            SerializerKeys::IPV4   => $model->getIpv4(),
            SerializerKeys::IPV6   => $model->getIpv6(),
            SerializerKeys::MAC    => $model->getMac(),
            SerializerKeys::NAME   => $model->getName(),
            SerializerKeys::SPEED  => $model->getSpeed(),
            SerializerKeys::STATUS => $model->getStatus(),
        ];
    }

    /**
     * Serialize an operating system.
     *
     * @param OperatingSystemInterface $model The model.
     * @return array<string,mixed> Returns the serialized model.
     */
    public static function serializeOperatingSystem(OperatingSystemInterface $model): array {

        return [
            SerializerKeys::CODENAME    => $model->getCodename(),
            SerializerKeys::DESCRIPTION => $model->getDescription(),
            SerializerKeys::ID          => $model->getId(),
            SerializerKeys::RELEASE     => $model->getRelease(),
        ];
    }

    /**
     * Serialize a processor.
     *
     * @param ProcessorInterface $model The model.
     * @return array<string,mixed> Returns the serialized model.
     */
    public static function serializeProcessor(ProcessorInterface $model): array {
        return $model->getValues();
    }
}
