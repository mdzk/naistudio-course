@extends('admin.template')
@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Tambah Karya</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12 col-xs-12">
              <form method="POST" enctype="multipart/form-data">
                @csrf

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="nama_karya">Nama Karya</label>
                    <input type="text" name="nama_karya" @if(isset($karya)) value="{{ $karya->nama_karya }}" @endif id="nama_karya" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="author">Pembuat</label>
                    <input type="text" name="author" @if(isset($karya)) value="{{ $karya->author }}" @endif id="author" class="form-control">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="gambar">Karya</label>
                    <input type="file" name="gambar" id="gambar" class="form-control" @if(isset($karya)) value="{{ $karya->gambar }}" @endif>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="kategori">Kategori</label>
                    <select class="form-control" id="id_kategori" name="id_kategori">
                      @foreach($kategori as $k )
                        <option @if(isset($karya)) @if($k->id == $karya->id_kategori) selected @endif @endif value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" style="width: 100%; height: 170px;" id="deskripsi" name="deskripsi">@if(isset($karya)) {{ $karya->deskripsi }} @endif</textarea>
                  </div>
                </div>

                <div class="clearfix"></div>
                <button class="btn btn-primary" type="submit">Publikasi</button>
              </form>
            </div>

          </div>
        </div>
        <!-- /page content -->
@endsection