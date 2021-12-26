<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Phoenixgn')
<img src="https://dev.phoenixgn.com/phoenix_logo.png" class="logo" alt="Phoenixgn Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
