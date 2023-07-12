<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">

    <title>El Niño del Cerro el Plomo</title>

    <!-- INFORMACIÓN PARA EL SEO -->
    <meta content="text/html; ISO-8859-1" http-equiv="content-Type">
    <meta content="Spanish" name="DC.Language" scheme="RFC1766">
    <meta content="Indaga" name="author">
    <meta content="edgardo@indaga.me" name="reply-to">
    <link href="mailto:edgardo@indaga.me" rev="made">
    <meta content="" name="description"/>
    <meta content="" name="keywords">
    <meta content="Document" name="Resource-type">
    <meta content="Sat, 11 May 2023 00:00:00 GMT-4" name="DateCreated">
    <meta content="4 days" name="Revisit-after">
    <meta content="ALL" name="robots">

    <!-- CSS PERSONALIZADO -->
    <link href="assets/img/favicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="assets/css/style.css " rel="stylesheet">

</head>

<body>

<!-- SECTION MENU -->

<header class="bg-transparent z-[1000] 2xl:h-[200]">
    <!-- header desktop -->
    <div class="container invisible mx-auto flex flex-row md:h-[100px] md:visible xl:h-[150px] 2xl:visible">
        <div class="flex flex-row items-center md:w-3/12">
            <a class="cursor-pointer" href="#"><img alt="Logo" class="md:w-[40%] xl:w-[40%]" src="assets/img/logo-nino.svg"></a>
        </div>
        <div class="flex flex-row items-center justify-end md:w-9/12">
            <a class="uppercase text-white font-avenir cursor-pointer font-black tracking-wider md:text-[14px] md:leading-[14px] xl:text-[16px] xl:leading-[16px] md:pr-[20px] xl:pr-[40px] hover:text-[#812C27]"
               href="#">Inicio</a>
            <a class="uppercase text-white font-avenir cursor-pointer font-black tracking-wider md:text-[14px] md:leading-[14px] xl:text-[16px] xl:leading-[16px] md:pr-[20px] xl:pr-[40px] hover:text-[#812C27]"
               href="#">El
                proyecto</a>
            <a class="uppercase text-white font-avenir cursor-pointer font-black tracking-wider md:text-[14px] md:leading-[14px] xl:text-[16px] xl:leading-[16px]  hover:text-[#812C27] flex justify-end"
               href="#">La
                Experiencia</a>
            <a href="https://corporacionculturaldelobarnechea.cl/home" target="_blank" class="flex justify-end"><img alt="Corporación Cultural de Lo Barnechea" src="assets/img/logo-corporacion.svg" class="w-[60%]"></a>

        </div>
    </div>

    <!-- header mobile -->
    <div class="visible mt-[-40px] md:hidden">
        <!-- Navbar start -->
         <div class="container mx-auto flex flex-row bg-transparent">
             <div class="w-9/12">
                 <div class="pl-[20px]">
                     <a href="#" class="inline"><img src="assets/img/logo-nino.svg" alt="Logo" class="w-[90px]"></a>
                 </div>
             </div>
             <div class="w-3/12 justify-end">
                 <nav id="navbar" class="fixed z-50 flex w-full flex-row bg-transparent px-4">
                     <button id="btnSidebarToggler" type="button" class="text-2xl text-[#54171A] bg-white hover:text-[#54171A] h-[50px] w-[50px] pl-[9px] mt-[20px] rounded-[50%] ">
                         <svg id="navClosed" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                              stroke="currentColor" class="h-8 w-8">
                             <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                         </svg>
                         <svg id="navOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                              stroke="currentColor" class="hidden h-8 w-8" onclick="openNav()">
                             <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                         </svg>
                     </button>
                 </nav>
             </div>
         </div>
        <!-- Navbar end -->
        <!-- Sidebar start-->
        <div id="containerSidebar" class="z-40">
            <div class="relative z-40 navbar-menu">
                <nav id="sidebar" class="fixed left-0 bottom-0 flex w-full -translate-x-full flex-col overflow-y-auto bg-[#611013] pt-6 pb-8 sm:max-w-xs lg:w-80 mt-[-90px]">
                    <!-- one category / navigation group -->
                    <div class="flex h-screen items-center justify-center px-4 pb-6 pt-[40px]">
                        <ul class="mb-8">
                            <li>
                                <a onclick="closeNav()" class="flex py-4 font-semibold text-white font-avenir text-[18px] tracking-[0.2em] mt-[20px] pl-[30%]"
                                   href="#">INICIO
                                </a>
                            </li>
                            <li>
                                <a onclick="closeNav()" class="flex py-4 font-semibold text-white font-avenir text-[18px] tracking-[0.2em] mt-[20px] pl-[8%]"
                                   href="#">EL PROYECTO
