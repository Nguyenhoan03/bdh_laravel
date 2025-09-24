@props(['product'])

@if(isset($product))
    @php
        $jsonLd = [
            "@context" => "https://schema.org",
            "@type" => "Product",
            "name" => $product->name,
            "description" => strip_tags($product->description),
            "url" => $product->getCanonicalUrl(),
            "brand" => [
                "@type" => "Brand",
                "name" => "Daniel Wellington"
            ],
            "offers" => [
                "@type" => "Offer",
                "price" => $product->sale_price > 0 ? $product->sale_price : $product->price,
                "priceCurrency" => "VND",
                "availability" => $product->stock > 0
                    ? "https://schema.org/InStock"
                    : "https://schema.org/OutOfStock",
                "seller" => [
                    "@type" => "Organization",
                    "name" => "Daniel Wellington Vietnam"
                ]
            ]
        ];
    @endphp

    <script type="application/ld+json">
        {!! json_encode($jsonLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
@endif
