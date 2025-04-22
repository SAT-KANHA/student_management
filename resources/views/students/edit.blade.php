<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="card mt-4">
    <div class="card-body">
        <h5 class="card-title text-center">EDIT STUDENT</h5>

        <form class="row g-3" action="{{ url('/update-student/' . $student->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="col-md-12">
                <label for="class_name" class="form-label">Class Name</label>
                <select name="class_id" class="form-select" required>
                    <option value="">-- Select Class --</option>
                    @foreach ($classes as $class)
                        <option value="{{ $class->id }}" {{ $student->class_id == $class->id ? 'selected' : '' }}>
                            {{ $class->class_name }}
                        </option>
                    @endforeach
                </select>
                
                
            </div>

            <div class="col-md-12">
                <label for="student_name" class="form-label">Student Name</label>
                <input type="text" class="form-control" name="student_name" id="student_name" value="{{ $student->student_name }}">
            </div>

            <div class="col-md-12">
                <label for="student_phone" class="form-label">Phone</label>
                <input type="text" class="form-control" name="student_phone" id="student_phone" value="{{ $student->phone }}">
            </div>

            <div class="col-md-12">
                <label for="student_email" class="form-label">Email</label>
                <input type="email" class="form-control" name="student_email" id="student_email" value="{{ $student->email }}">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
