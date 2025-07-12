<div id="videoCarousel">
    <div id="carouselContainer">
        <div id="videoTrack">
            <div id="videoItem1" data-index="0" data-video="https://vimeo.com/726421994">
                <div id="videoThumbnail1" style="background-image: url('https://i.ibb.co/pBkKWfc8/Puedro-Cueto-Mentorias-Bobby.png');">
                    <iframe id="hoverVideo1" style="display:none; position:absolute; top:0; left:0; width:100%; height:100%; border-radius:15px; border:none;" src="https://player.vimeo.com/video/726421994?autoplay=1&loop=1&muted=1&title=0&byline=0&portrait=0&controls=0&background=1" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                    <div id="videoOverlay1">
                        <div id="playButton1">
                            <span>▶ Mirar</span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="videoItem2" data-index="1" data-video="https://vimeo.com/726421994">
                <div id="videoThumbnail2" style="background-image: url('https://i.ibb.co/0VtKRhn3/Jose-Escoabar-Mentorias-Bobby.png');">
                    <iframe id="hoverVideo2" style="display:none; position:absolute; top:0; left:0; width:100%; height:100%; border-radius:15px; border:none;" src="https://player.vimeo.com/video/726421994?autoplay=1&loop=1&muted=1&title=0&byline=0&portrait=0&controls=0&background=1" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                    <div id="videoOverlay2">
                        <div id="playButton2">
                            <span>▶ Mirar</span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="videoItem3" data-index="2" data-video="https://vimeo.com/726421994">
                <div id="videoThumbnail3" style="background-image: url('https://i.ibb.co/XxRSYQ8C/Marco-Pereda-Mentorias-Bobby.png');">
                    <iframe id="hoverVideo3" style="display:none; position:absolute; top:0; left:0; width:100%; height:100%; border-radius:15px; border:none;" src="https://player.vimeo.com/video/726421994?autoplay=1&loop=1&muted=1&title=0&byline=0&portrait=0&controls=0&background=1" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                    <div id="videoOverlay3">
                        <div id="playButton3">
                            <span>▶ Mirar</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');
*{box-sizing:border-box;margin:0;padding:0;}
html,body{margin:0;padding:0;overflow-x:hidden;width:100%;height:100%;box-sizing:border-box;}
#videoCarousel{width:100%;max-width:1440px;margin:0 auto;padding:20px;font-family:'Poppins',sans-serif;position:relative;display:flex;align-items:center;justify-content:center;z-index:1;}
#carouselContainer{position:relative;overflow:hidden;border-radius:15px;width:100%;cursor:grab;user-select:none;margin:0;z-index:1;}
#carouselContainer:active{cursor:grabbing;}
#videoTrack{display:flex;transition:transform 0.5s cubic-bezier(0.25,0.46,0.45,0.94);will-change:transform;height:100%;align-items:center;transform:translateX(0);width:100%;margin:0 auto;}
#videoItem1,#videoItem2,#videoItem3{flex:0 0 calc(35% - 15px);aspect-ratio:16/9;border-radius:15px;position:relative;cursor:pointer;margin-right:20px;box-sizing:border-box;overflow:hidden;transition:all 0.3s ease;}
#videoThumbnail1,#videoThumbnail2,#videoThumbnail3{width:100%;height:100%;background-size:cover;background-position:center;background-repeat:no-repeat;border-radius:15px;position:relative;transition:all 0.3s ease;}
#videoOverlay1,#videoOverlay2,#videoOverlay3{position:absolute;inset:0;background:rgba(0,0,0,0.5);display:flex;flex-direction:column;align-items:flex-start;justify-content:flex-start;border-radius:15px;opacity:0;transition:opacity 0.3s ease;padding:15px;}
#videoItem1:hover #videoOverlay1,#videoItem2:hover #videoOverlay2,#videoItem3:hover #videoOverlay3{opacity:1;}
#playButton1,#playButton2,#playButton3{background:rgba(255,255,255,0.9);color:#333;padding:8px 16px;border-radius:20px;font-size:14px;font-weight:600;transition:all 0.3s ease;cursor:pointer;display:inline-flex;align-items:center;gap:5px;touch-action:manipulation;-webkit-tap-highlight-color:transparent;}
#videoItem1:hover #playButton1,#videoItem2:hover #playButton2,#videoItem3:hover #playButton3{background:rgba(255,255,255,1);transform:scale(1.05);}

