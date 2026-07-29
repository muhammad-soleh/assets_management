<div class="card card-primary card-outline mb-4">
    <div class="card-header">
        <div class="card-title">@yield('title_form') Departments</div>
    </div>

    <div class="card-body">
        <div class="mb-3">
            <label for="name" class="form-label">Department Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror"
                value="{{ old('name', $department->name ?? '') }}" id="name" name="name">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" placeholder="Add description here" style="height: 6rem"
                name="description">{{ old('description', $department->description ?? '') }}</textarea>
        </div>


    </div>

</div>
<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
