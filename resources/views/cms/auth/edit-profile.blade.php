
@extends('cms.master')

@section('title',' الطلاب ')

@section('styles')

@endsection

@section('content')


@endsection
<script src="{{ asset('cms/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

@section('scripts')


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<script src="{{asset('cms/plugins/toastr/toastr.min.js')}}"></script>
<script src="{{asset('cms/js/crud.js')}}"></script>
<script>

$('.city_id').select2({
      theme: 'bootstrap4'
    })



    function performStore() {

        let formData = new FormData();

            formData.append('first_name',document.getElementById('first_name').value);
            formData.append('last_name',document.getElementById('last_name').value);
            formData.append('email',document.getElementById('email').value);
            formData.append('salary_value',document.getElementById('salary_value').value);
            formData.append('mobile',document.getElementById('mobile').value);
            formData.append('date_of_birth',document.getElementById('date_of_birth').value);
            formData.append('city_id',document.getElementById('city_id').value);
            formData.append('image',document.getElementById('image').files[0]);
            //var base_url = '{!! url(cms/auth//update/profile) !!}';

        store( ('{!! url(cms/auth//update/profile) !!}') ,formData);

    }

</script>


@endsection
