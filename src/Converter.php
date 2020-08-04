<?php


namespace MojtabaaHN\PersianNumberToWords;


class Converter
{
    private Dictionary $dictionary;

    public function __construct(Dictionary $dictionary)
    {
        $this->dictionary = $dictionary;
    }

    protected bool $isNegative = false;

    public function convert(int $number, bool $initial = true)
    {
        if ($number === 0 && $initial) {
            return $this->dictionary->zero();
        }

        $number = $this->setNegativeFlagAndGetAbsolute($number);

        list($chunk, $chunkLevel, $remainder) = $this->splitLargestChunk($number);

        $convertedRemainder = $this->convertRemainder($remainder);

        $convertedTriplet = $this->convertTriplet($chunk, $chunkLevel);

        $convertedNumber = $convertedTriplet . $convertedRemainder;

        return $this->applySign($convertedNumber, $initial);
    }

    protected function setNegativeFlagAndGetAbsolute(int $number)
    {
        if ($number < 0) {
            $this->isNegative = true;
        }
        return abs($number);
    }

    protected function splitLargestChunk(int $number)
    {
        $stringNumber = (string)$number;
        $length = strlen($stringNumber);

        $chunkIndex = $length % 3;
        $chunkIndex = $chunkIndex !== 0 ? $chunkIndex : 3;

        $chunkLevel = $length - $chunkIndex;
        $chunk = substr($stringNumber, 0, $chunkIndex);
        $remainder = substr($stringNumber, $chunkIndex);

        return [$chunk, $chunkLevel, $remainder];
    }

    public function convertRemainder(string $remainder): string
    {
        if ($remainder === '') {
            return '';
        }

        $convertedRemainder = $this->convert((int)$remainder, false);

        if ($convertedRemainder !== '') {
            $convertedRemainder = $this->dictionary->chunkSeparator() . $convertedRemainder;
        }

        return $convertedRemainder;
    }

    protected function applySign(string $convertedNumber, bool $isInitial): string
    {
        if ($this->isNegative && $isInitial) {
            return $this->dictionary->negative() . $this->dictionary->negativeAndWordsSeparator() . $convertedNumber;
        }

        return $convertedNumber;
    }

    protected function convertTriplet(string $chunk, $chunkLevel)
    {
        $result = [];

        $triplet = (int)$chunk;

        $units = $triplet % 10;
        $tens = (int)($triplet / 10) % 10;
        $hundreds = (int)($triplet / 100) % 10;

        if ($hundreds !== 0) {
            $result[] = $this->dictionary->unit($hundreds * 100);
        }

        if ($tens === 1) {
            $result[] = $this->dictionary->unit(10 + $units);
        } else {
            if ($tens !== 0) {
                $result[] = $this->dictionary->unit($tens * 10);
            }
            if ($units !== 0) {
                $result[] = $this->dictionary->unit($units);
            }
        }

        $result = implode($this->dictionary->chunkSeparator(), $result);

        if ($chunkLevel !== 0) {
            $result .= $this->dictionary->tripletAndSuffixSeparator() . $this->dictionary->suffix($chunkLevel);
        }

        return $result;
    }
}