@if(!empty(session('success')))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

@if(!empty(session('error')))
    <div class="alert alert-danger" role="alert">
        {{ session('error') }}
    </div>
@endif

@if(!empty(session('payment-error')))
    <div class="alert alert-error" role="alert">
        {{ session('payment-error') }}
    </div>
@endif

@if(!empty(session('warning')))
    <div class="alert alert-warning" role="alert">
        {{ session('warning') }}
    </div>
@endif

@if(!empty(session('info')))
    <div class="alert alert-info" role="alert">
        {{ session('info') }}
    </div>
@endif

@if(!empty(session('secondary')))
    <div class="alert alert-secondary" role="alert">
        {{ session('secondary') }}
    </div>
@endif

@if(!empty(session('primary')))
    <div class="alert alert-primary" role="alert">
        {{ session('primary') }}
    </div>
@endif

@if(!empty(session('light')))
    <div class="alert alert-light" role="alert">
        {{ session('light') }}
    </div>
@endif

<script>
    document.addEventListener('DOMContentLoaded', function () {
        setTimeout(function () {
            let alerts = document.querySelectorAll('.alert');
            alerts.forEach(function (alert) {
                alert.style.transition = 'opacity 1s ease';
                alert.style.opacity = '0';
                setTimeout(function () {
                    alert.remove();
                }, 1000); // remove after transition
            });
        }, 3000); // 3 seconds before fading out
    });
</script>
