setting_day = 1;
setting_place = 1;
show_id = "d1p1";
pb_show_id = "d1";//場所選択ボタンの表示用id

ele_day = document.getElementById("d2");
ele_day.style.display = "none";
ele_day = document.getElementById("d3");
ele_day.style.display = "none";

ele_all_tt = document.getElementsByClassName("time_table_ul");
var ele_all_tt_array = Array.from(ele_all_tt);
/* var ele_all_tt_array = Array.from(ele_all_tt);
window.addEventListener("load",function(){
ele_all_tt_array.forEach(function(dumy){
    console.log(dumy.id);
    if(dumy.id != "d1p1"){
        dumy = document.getElementById(dumy.id);
        dumy.style.display = "none"
    }
}
)
}
) */

ele_all_tt_array.forEach(function(dumy,$index){
    console.log(ele_all_tt_array[$index]);   
    var dumys = document.getElementById(dumy.id);
    console.log(dumys);
    dumys.style.display = "none"
        }
    )

ele_tt = document.getElementById("d1p1");
ele_tt.style.display = "";

function show_tt(){
    
    console.log(show_id);
    ele_tt = document.getElementById(show_id);
    ele_tt.style.display = "none";
    ele_day = document.getElementById(pb_show_id);
    ele_day.style.display = "none";
    show_id = "d" + setting_day + "p" + setting_place;
    pb_show_id = "d" + setting_day; 
    console.log(show_id,"after");
    
    ele_day = document.getElementById(pb_show_id);
    ele_day.style.display = "";

    

    ele_tt = document.getElementById(show_id);
    ele_tt.style.display = ""


}


function tt_day(day){
    setting_day = day;
    setting_place = 1;
    /* console.log(setting_day); */
    show_tt();
    /* console.log(setting_day) */
}

function tt_place(place){
    setting_place = place;
    show_tt();
}