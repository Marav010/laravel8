<x-themequiz title="">
    <div class="container">
        <div class="row">
        
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create New Order</div>
                    <div class="card-body">
                        <a href="{{ url('/order') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        <form method="POST" action="{{ url('/order') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            @include ('order.form', ['formMode' => 'create'])

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-themequiz>
