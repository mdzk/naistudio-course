@extends('admin.template')
@section('content')
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Total <b>{{ count($artikel) }}</b> ditemukan, pencarian dari kata <b>{{ $_GET['kata'] }}</b><small></small></h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
              <form method="GET" style="display: inherit" action="{{ url('/admin/artikel/cari') }}">
                <input type="text" class="form-control" name="kata" placeholder="Cari artikel ...">
                <span class="input-group-btn">
                        <button class="btn btn-default" type="submit" name="submit">Go!</button>
                </span>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <div class="x_content">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                <tr>
                  <th>Judul</th>
                  <th>Penulis</th>
                  <th>Tanggal</th>
                  <th>Dibaca</th>
                  <th>Kategori</th>
                  <th>Action</th>
                </tr>
                </thead>


                <tbody>
                @foreach($artikel as $a)
                <tr>
                  <td>{{ $a->judul }}</td>
                  <td>{{ $a->users->name }}</td>
                  <td>{{ $a->tanggal }}</td>
                  <td>{{ $a->dibaca }}</td>
                  <td>{{ $a->kategori->nama_kategori }}</td>
                  <td>
                    <a href="{{ url('/artikel/' . $a->id . '/' .str_slug($a->judul, '-')) }}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                    <a href="{{ url('/admin/artikel/edit/' . $a->id . '/' .str_slug($a->judul, '-')) }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                    <a href="{{ url('/admin/artikel/del/' . $a->id . '/' .str_slug($a->judul, '-')) }}" class="btn btn-sm btn-danger"><i class="fa fa-close"></i></a>
                  </td>
                </tr>
                @endforeach

                </tbody>
              </table>
              {{ $artikel->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->
@endsection