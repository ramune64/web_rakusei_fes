const pdfPath = "./pdfs/殺ドはカス.pdf";
var pdfjsLib = window["pdfjs-dist/build/pdf"];
pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.5.141/pdf.worker.min.js';
const loadingTask = pdfjsLib.getDocument(pdfPath);
const kotei = document.getElementById("kotei");
const next_pdf = document.getElementById("next_pdf");
const prev_pdf = document.getElementById("prev_pdf");
var all_page_num = null;
var now_page = 1;
async function page_show_pdf(page_num){
    const pdf = await loadingTask.promise;
    all_page_num = pdf.numPages;
    // 最初のページを取得
    var page = await pdf.getPage(page_num);
    const scale = 1.0;
    const viewport = page.getViewport({ scale });
    
    // 高DPIをサポート
    const outputScale = window.devicePixelRatio || 1;
  
    // PDFのページ寸法を使用してキャンバスを準備
    const canvas = document.getElementById("pdf");
    const context = canvas.getContext("2d");
    const aspect = viewport.width/viewport.height;
    canvas.width = Math.floor(viewport.width * outputScale);
    canvas.height = Math.floor(viewport.height * outputScale);
    canvas.style.width = Math.floor((window.screen.height - kotei.clientHeight)*aspect/outputScale*0.8) + "px";
    canvas.style.height = Math.floor((window.screen.height - kotei.clientHeight)/outputScale*0.8) + "px";
  
    const transform = outputScale !== 1 
      ? [outputScale, 0, 0, outputScale, 0, 0] 
      : null;
  
    // PDFのページをキャンバスにレンダリング
    const renderContext = {
      canvasContext: context,
      transform,
      viewport,
    };
    page.render(renderContext);
  };
page_show_pdf(now_page);
prev_pdf.style.display="none";
next_pdf.addEventListener("click",(e)=>{
    now_page += 1;
    if(now_page==1){
        prev_pdf.style.display="none";
    }else{
        prev_pdf.style.display="block";
    }
    if(now_page==all_page_num){
        next_pdf.style.display="none";
    }else{
        next_pdf.style.display="block";
    }
    page_show_pdf(now_page);
})
prev_pdf.addEventListener("click",(e)=>{
    now_page -= 1;
    if(now_page==1){
        prev_pdf.style.display="none";
    }else{
        prev_pdf.style.display="block";
    }
    if(now_page==all_page_num){
        next_pdf.style.display="none";
    }else{
        next_pdf.style.display="block";
    }
    page_show_pdf(now_page);
})