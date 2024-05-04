const gray_back_map = document.getElementById("gray_back_map")//グレーの透かし背景
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
gray_back_map.addEventListener("mousedown",del)