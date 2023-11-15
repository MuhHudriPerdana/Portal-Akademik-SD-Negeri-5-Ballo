@extends('layout/sidebar')
@section('css')
<link rel="stylesheet" href="{{ asset('css/setting/akun.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            NIP/NIS <i class="fa-solid fa-asterisk fa-2xs" style="color: #f60000;"></i> 
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="input-group">
                <input name='user_number' type="text" class="form-control border-secondary" placeholder="Masukkan NIP/NIS" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-4">
            Kelas<i class="fa-solid fa-asterisk fa-2xs" style="color: #f60000;"></i> 
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <select name='' class="form-select btn-primary border-secondary" aria-label="Default select example">
                <option selected disabled>Pilih Kelas</option>
                <option>Kelas 1</option>
              </select>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-1">
            <a href="{{ route('setting') }}" type="button" class="btn btn-light" style="box-shadow: 0px 4px 4px 0px #00000040;
            border-radius: 12px; color:#3182FB">Batal</a>
        </div>
        <div class="col-md-2">
            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary" style="box-shadow: 0px 4px 4px 0px #00000040;
            border-radius: 12px">Simpan</button>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <center>
                    <div class="mt-3">
                      <img src="{{ asset('img/alert_biru.svg') }}" alt="">
                    </div>
                <div class="modal-body p-0">
                    <p class="m-0 mt-1" style="font-weight: bold; font-size: 15px">Are you sure want to saving?</p>
                    <p class="m-0 mt-1" style="font-size: 12px">Are you sure want to saving?</p>
                </div>
                <div class="p-3">
                        <button type="button" class="btn" data-bs-dismiss="modal" style="border: 1px #3182FB solid">No</button>
                        <button type="submit" class="btn btn-primary">Yes</button>
                    </div>
                </center>
              </div>
            </div>
          </div>
</div>
@endsection