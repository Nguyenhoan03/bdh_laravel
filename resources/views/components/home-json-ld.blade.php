@props(['jsonLd'])

@if(isset($jsonLd))
<script type="application/ld+json">
{!! json_encode($jsonLd, JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE) !!}
</script>
@endif
