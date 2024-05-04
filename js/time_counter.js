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
setInterval(show,500);