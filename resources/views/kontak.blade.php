@extends('layout.app')

@section('title', 'Kontak Kami')

@section('content')
    <div class="flex justify-center items-center min-h-screen px-4">
        <div class="max-w-2xl w-full bg-white rounded-2xl shadow-md border border-gray-200 p-6">
            <h1 class="text-3xl font-bold text-red-600 mb-6 text-center">Hubungi Kami</h1>
            <p class="text-gray-600 text-center mb-6">Punya pertanyaan atau ingin memesan? Kirim pesan Anda melalui form di
                bawah ini.</p>

            <form onsubmit="kirimWhatsApp(event)" class="space-y-4">
                <div>
                    <label class="block font-semibold mb-1">Nama Lengkap</label>
                    <input type="text" id="nama" class="w-full border rounded-lg px-4 py-2 focus:ring focus:ring-red-300"
                        placeholder="Masukkan nama Anda" required>
                </div>

                <div>
                    <label class="block font-semibold mb-1">Email</label>
                    <input type="email" id="email" class="w-full border rounded-lg px-4 py-2 focus:ring focus:ring-red-300"
                        placeholder="Masukkan email Anda" required>
                </div>

                <div>
                    <label class="block font-semibold mb-1">Nomor HP / WhatsApp</label>
                    <input type="text" id="telepon" class="w-full border rounded-lg px-4 py-2 focus:ring focus:ring-red-300"
                        placeholder="Contoh: 08123456789" required>
                </div>

                <div>
                    <label class="block font-semibold mb-1">Pesan</label>
                    <textarea id="pesan" rows="5" class="w-full border rounded-lg px-4 py-2 focus:ring focus:ring-red-300"
                        placeholder="Tulis pesan Anda..." required></textarea>
                </div>

                <div class="text-center">
                    <button type="submit"
                        class="px-6 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600 transition">
                        Kirim ke WhatsApp
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function kirimWhatsApp(event) {
            event.preventDefault();

            let nama = document.getElementById('nama').value;
            let email = document.getElementById('email').value;
            let telepon = document.getElementById('telepon').value;
            let pesan = document.getElementById('pesan').value;

            let nomorTujuan = "6281234567890"; // Ganti dengan nomor WhatsApp tujuan (tanpa +)
            let teks = `Halo, saya ${nama}%0AEmail: ${email}%0ANo HP: ${telepon}%0APesan: ${pesan}`;
            let url = `https://wa.me/${nomorTujuan}?text=${teks}`;

            window.open(url, '_blank');
        }
    </script>
@endsection