</a>
                            </li>
                            <li>
                                <a onclick="closeNav()" class="flex py-4 font-semibold text-white font-avenir text-[18px] tracking-[0.2em] mt-[20px]"
                                   href="#">LA EXPERIENCIA
</a>
                            </li>
                            <li>
                                <a onclick="closeNav()" class="flex py-4 font-semibold text-white font-avenir text-[18px] tracking-[0.2em] mt-[20px] pl-[24%]"
                                   href="/360/index.htm">GALERÍA
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="mx-auto lg:ml-80"></div>
        </div>
        <!-- Sidebar end -->
    </div>

</header>

<!-- SECTION HEADER -->

<section class="h-screen bg-cover bg-bottom bg-no-repeat z-[10] bg-principal mt-[-92px] md:bg-principal md:mt-[-100px] md:h-screen xl:mt-[-150px]">
    <div class="container mx-auto flex flex-col h-[100vh] md:flex-row xl:h-[100vh]">
        <div class="order-2 flex flex-row items-end justify-center h-[50vh] md:h-[80vh] md:mt-[20vh] md:order-1 md:w-6/12">
            <img alt="" class="h-[50vh] md:h-[80vh]" src="assets/img/img-01.svg">
        </div>
        <div class="order-1 flex flex-col items-center h-[50vh] md:h-[60vh] md:mt-[40vh] md:order-2 md:w-4/12 md:items-end xl:h-[60vh] xl:mt-[40vh] 2xl:h-[55vh] 2xl:mt-[45vh] 2xl:w-4/12">
            <h2 class="text-white uppercase font-avenir font-light text-[30px] mt-[40%] md:mt-0 md:text-[30px] xl:text-[32px] 2xl:text-[38px] xl:shadow-[0, 0, 0, 0.16]">
acércate al</h2>
            <h2 class="text-white uppercase font-avenir font-medium text-[46px] leading-[42px] md:text-[46px] md:leading-[48px] xl:text-[60px] 2xl:text-[76px] xl:leading-[64px] 2xl:leading-[77px] xl:tracking-[1px] xl:shadow-[0, 0, 0, 0.16]">
niño del</h2>
            <h2 class="text-white uppercase font-avenir font-medium text-[46px] leading-[42px] md:text-[46px] md:leading-[48px] xl:text-[60px] 2xl:text-[76px] xl:leading-[64px] 2xl:leading-[77px] xl:tracking-[1px] xl:shadow-[0, 0, 0, 0.16]">
cerro el</h2>
            <h2 class="text-white uppercase font-avenir font-medium text-[46px] leading-[42px] md:text-[46px] md:leading-[48px] xl:text-[60px] 2xl:text-[76px] xl:leading-[64px] 2xl:leading-[77px] xl:tracking-[1px] xl:shadow-[0, 0, 0, 0.16]">
plomo</h2>
        </div>
    </div>
</section>

<!-- SECTION EXPERIENCIA -->

