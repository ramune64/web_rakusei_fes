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
    const os = getMobileOS();
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
                var scaleValue = 0.8
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
                maps.style.transform = `rotate(90deg) translateY(50%) translateX(${-1*width2}px)`;
            }
        
        //console.log(maps)
        //console.log("-----")
        }
    });
            
    
}

window.addEventListener('resize',onResize)
var floor_list = ["B1","F1","F2","F3","F4"];
function map_chenge(floor){
    del_ovb();
    //console.log(floor)
    const choices = document.getElementsByClassName("Map_choices");
    var cc = 0;
    floor_list.forEach(e => {
        var floor_element = document.getElementsByClassName(e)[0];
        if(floor == e){
            floor_element.style.display = "block";
            //floor_element.classList.add("Select");
            choices[cc].classList.remove("Select_cancel");
            choices[cc].classList.add("Select");
        }else{
            console.log(choices[cc]);
            floor_element.style.display = "none";
            choices[cc].classList.remove("Select");
            choices[cc].classList.add("Select_cancel");
        }
        cc += 1
    });
    const url = new URL(window.location.href)
    url.searchParams.set('floor', `${floor}`);
    window.history.replaceState({}, '', url);
    onResize();
}

const getMobileOS = () => {
    const ua = navigator.userAgent
    if (/android/i.test(ua)) {
      return "Android"
    }
    else if ((/iPad|iPhone|iPod/.test(ua))||(navigator.platform === 'MacIntel' && navigator.maxTouchPoints > 1)){
      return "iOS"
    }
  
    return "Other"
  }


window.onload = function() {
    // ここに実行したい処理を書く
    const searchParamsa = new URLSearchParams(window.location.search);
    for (const [key, val] of searchParamsa) {
        var val_name = val;//クエリを取得
    }
    console.log(val_name);
    if(typeof(val_name)!="undefined"){
        map_chenge(val_name);
        const choices = document.getElementsByClassName("Map_choices");
        console.log(floor_list.findIndex(val_name));
        choices[floor_list.findIndex(val_name)].classList.add("Select");
        //const url = new URL(window.location.href) // URLを取得
        //history.replaceState(null, '', url.pathname) // URLからクエリパラメータを削除
    }else{
        onResize();
        const choices = document.getElementsByClassName("Map_choices");
        choices[1].classList.add("Select");
    }
    const os = getMobileOS();
    console.log(os);
};
const ovb = document.getElementById("ovb1");
function del_ovb(){
    ovb.style.display = "none";
}
const ovb_room = document.getElementById("ovb_room");
const ovb_group0 = document.getElementById("ovb_group0");
const ovb_group1 = document.getElementById("ovb_group1");
const ovb_link1 = document.getElementById("ovb_link1");
const ovb_link2 = document.getElementById("ovb_link2");
function display_ovb(room,group0,group1){
    ovb_room.innerText = room;
    ovb_group0.innerText = group0;
    ovb_link1.href = `ichiran.php?group=${group0}`
    if(group0 == "天文部2"){
        ovb_group0.innerText = "天文部";
    }
    if(group0 == "鉄道研究会2"){
        ovb_group0.innerText = "鉄道研究会";
    }
    if(group1 != null){
        ovb_group1.innerText = group1;
        ovb_link2.innerText = "この団体の展示紹介を一覧で見る"
        ovb_link2.href = `ichiran.php?group=${group1}`
    }else{
        ovb_group1.innerText = "";
        ovb_link2.innerText = "";
    }
    ovb.style.display = "block";
}

function jump2list(group){

}
