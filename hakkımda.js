const para = document.getElementById("eskiPara");
para.addEventListener("click", () => {
    para.src = "hakkımda-malz/hobiler/eskipara.gif";

    setTimeout(() => {
        para.src = "hakkımda-malz/hobiler/eskipara.png";
    }, 2500); 
})


