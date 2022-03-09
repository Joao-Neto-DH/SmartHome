@extends('layouts.main')

@section('title', 'SmartHome')

@section('content')
    {{-- Live da câmara --}}
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
                            Gravando
                        </div>
                    </div>
                    <img src="/asset/img/room.svg" alt="Sample camera view" class="camera-video">
                </div>
            </section>
            {{-- Gráficos --}}
            <div class="board-column">
                {{-- Gráfico de Consumo por quarto --}}
                <x-graphic-board title="Consumo por quarto">
                    <div class="consumo board-row">
                        <div class="consumo-compartimento">
                            <div class="chart-pane">
                                <div class="chart-bar"></div>
                                <div class="chart-bar"></div>
                                <div class="chart-bar"></div>
                                <div class="chart-bar"></div>
                                <div class="chart-bar"></div>
                            </div>
                            <div class="chart-value">
                                <span class="value">304.5</span>
                                <span class="unity">Watts</span>
                            </div>
                        </div>
                        <div class="consumo-compartimento-descricao">
                            <ul>
                                <li><span class="room">Sala de Estar</span><span class="percent">4.9%</span></li>
                                <li><span class="room">Estudio</span><span class="percent">6.1%</span></li>
                                <li><span class="room">Quarto do João</span><span class="percent">20%</span></li>
                                <li><span class="room">Garagem</span><span class="percent">27%</span></li>
                                <li><span class="room">Cozinha</span><span class="percent">42%</span></li>
                            </ul>
                        </div>
                    </div>
                </x-graphic-board>

                <div class="board-row">
                    {{-- Gráfico de Consumo por dia --}}
                    <x-graphic-board title="Consumo por dia">
                        <div class="consumo consumo-diario">
                            <div class="chart-pane">
                                <div class="consumo-chart">
                                    <span class="consumo-chart-bar"></span>
                                    <span class="consumo-chart-bar-text">Seg</span>
                                </div>
                                <div class="consumo-chart active">
                                    <span class="consumo-chart-bar"></span>
                                    <span class="consumo-chart-bar-text">Ter</span>
                                </div>
                                <div class="consumo-chart active">
                                    <span class="consumo-chart-bar"></span>
                                    <span class="consumo-chart-bar-text">Qua</span>
                                </div>
                                <div class="consumo-chart active">
                                    <span class="consumo-chart-bar"></span>
                                    <span class="consumo-chart-bar-text">Qui</span>
                                </div>
                                <div class="consumo-chart">
                                    <span class="consumo-chart-bar"></span>
                                    <span class="consumo-chart-bar-text">Sex</span>
                                </div>
                                <div class="consumo-chart active">
                                    <span class="consumo-chart-bar"></span>
                                    <span class="consumo-chart-bar-text">Sab</span>
                                </div>
                                <div class="consumo-chart">
                                    <span class="consumo-chart-bar"></span>
                                    <span class="consumo-chart-bar-text">Dom</span>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-see">Ver Mais</a>
                    </x-graphic-board>

                    {{-- Gráfico de Limite de dispositivos --}}
                    <x-graphic-board title="Limite de dispositivos">
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
                                    <div class="limit-device-count-value">
                                        10
                                    </div>
                                </div>
                                <div class="device-online">
                                    5
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-see">Ver Mais</a>
                    </x-graphic-board>
                </div>
            </div>
            {{-- Fim dos gráficos --}}
        </div>

        {{-- Estatos por unidade --}}
        <div class="board-row">
            <section class="board-body" style="width: 100%;">
                <div class="board-header">
                    <h2 class="h6">Estatus por Unidade</h2>
                    <button class="btn">Details</button>
                </div>
                <ul class="status-bar">
                    <x-status-bar place="Sala de Estar" value="745" unity="W" grow="&DownArrow;"/>
                    <li class="divider"></li>
                    <x-status-bar place="Fora" value="20.0" unity="ºC" grow="&UpArrow;"/>
                    <li class="divider"></li>
                    <x-status-bar place="Dentro" value="15.3" unity="ºC" grow="&UpArrow;"/>
                    <li class="divider"></li>
                    <x-status-bar place="Água" value="495" unity="CF" grow="&DownArrow;"/>
                    <li class="divider"></li>
                    <x-status-bar place="Internet" value="45.3" unity="MBPS" grow="&UpArrow;"/>
                </ul>
            </section>
        </div>
    </div>
@endsection

@section('quick-acess')
    <div class="separator">
        <button type="button" class="btn"></button>
    </div>
    <div class="main-quick">
        <div class="add-quick-acess">
            <button type="button" class="btn">+</button>
        </div>
        <div class="quick-acess">
            <x-acess-menu-item title="Outlet" img="/home-icon.svg" since="09 de Março de 2022"/>
        </div>
    </div>
@endsection