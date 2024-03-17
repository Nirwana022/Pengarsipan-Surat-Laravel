<!-- sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"><span>Main</span></li>
                <li class="">
                    <a href="#"><i data-feather="home"></i> <span>Dashboard</span></a>
                </li>
                <li class="">
                    <a href="{{url('/user')}}"><i data-feather="users"></i> <span>Users</span></a>
                </li>
                <li class="submenu ">
                    <a href="#"><i data-feather="file-text"></i> <span> Kependudukan</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{url('/dapen')}}">Data Penduduk</a></li>
                        <li><a href="{{url('/kk')}}">Data KK</a></li>
                        <li><a href="{{url('/dakel')}}">Data Kelahiran</a></li>
                        <li><a href="{{url('/dakem')}}">Data Kematian</a></li>
                        <li><a href="{{url('/mutasi')}}">Data Mutasi</a></li>
                    </ul>
                </li>
                <li class="submenu ">
                    <a href="#"><i data-feather="book-open"></i> <span>Persuratan</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{url('ktp')}}">Pengantar KTP</a></li>
                        <li><a href="{{url('suratmati')}}">Pengantar Keterangan Kematian</a></li>
                        <li><a href="{{url('suratlahir')}}">Pengantar Keterangan Kelahiran</a></li>
                        <li><a href="{{url('suratmutasi')}}">Pengantar Mutasi </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>