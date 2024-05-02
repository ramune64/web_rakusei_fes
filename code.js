const counter = document.getElementById("counter");
const day3 = document.getElementById("day3");
const day2 = document.getElementById("day2");
const day1 = document.getElementById("day1");
const hour2 = document.getElementById("hour2");
const hour1 = document.getElementById("hour1");
const min2 = document.getElementById("min2");
const min1 = document.getElementById("min1");
const sec2 = document.getElementById("sec2");
const sec1 = document.getElementById("sec1");

let setting_year = 2024;
let setting_month = 9;
let setting_day = 13;
let setting_hour = 9;
let setting_minute = 40;

let date1;
let date2;
let date3;
let sec,min,hour,day;
function show(){
    date1 = new Date(setting_year, setting_month-1, setting_day,setting_hour,setting_minute,0,0);
    date2 = new Date(/* 2023, 4-1, 29,7,40,0,0 */);
    date3 = date1 - date2;
    
    sec = Math.floor(date3 / 1000 % 60);
    min = Math.floor(date3 / 1000 / 60 % 60);
    hour = Math.floor(date3 / 1000 / 60 / 60 % 24);
    day = Math.floor(date3 / 1000 / 60 / 60 / 24);
    
    if(date3<0){sec=0;min=0;hour=0;day=0;}

    sec1_str = sec%10;
    sec2_str = Math.floor(sec/10)%10
    min1_str = min%10;
    min2_str = Math.floor(min/10)%10
    hour1_str = hour%10;
    hour2_str = Math.floor(hour/10)%10
    day1_str = day%10;
    day2_str = Math.floor(day/10)%10
    day3_str = Math.floor(day/100)%10
    if(0 <= sec && sec < 10){
        sec2_str = "0";
    }
    if(0 <= min && min < 10){
        min2_str = "0";
    }
    if(0 <= hour && hour < 10){
        hour2_str = "0";
    }if(day < 10){
        day2_str ="";
        day3_str ="";
    }else if(day < 100){
        day3_str = "";
    }
    sec1.innerHTML = sec1_str;
    sec2.innerHTML = sec2_str;
    min1.innerHTML = min1_str;
    min2.innerHTML = min2_str;
    hour1.innerHTML = hour1_str;
    hour2.innerHTML = hour2_str;
    day1.innerHTML = day1_str;
    day2.innerHTML = day2_str;
    day3.innerHTML = day3_str;

    /* if(sec1_str != leg_s1){ *//* アニメーション用のクラスをつける *//* } */
    /* if(sec2_str != leg_s2){ *//* 文字一つにつき要素ふたついるやんけー *//* } */
    /* if(min1_str != leg_m1){ *//* めんどー *//* } */
    /* if(min2_str != leg_m2){ *//* 頼まれない限り実装せんとこー *//* } */
    /* if(hour1_str != leg_h1){}
    if(hour2_str != leg_h2){}
    if(day1_str != leg_d1){}
    if(day2_str != leg_d2){}
    if(day3_str != leg_d3){} */

    /* leg_s1 = sec1_str;
    leg_s2 = sec2_str;
    leg_m1 = min1_str;
    leg_m2 = min2_str;
    leg_h1 = hour1_str;
    leg_h2 = hour2_str;
    leg_d1 = day1_str;
    leg_d2 = day2_str;
    leg_d3 = day3_str; */
    /* counter.innerHTML = day+'日'+hour+'時間'+min+'分'+sec+'秒'; */
}
setInterval(show,1000);
const fi = document.getElementById('first');
const se = document.getElementById('second');
const th = document.getElementById('third');

const last = document.getElementById('last');

const under1 = document.getElementById("suf1");
const under2 = document.getElementById("suf2");
const under3 = document.getElementById("suf3");

const underlast = document.getElementById("suflast");

const under = [under1,under2,under3,underlast];

const ze_fi = document.getElementById("ze_fi");
const ze_se = document.getElementById("ze_se");
const ze_th = document.getElementById("ze_th");

const ze_last = document.getElementById("ze_last");


function view_in(evt){
    this.val1.classList.remove("fi_line_anime_remove");
    this.val1.classList.add("fi_line_anime");
    console.log("in");
}
function view_out(evt){
    this.val1.classList.remove("fi_line_anime");
    this.val1.classList.add("fi_line_anime_remove");
    console.log("out");
}


ze_fi.addEventListener('mouseover', {handleEvent: view_in,val1: under[0]},false);
fi.addEventListener('mouseleave',{handleEvent: view_out,val1: under[0]},false);
ze_se.addEventListener('mouseover', {handleEvent: view_in,val1: under[1]},false);
se.addEventListener('mouseleave',{handleEvent: view_out,val1: under[1]},false);
ze_th.addEventListener('mouseover', {handleEvent: view_in,val1: under[2]},false);
th.addEventListener('mouseleave',{handleEvent: view_out,val1: under[2]},false);

