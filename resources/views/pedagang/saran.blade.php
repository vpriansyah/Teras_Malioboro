@extends('pedagang.layouts.footer')
@include('pedagang.partials.navbar')
@section('content')
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <div class="container-fluid">
    <!-- Row -->
    <div class="row">
        <div class="col-xl-12 pa-0">
            <div class="faq-search-wrap bg-teal-light-3">
                <div class="container">
                    <h1 class="display-5 text-white mb-20">Halaman Saran dan Aduan.</h1>
                    <div class="form-group w-100 mb-0">
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <section class="msger">
        <div class="container justify-content-center">
            <div class="msg-header-img">
                <i class="fas fa-comment-alt"></i> Sipaling Teras
            </div>
            </header>

            <main class="msger-chat">
                <div class="msg left-msg">
                    <div class="msg-img"
                    style="background-image: url(https://image.flaticon.com/icons/svg/327/327779.svg)"></div>

                    <div class="msg-bubble">
                        <div class="msg-info">
                            <div class="msg-info-name">BOT</div>
                            <div class="msg-info-time">12:45</div>
                        </div>

                        <div class="msg-text">
                            Hai, selamat datang di Teras Malioboro! Apa yang bisa kami bantu? Silakan kirim pesan pada kami.
                            😄
                        </div>
                    </div>
                </div>

                <div class="msg right-msg">
                    <div class="msg-img"
                        style="background-image: url(https://image.flaticon.com/icons/svg/145/145867.svg)"></div>

                    <div class="msg-bubble">
                        <div class="msg-info">
                            <div class="msg-info-name">KANG BAKSO</div>
                            <div class="msg-info-time">12:46</div>
                        </div>

                        <div class="msg-text">
                            Apakah saya bla bla bla
                        </div>
                    </div>
                </div>
            </main>

            <form class="msger-inputarea">
                <input type="text" class="msger-input" placeholder="Enter your message...">
                <button type="submit" class="msger-send-btn">Send</button>
            </form>
    </section>
    <style>
        :root {
            --body-bg: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            --msger-bg: #fff;
            --border: 2px solid #ddd;
            --left-msg-bg: #ececec;
            --right-msg-bg: #579ffb;
        }

        html {
            box-sizing: border-box;
        }

        *,
        *:before,
        *:after {
            margin: 0;
            padding: 0;
            box-sizing: inherit;
        }

        body {
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: var(--body-bg);
            font-family: Helvetica, sans-serif;
        }

        .msger {
            flex-flow: column wrap;
            justify-content: space-between;
            width: 100%;
            max-width: 867px;
            margin: 25px 10px;
            height: calc(100% - 50px);
            border: var(--border);
            border-radius: 5px;
            background: var(--msger-bg);
            box-shadow: 0 15px 15px -5px rgba(0, 0, 0, 0.2);
        }

        .msger-header {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            border-bottom: var(--border);
            background: #eee;
            color: #666;
        }

        .msger-chat {
            flex: 1;
            overflow-y: auto;
            padding: 10px;
        }

        .msger-chat::-webkit-scrollbar {
            width: 6px;
        }

        .msger-chat::-webkit-scrollbar-track {
            background: #ddd;
        }

        .msger-chat::-webkit-scrollbar-thumb {
            background: #bdbdbd;
        }

        .msg {
            display: flex;
            align-items: flex-end;
            margin-bottom: 10px;
        }

        .msg:last-of-type {
            margin: 0;
        }

        .msg-img {
            width: 50px;
            height: 50px;
            margin-right: 10px;
            background: #ddd;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            border-radius: 50%;
        }

        .msg-bubble {
            max-width: 450px;
            padding: 15px;
            border-radius: 15px;
            background: var(--left-msg-bg);
        }

        .msg-info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .msg-info-name {
            margin-right: 10px;
            font-weight: bold;
        }

        .msg-info-time {
            font-size: 0.85em;
        }

        .left-msg .msg-bubble {
            border-bottom-left-radius: 0;
        }

        .right-msg {
            flex-direction: row-reverse;
        }

        .right-msg .msg-bubble {
            background: var(--right-msg-bg);
            color: #fff;
            border-bottom-right-radius: 0;
        }

        .right-msg .msg-img {
            margin: 0 0 0 10px;
        }

        .msger-inputarea {
            display: flex;
            padding: 10px;
            border-top: var(--border);
            background: #eee;
        }

        .msger-inputarea * {
            padding: 10px;
            border: none;
            border-radius: 3px;
            font-size: 1em;
        }

        .msger-input {
            flex: 1;
            background: #ddd;
        }

        .msger-send-btn {
            margin-left: 10px;
            background: rgb(0, 196, 65);
            color: #fff;
            font-weight: bold;
            cursor: pointer;
            transition: background 0.23s;
        }

        .msger-send-btn:hover {
            background: rgb(0, 180, 50);
        }

        .msger-chat {
            background-color: #fcfcfe;
        }
        body{
    background:#f5f5f6;
    margin-top:20px;
}
.faq-search-wrap {
    padding: 50px 0 60px;
}

.faq-search-wrap .form-group .form-control,
.faq-search-wrap .form-group .dd-handle {
    border-top-right-radius: .25rem;
    border-bottom-right-radius: .25rem;
}

.faq-search-wrap .form-group .input-group-append {
    position: absolute;
    right: 0;
    top: 0;
    bottom: 0;
    z-index: 10;
    pointer-events: none;
}

.faq-search-wrap .form-group .input-group-append .input-group-text {
    background: transparent;
    border: none;
}

.faq-search-wrap .form-group .input-group-append .input-group-text .feather-icon > svg {
    height: 18px;
    width: 18px;
}
.bg-teal-light-3 {
    background-color:#28a745 !important;
}

    </style>
   
@endsection
