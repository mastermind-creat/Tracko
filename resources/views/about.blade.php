<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - ProjectTracko</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-50 dark:bg-gray-900">
    @include('layouts.navigation')
    <section class="max-w-3xl mx-auto py-12 px-4">
        <h1 class="text-3xl font-bold text-blue-700 dark:text-blue-300 mb-6">About ProjectTracko</h1>
        <div class="mb-8">
            <h2 class="text-xl font-semibold text-blue-600 mb-2">Our Mission</h2>
            <p class="text-gray-700 dark:text-gray-200">
                To promote transparency, accountability, and community engagement by providing up-to-date information on local development initiatives in Kisumu County.
            </p>
        </div>
        <div class="mb-8">
            <h2 class="text-xl font-semibold text-blue-600 mb-2">Our Vision</h2>
            <p class="text-gray-700 dark:text-gray-200">
                To empower citizens and stakeholders with accessible project data, fostering trust and collaboration for sustainable development.
            </p>
        </div>
        <div class="mb-8">
            <h2 class="text-xl font-semibold text-blue-600 mb-2">How It Works</h2>
            <ul class="list-disc pl-6 text-gray-700 dark:text-gray-200">
                <li>Browse ongoing and completed projects across various sectors.</li>
                <li>Search and filter projects by title, area, or sector.</li>
                <li>View project details, status, and locations on an interactive map.</li>
                <li>Share feedback and suggestions to help improve project outcomes.</li>
            </ul>
        </div>
        <div class="mb-8">
            <h2 class="text-xl font-semibold text-blue-600 mb-2">Our Team</h2>
            <p class="text-gray-700 dark:text-gray-200 mb-2">
                ProjectTracko is developed and maintained by a dedicated team of civic tech enthusiasts, developers, and local government partners committed to open governance and community-driven progress.
            </p>
            <ul class="list-disc pl-6 text-gray-700 dark:text-gray-200">
                <li>Project Lead: Jane Doe</li>
                <li>Lead Developer: John Smith</li>
                <li>Community Liaison: Mary Atieno</li>
                <li>GIS Specialist: Peter Otieno</li>
            </ul>
        </div>
    </section>
</body>
</html> 