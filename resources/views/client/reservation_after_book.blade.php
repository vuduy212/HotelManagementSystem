@extends('layouts.client')

@section('content')
    <div class="main_bg">
        <div class="wrap">
            <div class="main">
                <form method="POST" action="{{ route('client.book') }}">
                    @csrf
                    <div class="res_online">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <br>
                        <h4>basic information</h4>
                        <br>
                        <h3>Payment method</h3>
                        <div class="infor" style="display: flex">
                            <input name="category_id" type="hidden" value="{{ $room_category }}">
                            <select name="payment">
                                <option value="0">Cash
                                </option>
                                <option value="1">Bank Card
                                </option>
                            </select>
                        </div>
                        <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                            only five centuries, but also the leap into electronic typesetting, remaining essentially
                            unchanged.
                            It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                            passages,
                            and more recently with desktop publishing software like Aldus PageMaker including versions of
                            Lorem
                            Ipsum.</p>
                    </div>
                    <div class="span_of_2">
                        <div class="span2_of_1">
                            <h4>check-in:</h4>
                            <div class="book_date btm">
                                <input name="date_start" class="date" id="datepicker" type="text"
                                    value="{{ $checkin }}" onfocus="this.value = '';"
                                    onblur="if (this.value == '') {this.value = 'DD/MM/YY';}">
                                @error('date_start')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="sel_room">
                                <h4>Name</h4>
                                <input name="client_name" type="text" class="frm-field required">
                                @error('client_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="sel_room left">
                                <h4>ID_Card</h4>
                                <input name="ID_Card" type="text" class="frm-field required">
                                @error('ID_Card')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="span2_of_1">
                            <h4>check-out:</h4>
                            <div class="book_date btm">
                                <input name="date_finish" class="date" id="datepicker1" type="text"
                                    value="{{ $checkout }}" onfocus="this.value = '';"
                                    onblur="if (this.value == '') {this.value = 'DD/MM/YY';}">
                                @error('date_finish')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="sel_room">
                                <h4>Phone</h4>
                                <input name="phone" type="text" class="frm-field required">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="sel_room left">
                                <h4>Email</h4>
                                <input name="email" type="text" class="frm-field required">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="res_btn">
                        <button type="submit" style="width: 280px;">Book now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