<section class="bg-cover bg-bottom bg-no-repeat bg-experiencia md:bg-experiencia md:h-screen">
    <div class="container mx-auto px-[40px] md:px-0">
        <div class="flex flex-col items-center">
            <div class="flex flex-col justify-end h-[15vh] md:h-[25vh] xl:h-[30vh]">
                <img alt="icono-01" class="w-[70px] md:w-[80px] xl:w-[100px] 2xl:w-[130px]" src="assets/img/control.svg">
            </div>
            <div class="flex flex-col items-center pt-[40px] pb-[80px] md:h-[65vh] md:pt-[46px] md:w-8/12 md:pb-0 xl:h-[60vh] xl:pt-[50px] 2xl:pt-[80px]">
                <h3 class="text-center font-light font-avenir text-[20px] leading-[32px] md:text-[20px] md:leading-[28px] xl:text-[22px] xl:leading-[30px] 2xl:text-[28px] 2xl:leading-[40px]">
La experiencia inmersiva “El Niño del Cerro El Plomo” es un <strong>recorrido de realidad
                    virtual</strong>, que permite a niños y niñas ascender a la cumbre del Cerro El Plomo para conocer
                    la historia de un niño inca que fue encontrado en este lugar, tras haber sido ofrendado a los
                    dioses, hace más de 500 años.</h3>
                <a class="font-avenir text-[#D2BBA6] bg-[#54171a] md:bg-transparent md:text-[#54171a] text-center text-[20px] md:text-[18px] xl:text-[22px] py-[10px] md:py-[10px] xl:py-[12px] border-[1.5px] border-[#54171a] w-[360px] md:w-[400px] xl:w-[420px] rounded-[30px] mt-[40px] md:mt-[30px] xl:mt-[40px] 2xl:mt-[100px] hover:bg-[#54171a] hover:text-[#d2bba6]"
                   href="https://actividadeslobarnechea.cl/secciones/1349" target="_blank">¿Quieres inscribir a tu colegio?</a>
                <a class="font-avenir text-[#D2BBA6] bg-[#54171a] md:bg-transparent md:text-[#54171a] text-center text-[20px] md:text-[18px] xl:text-[22px] py-[10px] md:py-[10px] xl:py-[12px] border-[1.5px] border-[#54171a] w-[360px] md:w-[400px] xl:w-[420px] rounded-[30px] mt-[20px] md:mt-[10px] xl:mt-[20px] hover:bg-[#54171a] hover:text-[#d2bba6]"
                   href="https://actividadeslobarnechea.cl/secciones/1349" target="_blank">¿Quieres tener la experiencia virtual?</a>
            </div>
        </div>
    </div>
</section>

<!-- SECTION NIÑO -->

<section class="bg-cover bg-bottom bg-no-repeat bg-enterratorio pt-[45vh] h-[110vh] md:bg-enterratorio md:pt-[55vh] md:h-screen xl:pt-[60vh]">
    <div class="container mx-auto flex flex-col items-center px-[40px] md:px-0">
        <div class="md:w-8/12">
            <h3 class="text-center font-light italic text-white font-avenir text-[20px] leading-[32px] md:text-[20px] md:leading-[28px] xl:text-[22px] xl:leading-[30px] 2xl:text-[28px] 2xl:leading-[40px]">
"En lo más alto de la montaña, tras incontables días de caminata y habiendo atravesado numerosos pueblos
                y paisajes, un niño de coloridas ropas, con el rostro pintado de rojo y amarillo, el cabello peinado con
                muchas trenzas y la cabeza coronada con grandes plumas, deja este mundo para reunirse con los dioses, y
                velar desde las alturas por su pueblo y por su gente."</h3>
        </div>
    </div>
</section>

<!-- SECTION EL PROYECTO -->

<section class="bg-cover bg-bottom bg-no-repeat bg-proyecto py-[50px] md:bg-proyecto md:py-[40px] xl:py-[70px] 2xl:py-[160px]">
    <div class="container mx-auto flex flex-col items-center">
        <div class="md:w-12/12">
            <h3 class="text-[#d9c1ab] font-avenir font-medium text-[28px] tracking-[0.2em] md:text-[30px] xl:text-[36px] md:tracking-[0.2em] 2xl:text-[40px]">EL PROYECTO</h3>
        </div>
    </div>
    <div class="container mx-auto flex flex-row px-[40px] md:px-0">
        <div class="items-center icono-1 md:w-3/12">
            <img alt="Icono 2" class="md:h-[70vh] md:pt-[20px] 2xl:h-[80vh] 2xl:pt-[100px]" src="assets/img/img-02.png">
        </div>
        <div class="pt-[40px] md:pt-[40px] md:w-6/12 xl:pt-[70px] 2xl:pt-[90px]">
            <h3 class="text-center font-normal text-white font-avenir text-[18px] leading-[30px] md:text-[18px] md:leading-[28px] xl:text-[19px] xl:leading-[30px] 2xl:text-[25px] 2xl:leading-[40px]">
