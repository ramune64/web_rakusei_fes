setting_day = 1;
setting_place = 1;
show_id = "d1p1";
pb_show_id = "d1";//場所選択ボタンの表示用id

c_change_d = "d1b";
c_change_p = "d1p1b";
legacy_ccd = c_change_d;
legacy_ccp = c_change_p;
document.getElementById(c_change_d).style.backgroundColor = "yellow";
document.getElementById(c_change_p).style.backgroundColor = "yellow";


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

function c_color_d(){
    document.getElementById(legacy_ccd).style.backgroundColor = "";
    document.getElementById(legacy_ccp).style.backgroundColor = "";
    document.getElementById(c_change_d).style.backgroundColor = "yellow";
    document.getElementById(c_change_p).style.backgroundColor = "yellow";
}
function c_color_p(){
    document.getElementById(legacy_ccp).style.backgroundColor = "";
    document.getElementById(c_change_p).style.backgroundColor = "yellow";
}

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
    c_change_d = "d"+day+"b";
    c_change_p = "d"+day+"p1b";
    /* console.log(setting_day); */
    show_tt();
    c_color_d();
    legacy_ccd = c_change_d;
    legacy_ccp = c_change_p;
    /* console.log(setting_day) */
}

function tt_place(place){
    setting_place = place;
    
    c_change_p = "d"+setting_day+"p"+place+"b";
    console.log(c_change_p,"change");
    show_tt();
    c_color_p();
    legacy_ccp = c_change_p;
}