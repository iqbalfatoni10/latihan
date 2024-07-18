<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div id="status-message" data-status="{{ session('status') }}"></div>
    <!-- Navbar -->
    <nav class="bg-blue-500 border-gray-200 dark:bg-gray-900 fixed top-0 inset-x-0 z-50">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-3xl font-bold whitespace-nowrap text-white">Data Mahasiswa</span>
            </a>
            <div class="flex md:order-2">
                <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search" aria-expanded="false" class="md:hidden text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 me-1">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                </button>
                <div class="relative hidden md:block">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search icon</span>
                    </div>
                    <input type="text" id="search-navbar" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
                </div>
                <button data-collapse-toggle="navbar-search" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-search" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
                <div class="relative mt-3 md:hidden">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="text" id="search-navbar" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar -->

    <div class="mt-28 mx-4 md:mx-44 items-center justify-center h-full">
        <div class="flex flex-col md:flex-row justify-end items-center">
            <h1 class="text-3xl font-bold mb-4 md:mb-0 md:mr-64">Data Mahasiswa</h1>
            <button type="button" class="md:ml-28 focus:outline-none text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-lg px-5 py-2 dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-800" data-modal-target="tambahDataModal" data-modal-toggle="tambahDataModal">
                Tambah Data
            </button>
        </div>

        <!-- Modal Tambah Data -->
        <div id="tambahDataModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full h-full bg-black bg-opacity-50">
            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="tambahDataModal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="py-6 px-6 lg:px-8">
                        <h3 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Tambah Data Mahasiswa</h3>
                        <form class="space-y-6" action="{{ route('mahasiswa.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                                <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                            </div>
                            <div>
                                <label for="nip" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIP</label>
                                <input type="text" name="nip" id="nip" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                            </div>
                            <div>
                                <label for="universitas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Universitas</label>
                                <input type="text" name="universitas" id="universitas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                            </div>
                            <div>
                                <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                                <input type="text" name="keterangan" id="keterangan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                            </div>
                            <div>
                                <label for="foto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto</label>
                                <input type="file" name="foto" id="foto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                            </div>
                            <button type="submit" class="w-full text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Tambah Data -->

        <!-- Modal Edit Data -->
        <div id="editDataModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="editDataModal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="py-6 px-6 lg:px-8">
                        <h3 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Edit Data Mahasiswa</h3>
                        <form id="editForm" class="space-y-6" action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div>
                                <label for="editNama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                                <input type="text" name="nama" id="editNama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                            </div>
                            <div>
                                <label for="editNip" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIP</label>
                                <input type="text" name="nip" id="editNip" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                            </div>
                            <div>
                                <label for="editUniversitas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Universitas</label>
                                <input type="text" name="universitas" id="editUniversitas" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                            </div>
                            <div>
                                <label for="editKeterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan</label>
                                <input type="text" name="keterangan" id="editKeterangan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                            </div>
                            <div>
                                <label for="editFoto" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Foto</label>
                                <input type="file" name="foto" id="editFoto" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                            </div>
                            <button type="submit" class="w-full text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">Edit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Edit Data -->

        <!-- Tampilkan pesan jika data kosong -->
        @if ($mahasiswas->isEmpty())
        <p class="text-center font-bold text-xl mt-36 md:mt-64 text-red-600 dark:text-gray-400">Data Mahasiswa masih kosong!</p>
        @endif

        <!-- Card Data Mahasiswa -->
        <div class="mt-10 mb-4 grid gap-6 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
            @foreach ($mahasiswas as $mahasiswa)
            <div id="card-mahasiswa" class="mx-2 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg h-48 w-full object-cover" src="{{ Storage::url($mahasiswa->foto) }}" alt="{{ $mahasiswa->nama }}" />
                </a>
                <div class="px-5 pt-2">
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Nama : {{ $mahasiswa->nama }}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">NIP : {{ $mahasiswa->nip }}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Universitas : {{ $mahasiswa->universitas }}</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Keterangan : {{ $mahasiswa->keterangan }}</p>
                </div>
                <div class="flex items-center justify-between px-5 py-2">
                    <button type="button" class="text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800" data-modal-target="editDataModal" data-modal-toggle="editDataModal" data-id="{{ $mahasiswa->id }}" data-nama="{{ $mahasiswa->nama }}" data-nip="{{ $mahasiswa->nip }}" data-universitas="{{ $mahasiswa->universitas }}" data-keterangan="{{ $mahasiswa->keterangan }}">
                        Edit
                    </button>

                    <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" id="delete-form-{{ $mahasiswa->id }}" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="delete-btn text-white bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-800" data-id="{{ $mahasiswa->id }}">Hapus</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
        <!-- Card Data Mahasiswa -->
    </div>

    <script>
        // Handle Pengiriman Form Delete
        document.addEventListener("DOMContentLoaded", function() {
            var statusMessage = document.getElementById("status-message").getAttribute("data-status");
            if (statusMessage === "success") {
                Swal.fire({
                    title: "Sukses!",
                    text: "Data berhasil dihapus",
                    icon: "success",
                    confirmButtonText: "OK"
                });
            } else if (statusMessage === "error") {
                Swal.fire({
                    title: "Error!",
                    text: "Terjadi kesalahan saat menghapus data",
                    icon: "error",
                    confirmButtonText: "OK"
                });
            }

            document.querySelectorAll('.delete-btn').forEach(button => {
                button.addEventListener('click', function() {
                    var id = this.getAttribute('data-id');
                    deleteConfirmation(id);
                });
            });

            function deleteConfirmation(id) {
                Swal.fire({
                    title: "Apakah Anda yakin?",
                    text: "Data mahasiswa akan dihapus secara permanen!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya, hapus!",
                    cancelButtonText: "Batal"
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('delete-form-' + id).submit();
                    }
                });
            }
        });
        // Handle Pengiriman Form Delete

        // Handle status pesan
        const statusMessage = document.getElementById('status-message').getAttribute('data-status');
        if (statusMessage) {
            Swal.fire({
                title: 'Berhasil!',
                text: statusMessage,
                icon: 'success',
                confirmButtonText: 'OK'
            });
        }
        // Handle status pesan

        // Handle pencarian
        document.getElementById('search-navbar').addEventListener('input', function() {
            let filter = this.value.toLowerCase();
            let card = document.querySelectorAll('#card-mahasiswa');

            card.forEach(card => {
                let name = card.querySelector('p:nth-child(1)').textContent.toLowerCase();
                if (name.includes(filter)) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        });
        // Handle pencarian

        // Handle Modal Tambah Data
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('[data-modal-toggle="tambahDataModal"]').forEach(btn => {
                btn.addEventListener('click', function() {
                    tambahDataModal.toggle();
                });
            });

            document.querySelectorAll('[data-modal-hide="tambahDataModal"]').forEach(btn => {
                btn.addEventListener('click', function() {
                    tambahDataModal.hide();
                });
            });
        });
        // Handle Modal Tambah Data

        // Handle Modal Edit Data
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('[data-modal-toggle="editDataModal"]').forEach(btn => {
                btn.addEventListener('click', function() {
                    const id = this.getAttribute('data-id');
                    const nama = this.getAttribute('data-nama');
                    const nip = this.getAttribute('data-nip');
                    const universitas = this.getAttribute('data-universitas');
                    const keterangan = this.getAttribute('data-keterangan');

                    document.getElementById('editForm').action = '/mahasiswa/' + id;
                    document.getElementById('editNama').value = nama;
                    document.getElementById('editNip').value = nip;
                    document.getElementById('editUniversitas').value = universitas;
                    document.getElementById('editKeterangan').value = keterangan;

                    editDataModal.show();
                });
            });

            document.querySelectorAll('[data-modal-hide="editDataModal"]').forEach(btn => {
                btn.addEventListener('click', function() {
                    editDataModal.hide();
                });
            });
        });
        //Handle Modal Edit Data
    </script>
</body>

</html>