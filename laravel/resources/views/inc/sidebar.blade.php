<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="/dashboard" class="{{ (request()->is('dashboard*')) ? 'active' : '' }}"><i
                            class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                <li><a href="/dosen" class="{{ (request()->is('dosen*')) ? 'active' : '' }}"><i
                            class="lnr lnr-graduation-hat"></i> <span>Guru</span></a></li>
                <li><a href="/ruang" class="{{ (request()->is('ruang*')) ? 'active' : '' }}"><i
                            class="lnr lnr-user"></i> <span>Siswa</span></a></li>
                <li><a href="/jurusan" class="{{ (request()->is('jurusan*')) ? 'active' : '' }}"><i
                            class="lnr lnr-license"></i> <span>KKN</span></a></li>
                <li><a href="/matkul" class="{{ (request()->is('matkul*')) ? 'active' : '' }}"><i
                            class="lnr lnr-book"></i> <span>Cabang Lomba</span></a></li>
                <li>
                    <a href="#subPages" data-toggle="collapse"
                        class="collapsed {{(request()->is('surat*')) ? 'active' : '' ||  (request()->is('tugas*')) ? 'active' : '' ||  (request()->is('kkn*')) ? 'active' : '' ||  (request()->is('pindah*')) ? 'active' : '' ||  (request()->is('pengantar*')) ? 'active' : '' }}"><i
                            class="lnr lnr-envelope"></i> <span>Surat-surat</span> <i
                            class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subPages" class="collapse ">
                        <ul class="nav">
                            <li><a href="/surat" class="{{ (request()->is('surat*')) ? 'active' : '' }}">Surat Lomba</a>
                            </li>
                            <li><a href="/tugas" class="{{ (request()->is('tugas*')) ? 'active' : '' }}">Surat Tugas</a>
                            </li>
                            <li><a href="/kkn" class="{{ (request()->is('kkn*')) ? 'active' : '' }}">Surat KKN</a></li>
                            <li><a href="/pindah" class="{{ (request()->is('pindah*')) ? 'active' : '' }}">Surat
                                    Pindah</a></li>
                            <li><a href="/pengantar" class="{{ (request()->is('pengantar*')) ? 'active' : '' }}">Surat
                                    Pengantar</a></li>
                        </ul>
                    </div>
                </li>


            </ul>
        </nav>
    </div>
</div>