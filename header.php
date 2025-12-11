<header id="mainHeader">
    <div id="headerLogo">
        <div id="logoLine1">BOBBY</div>
        <div id="logoLine2">MCAWLEY</div>
    </div>
    <button id="menuToggle" aria-label="Toggle menu">
        <span></span>
        <span></span>
        <span></span>
    </button>
    <nav id="headerNav">
        <a href="#inicio" id="navInicio">INICIO</a>
        <a href="#mentoria" id="navMentoria">MENTORIA</a>
        <a href="#programas" id="navProgramas">PROGRAMAS</a>
        <a href="#testimonios" id="navTestimonios">TESTIMONIOS</a>
        <a href="#contacto" id="navContacto">CONTACTO</a>
        <a href="#acerca" id="navAcerca">ACERCA DE</a>
    </nav>
</header>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');
#mainHeader{display:flex;align-items:center;justify-content:space-between;width:100%;background-color:#000;padding:20px 25px;position:relative;z-index:1000;font-family:'Poppins',sans-serif;}
#headerLogo{display:flex;flex-direction:column;line-height:1.1;}
#logoLine1,#logoLine2{color:#fff;font-size:18px;font-weight:700;text-transform:uppercase;letter-spacing:1px;font-family:'Poppins',sans-serif;}
#menuToggle{display:none;flex-direction:column;justify-content:space-around;width:30px;height:30px;background:transparent;border:none;cursor:pointer;padding:0;z-index:1001;}
#menuToggle span{width:100%;height:3px;background-color:#fff;border-radius:3px;transition:all 0.3s ease;transform-origin:center;}
#headerNav{display:flex;align-items:center;gap:40px;}
#navInicio,#navMentoria,#navProgramas,#navAcerca,#navTestimonios,#navContacto{color:#fff;font-size:14px;font-weight:400;text-transform:uppercase;letter-spacing:1px;text-decoration:none;transition:opacity 0.3s ease;font-family:'Poppins',sans-serif;}
#navInicio:hover,#navMentoria:hover,#navProgramas:hover,#navAcerca:hover,#navTestimonios:hover,#navContacto:hover{opacity:0.7;}
#mainHeader.menuActive #menuToggle span:nth-child(1){transform:rotate(45deg) translate(8px,8px);}
#mainHeader.menuActive #menuToggle span:nth-child(2){opacity:0;}
#mainHeader.menuActive #menuToggle span:nth-child(3){transform:rotate(-45deg) translate(7px,-7px);}
@media (max-width:1024px){#mainHeader{padding:18px 20px;}#logoLine1,#logoLine2{font-size:16px;}#headerNav{gap:30px;}#navInicio,#navMentoria,#navProgramas,#navAcerca,#navTestimonios,#navContacto{font-size:13px;}}
@media (max-width:768px){#mainHeader{flex-direction:row;align-items:center;padding:15px 15px;position:relative;}#headerLogo{text-align:left;margin-bottom:0;}#logoLine1,#logoLine2{font-size:15px;}#menuToggle{display:flex;}#headerNav{position:fixed;top:0;right:-100%;width:70%;max-width:300px;height:100vh;background-color:#000;flex-direction:column;justify-content:flex-start;align-items:flex-start;padding-top:80px;padding-left:30px;gap:30px;transition:right 0.3s ease;z-index:1000;box-shadow:-2px 0 10px rgba(0,0,0,0.3);}#mainHeader.menuActive #headerNav{right:0;}#navInicio,#navMentoria,#navProgramas,#navAcerca,#navTestimonios,#navContacto{font-size:16px;white-space:normal;width:100%;}}
@media (max-width:576px){#mainHeader{padding:12px 15px;}#headerLogo{text-align:left;margin-bottom:0;}#logoLine1,#logoLine2{font-size:14px;}#menuToggle{width:28px;height:28px;}#headerNav{width:75%;padding-top:70px;padding-left:25px;gap:25px;}#navInicio,#navMentoria,#navProgramas,#navAcerca,#navTestimonios,#navContacto{font-size:15px;}}
@media (max-width:480px){#mainHeader{padding:10px 12px;}#headerLogo{text-align:left;margin-bottom:0;}#logoLine1,#logoLine2{font-size:12px;}#menuToggle{width:26px;height:26px;}#headerNav{width:80%;padding-top:60px;padding-left:20px;gap:20px;}#navInicio,#navMentoria,#navProgramas,#navAcerca,#navTestimonios,#navContacto{font-size:14px;letter-spacing:0.5px;}}
@media (max-width:360px){#mainHeader{padding:8px 6px;}#headerLogo{margin-bottom:0;}#logoLine1,#logoLine2{font-size:11px;}#menuToggle{width:24px;height:24px;}#headerNav{width:85%;padding-top:55px;padding-left:15px;gap:18px;}#navInicio,#navMentoria,#navProgramas,#navAcerca,#navTestimonios,#navContacto{font-size:13px;letter-spacing:0.3px;}}
</style>
<script>
document.addEventListener('DOMContentLoaded',function(){const menuToggle=document.getElementById('menuToggle');const mainHeader=document.getElementById('mainHeader');const headerNav=document.getElementById('headerNav');if(menuToggle&&mainHeader){menuToggle.addEventListener('click',function(){mainHeader.classList.toggle('menuActive');});const navLinks=headerNav.querySelectorAll('a');navLinks.forEach(function(link){link.addEventListener('click',function(){if(window.innerWidth<=768){mainHeader.classList.remove('menuActive');}});});document.addEventListener('click',function(e){if(window.innerWidth<=768&&!mainHeader.contains(e.target)&&mainHeader.classList.contains('menuActive')){mainHeader.classList.remove('menuActive');}});}});
</script>

