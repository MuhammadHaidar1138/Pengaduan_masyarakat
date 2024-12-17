@extends('template.app')

@section('content')
    <style>
        label {
            color: black;
            margin-top: 10px;
        }

        button {
            --color: #6B7280;
            font-family: inherit;
            display: inline-block;
            width: 8em;
            height: 2.6em;
            line-height: 2.5em;
            margin: 20px;
            position: relative;
            cursor: pointer;
            overflow: hidden;
            border: 2px solid var(--color);
            transition: color 0.5s;
            z-index: 1;
            font-size: 17px;
            border-radius: 6px;
            font-weight: 500;
            color: var(--color);
        }

        button:before {
            content: "";
            position: absolute;
            z-index: -1;
            background: var(--color);
            height: 150px;
            width: 200px;
            border-radius: 50%;
        }

        button:hover {
            color: #fff;
        }

        button:before {
            top: 100%;
            left: 100%;
            transition: all 0.7s;
        }

        button:hover:before {
            top: -30px;
            left: -30px;
        }

        button:active:before {
            background: #6B7280;
            transition: background 0s;
        }
    </style>
    <h1 style="color: black; text-align: center">Silahkan Lakukan Pengaduan</h1>
    <div class="text-body">

        {{-- Dropdown Propinsi --}}
        <label for="propinsi">Pilih Provinsi <span style="color: red">*</span></label>
        <select class="form-select" id="province" aria-label="Default select example">
        </select>
        {{-- End Dropdown Propinsi --}}

        {{-- Dropdown Kota/Kabupaten --}}
        <label for="kota">Pilih Kota/Kabupaten <span style="color: red">*</span></label>
        <select class="form-select" id="kota" aria-label="Default select example">
        </select>
        {{-- End Dropdown Kota/Kabupaten --}}

        {{-- Dropdown Kecamatan --}}
        <label for="kecamatan">Pilih Kecamatan <span style="color: red">*</span></label>
        <select class="form-select" id="kecamatan" aria-label="Default select example">
        </select>
        {{-- End Dropdown Kecamatan --}}

        {{-- Dropdown Kelurahan --}}
        <label for="kelurahan">Pilih Kelurahan <span style="color: red">*</span></label>
        <select class="form-select" id="kelurahan" aria-label="Default select example">
        </select>
        {{-- End Dropdown Kelurahan --}}

        {{-- Dropdown Type --}}
        <label for="tipe">Type <span style="color: red">*</span></label>
        <select class="form-select" name="type" id="type" aria-label="Default select example">
            <option value="" disabled selected>Masukkan Tipe Keluhan</option>
            <option value="">Kejahatan</option>
            <option value="">Pembangunan</option>
            <option value="">Sosial</option>
        </select>
        {{-- End Dropdown Type --}}

        {{-- Textarea --}}
        <label class="form-label" for="statement">Keluhan <span style="color: red">*</span></label>
        <textarea type="text" class="form-control" placeholder="silahkan masukkan keluhan"></textarea>
        {{-- End Textarea --}}

        {{-- Image --}}
        <label for="image">Pilih Gambar <span style="color: red">*</span></label>
        <input type="file" class="form-control" id="image">
        {{-- End Image --}}
    </div>

    <form action="">
        <button type="submit">Kirim</button>
    </form>
    {{-- SCRIPT --}}
    <script>
        $(document).ready(function() {
            // Ajax untuk mendapatkan daftar provinsi
            $.ajax({
                method: "GET",
                url: "https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json",
                dataType: "json",

                success: function(res) {
                    let data = "<option value='' disabled selected>Cari Provinsi</option>";
                    res.forEach(propinsi => {
                        let option =
                            `<option value="${propinsi.id}">${propinsi.name}</option>`;
                        data += option;
                    });
                    $("#province").html(data);
                    $("#kota").html(
                        "<option value='' disabled selected>Pilih provinsi terlebih dahulu</option>"
                    );
                }
            });

            // Event listener untuk dropdown provinsi
            $("#province").change(function() {
                const idProvinsi = $(this).val();

                // Ajax untuk mendapatkan daftar kota/kabupaten berdasarkan provinsi yang dipilih
                $.ajax({
                    method: "GET",
                    url: `https://www.emsifa.com/api-wilayah-indonesia/api/regencies/${idProvinsi}.json`,
                    dataType: "json",

                    success: function(res) {
                        let data =
                            "<option value='' disabled selected>Cari Kota/Kabupaten</option>";
                        res.forEach(kota => {
                            let option =
                                `<option value="${kota.id}">${kota.name}</option>`;
                            data += option;
                        });
                        $("#kota").html(data);
                        $("#kecamatan").html(
                            "<option value='' disabled selected>Pilih Kota terlebih dahulu</option>"
                        );
                    }
                });
            });

            // Event listener untuk dropdown kota/kabupaten
            $("#kota").change(function() {
                const idKota = $(this).val();

                // Ajax untuk mendapatkan daftar kecamatan berdasarkan kota/kabupaten yang dipilih
                $.ajax({
                    method: "GET",
                    url: `https://www.emsifa.com/api-wilayah-indonesia/api/districts/${idKota}.json`,
                    dataType: "json",

                    success: function(res) {
                        let data = "<option value='' disabled selected>Cari Kecamatan</option>";
                        res.forEach(kecamatan => {
                            let option =
                                `<option value="${kecamatan.id}">${kecamatan.name}</option>`;
                            data += option;
                        });
                        $("#kecamatan").html(data);
                        $("#kelurahan").html(
                            "<option value='' disabled selected>Pilih Kecamatan terlebih dahulu</option>"
                        );
                    }
                });
            });

            // Event listener untuk dropdown kelurahan
            $("#kecamatan").change(function() {
                const idKecamatan = $(this).val();

                // Ajax untuk mendapatkan daftar kelurahan berdasarkan kecamatan yang dipilih
                $.ajax({
                    method: "GET",
                    url: `https://www.emsifa.com/api-wilayah-indonesia/api/villages/${idKecamatan}.json`,
                    dataType: "json",

                    success: function(res) {
                        let data = "<option value='' disabled selected>Cari Kelurahan</option>";
                        res.forEach(kelurahan => {
                            let option =
                                `<option value="${kelurahan.id}">${kelurahan.name}</option>`;
                            data += option;
                        });
                        $("#kelurahan").html(data);

                    }
                })
            })
        });
    </script>
@endsection
