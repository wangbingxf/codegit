export function request(url, data) {
    return new Promise((resolve, reject) => {
        wx.request({
            url: 'https://001.shanxi0357.cn/api' + url,
            data: data,
            success: function (res) {
                console.log(res.data)
                resolve(res.data)
            }
        })
    })
}