<div id="videoCarousel">
    <div id="carouselContainer">
        <div id="videoTrack">
            <div class="videoItem" data-video="https://vimeo.com/1100895052">
                <div class="videoThumb" style="background-image: url('https://i.ibb.co/pBkKWfc8/Puedro-Cueto-Mentorias-Bobby.png');">
                    <iframe class="hoverVideo" src="https://player.vimeo.com/video/1100895052?autoplay=1&loop=1&muted=1&title=0&byline=0&portrait=0&controls=0&background=1" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="display:none;position:absolute;top:0;left:0;width:100%;height:100%;border-radius:15px;border:none;"></iframe>
                    <div class="videoOverlay">
                        <div class="playButton"><span>▶ Mirar</span></div>
                    </div>
                </div>
            </div>
            <div class="videoItem" data-video="https://vimeo.com/1100897594">
                <div class="videoThumb" style="background-image: url('https://i.ibb.co/0VtKRhn3/Jose-Escoabar-Mentorias-Bobby.png');">
                    <iframe class="hoverVideo" src="https://player.vimeo.com/video/1100897594?autoplay=1&loop=1&muted=1&title=0&byline=0&portrait=0&controls=0&background=1" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="display:none;position:absolute;top:0;left:0;width:100%;height:100%;border-radius:15px;border:none;"></iframe>
                    <div class="videoOverlay">
                        <div class="playButton"><span>▶ Mirar</span></div>
                    </div>
                </div>
            </div>
            <div class="videoItem" data-video="https://vimeo.com/1100889005">
                <div class="videoThumb" style="background-image: url('https://i.ibb.co/XxRSYQ8C/Marco-Pereda-Mentorias-Bobby.png');">
                    <iframe class="hoverVideo" src="https://player.vimeo.com/video/1100889005?autoplay=1&loop=1&muted=1&title=0&byline=0&portrait=0&controls=0&background=1" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="display:none;position:absolute;top:0;left:0;width:100%;height:100%;border-radius:15px;border:none;"></iframe>
                    <div class="videoOverlay">
                        <div class="playButton"><span>▶ Mirar</span></div>
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

