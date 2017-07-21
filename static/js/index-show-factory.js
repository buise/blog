/**
 * Created by Administrator on 2017/7/18.
 */
angular.module('factory',['http'])
.factory('data',function () {
    $http({
        method: 'get',
        url: 'index.php?f=show&a=message',
    }).then(function successCallback(e) {
        console.log(e.data);
    }, function errorCallback(e) {
        // 请求失败执行代码
    });
});