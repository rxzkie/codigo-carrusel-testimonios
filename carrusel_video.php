<div id="videoCarousel">
    <div id="carouselContainer">
        <div id="videoTrack">
            <div id="videoItem1" data-index="0" data-video="https://vimeo.com/726421994">
                <div id="videoThumbnail1" style="background-image: url('https://i.ibb.co/pBkKWfc8/Puedro-Cueto-Mentorias-Bobby.png');">
                    <iframe id="hoverVideo1" style="display:none; position:absolute; top:0; left:0; width:100%; height:100%; border-radius:15px; border:none;" src="https://player.vimeo.com/video/726421994?autoplay=1&loop=1&muted=1&title=0&byline=0&portrait=0&controls=0&background=1" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                    <div id="videoOverlay1">
                        <div id="playButton1">
                            <svg width="80" height="80" viewBox="0 0 24 24" fill="none">
                                <circle cx="12" cy="12" r="10" fill="rgba(255,255,255,0.9)"/>
                                <polygon points="10,8 16,12 10,16" fill="#333"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div id="videoItem2" data-index="1" data-video="https://vimeo.com/726421994">
                <div id="videoThumbnail2" style="background-image: url('https://i.ibb.co/0VtKRhn3/Jose-Escoabar-Mentorias-Bobby.png');">
                    <iframe id="hoverVideo2" style="display:none; position:absolute; top:0; left:0; width:100%; height:100%; border-radius:15px; border:none;" src="https://player.vimeo.com/video/726421994?autoplay=1&loop=1&muted=1&title=0&byline=0&portrait=0&controls=0&background=1" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                    <div id="videoOverlay2">
                        <div id="playButton2">
                            <svg width="80" height="80" viewBox="0 0 24 24" fill="none">
                                <circle cx="12" cy="12" r="10" fill="rgba(255,255,255,0.9)"/>
                                <polygon points="10,8 16,12 10,16" fill="#333"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div id="videoItem3" data-index="2" data-video="https://vimeo.com/726421994">
                <div id="videoThumbnail3" style="background-image: url('https://i.ibb.co/XxRSYQ8C/Marco-Pereda-Mentorias-Bobby.png');">
                    <iframe id="hoverVideo3" style="display:none; position:absolute; top:0; left:0; width:100%; height:100%; border-radius:15px; border:none;" src="https://player.vimeo.com/video/726421994?autoplay=1&loop=1&muted=1&title=0&byline=0&portrait=0&controls=0&background=1" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                    <div id="videoOverlay3">
                        <div id="playButton3">
                            <svg width="80" height="80" viewBox="0 0 24 24" fill="none">
                                <circle cx="12" cy="12" r="10" fill="rgba(255,255,255,0.9)"/>
                                <polygon points="10,8 16,12 10,16" fill="#333"/>
                            </svg>
                        </div>
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
#videoCarousel{width:100%;max-width:1200px;margin:0 auto;padding:20px;font-family:'Poppins',sans-serif;position:relative;display:flex;align-items:center;justify-content:center;z-index:1;}
#carouselContainer{position:relative;overflow:hidden;border-radius:15px;width:100%;cursor:grab;user-select:none;margin:0;z-index:1;}
#carouselContainer:active{cursor:grabbing;}
#videoTrack{display:flex;transition:transform 0.5s cubic-bezier(0.25,0.46,0.45,0.94);will-change:transform;height:100%;align-items:center;transform:translateX(0);width:100%;margin:0 auto;}
#videoItem1,#videoItem2,#videoItem3{flex:0 0 calc(33.33% - 15px);aspect-ratio:16/9;border-radius:15px;position:relative;cursor:pointer;margin-right:20px;box-sizing:border-box;overflow:hidden;}
#videoThumbnail1,#videoThumbnail2,#videoThumbnail3{width:100%;height:100%;background-size:cover;background-position:center;background-repeat:no-repeat;border-radius:15px;position:relative;}
#videoOverlay1,#videoOverlay2,#videoOverlay3{position:absolute;inset:0;background:rgba(0,0,0,0.5);display:flex;flex-direction:column;align-items:center;justify-content:center;border-radius:15px;opacity:0;transition:opacity 0.3s ease;}
#videoItem1:hover #videoOverlay1,#videoItem2:hover #videoOverlay2,#videoItem3:hover #videoOverlay3{opacity:1;}
#playButton1,#playButton2,#playButton3{transition:transform 0.3s ease;margin-bottom:20px;}
#videoItem1:hover #playButton1,#videoItem2:hover #playButton2,#videoItem3:hover #playButton3{transform:scale(1.1);}

