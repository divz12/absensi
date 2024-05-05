<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

	protected $fillable = ['nisn', 'nama_siswa', 'id_kelas', 'id_jurusan'];

	public function kelas()
	{
		return $this->belongsTo(Kelas::class, 'id_kelas');
	}
}
