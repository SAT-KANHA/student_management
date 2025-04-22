<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="card mt-4">
  <div class="card-body">
    <h5 class="card-title text-center">LIST STUDENTS</h5>

    <div class="mb-3 text-end">
      <a href="{{ url('/create-student') }}" class="btn btn-success">Create New</a>
    </div>

    <table class="table table-striped table-hover">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Student Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Class</th>
          <th>Created At</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($students as $student)
          <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->student_name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phone }}</td>
            <td>{{ $student->class->class_name ?? 'N/A' }}</td>

            <td>{{ $student->created_at }}</td>
            <td>
              <a href="{{ url('/edit-student/' . $student->id) }}" class="btn btn-primary btn-sm">Edit</a>

              <form action="{{ url('/delete-student/' . $student->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure to delete this student?');">
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
</div>
