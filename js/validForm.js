function pwdLength(target) {
    if(target.value.length<4)
    {
        return false;
    }
    else {
        return true;
    }
}
function isPwdSame(str1,str2) {
    if(str1.value===str2.value){
        return true;
    }
    else {
        return false;
    }
}
function validForm(){
    var pwd=document.getElementById('pwd');
    var conformPwd=document.getElementById('conformPwd');
    var phone=document.getElementById('phone');

    if(!pwdLength(pwd)){
        alert("密码长度必须大于或等于4！");
        return false;
    }
    if(!isPwdSame(pwd,conformPwd)){
        alert("请确认两次输入密码一致！");
        return false;
    }
    return true;
}






