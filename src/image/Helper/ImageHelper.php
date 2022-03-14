<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Image\Helper;

use RuntimeException;
use SplFileObject;
use WBW\Library\Image\Factory\ImageFactory;
use WBW\Library\Image\Model\Image;
use WBW\Library\Image\Model\ImageInterface;

/**
 * Image helper.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Image\Helper
 */
class ImageHelper {

    /**
     * Encode an image into base 64.
     *
     * @param string|null $uri The URI.
     * @return string|null Returns the image encoded into base 64.
     */
    public static function base64Encode(?string $uri): ?string {

        if (null === $uri) {
            return null;
        }

        $data = "";

        $splFileObject = new SplFileObject($uri);
        while (false === $splFileObject->eof()) {
            $data .= $splFileObject->fgets();
        }

        return sprintf("data:%s;base64,%s", mime_content_type($uri), base64_encode($data));
    }

    /**
     * Resize.
     *
     * @param int $newWidth The new width.
     * @param int $newHeight The new height.
     * @param string $pathname The pathname.
     * @return bool Returns true in case of success, false otherwise.
     * @throws RuntimeException Throws a runtime exception if the re-sampled copy failed.
     */
    public static function resize(Image $image, int $newWidth, int $newHeight, string $pathname): bool {

        [$w, $h] = ImageFactory::newDimensions($image, $newWidth, $newHeight);

        $input  = ImageFactory::newInputStream($image);
        $output = ImageFactory::newOutputStream($image, $w, $h);
        if (null === $output) {
            throw new RuntimeException("Failed to create true color image");
        }

        $result = imagecopyresampled($output, $input, 0, 0, 0, 0, $w, $h, $image->getWidth(), $image->getHeight());
        if (false === $result) {
            throw new RuntimeException("Failed to copy re-sampled image");
        }

        return ImageHelper::saveOutputStream($image, $output, $pathname);
    }

    /**
     * Save an output stream.
     *
     * @param Image $image the image.
     * @param resource $outputStream The output stream.
     * @param string $pathname The pathname.
     * @return bool Returns true in case of success, false otherwise.
     */
    protected static function saveOutputStream(Image $image, $outputStream, string $pathname): bool {

        switch ($image->init()->getMimeType()) {

            case ImageInterface::MIME_TYPE_JPEG:
                return imagejpeg($outputStream, $pathname);

            case ImageInterface::MIME_TYPE_PNG:
                return imagepng($outputStream, $pathname);
        }

        return false;
    }
}
