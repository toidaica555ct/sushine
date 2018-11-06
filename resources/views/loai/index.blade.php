<h3>Danh sách liên hệ</h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Mã</th>
      <th scope="col">Tên</th>
    </tr>
  </thead>
  <tbody>
  @foreach($danhsachloai as $loai)
    <tr>
      <td>{{$loai->l_ma}}</td>
      <td>{{$loai->l_ten}}</td>
    </tr>
    @endforeach
  </tbody>
</table>