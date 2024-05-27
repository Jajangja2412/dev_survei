<aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="assets/images/users/logo_cyber.png" alt="user-img" class="img-circle">{{ Auth::user()->name }}<span class="hide-menu"></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="https://staff.bsi.ac.id/ruang_utama_karyawan.html"><i class="ti-home"></i>Beranda</a></li>
                                <li><a href="http://www.bsi.ac.id/ubsi/index.ajax"><i class="fa fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">--- PERSONAL</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Survei USI</span></a>
                            <ul aria-expanded="false" class="collapse">
                            <li><a href="/layanan_dosen_tendik">Layanan Dosen dan Tendik</a></li> 
                            </ul>
                        </li>
                        <?php 
                        // if ($kd_dosen) { 
                            ?>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-file"></i><span class="hide-menu">Pedoman Survei</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <!-- <li><a href="download/PEDOMAN SURVEI LAYANAN DOSEN DAN TENDIK (1).pdf">Layanan Dosen dan Tenaga Kependidikan</a></li>
                                <li><a href="download/PEDOMAN SURVEI LAYANAN KEMAHASISWAAN (1).php">Layanan Kemahasiswaan</a></li>
                                <li><a href="download/PEDOMAN SURVEI LAYANANAN LPPM.pdf">layanan LPPM</a></li> -->
                                <li><a href="download/PEDOMAN SURVEI PEMAHAMAN Visi dan Misi (1).pdf">Pemahaman Visi dan Misi</a></li>
                                <!-- <li><a href="download/PEDOMAN SURVEI PMD (1).pdf">Persepsi Mahasiswa Mengenai Dosen</a></li>
                                <li><a href="download/PEDOMAN SURVEI SISTEM PENGELOLAAN SDM (1).pdf">Sistem Pengelolaan SDM</a></li> -->
                            </ul>
                        </li>

                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-file"></i><span class="hide-menu">Hasil Pengolahan Kuesioner</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <!-- <li><a href="download/Skor rata-rata Survei LDTK PSDKU Kota Tasikmalaya 2022-1.pdf">Hasil Skor rata-rata Layanan Dosen dan Tenaga Kependidikan</a></li>
                                <li><a href="download/Skor rata-rata Survei LK PSDKU Kota Tasikmalaya 2022-1.pdf">Hasil Skor rata-rata Layanan Kemahasiswaan</a></li>
                                <li><a href="download/Skor rata-rata LPPM PSDKU Tasikmalaya 2022-2023 (1).pdf">Hasil Skor rata-rata layanan LPPM</a></li> -->
                                <li><a href="download/Skor rata-rata Survei VMTS PSDKU Kota Tasikmalaya 2022-2023 (1).pdf">Hasil Skor rata-rata Pemahaman Visi dan Misi</a></li>
                                <!-- <li><a href="download/Skor rata-rata Survei PMD PSDKU Kota Tasik 2022-1.pdf">Hasil Skor rata-rata Persepsi Mahasiswa Mengenai Dosen</a></li>
                                <li><a href="download/Skor rata-rata Survei SPSDM PSDKU Kota Tasikmalaya 2022-2023.pdf">Hasil Skor rata-rata Sistem Pengelolaan SDM</a></li> -->
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-file"></i><span class="hide-menu">Laporan Survei Riset</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <!-- <li><a href="download/LAPORAN SURVEI LDTK Ganjil 2022-2023 Tasik.pdf">Laporan Survei Layanan Dosen dan Tenaga Kependidikan</a></li> -->
                               
                                <!-- <li><a href="download/Laporan Survei LK ganjil 2223 PSDKU Tasik.pdf">Laporan Survei Layanan Kemahasiswaan</a></li>
                                <li><a href="download/LAPORAN SURVEI LPPM Tasik_2223.pdf">Laporan Survei layanan LPPM</a></li> -->
                                <!-- <li><a href="download/Laporan Survei Pemahaman Visi misi UBSI BSI 2022-2023 PSDKU Tasik.pdf">Laporan Survei Pemahaman Visi dan Misi</a></li> -->
                              
                                <!-- <li><a href="download/Laporan Survei PMD Ganjil 2022-2023 PSDKU Tasik.pdf">Laporan Survei Persepsi Mahasiswa Mengenai Dosen</a></li>
                                <li><a href="download/Laporan Survei SPSDM 2223 PSDKU TASIK.pdf">Laporan Survei Sistem Pengelolaan SDM</a></li> -->
                            </ul>
                        </li>
                        <?php 
                        //}
                        ?>
                       
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
</aside>