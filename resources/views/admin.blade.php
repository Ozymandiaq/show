@extends('layouts.app')


@section('content')
<div class="adminTitle margin_bottom_1_5em">
    <a href="index.php">
        <img src="{{ asset('img/logo.png') }}" class = "adminLogo">
    </a>
    <h1>Административная панель</h1>
</div>
<div class="adminText margin_bottom_1_5em">
    Выберите блок, который хотите редактировать:
</div>

<div class="adminWrap margin_bottom_1_5em">
    <div class="adminWrap_menu">
        <div class="adminWrap_menuItem">
            <a class="paddingLeft_1em" href="{{ route('content_for_services.index') }}">Оборудование и команда</a>
        </div>

        <div class="adminWrap_menuItem">
            <a class="paddingLeft_1em" href="{{ route('events.index') }}">Мероприятия</a>
        </div>
    </div>

</div>
@endsection
