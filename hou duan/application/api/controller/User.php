<?php

namespace app\api\controller;

use app\common\controller\Api;
use think\Db;

class User extends Api
{
    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';

    public function login()
    {
        $code = input('code');
        $config = [
            'appid' => Db::name('config')->where(['name' => 'appid'])->value('value'),
            'appsecret' => Db::name('config')->where(['name' => 'appsecret'])->value('value')
        ];
        $wechat = new \WeMini\Crypt($config);
        $result = $wechat->session($code);
        if (isset($result['openid']) && $result['openid']) {
            $userId = Db::name('user')->where(['openid' => $result['openid']])->value('id');
            if (!$userId) {
                $userId = Db::name('user')->insertGetId([
                    'openid' => $result['openid'],
                    'logintime' => time(),
                    'loginip' => \request()->ip(),
                    'jointime' => time(),
                    'joinip' => \request()->ip(),
                    'status' => 'normal'
                ]);
                Db::name('user')->where(['id' => $userId])->update([
                    'nickname' => '微信用户 - ' . $userId,
                ]);
            } else {
                Db::name('user')->where(['id' => $userId])->update([
                    'logintime' => time(),
                    'loginip' => \request()->ip(),
                ]);
            }
            $this->success('登录成功', [
                'user' => Db::name('user')->field(['id', 'openid', 'nickname', 'is_subscription'])->where(['id' => $userId])->find()
            ]);
        } else {
            $this->error($result['errmsg'], []);
        }
    }

    public function updateUser()
    {
        $code = input('code');
        $iv = input('iv');
        $encryptedData = input('encryptedData');
        $config = [
            'appid' => Db::name('config')->where(['name' => 'appid'])->value('value'),
            'appsecret' => Db::name('config')->where(['name' => 'appsecret'])->value('value')
        ];
        $wechat = new \WeMini\Crypt($config);
        $result = $wechat->userInfo($code, $iv, $encryptedData);
        Db::name('user')->where(['openid' => $result['openid']])->update(['avatar' => $result['avatarUrl']]);
        $this->success('登录成功', [
            'user' => Db::name('user')->field(['id', 'openid', 'nickname', 'avatar'])->where(['openid' => $result['openid']])->find()
        ]);
    }

    public function subscription()
    {
        $user_id = input('user_id');
        $type = input('type');
        Db::name('user_subscription')->where(['id' => $user_id])->insert([
            'user_id' => $user_id,
            'type' => $type
        ]);
        $this->success('成功');
    }

}
