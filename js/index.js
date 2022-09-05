// ---------------- HEADER ----------------------
window.addEventListener("scroll", function(){
    var header = this.document.querySelector("header");
    header.classList.toggle("sticky", this.window.scrollY > 0)
})




// ---------------- SCROLL TOP ------------------
let calcScrollValue = () => {

    // Lấy giá trị khi scroll: số dòng hay j j đó k rõ
    let scrollProgress = document.getElementById("scroll");
    let progressValue = document.getElementById("scroll-value");
    let pos = document.documentElement.scrollTop;
    let calcHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    let scrollValue = Math.round((pos * 100) / calcHeight);

    // Nếu pos lớn hơn 100 dòng... thì chuyển display thành grid
    if(pos > 100){
        scrollProgress.style.display = "grid";
    }else{  
        scrollProgress.style.display = "none";
    }


    // Cho scroll top lên đầu trang
    scrollProgress.addEventListener("click", () => {
        document.documentElement.scrollTop = 0;
    });


    // Tạo màu cho button khi scroll
    scrollProgress.style.background = `conic-gradient(rgb(70, 126, 121) ${scrollValue}%, #ccc ${scrollValue}%)`;
};


window.onscroll = calcScrollValue;
window.onload = calcScrollValue;
