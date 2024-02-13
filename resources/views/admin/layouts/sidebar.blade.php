<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin') ? '' : 'collapsed' }}" href="/admin">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('') ? '' : 'collapsed' }}" href="/">
          <i class="bi bi-globe-americas"></i>
          <span>Lihat Web</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/pertanyaan') ? '' : 'collapsed' }}" href="/admin/pertanyaan">
          <i class="bi bi-question-circle"></i>
          <span>Pertanyaan User</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/datauser') ? '' : 'collapsed' }}" href="/admin/datauser">
          <i class="bi bi-people"></i>
          <span>Data User</span>
        </a>
      </li><!-- End Data User Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('#') ? '' : 'collapsed' }}" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Data Lapangan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="/admin/lapangans" class="{{ Request::is('admin/lapangan*') ? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Lapangan</span>
            </a>
          </li>
          <li>
            <a href="/admin/jamoperasional" class="{{ Request::is('admin/jamoperasional') ? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Jam Operasional</span>
            </a>
          </li>
        </ul>
      </li><!-- End Data Lapangan Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('#') ? '' : 'collapsed' }}" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-credit-card"></i><span>Kode Pembayaran</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="charts-chartjs.html">
              <i class="bi bi-circle"></i><span>Chart.js</span>
            </a>
          </li>
          <li>
            <a href="charts-apexcharts.html">
              <i class="bi bi-circle"></i><span>ApexCharts</span>
            </a>
          </li>
          <li>
            <a href="charts-echarts.html">
              <i class="bi bi-circle"></i><span>ECharts</span>
            </a>
          </li>
        </ul>
      </li><!-- End Kode Pembayaran Nav -->

      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin/datasewa') ? '' : 'collapsed' }}" href="/admin/datasewa">
          <i class="bi bi-journal-text"></i>
          <span>Data Penyewaan</span>
        </a>
      </li><!-- End Data Penyewaan Nav -->
    </ul>

  </aside><!-- End Sidebar-->
