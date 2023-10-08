import {
    request
} from "../../../utils/request";

Page({
    data: {
        week: '',
        user: getApp().globalData.loginUser,
        shareapp:[]
    },
    onLoad: function () {
        let _this = this
        var list = []
        _this.getWeek()
        _this.getapp()
    },
    getapp(){
        let _this = this
          var list = []
          request('/home/getappList', {}).then((res) => {
          for (let i = 0; i < res.data.length; i++) {
              var tempData = {}
              tempData.appid = res.data[i].appid;
              tempData.appname = res.data[i].appname;
              tempData.src = res.data[i].src;
              list.push(tempData)
          }

          _this.setData({
            shareapp: list,

          })
          wx.hideLoading()
    
      })
    },
    getWeek: function () {
        let _this = this
        let week = '周' + '日一二三四五六'.charAt(new Date().getDay());
        _this.setData({
            week: week
        })
    },
    bindGetUserInfo: function (e) {
        let _this = this
        wx.showLoading({
            mask: true
        })
        wx.login({
            success: (res) => {
                request('/user/updateUser', {
                    code: res.code,
                    iv: e.detail.iv,
                    encryptedData: e.detail.encryptedData
                }).then((res) => {
                    if (res.code == 0) {
                        wx.showToast({
                            title: res.msg,
                            icon: 'none',
                            mask: true
                        })
                    } else {
                        getApp().globalData.loginUser = res.data.user
                        wx.setStorageSync('loginUser', res.data.user)
                        _this.setData({
                            user: res.data.user
                        })
                    }
                    wx.hideLoading()
                })
            },
        })
    },
    logoutTap() {
        let _this = this
        if (_this.data.user) {
            wx.showModal({
                title: '提示',
                content: '确认退出？',
                complete: (res) => {
                    if (res.confirm) {
                        getApp().getCode()
                        getApp().globalData.loginUser = null
                        wx.removeStorageSync('loginUser')
                        _this.setData({
                            user: null
                        })
                    }
                }
            })
        }
    },
    exonerationTap() {
        wx.navigateTo({
            url: '/pages/user/exoneration/exoneration',
        })
    },
    onShareAppMessage() {
      return {
          title: '天天领奖台',
          path: '/pages/index/index?id=123',
          imageUrl: '/static/header_img.png'
      }
  },
  skipminipro(e){
    wx.navigateToMiniProgram({
	    appId: e.currentTarget.dataset.appid, //'目标小程序appid',
	   // path: '目标小程序页面路径',
	    //develop开发版；trial体验版；release正式版
	    envVersion: 'release', 
	    success(res) {
	      // 打开成功
	      console.log("跳转小程序成功！",res);
	    } 
	})
  }
})