<style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');#videoCarousel{width:100%;max-width:1440px;margin:0 auto;padding:20px;font-family:'Poppins',sans-serif;display:flex;align-items:center;justify-content:center;z-index:1;}#carouselContainer{position:relative;overflow:hidden;border-radius:15px;width:100%;user-select:none;margin:0;z-index:1;}#videoTrack{display:flex;gap:20px;align-items:center;justify-content:center;flex-wrap:wrap;}.videoItem{flex:0 0 calc(33.33% - 14px);aspect-ratio:16/9;border-radius:15px;position:relative;cursor:pointer;box-sizing:border-box;overflow:hidden;transition:all 0.3s;min-width:280px;}.videoThumb{width:100%;height:100%;background-size:cover;background-position:center;background-repeat:no-repeat;border-radius:15px;position:relative;transition:all 0.3s;overflow:hidden;}.hoverVideo{z-index:2;}.videoOverlay{position:absolute;inset:0;background:rgba(0,0,0,0.08)!important;display:flex;align-items:flex-start;justify-content:flex-start;border-radius:15px;opacity:0;transition:opacity 0.3s;padding:15px;z-index:3;}.videoThumb:hover .videoOverlay{opacity:1;}.playButton{background:rgba(255,255,255,0.45)!important;color:#111!important;font-size:11px!important;padding:4px 9px!important;border-radius:30px!important;}
.playButton span{color:#111!important;font-size:13px!important;}
.playButton span::first-letter{color:#111!important;}
.videoOverlay{opacity:1 !important;}
.playButton{opacity:1 !important;}
.videoThumb:hover .videoOverlay{opacity:1 !important;}#videoModal{display:none;position:fixed;z-index:999999999;left:0;top:0;width:100vw;height:100vh;background-color:rgba(0,0,0,0.95);backdrop-filter:blur(10px);}#modalContent{position:fixed;top:50%;left:50%;transform:translate(-50%,-50%);width:32vw;max-width:480px;height:auto;aspect-ratio:16/9;max-height:40vh;background:transparent;z-index:999999999;}#videoWrapper{width:100%;height:100%;position:relative;z-index:999999999;}#videoWrapper iframe{width:100%;height:100%;border-radius:15px;border:none;}#closeBtn{position:absolute;top:-60px;right:0;color:white;font-size:50px;font-weight:bold;cursor:pointer;z-index:999999999;transition:opacity 0.3s;}#closeBtn:hover{opacity:0.7;}@media (max-width:1200px){.videoItem{flex:0 0 calc(50% - 10px);min-width:300px;}#videoTrack{gap:15px;}#modalContent{width:50vw;max-width:95vw;max-height:50vh;}}@media (max-width:768px){#videoCarousel{padding:15px;}#videoTrack{gap:15px;flex-direction:column;}.videoItem{flex:0 0 auto;width:100%;max-width:500px;min-width:auto;}.playButton{background:rgba(255,255,255,0.45)!important;color:#111!important;font-size:11px!important;padding:4px 9px!important;border-radius:30px!important;}}@media (max-width:480px){#videoCarousel{padding:10px;}#carouselContainer{border-radius:10px;}.videoItem{border-radius:10px;}.videoThumb{border-radius:10px;}.videoOverlay{border-radius:10px;padding:10px;}.playButton{font-size:12px;padding:8px 15px;}#modalContent{width:99vw;max-height:60vh;}#closeBtn{top:-40px;font-size:35px;}}@media (max-width:360px){#modalContent{width:100vw;max-height:55vh;}#closeBtn{top:-35px;font-size:30px;}}@media (max-height:600px) and (orientation:landscape){#modalContent{height:50vh;max-height:50vh;}#closeBtn{top:-40px;}}</style>

<script>
document.addEventListener('DOMContentLoaded',function(){
    const items=document.querySelectorAll('.videoItem');
    const modal=document.getElementById('videoModal');
    const videoFrame=document.getElementById('videoFrame');
    const closeBtn=document.getElementById('closeBtn');
    document.querySelectorAll('.videoThumb').forEach((thumb)=>{
        const hoverVideo=thumb.querySelector('.hoverVideo');
        thumb.addEventListener('mouseenter',()=>{if(window.innerWidth>768){hoverVideo.style.display='block';}});
        thumb.addEventListener('mouseleave',()=>{if(window.innerWidth>768){hoverVideo.style.display='none';}});
    });
    const openVideoModal=(videoUrl)=>{
        const vimeoId=videoUrl.split('/').pop();
        const embedUrl=`https://player.vimeo.com/video/${vimeoId}?autoplay=1&title=0&byline=0&portrait=0`;
        videoFrame.src=embedUrl;
        modal.style.display='block';
        modal.style.opacity='1';
        modal.style.visibility='visible';
        document.body.style.overflow='hidden';
        document.body.style.position='fixed';
        document.body.style.width='100%';
    };
    const closeVideoModal=()=>{
        modal.style.display='none';
        modal.style.opacity='0';
        modal.style.visibility='hidden';
        videoFrame.src='';
        document.body.style.overflow='auto';
        document.body.style.position='static';
        document.body.style.width='auto';
    };
    items.forEach(item=>{
        item.addEventListener('click',function(e){
            e.preventDefault();
            e.stopPropagation();
            const videoUrl=item.getAttribute('data-video');
            openVideoModal(videoUrl);
        });
    });
    if(closeBtn){closeBtn.addEventListener('click',function(e){e.preventDefault();e.stopPropagation();closeVideoModal();});}
    modal.addEventListener('click',function(e){if(e.target===modal){closeVideoModal();}});
    document.addEventListener('keydown',function(e){if(e.key==='Escape'&&modal.style.display==='block'){closeVideoModal();}});
});
</script>