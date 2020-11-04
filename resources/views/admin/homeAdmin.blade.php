@extends('layoutAdmin/layout')

      @section('title', 'Dashboard ')

      @section('container')
      <section id="main-content">
        <section class="wrapper">
        @if(Auth::user()->level == 'admin')
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4>Welcome to Victorious Things</h4>
              </div>
            </div>
          </div>
        @endif

@endsection
    