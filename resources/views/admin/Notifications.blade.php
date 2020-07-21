@extends('layouts.master')

@section('styles')

@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Notifications</div>
                <div class="card-body">
                    @forelse($notifications as $notification)
                        <div class="alert alert-success" role="alert">
                            [{{$notification->created_at}}] <br>
                            Client Name: {{$notification->data['fullName']}} <br>
                            Client Message: {{$notification->data['message_body']}}
                            <a href="#" class="float-right mark-as-read" data-id="{{ $notification->id }}">
                                Mark as read
                            </a>
                        </div>
                        @if($loop->last)
                            <a href="#" id="mark-all">
                                Mark all as read
                            </a>
                        @endif
                        @empty
                        There are no new notifications
                    @endforelse
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        function sendMarkRequest(id =null){
            return $.ajax("{{url('mark-as-read')}}",{
                method:'POST',
                data:{
                    "_token": "{{ csrf_token() }}",
                    "id": id
                }
            });
        }

        $(function () {
            $('.mark-as-read').click(function() {
                let request = sendMarkRequest($(this).data('id'));
                request.done(() => {
                    $(this).parents('div.alert').remove();
                });
            });
            $('#mark-all').click(function() {
                let request = sendMarkRequest();
                request.done(() => {
                    $('div.alert').remove();
                })
            });
        });
    </script>
@endsection