Esta experiencia surge en el marco del proyecto “Niño del Cerro El Plomo: Patrimonio cultural nacional”,
                diseñado y ejecutado por la <strong>Corporación Cultural de Lo Barnechea</strong> y que considera
                diversas estrategias para la divulgación y valoración de este hallazgo arqueológico, tanto en la comuna
                de Lo Barnechea como en el resto del país.</h3>

            <h3 class="text-center font-normal text-white font-avenir text-[18px] leading-[30px] pt-[15px] md:text-[18px] md:leading-[28px] md:pt-[10px] xl:text-[19px] xl:leading-[30px] xl:pt-[15px] 2xl:text-[25px] 2xl:leading-[40px] 2xl:pt-[26px]">
El proyecto cuenta con el apoyo del <strong>Museo Nacional de Historia Natural y la Facultad de
                Comunicaciones de la Universidad Católica de Chile.</strong></h3>

            <div class="flex flex-row items-center justify-center pt-[40px] md:pt-[40px] xl:pt-[60px] 2xl:pt-[90px]">
                <a class="font-avenir items-center text-[#621416] bg-[#d9c1ab] md:bg-transparent md:text-[#d9c1ab] text-[18px] md:text-[17px] xl:text-[18px] md:border-[1.5px] md:border-[#d9c1ab] py-[10px] md:py-[12px] xl:py-[14px] px-[30px] md:px-[36px] xl:px-[40px] rounded-[26px] hover:bg-[#d9c1ab] hover:text-[#621416] tracking-[0.1em]" href="#"
                   target="_blank">CONOCE MÁS</a>
            </div>

        </div>
        <div class="icono-2 md:w-3/12">
            <img alt="Icono 3" class="md:pt-[150px] xl:pt-[200px] 2xl:pt-[380px]" src="assets/img/img-03.png">
        </div>
    </div>
</section>

<!-- SECTION LA EXPERIENCIA -->

<section class="bg-cover bg-bottom bg-no-repeat bg-laexperiencia py-[50px] md:bg-laexperiencia md:py-[40px] xl:py-[70px] 2xl:py-[160px]">
    <div class="container mx-auto px-[40px] md:px-0">
        <div class="flex flex-col items-center">
            <img alt="" class="w-[70%] md:w-[22%] xl:w-[26%] 2xl:w-[30%]" src="assets/img/condor.png">
            <div class="md:w-12/12">
                <h3 class="text-[#d9c1ab] font-avenir font-medium text-[26px] tracking-[0.2em] md:text-[30px] xl:text-[36px] md:tracking-[0.2em] 2xl:text-[40px]">LA
                    EXPERIENCIA</h3>
            </div>
            <div class="mt-[20px] md:mt-[20px] md:w-7/12 xl:mt-[36px] 2xl:mt-[42px]">
                <h3 class="text-center font-normal text-white font-avenir text-[18px] leading-[30px] md:text-[18px] md:leading-[28px] xl:text-[19px] xl:leading-[30px] 2xl:text-[25px] 2xl:leading-[40px]">
