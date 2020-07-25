@extends('layouts.master')
@section('styles')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{url('superbroom/admin/testimonial-form')}}" role="button" class="btn btn-primary">
                        <i class="fa fa-plus"></i>
                        New Testimonial
                    </a>
                </div>

                <div class="card-body">
                    <h3 class="card-title">Testimonials</h3>
                    <table id="testimonialtable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Client Name</th>
                            <th>Position</th>
                            <th>Location</th>
                            <th>Testimonial</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($testimonials as $test)
                            <tr>
                                <td>{{$test->client_name}}</td>
                                <td>{{$test->client_business_position}}</td>
                                <td>{{$test->client_business_location}}</td>
                                <td>{{$test->client_testimonial}}</td>
                                <td>
                                    <a href="{{url('testimonial/edit',$test->id)}}">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <a style="cursor: pointer" onclick="deleteTestimonial({{$test->id}})">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- DataTables -->
    <script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script>
        $(function () {
            $("#testimonialtable").DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        })
    </script>

    <script>
        function deleteTestimonial(id) {
            const testimonialSwal = Swal.mixin({
                onClose:function () {
                    window.location.reload();
                }
            });
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then(result=>{
                if(result.value){
                    axios.post("{{url('testimonial/delete')}}" + '/'+id)
                    .then(response=>{
                        testimonialSwal.fire(
                            'Deleted!',
                            'This record has been deleted.',
                            'success'
                        )
                    })
                    .catch(error=>{
                        testimonialSwal.fire(
                            'An error Occurred',
                            'Try Again.'
                        )
                    })
                }
            })

        }
    </script>
@endsection
