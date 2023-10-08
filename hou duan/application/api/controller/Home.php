<?php

namespace app\api\controller;

use app\common\controller\Api;
use think\Db;

class Home extends Api
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';

    public function index()
    {
        $lotteryList = [];
        $user_id = input('user_id');
        for ($i = 0; $i < 7; $i++) {
            $row = Db::name('lottery')->where(['type' => $i])->order(['date' => 'desc'])->find();
            $subscription = Db::name('user_subscription')->where(['user_id' => $user_id, 'type' => $i, 'lottery_id' => 0])->find();
            $row['subscription'] = $subscription ? 1 : 0;
            $lotteryList[] = $row;
        }
        foreach ($lotteryList as $key => &$value) {
            $value['ball'] = json_decode($value['ball'], true);
        }
        $bannerList = Db::name('banner')->field(['image'])->order(['sort' => 'asc', 'id' => 'desc'])->select();
        foreach ($bannerList as $key => &$value) {
            $value['image'] = 'https://' . $_SERVER['SERVER_NAME'] . $value['image'];
        }
        $result = [
            'lotteryList' => $lotteryList,
            'message' => Db::name('config')->where(['name' => 'message'])->value('value'),
            'copyright' => Db::name('config')->where(['name' => 'copyright'])->value('value'),
            'interstitialAdUnitId' => Db::name('config')->where(['name' => 'interstitialAdUnitId'])->value('value'),
            'bannerAdUnitId' => Db::name('config')->where(['name' => 'indexBannerAdUnitId'])->value('value'),
            'subscriptionTemplateId' => Db::name('config')->where(['name' => 'subscriptionTemplateId'])->value('value'),
            'bannerList' => $bannerList
        ];
        $this->success('成功', $result);
    }

    public function getExoneration()
    {
        $result = Db::name('config')->where(['name' => 'exoneration'])->value('value');
        $this->success('成功', $result);
    }

    public function getList()
    {
        $type = input('type');
        $page = input('page', 1);
        $pagesize = 10;
        $limit = (($page - 1) * $pagesize) . ',' . $pagesize;
        $list = Db::name('lottery')->where(['type' => $type])->order(['date' => 'desc'])->limit($limit)->select();
        foreach ($list as $key => &$value) {
            $sales = round((double)$value['sales'] / 100000000, 2);
            $poolmoney = round((double)$value['poolmoney'] / 100000000, 2);
            $value['ball'] = json_decode($value['ball'], true);
            $value['prizegrades'] = json_decode($value['prizegrades'], true);
            $value['sales'] = $sales > 0 ? $sales . '亿' : 0;
            $value['poolmoney'] = $poolmoney > 0 ? $poolmoney . '亿' : 0;
           
            if($type==3||$type==2){
                 $number=implode("",$value["ball"]["red"]);
                 $value["calculateSum"]=$this->calculateSum($number);//和值
                 $value["calculateTail"]=$this->calculateTail($number);//和尾
                 $value["calculate012"]=$this->calculate012($number);//012路
                 $value["calculateSizeRatio"]=$this->calculateSizeRatio($number);//大小比
                 $value["calculateOddEvenRatio"]=$this->calculateOddEvenRatio($number);//奇偶比
                 $value["calculateSpan"]=$this->calculateSpan($number);//跨度
                 $value["calculateCombinationCount"]=$this->calculateCombinationCount($number);//组选情况
              
            }
        }
        
        
        $this->success('成功', $list);
    }
    
    public function gettrendList()
    {
        $type = input('type');
        $page = input('page', 1);
        $pagesize = 50;
        $limit = (($page - 1) * $pagesize) . ',' . $pagesize;
        $list = Db::name('lottery')->where(['type' => $type])->order(['date' => 'desc'])->limit($limit)->select();
        foreach ($list as $key => &$value) {
            $sales = round((double)$value['sales'] / 100000000, 2);
            $poolmoney = round((double)$value['poolmoney'] / 100000000, 2);
            $value['ball'] = json_decode($value['ball'], true);
            $value['prizegrades'] = json_decode($value['prizegrades'], true);
            $value['sales'] = $sales > 0 ? $sales . '亿' : 0;
            $value['poolmoney'] = $poolmoney > 0 ? $poolmoney . '亿' : 0;
            $value['code'] = substr($value['code'], -3);
            if($type==3||$type==2||$type==4){
                 $number=implode("",$value["ball"]["red"]);
                 $value["calculateSum"]=$this->calculateSum($number);//和值
                 $value["calculateTail"]=$this->calculateTail($number);//和尾
                 $value["calculate012"]=$this->calculate012($number);//012路
                 $value["calculateSizeRatio"]=$this->calculateSizeRatio($number);//大小比
                 $value["calculateOddEvenRatio"]=$this->calculateOddEvenRatio($number);//奇偶比
                 $value["calculateSpan"]=$this->calculateSpan($number);//跨度
                 $value["calculateCombinationCount"]=$this->calculateCombinationCount($number);//组选情况
              
            }
        }
        
        
        $this->success('成功', $list);
    }
    public function getappList()
    {
        $list[0]["appid"] = "wx5436583665a69a94";//小程序id
        $list[0]["appname"] = "彩票";
        $list[0]["src"] = "https://001.shanxi0357.cn/static/601695274098.png";

        $this->success('成功',$list);
    }

    public function getDetail()
    {
        $id = input('id');
        $row = Db::name('lottery')->where(['id' => $id])->find();
        $sales = round((double)$row['sales'] / 100000000, 2);
        $poolmoney = round((double)$row['poolmoney'] / 100000000, 2);
        $row['ball'] = json_decode($row['ball'], true);
        $row['prizegrades'] = json_decode($row['prizegrades'], true);
        $row['sales'] = $sales > 0 ? $sales . '亿' : 0;
        $row['poolmoney'] = $poolmoney > 0 ? $poolmoney . '亿' : 0;
        $row['bannerAdUnitId'] = Db::name('config')->where(['name' => 'detailBannerAdUnitId'])->value('value');
        $this->success('成功', $row);
    }
function calculateSum($number) {
    $sum = 0;
    for ($i = 0; $i < strlen($number); $i++) {
        $sum += (int)$number[$i];
    }
    return $sum;
}

// 计算和尾
function calculateTail($number) {
    $sum = 0;
    while ($number > 0) {
        $sum += $number % 10;
        $number = (int)($number / 10);
    }
    return $sum % 10;
}
function calculateCombinationCount($number) {
    $counts = array_count_values(str_split($number));
    $combinations = $this->factorial(strlen($number));

    foreach ($counts as $count) {
        if ($count > 1) {
            $combinations /= $this->factorial($count);
        }
    }

    return $combinations;
}

// 计算阶乘
function factorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * $this->factorial($n - 1);
    }
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
    $maxDigit = max(str_split($number));
    $countMax = 0;
    $countOther = 0;

    for ($i = 0; $i < strlen($number); $i++) {
        if ((int)$number[$i] == $maxDigit) {
            $countMax++;
        } else {
            $countOther++;
        }
    }

    return "1:" . $countOther;  // 修正大小比的逻辑
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

// 计算组选情况
// function calculateCombinationCount($number) {
//     $counts = array_count_values(str_split($number));
//     $combinations = $this->factorial(strlen($number));

//     foreach ($counts as $count) {
//         if ($count > 1) {
//             $combinations /= $this->factorial($count);
//         }
//     }

//     return $combinations;
// }

// 计算阶乘
// function factorial($n) {
//     if ($n <= 1) {
//         return 1;
//     } else {
//         return $n * $this->factorial($n - 1);
//     }
// }
}
