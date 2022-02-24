@extends('layouts.main')

@section('title', 'SmartHome')

@section('content')
    <div class="board-column">
        <div class="board-row">
            <section class="board-body">
                <div class="board-header">
                    <h2 class="h6">Camera</h2>
                    <div class="camera">
                        <button class="camera-room active">C1</button>
                        <button class="camera-room">C2</button>
                        <button class="camera-room">C3</button>
                        <button class="camera-room">C4</button>
                    </div>
                    <button class="btn">Details</button>
                </div>
                <div class="camera-view">
                    <div class="camera-view-header board-header">
                        <div class="datetime-camera">
                            <div class="date">
                                24/02/2022
                            </div>
                            <div class="time">
                                11:46
                            </div>
                        </div>
                        <div class="camera-recording board-header">
                            <div class="circ circ-1">
                                <div class="circ circ-2">
                                    <div class="circ circ-3">
                                    </div>
                                </div>
                            </div>
                            Recording
                        </div>
                    </div>
                    <img src="/asset/img/room.svg" alt="Sample camera view" class="camera-video">
                </div>
            </section>

            <div class="board-column">
                <div class="board-body">
                    <div class="board-header">
                        <h2 class="h6">Consumo por quarto</h2>
                        <button class="btn">Details</button>
                    </div>
                    dd
                </div>

                <div class="board-row">
                    <div class="board-body">
                        <div class="board-header">
                            <h2 class="h6">Consumo por dia</h2>
                            <button class="btn">Details</button>
                        </div>
                        ss
                    </div>

                    <div class="board-body">
                        <div class="board-header">
                            <h2 class="h6">Limite de dispositivos</h2>
                            <button class="btn">Details</button>
                        </div>
                        <div class="limit-device">
                            <div class="limit-device-chart">
                                {{--Chart--}}
                                <div class="limit-chart">
                                </div>
                                <div class="limit-chart">
                                </div>
                                <div class="limit-chart">
                                </div>
                                <div class="limit-chart">
                                </div>
                                {{--EndChart--}}

                                <div class="limit-device-count">
                                    10
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn">Ver Mais</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="board-row">
            <section class="board-body" style="width: 100%;">
                <div class="board-header">
                    <h2 class="h6">Estatus por Unidade</h2>
                    <button class="btn">Details</button>
                </div>
                <button class="btn">See</button>
            </section>
        </div>
    </div>
@endsection

@section('quick-acess')
    <div class="main-quick-acess">
        quick acess
    </div>
@endsection