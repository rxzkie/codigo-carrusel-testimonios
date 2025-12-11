<div id="inicioContainer">
    <div id="heroContent">
        <div id="heroImage">
            <img src="https://i.ibb.co/wFsS50tp/Fotomontaje-bobby.jpg" alt="Fotomontaje bobby">
        </div>
        <div id="videoCard" data-video="https://vimeo.com/1140384169">
            <div id="videoImage">
                <iframe id="hoverVideo" src="https://player.vimeo.com/video/1140384169?autoplay=1&loop=1&muted=1&title=0&byline=0&portrait=0&controls=0&background=1&autopause=0" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                <div id="videoOverlay">
                    <div id="playButton">
                        <span>▶ Mirar</span>
                    </div>
                </div>
            </div>
        </div>
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
*{margin:0;padding:0;box-sizing:border-box;}
html,body{width:100%;height:100%;overflow-x:hidden;}
#inicioContainer{width:100%;min-height:85vh;font-family:'Poppins',sans-serif;background:#000;display:flex;align-items:center;justify-content:center;padding:10px 25px;}
#heroContent{width:100%;position:relative;}
#heroImage{width:100%;max-height:80vh;border-radius:12px;overflow:hidden;box-shadow:0 10px 30px rgba(0,0,0,0.8);position:relative;}
#heroImage img{width:100%;height:auto;max-height:80vh;display:block;border-radius:12px;image-rendering:high-quality;-webkit-image-rendering:high-quality;}
#videoCard{position:absolute;bottom:30px;right:30px;width:380px;max-width:85%;aspect-ratio:16/9;border-radius:8px;overflow:hidden;cursor:pointer;z-index:10;box-shadow:0 6px 15px rgba(0,0,0,0.9);}
#videoImage{width:100%;height:100%;position:relative;}
#hoverVideo{position:absolute;top:0;left:0;width:100%;height:100%;border-radius:8px;border:none;}
#videoOverlay{position:absolute;inset:0;background:rgba(0,0,0,0.08);display:flex;flex-direction:column;align-items:flex-start;justify-content:flex-start;border-radius:8px;opacity:1;padding:10px;}
#playButton{background:rgba(255,255,255,0.45);color:#111;font-size:10px;padding:3px 8px;border-radius:20px;opacity:1;}
#playButton span{color:#111;font-size:12px;}
#videoModal{display:none;position:fixed;z-index:2147483647;left:0;top:0;width:100%;height:100%;background-color:rgba(0,0,0,0.95);backdrop-filter:blur(10px);}
#modalContent{position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:75vw;max-width:900px;height:auto;aspect-ratio:16/9;max-height:75vh;background:transparent;z-index:2147483647;}
#closeBtn{position:absolute;top:-45px;right:0;color:white;font-size:35px;font-weight:bold;cursor:pointer;z-index:2147483647;transition:opacity 0.3s;}
#closeBtn:hover{opacity:0.7;}
#videoWrapper{width:100%;height:100%;position:relative;z-index:2147483647;}
#videoWrapper iframe{width:100%;height:100%;border-radius:12px;border:none;}
@media (max-width:1024px){
html,body{overflow-x:hidden;margin:0;padding:0;}
#inicioContainer{padding:0;margin:0;min-height:auto;display:flex;flex-direction:column;align-items:stretch;justify-content:flex-start;background:#000;}
#heroContent{width:100%;position:relative;display:flex;flex-direction:column;align-items:stretch;}
#heroImage{width:100%;height:auto;min-height:auto;border-radius:0;position:relative;overflow:hidden;margin:0;padding:0;}
#heroImage img{width:100%;height:auto;display:block;border-radius:0;object-fit:cover;object-position:center top;image-rendering:high-quality;-webkit-image-rendering:high-quality;}
#videoCard{position:static;width:100%;max-width:100%;margin:20px auto 0;border-radius:0;display:block;}
#hoverVideo{border-radius:0;}
#videoOverlay{border-radius:0;}
}
@media (max-width:768px){
#inicioContainer{padding:0;margin:0;}
#heroContent{padding:0;margin:0;}
#heroImage{margin:0;padding:0;}
#heroImage img{object-fit:cover;object-position:center top;}
#videoCard{margin:15px auto 0;width:100%;}
#hoverVideo{border-radius:0;}
#videoOverlay{border-radius:0;}
}
@media (max-width:480px){
#inicioContainer{padding:0;margin:0;}
#heroContent{padding:0;margin:0;}
#heroImage{margin:0;padding:0;}
#heroImage img{object-fit:cover;object-position:center top;}
#videoCard{margin:10px auto 0;width:100%;}
#hoverVideo{border-radius:0;}
#videoOverlay{border-radius:0;padding:8px;}
}
</style>

<script>
document.addEventListener('DOMContentLoaded',function(){
    const videoCard=document.getElementById('videoCard');
    const modal=document.getElementById('videoModal');
    const videoFrame=document.getElementById('videoFrame');
    const closeBtn=document.getElementById('closeBtn');
    let lastVideoUrl='';
    const openVideoModal=(videoUrl)=>{
        if(modal.style.display==='block')return;
        lastVideoUrl=videoUrl;
        const vimeoId=videoUrl.split('/').pop();
        const embedUrl=`https://player.vimeo.com/video/${vimeoId}?autoplay=1&title=0&byline=0&portrait=0`;
        videoFrame.src=embedUrl;
        modal.style.display='block';
        setTimeout(()=>{modal.style.opacity='1';modal.style.visibility='visible';},10);
        document.body.style.overflow='hidden';
    };
    const closeVideoModal=()=>{
        modal.style.opacity='0';
        modal.style.visibility='hidden';
        setTimeout(()=>{
            modal.style.display='none';
            videoFrame.src='about:blank';
            document.body.style.overflow='auto';
        },200);
    };
    videoCard.addEventListener('click',function(e){
        e.preventDefault();
        const videoUrl=videoCard.getAttribute('data-video');
        openVideoModal(videoUrl);
    });
    closeBtn.addEventListener('click',closeVideoModal);
    modal.addEventListener('click',function(e){if(e.target===modal){closeVideoModal();}});
    document.addEventListener('keydown',function(e){if(e.key==='Escape'&&modal.style.display==='block'){closeVideoModal();}});
});
</script>