#videoModal {
  display: none;
  position: fixed;
  z-index: 10000;
  left: 0;
  top: 0;
  width: 100vw;
  height: 100vh;
  background-color: rgba(0,0,0,0.92);
  backdrop-filter: blur(5px);
  align-items: center;
  justify-content: center;
}
#videoModal.active {
  display: flex;
}
#modalContent {
  position: relative;
  width: 95vw;
  max-width: 900px;
  height: 60vw;
  max-height: 70vh;
  background: transparent;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 18px;
  box-shadow: 0 8px 32px rgba(0,0,0,0.25);
  overflow: hidden;
}
#closeBtn {
  position: absolute;
  top: -35px;
  right: 0;
  color: white;
  font-size: 35px;
  font-weight: bold;
  cursor: pointer;
  z-index: 10001;
  touch-action: manipulation;
  -webkit-tap-highlight-color: transparent;
}
#closeBtn:hover {
  opacity: 0.7;
}
#videoWrapper {
  width: 100%;
  height: 100%;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
}
#videoWrapper iframe {
  width: 100%;
  height: 100%;
  border-radius: 14px;
  background: #000;
}
.video-modal-responsive {
  position: relative;
  width: 100%;
  padding-bottom: 56.25%;
  height: 0;
  overflow: hidden;
}
.video-modal-responsive iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: none;
  border-radius: 10px;
}
@media (hover:none){#videoItem1:hover #videoOverlay1,#videoItem2:hover #videoOverlay2,#videoItem3:hover #videoOverlay3{opacity:0.8;}#videoItem1:active #videoOverlay1,#videoItem2:active #videoOverlay2,#videoItem3:active #videoOverlay3{opacity:1;}}
@media (min-width:1920px){#videoCarousel{padding:25px;max-width:1600px;}#videoItem1,#videoItem2,#videoItem3{flex:0 0 calc(33% - 18px);margin-right:25px;}#playButton1,#playButton2,#playButton3{font-size:15px;padding:9px 18px;}}

@media (max-width:1400px){#videoCarousel{padding:18px;}#videoItem1,#videoItem2,#videoItem3{flex:0 0 calc(38% - 15px);}#playButton1,#playButton2,#playButton3{font-size:13px;padding:7px 14px;}}
@media (max-width:1366px) and (max-height:768px){#videoCarousel{padding:15px;}#videoItem1,#videoItem2,#videoItem3{flex:0 0 calc(40% - 15px);}#playButton1,#playButton2,#playButton3{font-size:12px;padding:6px 12px;}}
@media (max-width:1366px) and (min-height:769px){#videoCarousel{padding:16px;}#videoItem1,#videoItem2,#videoItem3{flex:0 0 calc(38% - 15px);}#playButton1,#playButton2,#playButton3{font-size:12px;padding:6px 12px;}}
@media (max-width:1200px){#videoCarousel{padding:15px;}#videoItem1,#videoItem2,#videoItem3{flex:0 0 calc(42% - 15px);}#playButton1,#playButton2,#playButton3{font-size:12px;padding:6px 12px;}}
@media (max-width:992px){#videoCarousel{padding:12px;}#videoItem1,#videoItem2,#videoItem3{flex:0 0 calc(45% - 15px);}#playButton1,#playButton2,#playButton3{font-size:11px;padding:5px 10px;}}
@media (max-width:1024px){
#playButton1,#playButton2,#playButton3{
    display:flex !important;
    opacity:1 !important;
    pointer-events:auto !important;
    position:absolute;
    top:18px;
    left:18px;
    z-index:1000 !important;
    background:#fff;
    color:#222;
    font-size:15px;
    font-weight:700;
    padding:7px 18px 7px 14px;
    border-radius:22px;
    box-shadow:0 2px 8px rgba(0,0,0,0.12);
    align-items:center;
    gap:7px;
    touch-action:manipulation;
    -webkit-tap-highlight-color:transparent;
}
}
@media (min-width:1025px){
#playButton1,#playButton2,#playButton3{display:none;}
#videoItem1:hover #playButton1,#videoItem2:hover #playButton2,#videoItem3:hover #playButton3{display:flex;opacity:1;pointer-events:auto;}
}
@media (max-width:576px){#carouselContainer{overflow-x:auto;overflow-y:hidden;scroll-snap-type:x mandatory;display:block;width:100%;-webkit-overflow-scrolling:touch;}#videoTrack{display:flex;flex-wrap:nowrap;gap:0;min-width:100vw;overflow:visible;width:auto;}#videoItem1,#videoItem2,#videoItem3{scroll-snap-align:center;min-width:85vw;max-width:90vw;flex:0 0 85vw;margin-right:12px;position:relative;}#videoTrack::-webkit-scrollbar{display:none;}#carouselContainer::-webkit-scrollbar{display:none;}#playButton1,#playButton2,#playButton3{position:absolute;top:18px;left:18px;right:auto;transform:none;z-index:10;opacity:1 !important;display:flex !important;pointer-events:auto !important;background:#fff;color:#222;font-size:15px;font-weight:700;padding:7px 18px 7px 14px;border-radius:22px;box-shadow:0 2px 8px rgba(0,0,0,0.12);align-items:center;gap:7px;touch-action:manipulation;-webkit-tap-highlight-color:transparent;}#playButton1 span,#playButton2 span,#playButton3 span{font-size:15px;font-weight:700;}#videoOverlay1,#videoOverlay2,#videoOverlay3{opacity:0 !important;}#hoverVideo1,#hoverVideo2,#hoverVideo3{display:none !important;}
}
@media (min-width:577px){#playButton1,#playButton2,#playButton3{position:absolute;top:18px;left:18px;right:auto;transform:none;bottom:auto;opacity:0;pointer-events:none;transition:opacity 0.3s;}#videoItem1:hover #playButton1,#videoItem2:hover #playButton2,#videoItem3:hover #playButton3{opacity:1;pointer-events:auto;}#videoOverlay1,#videoOverlay2,#videoOverlay3{opacity:0;transition:opacity 0.3s;}#videoItem1:hover #videoOverlay1,#videoItem2:hover #videoOverlay2,#videoItem3:hover #videoOverlay3{opacity:1;}#hoverVideo1,#hoverVideo2,#hoverVideo3{display:none;}#videoItem1:hover #hoverVideo1,#videoItem2:hover #hoverVideo2,#videoItem3:hover #hoverVideo3{display:block;}
}
@media (min-width:577px){#videoTrack{overflow-x:unset;scroll-snap-type:none;gap:0;}#videoItem1,#videoItem2,#videoItem3{min-width:unset;max-width:unset;flex:0 0 calc(35% - 15px);}}
@media (max-width:576px){#videoCarousel{padding:8px;min-height:auto;display:flex;align-items:center;justify-content:center;position:relative;width:100%;overflow-x:hidden;box-sizing:border-box;}#carouselContainer{border-radius:8px;margin:0;width:100%;max-width:100%;left:0;transform:translateX(0);position:relative;box-sizing:border-box;}#videoItem1,#videoItem2,#videoItem3{flex:0 0 100%;margin-right:0;border-radius:8px;}#videoThumbnail1,#videoThumbnail2,#videoThumbnail3{border-radius:8px;}#videoOverlay1,#videoOverlay2,#videoOverlay3{border-radius:8px;padding:8px;}#modalContent{width:96%;height:65vh;margin:12% auto;}#playButton1,#playButton2,#playButton3{font-size:11px;padding:5px 10px;}}
@media (max-width:480px){#videoCarousel{padding:5px;min-height:auto;display:flex;align-items:center;justify-content:center;position:relative;width:100%;overflow-x:hidden;box-sizing:border-box;}#carouselContainer{border-radius:5px;margin:0;width:100%;max-width:100%;left:0;transform:translateX(0);position:relative;box-sizing:border-box;}#videoItem1,#videoItem2,#videoItem3{flex:0 0 100%;margin-right:0;border-radius:5px;}#videoThumbnail1,#videoThumbnail2,#videoThumbnail3{border-radius:5px;}#videoOverlay1,#videoOverlay2,#videoOverlay3{border-radius:5px;padding:5px;}#modalContent{width:98%;height:60vh;margin:15% auto;}#playButton1,#playButton2,#playButton3{font-size:10px;padding:4px 8px;}}
@media (max-width: 900px) {
  #modalContent {
    width: 98vw;
    height: 56vw;
    max-width: 98vw;
    max-height: 60vh;
  }
}
@media (max-width: 576px) {
  #modalContent {
    width: 99vw;
    height: 56vw;
    max-width: 99vw;
    max-height: 45vh;
    min-height: 180px;
    border-radius: 10px;
  }
  #closeBtn {
    top: -28px;
    font-size: 28px;
  }
}
</style>

<div id="videoModal">
    <div id="modalContent">
        <span id="closeBtn">&times;</span>
        <div id="videoWrapper">
            <iframe id="videoFrame" src="" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded',function(){
    const track=document.getElementById('videoTrack');
    const items=document.querySelectorAll('#videoItem1,#videoItem2,#videoItem3');
    const container=document.getElementById('carouselContainer');
    const modal=document.getElementById('videoModal');
    const videoFrame=document.getElementById('videoFrame');
    let currentSlide=0;
    const totalSlides=items.length;
    let isTransitioning=false;
    let startX=0;
    let currentX=0;
    let isDragging=false;
    function isMobile(){return window.innerWidth<=1024;}
    const setupCarouselItems=()=>{
        if(window.innerWidth<=576){
            items.forEach((item,index)=>{
                item.style.marginRight=index===items.length-1?"0":"12px";
                item.style.flex="0 0 85vw";
            });
            track.style.transform="translateX(0)";
        }else{
            items.forEach((item,index)=>{
                item.style.marginRight=index===items.length-1?"0":"20px";
                item.style.flex="0 0 calc(35% - 15px)";
            });
            track.style.transform="translateX(0)";
        }
    };
    const getEventX=(e)=>e.type.includes('mouse')?e.clientX:e.touches[0].clientX;
    const handleStart=(e)=>{
        if(window.innerWidth>576)return;
        isDragging=true;
        startX=getEventX(e);
        currentX=startX;
        track.style.transition='none';
        if(e.type.includes('touch'))e.preventDefault();
        if(e.type==='mousedown'){
            document.addEventListener('mousemove',handleMove);
            document.addEventListener('mouseup',handleEnd);
            e.preventDefault();
        }
    };
    const handleMove=(e)=>{
        if(!isDragging||window.innerWidth>576)return;
        e.preventDefault();
        currentX=getEventX(e);
        const deltaX=currentX-startX;
        const baseTranslate=-currentSlide*container.offsetWidth;
        const dragOffset=deltaX*0.7;
        track.style.transform=`translateX(${baseTranslate+dragOffset}px)`;
    };
    const handleEnd=(e)=>{
        if(!isDragging||window.innerWidth>576)return;
        isDragging=false;
        const deltaX=currentX-startX;
        const threshold=container.offsetWidth*0.15;
        track.style.transition='transform 0.5s cubic-bezier(0.25,0.46,0.45,0.94)';
        if(Math.abs(deltaX)>threshold){
            if(deltaX<0&&currentSlide<totalSlides-1){currentSlide++;}
            else if(deltaX>0&&currentSlide>0){currentSlide--;}
        }
        track.style.transform=`translateX(${-currentSlide*container.offsetWidth}px)`;
        if(e.type==='mouseup'){
            document.removeEventListener('mousemove',handleMove);
            document.removeEventListener('mouseup',handleEnd);
        }
    };
    container.addEventListener('touchstart',handleStart,{passive:false});
    container.addEventListener('touchmove',handleMove,{passive:false});
    container.addEventListener('touchend',handleEnd,{passive:false});
    container.addEventListener('mousedown',handleStart);
    items.forEach((item,index)=>{
        const playBtn=item.querySelector('[id^="playButton"]');
        const openVideo=()=>{
            const videoUrl=item.getAttribute('data-video');
            const vimeoId=videoUrl.split('/').pop();
            const embedUrl=`https://player.vimeo.com/video/${vimeoId}?autoplay=1&title=0&byline=0&portrait=0&playsinline=0`;
            videoFrame.src=embedUrl;
            modal.classList.add('active');
            document.body.style.overflow='hidden';
        };
        if(playBtn){
            playBtn.addEventListener('click',function(e){
                e.stopPropagation();
                e.preventDefault();
                openVideo();
            });
            playBtn.addEventListener('touchend',function(e){
                e.stopPropagation();
                e.preventDefault();
                openVideo();
            });
        }
    });
    if(hoverVideo1&&items[0]){
        items[0].addEventListener('mouseenter',()=>{hoverVideo1.style.display='block';});
        items[0].addEventListener('mouseleave',()=>{hoverVideo1.style.display='none';});
    }
    if(hoverVideo2&&items[1]){
        items[1].addEventListener('mouseenter',()=>{hoverVideo2.style.display='block';});
        items[1].addEventListener('mouseleave',()=>{hoverVideo2.style.display='none';});
    }
    if(hoverVideo3&&items[2]){
        items[2].addEventListener('mouseenter',()=>{hoverVideo3.style.display='block';});
        items[2].addEventListener('mouseleave',()=>{hoverVideo3.style.display='none';});
    }
    let resizeTimeout;
    window.addEventListener('resize',()=>{
        clearTimeout(resizeTimeout);
        resizeTimeout=setTimeout(()=>{
            setupCarouselItems();
            track.style.transform=`translateX(${-currentSlide*container.offsetWidth}px)`;
        },250);
    });
    window.addEventListener('orientationchange',()=>{
        setTimeout(()=>{
            setupCarouselItems();
            track.style.transform=`translateX(${-currentSlide*container.offsetWidth}px)`;
        },300);
    });
    
    setupCarouselItems();
    
    const closeBtn=document.getElementById('closeBtn');
    if(closeBtn){
        closeBtn.onclick=function(){
            modal.classList.remove('active');
            videoFrame.src='';
            document.body.style.overflow='auto';
        };
    }
    modal.addEventListener('click',function(e){
        if(e.target===modal){
            modal.classList.remove('active');
            videoFrame.src='';
            document.body.style.overflow='auto';
        }
    });
    document.addEventListener('keydown',function(e){
        if(e.key==='Escape'&&modal.classList.contains('active')){
            modal.classList.remove('active');
            videoFrame.src='';
            document.body.style.overflow='auto';
        }
    });
});
</script>
