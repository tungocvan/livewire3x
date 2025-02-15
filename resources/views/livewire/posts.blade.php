<div class="container mt-2">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card">

                <div class="card-header">

                    <h2>Laravel Livewire CRUD - ItSolutionStuff.com</h2>

                </div>

                <div class="card-body">

                    @if (session()->has('message'))
                        <div class="alert alert-success">

                            {{ session('message') }}

                        </div>
                    @endif

                    @if ($updateMode)
                        @include('livewire.update')
                    @else
                        @include('livewire.create')
                    @endif
                    <table class="table table-bordered mt-5">

                        <thead>

                            <tr>

                                <th>No.</th>

                                <th>Title</th>

                                <th>Body</th>

                                <th width="150px">Action</th>

                            </tr>

                        </thead>

                        <tbody>

                            @foreach ($posts as $post)
                                <tr>

                                    <td>{{ $post->id }}</td>

                                    <td>{{ $post->title }}</td>

                                    <td>{{ $post->body }}</td>

                                    <td>

                                        <button wire:click="edit({{ $post->id }})"
                                            class="btn btn-primary btn-sm">Edit</button>

                                        <button wire:click="delete({{ $post->id }})"
                                            class="btn btn-danger btn-sm">Delete</button>

                                    </td>

                                </tr>
                            @endforeach

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

</div>