La experiencia virtual está orientada a público general, con especial foco en niños y niñas. El
                    recorrido simula la <strong>ascensión al cerro El Plomo</strong>, transportando al usuario a
                    distintos puntos de la ruta. En cada uno de ellos se aborda, mediante recursos informativos, videos
                    animados y juegos interactivos, una temática en particular sobre la cultura y cosmovisión inca,
                    hasta llegar a conocer en la cumbre al Niño del Cerro El Plomo.
                </h3>
            </div>
            <div class="flex flex-row items-center justify-center pt-[30px] md:pt-[30px] xl:pt-[50px] 2xl:pt-[90px]">
                <a class="font-avenir items-center text-[#621416] bg-[#d9c1ab] md:bg-transparent md:text-[#d9c1ab] text-[18px] md:text-[17px] xl:text-[18px] md:border-[1.5px] md:border-[#d9c1ab] py-[10px] md:py-[12px] xl:py-[14px] px-[30px] md:px-[36px] xl:px-[40px] rounded-[26px] hover:bg-[#d9c1ab] hover:text-[#621416] tracking-[0.1em]" href="#"
                   target="_blank">CONOCE MÁS</a>
            </div>
        </div>
    </div>
</section>

<!-- SECTION GALLERIA -->

<section class="h-screen bg-cover bg-bottom bg-no-repeat bg-galleria md:bg-galleria md:h-screen">
    <div class="container mx-auto">
        <div class="flex h-screen flex-col items-center justify-center md:h-screen">
            <img alt="Icono 360" class="w-[100px] md:w-[110px] xl:w-[130px]" src="assets/img/icono360.svg">
            <a class="font-avenir items-center text-[#812C27] md:text-[#ffffff] text-[18px] md:text-[17px] xl:text-[18px] mt-[40px] md:mt-[30px] xl:mt-[40px] bg-[#D2BBA6] md:bg-transparent md:border-[1.5px] md:border-[#ffffff] py-[10px] md:py-[12px] xl:py-[14px] px-[30px] md:px-[36px] xl:px-[40px] rounded-[26px] hover:bg-[#812C27] hover:border-[#812C27] hover:text-[#ffffff] tracking-[0.1em]" href="/360/index.htm">GALERÍA 360°</a>
        </div>
    </div>
</section>


<!-- PRE-FOOTER-->

<section class="bg-[#151515] py-[40px] md:py-[50px] 2xl:py-[80px]">
    <div class="container mx-auto">
        <div class="flex flex-row items-center justify-center">
            <div class="flex flex-col items-center justify-center md:flex-row xl:w-8/12">
                <img alt="Logo El Niño" class="h-[75px] md:h-[65px] xl:h-[80px] 2xl:h-[100px]" src="assets/img/logo-nino.svg">

                <a href="https://corporacionculturaldelobarnechea.cl/home" target="_blank"><img alt="Logo Coporación" class="h-[80px] pt-[10px] md:h-[70px] md:pt-[10px] xl:h-[90px] xl:pt-[15px] xl:pl-[20px] 2xl:h-[100px" src="assets/img/logo-corporacion.svg"></a>

                <a href="https://www.mnhn.gob.cl/" target="_blank"><img alt="Logo Coporación" class="h-[75px] pt-[10px] md:h-[65px] xl:h-[80px] xl:pt-[10px] xl:pl-[20px] 2xl:h-[100px" src="assets/img/museo.png"></a>

                <a href="https://comunicaciones.uc.cl/" target="_blank"><img alt="Logo Coporación" class="h-[75px] pt-[10px] md:h-[65px] xl:h-[80px] xl:pt-[10px] xl:pl-[20px] 2xl:h-[100px" src="assets/img/fac-comunicacion.svg"></a>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->

<footer class="bg-[#000000] py-[15px] md:py-[20px] xl:py-[30px]">
    <div class="container mx-auto">
        <div class="flex flex-col items-center">
            <p class="font-light text-white font-avenir text-[16px] md:text-[14px] xl:text-[16px] 2xl:text-[20px]">Desarrollado por <a class="font-medium hover:text-[#812C27]" href="https://indaga.me" target="_blank">Indaga</a> e <a
                class="font-medium hover:text-[#812C27]" href="https://invadelab.cl/" target="_blank">Invadelab</a></p>
        </div>
    </div>
</footer>

<!-- JQ FLOWBITE -->

<script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
<script src="assets/jq/navbar.js"></script>

<script>
    function openNav() {
        document.getElementById("sidebar").style.width = "100%";
    }
    function closeNav() {
        document.getElementById("sidebar").style.width = "0";
    }
</script>

</body>
</html>