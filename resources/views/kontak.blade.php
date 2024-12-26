<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>My Coffee</title>
</head>

<body class="bg-gray-100">
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
                    <a href="{{ route('kontak') }}" class="shrink-0 border-b-2 border-sky-500 px-1 pb-4 text-sm font-medium text-sky-600" aria-current="page">Pesanan</a>
                    <a href="{{ route('tentang') }}" class="shrink-0 border-b-2 border-transparent px-1 pb-4 text-sm font-medium text-gray-800 hover:border-gray-300 hover:text-gray-700">Tentang</a>
                    <a href="{{ route('home') }}" class="shrink-0 border-b-2 border-transparent px-1 pb-4 text-sm font-medium text-gray-800 hover:border-gray-300 hover:text-gray-700">Admin Login</a>
                </nav>
            </div>
            <div id="menu" class="hidden sm:hidden">
                <nav class="flex flex-col gap-4 px-4 py-4 bg-gray-100 rounded-xl">
                    <a href="{{ route('landing') }}" class="text-gray-800 hover:text-gray-700">Home</a>
                    <a href="{{ route('menu') }}" class="text-gray-800 hover:text-gray-700">Menu</a>
                    <a href="{{ route('kontak') }}" class="text-gray-800 hover:text-gray-700">Pesanan</a>
                    <a href="{{ route('tentang') }}" class="text-gray-800 hover:text-gray-700">Tentang</a>
                    <a href="{{ route('home') }}" class="text-gray-800 hover:text-gray-700">Admin Login</a>
                </nav>
            </div>
        </header>
    
    <div class="container mt-5 mx-auto mb-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4 text-2xl font-bold text-black">Produk Yang Tersedia</h3>
                    <hr class="">
                </div>
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div>
                        <table class="min-w-full bg-white border border-gray-300 ">
                            <thead>
                                <tr>
                                    <th scope="col" class="py-3 px-6 bg-gray-100 font-bold uppercase text-sm text-black text-left border-b border-gray-300 ">
                                        Nama Produk
                                    </th>
                                    <th scope="col" class="py-3 px-6 bg-gray-100 font-bold uppercase text-sm text-black text-left border-b border-gray-300 ">
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($products as $product)
                                    <tr class="border-b border-gray-300 hover:bg-gray-100">
                                        <td class="py-4 px-6 text-black">{{ $product->product_name }}</td>
                                        <td class="py-4 px-6 text-black">{{ 'Rp ' . number_format($product->price, 2, ',', '.') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="2" class="py-4 px-6 text-center text-red-600 font-semibold bg-red-100">
                                            Data Products belum Tersedia.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div class="p-4 bg-white border-t border-gray-300 ">
                            {{ $products->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container container mt-5 mx-auto mb-5">
        <div class="p-4 rounded-lg bg-white text-slate-950">
            <p>Jangan lewatkan kesempatan untuk menjelajahi dunia kopi yang menakjubkan dan mendalam bersama kami. Dengan rangkaian produk terbaik kami, mari kita jelajahi serangkaian cita rasa yang emosional dan nikmati kepuasan yang tak tergantikan dalam setiap tegukan. Ayo, mari kita mengeksplorasi kelezatan dan keindahan kopi bersama!
            </p>
            <a href="https://api.whatsapp.com/send/?phone=6287805343899&text=Halo+Saya+Berminat+Untuk+Membeli+Kopi+Bah+Daum!&type=phone_number&app_absent=0" target="_blank"
            class=" mt-5 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300 ease-in-out">
            Beli Sekarang!
            </a>
        </div>
    </div>
    <div class=" container mt-5 mx-auto mb-5 bg-white p-6 rounded-lg shadow-lg">
            <h1 class="text-2xl text-black font-bold mb-4">Cek Pesanan</h1>
            @if (session('error'))
                <div class="bg-red-500 text-white p-2 mb-4 rounded">
                    {{ session('error') }}
                </div>
            @endif
            <form action="/transactions.index" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="transactions_id" class="block text-gray-700 font-bold mb-2">Kode Pesanan:</label>
                    <input type="text" id="transactions_id" name="transactions_id" class="bg-white shadow appearance-none border rounded w-full py-2 px-3 text-black leading-tight border-blue-700" required>
                </div>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Cari</button>
            </form>
        </div>
    </div>
    <footer class="bg-white mt-10">
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
