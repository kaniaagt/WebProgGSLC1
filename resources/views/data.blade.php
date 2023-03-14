@extends('template')

@section('content')
    <section class="block py-6 custom-font" style="font-size: large; margin-top: 50px;">
        <div class="has-text-justified">
        <p class ="has-text-centered"><b>Ringkasan Profile Kelompok 1</b></p>
        <table class="center">
        <tbody>
            <tr>
                <td><b>No.</b></td>
                <td><b>Nama</b></td>
                <td><b>NIM</b></td>
                <td><b>Email Binus<b></td>
                <td><b>Hobbies</b></td>
            </tr>
            @php($nama = array())
            @php(array_push($nama, "Bernadetha Emma Wawin", "Diana Petrina Santoso", "Felicia Ferren", "Kania Agatha"))

            @foreach ($nama as $namaKey => $namaValue)
                @if($namaValue === "Bernadetha Emma Wawin")
                    <tr>
                        <td>{{ $namaKey + 1 }}</td>
                        <td>{{ $namaValue }}</td>
                        <td>2440015101</td>
                        <td>bernadetha.wawin@binus.ac.id</td>
                        <td>Menonton drama, mendengarkan musik</td>
                    </tr>
                @elseif($namaValue === "Diana Petrina Santoso")
                    <tr>
                        <td>{{ $namaKey + 1 }}</td>
                        <td>{{ $namaValue }}</td>
                        <td>2440015442</td>
                        <td>diana.petrina@binus.ac.id</td>
                        <td>Mendengarkan musik</td>
                    </tr>
                @elseif($namaValue === "Felicia Ferren")
                    <tr>
                        <td>{{ $namaKey + 1 }}</td>
                        <td>{{ $namaValue }}</td>
                        <td>2440113071</td>
                        <td>felicia.ferren@binus.ac.id</td>
                        <td>Mendengarkan musik, membaca</td>
                    </tr>
                @elseif($namaValue === "Kania Agatha")
                    <tr>
                        <td>{{ $namaKey + 1 }}</td>
                        <td>{{ $namaValue }}</td>
                        <td>2440064702</td>
                        <td>kania.agatha@binus.ac.id</td>
                        <td>Fotografi, mengedit video</td>
                    </tr>
                @endif
            @endforeach
        </tbody>
        </table>
        </div>
    </section>
@endsection