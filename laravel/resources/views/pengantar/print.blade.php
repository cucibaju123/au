

<table width="700" border="0" align="center">
<tr>
  <td rowspan="5" align="center"><img src="{{asset('images/uin.png')}}" width="100" height="90"></td>
  <td align="center"><font face="Times New Roman, Times, serif" size="2">KEMENTRIAN AGAMA REPUBLIK INDONESIA</td>
</tr>
<tr>
  <td align="center"><font face="Times New Roman, Times, serif" size="2">UNIVERSITAS ISLAM NEGERI (UIN)</td>

</tr>
<tr>
  <td  align="center"><font face="Times New Roman, Times, serif" size="3">SUNAN GUNUNG DJATI BANDUNG</td>

</tr>
<tr>
  <td  align="center"><font face="Times New Roman, Times, serif" size="3">FAKULTAS SAINS DAN TEKNOLOGI</td>

</tr>
<tr>
  <td  align="center"><font face="Times New Roman, Times, serif" size="-5">Jalan A.H. Nasution No.105 Cibiru - Bandung 40614 Telp. 022-7800525 Fax. 022-7803936 website: http://fst.uinsgd.ac.id</td>
</tr>
<th colspan="5" align="center" scope="col"><hr />
</table>
<p>


<table width="700" border="0" align="center">
<tr>
<td width="79">Nomor</td>
<td width="12">:</td>
<td width="595">B.{{$surat->id}}/Un.05/III.7/PP.00.9/{{date("m")}}/{{date("Y")}}</td>
</tr>
 <tr>
<td width="79">Lampiran</td>
<td width="12">:</td>
<td width="595"></td>
</tr>
 <tr>
<td width="79">Perihal</td>
<td width="12">:</td>
<td width="595">Tugas Memberi kuliah Semester</td>
</tr>
</table>


<table width="700" border="0" align="center">
  <tr>
<td width="80"></td>
<td></td>
<td width="592">Kepada Yth.<br>Bapak/Ibu</td>
</tr>
 <tr>
<td width="80"></td>
<td width="14"></td>
<td width="592"><b>{{$surat->nama_dosen}}</td>
</tr>
 <tr>
<td width="80">&nbsp;</td>
<td width="14"></td>
<td width="592">Dosen Fakultas Sains dan Teknologi<br>UIN Sunan Gunung Djati Bandung</td>
</tr>
<tr>
<td width="80">&nbsp;</td>
<td width="14"></td>
<td width="592"><font face="Times New Roman, Times, serif" size="3"><br>Assalamualaikum Wr. Wb</td>
</tr>
<tr>
<td width="80">&nbsp;</td>
<td width="14"></td>
<td width="592"><p align="justify">Dengan ini kami sampaikan tugas/jadwal memberi kuliah pada Semester {{$surat->semester}}, tahun akademik {{$surat->ta_awal}} yang berlaku mulai tanggal   {{$surat->tgl_awal}} sampai  {{$surat->tgl_akhir}}, Adapun ketentuan pelaksanaannya sebagai berikut : </p></td>
</tr>
</table>

<table width="700" border="1" align="center">
<tr>

<td>No</td>
  <td width="235"><center>Mata Kuliah</td>
  <td width="31"><center>SKS</td>
  <td width="59"><center>Semester</td>
  <td width="53"><center>Hari</td>
  <td width="102"><center>Pukul</td>
  <td width="54"><center>Ruang</td>
</tr>

<tr>
<td width="33" align="center" bgcolor="#FFFFFF" scope="col"><center>{{$surat->id}}</td>
  <td width="235" align="left" bgcolor="#FFFFFF" scope="col"><center>{{$surat->nama_matkul}}</td>
  <td align="center" bgcolor="#FFFFFF" scope="col">{{$surat->sks}}</td>
<td width="59" align="center" bgcolor="#FFFFFF" scope="col"><center>{{$surat->semester}}</td>
<td align="left" bgcolor="#FFFFFF" scope="col"><center>{{$surat->hari}}</td>
  <td width="102" align="left" bgcolor="#FFFFFF" scope="col"><center>{{$surat->jam_awal}}-{{$surat->jam_akhir}}</td>
  <td colspan="3" align="left" bgcolor="#FFFFFF" scope="col"><center>{{$surat->kode_ruang}}</td>
</tr>

</table>

<table width="700" border="0" align="center">
  <tr>
<td width="80"></td>
<td></td>
<td width="592">Untuk ketertiban perkuliahan, Bapak/ibu dimohon memperhatikan hal-hal berikut:</td>
</tr>
 <tr>
<td width="80"></td>
<td width="14">1. </td>
<td width="592"><p align="justify">Dosen / Asisten berkewajiban menyelenggarakan tatap muka terjadwal sekurang-kurangnya 14 kali.</p></td>
</tr>
<tr>
<td width="80"></td>
<td width="14">2. </td>
<td width="592"><p align="justify">Sebelum memulai perkuliahan agar mengecek daftar mahasiswa yang berhak mengikuti kuliah</p></td>
</tr><tr>
<td width="80"></td>
<td width="14">3. </td>
<td width="592"><p align="justify">Pada Akhir perkuliahan agar mengecek daftar Mahasiswa yang berhak untuk mengikuti ujian dan menyerahkan dokumennya kepda ketua jurusan, untuk mencetak kartu ujian.</p></td>
</tr><tr>
<td width="80"></td>
<td width="14">4. </td>
<td width="592"><p align="justify">Bagi Dosen 1/Dosen 2 yeng belum berhak melaksanakan kuliah mandiri, agar koordinasi dengan Dosen Pembina Mata Kuliah/Ketua Jurusan</p></td>
</tr>
 <tr>
<td width="80"></td>
<td></td>
<td width="592">Demikian tugas ini kami sampaikan, untuk dilaksanakan sebagaimana mestinya<br>Wassalamualaikum Wr. Wb.</td>
</tr>
 <tr>
<td width="80"></td>
<td></td>
<td width="592" align="right">Bandung,{{date(" d F Y")}}<br /> Wakil Dekan Bidang Akademik</td>
</tr>
</tr>
 <tr>
<td width="80">&nbsp;</td>
<td>&nbsp;</td>
<td width="592" align="right">&nbsp;</td>
</tr>
<tr>
<td width="80">&nbsp;</td>
<td></td>
<td width="592" align="right">&nbsp;</td>
</tr>
 <tr>
<td width="80">&nbsp;</td>
<td></td>
<td width="592" align="right">&nbsp;</td>
</tr>
<tr>
<td width="80">&nbsp;</td>
<td></td>
<td width="592" align="right"><b>Cecep Nurul Alam, S.T., M.Kom.</td><br>
</tr>
<tr>
  <td width="80">&nbsp;</td>
  <td></td>
  <td width="592" align="right">NIP. 196209181988031001</td>
</tr>
</table>

<script language="javascript">
window.print()
</script>


