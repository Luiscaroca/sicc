<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
        <img class="img-thumbnail" src="{{ asset('img/cclogo.png') }}" />
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
