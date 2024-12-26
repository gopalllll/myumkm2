<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="author" content="" />
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title> My Coffee </title>
</head>
    <body class="bg-gray-800">
        <header class="bg-white rounded-xl border-2 border-stone text-gray-800">
            <div class="container mx-auto px-4 py-6 flex justify-between items-center">
                <h1 class="font-bold text-2xl sm:text-3xl">Kopi Bah Daum</h1>
                <div class="sm:hidden">
                    <button id="menu-btn" class="focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-800" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                        </svg>
                    </button>
                </div>        
                <nav class="hidden sm:flex sm:items-center gap-6">
                    <a href="{{ route('landing') }}" class="shrink-0 border-b-2 border-transparent px-1 pb-4 text-sm font-medium text-gray-800 hover:border-gray-300 hover:text-gray-700">Home</a>
                    <a href="{{ route('menu') }}" class="shrink-0 border-b-2 border-transparent px-1 pb-4 text-sm font-medium text-gray-800 hover:border-gray-300 hover:text-gray-700">Menu</a>
                    <a href="{{ route('kontak') }}" class="shrink-0 border-b-2 border-transparent px-1 pb-4 text-sm font-medium text-gray-800 hover:border-gray-300 hover:text-gray-700">Pesanan</a>
                    <a href="{{ route('tentang') }}" class="shrink-0 border-b-2 border-sky-500 px-1 pb-4 text-sm font-medium text-sky-600" aria-current="page">Tentang</a>
                    <a href="{{ route('home') }}" class="shrink-0 border-b-2 border-transparent px-1 pb-4 text-sm font-medium text-gray-800 hover:border-gray-300 hover:text-gray-700">Admin Login</a>
                </nav>
            </div>
            <div id="menu" class="hidden sm:hidden">
                <nav class="flex flex-col gap-4 px-4 py-4 bg-gray-100 rounded-xl">
                    <a href="{{ route('landing') }}" class="text-gray-800 hover:text-gray-700">Home</a>
                    <a href="{{ route('menu') }}" class="text-gray-800 hover:text-gray-700">Menu</a>
                    <a href="{{ route('kontak') }}" class="text-gray-800 hover:text-gray-700">Cek Pesanan</a>
                    <a href="{{ route('tentang') }}" class="text-gray-800 hover:text-gray-700">Tentang</a>
                    <a href="{{ route('home') }}" class="text-gray-800 hover:text-gray-700">Admin Login</a>
                </nav>
            </div>
        </header>
        <div class="container mx-auto p-4 text-gray-800">
            <section>
                <div class="mx-auto max-w-screen-2xl px-4 py-16 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 lg:h-screen lg:grid-cols-2">
                        <div class="relative z-10 lg:py-16">
                            <div class="relative h-64 sm:h-80 lg:h-full">
                            <img
                                alt=""
                                src="{{ asset('images/kopimeja.png') }}"
                                class="absolute inset-0 h-full w-full object-cover"
                            />
                            </div>
                        </div>

                        <div class="relative flex items-center bg-gray-100">
                            <span
                            class="hidden lg:absolute lg:inset-y-0 lg:-start-16 lg:block lg:w-16 lg:bg-gray-100"
                            ></span>

                            <div class="p-8 sm:p-16 lg:p-24">
                            <h2 class="text-2xl font-bold sm:text-3xl">
                                Tentang Kami
                            </h2>
                            <p class="mt-4 text-justify text-gray-600">
                            Langsung dari puncak Gunung Sangar, kami hadirkan kopi Arabika dengan cita rasa yang tak tertandingi. Ditanam di ketinggian yang sempurna dan dirawat dengan penuh kasih sayang oleh para petani lokal. Setiap tegukan adalah perjalanan menuju jantung Gunung Sangar, membawa Anda pada pengalaman menikmati kopi yang benar-benar istimewa.            
                            Kopi medium roast kami disangrai dengan suhu dan waktu yang tepat untuk menghasilkan cita rasa yang kompleks. Proses roasting yang cermat ini menghasilkan biji kopi dengan warna cokelat keemasan dan aroma yang menggoda.
                            Nikmati kebersihan dan kesegaran dalam setiap tegukan kopi kami yang diproses dengan metode full washed. Biji kopi yang sudah dipanen akan langsung dicuci bersih untuk menghilangkan kulit dan lendirnya. Proses ini menghasilkan kopi dengan cita rasa yang bersih, cerah, dan cenderung lebih asam, cocok bagi kamu yang suka kopi dengan karakteristik yang segar.
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer class="bg-white mt-5">
            <div class="mx-auto px-4 pb-8 sm:px-6 lg:px-8 lg:pt-10">
                <div class="text-center">
                    <div class="text-center mb-5">
                        <a href="#" class="text-5xl text-slate-950">Kopi</a>
                        <br>
                        <a href="#" class="text-5xl font-bold text-slate-950">Bah Daum</a>
                    </div>        
                    <p class="text-center text-slate-950">
                    Dari ketinggian Gunung Sangar, lahirlah kopi Arabika dengan karakter yang unik. Dirawat dengan penuh kasih sayang oleh para petani, setiap bulir kopi menghasilkan minuman yang kaya akan rasa dan aroma. Dengan proses pengolahan yang teliti, kopi ini menawarkan pengalaman minum yang tak terlupakan. Setiap tegukan adalah persembahan dari alam dan dedikasi manusia.
                    </p>
                    <a href="https://api.whatsapp.com/send/?phone=6287805343899&text=Halo+Saya+Berminat+Untuk+Membeli+Kopi+Bah+Daum!&type=phone_number&app_absent=0" target="_blank"
                    class="mt-8 mb-8 inline-block rounded-full border bg-blue-500 px-12 py-3 text-sm font-medium text-white hover:bg-blue-700 hover:text-white focus:outline-none focus:ring ">
                    Beli Sekarang!
                    </a>
                    <ul class="list-none p-0 space-y-2 text-slate-950 text-sm md:text-base">
                        <li class="my-2">Phone: +62 812 3456 7890</li>
                        <li class="my-2">Location: Arjasari Kabupaten Bandung, Jawa Barat</li>
                    </ul>
                </div>
            </div>
        </footer>
    </body>
</html>