/* const gray_back_map = document.getElementById("gray_back_map")//グレーの透かし背景
function show_ov(room_name){
    const room_element = document.getElementById(room_name);
    leg_room = room_element;
    gray_back_map.style.display = "block";
    room_element.style.display = "block";
}
function del(){
    leg_room.style.display = "none";
    gray_back_map.style.display = "none";
}
gray_back_map.addEventListener("mousedown",del) */

const excel = document.getElementsByClassName("Excel")[0]
const parent = document.getElementsByClassName("Map_parent")[0]


function onResize(){
    
    const win_width = window.innerWidth;
    if (win_width > 1080){
        var scaleValue = (1/1250) * win_width + (-8/125)
        excel.style.transform = `scale(${scaleValue})`;
        //console.log(scaleValue)
    }else{
        var scaleValue = 1.4
        excel.style.transform = `scale(${scaleValue})`;
    }
    const maps = document.getElementsByClassName("Maps")[0]
    const height2 = maps.getBoundingClientRect().height;
    parent.style.height = `${40 + 40 + height2}px`
}

window.addEventListener('resize',onResize)

window.onload = function() {
    // ここに実行したい処理を書く
    onResize();
};