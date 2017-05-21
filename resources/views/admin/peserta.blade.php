@extends('master')

@section('title', 'Admin | Peserta')

@section('konten')<br>
  <div class="col-md-12">
    <h3>Daftar Peserta</h3>

    	<div class="navbar navbar-default">
        <p class="navbar-text text-left">
          <a href="#" data-toggle="modal" data-target="#modal-1"><span class="glyphicon glyphicon-plus"></span>&nbsp;Input Peserta</a>
        </p>
        <form class="navbar-form navbar-right">
            <label>Sortir Peserta Per Event :</label>
          	<select class="form-control" name="sort-event">
          	  <option value="">Pilih Event..</option>
          	</select>
            <input type="submit" value="Submit" class="btn btn-primary">&nbsp;
        </form>
      </div>
    <table class="table table-stripped">
      <tr>
        <th>NO</th>
        <th>Nama Event</th>
        <th>Nama</th>
        <th>Telfon</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Instansi</th>
        <th>NIM</th>
        <th>Action</th>
      </tr>
    </table>
  </div>

  <div class="modal fade" id="modal-1">
  	<div class="modal-dialog">
      	<div class="modal-content">
          	<div class="modal-header">
              	<button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h3 class="modal-title">Input Peserta</h3>
              </div>
              <div class="modal-body">
              	<form>
                  <label>Nama Event :</label>
                    <select class="form-control" name="event_id">
                      <option value="">Pilih Event..</option>
                    </select>
                  <label>Nama Peserta :</label>
                  	<input type="text" name="name" class="form-control">
                  <label>No Telp :</label>
                  	<input type="text" name="phone" class="form-control">
                  <label>Email :</label>
                  	<input type="text" name="email" class="form-control" placeholder="Example@gmail.com">
                  <label>Alamat :</label>
                  	<textarea name="Address" class="form-control"></textarea>
                  <label>Instansi :</label>
                  	<input type="text" name="instance" class="form-control">
                  <label>NIM :</label>
                  	<input type="text" name="nim" class="form-control" placeholder="1600xxxxx">
                    <br>
                  <p class="text-right"><input type="submit" value="Simpan Data" class="btn btn-primary"></p>
                  </form>
              </div>
          </div>
      </div>
  </div>
@stop
