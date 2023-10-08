<?php

namespace app\api\controller;

use app\common\controller\Api;
use QL\QueryList;
use think\Db;
use think\Exception;
use WeChat\Exceptions\InvalidResponseException;

class Collection extends Api
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';

    public function index()
    {
        //  $this->getWelfareLotteryList('3d', 2, 1, 1);
        //  return;
        $this->getWelfareLotteryList('ssq', 0, 1, 1);
        $this->getWelfareLotteryList('3d', 2, 1, 1);
        $this->getWelfareLotteryList('qlc', 6, 1, 1);
        $this->getSportsLotteryList('85', 1, 1, 1);
        $this->getSportsLotteryList('35', 3, 1, 1);
        $this->getSportsLotteryList('350133', 4, 1, 1);
        $this->getSportsLotteryList('04', 5, 1, 1);
        try {
            for ($i = 0; $i < 7; $i++) {
                $row = Db::name('lottery')->where(['type' => $i])->order(['date' => 'desc'])->find();
                $this->push($row);
            }
        } catch (InvalidResponseException $exception) {
            $this->error($exception->getMessage(), []);
        }
        $this->success('采集成功', []);
    }

    public function push($row)
    {
        $subscriptionList = Db::name('user_subscription')->where(['type' => $row['type'], 'lottery_id' => 0])->select();

        foreach ($subscriptionList as $key => $value) {
            $user = Db::name('user')->where(['id' => $value['user_id']])->find();
            $name = '';
            switch ($row['type']) {
                case 0:
                    $name = '双色球';
                    break;
                case 1:
                    $name = '大乐透';
                    break;
                case 2:
                    $name = '3D';
                    break;
                case 3:
                    $name = '排列3';
                    break;
                case 4:
                    $name = '排列5';
                    break;
                case 5:
                    $name = '七星彩';
                    break;
                case 6:
                    $name = '七乐彩';
                    break;
            }
            $ball = json_decode($row['ball'], true);
            $config = [
                'appid' => Db::name('config')->where(['name' => 'appid'])->value('value'),
                'appsecret' => Db::name('config')->where(['name' => 'appsecret'])->value('value')
            ];
            $wechat = new \WeMini\Newtmpl($config);
            $data = [
                'date5' => [
                    'value' => $row['date']
                ],
                'character_string24' => [
                    'value' => implode(',', $ball['red']) . (count($ball['blue']) > 0 ? '+' . implode(',', $ball['blue']) : '')
                ],
                'thing22' => [
                    'value' => '一等奖'
                ],
                'thing6' => [
                    'value' => '第' . $row['code'] . '期'
                ],
                'thing18' => [
                    'value' => $name . ' - 中奖名单已公布'
                ]
            ];
            if ($user) {
            $wechat->send([
                'touser' => $user['openid'],
                'template_id' => 'WMPy3f9D_XnoyfIjkmdMjZWnviegDKQ0765_OYDQnsg',
                'data' => $data
            ]);
            }
            Db::name('user_subscription')->where(['id' => $value['id']])->update([
                'lottery_id' => $row['id']
            ]);
        }
    }

    /**
     * 双色球
     */
    public function getSsq()
    {
        Db::name('lottery')->where(['type' => 0, 'sales' => '_', 'poolmoney' => '_'])->delete();
        $ql = new QueryList();
        $result = $ql->get('http://www.cwl.gov.cn/cwl_admin/front/cwlkj/search/kjxx/findDrawNotice?name=ssq&issueCount=&issueStart=&issueEnd=&dayStart=&dayEnd=&pageNo=1&pageSize=30&week=&systemType=PC')->getHtml();
        $result = json_decode($result, true);
        foreach ($result['result'] as $key => $value) {
            $row = Db::name('lottery')->where(['type' => 0, 'code' => $value['code']])->value('id');
            if ($row) continue;
            $value['date'] = preg_replace('/\(.*?\)/', '', $value['date']);
            $ball = [
                'red' => explode(',', $value['red']),
                'blue' => explode(',', $value['blue'])
            ];
            $prizegrades = $value['prizegrades'];
            if (count($prizegrades) > 0) {
                $data = [
                    'type' => 0,
                    'sales' => $value['sales'],
                    'code' => $value['code'],
                    'date' => $value['date'],
                    'week' => $value['week'],
                    'poolmoney' => $value['poolmoney'],
                    'prizegrades' => json_encode($value['prizegrades']),
                    'ball' => json_encode($ball)
                ];
            }
            Db::name('lottery')->insert($data);
        }
    }

    /**
     * 大乐透
     */
    public function getDlt()
    {
        $ql = new QueryList();
        $result = $ql->get('https://webapi.sporttery.cn/gateway/lottery/getHistoryPageListV1.qry?gameNo=85&provinceId=0&pageSize=30&isVerify=1&pageNo=1')->getHtml();
        $result = json_decode($result, true);
        foreach ($result['value']['list'] as $key => $value) {
            $row = Db::name('lottery')->where(['type' => 1, 'code' => $value['lotteryDrawNum']])->value('id');
            if ($row) continue;
            $weekarray = ['日', '一', '二', '三', '四', '五', '六'];
            $lotteryDrawResult = explode(' ', $value['lotteryDrawResult']);
            $ball = [
                'red' => [$lotteryDrawResult[0], $lotteryDrawResult[1], $lotteryDrawResult[2], $lotteryDrawResult[3], $lotteryDrawResult[4]],
                'blue' => [$lotteryDrawResult[5], $lotteryDrawResult[6]]
            ];
            $prizeLevelList = $value['prizeLevelList'];
            if (count($prizeLevelList) > 0) {
                $data = [
                    'type' => 1,
                    'sales' => str_replace(',', '', $value['totalSaleAmount']),
                    'code' => $value['lotteryDrawNum'],
                    'date' => $value['lotteryDrawTime'],
                    'week' => $weekarray[date('w', strtotime($value['lotteryDrawTime']))],
                    'poolmoney' => str_replace(',', '', $value['poolBalanceAfterdraw']),
                    'prizegrades' => json_encode($value['prizeLevelList']),
                    'ball' => json_encode($ball)
                ];
                Db::name('lottery')->insert($data);
            }
        }
    }

    /**
     * 3D
     */
    public function get3D()
    {
        $ql = new QueryList();
        $result = $ql->get('http://www.cwl.gov.cn/cwl_admin/front/cwlkj/search/kjxx/findDrawNotice?name=3d&issueCount=&issueStart=&issueEnd=&dayStart=&dayEnd=&pageNo=1&pageSize=30&week=&systemType=PC')->getHtml();
        $result = json_decode($result, true);
        foreach ($result['result'] as $key => $value) {
            $row = Db::name('lottery')->where(['type' => 2, 'code' => $value['code']])->value('id');
            if ($row) continue;
            $value['date'] = preg_replace('/\(.*?\)/', '', $value['date']);
            $ball = [
                'red' => explode(',', $value['red']),
                'blue' => explode(',', $value['blue'])
            ];
            $data = [
                'type' => 2,
                'sales' => $value['sales'],
                'code' => $value['code'],
                'date' => $value['date'],
                'week' => $value['week'],
                'poolmoney' => $value['poolmoney'],
                'prizegrades' => json_encode($value['prizegrades']),
                'ball' => json_encode($ball)
            ];
            Db::name('lottery')->insert($data);
        }
    }

    /**
     * 排列3
     */
    public function getPl3()
    {
        $ql = new QueryList();
        $result = $ql->get('https://webapi.sporttery.cn/gateway/lottery/getHistoryPageListV1.qry?gameNo=35&provinceId=0&pageSize=30&isVerify=1&pageNo=1')->getHtml();
        $result = json_decode($result, true);
        foreach ($result['value']['list'] as $key => $value) {
            $row = Db::name('lottery')->where(['type' => 3, 'code' => $value['lotteryDrawNum']])->value('id');
            if ($row) continue;
            $weekarray = ['日', '一', '二', '三', '四', '五', '六'];
            $lotteryDrawResult = explode(' ', $value['lotteryDrawResult']);
            $ball = [
                'red' => [$lotteryDrawResult[0], $lotteryDrawResult[1], $lotteryDrawResult[2]],
                'blue' => []
            ];
            $data = [
                'type' => 3,
                'sales' => str_replace(',', '', $value['totalSaleAmount']),
                'code' => $value['lotteryDrawNum'],
                'date' => $value['lotteryDrawTime'],
                'week' => $weekarray[date('w', strtotime($value['lotteryDrawTime']))],
                'poolmoney' => $value['poolBalanceAfterdraw'],
                'prizegrades' => json_encode($value['prizeLevelList']),
                'ball' => json_encode($ball)
            ];
            Db::name('lottery')->insert($data);
        }
    }

    /**
     * 排列5
     */
    public function getPl5()
    {
        $ql = new QueryList();
        $result = $ql->get('https://webapi.sporttery.cn/gateway/lottery/getHistoryPageListV1.qry?gameNo=350133&provinceId=0&pageSize=30&isVerify=1&pageNo=1')->getHtml();
        $result = json_decode($result, true);
        foreach ($result['value']['list'] as $key => $value) {
            $row = Db::name('lottery')->where(['type' => 4, 'code' => $value['lotteryDrawNum']])->value('id');
            if ($row) continue;
            $weekarray = ['日', '一', '二', '三', '四', '五', '六'];
            $lotteryDrawResult = explode(' ', $value['lotteryDrawResult']);
            $ball = [
                'red' => [$lotteryDrawResult[0], $lotteryDrawResult[1], $lotteryDrawResult[2], $lotteryDrawResult[3], $lotteryDrawResult[4]],
                'blue' => []
            ];
            $data = [
                'type' => 4,
                'sales' => str_replace(',', '', $value['totalSaleAmount']),
                'code' => $value['lotteryDrawNum'],
                'date' => $value['lotteryDrawTime'],
                'week' => $weekarray[date('w', strtotime($value['lotteryDrawTime']))],
                'poolmoney' => $value['poolBalanceAfterdraw'],
                'prizegrades' => json_encode($value['prizeLevelList']),
                'ball' => json_encode($ball)
            ];
            Db::name('lottery')->insert($data);
        }
    }

    /**
     * 七星彩
     */
    public function getQxc()
    {
        $ql = new QueryList();
        $result = $ql->get('https://webapi.sporttery.cn/gateway/lottery/getHistoryPageListV1.qry?gameNo=04&provinceId=0&pageSize=30&isVerify=1&pageNo=1')->getHtml();
        $result = json_decode($result, true);
        foreach ($result['value']['list'] as $key => $value) {
            $row = Db::name('lottery')->where(['type' => 5, 'code' => $value['lotteryDrawNum']])->value('id');
            if ($row) continue;
            $weekarray = ['日', '一', '二', '三', '四', '五', '六'];
            $lotteryDrawResult = explode(' ', $value['lotteryDrawResult']);
            $ball = [
                'red' => [$lotteryDrawResult[0], $lotteryDrawResult[1], $lotteryDrawResult[2], $lotteryDrawResult[3], $lotteryDrawResult[4], $lotteryDrawResult[5], $lotteryDrawResult[6]],
                'blue' => []
            ];
            $data = [
                'type' => 5,
                'sales' => str_replace(',', '', $value['totalSaleAmount']),
                'code' => $value['lotteryDrawNum'],
                'date' => $value['lotteryDrawTime'],
                'week' => $weekarray[date('w', strtotime($value['lotteryDrawTime']))],
                'poolmoney' => $value['poolBalanceAfterdraw'],
                'prizegrades' => json_encode($value['prizeLevelList']),
                'ball' => json_encode($ball)
            ];
            Db::name('lottery')->insert($data);
        }
    }

    /**
     * 七乐彩
     */
    public function getQlc()
    {
        $ql = new QueryList();
        $result = $ql->get('http://www.cwl.gov.cn/cwl_admin/front/cwlkj/search/kjxx/findDrawNotice?name=qlc&issueCount=&issueStart=&issueEnd=&dayStart=&dayEnd=&pageNo=1&pageSize=30&week=&systemType=PC')->getHtml();
        $result = json_decode($result, true);
        foreach ($result['result'] as $key => $value) {
            $row = Db::name('lottery')->where(['type' => 6, 'code' => $value['code']])->value('id');
            if ($row) continue;
            $value['date'] = preg_replace('/\(.*?\)/', '', $value['date']);
            $ball = [
                'red' => explode(',', $value['red']),
                'blue' => explode(',', $value['blue'])
            ];
            $data = [
                'type' => 6,
                'sales' => $value['sales'],
                'code' => $value['code'],
                'date' => $value['date'],
                'week' => $value['week'],
                'poolmoney' => $value['poolmoney'],
                'prizegrades' => json_encode($value['prizegrades']),
                'ball' => json_encode($ball)
            ];
            Db::name('lottery')->insert($data);
        }
    }

    public function getWelfareLotteryList($name = 'ssq', $type = 0, $pageNo = 1, $pageSize = 10)
    {
        $ql = new QueryList();
        $params = [
            'name=' . $name,
            'pageNo=' . $pageNo,
            'pageSize=' . $pageSize,
            'systemType=PC'
        ];
        $url = 'http://www.cwl.gov.cn/cwl_admin/front/cwlkj/search/kjxx/findDrawNotice?' . implode('&', $params);
        //var_dump($url);
      
        $result = $ql->get($url)->getHtml();
        $result = json_decode($result, true);
        foreach ($result['result'] as $key => $value) {
            $id = Db::name('lottery')->where(['type' => $type, 'code' => $value['code']])->value('id');
            $value['date'] = preg_replace('/\(.*?\)/', '', $value['date']);
            $ball = [
                'red' => explode(',', $value['red']),
                'blue' => explode(',', $value['blue'])
            ];
            $prizegrades = $this->parsePrizegrades($value['prizegrades']);
            $data = [
                'type' => $type,
                'sales' => $value['sales'],
                'code' => $value['code'],
                'date' => $value['date'],
                'week' => $value['week'],
                'poolmoney' => $value['poolmoney'],
                'prizegrades' => json_encode($prizegrades),
                'ball' => json_encode($ball)
            ];
            if ($id) {
                Db::name('lottery')->where(['id' => $id])->update($data);
            } else {
               
                $id=Db::name('lottery')->insertGetId($data);
                $row = Db::name('lottery')->where(['id' => $id])->order(['date' => 'desc'])->find();
                $this->push($row);
            }
        }
    }

    public function getSportsLotteryList($name = '04', $type = 0, $pageNo = 1, $pageSize = 10)
    {
        $ql = new QueryList();
        $params = [
            'gameNo=' . $name,
            'pageNo=' . $pageNo,
            'provinceId=0',
            'pageSize=' . $pageSize,
            'isVerify=1'
        ];
        $url = 'https://webapi.sporttery.cn/gateway/lottery/getHistoryPageListV1.qry?' . implode('&', $params);
        $result = $ql->get($url)->getHtml();
        $result = json_decode($result, true);
        foreach ($result['value']['list'] as $key => $value) {
            $id = Db::name('lottery')->where(['type' => $type, 'code' => $value['lotteryDrawNum']])->value('id');
            $weekList = ['日', '一', '二', '三', '四', '五', '六'];
            $lotteryDrawResult = explode(' ', $value['lotteryDrawResult']);
            if ($type == 1) {
                $ball = [
                    'red' => [$lotteryDrawResult[0], $lotteryDrawResult[1], $lotteryDrawResult[2], $lotteryDrawResult[3], $lotteryDrawResult[4]],
                    'blue' => [$lotteryDrawResult[5], $lotteryDrawResult[6]]
                ];
            } else {
                $ball = [
                    'red' => $lotteryDrawResult,
                    'blue' => []
                ];
            }
            $data = [
                'type' => $type,
                'sales' => str_replace(',', '', $value['totalSaleAmount']),
                'code' => $value['lotteryDrawNum'],
                'date' => $value['lotteryDrawTime'],
                'week' => $weekList[date('w', strtotime($value['lotteryDrawTime']))],
                'poolmoney' => str_replace(',', '', $value['poolBalanceAfterdraw']),
                'prizegrades' => json_encode($this->parsePrizeLevelList($value['prizeLevelList'])),
                'ball' => json_encode($ball)
            ];
            if ($id) {
                Db::name('lottery')->where(['id' => $id])->update($data);
            } else {
                $id=Db::name('lottery')->insertGetId($data);
                $row = Db::name('lottery')->where(['id' => $id])->order(['date' => 'desc'])->find();
                $this->push($row);
            }
        }
    }

    public function parsePrizeLevelList($list)
    {
        $arr = [];
        foreach ($list as $key => $value) {
            $arr[] = [
                'type' => $value['prizeLevel'],
                'typenum' => $value['stakeCount'],
                'typemoney' => $value['stakeAmount']
            ];
        }
        return $arr;
    }

    public function parsePrizegrades($list)
    {
        $arr = [];
        foreach ($list as $key => $value) {
            if ($value['typenum'] && $value['typemoney']) {
                $arr[] = $value;
            }
        }
        return $arr;
    }


}
