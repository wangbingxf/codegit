import {
    request
} from "../../../utils/request"

Page({
    data: {
        exoneration: ''
    },
    onLoad: function () {
        let _this = this
        _this.getExoneration()
    },
    getExoneration: function () {
        let _this = this
        wx.showLoading({
            mask: true
        })
        request('/home/getExoneration').then((res) => {
            _this.setData({
                exoneration: res.data
            })
            wx.hideLoading()
        })
    },
    backTap: function () {
        wx.navigateBack()
    }
})