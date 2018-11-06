<h3>Danh sách liên hệ</h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Mã</th>
      <th scope="col">Tên</th>
      <th scope="col">Tạo mới</th>
      <th scope="col">Cập nhật</th>
    </tr>
  </thead>
  <tbody>
  @foreach($danhsachchude as $chude)
    <tr>
      <td>{{$chude->cd_ma}}</td>
      <td>{{$chude->cd_ten}}</td>
      <td>{{$chude->cd_taoMoi}}</td>
      <td>{{$chude->cd_capNhat}}</td>
    </tr>
    @endforeach
  </tbody>
</table>