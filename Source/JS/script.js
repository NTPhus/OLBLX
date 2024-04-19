const wrapper = document.querySelector('.wrapper');
const login = document.querySelector('.link_dang_nhap');
const register = document.querySelector('.link_dang_ky');
const close = document.querySelector('.icon_close');
const cnt = document.querySelector('.container');

const btnPopup = document.querySelector('.btnLogin-popup');

// bấm nút đăng ký thì chuyển sang form đăng ký
register.addEventListener('click', () => {
    wrapper.classList.add('active');
});

//  bấm nút đăng nhập thì chuyển sang form đăng nhập
login.addEventListener('click', () => {
    wrapper.classList.remove('active');
});

// bấm nút Đăng nhập trong thanh điều hướng thì xuất hiện form 
btnPopup.addEventListener('click', () => {
    wrapper.classList.add('active-popup');
});

// ấn nút X thì đóng form
close.addEventListener('click', () => {
    wrapper.classList.remove('active-popup');
});

// ấn ra ngoài thì vẫn đóng form
cnt.addEventListener('click', () => {
    wrapper.classList.remove('active-popup');
});

// giải quyết vấn đề ấn trong form đăng ký + đăng nhập thì mất form (ngăn chặn việc nổi bọt của form)
wrapper.addEventListener('click', function(event )
{
    event.stopPropagation();
})

function xuLyChonDongY(){
    dongYDeuKhoan = document.getElementById("chkdk");
    if(dongYDeuKhoan.checked==true){
        document.getElementById("rgt-btn").style.cursor="pointer";
        document.getElementById("rgt-btn").disabled = false;
    } else {
        document.getElementById("rgt-btn").style.cursor="not-allowed";
        document.getElementById("rgt-btn").disabled = true;
    }
}

function kiemTraMatKhau(){
    matKhau = document.getElementById("password").value;
    matKhauNhapLai = document.getElementById("repassword").value;
    if(matKhau!=matKhauNhapLai){
        alert("Mật khẩu không khớp!");
    }
}

function baoTonTaiTaiKhoan(){
    alert("Tài khoản đã tồn tại!");
}