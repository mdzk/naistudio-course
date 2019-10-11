@extends('admin.template')
@section('content')
  <!-- page content -->
  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Karya <small></small></h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

          </div>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            {{--<h2>Total Artikel : {{ count($artikel) }}</h2>--}}
            <div class="x_content">
              <table id="datatable" class="table table-striped table-bordered">
                <thead>
                <tr>
                  <th>Nama</th>
                  <th>Pembuat</th>
                  <th>Dilihat</th>
                  <th>Kategori</th>
                  <th>Action</th>
                </tr>
                </thead>


                <tbody>
                @foreach($karya as $a)
                <tr>
                  <td>{{ $a->nama_karya }}</td>
                  <td>{{ @$a->author }}</td>
                  <td>{{ $a->view }}</td>
                  <td>{{ @$a->kategori->nama_kategori }}</td>
                  <td>
                    <a href="{{ url('/karya/' . $a->id . '/' .str_slug($a->nama_karya, '-')) }}"  target="_blank" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                    <a href="{{ url('/admin/karya/edit/' . $a->id . '/' .str_slug($a->nama_karya, '-')) }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                    <a onclick="return confirm('Apakah anda yakin menghapus data ini?')" href="{{ url('/admin/karya/del/' . $a->id . '/' .str_slug($a->nama_karya, '-')) }}" class="btn btn-sm btn-danger"><i class="fa fa-close"></i></a>
                  </td>
                </tr>
                @endforeach

                </tbody>
              </table>
              {{ $karya->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->
@endsection