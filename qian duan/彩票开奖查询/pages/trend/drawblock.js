//检查连号
function checklinenumber(arrnum)
{
  var linkData = [];
  for(var j = 0; j<arrnum.length; j++)
  {
    var arr = arrnum[j]["luckynum"].sort()
    var linknum =['','','','','','','','','',''];
    var arrlen = arr.length
    for(var i = 1; i< arrlen; i++)
    {
      if(( arr[i]-arr[i-1] ) == 1){
        linknum[arr[i-1]] = "linkbgx"
        linknum[arr[i]] = "linkbgx"
      }
    }
    var bz =true;
    for(var i = 1; i< arr.length; i++)
    {
      if(( arr[i]-arr[i-1] ) != 0){
        var bz =false;
      }
    }
    //linkTemp:{"luck":'sambg',"linkx":{"0":"linkbgx"},"linky":{"0":"linkbgy"}},
    var tempdata = {}
    tempdata["linkx"] = linknum
    if (bz){
      tempdata["luck"] = "sambg"
    }
    linkData.push(tempdata)
  }
  return linkData

}
function checklinenumbery (arrnum,linkData)
{
 // var linkData = this.data.linkData;
  var arrleng =  arrnum.length;
  var linknum =['','','','','','','','','',''];
  if (arrleng < 2){
    return;
  }
  for(var j = 1; j < arrleng; j++)
  {
    var arr1 = arrnum[j-1]["luckynum"].sort()  //上一行数据
    var arr2 = arrnum[j]["luckynum"].sort()  //当前行数据
    var arrlen = arr1.length
    if( j > 1 ){
      linkData[j]["linky"] = ['','','','','','','','','',''];
    }
    else
    {
      linkData[0]["linky"] = ['','','','','','','','','',''];
      linkData[j]["linky"] = ['','','','','','','','','',''];
    }
    for(var i = 0; i< arrlen; i++)
    {            
      if(( arr1.indexOf(arr2[i]) > -1 )){
        linknum[arr2[i]] = "linkbgy" 
        linkData[j-1]["linky"][arr2[i]]  = "linkbgy" 
        linkData[j]["linky"][arr2[i]]  = "linkbgy" 
      }
    }
  }
  return linkData
}
function fnLineChart (ctx,canvas,lableNum) {
  var query = wx.createSelectorQuery();
    query = query.selectAll(lableNum).boundingClientRect();
    query.exec(function (res) {
      var i=0;
      var res1=res[0];

        res1.forEach((ele)=> {
            i = i + 1;
            var eleNext = res1[i];
            if (!eleNext) {
              return;
            }
             var eleLine = ele;
            // 记录坐标
            var boundThis = ele;
            // 下一个点的坐标
            var boundNext = eleNext;
            // 计算长度和旋转角度
            var x1 = boundThis.left,
              y1 = boundThis.top;
             // y1 = boundThis.bottom;
              var x2 = boundNext.left,
              y2 = boundNext.top;
              // if(x1 <= x2)
              // {
              //   x1 =  boundThis.right
              // }
              // else 
              // {
              //   x2 = boundNext.right
              // }

            // 长度
            // var distance = Math.sqrt(
            //   (x2 - x1) * (x2 - x1) + (y2 - y1) * (y2 - y1),
            // );
            // 弧度
            // var radius = Math.atan2(y2 - y1, x2 - x1);
         //   ctx.beginPath();
            // 1.绘制一条直线
      // 绘制线条，起始点为标签的左上角，终止点为标签的右下角
    
            ctx.moveTo(x1,y1);//设置起点
            ctx.lineTo(x2,y2);//设置下一个点并且连接上一个点
            ctx.lineWidth=1;//设置线段的宽度
            ctx.strokeStyle='blue';//设置描边颜色
            ctx.lineCap='square';//设置线段两侧风格
            ctx.stroke();//设置描边
           // ctx.fill();//填充线段（没有填充）
           // ctx.clearRect(0, 0, canvas.width, canvas.height);
          

        
      });
  })
};
function drawClose(){
  wx.createSelectorQuery()
      .select('#canvas')
      .fields({
        node: true,
        size: true,
      })
      .exec(function(res){
        var canvas = res[0].node
        var ctx = canvas.getContext('2d')
        ctx.clearRect(0, 0, canvas.width, canvas.height);
      })
};
function getLineAreaHeight() {
  return new Promise((resolve) => {
    let query = wx.createSelectorQuery()
    query.select('.table').boundingClientRect()
    query.exec((res) => {
      if (res && res[0]) {
        resolve(res[0].height)
      }
    })
  })
}
module.exports = {
  checklinenumber : checklinenumber,
  checklinenumbery: checklinenumbery,
  fnLineChart: fnLineChart,
  drawClose: drawClose,
  getLineAreaHeight:getLineAreaHeight
}