<?php

namespace App\Http\Livewire;

use App\Models\Pengaduan;
use Livewire\Component;

class Lapor extends Component
{
    public $tanggalpengaduan, $nik, $isilaporan, $sudahdikirim = 'belum';
    public function simpan()
    {
        $simpan = new Pengaduan();
        $simpan->tanggal_pengaduan = $this->tanggalpengaduan;
        $simpan->nik = $this->nik;
        $simpan->isi_laporan = $this->isilaporan;
        $simpan->status = 'terkirim';
        $simpan->save();
        $this->sudahdikirim = 'udah';
    }
    public function render()
    {
        return view('livewire.lapor');
    }
}
