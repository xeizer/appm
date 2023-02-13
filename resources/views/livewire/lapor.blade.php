<div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @auth
                    @if (Auth::user()->level == 'masyarakat')
                        @if ($sudahdikirim == 'belum')
                            <div class="card shadow-lg">
                                <div class="card-header text-white text-center " style="background-color: rgb(179, 0, 255)">
                                    Lapor
                                    pak
                                </div>

                                <div class="card-body">
                                    SELAMAT DATANG PADA FORMULIR PENGADUAN MASYARAKAT
                                    <br>
                                    silahkan isi pada formulir ini informasi yang diperlukan untuk melaporkan
                                    <br>
                                    <br>
                                    <div class="mb-3">
                                        <label for="tanggalpelaporan" class="form-label">tanggal pelaporan</label>
                                        <input wire:model='tanggalpengaduan' type="date" class="form-control"
                                            id="tanggalpelaporan">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nik" class="form-label">NIK</label>
                                        <input wire:model='nik' type="text" class="form-control" id="nik">
                                    </div>
                                    <div class="mb-3">
                                        <label for="isilaporan" class="form-label">ISI LAPORAN</label>
                                        <textarea wire:model='isilaporan' class="form-control" id="isilaporan" rows="3"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">FOTO</label>
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                    <button type="button" class="btn btn-outline-dark btn-lg w-100"
                                        wire:click='simpan'>KIRIM</button>
                                    <div wire:loading>

                                        Processing Payment...

                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($sudahdikirim == 'udah')
                            <div class="alert alert-secondary" role="alert">
                                laporan anda sudah kami terima!
                            </div>
                        @endif
                    @endif
                @endauth
                @guest
                    anda belum login
                @endguest
            </div>
        </div>
    </div>
</div>