ze_last.addEventListener('mouseover', {handleEvent: view_in,val1: under.slice(-1)[0]},false);
last.addEventListener('mouseleave',{handleEvent: view_out,val1: under.slice(-1)[0]},false);



const sp_nav = document.getElementById('sp_nav');

const hum = document.getElementById('hum');

const top_hum = document.getElementById('top_hum');
const middle_hum = document.getElementById('middle_hum');
const bottom_hum = document.getElementById('bottom_hum');

const back_ground1 = document.getElementById('aaaaa');
const header = document.getElementById("header");

var c = 0;
function a(){
    if(c == 0){
        back_ground1.classList.remove("out");
        back_ground1.classList.add("in");

        sp_nav.classList.remove("out");
        sp_nav.classList.add("in");

        top_hum.classList.remove("de_anime");
        middle_hum.classList.remove("de_anime");
        bottom_hum.classList.remove("de_anime");
        top_hum.classList.add("anime");
        middle_hum.classList.add("anime");
        bottom_hum.classList.add("anime");
        c = 1;
    }else{
        back_ground1.classList.remove("in");
        back_ground1.classList.add("out");

        sp_nav.classList.remove("in");
        sp_nav.classList.add("out");

        top_hum.classList.remove("anime");
        middle_hum.classList.remove("anime");
        bottom_hum.classList.remove("anime");
        top_hum.classList.add("de_anime");
        middle_hum.classList.add("de_anime");
        bottom_hum.classList.add("de_anime");
        
        c = 0;
    }
    console.log("clicked!")
    }
function b(){
    console.log("mousleave");
    if(c == 0){
    }else{
        back_ground1.classList.remove("in");
        back_ground1.classList.add("out");
        
        sp_nav.classList.remove("in");
        sp_nav.classList.add("out");

        top_hum.classList.remove("anime");
        middle_hum.classList.remove("anime");
        bottom_hum.classList.remove("anime");
        top_hum.classList.add("de_anime");
        middle_hum.classList.add("de_anime");
        bottom_hum.classList.add("de_anime");
        
        c = 0;
    }
    }
header.addEventListener("touchend",b)
back_ground1.addEventListener("touchend",b)
hum.addEventListener('mousedown',a);

var a1_cell = document.getElementById("a1_cell");
var d3_cell = document.getElementById("d3_cell");

var a1img = document.getElementById("img_a1");
var d3img = document.getElementById("img_d3");

const img_list = [a1img,d3img]


var q = 0;
function ccccc(){
    if(q==0){
        console.log("ほば～");
        this.imgs.classList.remove("op0_out");
        this.imgs.classList.add("op0");
        q=1;
    }else{
        console.log("ほば～あうと～");
        this.imgs.classList.remove("op0");
        this.imgs.classList.add("op0_out");
        q=0;
    }
}

a1_cell.addEventListener("mouseover",{handleEvent: ccccc,imgs: img_list[0]},false);
a1_cell.addEventListener("mouseleave",{handleEvent: ccccc,imgs: img_list[0]},false);

d3_cell.addEventListener("mouseover",{handleEvent: ccccc,imgs: img_list[1]},false);
d3_cell.addEventListener("mouseleave",{handleEvent: ccccc,imgs: img_list[1]},false);

const gray_back = document.getElementById("gray_back")
const front_cherry = document.getElementById("front_cherry")
const front_flower = document.getElementById("front_flower")


function frontimg(){
    gray_back.classList.remove("on");
    front_cherry.classList.remove("on");
    front_flower.classList.remove("on");

    gray_back.classList.add("off");
    front_cherry.classList.add("off");
    front_flower.classList.add("off");
}


gray_back.addEventListener("mousedown",frontimg)

var o_h = 311;
var o_w = 395;
var h = document.getElementById("origin").clientHeight;
var w = document.getElementById("origin").clientWidth;


document.getElementById("origin").onclick = function (event){
    var x = event.offsetX ;	// 水平の位置座標
	var y = event.offsetY ;	// 垂直の位置座標

    
    console.log(x)
    console.log(y)
    console.log(w)
    console.log(h)

    x = (x/w)
    y = (y/h)

    if(x>=(35/o_w) && y>=(35/o_h) && x<=(120/o_w) && y<=(65/o_h)){
        gray_back.classList.remove("off");
        front_cherry.classList.remove("off");

        gray_back.classList.add("on");
        front_cherry.classList.add("on");
    }
    else if(x>=(210/o_w) && y>=(155/o_h) && x<=(297/o_w) && y<=(183/o_h)){
        gray_back.classList.remove("off");
        front_flower.classList.remove("off");

        gray_back.classList.add("on");
        front_flower.classList.add("on");
    }

    //document.querySelector("#posx").textContent = x;
}
