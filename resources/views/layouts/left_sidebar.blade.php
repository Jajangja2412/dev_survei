<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="assets/images/users/logo_cyber.png" alt="user-img" class="img-circle">{{ Auth::user()->nama }}<span class="hide-menu"></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <!-- <li><a href="https://staff.bsi.ac.id/ruang_utama_karyawan.html"><i class="ti-home"></i>Beranda</a></li> -->
                                <form action="/logout" method="POST" style="display: inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Logout</button>
                                </form>
                                
                            </ul>
                        </li>
                        @php
                            use App\Models\KuesionerTimDev;
                            use App\Models\KuesionerTimRiset;
                            use App\Models\Pimpinan;

                            $nip = Auth::check() ? Auth::user()->nip : null;
                            $timRisetData = $nip ? KuesionerTimRiset::where('nip', $nip)->first() : null;
                            $timDevData = $nip ? KuesionerTimDev::where('nip', $nip)->first() : null;
                        @endphp
                        @php
                            use App\Models\PedomanVm;
                            use App\Models\PedomanSpsdm;
                            use App\Models\PedomanLppm;
                            use App\Models\PedomanLk;
                            use App\Models\PedomanLdtk;
                            use App\Models\PedomanEdom;

                            $pedomanvm = PedomanVm::first();
                            $pedomanspsdm = PedomanSpsdm::first();
                            $pedomanlppm = PedomanLppm::first();
                            $pedomanlk = PedomanLk::first();
                            $pedomanldtk = PedomanLdtk::first();
                            $pedomanedom = PedomanEdom::first();
                        @endphp
                        @php
                            use App\Models\KuesionerBukaTutup;

                                $menu = KuesionerBukaTutup::find(1); // Ambil data dengan ID 1 atau sesuaikan dengan ID yang dibutuhkan
                                $link = $menu ? $menu->link : null;

                                $menu_ldtk= KuesionerBukaTutup::find(3); // Ambil data dengan ID 1 atau sesuaikan dengan ID yang dibutuhkan
                                $link_ldtk = $menu_ldtk ? $menu_ldtk->link : null;

                                $menu_lppm= KuesionerBukaTutup::find(4); // Ambil data dengan ID 1 atau sesuaikan dengan ID yang dibutuhkan
                                $link_lppm = $menu_lppm ? $menu_lppm->link : null;

                                $menu_spsdm= KuesionerBukaTutup::find(2); // Ambil data dengan ID 1 atau sesuaikan dengan ID yang dibutuhkan
                                $link_spsdm = $menu_spsdm ? $menu_spsdm->link : null;
                        @endphp
                        <li class="nav-small-cap">--- PERSONAL</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Survei USI</span></a>
                            <ul aria-expanded="false" class="collapse">
                           
                            @if ($link_ldtk === "Aktif")
                            <li><a href="/layanan_dosen_tendik">Layanan Dosen dan Tendik</a></li> 
                            @endif
                           
                            @if ($link === "Aktif")
                            <li><a href="/visi-misi">Pemahaman Visi dan Misi</a></li> 
                            @endif
                            @if ($link_lppm === "Aktif")
                            <li><a href="/survei-lppm">Layanan LPPM Dosen</a></li>
                            @endif
                            @if ($link_spsdm === "Aktif")
                            <li><a href="/survei-spsdm">Layanan SPSDM</a></li>
                            @endif
                            </ul>
                        </li>
                    
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-file"></i><span class="hide-menu">Pedoman Survei</span></a>
                            <ul aria-expanded="false" class="collapse">
                                @if($pedomanldtk && $pedomanldtk->pdf)
                                    <li><a href="download/{{ $pedomanldtk->pdf }}">Layanan Dosen dan Tenaga Kependidikan</a></li>
                                @endif
                                @if($pedomanlk && $pedomanlk->pdf)
                                    <li><a href="download/{{ $pedomanlk->pdf }}">Layanan Kemahasiswaan</a></li>
                                @endif
                                @if($pedomanlppm && $pedomanlppm->pdf)
                                    <li><a href="download/{{ $pedomanlppm->pdf }}">Layanan LPPM</a></li>
                                @endif
                                @if($pedomanvm && $pedomanvm->pdf)
                                    <li><a href="download/{{ $pedomanvm->pdf }}">Pemahaman Visi dan Misi</a></li>
                                @endif
                                @if($pedomanedom && $pedomanedom->pdf)
                                    <li><a href="download/{{ $pedomanedom->pdf }}">Pedoman EDOM</a></li>
                                @endif
                                @if($pedomanspsdm && $pedomanspsdm->pdf)
                                    <li><a href="download/{{ $pedomanspsdm->pdf }}">Sistem Pengelolaan SDM</a></li>
                                @endif
                            </ul>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-files"></i><span class="hide-menu">Hasil Survei </a>
                            <ul aria-expanded="false" class="collapse">
                               
                                <li><a href="javascript:void(0)" class="has-arrow">Laporan Survei </a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="/vm-lap-survei">Laporan Survei Pemahaman Visi dan Misi</a></li>
                                        <li><a href="/ldtk-lap-survei">Laporan Survei Layanan Dosen dan Tenaga Kependidikan</a></li>
                                        <li><a href="/lppm-lap-survei">Laporan Survei LPPM</a></li>
                                        <li><a href="/spsdm-lap-survei">Laporan Survei SPSDM</a></li>
                                        <li><a href="/lk-lap-survei">Laporan Survei Layanan Kemahasiswaan</a></li>
                                        <li><a href="/edom-lap-survei">Laporan Survei EDOM</a></li>
                                    </ul>
                                </li>
                                
                                <li><a href="javascript:void(0)" class="has-arrow">Skor Rata-rata</a>
                                    <ul aria-expanded="false" class="collapse">
                                        <li><a href="https://students.cyber-univ.ac.id/survei/assets/berkas/Hasil_skor_rata_rata_LDTK_CU.pdf">Hasil Skor rata-rata Layanan Dosen dan Tenaga Kependidikan</a></li>
                                        <li><a href="https://students.cyber-univ.ac.id/survei/assets/berkas/Hasil_skor_rata_rata_LK_CU.pdf">Hasil Skor rata-rata Layanan Kemahasiswaan</a></li>
                                        <li><a href="https://students.cyber-univ.ac.id/survei/assets/berkas/Hasil_skor_rata_rata_LPPM_CU.pdf">Hasil Skor rata-rata layanan LPPM</a></li>
                                        <li><a href="https://students.cyber-univ.ac.id/survei/assets/berkas/Hasil_skor_rata_rata_VMTS_CU.pdf">Hasil Skor rata-rata Pemahaman Visi dan Misi</a></li>
                                        <li><a href="https://students.cyber-univ.ac.id/survei/assets/berkas/Hasil_skor_rata_rata_EDOM_CU.pdf">Hasil Skor rata-rata Evaluasi Dosen Oleh Mahasiswa</a></li>
                                        <li><a href="https://students.cyber-univ.ac.id/survei/assets/berkas/Hasil_skor_rata_rata_SPSDM_CU.pdf">Hasil Skor rata-rata Sistem Pengelolaan SDM</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        @if (isset($timRisetData))
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-files"></i><span class="hide-menu">Upload Data</a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="javascript:void(0)" class="has-arrow">Hasil Survei </a>
                                    <ul aria-expanded="false" class="collapse">
                                    <li><a href="/upload-survei-vm">Laporan Survei Visi Misi</a></li>
                                    <li><a href="/upload-survei-ldtk">Laporan Survei LDTK</a></li>
                                    <li><a href="/upload-survei-lppm">Laporan Survei LPPM</a></li>
                                    <li><a href="/upload-survei-spsdm">Laporan Survei SPSDM</a></li>
                                    <li><a href="/upload-survei-lk">Laporan Survei LK</a></li>
                                    <li><a href="/upload-survei-edom">Laporan Survei EDOM</a></li>
                                    </ul>
                                </li>
                                <!-- <li><a href="javascript:void(0)" class="has-arrow">Hasil Riset </a>
                                    <ul aria-expanded="false" class="collapse">
                                    <li><a href="upload-riset-vm.js">Laporan Riset Visi Misi</a></li>
                                    <li><a href="upload-riset-ldtk.js">Laporan Riset LDTK</a></li>
                                    <li><a href="upload-riset-lppm.js">Laporan Riset LPPM</a></li>
                                    <li><a href="upload-riset-spsdm.js">Laporan Riset SPSDM</a></li>
                                    <li><a href="upload-riset-lk.js">Laporan Riset LK</a></li>
                                    <li><a href="upload-riset-pmd.js">Laporan Riset EDOM</a></li>
                                    </ul>
                                </li> -->
                                <li><a href="javascript:void(0)" class="has-arrow">Pedoman Survei </a>
                                    <ul aria-expanded="false" class="collapse">
                                    <li><a href="/upload-pedoman-survei-vm">Pedoman Survei Visi Misi</a></li>
                                    <li><a href="/upload-pedoman-survei-ldtk">Pedoman Survei LDTK</a></li>
                                    <li><a href="/upload-pedoman-survei-lppm">Pedoman Survei LPPM</a></li>
                                    <li><a href="/upload-pedoman-survei-spsdm">Pedoman Survei SPSDM</a></li>
                                    <li><a href="/upload-pedoman-survei-lk">Pedoman Survei LK</a></li>
                                    <li><a href="/upload-pedoman-survei-edom">Pedoman Survei EDOM</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        @endif
                        
                        @if (isset($timRisetData))
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-files"></i><span class="hide-menu">Buka Tutup Kuesioner</a>
                            <ul aria-expanded="false" class="collapse">
                                 <li><a href="/buka-tutup-vm">Buka Tutup Kuesioner</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-user"></i><span class="hide-menu">User Akses </a>
                            <ul aria-expanded="false" class="collapse">
                                 <li><a href="/akses-riset">Akses Tim Riset</a></li>
                                 <li><a href="/akses-pimpinan">Akses Pimpinan</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-briefcase-download"></i><span class="hide-menu">Download Data</a>
                            <ul aria-expanded="false" class="collapse">
                                 <li><a href="/data-vm">Download Visi Misi</a></li>
                                 <li><a href="/data-ldtk">Download LDTK</a></li>
                                 <li><a href="/data-lppm">Download LPPM</a></li>
                                 <li><a href="/data-spsdm">Download SPSDM</a></li>
                            </ul>
                        </li>
                        @endif
                        
                       
                       
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
</aside>