@extends('admin.template')
@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Tulis Artikel</h3>
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
                <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" name="judul" @if(isset($artikel)) value="{{ $artikel->judul }}" @endif id="judul" class="form-control">
                </div>
                <div class="form-group">
                  <label for="isi">Artikel</label>
                  <textarea class="textarea" id="isi" name="isi">@if(isset($artikel)) {{ $artikel->isi }} @endif</textarea>
                </div>
                <div class="form-group col-md-6">
                  <label for="gambar">Thumbnail</label>
                  <input type="file" name="gambar" id="gambar" class="form-control" @if(isset($artikel)) value="{{ $artikel->gambar }}" @endif>
                </div>
                <div class="form-group col-md-6">
                  <label for="kategori">Kategori</label>
                  <select class="form-control" id="id_kategori" name="id_kategori">
                    @foreach($kategori as $k )
                    <option @if(isset($artikel)) @if($k->id == $artikel->id_kategori) selected @endif @endif value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="clearfix"></div>
                <button class="btn btn-primary" type="submit">Publikasi</button>
              </form>
            </div>

          </div>
        </div>
        <!-- /page content -->
@endsection