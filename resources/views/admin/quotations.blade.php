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


                <div class="card-body">
                    <h3 class="card-title">Quotations</h3>
                    <table id="testimonialtable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Client Name</th>
                            <th>Phone Number</th>
                            <th>Location</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Mode of Advertisement</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($quotations as $quot)
                            <tr>
                                <td>{{$quot->full_name}}</td>
                                <td>{{$quot->phone_number}}</td>
                                <td>{{$quot->location}}</td>
                                <td>{{$quot->subject}}</td>
                                <td>{{$quot->message_body}}</td>
                                <td>{{$quot->advertisement}}</td>
                                <td>
                                    <a style="cursor: pointer" onclick="deleteQuotation({{$quot->id}})">
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
        function deleteQuotation(id) {
            const quotationSwal = Swal.mixin({
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
                    axios.post("{{url('quotation/delete')}}" + '/'+id)
                        .then(response=>{
                            quotationSwal.fire(
                                'Deleted!',
                                'This record has been deleted.',
                                'success'
                            )
                        })
                        .catch(error=>{
                            quotationSwal.fire(
                                'An error Occurred',
                                'Try Again.'
                            )
                        })
                }
            })

        }
    </script>
@endsection
