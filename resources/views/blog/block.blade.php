@if (is_array($block))
    @if (($block['type'] ?? null) === 'list')
        @if (!empty($block['heading']))
            <p class="list-heading">{{ $block['heading'] }}</p>
        @endif
        <ul class="things-list">
            @foreach ($block['items'] as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    @elseif (($block['type'] ?? null) === 'faq')
        <div class="faq-block">
            @foreach ($block['items'] as $qa)
                <details class="faq-item">
                    <summary>{{ $qa['q'] }}</summary>
                    <p>{{ $qa['a'] }}</p>
                </details>
            @endforeach
        </div>
    @endif
@else
    <p>{{ $block }}</p>
@endif