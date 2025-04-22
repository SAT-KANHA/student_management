<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<div class="card">
  <div class="card-body">
      <h5 class="card-title text-center">LIST CLASSES</h5>

      <div class="mb-3 text-end">
          <a href="{{ url('/create-class') }}" class="btn btn-success">Create New</a>
      </div>

      <table class="table table-success table-striped">
          <thead>
              <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Class name</th>
                  <th scope="col">Descripstion</th>
                  <th scope="col">Date</th>
                  <th scope="col">Action</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($listclass as $item)
                  <tr>
                      <th scope="row">{{ $item->id }}</th>
                      <td>{{ $item->class_name }}</td>
                      <td>{{ $item->decription }}</td>
                      <td>{{ $item->created_at }}</td>
                      <td>
                          <a href="{{ url('/edit-class/' . $item->id) }}" class="btn btn-primary">Edit</a>

                          <form action="{{ url('/delete-class/' . $item->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this class?');">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                          </form>
                      </td>
                  </tr>
              @endforeach
          </tbody>
      </table>
      
      <div class="col-12">
        <button class="btn btn-primary" onclick="window.location.href='{{ url('/create-class') }}'">
             Back
        </button>
      </div>
  </div>
</div>
