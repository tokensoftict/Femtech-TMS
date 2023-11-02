    <div class="row">
        <div class="col-lg-12 position-relative z-index-2">
            <div class="card card-plain mb-4">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="d-flex flex-column h-100">
                                <h2 class="font-weight-bolder mb-0 h4">System Users</h2>
                            </div>

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
                                    <th scope="col"></th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($users as $user)
                                <tr>
                                    <th scope="row">{{$user->id}}</th>
                                    <td>{{$user->full_name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->gender}}</td>
                                    <td>{{$user->city}}</td>
                                    <td>{{$user->status == 1 ? "Active" : "Inactive"}}</td>
                                    <td style="cursor: pointer"> <span class="text-success">View</span>  | <span class="text-warning">Edit</span>  | <span class="text-danger">Delete</span> </td>
                                </tr>
                                @empty
                                <div class="alert alert danger">
                                    No Under found, please add users
                                    <div>
                                        @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
