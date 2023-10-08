import {
    request
} from "../../utils/request"

Page({
    data: {
        row: null,
        id: 0
    },
    onLoad(e) {
        let _this = this
        _this.setData({
            id: e.id
        })
        _this.loadData()
    },
    loadData() {
        let _this = this
        wx.showLoading({
            mask: true
        })
        request('/home/getDetail', {
            id: _this.data.id
        }).then((res) => {
            console.log(res)
            _this.setData({
                row: res.data
            })
            wx.hideLoading()
        })
    },
    historyTap() {
        let _this = this
        wx.navigateTo({
            url: '/pages/history/index?type=' + _this.data.row.type,
        })
    }
})