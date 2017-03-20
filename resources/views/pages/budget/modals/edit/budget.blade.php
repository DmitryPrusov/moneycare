<div id="editbudgets" class="modal fade editmodalwindow" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            {!! Form::open(['method' => 'patch', 'action' => ['BudgetController@update', $budget->id], 'class' => 'form-horizontal' ]) !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Редактировать бюджет</h4>
            </div>
            <div class="modal-body">
                @include('pages.budget.forms.edit.budget')

            </div>
            <div class="modal-footer">
                <a href="#" id="" class="btn btn-cyan submitbutton"><i class="fa fa-flash">{{$submitTextButton}}</i>  </a>
                {!! Form::close() !!}
                {{--<div class="success margin-top-20">--}}
                {{--@include('errors.errors')--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
</div>