<?php

// app/Services/SeoService.php

namespace App\Services;

use Illuminate\Support\Facades\URL;

class SeoService
{
    public function getSchemaData()
    {
        $currentUrl = URL::current();

        $schemaData = [
            "@context" => "https://schema.org",
            "@graph" => [
                [
                    "@type" => ["Organization", "Place"],
                    "@id" => "https://rollingshutter.ae/",
                    "name" => "Your Business Name",
                    "url" => "https://rollingshutter.ae/",
                    "sameAs" => [
                        "https://www.facebook.com/yourbusiness/",
                        "https://www.instagram.com/yourbusiness/",
                        "https://www.linkedin.com/company/yourbusiness",
                        "https://www.youtube.com/channel/yourchannel",
                        "https://twitter.com/yourbusiness"
                    ],
                    "logo" => [
                        "@type" => "ImageObject",
                        "@id" => "https://rollingshutter.ae/#logo",
                        "inLanguage" => "en-US",
                        "url" => "https://rollingshutter.ae/images/logo.png",
                        "contentUrl" => "https://rollingshutter.ae/images/logo.png",
                        "width" => 514,
                        "height" => 514,
                        "caption" => "Your Business Name"
                    ],
                    "image" => [
                        "@id" => "https://rollingshutter.ae/#logo"
                    ],
                    "location" => [
                        "@id" => "https://rollingshutter.ae/#local-place"
                    ],
                    "address" => [
                        "@id" => "https://rollingshutter.ae/#local-place-address"
                    ],
                    "email" => "info@yourbusiness.com",
                    "telephone" => "04 321 4051"
                ],
                [
                    "@type" => "WebSite",
                    "@id" => "https://rollingshutter.ae/#website",
                    "url" => "https://rollingshutter.ae/",
                    "name" => "Your Business Name",
                    "description" => "Your business description",
                    "publisher" => [
                        "@id" => "https://rollingshutter.ae/#organization"
                    ],
                    "potentialAction" => [
                        [
                            "@type" => "SearchAction",
                            "target" => "https://rollingshutter.ae/?s={search_term_string}",
                            "query-input" => "required name=search_term_string"
                        ]
                    ],
                    "inLanguage" => "en-US"
                ],
                [
                    "@type" => ["WebPage", "ItemPage"],
                    "@id" => $currentUrl,
                    "url" => $currentUrl,
                    "name" => "Page Name | Your Business Name",
                    "isPartOf" => [
                        "@id" => "https://rollingshutter.ae/#website"
                    ],
                    "datePublished" => "2024-05-26T11:18:19+00:00",
                    "dateModified" => "2024-05-26T19:18:09+00:00",
                    "breadcrumb" => [
                        "@id" => "https://rollingshutter.ae/#breadcrumb"
                    ],
                    "inLanguage" => "en-US",
                    "potentialAction" => [
                        [
                            "@type" => "ReadAction",
                            "target" => [$currentUrl]
                        ]
                    ]
                ],
                [
                    "@type" => "BreadcrumbList",
                    "@id" => "https://rollingshutter.ae/#breadcrumb",
                    "itemListElement" => [
                        [
                            "@type" => "ListItem",
                            "position" => 1,
                            "item" => [
                                "@type" => "WebPage",
                                "@id" => "https://rollingshutter.ae/",
                                "url" => "https://rollingshutter.ae/",
                                "name" => "Home"
                            ]
                        ],
                        [
                            "@type" => "ListItem",
                            "position" => 2,
                            "item" => [
                                "@id" => $currentUrl
                            ]
                        ]
                    ]
                ],
                [
                    "@type" => "Place",
                    "@id" => "https://rollingshutter.ae/#local-place",
                    "address" => [
                        "@type" => "PostalAddress",
                        "@id" => "https://rollingshutter.ae/#local-place-address",
                        "streetAddress" => "123 Main Street",
                        "addressLocality" => "Anytown",
                        "postalCode" => "12345",
                        "addressRegion" => "Anystate",
                        "addressCountry" => "US"
                    ],
                    "geo" => [
                        "@type" => "GeoCoordinates",
                        "latitude" => "40.7128",
                        "longitude" => "-74.0060"
                    ],
                    "openingHoursSpecification" => [
                        [
                            "@type" => "OpeningHoursSpecification",
                            "dayOfWeek" => ["Monday", "Tuesday", "Wednesday", "Thursday", "Saturday", "Sunday"],
                            "opens" => "09:00",
                            "closes" => "18:00"
                        ],
                        [
                            "@type" => "OpeningHoursSpecification",
                            "dayOfWeek" => ["Friday"],
                            "opens" => "09:00",
                            "closes" => "17:00"
                        ]
                    ],
                    "telephone" => "04 321 4051"
                ]
            ]
        ];

        return json_encode($schemaData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }
}

?>
