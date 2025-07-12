<div id="aboutContainer">
    <div id="aboutImageContainer" data-video="https://vimeo.com/1100899412">
        <div id="aboutImage">
            <iframe id="hoverVideo" src="https://player.vimeo.com/video/1100899412?autoplay=1&loop=1&muted=1&title=0&byline=0&portrait=0&controls=0&background=1&autopause=0" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            <div id="videoOverlay">
                <div id="playButton">
                    <span>▶ Mirar</span>
                </div>
            </div>
        </div>
    </div>
    <div id="aboutContent">
        <h1 id="aboutTitle">ACERCA DE</h1>
        <p id="aboutText">
            He dedicado más de 20 años a la banca privada e inversión, liderando cargos como CEO y fundador de un hedge fund en Bahamas con más de 1 billón de dólares bajo gestión. He acompañado a empresarios y herederos en Latinoamérica y EE.UU., ayudándolos a ordenar su patrimonio y definir estrategias efectivas para sus empresas. Hoy, mi misión es ser tu guía para tomar decisiones con claridad, visión y resultados.
        </p>
    </div>
</div>

<div id="videoModal">
    <div id="modalContent">
        <span id="closeBtn">&times;</span>
        <div id="videoWrapper">
            <iframe id="videoFrame" src="" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
        </div>
    </div>
</div>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');
#aboutContainer{display:flex;align-items:center;justify-content:center;min-height:80vh;padding:50px;gap:80px;font-family:'Poppins',sans-serif;background-color:#000;color:#fff;line-height:1.6;}
#aboutImageContainer{flex:1;max-width:500px;position:relative;aspect-ratio:16/9;border-radius:10px;overflow:hidden;cursor:pointer;}
#aboutImage{width:100%;height:100%;position:relative;}
#hoverVideo{position:absolute;top:0;left:0;width:100%;height:100%;border-radius:10px;border:none;}
#videoOverlay{position:absolute;inset:0;background:rgba(0,0,0,0.3);display:flex;flex-direction:column;align-items:flex-start;justify-content:flex-start;border-radius:10px;opacity:0;transition:opacity 0.3s ease;padding:15px;}
#aboutImageContainer:hover #videoOverlay{opacity:1;}
#playButton{background:rgba(255,255,255,0.7);color:#333;padding:8px 16px;border-radius:20px;font-size:14px;font-weight:600;transition:all 0.3s;cursor:pointer;display:inline-flex;align-items:center;gap:5px;opacity:1 !important;}
#aboutImageContainer:hover #playButton{background:rgba(255,255,255,1);transform:scale(1.05);}
#aboutContent{flex:1;max-width:600px;}
#aboutTitle{font-size:48px;font-weight:bold;margin-bottom:30px;color:#fff;text-transform:uppercase;letter-spacing:2px;}
#aboutText{font-size:18px;line-height:1.8;color:#ddd;text-align:justify;}
#videoModal{display:none;position:fixed;z-index:2147483647;left:0;top:0;width:100%;height:100%;background-color:rgba(0,0,0,0.95);backdrop-filter:blur(10px);}
#modalContent{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:80vw;max-width:1000px;height:auto;aspect-ratio:16/9;max-height:80vh;background:transparent;z-index:2147483647;}
#closeBtn{position:absolute;top:-50px;right:0;color:white;font-size:40px;font-weight:bold;cursor:pointer;z-index:2147483647;transition:opacity 0.3s;}
#closeBtn:hover{opacity:0.7;}
#videoWrapper{width:100%;height:100%;position:relative;z-index:2147483647;}
#videoWrapper iframe{width:100%;height:100%;border-radius:15px;border:none;}
#videoOverlay{opacity:1 !important;}
#playButton{opacity:1 !important;}
#aboutImageContainer:hover #videoOverlay{opacity:1 !important;}
#videoOverlay{background:rgba(0,0,0,0.25) !important;}
@media (max-width:1024px){#aboutContainer{flex-direction:column;gap:40px;padding:30px;}#aboutTitle{font-size:36px;text-align:center;}#aboutText{font-size:16px;}#aboutImageContainer{max-width:100%;order:2;}#aboutContent{order:1;}#modalContent{width:90vw;max-height:70vh;}}
@media (max-width:768px){#aboutContainer{flex-direction:column;gap:30px;padding:20px;}#aboutContent{order:1;}#aboutImageContainer{order:2;width:100%;max-width:100%;aspect-ratio:16/9;}#aboutTitle{font-size:28px;}#aboutText{font-size:14px;}#modalContent{width:95vw;max-height:60vh;}#playButton{font-size:15px;padding:10px 20px;}}
@media (max-width:480px){#aboutContainer{padding:15px;gap:20px;min-height:70vh;}#aboutContent{order:1;}#aboutImageContainer{order:2;width:100%;max-width:100%;aspect-ratio:16/9;}#aboutTitle{font-size:24px;margin-bottom:20px;}#aboutText{font-size:13px;line-height:1.6;}#modalContent{width:98vw;max-height:50vh;}#playButton{font-size:12px;padding:8px 15px;}}
@media (max-width:360px){#aboutContainer{padding:10px;}#aboutTitle{font-size:20px;}#aboutText{font-size:12px;}#playButton{font-size:10px;padding:4px 8px;}}
</style>

<script>
document.addEventListener('DOMContentLoaded',function(){
    const aboutImageContainer=document.getElementById('aboutImageContainer');
    const hoverVideo=document.getElementById('hoverVideo');
    const modal=document.getElementById('videoModal');
    const videoFrame=document.getElementById('videoFrame');
    const closeBtn=document.getElementById('closeBtn');
    
    const openVideoModal=(videoUrl)=>{
        const vimeoId=videoUrl.split('/').pop();
        const embedUrl=`https://player.vimeo.com/video/${vimeoId}?autoplay=1&title=0&byline=0&portrait=0`;
        videoFrame.src=embedUrl;
        modal.style.display='block';
        document.body.style.overflow='hidden';
    };
    
    const closeVideoModal=()=>{
        modal.style.display='none';
        videoFrame.src='';
        document.body.style.overflow='auto';
    };
    
    aboutImageContainer.addEventListener('click',(e)=>{
        e.preventDefault();
        const videoUrl=aboutImageContainer.getAttribute('data-video');
        openVideoModal(videoUrl);
    });
    
    closeBtn.addEventListener('click',closeVideoModal);
    
    modal.addEventListener('click',(e)=>{
        if(e.target===modal){
            closeVideoModal();
        }
    });
    
    document.addEventListener('keydown',(e)=>{
        if(e.key==='Escape'&&modal.style.display==='block'){
            closeVideoModal();
        }
    });
});
</script>
