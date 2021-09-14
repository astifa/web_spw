@extends('layout.header')

@section('content')
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="container mb-2">
       <div class="d-flex justify-content-between flex-wrap">
        <div class="d-flex align-items-end flex-wrap">
          <div class="d-flex">
            <i class="mdi mdi-book text-muted hover-cursor"></i>
            <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Data Master&nbsp;/&nbsp;</p>
            <p class="text-primary mb-0 hover-cursor">Data Admin</p>
          </div>

        </div>
        <div class="row">
          <div class="col-12 col-md-3 grid-margin stretch-card">
            <div class="d-flex justify-content-between align-items-end flex-wrap">
              <a href="{{ route('kelola_admin.create')}}" class="btn btn-primary btn-icon mr-3 pt-2" title="Tambah Data"><i class="mdi mdi-plus text-white"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body p-3">
          <table id="example3" class="table table-responsive" style="width:100%">
            <thead>
              <th>no</th>
              <th>nama</th>
              <th>username</th>
              <th>email</th>
              <th>Aksi</th>
            </thead>
            <?php $no=1 ?>
            @foreach ($data as $d)
            <tbody>
              <td>{{$no++}}</td>
              <td>{{$d->name}}</td>
              <td>{{$d->username}}</td>
              <td>{{$d->email}}</td>
              <td width="10%">
                <a href="{{ route('kelola_admin.edit',$d->id_user) }}" class="btn btn-inverse-primary p-2"><i class="mdi mdi-settings-outline" title="Ubah"></i></a>
                
                <a href="#" class="btn btn-inverse-danger p-2 text-white" data-toggle="modal" data-target="#modalHapus">
                  <i class="mdi mdi-delete-outline" title="Hapus"></i>
                </a>
              </td>
            </tbody>
            @endforeach
          </table>
        </div>
      </div>
    </div>
    <div class="modal fade" id="modalHapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Notif<h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Beneran nih dihapus?</div>
            <div class="modal-footer">
              <button class="btn btn-light" type="button" data-dismiss="modal">Ga jadi</button>
              <a class="btn btn-danger" href="hapusadmin/{{ $d->id_user}}" onclick="event.preventDefault();
              document.getElementById('hapus-data').submit();">Iya</a>
              <form id="hapus-data" action="hapusadmin/{{ $d->id_user}}" method="get" style="display: none;">
                @csrf
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
