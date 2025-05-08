<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<div class="card">
    <div class="card-body">
    <h5 class="card-title text-center">CREATE TEST</h5>
    <form class="row g-3" method="POST" action="{{ url('/store-class') }}">
        @csrf    
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">First Name</label>
                <input type="text" name="class_name" class="form-control" id="inputEmail4">
    
            </div>
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Mobile</label>
                <input type="text" class="form-control" name="class_decription" id="inputEmail4">
            </div>
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Password</label>
                <input type="text" class="form-control" name="class_decription" id="inputEmail4">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
    </div>
  </div>
