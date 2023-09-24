@extends('layouts.admin')

@section('content')
    @if (session('status'))
        <div class="row mb-3">
            <div class="alert alert-success" role="alert" style="text-align: center;">
                {{ session('status') }}
            </div>
        </div>
    @endif
    @if($event)
    <div id="container">
        <div class="row mb-3">
            <div class="col">
                <h1 class="fs-4">Название события: {{ $event->title }}</h1>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <h2 class="fs-4">Текст события: {{ $event->text }}</h2>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <h2 class="fs-4">Дата создания: {{ $event->created_at->format('d.m.Y H:i:s') }}</h2>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <h1 class="fs-4">Участники</h1>
                @foreach($event->users as $user)
                    <p class="mb-2">
                        <a href="{{route('user.show', $user)}}">
                            {{$user->fullName}}
                        </a>
                    </p>
                @endforeach
                <p>
                    <a href="{{route('user.show', $event->user)}}">
                        {{$event->user->fullName}}
                    </a>
                </p>
                @if(!$event->users->contains(auth()->id()) && $event->user_id !== auth()->id())
                    <form action="{{route('join-event', $event)}}" method="POST">
                        @csrf
                        @method('put')
                        <button type="submit" class="btn btn-success mt-2">Присоединиться</button>
                    </form>
                @else
                    @if($event->user_id !== auth()->id() && $event->users->contains(auth()->id()))
                        <form action="{{route('leave-event', $event)}}" method="POST">
                            @csrf
                            @method('put')
                            <button type="submit" class="mt-4 btn btn-danger mt-2">Покинуть</button>
                        </form>
                    @else
                        <p class="mt-4" style="color: red">Вы создатель Event-a, по этому не можете покинуть</p>
                    @endif
                @endif
            </div>
        </div>
    </div>
    @endif

    <script>
        setTimeout(() => location.reload(), 30000)
    </script>
@endsection
