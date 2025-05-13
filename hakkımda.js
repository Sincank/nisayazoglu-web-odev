const para = document.getElementById("eskiPara");
let isGifPlaying = false;

para.addEventListener("click", () => {
    if (!isGifPlaying) {
        para.src = "hakkımda-malz/hobiler/eskipara.gif?t=" + new Date().getTime();
    } else {
        para.src = "hakkımda-malz/hobiler/eskipara.png";
    }

    isGifPlaying = !isGifPlaying;
});




