<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHRSL - Centre Hospitalier Régional de Saint-Laurent</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <header class="bg-blue-600 text-white p-6">
        <h1 class="text-3xl font-bold">Centre Hospitalier Régional de Saint-Laurent</h1>
    </header>
    <main class="container mx-auto p-6">
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Présentation</h2>
            <p>Le Centre Hospitalier Régional de Saint-Laurent (CHRSL) est un établissement de santé public situé dans le sud de la France...</p>
        </section>
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Infrastructure</h2>
            <ul class="list-disc list-inside">
                <li>1 100 lits répartis sur 5 pôles médicaux</li>
                <li>Un plateau technique de pointe (IRM, scanner, blocs opératoires connectés)</li>
                <li>Un centre de formation et de recherche en télémédecine</li>
            </ul>
        </section>
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Statistiques</h2>
            <?php include 'data.php'; ?>
        </section>
    </main>
    <footer class="bg-blue-600 text-white p-4 text-center">
        <p>&copy; 2023 CHRSL. Tous droits réservés.</p>
    </footer>
</body>
</html>
