import {
    request
} from "../../utils/request"

let interstitialAd = null

Page({
    data: {
        user: getApp().globalData.user,
        indicatorDots: true,
        autoplay: true,
        circular: true,
        step: 1,
        distance: 360,
        space: 300,
        interval: 20,
        message: '',
        copyright: '',
        bannerList: [],
        lotteryList: [],
        interstitialAdUnitId: '',
        bannerAdUnitId: '',
        subscriptionTemplateId: ''
    },
    onShow() {
        let _this = this
        if (_this.data.interstitialAdUnitId) {
            _this.interstitialShow()
        }
    },
    onLoad() {
        let _this = this
        _this.loadData()
        _this.scrolllingInit()
    },
    loadData: function () {
        let _this = this
        wx.showLoading({
            mask: true
        })
        request('/home', {
            user_id: getApp().globalData.user.id,
        }).then((res) => {
            _this.setData({
                lotteryList: res.data.lotteryList,
                message: res.data.message,
                bannerList: res.data.bannerList,
                copyright: res.data.copyright,
                interstitialAdUnitId: res.data.interstitialAdUnitId,
                bannerAdUnitId: res.data.bannerAdUnitId,
                subscriptionTemplateId: res.data.subscriptionTemplateId
            })
            _this.interstitialLoad(res.data.interstitialAdUnitId, () => {
                _this.interstitialShow()
            })
            wx.hideLoading()
        })
    },
    scrolllingInit: function () {
        let _this = this;
        let query = wx.createSelectorQuery();
        query.select('#message').boundingClientRect();
        query.exec(function (res) {
            let length = res[0].width;
            let windowWidth = wx.getSystemInfoSync().windowWidth;
            _this.setData({
                length: length,
                windowWidth: windowWidth,
                space: windowWidth
            });
            _this.scrollling();
        });
    },
    scrollling: function () {
        let _this = this;
        let length = _this.data.length;
        let windowWidth = _this.data.windowWidth;
        let interval = setInterval(function () {
            let maxscrollwidth = length + _this.data.space;
            let left = _this.data.distance;
            if (left < maxscrollwidth) {
                _this.setData({
                    distance: left + _this.data.step
                })
            } else {
                _this.setData({
                    distance: 0
                });
                clearInterval(interval);
                _this.scrollling();
            }
        }, _this.data.interval);
    },
    historyTap(e) {
        let type = e.currentTarget.dataset.type
        wx.navigateTo({
            url: '/pages/history/index?type=' + type,
        })
    },
    trendTap(e) {
      let type = e.currentTarget.dataset.type
      wx.navigateTo({
          url: '/pages/trend/' + type+'/index?type=' + type,
      })
  },
    detailTap(e) {
        let id = e.currentTarget.dataset.id
        wx.navigateTo({
            url: '/pages/detail/index?id=' + id,
        })
    },
    interstitialLoad(interstitialAdUnitId, callback) {
        if (wx.createInterstitialAd) {
            interstitialAd = wx.createInterstitialAd({
                adUnitId: interstitialAdUnitId
            })
            callback()
        }
    },
    interstitialShow() {
        if (interstitialAd) {
            interstitialAd.show().catch((err) => {
                console.log(err)
                if (err.errCode == 2004) _this.interstitialShow()
            })
        }
    },
    subscriptionTap(e) {
        let _this = this
        let type = e.currentTarget.dataset.type
        wx.showLoading({
            mask: true
        })
        wx.requestSubscribeMessage({
            tmplIds: [_this.data.subscriptionTemplateId],
            success(res) {
                let result = res[_this.data.subscriptionTemplateId]
                if (result.indexOf('accept') > -1) {
                    request('/user/subscription', {
                        type: type,
                        user_id: _this.data.user.id
                    }).then((res) => {
                        if (res.code == 1) {
                            _this.data.lotteryList[type].subscription = 1
                            _this.setData({
                                lotteryList: _this.data.lotteryList
                            })
                        }
                        wx.hideLoading()
                    })
                } else {
                    wx.hideLoading()
                }
            }
        })
    },
    
    /**
     * 用户点击右上角分享
     */
    onShareAppMessage() {

    },
})