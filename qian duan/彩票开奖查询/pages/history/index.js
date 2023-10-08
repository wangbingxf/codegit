import {
    request
} from "../../utils/request"

Page({
    data: {
        type: 0,
        isHave: true,
        page: 1,
        list: []
    },
    onLoad(params) {
        let _this = this
        _this.setData({
            type: params.type
        })
        _this.loadData()
    },
    onReachBottom() {
        let _this = this
        _this.loadData()
    },
    loadData() {
        let _this = this
        if (_this.data.isHave == false) {
            return
        }
        let list = JSON.parse(JSON.stringify(_this.data.list))
        wx.showLoading({
            mask: true
        })
        request('/home/getList', {
            type: _this.data.type,
            page: _this.data.page
        }).then((res) => {
            for (let i = 0; i < res.data.length; i++) {
                list.push(res.data[i])
            }
            _this.setData({
                list: list,
                isHave: res.data.length >= 10,
                page: _this.data.page + 1
            })
            wx.hideLoading()
        })
    },
    changeIsShow(e) {
        let _this = this
        let index = e.currentTarget.dataset.index
        let list = JSON.parse(JSON.stringify(_this.data.list))
        list[index].isShow = list[index].isShow ? false : true
        _this.setData({
            list: list
        })
    },
    /**
     * 用户点击右上角分享
     */
    onShareAppMessage() {

    }
})