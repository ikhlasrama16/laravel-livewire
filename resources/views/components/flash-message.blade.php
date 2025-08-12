@if (flash()->message)

    <div class="alert alert-{{ flash()->class ?? 'success' }}">

        @if (flash()->class === 'warning' || flash()->class === 'danger')
            <i class="bi bi-exclamation-triangle-fill"></i>
        @endif
        @if (flash()->class === 'info')
            <i class="bi bi-exclamation-circle-fill"></i>
        @endif
        @if (flash()->class === 'success')
            <i class="bi bi-check-circle-fill"></i>
        @endif

        {{ flash()->message }}
    </div>
@endif
