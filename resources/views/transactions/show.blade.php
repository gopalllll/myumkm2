<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title> My Coffee </title>
</head>

<body class="bg-gray-100">
<header class="bg-white rounded-xl border-2 border-stone text-gray-800">    
  <div class="container mx-auto px-4 py-8 flex justify-between items-center">
    <h1 class="font-bold text-3xl">Kopi Bah Daum</h1>
    <div class="hidden sm:block">
        <div class="border-b border-gray-200">
            <nav class="-mb-px flex gap-6" aria-label="Tabs">
                <a
                href="{{ route('landing') }}"
                class="shrink-0 border-b-2 border-transparent px-1 pb-4 text-sm font-medium text-gray-800 hover:border-gray-300 hover:text-gray-700"
                >
                Home
                </a>
                <a
                href="{{ route('menu') }}"
                class="shrink-0 border-b-2 border-transparent px-1 pb-4 text-sm font-medium text-gray-800 hover:border-gray-300 hover:text-gray-700"
                >
                Menu
                </a>
                <a
                href="{{ route('kontak') }}"                
                class="shrink-0 border-b-2 border-sky-500 px-1 pb-4 text-sm font-medium text-sky-600"
                aria-current="page"
                >
                Cek Pesanan
                </a>
                <a
                href="{{ route('tentang') }}"
                class="shrink-0 border-b-2 border-transparent px-1 pb-4 text-sm font-medium text-gray-800 hover:border-gray-300 hover:text-gray-700"
                >
                Tentang
                </a>
                <a
                href="{{ route('home') }}"
                class="shrink-0 border-b-2 border-transparent px-1 pb-4 text-sm font-medium text-gray-800 hover:border-gray-300 hover:text-gray-700"
                >
                Admin Login
                </a>
            </nav>
        </div>
    </div>
  </div>  
</header>
<div class="container text-center mx-auto mt-10">
    <h1 class="text-2xl text-black font-bold mb-4">Detail Pesanan</h1>
    
    <table class="min-w-full bg-white border border-black rounded-lg shadow-md">
        <thead>
        </thead>
        <tbody>
            <tr>
                <td class="py-2 px-4 border-b text-sm font-medium text-gray-700">Nama Pelanggan</td>
                <td class="py-2 px-4 border-b text-sm text-gray-900">{{ $transactions->customer_name }}</td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b text-sm font-medium text-gray-700">Nama Produk</td>
                <td class="py-2 px-4 border-b text-sm text-gray-900">{{ $transactions->products->product_name }}</td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b text-sm font-medium text-gray-700">Jumlah Pesanan</td>
                <td class="py-2 px-4 border-b text-sm text-gray-900">{{ $transactions->quantity }}</td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b text-sm font-medium text-gray-700">Total Harga</td>
                <td class="py-2 px-4 border-b text-sm text-gray-900">{{ "Rp " . number_format($transactions->total_price,2,',','.') }}</td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b text-sm font-medium text-gray-700">Status</td>
                <td class="py-2 px-4 border-b text-sm text-gray-900">
                    @if($transactions->status == 0)    
                        <span class="whitespace-nowrap rounded-full border border-blue-500 bg-blue-500 px-2.5 py-0.5 text-sm text-black">Sedang Dikemas</span>
                    @elseif($transactions->status == 1)
                        <span class="whitespace-nowrap rounded-full border border-yellow-500 bg-yellow-500 px-2.5 py-0.5 text-sm text-black">Sedang Diantar</span>
                    @elseif($transactions->status == 2)    
                        <span class="whitespace-nowrap rounded-full border border-yellow-500 bg-yellow-500 px-2.5 py-0.5 text-sm text-black">Menunggu Pengambilan</span>
                    @elseif($transactions->status == 3)
                        <span class="whitespace-nowrap rounded-full border border-green-500 bg-green-500 px-2.5 py-0.5 text-sm text-black">Pesanan Selesai</span>
                    @endif
                </td>
            </tr>
        </tbody>
    </table>
    <a href="/kontak" class="mt-4 inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Cari Pesanan Lain</a>
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

