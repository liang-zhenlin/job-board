<nav class="mb-4">
    <ul>
        <li>
            <a href="/">Home</a>
        </li>

        @foreach ($links as $label => $link)
            <li>→</li>
            <li>
                <a href="{{ $link }}">
                    {{ $label }}
                </a>
            </li>
        @endforeach
    </ul>
</nav>
