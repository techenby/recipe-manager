<div class="fixed top-0 right-0 pt-6 pr-6 pointer-events-none z-100">
    @foreach($notifications as $notification)
    <x-bit.notification :notification="$notification" :key="$loop->index" />
    @endforeach
</div>
