@extends('admin.layouts.app')

@section('admin-title', 'Detail Message')

@section('admin-content')

<div class="admin-messages-page">

    <div class="admin-messages-container">

        {{-- HEADER --}}
        <div class="admin-messages-header">

            <div>
                <h1>Detail Message</h1>
                <p>Melihat pesan yang dikirim melalui halaman Contact.</p>
            </div>

            <a
                href="{{ route('admin.messages') }}"
                class="admin-messages-back-btn"
            >
                <i class="fa-solid fa-arrow-left"></i>
                Kembali
            </a>

        </div>

        {{-- MESSAGE DETAIL --}}
        <div class="admin-message-detail">

            {{-- SENDER --}}
            <div class="admin-message-detail-header">

                <div class="admin-message-avatar">
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="admin-message-detail-sender">

                    <h2>
                        {{ $message->name }}
                    </h2>

                    <a href="mailto:{{ $message->email }}">
                        {{ $message->email }}
                    </a>

                </div>

            </div>

            {{-- META --}}
            <div class="admin-message-detail-meta">

                <div>
                    <span>Subject</span>

                    <strong>
                        {{ $message->subject ?: 'Tanpa subject' }}
                    </strong>
                </div>

                <div>
                    <span>Dikirim</span>

                    <strong>
                        {{ $message->created_at?->format('d M Y, H:i') ?? '-' }}
                    </strong>
                </div>

                <div>
                    <span>Status</span>

                    @if($message->is_read)

                        <strong class="read">
                            <i class="fa-solid fa-envelope-open"></i>
                            Sudah dibaca
                        </strong>

                    @else

                        <strong class="unread">
                            <i class="fa-solid fa-envelope"></i>
                            Belum dibaca
                        </strong>

                    @endif

                </div>

            </div>

            {{-- MESSAGE BODY --}}
            <div class="admin-message-detail-body">

                <div class="admin-message-detail-label">
                    Isi Pesan
                </div>

                <div class="admin-message-content">
                    {!! nl2br(e($message->message)) !!}
                </div>

            </div>

            {{-- ACTION --}}
            <div class="admin-message-detail-actions">

                <a
                    href="mailto:{{ $message->email }}?subject=Re: {{ $message->subject }}"
                    class="admin-message-reply-btn"
                >
                    <i class="fa-solid fa-reply"></i>
                    Balas via Email
                </a>

                <form
                    action="{{ route('admin.messages.destroy', $message) }}"
                    method="POST"
                    class="delete-message-form"
                >
                    @csrf
                    @method('DELETE')

                    <button
                        type="submit"
                        class="admin-message-delete-btn"
                    >
                        <i class="fa-solid fa-trash"></i>
                        Hapus Pesan
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection