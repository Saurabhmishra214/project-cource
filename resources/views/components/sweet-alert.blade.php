<button
    type="button"
    class="btn btn-primary btn-sm"
    id="{{ $buttonId }}"
>
    {{ $buttonText }}
</button>

<script>
    document.getElementById('{{ $buttonId }}').addEventListener('click', function() {
        Swal.fire({
            title: '{{ $title }}',
            text: '{{ $text }}',
            icon: '{{ $icon }}',
            showCancelButton: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Confirmed!',
                    'Your action has been confirmed.',
                    'success'
                )
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                Swal.fire(
                    'Cancelled',
                    'Your action has been cancelled.',
                    'error'
                )
            }
        });
    });
</script>