#videoModal{display:none;position:fixed;z-index:10000;left:0;top:0;width:100%;height:100%;background-color:rgba(0,0,0,0.9);backdrop-filter:blur(5px);}
#modalContent{position:relative;margin:5% auto;width:90%;max-width:900px;height:80vh;background:transparent;}
#closeBtn{position:absolute;top:-40px;right:0;color:white;font-size:35px;font-weight:bold;cursor:pointer;z-index:10001;}
#closeBtn:hover{opacity:0.7;}
#videoWrapper{width:100%;height:100%;position:relative;}
#videoWrapper iframe{width:100%;height:100%;border-radius:10px;}

@media (max-width:768px){#videoCarousel{padding:10px;}#carouselContainer{border-radius:10px;}#videoItem1,#videoItem2,#videoItem3{flex:0 0 100%;margin-right:0;border-radius:10px;}#videoThumbnail1,#videoThumbnail2,#videoThumbnail3{border-radius:10px;}#videoOverlay1,#videoOverlay2,#videoOverlay3{border-radius:10px;}#modalContent{width:95%;height:70vh;margin:10% auto;}}
@media (max-width:480px){#modalContent{width:98%;height:60vh;margin:15% auto;}}
</style>

<script>
document.addEventListener('DOMContentLoaded',function(){const track=document.getElementById('videoTrack');const items=document.querySelectorAll('#videoItem1,#videoItem2,#videoItem3');const container=document.getElementById('carouselContainer');const modal=document.getElementById('videoModal');const videoFrame=document.getElementById('videoFrame');const closeBtn=document.getElementById('closeBtn');const hoverVideo=document.getElementById('hoverVideo1');const videoItem1=document.getElementById('videoItem1');let currentSlide=0;const totalSlides=items.length;let isTransitioning=false;let autoPlayInterval;let startX=0;let currentX=0;let isDragging=false;const setupCarouselItems=()=>{const isMobile=window.innerWidth<=768;items.forEach((item,index)=>{let itemGap=0;let flexBasis='100%';if(isMobile){itemGap=index===items.length-1?0:10;flexBasis=`calc(100% - ${itemGap}px)`;}else{itemGap=index===items.length-1?0:20;flexBasis=`calc(33.33% - ${itemGap}px)`;}item.style.marginRight=`${itemGap}px`;item.style.flex=`0 0 ${flexBasis}`;});};const openVideoModal=(videoUrl)=>{const vimeoId=videoUrl.split('/').pop();const embedUrl=`https://player.vimeo.com/video/${vimeoId}?autoplay=1&title=0&byline=0&portrait=0`;videoFrame.src=embedUrl;modal.style.display='block';document.body.style.overflow='hidden';};const closeVideoModal=()=>{modal.style.display='none';videoFrame.src='';document.body.style.overflow='auto';};items.forEach((item,index)=>{item.addEventListener('click',(e)=>{e.preventDefault();const videoUrl=item.getAttribute('data-video');openVideoModal(videoUrl);});});closeBtn.addEventListener('click',closeVideoModal);modal.addEventListener('click',(e)=>{if(e.target===modal){closeVideoModal();}});document.addEventListener('keydown',(e)=>{if(e.key==='Escape'&&modal.style.display==='block'){closeVideoModal();}});const hoverVideo2=document.getElementById('hoverVideo2');const hoverVideo3=document.getElementById('hoverVideo3');const videoItem2=document.getElementById('videoItem2');const videoItem3=document.getElementById('videoItem3');if(videoItem1&&hoverVideo){videoItem1.addEventListener('mouseenter',()=>{hoverVideo.style.display='block';});videoItem1.addEventListener('mouseleave',()=>{hoverVideo.style.display='none';});}if(videoItem2&&hoverVideo2){videoItem2.addEventListener('mouseenter',()=>{hoverVideo2.style.display='block';});videoItem2.addEventListener('mouseleave',()=>{hoverVideo2.style.display='none';});}if(videoItem3&&hoverVideo3){videoItem3.addEventListener('mouseenter',()=>{hoverVideo3.style.display='block';});videoItem3.addEventListener('mouseleave',()=>{hoverVideo3.style.display='none';});}});
</script>
