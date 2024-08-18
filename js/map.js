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

const excel = document.getElementsByClassName("Excel")
const parent = document.getElementsByClassName("Map_parent")[0]


function onResize(){
    
    const win_width = window.innerWidth;
    
    Array.from(excel).forEach(excel => {
        const floor = document.getElementsByClassName(excel.classList[1])[0]
        //console.log(floor.style.display)
        if(floor.style.display == "block"){
            if (win_width > 1080){
                var scaleValue = (1/1250) * win_width + (-8/125)
                excel.style.transform = `scale(${scaleValue})`;
                //console.log(scaleValue)
                var maps = excel.firstElementChild;
                const height3 = maps.getBoundingClientRect().height;
                const width3 = maps.getBoundingClientRect().width;
                if(height3 < width3){
                    var height2 = height3;
                    var width2 = width3;
                }else{
                    var height2 = width3;
                    var width2 = height3;
                }
                parent.style.height = `${60 + 40 + 40 + height2}px`;
                maps.style.transform = "";
            }else{
                var scaleValue = 0.9
                excel.style.transform = `scale(${scaleValue})`;
                var maps = excel.firstElementChild;
                const height3 = maps.getBoundingClientRect().height;
                const width3 = maps.getBoundingClientRect().width;
                if(height3 > width3){
                    var height2 = height3;
                    var width2 = width3;
                }else{
                    var height2 = width3;
                    var width2 = height3;
                }
                const choices = document.getElementById("Choices");
                var choice_h = choices.getBoundingClientRect().height + 30
                parent.style.height = `${choice_h + 40 + 40 + height2 + 30}px`;
                maps.style.transform = `rotate(90deg) translateY(50%) translateX(${-1*width2/4*3}px)`;
            }
        
        //console.log(maps)
        //console.log("-----")
        }
    });
            
    
}

window.addEventListener('resize',onResize)

window.onload = function() {
    // ここに実行したい処理を書く
    onResize();
};
var floor_list = ["F2","F3","F4"];
function map_chenge(floor){
    const choices = document.getElementsByClassName("Map_choices");
    var cc = 1;
    floor_list.forEach(e => {
        var floor_element = document.getElementsByClassName(e)[0];
        console.log(floor_element);
        console.log(floor_element.style.display);
        if(floor == e){
            floor_element.style.display = "block";
            //floor_element.classList.add("Select");
            choices[cc].classList.remove("Select_cancel");
            choices[cc].classList.add("Select");
        }else{
            floor_element.style.display = "none";
            choices[cc].classList.remove("Select");
            choices[cc].classList.add("Select_cancel");
        }
        cc += 1
    });
    onResize();
}