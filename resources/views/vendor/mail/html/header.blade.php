@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="jru-logo.png" class="logo" alt="Jose Rizal Univesity">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
