let jam = document.getElementById("jam");
let menit = document.getElementById("menit");
let detik = document.getElementById("detik");

setInterval(()=>{
    let currentTime = new Date();

    jam.innerHTML = (currentTime.getHours() < 10 ? "0":"") + currentTime.getHours();
    menit.innerHTML = (currentTime.getMinutes()< 10 ? "0":"") + currentTime.getMinutes();
    detik.innerHTML = (currentTime.getSeconds()< 10 ? "0":"") + currentTime.getSeconds();
},1000)