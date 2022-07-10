let signin_form = document.querySelector('#signin-form')

let signin_btn = document.querySelector('#signin-btn')


checkSigninForm = () => {
    let inputs = signin_form.querySelectorAll('.form-input')
    inputs.forEach(input => checkSigninInput(input))
}

signin_btn.onclick = () => {
    checksignin()
}
let inputs = signin_form.querySelectorAll('.form-input')
inputs.forEach(input => {
    input.addEventListener('focusout', () => {
        checkSigninInput(input)
    })
})



signin_btn.onclick = () => {
    checksignin()
}
function alertlogin() {
    alert("Đăng nhập thành công !");
    }
function alertloginfail() {
    alert("Sai tên người dùng hoặc mật khẩu !");
    }
function trangchu(){
    window.location="file:///C:/Users/Teiv%20Hoang/Desktop/H%E1%BB%8Dc%20T%E1%BA%ADp/HTML/%C4%90%E1%BB%93%20%C3%81n%202/%C4%90%E1%BB%93%20%C3%81n%202.html";
}
function trangquantri(){
    window.location="file:///C:/Users/Teiv%20Hoang/Desktop/H%E1%BB%8Dc%20T%E1%BA%ADp/HTML/%C4%90%E1%BB%93%20%C3%81n%202/Trang%20qu%E1%BA%A3n%20tr%E1%BB%8B.html";
}
 
 
 
 
 
    // Lấy giá trị của một input
function getValue(id){
    return document.getElementById(id).value.trim();
}

function checksignin()
{
    var flag = "none";
     
    var username = getValue('signin-email');
    var password = getValue('signin-password');

    if (username == 'admin' && password == 'admin'){
        flag="admin";
    }  
    if (username == 'hoangviet9713' && password == 'hoangviet810'){
        flag="nguoidung";
    }  
    if (username == 'nguoidung1' && password == '123'){
        flag="nguoidung";
    }  
    if (username == 'nguoidung2' && password == '123'){
        flag="nguoidung";
    }  
    if(flag=="admin"){
         alertlogin(); 
         setTimeout(trangquantri(),3000);
    }
    if(flag=="nguoidung"){
        alertlogin();
        setTimeout(trangchu(),3000);
    }
    if(flag=="none"){
        alertloginfail();
    }
}
