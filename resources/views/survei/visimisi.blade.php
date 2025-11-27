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

@if($kue_vm->isnotEmpty())
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
<form method="post" action="/simpan-vm" class="form-material m-t-40" id="form_combo" enctype="multipart/form-data">
@csrf

<table class="table table-striped table-hover">
  <tbody>
    <tr>
      <td width='10'><strong>F1</strong></td>
      <td colspan="5" valign="top"><strong>PROFIL RESPONDEN</strong></td>
    </tr>

    <tr>
      <td id="nip"><code>F1-1</code></td>
      <td valign="top" width="200">NIP</td>
      <td width="3" valign="top">:</td>
      <td colspan="3" valign="top">
      <input border="2" size="40" type="text" name="nip" maxlength="8" value="{{ $karyawan->first()->nip; }}" readonly />  
     <input border="2" size="40" type="hidden" name="stat" maxlength="8" value="x"/> 
    <tr>

    <tr>
        <td valign="top" id="nama"><code>F1-2</code></td>
        <td valign="top" width="200">Nama</td>
        <td width="3" valign="top">:</td>
        <td colspan="3" valign="top">
          <input type="text" name="nama" size="60" maxlength="80"   value="{{ $karyawan->first()->nama; }}" readonly>
      <tr>

    <tr>
      <td valign="top" id="unit_kerja"><code>F1-3</code></td>
      <td valign="top" width="200">Unit Kerja</td>
      <td width="3" valign="top">:</td>
      <td colspan="5" valign="top">
        <input type="radio" name="unit_kerja" id="dosen" value="dosen" onclick="show2();" checked/>
      <span class="custom-radio"></span>Dosen&nbsp;&nbsp;&nbsp;
        <input type="radio" name="unit_kerja" id="laboran" value="tendik" onclick="show1();"/>
      <span class="custom-radio"></span>Tenaga Kependidikan&nbsp;&nbsp;&nbsp; 
      
    </tr>
    <script type="text/javascript">
        function show1(){
        document.getElementById('div1').style.display ='none';
        }
        function show2(){
        document.getElementById('div1').style.display = 'block';
       }
       </script>
       </tbody>
    </table> 
    <div id="div1">
    <table class="table table-hover" width="100%">
      <tbody>
  <tr>
    <td valign="top" id="program_studi"><code>F1-4</code></td>
      <td valign="top" width="200">Program Studi</td>
      <td width="3" valign="top">:</td>
      <td colspan="3" valign="top">
        <div class="input-group">
     <select name="program_studi" onChange="showprodi()">
     <option value="">--Pilih Program Studi--</option>
         @foreach ($jrs as $jr)                                   
          <option value="{{ $jr->nm_jrs }}">{{ $jr->nm_jrs }}</option>
         @endforeach                   
     </select>                    
    </div>
      </td>
    </tr>

    <tr>
    <td valign="top" id="upps"><code>F1-5</code></td>
      <td valign="top" width="200">UPPS</td>
      <td width="3" valign="top">:</td>
      <td colspan="3" valign="top">
        <div class="input-group">
        <input type="text" name="upps" size="60" maxlength="80"   value="Universitas Siber Indonesia" readonly>
    </div>
      </td>
    </tr>
    </tbody>
    </table>
    </div>
    <table class="table table-striped table-hover">
      <tbody>
    
  <tr>
      <!-- <td colspan="6" valign="top">Jawablah pertanyaan berikut dengan cara memilih salah satu jawaban sesuai dengan perepsi anda</td> -->
    </tr>
    <tr>
      <td valign="top" width='10'><strong>F2</strong></td>
      <td colspan="5" valign="top"><strong>Persepsi Dosen dan Tendik Mengenai Visi dan Misi</strong></td>
    </tr>
    <tr>
      <td valign="top" id="f21"><code>F2-1</code></td>
      <td valign="top" width="200">Menurut persepsi Anda seberapa perlu, <br><strong>&quot;Visi dan Misi&quot;</strong> disosialisasikan ke seluruh Sivitas Akademika?</td>
      <td width="3" valign="top">:</td>
      <td colspan="3" valign="top">
        <input type="radio" name="f2-1" id="1" value="1" />
        <span class="custom-radio"></span>(1) Sangat tidak perlu<br />
        <input type="radio" name="f2-1" id="2" value="2" />
        <span class="custom-radio"></span>(2) Tidak perlu<br />
        <input type="radio" name="f2-1" id="3" value="3" />
        <span class="custom-radio"></span>(3) Cukup<br />
        <input type="radio" name="f2-1" id="4" value="4" />
        <span class="custom-radio"></span>(4) Perlu<br />
        <input type="radio" name="f2-1" id="5" value="5" />
        <span class="custom-radio"></span>(5) Sangat perlu<br />
      </td>
    </tr>

    </tbody>
    </table>
    <table id='div2' class="table table-striped table-hover">
     <script type="text/javascript">
        function show3(){
        document.getElementById('div2').style.display ='none';
        }
        function show4(){
        document.getElementById('div2').style.display = 'block';
       }
     </script>
    <tr>
    <td valign="top" id="f23"><code>F2-2</code></td>
    <td valign="top">Dari mana anda mengetahui <strong>&quot;Visi dan Misi &quot;</strong><em>(boleh memilih lebih dari satu)</em></td>
    <td valign="top">:</td>
    <td colspan="3" valign="top">
        <input type="checkbox" name="f2_2[]" value="1" />
        <span class="custom-checkbox"></span>(1) Rapat Dosen/Staff<br />
        
        <input type="checkbox" name="f2_2[]" value="2" />
        <span class="custom-checkbox"></span>(2) Buku Pedoman Akademik<br />
        
        <input type="checkbox" name="f2_2[]" value="3" />
        <span class="custom-checkbox"></span>(3) Poster<br />
        
        <input type="checkbox" name="f2_2[]" value="4" />
        <span class="custom-checkbox"></span>(4) Web Ruang Dosen<br />
        
        <input type="checkbox" name="f2_2[]" value="5" />
        <span class="custom-checkbox"></span>(5) Pada saat Seminar/Workshop<br />
        
        <input type="checkbox" name="f2_2[]" value="6" />
        <span class="custom-checkbox"></span>(6) X-Banner<br />
        
        <input type="checkbox" name="f2_2[]" value="7" />
        <span class="custom-checkbox"></span>(7) Lainnya<br />
        
        <input type="text" name="f2_2_others" size="60" maxlength="100" value="">
    </td>

    </tr>

    <tr>
      <td valign="top" id="f24"><code>F2-3</code></td>
      <td valign="top">Menurut anda, mana yang paling efektif untuk mensosialisasikan Visi Misi <strong></strong>?</td>
      <td valign="top">:</td>
      <td colspan="3" valign="top">
      <table>
        <tbody>
          <tr>
            <td olspan="3" valign="top">
              <input type="radio" name="f2-3" id="1" value="1" />
              <span class="custom-radio"></span>(1) Rapat Dosen/Staff<br>
              <input type="radio" name="f2-3"  id="2" value="2">
              <span class="custom-radio"></span>(2) Buku Panduan Akademik<br>
              <input type="radio" name="f2-3" id="3" value="3">
              <span class="custom-radio"></span>(3) Poster<br>
              <input type="radio" name="f2-3" id="4" value="4">
              <span class="custom-radio"></span>(4) Web Ruang Dosen<br>
              <input type="radio" name="f2-3" id="5" value="5">
              <span class="custom-radio"></span>(5) Pada saat Seminar/Workshop<br>
              <input type="radio" name="f2-3" id="6" value="6">
              <span class="custom-radio"></span>(6) X-Banner<br>
              <input type="radio" name="f2-3" id="7" value="7">
              <span class="custom-radio"></span>(7) Lainnya<br>
            </td>
          </tr>
          <tr>
            <td><input type="text" name="f2-3a" size="60" maxlength="100" value="">
              <!-- <code>F24A</code> --></td>
          </tr>
        </tbody>
      </table>
      </td>
    </tr>
    <tr>
      <td colspan="2" valign="top"><code></code><strong>F2-4 Bagaimana persepsi anda mengenai hal berikut terhadap Visi dan Misi</strong></td>
      <td valign="top"></td>
      <td valign="top"><table>
        <thead>
          <tr>
            <th width="85">Sangat Tidak Setuju (1)</th>
            <th width="85">Tidak Setuju (2)</th>
            <th width="70">Cukup (3)</th>
            <th width="70">Setuju (4)</th>
            <th width="75">Sangat Setuju (5)</th>
          </tr>
          </thead>         
      </table></td>
    </tr>
    <tr>
    <td valign="top"></td>
      <td valign="top">Kurikulum yang digunakan pada Prodi sesuai dengan Visi dan Misi <strong>(F2-41)</strong></td>
      <td valign="top">:</td>
      <td valign="top"><table>
          <tr>
              <td align="center" width="72" height="72"><input type="radio" name="f2-41" value="1"><span class="custom-radio"></span></td>
              <td align="center" width="72" height="72"><input type="radio" name="f2-41" value="2"><span class="custom-radio"></span></td>
              <td align="center" width="80" height="72"><input type="radio" name="f2-41" value="3"><span class="custom-radio"></span></td>
              <td align="center" width="75" height="72"><input type="radio" name="f2-41" value="4"><span class="custom-radio"></span></td>
              <td align="center" width="75" height="72"><input type="radio" name="f2-41" value="5"><span class="custom-radio"></span></td>
            </tr>    
                </table></td>
    </tr>
    <tr>
    <td valign="top"></td>
      <td valign="top">Kegiatan Prodi sudah mencerminkan Visi dan Misi <strong> (F2-42)</strong></td>
      <td valign="top">:</td>
      <td valign="top"><table>
          <tr>
              <td align="center" width="72" height="72"><input type="radio" name="F2-42" value="1"><span class="custom-radio"></span></td>
              <td align="center" width="72" height="72"><input type="radio" name="F2-42" value="2"><span class="custom-radio"></span></td>
              <td align="center" width="80" height="72"><input type="radio" name="F2-42" value="3"><span class="custom-radio"></span></td>
              <td align="center" width="75" height="72"><input type="radio" name="F2-42" value="4"><span class="custom-radio"></span></td>
              <td align="center" width="75" height="72"><input type="radio" name="F2-42" value="5"><span class="custom-radio"></span></td>
            </tr>    
                </table></td>
    </tr>
    <tr>
    <td valign="top"></td>
      <td valign="top">Outline Skripsi sudah sesuai dengan Visi dan Misi<strong> (F2-43)</strong></td>
      <td valign="top">:</td>
      <td valign="top"><table>
          <tr>
              <td align="center" width="72" height="72"><input type="radio" name="F2-43" value="1"><span class="custom-radio"></span></td>
              <td align="center" width="72" height="72"><input type="radio" name="F2-43" value="2"><span class="custom-radio"></span></td>
              <td align="center" width="80" height="72"><input type="radio" name="F2-43" value="3"><span class="custom-radio"></span></td>
              <td align="center" width="75" height="72"><input type="radio" name="F2-43" value="4"><span class="custom-radio"></span></td>
              <td align="center" width="75" height="72"><input type="radio" name="F2-43" value="5"><span class="custom-radio"></span></td>
            </tr>    
                </table></td>
    </tr>
    <tr>
    <td valign="top"></td>
      <td valign="top">Profil lulusan telah sesuai dengan Visi dan Misi <strong>(F2-44)</strong></td>
      <td valign="top">:</td>
      <td valign="top"><table>
          <tr>
              <td align="center" width="72" height="72"><input type="radio" name="F2-44" value="1"><span class="custom-radio"></span></td>
              <td align="center" width="72" height="72"><input type="radio" name="F2-44" value="2"><span class="custom-radio"></span></td>
              <td align="center" width="80" height="72"><input type="radio" name="F2-44" value="3"><span class="custom-radio"></span></td>
              <td align="center" width="75" height="72"><input type="radio" name="F2-44" value="4"><span class="custom-radio"></span></td>
              <td align="center" width="75" height="72"><input type="radio" name="F2-44" value="5"><span class="custom-radio"></span></td>
            </tr>    
                </table></td>
    </tr>
    <tr>
    <td valign="top"></td>
      <td valign="top">Universitas telah memberikan lingkungan yang kondusif untuk mewujudkan Visi dan Misi  <strong>(F2-45)</strong></td>
      <td valign="top">:</td>
      <td valign="top"><table>
          <tr>
              <td align="center" width="72" height="90"><input type="radio" name="F2-45" value="1"><span class="custom-radio"></span></td>
              <td align="center" width="72" height="90"><input type="radio" name="F2-45" value="2"><span class="custom-radio"></span></td>
              <td align="center" width="80" height="90"><input type="radio" name="F2-45" value="3"><span class="custom-radio"></span></td>
              <td align="center" width="75" height="90"><input type="radio" name="F2-45" value="4"><span class="custom-radio"></span></td>
              <td align="center" width="75" height="90"><input type="radio" name="F2-45" value="5"><span class="custom-radio"></span></td>
            </tr>    
                </table></td>
    </tr>
    <tr>
      <td valign="top" id="f26" colspan="10"><strong>F3. Tingkat Pemahaman Visi dan Misi</strong></td>
    </tr>

    <tr>
      <td valign="top" id="f26"><code>F3-1</code></td>
      <td valign="top">Seberapa baik tingkat pemahaman anda terhadap <strong>&quot;Visi Universitas&quot;</strong></td>
      <td valign="top">:</td>
      <td colspan="3" valign="top">

      <input type="radio" name="F3-1" id="1" value="1" />
      <span class="custom-radio"></span>(1) Sangat tidak paham<br />

        <input type="radio" name="F3-1" id="2" value="2" />
      <span class="custom-radio"></span>(2) tidak paham<br />

        <input type="radio" name="F3-1" id="3" value="3" />
      <span class="custom-radio"></span>(3) Cukup paham<br />

        <input type="radio" name="F3-1" id="4" value="4" />
      <span class="custom-radio"></span>(4) paham<br />

        <input type="radio" name="F3-1" id="5" value="5" />
      <span class="custom-radio"></span>(5) Sangat paham</td>
    </tr>

    <tr>
        <td valign="top" id="f27"><code>F3-2</code></td>
        <td valign="top">Seberapa baik tingkat pemahaman anda terhadap <strong>&quot;Misi Universitas&quot;</strong></td>
        <td valign="top">:</td>
        <td colspan="3" valign="top">
          <input type="radio" name="F3-2" id="1" value="1"/>
        <span class="custom-radio"></span>(1) Sangat tidak paham<br />
          <input type="radio" name="F3-2" id="2" value="2" />
        <span class="custom-radio"></span>(2) tidak paham<br/>
          <input type="radio" name="F3-2" id="3" value="3" />
        <span class="custom-radio"></span>(3) Cukup paham<br />
          <input type="radio" name="F3-2" id="4" value="4" />
        <span class="custom-radio"></span>(4) paham<br />
          <input type="radio" name="F3-2" id="5" value="5" />
        <span class="custom-radio"></span>(5) Sangat paham</td>
      </tr>

      <tr>
        <td valign="top" id="f27"><code>F3-3</code></td>
        <td valign="top">Seberapa baik tingkat pemahaman anda terhadap <strong>&quot;Visi Keilmuan Program Studi&quot;</strong></td>
        <td valign="top">:</td>
        <td colspan="3" valign="top">
          <input type="radio" name="F3-3" id="1" value="1"/>
        <span class="custom-radio"></span>(1) Sangat tidak paham<br />
          <input type="radio" name="F3-3" id="2" value="2" />
        <span class="custom-radio"></span>(2) tidak paham<br/>
          <input type="radio" name="F3-3" id="3" value="3" />
        <span class="custom-radio"></span>(3) Cukup paham<br />
          <input type="radio" name="F3-3" id="4" value="4" />
        <span class="custom-radio"></span>(4) paham<br />
          <input type="radio" name="F3-3" id="5" value="5" />
        <span class="custom-radio"></span>(5) Sangat paham</td>
      </tr>

      <tr>
        <td valign="top" id="f27"><code>F3-4</code></td>
        <td valign="top">Seberapa baik tingkat pemahaman anda terhadap <strong>&quot;Misi Program Studi&quot;</strong></td>
        <td valign="top">:</td>
        <td colspan="3" valign="top">
          <input type="radio" name="F3-4" id="1" value="1"/>
        <span class="custom-radio"></span>(1) Sangat tidak paham<br />
          <input type="radio" name="F3-4" id="2" value="2" />
        <span class="custom-radio"></span>(2) tidak paham<br/>
          <input type="radio" name="F3-4" id="3" value="3" />
        <span class="custom-radio"></span>(3) Cukup paham<br />
          <input type="radio" name="F3-4" id="4" value="4" />
        <span class="custom-radio"></span>(4) paham<br />
          <input type="radio" name="F3-4" id="5" value="5" />
        <span class="custom-radio"></span>(5) Sangat paham</td>
      </tr>

      <tr>
          <td valign="top"><strong>F4</strong></td>
          <td colspan="5" valign="top"><strong>Jika berkenan, berikan masukan mengenai pelaksanaan sosialisasi Visi Misi yang lebih baik untuk masa yang akan datang
          </strong><br>
          <textarea name="F4" size="1000" maxlength="1000">
          </textarea>
        </td>  
      </tr>
    </table>
    
      <table>
      <tbody>
  </tbody>
</table>
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="simpankuesioner" id="simpankuesioner" value="Simpan Kuesioner" class="btn btn-primary" {{ $isEnabled ? '' : 'disabled' }}/>
</p>
</form>		
@endif                
            </div>
        </div>
        
    </div>
</div>
@endsection