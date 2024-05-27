@extends('layouts.main')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
            <form name="form1" method="POST" action="" id="form_combo">
 
 <table border="0" cellspacing="1" cellpadding="1" bgcolor="#FFFFFF" align="center" width="100%"   >
   <tr align=center > 
     <td colspan=2 style="background-color:#000066; font-weight:bold; color:#FFFFFF;">Kuesioner Layanan Dosen dan Tendik</td>
   </tr>
 
 <tr align=center > 
     <td colspan="2" style="background-color:#099; font-weight:bold; color:#FFFFFF;" align="left">Profil Responden</td>
 </tr>
 
     <tr> 
     <td width="156" style="background-color:#FFFFCC;"><strong>F1-1 NIP</strong></td>
     <td width="946">
     <input border="2" size="40" type="text" name="nip" maxlength="8" value="{{ $karyawan->first()->nip; }}" readonly />    </td>
     </tr>
     
     <tr> 
     <td style="background-color:#FFFFCC;"><strong>F1-2 Nama Lengkap</strong></td>
     <td>
     <input border="2" size="40" type="text" name="nama" maxlength="60" value="{{ $karyawan->first()->nama; }}"  readonly />    </td>
     </tr>
     <tr> 
     <td width="156" style="background-color:#FFFFCC;"><strong>F1-3 Status</strong></td>
     <td width="946" colspan="2">
       <label>  <input type="radio" name="status" value="Dosen" checked onClick="show1();"> Dosen</label>
       <label> <input type="radio" name="status" value="Tendik" onClick="show2();"> Tendik </label></td>
 
     </tr>
     </table>
     
      <script type="text/javascript">
         function show2(){
        document.getElementById('kue').style.display ='none';
       }
       function show1(){
       document.getElementById('kue').style.display = 'block';
     }
       </script>
       <table id='kue' border="0" cellspacing="1" cellpadding="1" bgcolor="#FFFFFF" align="center" width="100%"   >
        
       <tr> 
     <td width="156" style="background-color:#FFFFCC;"><strong>F1-4 UPPS</strong></td>
     <td width="946">
     <select name="upps">
         <option value="">--UPPS--</option>
                                            
       <option value=""></option>
                                   
     </select>
                                 
     </td>
     </tr>
     <tr> 
     <td width="156" style="background-color:#FFFFCC;"><strong>F1-5 Program Studi</strong></td>
     <td width="946">
     <select id="nm_prodi" name="nm_prodi">
         <option value="">--Pilih Program Studi--</option>
                                            
       <option value=""></option> 		
     </select>
                                 
     </td>
     </tr>
     </table>
   <table  border="0" cellspacing="1" cellpadding="1" bgcolor="#FFFFFF" align="center" width="100%"   >
     <tr align=center > 
     <td colspan="2" style="background-color:#099; font-weight:bold; color:#FFFFFF;" align="left">F2 Persepsi Dosen dan Tendik Mengenai Sarana dan Prasarana Di kampus :</td>
     </tr>
   <tr><td colspan="2"><div>Apakah pada semester ini, Anda pernah datang ke ruang Dosen/ruang kerja yang ada di kampus?<br></br>
   <div>  <input type="radio" name="f22" id="1" value="1" onclick="show4();"/>
       <span class="custom-radio"></span>(a) Ya<br />
      <input type="radio" name="f22" id="2" value="2" onclick="show3();"/>
       <span class="custom-radio"></span>(b) Tidak (langsung ke pertanyaan F3)<br /><br></div></div>
         </td>
   </tr>
     <script type="text/javascript">
         function show3(){
        document.getElementById('kue1').style.display ='none';
       }
       function show4(){
       document.getElementById('kue1').style.display = 'block';
      }
       </script>
     
     
     </table>
     <table id="kue1" class="table" width="200" border="0">
     <tr> 
     <td colspan="11" style="background-color:#330; font-weight:bold; color:#FFFFFF;" align="left"><strong>F2-1 Pilih satu kampus yang paling ingin anda persepsikan</strong></td>
     </tr>
     <tr> 
   <td colspan="2">Kampus</td>
   <td colspan="7" align="left"><select id="nm_jrs" name="kampus">
         <option value="">--Pilih Kampus--</option>
                                            
       <option value=""></option>                                  
     </select></td>
     </tr>
    <tr> 
     <td colspan="11" style="background-color:#330; font-weight:bold; color:#FFFFFF;" align="left"><strong>Berikan penilaian mengenai persepsi anda terhadap Sarana yang ada di Dosen/ruang kerja Kampus</strong></td>
     </tr>
     
     <tr>
     <td colspan="5" align="center"><p align="center"><strong>Kepentingan Anda</strong></p></td>
     <td rowspan="3" align="center"><p>Petunjuk menjawab:<br />
     Pilihlah salah  satu jawaban sesuai dengan persepsi anda.</p></td>
     <td colspan="5" align="center"><p align="center"><strong>Kenyataan</strong></p></td>
     </tr>
   <tr>
     <td colspan="2">Sangat tidak penting</td>
     <td>&nbsp;</td>
     <td colspan="2" align="right">Sangat penting</td>
     <td colspan="2">Sangat tidak puas</td>
     <td>&nbsp;</td>
     <td colspan="2" align="right">Sangat puas</td>
     </tr>
     <tr>
     <td align="center">1</td>
     <td align="center">2</td>
     <td align="center">3</td>
     <td align="center">4</td>
     <td align="center">5</td>
     <td align="center">1</td>
     <td align="center">2</td>
     <td align="center">3</td>
     <td align="center">4</td>
     <td align="center">5</td>
     </tr>
     <tr>
                     <td align="center"><div class="radio">
                       <label>
                         <input name="f22h" type="radio" value="1" />
                         <span class="custom-radio"></span>
                       </label>
                     </div>
                   </td>
                     <td align="center"><div class="radio"><label><input name="f22h" type="radio" value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f22h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f22h" type="radio" value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f22h" type="radio" value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Kursi Ruang Kerja </p>
                   [<strong>(F2-2)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f22k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f22k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f22k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f22k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f22k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
 
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f23h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f23h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f23h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f23h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f23h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Meja Ruang Kerja</p>
                     [<strong>(F2-3)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f23k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f23k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f23k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f23k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f23k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f24h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f24h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f24h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f24h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f24h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Komputer Kerja </p>
                     [<strong>(F2-4)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f24k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f24k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f24k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f24k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f24k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f25h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f25h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f25h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f25h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f25h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Alat Tulis Kerja</p>
                     [<strong>(F2-5)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f25k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f25k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f25k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f25k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f25k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f26h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f26h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f26h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f26h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f26h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Printer </p>
                     [<strong>(F2-6)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f26k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f26k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f26k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f26k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f26k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f27h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f27h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f27h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f27h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f27h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Pendingin Ruangan </p>
                     [<strong>(F2-7)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f27k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f27k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f27k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f27k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f27k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f28h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f28h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f28h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f28h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f28h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Pencahayaan (Lampu) </p>
                     [<strong>(F2-8)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f28k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f28k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f28k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f28k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f28k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f29h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f29h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f29h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f29h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f29h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Koneksi Wifi </p>
                     [<strong>(F2-9)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f29k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f29k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f29k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f29k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f29k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
 
                     <tr>
                     <td colspan="5" align="center"><p align="center"><strong>Kepentingan Anda</strong></p></td>
                     <td rowspan="3" align="center"><p>Petunjuk menjawab:<br />
                     Pilihlah salah  satu jawaban sesuai dengan persepsi anda.</p></td>
                     <td colspan="5" align="center"><p align="center"><strong>Kenyataan</strong></p></td>
                     </tr>
                     <tr>
                     <td colspan="2">Sangat tidak penting</td>
                     <td>&nbsp;</td>
                     <td colspan="2" align="right">Sangat penting</td>
                     <td colspan="2">Sangat tidak puas</td>
                     <td>&nbsp;</td>
                     <td colspan="2" align="right">Sangat puas</td>
                     </tr>
                     <tr>
                     <td align="center">1</td>
                     <td align="center">2</td>
                     <td align="center">3</td>
                     <td align="center">4</td>
                     <td align="center">5</td>
                     <td align="center">1</td>
                     <td align="center">2</td>
                     <td align="center">3</td>
                     <td align="center">4</td>
                     <td align="center">5</td>
                     </tr>
 
                     <tr>
                     <td align="center"><div class="radio">
                       <label>
                         <input name="f210h" type="radio" value="radio" />
                         <span class="custom-radio"></span>
                       </label>
                     </div>
                   </td>
                     <td align="center"><div class="radio"><label><input name="f210h" type="radio" value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f210h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f210h" type="radio" value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f210h" type="radio" value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Kebersihan Ruang Kerja </p>
                   [<strong>(F2-10)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f210k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f210k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f210k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f210k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f210k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f211h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f211h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f211h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f211h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f211h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Area Parkir</p>
                     [<strong>(F2-11)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f211k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f211k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f211k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f211k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f211k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f212h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f212h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f212h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f212h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f212h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Perpustakaan Kampus </p>
                     [<strong>(F2-12)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f212k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f212k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f212k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f212k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f212k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f213h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f213h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f213h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f213h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f213h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Toilet karyawan</p>
                     [<strong>(F2-13)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f213k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f213k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f213k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f213k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f213k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f214h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f214h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f214h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f214h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f214h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Tempat ibadah (Musholah/Mesjid)</p>
                     [<strong>(F2-14)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f214k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f214k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f214k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f214k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f214k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f215h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f215h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f215h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f215h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f215h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Pantry</p>
                     [<strong>(F2-15)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f215k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f215k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f215k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f215k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f215k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f216h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f216h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f216h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f216h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f216h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Laboratorium</p>
                     [<strong>(F2-16)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f216k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f216k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f216k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f216k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f216k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f217h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f217h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f217h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f217h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f217h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Web ruang karyawan staff.bsi.ac.id </p>
                     [<strong>(F2-17)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f217k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f217k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f217k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f217k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f217k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f218h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f218h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f218h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f218h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f218h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Web ruang karyawan kampusonline.bsi.ac.id </p>
                     [<strong>(F2-18)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f218k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f218k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f218k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f218k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f218k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td colspan="9"><div><code>f2-19</code>  Berikan Kritik dan saran terhadap sarana dan prasarana.<br></br></td>
                     <tr>
                     <tr>
                     <td colspan="9"><div>  <textarea name="f219" size="100" maxlength="180"></textarea></div></td>
                     </tr>
                     
     </table>
    
       <tr> 
     <td colspan="2" style="background-color:#330; font-weight:bold; color:#FFFFFF;" align="left"><strong>F3. Persepsi Kepuasan Dosen dan Tendik Mengenai Layanan yang diberikan <b>UPPS/PS</b> terhadap pengembangan kompetensi Dosen dan Tendik</strong></td>
     </tr>
 
       <table class="table" width="200" border="0">
                     <tr>
                     <td colspan="5" align="center"><p align="center"><strong>Kepentingan Anda</strong></p></td>
                     <td rowspan="3" align="center"><p>Petunjuk menjawab:<br />
                     Pilihlah salah  satu jawaban sesuai dengan persepsi anda.</p></td>
                     <td colspan="5" align="center"><p align="center"><strong>Kenyataan</strong></p></td>
                     </tr>
                     <tr>
                     <td colspan="2">Sangat tidak penting</td>
                     <td>&nbsp;</td>
                     <td colspan="2" align="right">Sangat penting</td>
                     <td colspan="2">Sangat tidak puas</td>
                     <td>&nbsp;</td>
                     <td colspan="2" align="right">Sangat puas</td>
                     </tr>
                     <tr>
                     <td align="center">1</td>
                     <td align="center">2</td>
                     <td align="center">3</td>
                     <td align="center">4</td>
                     <td align="center">5</td>
                     <td align="center">1</td>
                     <td align="center">2</td>
                     <td align="center">3</td>
                     <td align="center">4</td>
                     <td align="center">5</td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio">
                       <label>
                         <input name="f31h" type="radio" value="1" />
                         <span class="custom-radio"></span>
                       </label>
                     </div>
                   </td>
                     <td align="center"><div class="radio"><label><input name="f31h" type="radio" value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f31h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f31h" type="radio" value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f31h" type="radio" value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Perhatian UPPS/PS terhadap <strong> tingkat  pendidikan </strong> Dosen dan Tenaga Kependidikan </p>
                   [<strong>(F3-1)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f31k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f31k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f31k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f31k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f31k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f32h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f32h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f32h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f32h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f32h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Perhatian UPPS/PS terhadap <strong> pengembangan keahlian </strong> Dosen dan Tenaga Kependidikan</p>
                     [<strong>(F3-2)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f32k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f32k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f32k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f32k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f32k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f33h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f33h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f33h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f33h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f33h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Dukungan yang diberikan oleh UPPS/PS bagi  Dosen dan Tenaga Kependidikan untuk mengikuti organisasi/asosiasi profesi di <strong>luar kampus  </strong></p>
                     [<strong>(F3-3)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f33k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f33k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f33k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f33k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f33k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f34h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f34h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f34h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f34h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f34h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Dukungan yang diberikan oleh UPPS/PS bagi Dosen dan Tenaga Kependidikan untuk mengikuti kegiatan workshop/seminar di  <strong>dalam kampus  </strong></p>
                     [<strong>(F3-4)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f34k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f34k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f34k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f34k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f34k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f35h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f35h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f35h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f35h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f35h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Dukungan yang diberikan oleh UPPS/PS bagi Dosen dan Tenaga Kependidikan untuk mengikuti kegiatan workshop/seminar di   <strong>luar kampus  </strong></p>
                     [<strong>(F3-5)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f35k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f35k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f35k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f35k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f35k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     
                 <tr> 
               <td colspan="10"  align="left"><strong>F4.  Persepsi Kepuasan Dosen dan Tendik mengenai layanan Program Studi dalam ketersediaan Kurikulum</strong></td>
               </tr>
 
                 <tr>
                     <td colspan="5" align="center"><p align="center"><strong>Kepentingan Anda</strong></p></td>
                     <td rowspan="3" align="center"><p>Petunjuk menjawab:<br />
                     Pilihlah salah  satu jawaban sesuai dengan persepsi anda.</p></td>
                     <td colspan="5" align="center"><p align="center"><strong>Kenyataan</strong></p></td>
                     </tr>
                     <tr>
                     <td colspan="2">Sangat tidak penting</td>
                     <td>&nbsp;</td>
                     <td colspan="2" align="right">Sangat penting</td>
                     <td colspan="2">Sangat tidak puas</td>
                     <td>&nbsp;</td>
                     <td colspan="2" align="right">Sangat puas</td>
                     </tr>
                     <tr>
                     <td align="center">1</td>
                     <td align="center">2</td>
                     <td align="center">3</td>
                     <td align="center">4</td>
                     <td align="center">5</td>
                     <td align="center">1</td>
                     <td align="center">2</td>
                     <td align="center">3</td>
                     <td align="center">4</td>
                     <td align="center">5</td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio">
                       <label>
                         <input name="f41h" type="radio" value="1" />
                         <span class="custom-radio"></span>
                       </label>
                     </div>
                   </td>
                     <td align="center"><div class="radio"><label><input name="f41h" type="radio" value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f41h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f41h" type="radio" value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f41h" type="radio" value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Program Studi melibatkan Dosen dan tendik dalam perubahan kurikulum </p>
                   [<strong>(F4-1)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f41k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f41k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f41k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f41k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f41k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f42h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f42h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f42h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f42h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f42h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Program Studi melibatkan stakeholder dalam perubahan kurikulum  </strong></p>
                     [<strong>(F4-2)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f42k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f42k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f42k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f42k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f42k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f43h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f43h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f43h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f43h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f43h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Program Studi melibatkan mahasiswa dalam perubahan kurikulum </strong></p>
                     [<strong>(F4-3)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f43k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f43k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f43k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f43k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f43k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f44h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f44h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f44h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f44h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f44h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Program Studi melibatkan Dosen dan Tenaga Kependidikan dalam pembuatan bahan ajar</strong></p>
                     [<strong>(F4-4)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f44k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f44k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f44k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f44k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f44k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f45h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f45h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f45h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f45h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f45h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Program Studi melakukan Quality Control (QC) terhadap soal yang dibuat oleh Dosen </strong></p>
                     [<strong>(F4-5)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f45k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f45k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f45k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f45k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f45k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f46h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f46h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f46h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f46h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f46h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Program Studi melakukan evaluasi terhadap kualitas kurikulum pada setiap semester </strong></p>
                     [<strong>(F4-6)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f46k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f46k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f46k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f46k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f46k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f47h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f47h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f47h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f47h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f47h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Ketersediaan bahan ajar pada semester   berjalan </strong></p>
                     [<strong>(F4-7)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f47k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f47k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f47k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f47k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f47k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f48h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f48h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f48h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f48h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f48h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Ketersediaan soal ujian pada semester berjalan  </strong></p>
                     [<strong>(F4-8)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f48k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f48k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f48k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f48k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f48k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     
                     <tr> 
               <td colspan="10"  align="left"><strong>F5.  Persepsi Kepuasan Dosen dan Tendik mengenai Keterbukaan UPPS/PS terhadap Dosen dan Tendik</strong></td>
               </tr>
               <tr>
                     <td colspan="5" align="center"><p align="center"><strong>Kepentingan Anda</strong></p></td>
                     <td rowspan="3" align="center"><p>Petunjuk menjawab:<br />
                     Pilihlah salah  satu jawaban sesuai dengan persepsi anda.</p></td>
                     <td colspan="5" align="center"><p align="center"><strong>Kenyataan</strong></p></td>
                     </tr>
                     <tr>
                     <td colspan="2">Sangat tidak penting</td>
                     <td>&nbsp;</td>
                     <td colspan="2" align="right">Sangat penting</td>
                     <td colspan="2">Sangat tidak puas</td>
                     <td>&nbsp;</td>
                     <td colspan="2" align="right">Sangat puas</td>
                     </tr>
                     <tr>
                     <td align="center">1</td>
                     <td align="center">2</td>
                     <td align="center">3</td>
                     <td align="center">4</td>
                     <td align="center">5</td>
                     <td align="center">1</td>
                     <td align="center">2</td>
                     <td align="center">3</td>
                     <td align="center">4</td>
                     <td align="center">5</td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio">
                       <label>
                         <input name="f51h" type="radio" value="1" />
                         <span class="custom-radio"></span>
                       </label>
                     </div>
                   </td>
                     <td align="center"><div class="radio"><label><input name="f51h" type="radio" value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f51h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f51h" type="radio" value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f51h" type="radio" value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Transparansi UPPS/PS dalam menegakkan peraturan </p>
                   [<strong>(F5-1)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f51k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f51k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f51k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f51k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f51k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f52h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f52h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f52h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f52h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f52h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Transparansi UPPS/PS dalam memberikan laporan kegiatan akademik </strong></p>
                     [<strong>(F5-2)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f52k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f52k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f52k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f52k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f52k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f53h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f53h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f53h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f53h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f53h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Keterbukaan UPPS/PS terhadap  masukan dari Dosen dan Tenaga Kependidikan mengenai kegiatan akademik </strong></p>
                     [<strong>(F5-3)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f53k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f53k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f53k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f53k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f53k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr> 
               <td colspan="10"  align="left"><strong>F6.  Persepsi Kepuasan Dosen dan Tendik mengenai keterlibatan UPPS/PS pada kegiatan non akademik</strong></td>
               </tr>
               <tr>
                     <td colspan="5" align="center"><p align="center"><strong>Kepentingan Anda</strong></p></td>
                     <td rowspan="3" align="center"><p>Petunjuk menjawab:<br />
                     Pilihlah salah  satu jawaban sesuai dengan persepsi anda.</p></td>
                     <td colspan="5" align="center"><p align="center"><strong>Kenyataan</strong></p></td>
                     </tr>
                     <tr>
                     <td colspan="2">Sangat tidak penting</td>
                     <td>&nbsp;</td>
                     <td colspan="2" align="right">Sangat penting</td>
                     <td colspan="2">Sangat tidak puas</td>
                     <td>&nbsp;</td>
                     <td colspan="2" align="right">Sangat puas</td>
                     </tr>
                     <tr>
                     <td align="center">1</td>
                     <td align="center">2</td>
                     <td align="center">3</td>
                     <td align="center">4</td>
                     <td align="center">5</td>
                     <td align="center">1</td>
                     <td align="center">2</td>
                     <td align="center">3</td>
                     <td align="center">4</td>
                     <td align="center">5</td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio">
                       <label>
                         <input name="f61h" type="radio" value="1" />
                         <span class="custom-radio"></span>
                       </label>
                     </div>
                   </td>
                     <td align="center"><div class="radio"><label><input name="f61h" type="radio" value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f61h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f61h" type="radio" value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f61h" type="radio" value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Keterlibatan UPPS/PS dalam Kegiatan keagamaan yang melibatkan Dosen dan Tenaga Kependidikan </p>
                   [<strong>(F6-1)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f61k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f61k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f61k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f61k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f61k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f62h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f62h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f62h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f62h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f62h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Keterlibatan UPPS/PS dalam Kegiatan olah raga yang melibatkan Dosen dan Tenaga Kependidikan </strong></p>
                     [<strong>(F6-2)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f62k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f62k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f62k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f62k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f62k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f63h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f63h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f63h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f63h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f63h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Keterlibatan UPPS/PS dalam Kegiatan kesehatan yang melibatkan Dosen dan Tenaga Kependidikan </strong></p>
                     [<strong>(F6-3)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f63k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f63k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f63k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f63k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f63k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f64h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f64h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f64h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f64h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f64h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">UPPS/PS menginformasikan mengenai kegiatan mahasiswa kepada Dosen dan Tenaga Kependidikan </strong></p>
                     [<strong>(F6-4)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f64k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f64k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f64k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f64k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f64k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr> 
               <td colspan="10"  align="left"><strong>F7.  Persepsi Kepuasan Dosen dan Tendik mengenai Kredibilitas UPPS/PS</strong></td>
               </tr>
               <tr>
                     <td colspan="5" align="center"><p align="center"><strong>Kepentingan Anda</strong></p></td>
                     <td rowspan="3" align="center"><p>Petunjuk menjawab:<br />
                     Pilihlah salah  satu jawaban sesuai dengan persepsi anda.</p></td>
                     <td colspan="5" align="center"><p align="center"><strong>Kenyataan</strong></p></td>
                     </tr>
                     <tr>
                     <td colspan="2">Sangat tidak penting</td>
                     <td>&nbsp;</td>
                     <td colspan="2" align="right">Sangat penting</td>
                     <td colspan="2">Sangat tidak puas</td>
                     <td>&nbsp;</td>
                     <td colspan="2" align="right">Sangat puas</td>
                     </tr>
                     <tr>
                     <td align="center">1</td>
                     <td align="center">2</td>
                     <td align="center">3</td>
                     <td align="center">4</td>
                     <td align="center">5</td>
                     <td align="center">1</td>
                     <td align="center">2</td>
                     <td align="center">3</td>
                     <td align="center">4</td>
                     <td align="center">5</td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio">
                       <label>
                         <input name="f71h" type="radio" value="1" />
                         <span class="custom-radio"></span>
                       </label>
                     </div>
                   </td>
                     <td align="center"><div class="radio"><label><input name="f71h" type="radio" value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f71h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f71h" type="radio" value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f71h" type="radio" value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Seberapa puas anda terhadap kemampuan UPPS dalam menyelesaikan permasalahan yang terjadi pada Dosen dan Tenaga Kependidikan</p>
                   [<strong>(F7-1)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f71k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f71k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f71k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f71k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f71k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f72h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f72h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f72h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f72h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f72h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Seberapa puas anda terhadap kemampuan Program Studi dalam menyelesaikan permasalahan yang terjadi pada Dosen dan Tenaga Kependidikan </strong></p>
                     [<strong>(F7-2)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f72k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f72k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f72k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f72k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f72k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr> 
               <td colspan="10"  align="left"><strong>F8.  Persepsi Kepuasan Dosen dan Tendik mengenai Tata Kelola yang ada di UPPS/PS</strong></td>
               </tr>
               <tr>
                     <td colspan="5" align="center"><p align="center"><strong>Kepentingan Anda</strong></p></td>
                     <td rowspan="3" align="center"><p>Petunjuk menjawab:<br />
                     Pilihlah salah  satu jawaban sesuai dengan persepsi anda.</p></td>
                     <td colspan="5" align="center"><p align="center"><strong>Kenyataan</strong></p></td>
                     </tr>
                     <tr>
                     <td colspan="2">Sangat tidak penting</td>
                     <td>&nbsp;</td>
                     <td colspan="2" align="right">Sangat penting</td>
                     <td colspan="2">Sangat tidak puas</td>
                     <td>&nbsp;</td>
                     <td colspan="2" align="right">Sangat puas</td>
                     </tr>
                     <tr>
                     <td align="center">1</td>
                     <td align="center">2</td>
                     <td align="center">3</td>
                     <td align="center">4</td>
                     <td align="center">5</td>
                     <td align="center">1</td>
                     <td align="center">2</td>
                     <td align="center">3</td>
                     <td align="center">4</td>
                     <td align="center">5</td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio">
                       <label>
                         <input name="f81h" type="radio" value="1" />
                         <span class="custom-radio"></span>
                       </label>
                     </div>
                   </td>
                     <td align="center"><div class="radio"><label><input name="f81h" type="radio" value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f81h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f81h" type="radio" value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f81h" type="radio" value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Seberapa puas anda dengan layanan yang diberikan oleh UPPS/PS mengenai Pengelolaan SDM </p>
                   [<strong>(F8-1)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f81k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f81k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f81k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f81k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f81k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f82h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f82h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f82h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f82h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f82h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Seberapa puas anda dengan layanan yang diberikan oleh UPPS/PS mengenai Pengelolaan sarana dan prasarana kampus  </strong></p>
                     [<strong>(F8-2)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f82k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f82k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f82k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f82k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f82k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f83h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f83h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f83h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f83h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f83h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Seberapa puas anda dengan layanan yang diberikan oleh UPPS/PS mengenai Pengelolaan permasalahan akademik mahasiswa</strong></p>
                     [<strong>(F8-3)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f83k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f83k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f83k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f83k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f83k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f84h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f84h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f84h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f84h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f84h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Seberapa puas anda dengan Pengelolaan kegiatan mahasiswa yang dilakukan oleh UPPS/PS </strong></p>
                     [<strong>(F8-4)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f84k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f84k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f84k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f84k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f84k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f85h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f85h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f85h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f85h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f85h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Seberapa puas anda dengan pengelolaan kemitraan yang dilakukan oleh UPPS/PS  </strong></p>
                     [<strong>(F8-5)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f85k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f85k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f85k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f85k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f85k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr> 
               <td colspan="10"  align="left"><strong>F9.  Persepsi Kepuasan Dosen dan Tendik mengenai Akuntabilitas UPPS/PS</strong></td>
               </tr>
               <tr>
                     <td colspan="5" align="center"><p align="center"><strong>Kepentingan Anda</strong></p></td>
                     <td rowspan="3" align="center"><p>Petunjuk menjawab:<br />
                     Pilihlah salah  satu jawaban sesuai dengan persepsi anda.</p></td>
                     <td colspan="5" align="center"><p align="center"><strong>Kenyataan</strong></p></td>
                     </tr>
                     <tr>
                     <td colspan="2">Sangat tidak penting</td>
                     <td>&nbsp;</td>
                     <td colspan="2" align="right">Sangat penting</td>
                     <td colspan="2">Sangat tidak puas</td>
                     <td>&nbsp;</td>
                     <td colspan="2" align="right">Sangat puas</td>
                     </tr>
                     <tr>
                     <td align="center">1</td>
                     <td align="center">2</td>
                     <td align="center">3</td>
                     <td align="center">4</td>
                     <td align="center">5</td>
                     <td align="center">1</td>
                     <td align="center">2</td>
                     <td align="center">3</td>
                     <td align="center">4</td>
                     <td align="center">5</td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio">
                       <label>
                         <input name="f91h" type="radio" value="1" />
                         <span class="custom-radio"></span>
                       </label>
                     </div>
                   </td>
                     <td align="center"><div class="radio"><label><input name="f91h" type="radio" value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f91h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f91h" type="radio" value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f91h" type="radio" value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Seberapa puas anda dengan layanan yang diberikan oleh UPPS/PS mengenai Pengelolaan Jadwal mengajar Dosen  </p>
                   [<strong>(F9-1)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f91k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f91k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f91k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f91k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f91k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
                     <tr>
                     <td align="center"><div class="radio"><label><input name="f92h" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f92h" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f92h" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f92h" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f92h" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><p align="center">Seberapa puas anda dengan layanan yang diberikan oleh UPPS/PS mengenai Pengelolaan Lab  </strong></p>
                     [<strong>(F9-2)</strong>]</td>
                     <td align="center"><div class="radio"><label><input name="f92k" type="radio"  value="1" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f92k" type="radio"  value="2" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f92k" type="radio"  value="3" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f92k" type="radio"  value="4" /><span class="custom-radio"></span></label></div></td>
                     <td align="center"><div class="radio"><label><input name="f92k" type="radio"  value="5" /><span class="custom-radio"></span></label></div></td>
                     </tr>
 
                     
         </table>
     
   
  
  <?php //} ?>   
      
   <tr align=center > 
     <td colspan="2" style="background-color:#FFFFCC; font-weight:bold; color:#FFFFFF;">    </td>  </tr>
   <tr align=center > 
     <!-- <a href="beranda_.html" class="btn btn-success">Simpan</a> -->
     <?php 
     // echo "<script language='javascript'>
     //             window.alert('Kuesioner belum bisa disimpan, belum waktunya');</script>"
     ?>
     <td colspan="2" style="background-color:#FFFFCC; font-weight:bold; color:#FFFFFF;"><input type="submit" name="Submit" value="Simpan Form Kuesioner" class="btn btn-success"/></td>
   </tr>
 </table>
 </form>		
                
            </div>
        </div>
        
    </div>
</div>

@endsection