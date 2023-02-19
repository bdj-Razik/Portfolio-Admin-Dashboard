<div wire:ignore.self>
    <!-- Nav Item - Messages -->
    <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <!-- Counter - Messages -->
            <span class="badge badge-danger badge-counter">{{ Auth()->user()->unreadNotifications->count() }}</span>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">
                Message Center
            </h6>

            @foreach ($unreadNotifications as $unreadNotification)
                <a class="dropdown-item d-flex align-items-center"
                    href="{{ route('message.show', ['messageID' => $unreadNotification->data['messagerie']['id']]) }}"
                    target="_blank">

                    <div class="font-weight-bold">
                        <div class="text-truncate">
                            {{ $unreadNotification->data['messagerie']['title'] }}</div>
                        <div class="small text-gray-500">
                            {{ $unreadNotification->data['messagerie']['name'] }}</div>
                    </div>
                </a>
            @endforeach

            <a class="dropdown-item text-center small text-gray-500" href="{{ route('message.index') }}">Read More
                Messages</a>
        </div>
    </li>
</div>
