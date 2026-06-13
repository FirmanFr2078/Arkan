<!DOCTYPE html>
<html lang="id" class="dark">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ARKAN | Akselerasi Rekam Karya & Administrasi</title>

   <link rel="stylesheet" href="/assets/css/style.css">
   <script defer src="/assets/js/alpine.js"></script>
</head>

<body class="bg-gray-50 dark:bg-slate-900 text-gray-800 dark:text-gray-200 antialiased selection:bg-blue-500 selection:text-white">

   <header class="sticky top-0 z-50 w-full bg-white/80 dark:bg-slate-900/80 backdrop-blur-md border-b border-gray-200 dark:border-slate-800" x-data="{ mobileMenuOpen: false }">
      <nav class="max-w-340 w-full mx-auto px-4 sm:px-6 lg:px-8" aria-label="Global">
         <div class="flex items-center justify-between h-16">

            <div class="flex-none">
               <a class="text-2xl font-bold flex items-center gap-x-2 focus:outline-none focus:opacity-80 transition-opacity" href="/" aria-label="Arkan">
                  <span class="tracking-widest uppercase font-black text-gray-900 dark:text-white">
                     <span class="text-transparent bg-clip-text bg-linear-to-r from-blue-600 to-cyan-400">AR</span>KAN
                  </span>
               </a>
            </div>

            <div class="hidden sm:flex sm:items-center sm:gap-x-8">
               <a class="text-sm font-medium text-gray-600 hover:text-blue-600 dark:text-gray-400 dark:hover:text-cyan-400 transition-colors" href="/beranda">Beranda</a>
               <a class="text-sm font-medium text-gray-600 hover:text-blue-600 dark:text-gray-400 dark:hover:text-cyan-400 transition-colors" href="/tentang">Tentang</a>
               <a class="text-sm font-medium text-gray-600 hover:text-blue-600 dark:text-gray-400 dark:hover:text-cyan-400 transition-colors" href="/fitur">Fitur</a>

               <div class="pl-6 border-l border-gray-200 dark:border-slate-700">
                  <a href="/login" class="inline-flex items-center justify-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 px-4 py-2 transition-all shadow-sm shadow-blue-500/30 hover:shadow-blue-500/50">
                     <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                        <polyline points="10 17 15 12 10 7" />
                        <line x1="15" x2="3" y1="12" y2="12" />
                     </svg>
                     Login Pengurus
                  </a>
               </div>
            </div>

         </div>

         <div x-show="mobileMenuOpen" x-transition.opacity style="display: none;" class="sm:hidden pb-4">
            <div class="flex flex-col gap-y-4 gap-x-0 mt-5 px-2">
               <a class="text-sm font-medium text-gray-600 hover:text-blue-600 dark:text-gray-400 dark:hover:text-cyan-400" href="/beranda">Beranda</a>
               <a class="text-sm font-medium text-gray-600 hover:text-blue-600 dark:text-gray-400 dark:hover:text-cyan-400" href="/tentang">Tentang</a>
               <a class="text-sm font-medium text-gray-600 hover:text-blue-600 dark:text-gray-400 dark:hover:text-cyan-400" href="/fitur">Fitur</a>

               <div class="pt-4 border-t border-gray-200 dark:border-slate-700">
                  <a href="/login" class="w-full inline-flex items-center justify-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 px-4 py-2 shadow-sm">
                     <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4" />
                        <polyline points="10 17 15 12 10 7" />
                        <line x1="15" x2="3" y1="12" y2="12" />
                     </svg>
                     Login Pengurus
                  </a>
               </div>
            </div>
         </div>
      </nav>
   </header>

   <main class="max-w-340 w-full mx-auto px-4 sm:px-6 lg:px-8 py-10">