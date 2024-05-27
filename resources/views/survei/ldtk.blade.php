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

            @if ($kue_ldtk->isNotEmpty() && $kue_ldtk->first()->stat == 'x')
                <table border="0" align="center" width="100%">
                    <tr align=center> 
                        <br>
                        <p></p>
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

                <table border="0" align="center" width="100%">
                    <tr align=center> 
                        <br>
                        <h3 align="center">&nbsp;&nbsp;Anda Sudah Mengisi Kuesioner</h3>
                    </tr>
                </table>
                <hr />
                
            @elseif ($kue_ldtk->isNotEmpty() && $kue_ldtk->first()->stat != 'x')
                <form method="post" action="/simpan-ldtk" class="form-material m-t-40" id="form_combo" enctype="multipart/form-data">
                    @csrf
                    <table border="0" cellspacing="1" cellpadding="1" bgcolor="#FFFFFF" align="center" width="100%">
                        <tr align=center>
                            <td colspan=2 style="background-color:#000066; font-weight:bold; color:#FFFFFF;">Kuesioner Layanan Dosen dan Tendik</td>
                        </tr>
                        <tr align=center>
                            <td colspan="2" style="background-color:#099; font-weight:bold; color:#FFFFFF;" align="left">Profil Responden</td>
                        </tr>
                        <tr> 
                            <td width="156" style="background-color:#FFFFCC;"><strong>F1-1 NIP</strong></td>
                            <td width="946">
                                <input border="2" size="40" type="text" name="nip" maxlength="8" value="{{ $karyawan->first()->nip }}" readonly />  
                                <input border="2" size="40" type="hidden" name="stat" maxlength="8" value="x"/> 
                                <input border="2" size="40" type="hidden" name="tgl" maxlength="8" value="{{ date('Y-m-d') }}"/>   
                            </td>
                        </tr>
                        <tr> 
                            <td style="background-color:#FFFFCC;"><strong>F1-2 Nama Lengkap</strong></td>
                            <td>
                                <input border="2" size="40" type="text" name="nama" maxlength="60" value="{{ $karyawan->first()->nama }}"  readonly />
                            </td>
                        </tr>
                        <tr> 
                            <td width="156" style="background-color:#FFFFCC;"><strong>F1-3 Status</strong></td>
                            <td width="946" colspan="2">
                                <label><input type="radio" name="status" value="Dosen" checked onClick="show1();"> Dosen</label>
                                <label><input type="radio" name="status" value="Tendik" onClick="show2();"> Tendik</label>
                            </td>
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
                    <table id='kue' border="0" cellspacing="1" cellpadding="1" bgcolor="#FFFFFF" align="center" width="100%">
                        <tr> 
                            <td width="156" style="background-color:#FFFFCC;"><strong>F1-4 UPPS</strong></td>
                            <td width="946">
                                <select name="upps">
                                    <option value="">--UPPS--</option>
                                    <option value="Tb Simatupang">Tb Simatupang</option>
                                </select>
                            </td>
                        </tr>
                        <tr> 
                            <td width="156" style="background-color:#FFFFCC;"><strong>F1-5 Program Studi</strong></td>
                            <td width="946">
                                <select id="nm_prodi" name="nm_prodi">
                                    <option value="">--Pilih Program Studi--</option>
                                    @foreach ($jrs as $jr)                                   
                                        <option value="{{ $jr->nm_jrs }}">{{ $jr->nm_jrs }}</option>
                                    @endforeach 		
                                </select>
                            </td>
                        </tr>
                    </table>
                    <table border="0" cellspacing="1" cellpadding="1" bgcolor="#FFFFFF" align="center" width="100%">
                        <tr align=center>
                            <td colspan="2" style="background-color:#099; font-weight:bold; color:#FFFFFF;" align="left">F2 Persepsi Dosen dan Tendik Mengenai Sarana dan Prasarana Di kampus :</td>
                        </tr>
                        <tr>
                            <td colspan="2"><div>Apakah pada semester ini, Anda pernah datang ke ruang Dosen/ruang kerja yang ada di kampus?<br><br>
                            <div>
                                <input type="radio" name="f22" id="1" value="1" onclick="show4();"/>
                                <span class="custom-radio"></span>(a) Ya<br />
                                <input type="radio" name="f22" id="2" value="2" onclick="show3();"/>
                                <span class="custom-radio"></span>(b) Tidak (langsung ke pertanyaan F3)<br><br>
                            </div></div>
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
                        <!-- F2-1 to F2-19 questions here -->
                    </table>
                    <!-- More tables and form inputs here -->
                    <tr align=center> 
                        <td colspan="2" style="background-color:#FFFFCC; font-weight:bold; color:#FFFFFF;">    </td>  
                    </tr>
                    <tr align=center> 
                        <td colspan="2" style="background-color:#FFFFCC; font-weight:bold; color:#FFFFFF;"><input type="submit" name="Submit" value="Simpan Form Kuesioner" class="btn btn-success"/></td>
                    </tr>
                </form>		
            @endif                
            </div>
        </div>
    </div>
</div>

@endsection
