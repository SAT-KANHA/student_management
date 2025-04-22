<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="card mt-4">
    <div class="card-body">
        <h5 class="card-title text-center">EDIT CLASS</h5>

        <form class="row g-3" action="{{ url('/update-class/'. $class->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="col-md-12">
                <label for="class_name" class="form-label">Class Name</label>
                <input type="text" name="class_name" class="form-control" id="class_name" value="{{ $class->class_name }}">
            </div>

            <div class="col-md-12">
                <label for="class_decription" class="form-label">Class Description</label>
                <input type="text" class="form-control" name="class_decription" id="class_decription" value="{{ $class->decription }}">
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
