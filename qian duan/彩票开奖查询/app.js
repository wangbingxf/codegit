import {
    request
} from "./utils/request"
App({
    onLaunch() {
        let _this = this
        _this.getCode()
    },
    getCode() {
        let _this = this
        wx.login({
            success: function (res) {
                wx.showLoading({
                    mask: true
                })
                _this.globalData.code = res.code
                request('/user/login', {
                    code: res.code
                }).then((res) => {
                    if (res.code == 0) {
                        wx.showToast({
                            title: res.msg,
                            icon: 'none',
                            mask: true
                        })
                    } else {
                        _this.globalData.user = res.data.user
                        wx.setStorageSync('user', res.data.user)
                    }
                    wx.hideLoading()
                })
            }
        })
    },
    globalData: {
        user: wx.getStorageSync('user'),
        loginUser: wx.getStorageSync('loginUser'),
        code: ''
    }
})