@extends('layouts.master')
@section('styles')
@endsection

@section('content')
    <div class="row">
        <div class="card mx-auto mt-5">
            <div class="card-header">
                <h3 class="card-title">New Testimonial</h3>
            </div>

            <form action="{{url('testimonial/post')}}" method="post">
                @csrf
                <div class="card-body">
                    <input type="hidden" name="id" value="{{old('id')}}">
                    <div class="form-group">
                        <label for="client_name">Client Name</label>
                        <input type="text" class="form-control" name="client_name" value="{{old('client_name')}}"  placeholder="Enter Client Name">
                    </div>
                    <div class="form-group">
                        <label for="client_business_position">Client Business Role/Position</label>
                        <input type="text" class="form-control" name="client_business_position" value="{{old('client_business_position')}}" placeholder="e.g Procurement Manager">
                    </div>
                    <div class="form-group">
                        <label for="client_business_location">Client Business Location</label>
                        <input type="text" class="form-control" name="client_business_location" value="{{old('client_business_location')}}" placeholder="e.g The University of Nairobi">
                    </div>

                    <div class="form-group">
                        <label for="client_testimonial">Client Testimony</label>
                        <textarea class="form-control"  name="client_testimonial" id="" cols="50" rows="10" placeholder="Superbroom Services are the best in the business">
                            {{old('client_testimonial')}}
                        </textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>



                </div>
            </form>
        </div>
    </div>
@endsection


@section('scripts')
@endsection
