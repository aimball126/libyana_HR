@if ($errors->any())
@foreach ($errors->all() as $errorMessage)
<div class="alert alert-danger" role="alert" dir="rtl">
    <small><i class="mx-2 fa fa-exclamation-circle mr-2 "></i> {{$errorMessage}} </small>
</div>
@endforeach
@endif


@if (session()->has('success'))
@foreach ( session()->get('success') as $successMessage)
<div class="alert alert-success" role="alert" dir="rtl">
    <small><i class="mx-2 fa fa-check-circle mr-2 "></i> {{$successMessage}} </small>
</div>
@endforeach
@endif

@if (session()->has('error'))
<div class="alert alert-danger" role="alert" dir="rtl">
    <small><i class="mx-2 fa fa-check-circle mr-2 "></i> {{session()->get('error')}} </small>
</div>
@endif

@if (session()->has('warning'))
<div class="alert alert-warning" role="alert" dir="rtl">
    <small><i class="mx-2 fa fa-check-circle mr-2 "></i> {{session()->get('warning')}} </small>
</div>
@endif

@if (session()->has('done'))
<div class="alert alert-success" role="alert" dir="rtl">
    <small><i class="mx-2 fa fa-check-circle mr-2 "></i> {{session()->get('done')}} </small>
</div>
@endif
