
@extends('publik/layout/layout')

@section('title', 'My Profile')


@section('container')
  <section class="fh5co-books">
       <div class="site-container">
        <div class="card">
            <div class="card-body">
                <h2 class="universal-h2 universal-h2-bckg" style='font-size: 35px ; color: #c18f59;'>All Items</h2>
                <form action="#" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="inputAddress2">Nama</label>
                            <input type="text" class="form-control" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">No Telephone</label>
                            <input type="text" class="form-control" name="no_telp">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">Alamat</label>
                            <input type="text" class="form-control" name="alamat">
                        </div>
                        <div class="form-group">
                            <label for="inputAddress2">profinsi</label>
                            <input type="text" class="form-control" name="alamat">
                        </div>
                            <fieldset>
                                <button type="submit" id="form-submit"  class="main-button">Kirim</button>
                            </fieldset>
                        </form>
            </div>
          </div>
       </div>
</section>
@endsection