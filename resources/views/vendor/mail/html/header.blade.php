@props(['url'])
<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
                <img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
            @else
                @if (Storage::disk('public')->exists('storage/logo-app.png'))
                    <img src="{{ asset('storage/logo-app.png') }}" class="logo" alt="Logo">
                @else
                    <img src="{{ asset('storage/logo.png') }}" class="logo" alt="Logo">
                @endif
            @endif
        </a>
    </td>
</tr>
