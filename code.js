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

/* a1_cell.addEventListener("mouseover",{handleEvent: ccccc,imgs: img_list[0]},false);
a1_cell.addEventListener("mouseleave",{handleEvent: ccccc,imgs: img_list[0]},false);

d3_cell.addEventListener("mouseover",{handleEvent: ccccc,imgs: img_list[1]},false);
d3_cell.addEventListener("mouseleave",{handleEvent: ccccc,imgs: img_list[1]},false); */

/* const gray_back = document.getElementById("gray_back")
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
var w = document.getElementById("origin").clientWidth; */


/* document.getElementById("origin").onclick = function (event){
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
} */



//地図のジャンプするリンクをクリックされたらクエリに対象のidはっつけてじゃーんぷ
function jump(name){
    jumpurl = "../test.php?name=" + encodeURIComponent(name);
    window.location.href = jumpurl
    
}
function resize(){
    console.log("kawatta");
}
const header2 = document.querySelector('#header');
const inner_content = document.getElementsByClassName("inner_content");



const resizeObserver = new ResizeObserver((entries) => {
    for(let index = 0; index < inner_content.length;index++){
        /* inner_content[index].style.margin = `${((entries[0].contentRect.height+75)-157)*-1}px 0px 0px 0px`; */
        if(inner_content[index].classList.contains("Info_index")){}else{
            inner_content[index].style.padding = `${(entries[0].contentRect.height)+30}px 0px 0px 0px`;
        }
        if(inner_content[index].classList.contains("inner_top")){
            //inner_content[index].style.margin = `${((entries[0].contentRect.height))*-1}px 0px 0px 0px`;
            //inner_content[index].style.margin = `${((entries[0].contentRect.height))*-1}px auto 0px auto`;
        }
        else{
            console.log(inner_content[index])
            inner_content[index].style.margin = `${((entries[0].contentRect.height))*-1}px auto 0px auto`;
        }
    /* inner_content.forEach(content => {
        content.style.marginLeft = `-${entries[0].contentRect.height+5}px`
    }); */
    //inner_content[index].style.margin = `${((entries[0].contentRect.height)*-1)}px auto 0px auto`;
    }
});
resizeObserver.observe(header2);

/* const boxes = document.getElementsByClassName("part");
const minMargin = 25;
function adjustMargin() {
    console.log(boxes);
    boxes.forEach(box => {
        var computedStyle = box.style;
        var marginRight = computedStyle.marginRight;
        var marginLeft = computedStyle.marginLeft;
        console.log(marginRight);
        if (marginRight < minMargin) {
            box.style.marginRight = minMargin + 'px';
        }
        if (marginLeft < minMargin) {
            box.style.marginLeft = minMargin + 'px';
        }
    });
}

window.addEventListener("resize", adjustMargin); *///パート一覧

/* const resizeObserver = new ResizeObserver(entries => {
    for (let entry of entries) {
        // 要素の高さの変化を検知
        console.log('Element height changed to:', entry.contentRect.height);
        // ここで何かしらのイベントを実行する
        alert('Element height changed to: ' + entry.contentRect.height);
    }
});

resizeObserver.observe(header); */

const other_op = document.getElementById("other_op");
const index_op = document.getElementById("index_op");
const index_video = document.getElementById("index_video");
const skip = document.getElementById("skip");
const op_kotei = document.getElementById("op_kotei");
function animation_index(){
    skip.style.display="none";
    index_op.classList.add("out_anime");
    //index_op.style.display="none";
    setTimeout(() => {
        other_op.style.display = "block";
        other_op.classList.add("in_anime");
    }, 1500);
    setTimeout(()=>{
        op_kotei.style.display = "block";
    },2000);
}

index_video.addEventListener("ended",animation_index);
skip.addEventListener("click",animation_index);

var club = null;
var sections = null;
var pre_club = null;
var pre_sections0 = null;
var pre_sections1 = null;
var pre_sections2 = null;
var pre_sections3 = null;
var counters = 0;


function magazine(club_name){
    if(counters >= 1){
        counters += 1;
    }else{
    counters = 1;
    }
    if(club!=null){//前にどこかが押されていたら前の奴はしまう。
        club.classList.remove("animation_d");
        club.classList.add("re_animation");
        club.querySelectorAll("div")[0].querySelectorAll("a")[0].lastChild.classList.remove("rorare_arrow");
        club.querySelectorAll("div")[0].querySelectorAll("a")[0].lastChild.classList.add("rorare_arrow_rev");
    }

    club = document.getElementById(club_name);
    if(counters%4 == 0){
        setTimeout(() => {
            pre_sections0.forEach(section => {
            section.style.display = "none";
            });
        },200);
    }else if(counters%4 == 1){
        setTimeout(() => {
            pre_sections1.forEach(section => {
            section.style.display = "none";
            });
        },200);
    }else if(counters%4 == 2){
        setTimeout(() => {
            pre_sections2.forEach(section => {
            section.style.display = "none";
            });
        },200);
    }else if(counters%4 == 3){
        setTimeout(() => {
            pre_sections3.forEach(section => {
            section.style.display = "none";
            });
        },200);
    }
    if(club == pre_club){//前と同じ奴が押されていたら、200ms後に今の子要素をを消すだけ。
        pre_club = null;
        console.log(pre_club);
    }else{//前と違うのを押されたら、
            sections = club.querySelectorAll("section");
            club.querySelectorAll("div")[0].querySelectorAll("a")[0].lastChild.classList.remove("rorare_arrow_rev");
            club.querySelectorAll("div")[0].querySelectorAll("a")[0].lastChild.classList.add("rorare_arrow");
            sections.forEach(section => {
                section.style.display = "flex";
            });
            club.classList.remove("re_animation");
            club.classList.add("animation_d");
            pre_club = club;
            if(counters%4 == 0){
                pre_sections1 = sections;
            }else if(counters%4 == 1){
                pre_sections2 = sections;
            }else if(counters%4 == 2){
                pre_sections3 = sections;
            }else if(counters%4 == 3){
                pre_sections0 = sections;
            }
        }
}





