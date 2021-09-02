<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Types\Helper;

use Transliterator;
use WBW\Library\Types\Exception\StringArgumentException;

/**
 * String helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Types\Helper
 */
class StringHelper {

    /**
     * Canonicalize.
     *
     * @param string|null $str The string.
     * @return string|null Returns the canonical string.
     */
    public static function canonicalize(?string $str): ?string {

        if (null === $str) {
            return null;
        }

        $encoding = mb_detect_encoding($str);

        return mb_convert_case($str, MB_CASE_LOWER, false !== $encoding ? $encoding : null);
    }

    /**
     * Create a DOM node.
     *
     * @param string $name The name.
     * @param string|null $value The value.
     * @param array $attributes The attributes.
     * @param bool $shortTag Short tag ?
     * @return string Returns the DOM node.
     */
    public static function domNode(string $name, ?string $value, array $attributes = [], bool $shortTag = false): string {

        $template = "<%name%%attributes%>%text%</%name%>";

        $attr = trim(static::parseArray($attributes));
        if (0 < strlen($attr)) {
            $attr = " " . $attr;
        }

        $text = null !== $value ? trim($value, " ") : "";
        if ("" === $text && true === $shortTag) {
            $template = str_replace(">%text%</%name%>", "/>", $template);
        }

        return str_replace(["%name%", "%attributes%", "%text%"], [trim($name), $attr, $text], $template);
    }

    /**
     * Extract upper case letters.
     *
     * @param string $str The string.
     * @param bool $lower Lower case ?
     * @return string Returns the extracted upper case letters.
     */
    public static function extractUpperCase(string $str, bool $lower = false): string {

        preg_match_all("/[A-Z]/", $str, $matches);

        $output = implode("", $matches[0]);

        return true === $lower ? strtolower($output) : $output;
    }

    /**
     * File size.
     *
     * @param int|null $size The size.
     * @param int $decimals The decimals.
     * @return string Returns the file size.
     */
    public static function fileSize(?int $size, int $decimals = 2): string {

        if (null === $size || $size < 0 || $decimals < 0) {
            return "";
        }

        $format = "%.{$decimals}f";
        $sizes  = [
            "Tio" => pow(1024, 4),
            "Gio" => pow(1024, 3),
            "Mio" => pow(1024, 2),
            "Kio" => pow(1024, 1),
        ];

        foreach ($sizes as $k => $v) {

            if ($v <= $size) {
                return sprintf("$format $k", $size / $v);
            }
        }

        return "";
    }

    /**
     * Determines if a value is a string.
     *
     * @param mixed $value The value.
     * @return void
     * @throws StringArgumentException Throws a String argument exception if the value is not of expected type.
     */
    public static function isString($value): void {
        if (false === is_string($value)) {
            throw new StringArgumentException($value);
        }
    }

    /**
     * Parse an array.
     *
     * @param array $values The array.
     * @return string Returns the array converted into key="value".
     */
    public static function parseArray(array $values): string {

        $output = [];

        foreach ($values as $key => $value) {

            if (null === $value) {
                continue;
            }

            if (true === is_array($value)) {
                $buffer = trim(implode(" ", $value));
            } else {
                $buffer = trim($value);
            }

            if ("" !== $buffer) {
                $output[] = $key . '="' . preg_replace("/\s+/", " ", $buffer) . '"';
            }
        }

        return implode(" ", $output);
    }

    /**
     * Parse a boolean.
     *
     * @param bool|null $value The boolean value.
     * @return string Returns "true" in case of success, "false" otherwise.
     */
    public static function parseBoolean(?bool $value): string {
        return true === $value ? "true" : "false";
    }

    /**
     * Remove accents.
     *
     * @param string $str The string.
     * @return string Returns the string without accents.
     */
    public static function removeAccents(string $str): string {
        return Transliterator::create("NFD; [:Nonspacing Mark:] Remove; NFC;")->transliterate($str);
    }

    /**
     * Convert a string into human readable.
     *
     * @param string $str The string.
     * @return string Returns the human readable string.
     */
    public static function toHumanReadable(string $str): string {

        $callback = function($m) {
            $join = implode("", [" ", $m[1], $m[2]]);
            return strtolower($join);
        };

        $pattern = "/(([a-z])([A-Z]))|(([A-Z])([A-Z][a-z]))/";
        $replace = "$2$5%s$3$6";

        $explode = preg_replace($pattern, sprintf($replace, " "), $str);

        return preg_replace_callback("/\ ([A-Z])([a-z])/", $callback, $explode);
    }

    /**
     * Convert a string into lower camel case.
     *
     * @param string $str The string.
     * @return string Returns the lower camel case string.
     */
    public static function toLowerCamelCase(string $str): string {

        $callback = function($m) {
            return count($m) < 5 ? strtolower($m[2]) . $m[3] : strtolower($m[5]) . $m[6];
        };

        return preg_replace_callback("/(([A-Z]{1,})([A-Z][a-z].{1,}))|(([A-Z]{1})([a-z].{1,}))/", $callback, $str);
    }

    /**
     * Convert a string into snake case.
     *
     * @param string $str The string.
     * @param string $sep The separator.
     * @return string Returns the snake case string.
     */
    public static function toSnakeCase(string $str, string $sep = "_"): string {

        $output = static::toHumanReadable($str);
        $join   = str_replace(" ", $sep, $output);

        return strtolower($join);
    }

    /**
     * Convert a string into upper camel case.
     *
     * @param string $str The string.
     * @return string Returns the upper camel case string.
     */
    public static function toUpperCamelCase(string $str): string {

        $output = [
            strtoupper(substr($str, 0, 1)),
            substr($str, 1),
        ];

        return implode("", $output);
    }
}
