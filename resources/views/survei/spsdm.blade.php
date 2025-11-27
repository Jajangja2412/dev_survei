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
            @if($kue_spsdm->isnotEmpty())
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
            <table border="0" cellspacing="1" cellpadding="1" bgcolor="#CCCCCC" align="center" width="100%"   >
            <tr align=center > 
            <div class="row">
                <div class="col-md-12">
                    <div class="block-web">
                        <div class="header" style="background:#d93600;">   
                    <div class="actions"> <a class="minimize" href="#"><i class="fa fa-chevron-down"></i></a> <a class="refresh" href="#"><i class="fa fa-repeat"></i></a> </div>
                    <h4 class="content-header" style="color:#FFF"><strong>SURVEI KEPUASAN DOSEN DAN TENAGA KEPENDIDIKAN TERHADAP SISTEM PENGELOLAAN SDM <?php //echo $user['nm_kampus'];?> </strong> </h4>                       
                        </div>
                        
                <br></br>
                <div class="porlets-content"> 
            <form class="form-horizontal group-border-dashed" method="post" action="/simpan-spsdm" enctype="multipart/form-data" role="form-horizontal" parsley-validate novalidate>
            @csrf
           <div class="form-group">
             <label class="col-sm-2 control-label">F1-1 NIP </label>
             <input type="text" name="nip"  value="{{ $karyawan->first()->nip; }}" required="required" readonly><br></br>
             <input border="2" size="40" type="hidden" name="stat" maxlength="8" value="x"/> 
             <label class="col-sm-2 control-label">F1-2 Nama </label>
             <input type="text" name="nama"  value="{{ $karyawan->first()->nama; }}" required="required" readonly><br></br>					
             <label class="col-sm-2 control-label">F1-3Unit Kerja </label>
             <input type="radio" name="unit_kerja" value="dosen" id="dosen" onclick="show2();">
                       <span class="custom-radio"></span> Dosen
                       <input type="radio" name="unit_kerja" value="tendik" id="tendik" onclick="show1();">
                       <span class="custom-radio"></span> Tenaga Kependidikan<br></br>
                 
        <script type="text/javascript">
        function show1(){
        document.getElementById('div1').style.display ='none';
        }
        function show2(){
        document.getElementById('div1').style.display = 'block';
        }
        </script>
        <div id="div1">
        <label class="col-sm-2 control-label">F1-4 UPPS* </label>
      
        <input type="text" name="upps" value="TB Simatupang" readonly> <br></br>
        <label class="col-sm-2 control-label">F1-5 Program Studi</label>  
       <select required="isikan dulu" name="program_studi" onChange="showprodi()">
        <option value="">--Program Studi--</option>
         @foreach ($jrs as $jr)                                   
          <option value="{{ $jr->nm_jrs }}">{{ $jr->nm_jrs }}</option>
         @endforeach 		                                                          
	   </select><br></br>
               </div>	
        </div> 
             </div>
           </div><!--/form-group--> 
           
           <hr>
           <div class="col-sm-12">	
             <div class="alert alert-success" style="font-size:1.3em;">														
               <strong>Selama menjalani pekerjaan di Institusi ini, sebarapa penting hal berikut ini dalam pengembangan karir Anda (A), dan seberapa puas Anda terhadap hal tersebut (B).
               <p><p>*Catatan : Kuesoner di isi setiap bulan Desember. 
               </strong><br>
               <hr>
               <p>
               Petunjuk mejawab: <br>Pilihlah salah satu jawaban sesuai dengan persepsi anda
               </p>
               
             </div>
           </div>
           <div class="table-responsive">
             <table class="table table-hover">
               <thead>
               <tr>                      
                 <th width="30%" style="text-align:center;">TINGKAT KEPENTINGAN (A)</th>                      
                 <th width="40%" style="text-align:center;"></th>
                 <th width="30%" style="text-align:center;">TINGKAT KEPUASAN (B)</th>
               </tr>
               <tr>                      
                 <th colspan="3" style="text-align:center;">
                 <table width="100%">
                   <tr>
                     <td width="10%">Sangat Tidak Penting</td><td colspan="3"  width="18%">&nbsp;</td><td width="10%">Sangat  Penting</td><td width="7%"></td><td width="10%">Sangat Tidak Puas</td><td colspan="3" width="23%">&nbsp;</td><td width="10%">Sangat Puas</td>
                   </tr>
                   <tr>
                     <td width="10%" align="center">1</td><td width="5%"> 2</td><td width="5%"> 3</td><td width="5%"> 4</td><td width="10%" align="center"> 5</td><td  width="30%"></td><td width="10%" align="center">1</td><td width="5%"> 2</td><td width="5%"> 3</td><td width="5%"> 4</td><td width="10%" align="center"> 5</td>
                   </tr>
                 </table>
                 </th> 
               </tr>
               </thead>
               <tbody>
               <tr>
                 <td colspan="3" style="text-align:center;"><strong>Seleksi/Perekrutan(F2)<strong></td>                     
               </tr>
               <tr>                      
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f21" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f21" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f21" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f21" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f21" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
                 <td style="text-align:center;">Informasi lowongan Dosen dan Tendik (F2-1 dan F2-2)</td>
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f22" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f22" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f22" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f22" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f22" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
               </tr>
               <tr>                      
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f23" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f23" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f23" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f23" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f23" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
                 <td style="text-align:center;">Kemudahan mengirim surat lamaran kerja(F2-3 dan F2-4)</td>
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f24" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f24" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f24" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f24" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f24" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
               </tr>  
               <tr>                      
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f25" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f25" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f25" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f25" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f25" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
                 <td style="text-align:center;">Transparansi proses rekrutmen (F2-5 dan F2-6) </td>
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f26" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f26" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f26" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f26" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f26" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
               </tr>
               
               <tr>
                 <td colspan="3" style="text-align:center;"><strong>Penempatan (F3)<strong></td>                     
               </tr>
               <tr>                      
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f31" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f31" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f31" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f31" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f31" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
                 <td style="text-align:center;">Kesesuaian tugas dengan jobdesk (F3-1 dan F3-2)</td>
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f32" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f32" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f32" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f32" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f32" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
               </tr>
               <tr>                      
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f33" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f33" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f33" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f33" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f33" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
                 <td style="text-align:center;">Kesesuaian tugas dengan minat (F3-3 dan F3-4)</td>
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f34" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f34" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f34" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f34" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f34" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
               </tr>  
               <tr>                      
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f35" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f35" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f35" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f35" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f35" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
                 <td style="text-align:center;">Mutasi unit kerja (F3-5 dan F3-6) </td>
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f36" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f36" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f36" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f36" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f36" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
               </tr>
               
               <tr>
                 <td colspan="3" style="text-align:center;"><strong>Pengembangan (F4)<strong></td>                     
               </tr>
               <tr>                      
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f41" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f41" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f41" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f41" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f41" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
                 <td style="text-align:center;">Peningkatan karir (F4-1 dan F4-2)</td>
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f42" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f42" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f42" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f42" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f42" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
               </tr>
               <tr>                      
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f43" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f43" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f43" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f43" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f43" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
                 <td style="text-align:center;">Penilaian kinerja Dosen dan Tendik (F4-3 dan F4-4)</td>
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f44" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f44" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f44" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f44" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f44" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
               </tr>  
               
               <tr>
                 <td colspan="3" style="text-align:center;"><strong>Retensi (F5)<strong></td>                     
               </tr>
               <tr>                      
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f51" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f51" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f51" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f51" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f51" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
                 <td style="text-align:center;">Suasana kerja (F5-1 dan F5-2)</td>
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f52" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f52" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f52" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f52" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f52" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
               </tr>
               <tr>                      
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f53" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f53" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f53" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f53" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f53" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
                 <td style="text-align:center;">Keamanan lingkungan kerja (F5-3 dan F5-4)</td>
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f54" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f54" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f54" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f54" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f54" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
               </tr>  
               <tr>                      
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f55" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f55" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f55" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f55" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f55" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
                 <td style="text-align:center;">Keselamatan kerja (F5-5 dan F5-6)</td>
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f56" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f56" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f56" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f56" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f56" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
               </tr>
               <tr>                      
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f57" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f57" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f57" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f57" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f57" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
                 <td style="text-align:center;">Jaminan sosial (F5-7 dan F5-8)</td>
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f58" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f58" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f58" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f58" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f58" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
               </tr>
               
               <tr>
                 <td colspan="3" style="text-align:center;"><strong>Pemberhentian (F6)<strong></td>                     
               </tr>
               <tr>                      
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f61" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f61" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f61" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f61" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f61" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
                 <td style="text-align:center;">Pengunduran diri (F6-1 dan F6-2)</td>
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f62" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f62" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f62" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f62" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f62" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
               </tr>
               <tr>                      
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f63" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f63" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f63" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f63" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f63" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
                 <td style="text-align:center;">Pemberhentian dosen dan tendik (F6-3 dan F6-4)</td>
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f64" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f64" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f64" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f64" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f64" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
               </tr>  
               
               <tr>
                 <td colspan="3" style="text-align:center;"><strong>Remunerasi (F7)<strong></td>                     
               </tr>
               <tr>                      
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f71" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f71" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f71" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f71" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f71" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
                 <td style="text-align:center;">Gaji pokok (F7-1 dan F7-2)</td>
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f72" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f72" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f72" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f72" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f72" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
               </tr>
               <tr>                      
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f73" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f73" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f73" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f73" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f73" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
                 <td style="text-align:center;">Tunjangan hari raya (F7-3 dan F7-4)</td>
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f74" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f74" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f74" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f74" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f74" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
               </tr>  
               <tr>                      
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f75" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f75" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f75" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f75" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f75" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
                 <td style="text-align:center;">Uang Perjalanan Dinas (UPD) (F7-5 dan F7-6)</td>
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f76" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f76" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f76" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f76" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f76" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
               </tr>
               
               <tr>
                 <td colspan="3" style="text-align:center;"><strong>Penghargaan (F8)<strong></td>                     
               </tr>
               <tr>                      
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f81" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f81" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f81" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f81" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f81" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
                 <td style="text-align:center;">Penghargaan prestasi (F8-1 dan F8-2)</td>
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f82" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f82" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f82" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f82" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f82" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
               </tr>
               <tr>                      
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f83" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f83" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f83" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f83" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f83" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
                 <td style="text-align:center;">Beasiswa studi lanjut (F8-3 dan F8-4)</td>
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f84" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f84" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f84" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f84" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f84" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
               </tr>  
               
               <tr>
                 <td colspan="3" style="text-align:center;"><strong>Sanksi (F9)<strong></td>                     
               </tr>
               <tr>                      
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f91" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f91" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f91" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f91" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f91" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
                 <td style="text-align:center;">Konsistensi penegakan peraturan (F9-1 dan F9-2)</td>
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f92" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f92" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f92" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f92" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f92" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
               </tr>
               <tr>                      
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f93" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f93" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f93" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f93" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f93" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
                 <td style="text-align:center;">Penerbitan Surat Teguran (F9-3 dan F9-4)</td>
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f94" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f94" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f94" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f94" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f94" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
               </tr>  
               <tr>                      
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f95" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f95" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f95" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f95" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f95" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
                 <td style="text-align:center;">Penerbitan Surat Peringatan (F9-5 dan F9-6)</td>
                 <td>
                 <div class="form-group">							  
                     <div class="">
                     <label class="radio-inline">
                       <input type="radio" name="f96" value="1" id="inlineradio1">
                       <span class="custom-radio"></span> 1 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f96" value="2" id="inlineradio2">
                       <span class="custom-radio"></span> 2 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f96" value="3" id="inlineradio3">
                       <span class="custom-radio"></span> 3 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f96" value="4" id="inlineradio2">
                       <span class="custom-radio"></span> 4 </label>
                     <label class="radio-inline">
                       <input type="radio" name="f96" value="5" id="inlineradio3">
                       <span class="custom-radio"></span> 5 </label>
                     </div>
                   </div>	 
                 </td>
               </tr>
               
               
               </tbody>
             </table>
             <button class="btn btn-success" name="Submit" type="submit">Simpan Survei</button>
           </div>
           				
         </form>
         @endif 

            </div>
        </div>
        
    </div>
</div>

@endsection