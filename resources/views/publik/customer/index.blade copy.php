@extends('publik/layout/layout')

    @section('title', 'customer')
   @section('container')
       <!-- Container -->
       <section class="fh5co-books">
           <div class="site-container">
               <h2 class="universal-h2 universal-h2-bckg mt-5" style='font-size: 35px ; color: #c18f59;'>All Items</h2>
               
               <!-- <div class="row"> -->
           <!-- Fixed Left Sidebar -->
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark pmd-navbar pmd-z-depth">
  <a href="javascript:void(0);" data-target="basicSidebar" data-placement="left" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect pmd-sidebar-toggle"><i class="material-icons md-light">menu</i></a>
  <a class="navbar-brand" href="#">Brand</a>
  
  <!-- Navbar Right icon -->		
  <div class="pmd-navbar-right-icon ml-auto">
      <a href="javascript:void(0);" class="btn btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect"><i class="material-icons pmd-sm md-light">search</i></a>
  </div>
</nav>

<section id="pmd-main">

  <!-- Left sidebar -->
  <aside id="basicSidebar" class="pmd-sidebar bg-light pmd-z-depth" role="navigation">
      <ul class="nav flex-column pmd-sidebar-nav">
          <li class="nav-item pmd-user-info">
              <a data-toggle="collapse" href="#collapseExample" class="nav-link btn-user media align-items-center">
                  <img class="mr-3" src="https://pro.propeller.in/assets/images/avatar-icon-40x40.png" width="40" height="40" alt="avatar">
                  <div class="media-body">
                      User
                  </div>
                  <i class="material-icons md-light ml-2 pmd-sm">more_vert</i>
              </a>
              <ul class="collapse" id="collapseExample" data-parent="#basicSidebar">
                  <li class="nav-item">
                      <a class="nav-link" href="#">
                          <i class="material-icons pmd-list-icon pmd-sm">delete</i>
                          <span class="media-body">View Profile</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">
                          <i class="material-icons pmd-list-icon pmd-sm">delete</i>
                          <span class="media-body">Settings</span>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">
                          <i class="material-icons pmd-list-icon pmd-sm">delete</i>
                          <span class="media-body">Logout</span>
                      </a>
                  </li>
              </ul>
          </li>
      </ul>
  </aside>
  
  <!-- Sidebar Overlay -->
  <div class="pmd-sidebar-overlay"></div>
  
  <!-- Start Content -->
  <div class="pmd-content custom-pmd-content" id="content">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Dikemas</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">dikirim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">diterima</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">dinilai</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>    
  </div>
</section>

    @endsection