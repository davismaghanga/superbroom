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
                    <h3 class="card-title">Messages</h3>
                    <table id="testimonialtable" class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Client Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($messages as $msg)
                            <tr>
                                <td>{{$msg->full_name}}</td>
                                <td>{{$msg->email}}</td>
                                <td>{{$msg->message_body}}</td>
                                <td>
                                    <a style="cursor: pointer" onclick="deleteMessage({{$msg->id}})">
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
        function deleteMessage(id) {
            const messageSwal = Swal.mixin({
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
                    axios.post("{{url('message/delete')}}" + '/'+id)
                        .then(response=>{
                            messageSwal.fire(
                                'Deleted!',
                                'This record has been deleted.',
                                'success'
                            )
                        })
                        .catch(error=>{
                            messageSwal.fire(
                                'An error Occurred',
                                'Try Again.'
                            )
                        })
                }
            })

        }
    </script>
@endsection
