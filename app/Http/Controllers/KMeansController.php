<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysqli;

class KMeansController extends Controller
{

    public function kMeans()
    {
        $maxIterasi = 10;
        $iterasi = 0;

        // Melakukan pengulangan untuk setiap iterasi
        while ($iterasi < $maxIterasi) {
            // Membandingkan jumlah anggota pada setiap cluster sebelumnya
            $temp1 = DB::table('cluster')->where('id', 1)->value('jumlah_anggota');
            $temp2 = DB::table('cluster')->where('id', 2)->value('jumlah_anggota');

            // Mengambil data pada tabel data
            $data = DB::table('data')->get();

            // Melakukan perulangan untuk setiap data
            foreach ($data as $d) {
                $nilai1 = $d->nilai1;
                $nilai2 = $d->nilai2;
                $nilai3 = $d->nilai3;
                $nilai4 = $d->nilai4;
                $nilai5 = $d->nilai5;
                $nilai6 = $d->nilai6;
                $nilai7 = $d->nilai7;
                $nilai8 = $d->nilai8;
                $nilai9 = $d->nilai9;
                $nilai10 = $d->nilai10;

                // Menghitung jarak antara data dengan setiap cluster
                $center1id1 = DB::table('cluster')->where('id', 1)->value('center1');
                $center2id1 = DB::table('cluster')->where('id', 1)->value('center2');
                $center3id1 = DB::table('cluster')->where('id', 1)->value('center3');
                $center4id1 = DB::table('cluster')->where('id', 1)->value('center4');
                $center5id1 = DB::table('cluster')->where('id', 1)->value('center5');
                $center6id1 = DB::table('cluster')->where('id', 1)->value('center6');
                $center7id1 = DB::table('cluster')->where('id', 1)->value('center7');
                $center8id1 = DB::table('cluster')->where('id', 1)->value('center8');
                $center9id1 = DB::table('cluster')->where('id', 1)->value('center9');
                $center10id1 = DB::table('cluster')->where('id', 1)->value('center10');

                $jarak1 = sqrt(pow(($nilai1 - $center1id1), 2) + pow(($nilai2 - $center2id1), 2) + pow(($nilai3 - $center3id1), 2) + pow(($nilai4 - $center4id1), 2) + pow(($nilai5 - $center5id1), 2) + pow(($nilai6 - $center6id1), 2) + pow(($nilai7 - $center7id1), 2) + pow(($nilai8 - $center8id1), 2) + pow(($nilai9 - $center9id1), 2) + pow(($nilai10 - $center10id1), 2));

                $center1id2 = DB::table('cluster')->where('id', 2)->value('center1');
                $center2id2 = DB::table('cluster')->where('id', 2)->value('center2');
                $center3id2 = DB::table('cluster')->where('id', 2)->value('center3');
                $center4id2 = DB::table('cluster')->where('id', 2)->value('center4');
                $center5id2 = DB::table('cluster')->where('id', 2)->value('center5');
                $center6id2 = DB::table('cluster')->where('id', 2)->value('center6');
                $center7id2 = DB::table('cluster')->where('id', 2)->value('center7');
                $center8id2 = DB::table('cluster')->where('id', 2)->value('center8');
                $center9id2 = DB::table('cluster')->where('id', 2)->value('center9');
                $center10id2 = DB::table('cluster')->where('id', 2)->value('center10');

                $jarak2 = sqrt(pow(($nilai1 - $center1id2), 2) + pow(($nilai2 - $center2id2), 2) + pow(($nilai3 - $center3id2), 2) + pow(($nilai4 - $center4id2), 2) + pow(($nilai5 - $center5id2), 2) + pow(($nilai6 - $center6id2), 2) + pow(($nilai7 - $center7id2), 2) + pow(($nilai8 - $center8id2), 2) + pow(($nilai9 - $center9id2), 2) + pow(($nilai10 - $center10id2), 2));

                // Menentukan cluster yang terdekat dengan data
                if ($jarak1 <= $jarak2) {
                    $out = 1;
                } else {
                    $out = 2;
                }

                // Menyimpan hasil clustering pada tabel data
                DB::table('data')->where('id', $d->id)->update(['c1' => $jarak1, 'c2' => $jarak2, 'Class' => $out]);

                // Menambah jumlah anggota pada cluster yang terpilih
                DB::table('cluster')->where('id', $out)->increment('jumlah_anggota');
            }
            // Menghitung rata-rata untuk setiap kolom pada setiap cluster
            $mean1 = DB::table('data')->where('Class', 1)->avg('nilai1');
            $mean2 = DB::table('data')->where('Class', 1)->avg('nilai2');
            $mean3 = DB::table('data')->where('Class', 1)->avg('nilai3');
            $mean4 = DB::table('data')->where('Class', 1)->avg('nilai4');
            $mean5 = DB::table('data')->where('Class', 1)->avg('nilai5');
            $mean6 = DB::table('data')->where('Class', 1)->avg('nilai6');
            $mean7 = DB::table('data')->where('Class', 1)->avg('nilai7');
            $mean8 = DB::table('data')->where('Class', 1)->avg('nilai8');
            $mean9 = DB::table('data')->where('Class', 1)->avg('nilai9');
            $mean10 = DB::table('data')->where('Class', 1)->avg('nilai10');

            DB::table('cluster')->where('id', 1)->update(['center1' => $mean1, 'center2' => $mean2, 'center3' => $mean3, 'center4' => $mean4, 'center5' => $mean5, 'center6' => $mean6, 'center7' => $mean7, 'center8' => $mean8, 'center9' => $mean9, 'center10' => $mean10]);
            // Menghitung rata-rata untuk setiap kolom pada setiap cluster
            $mean11 = DB::table('data')->where('Class', 2)->avg('nilai1');
            $mean12 = DB::table('data')->where('Class', 2)->avg('nilai2');
            $mean13 = DB::table('data')->where('Class', 2)->avg('nilai3');
            $mean14 = DB::table('data')->where('Class', 2)->avg('nilai4');
            $mean15 = DB::table('data')->where('Class', 2)->avg('nilai5');
            $mean16 = DB::table('data')->where('Class', 2)->avg('nilai6');
            $mean17 = DB::table('data')->where('Class', 2)->avg('nilai7');
            $mean18 = DB::table('data')->where('Class', 2)->avg('nilai8');
            $mean19 = DB::table('data')->where('Class', 2)->avg('nilai9');
            $mean20 = DB::table('data')->where('Class', 2)->avg('nilai10');
            // Mengupdate nilai tengah pada setiap cluster dengan rata-rata terbaru
            DB::table('cluster')->where('id', 2)->update(['center1' => $mean11, 'center2' => $mean12, 'center3' => $mean13, 'center4' => $mean14, 'center5' => $mean15, 'center6' => $mean16, 'center7' => $mean17, 'center8' => $mean18, 'center9' => $mean19, 'center10' => $mean20]);

            // Memeriksa apakah jumlah anggota pada setiap cluster telah stabil
            if ($temp1 == DB::table('cluster')->where('id', 1)->value('jumlah_anggota') && $temp2 == DB::table('cluster')->where('id', 2)->value('jumlah_anggota')) {
                break;
            }

            // Menaikkan jumlah iterasi
            $iterasi++;
        }
    }
}
?>
