var pre_exhibit = null;
var pre_border = null;
var pre_section_exhibit = null;
var element = null;

function view_list(name){
    console.log("------------------------------------------");
    console.log("pre:",pre_exhibit);
    if(pre_exhibit != null){//どれかが出てたら
        console.log("Not_Null");
        var aaa = pre_exhibit;
        aaa.classList.remove("view_in");
        aaa.classList.add("view_out");
        setTimeout(()=>{
            console.log("border:",pre_exhibit.firstElementChild.style.borderBottom);
            aaa.firstElementChild.style.borderBottom = "";
            aaa.lastElementChild.style.display = "none";
        },400);
        element.firstElementChild.firstElementChild.lastElementChild.classList.remove("rorare_arrow");
        element.firstElementChild.firstElementChild.lastElementChild.classList.add("rorare_arrow_rev");
    }
    /* console.log(name); */
    element = document.getElementById(name);
    if(pre_exhibit == element){
        console.log("pre=now");
        setTimeout(()=>{
            pre_exhibit = null;
        },450);
    }else{
        /* console.log(element.firstElementChild); */
        element.firstElementChild.style.borderBottom = "2px solid #CEA34F";
        element.lastElementChild.style.display = "block";
        element.classList.remove("view_out");
        element.classList.add("view_in");
        /* console.log(element.firstElementChild.firstElementChild.lastElementChild); */
        element.firstElementChild.firstElementChild.lastElementChild.classList.remove("rorare_arrow_rev");
        element.firstElementChild.firstElementChild.lastElementChild.classList.add("rorare_arrow");
        setTimeout(()=>{
            pre_exhibit = element;
        },450);
        
        /* pre_border = element.firstElementChild.style.borderBottom;
        pre_section_exhibit = element.lastElementChild.style.display; */
        console.log("Else");
    }
}

function map_jump(floor){
    window.location.href = `map.php?floor=${floor}`;
}

function load(){
    const searchParamsa = new URLSearchParams(window.location.search);//URLを取得
    for (const [key, val] of searchParamsa) {
        val_name = val;//クエリを取得
    }
    if(typeof(val_name)!="undefined"){//クエリになんかあったら
        view_list(val_name);
        const name_offset = document.getElementById(val_name).offsetTop - 120;//高さ獲得(headerを引き算)
        window.scrollTo(0,name_offset);//すくろーーる
    }

    const url = new URL(window.location.href) // URLを取得
    history.replaceState(null, '', url.pathname) // URLからクエリパラメータを削除
}
window.addEventListener("load",load);//読み込まれたとき実行