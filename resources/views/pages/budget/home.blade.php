@extends ('partials.bodywithsidenav')

<div class="container">

    <div class="row text-left">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-top-70">
            <h2> Бюджеты <span class="small pull-right">{{$today}} | {{$currentTime}}</span></h2>
        </div>
    </div>

    <div class="row">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="pull-right">
                    <a href="#createbudgets" class="btm btn-sm btn-green" data-toggle="modal"> Создать новый бюджет</a>
                </div>
            </div>
        </div>




    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        @if (count($budgets))
            <div class="table-responsive">
                <table class="table table-hover table-condensed ">
                    <thead>
                    <tr class="text-capitalize roboto">
                        <th> id</th>
                        <th> Название</th>
                        <th> Сумма </th>
                        <th> Автор </th>
                        <th> Операции </th>
                        <th> Был Создан </th>
                        <th> Был Обновлен </th>
                        <th> Действия </th>
                    </tr>
                    </thead>
                    @foreach($budgets as $budget)
                        <tbody>
                        <tr>
                            <td>{{$budget->id}} </td>
                            <td>{{$budget->name}} </td>
                            <td>{{$budget->sum}} </td>
                            <td>{{$budget->user->name}} </td>
                            <td>{{count ($budget->operations()->get()) }} </td>
                            <td>{{$budget->created_at->diffForHumans()}} </td>
                            <td>{{$budget->updated_at->diffForHumans()}} </td>
                            <td class="col-sm-3">
                                <ul class="list-inline col-sm-12">
                                    <li class="col-sm-3">
                                        {!! Form::open(['method' => 'post', 'action' => ['BudgetController@edit', $budget->id], 'class' => 'form-horizontal']) !!}

                                        <a href="#editbudgets" class="edit btn btn-xs btn-white" data-toggle="modal">Редактировать</a>

                                        {{--<button id="#editbudgets" type="submit" class="edit btn btn-xs btn-white">{{"Редактировать" }}</button>--}}
                                        {{----}}

                                        {!! Form::close() !!}

                                    </li>

                                </ul>


                            </td>
                        </tr>
                        </tbody>
                        @endforeach
                </table>
            </div>
            @else
            <p> К сожалению, нет бюджетов, создайте новый </p>
        @endif
    </div>
    </div>
</div>

@include('pages.budget.modals.create.budget' ,['submitTextButton' => 'ADD'] )
@include('pages.budget.modals.edit.budget' ,['submitTextButton' => 'Update'] )


