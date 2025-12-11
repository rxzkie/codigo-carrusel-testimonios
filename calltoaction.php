<div id="ctaContainer">
    <button id="ctaButton">
        <svg id="ctaIcon" width="70" height="70" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="2" y="6" width="14" height="12" rx="2" stroke="#d1c374" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M16 10L20 7V17L16 14" stroke="#d1c374" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="9" cy="12" r="1.5" fill="#d1c374"/>
        </svg>
        <div id="ctaButtonText">
            <span id="ctaButtonLine1">Agenda tu</span>
            <span id="ctaButtonLine2">Videollamada</span>
        </div>
    </button>
    <h2 id="ctaText">Mentoría Empresarial Personalizada</h2>
</div>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');
*{box-sizing:border-box;margin:0;padding:0;}
#ctaContainer{width:100%;max-width:1440px;margin:0 auto;padding:80px 50px;font-family:'Poppins',sans-serif;background-color:#000;display:flex;flex-direction:column;align-items:center;gap:50px;}
#ctaButton{background:transparent;color:#fff;font-size:18px;font-weight:400;font-family:'Poppins',sans-serif;padding:18px 35px;border:2px solid #fff;border-radius:8px;cursor:pointer;transition:all 0.3s ease;text-transform:none;letter-spacing:0;display:flex;align-items:center;justify-content:center;gap:20px;}
#ctaButton:hover{background:rgba(255,255,255,0.1);border-color:rgba(255,255,255,0.8);transform:translateY(-2px);}
#ctaIcon{width:70px;height:70px;display:block;flex-shrink:0;}
#ctaButtonText{display:flex;flex-direction:column;align-items:flex-start;justify-content:center;line-height:1.3;}
#ctaButtonLine1,#ctaButtonLine2{display:block;color:#fff;font-size:20px;font-weight:400;font-family:'Poppins',sans-serif;text-align:left;}
#ctaButtonLine2{font-weight:600;}
#ctaText{font-size:56px;font-weight:bold;color:#fff;text-transform:none;letter-spacing:0;font-family:'Poppins',sans-serif;line-height:1.2;margin:0;text-align:center;white-space:nowrap;}
@media (max-width:1200px){
#ctaContainer{padding:70px 45px;gap:45px;}
#ctaText{font-size:50px;}
#ctaButton{padding:16px 32px;gap:18px;}
#ctaIcon{width:65px;height:65px;}
#ctaButtonLine1,#ctaButtonLine2{font-size:19px;}
}
@media (max-width:992px){
#ctaContainer{padding:60px 40px;gap:40px;}
#ctaText{font-size:44px;}
#ctaButton{padding:14px 30px;gap:16px;}
#ctaIcon{width:60px;height:60px;}
#ctaButtonLine1,#ctaButtonLine2{font-size:18px;}
}
@media (max-width:768px){
#ctaContainer{padding:50px 35px;gap:35px;}
#ctaText{font-size:38px;white-space:normal;}
#ctaButton{padding:12px 28px;gap:14px;}
#ctaIcon{width:55px;height:55px;}
#ctaButtonLine1,#ctaButtonLine2{font-size:17px;}
}
@media (max-width:576px){
#ctaContainer{padding:40px 30px;gap:30px;}
#ctaText{font-size:32px;white-space:normal;}
#ctaButton{padding:10px 25px;gap:12px;}
#ctaIcon{width:50px;height:50px;}
#ctaButtonLine1,#ctaButtonLine2{font-size:16px;}
}
@media (max-width:480px){
#ctaContainer{padding:35px 25px;gap:28px;}
#ctaText{font-size:28px;white-space:normal;}
#ctaButton{padding:9px 22px;gap:10px;}
#ctaIcon{width:45px;height:45px;}
#ctaButtonLine1,#ctaButtonLine2{font-size:15px;}
}
</style>

<script>
document.addEventListener('DOMContentLoaded',function(){
    const ctaButton=document.getElementById('ctaButton');
    ctaButton.addEventListener('click',function(){
        window.location.href='#contacto';
    });
});
</script>

