<div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="/" class="site_title"><i class="fa fa-paw"></i> <span>JILBAB_KU</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
            </div>
            <!-- /menu profile quick info -->
            <br />
            <br>
            <br>
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  @if (Auth::user()->hasAnyRole('Pegawai'))
                  <li>
                      <a href="{{ url('Pemasukkan.index')}}" class="nav-link">
                          <i class="fa fa-usd"></i>
                          <span>Data Pemasukkan</span>
                      </a>
                  </li> 
                  
                  <li>
                      <a href="{{ url('Produk.index')}}" class="nav-link">
                          <i class="fa fa-edit"></i>
                          <span>Data Produk</span>
                      </a>
                  </li> 
                  @endif
  
                  @if (Auth::user()->hasAnyRole('Owner'))
                  <li>
                      <a href="{{ url('Pemasukkan.index')}}" class="nav-link">
                          <i class="fa fa-usd"></i>
                          <span>Data Pemasukkan</span>
                      </a>
                  </li>    
                  <li>
                      <a href="{{ url('Pengeluaran.index')}}" class="nav-link">
                          <i class="fa fa-credit-card"></i>
                          <span>Data Pengeluaran</span>
                      </a>
                  </li>
                  <li>
                      <a href="{{ url('Produk.index')}}" class="nav-link">
                          <i class="fa fa-edit"></i>
                          <span>Data Produk</span>
                      </a>
                  </li>
                  <li>
                    <a href="{{ url('Keuangan.index')}}" class="nav-link">
                        <i class="fa fa-bar-chart"></i>
                        <span>Grafik</span>
                    </a>
                </li>
                  @endif
  
                  


                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>
        <!-- page content -->
        
  </div>