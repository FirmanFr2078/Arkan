<?php
// Sistem Routing Sederhana (Default ke beranda jika tidak ada parameter)
$page = isset($_GET['page']) && $_GET['page'] !== '' ? $_GET['page'] : 'beranda';

// Memanggil Header
include 'includes/header.php';

// Menampilkan Konten Berdasarkan Routing 
if ($page == 'beranda') {
?>
   <div class="flex flex-col items-center justify-center text-center py-20 sm:py-32">
      <h1 class="text-5xl sm:text-7xl font-black tracking-tight text-gray-900 dark:text-white mb-6 leading-tight">
         Pilar Manajerial <br>
         <span class="text-transparent bg-clip-text bg-linear-to-r from-blue-600 to-cyan-400">Masjid Digital</span>
      </h1>

      <p class="max-w-2xl text-lg text-gray-600 dark:text-gray-400 mb-10 leading-relaxed px-4">
         Arkan hadir sebagai pilar digital yang memastikan setiap rekam karya dan administrasi pengurus tersusun cepat, rapi, dan transparan demi kemakmuran Masjid Nurul Iman.
      </p>

      <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto px-4">
         <a href="/login" class="inline-flex justify-center items-center gap-x-3 text-center bg-linear-to-tl from-blue-600 to-cyan-400 hover:from-blue-700 hover:to-cyan-500 border border-transparent text-white text-sm font-semibold rounded-lg py-3 px-8 transition-all shadow-lg shadow-blue-500/30">
            Masuk Dashboard
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
               <path d="m9 18 6-6-6-6" />
            </svg>
         </a>
         <a href="/tentang" class="inline-flex justify-center items-center gap-x-3 text-center bg-white border border-gray-200 text-gray-800 hover:bg-gray-50 text-sm font-semibold rounded-lg py-3 px-8 dark:bg-slate-900 dark:border-slate-700 dark:text-white dark:hover:bg-slate-800 transition-all">
            Pelajari Filosofi
         </a>
      </div>
   </div>
<?php
} else if ($page == 'tentang') {
   echo '<div class="text-center py-24"><h2 class="text-3xl font-bold dark:text-white">Halaman Tentang</h2><p class="mt-4 text-gray-400">Filosofi Arkan akan dimuat di sini.</p></div>';
} else if ($page == 'fitur') {
   echo '<div class="text-center py-24"><h2 class="text-3xl font-bold dark:text-white">Halaman Fitur</h2><p class="mt-4 text-gray-400">Detail fitur Arkan akan dimuat di sini.</p></div>';
} else if ($page == 'login') {
   echo '<div class="text-center py-24"><h2 class="text-3xl font-bold dark:text-white">Halaman Login</h2><p class="mt-4 text-gray-400">Form autentikasi pengurus akan dibuat di sini.</p></div>';
} else {
   echo '<div class="text-center py-24"><h2 class="text-3xl font-bold dark:text-white">404</h2><p class="mt-4 text-gray-400">Halaman Tidak Ditemukan.</p></div>';
}

// Memanggil Footer
include 'includes/footer.php';
?>