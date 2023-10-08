<?php

// 定义函数计算和值
function calculateSum($number) {
    $sum = 0;
    for ($i = 0; $i < strlen($number); $i++) {
        $sum += (int)$number[$i];
    }
    return $sum;
}

// 定义函数计算和尾
function calculateTail($number) {
    return $number % 10;
}

// 定义函数计算012路
function calculate012($number) {
    $result = array(0, 0, 0); // 初始化012路数组
    for ($i = 0; $i < strlen($number); $i++) {
        $digit = (int)$number[$i] % 3;
        $result[$digit]++;
    }
    return $result;
}

// 定义函数计算大小比
function calculateSizeRatio($number) {
    $countEven = 0;
    $countOdd = 0;

    for ($i = 0; $i < strlen($number); $i++) {
        if ((int)$number[$i] % 2 === 0) {
            $countEven++;
        } else {
            $countOdd++;
        }
    }

    return $countOdd . ":" . $countEven;
}

// 定义函数计算奇偶比
function calculateOddEvenRatio($number) {
    $countOdd = 0;
    $countEven = 0;

    for ($i = 0; $i < strlen($number); $i++) {
        if ((int)$number[$i] % 2 === 0) {
            $countEven++;
        } else {
            $countOdd++;
        }
    }

    return $countOdd . ":" . $countEven;
}

// 定义函数计算跨度
function calculateSpan($number) {
    $maxDigit = max(str_split($number));
    $minDigit = min(str_split($number));
    return $maxDigit - $minDigit;
}

// 定义函数计算组选情况
function calculateCombinationCount($number) {
    // 对于组选，每个位置都有10种可能，排除原始号码，剩下9种可能
    return 9 * 9 * 9;
}

// 示例号码
$numbers = ["025", "039", "383"];

foreach ($numbers as $number) {
    echo "号码: " . $number . "\n";
    echo "和值: " . calculateSum($number) . "\n";
    echo "和尾: " . calculateTail($number) . "\n";
    echo "012路: " . implode(":", calculate012($number)) . "\n";
    echo "大小比: " . calculateSizeRatio($number) . "\n";
    echo "奇偶比: " . calculateOddEvenRatio($number) . "\n";
    echo "跨度: " . calculateSpan($number) . "\n";
    echo "组选情况: " . calculateCombinationCount($number) . " 种组合\n\n";
}
?>
