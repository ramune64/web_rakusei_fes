const testsss = document.getElementsByClassName("fi");
const var_id = document.getElementsByClassName("var_id");
const sub_id = document.getElementsByClassName("sub");

function view_in_class(evt){
    /* console.log("yeeeeeeeeee"); */
    sub_id[this.indexes].classList.remove("fi_line_anime_remove");
    sub_id[this.indexes].classList.add("fi_line_anime");
}

function view_out_class(evt){
    /* console.log("noooooooo"); */
    sub_id[this.indexes].classList.remove("fi_line_anime");
    sub_id[this.indexes].classList.add("fi_line_anime_remove");
}

var testsssa = Array.from(testsss);
testsssa.forEach(function(ele_class,index){
    ele_id = ele_class.id;
    ele_id = document.getElementById(ele_id);
    ele_id.addEventListener("mouseover", {handleEvent: view_in_class,indexes: index},false);
})

var var_ids = Array.from(var_id);
var_ids.forEach(function(ele_class,index){
    ele_id = ele_class.id;
    ele_id = document.getElementById(ele_id);
    ele_id.addEventListener("mouseleave",{handleEvent: view_out_class,indexes: index},false);
})








//⇓改善前のゴミ



/* const fi = document.getElementById('first');
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
} */


/* ze_fi.addEventListener('mouseover', {handleEvent: view_in,val1: under[0]},false);
fi.addEventListener('mouseleave',{handleEvent: view_out,val1: under[0]},false);
ze_se.addEventListener('mouseover', {handleEvent: view_in,val1: under[1]},false);
se.addEventListener('mouseleave',{handleEvent: view_out,val1: under[1]},false);
ze_th.addEventListener('mouseover', {handleEvent: view_in,val1: under[2]},false);
th.addEventListener('mouseleave',{handleEvent: view_out,val1: under[2]},false);

ze_last.addEventListener('mouseover', {handleEvent: view_in,val1: under.slice(-1)[0]},false);
last.addEventListener('mouseleave',{handleEvent: view_out,val1: under.slice(-1)[0]},false); */