// pages/trend/1/index.js
import {
  request
} from "../../../utils/request"
import{
  checklinenumber,checklinenumbery,fnLineChart,drawClose
} from "../drawblock"
Page({

    /**
     * 页面的初始数据
     */
    data: {
      hunder:[0,1,2,3,4,5,6,7,8,9],
      shiwei:[0,1,2,3,4,5,6,7,8,9],
      gewei: [0,1,2,3,4,5,6,7,8,9],
      zx: [0,1,2,3,4,5,6,7,8,9],
      tempData:{"code":"01","luckynum":[2,3,6],"type":"12","hw":"2","jo":3,"dx":4,"l":4,"kd":4},
      listData:[ ],
      linkData:[],
      transData:[{"distance":10,radius:90,"x1":20,"y1":20,"x2":30,"y2":50}],
      type: 0,
        isHave: true,
        page: 1,
        opentitle:'关闭分位连线',
        isClose:false,
        mleft :"0",
        canvasHeight: "800"
        //list: []

    },


    /**
     * 生命周期函数--监听页面加载
     */
    onLoad(params) {
      let _this = this
      _this.setData({
          type: params.type
      })
      _this.loadData()

    },
    loadData() {
        let _this = this
        if (_this.data.isHave == false) {
            return
        }
        let list = JSON.parse(JSON.stringify(_this.data.listData))
        wx.showLoading({
            mask: true
        })
        request('/home/gettrendList', {
           type: _this.data.type,
           
            page: _this.data.page
        }).then((res) => {
            for (let i = 0; i < res.data.length; i++) {
                var tempData = {}
                tempData.code = res.data[i].code;
                tempData.luckynum = res.data[i].ball.red;
                // tempData.type = _this.calculateSum( res.data[i].ball.red )
                // tempData.hw = _this.calculateTail(res.data[i].ball.red)
                // tempData.l = _this.calculate012( res.data[i].ball.red ).join("")
                // tempData.dx = _this.calculateSizeRatio(res.data[i].ball.red)
                // tempData.jo = _this.calculateOddEvenRatio(res.data[i].ball.red )
                // tempData.kd =_this.calculateSpan( res.data[i].ball.red )
                tempData.type =  res.data[i].calculateSum
                tempData.hw = res.data[i].calculateTail
                tempData.l = res.data[i].calculate012.join("")
                tempData.dx = res.data[i].calculateSizeRatio
                tempData.jo = res.data[i].calculateOddEvenRatio
                tempData.kd = res.data[i].calculateSpan 

                list.push(tempData)
            }
            var linkData = checklinenumber(list)
            linkData = checklinenumbery(list, linkData)
            _this.setData({
                linkData: linkData,
                listData: list,
                isHave: res.data.length >= 10,
                page: _this.data.page + 1
            })
            wx.hideLoading()
           
            var sys = wx.getSystemInfoSync()
            var dpr = sys.pixelRatio
            var canvarsH = 120 +40 * (4+ list.length)
            // if(sys.system.toLowerCase().indexOf('iOS') >-1){
            //   console.log("ios")
            //   canvarsH = 28 * dpr * list.length +"rpx"
            // } 
            // else if(sys.system.toLowerCase().indexOf('android')>-1)
            // {
            //   canvarsH = 11 * dpr * list.length +"rpx"
            // }
            // else
            // {
            //   canvarsH = 11.5 * dpr * list.length +"rpx"
            // }
            _this.setData({
              canvasHeight: canvarsH
            })
            _this.drawline()
        })
      },
     
    /**
     * 生命周期函数--监听页面初次渲染完成
     */
    onReady() {

    },

    /**
     * 生命周期函数--监听页面显示
     */
    onShow() {
     

    },

    /**
     * 生命周期函数--监听页面隐藏
     */
    onHide() {

    },

    /**
     * 生命周期函数--监听页面卸载
     */
    onUnload() {

    },

    /**
     * 页面相关事件处理函数--监听用户下拉动作
     */
    onPullDownRefresh() {

    },

    /**
     * 页面上拉触底事件的处理函数
     */
    onReachBottom() {

    },

    /**
     * 用户点击右上角分享
     */
    onShareAppMessage() {

    },
    drawline(){
        wx.createSelectorQuery()
        .select('#canvas')
        .fields({
          node: true,
          size: true,
        })
        .exec(this.drawLines.bind(this))

    },
    drawLines(res) {
      console
      var width = res[0].width
      var height = res[0].height
      var canvas = res[0].node
      var ctx = canvas.getContext('2d')
      const dpr = wx.getSystemInfoSync().pixelRatio
      canvas.width = width * dpr
      canvas.height = height * dpr
      console.log(canvas.height+ ' '+canvas.width)
      ctx.scale(dpr, dpr)
      fnLineChart(ctx,canvas,".lableNum")
      fnLineChart(ctx,canvas,".lableNum2")
      fnLineChart(ctx,canvas,".lableNum3") 
    },
    openclose(){
      var opentitle = "关闭分位线"
      var isClose = false
      var mleft = "0"
      
      if(!this.data.isClose)
      {
        opentitle = "打开分位连线"
        isClose = true
        mleft = "500px"
      //  drawClose()
      }
      else
      {
        isClose = false
      
      //  this.drawline()
      }
      this.setData({
        opentitle: opentitle,
        isClose: isClose,
        mleft : mleft
      })
    }
})