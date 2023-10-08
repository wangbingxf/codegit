// pages/trend/1/index.js
import {
  request
} from "../../../utils/request"

Page({

    /**
     * 页面的初始数据
     */
    data: {
      Localtion:[0,1,2,3,4,5,6,7,8,9],
      bendk:[0,1,2,3,4,5,6,7,8,9,10,11,12,13,14],
     
      tempData:{"code":"01","luckynum":[2,3,6],"type":"12","hw":"2","jo":3,"dx":4,"l":4,"kd":4},
      listData:[ ],
      type: 0,
        isHave: true,
        page: 1,
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
                tempData.red = _this.stringToNumber(res.data[i].ball.red);
                tempData.blue = _this.stringToNumber(res.data[i].ball.blue);

                list.push(tempData)
            }
            _this.setData({
                listData: list,
                isHave: res.data.length >= 10,
                page: _this.data.page + 1
            })
            wx.hideLoading()
        })
      },
      stringToNumber(arrnum){
        var tempData = [];
        arrnum.forEach(function(val,idx,arrnum) {
          tempData.push( Number.parseInt( val));
        });
        return tempData;
      },
      // 定义函数计算和值
      calculateSum(arrnum){
        var s = 0;
        arrnum.forEach(function(val,idx,arrnum) {
          s = s + Number.parseInt( val);
        });
        return s;

      },
      // 计算和尾
      calculateTail(num){
        var s = 0;
        s = this.calculateSum(num) % 10;
        return s;
      },
      // 定义函数计算012路
      calculate012(number) {
      
        var result = [0,0,0]; // 初始化012路数组
        for (var i = 0; i < number.length; i++) {
            var digit = Number.parseInt(number[i]) % 3;
            result[digit]++;
        }
        return result;
    },
    // 定义函数计算大小比
 calculateSizeRatio(number) {
  var maxDigit = Math.max.apply(null,number);
  var countMax = 0;
  var countOther = 0;

  for (var i = 0; i < number.length; i++) {
      if (Number.parseInt(number[i]) == maxDigit) {
          countMax++;
      } else {
          countOther++;
      }
  }

  return "1:" +countOther;  // 修正大小比的逻辑
},

// 定义函数计算奇偶比
calculateOddEvenRatio(number) {
  var countOdd = 0;
  var countEven = 0;

  for (var i = 0; i < number.length; i++) {
      if (Number.parseInt(number[i]) % 2 === 0) {
          countEven++;
      } else {
          countOdd++;
      }
  }

  return countOdd + ":" + countEven;
},
// 定义函数计算跨度
calculateSpan(number) {
  var maxDigit = Math.max.apply(null,number);;
  var minDigit = Math.min.apply(null,number);;
  return maxDigit - minDigit;
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

    }
})