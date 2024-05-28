<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @if(isset($shutters))
        @foreach ($shutters as $shutter)
            <url>

                <loc>{{ route('specific-shutter', ['slug' => Str::slug($shutter->name)]) }}"</loc>
                <lastmod>{{ $shutter->created_at->tz("GST")->toAtomString() }}</lastmod>
                <changefreq>daily</changefreq>
                <priority>0.8</priority>
            </url>
        @endforeach
    @endif
</urlset>
