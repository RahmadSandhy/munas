@extends('header')

@section('content')
<style>
  form label.required:after {
      color: red;
      content: " *";
  }
  p {
      color: red;
  }
  .form-group{
      padding-top:10px;
  }


  .button-flash {
  background-color: #004A7F;
  -webkit-border-radius: 10px;
  border-radius: 10px;
  border: none;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: Arial;
  font-size: 20px;
  padding: 5px 10px;
  text-align: center;
  text-decoration: none;
  -webkit-animation: glowing 3000ms infinite;
  -moz-animation: glowing 3000ms infinite;
  -o-animation: glowing 3000ms infinite;
  animation: glowing 3000ms infinite;
  }
  @-webkit-keyframes glowing {
  0% { background-color: #141414; -webkit-box-shadow: 0 0 3px #141414; }
  50% { background-color: #343a40; -webkit-box-shadow: 0 0 40px #343a40; }
  100% { background-color: #141414; -webkit-box-shadow: 0 0 3px #141414; }
  }

  @-moz-keyframes glowing {
  0% { background-color: #141414; -moz-box-shadow: 0 0 3px #141414; }
  50% { background-color: #343a40; -moz-box-shadow: 0 0 40px #343a40; }
  100% { background-color: #141414; -moz-box-shadow: 0 0 3px #141414; }
  }

  @-o-keyframes glowing {
  0% { background-color: #141414; box-shadow: 0 0 3px #141414; }
  50% { background-color: #343a40; box-shadow: 0 0 40px #343a40; }
  100% { background-color: #141414; box-shadow: 0 0 3px #141414; }
  }

  @keyframes glowing {
  0% { background-color: #141414; box-shadow: 0 0 3px #141414; }
  50% { background-color: #343a40; box-shadow: 0 0 40px #343a40; }
  100% { background-color: #141414; box-shadow: 0 0 3px #141414; }
  }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

<div class="container" id="content">

    <div class="row">
        <div class="col-lg-2">
        </div>
        <div class="col-lg-8">
            @if(session()->get('success'))
            <div class="alert alert-success">{{ session()->get('success') }}
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            </div>
            @endif

            @if(session()->get('pesan'))
              <div class="alert alert-warning">{!! session()->get('pesan') !!}
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              </div>
            @endif

            <h2 style="text-align:center">Daftar Hadir Munas P<sub>3</sub>S Mandiri 2021</h2>
            <hr>
        </div>
        <div class="col-lg-2">
        </div>
    </div>

    <main role="main" class="container">
      <form action="{{ url('/store_hadir1') }}" class="form-horizontal" id="formRegist" name="formRegist"
              method="post" enctype="multipart/form-data">
      @csrf
      <form action="/registrasi/store_hadir1" method="post">
      <div class="row">
          <div class="col-lg-2">
          </div>
          <div class="col-lg-8 card" style="width: 100%;background-color:#b7d0ed">
              <div class="col-lg-12">
                  <div class="form-group">
                      <label for="nama" class="label-control required"><b>Asosiasi/Instansi</b></label><br>
                      <input class="form-control" type="text" readonly value="1" name="asosiasi" id="asosiasi" placeholder="Asosiasi/Instansi">
                      <!-- <input type= "text" oninput="setCustomValidity('')" readonly value="0" id="asosiasi" name="asosiasi" type="readonly" required class="form-control" placeholder="Asosiasi/Instansi"> -->
                      <span id="nama" class="invalid-feedback">{{ $errors->first('nama') }}</span>
                  </div>
              </div>
          </div>
          <div class="col-lg-2">
          </div>
      </div>
      <br>
      <div class="row">
          <div class="col-lg-2">
          </div>
          <div class="col-lg-8 card" style="width: 100%;background-color:#b7d0ed">
              <div class="col-lg-12">
                  <div class="form-group">
                      <label for="provinsi" class="label-control required"><b>Provinsi</b></label><br>
                      
                     <select class="form-control" id="provinsi" name="provinsi">
                        @foreach ($prop as $key)
                        <option @if ($key->id==31) selected @endif  value="{{ $key->id }}">{{ $key->nama }}</option>
                        @endforeach
                        </select>


                  </div>
              </div>
          </div>
          <div class="col-lg-2">
          </div>
      </div>
      <br>
      <div class="row">
          <div class="col-lg-2">
          </div>
          <div class="col-lg-8 card" style="width: 100%;background-color:#b7d0ed">
              <div class="col-lg-12">
                  <div class="form-group">
                      <label for="no_hp" class="label-control required"><b>Nama</b></label><br>
                      <input type="text" name="nama" id="nama" required="required" placeholder="Nama Lengkap">
                      <!-- <span id="no_hp" class="invalid-feedback">{{ $errors->first('no_hp') }}</span> -->
                  </div>
              </div>
          </div>
          <div class="col-lg-2">
          </div>
      </div>
      <br>
      <div class="row">
          <div class="col-lg-2">
          </div>
          <div class="col-lg-8 card" style="width: 100%;background-color:#b7d0ed">
              <div class="col-lg-12">
                  <div class="form-group">
                      <label for="instansi" class="label-control required"><b>Jabatan</b></label>
                      <input type="text" name="jabatan" id="jabatan" required="required" placeholder="Jabatan">
                      <!-- <span id="instansi" class="invalid-feedback">{{ $errors->first('instansi') }}</span> -->
                  </div>
              </div>
          </div>
          <div class="col-lg-2">
          </div>
      </div>
      <br>
      <div class="row">
          <div class="col-lg-2">
          </div>
          <div class="col-lg-8 card" style="width: 100%;background-color:#b7d0ed">
              <div class="col-lg-12">
                  <div class="form-group">
                      <label for="pekerjaan" class="label-control required"><b>No.Hp</b></label><br>
                      <input type="number" name="no_hp" id="no_hp" required="required" placeholder="No Hp">
                      <!-- <span id="pekerjaan" class="invalid-feedback">{{ $errors->first('pekerjaan') }}</span> -->
                  </div>
              </div>
          </div>
          <div class="col-lg-2">
          </div>
      </div>
      <br>
      <div class="row">
          <div class="col-lg-2">
          </div>
          <div class="col-lg-8 card" style="width: 100%;background-color:#b7d0ed">
              <div class="col-lg-12">
                  <div class="form-group">
                      <label for="pekerjaan" class="label-control required"><b>Email</b></label>
                      <input type="text" name="email" id="email" required="required" placeholder="Email">
                      <!-- <span id="pekerjaan" class="invalid-feedback">{{ $errors->first('pekerjaan') }}</span> -->
                  </div>
              </div>
          </div>

          <div class="col-lg-2">
          </div>
      </div>
      <!-- <br>
      <div class="row"style="text-align:center">
          <div class="col-lg-2">
            @if(session()->get('magic_link'))
            <input type="hidden" name="magic_link" value="{{ session()->get('magic_link') }}">
            @endif
          </div>
          <div class="col-lg-4" style="width: 100%;">
          <button style="width:100%"
            class="btn btn-sm btn-info" data-target="#modalMulai"
            data-toggle="modal" data-backdrop="static"
            data-keyboard="false" id="btnMulai" name="btnMulai"
            onclick="ShowCam_in()">Ambil Gambar</button>
          </div> -->
          <div class="col-lg-4" style="width: 100%;"><br>
         
		 <input type="submit" value="Simpan Data">
      </form>
          </div>
          <div class="col-lg-2">
          </div>
      </div>
      </form>
  </main>

</div>
<!-- Modal Mulai Kgt -->
<div class="modal {{ old('mulai_kgt') ? 'in' : 'fade' }}" id="modalMulai" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document" style="width:1000px">
            <div class="modal-content">
                <div class="modal-header" style="text-align: left">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                        onclick="showModalAbsen('modalMulai','hide')"><span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title" id="myModalLabel"><button type="button" class="btn btn-md bg-purple"
                            onclick="showModalAbsen('modalMulai','hide')" data-dismiss="modal" aria-label="Close"><i
                                class="fa fa-arrow-left"></i></button>
                        <strong>Mulai Kegiatan  </strong></h3>
                </div>
                <form id="formMulai" name="formMulai" method="post" enctype="multipart/form-data" style="display:inline">
                    <input type="hidden" value="" name="mulaiKgt" id="mulaiKgt">
                    <div class="modal-body">
                        <div class="row" style="margin-left: 4px;">
                            <div class="col-md-12">
                                    <div class="row">
                                        <label>Tgl :</label>
                                        {{ \Carbon\Carbon::now()->isoFormat('DD MMMM YYYY') }}
                                    </div>
                                    <div class="row">
                                        <label>Hari : </label>
                                        {{ \Carbon\Carbon::now()->dayName }}
                                    </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                                <div class="col-md-6">
                                    <div id="my_camera"></div>

                                    {{-- <div id="timestamp"></div> --}}
                                </div>

                                <div class="col-md-3">
                                    <input id="btnOKMulai" type="button" class="btn btn-primary button-flash"
                                        value="OK_Mulai" onClick="take_snapshot()" style="margin-top: 300px">
                                </div>
                            <input type="hidden" name="image" class="image-tag">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Modal Mulai Kgt -->
@endsection

@push('script')
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap4.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
  $(document).on('input blur paste', '.input-angka', function (e) {
        $(this).val($(this).val().replace(/\D/g, ''));
    });
    function ShowCam_in() {
        console.log(1)
        Webcam.set({
            width: 390,
            height: 290,
            image_format: 'jpeg',
            jpeg_quality: 90
        });
        Webcam.attach('#my_camera');
    }
    function take_snapshot() {
    window.onload = ShowCam_in;
    Webcam.snap(function(data_uri) {
        $(".image-tag").val(data_uri);
        document.getElementById('my_camera').innerHTML = '<img src="' + data_uri + '"/>';
        $('#btnOKMulai').removeClass('button-flash');
        $('#btnOKMulai').attr('disabled', true);
        $('#btnZoom').attr('class', 'btn btn-success button-flash');
        $('#btnZoom').removeAttr('disabled');
    });
    // save data
    var formData = new FormData($('#formMulai')[0]);
    var url = "";
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: url,
        type: 'POST',
        dataType: "JSON",
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
            $('#modalMulai').hide();
            if (response.status) {
                Swal.fire({
                    title: response.message,
                    // text: response.success,
                    type: 'success',
                    confirmButtonText: 'Close',
                    confirmButtonColor: '#AAA',
                    onClose: function() {
                        location.reload();
                        // $('#modalMulai').show();
                    }
                })
            } else if (response.status == false) {
                Swal.fire({
                    title: response.message,
                    // text: response.success,
                    type: 'warning',
                    confirmButtonText: 'Close',
                    confirmButtonColor: '#AAA',
                    onClose: function() {
                        location.reload();
                        // $('#modalMulai').show();
                    }
                })
            } else {
                Swal.fire({
                    title: response.message,
                    // text: response.success,
                    type: 'error',
                    confirmButtonText: 'Close',
                    confirmButtonColor: '#AAA',
                    onClose: function() {
                        location.reload();
                        // window.location.replace(home);
                    }
                })
                $('#alert').text(response.message).show();
            }
        },
        error: function(xhr, status) {
            alert('error saat mulai');
        }
        // complete: function(response) {
        //     $('#modalMulai').show();
        // }
    });
};
</script>
@endpush
@stack('script')
