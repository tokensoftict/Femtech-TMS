<div class="row">
    <div class="col-lg-12 position-relative z-index-2">
        @include('components.notification')
        <div class="card card-plain mb-4">
            <div class="card-body p-3">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-flex flex-column h-100">
                            <h2 class="font-weight-bolder mb-0 h4">Manage Department</h2>
                        </div>
                    </div>

                    <div class="col-lg-6 text-end">
                        <div>
                            <div x-data="{ open: false }">
                                <button @click="open = !open" class="btn btn-info">Add Department</button>
                                <div x-show="open" class="custom-modal text-start">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <form wire:submit='save'>
                                                <div class="form-group">
                                                    <label for="department">Add Department</label>
                                                    <input type="text" class="form-control border border-2 p-1" placeholder="Department name" wire:model='department_name'>
                                                    <span class="text-danger">
                                                        @error('department_name')
                                                        {{ $message }}
                                                        @enderror
                                                    </span>
                                                </div>
                                                <div class="modal-footer">
                                                    <button @click="open = false" class="btn btn-danger mx-2" type="button">Close</button>
                                                    <button type="submit" class="btn btn-info">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div x-data="{ openEdit: false }">
            <button id="editDepartmentButton" @click="openEdit = true" style="display: none;" class="btn btn-info">Edit Department</button>
            <div x-show="openEdit" class="custom-modal text-start">
                <div class="modal-content">
                    <div class="modal-body">
                        <form wire:submit='updateDepartment'>
                            <div class="form-group">
                                <label for="department">Edit Department</label>
                                <input type="text" class="form-control border border-2 p-1" placeholder="Department name" wire:model='department_name'>
                                <span class="text-danger">
                                    @error('department_name')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="modal-footer">
                                <button @click="openEdit = false" class="btn btn-danger mx-2" type="button">Close</button>
                                <button type="submit" class="btn btn-info">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Department Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead >
                        <tbody>
                            @forelse($departments as $department)
                            <tr>
                                <th scope="row">{{$department->id}}</th>
                                <td>{{$department->department}}</td>
                                <td style="cursor: pointer">
                                    <span class="text-success" wire:click="editDepartment({{ $department->id }})" onclick="document.getElementById('editDepartmentButton').click();">Edit</span> |
                                    <span class="text-danger" wire:click="deleteDepartment({{ $department->id }})">Delete</span>
                                </td>
                            </tr>
                            @empty
                            <div class="alert text-danger text-center">
                                No Department found, please add Department
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <style>
        .custom-modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .modal-content {
            background: white;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            position: relative;
            z-index: 10000;
            width: 100%;
            max-width: 30%;
            margin: 0 auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size: 24px;
        }

        .modal-body {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 10px;
        }

        .inputField {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .button {
            background: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .button:hover {
            background: #0056b3;
        }

        @media (max-width: 767px) {
            .modal-content {
                max-width: 80%;
            }
        }

    </style>
</div>
