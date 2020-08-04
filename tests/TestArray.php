<?php
namespace MojtabaaHN\PersianNumberToWords\Tests;

class TestArray{
    public CONST TESTS = [
        [-3, 'منفی سه'],
        [-9539, 'منفی نه هزار و پانصد و سی و نه'],
        [0, 'صفر'],
        [1, 'یک'],
        [3, 'سه'],
        [8, 'هشت'],
        [9, 'نه'],
        [10, 'ده'],
        [11, 'یازده'],
        [12, 'دوازده'],
        [16, 'شانزده'],
        [19, 'نوزده'],
        [20, 'بیست'],
        [21, 'بیست و یک'],
        [25, 'بیست و پنج'],
        [26, 'بیست و شش'],
        [30, 'سی'],
        [31, 'سی و یک'],
        [40, 'چهل'],
        [43, 'چهل و سه'],
        [50, 'پنجاه'],
        [55, 'پنجاه و پنج'],
        [58, 'پنجاه و هشت'],
        [60, 'شصت'],
        [67, 'شصت و هفت'],
        [70, 'هفتاد'],
        [79, 'هفتاد و نه'],
        [80, 'هشتاد'],
        [90, 'نود'],
        [99, 'نود و نه'],
        [100, 'صد'],
        [101, 'صد و یک'],
        [102, 'صد و دو'],
        [111, 'صد و یازده'],
        [113, 'صد و سیزده'],
        [120, 'صد و بیست'],
        [121, 'صد و بیست و یک'],
        [199, 'صد و نود و نه'],
        [203, 'دویست و سه'],
        [229, 'دویست و بیست و نه'],
        [287, 'دویست و هشتاد و هفت'],
        [300, 'سیصد'],
        [356, 'سیصد و پنجاه و شش'],
        [410, 'چهارصد و ده'],
        [434, 'چهارصد و سی و چهار'],
        [500, 'پانصد'],
        [578, 'پانصد و هفتاد و هشت'],
        [660, 'ششصد و شصت'],
        [666, 'ششصد و شصت و شش'],
        [689, 'ششصد و هشتاد و نه'],
        [729, 'هفتصد و بیست و نه'],
        [894, 'هشتصد و نود و چهار'],
        [900, 'نهصد'],
        [909, 'نهصد و نه'],
        [919, 'نهصد و نوزده'],
        [990, 'نهصد و نود'],
        [999, 'نهصد و نود و نه'],
        [1000, 'یک هزار'],
        [1001, 'یک هزار و یک'],
        [1010, 'یک هزار و ده'],
        [1015, 'یک هزار و پانزده'],
        [1097, 'یک هزار و نود و هفت'],
        [1100, 'یک هزار و صد'],
        [1104, 'یک هزار و صد و چهار'],
        [1111, 'یک هزار و صد و یازده'],
        [1243, 'یک هزار و دویست و چهل و سه'],
        [2000, 'دو هزار'],
        [2385, 'دو هزار و سیصد و هشتاد و پنج'],
        [3766, 'سه هزار و هفتصد و شصت و شش'],
        [4000, 'چهار هزار'],
        [4196, 'چهار هزار و صد و نود و شش'],
        [4538, 'چهار هزار و پانصد و سی و هشت'],
        [5000, 'پنج هزار'],
        [5020, 'پنج هزار و بیست'],
        [5846, 'پنج هزار و هشتصد و چهل و شش'],
        [6459, 'شش هزار و چهارصد و پنجاه و نه'],
        [7232, 'هفت هزار و دویست و سی و دو'],
        [8569, 'هشت هزار و پانصد و شصت و نه'],
        [9539, 'نه هزار و پانصد و سی و نه'],
        [10000, 'ده هزار'],
        [11000, 'یازده هزار'],
        [11001, 'یازده هزار و یک'],
        [21000, 'بیست و یک هزار'],
        [21512, 'بیست و یک هزار و پانصد و دوازده'],
        [90000, 'نود هزار'],
        [92100, 'نود و دو هزار و صد'],
        [212112, 'دویست و دوازده هزار و صد و دوازده'],
        [720018, 'هفتصد و بیست هزار و هجده'],
        [999000, 'نهصد و نود و نه هزار'],
        [999999, 'نهصد و نود و نه هزار و نهصد و نود و نه'],
        [1000000, 'یک میلیون'],
        [1001001, 'یک میلیون و یک هزار و یک'],
        [2000000, 'دو میلیون'],
        [3248518, 'سه میلیون و دویست و چهل و هشت هزار و پانصد و هجده'],
        [4000000, 'چهار میلیون'],
        [5000000, 'پنج میلیون'],
        [999000000, 'نهصد و نود و نه میلیون'],
        [999000999, 'نهصد و نود و نه میلیون و نهصد و نود و نه'],
        [999999000, 'نهصد و نود و نه میلیون و نهصد و نود و نه هزار'],
        [999999999, 'نهصد و نود و نه میلیون و نهصد و نود و نه هزار و نهصد و نود و نه'],
        [1174315110, 'یک میلیارد و صد و هفتاد و چهار میلیون و سیصد و پانزده هزار و صد و ده'],
        [1174315119, 'یک میلیارد و صد و هفتاد و چهار میلیون و سیصد و پانزده هزار و صد و نوزده'],
        [1800000006, 'یک میلیارد و هشتصد میلیون و شش'],
        [15174315119, 'پانزده میلیارد و صد و هفتاد و چهار میلیون و سیصد و پانزده هزار و صد و نوزده'],
        [35174315119, 'سی و پنج میلیارد و صد و هفتاد و چهار میلیون و سیصد و پانزده هزار و صد و نوزده'],
        [935174315119, 'نهصد و سی و پنج میلیارد و صد و هفتاد و چهار میلیون و سیصد و پانزده هزار و صد و نوزده'],
        [2935174315119, 'دو بیلیون و نهصد و سی و پنج میلیارد و صد و هفتاد و چهار میلیون و سیصد و پانزده هزار و صد و نوزده'],
    ];
}