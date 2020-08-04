<?php

namespace MojtabaaHN\PersianNumberToWords;

class Dictionary
{
    protected string $zero = 'صفر';

    protected string $negative = 'منفی';

    protected string $words_separator = " و ";

    protected string $chunk_separator = " و ";

    protected string $triplet_and_suffix_separator = " ";

    protected string $negative_and_words_separator = " ";

    protected array $units = [
        1 => 'یک',
        2 => 'دو',
        3 => 'سه',
        4 => 'چهار',
        5 => 'پنج',
        6 => 'شش',
        7 => 'هفت',
        8 => 'هشت',
        9 => 'نه',
        10 => 'ده',
        11 => 'یازده',
        12 => 'دوازده',
        13 => 'سیزده',
        14 => 'چهارده',
        15 => 'پانزده',
        16 => 'شانزده',
        17 => 'هفده',
        18 => 'هجده',
        19 => 'نوزده',
        20 => 'بیست',
        30 => 'سی',
        40 => 'چهل',
        50 => 'پنجاه',
        60 => 'شصت',
        70 => 'هفتاد',
        80 => 'هشتاد',
        90 => 'نود',
        100 => 'صد',
        200 => 'دویست',
        300 => 'سیصد',
        400 => 'چهارصد',
        500 => 'پانصد',
        600 => 'ششصد',
        700 => 'هفتصد',
        800 => 'هشتصد',
        900 => 'نهصد'
    ];

    protected array $suffixes = [
        3 => 'هزار',
        6 => 'میلیون',
        9 => 'میلیارد',
        12 => 'بیلیون',
        15 => 'بیلیارد',
        18 => 'تریلیون',
        21 => 'تریلیارد',
        24 => 'کوآدریلیون',
        27 => 'کادریلیارد',
        30 => 'کوینتیلیون',
        33 => 'کوانتینیارد',
        36 => 'سکستیلیون',
        39 => 'سکستیلیارد',
        42 => 'سپتیلیون',
        45 => 'سپتیلیارد',
        48 => 'اکتیلیون',
        51 => 'اکتیلیارد',
        54 => 'نانیلیون',
        57 => 'نانیلیارد',
        60 => 'دسیلیون',
        63 => 'دسیلیارد',
    ];

    public function zero(): string
    {
        return $this->zero;
    }

    public function setZero(string $zero): Dictionary
    {
        $this->zero = $zero;
        return $this;
    }

    public function negative(): string
    {
        return $this->negative;
    }

    public function setNegative(string $negative): Dictionary
    {
        $this->negative = $negative;
        return $this;
    }

    public function wordsSeparator(): string
    {
        return $this->words_separator;
    }

    public function setWordsSeparator(string $words_separator): Dictionary
    {
        $this->words_separator = $words_separator;
        return $this;
    }

    public function chunkSeparator(): string
    {
        return $this->chunk_separator;
    }

    public function setChunkSeparator(string $chunk_separator): Dictionary
    {
        $this->chunk_separator = $chunk_separator;
        return $this;
    }

    public function tripletAndSuffixSeparator(): string
    {
        return $this->triplet_and_suffix_separator;
    }

    public function setTripletAndSuffixSeparator(string $triplet_and_suffix_separator): Dictionary
    {
        $this->triplet_and_suffix_separator = $triplet_and_suffix_separator;
        return $this;
    }

    public function negativeAndWordsSeparator(): string
    {
        return $this->negative_and_words_separator;
    }

    public function setNegativeAndWordsSeparator(string $negative_and_words_separator): Dictionary
    {
        $this->negative_and_words_separator = $negative_and_words_separator;
        return $this;
    }

    public function units()
    {
        return $this->units;
    }

    public function unit(int $unit)
    {
        return $this->units[$unit];
    }

    public function setUnits(array $units): Dictionary
    {
        $this->units = $units;
        return $this;
    }

    public function suffixes()
    {
        return $this->suffixes;
    }

    public function suffix(string $level)
    {
        return $this->suffixes[$level];
    }

    public function setSuffixes($suffixes): Dictionary
    {
        $this->suffixes = $suffixes;
        return $this;
    }

}