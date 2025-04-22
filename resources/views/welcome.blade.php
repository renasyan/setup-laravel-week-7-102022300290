<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Anime</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Signika+Negative:wght@500&display=swap');
        body {
            background-image: url('https://images2.alphacoders.com/137/thumb-1920-1377510.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .anime-title {
            font-family: 'Signika Negative', sans-serif;
        }
        .anime-header {
            font-family: 'Press Start 2P', cursive;
        }
        .blur-bg {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(6px);
        }
    </style>
</head>
<body class="text-gray-800 font-sans">
    <div class="max-w-6xl mx-auto px-4 py-8">
        <h1 class="text-4xl text-pink-600 anime-header mb-6 text-center">ANIME LIST</h1>

        <div class="overflow-x-auto shadow-xl rounded-xl blur-bg p-6">
            <table class="min-w-full text-sm table-auto border-collapse">
                <thead class="text-white bg-gradient-to-r from-red-500 to-purple-500">
                    <tr>
                        <th class="py-3 px-4 text-left">Judul</th>
                        <th class="py-3 px-4 text-left">Genre</th>
                        <th class="py-3 px-4 text-left">Rating</th>
                        <th class="py-3 px-4 text-left">Episode</th>
                        <th class="py-3 px-4 text-left">Status</th>
                    </tr>
                </thead>
                <tbody class="text-gray-900 anime-title">
                    @foreach ($animeList as $anime)
                        <tr class="border-b border-pink-300 hover:bg-pink-50 transition-all">
                            <td class="py-2 px-4">{{ $anime->judul }}</td>
                            <td class="py-2 px-4">{{ $anime->genre }}</td>
                            <td class="py-2 px-4">{{ $anime->rating }}</td>
                            <td class="py-2 px-4">{{ $anime->episode }}</td>
                            <td class="py-2 px-4">{{ $anime->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <p class="text-center mt-6 text-xs text-white anime-title">Anime list by Renasya Cahya Handayani</p>
    </div>
</body>
</html>
