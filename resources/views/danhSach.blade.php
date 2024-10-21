<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sach</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    {{-- thong bao --}}
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    {{-- ket thu thong bao --}}
    <h1 class="d-flex justify-content-center mt-5 mb-5">DANH SACH GIANG VIEN</h1>
    <a href="{{ url('/them-giao-vien') }}" class= "d-flex justify-content-end mt-3 mb-3">
        <button type="button" class="btn btn-success">+ Them</button>
    </a>
    <table class="table table-border">
        <thead class="table table-danger">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Ho ten</th>
            <th scope="col">Ngay sinh</th>
            <th scope="col">Gioi tinh</th>
            <th scope="col">So dien thoai</th>
            <th scope="col">Mon hoc</th>
            <th scope="col">Ten dang nhap</th>
            <th scope="col">Mat khau</th>
            <th scope="col">Trang thai</th>
            <th scope="col">Thao tac</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $gv)
            <tr>
                <th scope="row">{{ $gv -> id }}</th>
                <td>{{ $gv -> ho_ten }}</td>
                <td>{{ $gv -> ngay_sinh }}</td>
                <td>
                    @if ($gv -> gioi_tinh == 1)
                        {{ 'Nam' }}
                    @else
                    {{ 'Nu' }}
                    @endif
                </td>
                
                <td>{{ $gv -> sdt }}</td>
                <td>{{ $gv->mon_hoc }}</td>
                <td>{{ $gv->nguoidung ->ten_dang_nhap }}</td>
                <td>{{ $gv->nguoiDung ->mat_khau }}</td>
                <td>
                    @if ($gv -> trang_thai == 1)
                        {{ 'Dang day' }}
                    @else
                        {{ 'Da nghi' }}
                    @endif
                </td>
                <td>
                    <a href="{{ url('/update-giao-vien',['id' => $gv ->id]) }}">
                        <span class="badge text-bg-warning">Sua</span>
                    </a>
                    
                    <a href="{{ url('/giao-vien/xoa',['id'=> $gv ->id]) }}">
                        <span class="badge text-bg-danger">Xoa</span>
                    </a>
                </td>
              </tr>
            @endforeach
          
        </tbody>
      </table>
</body>
</html>