<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\SkiData\Parser;

use WBW\Library\Core\Argument\Exception\IntegerArgumentException;
use WBW\Library\Core\Argument\Helper\IntegerHelper;
use WBW\Library\Core\ThirdParty\SkiData\Exception\TooLongDataException;
use WBW\Library\Core\ThirdParty\SkiData\Model\StartRecordFormat;

/**
 * Start record format parser.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\SkiData\Parser
 */
class StartRecordFormatParser extends AbstractParser {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Parse a start record format entity.
     *
     * @param StartRecordFormat $entity The start record format.
     * @return string Returns the parsed start record format.
     * @throws TooLongDataException Throws a too long data exception if a data is too long.
     */
    public function parseEntity(StartRecordFormat $entity) {

        $output = [
            $this->encodeInteger($entity->getVersionRecordStructure(), 6),
            $this->encodeInteger($entity->getFacilityNumber(), 7),
            $this->encodeDate($entity->getDateFile()),
            $this->encodeInteger($entity->getNumberRecords(), 5),
            $this->encodeString($entity->getCurrency(), 6),
        ];

        return implode(";", $output);
    }

    /**
     * Parse a line.
     *
     * @param string $line The line.
     * @return StartRecordFormat Returns a start record format entity.
     * @throws IntegerArgumentException Throws an integer argument exception.
     */
    public function parseLine($line) {

        $data = explode(";", $line);

        $i = -1;

        $model = new StartRecordFormat();
        $model->setVersionRecordStructure(IntegerHelper::parseString($data[++$i]));
        $model->setFacilityNumber(IntegerHelper::parseString($data[++$i]));
        $model->setDateFile($this->decodeDate($data[++$i]));
        $model->setNumberRecords(IntegerHelper::parseString($data[++$i]));
        $model->setCurrency($this->decodeString($data[++$i]));

        return $model;
    }
}
