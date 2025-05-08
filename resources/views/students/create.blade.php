<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="card mt-4">
    <div class="card-body">
        <h5 class="card-title text-center">CREATE STUDENT</h5>

        <form class="row g-3" action="{{ url('/store-student') }}" method="POST">
            @csrf

            <div class="col-md-6">
                <label for="class_id" class="form-label">Student Class</label>
                <select name="class_id" class="form-select" required>
                    <option value="">Select Class</option>
                    @foreach ($classes as $class)
                        <option value="{{ $class->id }}">{{ $class->class_name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-6">
                <label for="student_name" class="form-label">Student Name</label>
                <input type="text" name="student_name" class="form-control" required>
            </div>

            <div class="col-md-6">
                <label for="student_phone" class="form-label">Phone</label>
                <input type="text" name="student_phone" class="form-control">
            </div>

            <div class="col-md-6">
                <label for="student_email" class="form-label">Email</label>
                <input type="email" name="student_email" class="form-control">
            </div>

            <div class="col-12 text-end">
                <button type="submit" class="btn btn-primary">Save</button>
                
        </form>
    </div>
</div>
