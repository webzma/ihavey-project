<?php
$urlBase = 'http://localhost/proyecto/src/';
?>
  <header
    class="flex items-center shadow-lg shadow-gray-100 h-14 px-4 border-b border-gray-200/60 backdrop-filter backdrop-blur-sm/40 blur-sm/40">
    <a class="flex items-center gap-2 font-semibold" href="<?php echo $urlBase;?>"><svg xmlns="http://www.w3.org/2000/svg" width="32"
        height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
        stroke-linejoin="round" class="size-7">
        <path d="m7.5 4.27 9 5.15"></path>
        <path
          d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z">
        </path>
        <path d="m3.3 7 8.7 5 8.7-5"></path>
        <path d="M12 22V12"></path>
      </svg><span class="font-bold">Ihavey</span>
    </a>

    <nav class="ml-auto flex items-center space-x-4">
      <a class="text-sm font-medium transition-colors  hover:text-gray-600 hover:underline" href="<?php echo $urlBase;?>">
        Inicio 
      </a>
      <a class="text-sm font-medium transition-colors  hover:text-gray-600 hover:underline" href="<?php echo $urlBase;?>/sections/clients">
        Clientes 
      </a>
      <a class="text-sm font-medium transition-colors  hover:text-gray-600 hover:underline"
      href="<?php echo $urlBase;?>/sections/reports">
        Reportes
      </a>
    </nav>
  </header>
