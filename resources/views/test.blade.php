@extends('layouts.app')
@section('title')
 قائمة الحسابات   
@stop
@section('css')
@section('Sidebar')
@include('HomePage.Sidebar')
@endsection
@section('buttons')


@endsection

@endsection

@section('content')

				<!-- row -->
				<div class="row">
					
					

				
		
	
		
						<!--/div-->
	
						<!--div-->
						
						<!--/div-->
	
						<!--div-->
						<div class="col-xl-12">
							<div class="card mg-b-20">
								<div class="card-header pb-0">
									<div class="row row-xs wd-xl-400p">
										<div class="col-sm-6 col-md-3"><button class="btn btn-primary btn-with-icon btn-block" data-toggle="modal" data-target="#exampleModal"> اضافة بطاقة</button></div>
									
									</div>
									
								</div>
								<div class="card-body">
									
								</div>
							</div>
						</div>
						<!--/div-->

					</div>
					<!-- Basic modal -->
		<div class="modal fade bs-example-modal-center" id="exampleModal">
			<div class="modal-dialog" role="document">
				<div class="modal-content modal-content-demo">
					<div class="modal-header">
						<h6 class="modal-title">إضافة بطاقة</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<form action="{{ route('store-sale') }}" method="post">
							{{ csrf_field() }}
						
					<div class="form_group">
						<label for="exampleInputEmail">اسم صاحب البطاقة</label>
						<input type="text" class="form-control" id="name" name="name" required>
					</div>
					
					<div class="form_group">
						<label for="exampleInputEmail">القيمة الحالية</label>
						<input type="number" class="form-control" id="val_now" name="val_now" required >
					</div>
                    <div class="form_group">
						<label for="exampleInputEmail">الرقم التسلسلي</label>
						<input type="text" class="form-control" id="serial" name="serial" required >
					</div>
				
					<div class="modal-footer">
						<button type="submit" class="btn btn-success">تاكيد</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
					</div>
				</form>
				</div>
			</div>
		</div>
		<!-- End Basic modal -->
	</div>
	<!-- edit -->
	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		 aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">تعديل بيانات البطاقة</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<form action="cardd/update" method="post" autocomplete="off">
						{{method_field('patch')}}
						{{csrf_field()}}
						<div class="form-group">
							<input type="hidden" name="id" id="id" value="">
                            
							<label for="recipient-name" class="col-form-label">اسم صاحب البطاقة</label>
							<input class="form-control" name="name" id="name" type="text">

                            <label for="recipient-name" class="col-form-label">الرقم التسلسلي</label>
							<input class="form-control" name="serial" id="serial" type="text">
						</div>
						
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">تاكيد</button>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
				</div>
				</form>
			</div>
		</div>
	</div>
	 <!-- delete -->
	 <div class="modal" id="modaldemo9">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content modal-content-demo">
				<div class="modal-header">
					<h6 class="modal-title">حذف الحساب</h6><button aria-label="Close" class="close" data-dismiss="modal"
																   type="button"><span aria-hidden="true">&times;</span></button>
				</div>
				<form action="cardd/destroy" method="post">
					{{method_field('delete')}}
					{{csrf_field()}}
					<div class="modal-body">
						<p>هل انت متاكد من عملية الحذف ؟</p><br>
						<input type="hidden" name="id" id="id" value="">
						<input class="form-control" name="name" id="name" type="text" readonly>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
						<button type="submit" class="btn btn-danger">تاكيد</button>
					</div>
			</div>
			</form>
		</div>
	</div>
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')




@endsection