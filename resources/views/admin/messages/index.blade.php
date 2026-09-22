@extends('admin.layouts.app')

@section('admin-title', 'Messages')

@section('admin-content')

<div class="admin-messages-page">

    <div class="admin-messages-container">

        {{-- HEADER --}}
        <div class="admin-messages-header">

            <div>
                <h1>Messages</h1>
                <p>Kelola pesan yang dikirim melalui halaman Contact.</p>
            </div>

        </div>

        {{-- SUCCESS MESSAGE --}}
        @if(session('success'))
            <div class="admin-messages-alert success">
                <i class="fa-solid fa-circle-check"></i>
                {{ session('success') }}
            </div>
        @endif

        {{-- ERROR MESSAGE --}}
        @if($errors->any())
            <div class="admin-messages-alert error">

                <i class="fa-solid fa-circle-exclamation"></i>

                <div>
                    @foreach($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>

            </div>
        @endif

        {{-- TABLE --}}
        @if($messages->count())

            <div class="admin-messages-table-wrapper">

                <table class="admin-messages-table">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Status</th>
                            <th>Pengirim</th>
                            <th>Subject</th>
                            <th>Pesan</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($messages as $message)

                            <tr class="{{ !$message->is_read ? 'unread' : '' }}">

                                <td>
                                    {{ $loop->iteration }}
                                </td>

                                {{-- STATUS --}}
                                <td>

                                    @if($message->is_read)

                                        <span class="admin-message-status read">
                                            <i class="fa-solid fa-envelope-open"></i>
                                            Dibaca
                                        </span>

                                    @else

                                        <span class="admin-message-status unread">
                                            <i class="fa-solid fa-envelope"></i>
                                            Baru
                                        </span>

                                    @endif

                                </td>

                                {{-- SENDER --}}
                                <td>

                                    <div class="admin-message-sender">

                                        <strong>
                                            {{ $message->name }}
                                        </strong>

                                        <span>
                                            {{ $message->email }}
                                        </span>

                                    </div>

                                </td>

                                {{-- SUBJECT --}}
                                <td>
                                    {{ $message->subject ?: 'Tanpa subject' }}
                                </td>

                                {{-- MESSAGE --}}
                                <td>
                                    <div class="admin-message-preview">
                                        {{ Str::limit($message->message, 80) }}
                                    </div>
                                </td>

                                {{-- DATE --}}
                                <td>
                                   {{ $message->created_at?->format('d M Y, H:i') ?? '-' }}
                                </td>

                                {{-- ACTION --}}
                                <td>

                                    <div class="admin-message-actions">

                                        <a
                                            href="{{ route('admin.messages.show', $message) }}"
                                            class="admin-message-action-btn view"
                                            title="Lihat pesan"
                                        >
                                            <i class="fa-solid fa-eye"></i>
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
                                                class="admin-message-action-btn delete"
                                                title="Hapus"
                                            >
                                                <i class="fa-solid fa-trash"></i>
                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        @else

            <div class="admin-messages-empty">

                <div class="admin-messages-empty-icon">
                    <i class="fa-solid fa-envelope-open"></i>
                </div>

                <h3>Belum ada pesan</h3>

                <p>
                    Pesan dari halaman Contact akan muncul di sini.
                </p>

            </div>

        @endif

    </div>

</div>

@endsection