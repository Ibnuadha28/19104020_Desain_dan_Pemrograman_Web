@extends('base')
@section('content')
    <h1>Beranda</h1>
<?php
    $array = [1,2,3,4,5];
    $nama = 'Adha';
    $nilai = 80;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ini Halaman Beranda</h1>

    <p>
        {{ "Halo Dunia" }}
    </p>

    @if (1+1 == 2)
        <p>
            {{ 'Halo Dunia' }}
        </p>
    @endif

    <hr>
    <h1>Perulangan</h1>

    @for ($i = 0; $i < count($array); $i++)
            <p>
                {{ $array[$i] }}
            </p>

    @endfor

    <hr>
    <h1>Percabangan</h1>

    @if (1+1 == 3)
        <p>
            {{ 'Jawaban benar' }}
        </p>
    @else
        {{ "Jawaban salah"}}
    @endif

    @if ($nama == "Ibnu")
        <p>
            {{ "Nama Saya Ibnu" }}
        </p>
    @elseif ($nama == "Adha")
        <p>
            {{ "Nama Saya Adha" }}
        </p>
    @else
        <p>
            {{ "Nama Tidak diketahui" }}
        </p>
    @endif


    <hr>
    <h1>Percabangan Switch</h1>

    @switch($nilai)
        @case(90)
            {{ "Nilai Anda A"}}
            @break

        @case(80)
            {{ "Nilai Anda B"}}
            @break

        @case(70)
            {{ "Nilai Anda C"}}
            @break

        @default
            {{ "Nilai Anda D"}}

    @endswitch

</body>
</html>
@endsection




