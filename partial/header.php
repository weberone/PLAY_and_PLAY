<header class="fixed w-full z-[20] top-0 h-[100px] transition-all bg-navi-500 lg:bg-transparent">
    <div class="container text-center relative">
        <a href="index.php">
            <div class="block relative w-[200px] h-[17px] z-[25] top-[40px]"><img src="img/logo_play.svg" alt="logo" /></div>
        </a>
        <div class="shadow-2xl lg:shadow-none">
            <div id="main_menu" class="backdrop-blur-xl supply bg-navi-500 rounded-none px-[0px] lg:px-[30px] py-[0px] mt-[83px] text-lg  shadow-none lg:shadow-md hidden lg:bg-bianco02 lg:mt-[5px] lg:border lg:border-white lg:rounded-full lg:inline-block "> 
                <nav> 
                    <ul class="list-none">
                        <li class="relative text-center border border-transparent border-b-navi-300 block lg:border-none lg:inline-block after:content-[''] after:w-full after:h-[4px] after:bg-play after:absolute after:bottom-[-5px] after:left-0 "><a class="uppercase transition-all block py-[17px] px-[5px] lg:px-[15px] hover:text-play hover:bg-navi-300 lg:hover:bg-transparent" href="#">Play</a></li>
                        <li class="relative text-center border border-transparent border-b-navi-300 block lg:border-none lg:inline-block"><a class="uppercase transition-all block py-[17px] px-[5px] lg:px-[15px] hover:text-watch hover:bg-navi-300 lg:hover:bg-transparent" href="#">Watch</a></li>
                        <li class="relative text-center border border-transparent border-b-navi-300 block lg:border-none lg:inline-block"><a class="uppercase transition-all block py-[17px] px-[5px] lg:px-[15px] hover:text-collect hover:bg-navi-300 lg:hover:bg-transparent" href="#">Collect</a></li>
                        <li class="relative text-center border border-transparent border-b-navi-300 block lg:border-none lg:inline-block"><a class="transition-all block py-[17px] px-[5px] lg:px-[15px] hover:text-play hover:bg-navi-300 lg:hover:bg-transparent" href="#"><i class="fas fa-search "></i></a></li>
                        <li class="relative text-center border border-transparent border-b-navi-300 block lg:border-none lg:inline-block"><a class="transition-all block py-[17px] px-[5px] lg:px-[15px] hover:text-play hover:bg-navi-300 lg:hover:bg-transparent" href="#"><i class="fas fa-bell "></i></a></li>
                    </ul>
                </nav>
            </div>
            <div id="lang_menu" class="supply bg-navi-500 rounded-none hidden lg:bg-transparent lg:absolute lg:top-[23px] lg:right-0">
                <nav class="login_menu bg-transparent lg:bg-white text-giallo border lg:border-white border-none block lg:inline-block p-0 lg:rounded-full rounded-none shadow-none lg:text-black lg:shadow-lg lg:px-[5px]">
                    <ul>
                        <li class="relative text-center border border-transparent border-b-navi-300 block lg:border-none lg:inline-block"><a class="uppercase transition-all block py-[17px] px-[20px] hover:text-giallo hover:bg-navi-300 lg:hover:bg-transparent" href="login.php">Login</a></li>
                        <li class="relative text-center border border-transparent border-b-navi-300 block lg:border-none lg:inline-block"><a class="uppercase transition-all block py-[17px] px-[20px] bg-none p-0 rounded-none shadow-none lg:shadow-md lg:bg-giallo lg:p-[13px] lg:rounded-full hover:text-giallo hover:bg-navi-300 lg:hover:bg-navi-900" href="registration.php">Register</a></li>
                    </ul>
                </nav>
                <nav class="block lg:inline-block">
                    <ul>
                        <li><a class="block py-[17px] px-[20px] hover:text-play hover:bg-navi-300 lg:hover:bg-transparent" href="#"><i class="fas fa-globe"></i> IT</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="p-0 absolute top-[25px] right-[25px] z-[20] block lg:hidden">
            <button id="butt_menu" class="c-burger c-burger--htx bg-bianco02 shadow-lg rounded-full top-[0px] right-[0px] absolute overflow-hidden m-0 p-0 w-[50px] h-[50px] indent-[-9999px] cursor-pointer  block lg:hidden">
                <span class=" block absolute top-[25px] left-[12px] right-[12px] h-[3px] bg-white rounded-none before:absolute after:absolute before:block after:block before:left-0 after:left-0 before:w-full after:w-full before:h-[3px] after:h-[3px] before:bg-white after:bg-white before:rounded-none after:rounded-none before:content-[''] after:content-['']"></span>
            </button>
        </div>
    </div>
</header>