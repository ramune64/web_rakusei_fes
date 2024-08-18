//6186milkteaさんの天才的なアイデア、パクらせてもらいました。ありがとうございます。byЯAMUNE


function load(){
    const searchParamsa = new URLSearchParams(window.location.search);//URLを取得
    for (const [key, val] of searchParamsa) {
        val_name = val;//クエリを取得
      }
    if(typeof(val_name)!="undefined"){//クエリになんかあったら
        const name_offset = document.getElementById(val_name).offsetTop - 100;//高さ獲得(headerを引き算)
        window.scrollTo(0,name_offset);//すくろーーる
    }

    const url = new URL(window.location.href) // URLを取得
    history.replaceState(null, '', url.pathname) // URLからクエリパラメータを削除
}
window.addEventListener("load",load);//読み込まれたとき実行