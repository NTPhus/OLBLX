const progressCircle = document.querySelector(".autoplay-progress svg");
const progressContent = document.querySelector(".autoplay-progress span");
var mySwiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    },
    on: {
        autoplayTimeLeft(s, time, progress) {
            progressCircle.style.setProperty("--progress", 1 - progress);
            // progressContent.textContent = `${Math.ceil(time / 1000)}s`;
        }
    }
});


const swiper = new Swiper('.js-testimonials-slider', {
    grabCursor: true,
    spaceBetween: 40,
    pagination:{
        el: '.js-testimonials-pagination',
        clickable: true,
    },
    breakpoints: {
        767: {
            slidesPerView: 2,
        }
    }
});


const accordionItems = document.querySelectorAll('.accordion-content');

accordionItems.forEach((item, index) => { // Added index here
    let accordionItem = item.querySelector(".accordion-item");
    accordionItem.addEventListener("click", () => {
        item.classList.toggle("open");
        let answer = item.querySelector(".answer");
        if(item.classList.contains("open")){
            answer.style.height = `${answer.scrollHeight}px`;
            item.querySelector("i").classList.replace("ri-add-fill","ri-subtract-fill");
        } else{
            answer.style.height = '0px';
            item.querySelector("i").classList.replace("ri-subtract-fill","ri-add-fill");
        }
        removeOpen(index); // Now passing the index
        console.log(answer);
    });
});

function removeOpen(index1) {
    accordionItems.forEach((item2, index2) => {
        if(index1 != index2) {
            item2.classList.remove("open");
            let des = item2.querySelector(".answer");
            des.style.height = '0px';
            item2.querySelector("i").classList.replace("ri-subtract-fill","ri-add-fill");
        }
    });
}

function chuyenTrang(trang){
    if(trang == "OnTapMoPhong"){
        window.location.href = "giaoDienMoPhong.php";
    }else if(trang == "ThiMoPhong"){
        window.location.href = "giaoDienThiMP.php";
    }else if(trang == "OnLyThuyet"){
        window.location.href = "giaoDienTracNghiem.php";
    }else if(trang == "ThiLyThuyet"){
        window.location.href = "chonDeLyThuyet.php";
    }
}
