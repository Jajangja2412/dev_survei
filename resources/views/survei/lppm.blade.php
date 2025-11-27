@extends('layouts.main')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span
                            aria-hidden="true">&times;</span> </button>
                    <h3 class="text-success"><i class="fa fa-check-circle"></i> {{ session('success') }}
                    </h3>
                </div>
            @endif
            @if($kue_lppm->isnotEmpty())
            <table border="0"  align="center" width="100%"   >
            <tr align=center > 
            <br>

            <p>
            
            </p>

            </tr>
            </table>

            <script type="text/javascript" src="js/formretain.js"></script>
            <script type="text/javascript" src="js/FormManager.js"></script>

            <script type="text/javascript">
            window.onload = function() {
                setupDependencies('weboptions'); //name of form(s). Seperate each with a comma (ie: 'weboptions', 'myotherform' )
            };
            </script>

            <link rel="stylesheet" href="css/jquery-ui.css">
            <script src="js/jquery-1.9.1.js"></script>
            <script src="js/jquery-ui.js"></script> 
            
            <table border="0"   align="center" width="100%"   >
            <tr align=center > 
                <br>
            <h3 align="center">&nbsp;&nbsp;Anda Sudah Mengisi Kuesioner</h3>
                        </div>
                        

            
            </table>

            <!-- <h3 class="content-header">* Wajib Diisi</h3> -->
            <hr />
                            
                        </div>
                
            </div>

            <!-- Ini Buat  Penutup Tampilan -->
            </div>
            @else

            <form method="post" action="/simpan-lppm" class="form-material m-t-40" id="form_combo" enctype="multipart/form-data">
            @csrf
            <table border="0" cellspacing="1" cellpadding="1" bgcolor="#CCCCCC" align="center" width="100%"   >
            <tr align=center > 
                <td colspan=2 style="background-color:#000066; font-weight:bold; color:#FFFFFF;">Layanan LPPM Dosen</td>
            </tr>

            <tr align=center > 
                <td colspan="2" style="background-color:#099; font-weight:bold; color:#FFFFFF;" align="left">F1 PROFIL RESPONDEN</td>
            </tr>

            
                <tr> 
                <td width="216" style="background-color:#FFFFCC;"><strong>F1-1 NIP</strong></td>
                <td width="359">
                <input border="2" size="40" type="text" value="{{ $karyawan->first()->nip; }}" name="nip" maxlength="8" readonly />    </td>
                <input border="2" size="40" type="hidden" name="stat" maxlength="8" value="x"/> 
                </tr>
            
                <tr> 
                <td style="background-color:#FFFFCC;"><strong>F1-2 Nama</strong></td>
                <td>
                <input border="2" size="40" type="text" value="{{ $karyawan->first()->nama; }}" name="nm_dosen" maxlength="60" readonly />    </td>
                </tr>
               
               
                <tr> 
                <td style="background-color:#FFFFCC;"><strong>F1-3 Program Studi</strong></td>
                <td>
                <select id="nm_prodi" required="isikan dulu" name="program_studi">
                    <option value="">--Pilih Program Studi--</option>
                    @foreach ($jrs as $jr)                                   
                    <option value="{{ $jr->nm_jrs }}">{{ $jr->nm_jrs }}</option>
                    @endforeach
                </select>
                                            
                </td>
                </tr>
                <tr> 
                <td width="156" style="background-color:#FFFFCC;"><strong>F1-4 UPPS</strong></td>
                <td width="946">
                <select required="isikan dulu" name="upps" onChange="showprodi()">
                <option value="">--UPPS--</option>
                                            
                <option value="Tb Simatupang">Tb Simatupang</option>                          
                </select>
                                            
                </td>
                </tr>
                
                <tr> 
                <td colspan="2" style="background-color:#fff;">&nbsp;</td>
                </tr>
                <tr> 
                <td colspan="2" style="background-color:#330; font-weight:bold; color:#FFFFFF;" align="left"><strong>F2 LAYANAN PENGAJUAN PROPOSAL PENELITIAN</strong></td>
                </tr>
                <tr>
                <td colspan="2" style="background-color:#fff;" align="left"><strong>F2-1</strong> Apakah Anda mengajukan Proposal Penelitian pada Tahun Akademik ini?</td>
                </tr>
                <tr>
                <td colspan="2"  style="background-color:#fff;"><input type="radio" name="f21" id="1" value="1" checked onClick="show1();" /> Ya (lanjut ke pertanyaan berikutnya)</td>
                </tr>
                <tr>
                <td colspan="2" style="background-color:#fff;"><input type="radio" name="f21" id="2" value="2" onClick="show2();" /> Tidak (langsung ke pertanyaan F3)</td>
              
                </tr>
                
                <tr> 
                <td colspan="2" style="background-color:#fff;">&nbsp;</td>
                </tr>
                <tr>
                <td colspan="2" style="background-color:#fff;" align="left">Bagaimana persepsi anda mengenai layanan yang diberikan oleh LPPM selama anda mengajukan proposal penelitian, berikut ini:</td>
                </tr>
                <tr> 
                <td colspan="2" style="background-color:#fff;">&nbsp;</td>
                </tr>
                
                <tr>
                <td colspan="2" align="center" style="background-color:#ffffff;"> 
                </td>
            </tr>
            </table>
                    <!-- Awal Kuesioner Multi -->
                <table border="1" cellspacing="0" cellpadding="0" width="100%">
                <tr bgcolor="#CCCCCC" align=center > 
                    <td width="34%" rowspan="2"><p align="center"><strong>Pertanyaan F2 LAYANAN PENGAJUAN PROPOSAL PENELITIAN </strong></p></td>
                <td colspan="5"><p align="center"><strong>Persepsi Anda</strong><strong></strong></p></td>
                </tr>

            <tr bgcolor="#CCCCCC">
                <td width="14%"><p align="center"><strong>Sangat tidak puas</strong></p></td>
                <td width="13%"><p align="center"><strong>Tidak puas</strong></p></td>
                <td width="14%"><p align="center"><strong>Cukup puas</strong></p></td>
                <td width="12%"><p align="center"><strong>Puas</strong></p></td>
                <td width="13%"><p align="center"><strong>Sangat puas</strong></p></td>
            </tr>
            
                <td width="34%" ><p align="left"><strong>F2-2 </strong>Kemudahan <i><b>prosedur layanan konsultasi</b></i> kegiatan Penelitian</p></td>
                <td width="14%"><p align="center"><input type="radio" name="f22" value="1" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f22" value="2" ></p></td>
                <td width="14%"><p align="center"><input type="radio" name="f22" value="3" ></p></td>
                <td width="12%"><p align="center"><input type="radio" name="f22" value="4" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f22" value="5" ></p></td>
            </tr>
            <tr>
                <td width="34%" ><p align="left"><strong>F2-3 </strong>Kemudahan <i><b>pengajuan</b></i> Proposal Penelitian</p></td>
                <td width="14%"><p align="center"><input type="radio" name="f23" value="1" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f23" value="2" ></p></td>
                <td width="14%"><p align="center"><input type="radio" name="f23" value="3" ></p></td>
                <td width="12%"><p align="center"><input type="radio" name="f23" value="4" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f23" value="5" ></p></td>
            </tr>
            <tr>
                <td width="34%" ><p align="left"><strong>F2-4 </strong>Kecepatan <i><b>respon/tanggapan</b></i> petugas LPPM atas pengajuan Proposal Penelitian</p></td>
                <td width="14%"><p align="center"><input type="radio" name="f24" value="1" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f24" value="2" ></p></td>
                <td width="14%"><p align="center"><input type="radio" name="f24" value="3" ></p></td>
                <td width="12%"><p align="center"><input type="radio" name="f24" value="4" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f24" value="5" ></p></td>
            </tr>
            <tr>
                <td width="34%" ><p align="left"><strong>F2-5 </strong>Kecepatan <i><b>proses persetujuan</b></i> Proposal Penelitian</p></td>
                <td width="14%"><p align="center"><input type="radio" name="f25" value="1" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f25" value="2" ></p></td>
                <td width="14%"><p align="center"><input type="radio" name="f25" value="3" ></p></td>
                <td width="12%"><p align="center"><input type="radio" name="f25" value="4" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f25" value="5" ></p></td>
            </tr>
            </table>
            
            <!--  <tr>
            <td colspan="6"></td>
            </tr> -->
            <table border="0" cellspacing="1" cellpadding="1" bgcolor="#CCCCCC" align="center" width="100%"   >
            <tr> 
                <td colspan="6" style="background-color:#fff;">&nbsp;</td>
                </tr>
                <tr> 
                <td colspan="6" style="background-color:#330; font-weight:bold; color:#FFFFFF;" align="left"><strong>F3 LAYANAN PENGAJUAN PROPOSAL PkM</strong></td>
                </tr>
                <tr>
                <td colspan="6" style="background-color:#fff;" align="left"><strong>F3-1</strong> Apakah Anda mengajukan Proposal PkM pada Tahun Akademik ini?</td>
                </tr>
                <tr>
                <td colspan="6"  style="background-color:#fff;"><input type="radio" name="f31" id="1" value="1" /> Ya (lanjut ke pertanyaan berikutnya)</td>
                </tr>
                <tr>
                <td style="background-color:#fff;"><input type="radio" name="f31" id="2" value="2" /> Tidak (langsung ke pertanyaan F4)</td>
                <!-- <td  style="background-color:#fff;" colspan="5"><input type="text" name="f31a" size="80" maxlength="80" value=""></td> -->
                </tr>
                <tr> 
                <td colspan="6" style="background-color:#fff;">&nbsp;</td>
                </tr>
            </table>

            <table border="1" cellspacing="0" cellpadding="0" width="100%">
                <tr bgcolor="#CCCCCC" align=center > 
                    <td width="34%" rowspan="2"><p align="center"><strong>Pertanyaan F3 LAYANAN PENGAJUAN PROPOSAL PkM</strong></p></td>
                <td colspan="5"><p align="center"><strong>Persepsi Anda</strong><strong></strong></p></td>
                </tr>
                <tr bgcolor="#CCCCCC">
                <td width="14%"><p align="center"><strong>Sangat tidak puas</strong></p></td>
                <td width="13%"><p align="center"><strong>Tidak puas</strong></p></td>
                <td width="14%"><p align="center"><strong>Cukup puas</strong></p></td>
                <td width="12%"><p align="center"><strong>Puas</strong></p></td>
                <td width="13%"><p align="center"><strong>Sangat puas</strong></p></td>
            </tr>
            
            <tr>
                <td width="34%"><p align="left"><strong>F3-2 </strong>Kemudahan <i><b>prosedur layanan konsultasi</b></i> kegiatan PkM</p></td>
                <td width="14%"><p align="center"><input type="radio" name="f32" value="1" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f32" value="2" ></p></td>
                <td width="14%"><p align="center"><input type="radio" name="f32" value="3" ></p></td>
                <td width="12%"><p align="center"><input type="radio" name="f32" value="4" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f32" value="5" ></p></td>
            </tr>
            <tr>
                <td width="34%"><p align="left"><strong>F3-3 </strong>Kemudahan <i><b>pengajuan</b></i> Proposal PkM</p></td>
                <td width="14%"><p align="center"><input type="radio" name="f33" value="1" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f33" value="2" ></p></td>
                <td width="14%"><p align="center"><input type="radio" name="f33" value="3" ></p></td>
                <td width="12%"><p align="center"><input type="radio" name="f33" value="4" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f33" value="5" ></p></td>
            </tr>
            <tr>
                <td width="34%"><p align="left"><strong>F3-4 </strong>Kecepatan <i><b>respon/tanggapan</b></i> petugas LPPM atas pengajuan Proposal PkM</p></td>
                <td width="14%"><p align="center"><input type="radio" name="f34" value="1" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f34" value="2" ></p></td>
                <td width="14%"><p align="center"><input type="radio" name="f34" value="3" ></p></td>
                <td width="12%"><p align="center"><input type="radio" name="f34" value="4" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f34" value="5" ></p></td>
            </tr>
            <tr>
                <td width="34%"><p align="left"><strong>F3-5 </strong>Kecepatan <i><b>proses persetujuan</b></i> Proposal PkM</p></td>
                <td width="14%"><p align="center"><input type="radio" name="f35" value="1" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f35" value="2" ></p></td>
                <td width="14%"><p align="center"><input type="radio" name="f35" value="3" ></p></td>
                <td width="12%"><p align="center"><input type="radio" name="f35" value="4" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f35" value="5" ></p></td>
            </tr>
            </table>
            
            
            <table border="0" cellspacing="1" cellpadding="1" bgcolor="#CCCCCC" align="center" width="100%"   >
            <tr> 
                <td colspan="6" style="background-color:#fff;">&nbsp;</td>
                </tr>
                <tr> 
                <td colspan="6" style="background-color:#330; font-weight:bold; color:#FFFFFF;" align="left"><strong>F4 LAYANAN PEMBUATAN SURAT TUGAS</strong></td>
                </tr>
                <tr>
                <td colspan="6" style="background-color:#fff;" align="left">(Jenis ST yang diajukan ke LPPM: Penelitian, Seminar, HKI, PkM)</td>
                </tr>
               
                <tr> 
                <td colspan="6" style="background-color:#fff;">&nbsp;</td>
                </tr>
            </table>

            <table border="1" cellspacing="0" cellpadding="0" width="100%">
            <tr bgcolor="#CCCCCC" align=center > 
                    <td width="34%" rowspan="2"><p align="center"><strong>Pertanyaan F4 Layanan Pembuatan Surat Tugas</strong></p></td>
                <td colspan="5"><p align="center"><strong>Persepsi Anda</strong><strong></strong></p></td>
                </tr>
                <tr bgcolor="#CCCCCC">
                <td width="14%"><p align="center"><strong>Sangat tidak baik</strong></p></td>
                <td width="13%"><p align="center"><strong>Tidak baik</strong></p></td>
                <td width="14%"><p align="center"><strong>Cukup baik</strong></p></td>
                <td width="12%"><p align="center"><strong>Baik</strong></p></td>
                <td width="13%"><p align="center"><strong>Sangat baik</strong></p></td>
            </tr>
            <tr>
                <td width="34%"><p align="left"><strong>F4-1 </strong>Kemudahan <i><b>pengajuan</b></i> Surat Tugas</p></td>
                <td width="14%"><p align="center"><input type="radio" name="f41" value="1" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f41" value="2" ></p></td>
                <td width="14%"><p align="center"><input type="radio" name="f41" value="3" ></p></td>
                <td width="12%"><p align="center"><input type="radio" name="f41" value="4" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f41" value="5" ></p></td>
            </tr>
            <tr>
                <td width="34%"><p align="left"><strong>F4-2 </strong>Kecepatan <i><b>respon/tanggapan</b></i> petugas LPPM atas pengajuan Surat Tugas</p></td>
                <td width="14%"><p align="center"><input type="radio" name="f42" value="1" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f42" value="2" ></p></td>
                <td width="14%"><p align="center"><input type="radio" name="f42" value="3" ></p></td>
                <td width="12%"><p align="center"><input type="radio" name="f42" value="4" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f42" value="5" ></p></td>
            </tr>
            <tr>
                <td width="34%"><p align="left"><strong>F4-3 </strong>Kecepatan <i><b>proses persetujuan</b></i> Surat Tugas</p></td>
                <td width="14%"><p align="center"><input type="radio" name="f43" value="1" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f43" value="2" ></p></td>
                <td width="14%"><p align="center"><input type="radio" name="f43" value="3" ></p></td>
                <td width="12%"><p align="center"><input type="radio" name="f43" value="4" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f43" value="5" ></p></td>
            </tr>
            </table>
            
            <table border="0" cellspacing="1" cellpadding="1" bgcolor="#CCCCCC" align="center" width="100%"   >
            <tr> 
                <td colspan="6" style="background-color:#fff;">&nbsp;</td>
                </tr>
                <tr> 
                <td colspan="6" style="background-color:#330; font-weight:bold; color:#FFFFFF;" align="left"><strong>F5 LAYANAN Website lppm.cyber-univ.ac.id</strong></td>
                </tr>
                <tr> 
                <td colspan="6" style="background-color:#fff;">&nbsp;</td>
                </tr>
            </table>

            <table border="1" cellspacing="0" cellpadding="0" width="100%">
            <tr bgcolor="#CCCCCC" align=center > 
                    <td width="34%" rowspan="2"><p align="center"><strong>Bagaimana persepsi anda mengenai layanan LPPM yang diberikan melalui website lppm.cyber-univ.ac.id?</strong></p></td>
                <td colspan="5"><p align="center"><strong>Persepsi Anda</strong><strong></strong></p></td>
                </tr>
            <tr bgcolor="#CCCCCC">
                <td width="14%"><p align="center"><strong>Sangat tidak baik</strong></p></td>
                <td width="13%"><p align="center"><strong>Tidak baik</strong></p></td>
                <td width="14%"><p align="center"><strong>Cukup baik</strong></p></td>
                <td width="12%"><p align="center"><strong>Baik</strong></p></td>
                <td width="13%"><p align="center"><strong>Sangat baik</strong></p></td>
            </tr>
            <tr>
                <td width="34%"><p align="left"><strong>F5-1 </strong>Informasi kegiatan LPPM</p></td>
                <td width="14%"><p align="center"><input type="radio" name="f51" value="1" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f51" value="2" ></p></td>
                <td width="14%"><p align="center"><input type="radio" name="f51" value="3" ></p></td>
                <td width="12%"><p align="center"><input type="radio" name="f51" value="4" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f51" value="5" ></p></td>
            </tr>
            <tr>
                <td width="34%"><p align="left"><strong>F5-2 </strong>Informasi mengenai agenda kegiatan LPPM</p></td>
                <td width="14%"><p align="center"><input type="radio" name="f52" value="1" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f52" value="2" ></p></td>
                <td width="14%"><p align="center"><input type="radio" name="f52" value="3" ></p></td>
                <td width="12%"><p align="center"><input type="radio" name="f52" value="4" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f52" value="5" ></p></td>
            </tr>
            <tr>
                <td width="34%"><p align="left"><strong>F5-3 </strong>Informasi mengenai pedoman kegiatan penelitian</p></td>
                <td width="14%"><p align="center"><input type="radio" name="f53" value="1" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f53" value="2" ></p></td>
                <td width="14%"><p align="center"><input type="radio" name="f53" value="3" ></p></td>
                <td width="12%"><p align="center"><input type="radio" name="f53" value="4" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f53" value="5" ></p></td>
            </tr>
            <tr>
                <td width="34%"><p align="left"><strong>F5-4 </strong>Informasi mengenai pedoman kegiatan Pengabdian kepada Masyarakat (PkM)</p></td>
                <td width="14%"><p align="center"><input type="radio" name="f54" value="1" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f54" value="2" ></p></td>
                <td width="14%"><p align="center"><input type="radio" name="f54" value="3" ></p></td>
                <td width="12%"><p align="center"><input type="radio" name="f54" value="4" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f54" value="5" ></p></td>
            </tr>
            <tr>
                <td width="34%"><p align="left"><strong>F5-5 </strong>Kelengkapan data pada laman repositori http://lppm.cyber-univ.ac.id/repository/</p></td>
                <td width="14%"><p align="center"><input type="radio" name="f55" value="1" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f55" value="2" ></p></td>
                <td width="14%"><p align="center"><input type="radio" name="f55" value="3" ></p></td>
                <td width="12%"><p align="center"><input type="radio" name="f55" value="4" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f55" value="5" ></p></td>
            </tr>
            <tr>
                <td width="34%"><p align="left"><strong>F5-6 </strong>Kelengkapan data pada laman download http://lppm.cyber-univ.ac.id/download/</p></td>
                <td width="14%"><p align="center"><input type="radio" name="f56" value="1" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f56" value="2" ></p></td>
                <td width="14%"><p align="center"><input type="radio" name="f56" value="3" ></p></td>
                <td width="12%"><p align="center"><input type="radio" name="f56" value="4" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f56" value="5" ></p></td>
            </tr>
            <tr>
                <td width="34%"><p align="left"><strong>F5-7 </strong>Informasi mengenai e-journal yang disajikan pada laman https://ejournal.cyber-univ.ac.id/ejurnal/</p></td>
                <td width="14%"><p align="center"><input type="radio" name="f57" value="1" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f57" value="2" ></p></td>
                <td width="14%"><p align="center"><input type="radio" name="f57" value="3" ></p></td>
                <td width="12%"><p align="center"><input type="radio" name="f57" value="4" ></p></td>
                <td width="13%"><p align="center"><input type="radio" name="f57" value="5" ></p></td>
            </tr>
            
            </table>

            <table border="0" cellspacing="1" cellpadding="1" bgcolor="#CCCCCC" align="center" width="100%"   >
            <tr> 
                <td colspan="6" style="background-color:#fff;">&nbsp;</td>
                </tr>
                
                <tr>
                <td colspan="6" style="background-color:#fff;" align="left"><strong>F6</strong> Tuliskan keluhan atau kendala anda mengenai layanan yang diberikan oleh LPPM Cyber University pada semester berjalan</td>
                </tr>
                <tr>
                <td  style="background-color:#fff;" colspan="6">
                    <textarea name="f6" size="500" maxlength="200" width="100" length="200"></textarea>
                    </td>
                </tr>
                
                <tr> 
                <td colspan="6" style="background-color:#fff;">&nbsp;</td>
                </tr>
                <tr>
                <td colspan="6" style="background-color:#fff;" align="left"><strong>F7</strong> Tuliskan kritik atau saran anda mengenai layanan yang diberikan oleh LPPM Cyber University untuk kedepannya</td>
                </tr>
                <tr>
                <td  style="background-color:#fff;" colspan="6">
                    <textarea name="f7" size="500" maxlength="200" width="100" length="200"></textarea>
                    </td>
                </tr>
                <tr> 
                <td colspan="6" style="background-color:#fff;">&nbsp;</td>
                </tr>
                
            


            <tr align=center > 
                <td colspan="2" style="background-color:#fff; font-weight:bold; color:#FFFFFF;">    </td>  </tr>
            <tr align=center > 
       
                <td colspan="2" style="background-color:#fff; font-weight:bold; color:#FFFFFF;">
                <input type="submit" name="Submit" value="Simpan Form Kuesioner" class="btn btn-success" {{ $isEnabled ? '' : 'disabled' }}/></td>
            </tr>   
                

            </table>
            </form>
            @endif  

            </div>
        </div>
        
    </div>
</div>
@endsection

