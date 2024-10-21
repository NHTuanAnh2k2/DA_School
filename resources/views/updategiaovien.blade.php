<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Them</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <h1 class="d-flex justify-content-center mt-5 mb-5">CAP NHAT GIANG VIEN</h1>

    <form action="/update-giao-vien/{{ $gv->id }}" method="POST" style="margin: auto; width: 50%;">
        @csrf
        <div class="mb-3">
            <label class="form-label">Ho ten</label>
            <input type="text" name="ho_ten" value="{{ old('ho_ten', $gv->ho_ten) }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Ngay sinh</label>
            <input type="date" name="ngay_sinh" value="{{ old('ngay_sinh', $gv->ngay_sinh) }}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Gioi tinh</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gioi_tinh" value="1" {{ $gv ->gioi_tinh ==1 ? 'checked': '' }}>
                <label class="form-check-label" >
                  Nam
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gioi_tinh" value="0" {{ $gv ->gioi_tinh ==0 ? 'checked': '' }}>
                <label class="form-check-label">
                  Nu
                </label>
              </div>
        </div>
        <div class="mb-3">
            <label class="form-label">So dien thoai</label>
            <input type="text" name="sdt" value="{{ old('ngay_sinh', $gv->sdt )}}" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Mon hoc</label>
            <input type="text" name="mon_hoc" value="{{ old('ngay_sinh', $gv->mon_hoc) }}" class="form-control">
        </div>
        <div class="d-flex justify-content-center mt-5 mb-5">
            <button type="submit" class="btn btn-success">Cap nhat</button>
        </div>
        
    </form>
</body>
</html>